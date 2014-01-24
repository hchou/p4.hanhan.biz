var blubber_channel;
var username;
var pusher;

// Append message to the chat_messages box!
function updateNewMessage(data) { 
    $('#chat_messages').append(data.message + '<br />');
}

// Ahhh, the AJAX call...
function ajaxCall(ajax_url, ajax_data, successCallback) {
    $.ajax({
        type : "POST",
        url : ajax_url,
        dataType : "json",
        data: ajax_data,
        time : 10,
        success : function(msg) {
            successCallback(msg);
        },
        error: function(msg) {
        }
    });
}

$(document).ready(function() {
    // Passing the user name to JavaScript
    $("#myname").hide();
    username = $("#myname").text();
    ajaxCall('start_session.php', { username : username }, function() {
        pusher = new Pusher('e4dfd1c45098e78facd6');
        Pusher.channel_auth_endpoint = 'auth.php';
        
        blubber_channel = pusher.subscribe('presence-blubber');
        
        // Subscription_succeeded event handler
        pusher.connection.bind('connected', function() {  
            blubber_channel.bind('pusher:subscription_succeeded', function(members) {
                var online_user_list = '';
                members.each(function(member) {
                    online_user_list += '<li>' + member.info.username + '</li>';
                });
                $('#chat_online_list').html(online_user_list);
            });

            // New_message event handler
            blubber_channel.bind('new_message', function(data) {
                updateNewMessage(data);
            });
            
            // Member_added event handler
            blubber_channel.bind('pusher:member_added', function(member) {
                $('#chat_online_list').append('<li class="chat_member" ' +
                'id="chat_member_' + member.id + '">' + member.info.username + '</li>');
            });
            
            // Member_removed event handler
            blubber_channel.bind('pusher:member_removed', function(member) {
                $('#chat_member_' + member.id).remove();
            });	
            
        });
    });
    
    $('#chat_form').submit(function() {
        var message = $('#chat_input').val();
        // AJAX call to send the message
        ajaxCall('send_message.php', { message : message }, function(msg) {
            $('#chat_input').val('');
            updateNewMessage(msg.data);
        });
        return false;
    });
});