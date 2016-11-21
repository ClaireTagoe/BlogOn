

$(document).ready(function(){
  $("#search").validate({
    rules : {
      person : {
        required : true
      },
      search_term : {
        required : true
      }
    },
    messages : {
      person : {
        required: "Please enter a valid name"
      },
      search_term : {
        required: "Please enter a string to search"
      }
    }
  });

  $("#login").validate({
    rules : {
      username : {
        required : true
      },
      password : {
        required : true
      }
    },
    messages : {
      username : {
        required : "Please enter a name"
      },
      password : {
        required : "Password field cannot be empty"
      }
    }
  })
  });
