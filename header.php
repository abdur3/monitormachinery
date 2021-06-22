<?php
?><head>
<title>CONTROL VIEW</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<style type="text/css">
            .button
            {
            			background: url(images/off.png) no-repeat;
            			cursor:pointer;
                        border: none;
						width:65px; 
  						height:100px;
						display:inline-block; 
  						background-size: 90%;
						padding: 85px 0 5px;
						font-size:10px;
            }
        </style>
<script language="javascript" type="text/javascript">
<!--
// Get the HTTP Object
var v1="0";
var v2="0";
var v3="0";
var v4="0";
var v5="0";
var v6="0";
var v7="0";
var v8="0";
var vs="0";
function getHTTPObject(){
if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
else if (window.XMLHttpRequest) return new XMLHttpRequest();
else {
alert("Your browser does not support AJAX.");
return null;
}
}
// Change the value of the outputText field
function setOutput(element){
str1 = element.name;
if(str1=="AAAA")
{
	if(document.getElementById('inputText1').value=="DEVICE1ON")
	{
		
		document.getElementById('outtext').value="DEVICE1ON";
	}
	else
	{
		
		document.getElementById('outtext').value="DEVICE1OFF";
	}
}
if(str1=="DDDD")
{
	if(document.getElementById('inputText4').value=="DEVICE4ON")
	{
		
		document.getElementById('outtext').value="DEVICE4ON";
	}
	else
	{
		
		document.getElementById('outtext').value="DEVICE4OFF";
	}

}
if(str1=="BBBB")
{
	if(document.getElementById('inputText2').value=="DEVICE2ON")
	{
		
		document.getElementById('outtext').value="DEVICE2ON";
	}
	else
	{
	
	document.getElementById('outtext').value="DEVICE2OFF";
	}
}
if(str1=="CCCC")
{
	if(document.getElementById('inputText3').value=="DEVICE3ON")
	{
		
		document.getElementById('outtext').value="DEVICE3ON";
	}
	else
	{
		document.getElementById('inputText3').value="DEVICE3ON";
		document.getElementById('outtext').value="DEVICE3OFF";
	}
}
if(str1=="EEEE")
{
	if(document.getElementById('inputText5').value=="DEVICE5ON")
	{
		
		document.getElementById('outtext').value="DEVICE5ON";
	}
	else
	{
		
		document.getElementById('outtext').value="DEVICE5OFF";
	}
}
if(str1=="FFFF")
{
	if(document.getElementById('inputText6').value=="DEVICE6ON")
	{
		
		document.getElementById('outtext').value="DEVICE6ON";
	}
	else
	{
		
		document.getElementById('outtext').value="DEVICE6OFF";
	}
}
if(str1=="GGGG")
{
	if(document.getElementById('inputText7').value=="DEVICE7ON")
	{
		
		document.getElementById('outtext').value="DEVICE7ON";
	}
	else
	{
		
		document.getElementById('outtext').value="DEVICE7OFF";
	}
}
if(str1=="HHHH")
{
	if(document.getElementById('inputText8').value=="DEVICE8ON")
	{
		
		document.getElementById('outtext').value="DEVICE8ON";
	}
	else
	{
		
		document.getElementById('outtext').value="DEVICE8OFF";
	}
}
}

function doWork(element){
httpObject = getHTTPObject();
	if (httpObject != null) 
	{
		str = element.name;
		if(str=="AAAA")
		{
			if(document.getElementById('inputText1').value=="DEVICE1ON")
			{
				document.getElementById('inputText1').style.backgroundImage = "url('images/off.png')";
			
				v1="0";

			}
			else if(document.getElementById('inputText1').value=="DEVICE1OFF")
			{
			document.getElementById('inputText1').style.backgroundImage = "url('images/on.png')";
				v1="1";
			}
		}
		if(str=="DDDD")
		{
			if(document.getElementById('inputText4').value=="DEVICE4ON")
			{
			document.getElementById('inputText4').style.backgroundImage = "url('images/off.png')";
			
				v4="0";
			}
			else
			{
			document.getElementById('inputText4').style.backgroundImage = "url('images/on.png')";
			
				v4="1";
			}
		}
		if(str=="BBBB")
		{
			if(document.getElementById('inputText2').value=="DEVICE2ON")
			{
			document.getElementById('inputText2').style.backgroundImage = "url('images/off.png')";
			
				v2="0";
			}
			else
			{
			document.getElementById('inputText2').style.backgroundImage = "url('images/on.png')";
			
				v2="1";
			}
		}
		if(str=="CCCC")
		{
			if(document.getElementById('inputText3').value=="DEVICE3ON")
			{
			document.getElementById('inputText3').style.backgroundImage = "url('images/off.png')";
			
				v3="0";
			}
			else
			{
			document.getElementById('inputText3').style.backgroundImage = "url('images/on.png')";
			
				v3="1";
			}
		}
		if(str=="EEEE")
		{
			if(document.getElementById('inputText5').value=="DEVICE5ON")
			{
			document.getElementById('inputText5').style.backgroundImage = "url('images/off.png')";
			
				v5="0";
			}
			else
			{
			document.getElementById('inputText5').style.backgroundImage = "url('images/on.png')";
			
				v5="1";
			}
		}
		if(str=="FFFF")
		{
			if(document.getElementById('inputText6').value=="DEVICE6ON")
			{
			document.getElementById('inputText6').style.backgroundImage = "url('images/off.png')";
			
				v6="0";
			}
			else
			{
			document.getElementById('inputText6').style.backgroundImage = "url('images/on.png')";
			
				v6="1";
			}
		}
		if(str=="GGGG")
		{
			if(document.getElementById('inputText7').value=="DEVICE7ON")
			{
			document.getElementById('inputText7').style.backgroundImage = "url('images/off.png')";
			
				v7="0";
			}
			else
			{
			document.getElementById('inputText7').style.backgroundImage = "url('images/on.png')";
			
				v7="1";
			}
		}
		if(str=="HHHH")
		{
			if(document.getElementById('inputText8').value=="DEVICE8ON")
			{
			document.getElementById('inputText8').style.backgroundImage = "url('images/off.png')";
			
				v8="0";
			}
			else
			{
			document.getElementById('inputText8').style.backgroundImage = "url('images/on.png')";
			
				v8="1";
			}
		}
vs="*"+v1+v2+v3+v4+v5+v6+v7+v8;
httpObject.open("GET", "http://www.iotclouddata.com/iotlog/408/setstatus.php?var1="+vs, true);
httpObject.send(null);
httpObject.onreadystatechange = setOutput(element);
}
}
var httpObject = null;
var src = null;
var pno=null;
//-->
</script>

</head>