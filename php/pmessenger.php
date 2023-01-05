                    <?php
                     session_start();
                        include("../incls/connection.php");
                        if (isset($_POST['sender']))
                        {
                        $receptor=$_POST['uname'];
                        $status='UNREAD';
                        $message=$_POST['msg'];
                        $sql = "INSERT INTO message(sender,recipient,msg,status) VALUES ('{$_SESSION['username']}','$receptor','$message','$status')";
                        
                        $query=mysqli_query($conn,$sql);
                       
                        ?>
                        <script type="text/javascript">
                            alert('Your Message has been sent');
                            window.location=" ../index.php";
                            </script>

                        <?php
                        }
                        else
                        {
                            echo"Sorry";
                              
                        }

                    ?>