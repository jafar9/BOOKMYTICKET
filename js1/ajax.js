
		function lettersonly(input)
	{
		var regex=  /[^a-z]/gi;
		input.value=input.value.replace(regex,"");
	}
		
			function numbersonly(input)
	{
		var regex=  /[^0-9]/g;
		input.value=input.value.replace(regex,"");
	}

		  var wss_i=0;
			var wss_array=["26.jpg","27.jpg","28.jpg"];
			var wss_elem;
			function wssNext()
			{ 
				wss_i++;
				if(wss_i > (wss_array.length-1))
					{
						wss_i=0;
					}
				setTimeout('wssSlide()',1000);
			}
			function wssSlide()
			{
      	wss_elem.src=wss_array[wss_i];
				setTimeout('wssNext()',2000);
			}

function checkusername()
	   {
		var status=document.getElementById("unamestatus");
		var u=document.getElementById("uname").value;
		if(u != "")
			{
				status.innerHTML='checking.....';
				var hr=ajaxObj("POST","pwdupdate.php");
				hr.onreadystatechange=function()
				{
					if(ajaxReturn(hr) == true)
						{
							status.innerHTML=hr.responseText;
						}
				}
				var v ="name2check="+u;
				hr.send(v);
			}
	}

//modular portion that we will externalize in a moment

function ajaxObj(meth,url)
{
	var x= new XMLHttpRequest();
	x.open(meth, url, true);
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;
}

function ajaxReturn(x)
{
	if(x.readyState == 4 && x.status == 200)
		{
		return true;
		}
}



