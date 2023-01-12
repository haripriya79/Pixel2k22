let script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
$("#register-code-combat").on('submit', function (e) {
    e.preventDefault();
});
function resetCodeCombat() {

    document.getElementById('submit_c').disabled = false;
    $('#body').css({ overflow: 'scroll' });
    document.getElementById("register-code-combat").reset();
    document.getElementById("register-code-combat").style.display = "block";
    document.getElementById("form-done_c").style.display = "none";
    document.getElementById("form-fail_c").style.display = "none";
    $("#user-availability-status").html("")
    $("#user-availability-status-event").html("");
    $("#team-size-validater").html("");
    $("#team-name-validater").html("");
    $("#team-member-validater").html("");

}

function checkoutCD(event_name) {
    let email = document.getElementById('registered_id').value;


    $("#user-availability-status").html("");
    //email validation
    if (email.length == 0) {
        $("#user-availability-status").html("This field is Requied");
        return;

    }

    $.ajax({
        type: 'POST',
        url: '/createOrder',
        datatype: 'json',
        data: {
            '_token': $('meta[name="_token"]').attr('content'),
            'registered_id': email,
            'event_name': event_name,
            'team_size': 1,
        },
        success: function(result) {
            // orderId = result;
            if (result === 'not registered') {
                $("#user-availability-status").html("Invalid Registration ID");

            } else if(result === 'paid') {
                $("#user-availability-status").html("You have already paid for this event");
            } else if(result === 'meme') {
                document.getElementById("register-code-combat").reset();

                document.getElementById("register-code-combat").style.display = "none";
                document.getElementById("form-done_c").style.display = "block";
            }
            else if (result == 'paid') {
                $("#user-availability-status").html("You have already paid for this event");
            } else {

                result = JSON.parse(result);
                let options = {
                    "key": result.rp_key,
                    "amount": result.amount,
                    "currency": "INR",
                    "name": "Pixel2022",
                    "description": result.event_name,
                    "image": "../images/pixel-logo.svg",
                    "order_id": result.order_id,
                    "remember_customer": "false",
                    "handler": function(response) {
                        // alert(response.razorpay_payment_id);
                        // alert(response.razorpay_order_id);
                        // alert(response.razorpay_signature)
                        $.ajax({
                            type: 'POST',
                            url: '/checkOut',
                            datatype: 'json',
                            data: {
                                '_token': $('meta[name="_token"]').attr('content'),
                                'razorpay_payment_id': response.razorpay_payment_id,
                                'razorpay_order_id': response.razorpay_order_id,
                                'razorpay_signature': response.razorpay_signature,
                                'team_name': null,
                                'team_members': null,

                            },
                            success: function(result) {
                                if (result == 'true') {
                                    document.getElementById("register-code-combat").reset();

                                    document.getElementById("register-code-combat").style.display = "none";
                                    document.getElementById("form-done_c").style.display = "block";
                                } else {
                                    document.getElementById("register-code-combat").reset();

                                    document.getElementById("register-code-combat").style.display = "none";
                                    document.getElementById("form-fail_c").style.display = "block";
                                }


                                // $("#user-availability-status1").html(result);
                            },
                            error: function(result) {
                                alert(result);
                            }
                        });

                    },
                    "prefill": {
                        "name": result.name,
                        "email": result.email,
                        "contact": result.contact,
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                let rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function(response) {
                    alert('your payment has failed with Error Code: ' + response.error.code +
                        '\n Error Description: ' + response.error.description +
                        '\n Error source: ' + response.error.source +
                        '\n Error step: ' + response.error.step +
                        '\n Error reason: ' + response.error.reason +
                        '\n Order ID: ' + response.error.metadata.order_id +
                        '\n Payment ID: ' + response.error.metadata.payment_id +
                        '\n ******** PlEASE RETRY  PAYMENT *********'
                    );
                });
                rzp1.open();
                event.preventDefault();
            }
        },
    });
}

function reset() {

    $('#body').css({ overflow: 'scroll' });
    document.getElementById("register-form").reset();
    document.getElementById("register-form").style.display = "block";
    document.getElementById("form-done").style.display = "none";
    document.getElementById("form-fail").style.display = "none";

}

function save_data() {

    var form_element = document.getElementsByClassName('form_data');

    var form_data = new FormData();
    if (form_element.length != 0) {
        for (var count = 0; count < form_element.length; count++) {
            form_data.append(form_element[count].name, form_element[count].value);

            if (form_element[count].value.length == 0) {
                return;
            }
        }

        document.getElementById('submit').disabled = true;

        $.ajax({
            type: 'POST',
            url: '/register',
            datatype: 'json',
            data: {
                '_token': $('meta[name="_token"]').attr('content'),
                'name': form_data.get('name'),
                'email': form_data.get('email'),
                'contact': form_data.get('contact'),
                'branch': form_data.get('branch'),
                'admnno': form_data.get('admnno'),
                'college': form_data.get('college'),
                'location': form_data.get('location'),
            },
            success: function(result) {
                document.getElementById("register-form").style.display = "none";
                if (result == "true") {
                    document.getElementById("form-done").style.display = "block";
                } else {
                    document.getElementById("form-fail").style.display = "block";

                }
                document.getElementById("register-form").reset();
                document.getElementById('submit').disabled = false;
            },
            error: function(request, status, error) {

                document.getElementById("register-form").reset();

                document.getElementById("register-form").style.display = "none";
                document.getElementById("form-fail").style.display = "block";
                document.getElementById('submit').disabled = false;
            }
        });

    }
}

function userAvailability() {
    let email = $("#email").val();
    $.ajax({
        type: 'POST',
        url: '/emailCheck',
        datatype: 'json',
        data: {
            '_token': $('meta[name="_token"]').attr('content'),
            'email': email,
        },
        success: function(result) {
            $("#user-availability-status1").html(result);
        },
    });
}




function checkOut(event_name) {
    $("#user-availability-status-event").html("");
    $("#team-size-validater").html("");
    $("#team-name-validater").html("");
    $("#team-member-validater").html("");


    let registered_id = document.getElementById('registered_id').value;
    //email validation
    if (registered_id.length == 0) {
        $("#user-availability-status-event").html("This field is Requied");
        return;

    }
    //select tag validation
    var select_tag = document.getElementById("team-size");

    var item = select_tag.options[select_tag.selectedIndex].value;
    //selct tag validation
    if (item.length == 0) {
        $("#team-size-validater").html("This field is Requied");
        return;

    }
    item = JSON.parse(item);
    teamSize = parseInt(item[0]);
    if (teamSize == 0) {
        $("#team-size-validater").html("This field is Requied");
        return;

    } else {
        var teammember = [];
        var teamName = document.getElementById('t_name').value
            //team name validaton
        if (teamSize > 1 && teamName.length == 0) {
            $("#team-name-validater").html("This field is Requied");
            return;

        }
        for (let mem = 1; mem <= teamSize; mem++) {
            var memName = document.getElementById('fname-' + mem).value;
            var memClg = document.getElementById('college-' + mem).value;
            var membranch = document.getElementById('branch-' + mem).value;
            teammember.push([memName, memClg, membranch]);
            //team member validation
            if (teamSize.length > 1 && (memName.length == 0 || memClglength == 0 || membranch.length == 0)) {
                $("#team-member-validater").html("This fields is Requied");
                return;
            }

        }

    }
    $("#user-availability-status-event").html("");
    $.ajax({
        type: 'POST',
        url: '/createOrder',
        datatype: 'json',
        data: {
            '_token': $('meta[name="_token"]').attr('content'),
            'registered_id': registered_id,
            'event_name': event_name,
            'team_size': teamSize,
        },
        success: function(result) {
            // orderId = result;
            if (result == 'not registered') {
                $("#user-availability-status-event").html("Invalid Registration ID");
            } else if (result == 'paid') {
                $("#user-availability-status-event").html("You have already paid for this event");
            } else {
                result = JSON.parse(result);
                let options = {
                    "key": result.rp_key,
                    "amount": result.amount,
                    "currency": "INR",
                    "name": "Pixel2022",
                    "description": result.event_name,
                    "image": "../images/pixel-logo.svg",
                    "order_id": result.order_id,
                    "remember_customer": "false",
                    "handler": function(response) {

                        $.ajax({
                            type: 'POST',
                            url: '/checkOut',
                            datatype: 'json',
                            data: {
                                '_token': $('meta[name="_token"]').attr('content'),
                                'razorpay_payment_id': response.razorpay_payment_id,
                                'razorpay_order_id': response.razorpay_order_id,
                                'razorpay_signature': response.razorpay_signature,
                                'event_name': event_name,
                                'team_size': teamSize,
                                'registered_id': registered_id,
                                'team_name': teamName,
                                'team_members': teammember,
                            },
                            success: function(result) {
                                if (result == 'true') {
                                    document.getElementById("register-code-combat").reset();
                                    document.getElementById("register-code-combat").style.display = "none";
                                    document.getElementById("form-done_c").style.display = "block";
                                } else {
                                    document.getElementById("register-code-combat").reset();
                                    document.getElementById("register-code-combat").style.display = "none";
                                    document.getElementById("form-fail_c").style.display = "block";
                                }


                                // $("#user-availability-status1").html(result);
                            },
                            error: function(result) {
                                alert(result);
                            }
                        });

                    },
                    "prefill": {
                        "name": result.name,
                        "email": result.email,
                        "contact": result.contact,
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                let rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function(response) {
                    alert('your payment has failed with Error Code: ' + response.error.code +
                        '\n Error Description: ' + response.error.description +
                        '\n Error source: ' + response.error.source +
                        '\n Error step: ' + response.error.step +
                        '\n Error reason: ' + response.error.reason +
                        '\n Order ID: ' + response.error.metadata.order_id +
                        '\n Payment ID: ' + response.error.metadata.payment_id +
                        '\n ******** PlEASE RETRY  PAYMENT *********'
                    );
                });
                rzp1.open();
                event.preventDefault();
            }
        },
    });
}
