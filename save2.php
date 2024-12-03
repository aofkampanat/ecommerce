<meta charset="UTF-8" />
<?php
function Upload_File ($filename,$folder,$width,$height){

    if(trim($_FILES["file"]["tmp_name"]) != "")
        {
            if($width==0 && $height==0){
            $images = $_FILES["file"]["tmp_name"];
            copy($images,$folder.$filename);
            }
            else {
            $images = $_FILES["file"]["tmp_name"];
            copy($images,$folder.$filename);
            $width=$width; //*** Fix Width & Heigh (Autu caculate) ***//
            $size=GetimageSize($images);
            $height=$height;
            $images_orig = ImageCreateFromJPEG($images);
            $photoX = ImagesX($images_orig);
            $photoY = ImagesY($images_orig);
            $images_fin = ImageCreateTrueColor($width, $height);
            ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
            ImageJPEG($images_fin,$folder.$filename);
            ImageDestroy($images_orig);
            ImageDestroy($images_fin);
            }
        }
    
    }
$file = strrchr($_FILES['file']['name'], "."); //ตัดนามสกุลไฟล์เก็บไว้
$filename = (Date("dmy_His").$file); //ตั้งเป็น วันที่_เวลา.นามสกุล
$folder = "img/"; // path folder
$width = 70;// ความกว้างของภาพ
$height = 50;// ความยาวของภาพ

Upload_File ($filename,$folder,$width,$height);
$newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
    $newDB = mysql_select_db("suphason");
    mysql_query ('SET NAMES UTF8');
            $new_Username = $_POST['m_username'];
            $new_Password = $_POST['Password'];
            $new_name = $_POST['name'];
            $new_address = $_POST['address'];
            $new_email = $_POST['email'];
            $new_phone = $_POST['phone'];
            $new_status = $_POST['status'];
 $new_file = (isset($_POST['file'])?$_POST['file'] : '');

$sql ="INSERT INTO user
(m_username,
Password,
name,
address,
email,
phone,
status,
file)          
VALUES
('$new_Username','$new_Password','$new_name','$new_address','$new_email','$new_phone','$new_status','$filename')";

$newQuery = mysql_query ($sql) or die (mysql_error());
mysql_close();

    if($newQuery){
            echo "<script type= 'text/javascript'>";
            echo "alert('กรอกข้อมูลสำเร็จ');";
            echo "window.location='login.php';";
            echo "</script>";
    }
    else{
        echo "<script type= 'text/javascript'>";
            echo "window.location='login.php';";
            echo "</script>";
    }