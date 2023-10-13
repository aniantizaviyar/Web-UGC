<script>
    		var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?92206';
    		var s = document.createElement('script');
    		s.type = 'text/javascript';
    		s.async = true;
    		s.src = url;
    		var options = {
  				"enabled":true,
  				"chatButtonSetting":{
      			"backgroundColor":"#4dc247",
      			"ctaText":"",
      			"borderRadius":"25",
      			"marginLeft":"0",
      			"marginBottom":"50",
      			"marginRight":"50",
      			"position":"right"},
  				"brandSetting":{
      			"brandName":"UGC Logistics",
      			"brandSubTitle":"We Care What We Deliver",
      			"brandImg":"",
      			"welcomeText":"Hi there!\nHow can I help you?",
      			"messageText":"",
      			"backgroundColor":"#0a5f54",
      			"ctaText":"Start Chat",
      			"borderRadius":"25",
      			"autoShow":false,
      			"phoneNumber":"6281284596614"}
			};
    		s.onload = function() {
        		CreateWhatsappChatWidget(options);
    		};
    		var x = document.getElementsByTagName('script')[0];
    		x.parentNode.insertBefore(s, x);
</script>