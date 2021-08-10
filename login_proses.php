<?php
	session_start();
	include 'config/koneksi.php';
	
	$user = @$_POST['username'];
	$pass = md5(@$_POST['password']);
	
	$query=mysqli_query($conn,"select * from user where usernames='$user' and passwords='$pass'");
	$jumlahdata =mysqli_num_rows($query);
	
	if ($jumlahdata == 0 ) {
		echo "<script>alert('username dan password tidak sesuai !');
				window.location.href='login.php';</script>";
	} else{
		$data= mysqli_fetch_array($query);
		// cek jika user login sebagai admin
		if($data['level']=="1"){
	 
			// buat session login dan username
			$_SESSION['username'] = $data['nama_user'];
			$_SESSION['level'] = "Manager";
			// alihkan ke halaman dashboard admin
				echo "<script>alert('Login Success !');
				</script>";
			header("location:index.php");
		
		// check if user is student
		}else if($data['level']=="2"){
			// buat session login dan username
			$_SESSION['username'] = $data['nama_user'];
			$_SESSION['level'] = "Student";
			// alihkan ke halaman dashboard student
			echo "<script>alert('Login Success !');
				</script>";
			header("location:index.php");
			
		}
		else if($data['level']=="3"){
			// buat session login dan username
			$_SESSION['username'] = $data['nama_user'];
			$_SESSION['level'] = "Admin";
			// alihkan ke halaman dashboard Owner
				echo "<script>alert('Login Succes !');
				</script>";
			header("location:index.php"); 
		}
		
	}
?>
<meta http-equiv="refresh" content="3,URL=index.php">