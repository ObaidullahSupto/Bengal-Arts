


<?php
include('db.php');
$id=$_GET['id'];


 // $photo_name = $_FILES['img1']['name'];
        // $PDF_size = $_FILES['img1']['size'];
        // $PDF_tmp = $_FILES['img1']['tmp_name'];

      
            // $artphoto = '';
           
                // $PDF_ext = strtolower(end(explode(".", $photo_name)));
				// $ext_photo = array("jpg", "jpeg", "png", "gif", "bmp");
                // if (in_array($PDF_ext, $ext_photo)) {
                    // $newImageName = $idimg . '.' . $PDF_ext;
                    // $artphoto = $newImageName;
                    // $newIFleName = "../uploads/art_artist_home/" . $newImageName;
                    // @move_uploaded_file($PDF_tmp, $newIFleName);
                // }
				
				//	Images one
				
        $img1_name = $_FILES['img1']['name'];
        $img1_size = $_FILES['img1']['size'];
        $img1_tmp = $_FILES['img1']['tmp_name'];

      
            $img1 = '';
           
                $img1_ext = strtolower(end(explode(".", $img1_name)));
				$ext_img1 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img1_ext, $ext_img1)) {
                    $newimg1Name = $idimg . '1.' . $img1_ext;
                    $img1 = $newimg1Name;
                    $newimg1FleName = "../uploads/art_artist_home/" . $newimg1Name;
                    @move_uploaded_file($img1_tmp, $newimg1FleName);
                }
				
				
	//	Images two
        $img2_name = $_FILES['img2']['name'];
        $img2_size = $_FILES['img2']['size'];
        $img2_tmp = $_FILES['img2']['tmp_name'];

      
            $img2 = '';
           
                $img2_ext = strtolower(end(explode(".", $img2_name)));
				$ext_img2 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img2_ext, $ext_img2)) {
                    $newimg2Name = $idimg . '2.' . $img2_ext;
                    $img2 = $newimg2Name;
                    $newimg2FleName = "../uploads/art_artist_home/" . $newimg2Name;
                    @move_uploaded_file($img2_tmp, $newimg2FleName);
                }
				
				
	//	Images three
        $img3_name = $_FILES['img3']['name'];
        $img3_size = $_FILES['img3']['size'];
        $img3_tmp = $_FILES['img3']['tmp_name'];

      
            $img3 = '';
           
                $img3_ext = strtolower(end(explode(".", $img3_name)));
				$ext_img3 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img3_ext, $ext_img3)) {
                    $newimg3Name = $idimg . '3.' . $img3_ext;
                    $img3 = $newimg3Name;
                    $newimg3FleName = "../uploads/art_artist_home/" . $newimg3Name;
                    @move_uploaded_file($img3_tmp, $newimg3FleName);
                }
				
				
	//	Images 4 
        $img4_name = $_FILES['img4']['name'];
        $img4_size = $_FILES['img4']['size'];
        $img4_tmp = $_FILES['img4']['tmp_name'];

      
            $img4 = '';
           
                $img4_ext = strtolower(end(explode(".", $img4_name)));
				$ext_img4 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img4_ext, $ext_img4)) {
                    $newimg4Name = $idimg . '4.' . $img4_ext;
                    $img4 = $newimg4Name;
                    $newimg4FleName = "../uploads/art_artist_home/" . $newimg4Name;
                    @move_uploaded_file($img4_tmp, $newimg4FleName);
                }
				
				
	//	Images five
        $img5_name = $_FILES['img5']['name'];
        $img5_size = $_FILES['img5']['size'];
        $img5_tmp = $_FILES['img5']['tmp_name'];

      
            $img5 = '';
           
                $img5_ext = strtolower(end(explode(".", $img5_name)));
				$ext_img5 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img5_ext, $ext_img5)) {
                    $newimg5Name = $idimg . '5.' . $img5_ext;
                    $img5 = $newimg5Name;
                    $newimg5FleName = "../uploads/art_artist_home/" . $newimg5Name;
                    @move_uploaded_file($img5_tmp, $newimg5FleName);
                }
$editor=$_POST['editor'];

if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE artist_gallery_home SET img1 = '$img1',img2 = '$img2',img3 = '$img3',img4 = '$img4',img5 = '$img5' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=home_artartist'</script>";
	}
}

?>
