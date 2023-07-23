<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Page</title>
    <style>
        body{
            height: 100vh;
        }
       .chat-container{
        height: 350px;
        width: 250px;
        position: fixed;
        bottom: 0;
        z-index: 1;
        right: 20px;
        padding: 0;
       }

       #screen{
        /* display: none; */
        }

       #screen{
        height: 345px;
        width: 245px;
        background: #f6f6f6;
        border-radius: 5px;
	    box-shadow: 3px 3px 15px rgba(0,0,0,0.2);
        position: relative;
       }
       #header{
        height: 40px;
        width: 100%;
        top: 0;
        left: 0;
        background-color: #020166;
        color: #e88258;
        display: grid;
        place-items: center;
        font-size: 18px;
       }
       #messageDisplaySection{
        height: 305px;
        width: 245px;
        position: relative;
        display: flex;
        flex-direction: column;
       }
       #messageScreen{
        height: 265px;
        position: relative;
        top: 0;
        padding: 0 15px;
        overflow-y: scroll;
       }
       .chat{
        min-height: 20px;
        max-width: 70%;
        padding: 7px;
        margin: 5px 0;
        border-radius: 10px;
        font-size: small;
       }
       .botMessages{
        background: #020166;
        color: #E8B258;
        text-shadow: 1px 1px 2px #000000d4;
        }
        #messagesContainer{
        display: flex;
	    justify-content: flex-end;
        }
        .usersMessages{
	    background: #ddad5ac7;
        }
        #userInput{
        height: 40px;
        width: 86%;
        position: relative;
        outline: none;
        background: transparent;
	    padding: 0px 15px;
	    font-size: small;
        border-radius: 5px;
        background: #fff;
        overflow-x: hidden;
        }
        #messages{
        height: 40px;
        width: 70%;
        position: absolute;
        left: 0;
        border: none;
        outline: none;
        background: transparent;
        padding: 0px 15px;
        font-size: small;
}
        #send{
        height: 40px;
        width: 20%;
        position: absolute;
        right: 0;
        border: none;
        outline: none;
        display: grid;
        place-items: center;
        color: #fff;
        font-size: small;
        color: #E8B258;
        background: #020166;
        cursor: pointer;
        /* display: none; */
        }
    </style>
</head>
<body>
    <div class="chat-container">
		<div class="screen" id="screen">
			<div id="header">Let's chat</div>
			<div id="messageDisplaySection">
				<div id="messageScreen">
					<!-- bot messages -->
					<div class="chat botMessages">Hello there, how help you?</div>
					
					<!-- user messages -->
					<div id="messagesContainer">
						<div class="chat usersMessages">I need your help to build a website</div>
					</div>
                    <div id="messagesContainer">
						<div class="chat usersMessages">I need your help to build a website</div>
					</div>
                
                    <div id="messagesContainer">
						<div class="chat usersMessages">I need your help to build a website</div>
					</div>
                    <div id="messagesContainer">
						<div class="chat usersMessages">I need you Matthew a website</div>
					</div>
                    <div id="messagesContainer">
						<div class="chat usersMessages">I need you Matthew a website</div>
					</div>

                    <!-- bot messages -->
					<div class="chat botMessages">Hello there, how help you?</div>

                    <!-- bot messages -->
					<div class="chat botMessages">Hello there, how help you?</div>

				</div>	
				<!-- messages input field -->
				<div id="userInput">
					<input type="text" name="messages" id="messages" autocomplete="OFF" placeholder="Type your message here." required> 
					<input type="submit" value="send" id="send" name="send">
				</div>
			</div>
		</div>
	</div>


    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script>

        window.setInterval(function(){
            var scrollMessage = document.getElementById('messageScreen');
            scrollMessage.scrollTop = scrollMessage.scrollHeight;
        }, 5000);

    </script>
    <script>
        // Jquery start
        $(document).ready(function(){
            $("#messages").on("keyup",function(){
                if($("#messages").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });		
    
        // When send button is clicked
        $("#send").on("click", function(e){
            $userMessage = $("#messages").val();
            $appendUserMessage = '<div class="chat usersMessages">'+ $userMessage + '</div>';
            $("#messageScreen").append($appendUserMessage)
        
            // Start ajax
            $.ajax({
                url: "bot.php",
                type: "POST",
                //Sending data
                data:{messageValue: $userMessage},
                //response text
                success: function(data){
                    //Show response	
    
                    $appendBotResponse = '<div id="messagesContainer"> <div class="chat botMessages">' +data+ '</div></div>';
                    $("#messageScreen").append($appendBotResponse);
    
                }
            });
            $("messages").val("");
            $("#send").css("display","none");
            
            var d = $("#messageScreen")
            d.scrollTop(d.prop(265))
        });
    </script>
</body>
</html>



<!-- <button href="" class="hero-btn" onclick="showHide()">Chat with us</button> keep--> 