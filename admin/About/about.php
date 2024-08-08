<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<div><h1>About</h1></div>
<?php

// Define information about the chatbot
$chatbotName = "ChatGPT";
$chatbotVersion = "v2";
$chatbotDescription = "ChatGPT is an AI-powered chatbot developed by OpenAI.";
$chatbotPurpose = "It is designed to engage in natural language conversations and assist users with various tasks.";

// Print the about information
echo "Chatbot Name: " . $chatbotName . "\n";
echo "Version: " . $chatbotVersion . "\n";
echo "Description: " . $chatbotDescription . "\n";
echo "Purpose: " . $chatbotPurpose . "\n";

?>
