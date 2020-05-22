 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rotaract
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
 

 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style type ="text/css">
    .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;

    }
    .has-error
    {
        border-color:#cc0000;
        background-color:#ffff99;

    }



    
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite; }

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s; }

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s; }

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s; }

@-webkit-keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

@keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }
  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0); }
  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0); } }

.shake {
  -webkit-animation-name: shake;
  animation-name: shake; }

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown; }

@-webkit-keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut; }

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

@keyframes fadeOutDown {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); } }

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown; }

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

@keyframes fadeOutUp {
  from {
    opacity: 1; }
  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0); } }

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp; }

/*
 * Container style
 */
.ps {
  overflow: hidden !important;
  overflow-anchor: none;
  -ms-overflow-style: none;
  touch-action: auto;
  -ms-touch-action: auto; }

/*
 * Scrollbar rail styles
 */
.ps__rail-x {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  height: 15px;
  /* there must be 'bottom' or 'top' for ps__rail-x */
  bottom: 0px;
  /* please don't change 'position' */
  position: absolute; }

.ps__rail-y {
  display: none;
  opacity: 0;
  transition: background-color .2s linear, opacity .2s linear;
  -webkit-transition: background-color .2s linear, opacity .2s linear;
  width: 15px;
  /* there must be 'right' or 'left' for ps__rail-y */
  right: 0;
  /* please don't change 'position' */
  position: absolute; }

.ps--active-x > .ps__rail-x,
.ps--active-y > .ps__rail-y {
  display: block;
  background-color: transparent; }

.ps:hover > .ps__rail-x,
.ps:hover > .ps__rail-y,
.ps--focus > .ps__rail-x,
.ps--focus > .ps__rail-y,
.ps--scrolling-x > .ps__rail-x,
.ps--scrolling-y > .ps__rail-y {
  opacity: 0.6; }

.ps .ps__rail-x:hover,
.ps .ps__rail-y:hover,
.ps .ps__rail-x:focus,
.ps .ps__rail-y:focus,
.ps .ps__rail-x.ps--clicking,
.ps .ps__rail-y.ps--clicking {
  background-color: #eee;
  opacity: 0.9; }

/*
 * Scrollbar thumb styles
 */
.ps__thumb-x {
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, height .2s ease-in-out;
  -webkit-transition: background-color .2s linear, height .2s ease-in-out;
  height: 6px;
  /* there must be 'bottom' for ps__thumb-x */
  bottom: 2px;
  /* please don't change 'position' */
  position: absolute; }

.ps__thumb-y {
  background-color: #aaa;
  border-radius: 6px;
  transition: background-color .2s linear, width .2s ease-in-out;
  -webkit-transition: background-color .2s linear, width .2s ease-in-out;
  width: 6px;
  /* there must be 'right' for ps__thumb-y */
  right: 2px;
  /* please don't change 'position' */
  position: absolute; }

.ps__rail-x:hover > .ps__thumb-x,
.ps__rail-x:focus > .ps__thumb-x,
.ps__rail-x.ps--clicking .ps__thumb-x {
  background-color: #999;
  height: 11px; }

.ps__rail-y:hover > .ps__thumb-y,
.ps__rail-y:focus > .ps__thumb-y,
.ps__rail-y.ps--clicking .ps__thumb-y {
  background-color: #999;
  width: 11px; }

