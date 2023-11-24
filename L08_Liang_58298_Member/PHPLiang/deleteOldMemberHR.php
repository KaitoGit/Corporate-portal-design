                <?php
                $i=0;
                while ($i < $numHR) {
                    $rsHR->data_seek($i);
                    $row = $rsHR->fetch_assoc();
                    $option = "<option value=".$row["member_id"].">";
                    $option .= $row["name"].' - ';
                    $option .= $row["email"].' - ';
                    $option .= $row["join_date"];
                    $option .= "</option>";
                    echo $option;
                    $i++;
                }
                ?>