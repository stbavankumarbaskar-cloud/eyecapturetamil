<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/stylesheet/bootstrap.min.css');?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>ID Card</title>
<!--     
    So lets start -->
  <style type="text/css">
      *{
    margin: 00px;
    padding: 00px;
    box-sizing: content-box;
}

.container {
    height: 100vh;
    
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #e6ebe0;
    flex-direction: row;
    flex-flow: wrap;

}

.font{
    height: 415px;
    width: 250px;
    position: relative;
    border-radius: 10px;
}

.top{
    height: 30%;
    width: 100%;
    background-color: #ffffff;
    position: relative;
    z-index: 5;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.bottom{
    height: 70%;
    width: 100%;
    background-color: #ff665b;
    position: absolute;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.top img{
    height: 100px;
    width: 100px;
    background-color: #e6ebe0;
    border-radius: 10px;
    position: absolute;
    top:60px;
    left: 75px;
}
.bottom p{
    position: relative;
    top: 60px;
    text-align: center;
    text-transform: capitalize;
    font-weight: bold;
    font-size: 20px;
    text-emphasis: spacing;
}
.bottom .desi{
    font-size:12px;
    color: grey;
    font-weight: normal;
}
.bottom .no{
    font-size: 15px;
    font-weight: normal;
}
.barcode img
{
    height: 65px;
    width: 65px;
    text-align: center;
    margin: 5px;
}
.barcode{
    text-align: center;
    position: relative;
    top: 55px;
}

.back
{
    height: 415px;
    width: 250px;
    border-radius: 10px;
    background-color: #e2e2e2;

}
.qr img{
    height: 80px;
    width: 100%;
    margin: 20px;
    background-color: white;
}
.Details {
    color: #1b1b1b;
    text-align: center;
    padding: 10px;
    font-size: 25px;
}


.details-info{
    color: #1b1b1b;
    text-align: left;
    padding: 5px;
    line-height: 20px;
    font-size: 16px;
    text-align: center;
    margin-top: 20px;
    line-height: 22px;
}

.logo {
    
}

.logo img{
    height: 100%;
    width: 100%;
    color: white ;

}
.padding{
    padding-right: 20px;
}

@media screen and (max-width:400px)
{
    .container{
        height: 130vh;
    }
    .container .front{
        margin-top: 50px;
    }
}
@media screen and (max-width:600px)
{
    .container{
        height: 130vh;
    }
    .container .front{
        margin-top: 50px;
    }

}
.form-control{
  width: 80%;
 
}
label{
  text-align: none;
}
.heading{
  text-transform: uppercase;
    font-weight: 800;
    margin: 25px;
}
@media screen and (max-width: 480px) {
  .col-md-6 {
    width: 100%;
  }
}
@media screen and (max-width: 480px) {
  .row {
    display: block !important;
  }
}
p.desi {
    font-weight: 900 !important;
    background: #292929;
    padding: 5px;
    border: 1px solid;
    color: #fff !important;
}
p {
  color: #fff;
}

.back {
    height: 415px;
    width: 250px;
    border-radius: 10px;
    background-color: #ff665b;
}
    </style>
</head>
<body>

    <h2 align="center" class="heading"> Id Card Application</h2>
      
    <div class="row" style="display: flex;">

      <div class="col-md-6" style="background: #e6ebe0">
        <!-- <h3 align="center ">Id Card Apply</h3> -->
        <form class="default-form" id="groupfrom" method="post" enctype="multipart/form-data">
          <div class="form-group" style=" margin-left: 30px;">
            <label> Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name" value="<?php echo $worketDet->name?>" onchange="myname();">
          </div>

          <div class="form-group" style=" margin-left: 30px;">
            <label> Disignation</label>
            <input type="text" name="disignation" id="disignation" class="form-control" placeholder="Enter Disignation" value="<?php echo $worketDet->designation?>"  onchange="Mydisignation();">
          </div>

          <div class="form-group" style=" margin-left: 30px;">
            <label> Profile</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>

          <div class="form-group" style=" margin-left: 30px;">
            <label> Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $worketDet->email?>" onchange="Myemail();">
          </div>

          <div class="form-group" style=" margin-left: 30px;">
            <label> Mobile Number</label>
            <input type="text" name="mnumber" id="mnumber" class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo $worketDet->mobileno?>" onchange="Mymnumber();">
          </div>

          <div class="form-group" style=" margin-left: 30px;">
            <label> Address</label>
            <textarea class="form-control" name="address" id="address" rows="5" placeholder="Enter Your Address" value="<?php echo $worketDet->address?>" onchange="myAddress()"><?php echo $worketDet->address?></textarea>
          </div>

           <div class="form-group " style=" margin-left: 30px;">
            <button class="btn btn-info" id="sendmail" onclick="send_mail()" style="width: 80%">Apply</button>
            <button class="btn btn-info" id="printId" style="width: 80%;display: none;">Print</button>
          </div>
        </form>
      </div>

        <div class="container col-md-6">

            <div class="iddetail">
                
            </div>
            <div class="padding">

                <div class="font">

                    <div class="top" >
                       <img src="<?php echo base_url('assets/images/logo4.png')?>" style="left: 0px;    width: 100%;    height: 67px;    top: 6px;    background-color: transparent;">
                        <img class="mimage" src="<?php echo base_url('assets/images/idcard/'.$worketDet->profile)?>">
                    </div>
                   
                    <div class="bottom">
                        <p class="idname"><?php echo $worketDet->name?></p>
                        <p class="desi"><?php echo $worketDet->designation?></p>

                        <div class="barcode">
                             <img src="<?php echo base_url('assets/images/idcardqr.png')?>">

                        </div>
                        
                         <div class="issuesdet" style="margin-top: 5px;">
                          <p style="font-size: 14px;">Issue Date : 01/01/2021</p>

                        </div>

                    </div>
                </div>
            </div>
            <div class="back">
                <h1 class="Details" style="    text-transform: uppercase;    padding: 0px !important;    font-family: monospace;">information</h1>
                <hr class="hr" style="margin: 0px;">
                <div class="details-info">
                    <p><b >Email : </b></p>
                    <p class="memail"><?php echo $worketDet->email?></p>
                    <p><b>Mobile No:</b></p>
                    <p class="mmobile"><?php echo $worketDet->mobileno?></p>
                    <p><b>Office Address:</b></p>
                    <p class="maddress"><?php echo $worketDet->address?></p>
                    </div>
                    
                    <hr  style="margin: 0px;">
                    <div class="logo" style="margin-top: 10PX;">
                       <h2 align="center" style="background: #fff;color: #000;font-size: 36px;-webkit-text-stroke: 0px #ffffff;margin-top: 0px;font-weight: 900;">PRESS</h2>
                    </div>
                </div>
            </div>
        </div>
      <script src="<?php echo base_url('assets/js/jquery-3.5.0.min.js');?>"></script> 
      <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
      <script type="text/JavaScript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
        <script type="text/javascript">


         $(document).ready(function() {
            $('#printId').click(function(){   
               var divContents = $('.container').html();
               var printWindow = window.open('', '', ',width=100%');
               
               
                printWindow.document.write('<style>');
                
                printWindow.document.write('body{display: flex;} .container {    height: 100vh;     display: flex;    align-items: center;    justify-content: center;    background-color: #e6ebe0;    flex-direction: row;    flex-flow: wrap;}.font{ height: 395px; width: 250px; position: relative; border-radius: 10px;    border: 1px solid;} .top{ height: 30%; width: 100%;    background-color: #ffffff;    position: relative;    z-index: 5;    border-top-left-radius: 15px;    border-top-right-radius: 15px; } .bottom{    height: 70%;    width: 100%;    background-color: #e91f28;    position: absolute;    border-bottom-left-radius: 15px;    border-bottom-right-radius: 15px; } .top img{ height: 100px;    width: 100px;    background-color: #e6ebe0;    border-radius: 10px;    position: absolute;    top:67px;    left: 75px;}.bottom p{    position: relative;top: 31px;    text-align: center;    text-transform: capitalize;    font-weight: bold;font-size: 20px;    text-emphasis: spacing; }.bottom .desi{    font-size:12px;    color: grey;font-weight: normal;}.bottom .no{    font-size: 15px;    font-weight: normal;}.barcode img{    height: 65px;    width: 65px;    text-align: center;    margin: 5px;}.barcode{    text-align: center;    position: relative;    top: 24px;}.back{     border: 1px solid;   height: 395px;    width: 250px;    border-radius: 10px;    background-color: #e91f28;}.qr img{    height: 80px;    width: 100%;    margin: 20px;    background-color: white;}.Details {color: white;    text-align: center;    padding: 10px;    font-size: 25px;}.details-info{    color: #1b1b1b;    text-align: left;       line-height: 20px;    font-size: 16px;    text-align: center;    margin-top: 20px;    line-height: 22px;}.logo {}.logo img{height: 100%;    width: 100%;    color: white ;}.padding{    padding-right: 20px;}@media screen and (max-width:400px){    .container{        height: 130vh;    }    .container .front{        margin-top: 50px;    }}@media screen and (max-width:600px){    .container{        height: 130vh;    }    .container .front{        margin-top: 50px;    }}.form-control{  width: 80%; }label{  text-align: none;}.heading{text-transform: uppercase;    font-weight: 800;    margin: 25px;}@media screen and (max-width: 480px) {  .col-md-6 {    width: 100%;  }}@media screen and (max-width: 480px) {  .row {    display: block !important;  }}.badge {    display: inline-block;    min-width: 10px;padding: 3px 7px;    font-size: 12px;    font-weight: 700;    line-height: 1;    color: #fff;text-align: center;    white-space: nowrap;    vertical-align: baseline;    background-color: #777;    border-radius: 10px;}p {    color: #fff;}p.desi {    font-weight: 900 !important;    background: #292929;    padding: 5px;    border: 1px solid;    color: #fff !important;}');
              printWindow.document.write('</style >');
               printWindow.document.write('<body >');
               printWindow.document.write(divContents);
               printWindow.document.write('</body>');
               printWindow.print();
               // printWindow.close();
            });//end of print button click
        });//end of ready function

          function myname(argument) {
            var name = $('#name').val();
            $('.idname').text(name);
            $('#sendmail').show();
                    $('#printId').hide();
          }

          function Mydisignation(argument) {
            var des = $('#disignation').val();
            $('.desi').text(des);
            $('#sendmail').show();
                    $('#printId').hide();
          }


          function Myemail(argument) {
            var name = $('#email').val();
            $('.memail').html(name);
            $('#sendmail').show();
                    $('#printId').hide();
          }

          function Mymnumber(argument) {
            var mnum = $('#mnumber').val();
            $('.mmobile').text(mnum);
            $('#sendmail').show();
                    $('#printId').hide();
          }


          function myAddress(argument) {
            var addr = $('#address').val();
            $('.maddress').text(addr);
            $('#sendmail').show();
                    $('#printId').hide();
          }

          function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function(e) {
                $('.mimage').attr('src', e.target.result);
              }
              
              reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
          }

            $("#sendmail").click(function(event) {
            event.preventDefault();
            var baseUrl = '<?php echo base_url()?>';
            var form_data = new FormData($('#groupfrom')[0]);
            $.ajax({
              type: "POST",
              url: baseUrl+'admin/idcard/udpateIdcard/'+<?php echo $worketDet->id?>,
              data: form_data,
              processData: false,
              contentType: false,
              success: function(data){
                 if(data == 'success')
                 {
                    $('#sendmail').hide();
                    $('#printId').show();
                 }else{
                    alert('Please Try Again Later..')
                 }
                 // $("#subCategory").html(data);
              },error: function(){
                  alert('Error');
              } 
            });
          });

          $("#image").change(function() {
             $('#sendmail').show();
              $('#printId').hide();
            readURL(this);
          });
        </script>
</body>
</html>