Stripe.setPublishableKey('pk_test_sUP3D4Zov6w8D9idd71kQW7l');
var $form  = $('#checkout-form');


$form.submit(function(event){
 $('#charge-error').addClass('hidden');
 $form.find('button').prop('disables',true);

Stripe.card.createToken({
number: $('#card-number').val(),
cvc: $('#card-cvc').val(),
exp-month: $('#card-expiry-month').val(),
expy-year: $('#card-expiry-year').val(),
name: $('#card-name').val()





},stripeResponseHandler);
return false;
});

function stripeResponseHandler(status,response){
	if(response.error){
		$('#charge-error').removeClass('hidden');
		$('#charge-error').text(response.error.message);
         $form.find('button').prop('disabled',false);
	}else{
		var token = response.id;
		$form.append($('<input type="hidden" name="stripeToken"/>').val(token));
		$form.get(0).submit();
	}
}