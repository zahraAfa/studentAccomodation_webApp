<?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}

?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="color: #87B1FD" class="m-0 font-weight-bold">STUDENT ACCOMODATION APPLICATION FORM</h6>
            </div>
            
           <div class="card-body">
            <div style="padding-bottom: 20px; text-align: right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Fill Form</button>
            </div>
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			  		
                    <thead>
                        <tr>
                            <th data-field="no" data-editable="true">No</th>
                            <th data-field="full_name" data-editable="true">Name</th>
                            <th data-field="ic_no" data-editable="true">I/C NO</th>
                            <th data-field="faculty" data-editable="true">Faculty</th>
                            <th data-field="college" data-editable="true">College</th>
                            <th data-field="block" data-editable="true">Block</th>
                            <th data-field="rm_type" data-editable="true">Room Type</th>
                            <th data-field="status" data-editable="true">Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        $query	= mysqli_query($conn,"SELECT * FROM aplikasi");
                            while ($hasil = mysqli_fetch_array($query)) 
                                
                            { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $hasil['full_name'];?></td>
                                <td><?php echo $hasil['ic_no'];?></td>
                                <td><?php echo $hasil['faculty'];?></td>
                                <td><?php echo $hasil['college'];?></td>
                                <td><?php echo $hasil['block'];?></td>
                                <td><?php echo $hasil['rm_type'];?></td>
                                <td><?php echo $hasil['status'];?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table> 
              </div>
            </div>
          </div>

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                           
                           
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    
                                    <h4 class="modal-title">Fill Form</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">

                                  <form action="index.php?pages=crud&aksi=tambah-aplikasi" method="POST" enctype="multipart/form-data">	
                                        <div class="form-group">
                                                <label class="control-label" for="">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">I/C NO</label>
                                                <input type="text" name="ic_no" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Faculty</label>
                                                <input type="text" name="faculty" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">College</label>
                                                <select class="form-control"id="college" name="college" >
                                                <option  value="">Choose</option>
												<option value="KRP">Kolej Rahman Putra</option>
                                                <option value="KTF">Kolej Tun Fatimah</option>
                                                <option value="KTR">Kolej Tun Razak</option>
                                                <option value="KTHO">Kolej Tun Hussein Onn</option>
                                                <option value="KTDI">Kolej Tun DR Ismail</option>
                                                <option value="KTC">Kolej Tunku Canselor</option>
                                                <option value="KP">Kolej Perdana</option>
                                                <option value="K9/10">Kolej 9/10</option>
                                                <option value="KTDI">Kolej Datin Seri Endon</option>
                                                <option value="KDOJ">Kolej Dato Onn Jaafar</option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label" for="">Block</label>
                                                <input type="text" name="block" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Room Type</label>
                                                <select class="form-control"id="rm_type" name="rm_type" >
                                                <option  value="">Choose</option>
												<option value="Single">Single</option>
                                                <option value="Double">Double</option>
												</select>
                                            </div>
                                            
                                            <div class="form-group">                                         
                                            <div class="modal-footer">
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success" name="tambah">submit</button>
                                                </div>
                                            </div>
                                            </form>
                                            
                                  </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        