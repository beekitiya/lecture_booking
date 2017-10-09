<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ระบบจองคิวบรรยายออนไลน์</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#myTable').dataTable();
            });
        </script>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/logo.png" style="margin-top:-15px;height:60px;width:auto;"></a>
                </div> <!-- /navbar-header -->

                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a href="#"><button type="button" class="btn btn-logout">ออกจากระบบ</button></a>
                        </li>
                    </ul>
                </div>
            </div> <!-- /container -->
        </nav>

        <br/><br/><br/><br/><br/><br/>

        <!-- Lecture Date Table -->
        <div class="container">
          <div class="banner-table dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-8">
                    <table id="myTable" class="table table-bordered table-striped" role="grid" aria-describedby="example2_info">
                      <thead>
                            <tr>
                                <th style="font-size:14px;text-align:center;width:20%">วัน เดือน ปี</th>
                                <th style="font-size:14px;text-align:center;width:16%">13:30</th>
                                <th style="font-size:14px;text-align:center;width:16%">14:00</th>
                                <th style="font-size:14px;text-align:center;width:16%">14:30</th>
                                <th style="font-size:14px;text-align:center;width:16%">15:00</th>
                                <th style="font-size:14px;text-align:center;width:16%">15:30</th>
                            </tr>
                        </thead>
                      <tbody>
                        <?php foreach($list_date as $date){
                            echo "<tr>";
                                echo "<input type=\"hidden\" value=\"".$date['id_date']."\">";
                                echo '<td style="font-size:14px;text-align:center">'.$date['date'].'</td>'; ?>
                                <?php foreach($list_booking as $lb) { ?>
                                    <td><center>
                                        <?php if($date['id_date']==$lb['id_lecture_date'] && $lb['id_lecture_time']==1) { ?>
                                            <a class="editModal" data-id="<?php echo $date['id_date']; ?>" data-time="1"><button type="button" class="btn btn-danger btn-md">13:30</button></a>
                                        <?php } else { ?>
                                            <a class="myModal" data-id="<?php echo $date['id_date']; ?>" data-time="1"><button type="button" class="btn btn-success btn-md">13:30</button></a>
                                        <?php } ?>
                                    </center></td>
                                    <td><center>
                                        <?php if($date['id_date']==$lb['id_lecture_date'] && $lb['id_lecture_time']==2) { ?>
                                            <a class="editModal" data-id="<?php echo $date['id_date']; ?>" data-time="2"><button type="button" class="btn btn-danger btn-md">14:00</button></a>
                                        <?php } else { ?>
                                            <a class="myModal" data-id="<?php echo $date['id_date']; ?>" data-time="2"><button type="button" class="btn btn-success btn-md">14:00</button></a>
                                        <?php } ?>
                                    </center></td>
                                    <td><center>
                                        <?php if($date['id_date']==$lb['id_lecture_date'] && $lb['id_lecture_time']==3) { ?>
                                            <a class="editModal" data-id="<?php echo $date['id_date']; ?>" data-time="3"><button type="button" class="btn btn-danger btn-md">14:30</button></a>
                                        <?php } else { ?>
                                            <a class="myModal" data-id="<?php echo $date['id_date']; ?>" data-time="3"><button type="button" class="btn btn-success btn-md">14:30</button></a>
                                        <?php } ?>
                                    </center></td>
                                    <td><center>
                                        <?php if($date['id_date']==$lb['id_lecture_date'] && $lb['id_lecture_time']==4) { ?>
                                            <a class="editModal" data-id="<?php echo $date['id_date']; ?>" data-time="4"><button type="button" class="btn btn-danger btn-md">15:00</button></a>
                                        <?php } else { ?>
                                            <a class="myModal" data-id="<?php echo $date['id_date']; ?>" data-time="4"><button type="button" class="btn btn-success btn-md">15:00</button></a>
                                        <?php } ?>
                                    </center></td>
                                    <td><center>
                                        <?php if($date['id_date']==$lb['id_lecture_date'] && $lb['id_lecture_time']==5) { ?>
                                            <a class="editModal" data-id="<?php echo $date['id_date']; ?>" data-time="5"><button type="button" class="btn btn-danger btn-md">15:30</button></a>
                                        <?php } else { ?>
                                            <a class="myModal" data-id="<?php echo $date['id_date']; ?>" data-time="5"><button type="button" class="btn btn-success btn-md">15:30</button></a>
                                        <?php } ?>
                                    </center></td>
                                <?php } ?> <!-- foreach list_lecture_status -->
                            </tr>
                        <?php } ?> <!-- foreach list_date -->
                      </tbody>
                    </table>
                </div>
            </div>
          </div>

          <!-- Booking Modal -->
          <div class="modal fade" id="bookingModal" role="dialog">
            <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">เพิ่มข้อมูลการบรรยาย</h4>
                    </div>
                    <form action="<?php echo base_url();?>index.php/booking/save_booking" method="post" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <input type="hidden" name="id_date" id="id_date" value="">
                            <input type="hidden" name="time" id="time" value="">
                            <div class="form-group">
                                <label>หัวข้อบรรยาย<span style="color:red">*</span></label>
                                <input type="text" class="form-control" name="lecture_topic" required>
                            </div>
                            <div class="form-group">
                                <label>ผู้บรรยาย<span style="color:red">*</span></label>
                                <input type="text" class="form-control" name="lecturer" required>
                            </div>
                            <div class="form-group">
                                <label>เอกสารประกอบการบรรยาย</label>
                                <input type="file" class="form-control" name="lecture_file">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div><!--/.modal-footer-->
                    </form>
                </div>
            </div>
        </div><!-- Booking Modal -->

        <!-- Edit Modal -->
        <div class="modal fade" id="editBookingModal" role="dialog">
          <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">แก้ไขข้อมูลการบรรยาย</h4>
                  </div>
                  <form action="<?php echo base_url();?>index.php/booking/save_booking" method="post" enctype="multipart/form-data" >
                      <div class="modal-body">
                          <input type="hidden" name="id_date" id="id_date" value="">
                          <input type="hidden" name="time" id="time" value="">
                          <div class="form-group">
                              <label>หัวข้อบรรยาย<span style="color:red">*</span></label>
                              <input type="text" class="form-control" name="lecture_topic" id="lecture_topic" required>
                          </div>
                          <div class="form-group">
                              <label>ผู้บรรยาย<span style="color:red">*</span></label>
                              <input type="text" class="form-control" name="lecturer" id="lecturer" required>
                          </div>
                          <div class="form-group">
                              <label>เอกสารประกอบการบรรยาย</label>
                              <input type="file" class="form-control" name="lecture_file" id="lecture_file">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                          <button type="submit" class="btn btn-primary">บันทึก</button>
                      </div><!--/.modal-footer-->
                  </form>
              </div>
          </div>
        </div><!-- Edit Modal -->
        </div>

        <script>
            $('.myModal').click(function(){
                var id_date = $(this).attr('data-id');
                var time = $(this).attr('data-time');
                $("#id_date").val(id_date);
                $("#time").val(time);

                $('#bookingModal').modal('show');
            });

            $('.editModal').click(function(){
                var id_date = $(this).attr('data-id');
                var time = $(this).attr('data-time');
                var lecture_topic = $(this).attr('data-topic');
                var lecturer = $(this).attr('data-lecturer');
                var lecture_file = $(this).attr('data-file');
                $("#id_date").val(id_date);
                $("#time").val(time);
                $("#lecture_topic").val(lecture_topic);
                $("#lecturer").val(lecturer);
                $("#lecture_file").val(lecture_file);

                $('#editBookingModal').modal('show');
            });
        </script>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
