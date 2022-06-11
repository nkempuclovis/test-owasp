<html>
<head>


<title>hackxor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />

<style type="text/css">
div.foo
{
width:70em;
padding:10px;
margin-left: auto;
margin-right: auto;
}
</style>
</head>

<body>
<div class="foo">
<h1><center>hackxor</center></h1>
<p><p>

<h3><a name="intro">About hacxkor</a> </h3>
Hackxor is a webapp hacking game where players must locate and exploit vulnerabilities to progress through the story. Think WebGoat but with a plot and a focus on realism&difficulty. Contains XSS, CSRF, SQLi, ReDoS, DOR, command injection, etc
<br><br>
For more information see the <a href="http://hackxor.sourceforge.net">hackxor homepage</a>. The first two levels can be played online there.
<p>
<h3><a name="full">The scene</a></h3>
You play a professional blackhat hacker hired to track down another hacker by any means possible. Start by checking your email on wraithmail, and see how far down the rabbit hole you can get. 
The key websites in this game are http://wraithmail http://cloaknet http://gghb and http://hub71 so if you don't feel like tracking down your target you may hack them in any order. 
Each website will be properly introduced through the plot. 

<h3><a name="full">Setup instructions</a></h3>
<ol>
<li>Note the IP of this host (it will be displayed on the console when the VM boots).</li>
<li>Configure your hosts file (/etc/hosts on Linux, C:\Windows\System32\drivers\etc\hosts on Windows) to redirect the following domains to the IP of hackxor: wraithmail, wraithbox, cloaknet, GGHB, hub71, utrack. 
For example, the line in the hosts file will look like:<br><br>
<?php
echo $_SERVER['SERVER_ADDR'];
?> owaspbwa cloaknet gghb hub71 utrack wraithbox wraithmail<br><br>
<li>
Browse to <a href="http://wraithmail">http://wraithmail</a> and login with username:algo password:smurf </ol>
If you can't edit the hosts file for some reason, you could use the 'Override hostname resolution' option in <a href="http://portswigger.net/burp/proxy.html">Burp proxy</a><p>
<!--
<b>Troubleshooting the installation:</b><br>
<ul><li>
If http://wraithmail loads everything is probably working.<li>
First: Try 'nmap wraithmail' in a shell to see if port 8080 is open. If it is open, contact me! Otherwise:<li>
Second: Try nmap theipofhackxor. If that succeeds, fix your hosts file. Otherwise:<li>
Third: If you really can't get any network contact with the VM, check the VM settings in the VM manager<li>
(this does not involve logging into the virtual machine). Make sure it is set to NAT. If that doesn't fix it:<li>
Fourth: Try changing the VM network setting to 'Bridged'. This will mean other people on the LAN can access it.<li>
Fifth: If all else fails, contact me on twitter.
</ul>
<p>
-->
<p>
<h3><a name="hints">Hints&tips</a></h3>
<a href="http://securitythoughts.wordpress.com/2010/03/22/vulnerable-web-applications-for-learning/">Try some other vulnerable webapps</a><br><br>
<a href="http://hackxor.sourceforge.net/cgi-bin/hints.pl"> Read some cryptic spoiler-free hints</a> (Last updated 11th May)

<h3><a name="credits">Credits</a></h3>
By <a href="http://twitter.com/albinowax">albino</a> (Contact via twitter or <img src="http://hackxor.sourceforge.net/addleft.png"><img src="http://hackxor.sourceforge.net/addright.jpg">)
<br>
Thanks to:<br>
sla.ckers<br>
null<br>
everything2<br>
sourceforge<br>
everyone who codes vulnerable software
</div>
</body>


</html>