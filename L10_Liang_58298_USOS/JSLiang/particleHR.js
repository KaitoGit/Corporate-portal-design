// 定义一个名为 particle 的对象，包含 init 方法用于初始化粒子动画
const particle = {
    init: function(e) {
        // 获取 canvas 元素并设置 2D 渲染上下文
        const canvas = document.getElementById(e),
              ctx = canvas.getContext("2d"),
              scale = 1; // 设置画布缩放比例

        // 设置 canvas 的宽度和高度为窗口的宽度和高度
        let width = canvas.width = window.innerWidth * scale,
            height = canvas.height = window.innerHeight * scale;

        // 定义粒子的最小和最大连接距离
        const minConnectDistance = .05 * width,
              maxConnectDistance = .1 * width;

        // 定义一个随机函数
        const random = (max = 1) => Math.random() * max,
              pi = Math.PI,
              twoPi = 2 * pi;

        let currentTime = new Date;

        // 定义一个插值函数
        const interpolate = (start, end, ratio) => (1 - ratio) * start + ratio * end;

        // 定义一个计算两点距离的函数
        const distance = (x1, y1, x2, y2) => {
            const dx = x1 - x2,
                  dy = y1 - y2;
            return Math.sqrt(dx * dx + dy * dy);
        };

        // 生成 400 个粒子，每个粒子具有随机位置、角度、速度等属性//这里可以更改粒子的数量
        const particles = new Array(400).fill({}).map(() => ({
            x: .5 * width + Math.cos(random(twoPi)) * random(.5 * width),
            y: .5 * height + Math.sin(random(twoPi)) * random(.5 * height),
            angle: random(twoPi),
            speed: random(.15),//这里更改速度
            normalSpeed: random(.15),//这里更改速度
            oscAmplitudeX: random(2),
            oscSpeedX: .001 + random(.008),
            oscAmplitudeY: random(2),
            oscSpeedY: .001 + random(.008),
            connectDistance: random(minConnectDistance),
            color: { r: 255, g: 255, b: 255 }//这里更改粒子颜色
        }));

        // 定义更新和绘制粒子的函数
        const updateAndDraw = () => {
            currentTime = new Date;
            particles.forEach(p => {
                // 更新粒子位置
                p.x += (Math.cos(p.angle) + Math.cos(currentTime * p.oscSpeedX) * p.oscAmplitudeX) * p.speed;
                p.y += (Math.sin(p.angle) + Math.cos(currentTime * p.oscSpeedY) * p.oscAmplitudeY) * p.speed;
                p.speed = interpolate(p.speed, p.normalSpeed * scale, .1);

                // 检测边界并改变粒子方向
                if (p.x > width || p.x < 0) p.angle = pi - p.angle;
                if (p.y > height || p.y < 0) p.angle = -p.angle;

                // 随机改变振幅和速度
                if (random() < .005) p.oscAmplitudeX = random(2);
                if (random() < .005) p.oscSpeedX = .001 + random(.008);
                if (random() < .005) p.oscAmplitudeY = random(2);
                if (random() < .005) p.oscSpeedY = .001 + random(.008);

                // 保持粒子在画布内
                p.x = Math.max(-.01, Math.min(p.x, width + .01));
                p.y = Math.max(-.01, Math.min(p.y, height + .01));
            });

            // 清除画布并绘制粒子
            ctx.clearRect(0, 0, width, height);
            particles.map(p => {
                // 寻找并连接距离较近的粒子
                particles.filter(other => p != other && !(distance(p.x, p.y, other.x, other.y) > p.connectDistance))
                         .map(other => {
                             const d = distance(p.x, p.y, other.x, other.y);
                             p.speed = interpolate(p.speed, p.speed + .05 / p.connectDistance * d, .2);
                             return {
                                 p1: p,
                                 p2: other,
                                 color: p.color,
                                 opacity: Math.floor(100 / p.connectDistance * (p.connectDistance - d)) / 100
                             };
                         })
                         .forEach((line, i) => {
                             // 绘制连接线
                             const opacityModulation = Math.sin(currentTime * line.p1.oscSpeedX);
                             ctx.beginPath();
                             ctx.globalAlpha = line.opacity;
                             ctx.moveTo(line.p1.x, line.p1.y);
                             ctx.lineTo(line.p2.x, line.p2.y);
                             ctx.strokeStyle = `rgb(
                                 ${Math.floor(line.color.r * opacityModulation)},
                                 ${Math.floor(.5 * line.color.g + .5 * line.color.g * opacityModulation)},
                                 ${line.color.b}
                             )`;
                             ctx.lineWidth = 4 * line.opacity;
                             ctx.stroke();
                             ctx.closePath();
                         });
            });

            // 请求下一帧动画
            window.requestAnimationFrame(updateAndDraw);
        };

        // 启动动画
        updateAndDraw();

        // 监听鼠标移动事件以影响粒子
        window.addEventListener("mousemove", event => {
            const mouseX = event.layerX * scale,
                  mouseY = event.layerY * scale;
            particles.forEach(p => {
                const d = distance(mouseX, mouseY, p.x, p.y);
                if (d < maxConnectDistance && d > 0) {
                    p.angle = ((sx, sy, ex, ey) => Math.atan2(ey - sy, ex - sx))(mouseX, mouseY, p.x, p.y);
                    const pushForce = .1 * (maxConnectDistance - d);
                    p.speed = interpolate(p.speed, pushForce, .2);
                }
            });
        });

        // 监听窗口大小变化事件以调整画布大小
        window.addEventListener("resize", event => {
            width = canvas.width = window.innerWidth * scale;
            height = canvas.height = window.innerHeight * scale;
        });
    }
};
