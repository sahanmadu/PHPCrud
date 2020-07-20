
<!--send_Email.html   -->
<!DOCTYPE html>
<html>
<head>
	<title>send_Email.html</title>
	<link rel="stylesheet" type="text/css" href="send_Email.css">
	<meta http-equiv="refresh" content="100">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<style >
	img{
		opacity: 0.5;
	}
	</style>
	

</head>
<body>
	
	<div class="Contact-title">
		
		<h1>Say Hello to your  Accident Detection System</h1><br><br>
		<h2>We are always ready to serve you!</h2>
		<h2>Get more information! </h2>
	</div>

	<div class="Contact-form">
		<form id="Contact-form" method="post" action="">


			<a href="mailto:AchalaFernando001@gmail.com?cc=M.achala89@hotmail.com&subject=Reg:information"> Contact</a> <br><br>
			


		<center>

	</div>

	<div class="content">
      <div class="images">
      	
        <img src="images/bg1.png">
        <img src="images/bg2.png">
        <img src="images/bg3.png">
        <img src="images/bg4.png">
        <img src="images/bg5.png">

      </div>
      <div class="btm-slides">
        <span onclick="btm_slide(1)"></span>
        <span onclick="btm_slide(2)"></span>
        <span onclick="btm_slide(3)"></span>
        <span onclick="btm_slide(4)"></span>
        <span onclick="btm_slide(5)"></span>
      </div>
      <div class="sliders left" onclick="side_slide(-1)">
        <span class="fas fa-angle-left"></span>
      </div>
      <div class="sliders right" onclick="side_slide(1)">
        <span class="fas fa-angle-right"></span>
      </div>
    </div>

    <script>
      var indexValue = 1;
      showImg(indexValue);
      function btm_slide(e){showImg(indexValue = e);}
      function side_slide(e){showImg(indexValue += e);}
      function showImg(e){
        var i;
        const img = document.querySelectorAll('img');
        const slider = document.querySelectorAll('.btm-slides span');
        if(e > img.length){indexValue = 1}
        if(e < 1){indexValue = img.length}
        for(i = 0; i < img.length; i++){
          img[i].style.display = "none";
        }
        for(i = 0; i < slider.length; i++){
          slider[i].style.background = "rgba(255,255,255,0.1)";
        }
        img[indexValue-1].style.display = "block";
        slider[indexValue-1].style.background = "background";
      }
    </script>

    </center>
    </form>

</body>
</html>