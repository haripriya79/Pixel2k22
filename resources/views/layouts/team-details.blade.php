<div style="-webkit-transform:translate3d(140%, 0,
                                0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);-moz-transform:translate3d(140%,
                                0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);-ms-transform:translate3d(140%,
                                0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);transform:translate3d(140%, 0, 0)
                                scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                rotateZ(0)
                                skew(10DEG, 0);display:none" class="details event-registration">
    <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e3" href="#" class="btn close w-inline-block" id="close"
        onclick="resetCodeCombat()">
        <div class="btn-label">Close</div>
        <div class="btn-hover purple"></div>
    </a>
    <div class="section scroll">

        <div class="wrapper" style="display: flex; flex-direction: column;">
            <h2 style="margin: 2rem;" class="centered">Registration For {{$event->first()->event_name}} Event</h2>
            <div class="w-form-done" id="form-done_c" role="region" aria-label="Email Form 2 success">
                <div>You have SuccessFully registered for the {{$event->first()->event_name}} Event</div>
            </div>
            <div class="w-form-fail" id="form-fail_c" role="region" aria-label="Email Form 2 failure">
                <div>Oops! Something went wrong the payment process.</div>
            </div>
            <form  id="register-code-combat" onkeydown="return event.keyCode != 13;">
                @csrf
                <div class="input-box">
                    <input type="text" name="registered_id" placeholder="Enter Registration ID" required
                        id="registered_id">
                </div>
                <div class="error">
                    <span id="user-availability-status-event" style="color: #cc0033;
                font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                    </span>
                </div>



                {{-- for getting the details of team --}}
                <div class="team-details" id="team-details">
                    <div class="input-box">
                        <select name="team-size" onchange="select_size()" id="team-size" class="select_option">
                        </select>
                    </div>
                    <div class="error">
                        <span id="team-size-validater" style="color: #cc0033;
                    font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                        </span>
                    </div>
                    <div id="team-member-details">
                        <h5> <span style="color: red">*</span> Enter the Team Details</h5>
                        <div class="input-box">
                            <input type="text" name="tname" placeholder="Team Name" required id="t_name">
                        </div>
                        <div class="error">
                            <span id="team-name-validater" style="color: #cc0033;
                        font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                            </span>
                        </div>

                        <div style="display:none;" class="teammember" id="1">
                            <h5><span style="color: red">*</span>Team Member 1</h5>
                            <div class="input-box">
                                <input type="text" id="fname-1" name="fname-1" placeholder="Full Name">
                            </div>
                            <div class="input-box">
                                <input type="text" id="college-1" name="college-1" placeholder="College">
                            </div>
                            <div class="input-box">
                                <input type="text" id="branch-1" name="branch-1" placeholder="Branch">
                            </div>
                            <div class="error">
                                <span id="team-member-validater-1" style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                </span>
                            </div>

                        </div>
                        <div style="display:none;" class="teammember" id="2">
                            <h5><span style="color: red">*</span>Team Member 2</h5>
                            <div class="input-box">
                                <input type="text" id="fname-2" name="fname-2" placeholder="Full Name">
                            </div>
                            <div class="input-box">
                                <input type="text" id="college-2" name="college-2" placeholder="College">
                            </div>
                            <div class="input-box">
                                <input type="text" id="branch-2" name="branch-2" placeholder="Branch">
                            </div>
                            <div class="error">
                                <span id="team-member-validater-2" style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                </span>
                            </div>
                        </div>
                        <div style="display:none;" class="teammember" id="3">
                            <h5><span style="color: red">*</span>Team Member 3</h5>
                            <div class="input-box">
                                <input type="text" id="fname-3" name="fname-3" placeholder="Full Name">
                            </div>
                            <div class="input-box">
                                <input type="text" id="college-3" name="college-3" placeholder="College">
                            </div>
                            <div class="input-box">
                                <input type="text" id="branch-3" name="branch-3" placeholder="Branch">
                            </div>
                            <div class="error">
                                <span id="team-member-validater-3" style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                </span>
                            </div>
                        </div>
                        <div style="display:none;" class="teammember" id="4">
                            <h5><span style="color: red">*</span>Team Member 4</h5>
                            <div class="input-box">
                                <input type="text" id="fname-4" name="fname-4" placeholder="Full Name">
                            </div>
                            <div class="input-box">
                                <input type="text" id="college-4" name="college-4" placeholder="College">
                            </div>
                            <div class="input-box">
                                <input type="text" id="branch-4" name="branch-4" placeholder="Branch">
                            </div>
                            <div class="error">
                                <span id="team-member-validater-4" style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                </span>
                            </div>
                        </div>
                        <div style="display:none;" class="teammember" id="5">
                            <h5><span style="color: red">*</span>Team Member 5</h5>
                            <div class="input-box">
                                <input type="text" id="fname-5" name="fname-5" placeholder="Full Name">
                            </div>
                            <div class="input-box">
                                <input type="text" id="college-5" name="college-5" placeholder="College">
                            </div>
                            <div class="input-box">
                                <input type="text" id="branch-5" name="branch-5" placeholder="Branch">
                            </div>
                            <div class="error">
                                <span id="team-member-validater-5" style="color: #cc0033;
                            font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                                </span>
                            </div>
                        </div>

                    </div>


                </div>

                {{-- team details end --}}
                <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc10-cd4392e2 " class="section padding-2rem ">
                    <div class="line-left "></div>
                    <div class="content horizontal middle ">
                        <h5 class="display-3 white ">Amount Payable : </h5>

                        <div class="margin-left ">
                            <h5 class="display-3 font-yellow " id="amount"></h5>

                        </div>
                    </div>
                </div>

                <div class="register" style="display: inline; display: flex">

                    <button type="submit" class="btn navi-2 w-inline-block centered"
                        style="background-color: transparent;" id="submit_c" onclick="checkOut('{{$event->first()->event_name}}')">
                        <a href="#" style="z-index: -1; opacity: 2" class="btn navi-2 w-inline-block">
                            <div class="bg-color yellow"></div>
                            <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg"
                                alt="" class="btn-icon" />
                            <div style="-webkit-transform: translate3d(0, 0, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                    skew(0, 0);
                                    -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                    rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                    -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                    rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                    transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
                                    rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);" class="btn-label">
                                Proceed to pay
                            </div>
                        </a>
                    </button>

                </div>
                <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9bf2" href="#"
                    class="link-block margin-right w-inline-block centered " style="display: inline;" id="notRegister">
                    <div class="uppercase font-white">Not Registered Yet? <span style="color: yellow">Register
                            Here</span>
                    </div>
                    <div class="hover-line white"></div>
                </a>

            </form>

        </div>
    </div>
