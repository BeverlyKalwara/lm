<?php

use yii\bootstrap\Modal;

/* @var $this yii\web\View */

$this->title = 'BEVERLY LMS';
?>
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Books</span>
              <span class="info-box-number">500</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Borrowed Books</span>
              <span class="info-box-number">300</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-book"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Overdue Books</span>
              <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Students</span>
              <span class="info-box-number">100</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
        	<div style="padding-top: 20px;">
        	   <button type="button" class="btn btn-block btn-success btn-lg assignbook" style="width: 300px;"><i class="fa fa-plus" aria-hidden="true"></i> Assign a Book</button>
            </div>
            <div style="text-align: center;">
                 <h2 class="box-title"><strong>BOOK ASSIGNMENTS</strong></h2>
            </div>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Student Name</th>
                  <th>Book Name</th>
                  <th>Date Taken</th>
                  <th>Return Date</th>
                  <th>Return Book</th>
                  <th>Status</th>
                </tr>
               <tr>
                  <td>John Doe</td>
                  <td>Php News</td>
                  <td>11-7-2020</td>
                  <td>11-8-2020</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
               <tr>  
                   <td>Joy Mwau</td>
                  <td>Black lives Matter</td>
                  <td>12-7-2020</td>
                  <td>12-8-2020</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><span class="label label-success">Approved</span></td>
               </tr>
               <tr> 
                   <td>Sophie Jade</td>
                  <td>Bully Notes Review</td>
                  <td>13-7-2020</td>
                  <td>13-8-2020</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><span class="label label-success">Approved</span></td>
               </tr>
               <tr>    
                   <td>Holy Mwasera</td>
                  <td>Mathematics for Statistics</td>
                  <td>14-7-2020</td>
                  <td>14-8-2020</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><span class="label label-success">Approved</span></td>
                  
                </tr>
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <?php
        Modal::begin([
            'header'=>'<h4>Assign A Book</h4>',
            'id'=>'assignbook',
            'size'=>'modal-lg'
            ]);
        echo "<div id='assignbookContent'></div>";
        Modal::end();
      ?>