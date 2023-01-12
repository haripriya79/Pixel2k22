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
    <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e3" href="#" class="btn close w-inline-block" id = "close" onclick="resetCodeCombat()">
        <div class="btn-label">Close</div>
        <div class="btn-hover purple"></div>
    </a>
    <div class="section scroll">

        <div class="wrapper" style="display: flex; flex-direction: column;">
            <h2 style="margin: 2rem;" class="centered">Registration For {{$event->first()->event_name}} Event</h2>
            <div class="w-form-done" id="form-done_c" role="region" aria-label="Email Form 2 success">
                <div>Thank you! You have Successfully registered for the {{$event->first()->event_name}}</div>
            </div>
            <div class="w-form-fail" id="form-fail_c" role="region" aria-label="Email Form 2 failure">
                <div>Oops! Something went wrong  in payment process.</div>
            </div>
            <form  id="register-code-combat" onkeydown="return event.keyCode != 13;">
                @csrf
                <div class="input-box">
                    <input type="text" name="registered_id" placeholder="Enter Registration ID" required id="registered_id"/>

                </div>
                <div class="error">
                <span id="user-availability-status" style="color: #cc0033;
                font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">

                 </span>
                </div>
                <div id="w-node-_2011552c-4754-9f48-438c-9b6de46fdc10-cd4392e2 " class="section padding-2rem ">
                    <div class="line-left "></div>
                    <div class="content horizontal middle ">
                        <h5 class="display-3 white ">Amount Payable : </h5>

                        <div class="margin-left ">
                            <h5 class="display-3 font-yellow ">Rs:{{$event->first()->amount}}/-</h5>
                        </div>
                    </div>
                </div>

                <div class="register" style="display: inline; display: flex" >

                    <button type="submit" class="btn navi-2 w-inline-block centered" style="background-color: transparent;" id="submit_c" onclick="checkoutCD('{{$event->first()->event_name}}')">
                        <a  href="#" style="z-index: -1; opacity: 2"
                            class="btn navi-2 w-inline-block">
                            <div class="bg-color yellow"></div>
                            <img src="https://assets.website-files.com/5d70f6f0c8ca5de04b4392d5/5d73a5847149d55967004dcb_Orion_entrance.svg" alt="" class="btn-icon" />
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
{{-- for closing the existing window and opening the registration page --}}
<script>
    document.getElementById('notRegister').onclick = function() {
        document.getElementById('close').click();
    }
</script>
