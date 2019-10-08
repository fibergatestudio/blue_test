@extends('shop::layouts.master')

@section('page_title')
 {{ __('shop::app.customer.reset-password.title') }}
@endsection

@section('content-wrapper')

<div class="auth-content">

    {!! view_render_event('bagisto.shop.customers.reset_password.before') !!}
    <div class="container">
    <form method="post" style="margin-top: 0px;" class="lets-work__form form" action="{{ route('customer.reset-password.store') }}" >

        {{ csrf_field() }}

        <div class="login-form">

            <h2 class="title color-blue lets-work__title">Password Reset</h2>

            <input type="hidden" name="token" value="{{ $token }}">

            {!! view_render_event('bagisto.shop.customers.reset_password_form_controls.before') !!}

            <div class="control-group form__field field" :class="[errors.has('email') ? 'has-error' : '']">
                <label for="email">{{ __('shop::app.customer.reset-password.email') }}</label>
                <input type="text" v-validate="'required|email'" class="control field__input" id="email" name="email" value="{{ old('email') }}"/>
                <span class="control-error" v-if="errors.has('email')">@{{ errors.first('email') }}</span>
            </div>

            <div class="control-group form__field field" :class="[errors.has('password') ? 'has-error' : '']">
                <label for="password">{{ __('shop::app.customer.reset-password.password') }}</label>
                <input type="password" class="control field__input" name="password" v-validate="'required|min:6'" ref="password">
                <span class="control-error" v-if="errors.has('password')">@{{ errors.first('password') }}</span>
            </div>

            <div class="control-group form__field field" :class="[errors.has('confirm_password') ? 'has-error' : '']">
                <label for="confirm_password">{{ __('shop::app.customer.reset-password.confirm-password') }}</label>
                <input type="password" class="control field__input" name="password_confirmation"  v-validate="'required|min:6|confirmed:password'">
                <span class="control-error" v-if="errors.has('confirm_password')">@{{ errors.first('confirm_password') }}</span>
            </div>

            {!! view_render_event('bagisto.shop.customers.reset_password_form_controls.before') !!}

            <input class="btn btn-primary btn-lg button button_blue" type="submit" value="{{ __('shop::app.customer.reset-password.submit-btn-title') }}">

        </div>
    </form>
    </div>

                <!-- <div class="container">
                    <h2 class="title color-blue lets-work__title">We are open to cooperation</h2>
                    <p class="lets-work__note">If you have any questions or comments, write to us!</p>
                    <form method="post" action="{{ route('customer.reset-password.store') }}" class="lets-work__form form">
                        <label class="form__field field">
                            <svg class="field__icon field__icon_user">
                                <use xlink:href="#user"></use>
                            </svg>
                            <input class="field__input" type="text" name="name" placeholder="Name" required="">
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_phone-call">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                            <input class="field__input" type="tel" name="tel" placeholder="Phone" required="">
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_envelope">
                                <use xlink:href="#envelope"></use>
                            </svg>
                            <input class="field__input" type="email" name="email" placeholder="Email" required="">
                        </label>
                        <label class="form__field field">
                            <svg class="field__icon field__icon_comment">
                                <use xlink:href="#chat-comment"></use>
                            </svg>
                            <input class="field__input" type="text" name="symptom" placeholder="Comments" required="">
                        </label>
                        <input class="button button_blue" type="submit" value="Send">
                    </form>
                </div> -->
                <script src="{{ asset('themes/default/assets/js/shop.js') }}" type="text/javascript"></script>

    {!! view_render_event('bagisto.shop.customers.reset_password.before') !!}
</div>
@endsection