<div class="clearfix"></div>
	<footer id="rodape" class="span1">
		<a href="http://www.soupelegrino13.com.br" class="ir">Sou Pelegrino 13 - Todos Juntos por Salvador</a>
	</footer>
	
	<script src="js/libs/jquery.min.js"></script>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '391380534248595', // App ID
      channelUrl : 'https://www.undigital.com.br/appface/debateband/', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    FB.Canvas.setSize();
  };

  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/pt_BR/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>

<script src="js/scripts.js"></script>
</body>
</html>