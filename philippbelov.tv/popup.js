var its;
var browserName;
var browserNameLong;
var browserNew;
var preloadFlag = false;
var Macintosh = navigator.userAgent.indexOf('Mac')>0;

function popup(desktopURL,width,height,windowName) 
{
		if (Macintosh) 
		{
			if (browserNameLong == "IE4") 
			{
				newheight = parseInt(height + 17);
			
			}
			else if (browserNameLong == "IE4.5") 
			{
				newheight = parseInt(height + 17);
			}
			else 
			{
				newheight = height;
			}
		}
		else 
		{ 
			newheight = height; 
		}
		
		if (scroll == '') 
		{ 
			scroll = 'no'; 
		}
		
		window.open(desktopURL, windowName, "toolbar=no,location=no,status=yes,menubar=no,scrollbars=no,width="+width+",height="+newheight+",resizable=no" );
}