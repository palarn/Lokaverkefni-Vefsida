function validateForm()
{
	document.getElementById("error1").style.display="block";
	try
	{
		var x=document.getElementById("net").value;
		if (x==null || x=="") throw "Settu inn löglegt netfang";
	}
	catch (err)
	{
	var y=document.getElementById ("e");
	y.innerHTML="" + err +"";
  	}
  	simi();
}

function simi()
{
	document.getElementById("error1").style.display="block";
	try
	{
		var x=document.getElementById("numer").value;
		if (x==null || x=="") throw "Athugaðu símanúmerið aftur";
	}
	catch (err)
	{
	var y=document.getElementById ("e1");
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