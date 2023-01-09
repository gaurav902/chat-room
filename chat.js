$(function() {
    // Retrieve the chat messages from the server
    function getMessages() {
      $.getJSON("get_messages.php", function(data) {
        // Render the messages using a Handlebars template
        var template = Handlebars.compile($("#message-template").html());
        $("#messages").html(template({messages: data}));
      });
    }
  
    // Send a chat message to the server
    $("#message-form").submit(function(e) {
      e.preventDefault();
      var message = $("#message").val();
      $.post("send_message.php", {message: message}, function(data) {
        getMessages();
      });
    });
  
    // Refresh the chat messages every 5 seconds
    setInterval(getMessages, 5000);
  });
  