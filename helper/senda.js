function validateForm()
{
	document.getElementById("error1").style.display="block";
	try
	{
		var x=document.getElementById("net").value;
		if (x==null || x=="") throw "Fylltu út alla reiti";
	}
	catch (err)
	{
	var y=document.getElementById ("e");
	y.innerHTML="" + err +"";
  	}
}



/*
$('#samband').submit(validate)

function validate()
{
	var name = $('input#name'), 
}

function senda(){
	document.getElementById()

}
*/