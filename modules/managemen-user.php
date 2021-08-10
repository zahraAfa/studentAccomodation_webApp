  <?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}
?>
      <!-- Static Table Start -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="color: #87B1FD" class="m-0 font-weight-bold text-primary">DATA USER</h6>
            </div>
            
           <div class="card-body">
            <div style="padding-bottom: 20px; text-align: right">
              <a href="index.php?pages=managemen-user-tambah" class="btn btn-success" role="button">Add Data</a>
            </div>
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <tr>
                      <th>No</th>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no = 1;
                        $query	= mysqli_query($conn,"SELECT * FROM user");
                            while ($hasil = mysqli_fetch_array($query)) 
                                
                            { ?>
                                
                        <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $hasil['nama_user'];?></td>
                        <td><?php echo $hasil['usernames'];?></td>
                        <td><?php if($hasil['level']=="1"){
                          echo "Manager";
                        }else if($hasil['level']=="2"){
                          echo "Student";
                        } else{
                          echo "Admin";
                        }
                        ?>
                        </td>
                        <td align="center">
                          <a class='btn btn-primary' href="index.php?pages=managemen-user-tambah&status=edit&usernames=<?php echo $hasil['usernames'];?>">Edit</a>
                          <a href='#' style='color:#fff;' class='btn btn-danger' onclick="if(confirm('Are You Sure You Want to Delete this Data ?')){window.location.href='index.php?pages=managemen-user-proses&status=delete&usernames=<?php echo $hasil['usernames'];?>'}">Delete</a>
                            </td>
                     </tr>                    
                  </tbody>              
                    <?php }?>
                </table>
                

              </div>
            </div>
          </div>
        