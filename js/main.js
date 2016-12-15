var xhr = new XMLHttpRequest();


var showImages = function(){
  if(xhr.readyState === 4 && xhr.status === 200){
    var json = JSON.parse(xhr.responseText);
    var output = '';
    for(var i in json){
      output += '<li>' +
                    '<figure>' +
                        '<a href="' +json[i].Polku +'" data-lightbox="galleriaetusivu"><img src="' + 
json[i].Polku + '" class="kuva"></a>' +
                         '<figcaption>' +
                            '<h3>' + json[i].Nimi + '</h3>' +
                         '</figcaption>' +
                    '</figure>' +
                '</li>';
    }
      
try{
      document.querySelector('ul').innerHTML = output;  
}
catch(e){
}
  }
}


xhr.open('GET', 'haeKuvat.php');
xhr.onreadystatechange = showImages;
xhr.send();