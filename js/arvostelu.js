var tahdet = document.querySelectorAll("input[type=radio]");
//console.log(tahdet);
for(var i = 0; i<tahdet.length; i++){
    tahdet[i].addEventListener("click", saveRating);
}

  		
  		function saveRating(){
            var rating = this.value;
  			console.log(this);
           var martti = this.dataset.kuva;
           
  			
  	var params  = "rating=" + rating + "&kuva=" + martti;
     console.log(this.dataset.kuva);
      request = new ajaxRequest()
      request.open("POST", "saveRating.php", true)
      // To POST data like an HTML form, add an HTTP header with setRequestHeader()
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
          if (this.status == 200)
            if (this.responseText != null)
				console.log(this.responseText);
      }
      
      //pecify the data you want to send in the send() method
      request.send(params)
    }

    function ajaxRequest()
    {
      try { var request = new XMLHttpRequest() }
      catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
          try { request = new ActiveXObject("Microsoft.XMLHTTP") }  // code for IE6, IE5
          catch(e3) {
            request = false
      } } }
      return request
  			
  		}