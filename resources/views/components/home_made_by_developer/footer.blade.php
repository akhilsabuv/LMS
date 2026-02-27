{{-- To make a editable image or text need to be add a "builder editable" class and builder identity attribute with a unique value --}}
{{-- builder identity and builder editable --}}
{{-- builder identity value have to be unique under a single file --}}

@if (get_frontend_settings('recaptcha_status'))
    @push('js')
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endpush
@endif

<footer class="footer-area">
    {{-- Upper footer section removed --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="footer-policy">
                        {{-- <li><a href="{{ route('about.us') }}">{{ get_phrase('About Us') }}</a></li> --}}
                        <li><a href="{{ route('privacy.policy') }}">{{ get_phrase('Privacy Policy') }}</a></li>
                        <li><a href="{{ route('terms.condition') }}">{{ get_phrase('Terms And Use') }}</a></li>
                        <li><a href="{{ route('refund.policy') }}">{{ get_phrase('Sales and Refunds') }}</a></li>
                        <li><a href="{{ route('cookie.policy') }}">{{ get_phrase('Cookie Policy') }}</a></li>
                        <li><a href="{{ route('faq') }}">{{ get_phrase('FAQ') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="copyright-text">
                        <p class="builder-editable" builder-identity="4">© <a href="{{ get_settings('footer_link') }}" target="_blank">{{ get_settings('footer_text') }}</a> {{ get_phrase('All Rights Reserved') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


@push('js')
    <script>
        "use strict";

        function onNewslaterSubmit(token) {
            document.getElementById("newslater-form").submit();
        }
    </script>
@endpush
