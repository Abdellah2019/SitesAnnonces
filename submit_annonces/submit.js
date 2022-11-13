var g_filename='';
function dragNdrop(event){
	var filename=URL.createObjectURL(event.target.files[0]); //will store file name with src
	g_filename=filename;
	var preview=document.getElementById("preview"); //the dic where we will show image
	var previewImg=document.createElement("img");
	previewImg.style.height="200px";
	previewImg.style.width="200px";
	previewImg.setAttribute("src",filename);
	preview.innerHTML="";
	preview.appendChild(previewImg);
}

//2. drag
function drag(){
	//while dragging it will fire this function that will add the following class
	document.getElementById("uploadFile").parentNode.className="draging draBox";
}
//3. finally the drop()
function drap(){
	document.getElementById("uploadFile").parentNode.className='dragBox';
}
//==========Submit file 
//function 