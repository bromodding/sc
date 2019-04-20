<script src="https://snippets.freshchat.com/js/fc-pre-chat-form-v2.js"></script>
<script>
  var preChatTemplate = {
    //Form header color and Submit button color.
    mainbgColor: '#8937df',
    //Form Header Text and Submit button text color.
    maintxColor: '#fff',
    //Chat Form Title
    heading: 'GadgetGod',
    //Chat form Welcome Message
    textBanner: 'We can\'t wait to talk to you. But first, please take a couple of moments to tell us a bit about yourself.',
    //Submit Button Label.
    SubmitLabel: 'Start Chat',
    //Fields List - Maximum is 5
    //All the values are mandatory and the script will not work if not available.
    fields : {

      field2 : {
        //Type for Name - Do not Change
        type: "name",
        //Label for Field Name, can be in any language
        label: "Name",
        //Default - Field ID for Name - Do Not Change
        fieldId: "name",
        //Required "yes" or "no"
        required: "yes",
        //Error text to be displayed
        error: "Please Enter a valid name"
      },
      field3 : {
        //Type for Email - Do Not Change
        type: "email",
        //Label for Field Email, can be in any language
        label: "Email",
        //Default - Field ID for Email - Do Not Change
        fieldId: "email",
        //Required "yes" or "no"
        required: "yes",
        //Error text to be displayed
        error: "Please Enter a valid Email"
      },
  
    
    }
  };
  window.fcSettings = {
    token: "f1a25461-2697-44b0-a426-639e2d589aa0",
    host: "https://wchat.freshchat.com",
    config: {
      cssNames: {
        //The below element is mandatory. Please add any custom class or leave the default.
        widget: 'custom_fc_frame',
        //The below element is mandatory. Please add any custom class or leave the default.
        expanded: 'custom_fc_expanded'
      }
    },
    onInit: function() {
      console.log('widget init');
      fcPreChatform.fcWidgetInit(preChatTemplate);
    }
  };
</script>
<script src="https://wchat.freshchat.com/js/widget.js" async></script>