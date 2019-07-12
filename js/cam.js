document.write( webcam.get_html(240, 320) );
    	webcam.set_api_url( 'php/webcam.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(images\S+)/)) {
				// show JPEG image in page
				document.getElementById('clienteFoto').value = msg;
				 // show JPEG image in page
				
				
			$('#fotoTirada').append("<img src="+msg+" class=\"img\"></d");
                
            $('#takePhoto').attr("disabled","disabled");
            
            $('#rePhoto').removeAttr('disabled');
		  
			// reset camera for another shot
			webcam.reset();
			}
			else {
				alert("PHP Error: " + msg);
			}   
		 }	

        function tirarOutra() {
            $('#takePhoto').removeAttr('disabled');
            $('#rePhoto').attr("disabled","disabled");
            $('.img').remove();  
            fotoPath = $('#clienteFoto').val();
            console.log(fotoPath);
            
            $.ajax({
              url: 'php/removeFoto.php',
              data: {'file' : "../" + fotoPath }
            });
            
        }