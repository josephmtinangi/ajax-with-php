# AJAX 

- Asynchronous JavaScript and XML
- Enables browser to send requests in the background

## Ajax Components
- HTML, CSS and DOM
- XML
- XMLHttpRequest
- JavaScript

## Ajax Requests
- XMLHttpRequest
- new
- open(method, url, async)
- send()

## GET vs. POST
- GET - retrieve data only
- POST - sending/changing data

## Ajax Responses
- Text or XML
- responseText
- responseXML

### Parse the Response
- XML
- JSON
  Example
  var person = JSON.parse(response)

## States and Events

## Ready States
  
  `readyState`

  - 0 Connection created
  - 1 Connection Opened
  - 2 Request sent
  - 3 Response In Progress
  - 4 Request Complete

  `onreadystatechange`

## Detect Ajax Requests

```
// JavaScript
xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
```

```
// PHP
function is_ajax_request() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(is_ajax_request()) {
	echo "Ajax response";
} else {
	echo 'Non-Ajax response';
}
```

### Note
 The headers are not secure, can be spoofed.