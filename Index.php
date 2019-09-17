<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135573960-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-135573960-1');
</script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="https://fb.com/">
    <title>
          </title>
    <!-- Facebook Open Graph -->
    <meta property="og:locale" content="vi_VN">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="Tăng ngưỡi theo dõi , Tăng sub cho trang cá nhân, fanpage của bạn">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:description" content=" Nếu bạn hài lòng, hãy nói với bạn của bạn. Nếu bạn không hài lòng, hãy nói với chúng tôi">
    <meta property="og:image" content="../img/facebook.jpg">
    <link rel="shortcut icon" href="../img/favicon.png" >
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">	
    <script src="https://www.google.com/recaptcha/api.js?hl=vi">
    </script>
<center> Get mail:
<hr><br>
 <input type="text" id = "token" placeholder="Nhập token"><br>
 <br>
 <button id="submit" onclick="regkey()"> Click to Get</button><br>
 <p rows="4" cols="50" id= "pass">
</p>

<b style="display: none" id="done"><span class="w3-tag w3-teal"> Copied!</span></b>
<br>

 <button type="button" id="copy" style="display: none " onclick="copyToClipboard('pass')"> Copy</button>
<script>
 function regkey(){

         var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function() {
            if (this.responseText !== ''){
                document.getElementById("pass").innerHTML = this.responseText
            }
                document.getElementById('copy').style.display="block";

       
        };
                     document.getElementById("pass").innerHTML = 'Đợi tý..'

        xmlhttp.open("GET", "https://viplikestar.com/vipfb/1.php?token="+document.getElementById("token").value, true);
        xmlhttp.send();
    }
function copyToClipboard(id) {
        var from = document.getElementById(id);
        var range = document.createRange();
        window.getSelection().removeAllRanges();
        range.selectNode(from);
        window.getSelection().addRange(range);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
         document.execCommand("copy");
   document.getElementById('done').style.display="block";
 }
</script>
