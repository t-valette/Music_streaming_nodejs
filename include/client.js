(function () {

	var socket = io.connect("http://voxystudio.com:25568");
	var msgtpl = $('#msgtpl').html();
	$('#msgtpl').remove();

	$('#loginform').submit(function (event) {
		event.preventDefault();
		socket.emit('login', {
			username : $('#username').val(),
		});
	});

	socket.on('loged' , function () {
		$("#login").fadeOut();
	})

	//envois de message
	$('#form').submit(function (event) {
		event.preventDefault();
		socket.emit('newmsg', {message : $('#message').val()});
		$('#message').val('');
		$('#message').focus();
	})

	socket.on('newmsg', function (message) {
		$('#messages').append('<div class="message">'+ Mustache.render(msgtpl,message) + '</div>');
		$('#chat').animate({scrollTop : $('#chat')[0].scrollHeight} , 50);
	});

	//gestion des connection
	socket.on('newuser', function (user) {
		$("#users").append('<p>' + user.username + '</p>');
	});

	//gestion des deconnections
	socket.on('discuser', function (user) {
		$('#' + user.id).remove();
	});

    //gestion des deconnections
    socket.on('newMusic', function (user) {
    	console.log(user);

		/*<div class='item' name='"+musicUpload[i].preview+"'>"+
		 "<div class='vignette'>"+
		 "<img src='"+musicUpload[i].cover+"' alt='"+musicUpload[i].track+"'/>"+
		 "<div class='info'><div>"+
		 "<div>"+musicUpload[i].album+"</div>"+
		 "<div>"+musicUpload[i].artist+"</div>"+
		 "<div>"+musicUpload[i].track+"</div>"+
		 "</div>"+
		 "</div>"+
		 "</div></div>";*/
		var item = $("<div>").addClass("item").attr("name",user.preview).append(
			$("<div>").addClass("vignette").append(
				$("<img>").attr("src", user.cover).attr("alt", user.track)
			).append(
				$("<div>").addClass("info").append(
					$("<div>").append(
						$("<div>").text(user.album)
					).append(
						$("<div>").text(user.artist)
					).append(
						$("<div>").text(user.track)
					)
				)
			)
		);
        $('.owl-carousel')
            .owlCarousel('add', item)
            .owlCarousel('update')
    });

})();