<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>

<article>
    
    <h3>PROJECT 4</h3>
    <h4>
        This is the chat-enhanced version of the Blubber blogging application.
        Authenticated users will be able to interact with others in realtime.
        The chat uses the Pusher WebSocket to facilitate the interaction.
        Technologies utilized include the core framework, PHP, JavaScript, and
        AJAX.
    </h4>
    
    <h4>
        FEATURES
    </h4>

    <ul>
	    <li>Verify 'current password' is correct before proceeding</li>
	    <li>Verify 'new email' isn't already in DB</li>
	    <li>Update only modified user information</li>
    	<li>Admin/Superuser are allowed to delete other users</li>
	    <li>User cannot delete her/himself</li>
        <li>Admin/Superuser are allowed to delete posts</li>
        <li>Real-time chat for authenticated users</li>
    </ul>

    <h3>Sample Admin Email: i.byrnison@example.com Password: password</h3>
    <h3>Sample User Email: l.scoresby@example.com Password: password</h3>

</article>
