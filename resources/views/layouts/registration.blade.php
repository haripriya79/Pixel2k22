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
                                skew(10DEG, 0);display:none" class="details registration">
    <a data-w-id="57b6f287-f8d1-4b12-4aea-8dba3eaaf15e2" href="#" class="btn close w-inline-block" onclick="reset()" >
        <div class="btn-label">Close</div>
        <div class="btn-hover purple"></div>
    </a>
    <div class="section scroll">

        <div class="wrapper" style="display: flex; flex-direction: column; margin-bottom: 300px">
            <h2 style="margin: 2rem;">Registration</h2>
            <div class="w-form-done" id="form-done" role="region" aria-label="Email Form 2 success">
                <div>Thank you! Your have Successfully registered. The Registration ID is sent to the E-mail</div>
            </div>
            <div class="w-form-fail" id="form-fail" role="region" aria-label="Email Form 2 failure">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
            <form  method="post" id="register-form" >
                @csrf
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name" required required class="form_data">
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Email Address" onblur="userAvailability()" required class="form_data">
                </div>
                <div class="error">
                    <span id="user-availability-status1" style="color: #cc0033;
                        font-family: Helvetica, Arial, sans-serif; font-size: 13px;font-weight: bold; line-height: 20px;">
                    </span>
                </div>
                <div class="input-box">
                    <input type="tel" name="contact" placeholder="Phone Number" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" required class="form_data">
                </div>
                <div class="input-box">
                    <select name="branch" required class="form_data">
                        <option value="" style="color: #333;">Choose Your Branch</option>
                        <option value="CSE" style="color: #333;">CSE</option>
                        <option value="ECE" style="color: #333;"> ECE</option>
                        <option value="EEE" style="color: #333;">EEE</option>
                        <option value="CHM" style="color: #333;">CHM</option>
                        <option value="MECH" style="color: #333;">MECH</option>
                        <option value="MECH" style="color: #333;">CIVIL</option>
                        
                        <option value="MECH" style="color: #333;">OTHERS</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="text" name="admnno" placeholder="Admission No." required class="form_data">
                </div>
                <div class="input-box">
                    <input type="text" name="college" placeholder="College Name" required class="form_data">
                </div>
                <div class="input-box">
                    <input type="text" name="location" placeholder="Your Town/City" required class="form_data">
                </div>
                <div class="register" style="display: inline;">
                    <button type="submit" style="background-color: transparent" id="submit" onclick="save_data()" class="centered">
                        <a data-w-id="8320fab2-82fb-d44f-d6ea-a5b42319c9c3" href="#" style="z-index: -1; opacity: 2"
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
                                Register Now
                            </div>
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
