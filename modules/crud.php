<?php
$ambil=$_GET['aksi'];
if($ambil=="tambah-user")
{
    $status = @$_POST['status'];
    $user 	= @$_POST['txtuser'];
    $email 	= @$_POST['txtemail'];
    $pass	= @$_POST['txtpass'];
    $nama	= @$_POST['txtnama'];
    $level	= @$_POST['txtlevel'];

    $tambah	= mysqli_query ($conn,"INSERT INTO user VALUES ('$nama','$email','$user','$pass','$level')")or die (mysqli_error());
		if ($tambah=true){
            echo"<script>alert('Add Data Successful');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-user"/>';
		}else {
			echo"<script>alert('Failed to Add Data');</script>";
		}
} 
else if($ambil=="edit-user")
{
    $status = @$_POST['status'];
    $user 	= @$_POST['txtuser'];
    $email 	= @$_POST['txtemail'];
    $pass	= @$_POST['txtpass'];
    $nama	= @$_POST['txtnama'];
    $level	= @$_POST['txtlevel'];

    $edit	= "UPDATE user SET Username='$user',Password='$pass',Email='$email', Nama='$nama',Level='$level'";
		$edit .="WHERE Username='$user'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
            echo"<script>alert('Update Data Successful');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-user"/>';

		}else {
			echo"<script>alert('Failed to Add Data');</script>";
		}
}
else if($ambil=="hapus-user")
{
    $status = @$_POST['status'];
    $user 	= @$_POST['txtuser'];
    $email 	= @$_POST['txtemail'];
    $pass	= @$_POST['txtpass'];
    $nama	= @$_POST['txtnama'];
    $level	= @$_POST['txtlevel'];

    $id =$_GET['username'];
	$tambah	= mysqli_query ($conn,"DELETE FROM user WHERE Username ='$id'")or die (mysql_error());
		if ($tambah=true){
            echo"<script>alert('Delete Data Successful');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-user"/>';
		}else {
			echo"<script>alert('Failed to Delete Data');</script>";
		}
    }

} else if($ambil=="tambah-aplikasi") //DONE
{
      $full_name=@$_POST['full_name'];
      $ic_no =@$_POST['ic_no'];
      $faculty =@$_POST['faculty'];
      $college =@$_POST['college'];
      $block =@$_POST['block'];
      $rm_type =@$_POST['rm_type'];
      $status  =@$_POST['status'];
      

    $tambah	= mysqli_query($conn,"INSERT INTO aplikasi VALUES ('','$full_name','$ic_no','$faculty','$college','$block','$rm_type','$status')") ;
     // $tambah1=mysqli_query ($conn,"INSERT INTO jurnal-aplikasi VALUES ('','$kodeakun','11','Pendapatan Jasa Pengiriman','$keterangan','$tanggal','$total','0')")or die (mysqli_error());
     // $tambah2=mysqli_query ($conn,"INSERT INTO jurnal-aplikasi VALUES ('','$kodeakun','41','Pendapatan Jasa Pengiriman','$keterangan','$tanggal','0','$total')")or die (mysqli_error());
      
    if ($tambah=true){
       echo"<script>alert('Successfully submit data');</script>";
       echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=app"/>';
    }else {
          echo"<script>alert('Failed to submit');</script>";
    }
} 

