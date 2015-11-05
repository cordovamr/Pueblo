var restRequest = gapi.client.request({
	'path': '/urlshortener/v1/url',
	'params': {'shortUrl' : 'http"//goo.g1/fbsS'}
});

rpcRequest.execute(function(jsonResponse. rawResponse) {
	//Handle request result
});

var clientId = ............;

var scopes = 'https://www.googleapis.com/auth/calendar';

gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false}, handleAuthResult);