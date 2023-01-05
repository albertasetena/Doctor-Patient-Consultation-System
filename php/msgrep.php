                <?php
                session_start();
                  include("../incls/connection.php");  
                  if (isset($_POST['sender']))
                  {
                    $receptor=$_POST['uname'];
                    $status='UNREAD';
                    $message=$_POST['msg'];
                    $sql = "INSERT INTO message(sender,recipient,msg,status)VALUES('{$_SESSION['username']}','$receptor','$message','$status')";
                    $results = mysqli_query($conn,$sql);
                    echo"was Set";
                  ?>
                    <script type="text/javascript">
                        alert('Message Sent Successfully');
                        //window.location="consultant.php";
                    </script>

                <?php
                 }
                 else
                 {
                    echo"error";
                 }
                ?>  