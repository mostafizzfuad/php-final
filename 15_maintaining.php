<!-- 
    
A. To keep track of data between HTTP requests, data can be stored in cookies using the $_COOKIE array,
or it can be stored on the web server via session variables in the $_SESSION array.

B. setcookie() and session_start() functions below must be called before any other output is produced unless
output_buffering is turned on in php.ini.

C. $_COOKIE – for accessing HTTP cookies which are stored on the client and are transmitted back to the
web server in every HTTP request.

1. By default, cookies expire with the session. Closing the browser (not just the tab) ends the session.
setcookie("age", "21");

2. Cookies can be given expiration dates so they persist even after the browser is closed:
// Cookie expires in 24 hours
setcookie("name", "Betty", time() + 60 * 60 * 24);

3. Getting the value of a cookie:
echo $_COOKIE["name"];
// Print contents of name cookie
Note that $_COOKIE will not have values set from setcookie() until the php script is requested after a
call to setcookie.

4. Deleting a cookie:
setcookie("name", FALSE);

5. Warning: Since cookies are stored on the client, they should not be used to store sensitive data.

D. $_SESSION – for accessing session variables which are stored on the web server. Variables are
associated with a unique session ID which is stored in a cookie or passed in the URL if cookies are
disabled. This technique is ideal for storing sensitive data since the data is not stored on the client.


Create a session (and a session ID) if one doesn’t already exist:
session_start();

If you are curious what the session ID looks like:
echo session_id();

Set a session variable that is stored on the web server and tied to the user’s session ID:
$_SESSION["name"] = "Betty";

Get the value of a session variable that is tied to the user’s session ID:
$auto = $_SESSION["name"];

Session variables are cleared when the browser is closed or when destroying the session explicitly:
session_destroy(); 

-->