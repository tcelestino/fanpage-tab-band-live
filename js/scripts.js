	var page = 1;

	function load_twitter(){

		var i = 0;
		var list_tweets = $('article.twitter ul')

		page++;

		var twitter_url = 'https://search.twitter.com/search.json?q=Sou13naBand&result_type=mixed&rpp=1';
		$.ajax({
		  url: twitter_url,
		  type: 'GET',
		  dataType: 'jsonp',
		  data: {
		  	page: page,
		  	//rpp: rpp
		  },
		  beforeSend: function() {
		  
		  },
		  success: function(data, textStatus) {

		  	var result = ''

		  	for(var i=0; i < data.results.length; i++) {

		  		console.log(data.results[i]);

		  		var id = data.results[i].id;
		  		var avatar = data.results[i].profile_image_url;
		  		var user = data.results[i].from_user;
				var tweets = data.results[i].text;

				if(id == undefined) return;

				result += '<li>'+ '<figure class="alignleft avatar span4">'+ '<img src="'+avatar+'" alt="'+ user +'"/>'+'</figure>'+ '<p><span class="user">@'+ user + '</span> ' + linkify(tweets) +'</p></li>';

				
			
			};

			list_tweets.fadeOut('fast', function(){
					$(this).prepend(result).fadeIn();
			});
		
		  },
		  error: function(error) {
		    alert(error);
		  }
		});

	}
	function linkify(text) {
	    // modified from TwitterGitter by David Walsh (davidwalsh.name)
	    // courtesy of Jeremy Parrish (rrish.org)
	    return text.replace(/(https?:\/\/[\w\-:;?&=+.%#\/]+)/gi, '<a href="$1">$1</a>')
	               .replace(/(^|\W)@(\w+)/g, '$1<a href="http://twitter.com/$2">@$2</a>')
	               .replace(/(^|\W)#(\w+)/g, '$1#<a href="http://search.twitter.com/search?q=%23$2">$2</a>');
	}
		$(function(){
			var time = setInterval(load_twitter, 30000);

			load_twitter();

			
		})