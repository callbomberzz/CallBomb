<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang=en>
<head>
<title>Call+SMS Bomber - CALL+SMS Bomber Online</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name=description content="The unlimited Call bomber is here now, We have updated our bomber's algorithm now you can send upto 1000 Call per hour. Check out the best Call bomber 2022.">
<meta property=og:title content="Call Bomber 2023 - Send Unlimited Bombs To Your Friend." />
<meta property=og:type content="Send Upto 1 Lakh+ Call in one click. Just Enter The Number And Press The Submit Button And Bombing Will Start. We have added over 10+ apis for faster delivery." />
<meta property=og:image content=logo.jpeg />
<link rel=icon href=favicon.ico>
<link rel=stylesheet href="./Stylesheets///bootstrap.css">
<link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin=anonymous referrerpolicy=no-referrer />
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
</head>

<body onload="disableSubmit()">
<style>
    <?php include "./Stylesheets///bootstrap.css"; ?>
</style>
<?php require("./header.php");?>
<br />
<br />
<div class="alert alert-warning" role=alert>
<center>
<h1>Welcome To <strong>Call+Sms Bomber</strong>&nbsp;</h1>
</center>
</div>
<div class=container>
<div class="alert alert-dismissible alert-danger">
<button type=button class=close data-dismiss=alert>&times;</button>
<strong><i class="fas fa-exclamation-triangle"></i>&nbsp;Note:-</strong> We created this website for fun purpose, We dont have any intensionss to harm anyone.
</div>

<center>
<div class="panel panel-success">
<div class=panel-heading ><b><i class="fa fa-bomb" aria-hidden=true></i>&nbsp;More Tools</b></div>
<div class="pad" style="padding-bottom: 10px;"></div>
<form action="call/" onsubmit="return checkCheckBox(this)" method=POST>
<!-- <div class="alert alert-danger">
<b>Enter the Number and Enjoy </b>
</div> -->
<div class=input-group>
<span class=input-group-addon>+91</span>
<input id="input1" type=number name=num class=form-control maxlength="10" pattern=".{10}" placeholder="Enter Number" required>
</div>
<br>
<div class=input-group>
<span class=input-group-addon>Number of Call+Sms</span>
<input type=number name=num class=form-control oninput="handleValueChange()" id="textbox_id" onKeyUp="if(this.value>200){this.value='200';}else if(this.value<0){this.value='0';}" min="1" max="200" placeholder="Enter Number" required>
</div>
<br>


<!-- <ins class=adsbygoogle style=display:block data-ad-client=ca-pub-6526483573633425 data-ad-slot=9719935864 data-ad-format=auto data-full-width-responsive=true></ins> -->
<!-- <script>(adsbygoogle=window.adsbygoogle||[]).push({});</script> -->
<hr>
<input type=checkbox name=terms id=terms onchange="activateButton(this)"> I Agree <a href="terms.php">Terms & Coditions </a>
<hr>
<!-- <div class=cf-turnstile data-sitekey=0x4AAAAAAABTZ10wrGFFYeIp></div> -->
<hr>
<button type="button" class="btn btn-success" id=submit data-toggle="modal" data-target="#exampleModalCenter">
send now
</button></form>
<!-- <button class='btn btn-success' name=submit id=submit> <b> <i class="fa fa-send"></i> Send Now !!</b></button></form> -->
<hr>
<!-- <b>| Join <a href="https://telegram.dog/callbomb"> Telegram Channel</a> For Latest Update |</b></center> -->
<hr>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DONE SUCCESSFULLY</h5>
        </button>
      </div>
      <div class="modal-body">
      <img src="./images/tick.png " style="width: 100px; height:100px">
                          <h2>Thankyou</h2>
                          <p >Your <span id="result"></span> calls+sms has been sent</p>
      </div>
      <div class="modal-footer">
        <button id="closclear" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
<div class="panel panel-success">
<div class=panel-heading><b><i class="fa fa-bomb" aria-hidden=true></i>&nbsp;More Tools</b></div>
<div class=panel-body>
<center>
<a href=index.php class="btn btn-info"><b>
<i class="fa fa-bomb" aria-hidden=true></i>&nbsp;Call Bomber</b></a><br><br>
<a href="unlimited-sms-bomber.php" class="btn btn-success">
<b><i class="fa fa-bomb" aria-hidden=true></i>&nbsp;Sms Bomber</b></a><br><br>
<a href=protect.php class="btn btn-info"><b>
<i class="fa fa-bomb" aria-hidden=true></i>&nbsp;Protect Number</b></a><br><br>
<a href='whatsappbomber.php'  class="btn btn-success">
<b><i class="fa fa-bomb" aria-hidden=true></i>&nbsp;WhatsApp</b></a><br><br>
</center>
</div>
</div>
<br/>
<div class="panel panel-success">
<div class="panel-heading"><b><i class="fa fa-bomb" aria-hidden="true"></i>&nbsp;What Is Call+Sms Bomber?</b></div>
<div class="panel-body">
<p>
Call+Sms Bomber is a prank tool, Which can send huge amount of Sms And Call Simultaneously. You can use it on your friends and irritate them.
</p>
</div>
</div>
<br />
<div class="panel panel-success">
<div class="panel-heading"><b><i class="fa fa-bomb" aria-hidden="true"></i>&nbsp;How To Use Call+Sms Bomber?</b></div>
<div class="panel-body">
<b>Step 1:</b> Enter the number you want to bomb on the above form.
<br>
<b>Step 2:</b> Then press the send now button.
</div>
</div>
<br/>
<div class=container>
<div class="panel panel-success">
<div class=panel-body>
<center>
Call Bomber 2023
<br>
Call Bomber Online Tool
</center>
</div>
</div>
</div>

<!-- <div class="panel panel-info">
<div class=panel-heading><b><i class="fa fa-bomb" aria-hidden=true></i>&nbsp;How To Use Call Bomber?</b></div>
<div class=panel-body>
<b>Step 1:</b> Enter the number you want to bomb on the above form.
<br>
<b>Step 2:</b> Now hit the submit button.
</p>
</div>
</div>
</div> -->
<script>
    function handleValueChange() {
    var y = document.getElementById('textbox_id').value;
    var x = document.getElementById('result');
    x.innerHTML = y;
}
</script>
<script>
    const btn = document.getElementById('closclear');

btn.addEventListener('click', function handleClick(event) {
  // 👇️ if you are submitting a form (prevents page reload)
  event.preventDefault();

  const firstNameInput = document.getElementById('input1');
  const secondNameInput = document.getElementById('textbox_id');

  // Send value to server
//   console.log(firstNameInput.value);
//   console.log(secondNameInput.value);

  // 👇️ clear input field
  firstNameInput.value = '';
  secondNameInput.value ='';
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>
<script>eval(function(m,c,h){function z(i){return(i<62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i<m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('function|disableSubmit|document|getElementById|submit|disabled|true|activateButton|if|checked|false|else'.split('|'),'0 1(){2.3("4").5=6;}0 7(A){8(A.9){2.3("4").5=a;}b {2.3("4").5=6;}}',{}))</script>
</body>
</html>