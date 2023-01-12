
    <button id="rzp-button1" hidden>Pay</button>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "{{env('RAZORPAY_KEY')}}",
            "amount": "{{$data['amount']}}",
            "currency": "INR",
            "name": "Pixel2022",
            "description": "{{$data['event_name']}}",
            "image": "images/pixel-logo.svg",
            "order_id": "{{$data['order_id']}}",
            "remember_customer" : "false",
            "callback_url": "/paymentStatus",
            "prefill": {
                "name": "{{$data['name']}}",
                "email": "{{$data['email']}}",
                "contact": "{{$data['contact']}}"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        window.onload = function(){
            document.getElementById('rzp-button1').click();
        };
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>