</div>

</div>
</div>
{{-- for closing the existing window and opening the registration page --}}
<script>
    document.getElementById('notRegister').onclick = function() {
        document.getElementById('close').click();
    }

    function select_size() {


        var form_ele = document.getElementsByClassName("teammember");
        var d = document.getElementById("team-size");
        var display = d.options[d.selectedIndex].text;
        var item = d.options[d.selectedIndex].value;
        item = JSON.parse(item);
        ele1 = 0
        ele1 = item[0];



        if (ele1 == 1) {
            document.getElementById('team-member-details').style.display = "none";
            for (var i = 1; i <= 5; i++) {
                document.getElementById(i).style.display = "none";
                //name
                const input1 = document.getElementById('fname-' + i);
                //college
                const input2 = document.getElementById('college-' + i);
                //branch
                const input3 = document.getElementById('branch-' + i)

                if (input1.hasAttribute('required')) {


                    input1.removeAttribute('required');
                    input2.removeAttribute('required');
                    input3.removeAttribute('required');


                }



            }


        } else {
            document.getElementById('team-member-details').style.display = "block";

            for (var i = 1; i <= 5; i++) {
                const input1 = document.getElementById('fname-' + i);
                //college
                const input2 = document.getElementById('college-' + i);
                //branch
                const input3 = document.getElementById('branch-' + i)
                if (i <= ele1) {

                    document.getElementById(i).style.display = "block";

                    if (!(input1.hasAttribute('required'))) {

                        input1.setAttribute('required', '');
                        input2.setAttribute('required', '');
                        input3.setAttribute('required', '');




                    }


                } else {

                    document.getElementById(i).style.display = "none";

                    if (input1.hasAttribute('required')) {

                        input1.removeAttribute('required');
                        input2.removeAttribute('required');
                        input3.removeAttribute('required');




                    }


                }

            }


        }


        var payableAmount = document.getElementById('amount');
        payableAmount.innerHTML = item[1];
    }
</script>
