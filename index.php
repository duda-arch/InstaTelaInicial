<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
</head>
<body>
	<div class="instagram-wrapper">

			<div class="celular-position">	
					<img src="imagens/instagram-celular.png">
			</div>

		<div class="instagram-continue">

				<div class="primeiro-ct">

					<div class="perfil-foto">
						<img src="imagens/instagram-logo.png" class="nome-insta">
					</div>	
					 <div class="profile-photo">		
							<img src="imagens/andrefoto.png">
					</div>
						<a href="#" class="continue">Continua as Andre Duda</a>	
						<a href="#" class="remove-account">Remove Account</a>
				</div>

			    <div class="primeiro-ct">
						
					<p class="msg-sad">Not André Duda ? </p>
				    <p class="msg-sad">
							<span href="#"class="sing-up">Switch Accounts</span> 
								or 
							<span href="#" class="sing-up">Sing UP</span>	
							
				   </p>	
			    </div>
			    <div class="get-the-app">
                <p class="get-app">Baixe o aplicativo</p>
                <div class="download">
                    <a href="#" class="app-download"></a>
                    <a href="#" class="app-download"></a>
                </div>
            </div>

		</div>
	</div>
</body>	
<style type="text/css">
	
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		text-decoration: none;
		font-family: sans-serif;
		font-size: 14px;
	}

	body{

		width: 100%;
		min-height: 100vh;
		background-color: rgb(243,243,243);
		margin: 0;
		padding: 0;
		display: flex;
		justify-content: center;
	}
	
	.instagram-wrapper{

		display: flex;
		align-items: center;
		justify-content: start;
		width: 60%;
		height: 100vh;
	}
	.celular-position{
		display: flex;
		align-items: center;
		justify-content: center;
		width: 50%;
	}
	.celular-position img{

		height: 50rem;

	}
	.instagram-continue {
	    display: flex;
	    align-items: center; 
	    justify-content: space-around; 
	    flex-direction: column;
	    width: 50%;
	    min-height: 34rem;
	}
	.primeiro-ct {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    background-color: #ffffff;
    width: 100%;
    padding: 1.3rem 0;
    border: 1px solid lightgray;
	}
	.profile-photo img {
		height: 7rem;
    	justify-content: center;
    	 align-items: center;
    	 overflow: hidden;
    	display: flex;
    	justify-content: center;
    	align-items: center;
    	border-radius: 50px;

	}
	.primeiro-ct:nth-child(1) {

  	  min-height: 19rem;
}
	}
	.nome-insta{
	    height: 3rem;
	}

	.perfil-foto img {
	    height: 6rem;


	}

	.continue {
	    background-color: #0095f6;
	    color: #ffffff;
	    padding: 8px;
	    border-radius: 4px;
	}

	.remove-account {
	    color: #0095f6;
	    margin-top: 1rem;
	}

	
	.sing-up{
		color: #0095f6;
	}
	.msg-sad{
		color: rgb(160, 160, 160);
	}
	.get-the-app {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 1.3rem 0;
}
.download {
    display: flex;
    width: 100%;
    justify-content: space-evenly;
    align-items: center;
    padding: 1rem;
}

.app-download {
    height: 3rem;
    width: 10rem;
    background-size: cover;
}

.app-download:nth-child(1) {
    background-image: url('imagens/apple-button.png');
}

.app-download:nth-child(2) {
    background-image: url('imagens/googleplay-button.png');
}
@media (max-width: 1024px) {
    .instagram-wrapper {
        width: 90%;
    }
}

@media (max-width: 650px) {
    body {
        background-color: #ffffff;
    }

    .instagram-wrapper {
        width: 90%;
    }

    .celular-position{
        display: none;
    }

    .instagram-continue {
        width: 100%;
    }
    
    .promeiro-ct{
        border: 1px solid transparent;
    }
}
</style>
</html>