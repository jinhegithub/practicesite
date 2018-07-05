<?php
  session_start();
  define('INCLUDED',true);
  require 'includes/core_func.php';
  require 'includes/validation_func.php';

    if (!user_logged_in()) {
    	header('Location: index.php');
  	  die();
    }
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">



    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href="assets/css/chat.css" >

</head>

<body>

    <div id="frame">
        <div id="sidepanel">
            <div id="profile">
                <div class="wrap">
                    <img id="profile-img" src="assets/img/mikeross.png" class="online" alt="" />
                    <p>Mike Ross</p>
                    <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                    <div id="status-options">
                        <ul>
                            <li id="status-online" class="active"><span class="status-circle"></span>
                                <p>Online</p>
                            </li>
                            <li id="status-away"><span class="status-circle"></span>
                                <p>Away</p>
                            </li>
                            <li id="status-busy"><span class="status-circle"></span>
                                <p>Busy</p>
                            </li>
                            <li id="status-offline"><span class="status-circle"></span>
                                <p>Offline</p>
                            </li>
                        </ul>
                    </div>
                    <div id="expanded">
                        <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mikeross" />
                        <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="ross81" />
                        <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mike.ross" />
                    </div>
                </div>
            </div>
            <div id="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" placeholder="Search contacts..." />
            </div>
            <div id="contacts">
                <ul>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <img src="assets/img/louislitt.png" alt="" />
                            <div class="meta">
                                <p class="name">Louis Litt</p>
                                <p class="preview">You just got LITT up, Mike.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact active">
                        <div class="wrap">
                            <span class="contact-status busy"></span>
                            <img src="assets/img/harveyspecter.png" alt="" />
                            <div class="meta">
                                <p class="name">Harvey Specter</p>
                                <p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status away"></span>
                            <img src="assets/img/rachelzane.png" alt="" />
                            <div class="meta">
                                <p class="name">Rachel Zane</p>
                                <p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <img src="assets/img/donnapaulsen.png" alt="" />
                            <div class="meta">
                                <p class="name">Donna Paulsen</p>
                                <p class="preview">Mike, I know everything! I'm Donna..</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status busy"></span>
                            <img src="assets/img/jessicapearson.png" alt="" />
                            <div class="meta">
                                <p class="name">Jessica Pearson</p>
                                <p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="assets/img/haroldgunderson.png" alt="" />
                            <div class="meta">
                                <p class="name">Harold Gunderson</p>
                                <p class="preview">Thanks Mike! :)</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="assets/img/danielhardman.png" alt="" />
                            <div class="meta">
                                <p class="name">Daniel Hardman</p>
                                <p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status busy"></span>
                            <img src="assets/img/katrinabennett.png" alt="" />
                            <div class="meta">
                                <p class="name">Katrina Bennett</p>
                                <p class="preview">I've sent you the files for the Garrett trial.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="assets/img/charlesforstman.png" alt="" />
                            <div class="meta">
                                <p class="name">Charles Forstman</p>
                                <p class="preview">Mike, this isn't over.</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="wrap">
                            <span class="contact-status"></span>
                            <img src="assets/img/jonathansidwell.png" alt="" />
                            <div class="meta">
                                <p class="name">Jonathan Sidwell</p>
                                <p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="bottom-bar">
                <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>주소록추가<span></button>
                <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>설정</span></button>
            </div>
        </div>
        <div class="content">
            <div class="contact-profile">
                <img src="assets/img/harveyspecter.png" alt="" />
                <p>Harvey Specter</p>
                <div class="social-media">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
            <div class="messages">
                <ul>
                    <!-- <li class="sent">
                        <img src="" alt="" />
                        <p></p>
                    </li> -->

                </ul>
            </div>
            <div class="message-input">
                <div class="wrap">
                    <input type="text" placeholder="Write your message..." />
                    <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                    <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>


    <script>
        var chat = {};

        $(".messages").animate({
            scrollTop: $(document).height()
        }, "fast");

        $("#profile-img").click(function() {
            $("#status-options").toggleClass("active");
        });

        $(".expand-button").click(function() {
            $("#profile").toggleClass("expanded");
            $("#contacts").toggleClass("expanded");
        });

        $("#status-options ul li").click(function() {
            $("#profile-img").removeClass();
            $("#status-online").removeClass("active");
            $("#status-away").removeClass("active");
            $("#status-busy").removeClass("active");
            $("#status-offline").removeClass("active");
            $(this).addClass("active");

            if ($("#status-online").hasClass("active")) {
                $("#profile-img").addClass("online");
            } else if ($("#status-away").hasClass("active")) {
                $("#profile-img").addClass("away");
            } else if ($("#status-busy").hasClass("active")) {
                $("#profile-img").addClass("busy");
            } else if ($("#status-offline").hasClass("active")) {
                $("#profile-img").addClass("offline");
            } else {
                $("#profile-img").removeClass();
            };

            $("#status-options").removeClass("active");
        });

        function newMessage(msg) {
          if(msg != ''){
            message=msg;
          }else{
              message = $(".message-input input").val();
          }
          if ($.trim(message) == '') {
              return false;
          }
          $('<li class="sent"><img src="assets/img/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
          $('.message-input input').val(null);
          $('.contact.active .preview').html('<span>You: </span>' + message);
          $(".messages").animate({
              scrollTop: $(document).height()
          }, "fast");
        };

        $('.submit').click(function() {
            chat.push_message();
        });

        $(window).on('keydown', function(e) {
            if (e.which == 13) {
                chat.push_message();
                return false;
            }
        });

        chat.get_messages = function () {
        	$.ajax({
        		url: './chat.php',
        		type: 'post',
        		dataType: 'json',
        		data: {method: 'get_messages', timestamp: chat.lastmsg_timestamp},
        		success: function (data) {
        			if (data.status_code != 0) { //if there was an error
        				$('#errors_box .error').html(data.status_msg); //set the errors_box
        			}
        			else {
        				newMessage(data.msg);
        				                                         //$('#messages').prepend(data.msg); //else print the messages
        				chat.lastmsg_timestamp = data.timestamp; //update the last message timestamp, so the next time we will ask only for the new messages
        			}
        		}
        	});
        }

        chat.push_message=function(){
            //check if user have press enter without shift

        		chat.msg_contents = $('.message-input input').val(); //get the value of the textarea

            $.ajax({ //push the message using ajax to the server
        			url: 'chat.php',
        			type: 'post',
        			dataType: 'json',
        			data: {method: 'push_message', msg: chat.msg_contents, timestamp: chat.lastmsg_timestamp},
        			success: function (data) {
        				if (data.status_code != 0) { //if there was an error
        					$('#errors_box .error').html(data.status_msg); //set the errors_box
        				}else {
        					newMessage(); //else, after the push immediately refresh the messages
        					$('#errors_box .error').html(''); //clear last error message
        				}
        			}
        	  });
        }

        chat.interval = setInterval(chat.get_messages, 5000); //the chat will be updated every 5 seconds
        chat.lastmsg_timestamp = '-1'; //if the page is reloaded fetch all the messages at once, to do that we set timestamp to -1
        chat.get_messages(); //when page is loaded get the messages immediately


    </script>
    <!-- <script src='assets/js/chat/js'></script> -->
</body>

</html>
