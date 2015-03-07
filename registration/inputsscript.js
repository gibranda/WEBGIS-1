 var i=3;
 function addfield() 
    {
       
     var button1 = document.getElementById('s');
        var button2 = document.getElementById('b');
        button1.remove();
        button2.remove();
        var x=document.getElementById('frm');
       // alert(x);
	x.innerHTML +="<p class='contact'> Enter Easting </p>";
		
        var newTextBox=document.createElement('input');
        newTextBox.type='text';
        newTextBox.name="X[]";
        newTextBox.required="";
        x.appendChild(newTextBox);
	var newBreak=document.createElement('br');
        x.appendChild(newBreak);
        var x=document.getElementById('frm');
       // alert(x);
	x.innerHTML +="<p class='contact'> Enter Northing </p>";
        var newTextBox=document.createElement('input');
        newTextBox.type='text';
        newTextBox.name="X[]";
        newTextBox.required="";
	newTextBox.setAttribute('label','Enter' );
        x.appendChild(newTextBox);
        var newBreak=document.createElement('br');
        x.appendChild(newBreak);
      
        var b1=document.createElement('input');
        b1.setAttribute("type",'Submit'); 
        b1.name = 'Submit';
        b1.id= 's';
        b1.setAttribute("class", 'button');
        x.appendChild(b1);
        
        var b2=document.createElement('input');
        b2.type = 'button';
        b2.name = 'add';
        b2.id= 'b';
        b2.value='Add Fields';
        //b2.onclick='addfield();';
        b2.setAttribute("onclick", 'addfield()');
        b2.setAttribute("class", 'button');
        x.appendChild(b2);}