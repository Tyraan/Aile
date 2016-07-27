function addInput()
    {
	var form = document.getElementById("firstForm");
	var ol = form.getElementsByTagName("ol")[0];
	var liList = ol.getElementsByTagName("li");
	var newLi = document.createElement('li');
	var newspan = document.createElement('span');
	newspan.id  = (liList.length+1).toString();
	var p  = document.createElement('p');
	p.textContent = "this is made by javascript!";
	p.className = "original";
	newspan.appendChild(p);
	newLi.appendChild(newspan);
	ol.appendChild(newLi);
}

function addRandPoem(){
    $('#firstspan').load('test/testload');
}
function addTotalPoem(){
	$.get(
		'test/testload',
		{},
		function(data){			
			var innerhtml=data;
			console.log(data);
		$('.firstol').append($('<li></li>').append($('<span></span>').attr('class','post-meta').append($('<p></p>').html(data).attr('class','original'))));
		   
		}
	);
}




