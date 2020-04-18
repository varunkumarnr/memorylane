var profilepic = function(event) {
    var output = document.getElementById('profile-img');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  };
  
  var loadFile = function(event) {
      var output = document.getElementById('bg-img');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) 
      }
    };
  