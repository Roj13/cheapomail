
var newu = document.getElementById("newuser");
var comp=document.getElementById("compose");
   comp.onclick=function (){document.getElementById("sender").style.display="block";};

newuser.onclick=function (){

	new Ajax.Request('newuser.php',
	{
	      method: "get",
	      onSuccess: functionName
	});

	function functionName(ajax) {
	  document.getElementById("typee").innerHTML=ajax.responseText;
	}

};


function validateForm() {alert();
    var f = document.forms["myForm"]["firstname"].value;
    var l = document.forms["myForm"]["lastname"].value;
    var p = document.forms["myForm"]["password"].value;
    var u = document.forms["myForm"]["username"].value;

    if (f==null || f=="") {
        alert("First name must be filled out");
        return false;
    }

    if (l==null || l=="" ) {
        alert("Last name must be filled out");
        return false;
    }

    if (p==null || p=="" || p.length<8) {

        alert("Password must be filled out and contain atleast 8 alphanumeric characters with a uppercase letter");
        return false;
}

    if (u==null || u=="") {
        alert("Username must be filled out");
        return false;
    }

};