/* MS supports */
@supports (-ms-overflow-style: none) {
  .ps {
    overflow: auto !important; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .ps {
    overflow: auto !important; } }

.btn,
.navbar .navbar-nav > a.btn {
  border-width: 2px;
  font-weight: 400;
  font-size: 0.8571em;
  line-height: 1.35em;
  border: none;
  margin: 10px 1px;
  border-radius: 0.1875rem;
  padding: 11px 22px;
  cursor: pointer;
  background-color: #888;
  color: #FFFFFF; }
  .btn:hover, .btn:focus, .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active, .btn:not(:disabled):not(.disabled):active:focus, .btn:not(:disabled):not(.disabled).active:focus, .btn:active:hover, .btn.active:hover,
  .show > .btn.dropdown-toggle,
  .show > .btn.dropdown-toggle:focus,
  .show > .btn.dropdown-toggle:hover,
  .navbar .navbar-nav > a.btn:hover,
  .navbar .navbar-nav > a.btn:focus,
  .navbar .navbar-nav > a.btn:not(:disabled):not(.disabled):active,
  .navbar .navbar-nav > a.btn:not(:disabled):not(.disabled).active,
  .navbar .navbar-nav > a.btn:not(:disabled):not(.disabled):active:focus,
  .navbar .navbar-nav > a.btn:not(:disabled):not(.disabled).active:focus,
  .navbar .navbar-nav > a.btn:active:hover,
  .navbar .navbar-nav > a.btn.active:hover,
  .show >
  .navbar .navbar-nav > a.btn.dropdown-toggle,
  .show >
  .navbar .navbar-nav > a.btn.dropdown-toggle:focus,
  .show >
  .navbar .navbar-nav > a.btn.dropdown-toggle:hover {
    background-color: #979797;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #979797; }
  .btn:not([data-action]):not([class*="btn-outline-"]):hover,
  .navbar .navbar-nav > a.btn:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn.disabled, .btn.disabled:hover, .btn.disabled:focus, .btn.disabled.focus, .btn.disabled:active, .btn.disabled.active, .btn:disabled, .btn:disabled:hover, .btn:disabled:focus, .btn:disabled.focus, .btn:disabled:active, .btn:disabled.active, .btn[disabled], .btn[disabled]:hover, .btn[disabled]:focus, .btn[disabled].focus, .btn[disabled]:active, .btn[disabled].active,
  fieldset[disabled] .btn,
  fieldset[disabled] .btn:hover,
  fieldset[disabled] .btn:focus,
  fieldset[disabled] .btn.focus,
  fieldset[disabled] .btn:active,
  fieldset[disabled] .btn.active,
  .navbar .navbar-nav > a.btn.disabled,
  .navbar .navbar-nav > a.btn.disabled:hover,
  .navbar .navbar-nav > a.btn.disabled:focus,
  .navbar .navbar-nav > a.btn.disabled.focus,
  .navbar .navbar-nav > a.btn.disabled:active,
  .navbar .navbar-nav > a.btn.disabled.active,
  .navbar .navbar-nav > a.btn:disabled,
  .navbar .navbar-nav > a.btn:disabled:hover,
  .navbar .navbar-nav > a.btn:disabled:focus,
  .navbar .navbar-nav > a.btn:disabled.focus,
  .navbar .navbar-nav > a.btn:disabled:active,
  .navbar .navbar-nav > a.btn:disabled.active,
  .navbar .navbar-nav > a.btn[disabled],
  .navbar .navbar-nav > a.btn[disabled]:hover,
  .navbar .navbar-nav > a.btn[disabled]:focus,
  .navbar .navbar-nav > a.btn[disabled].focus,
  .navbar .navbar-nav > a.btn[disabled]:active,
  .navbar .navbar-nav > a.btn[disabled].active,
  fieldset[disabled]
  .navbar .navbar-nav > a.btn,
  fieldset[disabled]
  .navbar .navbar-nav > a.btn:hover,
  fieldset[disabled]
  .navbar .navbar-nav > a.btn:focus,
  fieldset[disabled]
  .navbar .navbar-nav > a.btn.focus,
  fieldset[disabled]
  .navbar .navbar-nav > a.btn:active,
  fieldset[disabled]
  .navbar .navbar-nav > a.btn.active {
    background-color: #888;
    border-color: #888; }
  .btn.btn-link,
  .navbar .navbar-nav > a.btn.btn-link {
    color: #888; }
    .btn.btn-link:hover, .btn.btn-link:focus, .btn.btn-link:active,
    .navbar .navbar-nav > a.btn.btn-link:hover,
    .navbar .navbar-nav > a.btn.btn-link:focus,
    .navbar .navbar-nav > a.btn.btn-link:active {
      background-color: transparent;
      color: #979797;
      text-decoration: none;
      box-shadow: none; }
  .btn:hover, .btn:focus,
  .navbar .navbar-nav > a.btn:hover,
  .navbar .navbar-nav > a.btn:focus {
    opacity: 1;
    filter: alpha(opacity=100);
    outline: 0 !important; }
  .btn:active, .btn.active,
  .open > .btn.dropdown-toggle,
  .navbar .navbar-nav > a.btn:active,
  .navbar .navbar-nav > a.btn.active,
  .open >
  .navbar .navbar-nav > a.btn.dropdown-toggle {
    box-shadow: none;
    outline: 0 !important; }
  .btn .badge,
  .navbar .navbar-nav > a.btn .badge {
    margin: 0; }
  .btn.btn-icon,
  .navbar .navbar-nav > a.btn.btn-icon {
    height: 2.375rem;
    min-width: 2.375rem;
    width: 2.375rem;
    padding: 0;
    font-size: 0.9375rem;
    overflow: hidden;
    position: relative;
    line-height: normal; }
    .btn.btn-icon[class*="btn-outline-"],
    .navbar .navbar-nav > a.btn.btn-icon[class*="btn-outline-"] {
      padding: 0 !important; }
    .btn.btn-icon.btn-sm,
    .navbar .navbar-nav > a.btn.btn-icon.btn-sm {
      height: 1.875rem;
      min-width: 1.875rem;
      width: 1.875rem; }
      .btn.btn-icon.btn-sm .fa,
      .btn.btn-icon.btn-sm .far,
      .btn.btn-icon.btn-sm .fas,
      .btn.btn-icon.btn-sm .now-ui-icons,
      .navbar .navbar-nav > a.btn.btn-icon.btn-sm .fa,
      .navbar .navbar-nav > a.btn.btn-icon.btn-sm .far,
      .navbar .navbar-nav > a.btn.btn-icon.btn-sm .fas,
      .navbar .navbar-nav > a.btn.btn-icon.btn-sm .now-ui-icons {
        font-size: 0.6875rem; }
    .btn.btn-icon.btn-lg,
    .navbar .navbar-nav > a.btn.btn-icon.btn-lg {
      height: 3.6rem;
      min-width: 3.6rem;
      width: 3.6rem; }
      .btn.btn-icon.btn-lg .fa,
      .btn.btn-icon.btn-lg .far,
      .btn.btn-icon.btn-lg .fas,
      .btn.btn-icon.btn-lg .now-ui-icons,
      .navbar .navbar-nav > a.btn.btn-icon.btn-lg .fa,
      .navbar .navbar-nav > a.btn.btn-icon.btn-lg .far,
      .navbar .navbar-nav > a.btn.btn-icon.btn-lg .fas,
      .navbar .navbar-nav > a.btn.btn-icon.btn-lg .now-ui-icons {
        font-size: 1.325rem; }
    .btn.btn-icon:not(.btn-footer) .now-ui-icons,
    .btn.btn-icon:not(.btn-footer) .fa,
    .btn.btn-icon:not(.btn-footer) .far,
    .btn.btn-icon:not(.btn-footer) .fas,
    .navbar .navbar-nav > a.btn.btn-icon:not(.btn-footer) .now-ui-icons,
    .navbar .navbar-nav > a.btn.btn-icon:not(.btn-footer) .fa,
    .navbar .navbar-nav > a.btn.btn-icon:not(.btn-footer) .far,
    .navbar .navbar-nav > a.btn.btn-icon:not(.btn-footer) .fas {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-12px, -12px);
              transform: translate(-12px, -12px);
      line-height: 1.5626rem;
      width: 24px; }
  .btn:not(.btn-icon) .now-ui-icons,
  .navbar .navbar-nav > a.btn:not(.btn-icon) .now-ui-icons {
    position: relative;
    top: 1px; }

.btn-primary {
  background-color: #f96332;
  color: #FFFFFF; }
  .btn-primary:hover, .btn-primary:focus, .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:active:hover, .btn-primary.active:hover,
  .show > .btn-primary.dropdown-toggle,
  .show > .btn-primary.dropdown-toggle:focus,
  .show > .btn-primary.dropdown-toggle:hover {
    background-color: #fa7a50;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #fa7a50; }
  .btn-primary:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn-primary.disabled, .btn-primary.disabled:hover, .btn-primary.disabled:focus, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled.active, .btn-primary:disabled, .btn-primary:disabled:hover, .btn-primary:disabled:focus, .btn-primary:disabled.focus, .btn-primary:disabled:active, .btn-primary:disabled.active, .btn-primary[disabled], .btn-primary[disabled]:hover, .btn-primary[disabled]:focus, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled].active,
  fieldset[disabled] .btn-primary,
  fieldset[disabled] .btn-primary:hover,
  fieldset[disabled] .btn-primary:focus,
  fieldset[disabled] .btn-primary.focus,
  fieldset[disabled] .btn-primary:active,
  fieldset[disabled] .btn-primary.active {
    background-color: #f96332;
    border-color: #f96332; }
  .btn-primary.btn-link {
    color: #f96332; }
    .btn-primary.btn-link:hover, .btn-primary.btn-link:focus, .btn-primary.btn-link:active {
      background-color: transparent;
      color: #fa7a50;
      text-decoration: none;
      box-shadow: none; }

.btn-success {
  background-color: #18ce0f;
  color: #FFFFFF; }
  .btn-success:hover, .btn-success:focus, .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:active:hover, .btn-success.active:hover,
  .show > .btn-success.dropdown-toggle,
  .show > .btn-success.dropdown-toggle:focus,
  .show > .btn-success.dropdown-toggle:hover {
    background-color: #1beb11;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #1beb11; }
  .btn-success:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn-success.disabled, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled.focus, .btn-success.disabled:active, .btn-success.disabled.active, .btn-success:disabled, .btn-success:disabled:hover, .btn-success:disabled:focus, .btn-success:disabled.focus, .btn-success:disabled:active, .btn-success:disabled.active, .btn-success[disabled], .btn-success[disabled]:hover, .btn-success[disabled]:focus, .btn-success[disabled].focus, .btn-success[disabled]:active, .btn-success[disabled].active,
  fieldset[disabled] .btn-success,
  fieldset[disabled] .btn-success:hover,
  fieldset[disabled] .btn-success:focus,
  fieldset[disabled] .btn-success.focus,
  fieldset[disabled] .btn-success:active,
  fieldset[disabled] .btn-success.active {
    background-color: #18ce0f;
    border-color: #18ce0f; }
  .btn-success.btn-link {
    color: #18ce0f; }
    .btn-success.btn-link:hover, .btn-success.btn-link:focus, .btn-success.btn-link:active {
      background-color: transparent;
      color: #1beb11;
      text-decoration: none;
      box-shadow: none; }

.btn-info {
  background-color: #2CA8FF;
  color: #FFFFFF; }
  .btn-info:hover, .btn-info:focus, .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:active:hover, .btn-info.active:hover,
  .show > .btn-info.dropdown-toggle,
  .show > .btn-info.dropdown-toggle:focus,
  .show > .btn-info.dropdown-toggle:hover {
    background-color: #4bb5ff;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #4bb5ff; }
  .btn-info:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn-info.disabled, .btn-info.disabled:hover, .btn-info.disabled:focus, .btn-info.disabled.focus, .btn-info.disabled:active, .btn-info.disabled.active, .btn-info:disabled, .btn-info:disabled:hover, .btn-info:disabled:focus, .btn-info:disabled.focus, .btn-info:disabled:active, .btn-info:disabled.active, .btn-info[disabled], .btn-info[disabled]:hover, .btn-info[disabled]:focus, .btn-info[disabled].focus, .btn-info[disabled]:active, .btn-info[disabled].active,
  fieldset[disabled] .btn-info,
  fieldset[disabled] .btn-info:hover,
  fieldset[disabled] .btn-info:focus,
  fieldset[disabled] .btn-info.focus,
  fieldset[disabled] .btn-info:active,
  fieldset[disabled] .btn-info.active {
    background-color: #2CA8FF;
    border-color: #2CA8FF; }
  .btn-info.btn-link {
    color: #2CA8FF; }
    .btn-info.btn-link:hover, .btn-info.btn-link:focus, .btn-info.btn-link:active {
      background-color: transparent;
      color: #4bb5ff;
      text-decoration: none;
      box-shadow: none; }

.btn-warning {
  background-color: #FFB236;
  color: #FFFFFF; }
  .btn-warning:hover, .btn-warning:focus, .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:active:hover, .btn-warning.active:hover,
  .show > .btn-warning.dropdown-toggle,
  .show > .btn-warning.dropdown-toggle:focus,
  .show > .btn-warning.dropdown-toggle:hover {
    background-color: #ffbe55;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #ffbe55; }
  .btn-warning:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn-warning.disabled, .btn-warning.disabled:hover, .btn-warning.disabled:focus, .btn-warning.disabled.focus, .btn-warning.disabled:active, .btn-warning.disabled.active, .btn-warning:disabled, .btn-warning:disabled:hover, .btn-warning:disabled:focus, .btn-warning:disabled.focus, .btn-warning:disabled:active, .btn-warning:disabled.active, .btn-warning[disabled], .btn-warning[disabled]:hover, .btn-warning[disabled]:focus, .btn-warning[disabled].focus, .btn-warning[disabled]:active, .btn-warning[disabled].active,
  fieldset[disabled] .btn-warning,
  fieldset[disabled] .btn-warning:hover,
  fieldset[disabled] .btn-warning:focus,
  fieldset[disabled] .btn-warning.focus,
  fieldset[disabled] .btn-warning:active,
  fieldset[disabled] .btn-warning.active {
    background-color: #FFB236;
    border-color: #FFB236; }
  .btn-warning.btn-link {
    color: #FFB236; }
    .btn-warning.btn-link:hover, .btn-warning.btn-link:focus, .btn-warning.btn-link:active {
      background-color: transparent;
      color: #ffbe55;
      text-decoration: none;
      box-shadow: none; }

.btn-danger {
  background-color: #FF3636;
  color: #FFFFFF; }
  .btn-danger:hover, .btn-danger:focus, .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:active:hover, .btn-danger.active:hover,
  .show > .btn-danger.dropdown-toggle,
  .show > .btn-danger.dropdown-toggle:focus,
  .show > .btn-danger.dropdown-toggle:hover {
    background-color: #ff5555;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #ff5555; }
  .btn-danger:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn-danger.disabled, .btn-danger.disabled:hover, .btn-danger.disabled:focus, .btn-danger.disabled.focus, .btn-danger.disabled:active, .btn-danger.disabled.active, .btn-danger:disabled, .btn-danger:disabled:hover, .btn-danger:disabled:focus, .btn-danger:disabled.focus, .btn-danger:disabled:active, .btn-danger:disabled.active, .btn-danger[disabled], .btn-danger[disabled]:hover, .btn-danger[disabled]:focus, .btn-danger[disabled].focus, .btn-danger[disabled]:active, .btn-danger[disabled].active,
  fieldset[disabled] .btn-danger,
  fieldset[disabled] .btn-danger:hover,
  fieldset[disabled] .btn-danger:focus,
  fieldset[disabled] .btn-danger.focus,
  fieldset[disabled] .btn-danger:active,
  fieldset[disabled] .btn-danger.active {
    background-color: #FF3636;
    border-color: #FF3636; }
  .btn-danger.btn-link {
    color: #FF3636; }
    .btn-danger.btn-link:hover, .btn-danger.btn-link:focus, .btn-danger.btn-link:active {
      background-color: transparent;
      color: #ff5555;
      text-decoration: none;
      box-shadow: none; }

.btn-neutral {
  background-color: #FFFFFF;
  color: #f96332; }
  .btn-neutral:hover, .btn-neutral:focus, .btn-neutral:not(:disabled):not(.disabled):active, .btn-neutral:not(:disabled):not(.disabled).active, .btn-neutral:not(:disabled):not(.disabled):active:focus, .btn-neutral:not(:disabled):not(.disabled).active:focus, .btn-neutral:active:hover, .btn-neutral.active:hover,
  .show > .btn-neutral.dropdown-toggle,
  .show > .btn-neutral.dropdown-toggle:focus,
  .show > .btn-neutral.dropdown-toggle:hover {
    background-color: #FFFFFF;
    color: #FFFFFF;
    box-shadow: none;
    border-color: #FFFFFF; }
  .btn-neutral:not([data-action]):not([class*="btn-outline-"]):hover {
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17); }
  .btn-neutral.disabled, .btn-neutral.disabled:hover, .btn-neutral.disabled:focus, .btn-neutral.disabled.focus, .btn-neutral.disabled:active, .btn-neutral.disabled.active, .btn-neutral:disabled, .btn-neutral:disabled:hover, .btn-neutral:disabled:focus, .btn-neutral:disabled.focus, .btn-neutral:disabled:active, .btn-neutral:disabled.active, .btn-neutral[disabled], .btn-neutral[disabled]:hover, .btn-neutral[disabled]:focus, .btn-neutral[disabled].focus, .btn-neutral[disabled]:active, .btn-neutral[disabled].active,
  fieldset[disabled] .btn-neutral,
  fieldset[disabled] .btn-neutral:hover,
  fieldset[disabled] .btn-neutral:focus,
  fieldset[disabled] .btn-neutral.focus,
  fieldset[disabled] .btn-neutral:active,
  fieldset[disabled] .btn-neutral.active {
    background-color: #FFFFFF;
    border-color: #FFFFFF; }
  .btn-neutral.btn-danger {
    color: #FF3636; }
    .btn-neutral.btn-danger:hover, .btn-neutral.btn-danger:focus, .btn-neutral.btn-danger:active, .btn-neutral.btn-danger:active:focus {
      color: #ff5555 !important; }
  .btn-neutral.btn-info {
    color: #2CA8FF; }
    .btn-neutral.btn-info:hover, .btn-neutral.btn-info:focus, .btn-neutral.btn-info:active, .btn-neutral.btn-info:active:focus {
      color: #4bb5ff !important; }
  .btn-neutral.btn-warning {
    color: #FFB236; }
    .btn-neutral.btn-warning:hover, .btn-neutral.btn-warning:focus, .btn-neutral.btn-warning:active, .btn-neutral.btn-warning:active:focus {
      color: #ffbe55 !important; }
  .btn-neutral.btn-success {
    color: #18ce0f; }
    .btn-neutral.btn-success:hover, .btn-neutral.btn-success:focus, .btn-neutral.btn-success:active, .btn-neutral.btn-success:active:focus {
      color: #1beb11 !important; }
  .btn-neutral.btn-default {
    color: #888; }
    .btn-neutral.btn-default:hover, .btn-neutral.btn-default:focus, .btn-neutral.btn-default:active, .btn-neutral.btn-default:active:focus {
      color: #979797 !important; }
  .btn-neutral.active, .btn-neutral:active, .btn-neutral:active:focus, .btn-neutral:active:hover, .btn-neutral.active:focus, .btn-neutral.active:hover,
  .show > .btn-neutral.dropdown-toggle,
  .show > .btn-neutral.dropdown-toggle:focus,
  .show > .btn-neutral.dropdown-toggle:hover {
    background-color: #FFFFFF;
    color: #fa7a50 !important;
    box-shadow: none; }
  .btn-neutral:hover, .btn-neutral:focus {
    color: #fa7a50; }
    .btn-neutral:hover:not(.nav-link), .btn-neutral:focus:not(.nav-link) {
      box-shadow: none !important; }
  .btn-neutral.btn-link {
    color: #FFFFFF; }
    .btn-neutral.btn-link:hover, .btn-neutral.btn-link:focus, .btn-neutral.btn-link:active {
      background-color: transparent;
      color: #FFFFFF;
      text-decoration: none;
      box-shadow: none; }

.btn-outline-primary {
  color: #f96332;
  border-color: #f96332; }
  .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:active:hover, .btn-outline-primary.active:hover,
  .show > .btn-outline-primary.dropdown-toggle,
  .show > .btn-outline-primary.dropdown-toggle:focus,
  .show > .btn-outline-primary.dropdown-toggle:hover {
    background-color: transparent;
    color: #fa7a50;
    border-color: #fa7a50;
    box-shadow: none; }

.btn-outline-success {
  color: #18ce0f;
  border-color: #18ce0f; }
  .btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:active:hover, .btn-outline-success.active:hover,
  .show > .btn-outline-success.dropdown-toggle,
  .show > .btn-outline-success.dropdown-toggle:focus,
  .show > .btn-outline-success.dropdown-toggle:hover {
    background-color: transparent;
    color: #1beb11;
    border-color: #1beb11;
    box-shadow: none; }

.btn-outline-info {
  color: #2CA8FF;
  border-color: #2CA8FF; }
  .btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:active:hover, .btn-outline-info.active:hover,
  .show > .btn-outline-info.dropdown-toggle,
  .show > .btn-outline-info.dropdown-toggle:focus,
  .show > .btn-outline-info.dropdown-toggle:hover {
    background-color: transparent;
    color: #4bb5ff;
    border-color: #4bb5ff;
    box-shadow: none; }

.btn-outline-warning {
  color: #FFB236;
  border-color: #FFB236; }
  .btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:active:hover, .btn-outline-warning.active:hover,
  .show > .btn-outline-warning.dropdown-toggle,
  .show > .btn-outline-warning.dropdown-toggle:focus,
  .show > .btn-outline-warning.dropdown-toggle:hover {
    background-color: transparent;
    color: #ffbe55;
    border-color: #ffbe55;
    box-shadow: none; }

.btn-outline-danger {
  color: #FF3636;
  border-color: #FF3636; }
  .btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:active:hover, .btn-outline-danger.active:hover,
  .show > .btn-outline-danger.dropdown-toggle,
  .show > .btn-outline-danger.dropdown-toggle:focus,
  .show > .btn-outline-danger.dropdown-toggle:hover {
    background-color: transparent;
    color: #ff5555;
    border-color: #ff5555;
    box-shadow: none; }

.btn-outline-default {
  color: #888;
  border-color: #888; }
  .btn-outline-default:hover, .btn-outline-default:focus, .btn-outline-default:not(:disabled):not(.disabled):active, .btn-outline-default:not(:disabled):not(.disabled).active, .btn-outline-default:not(:disabled):not(.disabled):active:focus, .btn-outline-default:not(:disabled):not(.disabled).active:focus, .btn-outline-default:active:hover, .btn-outline-default.active:hover,
  .show > .btn-outline-default.dropdown-toggle,
  .show > .btn-outline-default.dropdown-toggle:focus,
  .show > .btn-outline-default.dropdown-toggle:hover {
    background-color: transparent;
    color: #979797;
    border-color: #979797;
    box-shadow: none; }

.btn:disabled, .btn[disabled], .btn.disabled {
  opacity: 0.5;
  filter: alpha(opacity=50);
  pointer-events: none; }

[class*="btn-outline-"] {
  border: 1px solid;
  padding: 10px 22px;
  background-color: transparent; }

[class*="btn-outline-"].disabled, [class*="btn-outline-"].disabled:hover, [class*="btn-outline-"].disabled:focus, [class*="btn-outline-"].disabled.focus, [class*="btn-outline-"].disabled:active, [class*="btn-outline-"].disabled.active, [class*="btn-outline-"]:disabled, [class*="btn-outline-"]:disabled:hover, [class*="btn-outline-"]:disabled:focus, [class*="btn-outline-"]:disabled.focus, [class*="btn-outline-"]:disabled:active, [class*="btn-outline-"]:disabled.active, [class*="btn-outline-"][disabled], [class*="btn-outline-"][disabled]:hover, [class*="btn-outline-"][disabled]:focus, [class*="btn-outline-"][disabled].focus, [class*="btn-outline-"][disabled]:active, [class*="btn-outline-"][disabled].active,
fieldset[disabled] [class*="btn-outline-"],
fieldset[disabled] [class*="btn-outline-"]:hover,
fieldset[disabled] [class*="btn-outline-"]:focus,
fieldset[disabled] [class*="btn-outline-"].focus,
fieldset[disabled] [class*="btn-outline-"]:active,
fieldset[disabled] [class*="btn-outline-"].active,
.btn-link.disabled,
.btn-link.disabled:hover,
.btn-link.disabled:focus,
.btn-link.disabled.focus,
.btn-link.disabled:active,
.btn-link.disabled.active,
.btn-link:disabled,
.btn-link:disabled:hover,
.btn-link:disabled:focus,
.btn-link:disabled.focus,
.btn-link:disabled:active,
.btn-link:disabled.active,
.btn-link[disabled],
.btn-link[disabled]:hover,
.btn-link[disabled]:focus,
.btn-link[disabled].focus,
.btn-link[disabled]:active,
.btn-link[disabled].active,
fieldset[disabled]
.btn-link,
fieldset[disabled]
.btn-link:hover,
fieldset[disabled]
.btn-link:focus,
fieldset[disabled]
.btn-link.focus,
fieldset[disabled]
.btn-link:active,
fieldset[disabled]
.btn-link.active {
  background-color: transparent; }

.btn-link {
  border: 0;
  padding: 0.5rem 0.7rem;
  background-color: transparent; }

.btn-lg {
  font-size: 1em;
  border-radius: 0.25rem;
  padding: 15px 48px; }
  .btn-lg[class*="btn-outline-"] {
    padding: 14px 47px; }

.btn-sm {
  font-size: 14px;
  border-radius: 0.1875rem;
  padding: 5px 15px; }
  .btn-sm[class*="btn-outline-"] {
    padding: 4px 14px; }

.btn-wd {
  min-width: 140px; }

.btn-group.select {
  width: 100%; }

.btn-group.select .btn {
  text-align: left; }

.btn-group.select .caret {
  position: absolute;
  top: 50%;
  margin-top: -1px;
  right: 8px; }

.btn-round {
  border-width: 1px;
  border-radius: 30px;
  padding-right: 23px;
  padding-left: 23px; }
  .btn-round.btn-simple:not(.btn-sm):not(.btn-lg) {
    padding: 10px 22px; }

.no-caret.dropdown-toggle::after {
  display: none; }

button,
input,
optgroup,
select,
textarea {
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif; }

h1, h2, h3, h4, h5, h6 {
  font-weight: 400; }

a {
  color: #f96332; }
  a:hover, a:focus {
    color: #f96332; }

h1, .h1 {
  font-size: 3.5em;
  line-height: 1.15;
  margin-bottom: 30px; }
  h1 small, .h1 small {
    font-weight: 700;
    text-transform: uppercase;
    opacity: .8; }

h2, .h2 {
  font-size: 2.5em;
  margin-bottom: 30px; }

h3, .h3 {
  font-size: 2em;
  margin-bottom: 30px;
  line-height: 1.4em; }

h4, .h4 {
  font-size: 1.714em;
  line-height: 1.45em;
  margin-top: 30px;
  margin-bottom: 15px; }
  h4 + .category,
  h4.title + .category, .h4 + .category,
  .h4.title + .category {
    margin-top: -10px; }

h5, .h5 {
  font-size: 1.57em;
  line-height: 1.4em;
  margin-bottom: 15px; }

h6, .h6 {
  font-size: 1em;
  font-weight: 700;
  text-transform: uppercase; }

p.description {
  font-size: 1.14em; }

.title {
  font-weight: 700; }
  .title.title-up {
    text-transform: uppercase; }
    .title.title-up a {
      color: #2c2c2c;
      text-decoration: none; }
  .title + .category {
    margin-top: -10px; }

.description,
.card-description,
.footer-big p,
.card .footer .stats {
  color: #9A9A9A;
  font-weight: 300; }

.category,
.card-category {
  text-transform: capitalize;
  font-weight: 400;
  color: #9A9A9A;
  font-size: 0.7142em; }

.card-category {
  font-size: 1em; }

.text-primary,
a.text-primary:focus, a.text-primary:hover {
  color: #f96332 !important; }

.text-info,
a.text-info:focus, a.text-info:hover {
  color: #2CA8FF !important; }

.text-success,
a.text-success:focus, a.text-success:hover {
  color: #18ce0f !important; }

.text-warning,
a.text-warning:focus, a.text-warning:hover {
  color: #FFB236 !important; }

.text-danger,
a.text-danger:focus, a.text-danger:hover {
  color: #FF3636 !important; }

.text-gray,
a.text-gray:focus, a.text-gray:hover {
  color: #E3E3E3 !important; }

.blockquote {
  border-left: none;
  border: 1px solid #888;
  padding: 20px;
  font-size: 1.1em;
  line-height: 1.8; }
  .blockquote small {
    color: #888;
    font-size: 0.8571em;
    text-transform: uppercase; }
  .blockquote.blockquote-primary {
    border-color: #f96332;
    color: #f96332; }
    .blockquote.blockquote-primary small {
      color: #f96332; }
  .blockquote.blockquote-danger {
    border-color: #FF3636;
    color: #FF3636; }
    .blockquote.blockquote-danger small {
      color: #FF3636; }
  .blockquote.blockquote-white {
    border-color: rgba(255, 255, 255, 0.8);
    color: #FFFFFF; }
    .blockquote.blockquote-white small {
      color: rgba(255, 255, 255, 0.8); }

body {
  color: #2c2c2c;
  font-size: 14px;
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased; }

.main {
  position: relative;
  background: #FFFFFF; }

/* Animations */
.nav-pills .nav-link,
.navbar,
.nav-tabs .nav-link,
.sidebar .nav a,
.sidebar .nav a i,
.navbar-collapse .navbar-nav .nav-link,
.animation-transition-general,
.sidebar .navbar-minimize,
.off-canvas-sidebar .navbar-minimize,
.sidebar .nav p,
.off-canvas-sidebar .nav p,
.sidebar .logo a.logo-mini,
.sidebar .logo a.logo-normal,
.off-canvas-sidebar .logo a.logo-mini,
.off-canvas-sidebar .logo a.logo-normal,
.tag,
.tag [data-role="remove"],
.animation-transition-general,
.sidebar .navbar-minimize,
.off-canvas-sidebar .navbar-minimize,
.sidebar .nav p,
.off-canvas-sidebar .nav p,
.sidebar .logo a.logo-mini,
.sidebar .logo a.logo-normal,
.off-canvas-sidebar .logo a.logo-mini,
.off-canvas-sidebar .logo a.logo-normal {
  transition: all 300ms ease 0s; }

.dropdown-toggle:after,
.bootstrap-switch-label:before,
.caret {
  transition: all 150ms ease 0s; }

.dropdown-toggle[aria-expanded="true"]:after,
a[data-toggle="collapse"][aria-expanded="true"] .caret,
.card-collapse .card a[data-toggle="collapse"][aria-expanded="true"] i,
.card-collapse .card a[data-toggle="collapse"].expanded i {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg); }

.button-bar {
  display: block;
  position: relative;
  width: 22px;
  height: 1px;
  border-radius: 1px;
  background: #FFFFFF; }
  .button-bar + .button-bar {
    margin-top: 7px; }
  .button-bar:nth-child(2) {
    width: 17px; }

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid\9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent; }

.pull-left {
  float: left; }

.pull-right {
  float: right; }



.navbar {
  
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  min-height: 53px;
  margin-bottom: 20px;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15); }
  .navbar a {
    vertical-align: middle; }
    .navbar a:not(.btn):not(.dropdown-item) {
      color: #FFFFFF; }
    .navbar a.dropdown-item {
      color: #888; }
  .navbar.bg-white .input-group .form-control,
  .navbar.bg-white .input-group.no-border .form-control {
    color: #888; }
    .navbar.bg-white .input-group .form-control::-moz-placeholder,
    .navbar.bg-white .input-group.no-border .form-control::-moz-placeholder {
      color: #888; }
    .navbar.bg-white .input-group .form-control:-ms-input-placeholder,
    .navbar.bg-white .input-group.no-border .form-control:-ms-input-placeholder {
      color: #888; }
    .navbar.bg-white .input-group .form-control::-webkit-input-placeholder,
    .navbar.bg-white .input-group.no-border .form-control::-webkit-input-placeholder {
      color: #888; }
  .navbar.bg-white .input-group-prepend .input-group-text i,
  .navbar.bg-white .input-group-append .input-group-text i {
    color: #888;
    opacity: .5; }
  .navbar .form-group,
  .navbar .input-group {
    margin: 0;
    margin-left: -3px;
    margin-right: 5px; }
    .navbar .form-group .form-group-addon,
    .navbar .form-group .input-group-prepend .input-group-text,
    .navbar .form-group .input-group-append .input-group-text,
    .navbar .input-group .form-group-addon,
    .navbar .input-group .input-group-prepend .input-group-text,
    .navbar .input-group .input-group-append .input-group-text {
      color: #FFFFFF; }
      .navbar .form-group .form-group-addon i,
      .navbar .form-group .input-group-prepend .input-group-text i,
      .navbar .form-group .input-group-append .input-group-text i,
      .navbar .input-group .form-group-addon i,
      .navbar .input-group .input-group-prepend .input-group-text i,
      .navbar .input-group .input-group-append .input-group-text i {
        opacity: 1; }
    .navbar .form-group.no-border .form-control,
    .navbar .input-group.no-border .form-control {
      color: #FFFFFF; }
      .navbar .form-group.no-border .form-control::-moz-placeholder,
      .navbar .input-group.no-border .form-control::-moz-placeholder {
        color: #FFFFFF; }
      .navbar .form-group.no-border .form-control:-ms-input-placeholder,
      .navbar .input-group.no-border .form-control:-ms-input-placeholder {
        color: #FFFFFF; }
      .navbar .form-group.no-border .form-control::-webkit-input-placeholder,
      .navbar .input-group.no-border .form-control::-webkit-input-placeholder {
        color: #FFFFFF; }
  .navbar p {
    display: inline-block;
    margin: 0;
    line-height: 1.8em;
    font-size: 1em;
    font-weight: 400; }
  .navbar.navbar-absolute {
    position: absolute;
    width: 100%;
    padding-top: 10px;
    z-index: 1029; }
  .documentation .navbar.fixed-top {
    left: 0;
    width: initial; }
  .navbar .navbar-wrapper {
    display: inline-flex;
    align-items: center; }
    .navbar .navbar-wrapper .navbar-minimize {
      padding-right: 10px; }
      .navbar .navbar-wrapper .navbar-minimize .btn {
        margin: 0; }
    .navbar .navbar-wrapper .navbar-toggle .navbar-toggler {
      padding-left: 0; }
    .navbar .navbar-wrapper .navbar-toggle:hover .navbar-toggler-bar.bar2 {
      width: 22px; }
  .navbar .navbar-nav.navbar-logo {
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    width: 49px;
    top: -4px; }
  .navbar .navbar-nav .nav-link.btn {
    padding: 11px 22px; }
    .navbar .navbar-nav .nav-link.btn.btn-lg {
      padding: 15px 48px; }
    .navbar .navbar-nav .nav-link.btn.btn-sm {
      padding: 5px 15px; }
  .navbar .navbar-nav .nav-link {
    text-transform: uppercase;
    font-size: 0.7142em;
    padding: 0.5rem 0.7rem;
    line-height: 1.625rem;
    margin-right: 3px; }
    .navbar .navbar-nav .nav-link i.fa + p,
    .navbar .navbar-nav .nav-link i.now-ui-icons + p {
      margin-left: 3px; }
    .navbar .navbar-nav .nav-link i.fa,
    .navbar .navbar-nav .nav-link i.now-ui-icons {
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px; }
    .navbar .navbar-nav .nav-link i.now-ui-icons {
      top: 4px;
      font-size: 16px; }
    .navbar .navbar-nav .nav-link.profile-photo .profile-photo-small {
      width: 27px;
      height: 27px; }
    .navbar .navbar-nav .nav-link.disabled {
      opacity: .5;
      color: #FFFFFF; }
  .navbar .navbar-nav .nav-item.active .nav-link:not(.btn),
  .navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
  .navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
  .navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 0.1875rem;
    color: #FFFFFF; }
  .navbar .logo-container {
    width: 27px;
    height: 27px;
    overflow: hidden;
    margin: 0 auto;
    border-radius: 50%;
    border: 1px solid transparent; }
  .navbar .navbar-brand {
    text-transform: uppercase;
    font-size: 0.8571em;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 1.625rem; }
  .navbar .navbar-toggler {
    width: 37px;
    height: 27px;
    vertical-align: middle;
    outline: 0;
    cursor: pointer; }
    .navbar .navbar-toggler .navbar-toggler-bar.navbar-kebab {
      width: 3px;
      height: 3px;
      border-radius: 50%;
      margin: 0 auto; }
  .navbar .button-dropdown .navbar-toggler-bar:nth-child(2) {
    width: 17px; }
  .navbar.navbar-transparent {
    background-color: transparent !important;
    box-shadow: none;
    color: #FFFFFF; }
  .navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item):not(.btn) {
    color: #888; }
    .navbar.bg-white:not(.navbar-transparent) a:not(.dropdown-item):not(.btn).disabled {
      opacity: .5;
      color: #888; }
  .navbar.bg-white:not(.navbar-transparent) .button-bar {
    background: #888; }
  .navbar.bg-white:not(.navbar-transparent) .nav-item.active .nav-link:not(.btn),
  .navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):focus,
  .navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):hover,
  .navbar.bg-white:not(.navbar-transparent) .nav-item .nav-link:not(.btn):active {
    background-color: rgba(222, 222, 222, 0.8);
    color: #888; }
  .navbar.bg-white:not(.navbar-transparent) .logo-container {
    border: 1px solid #888; }

.bg-default {
  background-color: #888 !important; }

.bg-primary {
  background-color: #f96332 !important; }

.bg-info {
  background-color: #2CA8FF !important; }

.bg-success {
  background-color: #18ce0f !important; }

.bg-danger {
  background-color: #FF3636 !important; }

.bg-warning {
  background-color: #FFB236 !important; }

.bg-white {
  background-color: #FFFFFF !important; }

.page-header {
  min-height: 100vh;
  max-height: 999px;
  padding: 0;
  color: #FFFFFF;
  position: relative; }
  .page-header .page-header-image {
    position: absolute;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 100%;
    z-index: -1; }
  .page-header .content-center {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
    color: #FFFFFF;
    padding: 0 15px;
    width: 100%;
    max-width: 880px; }
  .page-header footer {
    position: absolute;
    bottom: 0;
    width: 100%; }
  .page-header .container {
    height: 100%;
    z-index: 1; }
  .page-header .category,
  .page-header .description {
    color: rgba(255, 255, 255, 0.8); }
  .page-header.page-header-small {
    min-height: 60vh;
    max-height: 440px; }
  .page-header.page-header-mini {
    min-height: 40vh;
    max-height: 340px; }
  .page-header .title {
    margin-bottom: 15px; }
  .page-header .title + h4 {
    margin-top: 10px; }
  .page-header:after, .page-header:before {
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: ""; }
  .page-header:before {
    background-color: rgba(0, 0, 0, 0.3); }
  .page-header[filter-color="orange"] {
    background: rgba(44, 44, 44, 0.2);
    /* For browsers that do not support gradients */
    /* For Safari 5.1 to 6.0 */
    /* For Opera 11.1 to 12.0 */
    /* For Firefox 3.6 to 15 */
    background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
    /* Standard syntax */ }

.dropdown-menu {
  border: 0;
  box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
  border-radius: 0.125rem;
  transition: all 150ms linear;
  font-size: 14px; }
  .dropdown-menu.dropdown-menu-right:before {
    left: auto;
    right: 10px; }
  .dropdown-menu i {
    margin-right: 5px;
    position: relative;
    top: 1px; }
  .dropdown-menu .now-ui-icons {
    margin-right: 10px;
    position: relative;
    top: 4px;
    font-size: 18px;
    margin-top: -5px;
    opacity: .5; }
  .dropdown-menu .dropdown-item.active, .dropdown-menu .dropdown-item:active {
    color: inherit; }
  .dropup .dropdown-menu:before {
    display: none; }
  .dropup .dropdown-menu:after {
    display: inline-block;
    position: absolute;
    width: 0;
    height: 0;
    vertical-align: middle;
    content: "";
    top: auto;
    bottom: -5px;
    right: auto;
    left: 10px;
    color: #FFFFFF;
    border-top: .4em solid;
    border-right: .4em solid transparent;
    border-left: .4em solid transparent; }
  .dropup .dropdown-menu.dropdown-menu-right:after {
    right: 10px;
    left: auto; }
  .dropdown-menu:before {
    display: inline-block;
    position: absolute;
    width: 0;
    height: 0;
    vertical-align: middle;
    content: "";
    top: -5px;
    left: 10px;
    right: auto;
    color: #FFFFFF;
    border-bottom: .4em solid;
    border-right: .4em solid transparent;
    border-left: .4em solid transparent; }
  .dropdown-menu.dropdown-menu-right {
    right: 0 !important;
    left: auto !important; }
  .dropdown-menu .dropdown-item,
  .bootstrap-select .dropdown-menu.inner li a {
    font-size: 0.8571em;
    padding-top: .6rem;
    padding-bottom: .6rem;
    margin-top: 5px;
    transition: all 150ms linear; }
    .dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus,
    .bootstrap-select .dropdown-menu.inner li a:hover,
    .bootstrap-select .dropdown-menu.inner li a:focus {
      background-color: rgba(222, 222, 222, 0.3);
      outline: 0; }
    .dropdown-menu .dropdown-item.disabled, .dropdown-menu .dropdown-item:disabled,
    .bootstrap-select .dropdown-menu.inner li a.disabled,
    .bootstrap-select .dropdown-menu.inner li a:disabled {
      color: rgba(182, 182, 182, 0.6); }
      .dropdown-menu .dropdown-item.disabled:hover, .dropdown-menu .dropdown-item.disabled:focus, .dropdown-menu .dropdown-item:disabled:hover, .dropdown-menu .dropdown-item:disabled:focus,
      .bootstrap-select .dropdown-menu.inner li a.disabled:hover,
      .bootstrap-select .dropdown-menu.inner li a.disabled:focus,
      .bootstrap-select .dropdown-menu.inner li a:disabled:hover,
      .bootstrap-select .dropdown-menu.inner li a:disabled:focus {
        background-color: transparent; }
  .dropdown-menu .dropdown-divider {
    background-color: rgba(222, 222, 222, 0.5); }
  .dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
    color: rgba(182, 182, 182, 0.6);
    font-size: 0.7142em;
    text-transform: uppercase;
    font-weight: 700; }
  .dropdown-menu.dropdown-primary {
    background-color: #f95823; }
    .dropdown-menu.dropdown-primary:before {
      color: #f95823; }
    .dropdown-menu.dropdown-primary .dropdown-header:not([href]):not([tabindex]) {
      color: rgba(255, 255, 255, 0.8); }
    .dropdown-menu.dropdown-primary .dropdown-item {
      color: #FFFFFF; }
      .dropdown-menu.dropdown-primary .dropdown-item:hover, .dropdown-menu.dropdown-primary .dropdown-item:focus {
        background-color: rgba(255, 255, 255, 0.2); }
    .dropdown-menu.dropdown-primary .dropdown-divider {
      background-color: rgba(255, 255, 255, 0.2); }
  .dropdown-menu.dropdown-info {
    background-color: #1da2ff; }
    .dropdown-menu.dropdown-info:before {
      color: #1da2ff; }
    .dropdown-menu.dropdown-info .dropdown-header:not([href]):not([tabindex]) {
      color: rgba(255, 255, 255, 0.8); }
    .dropdown-menu.dropdown-info .dropdown-item {
      color: #FFFFFF; }
      .dropdown-menu.dropdown-info .dropdown-item:hover, .dropdown-menu.dropdown-info .dropdown-item:focus {
        background-color: rgba(255, 255, 255, 0.2); }
    .dropdown-menu.dropdown-info .dropdown-divider {
      background-color: rgba(255, 255, 255, 0.2); }
  .dropdown-menu.dropdown-danger {
    background-color: #ff2727; }
    .dropdown-menu.dropdown-danger:before {
      color: #ff2727; }
    .dropdown-menu.dropdown-danger .dropdown-header:not([href]):not([tabindex]) {
      color: rgba(255, 255, 255, 0.8); }
    .dropdown-menu.dropdown-danger .dropdown-item {
      color: #FFFFFF; }
      .dropdown-menu.dropdown-danger .dropdown-item:hover, .dropdown-menu.dropdown-danger .dropdown-item:focus {
        background-color: rgba(255, 255, 255, 0.2); }
    .dropdown-menu.dropdown-danger .dropdown-divider {
      background-color: rgba(255, 255, 255, 0.2); }
  .dropdown-menu.dropdown-success {
    background-color: #16c00e; }
    .dropdown-menu.dropdown-success:before {
      color: #16c00e; }
    .dropdown-menu.dropdown-success .dropdown-header:not([href]):not([tabindex]) {
      color: rgba(255, 255, 255, 0.8); }
    .dropdown-menu.dropdown-success .dropdown-item {
      color: #FFFFFF; }
      .dropdown-menu.dropdown-success .dropdown-item:hover, .dropdown-menu.dropdown-success .dropdown-item:focus {
        background-color: rgba(255, 255, 255, 0.2); }
    .dropdown-menu.dropdown-success .dropdown-divider {
      background-color: rgba(255, 255, 255, 0.2); }
  .dropdown-menu.dropdown-warning {
    background-color: #ffac27; }
    .dropdown-menu.dropdown-warning:before {
      color: #ffac27; }
    .dropdown-menu.dropdown-warning .dropdown-header:not([href]):not([tabindex]) {
      color: rgba(255, 255, 255, 0.8); }
    .dropdown-menu.dropdown-warning .dropdown-item {
      color: #FFFFFF; }
      .dropdown-menu.dropdown-warning .dropdown-item:hover, .dropdown-menu.dropdown-warning .dropdown-item:focus {
        background-color: rgba(255, 255, 255, 0.2); }
    .dropdown-menu.dropdown-warning .dropdown-divider {
      background-color: rgba(255, 255, 255, 0.2); }
  .dropdown .dropdown-menu:not(.inner),
  .dropup:not(.bootstrap-select) .dropdown-menu, .dropdown-menu.bootstrap-datetimepicker-widget.top, .dropdown-menu.bootstrap-datetimepicker-widget.bottom {
    visibility: hidden;
    display: block;
    opacity: 0;
    filter: alpha(opacity=0);
    top: 100% !important; }
  .dropdown .dropdown-menu:not(.inner), .dropdown-menu.bootstrap-datetimepicker-widget.bottom {
    -webkit-transform: translate3d(0, -20px, 0) !important;
    transform: translate3d(0, -20px, 0) !important; }
  .bootstrap-select.dropup .dropdown-menu:not(.inner) {
    -webkit-transform: translate3d(0, 25px, 0) !important;
    transform: translate3d(0, 25px, 0) !important; }
  .dropup:not(.bootstrap-select) .dropdown-menu, .dropdown-menu.bootstrap-datetimepicker-widget.top {
    -webkit-transform: translate3d(0, 20px, 0) !important;
    transform: translate3d(0, 20px, 0) !important;
    top: auto !important;
    bottom: 100%; }
  .dropdown.show .dropdown-menu:not(.inner), .dropdown-menu.bootstrap-datetimepicker-widget.top.open, .dropdown-menu.bootstrap-datetimepicker-widget.bottom.open,
  .dropup.show:not(.bootstrap-select) .dropdown-menu,
  .navbar .dropdown.show .dropdown-menu {
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible; }
  .dropdown.show .dropdown-menu:not(.inner), .dropdown-menu.bootstrap-datetimepicker-widget.bottom.open,
  .navbar .dropdown.show .dropdown-menu {
    -webkit-transform: translate3d(0, 1px, 0) !important;
    transform: translate3d(0, 1px, 0) !important; }
  .dropup.show:not(.bootstrap-select) .dropdown-menu, .dropdown-menu.bootstrap-datetimepicker-widget.top.open {
    -webkit-transform: translate3d(0, -2px, 0) !important;
    transform: translate3d(0, -2px, 0) !important; }

.button-dropdown {
  padding-right: 0.7rem;
  cursor: pointer; }
  .button-dropdown .dropdown-toggle {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    display: block; }
    .button-dropdown .dropdown-toggle:after {
      display: none; }

.alert {
  border: 0;
  border-radius: 0.1875rem;
  color: #FFFFFF;
  padding-top: .9rem;
  padding-bottom: .9rem;
  position: relative; }
  .alert.alert-success {
    background-color: #1be611; }
  .alert.alert-danger {
    background-color: #ff5050; }
  .alert.alert-warning {
    background-color: #ffbc50; }
  .alert.alert-info {
    background-color: #46b3ff; }
  .alert.alert-primary {
    background-color: #fa764b; }
  .alert i.fa,
  .alert i.now-ui-icons {
    font-size: 20px; }
  .alert .close {
    color: #FFFFFF !important;
    opacity: .9;
    text-shadow: none;
    line-height: 0;
    outline: 0; }
  .alert span[data-notify="icon"] {
    font-size: 22px;
    display: block;
    left: 19px;
    position: absolute;
    top: 50%;
    margin-top: -11px; }
  .alert button.close {
    position: absolute;
    right: 10px;
    top: 50%;
    margin-top: -13px;
    width: 25px;
    height: 25px;
    padding: 3px; }
  .alert .close ~ span {
    display: block;
    max-width: 89%; }
  .alert.alert-with-icon {
    padding-left: 65px; }

img {
  max-width: 100%;
  border-radius: 0.1875rem; }

.img-raised {
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3); }

/* --------------------------------

Nucleo Outline Web Font - nucleoapp.com/
License - nucleoapp.com/license/
Created using IcoMoon - icomoon.io

-------------------------------- */
@font-face {
  font-family: 'Nucleo Outline';
  src: url("../fonts/nucleo-outline.eot");
  src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
  font-weight: normal;
  font-style: normal; }

/*------------------------
	base class definition
-------------------------*/
.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

.all-icons .font-icon-detail {
  text-align: center;
  padding: 45px 0px 30px;
  border: 1px solid #e5e5e5;
  border-radius: 0.1875rem;
  margin: 15px 0;
  min-height: 168px; }

.all-icons [class*="now-ui-icons"] {
  font-size: 32px; }

.all-icons .font-icon-detail p {
  margin: 25px auto 0;
  width: 100%;
  text-align: center;
  display: block;
  color: #B8B8B8;
  padding: 0 10px;
  font-size: 0.7142em; }

.table .img-wrapper {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto; }

.table .img-row {
  max-width: 60px;
  width: 60px; }

.table .form-check {
  margin: 0; }
  .table .form-check label .form-check-sign::before,
  .table .form-check label .form-check-sign::after {
    top: -17px;
    left: 4px; }

.table .btn {
  margin: 0; }

.table small, .table .small {
  font-weight: 300; }

.card-tasks .card-body .table {
  margin-bottom: 0; }
  .card-tasks .card-body .table > thead > tr > th,
  .card-tasks .card-body .table > tbody > tr > th,
  .card-tasks .card-body .table > tfoot > tr > th,
  .card-tasks .card-body .table > thead > tr > td,
  .card-tasks .card-body .table > tbody > tr > td,
  .card-tasks .card-body .table > tfoot > tr > td {
    padding-top: 0;
    padding-bottom: 0; }

.table > thead > tr > th {
  border-bottom-width: 1px;
  font-size: 1.45em;
  font-weight: 300;
  border: 0; }

.table .radio,
.table .checkbox {
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  width: 15px; }
  .table .radio .icons,
  .table .checkbox .icons {
    position: relative; }
  .table .radio label:after, .table .radio label:before,
  .table .checkbox label:after,
  .table .checkbox label:before {
    top: -17px;
    left: -3px; }

.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 12px 7px;
  vertical-align: middle; }

.table .th-description {
  max-width: 150px; }

.table .td-price {
  font-size: 26px;
  font-weight: 300;
  margin-top: 5px;
  position: relative;
  top: 4px;
  text-align: right; }

.table .td-total {
  font-weight: 700;
  font-size: 1.57em;
  padding-top: 20px;
  text-align: right; }

.table .td-actions .btn {
  margin: 0px; }

.table > tbody > tr {
  position: relative; }

.table-shopping > thead > tr > th {
  font-size: 1em;
  text-transform: uppercase; }

.table-shopping > tbody > tr > td {
  font-size: 1em; }
  .table-shopping > tbody > tr > td b {
    display: block;
    margin-bottom: 5px; }

.table-shopping .td-name {
  font-weight: 400;
  font-size: 1.5em; }
  .table-shopping .td-name small {
    color: #9A9A9A;
    font-size: 0.75em;
    font-weight: 300; }

.table-shopping .td-number {
  font-weight: 300;
  font-size: 1.714em; }

.table-shopping .td-name {
  min-width: 200px; }

.table-shopping .td-number {
  text-align: right;
  min-width: 170px; }
  .table-shopping .td-number small {
    margin-right: 3px; }

.table-shopping .img-container {
  width: 120px;
  max-height: 160px;
  overflow: hidden;
  display: block; }
  .table-shopping .img-container img {
    width: 100%; }

.table-responsive {
  overflow: auto;
  padding-bottom: 10px; }

#tables .table-responsive {
  margin-bottom: 30px; }

.wrapper {
  position: relative;
  top: 0;
  height: 100vh; }
  .wrapper.wrapper-full-page {
    min-height: 100vh;
    height: auto; }

.sidebar,
.off-canvas-sidebar {
  position: fixed;
  
  top: 0;
  height: 100%;
  bottom: 0;
  width: 260px;
  left: 0;
  z-index: 1030; }
  .sidebar .sidebar-wrapper,
  .off-canvas-sidebar .sidebar-wrapper {
    position: relative;
    height: calc(100vh - 75px);
    overflow: auto;
    width: 260px;
    z-index: 4;
    padding-bottom: 100px; }
    .sidebar .sidebar-wrapper .dropdown .dropdown-backdrop,
    .off-canvas-sidebar .sidebar-wrapper .dropdown .dropdown-backdrop {
      display: none !important; }
    .sidebar .sidebar-wrapper .navbar-form,
    .off-canvas-sidebar .sidebar-wrapper .navbar-form {
      border: none; }
  .sidebar .navbar-minimize,
  .off-canvas-sidebar .navbar-minimize {
    position: absolute;
    right: 20px;
    top: 2px;
    opacity: 1;
   }
  .sidebar .logo-tim,
  .off-canvas-sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden; }
    .sidebar .logo-tim img,
    .off-canvas-sidebar .logo-tim img {
      width: 60px;
      height: 60px; }
  .sidebar .nav,
  .off-canvas-sidebar .nav {
    margin-top: 20px;
    display: block; }
    .sidebar .nav .caret,
    .off-canvas-sidebar .nav .caret {
      top: 14px;
      position: absolute;
      right: 10px; }
    .sidebar .nav li > a + div .nav li > a,
    .off-canvas-sidebar .nav li > a + div .nav li > a {
      margin-top: 7px; }
    .sidebar .nav li > a,
    .off-canvas-sidebar .nav li > a {
      margin: 10px 15px 0;
      border-radius: 30px;
      color: #FFFFFF;
      display: block;
      text-decoration: none;
      position: relative;
      text-transform: uppercase;
      cursor: pointer;
      font-size: 0.7142em;
      padding: 10px 8px;
      line-height: 1.625rem; }
    .sidebar .nav li:first-child > a,
    .off-canvas-sidebar .nav li:first-child > a {
      margin: 0 15px; }
    .sidebar .nav li:hover:not(.active) > a,
    .sidebar .nav li:focus:not(.active) > a,
    .off-canvas-sidebar .nav li:hover:not(.active) > a,
    .off-canvas-sidebar .nav li:focus:not(.active) > a {
      background-color: rgba(128, 30, 128, 0.1); }
      .sidebar .nav li:hover:not(.active) > a i,
      .sidebar .nav li:focus:not(.active) > a i,
      .off-canvas-sidebar .nav li:hover:not(.active) > a i,
      .off-canvas-sidebar .nav li:focus:not(.active) > a i {
        color: #FFFFFF; }
    .sidebar .nav li.active > a,
    .off-canvas-sidebar .nav li.active > a {
      background-color: black;
      box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1); }
    .sidebar .nav p,
    .off-canvas-sidebar .nav p {
      margin: 0;
      line-height: 30px;
      position: relative;
      display: block;
      height: auto;
      white-space: nowrap; }
    .sidebar .nav i,
    .off-canvas-sidebar .nav i {
      font-size: 20px;
      float: left;
      margin-right: 12px;
      line-height: 30px;
      width: 34px;
      text-align: center;
      color: rgba(255, 255, 255, 0.5);
      position: relative; }
  .sidebar .sidebar-background,
  .off-canvas-sidebar .sidebar-background {
    position: absolute;
    z-index: 1;
    height: 100%;
    width: 100%;
    display: block;
    top: 0;
    left: 0;
    background-size: cover;
   
    background-position: center center; }
    .sidebar .sidebar-background:after,
    .off-canvas-sidebar .sidebar-background:after {
      position: absolute;
      z-index: 3;
      width: 100%;
      height: 100%;
      content: "";
      display: block;
      background:FFFF;
      opacity: 1; }
  .sidebar .logo,
  .off-canvas-sidebar .logo {
    position: relative;
    padding: 0.5rem 0.7rem;
    z-index: 4; }
    .sidebar .logo a.logo-mini,
    .off-canvas-sidebar .logo a.logo-mini {
      opacity: 1;
      float: left;
      width: 34px;
      text-align: center;
      margin-left: 10px;
      margin-right: 12px; }
    .sidebar .logo a.logo-normal,
    .off-canvas-sidebar .logo a.logo-normal {
      display: block;
      opacity: 1;
      -webkit-transform: translate3d(0px, 0, 0);
      transform: translate3d(0px, 0, 0); }
    .sidebar .logo:after,
    .off-canvas-sidebar .logo:after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 15px;
      height: 1px;
      width: calc(100% - 30px);
      background-color: rgba(255, 255, 255, 0.5); }
    .sidebar .logo p,
    .off-canvas-sidebar .logo p {
      float: left;
      font-size: 20px;
      margin: 10px 10px;
      color: #FFFFFF;
      line-height: 20px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
    .sidebar .logo .simple-text,
    .off-canvas-sidebar .logo .simple-text {
      text-transform: uppercase;
      padding: 0.5rem 0;
      display: block;
      white-space: nowrap;
      font-size: 1em;
      color: #FFFFFF;
      text-decoration: none;
      font-weight: 400;
      line-height: 30px;
      overflow: hidden; }
  .sidebar .logo-tim,
  .off-canvas-sidebar .logo-tim {
    border-radius: 50%;
    border: 1px solid #333;
    display: block;
    height: 61px;
    width: 61px;
    float: left;
    overflow: hidden; }
    .sidebar .logo-tim img,
    .off-canvas-sidebar .logo-tim img {
      width: 60px;
      height: 60px; }
  .sidebar:before, .sidebar:after,
  .off-canvas-sidebar:before,
  .off-canvas-sidebar:after {
    display: block;
    content: "";
    opacity: 1;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0; }
  .sidebar:after,
  .off-canvas-sidebar:after {
    background: #888;
    background: linear-gradient(#888 0%, #000 80%);
    z-index: 3; }
  .sidebar[data-color="blue"]:after,
  .off-canvas-sidebar[data-color="blue"]:after {
    background: #2CA8FF; }
  .sidebar[data-color="blue"] .nav li.active > a:not([data-toggle="collapse"]),
  .off-canvas-sidebar[data-color="blue"] .nav li.active > a:not([data-toggle="collapse"]) {
    color: #2CA8FF; }
    .sidebar[data-color="blue"] .nav li.active > a:not([data-toggle="collapse"]) i,
    .off-canvas-sidebar[data-color="blue"] .nav li.active > a:not([data-toggle="collapse"]) i {
      color: #2CA8FF; }
  .sidebar[data-color="green"]:after,
  .off-canvas-sidebar[data-color="green"]:after {
    background: #18ce0f; }
  .sidebar[data-color="green"] .nav li.active > a:not([data-toggle="collapse"]),
  .off-canvas-sidebar[data-color="green"] .nav li.active > a:not([data-toggle="collapse"]) {
    color: #18ce0f; }
    .sidebar[data-color="green"] .nav li.active > a:not([data-toggle="collapse"]) i,
    .off-canvas-sidebar[data-color="green"] .nav li.active > a:not([data-toggle="collapse"]) i {
      color: #18ce0f; }
  .sidebar[data-color="orange"]:after,
  .off-canvas-sidebar[data-color="orange"]:after {
    background: #f96332; }
  .sidebar[data-color="orange"] .nav li.active > a:not([data-toggle="collapse"]),
  .off-canvas-sidebar[data-color="orange"] .nav li.active > a:not([data-toggle="collapse"]) {
    color: #f96332; }
    .sidebar[data-color="orange"] .nav li.active > a:not([data-toggle="collapse"]) i,
    .off-canvas-sidebar[data-color="orange"] .nav li.active > a:not([data-toggle="collapse"]) i {
      color: #f96332; }
  .sidebar[data-color="red"]:after,
  .off-canvas-sidebar[data-color="red"]:after {
    background: #FF3636; }
  .sidebar[data-color="red"] .nav li.active > a:not([data-toggle="collapse"]),
  .off-canvas-sidebar[data-color="red"] .nav li.active > a:not([data-toggle="collapse"]) {
    color: #FF3636; }
    .sidebar[data-color="red"] .nav li.active > a:not([data-toggle="collapse"]) i,
    .off-canvas-sidebar[data-color="red"] .nav li.active > a:not([data-toggle="collapse"]) i {
      color: #FF3636; }
  .sidebar[data-color="yellow"]:after,
  .off-canvas-sidebar[data-color="yellow"]:after {
    background: #FFB236; }
  .sidebar[data-color="yellow"] .nav li.active > a:not([data-toggle="collapse"]),
  .off-canvas-sidebar[data-color="yellow"] .nav li.active > a:not([data-toggle="collapse"]) {
    color: #FFB236; }
    .sidebar[data-color="yellow"] .nav li.active > a:not([data-toggle="collapse"]) i,
    .off-canvas-sidebar[data-color="yellow"] .nav li.active > a:not([data-toggle="collapse"]) i {
      color: #FFB236; }

.visible-on-sidebar-regular {
  display: inline-block !important; }

.visible-on-sidebar-mini {
  display: none !important; }

.off-canvas-sidebar .nav > li > a,
.off-canvas-sidebar .nav > li > a:hover {
  color: #FFFFFF; }

.off-canvas-sidebar .nav > li > a:focus {
  background: rgba(200, 200, 200, 0.2); }

.main-panel {
  position: relative;
  float: right;
  width: calc(100% - 260px);
  background-color: #E3E3E3;
  background-color: #ebecf1;
  transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); }
  .main-panel > .content {
    padding: 0 30px 30px;
    min-height: calc(100vh - 123px);
    margin-top: -30px;
   background-image: url("/images/project.jpg"); }
  .main-panel > .navbar {
    margin-bottom: 0; }
  .main-panel .header {
    margin-bottom: 50px; }

.perfect-scrollbar-on .sidebar,
.perfect-scrollbar-on .main-panel {
  height: 100%;
  max-height: 100%; }

@media (min-width: 991px) {
  .sidebar {
    display: block;
    box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35); } }

.panel-header {
  height: 260px;
  padding-top: 80px;
  padding-bottom: 5px;
  background-color:#044240;
}
  .panel-header .header .title {
    color: #FFFFFF; }
  .panel-header .header .category {
    max-width: 600px;
    color: rgba(255, 255, 255, 0.5);
    margin: 0 auto;
    font-size: 13px; }
    .panel-header .header .category a {
      color: #FFFFFF; }

.panel-header-sm {
  height: 135px; }

.panel-header-lg {
  height: 380px; }

.footer {
  padding: 24px 0; }
  .footer.footer-default {
    background-color: #f2f2f2; }
  .footer nav {
    display: inline-block;
    float:left;
    padding-left: 7px; }
  .footer ul {
    margin-bottom: 0;
    padding: 0;
    list-style: none; }
    .footer ul li {
      display: inline-block; }
      .footer ul li a {
        color: inherit;
        padding: 0.5rem;
        font-size: 0.8571em;
        text-transform: uppercase;
        text-decoration: none; }
        .footer ul li a:hover {
          text-decoration: none; }
  .footer.fixed-bottom {
    width: calc(100% - 80px);
    margin-left: auto; }
  .footer .copyright {
    font-size: 0.8571em;
    line-height: 1.8; }
  .footer:after {
    display: table;
    clear: both;
    content: " "; }

.fixed-plugin {
  position: fixed;
  right: 0;
  width: 64px;
  background: rgba(0, 0, 0, 0.3);
  z-index: 1031;
  border-radius: 8px 0 0 8px;
  text-align: center;
  top: 120px; }
  .fixed-plugin li > a,
  .fixed-plugin .badge {
    transition: all .34s;
    -webkit-transition: all .34s;
    -moz-transition: all .34s; }
  .fixed-plugin .fa-cog {
    color: #FFFFFF;
    padding: 10px;
    border-radius: 0 0 6px 6px;
    width: auto; }
  .fixed-plugin .dropdown .dropdown-menu {
    right: 80px;
    left: auto !important;
    top: -52px !important;
    width: 290px;
    border-radius: 0.1875rem;
    padding: 0 10px; }
  .fixed-plugin .dropdown .dropdown-menu .now-ui-icons {
    top: 5px; }
  .fixed-plugin .dropdown-menu:after,
  .fixed-plugin .dropdown-menu:before {
    right: 10px;
    margin-left: auto;
    left: auto; }
  .fixed-plugin .fa-circle-thin {
    color: #FFFFFF; }
  .fixed-plugin .active .fa-circle-thin {
    color: #00bbff; }
  .fixed-plugin .dropdown-menu > .active > a,
  .fixed-plugin .dropdown-menu > .active > a:hover,
  .fixed-plugin .dropdown-menu > .active > a:focus {
    color: #777777;
    text-align: center; }
  .fixed-plugin img {
    border-radius: 0;
    width: 100%;
    height: 100px;
    margin: 0 auto; }
  .fixed-plugin .dropdown-menu li > a:hover,
  .fixed-plugin .dropdown-menu li > a:focus {
    box-shadow: none; }
  .fixed-plugin .badge {
    border: 3px solid #FFFFFF;
    border-radius: 50%;
    cursor: pointer;
    display: inline-block;
    height: 23px;
    margin-right: 5px;
    position: relative;
    width: 23px; }
  .fixed-plugin .badge.active,
  .fixed-plugin .badge:hover {
    border-color: #00bbff; }
  .fixed-plugin .badge-blue {
    background-color: #2CA8FF; }
  .fixed-plugin .badge-green {
    background-color: #18ce0f; }
  .fixed-plugin .badge-orange {
    background-color: #f96332; }
  .fixed-plugin .badge-yellow {
    background-color: #FFB236; }
  .fixed-plugin .badge-red {
    background-color: #FF3636; }
  .fixed-plugin h5 {
    font-size: 14px;
    margin: 10px; }
  .fixed-plugin .dropdown-menu li {
    display: block;
    padding: 18px 2px;
    width: 25%;
    float: left; }
  .fixed-plugin li.adjustments-line,
  .fixed-plugin li.header-title,
  .fixed-plugin li.button-container {
    width: 100%;
    height: 50px;
    min-height: inherit; }
  .fixed-plugin li.button-container {
    height: auto; }
    .fixed-plugin li.button-container div {
      margin-bottom: 5px; }
  .fixed-plugin #sharrreTitle {
    text-align: center;
    padding: 10px 0;
    height: 50px; }
  .fixed-plugin li.header-title {
    height: 30px;
    line-height: 25px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase; }
  .fixed-plugin .adjustments-line p {
    float: left;
    display: inline-block;
    margin-bottom: 0;
    font-size: 1em;
    color: #3C4858; }
  .fixed-plugin .adjustments-line a {
    color: transparent; }
    .fixed-plugin .adjustments-line a .badge-colors {
      position: relative;
      top: -2px; }
    .fixed-plugin .adjustments-line a a:hover,
    .fixed-plugin .adjustments-line a a:focus {
      color: transparent; }
  .fixed-plugin .adjustments-line .togglebutton {
    text-align: center; }
    .fixed-plugin .adjustments-line .togglebutton .label-switch {
      position: relative;
      left: -10px;
      font-size: 0.7142em;
      color: #888; }
      .fixed-plugin .adjustments-line .togglebutton .label-switch.label-right {
        left: 10px; }
    .fixed-plugin .adjustments-line .togglebutton .toggle {
      margin-right: 0; }
  .fixed-plugin .adjustments-line .dropdown-menu > li.adjustments-line > a {
    padding-right: 0;
    padding-left: 0;
    border-bottom: 1px solid #ddd;
    border-radius: 0;
    margin: 0; }
  .fixed-plugin .dropdown-menu > li > a.img-holder {
    font-size: 16px;
    text-align: center;
    border-radius: 10px;
    background-color: #FFF;
    border: 3px solid #FFF;
    padding-left: 0;
    padding-right: 0;
    opacity: 1;
    cursor: pointer;
    display: block;
    max-height: 100px;
    overflow: hidden;
    padding: 0; }
    .fixed-plugin .dropdown-menu > li > a.img-holder img {
      margin-top: auto; }
  .fixed-plugin .dropdown-menu > li a.switch-trigger:hover,
  .fixed-plugin .dropdown-menu > li > a.switch-trigger:focus {
    background-color: transparent; }
  .fixed-plugin .dropdown-menu > li:hover > a.img-holder, .fixed-plugin .dropdown-menu > li:focus > a.img-holder {
    border-color: rgba(0, 187, 255, 0.53); }
  .fixed-plugin .dropdown-menu > .active > a.img-holder,
  .fixed-plugin .dropdown-menu > .active > a.img-holder {
    border-color: #00bbff;
    background-color: #FFFFFF; }
  .fixed-plugin .btn-social {
    width: 50%;
    display: block;
    width: 48%;
    float: left;
    font-weight: 600; }
  .fixed-plugin .btn-social i {
    margin-right: 5px; }
  .fixed-plugin .btn-social:first-child {
    margin-right: 2%; }
  .fixed-plugin .dropdown .dropdown-menu {
    -webkit-transform: translateY(-15%);
    transform: translateY(-15%);
    top: 27px;
    opacity: 0;
    -webkit-transform-origin: 0 0;
            transform-origin: 0 0; }
    .fixed-plugin .dropdown .dropdown-menu:before {
      border-bottom: 0.4em solid rgba(0, 0, 0, 0);
      border-left: 0.4em solid rgba(0, 0, 0, 0.2);
      border-top: 0.4em solid rgba(0, 0, 0, 0);
      right: -16px;
      top: 46px; }
    .fixed-plugin .dropdown .dropdown-menu:after {
      border-bottom: 0.4em solid rgba(0, 0, 0, 0);
      border-left: .4em solid #FFFFFF;
      border-top: 0.4em solid rgba(0, 0, 0, 0);
      right: -16px; }
    .fixed-plugin .dropdown .dropdown-menu:before, .fixed-plugin .dropdown .dropdown-menu:after {
      content: "";
      display: inline-block;
      position: absolute;
      top: 74px;
      width: 16px;
      transform: translateY(-50%);
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%); }
  .fixed-plugin .dropdown.show .dropdown-menu {
    opacity: 1;
    -webkit-transform: translateY(-13%);
    transform: translateY(-13%);
    -webkit-transform-origin: 0 0;
            transform-origin: 0 0; }
  .fixed-plugin .bootstrap-switch {
    margin: 0; }

.card {
  border: 0;
  border-radius: 0.1875rem;
  display: inline-block;
  position: relative;
  width: 100%;
  margin-bottom: 20px;
  box-shadow: 0 1px 15px 1px rgba(39, 39, 39, 0.1); }
  .card [data-notify="container"].alert {
    min-width: auto;
    left: unset !important;
    right: unset !important; }
  .card .card-body {
    padding: 15px 15px 10px 15px; }
    .card .card-body.table-full-width {
      padding-left: 0;
      padding-right: 0; }
  .card .card-header {
    padding: 15px 15px 0;
    border: 0; }
    .card .card-header:not([data-background-color]) {
      background-color: transparent; }
    .card .card-header .card-title {
      margin-top: 10px; }
  .card .map {
    border-radius: 0.1875rem; }
    .card .map.map-big {
      height: 400px; }
  .card[data-background-color="orange"] {
    background-color: #f96332; }
    .card[data-background-color="orange"] .card-header {
      background-color: #f96332; }
    .card[data-background-color="orange"] .card-footer .stats {
      color: #FFFFFF; }
  .card[data-background-color="red"] {
    background-color: #FF3636; }
  .card[data-background-color="yellow"] {
    background-color: #FFB236; }
  .card[data-background-color="blue"] {
    background-color: #2CA8FF; }
  .card[data-background-color="green"] {
    background-color: #18ce0f; }
  .card .image {
    overflow: hidden;
    height: 200px;
    position: relative; }
  .card .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-bottom: 15px; }
  .card label {
    font-size: 0.8571em;
    margin-bottom: 5px;
    color: #9A9A9A; }
  .card .card-footer {
    background-color: transparent;
    border: 0; }
    .card .card-footer .stats i {
      margin-right: 5px;
      position: relative;
      top: 2px; }
    .card .card-footer .btn {
      margin: 0; }

.card-plain {
  background: transparent;
  box-shadow: none; }
  .card-plain .card-header,
  .card-plain .card-footer {
    margin-left: 0;
    margin-right: 0;
    background-color: transparent; }
  .card-plain:not(.card-subcategories).card-body {
    padding-left: 0;
    padding-right: 0; }

.card-chart .card-header .card-title {
  margin-top: 10px;
  margin-bottom: 0; }

.card-chart .card-header .card-category {
  margin-bottom: 5px; }

.card-chart .table {
  margin-bottom: 0; }
  .card-chart .table td {
    border-top: none;
    border-bottom: 1px solid #e9ecef; }

.card-chart .card-progress {
  margin-top: 30px; }

.card-chart .chart-area {
  height: 190px;
  width: calc(100% + 30px);
  margin-left: -15px;
  margin-right: -15px; }

.card-chart .card-footer {
  margin-top: 15px; }
  .card-chart .card-footer .stats {
    color: #9A9A9A; }

.card-chart .dropdown {
  position: absolute;
  right: 20px;
  top: 20px; }
  .card-chart .dropdown .btn {
    margin: 0; }

.card-user .image {
  height: 120px; }

.card-user .author {
  text-align: center;
  text-transform: none;
  margin-top: -77px; }
  .card-user .author a + p.description {
    margin-top: -7px; }

.card-user .avatar {
  width: 124px;
  height: 124px;
  border: 1px solid #FFFFFF;
  position: relative; }

.card-user .card-body {
  min-height: 240px; }

.card-user hr {
  margin: 5px 15px; }

.card-user .button-container {
  margin-bottom: 6px;
  text-align: center; }

.map {
  height: 500px; }

@media screen and (max-width: 991px) {
  .profile-photo .profile-photo-small {
    margin-left: -2px; }
  .button-dropdown {
    display: none; }
  [data-notify="container"].alert {
    min-width: 400px; }
  #minimizeSidebar {
    display: none; }
  .timeline > li > .timeline-panel {
    width: 86% !important;
    float: right !important; }
  .timeline:before,
  .timeline > li > .timeline-badge {
    left: 5% !important; }
  .timeline > li > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto !important; }
  .timeline > li > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto !important; }
  .timeline > li:not(.timeline-inverted) > .timeline-panel:after,
  .timeline > li:not(.timeline-inverted) > .timeline-panel:before {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg); }
  .navbar .container-fluid {
    padding-right: 15px;
    padding-left: 15px; }
  .navbar .navbar-collapse .input-group {
    margin: 0;
    margin-top: 5px; }
  .navbar .navbar-nav .nav-item:first-child {
    margin-top: 10px; }
  .navbar .navbar-nav .nav-item:not(:last-child) {
    margin-bottom: 10px; }
  .navbar .dropdown.show .dropdown-menu {
    display: block; }
  .navbar .dropdown .dropdown-menu {
    display: none; }
  .navbar .dropdown.show .dropdown-menu,
  .navbar .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    transition: none;
    box-shadow: none;
    width: auto;
    margin: 0px 1rem;
    margin-top: 0px; }
    .navbar .dropdown.show .dropdown-menu:before,
    .navbar .dropdown .dropdown-menu:before {
      display: none; }
  .navbar .dropdown-menu .dropdown-item:focus,
  .navbar .dropdown-menu .dropdown-item:hover {
    color: #FFFFFF; }
  .navbar.bg-white .dropdown-menu .dropdown-item:focus,
  .navbar.bg-white .dropdown-menu .dropdown-item:hover {
    color: #888; }
  .navbar.bg-white:not(.navbar-transparent) .navbar-toggler-bar {
    background-color: #888; }
  .wrapper {
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); }
  .sidebar {
    box-shadow: none; }
  #bodyClick {
    height: 100%;
    width: 100%;
    position: fixed;
    opacity: 1;
    top: 0;
    right: 0;
    left: 260px;
    content: "";
    z-index: 9999;
    overflow-x: hidden;
    background-color: transparent;
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); }
  .footer .copyright {
    text-align: right; }
  .section-nucleo-icons .icons-container {
    margin-top: 65px; }
  .navbar-nav .nav-link i.fa,
  .navbar-nav .nav-link i.now-ui-icons {
    opacity: .5; }
  .sidebar,
  .bootstrap-navbar {
    position: fixed;
    display: block;
    top: 0;
    height: 100%;
    width: 260px;
    right: auto;
    left: 0;
    z-index: 1032;
    visibility: visible;
    overflow-y: visible;
    padding: 0;
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent; }
  .bar1 {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .bar2 {
    opacity: 1; }
  .bar3 {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .toggled .bar1 {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .toggled .bar2 {
    opacity: 0; }
  .toggled .bar3 {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  @keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg); }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
              transform: rotate(145deg); }
    75% {
      -webkit-transform: rotate(130deg);
              transform: rotate(130deg); }
    100% {
      -webkit-transform: rotate(135deg);
              transform: rotate(135deg); } }
  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg); }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg); }
    75% {
      -webkit-transform: rotate(130deg); }
    100% {
      -webkit-transform: rotate(135deg); } }
  @keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
              transform: rotate(135deg); }
    45% {
      -webkit-transform: rotate(-10deg);
              transform: rotate(-10deg); }
    75% {
      -webkit-transform: rotate(5deg);
              transform: rotate(5deg); }
    100% {
      top: 0px;
      -webkit-transform: rotate(0);
              transform: rotate(0); } }
  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg); }
    45% {
      -webkit-transform: rotate(-10deg); }
    75% {
      -webkit-transform: rotate(5deg); }
    100% {
      top: 0px;
      -webkit-transform: rotate(0); } }
  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg); }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
              transform: rotate(-145deg); }
    75% {
      -webkit-transform: rotate(-130deg);
              transform: rotate(-130deg); }
    100% {
      -webkit-transform: rotate(-135deg);
              transform: rotate(-135deg); } }
  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg); }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg); }
    75% {
      -webkit-transform: rotate(-130deg); }
    100% {
      -webkit-transform: rotate(-135deg); } }
  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
              transform: rotate(-135deg); }
    45% {
      -webkit-transform: rotate(10deg);
              transform: rotate(10deg); }
    75% {
      -webkit-transform: rotate(-5deg);
              transform: rotate(-5deg); }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
              transform: rotate(0); } }
  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg); }
    45% {
      -webkit-transform: rotate(10deg); }
    75% {
      -webkit-transform: rotate(-5deg); }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0); } }
  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }
  @keyframes fadeIn {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }
  .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF; }
    .navbar-toggler-bar + .navbar-toggler-bar {
      margin-top: 7px; }
    .navbar-toggler-bar + .navbar-toggler-bar.navbar-kebab {
      margin-top: 3px !important; }
    .navbar-toggler-bar.bar2 {
      width: 17px;
      transition: width .2s linear; }
  .main-panel {
    width: 100%; }
  .navbar-toggle .navbar-toggler,
  .navbar-toggle {
    display: block !important; }
  .navbar .toggled .navbar-toggler-bar {
    width: 24px; }
    .navbar .toggled .navbar-toggler-bar + .navbar-toggler-bar {
      margin-top: 5px; }
  .nav-open .main-panel {
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0); }
  .nav-open .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35); }
  .nav-open body {
    position: relative;
    overflow-x: hidden; }
  .nav-open .menu-on-right .main-panel {
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .nav-open .menu-on-right .navbar-collapse,
  .nav-open .menu-on-right .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0); }
  .nav-open .menu-on-right .navbar-translate {
    -webkit-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0); }
  .nav-open .menu-on-right #bodyClick {
    right: 260px;
    left: auto; }
  .menu-on-right .sidebar {
    left: auto;
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0); } }

@media screen and (min-width: 992px) {
  .navbar-collapse {
    background: none !important; }
  .navbar .navbar-toggle {
    display: none; }
  .navbar-nav .nav-link.profile-photo {
    padding: 0;
    margin: 7px 0.7rem; }
  .section-nucleo-icons .icons-container {
    margin: 0 0 0 auto; }
  .dropdown-menu .dropdown-item {
    color: inherit; }
  .footer .copyright {
    float: right;
    padding-right: 15px; } }

@media screen and (max-width: 768px) {
  .nav-tabs {
    display: inline-block;
    width: 100%;
    padding-left: 100px;
    padding-right: 100px;
    text-align: center; }
    .nav-tabs .nav-item > .nav-link {
      margin-bottom: 5px; }
  .user-profile [class*="col-"] {
    padding-left: 15px !important;
    padding-right: 15px !important; }
  .card-stats [class*="col-"] .statistics::after {
    display: none; }
  .main-panel .content {
    padding-left: 15px;
    padding-right: 15px; }
  .footer nav {
    display: block;
    margin-bottom: 5px;
    float: none; }
  .landing-page .section-story-overview .image-container:nth-child(2) {
    margin-left: 0;
    margin-bottom: 30px; } }

@media screen and (max-width: 576px) {
  .navbar[class*='navbar-toggleable-'] .container {
    margin-left: 0;
    margin-right: 0; }
  [data-notify="container"].alert {
    left: 10px !important;
    right: 10px !important;
    width: auto; }
  .card-contributions .card-stats {
    flex-direction: column; }
    .card-contributions .card-stats .bootstrap-switch {
      margin-bottom: 15px; }
  .footer .copyright {
    text-align: center; }
  .section-nucleo-icons .icons-container i {
    font-size: 30px; }
    .section-nucleo-icons .icons-container i:nth-child(6) {
      font-size: 48px; }
  .page-header .container h6.category-absolute {
    width: 90%; } }

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
  .sidebar,
  .bootstrap-navbar {
    position: fixed;
    display: block;
    top: 0;
    height: 100%;
    width: 260px;
    right: auto;
    left: 0;
    z-index: 1032;
    visibility: visible;
    overflow-y: visible;
    padding: 0;
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .bar1,
  .bar2,
  .bar3 {
    outline: 1px solid transparent; }
  .bar1 {
    top: 0px;
    -webkit-animation: topbar-back 500ms linear 0s;
    animation: topbar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .bar2 {
    opacity: 1; }
  .bar3 {
    bottom: 0px;
    -webkit-animation: bottombar-back 500ms linear 0s;
    animation: bottombar-back 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .toggled .bar1 {
    top: 6px;
    -webkit-animation: topbar-x 500ms linear 0s;
    animation: topbar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  .toggled .bar2 {
    opacity: 0; }
  .toggled .bar3 {
    bottom: 6px;
    -webkit-animation: bottombar-x 500ms linear 0s;
    animation: bottombar-x 500ms 0s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards; }
  @keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg); }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg);
              transform: rotate(145deg); }
    75% {
      -webkit-transform: rotate(130deg);
              transform: rotate(130deg); }
    100% {
      -webkit-transform: rotate(135deg);
              transform: rotate(135deg); } }
  @-webkit-keyframes topbar-x {
    0% {
      top: 0px;
      -webkit-transform: rotate(0deg); }
    45% {
      top: 6px;
      -webkit-transform: rotate(145deg); }
    75% {
      -webkit-transform: rotate(130deg); }
    100% {
      -webkit-transform: rotate(135deg); } }
  @keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg);
              transform: rotate(135deg); }
    45% {
      -webkit-transform: rotate(-10deg);
              transform: rotate(-10deg); }
    75% {
      -webkit-transform: rotate(5deg);
              transform: rotate(5deg); }
    100% {
      top: 0px;
      -webkit-transform: rotate(0);
              transform: rotate(0); } }
  @-webkit-keyframes topbar-back {
    0% {
      top: 6px;
      -webkit-transform: rotate(135deg); }
    45% {
      -webkit-transform: rotate(-10deg); }
    75% {
      -webkit-transform: rotate(5deg); }
    100% {
      top: 0px;
      -webkit-transform: rotate(0); } }
  @keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg); }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg);
              transform: rotate(-145deg); }
    75% {
      -webkit-transform: rotate(-130deg);
              transform: rotate(-130deg); }
    100% {
      -webkit-transform: rotate(-135deg);
              transform: rotate(-135deg); } }
  @-webkit-keyframes bottombar-x {
    0% {
      bottom: 0px;
      -webkit-transform: rotate(0deg); }
    45% {
      bottom: 6px;
      -webkit-transform: rotate(-145deg); }
    75% {
      -webkit-transform: rotate(-130deg); }
    100% {
      -webkit-transform: rotate(-135deg); } }
  @keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg);
              transform: rotate(-135deg); }
    45% {
      -webkit-transform: rotate(10deg);
              transform: rotate(10deg); }
    75% {
      -webkit-transform: rotate(-5deg);
              transform: rotate(-5deg); }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0);
              transform: rotate(0); } }
  @-webkit-keyframes bottombar-back {
    0% {
      bottom: 6px;
      -webkit-transform: rotate(-135deg); }
    45% {
      -webkit-transform: rotate(10deg); }
    75% {
      -webkit-transform: rotate(-5deg); }
    100% {
      bottom: 0px;
      -webkit-transform: rotate(0); } }
  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }
  @keyframes fadeIn {
    0% {
      opacity: 0; }
    100% {
      opacity: 1; } }
  .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF; }
    .navbar-toggler-bar + .navbar-toggler-bar {
      margin-top: 7px; }
    .navbar-toggler-bar + .navbar-toggler-bar.navbar-kebab {
      margin-top: 3px !important; }
    .navbar-toggler-bar.bar2 {
      width: 17px;
      transition: width .2s linear; }
  .main-panel {
    width: 100%; }
  .navbar-toggle .navbar-toggler,
  .navbar-toggle {
    display: block !important; }
  .navbar .toggled .navbar-toggler-bar {
    width: 24px; }
    .navbar .toggled .navbar-toggler-bar + .navbar-toggler-bar {
      margin-top: 5px; }
  .nav-open .main-panel {
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0); }
  .nav-open .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35); }
  .nav-open body {
    position: relative;
    overflow-x: hidden; }
  .nav-open .menu-on-right .main-panel {
    -webkit-transform: translate3d(-260px, 0, 0);
    transform: translate3d(-260px, 0, 0); }
  .nav-open .menu-on-right .navbar-collapse,
  .nav-open .menu-on-right .sidebar {
    -webkit-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0); }
  .nav-open .menu-on-right .navbar-translate {
    -webkit-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0); }
  .nav-open .menu-on-right #bodyClick {
    right: 260px;
    left: auto; }
  .menu-on-right .sidebar {
    left: auto;
    right: 0;
    -webkit-transform: translate3d(260px, 0, 0);
    transform: translate3d(260px, 0, 0); }
  .navbar-minimize {
    display: none; }
  .sidebar {
    box-shadow: none; }
    .nav-open .sidebar {
      box-shadow: 0px 2px 22px 0 rgba(0, 0, 0, 0.2), 0px 2px 30px 0 rgba(0, 0, 0, 0.35); }
  .sidebar,
  .main-panel,
  .sidebar-wrapper {
    transition-property: all;
    transition-duration: 0.5s;
    transition-timing-function: cubic-bezier(0.685, 0.0473, 0.346, 1);
    -webkit-overflow-scrolling: touch; } }

    
    </style>




    
</head>

<body class="">
  <div class="wrapper " style="background-color:#1cb8b1">
    <div class="sidebar"style="background-color:#1cb8b1">
    
      <div class="logo" style="background-color:#024744">
        <a href="" class="simple-text logo-mini">
         
        </a>
        <a href="" class="simple-text logo-normal">
       Rotaract Badulla
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper"style="background-color:#044240">
        <ul class="nav">
          <li class="{{'dashboard'== request()->path() ? 'active' :''}}">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="{{'reportgeneration'== request()->path() ? 'active' :''}}">
            <a href="/reportgeneration">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Report Generation</p>
            </a>
          </li>
          <li class="{{'sendemail'== request()->path() ? 'active' :''}}">
            <a href="/sendemail">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Send Email</p>
            </a>
          </li>
         
          </li>
          <li class="{{'registered-users'== request()->path() ? 'active' :''}}">
            <a href="/registered-users">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
           <li class="{{''== request()->path() ? 'active' :''}}">
            <a href="/adddetails">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Add Donations</p>
            </a>
          </li>
          <li class="{{''== request()->path() ? 'active' :''}}">
            <a href="/view_all">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <p>View Donations</p>
            </a>
          </li>
           <li class="">
            <a href="/post">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Add Job Vacancies</p>
          </li>
           
          <li class="" style="color:orange">
            <a href="/allpayments">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>View Membership Payments</p>
            </a>
          </li>
           
           <li class="">
            <a href="/postpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Publish Projects</p>
          </li>
          <li class="">
            <a href="/adminaddpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Add Projects</p>
          </li>
           <li class="">
            <a href="/viwnwpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Accept Projects</p>
          </li>
          <li class="">
            <a href="/events">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Publish Events</p>
            </a>
          </li>
            <li class="">
            <a href="/uploadimg">
              <i class="now-ui-icons media-1_album"></i>
              <p>Update Gallery</p>
            </a>
          </li>
           <li class="">
            <a href="/uploadteam">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Update Team</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" style="background-colour:orange">
        <div class="container-fluid">
         
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation"style="margin-bottom:-25px" >
            
            <ul class="navbar-nav" >
                 
              <li class="nav-item" >
                  <i class="now-ui-icons users_single-02"></i>
              </li>
              <li class="nav-item dropdown" >
                               
                                <a id="navbarDropdown" style="color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"  ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style= "background-color:#0b7574">
                                    <a class="dropdown-item" style="color:white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
               </li>
            </ul>
            </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm" style="height:0px">
      </div>
      <div class="content" style="padding-top:55px">
  
<div class = "container box" style="background-color:white">
<center><label>Publish Projects</label></center>
@if(count($errors) >0)
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">X</button>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
    @if($message =  Session::get('success'))
    <div class = "alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">X</button>
    
    <strong>{{ $message }}</strong>
    </div>

    @endif
    <form  method="post" action ="{{ route('project') }}" enctype="multipart/form-data">
    
        {{csrf_field()}}
        
    <div class="form-group">
    <label>Enter Title</label>
    <input type="text" name="title" class="form-control"placeholder="Enter the title"/>
    </div>

    <div class="form-group">
    <label>Enter Project Description</label>
    <textarea name="body" class="form-control"placeholder="Word count:100-150"></textarea>
    </div>
    
    <div class="form-group">
    <label>Enter Image</label>
    <input type="file" name="image" class="form-control" placeholder="Upload your images to here in jpg , png , gif format..."required/>
    </div>

    <div class="form-group">
    <input type="submit" name="Publish" value="Publish" class="btn btn-info"/>
    
   
    <a href="{{action('PostsController@viewpro')}}" class="btn btn-success">View Projects</a>
    
    </div>
    </form>
</div>
      </div>
      <footer class="footer" style="background-color:#024744">
        <div class="container-fluid" >
          <nav >
            <div class="col-md-12">
                                  
                      <div id="footer-copyrights" >
                        
                          <p style="padding-left:358px;color:white">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
                    
                    </div>
          </nav>
          
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('scripts')
</body>

</html>