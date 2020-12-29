<?php
                            $session_user = $_SESSION['username'];
                            $query = "SELECT * FROM tbl_admin WHERE username = ?;";
                            $stmt = mysqli_stmt_init($conn);
                            ?>
                            <?php
                            if(!mysqli_stmt_prepare($stmt,$query))
                            {
                                echo "SQL statement failed" . mysqli_stmt_error($stmt);
                            }
                            else {
                            mysqli_stmt_bind_param($stmt,"s",$session_user);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            $fullname = '';
                            while($row = mysqli_fetch_array($result))
                            {

                                $fullname = $row['fullname'];
                                ?>
                                <!--  -->
                            <?php }
                        } ?>
                            <?php echo "$fullname"; ?>