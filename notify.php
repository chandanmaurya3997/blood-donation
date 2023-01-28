<?php

session_start();

    include 'connectdb.php';
    
    $empty = 0;
    $output = "";
    $mail = $_SESSION['username'];
    $sql = mysqli_query($conn, "SELECT * FROM request_table WHERE from_mail = '$mail' ");

    if (mysqli_num_rows($sql) == 0) {
        $empty++;
    }else{

        
        $sql = mysqli_query($conn, "SELECT * FROM request_table WHERE from_mail = '$mail' AND status = 'NR' ");
        
        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                $reqProfile = $row['to_mail'];
                $userSql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registeration WHERE mail = '$reqProfile' "));
                $username = $userSql['name'];
                $avtar = $userSql['gender'] == 'female' ? '<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <!-- female -->
                    <lord-icon
                    src="https://cdn.lordicon.com/svkiyocx.json"
                    trigger="hover"
                    colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                    state="hover-glance"
                    style="width:170px;height:170px">
                </lord-icon>' : '
                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                <!-- male -->
                    <lord-icon
                        src="https://cdn.lordicon.com/zthozvfn.json"
                        trigger="hover"
                        colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                        state="hover-glance"
                        style="width:170px;height:170px">
                    </lord-icon>';
                
                $output .= '
                <form action="notify.php" method="post">
                <div id="'.$reqProfile.'" class="reqProfile flex border-4 text-red-400 border-white rounded-3xl p-8">
                <div class="dp w-48 ml-10">
                '.$avtar.'
                <h2 class="text-center text-2xl mt-2">'.$username.'</h2>
                <input type="email" class="hidden" name="to_mail" id="" value="'.$reqProfile.'">
                </div>
                <div class="discrption px-10 flex justify-left items-center ml-8 w-2/4 text-lg">
                <p>'.$username.' Requested you to donate required blood</p>
                </div>
                <div class="choose flex justify-center items-center space-x-4 mx-4 ">
                    <button id="remove" name = "reject" onclick="disappear("'.$reqProfile.'")" onmouseover="borderred("'.$reqProfile.'")" onmouseleave="bordernone("'.$reqProfile.'")" class=" text-2xl px-10 border-2 text-red-400 border-red-500 rounded-2xl hover:text-white hover:bg-red-400 " >Reject</button>
                    <input type="submit" id="accept" onmouseleave="bordernone("'.$reqProfile.'")" onmouseover="bordergreen("'.$reqProfile.'")" onclick="accepted("'.$reqProfile.'")"  class=" text-2xl px-10 border-2 text-green-400 border-green-500 rounded-2xl hover:text-white hover:bg-green-400 " value="Accept">
                </div>
                </div>
                </form>
                ';
                }
            }
            echo $output;
            
            $output = " ";
            
            $sql = mysqli_query($conn, "SELECT * FROM request_table WHERE from_mail = '$mail' AND status = 'AP' ");
            
            if(mysqli_num_rows($sql) > 0){
                
                while($row = mysqli_fetch_assoc($sql)){
                    $reqProfile = $row['to_mail'];
                    $userSql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registeration WHERE mail = '$reqProfile' "));
                    $username = $userSql['name'];
                    $userMobile = $userSql['mobile'];
                    $gender = $userSql['gender'];
                    $avtar = $gender == 'female' ? '<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <!-- female -->
                       <lord-icon
                       src="https://cdn.lordicon.com/svkiyocx.json"
                       trigger="hover"
                       colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                       state="hover-glance"
                       style="width:170px;height:170px">
                   </lord-icon>' :'
                   <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                   <!-- male -->
                    <lord-icon
                        src="https://cdn.lordicon.com/zthozvfn.json"
                        trigger="hover"
                        colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                        state="hover-glance"
                        style="width:170px;height:170px">
                    </lord-icon>';
                    
                    $output .= '
                    <form action="notify.php" method="post">
                        <hr>
                        <div id="'.$reqProfile.'" class="reqProfile flex border-4 border-white text-red-400 rounded-3xl p-8">
                            <div class="dp w-48 ml-10">
                                '.$avtar.'
                                <h2 class="text-center text-2xl mt-2">'.$username.'</h2>
                                <input type="email" class="hidden" name="to_mail" id="" value="'.$reqProfile.'">
                            </div>
                            <div class="discrption px-10 flex justify-center items-center ml-8 w-2/4 text-lg">
                                <p>You have Approved request of '.$username.' <br>'.$username.' Mobile : '.$userMobile.'</p>
                            </div>
                        </div>
                    </form>
                    ';
                }
                echo $output;
                $output = " ";
            }
            
        }

    
        $sql = mysqli_query($conn, "SELECT * FROM request_table WHERE to_mail = '$mail' ");

        if (mysqli_num_rows($sql) != 0) {

            // request rejected 

        
            $sql = mysqli_query($conn, "SELECT * FROM request_table WHERE to_mail = '$mail' AND status = 'RJ' ");
            
            if(mysqli_num_rows($sql) > 0){
                while($row = mysqli_fetch_assoc($sql)){
                    $reqProfile = $row['from_mail'];
                    $userSql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registeration WHERE mail = '$reqProfile' "));
                    $username = $userSql['name'];
                    $avtar = $userSql['gender'] == 'female' ? '<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <!-- female -->
                        <lord-icon
                        src="https://cdn.lordicon.com/svkiyocx.json"
                        trigger="hover"
                        colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                        state="hover-glance"
                        style="width:170px;height:170px">
                    </lord-icon>' : '
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <!-- male -->
                        <lord-icon
                            src="https://cdn.lordicon.com/zthozvfn.json"
                            trigger="hover"
                            colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                            state="hover-glance"
                            style="width:170px;height:170px">
                        </lord-icon>';
                    
                    $output .= '
                    <hr><form action="notify.php" method="post">
                    <div id="'.$reqProfile.'" class="reqProfile flex border-4 text-red-400 border-white rounded-3xl p-8">
                    <div class="dp w-48 ml-10">
                        '.$avtar.'
                        <h2 class="text-center text-2xl mt-2">'.$username.'</h2>
                        <input type="email" class="hidden" name="to_mail" id="" value="'.$reqProfile.'">
                        </div>
                        <div class="discrption px-10 flex justify-left items-center ml-8 w-2/4 text-lg">
                            <p>'.$username.' has rejected your request for blood donation</p>
                        </div>
                   
                    </div>
                    </form>
                    ';
                    }
                }
                echo $output;
                $output = " ";

                // request approved 

                $sql = mysqli_query($conn, "SELECT * FROM request_table WHERE to_mail = '$mail' AND status = 'AP' ");
            
            if(mysqli_num_rows($sql) > 0){
                while($row = mysqli_fetch_assoc($sql)){
                    $reqProfile = $row['from_mail'];
                    $userSql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registeration WHERE mail = '$reqProfile' "));
                    $username = $userSql['name'];
                    $userMobile = $userSql['mobile'];
                    $avtar = $userSql['gender'] == 'female' ? '<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <!-- female -->
                        <lord-icon
                        src="https://cdn.lordicon.com/svkiyocx.json"
                        trigger="hover"
                        colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                        state="hover-glance"
                        style="width:170px;height:170px">
                    </lord-icon>' : '
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <!-- male -->
                        <lord-icon
                            src="https://cdn.lordicon.com/zthozvfn.json"
                            trigger="hover"
                            colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                            state="hover-glance"
                            style="width:170px;height:170px">
                        </lord-icon>';
                    
                    $output .= '
                    <hr><form action="notify.php" method="post">
                    <div id="'.$reqProfile.'" class="reqProfile flex border-4 text-red-400 border-white rounded-3xl  p-8">
                    <div class="dp w-48 ml-10">
                    '.$avtar.'
                    <h2 class="text-center text-2xl mt-2">'.$username.'</h2>
                    <input type="email" class="hidden" name="to_mail" id="" value="'.$reqProfile.'">
                    </div>
                    <div class="discrption px-10 flex justify-center items-center ml-8 w-2/4 text-lg">
                    <p>'.$username.' has approved your request for blood donation <br> '.$username.' Mobile No. = '.$userMobile.'</p> 
                    </div>
                    </div>
                    </form>
                    ';
                    }
                }
                echo $output;
                $output = " ";
        }else{
            if ($empty == 1) {
                echo'
                <div class="message text-4xl text-center font-bold my-10 ">
                    <h1 class="text-red-400">No notification</h1>
                    <lord-icon
                        src="https://cdn.lordicon.com/tyounuzx.json"
                        trigger="loop"
                        colors="primary:#c71f16,secondary:#545454"
                        style="width:150px;height:150px">
                    </lord-icon>
                </div>';
            }
        }
            
 ?>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $from_mail = $_SESSION['username'];
    $to_mail = $_POST['to_mail'];
    
    include 'connectdb.php';

    $sql =  "UPDATE `request_table` SET `status`='AP' WHERE `from_mail`='$from_mail' AND `to_mail`='$to_mail'";
    $check = mysqli_query($conn,$sql);

    header('location:./notification.php');
    
}
?>

<?php

if(isset($_POST['reject'])){

    $from_mail = $_SESSION['username'];
    $to_mail = $_POST['to_mail'];
    
    include 'connectdb.php';

    $sql =  "UPDATE `request_table` SET `status`='RJ' WHERE `from_mail`='$from_mail' AND `to_mail`='$to_mail'";
    $check = mysqli_query($conn,$sql);
    
    $sql = "UPDATE `patient_table` SET `hid`='N' WHERE mail='$mail'";
    mysqli_query($conn, $sql);
}
?>