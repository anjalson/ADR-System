<!DOCTYPE html>
<html>
<head>
	<title>ADR Contact Form</title>
</head>
<body>
	<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:10px;}
h2,p{
	text-align: center;
	font-family:"Lucida",sans-serif;
	font-size: 20px;
	color:blue; 

}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:430px;
	padding:14px;
	height:620px; 
}
	/* ----------- basic ----------- */
	#basic{
		border:solid 2px #DEDEDE;	
	}
	#basic h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#basic p{
		font-size:11px;
		color:#666666;
		margin-bottom:40px;
		border-bottom:solid 1px #dedede;
		padding-bottom:10px;
	}
	#basic label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#basic .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#basic input{
		float:left;
		width:200px;
		margin:2px 0 30px 10px;
	}
	#basic button{ 
		clear:both;
		margin-left:150px;
		background:#888888;
		color:#FFFFFF;
		border:solid 1px #666666;
		font-size:11px;
		font-weight:bold;
		padding:10px 16px ;
	}
	
	/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;

	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	}
	#stylized label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#stylized .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#stylized input{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:250px;
		margin:2px 0 20px 10px;
	}
	#stylized button{ 
		clear:both;
		margin-left:160px;
		width:125px;
		height:31px;
		background:#444;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
		cursor:pointer; 
	}
	#stylized button:hover{ 
		background-color:green;
		} 


</style>
<div id="stylized" class="myform">
	<h2>User Contact Form</h2>
	<p>Kindly Feel free to tell us more regarding your case </p>

<form method="post" action="process.php">

    <label>Name
        <span class="small">Add your name</span>
    </label><br>
<input type="text" name="name">
    <label>Email
        <span class="small">Enter a Valid Email</span>
    </label><br>
<input type="email" name="email2">
    <label>Phone
        <span class="small">Add a Phone Number</span>
    </label><br>
<input type="text" name="phone">

<br />
<br />
    <label>Priority  
        <span class="small">Priority Level  </span>
    </label><br>

<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<br />
<br />
    <label>Type
        <span class="small">Type of Contact</span>
    </label><br>
<select name="type" size="1">
<option value="update">Follow-up</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New ADR reporting</option>
<option value="new">Any other</option>
</select>
<br />
<br />
<br />


    <label>Message
        <span class="small">Type Your Message</span>
    </label><br>
<textarea name="message" rows="6" cols="50"></textarea><br />

    <button class="btns" type="submit" name="submit" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div> <!-- end of form class -->
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	
</body> 
</html>