<link rel="stylesheet" type="text/css" href="/css/chat.css">
<script src="//js.pusherapp.com/1.9/pusher.min.js" type="text/javascript"></script>


<h1>Interactive Chat</h1>

<h1 id='myname'><?php echo $user->first_name . " " . $user->last_name; ?></h1>

<script type="text/javascript" src="/js/chat.js"></script>

<div id="chat_box">
    
    <!-- Interactive chat DIVs -->
    <div id="chat_main_box">
        <!-- chat_online displays number and names of users logged on to Chat-->
        <div id="chat_online">
            <span id="chat_counter_heading">Online Users: <span id="chat_counter">0</span></span>
            <ul id="chat_online_list">
            </ul>
        </div>
        <!-- chat_combo_box is used to align the Message and Input boxes-->
        <div id="chat_combo_box">
            <!-- chat_messages_box shows chat messages-->
            <div id="chat_messages_box">
                <div id="chat_messages">
                </div>
            </div>
            <!-- chat_input_box is where users enter message text-->
            <div id="chat_input_box">
                <form method="post" id="chat_form">
                    <input type="text" id="chat_input" />
                    <input type="submit" value="Send" id="chat_button" />
                </form>
            </div>
        </div>
    </div>
</div>