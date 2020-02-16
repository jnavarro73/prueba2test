<?php

//Exercise test 3


?>
<h1>JS </h1>
<div id='outputDiv' name='outputDiv'>
</div>
<script type='text/javascript'>
/**
var DB = []

model("add", {id: 1, name: "Joe", age: 32, address: "Muntaner 262, Barcelona"}, schema)
schema = ["id", "name", "age"]
**/

function model(method,data,schema){

	var responseControl = [];
	var DB = [];
	
	if(method == 'add'){

		//console.log(data);
		//console.log(schema);
		var keysdata = Object.keys(data);
		//console.log(keysdata);
		//var isValid= true;
		
		keysdata.forEach(function(entry) {
			//console.log('keysdata loop'+entry);
							//console.log(schema);
    						if (schema.indexOf(entry) === -1) { responseControl.push(entry+" was not added because not allowed by the schema "); }
    						//else { console.log(entry+ " está en array");}
    					});
		
		schema.forEach(function(entry) {
			//console.log('schema loop'+entry);
    						if (keysdata.indexOf(entry) === -1) { responseControl.push(entry+" was not present in the data ");}
    						//else { console.log(entry+ " está en array");}
    					});
		
		

	}else{responseControl.push(method+" Method not allowed");}

	if(responseControl.length == 0 ) { DB.push(data);
		var outputMessage = JSON.stringify(DB)+'=> OK';
	}
	var outputMessage = JSON.stringify(data)+'=>'+responseControl.toString();
	var outputDiv = document.getElementById("outputDiv");
	outputDiv.innerHTML = outputDiv.innerHTML+"<br>"+outputMessage;
	
	return outputMessage;
}




///////////////// TEST /////////////
var schema = ["id", "name", "age"];




console.log(model("add", {id: 1, name: "Joe", age: 32}, schema));
console.log(model("add", {id: 1, name: "Joe", age: 32, address: "Muntaner 262, Barcelona"}, schema)); //extra address
console.log(model("update", {id: 1, name: "Joe", age: 32, address: "Muntaner 262, Barcelona"}, schema)); //Not add metchod
console.log(model("add", {id: 1, name: "Joe",  address: "Muntaner 262, Barcelona"}, schema)); //not age and extra address
console.log(model("add", { age: 32, address: "Muntaner 262, Barcelona",phone:"5555555"}, schema)); //extra address not id not age
console.log(model("add", {id: 1, name: "Joe"}, schema)); //not age
console.log(model("add", { name: "Joe"}, schema)); //not age not id 

</script>