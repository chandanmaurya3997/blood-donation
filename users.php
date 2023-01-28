<?php

    include 'connectdb.php';

    $output = "";
    $mail = $_SESSION['username'];
    $sql = mysqli_query($conn, "SELECT * FROM patient_table WHERE mail != '$mail' AND hid = 'N' ");

    if (mysqli_num_rows($sql)== 0 ) {
        echo'
                <div class="message text-4xl text-center font-bold my-10 ">
                    <h1 class="text-red-400">No Request Available</h1>
                    <lord-icon
                        src="https://cdn.lordicon.com/tyounuzx.json"
                        trigger="loop"
                        colors="primary:#c71f16,secondary:#545454"
                        style="width:150px;height:150px">
                    </lord-icon>
                </div>';
    }elseif(mysqli_num_rows($sql) > 0){
        
        while($row = mysqli_fetch_assoc($sql)){
            $reqProfile = $row['mail'];
            $userSql = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registeration WHERE mail = '$reqProfile' "));
            $username = $userSql['name'];
           

            $pname = $row['pname'];
            $blood = $row['blood'];
            $paddres = $row['paddres'];
            $pstate = $row['state'];
            $pdetails = $row['detail'];

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
            <form action="request.php" method="post">
                <div id="'.$reqProfile.'" class="reqProfile flex border-4 border-white rounded-3xl  p-8">
                    <div class="dp w-48 ml-10">
                        '.$avtar.'
                        <h2 class="text-center text-2xl mt-2">'.$username.'</h2>
                        <input type="email" class="hidden" name="from_mail" id="" value="'.$reqProfile.'">
                    </div>
                    <div class="discrption px-10 flex justify-left items-center ml-8 w-2/4 text-lg">
                        <ul >
                            <li> <i class="fa fa-heartbeat mr-5"></i> Name: '.$pname.' </li>
                            <li> <i class="fa fa-heartbeat mr-5"></i> Require blood: '.$blood.' </li>
                            <li> <i class="fa fa-heartbeat mr-5"></i> Address: '.$paddres.' </li>
                            <li> <i class="fa fa-heartbeat mr-5"></i> State: '.$pstate.' </li>
                            <li> <i class="fa fa-heartbeat mr-5"></i> Details: '.$pdetails.' </li>
                        </ul>
                    </div>
                    <div class="choose flex justify-center items-center space-x-4 mx-4 ">

                        <input type="submit" id="accept" onmouseleave="bordernone("'.$reqProfile.'")" onmouseover="bordergreen("'.$reqProfile.'")" onclick="accepted("'.$reqProfile.'")"  class=" text-2xl px-10 border-2 text-green-400 border-green-500 rounded-2xl hover:text-white hover:bg-green-400 " value="Accept">
                    </div>
                </div>
                <hr>
            </form>
                ';

        }
    }
    echo $output;

?>