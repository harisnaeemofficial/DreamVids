
/**
 * Scripts/test.js
 *
 * TEST SCRIPT
 */

function postMessage() {

 	marmottajax.post({

 		url: _webroot_ + "posts",
 		json: true,

 		options: {

 			"post-message-submit": "lol",
 			channel: El("#channel-social-message-submit").getAttribute("data-channel-id"),
 			"post-content": El("#post-content").value

 		}

 	}).then(function(channel) {

 		return function(result) {
	
 			El("#channel-posts").addFirst(Co('<channel-post avatar="${avatar}" channel="${channel}" message="${message}"/>', {
	
 				avatar: _my_avatar_,
 				channel: _my_pseudo_,
 				message: result.content
	
 			}));

 		}

 	}(El("#channel-social-message-submit").getAttribute("data-channel-id")));

 	El("#post-content").value = "";

}

new Script({

	pages: ["channel"],

	call: function() {

		var channelSocialMessageSubmit = El("#channel-social-message-submit");

		if (channelSocialMessageSubmit) {

			channelSocialMessageSubmit.onclick = postMessage;

			El("#post-content").on("keydown", function(event) {

			    if (event.keyCode === 13 && event.ctrlKey) {

			        postMessage();

			    }

			});

		}

	}

});