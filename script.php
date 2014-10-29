<?php
	// URI to chatwork API
	const URI = 'https://api.chatwork.com/v1/rooms/%s/messages';
	// Token of chatwork API
	const API_TOKEN = 'abcdefghijklm';
	// Error message to be sent
	const MESSAGE = "[Auto remind BOT]\n[To:775585] Nguyen Van Vuong\n...";
	// Chatwork Room ID to send  message to
	const ROOM_ID = '12345678';

	sendRoomMessage(API_TOKEN, ROOM_ID, MESSAGE);

	/**
	 * Send message to chatwork group
	 * @param  $api_token    Access token
	 * @param  $room_id      Room id
	 * @param  $message      Message
	 */
	function sendRoomMessage($api_token, $room_id, $message)
	{
		$params = array(
			'body' => $message,
		);

		// Init cURL session
		$ch = curl_init();
		// Set Options on the cURL session
		// Set the URL to fetch
		curl_setopt($ch, CURLOPT_URL, sprintf(URI, $room_id));
		// Set HTTP header
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-ChatWorkToken: '. $api_token));
		// Set method to POST
		curl_setopt($ch, CURLOPT_POST, 1);
		// Set data to post
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params, '', '&'));
		// Set return the transfer as a string  of the return value of curl_exec()
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// Perform cURL session
		$response = curl_exec($ch);
		// Close cURL session
		curl_close($ch);
		
		return $response;
	}