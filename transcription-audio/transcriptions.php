<noscript id="deferred-styles">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Doppio+One" rel="stylesheet" type="text/css">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</noscript>
<script>
    global_currency_symbol = '$';
    global_currency_exchange_rate = 0.7;
</script>
<style type="text/css">

table {
    border-collapse: collapse;
    border-spacing: 0
}
td, th {
    padding: 0
}
*, :after, :before {
    box-sizing: border-box
}
.seperator {
    background: url(<?php echo ARCHIVO; ?>transcription-audio/img/sep.png) no-repeat top;
    height: 10px;
    margin: 14px 0 0
}
.blog-body .post-image img, .blog-body .post img, .brands-section .logos, .img-responsive {
    display: block;
    max-width: 100%;
    height: auto
}
[role=button] {
    cursor: pointer
}
.btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfixtrans:after, .clearfixtrans:before, .container-fluid:after, .container-fluid:before, .containertrans:after, .containertrans:before, .form-horizontal:after, .form-horizontal:before, .modal-footer:after, .modal-footer:before, .order-settings .options:after, .order-settings .options:before, .order-settings .setting:after, .order-settings .setting:before, .quiz .question:after, .quiz .question:before, .row:after, .row:before, .upload-body .steps:after, .upload-body .steps:before, .upload-body .upload-header:after, .upload-body .upload-header:before, .upload-body .upload-table .uploaded-file:after, .upload-body .upload-table .uploaded-file:before {
    content: " ";
    display: table
}
.btn-group-vertical>.btn-group:after, .btn-toolbar:after, .clearfixtrans:after, .container-fluid:after, .containertrans:after, .form-horizontal:after, .form-horizontal:before, .modal-footer:after, .order-settings .options:after, .order-settings .options:before, .order-settings .setting:after, .order-settings .setting:before, .quiz .question:after, .quiz .question:before, .row:after, .upload-body .steps:after, .upload-body .steps:before, .upload-body .upload-header:after, .upload-body .upload-header:before, .upload-body .upload-table .uploaded-file:after, .upload-body .upload-table .uploaded-file:before {
    clear: both
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto
}
.pull-right {
    float: right
}
.pull-left {
    float: left
}
.inline-block-fix {
    font-size: 0
}
.page-heading {
    color: #4b535c;
    font-family: Doppio One, sans-serif;
    font-size: 25px;
    font-weight: 400;
    text-transform: uppercase
}
.no-top-margin {
    margin-top: 0
}
.fileinput-button {
    position: relative;
    overflow: hidden;
    display: inline-block
}
.fileinput-button input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    -ms-filter: "alpha(opacity=0)";
    font-size: 200px!important;
    direction: ltr;
    cursor: pointer
}
@media screen {
    .fileinput-button input {
        filter: alpha(opacity=0);
        font-size: 100%;
        height: 100%
    }
}
.containertrans {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}
@media (min-width:768px) {
    .containertrans {
        width: 750px
    }
}
@media (min-width:992px) {
    .containertrans {
        width: 970px
    }
}
@media (min-width:1200px) {
    .containertrans {
        width: 1170px
    }
}
.container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}
.row {
    margin-left: -15px;
    margin-right: -15px
}
.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    float: left
}
.col-xs-12 {
    width: 100%
}
.col-xs-11 {
    width: 91.66666667%
}
.col-xs-10 {
    width: 83.33333333%
}
.col-xs-9 {
    width: 75%
}
.col-xs-8 {
    width: 66.66666667%
}
.col-xs-7 {
    width: 58.33333333%
}
.col-xs-6 {
    width: 50%
}
.col-xs-5 {
    width: 41.66666667%
}
.col-xs-4 {
    width: 33.33333333%
}
.col-xs-3 {
    width: 25%
}
.col-xs-2 {
    width: 16.66666667%
}
.col-xs-1 {
    width: 8.33333333%
}
.col-xs-pull-12 {
    right: 100%
}
.col-xs-pull-11 {
    right: 91.66666667%
}
.col-xs-pull-10 {
    right: 83.33333333%
}
.col-xs-pull-9 {
    right: 75%
}
.col-xs-pull-8 {
    right: 66.66666667%
}
.col-xs-pull-7 {
    right: 58.33333333%
}
.col-xs-pull-6 {
    right: 50%
}
.col-xs-pull-5 {
    right: 41.66666667%
}
.col-xs-pull-4 {
    right: 33.33333333%
}
.col-xs-pull-3 {
    right: 25%
}
.col-xs-pull-2 {
    right: 16.66666667%
}
.col-xs-pull-1 {
    right: 8.33333333%
}
.col-xs-pull-0 {
    right: auto
}
.col-xs-push-12 {
    left: 100%
}
.col-xs-push-11 {
    left: 91.66666667%
}
.col-xs-push-10 {
    left: 83.33333333%
}
.col-xs-push-9 {
    left: 75%
}
.col-xs-push-8 {
    left: 66.66666667%
}
.col-xs-push-7 {
    left: 58.33333333%
}
.col-xs-push-6 {
    left: 50%
}
.col-xs-push-5 {
    left: 41.66666667%
}
.col-xs-push-4 {
    left: 33.33333333%
}
.col-xs-push-3 {
    left: 25%
}
.col-xs-push-2 {
    left: 16.66666667%
}
.col-xs-push-1 {
    left: 8.33333333%
}
.col-xs-push-0 {
    left: auto
}
.col-xs-offset-12 {
    margin-left: 100%
}
.col-xs-offset-11 {
    margin-left: 91.66666667%
}
.col-xs-offset-10 {
    margin-left: 83.33333333%
}
.col-xs-offset-9 {
    margin-left: 75%
}
.col-xs-offset-8 {
    margin-left: 66.66666667%
}
.col-xs-offset-7 {
    margin-left: 58.33333333%
}
.col-xs-offset-6 {
    margin-left: 50%
}
.col-xs-offset-5 {
    margin-left: 41.66666667%
}
.col-xs-offset-4 {
    margin-left: 33.33333333%
}
.col-xs-offset-3 {
    margin-left: 25%
}
.col-xs-offset-2 {
    margin-left: 16.66666667%
}
.col-xs-offset-1 {
    margin-left: 8.33333333%
}
.col-xs-offset-0 {
    margin-left: 0
}
@media (min-width:768px) {
    .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
        float: left
    }
    .col-sm-12 {
        width: 100%
    }
    .col-sm-11 {
        width: 91.66666667%
    }
    .col-sm-10 {
        width: 83.33333333%
    }
    .col-sm-9 {
        width: 75%
    }
    .col-sm-8 {
        width: 66.66666667%
    }
    .col-sm-7 {
        width: 58.33333333%
    }
    .col-sm-6 {
        width: 50%
    }
    .col-sm-5 {
        width: 41.66666667%
    }
    .col-sm-4 {
        width: 33.33333333%
    }
    .col-sm-3 {
        width: 25%
    }
    .col-sm-2 {
        width: 16.66666667%
    }
    .col-sm-1 {
        width: 8.33333333%
    }
    .col-sm-pull-12 {
        right: 100%
    }
    .col-sm-pull-11 {
        right: 91.66666667%
    }
    .col-sm-pull-10 {
        right: 83.33333333%
    }
    .col-sm-pull-9 {
        right: 75%
    }
    .col-sm-pull-8 {
        right: 66.66666667%
    }
    .col-sm-pull-7 {
        right: 58.33333333%
    }
    .col-sm-pull-6 {
        right: 50%
    }
    .col-sm-pull-5 {
        right: 41.66666667%
    }
    .col-sm-pull-4 {
        right: 33.33333333%
    }
    .col-sm-pull-3 {
        right: 25%
    }
    .col-sm-pull-2 {
        right: 16.66666667%
    }
    .col-sm-pull-1 {
        right: 8.33333333%
    }
    .col-sm-pull-0 {
        right: auto
    }
    .col-sm-push-12 {
        left: 100%
    }
    .col-sm-push-11 {
        left: 91.66666667%
    }
    .col-sm-push-10 {
        left: 83.33333333%
    }
    .col-sm-push-9 {
        left: 75%
    }
    .col-sm-push-8 {
        left: 66.66666667%
    }
    .col-sm-push-7 {
        left: 58.33333333%
    }
    .col-sm-push-6 {
        left: 50%
    }
    .col-sm-push-5 {
        left: 41.66666667%
    }
    .col-sm-push-4 {
        left: 33.33333333%
    }
    .col-sm-push-3 {
        left: 25%
    }
    .col-sm-push-2 {
        left: 16.66666667%
    }
    .col-sm-push-1 {
        left: 8.33333333%
    }
    .col-sm-push-0 {
        left: auto
    }
    .col-sm-offset-12 {
        margin-left: 100%
    }
    .col-sm-offset-11 {
        margin-left: 91.66666667%
    }
    .col-sm-offset-10 {
        margin-left: 83.33333333%
    }
    .col-sm-offset-9 {
        margin-left: 75%
    }
    .col-sm-offset-8 {
        margin-left: 66.66666667%
    }
    .col-sm-offset-7 {
        margin-left: 58.33333333%
    }
    .col-sm-offset-6 {
        margin-left: 50%
    }
    .col-sm-offset-5 {
        margin-left: 41.66666667%
    }
    .col-sm-offset-4 {
        margin-left: 33.33333333%
    }
    .col-sm-offset-3 {
        margin-left: 25%
    }
    .col-sm-offset-2 {
        margin-left: 16.66666667%
    }
    .col-sm-offset-1 {
        margin-left: 8.33333333%
    }
    .col-sm-offset-0 {
        margin-left: 0
    }
}
@media (min-width:992px) {
    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
        float: left
    }
    .col-md-12 {
        width: 100%
    }
    .col-md-11 {
        width: 91.66666667%
    }
    .col-md-10 {
        width: 83.33333333%
    }
    .col-md-9 {
        width: 75%
    }
    .col-md-8 {
        width: 66.66666667%
    }
    .col-md-7 {
        width: 58.33333333%
    }
    .col-md-6 {
        width: 50%
    }
    .col-md-5 {
        width: 41.66666667%
    }
    .col-md-4 {
        width: 33.33333333%
    }
    .col-md-3 {
        width: 25%
    }
    .col-md-2 {
        width: 16.66666667%
    }
    .col-md-1 {
        width: 8.33333333%
    }
    .col-md-pull-12 {
        right: 100%
    }
    .col-md-pull-11 {
        right: 91.66666667%
    }
    .col-md-pull-10 {
        right: 83.33333333%
    }
    .col-md-pull-9 {
        right: 75%
    }
    .col-md-pull-8 {
        right: 66.66666667%
    }
    .col-md-pull-7 {
        right: 58.33333333%
    }
    .col-md-pull-6 {
        right: 50%
    }
    .col-md-pull-5 {
        right: 41.66666667%
    }
    .col-md-pull-4 {
        right: 33.33333333%
    }
    .col-md-pull-3 {
        right: 25%
    }
    .col-md-pull-2 {
        right: 16.66666667%
    }
    .col-md-pull-1 {
        right: 8.33333333%
    }
    .col-md-pull-0 {
        right: auto
    }
    .col-md-push-12 {
        left: 100%
    }
    .col-md-push-11 {
        left: 91.66666667%
    }
    .col-md-push-10 {
        left: 83.33333333%
    }
    .col-md-push-9 {
        left: 75%
    }
    .col-md-push-8 {
        left: 66.66666667%
    }
    .col-md-push-7 {
        left: 58.33333333%
    }
    .col-md-push-6 {
        left: 50%
    }
    .col-md-push-5 {
        left: 41.66666667%
    }
    .col-md-push-4 {
        left: 33.33333333%
    }
    .col-md-push-3 {
        left: 25%
    }
    .col-md-push-2 {
        left: 16.66666667%
    }
    .col-md-push-1 {
        left: 8.33333333%
    }
    .col-md-push-0 {
        left: auto
    }
    .col-md-offset-12 {
        margin-left: 100%
    }
    .col-md-offset-11 {
        margin-left: 91.66666667%
    }
    .col-md-offset-10 {
        margin-left: 83.33333333%
    }
    .col-md-offset-9 {
        margin-left: 75%
    }
    .col-md-offset-8 {
        margin-left: 66.66666667%
    }
    .col-md-offset-7 {
        margin-left: 58.33333333%
    }
    .col-md-offset-6 {
        margin-left: 50%
    }
    .col-md-offset-5 {
        margin-left: 41.66666667%
    }
    .col-md-offset-4 {
        margin-left: 33.33333333%
    }
    .col-md-offset-3 {
        margin-left: 25%
    }
    .col-md-offset-2 {
        margin-left: 16.66666667%
    }
    .col-md-offset-1 {
        margin-left: 8.33333333%
    }
    .col-md-offset-0 {
        margin-left: 0
    }
}
@media (min-width:1200px) {
    .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
        float: left
    }
    .col-lg-12 {
        width: 100%
    }
    .col-lg-11 {
        width: 91.66666667%
    }
    .col-lg-10 {
        width: 83.33333333%
    }
    .col-lg-9 {
        width: 75%
    }
    .col-lg-8 {
        width: 66.66666667%
    }
    .col-lg-7 {
        width: 58.33333333%
    }
    .col-lg-6 {
        width: 50%
    }
    .col-lg-5 {
        width: 41.66666667%
    }
    .col-lg-4 {
        width: 33.33333333%
    }
    .col-lg-3 {
        width: 25%
    }
    .col-lg-2 {
        width: 16.66666667%
    }
    .col-lg-1 {
        width: 8.33333333%
    }
    .col-lg-pull-12 {
        right: 100%
    }
    .col-lg-pull-11 {
        right: 91.66666667%
    }
    .col-lg-pull-10 {
        right: 83.33333333%
    }
    .col-lg-pull-9 {
        right: 75%
    }
    .col-lg-pull-8 {
        right: 66.66666667%
    }
    .col-lg-pull-7 {
        right: 58.33333333%
    }
    .col-lg-pull-6 {
        right: 50%
    }
    .col-lg-pull-5 {
        right: 41.66666667%
    }
    .col-lg-pull-4 {
        right: 33.33333333%
    }
    .col-lg-pull-3 {
        right: 25%
    }
    .col-lg-pull-2 {
        right: 16.66666667%
    }
    .col-lg-pull-1 {
        right: 8.33333333%
    }
    .col-lg-pull-0 {
        right: auto
    }
    .col-lg-push-12 {
        left: 100%
    }
    .col-lg-push-11 {
        left: 91.66666667%
    }
    .col-lg-push-10 {
        left: 83.33333333%
    }
    .col-lg-push-9 {
        left: 75%
    }
    .col-lg-push-8 {
        left: 66.66666667%
    }
    .col-lg-push-7 {
        left: 58.33333333%
    }
    .col-lg-push-6 {
        left: 50%
    }
    .col-lg-push-5 {
        left: 41.66666667%
    }
    .col-lg-push-4 {
        left: 33.33333333%
    }
    .col-lg-push-3 {
        left: 25%
    }
    .col-lg-push-2 {
        left: 16.66666667%
    }
    .col-lg-push-1 {
        left: 8.33333333%
    }
    .col-lg-push-0 {
        left: auto
    }
    .col-lg-offset-12 {
        margin-left: 100%
    }
    .col-lg-offset-11 {
        margin-left: 91.66666667%
    }
    .col-lg-offset-10 {
        margin-left: 83.33333333%
    }
    .col-lg-offset-9 {
        margin-left: 75%
    }
    .col-lg-offset-8 {
        margin-left: 66.66666667%
    }
    .col-lg-offset-7 {
        margin-left: 58.33333333%
    }
    .col-lg-offset-6 {
        margin-left: 50%
    }
    .col-lg-offset-5 {
        margin-left: 41.66666667%
    }
    .col-lg-offset-4 {
        margin-left: 33.33333333%
    }
    .col-lg-offset-3 {
        margin-left: 25%
    }
    .col-lg-offset-2 {
        margin-left: 16.66666667%
    }
    .col-lg-offset-1 {
        margin-left: 8.33333333%
    }
    .col-lg-offset-0 {
        margin-left: 0
    }
}
@-ms-viewport {
    width: device-width
}
.visible-lg, .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
    display: none!important
}
@media (max-width:767px) {
    .visible-xs {
        display: block!important
    }
    table.visible-xs {
        display: table!important
    }
    tr.visible-xs {
        display: table-row!important
    }
    td.visible-xs, th.visible-xs {
        display: table-cell!important
    }
}
@media (max-width:767px) {
    .visible-xs-block {
        display: block!important
    }
}
@media (max-width:767px) {
    .visible-xs-inline {
        display: inline!important
    }
}
@media (max-width:767px) {
    .visible-xs-inline-block {
        display: inline-block!important
    }
}
@media (min-width:768px) and (max-width:991px) {
    .visible-sm {
        display: block!important
    }
    table.visible-sm {
        display: table!important
    }
    tr.visible-sm {
        display: table-row!important
    }
    td.visible-sm, th.visible-sm {
        display: table-cell!important
    }
}
@media (min-width:768px) and (max-width:991px) {
    .visible-sm-block {
        display: block!important
    }
}
@media (min-width:768px) and (max-width:991px) {
    .visible-sm-inline {
        display: inline!important
    }
}
@media (min-width:768px) and (max-width:991px) {
    .visible-sm-inline-block {
        display: inline-block!important
    }
}
@media (min-width:992px) and (max-width:1199px) {
    .visible-md {
        display: block!important
    }
    table.visible-md {
        display: table!important
    }
    tr.visible-md {
        display: table-row!important
    }
    td.visible-md, th.visible-md {
        display: table-cell!important
    }
}
@media (min-width:992px) and (max-width:1199px) {
    .visible-md-block {
        display: block!important
    }
}
@media (min-width:992px) and (max-width:1199px) {
    .visible-md-inline {
        display: inline!important
    }
}
@media (min-width:992px) and (max-width:1199px) {
    .visible-md-inline-block {
        display: inline-block!important
    }
}
@media (min-width:1200px) {
    .visible-lg {
        display: block!important
    }
    table.visible-lg {
        display: table!important
    }
    tr.visible-lg {
        display: table-row!important
    }
    td.visible-lg, th.visible-lg {
        display: table-cell!important
    }
}
@media (min-width:1200px) {
    .visible-lg-block {
        display: block!important
    }
}
@media (min-width:1200px) {
    .visible-lg-inline {
        display: inline!important
    }
}
@media (min-width:1200px) {
    .visible-lg-inline-block {
        display: inline-block!important
    }
}
@media (max-width:767px) {
    .hidden-xs {
        display: none!important
    }
}
@media (min-width:768px) and (max-width:991px) {
    .hidden-sm {
        display: none!important
    }
}
@media (min-width:992px) and (max-width:1199px) {
    .hidden-md {
        display: none!important
    }
}
@media (min-width:1200px) {
    .hidden-lg {
        display: none!important
    }
}
.visible-print {
    display: none!important
}
@media print {
    .visible-print {
        display: block!important
    }
    table.visible-print {
        display: table!important
    }
    tr.visible-print {
        display: table-row!important
    }
    td.visible-print, th.visible-print {
        display: table-cell!important
    }
}
.visible-print-block {
    display: none!important
}
@media print {
    .visible-print-block {
        display: block!important
    }
}
.visible-print-inline {
    display: none!important
}
@media print {
    .visible-print-inline {
        display: inline!important
    }
}
.visible-print-inline-block {
    display: none!important
}
@media print {
    .visible-print-inline-block {
        display: inline-block!important
    }
}
@media print {
    .hidden-print {
        display: none!important
    }
}
.embed-responsive {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden
}
.embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0
}
.embed-responsive-16by9 {
    padding-bottom: 56.25%
}
.embed-responsive-4by3 {
    padding-bottom: 75%
}
.alert {
    padding: 15px;
    margin-bottom: 19px;
    border: 1px solid transparent;
    border-radius: 4px
}
.alert h4 {
    margin-top: 0;
    color: inherit
}
.alert .alert-link {
    font-weight: 700
}
.alert>p, .alert>ul {
    margin-bottom: 0
}
.alert>p+p {
    margin-top: 5px
}
.alert-dismissable, .alert-dismissible {
    padding-right: 35px
}
.alert-dismissable .close, .alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit
}
.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d
}
.alert-success hr {
    border-top-color: #c9e2b3
}
.alert-success .alert-link {
    color: #2b542c
}
.alert-info {
    background-color: #d9edf7;
    border-color: #bce8f1;
    color: #31708f
}
.alert-info hr {
    border-top-color: #a6e1ec
}
.alert-info .alert-link {
    color: #245269
}
.alert-warning {
    background-color: #fcf8e3;
    border-color: #faebcc;
    color: #8a6d3b
}
.alert-warning hr {
    border-top-color: #f7e1b5
}
.alert-warning .alert-link {
    color: #66512c
}
.alert-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442
}
.alert-danger hr {
    border-top-color: #e4b9c0
}
.alert-danger .alert-link {
    color: #843534
}
.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-family: Arial, Helvetica, sans-serif;
    font-style: normal;
    font-weight: 400;
    letter-spacing: normal;
    line-break: auto;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    white-space: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    font-size: 14px;
    opacity: 0;
    filter: alpha(opacity=0)
}
.tooltip.in {
    opacity: 1;
    filter: alpha(opacity=100)
}
.tooltip.top {
    margin-top: -3px;
    padding: 15px 0
}
.tooltip.right {
    margin-left: 3px;
    padding: 0 15px
}
.tooltip.bottom {
    margin-top: 3px;
    padding: 15px 0
}
.tooltip.left {
    margin-left: -3px;
    padding: 0 15px
}
.tooltip-inner {
    max-width: 542px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    background-color: #5674f1;
    border-radius: 2px
}
.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid
}
.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -15px;
    border-width: 15px 15px 0;
    border-top-color: #5674f1
}
.tooltip.top-left .tooltip-arrow {
    right: 15px
}
.tooltip.top-left .tooltip-arrow, .tooltip.top-right .tooltip-arrow {
    bottom: 0;
    margin-bottom: -15px;
    border-width: 15px 15px 0;
    border-top-color: #5674f1
}
.tooltip.top-right .tooltip-arrow {
    left: 15px
}
.tooltip.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -15px;
    border-width: 15px 15px 15px 0;
    border-right-color: #5674f1
}
.tooltip.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -15px;
    border-width: 15px 0 15px 15px;
    border-left-color: #5674f1
}
.tooltip.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -15px;
    border-width: 0 15px 15px;
    border-bottom-color: #5674f1
}
.tooltip.bottom-left .tooltip-arrow {
    right: 15px
}
.tooltip.bottom-left .tooltip-arrow, .tooltip.bottom-right .tooltip-arrow {
    top: 0;
    margin-top: -15px;
    border-width: 0 15px 15px;
    border-bottom-color: #5674f1
}
.tooltip.bottom-right .tooltip-arrow {
    left: 15px
}
.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .2;
    filter: alpha(opacity=20)
}
.close:focus, .close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: .5;
    filter: alpha(opacity=50)
}
button.close {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none
}
.popover {
    position: absolute;
    top: 0;
    left: 0;
    display: none;
    max-width: 276px;
    padding: 1px;
    font-family: Arial, Helvetica, sans-serif;
    font-style: normal;
    font-weight: 400;
    letter-spacing: normal;
    line-break: auto;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    white-space: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    font-size: 14px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2)
}
.popover.top {
    margin-top: -10px
}
.popover.right {
    margin-left: 10px
}
.popover.bottom {
    margin-top: 10px
}
.popover.left {
    margin-left: -10px
}
.popover-title {
    margin: 0;
    padding: 8px 14px;
    font-size: 14px;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-radius: 5px 5px 0 0
}
.popover-content {
    padding: 9px 14px
}
.popover>.arrow, .popover>.arrow:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid
}
.popover>.arrow {
    border-width: 11px
}
.popover>.arrow:after {
    border-width: 10px;
    content: ""
}
.popover.top>.arrow {
    left: 50%;
    margin-left: -11px;
    border-bottom-width: 0;
    border-top-color: #999;
    border-top-color: rgba(0, 0, 0, .25);
    bottom: -11px
}
.popover.top>.arrow:after {
    content: " ";
    bottom: 1px;
    margin-left: -10px;
    border-bottom-width: 0;
    border-top-color: #fff
}
.popover.right>.arrow {
    top: 50%;
    left: -11px;
    margin-top: -11px;
    border-left-width: 0;
    border-right-color: #999;
    border-right-color: rgba(0, 0, 0, .25)
}
.popover.right>.arrow:after {
    content: " ";
    left: 1px;
    bottom: -10px;
    border-left-width: 0;
    border-right-color: #fff
}
.popover.bottom>.arrow {
    left: 50%;
    margin-left: -11px;
    border-top-width: 0;
    border-bottom-color: #999;
    border-bottom-color: rgba(0, 0, 0, .25);
    top: -11px
}
.popover.bottom>.arrow:after {
    content: " ";
    top: 1px;
    margin-left: -10px;
    border-top-width: 0;
    border-bottom-color: #fff
}
.popover.left>.arrow {
    top: 50%;
    right: -11px;
    margin-top: -11px;
    border-right-width: 0;
    border-left-color: #999;
    border-left-color: rgba(0, 0, 0, .25)
}
.popover.left>.arrow:after {
    content: " ";
    right: 1px;
    border-right-width: 0;
    border-left-color: #fff;
    bottom: -10px
}
@font-face {
    font-family: Glyphicons Halflings;
    src: url(https://d1tfzqz2829nun.cloudfront.net/fonts/glyphicons-halflings-regular.eot);
    src: url(https://d1tfzqz2829nun.cloudfront.net/fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(https://d1tfzqz2829nun.cloudfront.net/fonts/glyphicons-halflings-regular.woff2) format("woff2"), url(https://d1tfzqz2829nun.cloudfront.net/fonts/glyphicons-halflings-regular.woff) format("woff"), url(https://d1tfzqz2829nun.cloudfront.net/fonts/glyphicons-halflings-regular.ttf) format("truetype"), url(https://d1tfzqz2829nun.cloudfront.net/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg")
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: Glyphicons Halflings;
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}
.glyphicon-asterisk:before {
    content: "\2a"
}
.glyphicon-plus:before {
    content: "\2b"
}
.glyphicon-eur:before, .glyphicon-euro:before {
    content: "\20ac"
}
.glyphicon-minus:before {
    content: "\2212"
}
.glyphicon-cloud:before {
    content: "\2601"
}
.glyphicon-envelope:before {
    content: "\2709"
}
.glyphicon-pencil:before {
    content: "\270f"
}
.glyphicon-glass:before {
    content: "\e001"
}
.glyphicon-music:before {
    content: "\e002"
}
.glyphicon-search:before {
    content: "\e003"
}
.glyphicon-heart:before {
    content: "\e005"
}
.glyphicon-star:before {
    content: "\e006"
}
.glyphicon-star-empty:before {
    content: "\e007"
}
.glyphicon-user:before {
    content: "\e008"
}
.glyphicon-film:before {
    content: "\e009"
}
.glyphicon-th-large:before {
    content: "\e010"
}
.glyphicon-th:before {
    content: "\e011"
}
.glyphicon-th-list:before {
    content: "\e012"
}
.glyphicon-ok:before {
    content: "\e013"
}
.glyphicon-remove:before {
    content: "\e014"
}
.glyphicon-zoom-in:before {
    content: "\e015"
}
.glyphicon-zoom-out:before {
    content: "\e016"
}
.glyphicon-off:before {
    content: "\e017"
}
.glyphicon-signal:before {
    content: "\e018"
}
.glyphicon-cog:before {
    content: "\e019"
}
.glyphicon-trash:before {
    content: "\e020"
}
.glyphicon-home:before {
    content: "\e021"
}
.glyphicon-file:before {
    content: "\e022"
}
.glyphicon-time:before {
    content: "\e023"
}
.glyphicon-road:before {
    content: "\e024"
}
.glyphicon-download-alt:before {
    content: "\e025"
}
.glyphicon-download:before {
    content: "\e026"
}
.glyphicon-upload:before {
    content: "\e027"
}
.glyphicon-inbox:before {
    content: "\e028"
}
.glyphicon-play-circle:before {
    content: "\e029"
}
.glyphicon-repeat:before {
    content: "\e030"
}
.glyphicon-refresh:before {
    content: "\e031"
}
.glyphicon-list-alt:before {
    content: "\e032"
}
.glyphicon-lock:before {
    content: "\e033"
}
.glyphicon-flag:before {
    content: "\e034"
}
.glyphicon-headphones:before {
    content: "\e035"
}
.glyphicon-volume-off:before {
    content: "\e036"
}
.glyphicon-volume-down:before {
    content: "\e037"
}
.glyphicon-volume-up:before {
    content: "\e038"
}
.glyphicon-qrcode:before {
    content: "\e039"
}
.glyphicon-barcode:before {
    content: "\e040"
}
.glyphicon-tag:before {
    content: "\e041"
}
.glyphicon-tags:before {
    content: "\e042"
}
.glyphicon-book:before {
    content: "\e043"
}
.glyphicon-bookmark:before {
    content: "\e044"
}
.glyphicon-print:before {
    content: "\e045"
}
.glyphicon-camera:before {
    content: "\e046"
}
.glyphicon-font:before {
    content: "\e047"
}
.glyphicon-bold:before {
    content: "\e048"
}
.glyphicon-italic:before {
    content: "\e049"
}
.glyphicon-text-height:before {
    content: "\e050"
}
.glyphicon-text-width:before {
    content: "\e051"
}
.glyphicon-align-left:before {
    content: "\e052"
}
.glyphicon-align-center:before {
    content: "\e053"
}
.glyphicon-align-right:before {
    content: "\e054"
}
.glyphicon-align-justify:before {
    content: "\e055"
}
.glyphicon-list:before {
    content: "\e056"
}
.glyphicon-indent-left:before {
    content: "\e057"
}
.glyphicon-indent-right:before {
    content: "\e058"
}
.glyphicon-facetime-video:before {
    content: "\e059"
}
.glyphicon-picture:before {
    content: "\e060"
}
.glyphicon-map-marker:before {
    content: "\e062"
}
.glyphicon-adjust:before {
    content: "\e063"
}
.glyphicon-tint:before {
    content: "\e064"
}
.glyphicon-edit:before {
    content: "\e065"
}
.glyphicon-share:before {
    content: "\e066"
}
/*.glyphicon-check:before {
    content: "\e067"
    }*/
    .glyphicon-move:before {
        content: "\e068"
    }
    .glyphicon-step-backward:before {
        content: "\e069"
    }
    .glyphicon-fast-backward:before {
        content: "\e070"
    }
    .glyphicon-backward:before {
        content: "\e071"
    }
    .glyphicon-play:before {
        content: "\e072"
    }
    .glyphicon-pause:before {
        content: "\e073"
    }
    .glyphicon-stop:before {
        content: "\e074"
    }
    .glyphicon-forward:before {
        content: "\e075"
    }
    .glyphicon-fast-forward:before {
        content: "\e076"
    }
    .glyphicon-step-forward:before {
        content: "\e077"
    }
    .glyphicon-eject:before {
        content: "\e078"
    }
    .glyphicon-chevron-left:before {
        content: "\e079"
    }
    .glyphicon-chevron-right:before {
        content: "\e080"
    }
    .glyphicon-plus-sign:before {
        content: "\e081"
    }
    .glyphicon-minus-sign:before {
        content: "\e082"
    }
    .glyphicon-remove-sign:before {
        content: "\e083"
    }
    .glyphicon-ok-sign:before {
        content: "\e084"
    }
    .glyphicon-question-sign:before {
        content: "\e085"
    }
    .glyphicon-info-sign:before {
        content: "\e086"
    }
    .glyphicon-screenshot:before {
        content: "\e087"
    }
    .glyphicon-remove-circle:before {
        content: "\e088"
    }
    .glyphicon-ok-circle:before {
        content: "\e089"
    }
    .glyphicon-ban-circle:before {
        content: "\e090"
    }
    .glyphicon-arrow-left:before {
        content: "\e091"
    }
    .glyphicon-arrow-right:before {
        content: "\e092"
    }
    .glyphicon-arrow-up:before {
        content: "\e093"
    }
    .glyphicon-arrow-down:before {
        content: "\e094"
    }
    .glyphicon-share-alt:before {
        content: "\e095"
    }
    .glyphicon-resize-full:before {
        content: "\e096"
    }
    .glyphicon-resize-small:before {
        content: "\e097"
    }
    .glyphicon-exclamation-sign:before {
        content: "\e101"
    }
    .glyphicon-gift:before {
        content: "\e102"
    }
    .glyphicon-leaf:before {
        content: "\e103"
    }
    .glyphicon-fire:before {
        content: "\e104"
    }
    .glyphicon-eye-open:before {
        content: "\e105"
    }
    .glyphicon-eye-close:before {
        content: "\e106"
    }
    .glyphicon-warning-sign:before {
        content: "\e107"
    }
    .glyphicon-plane:before {
        content: "\e108"
    }
    .glyphicon-calendar:before {
        content: "\e109"
    }
    .glyphicon-random:before {
        content: "\e110"
    }
    .glyphicon-comment:before {
        content: "\e111"
    }
    .glyphicon-magnet:before {
        content: "\e112"
    }
    .glyphicon-chevron-up:before {
        content: "\e113"
    }
    .glyphicon-chevron-down:before {
        content: "\e114"
    }
    .glyphicon-retweet:before {
        content: "\e115"
    }
    .glyphicon-shopping-cart:before {
        content: "\e116"
    }
    .glyphicon-folder-close:before {
        content: "\e117"
    }
    .glyphicon-folder-open:before {
        content: "\e118"
    }
    .glyphicon-resize-vertical:before {
        content: "\e119"
    }
    .glyphicon-resize-horizontal:before {
        content: "\e120"
    }
    .glyphicon-hdd:before {
        content: "\e121"
    }
    .glyphicon-bullhorn:before {
        content: "\e122"
    }
    .glyphicon-bell:before {
        content: "\e123"
    }
    .glyphicon-certificate:before {
        content: "\e124"
    }
    .glyphicon-thumbs-up:before {
        content: "\e125"
    }
    .glyphicon-thumbs-down:before {
        content: "\e126"
    }
    .glyphicon-hand-right:before {
        content: "\e127"
    }
    .glyphicon-hand-left:before {
        content: "\e128"
    }
    .glyphicon-hand-up:before {
        content: "\e129"
    }
    .glyphicon-hand-down:before {
        content: "\e130"
    }
    .glyphicon-circle-arrow-right:before {
        content: "\e131"
    }
    .glyphicon-circle-arrow-left:before {
        content: "\e132"
    }
    .glyphicon-circle-arrow-up:before {
        content: "\e133"
    }
    .glyphicon-circle-arrow-down:before {
        content: "\e134"
    }
    .glyphicon-globe:before {
        content: "\e135"
    }
    .glyphicon-wrench:before {
        content: "\e136"
    }
    .glyphicon-tasks:before {
        content: "\e137"
    }
    .glyphicon-filter:before {
        content: "\e138"
    }
    .glyphicon-briefcase:before {
        content: "\e139"
    }
    .glyphicon-fullscreen:before {
        content: "\e140"
    }
    .glyphicon-dashboard:before {
        content: "\e141"
    }
    .glyphicon-paperclip:before {
        content: "\e142"
    }
    .glyphicon-heart-empty:before {
        content: "\e143"
    }
    .glyphicon-link:before {
        content: "\e144"
    }
    .glyphicon-phone:before {
        content: "\e145"
    }
    .glyphicon-pushpin:before {
        content: "\e146"
    }
    .glyphicon-usd:before {
        content: "\e148"
    }
    .glyphicon-gbp:before {
        content: "\e149"
    }
    .glyphicon-sort:before {
        content: "\e150"
    }
    .glyphicon-sort-by-alphabet:before {
        content: "\e151"
    }
    .glyphicon-sort-by-alphabet-alt:before {
        content: "\e152"
    }
    .glyphicon-sort-by-order:before {
        content: "\e153"
    }
    .glyphicon-sort-by-order-alt:before {
        content: "\e154"
    }
    .glyphicon-sort-by-attributes:before {
        content: "\e155"
    }
    .glyphicon-sort-by-attributes-alt:before {
        content: "\e156"
    }
    .glyphicon-unchecked:before {
        content: "\e157"
    }
    .glyphicon-expand:before {
        content: "\e158"
    }
    .glyphicon-collapse-down:before {
        content: "\e159"
    }
    .glyphicon-collapse-up:before {
        content: "\e160"
    }
    .glyphicon-log-in:before {
        content: "\e161"
    }
    .glyphicon-flash:before {
        content: "\e162"
    }
    .glyphicon-log-out:before {
        content: "\e163"
    }
    .glyphicon-new-window:before {
        content: "\e164"
    }
    .glyphicon-record:before {
        content: "\e165"
    }
    .glyphicon-save:before {
        content: "\e166"
    }
    .glyphicon-open:before {
        content: "\e167"
    }
    .glyphicon-saved:before {
        content: "\e168"
    }
    .glyphicon-import:before {
        content: "\e169"
    }
    .glyphicon-export:before {
        content: "\e170"
    }
    .glyphicon-send:before {
        content: "\e171"
    }
    .glyphicon-floppy-disk:before {
        content: "\e172"
    }
    .glyphicon-floppy-saved:before {
        content: "\e173"
    }
    .glyphicon-floppy-remove:before {
        content: "\e174"
    }
    .glyphicon-floppy-save:before {
        content: "\e175"
    }
    .glyphicon-floppy-open:before {
        content: "\e176"
    }
    .glyphicon-credit-card:before {
        content: "\e177"
    }
    .glyphicon-transfer:before {
        content: "\e178"
    }
    .glyphicon-cutlery:before {
        content: "\e179"
    }
    .glyphicon-header:before {
        content: "\e180"
    }
    .glyphicon-compressed:before {
        content: "\e181"
    }
    .glyphicon-earphone:before {
        content: "\e182"
    }
    .glyphicon-phone-alt:before {
        content: "\e183"
    }
    .glyphicon-tower:before {
        content: "\e184"
    }
    .glyphicon-stats:before {
        content: "\e185"
    }
    .glyphicon-sd-video:before {
        content: "\e186"
    }
    .glyphicon-hd-video:before {
        content: "\e187"
    }
    .glyphicon-subtitles:before {
        content: "\e188"
    }
    .glyphicon-sound-stereo:before {
        content: "\e189"
    }
    .glyphicon-sound-dolby:before {
        content: "\e190"
    }
    .glyphicon-sound-5-1:before {
        content: "\e191"
    }
    .glyphicon-sound-6-1:before {
        content: "\e192"
    }
    .glyphicon-sound-7-1:before {
        content: "\e193"
    }
    .glyphicon-copyright-mark:before {
        content: "\e194"
    }
    .glyphicon-registration-mark:before {
        content: "\e195"
    }
    .glyphicon-cloud-download:before {
        content: "\e197"
    }
    .glyphicon-cloud-upload:before {
        content: "\e198"
    }
    .glyphicon-tree-conifer:before {
        content: "\e199"
    }
    .glyphicon-tree-deciduous:before {
        content: "\e200"
    }
    .glyphicon-cd:before {
        content: "\e201"
    }
    .glyphicon-save-file:before {
        content: "\e202"
    }
    .glyphicon-open-file:before {
        content: "\e203"
    }
    .glyphicon-level-up:before {
        content: "\e204"
    }
    .glyphicon-copy:before {
        content: "\e205"
    }
    .glyphicon-paste:before {
        content: "\e206"
    }
    .glyphicon-alert:before {
        content: "\e209"
    }
    .glyphicon-equalizer:before {
        content: "\e210"
    }
    .glyphicon-king:before {
        content: "\e211"
    }
    .glyphicon-queen:before {
        content: "\e212"
    }
    .glyphicon-pawn:before {
        content: "\e213"
    }
    .glyphicon-bishop:before {
        content: "\e214"
    }
    .glyphicon-knight:before {
        content: "\e215"
    }
    .glyphicon-baby-formula:before {
        content: "\e216"
    }
    .glyphicon-tent:before {
        content: "\26fa"
    }
    .glyphicon-blackboard:before {
        content: "\e218"
    }
    .glyphicon-bed:before {
        content: "\e219"
    }
    .glyphicon-apple:before {
        content: "\f8ff"
    }
    .glyphicon-erase:before {
        content: "\e221"
    }
    .glyphicon-hourglass:before {
        content: "\231b"
    }
    .glyphicon-lamp:before {
        content: "\e223"
    }
    .glyphicon-duplicate:before {
        content: "\e224"
    }
    .glyphicon-piggy-bank:before {
        content: "\e225"
    }
    .glyphicon-scissors:before {
        content: "\e226"
    }
    .glyphicon-bitcoin:before, .glyphicon-btc:before, .glyphicon-xbt:before {
        content: "\e227"
    }
    .glyphicon-jpy:before, .glyphicon-yen:before {
        content: "\00a5"
    }
    .glyphicon-rub:before, .glyphicon-ruble:before {
        content: "\20bd"
    }
    .glyphicon-scale:before {
        content: "\e230"
    }
    .glyphicon-ice-lolly:before {
        content: "\e231"
    }
    .glyphicon-ice-lolly-tasted:before {
        content: "\e232"
    }
    .glyphicon-education:before {
        content: "\e233"
    }
    .glyphicon-option-horizontal:before {
        content: "\e234"
    }
    .glyphicon-option-vertical:before {
        content: "\e235"
    }
    .glyphicon-menu-hamburger:before {
        content: "\e236"
    }
    .glyphicon-modal-window:before {
        content: "\e237"
    }
    .glyphicon-oil:before {
        content: "\e238"
    }
    .glyphicon-grain:before {
        content: "\e239"
    }
    .glyphicon-sunglasses:before {
        content: "\e240"
    }
    .glyphicon-text-size:before {
        content: "\e241"
    }
    .glyphicon-text-color:before {
        content: "\e242"
    }
    .glyphicon-text-background:before {
        content: "\e243"
    }
    .glyphicon-object-align-top:before {
        content: "\e244"
    }
    .glyphicon-object-align-bottom:before {
        content: "\e245"
    }
    .glyphicon-object-align-horizontal:before {
        content: "\e246"
    }
    .glyphicon-object-align-left:before {
        content: "\e247"
    }
    .glyphicon-object-align-vertical:before {
        content: "\e248"
    }
    .glyphicon-object-align-right:before {
        content: "\e249"
    }
    .glyphicon-triangle-right:before {
        content: "\e250"
    }
    .glyphicon-triangle-left:before {
        content: "\e251"
    }
    .glyphicon-triangle-bottom:before {
        content: "\e252"
    }
    .glyphicon-triangle-top:before {
        content: "\e253"
    }
    .glyphicon-console:before {
        content: "\e254"
    }
    .glyphicon-superscript:before {
        content: "\e255"
    }
    .glyphicon-subscript:before {
        content: "\e256"
    }
    .glyphicon-menu-left:before {
        content: "\e257"
    }
    .glyphicon-menu-right:before {
        content: "\e258"
    }
    .glyphicon-menu-down:before {
        content: "\e259"
    }
    .glyphicon-menu-up:before {
        content: "\e260"
    }
    .alert>ul {
        list-style: none;
        margin-top: 0;
        padding: 0
    }
    .tooltip-inner {
        box-shadow: 0 0 3px rgba(0, 0, 0, .5);
        font-weight: 700;
        padding: 19px 38px
    }
    .icon-cc, .icon-check {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/checked.png);
        width: 92px;
        height: 92px
    }
/*.icon-check {
    background-position: -639px -92px
    }*/
    .popover {
        z-index: 1060
    }
    .btn {
        text-decoration: none
    }
    .modal, .modal-open {
        overflow: hidden
    }
    .modal {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        -webkit-overflow-scrolling: touch;
        outline: 0
    }
    .modal.fade .modal-dialog {
        transform: translateY(-25%);
        transition: transform .3s ease-out
    }
    .modal.in .modal-dialog {
        transform: translate(0)
    }
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }
    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }
    .modal-content {
        position: relative;
        background-color: #fff;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        background-clip: padding-box;
        outline: 0
    }
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000
    }
    .modal-backdrop.fade {
        opacity: 0;
        filter: alpha(opacity=0)
    }
    .modal-backdrop.in {
        filter: alpha(opacity=50)
    }
    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
        min-height: 16.5px
    }
    .modal-header .close {
        margin-top: -2px
    }
    .modal-title {
        margin: 0;
        line-height: 1.5
    }
    .modal-body {
        position: relative;
        padding: 15px
    }
    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5
    }
    .modal-footer .btn+.btn {
        margin-left: 5px;
        margin-bottom: 0
    }
    .modal-footer .btn-group .btn+.btn {
        margin-left: -1px
    }
    .modal-footer .btn-block+.btn-block {
        margin-left: 0
    }
    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }
    @media (min-width:768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto
        }
        .modal-content {
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
        }
        .modal-sm {
            width: 300px
        }
    }
    @media (min-width:992px) {
        .modal-lg {
            width: 900px
        }
    }
    .btn-group, .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }
    .btn-group-vertical>.btn, .btn-group>.btn {
        position: relative;
        float: left
    }
    .btn-group-vertical>.btn.active, .btn-group-vertical>.btn:active, .btn-group-vertical>.btn:focus, .btn-group-vertical>.btn:hover, .btn-group>.btn.active, .btn-group>.btn:active, .btn-group>.btn:focus, .btn-group>.btn:hover {
        z-index: 2
    }
    .btn-group .btn+.btn, .btn-group .btn+.btn-group, .btn-group .btn-group+.btn, .btn-group .btn-group+.btn-group {
        margin-left: -1px
    }
    .btn-toolbar {
        margin-left: -5px
    }
    .btn-toolbar .btn, .btn-toolbar .btn-group, .btn-toolbar .input-group {
        float: left
    }
    .btn-toolbar>.btn, .btn-toolbar>.btn-group, .btn-toolbar>.input-group {
        margin-left: 5px
    }
    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }
    .btn-group>.btn:first-child {
        margin-left: 0
    }
    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }
    .btn-group>.btn:last-child:not(:first-child), .btn-group>.dropdown-toggle:not(:first-child) {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }
    .btn-group>.btn-group {
        float: left
    }
    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }
    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child, .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }
    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }
    .btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
        outline: 0
    }
    .btn-group>.btn+.dropdown-toggle {
        padding-left: 8px;
        padding-right: 8px
    }
    .btn-group>.btn-lg+.dropdown-toggle {
        padding-left: 12px;
        padding-right: 12px
    }
    .btn-group.open .dropdown-toggle {
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }
    .btn-group.open .dropdown-toggle.btn-link {
        box-shadow: none
    }
    .btn .caret {
        margin-left: 0
    }
    .btn-lg .caret {
        border-width: 5px 5px 0;
        border-bottom-width: 0
    }
    .dropup .btn-lg .caret {
        border-width: 0 5px 5px
    }
    .btn-group-vertical>.btn, .btn-group-vertical>.btn-group, .btn-group-vertical>.btn-group>.btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%
    }
    .btn-group-vertical>.btn-group>.btn {
        float: none
    }
    .btn-group-vertical>.btn+.btn, .btn-group-vertical>.btn+.btn-group, .btn-group-vertical>.btn-group+.btn, .btn-group-vertical>.btn-group+.btn-group {
        margin-top: -1px;
        margin-left: 0
    }
    .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }
    .btn-group-vertical>.btn:first-child:not(:last-child) {
        border-top-right-radius: 2px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    .btn-group-vertical>.btn:last-child:not(:first-child) {
        border-bottom-left-radius: 2px;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }
    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child, .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }
    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }
    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate
    }
    .btn-group-justified>.btn, .btn-group-justified>.btn-group {
        float: none;
        display: table-cell;
        width: 1%
    }
    .btn-group-justified>.btn-group .btn {
        width: 100%
    }
    .btn-group-justified>.btn-group .dropdown-menu {
        left: auto
    }
    [data-toggle=buttons]>.btn-group>.btn input[type=checkbox], [data-toggle=buttons]>.btn-group>.btn input[type=radio], [data-toggle=buttons]>.btn input[type=checkbox], [data-toggle=buttons]>.btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }
    .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.5;
        border-radius: 2px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }
    .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }
    .btn.focus, .btn:focus, .btn:hover {
        color: #333;
        text-decoration: none
    }
    .btn.active, .btn:active {
        outline: 0;
        background-image: none;
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }
    .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
        cursor: not-allowed;
        opacity: .65;
        filter: alpha(opacity=65);
        box-shadow: none
    }
    a.btn.disabled, fieldset[disabled] a.btn {
        pointer-events: none
    }
    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }
    .btn-default.focus, .btn-default:focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }
    .btn-default.active, .btn-default:active, .btn-default:hover, .open>.dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }
    .btn-default.active.focus, .btn-default.active:focus, .btn-default.active:hover, .btn-default:active.focus, .btn-default:active:focus, .btn-default:active:hover, .open>.dropdown-toggle.btn-default.focus, .open>.dropdown-toggle.btn-default:focus, .open>.dropdown-toggle.btn-default:hover {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }
    .btn-default.active, .btn-default:active, .open>.dropdown-toggle.btn-default {
        background-image: none
    }
    .btn-default.disabled, .btn-default.disabled.active, .btn-default.disabled.focus, .btn-default.disabled:active, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled], .btn-default[disabled].active, .btn-default[disabled].focus, .btn-default[disabled]:active, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default, fieldset[disabled] .btn-default.active, fieldset[disabled] .btn-default.focus, fieldset[disabled] .btn-default:active, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
        background-color: #fff;
        border-color: #ccc
    }
    .btn-default .badge {
        color: #fff;
        background-color: #333
    }
    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }
    .btn-primary.focus, .btn-primary:focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }
    .btn-primary.active, .btn-primary:active, .btn-primary:hover, .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }
    .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }
    .btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {
        background-image: none
    }
    .btn-primary.disabled, .btn-primary.disabled.active, .btn-primary.disabled.focus, .btn-primary.disabled:active, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled], .btn-primary[disabled].active, .btn-primary[disabled].focus, .btn-primary[disabled]:active, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary, fieldset[disabled] .btn-primary.active, fieldset[disabled] .btn-primary.focus, fieldset[disabled] .btn-primary:active, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:hover {
        background-color: #337ab7;
        border-color: #2e6da4
    }
    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }
    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c
    }
    .btn-success.focus, .btn-success:focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625
    }
    .btn-success.active, .btn-success:active, .btn-success:hover, .open>.dropdown-toggle.btn-success {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }
    .btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover, .btn-success:active.focus, .btn-success:active:focus, .btn-success:active:hover, .open>.dropdown-toggle.btn-success.focus, .open>.dropdown-toggle.btn-success:focus, .open>.dropdown-toggle.btn-success:hover {
        color: #fff;
        background-color: #398439;
        border-color: #255625
    }
    .btn-success.active, .btn-success:active, .open>.dropdown-toggle.btn-success {
        background-image: none
    }
    .btn-success.disabled, .btn-success.disabled.active, .btn-success.disabled.focus, .btn-success.disabled:active, .btn-success.disabled:focus, .btn-success.disabled:hover, .btn-success[disabled], .btn-success[disabled].active, .btn-success[disabled].focus, .btn-success[disabled]:active, .btn-success[disabled]:focus, .btn-success[disabled]:hover, fieldset[disabled] .btn-success, fieldset[disabled] .btn-success.active, fieldset[disabled] .btn-success.focus, fieldset[disabled] .btn-success:active, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:hover {
        background-color: #5cb85c;
        border-color: #4cae4c
    }
    .btn-success .badge {
        color: #5cb85c;
        background-color: #fff
    }
    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }
    .btn-info.focus, .btn-info:focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }
    .btn-info.active, .btn-info:active, .btn-info:hover, .open>.dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }
    .btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover, .btn-info:active.focus, .btn-info:active:focus, .btn-info:active:hover, .open>.dropdown-toggle.btn-info.focus, .open>.dropdown-toggle.btn-info:focus, .open>.dropdown-toggle.btn-info:hover {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }
    .btn-info.active, .btn-info:active, .open>.dropdown-toggle.btn-info {
        background-image: none
    }
    .btn-info.disabled, .btn-info.disabled.active, .btn-info.disabled.focus, .btn-info.disabled:active, .btn-info.disabled:focus, .btn-info.disabled:hover, .btn-info[disabled], .btn-info[disabled].active, .btn-info[disabled].focus, .btn-info[disabled]:active, .btn-info[disabled]:focus, .btn-info[disabled]:hover, fieldset[disabled] .btn-info, fieldset[disabled] .btn-info.active, fieldset[disabled] .btn-info.focus, fieldset[disabled] .btn-info:active, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:hover {
        background-color: #5bc0de;
        border-color: #46b8da
    }
    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }
    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }
    .btn-warning.focus, .btn-warning:focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }
    .btn-warning.active, .btn-warning:active, .btn-warning:hover, .open>.dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }
    .btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover, .btn-warning:active.focus, .btn-warning:active:focus, .btn-warning:active:hover, .open>.dropdown-toggle.btn-warning.focus, .open>.dropdown-toggle.btn-warning:focus, .open>.dropdown-toggle.btn-warning:hover {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }
    .btn-warning.active, .btn-warning:active, .open>.dropdown-toggle.btn-warning {
        background-image: none
    }
    .btn-warning.disabled, .btn-warning.disabled.active, .btn-warning.disabled.focus, .btn-warning.disabled:active, .btn-warning.disabled:focus, .btn-warning.disabled:hover, .btn-warning[disabled], .btn-warning[disabled].active, .btn-warning[disabled].focus, .btn-warning[disabled]:active, .btn-warning[disabled]:focus, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning, fieldset[disabled] .btn-warning.active, fieldset[disabled] .btn-warning.focus, fieldset[disabled] .btn-warning:active, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:hover {
        background-color: #f0ad4e;
        border-color: #eea236
    }
    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }
    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }
    .btn-danger.focus, .btn-danger:focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }
    .btn-danger.active, .btn-danger:active, .btn-danger:hover, .open>.dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }
    .btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover, .btn-danger:active.focus, .btn-danger:active:focus, .btn-danger:active:hover, .open>.dropdown-toggle.btn-danger.focus, .open>.dropdown-toggle.btn-danger:focus, .open>.dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }

    .btn-danger.disabled, .btn-danger.disabled.active, .btn-danger.disabled.focus, .btn-danger.disabled:active, .btn-danger.disabled:focus, .btn-danger.disabled:hover, .btn-danger[disabled], .btn-danger[disabled].active, .btn-danger[disabled].focus, .btn-danger[disabled]:active, .btn-danger[disabled]:focus, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger, fieldset[disabled] .btn-danger.active, fieldset[disabled] .btn-danger.focus, fieldset[disabled] .btn-danger:active, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:hover {
        background-color: #d9534f;
        border-color: #d43f3a
    }
    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }
    .btn-link {
        color: #337ab7;
        font-weight: 400;
        border-radius: 0
    }
    .btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
        background-color: transparent;
        box-shadow: none
    }
    .btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
        border-color: transparent
    }
    .btn-link:focus, .btn-link:hover {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent
    }
    .btn-link[disabled]:focus, .btn-link[disabled]:hover, fieldset[disabled] .btn-link:focus, fieldset[disabled] .btn-link:hover {
        color: #777;
        text-decoration: none
    }
    .btn-group-lg>.btn, .btn-lg {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }
    .btn-group-sm>.btn, .btn-sm {
        padding: 5px 10px;
        font-size: 14px;
        line-height: 1.5;
        border-radius: 3px
    }
    .btn-group-xs>.btn, .btn-xs {
        padding: 1px 5px;
        font-size: 14px;
        line-height: 1.5;
        border-radius: 3px
    }
    .btn-block {
        display: block;
        width: 100%
    }
    .btn-block+.btn-block {
        margin-top: 5px
    }
    input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
        width: 100%
    }
    code, kbd, pre, samp {
        font-family: Menlo, Monaco, Consolas, Courier New, monospace
    }
    code {
        color: #c7254e;
        background-color: #f9f2f4;
        border-radius: 2px
    }
    code, kbd {
        padding: 2px 4px;
        font-size: 90%
    }
    kbd {
        color: #fff;
        background-color: #333;
        border-radius: 3px;
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }
    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700;
        box-shadow: none
    }
    pre {
        display: block;
        padding: 9px;
        margin: 0 0 9.5px;
        font-size: 13px;
        line-height: 1.5;
        word-break: break-all;
        word-wrap: break-word;
        color: #333;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 2px
    }
    pre code {
        padding: 0;
        font-size: inherit;
        color: inherit;
        white-space: pre-wrap;
        background-color: transparent;
        border-radius: 0
    }

    .text-blue {
        color: #10617f
    }
    .text-center {
        text-align: center
    }
    .bg-grey2 {
        background-color: #d9dbe3
    }
    .word-break {
        word-break: break-all
    }
    .block {
        display: block!important
    }
    .inline-block {
        display: inline-block
    }
    .max-height-30 {
        max-height: 30px
    }
    .spacer-20 {
        height: 20px
    }
    .spacer-30 {
        height: 30px
    }
    .spacer-40 {
        height: 40px
    }
    .spacer-60 {
        height: 60px
    }
    .before-line-height-2:before {
        line-height: 2
    }
    .font-doppio {
        font-family: Doppio One, sans-serif
    }
    .curved-line {
        position: relative
    }
    .curved-line:after {
        content: "";
        position: absolute;
        bottom: -4px;
        left: 0;
        display: inline-block;
        width: 100%!important
    }
    @media (max-width:767px) {
        .curved-line:after {
            background: none!important
        }
    }
    .curved-line--big-gap:after {
        bottom: -14px!important
    }
    .curved-arrow--blue.curved-arrow--right {
        transform: rotate(0deg)
    }
    .curved-arrow--blue.curved-arrow--down {
        transform: rotate(90deg)
    }
    .curved-arrow--blue.curved-arrow--left {
        transform: rotate(180deg)
    }
    .text-title {
        font-family: Doppio One, sans-serif;
        font-size: 30px;
        color: #444f5b;
        text-transform: uppercase;
        text-align: center
    }
    @media (max-width:767px) {
        .xs-block {
            display: block
        }
        .xs-inline {
            display: inline!important
        }
        .xs-block-center {
            margin-left: auto;
            margin-right: auto
        }
        .xs-pull-right {
            float: right
        }
        .xs-margin-0 {
            margin: 0!important
        }
        .xs-margin-top-0 {
            margin-top: 0!important
        }
        .xs-margin-top-1 {
            margin-top: 1px!important
        }
        .xs-margin-top-2 {
            margin-top: 2px
        }
        .xs-margin-top-10 {
            margin-top: 10px!important
        }
        .xs-margin-top-20 {
            margin-top: 20px!important
        }
        .xs-margin-top-30 {
            margin-top: 30px!important
        }
        .xs-margin-top-40 {
            margin-top: 40px!important
        }
        .xs-margin-top-50 {
            margin-top: 50px!important
        }
        .xs-margin-right-0 {
            margin-right: 0!important
        }
        .xs-margin-bottom-0 {
            margin-bottom: 0!important
        }
        .xs-margin-bottom-5 {
            margin-bottom: 5px!important
        }
        .xs-margin-bottom-10 {
            margin-bottom: 10px!important
        }
        .xs-margin-bottom-15 {
            margin-bottom: 15px!important
        }
        .xs-margin-bottom-20 {
            margin-bottom: 20px!important
        }
        .xs-margin-bottom-30 {
            margin-bottom: 30px!important
        }
        .xs-margin-left-0 {
            margin-left: 0!important
        }
        .xs-padding-0 {
            padding: 0!important
        }
        .xs-padding-20 {
            padding: 20px!important
        }
        .xs-padding-top-5 {
            padding-top: 5px!important
        }
        .xs-padding-top-30 {
            padding-top: 30px!important
        }
        .xs-padding-top-40 {
            padding-top: 40px!important
        }
        .xs-padding-top-80 {
            padding-top: 80px!important
        }
        .xs-padding-bottom-0 {
            padding-bottom: 0!important
        }
        .xs-padding-bottom-5 {
            padding-bottom: 5px!important
        }
        .xs-padding-bottom-30 {
            padding-bottom: 30px!important
        }
        .xs-padding-bottom-40 {
            padding-bottom: 40px!important
        }
        .xs-padding-left-10 {
            padding-left: 10px!important
        }
        .xs-width-inherit {
            width: inherit!important
        }
        .xs-width-145 {
            width: 145px!important
        }
        .xs-height-0 {
            height: 0!important
        }
        .xs-height-40 {
            height: 40px!important
        }
        .xs-height-50 {
            height: 50px!important
        }
        .xs-height-60 {
            height: 60px!important
        }
        .xs-height-80 {
            height: 80px!important
        }
        .xs-height-200 {
            height: 200px!important
        }
        .xs-text-center {
            text-align: center!important
        }
        .xs-font-size-12 {
            font-size: 12px!important
        }
        .xs-font-size-16 {
            font-size: 16px!important
        }
        .xs-font-size-18 {
            font-size: 18px!important
        }
        .xs-font-size-22 {
            font-size: 22px!important
        }
        .xs-font-size-24 {
            font-size: 24px!important
        }
        .xs-font-size-30 {
            font-size: 30px!important
        }
        .xs-font-size-40 {
            font-size: 40px!important
        }
        .xs-line-height-inherit {
            line-height: inherit!important
        }
        .xs-line-height-1 {
            line-height: 1!important
        }
        .xs-line-height-50 {
            line-height: 50px!important
        }
        .spacer-20 {
            height: 10px
        }
        .spacer-30 {
            height: 15px
        }
        .spacer-40 {
            height: 20px
        }
        .spacer-60 {
            height: 30px
        }
        .xs-border-none {
            border: none!important
        }
        .center-block-xs {
            display: block;
            margin-left: auto;
            margin-right: auto
        }
        .row.xs-gutter-0 {
            margin-left: 0;
            margin-right: 0
        }
        .row.xs-gutter-0>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }
        .row.xs-gutter-10 {
            margin-left: -5px;
            margin-right: -5px
        }
        .row.xs-gutter-10>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }
    }
    @media (min-width:768px) and (max-width:991px) {
        .sm-block-center {
            margin-left: auto;
            margin-right: auto
        }
        .sm-inline {
            display: inline!important
        }
        .sm-pull-right {
            float: right
        }
        .sm-height-40 {
            height: 40px!important
        }
        .sm-height-45 {
            height: 45px!important
        }
        .sm-height-60 {
            height: 60px!important
        }
        .sm-margin-top-0 {
            margin-top: 0!important
        }
        .sm-margin-top-1 {
            margin-top: 1px!important
        }
        .sm-margin-top-10 {
            margin-top: 10px
        }
        .sm-margin-top-20 {
            margin-top: 20px!important
        }
        .sm-margin-top-30 {
            margin-top: 30px!important
        }
        .sm-margin-top-50 {
            margin-top: 50px!important
        }
        .sm-margin-top-90 {
            margin-top: 90px!important
        }
        .sm-margin-right-0 {
            margin-right: 0!important
        }
        .sm-margin-left-10 {
            margin-left: 10px!important
        }
        .sm-margin-left-50 {
            margin-left: 50px!important
        }
        .sm-margin-bottom-10 {
            margin-bottom: 10px
        }
        .sm-margin-bottom-15 {
            margin-bottom: 15px!important
        }
        .sm-margin-bottom-20 {
            margin-bottom: 20px!important
        }
        .sm-padding-top-5 {
            padding-top: 5px!important
        }
        .sm-padding-left-10 {
            padding-left: 10px!important
        }
        .sm-padding-bottom-5 {
            padding-bottom: 5px!important
        }
        .sm-text-center {
            text-align: center
        }
        .sm-text-align-right {
            text-align: right
        }
        .sm-font-size-12 {
            font-size: 12px!important
        }
        .sm-font-size-16 {
            font-size: 16px!important
        }
        .sm-font-size-20 {
            font-size: 20px!important
        }
        .sm-font-size-25 {
            font-size: 25px!important
        }
        .sm-font-size-40 {
            font-size: 40px!important
        }
        .spacer-20 {
            height: 15px
        }
        .spacer-30 {
            height: 23px
        }
        .spacer-40 {
            height: 30px
        }
        .spacer-60 {
            height: 45px
        }
        .sm-border-none {
            border: none!important
        }
        .sm-row-equal-height {
            display: -ms-flexbox;
            display: flex
        }
        .row.sm-gutter-20 {
            margin-left: -10px;
            margin-right: -10px
        }
        .row.sm-gutter-20>[class*=col-] {
            padding-right: 10px;
            padding-left: 10px
        }
    }
    @media (min-width:992px) and (max-width:1199px) {
        .md-pull-right {
            float: right
        }
        .md-height-45 {
            height: 45px!important
        }
        .md-height-100 {
            height: 100px!important
        }
        .md-height-265 {
            height: 265px!important
        }
        .md-min-height-190 {
            min-height: 190px!important
        }
        .md-max-width-initial {
            max-width: none!important
        }
        .md-margin-top-10 {
            margin-top: 10px!important
        }
        .md-margin-top-20 {
            margin-top: 20px
        }
        .md-margin-bottom-15 {
            margin-bottom: 15px!important
        }
        .md-margin-bottom-20 {
            margin-bottom: 20px!important
        }
        .md-font-size-20 {
            font-size: 20px!important
        }
        .md-text-center {
            text-align: center!important
        }
        .md-text-align-right {
            text-align: right
        }
        .md-row-equal-height {
            display: -ms-flexbox;
            display: flex
        }
    }
    @media (min-width:1200px) {
        .lg-position-absolute {
            position: absolute!important
        }
        .lg-pull-left {
            float: left
        }
        .lg-height-222 {
            height: 222px!important
        }
        .lg-min-height-215 {
            min-height: 215px!important
        }
        .lg-max-width-initial {
            max-width: none!important
        }
        .lg-margin-top-20 {
            margin-top: 20px!important
        }
        .lg-margin-left-10 {
            margin-left: 10px!important
        }
        .lg-font-size-20 {
            font-size: 20px!important
        }
        .lg-text-align-right {
            text-align: right
        }
        .lg-row-equal-height {
            display: -ms-flexbox;
            display: flex
        }
    }
    @media (min-width:768px) {
        .row.gutter-0 {
            margin-left: 0;
            margin-right: 0
        }
        .row.gutter-0>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }
        .row.gutter-2 {
            margin-left: -1px;
            margin-right: -1px
        }
        .row.gutter-2>[class*=col-] {
            padding-right: 1px;
            padding-left: 1px
        }
        .row.gutter-6 {
            margin-left: -3px;
            margin-right: -3px
        }
        .row.gutter-6>[class*=col-] {
            padding-right: 3px;
            padding-left: 3px
        }
        .row.gutter-10 {
            margin-left: -5px;
            margin-right: -5px
        }
        .row.gutter-10>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }
        .row.gutter-16 {
            margin-left: -8px;
            margin-right: -8px
        }
        .row.gutter-16>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px
        }
        .row.gutter-20 {
            margin-left: -10px;
            margin-right: -10px
        }
        .row.gutter-20>[class*=col-] {
            padding-right: 10px;
            padding-left: 10px
        }
        .row.gutter-30 {
            margin-left: -15px;
            margin-right: -15px
        }
        .row.gutter-30>[class*=col-] {
            padding-right: 15px;
            padding-left: 15px
        }
        .row.gutter-40 {
            margin-left: -20px;
            margin-right: -20px
        }
        .row.gutter-40>[class*=col-] {
            padding-right: 20px;
            padding-left: 20px
        }
        .row.gutter-50 {
            margin-left: -25px;
            margin-right: -25px
        }
        .row.gutter-50>[class*=col-] {
            padding-right: 25px;
            padding-left: 25px
        }
        .row.gutter-60 {
            margin-left: -30px;
            margin-right: -30px
        }
        .row.gutter-60>[class*=col-] {
            padding-right: 30px;
            padding-left: 30px
        }
        .row.gutter-80 {
            margin-left: -40px;
            margin-right: -40px
        }
        .row.gutter-80>[class*=col-] {
            padding-right: 40px;
            padding-left: 40px
        }
        .row.gutter-140 {
            margin-left: -70px;
            margin-right: -70px
        }
        .row.gutter-140>[class*=col-] {
            padding-right: 70px;
            padding-left: 70px
        }
    }
    @media (min-width:1200px) {
        .row.lg-gutter-60 {
            margin-left: -30px;
            margin-right: -30px
        }
        .row.lg-gutter-60>[class*=col-] {
            padding-right: 30px;
            padding-left: 30px
        }
        .row.lg-gutter-80 {
            margin-left: -40px;
            margin-right: -40px
        }
        .row.lg-gutter-80>[class*=col-] {
            padding-right: 40px;
            padding-left: 40px
        }
    }
    .aligner {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center
    }
    @media (min-width:768px) {
        .aligner-hidden-xs {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }
    @media (min-width:768px) {
        .border-between>[class*=col-]:after, .border-between>[class*=col-]:before {
            background: #ddd;
            bottom: 0;
            content: " ";
            position: absolute;
            width: 1px;
            top: 0
        }
        .border-between>[class*=col-]:before {
            left: 0
        }
        .border-between>[class*=col-]:after {
            right: -1px
        }
        .border-between>[class*=col-]:first-child:before, .border-between>[class*=col-]:last-child:after {
            display: none
        }
    }
    [v-cloak] {
        display: none!important
    }
    .lazy {
        width: 100%;
        height: auto
    }
    .fade {
        opacity: 0;
        transition: opacity .15s linear
    }
    .fade.in {
        opacity: 1
    }
    .modal-backdrop.in {
        opacity: .5
    }
    .button-order:disabled {
        cursor: wait;
        background-color: #e2e2e2!important;
        border-color: #c1c1c1!important
    }
    .about-page .why-block ul li:before, .services-body .language .image, .services-body .propositions-section ul li:before, .sprite {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/images/sprites30f4.png?v=3) no-repeat;
        display: inline-block
    }
    .about-page .why-block ul li:before, .check-mark-small, .services-body .propositions-section ul li:before {
        width: 36px;
        height: 36px;
        background-position: -308px -376px
    }
    .icon {
        display: inline-block
    }
    .link-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/url.png);
        height: 24px;
        width: 24px
    }
    .upload-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/add.png);
        height: 24px;
        width: 24px
    }
    .uploading-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/uploading.png);
        height: 29px;
        width: 29px
    }
    .uploaded-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/uploaded.png);
        height: 29px;
        width: 29px
    }
    .play-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/play.png);
        height: 29px;
        width: 29px
    }
    .play-icon.inactive {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/play-inactive.png)
    }
    .trim-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/trim.png);
        cursor: pointer;
        height: 31px;
        width: 29px
    }
    .trim-icon.inactive {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/trim-inactive.png);
        cursor: auto
    }
    .comment-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/comment.png);
        cursor: pointer;
        height: 27px;
        width: 32px
    }
    .comment-icon.inactive {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/comment-inactive.png);
        cursor: auto
    }
    .delete-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/delete.png);
        cursor: pointer;
        height: 21px;
        width: 16px
    }
    .help-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/help.png)
    }
    .help-icon, .help-white-icon {
        cursor: pointer;
        height: 20px;
        width: 20px
    }
    .help-white-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/note-white.png)
    }
    .comment-done-icon, .trim-done-icon {
        position: relative
    }
    .comment-done-icon:before, .trim-done-icon:before {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/added.png);
        content: "";
        height: 15px;
        position: absolute;
        width: 15px
    }
    .comment-done-icon:before {
        right: -10px;
        top: -10px
    }
    .trim-done-icon:before {
        right: -4px;
        top: -7px
    }
    .text-format-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/text-format.png);
        height: 29px;
        width: 33px
    }
    .timestamping-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/timestamping.png);
        height: 29px;
        width: 29px
    }
    .turnaround-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/time.png);
        height: 31px;
        width: 30px
    }
    .turnaround-icon.inactive {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/time-inactive.png)
    }
    .speakers-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/speakers.png);
        height: 23px;
        width: 30px
    }
    .subtitles-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/cc.png);
        height: 27px;
        width: 29px
    }
    .srt-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/srt.png)
    }
    .srt-icon, .stl-icon {
        height: 27px;
        width: 39px
    }
    .stl-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/stl.png)
    }
    .language-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/language.png);
        height: 27px;
        width: 27px
    }
    .low-quality-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/low-quality.png);
        height: 27px;
        width: 27px
    }
    .add-recipient-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/add-recipient.png);
        height: 26px;
        width: 26px
    }
    .ms-word-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/word.png);
        height: 30px;
        width: 31px
    }
    .prices-icon {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/upload-icons/prices.png);
        height: 24px;
        width: 27px
    }
    .empty-icon {
        height: 27px;
        width: 27px
    }
    .language-switcher {
        position: relative;
        display: inline-block;
        top: 7px;
        margin-left: 5px;
        width: 30px;
        height: 20px;
        cursor: pointer
    }
    .language-switcher .language-switcher__flags {
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
        z-index: 1
    }
    .language-switcher .language-switcher__flag {
        display: block;
        margin-top: 7px
    }
    .language-switcher .language-switcher__flag_img {
        height: 20px;
        width: 20px
    }
    .language-switcher .language-switcher__flag.active {
        display: block
    }
    .language-switcher__nice-container {
        border-radius: 15px;
        border: 1px solid #e5e5e5;
        padding: 3px
    }

    .button-large, .button-medium, .button-small {
        background: #fff;
        border-radius: 4px;
        border: 1px solid #fff;
        border-bottom: 3px solid #e1e1e5;
        color: #495563;
        cursor: pointer;
        display: block;
        font-family: Doppio One, sans-serif;
        font-size: 24px;
        line-height: 1.5;
        outline: none;
        padding: 10px 0;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        transition: border .15s;
        width: 100%
    }
    .button-large.orange, .button-medium.orange, .button-small.orange {
        background: #ef5068;
        border-color: #ef8a8a;
        color: #fff
    }
    .button-large.blue, .button-medium.blue, .button-small.blue {
        background: #10617f;
        border-color: #0f5671;
        color: #fff
    }
    .button-large.red, .button-medium.red, .button-small.red {
        background: #ac2925;
        border-color: #761c19;
        color: #fff
    }
    .button-large:hover, .button-medium:hover, .button-small:hover {
        border-color: #bdc3c7
    }
    .button-large:hover.blue, .button-medium:hover.blue, .button-small:hover.blue {
        border-color: #10536d
    }
    .button-large:active, .button-medium:active, .button-small:active {
        border: 1px solid #d69700
    }
    @media (max-width:991px) {
        .button-large, .button-medium, .button-small {
            font-size: 20px
        }
    }
    .button-medium {
        display: inline-block;
        font-size: 17px;
        height: 43px;
        line-height: 40px;
        padding: 0 50px;
        width: auto
    }
    .button-medium.button-icon {
        padding: 0 25px
    }
    .button-medium.button-icon .icon {
        margin: 0 25px -5px 0
    }
    .button-small {
        display: inline-block;
        font-size: 14px;
        line-height: 1.5;
        padding: 1px 10px;
        width: auto
    }
    .button-yellow {
        background-color: #ef5068;
        border-color: #d3990e;
        color: #fff
    }
    .button-neon {
        background-color: #10617f;
        color: #fff
    }
    .button-neon, .button-neon:active, .button-neon:hover {
        border-color: #0d5069
    }
    .button-full-width {
        display: block;
        margin-bottom: 20px;
        padding: 0 20px;
        width: 100%
    }
    .button {
        background: #fda900;
        border: none;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 17px;
        line-height: 1.2;
        padding: 6px 15px;
        text-align: center
    }
    .form-control {
        background: #fff;
        border: 1px solid #bbb;
        border-radius: 5px;
        color: #6f6f6f;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 400;
        display: block;
        font-size: 15px;
        height: 35px;
        line-height: 35px;
        padding: 0 10px;
        width: 100%
    }
    .form-control::-moz-placeholder {
        color: #a9abb3;
        opacity: 1
    }
    .form-control:-ms-input-placeholder {
        color: #a9abb3
    }
    .form-control::-webkit-input-placeholder {
        color: #a9abb3
    }
    textarea.form-control {
        height: auto;
        line-height: 1.4;
        padding: 8px
    }
    .form-control.input-error {
        background-color: #fee!important;
        border-color: #fb6363!important
    }
    .form-horizontal>div {
        margin-bottom: 20px;
        padding: 0 10px 0 0
    }
    .form-horizontal>div:last-child {
        padding: 0
    }
    .form-group {
        margin-bottom: 20px
    }
    .checkbox input:checked, .checkbox input:not(:checked), .radio input:checked, .radio input:not(:checked) {
        position: absolute;
        left: -9999px
    }
    .checkbox input:checked+label, .checkbox input:not(:checked)+label, .radio input:checked+label, .radio input:not(:checked)+label {
        color: #6c727b;
        cursor: pointer;
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        line-height: 22px;
        position: relative;
        padding-left: 39px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }
    .checkbox input:checked+label:before, .checkbox input:not(:checked)+label:before, .radio input:checked+label:before, .radio input:not(:checked)+label:before {
        background: #fff;
        border: 1px solid #d5d5dc;
        border-radius: 4px;
        content: "";
        height: 22px;
        left: 0;
        position: absolute;
        top: 0;
        width: 22px
    }
    .checkbox input:checked+label:after, .checkbox input:not(:checked)+label:after, .radio input:checked+label:after, .radio input:not(:checked)+label:after {
        content: url(<?php echo ARCHIVO; ?>transcription-audio/img/checkbox-checkmark.png);
        font-size: 0;
        height: 12px;
        left: 4px;
        position: absolute;
        top: 5px;
        transition: all .2s;
        width: 15px
    }
    .checkbox input:not(:checked)+label:after, .radio input:not(:checked)+label:after {
        opacity: 0;
        transform: scale(0)
    }
    .checkbox input:checked+label:after, .radio input:checked+label:after {
        opacity: 1;
        transform: scale(1)
    }
    .radio input:checked+label:before, .radio input:not(:checked)+label:before {
        background: #fff;
        border: 1px solid #d1d2da;
        border-radius: 50%
    }
    .radio input:checked+label:after, .radio input:not(:checked)+label:after {
        background-color: #136380;
        border-radius: 50%;
        content: "";
        height: 12px;
        left: 5px;
        top: 5px;
        width: 12px
    }
    .form-dropdown {
        background: #fff url(<?php echo ARCHIVO; ?>transcription-audio/img/components/other/arrowdown.html) no-repeat 90% 50%;
        border: 1px solid #d1d2da;
        border-radius: 3px;
        color: #495563;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: 700;
        height: 32px;
        line-height: 32px;
        margin: 0;
        overflow: hidden;
        position: relative;
        width: 100%
    }
    .form-dropdown:after, .form-dropdown:before {
        content: "";
        position: absolute;
        pointer-events: none
    }
    .form-dropdown:after {
        background-color: #ef5068;
        height: 100%;
        right: 0;
        top: 0;
        width: 40px;
        z-index: 1
    }
    .form-dropdown:before {
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 10px solid #fff;
        height: 0;
        right: 11px;
        top: 40%;
        width: 0;
        z-index: 2
    }
    .form-dropdown select {
        padding: 3px 10px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
        box-shadow: none;
        background-color: transparent;
        background-image: none;
        height: 100%;
        width: 100%;
        line-height: 24px
    }
    .form-dropdown select:focus {
        outline: none
    }
    .fluid-section {
        background: #fff;
        padding: 50px 0
    }
    .fluid-section .heading {
        color: #444f5b;
        font-family: Doppio One, sans-serif;
        font-size: 27px;
        font-weight: 400;
        margin: 0 0 40px;
        text-align: center;
        text-transform: uppercase
    }
    .fluid-section p {
        color: #444f5b;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px
    }
    @media (max-width:767px) {
        .fluid-section .heading {
            font-size: 23px
        }
    }
    .upload-section {
        background: #ef5068;
        padding: 14px 0
    }
    .upload-section .quote {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/images/quote-left.png), url(<?php echo ARCHIVO; ?>transcription-audio/img/images/quote-right.png);
        background-position: 0 0, 100% 100%;
        background-repeat: no-repeat;
        color: #fff;
        font-family: Arimo, sans-serif;
        font-size: 18px;
        margin: 0;
        padding: 25px 30px;
        text-align: center
    }
    .upload-section .button-large {
        margin-top: 22px
    }
    .upload-section .upload-section-text-p {
        color: #fff;
        font-size: 23px;
        text-align: center;
        font-family: Doppio One, sans-serif
    }
    .upload-section.upload-section-small .upload-line__text-container {
        background: inherit;
        box-shadow: none
    }
    .marketing-container {
        padding-top: 75px;
        padding-bottom: 115px;
        background: #ef5068
    }
    .marketing-container.marketing-container-color-grey {
        background: #ebedf4
    }
    .marketing-container.marketing-container-color-grey .marketing__title1, .marketing-container.marketing-container-color-grey .marketing__title2 {
        color: #444f5b
    }
    .marketing__title1 {
        font-size: 30px
    }
    .marketing__title1, .marketing__title2 {
        margin: 0;
        font-family: Doppio One, sans-serif;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        font-weight: 400
    }
    .marketing__title2 {
        font-size: 36px
    }
    .marketing__box {
        position: relative;
        height: 258px;
        padding: 75px 40px 0;
        background: #fff
    }
    .marketing__circle {
        position: absolute;
        top: -45px;
        right: 0;
        left: 0;
        display: block;
        margin: 0 auto
    }
    .marketing__h3 {
        font-family: Doppio One, sans-serif;
        font-size: 23px;
        line-height: 1;
        margin: 0;
        text-transform: uppercase;
        text-align: center;
        color: #444f5b;
        font-weight: 400
    }
    .marketing__text {
        color: #444f5b;
        font-size: 15px;
        margin: 19px 0 0;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif
    }
    .marketing__spacer {
        height: 107px
    }
    @media (min-width:992px) and (max-width:1199px) {
        .marketing__box {
            padding-left: 20px;
            padding-right: 20px
        }
    }
    @media (min-width:768px) and (max-width:991px) {
        .marketing__box {
            padding-left: 5px;
            padding-right: 5px
        }
        .marketing__h3 {
            font-size: 18px
        }
        .marketing__circle {
            transform: scale(.6666)
        }
    }
    @media (max-width:767px) {
        .marketing-container {
            padding-top: 25px;
            padding-bottom: 34px
        }
        .marketing__title1 {
            font-size: 20px
        }
        .marketing__title2 {
            font-size: 24px
        }
        .marketing__box {
            height: auto;
            margin-top: 5px;
            padding: 62px 5px 13px
        }
        .marketing__h3 {
            font-size: 18px
        }
        .marketing__circle {
            top: -15px;
            transform: scale(.4444)
        }
        .marketing__spacer {
            height: 20px!important
        }
    }
    .online-services__title1 {
        font-size: 30px
    }
    .online-services__title1, .online-services__title2 {
        margin: 0;
        font-family: Doppio One, sans-serif;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        font-weight: 400
    }
    .online-services__title2 {
        font-size: 36px
    }
    .online-services__box {
        position: relative;
        height: 258px;
        padding: 75px 17px 0;
        background: #ebedf4
    }
    .online-services__circle {
        position: absolute;
        top: -45px;
        right: 0;
        left: 0;
        display: block;
        margin: 0 auto
    }
    .online-services__h3 {
        font-family: Doppio One, sans-serif;
        font-size: 23px;
        line-height: 30px;
        margin: 0;
        text-transform: uppercase;
        text-align: center;
        color: #444f5b;
        font-weight: 400
    }
    .online-services__text {
        color: #444f5b;
        font-size: 15px;
        margin: 19px 0 0;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif
    }
    .online-services__spacer {
        height: 107px
    }
    @media (min-width:992px) and (max-width:1199px) {
        .online-services__box {
            padding-left: 20px;
            padding-right: 20px
        }
    }
    @media (min-width:768px) and (max-width:991px) {
        .online-services__box {
            padding-left: 5px;
            padding-right: 5px
        }
        .online-services__h3 {
            font-size: 18px
        }
        .online-services__circle {
            transform: scale(.6666)
        }
    }
    @media (max-width:767px) {
        .online-services-container {
            padding-top: 25px;
            padding-bottom: 34px
        }
        .online-services__title1 {
            font-size: 20px
        }
        .online-services__title2 {
            font-size: 24px
        }
        .online-services__box {
            height: auto;
            margin-top: 5px;
            padding: 62px 5px 13px
        }
        .online-services__h3 {
            font-size: 18px
        }
        .online-services__circle {
            top: -15px;
            transform: scale(.4444)
        }
        .online-services__spacer {
            height: 20px
        }
    }
    .cost-estimate-section {
        background: #10617f;
        color: #fff;
        text-align: center
    }
    .cost-estimate-section .heading {
        color: #fff;
        line-height: 1;
        margin: 0
    }
    .cost-estimate-section p {
        color: #fff;
        margin: 0
    }
    .cost-estimate-section .button-large {
        color: #ef5068;
        margin-top: 20px
    }
    .cost-estimate-section .button-large:hover {
        border-color: #094c65
    }
    .cost-estimate-section .button-large:active {
        border: 1px solid #094c65
    }
    .transcription-samples-section {
        background: #ebedf4;
        color: #444f5b;
        font-size: 0;
        text-align: center
    }
    .transcription-samples-section .heading {
        line-height: 1;
        margin: 40px 0 0
    }
    .transcription-samples-section p {
        margin: 15px 0 45px
    }
    .transcription-samples-section .button-large {
        margin: 0 auto;
        max-width: 554px
    }

    .universities-button {
        display: inline-block;
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
        line-height: 39px;
        text-decoration: none;
        font-family: Doppio One, sans-serif;
        font-size: 17px;
        color: #fff;
        text-transform: uppercase;
        background-color: #10617f;
        border-radius: 3px;
        border: 1px solid #0e5772;
        border-bottom-width: 3px
    }
    .icon-review-star-black {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/star.png);
        background-size: contain;
        width: 15px;
        height: 15px
    }
    .presentation-section {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/homepage/header-bg5e1f.jpg?v=2) 85% no-repeat;
        background-size: cover;
        padding: 20px 0 40px
    }
    .presentation-section h1 {
        font-family: Doppio One, sans-serif;
        font-size: 32px;
        font-weight: 400;
        margin: 0;
        color: #444f5b
    }
    @media (min-width:768px) and (max-width:991px) {
        .presentation-section h1 {
            font-size: 30px
        }
    }
    @media (max-width:767px) {
        .presentation-section h1 {
            font-size: 24px;
            text-align: center;
            line-height: 31px;
            margin-bottom: 3px
        }
    }
    .presentation-section h1 a {
        color: #10617f;
        text-decoration: none
    }
    .presentation-section ul {
        list-style: none;
        margin: 24px 0 0;
        padding: 0 0 0 69px
    }
    .presentation-section ul li {
        color: #495563;
        font-size: 18px;
        line-height: 1.3;
        margin-bottom: 19px;
        min-height: 47px;
        padding-top: 10px;
        position: relative
    }
    .presentation-section ul li:before {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/images/sprites30f4.png?v=3) -308px -328px no-repeat;
        content: "";
        height: 47px;
        left: -69px;
        position: absolute;
        top: 0;
        width: 47px
    }
    @media (max-width:767px) {
        .presentation-section ul li {
            font-size: 14px
        }
    }
    .presentation-section .laptop-bg {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/images/laptop.png) no-repeat;
        float: right;
        height: 310px;
        padding: 14px 0 0 79px;
        width: 548px
    }
    @media (max-width:991px) {
        .presentation-section .laptop-bg {
            background: none;
            height: auto;
            margin-top: 40px;
            padding: 0;
            width: 100%
        }
        .presentation-section .laptop-bg .laptop-video {
            width: 100%;
            height: auto
        }
    }
    .homepage__main-title-small-text {
        font-size: 15px;
        color: #444f5b;
        font-weight: 700
    }
    @media (max-width:767px) {
        .homepage__main-title-small-text {
            text-align: center
        }
    }
    .latest-orders-section {
        background: #fff;
        padding: 50px 0
    }
    .latest-orders-section h3.heading {
        color: #444f5b;
        margin: 0 0 30px
    }
    .latest-orders-section table, .latest-orders-section table tbody {
        border: none;
        margin: 0;
        padding: 0
    }
    .latest-orders-section table {
        width: 100%
    }
    .latest-orders-section table td, .latest-orders-section table th {
        font-size: 14px;
        height: 51px;
        padding: 0;
        text-align: center;
        vertical-align: middle
    }
    .latest-orders-section table th {
        background: #495563;
        border: none;
        color: #fff;
        font-family: Doppio One, sans-serif;
        font-weight: 400
    }
    .latest-orders-section table th:first-child {
        border-top-left-radius: 3px
    }
    .latest-orders-section table th:last-child {
        border-top-right-radius: 3px
    }
    .latest-orders-section table td {
        border: none;
        border-top: 1px solid #ebedf4;
        background: #ebedf4;
        color: #a9abb7;
        font-family: Arial, sans-serif
    }
    .latest-orders-section table tr:last-child td:first-child {
        border-bottom-left-radius: 3px
    }
    .latest-orders-section table tr:last-child td:last-child {
        border-bottom-right-radius: 3px
    }
    .latest-orders-section table tr:nth-child(2) td {
        color: #686a74
    }
    .latest-orders-section table tr:nth-child(3) td {
        color: #7e808a
    }
    .latest-orders-section table tr:nth-child(4) td {
        color: #8f919d
    }
    .latest-orders-section table tr:hover td {
        background: #dfe1e8
    }
    .latest-orders-section table tr:before {
        background: #dcdee5;
        content: " ";
        display: block;
        height: 1px;
        left: 4%;
        position: absolute;
        width: 92%
    }
    .latest-orders-section table tr:first-child:before, .latest-orders-section table tr:nth-child(2):before {
        height: 0
    }
    @media (max-width:767px) {
        .latest-orders-section table td, .latest-orders-section table th {
            font-size: 12px
        }
        .latest-orders-section table tr:before {
            left: 8%;
            width: 84%
        }
    }
    .latest-orders-section .stat {
        margin-bottom: 20px
    }
    .latest-orders-section .stat .sprite {
        display: block;
        float: left
    }
    .latest-orders-section .stat .count {
        float: left;
        font-family: Doppio One, sans-serif;
        margin-left: 30px
    }
    .latest-orders-section .stat .count span {
        color: #5674f1;
        line-height: .8
    }
    .latest-orders-section .stat .count .label {
        color: #444f5b;
        font-size: 17px;
        line-height: 1
    }
    .latest-orders-section .stat.small .count span {
        font-size: 40px
    }
    .latest-orders-section .stat.medium .count span {
        font-size: 45px
    }
    .latest-orders-section .stat.large .count span {
        font-size: 50px
    }
    @media (max-width:991px) {
        .latest-orders-section .stat {
            width: 300px;
            margin-left: auto;
            margin-right: auto
        }
        .latest-orders-section .stat:first-child {
            margin-top: 30px
        }
    }
    .pricing-table {
        width: 100%
    }
    .pricing-table td, .pricing-table th {
        border-left: 1px solid #fff;
        display: table-cell;
        font-family: Doppio One, sans-serif;
        position: relative;
        text-align: center;
        vertical-align: middle
    }
    .pricing-table td:first-child, .pricing-table th:first-child {
        border-left: none
    }
    .pricing-table th {
        background: #10617f;
        color: #fff;
        font-size: 24px;
        font-weight: 400;
        height: 93px;
        width: 33.333333%
    }
    .pricing-table th:first-child {
        background: #ef5068;
        border-top-left-radius: 3px
    }
    .pricing-table th:nth-child(2) {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }
    .pricing-table th:nth-child(3) {
        background: #ee8a18;
        border-top-right-radius: 3px
    }
    .pricing-table th:first-child, .pricing-table th:nth-child(3) {
        height: 73px;
        top: 20px;
        padding-bottom: 20px
    }
    .pricing-table td {
        background: #ebedf4;
        color: #444f5b;
        font-size: 22px;
        padding: 15px 0;
        z-index: 2
    }
    .pricing-table td .price-holder {
        display: inline-block;
        margin-left: auto;
        margin-right: auto
    }
    .pricing-table td .price-holder .price-text {
        height: 40px;
        line-height: 40px;
        display: inline-block
    }
    .pricing-table td .price-holder .discount-circle {
        display: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 11pt;
        background-color: #ef5068;
        color: #fff;
        float: left
    }
    .pricing-table td .price-holder.discounted>.discount-circle {
        margin-left: -50px
    }
    .pricing-table td .price-holder.not-discounted>.discount-circle {
        display: none!important
    }
    .pricing-table td:after {
        background: #dcdee5;
        bottom: 0;
        content: " ";
        height: 1px;
        left: 3%;
        position: absolute;
        width: 94%
    }
    .pricing-table td>.notice {
        color: #ee8a18;
        display: block;
        font-size: 15px;
        line-height: 1
    }
    .pricing-table td:first-of-type {
        padding: 25px 0 20px
    }
    .pricing-table tr:last-child>td:after {
        content: normal
    }
    .pricing-table tr:last-child>td:first-child {
        border-bottom-left-radius: 3px
    }
    .pricing-table tr:last-child>td:last-child {
        border-bottom-right-radius: 3px
    }
    .pricing-table tr:hover>td {
        background: #dfe1e8
    }
    @media (max-width:767px) {
        .pricing-table th {
            font-size: 12px
        }
        .pricing-table td {
            font-size: 11px
        }
        .pricing-table td>.notice {
            font-size: 10px
        }
    }
    .pricing__row {
        margin-top: 20px;
        padding: 10px;
        background: #ebedf4
    }
    .pricing__row__text {
        color: #444f5b;
        font-size: 21px;
        line-height: 60px
    }
    .pricing__number-board, .pricing__row__text {
        font-family: Doppio One, sans-serif;
        text-align: center
    }
    .pricing__number-board {
        font-size: 30px;
        color: #777;
        line-height: 69px
    }
    .pricing__number-board .pricing__number-board-sign {
        margin-right: 10px
    }
    .pricing__number-board .pricing__number-board-digit {
        display: inline-block;
        width: 57px;
        height: 69px;
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/cheap/number-bg.png)
    }
    .pricing__number-board .pricing__number-board-separator {
        line-height: 30px
    }
    .pricing__number-board-subtext {
        max-width: 365px;
        color: #777;
        font-size: 21px;
        display: inline-block;
        font-family: Doppio One, sans-serif;
        margin-top: 25px
    }
    @media (max-width:767px) {
        .pricing__row__text {
            margin-bottom: 8px;
            padding: 10px 0;
            font-size: 16px;
            line-height: 20px
        }
    }
    .pricing__summer-sale {
        position: absolute;
        top: 5px;
        left: -10px
    }
    @media (min-width:992px) and (max-width:1199px) {
        .pricing__summer-sale {
            width: 89px;
            left: -8px
        }
    }
    @media (min-width:768px) and (max-width:991px) {
        .pricing__summer-sale {
            width: 64px;
            left: -5px
        }
        .pricing__summer-sale__text {
            display: none!important
        }
        .pricing-table td {
            font-size: 16px
        }
    }
    @media (max-width:767px) {
        .pricing__summer-sale, .pricing__summer-sale__text {
            display: none!important
        }
    }
    .pricing__translation-row .pricing__translation-row-title {
        font-family: Doppio One, sans-serif;
        font-size: 30px;
        line-height: 30px;
        text-align: center;
        text-transform: uppercase
    }
    .pricing__translation-row .pricing__translation-row-desc {
        font-family: Doppio One, sans-serif;
        font-size: 22px;
        line-height: 34px;
        text-align: center
    }
    .pricing__translation-row .pricing__translation-classic, .pricing__translation-row .pricing__translation-exclusive {
        padding: 25px 0 18px;
        width: 50%;
        float: left
    }
    .pricing__translation-row .pricing__translation-classic {
        color: #2d637f;
        background: #ebedf4
    }
    .pricing__translation-row .pricing__translation-exclusive {
        color: #fff;
        background: #ef5068;
        position: relative
    }
    .pricing__translation-row .pricing__translation-exclusive:after {
        content: " ";
        display: block;
        height: 0;
        width: 0;
        border-left: 14px solid transparent;
        border-right: 14px solid transparent;
        border-top: 13px solid #ef5068;
        position: absolute;
        bottom: -13px;
        left: calc(50% - 7px)
    }
    .pricing__pairs-title {
        font-family: Open Sans, sans-serif;
        color: #3d3d3d;
        text-align: center;
        font-size: 16px;
        font-weight: 600
    }
    .pricing__pair-row {
        margin-top: 10px;
        margin-left: -5.5px;
        margin-right: -5.5px
    }
    .pricing__pair-col {
        padding: 0 5.5px
    }
    .pricing__pair-block {
        width: 100%;
        border: 1px solid #e5e5e5;
        border-radius: 3px;
        background: #f4f4f4;
        padding: 7px;
        margin-top: 10px;
        color: #4e4a4b
    }
    .pricing__pair-image {
        margin-right: 5px
    }
    .loyalty {
        margin: 50px 0
    }
    .loyalty .text {
        color: #444f5b
    }
    .loyalty .text h4 {
        font-family: Doppio One, sans-serif;
        font-size: 33px;
        font-weight: 400;
        line-height: 1;
        margin: 0 0 30px;
        text-align: center
    }
    .loyalty .text .sprite {
        float: left;
        margin-right: 13px
    }
    .loyalty .text p {
        font-size: 15px;
        font-family: Arial, sans-serif;
        margin: 0;
        text-align: justify
    }
    .loyalty .percent, .loyalty .time {
        float: right;
        margin-top: 12px
    }
    .loyalty .percent>div, .loyalty .time>div {
        /*font-family: Doppio One, sans-serif;*/
        height: 50px;
        line-height: 50px;
        margin-bottom: 1px;
        white-space: no-wrap
    }
    .loyalty .percent>div:last-child, .loyalty .time>div:last-child {
        margin-bottom: 0
    }
    .loyalty .percent>div[data-discount], .loyalty .time>div[data-discount] {
        cursor: pointer
    }
    .loyalty .time {
        border-left: 3px solid #fff;
        width: 78%
    }
    .loyalty .time>div {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        color: #fff;
        font-size: 18px;
        padding-left: 9px
    }
    .loyalty .time>.time1 {
        background: #ee8a18;
        width: 70%
    }
    .loyalty .time>.time2 {
        background: #d77a0f;
        width: 85%
    }
    .loyalty .time>.time3 {
        background: #bd6907;
        width: 100%
    }
    .loyalty .percent {
        border-right: 5px solid #3f3f3f;
        color: #3f4954;
        font-size: 24px;
        padding-right: 20px;
        text-transform: uppercase;
        text-align: right;
        width: 22%
    }
    .loyalty .percent .text-holder {
        display: inline-block
    }
    .loyalty .percent .hover {
        background: #ef5068;
        color: #fff;
        margin-left: -6px;
        margin-right: -18px
    }
    .loyalty .percent .hover:after {
        content: "";
        border-color: transparent transparent transparent #ef5068;
        border-width: 25px 0 25px 14px;
        border-style: solid;
        width: 0;
        height: 0;
        position: absolute
    }
    .loyalty .percent .hover>.text-holder {
        padding-right: 18px
    }
    @media (max-width:1199px) {
        .loyalty .text h4 {
            font-size: 28px
        }
        .loyalty .time {
            width: 73%
        }
        .loyalty .time>div {
            font-size: 14px
        }
        .loyalty .percent {
            width: 27%
        }
    }
    @media (max-width:991px) {
        .loyalty .text {
            margin-bottom: 40px
        }
        .loyalty .text h4 {
            margin-bottom: 20px
        }
        .loyalty .time {
            width: 83%
        }
        .loyalty .percent {
            width: 17%
        }
    }
    @media (max-width:767px) {
        .loyalty .text .sprite {
            display: block;
            float: none;
            margin: 0 auto 5px
        }
        .loyalty .percent {
            width: 38%
        }
        .loyalty .percent>div {
            font-size: 21px
        }
        .loyalty .time {
            width: 62%
        }
        .loyalty .time>div {
            font-size: 10px
        }
        .loyalty .time>.time1 {
            width: 80%
        }
        .loyalty .time>.time2 {
            width: 90%
        }
    }
    .loyalty__available-discounts-title {
        color: #444f5b;
        font-size: 23px;
        font-family: Doppio One, sans-serif;
        text-align: center
    }
    .js-circle-progress {
        display: inline-block;
        position: relative;
        margin-left: 15px;
        margin-right: 15px
    }
    .js-circle-progress .progress {
        position: absolute;
        top: 30px;
        left: 0;
        width: 100%;
        text-align: center;
        line-height: 40px;
        font-size: 30px;
        font-family: Doppio One, sans-serif;
        color: #10617f
    }
    .loyalty__discount-circles {
        text-align: center
    }
    .loyalty__discount-circles .tooltip-inner {
        background: #10617f
    }
    .loyalty__discount-circles .tooltip-arrow {
        border-bottom-color: #10617f!important
    }
    .loyalty__number-board {
        font-size: 30px;
        color: #777;
        text-align: center;
        line-height: 69px;
        font-family: Doppio One, sans-serif;
        float: right
    }
    .loyalty__number-board .loyalty__number-board-sign {
        margin-right: 10px
    }
    .loyalty__number-board .loyalty__number-board-digit {
        display: inline-block;
        width: 57px;
        height: 69px;
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/cheap/number-bg.png)
    }
    .loyalty__number-board .loyalty__number-board-separator {
        line-height: 30px
    }
    .loyalty__number-board-subtext {
        color: #777;
        font-size: 21px;
        display: inline-block;
        font-family: Doppio One, sans-serif;
        margin-top: 20px
    }
    .loyalty__already-saved-block {
        background: #ebedf4;
        padding: 15px 0
    }

    .audio-table .feedback-rating .rating-star, .feedback-body .feedback-rating .rating-star {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/star.png);
        display: inline-block;
        height: 30px;
        margin-right: 1px;
        width: 29px
    }
    .audio-table .feedback-rating .rating-star.active, .feedback-body .feedback-rating .rating-star.active {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/star-on.png)
    }
    .feedback-body .pagination-container {
        text-align: center
    }
    .feedback-body .pagination {
        display: inline-block;
        margin-top: 76px;
        padding: 0;
        text-align: center
    }
    .feedback-body .pagination li {
        display: inline;
        font-size: 15px
    }
    .feedback-body .pagination li a {
        border: 1px solid #a9a9a9;
        border-radius: 4px;
        color: #a9a9a9;
        float: left;
        font-weight: 400;
        margin: 0 4px 10px 0;
        padding: 7px 20px;
        text-decoration: none
    }
    .feedback-body .pagination li.active a {
        border: 1px solid #f7a82c;
        color: #f7a82c
    }
    .feedback-body .pagination li.disabled {
        display: none
    }
    @media (max-width:767px) {
        .feedback-body .filtering {
            margin-top: 20px;
            text-align: center
        }
        .feedback-body .filtering .label, .feedback-body .filtering .rating {
            float: none;
            display: block
        }
        .feedback-body .filtering .rating {
            margin: 8px auto 0;
            text-align: left;
            width: 130px
        }
        .feedback-body .filtering .label {
            margin-bottom: 10px
        }
    }
    .feedback__line {
        border-top: 1px solid #fac033
    }
    .feedback__stats__title {
        padding: 10px 0;
        font-family: Doppio One, sans-serif;
        font-size: 15px;
        color: #fff;
        text-transform: uppercase
    }
    .feedback__stats__number {
        padding: 0 5px;
        color: #ef5068;
        background: #fff;
        border-radius: 3px;
        line-height: 22px
    }
    .pagination {
        list-style: none;
        margin: 0 0 40px;
        padding: 0;
        text-align: center
    }
    .pagination li {
        display: inline;
        margin-right: 16px;
        padding: 7px
    }
    .pagination li a {
        color: #666;
        font-size: 14px;
        text-decoration: none
    }
    .pagination li.active {
        font-weight: 700
    }
    .pagination li.disabled {
        display: none
    }
    .news-widget {
        margin-top: 30px
    }
    .news-widget>h4 {
        color: #333;
        font-family: Doppio One, sans-serif;
        font-size: 25px;
        font-weight: 400;
        margin: 0 0 10px;
        text-transform: uppercase
    }
    .news-widget .post {
        border: none;
        padding: 0
    }
    .news-widget .post .post-image {
        float: left;
        height: 90px;
        margin: 0 10px 2px 0;
        width: 100px
    }
    .news-widget .post .post-image img {
        height: 100%;
        max-width: none
    }
    .news-widget .post .post-content p, .news-widget .post .post-title {
        margin: 0
    }
    .news-widget .post .post-title {
        font-size: 16px
    }
    .news-widget .post .post-content {
        font-style: italic
    }
    .news__box {
        display: block;
        height: 100%;
        text-decoration: none;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1)
    }
    .news__content {
        padding: 23px 28px 28px
    }
    .news__title {
        margin: 0 0 13px;
        font-family: Doppio One, sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #444f5b
    }
    .news__date {
        font-family: Arial, Helvetica, sans-serif;
        color: #a4aab4;
        line-height: 30px;
        border-top: 1px solid #ebedf4;
        border-bottom: 1px solid #ebedf4
    }
    .news__date, .news__text {
        margin: 0 0 13px;
        font-size: 13px
    }
    .news__text {
        color: #555
    }
    .news__read, .news__read-blog {
        font-family: Doppio One, sans-serif;
        font-size: 15px;
        color: #a4aab4;
        text-decoration: none
    }
    .news__box:hover .news__read, .news__read-blog:hover, .news__read:hover {
        color: #444f5b
    }
    .news__read-blog {
        display: block;
        margin-top: 22px
    }
    @media (max-width:767px) {
        .news__box {
            max-width: 360px;
            margin: 20px auto 0
        }
    }
    .confirmation-popup {
        border: none;
        box-shadow: none
    }
    .confirmation-popup .tooltip-inner {
        border-radius: 4px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        padding: 6px 7px 6px 20px
    }
    .confirmation-popup .tooltip-inner .question {
        display: inline-block;
        margin: 0 20px 10px 0;
        padding-top: 10px
    }
    .confirmation-popup .tooltip-inner .button-medium {
        color: #4b535c;
        padding: 0 25px
    }
    .textarea-popup {
        margin-top: 0!important;
        max-width: none;
        background-color: transparent;
        border: none;
        box-shadow: none
    }
    .textarea-popup.bottom .tooltip-arrow {
        border-bottom-color: #10617f
    }
    .textarea-popup .tooltip-inner {
        background-color: #10617f;
        border-radius: 4px;
        padding: 10px 10px 15px
    }
    .textarea-popup textarea {
        background-color: #eeeef5;
        border: none;
        border-radius: 4px;
        color: #a2a2ab;
        height: 90px;
        margin-bottom: 15px;
        resize: vertical;
        width: 430px
    }
    @media (max-width:767px) {
        .textarea-popup textarea {
            width: 170px
        }
    }
    .popover-no-border {
        border: none;
        box-shadow: none;
        background-color: transparent
    }
    .btn-orange {
        background: #ef5068;
        border-color: #e1a004;
        color: #fff
    }
    .btn-orange:hover {
        border-color: #ef5050;
        color: #fff;
        transition: .3s
    }
    .btn-white {
        background: #fff;
        border-color: #dbdbdb;
        color: #3c3c3c
    }
    .btn-white:hover {
        border-color: #c1bfbe
    }
    .page__title {
        color: #444f5b;
        font-family: Doppio One, sans-serif;
        font-size: 30px;
        font-weight: 400;
        margin-top: 65px;
        margin-bottom: 55px;
        text-align: center;
        text-transform: uppercase
    }
    @media (max-width:767px) {
        .page__title {
            margin-top: 30px;
            margin-bottom: 22px
        }
    }
    .page__subtitle {
        display: block;
        margin: 0 auto;
        text-align: center
    }
    .page__subtitle, .page__text {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px;
        color: #444f5b
    }
    .page__text {
        margin-bottom: 20px;
        line-height: 22px
    }
    .error-page {
        color: #a5a8ad;
        font-family: Doppio One, sans-serif;
        padding: 100px 0;
        text-align: center
    }
    .error-page .error-code {
        font-size: 155px;
        line-height: 127px
    }
    .error-page .error-message {
        font-size: 35px
    }
    .error-page .home-link {
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        margin-top: 20px;
        text-decoration: none
    }
    .error-page .home-link:hover {
        text-decoration: underline
    }
    .upload-body .heading {
        color: #4b535c;
        font-family: Doppio One, sans-serif;
        font-size: 30px;
        font-weight: 400;
        text-transform: uppercase
    }
    .upload-body .upload-header {
        margin-bottom: 20px
    }
    .upload-body .button-paste, .upload-body .button-upload {
        float: left;
        margin-right: 10px
    }
    .upload-body .steps {
        display: table
    }
    .upload-body .steps .step {
        background-color: #d9dbe3;
        color: #fff;
        display: table-cell;
        font-family: Doppio One, sans-serif;
        font-size: 16px;
        height: 44px;
        vertical-align: middle;
        padding: 0 23px 0 45px;
        position: relative;
        text-align: center;
        text-transform: uppercase
    }
    .upload-body .steps .step a {
        color: #fff;
        text-decoration: none
    }
    .upload-body .steps .step a:hover {
        text-decoration: underline
    }
    .upload-body .steps .step:first-child {
        padding-left: 28px
    }
    .upload-body .steps .step:after, .upload-body .steps .step:before {
        border: solid transparent;
        content: "";
        height: 0;
        left: 100%;
        pointer-events: none;
        position: absolute;
        top: 22px;
        width: 0
    }
    .upload-body .steps .step:after {
        border-left-color: #d9dbe3;
        border-width: 22px;
        margin-top: -22px;
        z-index: 2
    }
    .upload-body .steps .step.active {
        background-color: #495563
    }
    .upload-body .steps .step.active:after {
        border-left-color: #495563
    }
    .upload-body .steps .step.current {
        background-color: #10617f
    }
    .upload-body .steps .step.current:after {
        border-left-color: #10617f
    }
    .upload-body .steps .step.current:last-child {
        background-color: #ef5068
    }
    .upload-body .steps .step:last-child:after, .upload-body .steps .step:last-child:before {
        content: normal
    }
    .upload-body .button-paste {
        background: #5674f1;
        border-color: #7f93e6;
        color: #fff
    }
    .upload-body .upload-table {
        background-color: #5674f1;
        border-radius: 4px;
        margin-bottom: 40px
    }
    .upload-body .upload-table .headertrans {
        color: #fff;
        height: 50px;
        line-height: 50px
    }
    .upload-body .upload-table .columntrans {
        float: left;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        min-height: 1px
    }
    .upload-body .upload-table .column-comment, .upload-body .upload-table .column-play, .upload-body .upload-table .column-remove, .upload-body .upload-table .column-status, .upload-body .upload-table .column-trim {
        width: 10.83333333%
    }
    .upload-body .upload-table .column-length, .upload-body .upload-table .column-size {
        width: 12.5%
    }
    .upload-body .upload-table .column-title {
        overflow: hidden;
        padding-right: 45px;
        width: 33.333333333%
    }
    .upload-body .upload-table .files-list {
        background-color: #ebedf4
    }
    .upload-body .upload-table .headertrans, .upload-body .upload-table .uploaded-file {
        padding: 0 20px
    }
    .upload-body .upload-table .uploaded-file {
        border-bottom: 1px solid #fff;
        line-height: 95px;
        overflow: hidden
    }
    .upload-body .upload-table .uploaded-file .columntrans {
        color: #6c727b;
        font-weight: 700;
        height: 95px;
        overflow: hidden
    }
    .upload-body .upload-table .uploaded-file .column-title {
        color: #4b535c
    }
    .upload-body .upload-table .uploaded-file .cell-title {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 100%
    }
    .upload-body .upload-table .uploaded-file .cell-middle {
        display: table-cell;
        height: 95px;
        line-height: 1.5;
        padding: 10px 0;
        vertical-align: middle
    }
    .upload-body .upload-table .uploaded-file .icon {
        margin-bottom: -7px
    }
    .upload-body .upload-table .uploaded-file.no-files {
        color: #6c727b;
        font-size: 18px
    }
    .upload-body .upload-table .upload-progress {
        position: relative;
        background-color: #fff;
        border: 1px solid #b1b3ba;
        border-radius: 2px;
        height: 19px;
        margin: 28px 0 10px;
        width: 80%
    }
    .upload-body .upload-table .upload-progress>.upload-progress-bar {
        border-radius: 2px;
        background-color: #ef5068;
        height: 17px
    }
    .upload-body .upload-table .upload-progress>.upload-progress-text {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        line-height: 19px;
        font-size: 11px;
        font-weight: 400;
        text-align: center
    }
    .upload-body .upload-table .upload-progress+.cell-title {
        line-height: 1.5
    }
    .upload-body .upload-table .file-popup {
        background-color: #5674f1;
        padding: 9px;
        position: relative
    }
    .upload-body .upload-table .file-popup textarea {
        border: none;
        border-radius: 2px;
        margin-bottom: 10px
    }
    .upload-body .upload-table .file-popup:before {
        border-bottom-color: #5674f1;
    }
    .upload-body .upload-table .file-popup.comment:before {
        left: 62.5%
    }
    .upload-body .upload-table .file-popup.trim {
        color: #fff;
        font-family: Doppio One, sans-serif;
        font-size: 17px;
        padding: 27px 18px
    }
    .upload-body .upload-table .file-popup.trim .form-time {
        float: left
    }
    .upload-body .upload-table .file-popup.trim .form-input {
        margin: 7px 0 0 50px
    }
    .upload-body .upload-table .file-popup.trim .form-button {
        float: right
    }
    .upload-body .upload-table .file-popup.trim input {
        background-color: #fefeff;
        border: none;
        border-radius: 2px;
        color: #4b535c;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        font-weight: 700;
        height: 29px;
        line-height: 29px;
        margin-left: 17px;
        outline: none;
        padding: 0 11px;
        width: 85px
    }
    .upload-body .upload-table .file-popup.trim:before {
        left: 50%
    }
    .upload-body .button-order {
        background-color: #10617f;
        border-color: #0b526c;
        color: #fff;
        display: block;
        margin-bottom: 40px;
        width: 100%
    }
    .upload-body .button-order .icon {
        margin-right: 10px
    }
    .upload-body .info-box {
        background-color: #fff;
        border: 1px solid #ced0d8;
        border-radius: 4px;
        color: #495563;
        font-family: Doppio One, sans-serif;
        font-size: 15px;
        margin-bottom: 20px;
        padding: 20px 15px
    }
    .upload-body .info-box hr {
        border: none;
        border-top: 1px solid #eeeef5;
        margin: 20px 0
    }
    .upload-body .info-box a {
        color: #ef5068;
        text-decoration: none
    }
    .upload-body .info-box a:hover {
        text-decoration: underline
    }
    .upload-body .info-box h4 {
        font-size: 17px;
        font-weight: 400;
        margin: 0;
        text-align: center;
        text-transform: uppercase
    }
    .upload-body .info-box ul {
        list-style: none;
        padding: 0 0 0 10px
    }
    .upload-body .info-box ul li {
        margin-bottom: 25px;
        position: relative
    }
    .upload-body .info-box ul li:before {
        background-color: #10617f;
        border-radius: 50%;
        content: "";
        height: 7px;
        left: -15px;
        position: absolute;
        top: 40%;
        width: 7px
    }
    .upload-body .info-box ul li a {
        color: #495563;
        line-height: 1.3
    }
    .payment-body .payment-container {
        background-color: #eeeef5;
        border: 1px solid #d5d5dc;
        border-radius: 4px;
        margin-bottom: 10px;
        padding: 30px 20px
    }
    .payment-body .payment-container .checkbox, .payment-body .payment-container .payment-form {
        margin-top: 20px
    }
    .payment-body .payment-container label {
        color: #6c727b;
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        margin-bottom: 5px
    }
    .payment-body .payment-container label .required {
        color: #ee8a18
    }
    .payment-body .form-control {
        background-color: #fcfcfd;
        border-color: #d5d5dc;
        border-radius: 4px;
        height: 37px
    }
    .payment-body .form-dropdown {
        height: 37px
    }
    .payment-body .payment-discount {
        margin-top: 19px;
        margin-bottom: 40px
    }
    .payment-body .payment-discount label {
        color: #495563;
        display: inline-block;
        font-family: Doppio One, sans-serif;
        font-size: 16px;
        line-height: 37px
    }
    .payment-body .terms-of-service {
        color: #495563;
        font-family: Doppio One, sans-serif;
        font-size: 18px
    }
    .payment-body .terms-of-service a {
        color: #ee8a18;
        text-decoration: none
    }
    .payment-body .terms-of-service a:hover {
        text-decoration: underline
    }
    .payment-body .button-order {
        padding: 0
    }
    .payment-body .order-updates-recipients {
        font-size: 17px
    }
    .payment-body .order-updates-recipients .email {
        color: #ef5068
    }
    .payment-body .order-updates-recipients .email .delete-link {
        color: red;
        cursor: pointer;
        font-size: 20px;
        margin-left: 5px
    }
    .payment-body .order-add-recipient {
        color: #6c727b;
        cursor: pointer;
        font-family: Doppio One, sans-serif;
        font-size: 18px;
        margin-bottom: 20px;
        text-transform: uppercase
    }
    .payment-body .order-add-recipient .icon {
        margin: 0 15px -5px 0
    }
    .payment-body .button-order-recipient {
        display: inline-block;
        padding: 0 20px;
        width: auto
    }
    .payment-under-title {
        margin-bottom: 35px;
        font-size: 17px;
        color: #868d95
    }
    .upload-register-body form {
        margin-bottom: 40px
    }
    .upload-register-body .auth-text {
        color: #495563;
        font-family: Doppio One, sans-serif;
        font-size: 19px
    }
    .upload-register-body .button-auth-login {
        margin-left: 20px;
        padding: 0 20px
    }
    .upload-register-body .social-login .auth-text {
        font-size: 18px;
        margin-bottom: 15px
    }
    @media (max-width:1199px) {
        .upload-body .steps .step {
            font-size: 12px;
            padding-left: 35px;
            padding-right: 5px
        }
        .upload-body .upload-table .headertrans .columntrans {
            font-size: 12px
        }
    }
    @media (max-width:991px) {
        .upload-body .steps {
            float: none;
            width: 100%
        }
        .upload-body .steps .step {
            font-size: 16px;
            padding-right: 23px
        }
        .upload-body .upload-table .file-popup.trim .form-input {
            margin-left: 20px
        }
        .order-settings .setting-name {
            width: 35%
        }
        .order-settings .options {
            width: 65%
        }
    }
    @media (max-width:767px) {
        .upload-body .button-paste, .upload-body .button-upload {
            float: none;
            margin: 0 0 20px;
            width: 100%
        }
        .upload-body .steps .step {
            font-size: 10px;
            margin: 0;
            padding: 0 0 0 30px
        }
        .upload-body .steps .step:first-child {
            padding-left: 10px
        }
        .upload-body .upload-table .column-comment, .upload-body .upload-table .column-length, .upload-body .upload-table .column-play, .upload-body .upload-table .column-remove, .upload-body .upload-table .column-size, .upload-body .upload-table .column-status, .upload-body .upload-table .column-trim {
            width: 25%
        }
        .upload-body .upload-table .column-title {
            width: 50%;
            padding-right: 0
        }
        .upload-body .upload-table .headertrans .column-title {
            text-align: center;
            width: 100%
        }
        .upload-body .upload-table .uploaded-file .columntrans {
            text-align: center
        }
        .upload-body .upload-table .uploaded-file .columntrans.column-comment, .upload-body .upload-table .uploaded-file .columntrans.column-length, .upload-body .upload-table .uploaded-file .columntrans.column-size, .upload-body .upload-table .uploaded-file .columntrans.column-trim {
            height: 70px;
            line-height: 55px
        }
        .upload-body .upload-table .file-popup.comment:before {
            left: 35%
        }
        .upload-body .upload-table .file-popup.trim:before {
            left: 10%
        }
        .upload-body .upload-table .file-popup.trim .form-input {
            float: none;
            margin: 10px 0 0
        }
        .upload-body .upload-table .file-popup.trim .form-input input {
            margin: 0;
            float: right
        }
        .upload-body .upload-table .file-popup.trim .form-button {
            margin-top: 20px
        }
        .order-settings .setting {
            padding-top: 15px;
            padding-bottom: 15px
        }
        .order-settings .setting .options, .order-settings .setting .setting-name {
            width: 100%
        }
        .order-settings .setting .options {
            line-height: 30px
        }
        .upload-register-body .auth-social {
            float: none
        }
        .upload-register-body .button-auth-login {
            margin: 20px 0 0
        }
    }

    .order-accepted-body {
        background: #ebedf4;
        padding: 90px 0
    }
    @media (max-width:991px) {
        .order-accepted-body {
            padding: 30px 0
        }
    }
    .order-accepted__header-block {
        background: #4da349 url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/order/accepted.png) no-repeat center 10px;
        padding: 40px 0
    }
    @media (max-width:991px) {
        .order-accepted__header-block {
            padding: 18px 0
        }
    }
    .order-accepted__header-text1, .order-accepted__header-text2, .order-accepted__header-text3 {
        font-size: 27px;
        font-family: Doppio One, sans-serif;
        color: #fff;
        text-align: center;
        text-shadow: 2px 3.464px 0 rgba(3, 3, 3, .15)
    }
    .order-accepted__header-text2 {
        font-size: 37px
    }
    .order-accepted__header-text3 {
        font-size: 18px;
        font-family: Open Sans, sans-serif;
        padding-top: 15px
    }
    .order-accepted__body {
        background: #fff;
        padding: 55px 60px
    }
    @media (max-width:991px) {
        .order-accepted__body {
            padding: 25px 20px
        }
    }
    .order-accepted__divider {
        background: #eee;
        height: 1px;
        width: 100%;
        display: block;
        margin-top: 45px;
        margin-bottom: 40px
    }
    @media (max-width:991px) {
        .order-accepted__divider {
            margin-top: 25px;
            margin-bottom: 20px
        }
    }
    .order-accepted__question {
        font-size: 30px;
        font-family: Doppio One, sans-serif;
        text-transform: uppercase;
        margin-right: 30px
    }
    .order-accepted__answer, .order-accepted__question {
        display: inline-block;
        color: #444f5b;
        text-align: left
    }
    .order-accepted__answer {
        font-size: 16px;
        font-family: Open Sans, sans-serif;
        line-height: 1.625
    }
    .order-accepted__box {
        background: #fff;
        margin-top: 100px;
        padding: 0 20px 45px
    }
    .order-accepted__box .order-accepted__box-icon {
        text-align: center
    }
    .order-accepted__box .order-accepted__box-icon .icon {
        margin-top: -46px
    }
    @media (max-width:991px) {
        .order-accepted__box {
            margin-top: 61px;
            padding: 0 15px 25px
        }
    }
    @media (min-width:992px) {
        .order-accepted__box {
            min-height: 510px
        }
    }
    .order-accepted__box-title {
        font-size: 23px;
        font-family: Doppio One, sans-serif;
        color: #444f5b;
        text-transform: uppercase;
        line-height: 1.13;
        text-align: center;
        margin-top: 20px
    }
    .order-accepted__box-text {
        font-size: 15px;
        font-family: Open Sans, sans-serif;
        color: #444f5b;
        line-height: 1.625;
        margin-top: 10px
    }
    .order-accepted__textarea {
        background-color: #ebedf4;
        width: 100%;
        border: none;
        resize: none;
        height: 160px
    }
    @media (min-width:992px) {
        .order-accepted__send-btn {
            width: 200px
        }
    }
    .order-accepted__affiliate-title {
        font-family: Open Sans, sans-serif;
        font-weight: 600;
        font-size: 16px;
        color: #444f5b;
        text-align: center;
        margin-top: 25px
    }
    .order-accepted__affiliate-link {
        font-size: 15px;
        line-height: 15px;
        font-family: Open Sans, sans-serif;
        color: #444f5b;
        text-align: center;
        background: #ebedf4;
        margin-top: 18px;
        padding: 13px 0
    }
    .order-accepted__share-btn {
        margin-top: 20px;
        padding: 0;
        width: 100%
    }
    .order-accepted__share-btn.fb {
        background: #3b5998;
        border-color: #3b4f8e;
        color: #fff
    }
    .order-accepted__share-btn.gplus {
        background: #ef5c5c;
        border-color: #e05555;
        color: #fff
    }
    .order-accepted__share-btn.twitter {
        background: #11a7df;
        border-color: #119ccf;
        color: #fff
    }
    @media (max-width:767px) {
        .order-accepted__share-btn {
            margin-top: 10px
        }
    }
    .order-accepted__box-buttons {
        text-align: center
    }
    .order-accepted__box-buttons .button-medium {
        min-width: 80%
    }
    .order-accepted__box-divider {
        height: 1px;
        width: 100%;
        display: block;
        background: #eee;
        margin: 20px 0
    }
    .order-accepted__box-title2 {
        font-size: 20px;
        line-height: 20px;
        font-family: Doppio One, sans-serif;
        color: #444f5b;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 10px
    }
    .settings-info-row-cell {
        font-size: 15px;
        font-family: Arial, sans-serif;
        color: #444f5b;
        font-weight: 700;
        text-align: left;
        display: block;
        margin-left: 30px
    }
    .settings-info-row-cell:before {
        position: absolute;
        display: block;
        content: " ";
        top: 0;
        left: 45px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #d9dae3
    }

    .order-summary__continue-button {
        margin: 20px 15px 0;
        background-color: #ef5068;
        color: #fff;
        display: block;
        font-size: 17px;
        height: 43px;
        line-height: 40px;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        font-family: Doppio One, Sans-serif;
        border: 1px solid #ef8a8a;
        border-bottom: 3px solid #ef8a8a
    }
    .order-summary__continue-button:hover{
        cursor: pointer;
        text-decoration: none;
    }
    @media (max-width:767px) {
        .type-switch-container {
            padding-top: 0
        }
        .type-switch-container .button-switch {
            height: 35px;
            line-height: 35px;
            font-size: 15px
        }
        .upload-body .heading {
            font-size: 22px;
            text-align: center
        }
    }
    @media (min-width:768px) and (max-width:991px) {
        .upload-body .heading {
            font-size: 25px;
            text-align: center
        }
        .upload__need-help {
            text-align: center!important
        }
    }
    @media (min-width:992px) and (max-width:1199px) {
        .upload-body .heading {
            font-size: 25px
        }
    }
    @media (min-width:768px) {
        .upload__low-quality__icon {
            vertical-align: 10px
        }
        .upload__low-quality__text {
            position: relative;
            top: 5px;
            display: inline-block;
            line-height: 25px
        }
        .upload__low-quality__help {
            vertical-align: 10px
        }
    }
    @media (max-width:1199px) and (min-width:992px) {
        .order-history-body .button-new-order {
            padding: 0 5px
        }
        .order-history-body .button-new-order .icon {
            margin-right: 5px
        }
    }
    .order-summary {
        background: #5674f1;
        margin-bottom: 10px;
        padding-bottom: 30px
    }
    .order-summary .headertrans {
        border-color: #3e4753;
        color: #fff;
        line-height: 60px
    }
    .order-summary .headertrans h3 {
        font-family: Doppio One, sans-serif;
        font-size: 17px;
        font-weight: 400;
        margin: 0;
        text-align: center;
        text-transform: uppercase
    }
    .order-summary .table-row {
        margin: 0 20px;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        line-height: 35px;
        border-top: 1px solid #28718c
    }
    .order-summary .table-row .label {
        float: left
    }
    .order-summary .table-row .result {
        float: right
    }
    .order-summary>.table-row:last-child {
        border: none
    }
    .order-summary .order-total-price {
        margin: 5px 10px;
        padding: 12px 10px;
        border-top: none;
        background: #4e67ce
    }
    .order-summary .order-total-price .total-price {
        font-size: 30px
    }
    .order-summary .filename {
        line-height: 1.5;
        overflow: hidden;
        padding: 5px 0;
        text-overflow: ellipsis;
        white-space: nowrap
    }
    .order-summary .delivery-estimate {
        line-height: 1.5;
        font-size: 17px;
        padding-top: 10px;
        padding-bottom: 10px
    }
    .order-summary .delivery-estimate strong {
        font-size: 24px;
        font-weight: 400
    }
    .order-summary.discount-summary .table-row {
        line-height: 1.5;
        padding: 10px 0;
        text-align: center
    }
    .order-summary.discount-summary .table-row .current-discount {
        font-size: 45px;
        line-height: 1.2;
        text-align: center
    }
    .order-summary.discount-summary .receive-discount {
        font-size: 16px
    }
    .order-summary.discount-summary .receive-discount .result {
        margin-top: 5px
    }
    @media (max-width:1199px) {
        .order-summary .order-total-price .total-price, .order-summary .subtotal-price {
            float: right
        }
    }
    .order-settings .setting {
        background-color: #bdc3c7;
        border-bottom: 1px solid #e6e6e6;
        padding: 0 20px
    }
    .order-settings .options, .order-settings .setting-name {
        float: left;
        min-height: 50px;
        line-height: 50px
    }
    .order-settings .setting-name {
        color: #495563;
        font-family: Doppio One, sans-serif;
        font-size: 15px;
        width: 30%
    }
    .order-settings .setting-name .icon {
        margin: 0 20px -9px 0
    }
    .order-settings .setting-name .help-icon {
        margin: 0 0 -4px 10px
    }
    .order-settings .checkbox input:checked+label, .order-settings .checkbox input:not(:checked)+label {
        color: #444f5b;
        padding-left: 32px
    }
    .order-settings .options {
        width: 70%
    }
    .order-settings .options .option-label {
        font-size: 15px;
        color: #444f5b
    }
    .order-settings .options .help-icon {
        margin: 0 0 -5px 15px
    }
    .order-settings .options>div {
        padding: 0
    }
    .order-settings .options .form-dropdown {
        margin-top: 8px
    }
    @media (max-width:991px) {
        .order-settings .setting-name {
            width: 35%
        }
        .order-settings .options {
            width: 65%
        }
    }
    @media (max-width:767px) {
        .order-settings .setting {
            padding-top: 15px;
            padding-bottom: 15px
        }
        .order-settings .setting .options, .order-settings .setting .setting-name {
            width: 100%
        }
        .order-settings .setting .options {
            line-height: 30px
        }
        .order-settings .setting .form-dropdown {
            margin-top: 0
        }
    }
    .setting--opaque {
        opacity: .4
    }
    .order-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 4px;
        margin-bottom: 20px
    }
    .order-table td, .order-table th {
        border-bottom: 1px solid #fcfcfd;
        padding: 0 5px;
        text-align: center;
        vertical-align: middle
    }
    @media (max-width:767px) {
        .order-table td, .order-table th {
            font-size: 10px;
            padding: 0 5px
        }
    }
    @media (max-width:767px) {
        .order-table tfoot td, .order-table tfoot th {
            padding: 0 15px
        }
    }
    .order-table th {
        background-color: #495563;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        height: 50px;
        font-weight: 400
    }
    .order-table thead th:first-child {
        border-top-left-radius: 4px
    }
    .order-table thead th:last-child {
        border-top-right-radius: 4px
    }
    .order-table tfoot th {
        border: none;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px
    }
    .order-table tfoot .pagination {
        list-style: none;
        margin: 0;
        padding: 0
    }
    .order-table tfoot .pagination li {
        float: left;
        padding: 0
    }
    .order-table tfoot .pagination li a {
        color: #fff;
        font-size: 14px;
        text-decoration: none
    }
    .order-table tfoot .pagination li a:hover {
        text-decoration: underline
    }
    .order-table tfoot .pagination li.disabled {
        display: none
    }
    .order-table td {
        background-color: #fcfcfd;
        color: #495563;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        height: 80px
    }
    .order-table td a {
        color: #ee8a18;
        text-decoration: none
    }
    .order-table td a:hover {
        text-decoration: underline
    }
    .order-table td:first-child {
        border-left: 1px solid #d5d5dc
    }
    .order-table td:last-child {
        border-right: 1px solid #d5d5dc
    }
    .order-table tr:nth-child(2n) td {
        background-color: #eeeef5
    }
    .order-table tbody:last-child tr:last-child td {
        border-bottom: 1px solid #d5d5dc
    }
    .order-table tbody:last-child tr:last-child td:first-child {
        border-bottom-left-radius: 4px
    }
    .order-table tbody:last-child tr:last-child td:last-child {
        border-bottom-right-radius: 4px
    }
    .audio-table td, .audio-table th {
        padding: 10px 8px
    }
    .audio-table th .icon {
        margin: 0 0 -4px 5px
    }
    .audio-table .date, .audio-table .time {
        line-height: 1.2
    }
    .audio-table .time {
        color: #10617f;
        font-size: 23px
    }
    .audio-table .date {
        color: #ee8a18
    }
    .audio-table .filename {
        color: #10617f;
        margin-bottom: 5px
    }
    .audio-table .file-comment {
        color: #495563;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        text-align: justify
    }
    .audio-table .column-icon {
        text-align: center
    }
    .audio-table .column-filename {
        line-height: 1.2;
        width: 250px
    }
    .audio-table .feedback-rating {
        outline: none
    }
    @media screen and (max-width:767px) {
        .audio-table .file-comment, .audio-table thead {
            display: none
        }
        .audio-table .column-filename {
            width: auto
        }
        .audio-table .filename {
            display: inline;
            margin: 0;
            padding-left: 20px
        }
        .audio-table .column-icon {
            text-align: right
        }
        .audio-table .column-feedback {
            text-align: center
        }
        .audio-table .column-feedback .empty {
            text-align: right
        }
        .audio-table tbody:last-child tr:last-child td, .audio-table td, .audio-table td:first-child, .audio-table td:last-child {
            border: none
        }
        .audio-table tr {
            border: 1px solid #d5d5dc;
            border-bottom: none;
            border-radius: 4px;
            display: block;
            margin-bottom: 10px
        }
        .audio-table td {
            border-bottom: 1px solid #d5d5dc!important;
            display: block;
            font-size: 13px;
            height: auto;
            text-align: right
        }
        .audio-table td:before {
            content: attr(data-th);
            float: left;
            font-weight: 700;
            text-transform: uppercase
        }
    }
    .order-help-info, .upload-body .order-updates-recipients {
        color: #495563;
        font-family: Doppio One, sans-serif;
        font-size: 16px;
        margin: 20px 0
    }
    .order-help-info span {
        color: #6c727b
    }
    .order-help-info a {
        color: #ef5068;
        text-decoration: none
    }
    .order-help-info a:hover {
        text-decoration: underline
    }
    .order-preview-body .page-heading, .order-preview-body .social-share {
        margin: 0 0 15px
    }
    .order-preview-body .social-share {
        margin-top: 7px;
        text-align: right
    }
    @media (max-width:991px) {
        .order-preview-body .social-share {
            text-align: left
        }
    }
    .order-preview-body .social-button {
        display: inline-block;
        font-size: 0
    }
    .order-preview-body .social-label {
        color: #4b535c;
        display: inline-block;
        font-family: Doppio One, sans-serif;
        font-size: 15px;
        margin-right: 20px;
        position: relative;
        top: -4px
    }
    @media (max-width:767px) {
        .order-preview-body .social-label {
            display: block
        }
    }
    .order-preview-body .order-settings {
        border: 1px solid #d5d5d5;
        border-radius: 4px
    }
    .subtitles-formats-dropdown {
        vertical-align: top;
        display: inline-block
    }
    .btn-subtitles-formats, .btn-subtitles-formats:focus, .btn-subtitles-formats:hover {
        background-color: #495563;
        color: #fff;
        font-weight: 600;
        height: 27px;
        padding: 0 6px;
        border-radius: 4px
    }
    .loyalty-sidebar-box .headertrans {
        height: auto;
        line-height: 20px;
        padding: 15px 0
    }
    .cost-estimate-body .order-settings {
        border: 1px solid #d5d5d5;
        border-radius: 4px
    }
    .cost-estimate-body .order-settings .form-control {
        display: inline-block;
        width: 60px
    }
    .cost-estimate-body .order-settings .form-control+label {
        color: #444f5b;
        cursor: pointer;
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        line-height: 22px;
        padding-left: 5px
    }
    .cost-estimate-body .button-order .icon {
        margin-right: 10px
    }
    .s2t_sample_center {
        height: 100%;
        margin: 50px auto 0;
        width: 92%
    }
    .s2t_sample_caption {
        color: #333;
        font-family: Doppio One, sans-serif;
        font-size: 17px;
        padding-bottom: 14px
    }
    .s2t_sample_mp3 {
        width: 100%
    }
    #if1, #if2, #if3, #if4 {
        border: 1px solid #8a8a8a;
        margin-top: 16px;
        width: 100%
    }
    .sample {
        display: block;
        margin-bottom: 35px
    }
    .modal_hire {
        top: 25%;
        left: -10%
    }
    .modal_hire_1 {
        background-color: #ee8d1e!important;
        text-align: center!important
    }
    @media only screen and (max-device-width:520px) {
        .modal_hire_1 {
            margin-left: 60px
        }
    }
    @media only screen and (min-device-width:521px) and (max-device-width:640px) {
        .modal_hire_1 {
            margin-left: 70px
        }
    }
    @media only screen and (min-device-width:641px) and (max-device-width:939px) {
        .modal_hire_1 {
            margin-left: 80px
        }
    }
    @media only screen and (min-device-width:940px) {
        .modal_hire_1 {
            width: 800px!important;
            padding-top: 0;
            background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/apply-now/modalHire.png);
            background-position: 0!important
        }
    }
    .modal_hire_2 {
        padding-top: 60px
    }
    .modal_hire_3 {
        color: #fff!important;
        font-size: 25px!important;
        line-height: 40px!important
    }
    .modal_hire_4 {
        color: #fff!important;
        font-size: 18px!important;
        margin-left: 10%;
        margin-right: 10%;
        line-height: 30px!important
    }

    .languages__label {
        background-color: #ebedf4;
        font-size: 16px;
        line-height: 16px;
        border-radius: 4px;
        padding: 9px 10px;
        color: #444f5b;
        margin-top: 4px
    }
    input.translations__counter::-webkit-inner-spin-button, input.translations__counter::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }
    .calc-select-lang {
        background-color: #f4f4f4
    }
    .subtitling__title {
        font-size: 23px;
        color: #495563;
        font-family: Doppio One, sans-serif
    }
    .subtitling__text {
        font-size: 17px;
        color: #7a7f85
    }
    @media (min-width:992px) and (max-width:1199px) {
        .subtitling__title {
            font-size: 21px
        }
    }
    @media (max-width:991px) {
        .subtitling__title {
            margin-top: 10px;
            font-size: 16px;
            text-align: center
        }
        .subtitling__text {
            margin-bottom: 20px;
            text-align: center;
            font-size: 12px
        }
    }
    .page__transcriptions__title {
        font-size: 28px;
        color: #fff;
        font-family: Doppio One, sans-serif
    }
    .page__transcriptions__point {
        position: relative;
        padding-left: 45px;
        color: #fff;
        font-size: 16px;
        line-height: 26px
    }
    .page__transcriptions__point img {
        position: absolute;
        left: 0
    }

    .quiz .question {
        background-color: #d9dbe3;
        border-bottom: 1px solid #ebedf4;
        padding: 0 20px 17px
    }
    .quiz .question-name {
        color: #495563;
        font-family: Doppio One, sans-serif;
        font-size: 15px;
        line-height: 15px;
        padding: 17px 0
    }
    .quiz .question-name .icon {
        margin: 0 20px -9px 0
    }
    .quiz .question-name .help-icon {
        margin: 0 0 -4px 10px
    }
    .quiz .checkbox input:checked+label, .quiz .checkbox input:not(:checked)+label {
        color: #444f5b;
        padding-left: 32px
    }
    .loyalty-page .presentation-section {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/loyalty/header-bg.png)
    }
    .loyalty__button-inline {
        display: inline-block;
        width: auto;
        padding-left: 40px;
        padding-right: 40px
    }
    .loyalty__table-icon-inline {
        display: inline-block
    }
    .loyalty__top-border {
        border-top: 1px solid #ddd
    }
    .loyalty__title-text {
        font-size: 30px;
        text-transform: uppercase
    }
    .loyalty__title-text, .loyalty__title-text2 {
        color: #555;
        font-family: Doppio One, sans-serif
    }
    .loyalty__title-text2 {
        font-size: 20px;
        margin-top: 50px;
        margin-bottom: 35px
    }
    .loyalty__text {
        font-size: 16px;
        color: #444f5b
    }
    .loyalty__top {
        height: 50px
    }
    .loyalty__bottom {
        height: 90px
    }
    .loyalty__team_img {
        width: 100%;
        margin-top: 34px
    }
    .loyalty__img-text {
        color: #444f5b;
        font-size: 16px;
        text-align: justify;
        margin-top: 25px
    }
    .loyalty__img-link {
        color: #555;
        font-size: 16px;
        font-family: Doppio One, sans-serif;
        text-decoration: none
    }
    .loyalty__img-link-icon {
        display: inline-block;
        width: 7px;
        height: 12px;
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/transcription-services-uk/arrow.png)
    }
    .loyalty__main-section {
        padding-bottom: 120px;
        border-bottom: 1px solid #ddd
    }
    .loyalty__small_title {
        font-weight: 600;
        font-size: 17px;
        color: #444f5b
    }
    .loyalty__question_text {
        color: #444f5b;
        font-size: 17px;
        margin-top: 28px
    }
    .loyalty__question_block {
        background-color: #ebedf4;
        padding: 40px 35px
    }
    .loyalty__answer_block {
        border: 1px solid #ddd;
        padding: 40px 35px
    }
    .loyalty__blue_container {
        background-color: #10617f;
        padding-top: 80px;
        padding-bottom: 90px;
        text-align: center
    }
    .loyalty__blue_container .loyalty__title_for_blue {
        font-family: Doppio One, sans-serif;
        font-size: 23px;
        color: #fff;
        line-height: 23px
    }
    .loyalty__blue_container .loyalty__caption_in_blue {
        background-image: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/loyalty/gotranscript.png);
        width: 140px;
        height: 31px;
        margin-top: 20px;
        display: inline-block
    }
    .loyalty__orange_container {
        background-color: #ef5068;
        padding-top: 80px;
        padding-bottom: 90px;
        text-align: center
    }
    .loyalty__orange_container .loyalty__title_for_orange {
        font-family: Doppio One, sans-serif;
        font-size: 23px;
        color: #fff;
        line-height: 23px
    }
    .loyalty__explanation-text-above {
        font-size: 20px;
        width: 570px;
        color: #444f5b;
        display: inline-block
    }
    .loyalty__explanation-block {
        margin-top: 110px;
        border: 1px solid #ebedf4;
        color: #444f5b;
        border-bottom: none;
        height: 496px
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half {
        text-align: center;
        width: 50%;
        float: left
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half.loyalty__explanation_half-right {
        color: #fff
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation_half-title {
        font-family: Doppio One, sans-serif;
        font-size: 30px;
        height: 30px;
        padding: 0;
        line-height: 30px
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation_half-title2 {
        font-family: Doppio One, sans-serif;
        font-size: 21px;
        height: 30px;
        line-height: 30px
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation_icon {
        display: inline-block;
        margin-top: -46px;
        margin-bottom: 20px
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation-row {
        width: 100%;
        height: 105px;
        display: block;
        padding: 30px 0;
        margin-top: 10px
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation-row.loyalty__explanation-row-first, .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation-row:first-child {
        margin-top: 30px;
        text-align: center
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation-row.loyalty__explanation-row-left {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/loyalty/left.png) no-repeat #ebedf4;
        background-position-x: right
    }
    .loyalty__explanation-block .loyalty__explanation-block-inner .loyalty__explanation_half .loyalty__explanation-row.loyalty__explanation-row-right {
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/loyalty/right.png) no-repeat #ef5068;
        color: #fff
    }
    .loyalty__table-subtitle {
        font-size: 17px;
        color: #444f5b
    }
    ul.loyalty__points {
        list-style: none;
        margin-left: 0;
        padding-left: 0
    }
    ul.loyalty__points li {
        color: #444f5b;
        font-weight: 600;
        font-size: 17px;
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/loyalty/arrow-bullet.png) no-repeat;
        padding-left: 29px
    }
    .loyalty__container {
        padding: 75px 0
    }
    .loyalty__container .loyalty__resources-title {
        font-family: Doppio One, sans-serif;
        font-size: 23px
    }
    .loyalty__button-orange {
        border-bottom: 2px solid #d89d0f;
        background: #ef5068;
        color: #fff
    }
    .loyalty__table {
        width: 100%
    }
    .loyalty__table, .loyalty__table tbody {
        border: none;
        margin: 0;
        padding: 0
    }
    .loyalty__table td, .loyalty__table th {
        font-size: 16px;
        height: 51px;
        padding: 0;
        text-align: center;
        vertical-align: middle
    }
    .loyalty__table th {
        font-size: 19px;
        background: #e68800;
        border: none;
        color: #fff;
        font-family: Doppio One, sans-serif;
        font-weight: 400
    }
    .loyalty__table th:first-child {
        border-top-left-radius: 3px
    }
    .loyalty__table th:last-child {
        border-top-right-radius: 3px
    }
    .loyalty__table.loyalty__table-grey th {
        background: #4b535c
    }
    .loyalty__table td {
        border: none;
        border-top: 1px solid #ebedf4;
        background: #ebedf4;
        color: #a9abb7;
        font-family: Arial, sans-serif
    }
    .loyalty__table td:first-child {
        padding: 0 15px
    }
    .loyalty__table td:nth-child(2) {
        text-align: left
    }
    .loyalty__table td:last-child {
        text-align: right;
        padding-right: 15px;
        color: #22536e;
        font-size: 19px
    }
    .loyalty__table tr {
        border-top: 2px solid #fff
    }
    .loyalty__table tr:last-child td:first-child {
        border-bottom-left-radius: 3px
    }
    .loyalty__table tr:last-child td:last-child {
        border-bottom-right-radius: 3px
    }
    .loyalty__table tr:first-child:before, .loyalty__table tr:nth-child(2):before {
        height: 0
    }
    @media (max-width:767px) {
        .loyalty__table td, .loyalty__table th {
            font-size: 12px
        }
        .loyalty__table tr:before {
            left: 8%;
            width: 84%
        }
    }

    table.tool-table {
        width: 100%
    }
    table.tool-table tr th {
        font-size: 14px;
        height: 51px;
        padding: 0;
        text-align: center;
        vertical-align: middle;
        background: #495563;
        border: none;
        color: #fff;
        font-family: Doppio One, sans-serif;
        font-weight: 400
    }
    table.tool-table tr th:first-child {
        border-top-left-radius: 3px
    }
    table.tool-table tr th:last-child {
        border-top-right-radius: 3px
    }
    table.tool-table tr td {
        font-size: 14px;
        height: 51px;
        padding: 0;
        text-align: center;
        vertical-align: middle;
        border: none;
        border-top: 1px solid #ebedf4;
        background: #ebedf4;
        font-family: Arial, sans-serif;
        color: #686a74;
        border-top: 1px solid #dfe1e8
    }
    table.tool-table tr:hover td {
        background: #dfe1e8
    }
    .contact__container {
        padding: 50px 0
    }
    .contact__block {
        background: #fff;
        padding: 55px 50px 70px
    }
    @media (max-width:767px) {
        .contact__block {
            padding: 10px
        }
    }
    .contact__block--grey {
        background: #ebedf4
    }
    .contact__help-title {
        font-family: Doppio One, sans-serif;
        color: #444f5b;
        font-size: 23px;
        font-weight: 500;
        margin: 0
    }
    .contact__radios {
        margin-top: 15px
    }
    .contact__radios .radio {
        margin-top: 10px
    }
    .contact__radios .radio input:checked+label:before, .contact__radios .radio input:not(:checked)+label:before {
        background: #ef5068;
        border: none
    }
    .contact__radios .radio input:not(:checked)+label:after {
        background-color: #fff;
        border-radius: 50%;
        content: "";
        height: 12px;
        left: 5px;
        top: 5px;
        width: 12px;
        opacity: 1;
        transform: scale(1)
    }
    .contact__radios .radio input:checked+label:after {
        opacity: 0;
        transform: scale(0)
    }
    .contact__input-group {
        position: relative
    }
    .contact__input-group:not(:first-of-type) {
        margin-top: 10px
    }
    .contact__input-group label {
        position: absolute;
        font-family: Open Sans, sans-serif;
        color: #444f5b;
        font-size: 15px;
        height: 60px;
        line-height: 60px;
        left: 10px;
        font-weight: 600
    }
    .contact__input-group input, .contact__input-group textarea {
        -webkit-box-shadow: 0 0 0 30px #ebedf4 inset;
        background-color: #ebedf4;
        font-family: Open Sans, sans-serif;
        font-size: 15px;
        line-height: 60px;
        padding: 0 0 0 100px;
        color: #444f5b;
        border: none;
        width: 100%;
        resize: vertical
    }
    .contact__input-group input:focus, .contact__input-group textarea:focus {
        outline-width: 0;
        outline: none
    }
    .contact__input-group textarea {
        padding-top: 21px;
        line-height: 18px
    }
    .contact__block--grey .contact__input-group input, .contact__block--grey .contact__input-group textarea, .contact__block--grey .contact__select {
        -webkit-box-shadow: none;
        background-color: #fff
    }
    .contact__block--grey .contact__select {
        margin-top: 10px;
        border: none
    }
    .contact__select {
        width: 100%;
        border: 1px solid #ebedf4;
        border-radius: 0;
        padding: 20px;
        font-size: 15px;
        line-height: 15px;
        color: #444f5b;
        font-family: Open Sans, sans-serif
    }
    .contact__title {
        font-family: Doppio One, sans-serif;
        color: #444f5b;
        font-size: 30px;
        line-height: 30px;
        margin: 0;
        text-align: center
    }
    .contact__sub-get-in-touch {
        font-family: Open Sans, sans-serif;
        color: #444f5b;
        margin-top: 20px;
        font-size: 16px;
        line-height: 16px;
        margin-bottom: 70px;
        text-align: center
    }
    .contact__custom-title {
        color: #444f5b;
        font-family: Doppio One, sans-serif;
        font-weight: 500;
        font-size: 30px;
        line-height: 30px
    }
    .contact__text {
        font-family: Open Sans, sans-serif;
        font-size: 16px;
        line-height: 30px;
        color: #444f5b
    }

    .offer_for_schools__top-grey-title {
        margin-top: 25px;
        color: #444f5b;
        font-size: 17px;
        font-family: Doppio One, sans-serif
    }
    .fb_iframe_widget span {
        float: left
    }
    .as-seen div {
        display: inline-block;
        margin-left: 30px;
        vertical-align: middle
    }
    .as-seen div:first-child {
        margin-left: 0;
        font-family: Doppio One, sans-serif;
        color: #999;
        font-size: 15px
    }
    @media (max-width:1199px) {
        .as-seen div {
            margin-left: 17px
        }
    }
    .accurate__top {
        height: 110px
    }
    .accurate__title {
        margin: 0;
        font-family: Doppio One, sans-serif;
        color: #444f5b;
        font-size: 30px;
        line-height: 32px;
        text-align: left;
        text-transform: uppercase
    }
    .accurate__title-text {
        font-size: 20px
    }
    .accurate__text, .accurate__title-text {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        color: #444f5b;
        text-align: justify
    }
    .accurate__text {
        font-size: 16px
    }
    .accurate__line {
        margin: 40px 0;
        border-top: 1px solid #ebedf4
    }
    .accurate__triangle {
        position: relative
    }
    .accurate__triangle:after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -26px;
        margin: 0 auto;
        display: block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 26px 34px 0;
        border-color: #fff transparent transparent
    }
    .accurate__triangle-grey:after {
        border-color: #ebedf4 transparent transparent
    }
    .accurate__triangle-orange:after {
        border-color: #ef5068 transparent transparent
    }
    .accurate__triangle-gray:after {
        border-color: #ebedf4 transparent transparent
    }
    .accurate__signature {
        margin-top: 30px
    }
    .accurate__bottom {
        height: 90px
    }
    @media (min-width:768px) and (max-width:991px) {
        .accurate__top {
            height: 40px
        }
        .accurate__icon {
            margin: 0 auto!important
        }
        .accurate__title {
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center
        }
        .accurate__title-text {
            font-size: 16px
        }
        .accurate__text {
            margin-top: 15px
        }
        .accurate__signature {
            float: right;
            margin-top: 15px
        }
        .accurate__bottom {
            height: 50px
        }
    }
    @media (max-width:767px) {
        .accurate__top {
            height: 40px
        }
        .accurate__title {
            margin-bottom: 20px;
            text-align: center
        }
        .accurate__title-text {
            font-size: 16px
        }
        .accurate__text {
            margin-top: 15px
        }
        .accurate__bottom {
            height: 30px
        }
        .accurate__triangle:after {
            display: none
        }
    }
    .homepage3__container {
        padding: 75px 0 115px;
        background: #ebedf4
    }
    .homepage3__title {
        margin: 0 0 30px;
        font-size: 23px;
        font-weight: 400;
        line-height: 28px;
        font-family: Doppio One, sans-serif;
        color: #444f5b;
        text-align: center;
        text-transform: uppercase;
        min-height: 56px
    }
    .homepage3__text {
        margin-bottom: 35px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: #555;
        text-align: justify;
        text-align-last: center
    }
    @media (max-width:767px) {
        .homepage3__container {
            padding: 40px 0
        }
        .homepage3__title {
            margin-top: 50px;
            margin-bottom: 6px;
            font-size: 20px
        }
        .homepage3__text {
            margin-bottom: 20px
        }
    }
    @media (min-width:768px) and (max-width:991px) {
        .homepage3__container {
            padding: 40px 0
        }
        .homepage3__title {
            margin-top: 60px;
            margin-bottom: 6px;
            font-size: 20px
        }
        .homepage3__text {
            margin-bottom: 20px
        }
    }
    @media (min-width:992px) and (max-width:1199px) {
        .homepage3__text {
            min-height: 66px
        }
    }
    @media (min-width:1200px) {
        .homepage3__text {
            min-height: 66px
        }
    }
    .bg-light-grey {
        background-color: #ebedf4
    }
    .dashboard__box__button {
        display: block;
        height: 42px;
        line-height: 42px;
        border-bottom: 2px solid #d89d0f;
        border-radius: 3px;
        background: #ef5068;
        color: #fff;
        font-family: Doppio One, sans-serif;
        font-size: 17px;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        transition: .3s
    }
    .dashboard__box__button:hover {
        opacity: .8
    }
    .students__service-type {
        display: inline-block;
        padding: 0 9px;
        margin-bottom: 4px;
        font-size: 16px;
        line-height: 38px;
        color: #444f5b;
        background-color: #ebedf4;
        border-radius: 4px
    }
    .focus-group__text, .focus-group__text2 {
        font-family: Open Sans, sans-serif;
        color: #fff
    }
    .focus-group__text {
        font-size: 16px;
        text-align: justify
    }
    .focus-group__text2 {
        font-size: 20px
    }
    .nvivo__title {
        font-family: Doppio One, sans-serif;
        font-weight: 500;
        font-size: 30px;
        color: #48535e;
        text-align: center
    }
    .nvivo__table td, .nvivo__table th {
        padding: 30px;
        text-align: left
    }
    .nvivo__table th {
        color: #fff;
        font-size: 24px;
        background: #10617f
    }
    .nvivo__table td, .nvivo__table th {
        font-family: Doppio One, sans-serif;
        font-weight: 500
    }
    .nvivo__table td {
        font-size: 18px;
        color: #4e5864;
        background: #ebedf4
    }
    ul.nvivo__list {
        list-style: none;
        margin-left: 0;
        padding-left: 0
    }
    ul.nvivo__list li {
        color: #4e5864;
        font-weight: 500;
        font-size: 17px;
        font-family: Open Sans, sans-serif;
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/loyalty/arrow-bullet.png) no-repeat;
        background-position-y: 3px;
        padding-left: 29px
    }
    .nvivo__hr {
        border: none;
        border-top: 1px solid #ebedf4
    }
    @media (min-width:992px) {
        .col-md-56perc {
            width: 56%
        }
    }
    .singapore__order-text {
        font-weight: 500;
        font-size: 23px;
        line-height: 26px;
        color: #fff;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto
    }
    @media (max-width:767px) {
        .text-center-xs {
            text-align: center
        }
    }
    @media (max-width:767px) {
        .width-100-xs {
            width: 100%
        }
    }
    .academic__title {
        font-size: 44px;
        font-family: Doppio One, sans-serif;
        color: #0e5772;
        text-align: center;
        margin: 0
    }
    .academic__subtitle {
        font-size: 18px;
        font-family: Open Sans, sans-serif;
        color: #333;
        line-height: 1.667;
        text-align: center;
        margin: 0
    }
    .academic__categories {
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 15px
    }
    .academic__categories .academic__category {
        display: inline-block;
        border-radius: 4px;
        background: #ebedf4;
        font-size: 18px;
        font-family: Open Sans, sans-serif;
        color: #333;
        line-height: 18px;
        padding: 10px;
        text-align: center;
        margin-left: 3px
    }
    .academic__categories .academic__category:last-of-type {
        margin-left: 0
    }
    .academic__categories .academic__category:before {
        display: inline-block;
        width: 17px;
        height: 12px;
        content: " ";
        background: url(<?php echo ARCHIVO; ?>transcription-audio/img/pages/services/tick.png);
        margin-right: 5px
    }
    .upload-review__block {
        margin-top: 15px;
        text-align: center
    }
    .upload-review__points {
        font-family: Doppio One, sans-serif;
        font-size: 18px;
        line-height: 20px;
        color: #fff;
        vertical-align: middle;
        margin-left: 5px
    }
    .upload-review__vertical-line {
        display: inline-block;
        height: 20px;
        width: 1px;
        background: #28718c;
        vertical-align: middle;
        margin-left: 10px;
        margin-right: 10px
    }
    .upload-review__reviews-link {
        font-family: Doppio One, sans-serif;
        font-size: 14px;
        line-height: 20px;
        color: #fff;
        vertical-align: middle;
        text-decoration: none
    }
    .upload-review__star {
        display: inline-block;
        vertical-align: middle
    }
    #reviewsModal .modal-header {
        text-align: right;
        border-bottom: none
    }
    #reviewsModal .filtering {
        margin-top: 30px
    }
    .reviews-modal-button {
        font-size: 16px;
        font-family: Doppio One, sans-serif;
        color: #0b4459;
        text-decoration: none;
        margin-right: 35px
    }
    .reviews-modal-button.collapsed {
        color: #999
    }
    .reviews-modal__title {
        font-size: 30px;
        font-family: Doppio One, sans-serif;
        color: #0b4459;
        text-transform: uppercase;
        margin-top: 90px
    }
    .upload-done__modal-dialog {
        position: absolute;
        width: 100%;
        top: calc(50% - 140px);
        text-align: center
    }
    .upload-done__modal-content {
        display: inline-block;
        height: 240px;
        background: #10617f;
        box-shadow: none;
        border: none;
        padding: 0 10px 15px
    }
    .upload-done__modal-contentotro {
        display: inline-block;
        height: 350px;
        background: #10617f;
        box-shadow: none;
        border: none;
        padding: 0 10px 15px
    }
    .upload-done__modal-contentenlaceotro {
        display: inline-block;
        height: 350px;
        background: #10617f;
        box-shadow: none;
        border: none;
        padding: 0 10px 15px
    }
    .upload-done__icon-top {
        margin-top: -46px;
        text-align: center
    }
    .upload-done__modal-title {
        font-family: Doppio One, sans-serif;
        font-size: 30px;
        line-height: 30px;
        color: #fff;
        margin-left: 35px
    }
    .upload-done__modal-title-container {
        position: relative;
        display: inline-block
    }
    .upload-done__modal-icon {
        position: absolute;
        left: 0;
        top: 2px
    }
    .upload__complexity__tooltip-orange+.tooltip .tooltip-inner {
        padding: 2px!important
    }
    .tooltip1 {
      position: relative;
      display: inline-block;
  }

  .tooltip1 .tooltiptext1 {
      visibility: hidden;
      width: 450px;
      background-color: #5674F1;
      color: #fff;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      text-align: justify;
      border-radius: 6px;
      padding: 10px 15px;
      position: absolute;
      line-height: 110%;
      z-index: 1000;
      bottom: 125%;
      left: 50%;
      margin-left: -225px;
      opacity: 0;
      transition: opacity 0.3s;
  }

  .tooltip1 .tooltiptext1::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #5674F1 transparent transparent transparent;
  }

  .tooltip1:hover .tooltiptext1 {
      visibility: visible;
      opacity: 1;
  }
  div#Presupuesto{
    display: inline;

  }
  input#inputpresu{
    display: inline;
    border-radius: 7px;

  }
  button#btnpresu{
    color: #fff;
    font-size: 18px;
    display: inline;
  }
</style>
</head>
<body class="">
    <div class="upload-body">
        <div class="containertrans">
                    <div id="btnPresuNone" class="button-medium button-paste button-icon js-paste-url-button" data-toggle="popover" data-placement="bottom" data-class="textarea-popup" data-target="#uploadByPre">
                        <span class="icon prices-icon"></span>
                        Presupuesto sin archivos
                    </div>
            <div class="upload-header">
                <div id="uploadByURL" style="display:none">
                    <textarea class="form-control js-links" placeholder="Ingresar una URL por linea
                    - YouTube
                    - Vimeo"></textarea>
                    <div class="btn btn-default btn-xs pull-left js-close-popover" style="margin-top: 10px;">Cerrar</div>
                    <div class="button-medium pull-right js-add-links">Añadir</div>
                    <div class="button-medium pull-right js-cancel-upload" style="display: none;">0% - cancel</div>
                    <div class="clearfixtrans"></div>
                </div>
            </div>
            <div class="upload-header">
                <div id="uploadByPre" style="display:none">
                    <div id="Presupuesto">
                        <label>
                            <input type="text" id="inputpresu" name="Presupuesto" placeholder="Ingrese los minutos minimo 30" value="30" onkeyUp="return ValNumero(this);">
                            <span class="icon help-icon tooltip1">
                                <span class="tooltiptext1">Obtener presupuesto ingresando los minutos del tiempo de los archivos que desea Transcribir</span>
                            </span>
                            <button id="btnpresu" onclick="clickPresupuesto()"><strong>Añadir</strong></button>
                        </label>
                    </div>
                    <div class="clearfixtrans"></div>
                </div>
            </div>
            <div class="row lg-row-equal-height">
                <div class="col-xs-12 col-lg-9 js-min-height">
                    <div class="js-dismissible-alert">
                    </div>
                    <script type="text/html" class="js-dismissible-alert-template">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          Ha habido <b>problema</b>::filename_text::. Intente convertir el archivo a otro formato o si le está fallando esta calculadora, por favor utilice la vieja versión <a href="https://transcripciones.net/calcular-precio-alternativo/">Calculadora alternativa</a>.
                      </div>
                  </script>
                  <div class="collapse js-top-upload-buttons xs-margin-bottom-0" style="margin-bottom: 20px;">
                    <div class="button-medium orange button-upload button-icon fileinput-button xs-margin-bottom-5 js-upload-files-button">
                        <span class="icon upload-icon"></span>
                        Subir archivos
                    </div>
                    <div id="top-paste-url" class="button-medium button-paste button-icon js-paste-url-button" data-toggle="popover" data-placement="bottom" data-class="textarea-popup" data-target="#uploadByURL">
                        <span class="icon link-icon"></span>
                        Pegar URL
                    </div>
                    <div id="btnPresuNone2" class="button-medium button-paste button-icon js-paste-url-button" data-toggle="popover" data-placement="bottom" data-class="textarea-popup" data-target="#uploadByPre">
                        <span class="icon prices-icon"></span>
                        Presupuesto sin archivos
                    </div>
                    <div class="clearfixtrans"></div>
                </div>
                <div class="upload-table files-table">
                    <div class="headertrans clearfixtrans">
                        <div class="columntrans column-remove hidden-xs collapse js-table-heading"></div>
                        <div class="columntrans column-title collapse hidden-xs js-table-heading">Nombre</div>
                        <div class="columntrans column-status collapse hidden-xs js-table-heading">Estado</div>
                        <div class="columntrans column-play collapse hidden-xs js-table-heading">Reproducir</div>
                        <div class="columntrans column-trim collapse hidden-xs js-table-heading">Recortar</div>
                        <div class="columntrans column-comment collapse hidden-xs js-table-heading">Comentario</div>
                        <div class="columntrans column-length collapse hidden-xs js-table-heading">Duración</div>
                    </div>
                    <div class="files-list js-file-containertrans">
                    </div>
                    <div class="files-list js-no-files">
                        <div class="uploaded-file no-files" style="position: relative; padding-top: 50px; text-align: center;">
                            <div style="line-height: 1.5;">
                                <input class="js-dragarea js-fileupload js-original-fileupload" type="file" name="files[]" multiple style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; width: 100%; opacity: 0;">
                                <div class="button-medium orange button-upload button-icon fileinput-button xs-margin-0 js-upload-files-button" style="float: none; margin-right: 10px;">
                                    <span class="icon upload-icon"></span>
                                    Subir archivos
                                </div>
                                <span class="xs-line-height-inherit" style="display: inline-block; line-height: 43px; overflow: hidden;"> o </span>
                                <div class="button-medium button-paste button-icon xs-margin-0 js-paste-url-button" data-toggle="popover" data-placement="bottom" data-class="textarea-popup" data-target="#uploadByURL" style="position: relative; float: none; overflow: hidden; margin-right: 0; margin-left: 10px;">
                                    <span class="icon link-icon"></span>
                                    Pegar URL
                                </div>
                                <br class="hidden-xs">
                                <div class="hidden-xs" style="margin-top: 10px;">Arrastrar y soltar archivos para subir</div>
                                <div style="height: 50px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="js-calculator order-settings" style="display:none;">
                        <div class="setting"  >
                            <div class="setting-name">
                                <span class="icon text-format-icon"></span>
                                Tipo de transcripción
                            </div>
                            <div class="options">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="checkbox radio">
                                        <input class="js-text-format js-autoupdate" type="radio" id="clean_verbatim" name="text_format" value="clean_verbatim"  checked >
                                        <label for="clean_verbatim">Transcripción natural</label>
                                        <a href='https://transcripciones.net/tipos-de-transcripciones/' target='_blank'><span class="icon help-icon tooltip1">
                                          <span class="tooltiptext1">Puede ver un ejemplo haciendo click en el interrogante</span></span></a>
                                      </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="checkbox radio">
                                        <input class="js-text-format js-autoupdate" type="radio" id="full_verbatim" name="text_format" value="full_verbatim" >
                                        <label for="full_verbatim">Transcripción literal</label>
                                        <a href='https://transcripciones.net/tipos-de-transcripciones/' target='_blank'><span class="icon help-icon tooltip1">
                                          <span class="tooltiptext1">Puede ver un ejemplo haciendo click en el interrogante</span></span></a>
                                      </div>
                                  </div>
                              </div>    </div>
                              <div class="setting">
                                <div class="setting-name turnaround-time">
                                    <span class="icon turnaround-icon"></span>
                                    Plazo de entrega
                                    <span class="icon help-icon tooltip1">
                                        <span class="tooltiptext1">Los plazos de entrega mostrados se estiman teniendo en cuenta que el pago se recibe hoy</span></span>
                                    </div>
                                    <div class="options clearfixtrans">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="checkbox radio">
                                                <input class="js-autoupdate" type="radio" id="hours_12" name="tat" value="horas" >
                                                <label for="hours_12">En 24 Horas</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="checkbox radio">
                                                <input class="js-autoupdate" type="radio" id="days_1" name="tat" value="express" >
                                                <label for="days_1">Express</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="checkbox radio">
                                                <input class="js-autoupdate" type="radio" id="days_3" name="tat" value="rapido" >
                                                <label for="days_3">Rápido</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="checkbox radio">
                                                <input class="js-autoupdate" type="radio" id="days_5" name="tat" value="normal"  checked >
                                                <label for="days_5">Normal</label>
                                            </div>
                                        </div>
    <!--<div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_1" name="tat" value="days_1" >
            <label for="days_1">1 Day</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_2" name="tat" value="days_2" >
            <label for="days_2">2 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_3" name="tat" value="days_3" >
            <label for="days_3">3 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_4" name="tat" value="days_4" >
            <label for="days_4">4 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_5" name="tat" value="days_5"  checked >
            <label for="days_5">5 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_6" name="tat" value="days_6" >
            <label for="days_6">6 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_7" name="tat" value="days_7" >
            <label for="days_7">7 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_8" name="tat" value="days_8" >
            <label for="days_8">8 Days</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3">
        <div class="checkbox radio">
            <input class="js-autoupdate" type="radio" id="days_9" name="tat" value="days_9" >
            <label for="days_9">9 Days</label>
        </div>
    </div>-->
</div></div>
<div class="setting" id="turnaround-time-setting-prices" style="background: #ebedf4;margin-top: -1px;">
    <div class="setting-name">
        <span class="icon prices-icon"></span>
        Precio/min sin IVA
    </div>
    <div class="options clearfixtrans">
        <div class="col-xs-12 col-sm-3">
            <label for="hours_12" class="settings-info-row-cell js-tat-price" data-tat-id="83">1,16€</label>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="days_1" class="settings-info-row-cell js-tat-price" data-tat-id="35">0,99€</label>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="days_3" class="settings-info-row-cell js-tat-price" data-tat-id="37">0,83€</label>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="days_5" class="settings-info-row-cell js-tat-price" data-tat-id="39">0,66€</label>
        </div>
    </div>
    <div class="setting-name">
        <span class="icon turnaround-icon"></span>
        Fecha de entrega
    </div>
    <div class="options clearfixtrans">
        <div class="col-xs-12 col-sm-3">
            <label for="hours_12" class="settings-info-row-cell js-tat-price" id="Fecha_24H" data-tat-id="83"></label>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="days_1" class="settings-info-row-cell js-tat-price" id="Fecha_express" data-tat-id="35"></label>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="days_3" class="settings-info-row-cell js-tat-price" id="Fecha_rapida" data-tat-id="37"></label>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="days_5" class="settings-info-row-cell js-tat-price" id="Fecha_normal" data-tat-id="39"></label>
        </div>
    </div>
</div>
<div class="setting">
    <div class="setting-name speakers">
        <span class="icon speakers-icon"></span>
        <span class="upload__low-quality__text">
            Identificación de <span class="hidden-xs"><br>interlocutores</span>
        </span>
    </div>
    <div class="options clearfixtrans">
        <div class="col-xs-12 col-sm-4">
            <div class="checkbox radio">
                <input class="js-autoupdate" type="radio" id="max_2" name="speakers" value="no"  checked >
                <label for="max_2">No</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="checkbox radio">
                <input class="js-autoupdate" type="radio" id="min_3" name="speakers" value="si" >
                <label for="min_3">Sí</label>
                <span class="icon help-icon tooltip1">
                  <span class="tooltiptext1">Debe identificar a los interlocutores en los comentarios <span class="icon comment-icon"></span> del audio con minuto exacto en el que interviene y el nombre. Ejemplo: 0:12:45 Juan</a></span>
              </div>
          </div>
      </div></div>
      <div class="setting">
        <div class="setting-name language">
            <span class="icon low-quality-icon upload__low-quality__icon"></span>
            <span class="upload__low-quality__text">
                Audio NO profesional<span class="hidden-xs"><br>y/o Acento pesado</span>
            </span>
            <span class="icon help-icon tooltip1">
                <span class="tooltiptext1">Cualquier audio no grabado profesionalmente y/o que contenga acentos pesados</span></span>
            </div>
            <div class="options clearfixtrans">
                <div class="col-xs-12 col-sm-4">
                    <div class="checkbox radio">
                        <input class="js-autoupdate" type="radio" id="low_quality_no" name="low_quality" value="no"  checked >
                        <label for="low_quality_no">No</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="checkbox radio">
                        <input class="js-autoupdate" type="radio" id="low_quality_yes" name="low_quality" value="si" >
                        <label for="low_quality_yes">Sí</label>
                    </div>
                </div>
            </div></div>
            <div class="setting">
                <div class="setting-name subtitles">
                    <span class="icon subtitles-icon"></span>
                    Subtítulos
                    <span class="icon help-icon tooltip1">
                        <span class="tooltiptext1">Los subtítulos no solo ayudan a los espectadores a entender mejor tu vídeo. Los subtítulos también mejoran el ranking de tu vídeo en los motores de búsqueda.</span>
                    </div>
                    <div class="options clearfixtrans">
                        <div class="col-xs-12 col-sm-4">
                            <div class="checkbox radio">
                                <input class="js-autoupdate" type="radio" id="subtitle_not_required" name="subtitle" value="no"  checked >
                                <label for="subtitle_not_required">No</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="checkbox radio">
                                <input class="js-autoupdate" type="radio" id="subtitle_srt" name="subtitle" value="si" >
                                <label for="subtitle_srt">Sí</label>
                            </div>
                        </div>
                    </div>    </div>
                    <div class="setting">
                        <div class="setting-name">
                            <span class="icon timestamping-icon"></span>
                            Testigo de tiempo
                            <span class="icon help-icon tooltip1">
                              <span class="tooltiptext1">La marca de tiempo realiza un seguimiento de la progresión del audio, ya sea a intervalos regulares o puntos específicos en el texto.</span>
                          </div>
                          <div class="options clearfixtrans">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-dropdown">
                                    <select class="js-autoupdate" name="timestamping">
                                        <option value="not_required"  selected >En cambio de interlocutor</option>
                                        <option value="every_5_seconds" >Cada 5 segundos</option>
                                        <option value="every_6_seconds" >Cada 6 segundos</option>
                                        <option value="every_7_seconds" >Cada 7 segundos</option>
                                        <option value="every_8_seconds" >Cada 8 segundos</option>
                                        <option value="every_9_seconds" >Cada 9 segundos</option>
                                        <option value="every_10_seconds" >Cada 10 segundos</option>
                                        <option value="every_11_seconds" >Cada 11 segundos</option>
                                        <option value="every_12_seconds" >Cada 12 segundos</option>
                                        <option value="every_13_seconds" >Cada 13 segundos</option>
                                        <option value="every_15_seconds" >Cada 15 segundos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- <div class="setting">
    <div class="setting-name language">
        <span class="icon language-icon"></span>
        Idioma
    </div>
    <div class="options clearfixtrans">
    <div class="col-xs-12 col-sm-6">
        <div class="form-dropdown">
            <select class="js-autoupdate" name="language">
                                    <option value="1"  selected >English</option>
                                    <option value="49" >Albanian</option>
                                    <option value="20" >Arabic</option>
                                    <option value="47" >Bengali</option>
                                    <option value="19" >Bosnian</option>
                                    <option value="48" >Bulgarian</option>
                                    <option value="53" >Catalan</option>
                                    <option value="21" >Chinese</option>
                                    <option value="18" >Croatian</option>
                                    <option value="50" >Czech</option>
                                    <option value="41" >Danish</option>
                                    <option value="13" >Dutch</option>
                                    <option value="34" >Estonian</option>
                                    <option value="8" >Filipino</option>
                                    <option value="29" >Finnish</option>
                                    <option value="2" >French</option>
                                    <option value="14" >German</option>
                                    <option value="23" >Greek</option>
                                    <option value="27" >Hebrew</option>
                                    <option value="31" >Hungarian</option>
                                    <option value="42" >Icelandic</option>
                                    <option value="35" >Indian</option>
                                    <option value="28" >Indonesian</option>
                                    <option value="4" >Italian</option>
                                    <option value="22" >Japanese</option>
                                    <option value="33" >Korean</option>
                                    <option value="46" >Latvian</option>
                                    <option value="5" >Lithuanian</option>
                                    <option value="40" >Luxembourgish</option>
                                    <option value="39" >Malay</option>
                                    <option value="43" >Nepali</option>
                                    <option value="38" >Norwegian</option>
                                    <option value="10" >Polish</option>
                                    <option value="12" >Portuguese</option>
                                    <option value="36" >Romanian</option>
                                    <option value="9" >Russian</option>
                                    <option value="17" >Serbian</option>
                                    <option value="58" >Slovak</option>
                                    <option value="54" >Somali</option>
                                    <option value="3" >Spanish</option>
                                    <option value="57" >Swahili</option>
                                    <option value="32" >Swedish</option>
                                    <option value="56" >Thai</option>
                                    <option value="15" >Turkish</option>
                                    <option value="45" >Ukrainian</option>
                                    <option value="37" >Urdu</option>
                                    <option value="52" >Vietnamese</option>
                            </select>
        </div>
    </div> -->
    <!-- </div></div> -->
</div>
<div style="height: 52px; color: #fff; text-align: center; line-height: 52px; font-weight: bold;">
    <span class="hidden-xs" style="margin-right: 40px; margin-left: 40px; font-size: 14px;">
        <img src="<?php echo ARCHIVO; ?>transcription-audio/img/pages/upload/secure.png" alt="secure" style="margin-right: 10px; margin-top: 10px;">
        Seguridad, privacidad y confidencialidad garantizada: encriptación SSL de 2048 bits, protección NDA<br>
        A partir de 5 archivos subidos, se cobrará 0,5€ adicional por cada archivo añadido
    </span>
</div>
</div>
</div>
<div class="col-xs-12 col-lg-3">
    <div class="upload-sidebar js-sidebar">
        <div class="order-summary collapse js-order-summary" style="margin-bottom: 55px;">
            <div class="headertrans"><h3 style="color: #ffffff;"><span class="glyphicon glyphicon-shopping-cart" style="margin-right: 13px; vertical-align: middle; color: #ffffff;"></span>Resumen de la orden</h3></div>
            <div class="table-row collapse">
                <span class="label">Duración:</span>
                <span class="result js-order-duration">0</span>
                <div class="clearfixtrans"></div>
            </div>
            <div class="table-row collapse">
                <span class="label">Palabras:</span>
                <span class="result js-order-words">0</span>
                <div class="clearfixtrans"></div>
            </div>
            <div class="table-row">
                <span class="label">Archivos:</span>
                <span class="result js-file-count">0</span>
                <div class="clearfixtrans"></div>
            </div>
            <div class="js-discount-containertrans"  style="display:none" >
                <div class="table-row">
                    <span class="label">Total parcial:</span>
                    <span class="result">€<span class="js-subtotal">0.00</span></span>
                    <div class="clearfixtrans"></div>
                </div>
                <div class="table-row">
                    <span class="label">
                        <span class="js-discount">0</span>% descuento:
                    </span>
                    <span class="result">
                        -€<span class="js-you-save">0.00</span>
                    </span>
                    <div class="clearfixtrans"></div>
                </div>
            </div>
            <div class="table-row order-total-price">
                <span class="label">Total con IVA:</span>
                <span class="total-price result"><span class="js-total">0.00</span>€</span>
                <div class="clearfixtrans"></div>
            </div>
            <div class="table-row">
                <span class="label">Pedido mínimo son 30 minutos</span>
                <div class="clearfixtrans"></div>
            </div>
            <div class="table-row">
                <span id="btn-compra"></span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="clearfixtrans"></div>
</div>
</div>
<template class="js-file-blueprint">
    <div class="uploaded-file" data-duration="::duration::">
        <div class="columntrans column-remove">
            !!delete!!
        </div>
        <div class="columntrans column-title">
            !!progress!!
            <div class="cell-title js-filename-popover" id="arname" data-toggle="tooltip" title="::original_filename::">::original_filename::</div>
        </div>
        <div class="columntrans column-status">
            <div class="visible-xs">
                <div>::duration_for_humans::</div>
            </div>
            <div class="hidden-xs">!!tick!!</div>
        </div>
        <div class="columntrans column-play hidden-xs">
            <div>!!play!!</div>
        </div>
        <div class="clearfixtrans visible-xs"></div>
        <div class="columntrans column-trim">
            !!cut_img!!
        </div>
        <div class="columntrans column-comment">
            !!comment_img!!
        </div>
        <div class="columntrans column-length">
            <div class="hidden-xs js-duration-for-humans">
                <div class="cell-middle">::duration_for_humans::</div>
            </div>
            <div class="visible-xs">!!tick!!</div>
        </div>
        <div class="columntrans column-size visible-xs">
            <div>!!play!!</div>
        </div>
    </div>
    <div class="js-comment" style="display: none">
        <div class="file-popup comment clearfixtrans">
            <textarea class="form-control" rows="4" placeholder="">::comment::</textarea>
            <button class="button-medium pull-right js-save-comment">Salvar</button>
        </div>
    </div>
    <div class="js-duration" style="display: none">
        <div class="file-popup trim clearfixtrans">
            <div class="form-time form-input clearfixtrans">
                <label for="timestampFrom">Iniciar marca de tiempo</label>
                <input class="js-from" id="timestampFrom" type="text" value="::from_human::">
            </div>
            <div class="form-time form-input clearfixtrans">
                <label for="timestampTill">Marca de tiempo final</label>
                <input class="js-till" id="timestampTill" type="text" value="::till_human::">
            </div>
            <div class="form-time form-button clearfixtrans">
                <div class="button-medium js-save-duration">Salvar</div>
            </div>
        </div>
    </div>
</template>
</div>
<div class="modal fade" id="uploadDoneModal" tabindex="-1" role="dialog">
    <div class="upload-done__modal-dialog" role="document">
        <div class="modal-content upload-done__modal-content">
            <div class="upload-done__icon-top"><span class="icon icon-check"></span></div>
            <div style="height: 40px;"></div>
            <div class="js-upload-done-toggle js-upload-done-links upload-done__modal-title-containertrans">
                <span class="icon icon-dark-pin upload-done__modal-icon"></span>
                <div class="upload-done__modal-title">
                    <span class="js-upload-done-total"></span> de <span class="js-upload-done-total"></span> URL añadidas
                </div>
            </div>
            <div class="js-upload-done-toggle js-upload-done-regular upload-done__modal-title-containertrans">
                <span class="icon icon-file-plus upload-done__modal-icon"></span>
                <div class="upload-done__modal-title">
                    <span class="js-upload-done-total"></span> de <span class="js-upload-done-total"></span> archivo(s) añadidos
                </div>
            </div>
            <div style="height: 50px;"></div>
            <div>
                <button type="button" class="button-medium orange js-upload-done-toggle js-upload-done-links js-upload-done-urls-btn" data-dismiss="modal">AGREGAR URL</button>
                <button type="button" class="button-medium orange js-upload-done-toggle js-upload-done-regular js-upload-done-files-btn" data-dismiss="modal">SUBIR MAS ARCHIVOS</button>
                <button type="button" class="button-medium" data-dismiss="modal">HECHO</button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="uploadArchiModal" tabindex="-1" role="dialog">
    <div class="upload-done__modal-dialog" role="document">
        <div class="modal-content upload-done__modal-contentotro">
            <div style="height: 40px;"></div>
            <div class="js-upload-done-toggleotro upload-done__modal-title-containertrans">
                <div class="upload-done__modal-title">
                    <p style="font-size: 15px; font-family: Doppio One, sans-serif;">Enlace <strong id="modalarchivootro"></strong> no reconocido por nuestro sistema automático.<br>Por favor indique la duración exacta y a continuación vuelva a elegir el archivo.<br>La calculadora mostrará los precios en base a la duración que indique en esta ventana o si le está fallando esta calculadora, por favor utilice la vieja versión <a href="https://transcripciones.net/calcular-precio-alternativo/">Calculadora alternativa</a>.</p>
                </div>
            </div>
            <div style="height: 50px;"></div>
            <div class="js-fileotro">
                <input type="hidden" name="id" value="" id="inputotroid">
                <input type="hidden" name="filename" value="" id="inputotrofilename">
                <label for="h" style="display: inline; font-size:18px; color:#fff;">Hora</label>
                <input type="number" name="hora" id="h" placeholder="00" size="2" maxlength="2" style="width: 10%; display: inline;" value="00" min="0" onkeyUp="return ValNumero(this);">
                <label for="m" style="display: inline; font-size:18px; color:#fff;">Minutos</label>
                <input type="number" name="min" id="m" placeholder="00" size="2" maxlength="2" style="width: 10%; display: inline;" value="00" min="0" onkeyUp="return ValNumero(this);">
                <label for="s" style="display: inline; font-size:18px; color:#fff;">Segundos</label>
                <input type="number" name="seg" id="s" placeholder="00" size="2" maxlength="2" style="width: 10%; display: inline;" value="00" min="0" onkeyUp="return ValNumero(this);">
            </div>
            <div>
                <button type="button" class="button-medium orange js-upload-done-toggle js-upload-done-regular js-fileuploadotroo-click" data-dismiss="modal">SUBIR ARCHIVO</button>
                <button type="button" class="button-medium js-fileuploadotrodelet-click" data-dismiss="modal">SALIR</button>
                <div class="js-dragarea js-fileuploadotro" style="display:none;"></div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="EnlaceModal" tabindex="-1" role="dialog">
    <div class="upload-done__modal-dialog" role="document">
        <div class="modal-content upload-done__modal-contentenlaceotro">
            <div style="height: 40px;"></div>
            <div class="js-upload-done-toggleotro upload-done__modal-title-containertrans">
                <div class="upload-done__modal-title">
                    <p style="font-size: 15px; font-family: Doppio One, sans-serif;">Enlace <strong id="modalenlaceotro"></strong> no reconocido por nuestro sistema automático.<br>Por favor indique la duración exacta.<br>La calculadora mostrará los precios en base a la duración que indique en esta ventana o si le está fallando esta calculadora, por favor utilice la vieja versión <a href="https://transcripciones.net/calcular-precio-alternativo/">Calculadora alternativa</a>.</p>
                </div>
            </div>
            <div style="height: 50px;"></div>
            <div class="js-fileotro">
                <label for="e" style="display: inline; font-size:18px; color:#fff;">Enlace</label>
                <input type="text" name="enlace" id="e" placeholder="Ingrese enlace URL" size="100" maxlength="1000" style="width: 10%; display: inline;">
                <label for="h" style="display: inline; font-size:18px; color:#fff;">Hora</label>
                <input type="number" name="horae" id="he" placeholder="00" size="2" maxlength="2" style="width: 10%; display: inline;" value="00" min="0"  onkeyUp="return ValNumero(this);">
                <label for="m" style="display: inline; font-size:18px; color:#fff;">Minutos</label>
                <input type="number" name="mine" id="me" placeholder="00" size="2" maxlength="2" style="width: 10%; display: inline;" value="00" min="0"  onkeyUp="return ValNumero(this);">
                <label for="s" style="display: inline; font-size:18px; color:#fff;">Segundos</label>
                <input type="number" name="segundosenla" id="segundosenla" placeholder="00" size="2" maxlength="2" style="width: 10%; display: inline;" value="00" min="0"   onkeyUp="return ValNumero(this);">
            </div>
            <div>
                <button type="button" class="button-medium orange js-upload-done-toggle js-upload-done-regular js-enlaceotro-click" data-dismiss="modal">SUBIR ENLACE</button>
                <button type="button" class="button-medium" data-dismiss="modal">SALIR</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- <script src="<?php echo ARCHIVO; ?>/transcription-audio/js/appdb.js"></script> -->
<script type="text/javascript">
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
</script>
<script type="text/javascript">
    function _classCallCheck(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }
function round(t, e) {
    e || (e = 0);
    var n = Math.round(t * Math.pow(10, e)) / Math.pow(10, e);
    return n
}
function twoDigits(t) {
    return round(t, 2).toFixed(2)
}
function secondsToHumanTime(t) {
    var e = !1;
    return t < 0 && (e = !0, t = Math.abs(t)), hours = 0, t > 3600 && (hours = Math.floor(t / 3600)), minutes = 0, t > 60 && (minutes = Math.floor((t - 3600 * hours) / 60)), seconds = t - 3600 * hours - 60 * minutes, (e ? "-" : "") + leftPad(round(hours), 2) + ":" + leftPad(round(minutes), 2) + ":" + leftPad(round(seconds), 2)
}
function leftPad(t, e) {
    for (var n = t + ""; n.length < e;) n = "0" + n;
        return n
}
function isEmail(t) {
    var e = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return e.test(t)
}
function isInIframe() {
    try {
        return window.self !== window.top
    } catch (t) {
        return !0
    }
}
function inputEmptyError(t) {
    return "" === $(t).val() && (t.addClass("input-error"), !0)
}
function removeInputError() {
    $(this).removeClass("input-error")
}
function currency(t, e) {
    $amount = t * global_currency_exchange_rate;
    var n = global_currency_symbol;
    return "undefined" != typeof e && "number" == e && (n = ""), n + twoDigits($amount)
}
function calculatorUpdateTatPrices(t) {
    $.each(t, function(t, e) {
        var n = $(".js-tat-price[data-tat-id=" + t + "]");
        n.length && n.html(e)
    })
}! function(t, e) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = t.document ? e(t, !0) : function(t) {
        if (!t.document) throw new Error("jQuery requires a window with a document");
        return e(t)
    } : e(t)
}("undefined" != typeof window ? window : this, function(t, e) {
    "use strict";
    function n(t, e, n) {
        e = e || st;
        var i, o = e.createElement("script");
        if (o.text = t, n)
            for (i in xt) n[i] && (o[i] = n[i]);
                e.head.appendChild(o).parentNode.removeChild(o)
        }
        function i(t) {
            return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? dt[pt.call(t)] || "object" : typeof t
        }
        function o(t) {
            var e = !!t && "length" in t && t.length,
            n = i(t);
            return !yt(t) && !bt(t) && ("array" === n || 0 === e || "number" == typeof e && e > 0 && e - 1 in t)
        }
        function r(t, e) {
            return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
        }
        function s(t, e, n) {
            return yt(e) ? Tt.grep(t, function(t, i) {
                return !!e.call(t, i, t) !== n
            }) : e.nodeType ? Tt.grep(t, function(t) {
                return t === e !== n
            }) : "string" != typeof e ? Tt.grep(t, function(t) {
                return ft.call(e, t) > -1 !== n
            }) : Tt.filter(e, t, n)
        }
        function a(t, e) {
            for (;
                (t = t[e]) && 1 !== t.nodeType;);
                return t
        }
        function l(t) {
            var e = {};
            return Tt.each(t.match(Pt) || [], function(t, n) {
                e[n] = !0
            }), e
        }
        function u(t) {
            return t
        }
        function c(t) {
            throw t
        }
        function f(t, e, n, i) {
            var o;
            try {
                t && yt(o = t.promise) ? o.call(t).done(e).fail(n) : t && yt(o = t.then) ? o.call(t, e, n) : e.apply(void 0, [t].slice(i))
            } catch (t) {
                n.apply(void 0, [t])
            }
        }
        function d() {
            st.removeEventListener("DOMContentLoaded", d), t.removeEventListener("load", d), Tt.ready()
        }
        function p(t, e) {
            return e.toUpperCase()
        }
        function h(t) {
            return t.replace(Ht, "ms-").replace(_t, p)
        }
        function g() {
            this.expando = Tt.expando + g.uid++
        }
        function m(t) {
            return "true" === t || "false" !== t && ("null" === t ? null : t === +t + "" ? +t : Wt.test(t) ? JSON.parse(t) : t)
        }
        function v(t, e, n) {
            var i;
            if (void 0 === n && 1 === t.nodeType)
                if (i = "data-" + e.replace(Ut, "-$&").toLowerCase(), n = t.getAttribute(i), "string" == typeof n) {
                    try {
                        n = m(n)
                    } catch (o) {}
                    Bt.set(t, e, n)
                } else n = void 0;
                return n
            }
            function y(t, e, n, i) {
                var o, r, s = 20,
                a = i ? function() {
                    return i.cur()
                } : function() {
                    return Tt.css(t, e, "")
                },
                l = a(),
                u = n && n[3] || (Tt.cssNumber[e] ? "" : "px"),
                c = (Tt.cssNumber[e] || "px" !== u && +l) && Vt.exec(Tt.css(t, e));
                if (c && c[3] !== u) {
                    for (l /= 2, u = u || c[3], c = +l || 1; s--;) Tt.style(t, e, c + u), (1 - r) * (1 - (r = a() / l || .5)) <= 0 && (s = 0), c /= r;
                        c = 2 * c, Tt.style(t, e, c + u), n = n || []
                }
                return n && (c = +c || +l || 0, o = n[1] ? c + (n[1] + 1) * n[2] : +n[2], i && (i.unit = u, i.start = c, i.end = o)), o
            }
            function b(t) {
                var e, n = t.ownerDocument,
                i = t.nodeName,
                o = Jt[i];
                return o ? o : (e = n.body.appendChild(n.createElement(i)), o = Tt.css(e, "display"), e.parentNode.removeChild(e), "none" === o && (o = "block"), Jt[i] = o, o)
            }
            function x(t, e) {
                for (var n, i, o = [], r = 0, s = t.length; r < s; r++) i = t[r], i.style && (n = i.style.display, e ? ("none" === n && (o[r] = Ft.get(i, "display") || null, o[r] || (i.style.display = "")), "" === i.style.display && Qt(i) && (o[r] = b(i))) : "none" !== n && (o[r] = "none", Ft.set(i, "display", n)));
                    for (r = 0; r < s; r++) null != o[r] && (t[r].style.display = o[r]);
                        return t
                }
                function w(t, e) {
                    var n;
                    return n = "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e || "*") : "undefined" != typeof t.querySelectorAll ? t.querySelectorAll(e || "*") : [], void 0 === e || e && r(t, e) ? Tt.merge([t], n) : n
                }
                function T(t, e) {
                    for (var n = 0, i = t.length; n < i; n++) Ft.set(t[n], "globalEval", !e || Ft.get(e[n], "globalEval"))
                }
            function C(t, e, n, o, r) {
                for (var s, a, l, u, c, f, d = e.createDocumentFragment(), p = [], h = 0, g = t.length; h < g; h++)
                    if (s = t[h], s || 0 === s)
                        if ("object" === i(s)) Tt.merge(p, s.nodeType ? [s] : s);
                    else if (ee.test(s)) {
                        for (a = a || d.appendChild(e.createElement("div")), l = (Kt.exec(s) || ["", ""])[1].toLowerCase(), u = te[l] || te._default, a.innerHTML = u[1] + Tt.htmlPrefilter(s) + u[2], f = u[0]; f--;) a = a.lastChild;
                            Tt.merge(p, a.childNodes), a = d.firstChild, a.textContent = ""
                    } else p.push(e.createTextNode(s));
                    for (d.textContent = "", h = 0; s = p[h++];)
                        if (o && Tt.inArray(s, o) > -1) r && r.push(s);
                    else if (c = Tt.contains(s.ownerDocument, s), a = w(d.appendChild(s), "script"), c && T(a), n)
                        for (f = 0; s = a[f++];) Zt.test(s.type || "") && n.push(s);
                            return d
                    }
                    function E() {
                        return !0
                    }
                    function S() {
                        return !1
                    }
                    function $() {
                        try {
                            return st.activeElement
                        } catch (t) {}
                    }
                    function A(t, e, n, i, o, r) {
                        var s, a;
                        if ("object" == typeof e) {
                            "string" != typeof n && (i = i || n, n = void 0);
                            for (a in e) A(t, a, n, i, e[a], r);
                                return t
                        }
                        if (null == i && null == o ? (o = n, i = n = void 0) : null == o && ("string" == typeof n ? (o = i, i = void 0) : (o = i, i = n, n = void 0)), o === !1) o = S;
                        else if (!o) return t;
                        return 1 === r && (s = o, o = function(t) {
                            return Tt().off(t), s.apply(this, arguments)
                        }, o.guid = s.guid || (s.guid = Tt.guid++)), t.each(function() {
                            Tt.event.add(this, e, o, i, n)
                        })
                    }
                    function N(t, e) {
                        return r(t, "table") && r(11 !== e.nodeType ? e : e.firstChild, "tr") ? Tt(t).children("tbody")[0] || t : t
                    }
                    function D(t) {
                        return t.type = (null !== t.getAttribute("type")) + "/" + t.type, t
                    }
                    function k(t) {
                        return "true/" === (t.type || "").slice(0, 5) ? t.type = t.type.slice(5) : t.removeAttribute("type"), t
                    }
                    function j(t, e) {
                        var n, i, o, r, s, a, l, u;
                        if (1 === e.nodeType) {
                            if (Ft.hasData(t) && (r = Ft.access(t), s = Ft.set(e, r), u = r.events)) {
                                delete s.handle, s.events = {};
                                for (o in u)
                                    for (n = 0, i = u[o].length; n < i; n++) Tt.event.add(e, o, u[o][n])
                                }
                            Bt.hasData(t) && (a = Bt.access(t), l = Tt.extend({}, a), Bt.set(e, l))
                        }
                    }
                    function O(t, e) {
                        var n = e.nodeName.toLowerCase();
                        "input" === n && Gt.test(t.type) ? e.checked = t.checked : "input" !== n && "textarea" !== n || (e.defaultValue = t.defaultValue)
                    }
                    function I(t, e, i, o) {
                        e = ut.apply([], e);
                        var r, s, a, l, u, c, f = 0,
                        d = t.length,
                        p = d - 1,
                        h = e[0],
                        g = yt(h);
                        if (g || d > 1 && "string" == typeof h && !vt.checkClone && le.test(h)) return t.each(function(n) {
                            var r = t.eq(n);
                            g && (e[0] = h.call(this, n, r.html())), I(r, e, i, o)
                        });
                            if (d && (r = C(e, t[0].ownerDocument, !1, t, o), s = r.firstChild, 1 === r.childNodes.length && (r = s), s || o)) {
                                for (a = Tt.map(w(r, "script"), D), l = a.length; f < d; f++) u = r, f !== p && (u = Tt.clone(u, !0, !0), l && Tt.merge(a, w(u, "script"))), i.call(t[f], u, f);
                                    if (l)
                                        for (c = a[a.length - 1].ownerDocument, Tt.map(a, k), f = 0; f < l; f++) u = a[f], Zt.test(u.type || "") && !Ft.access(u, "globalEval") && Tt.contains(c, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? Tt._evalUrl && Tt._evalUrl(u.src) : n(u.textContent.replace(ue, ""), c, u))
                                    }
                                return t
                            }
                            function P(t, e, n) {
                                for (var i, o = e ? Tt.filter(e, t) : t, r = 0; null != (i = o[r]); r++) n || 1 !== i.nodeType || Tt.cleanData(w(i)), i.parentNode && (n && Tt.contains(i.ownerDocument, i) && T(w(i, "script")), i.parentNode.removeChild(i));
                                    return t
                            }
                            function R(t, e, n) {
                                var i, o, r, s, a = t.style;
                                return n = n || fe(t), n && (s = n.getPropertyValue(e) || n[e], "" !== s || Tt.contains(t.ownerDocument, t) || (s = Tt.style(t, e)), !vt.pixelBoxStyles() && ce.test(s) && de.test(e) && (i = a.width, o = a.minWidth, r = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = n.width, a.width = i, a.minWidth = o, a.maxWidth = r)), void 0 !== s ? s + "" : s
                            }
                            function L(t, e) {
                                return {
                                    get: function() {
                                        return t() ? void delete this.get : (this.get = e).apply(this, arguments)
                                    }
                                }
                            }
                            function q(t) {
                                if (t in ye) return t;
                                for (var e = t[0].toUpperCase() + t.slice(1), n = ve.length; n--;)
                                    if (t = ve[n] + e, t in ye) return t
                                }
                            function H(t) {
                                var e = Tt.cssProps[t];
                                return e || (e = Tt.cssProps[t] = q(t) || t), e
                            }
                            function _(t, e, n) {
                                var i = Vt.exec(e);
                                return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : e
                            }
                            function M(t, e, n, i, o, r) {
                                var s = "width" === e ? 1 : 0,
                                a = 0,
                                l = 0;
                                if (n === (i ? "border" : "content")) return 0;
                                for (; s < 4; s += 2) "margin" === n && (l += Tt.css(t, n + Xt[s], !0, o)), i ? ("content" === n && (l -= Tt.css(t, "padding" + Xt[s], !0, o)), "margin" !== n && (l -= Tt.css(t, "border" + Xt[s] + "Width", !0, o))) : (l += Tt.css(t, "padding" + Xt[s], !0, o), "padding" !== n ? l += Tt.css(t, "border" + Xt[s] + "Width", !0, o) : a += Tt.css(t, "border" + Xt[s] + "Width", !0, o));
                                    return !i && r >= 0 && (l += Math.max(0, Math.ceil(t["offset" + e[0].toUpperCase() + e.slice(1)] - r - l - a - .5))), l
                            }
                            function F(t, e, n) {
                                var i = fe(t),
                                o = R(t, e, i),
                                r = "border-box" === Tt.css(t, "boxSizing", !1, i),
                                s = r;
                                if (ce.test(o)) {
                                    if (!n) return o;
                                    o = "auto"
                                }
                                return s = s && (vt.boxSizingReliable() || o === t.style[e]), ("auto" === o || !parseFloat(o) && "inline" === Tt.css(t, "display", !1, i)) && (o = t["offset" + e[0].toUpperCase() + e.slice(1)], s = !0), o = parseFloat(o) || 0, o + M(t, e, n || (r ? "border" : "content"), s, i, o) + "px"
                            }
                            function B(t, e, n, i, o) {
                                return new B.prototype.init(t, e, n, i, o)
                            }
                            function W() {
                                xe && (st.hidden === !1 && t.requestAnimationFrame ? t.requestAnimationFrame(W) : t.setTimeout(W, Tt.fx.interval), Tt.fx.tick())
                            }
                            function U() {
                                return t.setTimeout(function() {
                                    be = void 0
                                }), be = Date.now()
                            }
                            function z(t, e) {
                                var n, i = 0,
                                o = {
                                    height: t
                                };
                                for (e = e ? 1 : 0; i < 4; i += 2 - e) n = Xt[i], o["margin" + n] = o["padding" + n] = t;
                                    return e && (o.opacity = o.width = t), o
                            }
                            function V(t, e, n) {
                                for (var i, o = (Y.tweeners[e] || []).concat(Y.tweeners["*"]), r = 0, s = o.length; r < s; r++)
                                    if (i = o[r].call(n, e, t)) return i
                                }
                            function X(t, e, n) {
                                var i, o, r, s, a, l, u, c, f = "width" in e || "height" in e,
                                d = this,
                                p = {},
                                h = t.style,
                                g = t.nodeType && Qt(t),
                                m = Ft.get(t, "fxshow");
                                n.queue || (s = Tt._queueHooks(t, "fx"), null == s.unqueued && (s.unqueued = 0, a = s.empty.fire, s.empty.fire = function() {
                                    s.unqueued || a()
                                }), s.unqueued++, d.always(function() {
                                    d.always(function() {
                                        s.unqueued--, Tt.queue(t, "fx").length || s.empty.fire()
                                    })
                                }));
                                for (i in e)
                                    if (o = e[i], we.test(o)) {
                                        if (delete e[i], r = r || "toggle" === o, o === (g ? "hide" : "show")) {
                                            if ("show" !== o || !m || void 0 === m[i]) continue;
                                            g = !0
                                        }
                                        p[i] = m && m[i] || Tt.style(t, i)
                                    }
                                    if (l = !Tt.isEmptyObject(e), l || !Tt.isEmptyObject(p)) {
                                        f && 1 === t.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], u = m && m.display, null == u && (u = Ft.get(t, "display")), c = Tt.css(t, "display"), "none" === c && (u ? c = u : (x([t], !0), u = t.style.display || u, c = Tt.css(t, "display"), x([t]))), ("inline" === c || "inline-block" === c && null != u) && "none" === Tt.css(t, "float") && (l || (d.done(function() {
                                            h.display = u
                                        }), null == u && (c = h.display, u = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", d.always(function() {
                                            h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                                        })), l = !1;
                                        for (i in p) l || (m ? "hidden" in m && (g = m.hidden) : m = Ft.access(t, "fxshow", {
                                            display: u
                                        }), r && (m.hidden = !g), g && x([t], !0), d.done(function() {
                                            g || x([t]), Ft.remove(t, "fxshow");
                                            for (i in p) Tt.style(t, i, p[i])
                                        })), l = V(g ? m[i] : 0, i, d), i in m || (m[i] = l.start, g && (l.end = l.start, l.start = 0))
                                    }
                                }
                                function Q(t, e) {
                                    var n, i, o, r, s;
                                    for (n in t)
                                        if (i = h(n), o = e[i], r = t[n], Array.isArray(r) && (o = r[1], r = t[n] = r[0]), n !== i && (t[i] = r, delete t[n]), s = Tt.cssHooks[i], s && "expand" in s) {
                                            r = s.expand(r), delete t[i];
                                            for (n in r) n in t || (t[n] = r[n], e[n] = o)
                                        } else e[i] = o
                                }
                                function Y(t, e, n) {
                                    var i, o, r = 0,
                                    s = Y.prefilters.length,
                                    a = Tt.Deferred().always(function() {
                                        delete l.elem
                                    }),
                                    l = function() {
                                        if (o) return !1;
                                        for (var e = be || U(), n = Math.max(0, u.startTime + u.duration - e), i = n / u.duration || 0, r = 1 - i, s = 0, l = u.tweens.length; s < l; s++) u.tweens[s].run(r);
                                            return a.notifyWith(t, [u, r, n]), r < 1 && l ? n : (l || a.notifyWith(t, [u, 1, 0]), a.resolveWith(t, [u]), !1)
                                    },
                                    u = a.promise({
                                        elem: t,
                                        props: Tt.extend({}, e),
                                        opts: Tt.extend(!0, {
                                            specialEasing: {},
                                            easing: Tt.easing._default
                                        }, n),
                                        originalProperties: e,
                                        originalOptions: n,
                                        startTime: be || U(),
                                        duration: n.duration,
                                        tweens: [],
                                        createTween: function(e, n) {
                                            var i = Tt.Tween(t, u.opts, e, n, u.opts.specialEasing[e] || u.opts.easing);
                                            return u.tweens.push(i), i
                                        },
                                        stop: function(e) {
                                            var n = 0,
                                            i = e ? u.tweens.length : 0;
                                            if (o) return this;
                                            for (o = !0; n < i; n++) u.tweens[n].run(1);
                                                return e ? (a.notifyWith(t, [u, 1, 0]), a.resolveWith(t, [u, e])) : a.rejectWith(t, [u, e]), this
                                        }
                                    }),
                                    c = u.props;
                                    for (Q(c, u.opts.specialEasing); r < s; r++)
                                        if (i = Y.prefilters[r].call(u, t, c, u.opts)) return yt(i.stop) && (Tt._queueHooks(u.elem, u.opts.queue).stop = i.stop.bind(i)), i;
                                    return Tt.map(c, V, u), yt(u.opts.start) && u.opts.start.call(t, u), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always), Tt.fx.timer(Tt.extend(l, {
                                        elem: t,
                                        anim: u,
                                        queue: u.opts.queue
                                    })), u
                                }
                                function J(t) {
                                    var e = t.match(Pt) || [];
                                    return e.join(" ")
                                }
                                function G(t) {
                                    return t.getAttribute && t.getAttribute("class") || ""
                                }
                                function K(t) {
                                    return Array.isArray(t) ? t : "string" == typeof t ? t.match(Pt) || [] : []
                                }
                                function Z(t, e, n, o) {
                                    var r;
                                    if (Array.isArray(e)) Tt.each(e, function(e, i) {
                                        n || Ie.test(t) ? o(t, i) : Z(t + "[" + ("object" == typeof i && null != i ? e : "") + "]", i, n, o)
                                    });
                                        else if (n || "object" !== i(e)) o(t, e);
                                        else
                                            for (r in e) Z(t + "[" + r + "]", e[r], n, o)
                                        }
                                    function tt(t) {
                                        return function(e, n) {
                                            "string" != typeof e && (n = e, e = "*");
                                            var i, o = 0,
                                            r = e.toLowerCase().match(Pt) || [];
                                            if (yt(n))
                                                for (; i = r[o++];) "+" === i[0] ? (i = i.slice(1) || "*", (t[i] = t[i] || []).unshift(n)) : (t[i] = t[i] || []).push(n)
                                            }
                                    }
                                    function et(t, e, n, i) {
                                        function o(a) {
                                            var l;
                                            return r[a] = !0, Tt.each(t[a] || [], function(t, a) {
                                                var u = a(e, n, i);
                                                return "string" != typeof u || s || r[u] ? s ? !(l = u) : void 0 : (e.dataTypes.unshift(u), o(u), !1)
                                            }), l
                                        }
                                        var r = {},
                                        s = t === ze;
                                        return o(e.dataTypes[0]) || !r["*"] && o("*")
                                    }
                                    function nt(t, e) {
                                        var n, i, o = Tt.ajaxSettings.flatOptions || {};
                                        for (n in e) void 0 !== e[n] && ((o[n] ? t : i || (i = {}))[n] = e[n]);
                                            return i && Tt.extend(!0, t, i), t
                                    }
                                    function it(t, e, n) {
                                        for (var i, o, r, s, a = t.contents, l = t.dataTypes;
                                            "*" === l[0];) l.shift(), void 0 === i && (i = t.mimeType || e.getResponseHeader("Content-Type"));
                                            if (i)
                                                for (o in a)
                                                    if (a[o] && a[o].test(i)) {
                                                        l.unshift(o);
                                                        break
                                                    }
                                                    if (l[0] in n) r = l[0];
                                                    else {
                                                        for (o in n) {
                                                            if (!l[0] || t.converters[o + " " + l[0]]) {
                                                                r = o;
                                                                break
                                                            }
                                                            s || (s = o)
                                                        }
                                                        r = r || s
                                                    }
                                                    if (r) return r !== l[0] && l.unshift(r), n[r]
                                                }
                                            function ot(t, e, n, i) {
                                                var o, r, s, a, l, u = {},
                                                c = t.dataTypes.slice();
                                                if (c[1])
                                                    for (s in t.converters) u[s.toLowerCase()] = t.converters[s];
                                                        for (r = c.shift(); r;)
                                                            if (t.responseFields[r] && (n[t.responseFields[r]] = e), !l && i && t.dataFilter && (e = t.dataFilter(e, t.dataType)), l = r, r = c.shift())
                                                                if ("*" === r) r = l;
                                                            else if ("*" !== l && l !== r) {
                                                                if (s = u[l + " " + r] || u["* " + r], !s)
                                                                    for (o in u)
                                                                        if (a = o.split(" "), a[1] === r && (s = u[l + " " + a[0]] || u["* " + a[0]])) {
                                                                            s === !0 ? s = u[o] : u[o] !== !0 && (r = a[0], c.unshift(a[1]));
                                                                            break
                                                                        }
                                                                        if (s !== !0)
                                                                            if (s && t["throws"]) e = s(e);
                                                                        else try {
                                                                            e = s(e)
                                                                        } catch (f) {
                                                                            return {
                                                                                state: "parsererror",
                                                                                error: s ? f : "No conversion from " + l + " to " + r
                                                                            }
                                                                        }
                                                                    }
                                                                    return {
                                                                        state: "success",
                                                                        data: e
                                                                    }
                                                                }
                                                                var rt = [],
                                                                st = t.document,
                                                                at = Object.getPrototypeOf,
                                                                lt = rt.slice,
                                                                ut = rt.concat,
                                                                ct = rt.push,
                                                                ft = rt.indexOf,
                                                                dt = {},
                                                                pt = dt.toString,
                                                                ht = dt.hasOwnProperty,
                                                                gt = ht.toString,
                                                                mt = gt.call(Object),
                                                                vt = {},
                                                                yt = function(t) {
                                                                    return "function" == typeof t && "number" != typeof t.nodeType
                                                                },
                                                                bt = function(t) {
                                                                    return null != t && t === t.window
                                                                },
                                                                xt = {
                                                                    type: !0,
                                                                    src: !0,
                                                                    noModule: !0
                                                                },
                                                                wt = "3.3.1",
                                                                Tt = function(t, e) {
                                                                    return new Tt.fn.init(t, e)
                                                                },
                                                                Ct = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                                                                Tt.fn = Tt.prototype = {
                                                                    jquery: wt,
                                                                    constructor: Tt,
                                                                    length: 0,
                                                                    toArray: function() {
                                                                        return lt.call(this)
                                                                    },
                                                                    get: function(t) {
                                                                        return null == t ? lt.call(this) : t < 0 ? this[t + this.length] : this[t]
                                                                    },
                                                                    pushStack: function(t) {
                                                                        var e = Tt.merge(this.constructor(), t);
                                                                        return e.prevObject = this, e
                                                                    },
                                                                    each: function(t) {
                                                                        return Tt.each(this, t)
                                                                    },
                                                                    map: function(t) {
                                                                        return this.pushStack(Tt.map(this, function(e, n) {
                                                                            return t.call(e, n, e)
                                                                        }))
                                                                    },
                                                                    slice: function() {
                                                                        return this.pushStack(lt.apply(this, arguments))
                                                                    },
                                                                    first: function() {
                                                                        return this.eq(0)
                                                                    },
                                                                    last: function() {
                                                                        return this.eq(-1)
                                                                    },
                                                                    eq: function(t) {
                                                                        var e = this.length,
                                                                        n = +t + (t < 0 ? e : 0);
                                                                        return this.pushStack(n >= 0 && n < e ? [this[n]] : [])
                                                                    },
                                                                    end: function() {
                                                                        return this.prevObject || this.constructor()
                                                                    },
                                                                    push: ct,
                                                                    sort: rt.sort,
                                                                    splice: rt.splice
                                                                }, Tt.extend = Tt.fn.extend = function() {
                                                                    var t, e, n, i, o, r, s = arguments[0] || {},
                                                                    a = 1,
                                                                    l = arguments.length,
                                                                    u = !1;
                                                                    for ("boolean" == typeof s && (u = s, s = arguments[a] || {}, a++), "object" == typeof s || yt(s) || (s = {}), a === l && (s = this, a--); a < l; a++)
                                                                        if (null != (t = arguments[a]))
                                                                            for (e in t) n = s[e], i = t[e], s !== i && (u && i && (Tt.isPlainObject(i) || (o = Array.isArray(i))) ? (o ? (o = !1, r = n && Array.isArray(n) ? n : []) : r = n && Tt.isPlainObject(n) ? n : {}, s[e] = Tt.extend(u, r, i)) : void 0 !== i && (s[e] = i));
                                                                                return s
                                                                        }, Tt.extend({
                                                                            expando: "jQuery" + (wt + Math.random()).replace(/\D/g, ""),
                                                                            isReady: !0,
                                                                            error: function(t) {
                                                                                throw new Error(t)
                                                                            },
                                                                            noop: function() {},
                                                                            isPlainObject: function(t) {
                                                                                var e, n;
                                                                                return !(!t || "[object Object]" !== pt.call(t)) && (!(e = at(t)) || (n = ht.call(e, "constructor") && e.constructor, "function" == typeof n && gt.call(n) === mt))
                                                                            },
                                                                            isEmptyObject: function(t) {
                                                                                var e;
                                                                                for (e in t) return !1;
                                                                                    return !0
                                                                            },
                                                                            globalEval: function(t) {
                                                                                n(t)
                                                                            },
                                                                            each: function(t, e) {
                                                                                var n, i = 0;
                                                                                if (o(t))
                                                                                    for (n = t.length; i < n && e.call(t[i], i, t[i]) !== !1; i++);
                                                                                        else
                                                                                            for (i in t)
                                                                                                if (e.call(t[i], i, t[i]) === !1) break;
                                                                                            return t
                                                                                        },
                                                                                        trim: function(t) {
                                                                                            return null == t ? "" : (t + "").replace(Ct, "")
                                                                                        },
                                                                                        makeArray: function(t, e) {
                                                                                            var n = e || [];
                                                                                            return null != t && (o(Object(t)) ? Tt.merge(n, "string" == typeof t ? [t] : t) : ct.call(n, t)), n
                                                                                        },
                                                                                        inArray: function(t, e, n) {
                                                                                            return null == e ? -1 : ft.call(e, t, n)
                                                                                        },
                                                                                        merge: function(t, e) {
                                                                                            for (var n = +e.length, i = 0, o = t.length; i < n; i++) t[o++] = e[i];
                                                                                                return t.length = o, t
                                                                                        },
                                                                                        grep: function(t, e, n) {
                                                                                            for (var i, o = [], r = 0, s = t.length, a = !n; r < s; r++) i = !e(t[r], r), i !== a && o.push(t[r]);
                                                                                                return o
                                                                                        },
                                                                                        map: function(t, e, n) {
                                                                                            var i, r, s = 0,
                                                                                            a = [];
                                                                                            if (o(t))
                                                                                                for (i = t.length; s < i; s++) r = e(t[s], s, n), null != r && a.push(r);
                                                                                                    else
                                                                                                        for (s in t) r = e(t[s], s, n), null != r && a.push(r);
                                                                                                            return ut.apply([], a)
                                                                                                    },
                                                                                                    guid: 1,
                                                                                                    support: vt
                                                                                                }), "function" == typeof Symbol && (Tt.fn[Symbol.iterator] = rt[Symbol.iterator]), Tt.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(t, e) {
                                                                                                    dt["[object " + e + "]"] = e.toLowerCase()
                                                                                                });
                                                                                                var Et = function(t) {
                                                                                                    function e(t, e, n, i) {
                                                                                                        var o, r, s, a, l, u, c, d = e && e.ownerDocument,
                                                                                                        h = e ? e.nodeType : 9;
                                                                                                        if (n = n || [], "string" != typeof t || !t || 1 !== h && 9 !== h && 11 !== h) return n;
                                                                                                        if (!i && ((e ? e.ownerDocument || e : F) !== I && O(e), e = e || I, R)) {
                                                                                                            if (11 !== h && (l = vt.exec(t)))
                                                                                                                if (o = l[1]) {
                                                                                                                    if (9 === h) {
                                                                                                                        if (!(s = e.getElementById(o))) return n;
                                                                                                                        if (s.id === o) return n.push(s), n
                                                                                                                    } else if (d && (s = d.getElementById(o)) && _(e, s) && s.id === o) return n.push(s), n
                                                                                                            } else {
                                                                                                                if (l[2]) return K.apply(n, e.getElementsByTagName(t)), n;
                                                                                                                if ((o = l[3]) && T.getElementsByClassName && e.getElementsByClassName) return K.apply(n, e.getElementsByClassName(o)), n
                                                                                                            }
                                                                                                        if (T.qsa && !V[t + " "] && (!L || !L.test(t))) {
                                                                                                            if (1 !== h) d = e, c = t;
                                                                                                            else if ("object" !== e.nodeName.toLowerCase()) {
                                                                                                                for ((a = e.getAttribute("id")) ? a = a.replace(wt, Tt) : e.setAttribute("id", a = M), u = $(t), r = u.length; r--;) u[r] = "#" + a + " " + p(u[r]);
                                                                                                                    c = u.join(","), d = yt.test(t) && f(e.parentNode) || e
                                                                                                            }
                                                                                                            if (c) try {
                                                                                                                return K.apply(n, d.querySelectorAll(c)), n
                                                                                                            } catch (g) {} finally {
                                                                                                                a === M && e.removeAttribute("id")
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                    return N(t.replace(at, "$1"), e, n, i)
                                                                                                }
                                                                                                function n() {
                                                                                                    function t(n, i) {
                                                                                                        return e.push(n + " ") > C.cacheLength && delete t[e.shift()], t[n + " "] = i
                                                                                                    }
                                                                                                    var e = [];
                                                                                                    return t
                                                                                                }
                                                                                                function i(t) {
                                                                                                    return t[M] = !0, t
                                                                                                }
                                                                                                function o(t) {
                                                                                                    var e = I.createElement("fieldset");
                                                                                                    try {
                                                                                                        return !!t(e)
                                                                                                    } catch (n) {
                                                                                                        return !1
                                                                                                    } finally {
                                                                                                        e.parentNode && e.parentNode.removeChild(e), e = null
                                                                                                    }
                                                                                                }
                                                                                                function r(t, e) {
                                                                                                    for (var n = t.split("|"), i = n.length; i--;) C.attrHandle[n[i]] = e
                                                                                                }
                                                                                            function s(t, e) {
                                                                                                var n = e && t,
                                                                                                i = n && 1 === t.nodeType && 1 === e.nodeType && t.sourceIndex - e.sourceIndex;
                                                                                                if (i) return i;
                                                                                                if (n)
                                                                                                    for (; n = n.nextSibling;)
                                                                                                        if (n === e) return -1;
                                                                                                    return t ? 1 : -1
                                                                                                }
                                                                                                function a(t) {
                                                                                                    return function(e) {
                                                                                                        var n = e.nodeName.toLowerCase();
                                                                                                        return "input" === n && e.type === t
                                                                                                    }
                                                                                                }
                                                                                                function l(t) {
                                                                                                    return function(e) {
                                                                                                        var n = e.nodeName.toLowerCase();
                                                                                                        return ("input" === n || "button" === n) && e.type === t
                                                                                                    }
                                                                                                }
                                                                                                function u(t) {
                                                                                                    return function(e) {
                                                                                                        return "form" in e ? e.parentNode && e.disabled === !1 ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && Et(e) === t : e.disabled === t : "label" in e && e.disabled === t
                                                                                                    }
                                                                                                }
                                                                                                function c(t) {
                                                                                                    return i(function(e) {
                                                                                                        return e = +e, i(function(n, i) {
                                                                                                            for (var o, r = t([], n.length, e), s = r.length; s--;) n[o = r[s]] && (n[o] = !(i[o] = n[o]))
                                                                                                        })
                                                                                                    })
                                                                                                }
                                                                                                function f(t) {
                                                                                                    return t && "undefined" != typeof t.getElementsByTagName && t
                                                                                                }
                                                                                                function d() {}
                                                                                                function p(t) {
                                                                                                    for (var e = 0, n = t.length, i = ""; e < n; e++) i += t[e].value;
                                                                                                        return i
                                                                                                }
                                                                                                function h(t, e, n) {
                                                                                                    var i = e.dir,
                                                                                                    o = e.next,
                                                                                                    r = o || i,
                                                                                                    s = n && "parentNode" === r,
                                                                                                    a = W++;
                                                                                                    return e.first ? function(e, n, o) {
                                                                                                        for (; e = e[i];)
                                                                                                            if (1 === e.nodeType || s) return t(e, n, o);
                                                                                                        return !1
                                                                                                    } : function(e, n, l) {
                                                                                                        var u, c, f, d = [B, a];
                                                                                                        if (l) {
                                                                                                            for (; e = e[i];)
                                                                                                                if ((1 === e.nodeType || s) && t(e, n, l)) return !0
                                                                                                            } else
                                                                                                        for (; e = e[i];)
                                                                                                            if (1 === e.nodeType || s)
                                                                                                                if (f = e[M] || (e[M] = {}), c = f[e.uniqueID] || (f[e.uniqueID] = {}), o && o === e.nodeName.toLowerCase()) e = e[i] || e;
                                                                                                            else {
                                                                                                                if ((u = c[r]) && u[0] === B && u[1] === a) return d[2] = u[2];
                                                                                                                if (c[r] = d, d[2] = t(e, n, l)) return !0
                                                                                                            }
                                                                                                        return !1
                                                                                                    }
                                                                                                }
                                                                                                function g(t) {
                                                                                                    return t.length > 1 ? function(e, n, i) {
                                                                                                        for (var o = t.length; o--;)
                                                                                                            if (!t[o](e, n, i)) return !1;
                                                                                                        return !0
                                                                                                    } : t[0]
                                                                                                }
                                                                                                function m(t, n, i) {
                                                                                                    for (var o = 0, r = n.length; o < r; o++) e(t, n[o], i);
                                                                                                        return i
                                                                                                }
                                                                                                function v(t, e, n, i, o) {
                                                                                                    for (var r, s = [], a = 0, l = t.length, u = null != e; a < l; a++)(r = t[a]) && (n && !n(r, i, o) || (s.push(r), u && e.push(a)));
                                                                                                        return s
                                                                                                }
                                                                                                function y(t, e, n, o, r, s) {
                                                                                                    return o && !o[M] && (o = y(o)), r && !r[M] && (r = y(r, s)), i(function(i, s, a, l) {
                                                                                                        var u, c, f, d = [],
                                                                                                        p = [],
                                                                                                        h = s.length,
                                                                                                        g = i || m(e || "*", a.nodeType ? [a] : a, []),
                                                                                                        y = !t || !i && e ? g : v(g, d, t, a, l),
                                                                                                        b = n ? r || (i ? t : h || o) ? [] : s : y;
                                                                                                        if (n && n(y, b, a, l), o)
                                                                                                            for (u = v(b, p), o(u, [], a, l), c = u.length; c--;)(f = u[c]) && (b[p[c]] = !(y[p[c]] = f));
                                                                                                                if (i) {
                                                                                                                    if (r || t) {
                                                                                                                        if (r) {
                                                                                                                            for (u = [], c = b.length; c--;)(f = b[c]) && u.push(y[c] = f);
                                                                                                                                r(null, b = [], u, l)
                                                                                                                        }
                                                                                                                        for (c = b.length; c--;)(f = b[c]) && (u = r ? tt(i, f) : d[c]) > -1 && (i[u] = !(s[u] = f))
                                                                                                                    }
                                                                                                            } else b = v(b === s ? b.splice(h, b.length) : b), r ? r(null, s, b, l) : K.apply(s, b)
                                                                                                        })
                                                                                                }
                                                                                                function b(t) {
                                                                                                    for (var e, n, i, o = t.length, r = C.relative[t[0].type], s = r || C.relative[" "], a = r ? 1 : 0, l = h(function(t) {
                                                                                                        return t === e
                                                                                                    }, s, !0), u = h(function(t) {
                                                                                                        return tt(e, t) > -1
                                                                                                    }, s, !0), c = [function(t, n, i) {
                                                                                                        var o = !r && (i || n !== D) || ((e = n).nodeType ? l(t, n, i) : u(t, n, i));
                                                                                                        return e = null, o
                                                                                                    }]; a < o; a++)
                                                                                                        if (n = C.relative[t[a].type]) c = [h(g(c), n)];
                                                                                                        else {
                                                                                                            if (n = C.filter[t[a].type].apply(null, t[a].matches), n[M]) {
                                                                                                                for (i = ++a; i < o && !C.relative[t[i].type]; i++);
                                                                                                                    return y(a > 1 && g(c), a > 1 && p(t.slice(0, a - 1).concat({
                                                                                                                        value: " " === t[a - 2].type ? "*" : ""
                                                                                                                    })).replace(at, "$1"), n, a < i && b(t.slice(a, i)), i < o && b(t = t.slice(i)), i < o && p(t))
                                                                                                            }
                                                                                                            c.push(n)
                                                                                                        }
                                                                                                        return g(c)
                                                                                                    }
                                                                                                    function x(t, n) {
                                                                                                        var o = n.length > 0,
                                                                                                        r = t.length > 0,
                                                                                                        s = function(i, s, a, l, u) {
                                                                                                            var c, f, d, p = 0,
                                                                                                            h = "0",
                                                                                                            g = i && [],
                                                                                                            m = [],
                                                                                                            y = D,
                                                                                                            b = i || r && C.find.TAG("*", u),
                                                                                                            x = B += null == y ? 1 : Math.random() || .1,
                                                                                                            w = b.length;
                                                                                                            for (u && (D = s === I || s || u); h !== w && null != (c = b[h]); h++) {
                                                                                                                if (r && c) {
                                                                                                                    for (f = 0, s || c.ownerDocument === I || (O(c), a = !R); d = t[f++];)
                                                                                                                        if (d(c, s || I, a)) {
                                                                                                                            l.push(c);
                                                                                                                            break
                                                                                                                        }
                                                                                                                        u && (B = x)
                                                                                                                    }
                                                                                                                    o && ((c = !d && c) && p--, i && g.push(c))
                                                                                                                }
                                                                                                                if (p += h, o && h !== p) {
                                                                                                                    for (f = 0; d = n[f++];) d(g, m, s, a);
                                                                                                                        if (i) {
                                                                                                                            if (p > 0)
                                                                                                                                for (; h--;) g[h] || m[h] || (m[h] = J.call(l));
                                                                                                                                    m = v(m)
                                                                                                                            }
                                                                                                                            K.apply(l, m), u && !i && m.length > 0 && p + n.length > 1 && e.uniqueSort(l)
                                                                                                                        }
                                                                                                                        return u && (B = x, D = y), g
                                                                                                                    };
                                                                                                                    return o ? i(s) : s
                                                                                                                }
                                                                                                                var w, T, C, E, S, $, A, N, D, k, j, O, I, P, R, L, q, H, _, M = "sizzle" + 1 * new Date,
                                                                                                                F = t.document,
                                                                                                                B = 0,
                                                                                                                W = 0,
                                                                                                                U = n(),
                                                                                                                z = n(),
                                                                                                                V = n(),
                                                                                                                X = function(t, e) {
                                                                                                                    return t === e && (j = !0), 0
                                                                                                                },
                                                                                                                Q = {}.hasOwnProperty,
                                                                                                                Y = [],
                                                                                                                J = Y.pop,
                                                                                                                G = Y.push,
                                                                                                                K = Y.push,
                                                                                                                Z = Y.slice,
                                                                                                                tt = function(t, e) {
                                                                                                                    for (var n = 0, i = t.length; n < i; n++)
                                                                                                                        if (t[n] === e) return n;
                                                                                                                    return -1
                                                                                                                },
                                                                                                                et = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                                                                                                                nt = "[\\x20\\t\\r\\n\\f]",
                                                                                                                it = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                                                                                                                ot = "\\[" + nt + "*(" + it + ")(?:" + nt + "*([*^$|!~]?=)" + nt + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + it + "))|)" + nt + "*\\]",
                                                                                                                rt = ":(" + it + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ot + ")*)|.*)\\)|)",
                                                                                                                st = new RegExp(nt + "+", "g"),
                                                                                                                at = new RegExp("^" + nt + "+|((?:^|[^\\\\])(?:\\\\.)*)" + nt + "+$", "g"),
                                                                                                                lt = new RegExp("^" + nt + "*," + nt + "*"),
                                                                                                                ut = new RegExp("^" + nt + "*([>+~]|" + nt + ")" + nt + "*"),
                                                                                                                ct = new RegExp("=" + nt + "*([^\\]'\"]*?)" + nt + "*\\]", "g"),
                                                                                                                ft = new RegExp(rt),
                                                                                                                dt = new RegExp("^" + it + "$"),
                                                                                                                pt = {
                                                                                                                    ID: new RegExp("^#(" + it + ")"),
                                                                                                                    CLASS: new RegExp("^\\.(" + it + ")"),
                                                                                                                    TAG: new RegExp("^(" + it + "|[*])"),
                                                                                                                    ATTR: new RegExp("^" + ot),
                                                                                                                    PSEUDO: new RegExp("^" + rt),
                                                                                                                    CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + nt + "*(even|odd|(([+-]|)(\\d*)n|)" + nt + "*(?:([+-]|)" + nt + "*(\\d+)|))" + nt + "*\\)|)", "i"),
                                                                                                                    bool: new RegExp("^(?:" + et + ")$", "i"),
                                                                                                                    needsContext: new RegExp("^" + nt + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + nt + "*((?:-\\d)?\\d*)" + nt + "*\\)|)(?=[^-]|$)", "i")
                                                                                                                },
                                                                                                                ht = /^(?:input|select|textarea|button)$/i,
                                                                                                                gt = /^h\d$/i,
                                                                                                                mt = /^[^{]+\{\s*\[native \w/,
                                                                                                                    vt = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                                                                                                                    yt = /[+~]/,
                                                                                                                    bt = new RegExp("\\\\([\\da-f]{1,6}" + nt + "?|(" + nt + ")|.)", "ig"),
                                                                                                                    xt = function(t, e, n) {
                                                                                                                        var i = "0x" + e - 65536;
                                                                                                                        return i !== i || n ? e : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
                                                                                                                    },
                                                                                                                    wt = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                                                                                                                    Tt = function(t, e) {
                                                                                                                        return e ? "\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
                                                                                                                    },
                                                                                                                    Ct = function() {
                                                                                                                        O()
                                                                                                                    },
                                                                                                                    Et = h(function(t) {
                                                                                                                        return t.disabled === !0 && ("form" in t || "label" in t)
                                                                                                                    }, {
                                                                                                                        dir: "parentNode",
                                                                                                                        next: "legend"
                                                                                                                    });
                                                                                                                    try {
                                                                                                                        K.apply(Y = Z.call(F.childNodes), F.childNodes), Y[F.childNodes.length].nodeType
                                                                                                                    } catch (St) {
                                                                                                                        K = {
                                                                                                                            apply: Y.length ? function(t, e) {
                                                                                                                                G.apply(t, Z.call(e))
                                                                                                                            } : function(t, e) {
                                                                                                                                for (var n = t.length, i = 0; t[n++] = e[i++];);
                                                                                                                                    t.length = n - 1
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                    T = e.support = {}, S = e.isXML = function(t) {
                                                                                                                        var e = t && (t.ownerDocument || t).documentElement;
                                                                                                                        return !!e && "HTML" !== e.nodeName
                                                                                                                    }, O = e.setDocument = function(t) {
                                                                                                                        var e, n, i = t ? t.ownerDocument || t : F;
                                                                                                                        return i !== I && 9 === i.nodeType && i.documentElement ? (I = i, P = I.documentElement, R = !S(I), F !== I && (n = I.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", Ct, !1) : n.attachEvent && n.attachEvent("onunload", Ct)), T.attributes = o(function(t) {
                                                                                                                            return t.className = "i", !t.getAttribute("className")
                                                                                                                        }), T.getElementsByTagName = o(function(t) {
                                                                                                                            return t.appendChild(I.createComment("")), !t.getElementsByTagName("*").length
                                                                                                                        }), T.getElementsByClassName = mt.test(I.getElementsByClassName), T.getById = o(function(t) {
                                                                                                                            return P.appendChild(t).id = M, !I.getElementsByName || !I.getElementsByName(M).length
                                                                                                                        }), T.getById ? (C.filter.ID = function(t) {
                                                                                                                            var e = t.replace(bt, xt);
                                                                                                                            return function(t) {
                                                                                                                                return t.getAttribute("id") === e
                                                                                                                            }
                                                                                                                        }, C.find.ID = function(t, e) {
                                                                                                                            if ("undefined" != typeof e.getElementById && R) {
                                                                                                                                var n = e.getElementById(t);
                                                                                                                                return n ? [n] : []
                                                                                                                            }
                                                                                                                        }) : (C.filter.ID = function(t) {
                                                                                                                            var e = t.replace(bt, xt);
                                                                                                                            return function(t) {
                                                                                                                                var n = "undefined" != typeof t.getAttributeNode && t.getAttributeNode("id");
                                                                                                                                return n && n.value === e
                                                                                                                            }
                                                                                                                        }, C.find.ID = function(t, e) {
                                                                                                                            if ("undefined" != typeof e.getElementById && R) {
                                                                                                                                var n, i, o, r = e.getElementById(t);
                                                                                                                                if (r) {
                                                                                                                                    if (n = r.getAttributeNode("id"), n && n.value === t) return [r];
                                                                                                                                    for (o = e.getElementsByName(t), i = 0; r = o[i++];)
                                                                                                                                        if (n = r.getAttributeNode("id"), n && n.value === t) return [r]
                                                                                                                                    }
                                                                                                                                return []
                                                                                                                            }
                                                                                                                        }), C.find.TAG = T.getElementsByTagName ? function(t, e) {
                                                                                                                            return "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t) : T.qsa ? e.querySelectorAll(t) : void 0
                                                                                                                        } : function(t, e) {
                                                                                                                            var n, i = [],
                                                                                                                            o = 0,
                                                                                                                            r = e.getElementsByTagName(t);
                                                                                                                            if ("*" === t) {
                                                                                                                                for (; n = r[o++];) 1 === n.nodeType && i.push(n);
                                                                                                                                    return i
                                                                                                                            }
                                                                                                                            return r
                                                                                                                        }, C.find.CLASS = T.getElementsByClassName && function(t, e) {
                                                                                                                            if ("undefined" != typeof e.getElementsByClassName && R) return e.getElementsByClassName(t)
                                                                                                                        }, q = [], L = [], (T.qsa = mt.test(I.querySelectorAll)) && (o(function(t) {
                                                                                                                            P.appendChild(t).innerHTML = "<a id='" + M + "'></a><select id='" + M + "-\r\\' msallowcapture=''><option selected=''></option></select>", t.querySelectorAll("[msallowcapture^='']").length && L.push("[*^$]=" + nt + "*(?:''|\"\")"), t.querySelectorAll("[selected]").length || L.push("\\[" + nt + "*(?:value|" + et + ")"), t.querySelectorAll("[id~=" + M + "-]").length || L.push("~="), t.querySelectorAll(":checked").length || L.push(":checked"), t.querySelectorAll("a#" + M + "+*").length || L.push(".#.+[+~]")
                                                                                                                        }), o(function(t) {
                                                                                                                            t.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                                                                                                                            var e = I.createElement("input");
                                                                                                                            e.setAttribute("type", "hidden"), t.appendChild(e).setAttribute("name", "D"), t.querySelectorAll("[name=d]").length && L.push("name" + nt + "*[*^$|!~]?="), 2 !== t.querySelectorAll(":enabled").length && L.push(":enabled", ":disabled"), P.appendChild(t).disabled = !0, 2 !== t.querySelectorAll(":disabled").length && L.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), L.push(",.*:")
                                                                                                                        })), (T.matchesSelector = mt.test(H = P.matches || P.webkitMatchesSelector || P.mozMatchesSelector || P.oMatchesSelector || P.msMatchesSelector)) && o(function(t) {
                                                                                                                            T.disconnectedMatch = H.call(t, "*"), H.call(t, "[s!='']:x"), q.push("!=", rt)
                                                                                                                        }), L = L.length && new RegExp(L.join("|")), q = q.length && new RegExp(q.join("|")), e = mt.test(P.compareDocumentPosition), _ = e || mt.test(P.contains) ? function(t, e) {
                                                                                                                            var n = 9 === t.nodeType ? t.documentElement : t,
                                                                                                                            i = e && e.parentNode;
                                                                                                                            return t === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(i)))
                                                                                                                        } : function(t, e) {
                                                                                                                            if (e)
                                                                                                                                for (; e = e.parentNode;)
                                                                                                                                    if (e === t) return !0;
                                                                                                                                return !1
                                                                                                                            }, X = e ? function(t, e) {
                                                                                                                                if (t === e) return j = !0, 0;
                                                                                                                                var n = !t.compareDocumentPosition - !e.compareDocumentPosition;
                                                                                                                                return n ? n : (n = (t.ownerDocument || t) === (e.ownerDocument || e) ? t.compareDocumentPosition(e) : 1, 1 & n || !T.sortDetached && e.compareDocumentPosition(t) === n ? t === I || t.ownerDocument === F && _(F, t) ? -1 : e === I || e.ownerDocument === F && _(F, e) ? 1 : k ? tt(k, t) - tt(k, e) : 0 : 4 & n ? -1 : 1)
                                                                                                                            } : function(t, e) {
                                                                                                                                if (t === e) return j = !0, 0;
                                                                                                                                var n, i = 0,
                                                                                                                                o = t.parentNode,
                                                                                                                                r = e.parentNode,
                                                                                                                                a = [t],
                                                                                                                                l = [e];
                                                                                                                                if (!o || !r) return t === I ? -1 : e === I ? 1 : o ? -1 : r ? 1 : k ? tt(k, t) - tt(k, e) : 0;
                                                                                                                                if (o === r) return s(t, e);
                                                                                                                                for (n = t; n = n.parentNode;) a.unshift(n);
                                                                                                                                    for (n = e; n = n.parentNode;) l.unshift(n);
                                                                                                                                        for (; a[i] === l[i];) i++;
                                                                                                                                            return i ? s(a[i], l[i]) : a[i] === F ? -1 : l[i] === F ? 1 : 0
                                                                                                                                    }, I) : I
}, e.matches = function(t, n) {
    return e(t, null, null, n)
}, e.matchesSelector = function(t, n) {
    if ((t.ownerDocument || t) !== I && O(t), n = n.replace(ct, "='$1']"), T.matchesSelector && R && !V[n + " "] && (!q || !q.test(n)) && (!L || !L.test(n))) try {
        var i = H.call(t, n);
        if (i || T.disconnectedMatch || t.document && 11 !== t.document.nodeType) return i
    } catch (o) {}
return e(n, I, null, [t]).length > 0
}, e.contains = function(t, e) {
    return (t.ownerDocument || t) !== I && O(t), _(t, e)
}, e.attr = function(t, e) {
    (t.ownerDocument || t) !== I && O(t);
    var n = C.attrHandle[e.toLowerCase()],
    i = n && Q.call(C.attrHandle, e.toLowerCase()) ? n(t, e, !R) : void 0;
    return void 0 !== i ? i : T.attributes || !R ? t.getAttribute(e) : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
}, e.escape = function(t) {
    return (t + "").replace(wt, Tt)
}, e.error = function(t) {
    throw new Error("Syntax error, unrecognized expression: " + t)
}, e.uniqueSort = function(t) {
    var e, n = [],
    i = 0,
    o = 0;
    if (j = !T.detectDuplicates, k = !T.sortStable && t.slice(0), t.sort(X), j) {
        for (; e = t[o++];) e === t[o] && (i = n.push(o));
            for (; i--;) t.splice(n[i], 1)
        }
    return k = null, t
}, E = e.getText = function(t) {
    var e, n = "",
    i = 0,
    o = t.nodeType;
    if (o) {
        if (1 === o || 9 === o || 11 === o) {
            if ("string" == typeof t.textContent) return t.textContent;
            for (t = t.firstChild; t; t = t.nextSibling) n += E(t)
        } else if (3 === o || 4 === o) return t.nodeValue
} else
for (; e = t[i++];) n += E(e);
    return n
}, C = e.selectors = {
    cacheLength: 50,
    createPseudo: i,
    match: pt,
    attrHandle: {},
    find: {},
    relative: {
        ">": {
            dir: "parentNode",
            first: !0
        },
        " ": {
            dir: "parentNode"
        },
        "+": {
            dir: "previousSibling",
            first: !0
        },
        "~": {
            dir: "previousSibling"
        }
    },
    preFilter: {
        ATTR: function(t) {
            return t[1] = t[1].replace(bt, xt), t[3] = (t[3] || t[4] || t[5] || "").replace(bt, xt), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
        },
        CHILD: function(t) {
            return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || e.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && e.error(t[0]), t
        },
        PSEUDO: function(t) {
            var e, n = !t[6] && t[2];
            return pt.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : n && ft.test(n) && (e = $(n, !0)) && (e = n.indexOf(")", n.length - e) - n.length) && (t[0] = t[0].slice(0, e), t[2] = n.slice(0, e)), t.slice(0, 3))
        }
    },
    filter: {
        TAG: function(t) {
            var e = t.replace(bt, xt).toLowerCase();
            return "*" === t ? function() {
                return !0
            } : function(t) {
                return t.nodeName && t.nodeName.toLowerCase() === e
            }
        },
        CLASS: function(t) {
            var e = U[t + " "];
            return e || (e = new RegExp("(^|" + nt + ")" + t + "(" + nt + "|$)")) && U(t, function(t) {
                return e.test("string" == typeof t.className && t.className || "undefined" != typeof t.getAttribute && t.getAttribute("class") || "")
            })
        },
        ATTR: function(t, n, i) {
            return function(o) {
                var r = e.attr(o, t);
                return null == r ? "!=" === n : !n || (r += "", "=" === n ? r === i : "!=" === n ? r !== i : "^=" === n ? i && 0 === r.indexOf(i) : "*=" === n ? i && r.indexOf(i) > -1 : "$=" === n ? i && r.slice(-i.length) === i : "~=" === n ? (" " + r.replace(st, " ") + " ").indexOf(i) > -1 : "|=" === n && (r === i || r.slice(0, i.length + 1) === i + "-"))
            }
        },
        CHILD: function(t, e, n, i, o) {
            var r = "nth" !== t.slice(0, 3),
            s = "last" !== t.slice(-4),
            a = "of-type" === e;
            return 1 === i && 0 === o ? function(t) {
                return !!t.parentNode
            } : function(e, n, l) {
                var u, c, f, d, p, h, g = r !== s ? "nextSibling" : "previousSibling",
                m = e.parentNode,
                v = a && e.nodeName.toLowerCase(),
                y = !l && !a,
                b = !1;
                if (m) {
                    if (r) {
                        for (; g;) {
                            for (d = e; d = d[g];)
                                if (a ? d.nodeName.toLowerCase() === v : 1 === d.nodeType) return !1;
                            h = g = "only" === t && !h && "nextSibling"
                        }
                        return !0
                    }
                    if (h = [s ? m.firstChild : m.lastChild], s && y) {
                        for (d = m, f = d[M] || (d[M] = {}), c = f[d.uniqueID] || (f[d.uniqueID] = {}), u = c[t] || [], p = u[0] === B && u[1], b = p && u[2], d = p && m.childNodes[p]; d = ++p && d && d[g] || (b = p = 0) || h.pop();)
                            if (1 === d.nodeType && ++b && d === e) {
                                c[t] = [B, p, b];
                                break
                            }
                        } else if (y && (d = e, f = d[M] || (d[M] = {}), c = f[d.uniqueID] || (f[d.uniqueID] = {}), u = c[t] || [], p = u[0] === B && u[1], b = p), b === !1)
                        for (;
                            (d = ++p && d && d[g] || (b = p = 0) || h.pop()) && ((a ? d.nodeName.toLowerCase() !== v : 1 !== d.nodeType) || !++b || (y && (f = d[M] || (d[M] = {}), c = f[d.uniqueID] || (f[d.uniqueID] = {}), c[t] = [B, b]), d !== e)););
                            return b -= o, b === i || b % i === 0 && b / i >= 0
                    }
                }
            },
            PSEUDO: function(t, n) {
                var o, r = C.pseudos[t] || C.setFilters[t.toLowerCase()] || e.error("unsupported pseudo: " + t);
                return r[M] ? r(n) : r.length > 1 ? (o = [t, t, "", n], C.setFilters.hasOwnProperty(t.toLowerCase()) ? i(function(t, e) {
                    for (var i, o = r(t, n), s = o.length; s--;) i = tt(t, o[s]), t[i] = !(e[i] = o[s])
                }) : function(t) {
                    return r(t, 0, o)
                }) : r
            }
        },
        pseudos: {
            not: i(function(t) {
                var e = [],
                n = [],
                o = A(t.replace(at, "$1"));
                return o[M] ? i(function(t, e, n, i) {
                    for (var r, s = o(t, null, i, []), a = t.length; a--;)(r = s[a]) && (t[a] = !(e[a] = r))
                }) : function(t, i, r) {
                    return e[0] = t, o(e, null, r, n), e[0] = null, !n.pop()
                }
            }),
            has: i(function(t) {
                return function(n) {
                    return e(t, n).length > 0
                }
            }),
            contains: i(function(t) {
                return t = t.replace(bt, xt),
                function(e) {
                    return (e.textContent || e.innerText || E(e)).indexOf(t) > -1
                }
            }),
            lang: i(function(t) {
                return dt.test(t || "") || e.error("unsupported lang: " + t), t = t.replace(bt, xt).toLowerCase(),
                function(e) {
                    var n;
                    do
                    if (n = R ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return n = n.toLowerCase(), n === t || 0 === n.indexOf(t + "-"); while ((e = e.parentNode) && 1 === e.nodeType);
                    return !1
                }
            }),
            target: function(e) {
                var n = t.location && t.location.hash;
                return n && n.slice(1) === e.id
            },
            root: function(t) {
                return t === P
            },
            focus: function(t) {
                return t === I.activeElement && (!I.hasFocus || I.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
            },
            enabled: u(!1),
            disabled: u(!0),
            checked: function(t) {
                var e = t.nodeName.toLowerCase();
                return "input" === e && !!t.checked || "option" === e && !!t.selected
            },
            selected: function(t) {
                return t.parentNode && t.parentNode.selectedIndex, t.selected === !0
            },
            empty: function(t) {
                for (t = t.firstChild; t; t = t.nextSibling)
                    if (t.nodeType < 6) return !1;
                return !0
            },
            parent: function(t) {
                return !C.pseudos.empty(t)
            },
            header: function(t) {
                return gt.test(t.nodeName)
            },
            input: function(t) {
                return ht.test(t.nodeName)
            },
            button: function(t) {
                var e = t.nodeName.toLowerCase();
                return "input" === e && "button" === t.type || "button" === e
            },
            text: function(t) {
                var e;
                return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || "text" === e.toLowerCase())
            },
            first: c(function() {
                return [0]
            }),
            last: c(function(t, e) {
                return [e - 1]
            }),
            eq: c(function(t, e, n) {
                return [n < 0 ? n + e : n]
            }),
            even: c(function(t, e) {
                for (var n = 0; n < e; n += 2) t.push(n);
                    return t
            }),
            odd: c(function(t, e) {
                for (var n = 1; n < e; n += 2) t.push(n);
                    return t
            }),
            lt: c(function(t, e, n) {
                for (var i = n < 0 ? n + e : n; --i >= 0;) t.push(i);
                    return t
            }),
            gt: c(function(t, e, n) {
                for (var i = n < 0 ? n + e : n; ++i < e;) t.push(i);
                    return t
            })
        }
    }, C.pseudos.nth = C.pseudos.eq;
    for (w in {
        radio: !0,
        checkbox: !0,
        file: !0,
        password: !0,
        image: !0
    }) C.pseudos[w] = a(w);
        for (w in {
            submit: !0,
            reset: !0
        }) C.pseudos[w] = l(w);
            return d.prototype = C.filters = C.pseudos, C.setFilters = new d, $ = e.tokenize = function(t, n) {
                var i, o, r, s, a, l, u, c = z[t + " "];
                if (c) return n ? 0 : c.slice(0);
                for (a = t, l = [], u = C.preFilter; a;) {
                    i && !(o = lt.exec(a)) || (o && (a = a.slice(o[0].length) || a), l.push(r = [])), i = !1, (o = ut.exec(a)) && (i = o.shift(), r.push({
                        value: i,
                        type: o[0].replace(at, " ")
                    }), a = a.slice(i.length));
                    for (s in C.filter) !(o = pt[s].exec(a)) || u[s] && !(o = u[s](o)) || (i = o.shift(), r.push({
                        value: i,
                        type: s,
                        matches: o
                    }), a = a.slice(i.length));
                        if (!i) break
                    }
                return n ? a.length : a ? e.error(t) : z(t, l).slice(0)
            }, A = e.compile = function(t, e) {
                var n, i = [],
                o = [],
                r = V[t + " "];
                if (!r) {
                    for (e || (e = $(t)), n = e.length; n--;) r = b(e[n]), r[M] ? i.push(r) : o.push(r);
                        r = V(t, x(o, i)), r.selector = t
                }
                return r
            }, N = e.select = function(t, e, n, i) {
                var o, r, s, a, l, u = "function" == typeof t && t,
                c = !i && $(t = u.selector || t);
                if (n = n || [], 1 === c.length) {
                    if (r = c[0] = c[0].slice(0), r.length > 2 && "ID" === (s = r[0]).type && 9 === e.nodeType && R && C.relative[r[1].type]) {
                        if (e = (C.find.ID(s.matches[0].replace(bt, xt), e) || [])[0], !e) return n;
                        u && (e = e.parentNode), t = t.slice(r.shift().value.length)
                    }
                    for (o = pt.needsContext.test(t) ? 0 : r.length; o-- && (s = r[o], !C.relative[a = s.type]);)
                        if ((l = C.find[a]) && (i = l(s.matches[0].replace(bt, xt), yt.test(r[0].type) && f(e.parentNode) || e))) {
                            if (r.splice(o, 1), t = i.length && p(r), !t) return K.apply(n, i), n;
                            break
                        }
                    }
                    return (u || A(t, c))(i, e, !R, n, !e || yt.test(t) && f(e.parentNode) || e), n
                }, T.sortStable = M.split("").sort(X).join("") === M, T.detectDuplicates = !!j, O(), T.sortDetached = o(function(t) {
                    return 1 & t.compareDocumentPosition(I.createElement("fieldset"))
                }), o(function(t) {
                    return t.innerHTML = "<a href='#'></a>", "#" === t.firstChild.getAttribute("href")
                }) || r("type|href|height|width", function(t, e, n) {
                    if (!n) return t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2)
                }), T.attributes && o(function(t) {
                    return t.innerHTML = "<input/>", t.firstChild.setAttribute("value", ""), "" === t.firstChild.getAttribute("value")
                }) || r("value", function(t, e, n) {
                    if (!n && "input" === t.nodeName.toLowerCase()) return t.defaultValue
                }), o(function(t) {
                    return null == t.getAttribute("disabled")
                }) || r(et, function(t, e, n) {
                    var i;
                    if (!n) return t[e] === !0 ? e.toLowerCase() : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
                }), e
            }(t);
            Tt.find = Et, Tt.expr = Et.selectors, Tt.expr[":"] = Tt.expr.pseudos, Tt.uniqueSort = Tt.unique = Et.uniqueSort, Tt.text = Et.getText, Tt.isXMLDoc = Et.isXML, Tt.contains = Et.contains, Tt.escapeSelector = Et.escape;
            var St = function(t, e, n) {
                for (var i = [], o = void 0 !== n;
                    (t = t[e]) && 9 !== t.nodeType;)
                    if (1 === t.nodeType) {
                        if (o && Tt(t).is(n)) break;
                        i.push(t)
                    }
                    return i
                },
                $t = function(t, e) {
                    for (var n = []; t; t = t.nextSibling) 1 === t.nodeType && t !== e && n.push(t);
                        return n
                },
                At = Tt.expr.match.needsContext,
                Nt = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
                Tt.filter = function(t, e, n) {
                    var i = e[0];
                    return n && (t = ":not(" + t + ")"), 1 === e.length && 1 === i.nodeType ? Tt.find.matchesSelector(i, t) ? [i] : [] : Tt.find.matches(t, Tt.grep(e, function(t) {
                        return 1 === t.nodeType
                    }))
                }, Tt.fn.extend({
                    find: function(t) {
                        var e, n, i = this.length,
                        o = this;
                        if ("string" != typeof t) return this.pushStack(Tt(t).filter(function() {
                            for (e = 0; e < i; e++)
                                if (Tt.contains(o[e], this)) return !0
                            }));
                            for (n = this.pushStack([]), e = 0; e < i; e++) Tt.find(t, o[e], n);
                                return i > 1 ? Tt.uniqueSort(n) : n
                        },
                        filter: function(t) {
                            return this.pushStack(s(this, t || [], !1))
                        },
                        not: function(t) {
                            return this.pushStack(s(this, t || [], !0))
                        },
                        is: function(t) {
                            return !!s(this, "string" == typeof t && At.test(t) ? Tt(t) : t || [], !1).length
                        }
                    });
                var Dt, kt = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,
                jt = Tt.fn.init = function(t, e, n) {
                    var i, o;
                    if (!t) return this;
                    if (n = n || Dt, "string" == typeof t) {
                        if (i = "<" === t[0] && ">" === t[t.length - 1] && t.length >= 3 ? [null, t, null] : kt.exec(t), !i || !i[1] && e) return !e || e.jquery ? (e || n).find(t) : this.constructor(e).find(t);
                        if (i[1]) {
                            if (e = e instanceof Tt ? e[0] : e, Tt.merge(this, Tt.parseHTML(i[1], e && e.nodeType ? e.ownerDocument || e : st, !0)), Nt.test(i[1]) && Tt.isPlainObject(e))
                                for (i in e) yt(this[i]) ? this[i](e[i]) : this.attr(i, e[i]);
                                    return this
                            }
                            return o = st.getElementById(i[2]), o && (this[0] = o, this.length = 1), this
                        }
                        return t.nodeType ? (this[0] = t, this.length = 1, this) : yt(t) ? void 0 !== n.ready ? n.ready(t) : t(Tt) : Tt.makeArray(t, this)
                    };
                    jt.prototype = Tt.fn, Dt = Tt(st);
                    var Ot = /^(?:parents|prev(?:Until|All))/,
                    It = {
                        children: !0,
                        contents: !0,
                        next: !0,
                        prev: !0
                    };
                    Tt.fn.extend({
                        has: function(t) {
                            var e = Tt(t, this),
                            n = e.length;
                            return this.filter(function() {
                                for (var t = 0; t < n; t++)
                                    if (Tt.contains(this, e[t])) return !0
                                })
                        },
                        closest: function(t, e) {
                            var n, i = 0,
                            o = this.length,
                            r = [],
                            s = "string" != typeof t && Tt(t);
                            if (!At.test(t))
                                for (; i < o; i++)
                                    for (n = this[i]; n && n !== e; n = n.parentNode)
                                        if (n.nodeType < 11 && (s ? s.index(n) > -1 : 1 === n.nodeType && Tt.find.matchesSelector(n, t))) {
                                            r.push(n);
                                            break
                                        }
                                        return this.pushStack(r.length > 1 ? Tt.uniqueSort(r) : r)
                                    },
                                    index: function(t) {
                                        return t ? "string" == typeof t ? ft.call(Tt(t), this[0]) : ft.call(this, t.jquery ? t[0] : t) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                                    },
                                    add: function(t, e) {
                                        return this.pushStack(Tt.uniqueSort(Tt.merge(this.get(), Tt(t, e))))
                                    },
                                    addBack: function(t) {
                                        return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
                                    }
                                }), Tt.each({
                                    parent: function(t) {
                                        var e = t.parentNode;
                                        return e && 11 !== e.nodeType ? e : null
                                    },
                                    parents: function(t) {
                                        return St(t, "parentNode")
                                    },
                                    parentsUntil: function(t, e, n) {
                                        return St(t, "parentNode", n)
                                    },
                                    next: function(t) {
                                        return a(t, "nextSibling")
                                    },
                                    prev: function(t) {
                                        return a(t, "previousSibling")
                                    },
                                    nextAll: function(t) {
                                        return St(t, "nextSibling")
                                    },
                                    prevAll: function(t) {
                                        return St(t, "previousSibling")
                                    },
                                    nextUntil: function(t, e, n) {
                                        return St(t, "nextSibling", n)
                                    },
                                    prevUntil: function(t, e, n) {
                                        return St(t, "previousSibling", n)
                                    },
                                    siblings: function(t) {
                                        return $t((t.parentNode || {}).firstChild, t)
                                    },
                                    children: function(t) {
                                        return $t(t.firstChild)
                                    },
                                    contents: function(t) {
                                        return r(t, "iframe") ? t.contentDocument : (r(t, "template") && (t = t.content || t), Tt.merge([], t.childNodes))
                                    }
                                }, function(t, e) {
                                    Tt.fn[t] = function(n, i) {
                                        var o = Tt.map(this, e, n);
                                        return "Until" !== t.slice(-5) && (i = n), i && "string" == typeof i && (o = Tt.filter(i, o)), this.length > 1 && (It[t] || Tt.uniqueSort(o), Ot.test(t) && o.reverse()), this.pushStack(o)
                                    }
                                });
                                var Pt = /[^\x20\t\r\n\f]+/g;
                                Tt.Callbacks = function(t) {
                                    t = "string" == typeof t ? l(t) : Tt.extend({}, t);
                                    var e, n, o, r, s = [],
                                    a = [],
                                    u = -1,
                                    c = function() {
                                        for (r = r || t.once, o = e = !0; a.length; u = -1)
                                            for (n = a.shift(); ++u < s.length;) s[u].apply(n[0], n[1]) === !1 && t.stopOnFalse && (u = s.length, n = !1);
                                                t.memory || (n = !1), e = !1, r && (s = n ? [] : "")
                                        },
                                        f = {
                                            add: function() {
                                                return s && (n && !e && (u = s.length - 1, a.push(n)), function o(e) {
                                                    Tt.each(e, function(e, n) {
                                                        yt(n) ? t.unique && f.has(n) || s.push(n) : n && n.length && "string" !== i(n) && o(n)
                                                    })
                                                }(arguments), n && !e && c()), this
                                            },
                                            remove: function() {
                                                return Tt.each(arguments, function(t, e) {
                                                    for (var n;
                                                        (n = Tt.inArray(e, s, n)) > -1;) s.splice(n, 1), n <= u && u--
                                                }), this
                                            },
                                            has: function(t) {
                                                return t ? Tt.inArray(t, s) > -1 : s.length > 0
                                            },
                                            empty: function() {
                                                return s && (s = []), this
                                            },
                                            disable: function() {
                                                return r = a = [], s = n = "", this
                                            },
                                            disabled: function() {
                                                return !s
                                            },
                                            lock: function() {
                                                return r = a = [], n || e || (s = n = ""), this
                                            },
                                            locked: function() {
                                                return !!r
                                            },
                                            fireWith: function(t, n) {
                                                return r || (n = n || [], n = [t, n.slice ? n.slice() : n], a.push(n), e || c()), this
                                            },
                                            fire: function() {
                                                return f.fireWith(this, arguments), this
                                            },
                                            fired: function() {
                                                return !!o
                                            }
                                        };
                                        return f
                                    }, Tt.extend({
                                        Deferred: function(e) {
                                            var n = [
                                            ["notify", "progress", Tt.Callbacks("memory"), Tt.Callbacks("memory"), 2],
                                            ["resolve", "done", Tt.Callbacks("once memory"), Tt.Callbacks("once memory"), 0, "resolved"],
                                            ["reject", "fail", Tt.Callbacks("once memory"), Tt.Callbacks("once memory"), 1, "rejected"]
                                            ],
                                            i = "pending",
                                            o = {
                                                state: function() {
                                                    return i
                                                },
                                                always: function() {
                                                    return r.done(arguments).fail(arguments), this
                                                },
                                                "catch": function(t) {
                                                    return o.then(null, t)
                                                },
                                                pipe: function() {
                                                    var t = arguments;
                                                    return Tt.Deferred(function(e) {
                                                        Tt.each(n, function(n, i) {
                                                            var o = yt(t[i[4]]) && t[i[4]];
                                                            r[i[1]](function() {
                                                                var t = o && o.apply(this, arguments);
                                                                t && yt(t.promise) ? t.promise().progress(e.notify).done(e.resolve).fail(e.reject) : e[i[0] + "With"](this, o ? [t] : arguments)
                                                            })
                                                        }), t = null
                                                    }).promise()
                                                },
                                                then: function(e, i, o) {
                                                    function r(e, n, i, o) {
                                                        return function() {
                                                            var a = this,
                                                            l = arguments,
                                                            f = function() {
                                                                var t, f;
                                                                if (!(e < s)) {
                                                                    if (t = i.apply(a, l), t === n.promise()) throw new TypeError("Thenable self-resolution");
                                                                    f = t && ("object" == typeof t || "function" == typeof t) && t.then, yt(f) ? o ? f.call(t, r(s, n, u, o), r(s, n, c, o)) : (s++, f.call(t, r(s, n, u, o), r(s, n, c, o), r(s, n, u, n.notifyWith))) : (i !== u && (a = void 0, l = [t]), (o || n.resolveWith)(a, l))
                                                                }
                                                            },
                                                            d = o ? f : function() {
                                                                try {
                                                                    f()
                                                                } catch (t) {
                                                                    Tt.Deferred.exceptionHook && Tt.Deferred.exceptionHook(t, d.stackTrace), e + 1 >= s && (i !== c && (a = void 0, l = [t]), n.rejectWith(a, l))
                                                                }
                                                            };
                                                            e ? d() : (Tt.Deferred.getStackHook && (d.stackTrace = Tt.Deferred.getStackHook()), t.setTimeout(d))
                                                        }
                                                    }
                                                    var s = 0;
                                                    return Tt.Deferred(function(t) {
                                                        n[0][3].add(r(0, t, yt(o) ? o : u, t.notifyWith)), n[1][3].add(r(0, t, yt(e) ? e : u)), n[2][3].add(r(0, t, yt(i) ? i : c))
                                                    }).promise()
                                                },
                                                promise: function(t) {
                                                    return null != t ? Tt.extend(t, o) : o
                                                }
                                            },
                                            r = {};
                                            return Tt.each(n, function(t, e) {
                                                var s = e[2],
                                                a = e[5];
                                                o[e[1]] = s.add, a && s.add(function() {
                                                    i = a
                                                }, n[3 - t][2].disable, n[3 - t][3].disable, n[0][2].lock, n[0][3].lock), s.add(e[3].fire), r[e[0]] = function() {
                                                    return r[e[0] + "With"](this === r ? void 0 : this, arguments), this
                                                }, r[e[0] + "With"] = s.fireWith
                                            }), o.promise(r), e && e.call(r, r), r
                                        },
                                        when: function(t) {
                                            var e = arguments.length,
                                            n = e,
                                            i = Array(n),
                                            o = lt.call(arguments),
                                            r = Tt.Deferred(),
                                            s = function(t) {
                                                return function(n) {
                                                    i[t] = this, o[t] = arguments.length > 1 ? lt.call(arguments) : n, --e || r.resolveWith(i, o)
                                                }
                                            };
                                            if (e <= 1 && (f(t, r.done(s(n)).resolve, r.reject, !e), "pending" === r.state() || yt(o[n] && o[n].then))) return r.then();
                                            for (; n--;) f(o[n], s(n), r.reject);
                                                return r.promise()
                                        }
                                    });
var Rt = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
Tt.Deferred.exceptionHook = function(e, n) {
    t.console && t.console.warn && e && Rt.test(e.name) && t.console.warn("jQuery.Deferred exception: " + e.message, e.stack, n)
}, Tt.readyException = function(e) {
    t.setTimeout(function() {
        throw e
    })
};
var Lt = Tt.Deferred();
Tt.fn.ready = function(t) {
    return Lt.then(t)["catch"](function(t) {
        Tt.readyException(t)
    }), this
}, Tt.extend({
    isReady: !1,
    readyWait: 1,
    ready: function(t) {
        (t === !0 ? --Tt.readyWait : Tt.isReady) || (Tt.isReady = !0, t !== !0 && --Tt.readyWait > 0 || Lt.resolveWith(st, [Tt]))
    }
}), Tt.ready.then = Lt.then, "complete" === st.readyState || "loading" !== st.readyState && !st.documentElement.doScroll ? t.setTimeout(Tt.ready) : (st.addEventListener("DOMContentLoaded", d), t.addEventListener("load", d));
var qt = function(t, e, n, o, r, s, a) {
    var l = 0,
    u = t.length,
    c = null == n;
    if ("object" === i(n)) {
        r = !0;
        for (l in n) qt(t, e, l, n[l], !0, s, a)
    } else if (void 0 !== o && (r = !0, yt(o) || (a = !0), c && (a ? (e.call(t, o), e = null) : (c = e, e = function(t, e, n) {
        return c.call(Tt(t), n)
    })), e))
for (; l < u; l++) e(t[l], n, a ? o : o.call(t[l], l, e(t[l], n)));
    return r ? t : c ? e.call(t) : u ? e(t[0], n) : s
},
Ht = /^-ms-/,
_t = /-([a-z])/g,
Mt = function(t) {
    return 1 === t.nodeType || 9 === t.nodeType || !+t.nodeType
};
g.uid = 1, g.prototype = {
    cache: function(t) {
        var e = t[this.expando];
        return e || (e = {}, Mt(t) && (t.nodeType ? t[this.expando] = e : Object.defineProperty(t, this.expando, {
            value: e,
            configurable: !0
        }))), e
    },
    set: function(t, e, n) {
        var i, o = this.cache(t);
        if ("string" == typeof e) o[h(e)] = n;
        else
            for (i in e) o[h(i)] = e[i];
                return o
        },
        get: function(t, e) {
            return void 0 === e ? this.cache(t) : t[this.expando] && t[this.expando][h(e)]
        },
        access: function(t, e, n) {
            return void 0 === e || e && "string" == typeof e && void 0 === n ? this.get(t, e) : (this.set(t, e, n), void 0 !== n ? n : e)
        },
        remove: function(t, e) {
            var n, i = t[this.expando];
            if (void 0 !== i) {
                if (void 0 !== e) {
                    Array.isArray(e) ? e = e.map(h) : (e = h(e), e = e in i ? [e] : e.match(Pt) || []), n = e.length;
                    for (; n--;) delete i[e[n]]
                }(void 0 === e || Tt.isEmptyObject(i)) && (t.nodeType ? t[this.expando] = void 0 : delete t[this.expando])
        }
    },
    hasData: function(t) {
        var e = t[this.expando];
        return void 0 !== e && !Tt.isEmptyObject(e)
    }
};
var Ft = new g,
Bt = new g,
Wt = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
Ut = /[A-Z]/g;
Tt.extend({
    hasData: function(t) {
        return Bt.hasData(t) || Ft.hasData(t)
    },
    data: function(t, e, n) {
        return Bt.access(t, e, n)
    },
    removeData: function(t, e) {
        Bt.remove(t, e)
    },
    _data: function(t, e, n) {
        return Ft.access(t, e, n)
    },
    _removeData: function(t, e) {
        Ft.remove(t, e)
    }
}), Tt.fn.extend({
    data: function(t, e) {
        var n, i, o, r = this[0],
        s = r && r.attributes;
        if (void 0 === t) {
            if (this.length && (o = Bt.get(r), 1 === r.nodeType && !Ft.get(r, "hasDataAttrs"))) {
                for (n = s.length; n--;) s[n] && (i = s[n].name, 0 === i.indexOf("data-") && (i = h(i.slice(5)), v(r, i, o[i])));
                    Ft.set(r, "hasDataAttrs", !0)
            }
            return o
        }
        return "object" == typeof t ? this.each(function() {
            Bt.set(this, t)
        }) : qt(this, function(e) {
            var n;
            if (r && void 0 === e) {
                if (n = Bt.get(r, t), void 0 !== n) return n;
                if (n = v(r, t), void 0 !== n) return n
            } else this.each(function() {
                Bt.set(this, t, e)
            })
    }, null, e, arguments.length > 1, null, !0)
    },
    removeData: function(t) {
        return this.each(function() {
            Bt.remove(this, t)
        })
    }
}), Tt.extend({
    queue: function(t, e, n) {
        var i;
        if (t) return e = (e || "fx") + "queue", i = Ft.get(t, e), n && (!i || Array.isArray(n) ? i = Ft.access(t, e, Tt.makeArray(n)) : i.push(n)), i || []
    },
dequeue: function(t, e) {
    e = e || "fx";
    var n = Tt.queue(t, e),
    i = n.length,
    o = n.shift(),
    r = Tt._queueHooks(t, e),
    s = function() {
        Tt.dequeue(t, e)
    };
    "inprogress" === o && (o = n.shift(), i--), o && ("fx" === e && n.unshift("inprogress"), delete r.stop, o.call(t, s, r)), !i && r && r.empty.fire()
},
_queueHooks: function(t, e) {
    var n = e + "queueHooks";
    return Ft.get(t, n) || Ft.access(t, n, {
        empty: Tt.Callbacks("once memory").add(function() {
            Ft.remove(t, [e + "queue", n])
        })
    })
}
}), Tt.fn.extend({
    queue: function(t, e) {
        var n = 2;
        return "string" != typeof t && (e = t, t = "fx", n--), arguments.length < n ? Tt.queue(this[0], t) : void 0 === e ? this : this.each(function() {
            var n = Tt.queue(this, t, e);
            Tt._queueHooks(this, t), "fx" === t && "inprogress" !== n[0] && Tt.dequeue(this, t)
        })
    },
    dequeue: function(t) {
        return this.each(function() {
            Tt.dequeue(this, t)
        })
    },
    clearQueue: function(t) {
        return this.queue(t || "fx", [])
    },
    promise: function(t, e) {
        var n, i = 1,
        o = Tt.Deferred(),
        r = this,
        s = this.length,
        a = function() {
            --i || o.resolveWith(r, [r])
        };
        for ("string" != typeof t && (e = t, t = void 0), t = t || "fx"; s--;) n = Ft.get(r[s], t + "queueHooks"), n && n.empty && (i++, n.empty.add(a));
            return a(), o.promise(e)
    }
});
var zt = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
Vt = new RegExp("^(?:([+-])=|)(" + zt + ")([a-z%]*)$", "i"),
Xt = ["Top", "Right", "Bottom", "Left"],
Qt = function(t, e) {
    return t = e || t, "none" === t.style.display || "" === t.style.display && Tt.contains(t.ownerDocument, t) && "none" === Tt.css(t, "display")
},
Yt = function(t, e, n, i) {
    var o, r, s = {};
    for (r in e) s[r] = t.style[r], t.style[r] = e[r];
        o = n.apply(t, i || []);
    for (r in e) t.style[r] = s[r];
        return o
},
Jt = {};
Tt.fn.extend({
    show: function() {
        return x(this, !0)
    },
    hide: function() {
        return x(this)
    },
    toggle: function(t) {
        return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each(function() {
            Qt(this) ? Tt(this).show() : Tt(this).hide()
        })
    }
});
var Gt = /^(?:checkbox|radio)$/i,
Kt = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
Zt = /^$|^module$|\/(?:java|ecma)script/i,
te = {
    option: [1, "<select multiple='multiple'>", "</select>"],
    thead: [1, "<table>", "</table>"],
    col: [2, "<table><colgroup>", "</colgroup></table>"],
    tr: [2, "<table><tbody>", "</tbody></table>"],
    td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
    _default: [0, "", ""]
};
te.optgroup = te.option, te.tbody = te.tfoot = te.colgroup = te.caption = te.thead, te.th = te.td;
var ee = /<|&#?\w+;/;
! function() {
    var t = st.createDocumentFragment(),
    e = t.appendChild(st.createElement("div")),
    n = st.createElement("input");
    n.setAttribute("type", "radio"), n.setAttribute("checked", "checked"), n.setAttribute("name", "t"), e.appendChild(n), vt.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", vt.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
}();
var ne = st.documentElement,
ie = /^key/,
oe = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
re = /^([^.]*)(?:\.(.+)|)/;
Tt.event = {
    global: {},
    add: function(t, e, n, i, o) {
        var r, s, a, l, u, c, f, d, p, h, g, m = Ft.get(t);
        if (m)
            for (n.handler && (r = n, n = r.handler, o = r.selector), o && Tt.find.matchesSelector(ne, o), n.guid || (n.guid = Tt.guid++), (l = m.events) || (l = m.events = {}), (s = m.handle) || (s = m.handle = function(e) {
                return "undefined" != typeof Tt && Tt.event.triggered !== e.type ? Tt.event.dispatch.apply(t, arguments) : void 0
            }), e = (e || "").match(Pt) || [""], u = e.length; u--;) a = re.exec(e[u]) || [], p = g = a[1], h = (a[2] || "").split(".").sort(), p && (f = Tt.event.special[p] || {}, p = (o ? f.delegateType : f.bindType) || p, f = Tt.event.special[p] || {}, c = Tt.extend({
                type: p,
                origType: g,
                data: i,
                handler: n,
                guid: n.guid,
                selector: o,
                needsContext: o && Tt.expr.match.needsContext.test(o),
                namespace: h.join(".")
            }, r), (d = l[p]) || (d = l[p] = [], d.delegateCount = 0, f.setup && f.setup.call(t, i, h, s) !== !1 || t.addEventListener && t.addEventListener(p, s)), f.add && (f.add.call(t, c), c.handler.guid || (c.handler.guid = n.guid)), o ? d.splice(d.delegateCount++, 0, c) : d.push(c), Tt.event.global[p] = !0)
        },
        remove: function(t, e, n, i, o) {
            var r, s, a, l, u, c, f, d, p, h, g, m = Ft.hasData(t) && Ft.get(t);
            if (m && (l = m.events)) {
                for (e = (e || "").match(Pt) || [""], u = e.length; u--;)
                    if (a = re.exec(e[u]) || [], p = g = a[1], h = (a[2] || "").split(".").sort(), p) {
                        for (f = Tt.event.special[p] || {}, p = (i ? f.delegateType : f.bindType) || p, d = l[p] || [], a = a[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = r = d.length; r--;) c = d[r], !o && g !== c.origType || n && n.guid !== c.guid || a && !a.test(c.namespace) || i && i !== c.selector && ("**" !== i || !c.selector) || (d.splice(r, 1), c.selector && d.delegateCount--, f.remove && f.remove.call(t, c));
                            s && !d.length && (f.teardown && f.teardown.call(t, h, m.handle) !== !1 || Tt.removeEvent(t, p, m.handle), delete l[p])
                    } else
                    for (p in l) Tt.event.remove(t, p + e[u], n, i, !0);
                        Tt.isEmptyObject(l) && Ft.remove(t, "handle events")
                }
            },
            dispatch: function(t) {
                var e, n, i, o, r, s, a = Tt.event.fix(t),
                l = new Array(arguments.length),
                u = (Ft.get(this, "events") || {})[a.type] || [],
                c = Tt.event.special[a.type] || {};
                for (l[0] = a, e = 1; e < arguments.length; e++) l[e] = arguments[e];
                    if (a.delegateTarget = this, !c.preDispatch || c.preDispatch.call(this, a) !== !1) {
                        for (s = Tt.event.handlers.call(this, a, u), e = 0;
                            (o = s[e++]) && !a.isPropagationStopped();)
                            for (a.currentTarget = o.elem, n = 0;
                                (r = o.handlers[n++]) && !a.isImmediatePropagationStopped();) a.rnamespace && !a.rnamespace.test(r.namespace) || (a.handleObj = r, a.data = r.data, i = ((Tt.event.special[r.origType] || {}).handle || r.handler).apply(o.elem, l), void 0 !== i && (a.result = i) === !1 && (a.preventDefault(), a.stopPropagation()));
                                return c.postDispatch && c.postDispatch.call(this, a), a.result
                        }
                    },
                    handlers: function(t, e) {
                        var n, i, o, r, s, a = [],
                        l = e.delegateCount,
                        u = t.target;
                        if (l && u.nodeType && !("click" === t.type && t.button >= 1))
                            for (; u !== this; u = u.parentNode || this)
                                if (1 === u.nodeType && ("click" !== t.type || u.disabled !== !0)) {
                                    for (r = [], s = {}, n = 0; n < l; n++) i = e[n], o = i.selector + " ", void 0 === s[o] && (s[o] = i.needsContext ? Tt(o, this).index(u) > -1 : Tt.find(o, this, null, [u]).length), s[o] && r.push(i);
                                        r.length && a.push({
                                            elem: u,
                                            handlers: r
                                        })
                                }
                                return u = this, l < e.length && a.push({
                                    elem: u,
                                    handlers: e.slice(l)
                                }), a
                            },
                            addProp: function(t, e) {
                                Object.defineProperty(Tt.Event.prototype, t, {
                                    enumerable: !0,
                                    configurable: !0,
                                    get: yt(e) ? function() {
                                        if (this.originalEvent) return e(this.originalEvent)
                                    } : function() {
                                        if (this.originalEvent) return this.originalEvent[t]
                                    },
                                set: function(e) {
                                    Object.defineProperty(this, t, {
                                        enumerable: !0,
                                        configurable: !0,
                                        writable: !0,
                                        value: e
                                    })
                                }
                            })
                            },
                            fix: function(t) {
                                return t[Tt.expando] ? t : new Tt.Event(t)
                            },
                            special: {
                                load: {
                                    noBubble: !0
                                },
                                focus: {
                                    trigger: function() {
                                        if (this !== $() && this.focus) return this.focus(), !1
                                    },
                                delegateType: "focusin"
                            },
                            blur: {
                                trigger: function() {
                                    if (this === $() && this.blur) return this.blur(), !1
                                },
                            delegateType: "focusout"
                        },
                        click: {
                            trigger: function() {
                                if ("checkbox" === this.type && this.click && r(this, "input")) return this.click(), !1
                            },
                        _default: function(t) {
                            return r(t.target, "a")
                        }
                    },
                    beforeunload: {
                        postDispatch: function(t) {
                            void 0 !== t.result && t.originalEvent && (t.originalEvent.returnValue = t.result)
                        }
                    }
                }
            }, Tt.removeEvent = function(t, e, n) {
                t.removeEventListener && t.removeEventListener(e, n)
            }, Tt.Event = function(t, e) {
                return this instanceof Tt.Event ? (t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || void 0 === t.defaultPrevented && t.returnValue === !1 ? E : S, this.target = t.target && 3 === t.target.nodeType ? t.target.parentNode : t.target, this.currentTarget = t.currentTarget, this.relatedTarget = t.relatedTarget) : this.type = t, e && Tt.extend(this, e), this.timeStamp = t && t.timeStamp || Date.now(), void(this[Tt.expando] = !0)) : new Tt.Event(t, e)
            }, Tt.Event.prototype = {
                constructor: Tt.Event,
                isDefaultPrevented: S,
                isPropagationStopped: S,
                isImmediatePropagationStopped: S,
                isSimulated: !1,
                preventDefault: function() {
                    var t = this.originalEvent;
                    this.isDefaultPrevented = E, t && !this.isSimulated && t.preventDefault()
                },
                stopPropagation: function() {
                    var t = this.originalEvent;
                    this.isPropagationStopped = E, t && !this.isSimulated && t.stopPropagation()
                },
                stopImmediatePropagation: function() {
                    var t = this.originalEvent;
                    this.isImmediatePropagationStopped = E, t && !this.isSimulated && t.stopImmediatePropagation(), this.stopPropagation()
                }
            }, Tt.each({
                altKey: !0,
                bubbles: !0,
                cancelable: !0,
                changedTouches: !0,
                ctrlKey: !0,
                detail: !0,
                eventPhase: !0,
                metaKey: !0,
                pageX: !0,
                pageY: !0,
                shiftKey: !0,
                view: !0,
                "char": !0,
                charCode: !0,
                key: !0,
                keyCode: !0,
                button: !0,
                buttons: !0,
                clientX: !0,
                clientY: !0,
                offsetX: !0,
                offsetY: !0,
                pointerId: !0,
                pointerType: !0,
                screenX: !0,
                screenY: !0,
                targetTouches: !0,
                toElement: !0,
                touches: !0,
                which: function(t) {
                    var e = t.button;
                    return null == t.which && ie.test(t.type) ? null != t.charCode ? t.charCode : t.keyCode : !t.which && void 0 !== e && oe.test(t.type) ? 1 & e ? 1 : 2 & e ? 3 : 4 & e ? 2 : 0 : t.which
                }
            }, Tt.event.addProp), Tt.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout",
                pointerenter: "pointerover",
                pointerleave: "pointerout"
            }, function(t, e) {
                Tt.event.special[t] = {
                    delegateType: e,
                    bindType: e,
                    handle: function(t) {
                        var n, i = this,
                        o = t.relatedTarget,
                        r = t.handleObj;
                        return o && (o === i || Tt.contains(i, o)) || (t.type = r.origType, n = r.handler.apply(this, arguments), t.type = e), n
                    }
                }
            }), Tt.fn.extend({
                on: function(t, e, n, i) {
                    return A(this, t, e, n, i)
                },
                one: function(t, e, n, i) {
                    return A(this, t, e, n, i, 1)
                },
                off: function(t, e, n) {
                    var i, o;
                    if (t && t.preventDefault && t.handleObj) return i = t.handleObj, Tt(t.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;
                    if ("object" == typeof t) {
                        for (o in t) this.off(o, e, t[o]);
                            return this
                    }
                    return e !== !1 && "function" != typeof e || (n = e, e = void 0), n === !1 && (n = S), this.each(function() {
                        Tt.event.remove(this, t, n, e)
                    })
                }
            });
            var se = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
            ae = /<script|<style|<link/i,
            le = /checked\s*(?:[^=]|=\s*.checked.)/i,
            ue = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
            Tt.extend({
                htmlPrefilter: function(t) {
                    return t.replace(se, "<$1></$2>")
                },
                clone: function(t, e, n) {
                    var i, o, r, s, a = t.cloneNode(!0),
                    l = Tt.contains(t.ownerDocument, t);
                    if (!(vt.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || Tt.isXMLDoc(t)))
                        for (s = w(a), r = w(t), i = 0, o = r.length; i < o; i++) O(r[i], s[i]);
                            if (e)
                                if (n)
                                    for (r = r || w(t), s = s || w(a), i = 0, o = r.length; i < o; i++) j(r[i], s[i]);
                                        else j(t, a);
                                    return s = w(a, "script"), s.length > 0 && T(s, !l && w(t, "script")), a
                                },
                                cleanData: function(t) {
                                    for (var e, n, i, o = Tt.event.special, r = 0; void 0 !== (n = t[r]); r++)
                                        if (Mt(n)) {
                                            if (e = n[Ft.expando]) {
                                                if (e.events)
                                                    for (i in e.events) o[i] ? Tt.event.remove(n, i) : Tt.removeEvent(n, i, e.handle);
                                                        n[Ft.expando] = void 0
                                                }
                                                n[Bt.expando] && (n[Bt.expando] = void 0)
                                            }
                                        }
                                    }), Tt.fn.extend({
                                        detach: function(t) {
                                            return P(this, t, !0)
                                        },
                                        remove: function(t) {
                                            return P(this, t)
                                        },
                                        text: function(t) {
                                            return qt(this, function(t) {
                                                return void 0 === t ? Tt.text(this) : this.empty().each(function() {
                                                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = t)
                                                })
                                            }, null, t, arguments.length)
                                        },
                                        append: function() {
                                            return I(this, arguments, function(t) {
                                                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                                    var e = N(this, t);
                                                    e.appendChild(t)
                                                }
                                            })
                                        },
                                        prepend: function() {
                                            return I(this, arguments, function(t) {
                                                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                                    var e = N(this, t);
                                                    e.insertBefore(t, e.firstChild)
                                                }
                                            })
                                        },
                                        before: function() {
                                            return I(this, arguments, function(t) {
                                                this.parentNode && this.parentNode.insertBefore(t, this)
                                            })
                                        },
                                        after: function() {
                                            return I(this, arguments, function(t) {
                                                this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
                                            })
                                        },
                                        empty: function() {
                                            for (var t, e = 0; null != (t = this[e]); e++) 1 === t.nodeType && (Tt.cleanData(w(t, !1)), t.textContent = "");
                                                return this
                                        },
                                        clone: function(t, e) {
                                            return t = null != t && t, e = null == e ? t : e, this.map(function() {
                                                return Tt.clone(this, t, e)
                                            })
                                        },
                                        html: function(t) {
                                            return qt(this, function(t) {
                                                var e = this[0] || {},
                                                n = 0,
                                                i = this.length;
                                                if (void 0 === t && 1 === e.nodeType) return e.innerHTML;
                                                if ("string" == typeof t && !ae.test(t) && !te[(Kt.exec(t) || ["", ""])[1].toLowerCase()]) {
                                                    t = Tt.htmlPrefilter(t);
                                                    try {
                                                        for (; n < i; n++) e = this[n] || {}, 1 === e.nodeType && (Tt.cleanData(w(e, !1)), e.innerHTML = t);
                                                            e = 0
                                                    } catch (o) {}
                                                }
                                                e && this.empty().append(t)
                                            }, null, t, arguments.length)
                                        },
                                        replaceWith: function() {
                                            var t = [];
                                            return I(this, arguments, function(e) {
                                                var n = this.parentNode;
                                                Tt.inArray(this, t) < 0 && (Tt.cleanData(w(this)), n && n.replaceChild(e, this))
                                            }, t)
                                        }
                                    }), Tt.each({
                                        appendTo: "append",
                                        prependTo: "prepend",
                                        insertBefore: "before",
                                        insertAfter: "after",
                                        replaceAll: "replaceWith"
                                    }, function(t, e) {
                                        Tt.fn[t] = function(t) {
                                            for (var n, i = [], o = Tt(t), r = o.length - 1, s = 0; s <= r; s++) n = s === r ? this : this.clone(!0), Tt(o[s])[e](n), ct.apply(i, n.get());
                                                return this.pushStack(i)
                                        }
                                    });
                                    var ce = new RegExp("^(" + zt + ")(?!px)[a-z%]+$", "i"),
                                    fe = function(e) {
                                        var n = e.ownerDocument.defaultView;
                                        return n && n.opener || (n = t), n.getComputedStyle(e)
                                    },
                                    de = new RegExp(Xt.join("|"), "i");
                                    ! function() {
                                        function e() {
                                            if (u) {
                                                l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", u.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", ne.appendChild(l).appendChild(u);
                                                var e = t.getComputedStyle(u);
                                                i = "1%" !== e.top, a = 12 === n(e.marginLeft), u.style.right = "60%", s = 36 === n(e.right), o = 36 === n(e.width), u.style.position = "absolute", r = 36 === u.offsetWidth || "absolute", ne.removeChild(l), u = null
                                            }
                                        }
                                        function n(t) {
                                            return Math.round(parseFloat(t))
                                        }
                                        var i, o, r, s, a, l = st.createElement("div"),
                                        u = st.createElement("div");
                                        u.style && (u.style.backgroundClip = "content-box", u.cloneNode(!0).style.backgroundClip = "", vt.clearCloneStyle = "content-box" === u.style.backgroundClip, Tt.extend(vt, {
                                            boxSizingReliable: function() {
                                                return e(), o
                                            },
                                            pixelBoxStyles: function() {
                                                return e(), s
                                            },
                                            pixelPosition: function() {
                                                return e(), i
                                            },
                                            reliableMarginLeft: function() {
                                                return e(), a
                                            },
                                            scrollboxSize: function() {
                                                return e(), r
                                            }
                                        }))
                                    }();
                                    var pe = /^(none|table(?!-c[ea]).+)/,
                                    he = /^--/,
                                    ge = {
                                        position: "absolute",
                                        visibility: "hidden",
                                        display: "block"
                                    },
                                    me = {
                                        letterSpacing: "0",
                                        fontWeight: "400"
                                    },
                                    ve = ["Webkit", "Moz", "ms"],
                                    ye = st.createElement("div").style;
                                    Tt.extend({
                                        cssHooks: {
                                            opacity: {
                                                get: function(t, e) {
                                                    if (e) {
                                                        var n = R(t, "opacity");
                                                        return "" === n ? "1" : n
                                                    }
                                                }
                                            }
                                        },
                                        cssNumber: {
                                            animationIterationCount: !0,
                                            columnCount: !0,
                                            fillOpacity: !0,
                                            flexGrow: !0,
                                            flexShrink: !0,
                                            fontWeight: !0,
                                            lineHeight: !0,
                                            opacity: !0,
                                            order: !0,
                                            orphans: !0,
                                            widows: !0,
                                            zIndex: !0,
                                            zoom: !0
                                        },
                                        cssProps: {},
                                        style: function(t, e, n, i) {
                                            if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                                                var o, r, s, a = h(e),
                                                l = he.test(e),
                                                u = t.style;
                                                return l || (e = H(a)), s = Tt.cssHooks[e] || Tt.cssHooks[a], void 0 === n ? s && "get" in s && void 0 !== (o = s.get(t, !1, i)) ? o : u[e] : (r = typeof n, "string" === r && (o = Vt.exec(n)) && o[1] && (n = y(t, e, o), r = "number"), null != n && n === n && ("number" === r && (n += o && o[3] || (Tt.cssNumber[a] ? "" : "px")), vt.clearCloneStyle || "" !== n || 0 !== e.indexOf("background") || (u[e] = "inherit"), s && "set" in s && void 0 === (n = s.set(t, n, i)) || (l ? u.setProperty(e, n) : u[e] = n)), void 0)
                                            }
                                        },
                                        css: function(t, e, n, i) {
                                            var o, r, s, a = h(e),
                                            l = he.test(e);
                                            return l || (e = H(a)), s = Tt.cssHooks[e] || Tt.cssHooks[a], s && "get" in s && (o = s.get(t, !0, n)), void 0 === o && (o = R(t, e, i)), "normal" === o && e in me && (o = me[e]), "" === n || n ? (r = parseFloat(o), n === !0 || isFinite(r) ? r || 0 : o) : o
                                        }
                                    }), Tt.each(["height", "width"], function(t, e) {
                                        Tt.cssHooks[e] = {
                                            get: function(t, n, i) {
                                                if (n) return !pe.test(Tt.css(t, "display")) || t.getClientRects().length && t.getBoundingClientRect().width ? F(t, e, i) : Yt(t, ge, function() {
                                                    return F(t, e, i)
                                                })
                                            },
                                            set: function(t, n, i) {
                                                var o, r = fe(t),
                                                s = "border-box" === Tt.css(t, "boxSizing", !1, r),
                                                a = i && M(t, e, i, s, r);
                                                return s && vt.scrollboxSize() === r.position && (a -= Math.ceil(t["offset" + e[0].toUpperCase() + e.slice(1)] - parseFloat(r[e]) - M(t, e, "border", !1, r) - .5)), a && (o = Vt.exec(n)) && "px" !== (o[3] || "px") && (t.style[e] = n, n = Tt.css(t, e)), _(t, n, a)
                                            }
                                        }
                                    }), Tt.cssHooks.marginLeft = L(vt.reliableMarginLeft, function(t, e) {
                                        if (e) return (parseFloat(R(t, "marginLeft")) || t.getBoundingClientRect().left - Yt(t, {
                                            marginLeft: 0
                                        }, function() {
                                            return t.getBoundingClientRect().left
                                        })) + "px"
                                    }), Tt.each({
                                        margin: "",
                                        padding: "",
                                        border: "Width"
                                    }, function(t, e) {
                                        Tt.cssHooks[t + e] = {
                                            expand: function(n) {
                                                for (var i = 0, o = {}, r = "string" == typeof n ? n.split(" ") : [n]; i < 4; i++) o[t + Xt[i] + e] = r[i] || r[i - 2] || r[0];
                                                    return o
                                            }
                                        }, "margin" !== t && (Tt.cssHooks[t + e].set = _)
                                    }), Tt.fn.extend({
                                        css: function(t, e) {
                                            return qt(this, function(t, e, n) {
                                                var i, o, r = {},
                                                s = 0;
                                                if (Array.isArray(e)) {
                                                    for (i = fe(t), o = e.length; s < o; s++) r[e[s]] = Tt.css(t, e[s], !1, i);
                                                        return r
                                                }
                                                return void 0 !== n ? Tt.style(t, e, n) : Tt.css(t, e)
                                            }, t, e, arguments.length > 1)
                                        }
                                    }), Tt.Tween = B, B.prototype = {
                                        constructor: B,
                                        init: function(t, e, n, i, o, r) {
                                            this.elem = t, this.prop = n, this.easing = o || Tt.easing._default, this.options = e, this.start = this.now = this.cur(), this.end = i, this.unit = r || (Tt.cssNumber[n] ? "" : "px")
                                        },
                                        cur: function() {
                                            var t = B.propHooks[this.prop];
                                            return t && t.get ? t.get(this) : B.propHooks._default.get(this)
                                        },
                                        run: function(t) {
                                            var e, n = B.propHooks[this.prop];
                                            return this.options.duration ? this.pos = e = Tt.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = e = t, this.now = (this.end - this.start) * e + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : B.propHooks._default.set(this), this
                                        }
                                    }, B.prototype.init.prototype = B.prototype, B.propHooks = {
                                        _default: {
                                            get: function(t) {
                                                var e;
                                                return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (e = Tt.css(t.elem, t.prop, ""), e && "auto" !== e ? e : 0)
                                            },
                                            set: function(t) {
                                                Tt.fx.step[t.prop] ? Tt.fx.step[t.prop](t) : 1 !== t.elem.nodeType || null == t.elem.style[Tt.cssProps[t.prop]] && !Tt.cssHooks[t.prop] ? t.elem[t.prop] = t.now : Tt.style(t.elem, t.prop, t.now + t.unit)
                                            }
                                        }
                                    }, B.propHooks.scrollTop = B.propHooks.scrollLeft = {
                                        set: function(t) {
                                            t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
                                        }
                                    }, Tt.easing = {
                                        linear: function(t) {
                                            return t
                                        },
                                        swing: function(t) {
                                            return .5 - Math.cos(t * Math.PI) / 2
                                        },
                                        _default: "swing"
                                    }, Tt.fx = B.prototype.init, Tt.fx.step = {};
                                    var be, xe, we = /^(?:toggle|show|hide)$/,
                                    Te = /queueHooks$/;
                                    Tt.Animation = Tt.extend(Y, {
                                        tweeners: {
                                            "*": [function(t, e) {
                                                var n = this.createTween(t, e);
                                                return y(n.elem, t, Vt.exec(e), n), n
                                            }]
                                        },
                                        tweener: function(t, e) {
                                            yt(t) ? (e = t, t = ["*"]) : t = t.match(Pt);
                                            for (var n, i = 0, o = t.length; i < o; i++) n = t[i], Y.tweeners[n] = Y.tweeners[n] || [], Y.tweeners[n].unshift(e);
                                        },
                                    prefilters: [X],
                                    prefilter: function(t, e) {
                                        e ? Y.prefilters.unshift(t) : Y.prefilters.push(t)
                                    }
                                }), Tt.speed = function(t, e, n) {
                                        var i = t && "object" == typeof t ? Tt.extend({}, t) : {
                                            complete: n || !n && e || yt(t) && t,
                                            duration: t,
                                            easing: n && e || e && !yt(e) && e
                                        };
                                        return Tt.fx.off ? i.duration = 0 : "number" != typeof i.duration && (i.duration in Tt.fx.speeds ? i.duration = Tt.fx.speeds[i.duration] : i.duration = Tt.fx.speeds._default), null != i.queue && i.queue !== !0 || (i.queue = "fx"), i.old = i.complete, i.complete = function() {
                                            yt(i.old) && i.old.call(this), i.queue && Tt.dequeue(this, i.queue)
                                        }, i
                                    }, Tt.fn.extend({
                                        fadeTo: function(t, e, n, i) {
                                            return this.filter(Qt).css("opacity", 0).show().end().animate({
                                                opacity: e
                                            }, t, n, i)
                                        },
                                        animate: function(t, e, n, i) {
                                            var o = Tt.isEmptyObject(t),
                                            r = Tt.speed(e, n, i),
                                            s = function() {
                                                var e = Y(this, Tt.extend({}, t), r);
                                                (o || Ft.get(this, "finish")) && e.stop(!0)
                                            };
                                            return s.finish = s, o || r.queue === !1 ? this.each(s) : this.queue(r.queue, s)
                                        },
                                        stop: function(t, e, n) {
                                            var i = function(t) {
                                                var e = t.stop;
                                                delete t.stop, e(n)
                                            };
                                            return "string" != typeof t && (n = e, e = t, t = void 0), e && t !== !1 && this.queue(t || "fx", []), this.each(function() {
                                                var e = !0,
                                                o = null != t && t + "queueHooks",
                                                r = Tt.timers,
                                                s = Ft.get(this);
                                                if (o) s[o] && s[o].stop && i(s[o]);
                                                else
                                                    for (o in s) s[o] && s[o].stop && Te.test(o) && i(s[o]);
                                                        for (o = r.length; o--;) r[o].elem !== this || null != t && r[o].queue !== t || (r[o].anim.stop(n), e = !1, r.splice(o, 1));
                                                            !e && n || Tt.dequeue(this, t)
                                                    })
                                        },
                                        finish: function(t) {
                                            return t !== !1 && (t = t || "fx"), this.each(function() {
                                                var e, n = Ft.get(this),
                                                i = n[t + "queue"],
                                                o = n[t + "queueHooks"],
                                                r = Tt.timers,
                                                s = i ? i.length : 0;
                                                for (n.finish = !0, Tt.queue(this, t, []), o && o.stop && o.stop.call(this, !0), e = r.length; e--;) r[e].elem === this && r[e].queue === t && (r[e].anim.stop(!0), r.splice(e, 1));
                                                    for (e = 0; e < s; e++) i[e] && i[e].finish && i[e].finish.call(this);
                                                        delete n.finish
                                                })
                                        }
                                    }), Tt.each(["toggle", "show", "hide"], function(t, e) {
                                        var n = Tt.fn[e];
                                        Tt.fn[e] = function(t, i, o) {
                                            return null == t || "boolean" == typeof t ? n.apply(this, arguments) : this.animate(z(e, !0), t, i, o)
                                        }
                                    }), Tt.each({
                                        slideDown: z("show"),
                                        slideUp: z("hide"),
                                        slideToggle: z("toggle"),
                                        fadeIn: {
                                            opacity: "show"
                                        },
                                        fadeOut: {
                                            opacity: "hide"
                                        },
                                        fadeToggle: {
                                            opacity: "toggle"
                                        }
                                    }, function(t, e) {
                                        Tt.fn[t] = function(t, n, i) {
                                            return this.animate(e, t, n, i)
                                        }
                                    }), Tt.timers = [], Tt.fx.tick = function() {
                                        var t, e = 0,
                                        n = Tt.timers;
                                        for (be = Date.now(); e < n.length; e++) t = n[e], t() || n[e] !== t || n.splice(e--, 1);
                                            n.length || Tt.fx.stop(), be = void 0
                                    }, Tt.fx.timer = function(t) {
                                        Tt.timers.push(t), Tt.fx.start()
                                    }, Tt.fx.interval = 13, Tt.fx.start = function() {
                                        xe || (xe = !0, W())
                                    }, Tt.fx.stop = function() {
                                        xe = null
                                    }, Tt.fx.speeds = {
                                        slow: 600,
                                        fast: 200,
                                        _default: 400
                                    }, Tt.fn.delay = function(e, n) {
                                        return e = Tt.fx ? Tt.fx.speeds[e] || e : e, n = n || "fx", this.queue(n, function(n, i) {
                                            var o = t.setTimeout(n, e);
                                            i.stop = function() {
                                                t.clearTimeout(o)
                                            }
                                        })
                                    },
                                    function() {
                                        var t = st.createElement("input"),
                                        e = st.createElement("select"),
                                        n = e.appendChild(st.createElement("option"));
                                        t.type = "checkbox", vt.checkOn = "" !== t.value, vt.optSelected = n.selected, t = st.createElement("input"), t.value = "t", t.type = "radio", vt.radioValue = "t" === t.value
                                    }();
                                    var Ce, Ee = Tt.expr.attrHandle;
                                    Tt.fn.extend({
                                        attr: function(t, e) {
                                            return qt(this, Tt.attr, t, e, arguments.length > 1)
                                        },
                                        removeAttr: function(t) {
                                            return this.each(function() {
                                                Tt.removeAttr(this, t)
                                            })
                                        }
                                    }), Tt.extend({
                                        attr: function(t, e, n) {
                                            var i, o, r = t.nodeType;
                                            if (3 !== r && 8 !== r && 2 !== r) return "undefined" == typeof t.getAttribute ? Tt.prop(t, e, n) : (1 === r && Tt.isXMLDoc(t) || (o = Tt.attrHooks[e.toLowerCase()] || (Tt.expr.match.bool.test(e) ? Ce : void 0)), void 0 !== n ? null === n ? void Tt.removeAttr(t, e) : o && "set" in o && void 0 !== (i = o.set(t, n, e)) ? i : (t.setAttribute(e, n + ""), n) : o && "get" in o && null !== (i = o.get(t, e)) ? i : (i = Tt.find.attr(t, e), null == i ? void 0 : i))
                                        },
                                    attrHooks: {
                                        type: {
                                            set: function(t, e) {
                                                if (!vt.radioValue && "radio" === e && r(t, "input")) {
                                                    var n = t.value;
                                                    return t.setAttribute("type", e), n && (t.value = n), e
                                                }
                                            }
                                        }
                                    },
                                    removeAttr: function(t, e) {
                                        var n, i = 0,
                                        o = e && e.match(Pt);
                                        if (o && 1 === t.nodeType)
                                            for (; n = o[i++];) t.removeAttribute(n)
                                        }
                                }), Ce = {
                                        set: function(t, e, n) {
                                            return e === !1 ? Tt.removeAttr(t, n) : t.setAttribute(n, n), n
                                        }
                                    }, Tt.each(Tt.expr.match.bool.source.match(/\w+/g), function(t, e) {
                                        var n = Ee[e] || Tt.find.attr;
                                        Ee[e] = function(t, e, i) {
                                            var o, r, s = e.toLowerCase();
                                            return i || (r = Ee[s], Ee[s] = o, o = null != n(t, e, i) ? s : null, Ee[s] = r), o
                                        }
                                    });
                                    var Se = /^(?:input|select|textarea|button)$/i,
                                    $e = /^(?:a|area)$/i;
                                    Tt.fn.extend({
                                        prop: function(t, e) {
                                            return qt(this, Tt.prop, t, e, arguments.length > 1)
                                        },
                                        removeProp: function(t) {
                                            return this.each(function() {
                                                delete this[Tt.propFix[t] || t]
                                            })
                                        }
                                    }), Tt.extend({
                                        prop: function(t, e, n) {
                                            var i, o, r = t.nodeType;
                                            if (3 !== r && 8 !== r && 2 !== r) return 1 === r && Tt.isXMLDoc(t) || (e = Tt.propFix[e] || e, o = Tt.propHooks[e]), void 0 !== n ? o && "set" in o && void 0 !== (i = o.set(t, n, e)) ? i : t[e] = n : o && "get" in o && null !== (i = o.get(t, e)) ? i : t[e]
                                        },
                                    propHooks: {
                                        tabIndex: {
                                            get: function(t) {
                                                var e = Tt.find.attr(t, "tabindex");
                                                return e ? parseInt(e, 10) : Se.test(t.nodeName) || $e.test(t.nodeName) && t.href ? 0 : -1
                                            }
                                        }
                                    },
                                    propFix: {
                                        "for": "htmlFor",
                                        "class": "className"
                                    }
                                }), vt.optSelected || (Tt.propHooks.selected = {
                                    get: function(t) {
                                        var e = t.parentNode;
                                        return e && e.parentNode && e.parentNode.selectedIndex, null
                                    },
                                    set: function(t) {
                                        var e = t.parentNode;
                                        e && (e.selectedIndex, e.parentNode && e.parentNode.selectedIndex)
                                    }
                                }), Tt.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
                                    Tt.propFix[this.toLowerCase()] = this
                                }), Tt.fn.extend({
                                    addClass: function(t) {
                                        var e, n, i, o, r, s, a, l = 0;
                                        if (yt(t)) return this.each(function(e) {
                                            Tt(this).addClass(t.call(this, e, G(this)))
                                        });
                                            if (e = K(t), e.length)
                                                for (; n = this[l++];)
                                                    if (o = G(n), i = 1 === n.nodeType && " " + J(o) + " ") {
                                                        for (s = 0; r = e[s++];) i.indexOf(" " + r + " ") < 0 && (i += r + " ");
                                                            a = J(i), o !== a && n.setAttribute("class", a)
                                                    }
                                                    return this
                                                },
                                                removeClass: function(t) {
                                                    var e, n, i, o, r, s, a, l = 0;
                                                    if (yt(t)) return this.each(function(e) {
                                                        Tt(this).removeClass(t.call(this, e, G(this)))
                                                    });
                                                        if (!arguments.length) return this.attr("class", "");
                                                        if (e = K(t), e.length)
                                                            for (; n = this[l++];)
                                                                if (o = G(n), i = 1 === n.nodeType && " " + J(o) + " ") {
                                                                    for (s = 0; r = e[s++];)
                                                                        for (; i.indexOf(" " + r + " ") > -1;) i = i.replace(" " + r + " ", " ");
                                                                            a = J(i), o !== a && n.setAttribute("class", a)
                                                                    }
                                                                    return this
                                                                },
                                                                toggleClass: function(t, e) {
                                                                    var n = typeof t,
                                                                    i = "string" === n || Array.isArray(t);
                                                                    return "boolean" == typeof e && i ? e ? this.addClass(t) : this.removeClass(t) : yt(t) ? this.each(function(n) {
                                                                        Tt(this).toggleClass(t.call(this, n, G(this), e), e)
                                                                    }) : this.each(function() {
                                                                        var e, o, r, s;
                                                                        if (i)
                                                                            for (o = 0, r = Tt(this), s = K(t); e = s[o++];) r.hasClass(e) ? r.removeClass(e) : r.addClass(e);
                                                                                else void 0 !== t && "boolean" !== n || (e = G(this), e && Ft.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || t === !1 ? "" : Ft.get(this, "__className__") || ""))
                                                                            })
                                                                },
                                                                hasClass: function(t) {
                                                                    var e, n, i = 0;
                                                                    for (e = " " + t + " "; n = this[i++];)
                                                                        if (1 === n.nodeType && (" " + J(G(n)) + " ").indexOf(e) > -1) return !0;
                                                                    return !1
                                                                }
                                                            });
var Ae = /\r/g;
Tt.fn.extend({
    val: function(t) {
        var e, n, i, o = this[0]; {
            if (arguments.length) return i = yt(t), this.each(function(n) {
                var o;
                1 === this.nodeType && (o = i ? t.call(this, n, Tt(this).val()) : t, null == o ? o = "" : "number" == typeof o ? o += "" : Array.isArray(o) && (o = Tt.map(o, function(t) {
                    return null == t ? "" : t + ""
                })), e = Tt.valHooks[this.type] || Tt.valHooks[this.nodeName.toLowerCase()], e && "set" in e && void 0 !== e.set(this, o, "value") || (this.value = o))
            });
                if (o) return e = Tt.valHooks[o.type] || Tt.valHooks[o.nodeName.toLowerCase()], e && "get" in e && void 0 !== (n = e.get(o, "value")) ? n : (n = o.value, "string" == typeof n ? n.replace(Ae, "") : null == n ? "" : n)
            }
    }
}), Tt.extend({
    valHooks: {
        option: {
            get: function(t) {
                var e = Tt.find.attr(t, "value");
                return null != e ? e : J(Tt.text(t))
            }
        },
        select: {
            get: function(t) {
                var e, n, i, o = t.options,
                s = t.selectedIndex,
                a = "select-one" === t.type,
                l = a ? null : [],
                u = a ? s + 1 : o.length;
                for (i = s < 0 ? u : a ? s : 0; i < u; i++)
                    if (n = o[i], (n.selected || i === s) && !n.disabled && (!n.parentNode.disabled || !r(n.parentNode, "optgroup"))) {
                        if (e = Tt(n).val(), a) return e;
                        l.push(e)
                    }
                    return l
                },
                set: function(t, e) {
                    for (var n, i, o = t.options, r = Tt.makeArray(e), s = o.length; s--;) i = o[s], (i.selected = Tt.inArray(Tt.valHooks.option.get(i), r) > -1) && (n = !0);
                        return n || (t.selectedIndex = -1), r
                }
            }
        }
    }), Tt.each(["radio", "checkbox"], function() {
        Tt.valHooks[this] = {
            set: function(t, e) {
                if (Array.isArray(e)) return t.checked = Tt.inArray(Tt(t).val(), e) > -1
            }
    }, vt.checkOn || (Tt.valHooks[this].get = function(t) {
        return null === t.getAttribute("value") ? "on" : t.value
    })
}), vt.focusin = "onfocusin" in t;
    var Ne = /^(?:focusinfocus|focusoutblur)$/,
    De = function(t) {
        t.stopPropagation()
    };
    Tt.extend(Tt.event, {
        trigger: function(e, n, i, o) {
            var r, s, a, l, u, c, f, d, p = [i || st],
            h = ht.call(e, "type") ? e.type : e,
            g = ht.call(e, "namespace") ? e.namespace.split(".") : [];
            if (s = d = a = i = i || st, 3 !== i.nodeType && 8 !== i.nodeType && !Ne.test(h + Tt.event.triggered) && (h.indexOf(".") > -1 && (g = h.split("."), h = g.shift(), g.sort()), u = h.indexOf(":") < 0 && "on" + h, e = e[Tt.expando] ? e : new Tt.Event(h, "object" == typeof e && e), e.isTrigger = o ? 2 : 3, e.namespace = g.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + g.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = i), n = null == n ? [e] : Tt.makeArray(n, [e]), f = Tt.event.special[h] || {}, o || !f.trigger || f.trigger.apply(i, n) !== !1)) {
                if (!o && !f.noBubble && !bt(i)) {
                    for (l = f.delegateType || h, Ne.test(l + h) || (s = s.parentNode); s; s = s.parentNode) p.push(s), a = s;
                        a === (i.ownerDocument || st) && p.push(a.defaultView || a.parentWindow || t)
                }
                for (r = 0;
                    (s = p[r++]) && !e.isPropagationStopped();) d = s, e.type = r > 1 ? l : f.bindType || h, c = (Ft.get(s, "events") || {})[e.type] && Ft.get(s, "handle"), c && c.apply(s, n), c = u && s[u], c && c.apply && Mt(s) && (e.result = c.apply(s, n), e.result === !1 && e.preventDefault());
                    return e.type = h, o || e.isDefaultPrevented() || f._default && f._default.apply(p.pop(), n) !== !1 || !Mt(i) || u && yt(i[h]) && !bt(i) && (a = i[u], a && (i[u] = null), Tt.event.triggered = h, e.isPropagationStopped() && d.addEventListener(h, De), i[h](), e.isPropagationStopped() && d.removeEventListener(h, De), Tt.event.triggered = void 0, a && (i[u] = a)), e.result
            }
        },
        simulate: function(t, e, n) {
            var i = Tt.extend(new Tt.Event, n, {
                type: t,
                isSimulated: !0
            });
            Tt.event.trigger(i, null, e)
        }
    }), Tt.fn.extend({
        trigger: function(t, e) {
            return this.each(function() {
                Tt.event.trigger(t, e, this)
            })
        },
        triggerHandler: function(t, e) {
            var n = this[0];
            if (n) return Tt.event.trigger(t, e, n, !0)
        }
}), vt.focusin || Tt.each({
    focus: "focusin",
    blur: "focusout"
}, function(t, e) {
    var n = function(t) {
        Tt.event.simulate(e, t.target, Tt.event.fix(t))
    };
    Tt.event.special[e] = {
        setup: function() {
            var i = this.ownerDocument || this,
            o = Ft.access(i, e);
            o || i.addEventListener(t, n, !0), Ft.access(i, e, (o || 0) + 1)
        },
        teardown: function() {
            var i = this.ownerDocument || this,
            o = Ft.access(i, e) - 1;
            o ? Ft.access(i, e, o) : (i.removeEventListener(t, n, !0), Ft.remove(i, e))
        }
    }
});
var ke = t.location,
je = Date.now(),
Oe = /\?/;
Tt.parseXML = function(e) {
    var n;
    if (!e || "string" != typeof e) return null;
    try {
        n = (new t.DOMParser).parseFromString(e, "text/xml")
    } catch (i) {
        n = void 0
    }
    return n && !n.getElementsByTagName("parsererror").length || Tt.error("Invalid XML: " + e), n
};
var Ie = /\[\]$/,
Pe = /\r?\n/g,
Re = /^(?:submit|button|image|reset|file)$/i,
Le = /^(?:input|select|textarea|keygen)/i;
Tt.param = function(t, e) {
    var n, i = [],
    o = function(t, e) {
        var n = yt(e) ? e() : e;
        i[i.length] = encodeURIComponent(t) + "=" + encodeURIComponent(null == n ? "" : n)
    };
    if (Array.isArray(t) || t.jquery && !Tt.isPlainObject(t)) Tt.each(t, function() {
        o(this.name, this.value)
    });
        else
            for (n in t) Z(n, t[n], e, o);
                return i.join("&")
        }, Tt.fn.extend({
            serialize: function() {
                return Tt.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map(function() {
                    var t = Tt.prop(this, "elements");
                    return t ? Tt.makeArray(t) : this
                }).filter(function() {
                    var t = this.type;
                    return this.name && !Tt(this).is(":disabled") && Le.test(this.nodeName) && !Re.test(t) && (this.checked || !Gt.test(t))
                }).map(function(t, e) {
                    var n = Tt(this).val();
                    return null == n ? null : Array.isArray(n) ? Tt.map(n, function(t) {
                        return {
                            name: e.name,
                            value: t.replace(Pe, "\r\n")
                        }
                    }) : {
                        name: e.name,
                        value: n.replace(Pe, "\r\n")
                    }
                }).get()
            }
        });
        var qe = /%20/g,
        He = /#.*$/,
        _e = /([?&])_=[^&]*/,
        Me = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Fe = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        Be = /^(?:GET|HEAD)$/,
        We = /^\/\//,
        Ue = {},
        ze = {},
        Ve = "*/".concat("*"),
        Xe = st.createElement("a");
        Xe.href = ke.href, Tt.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: ke.href,
                type: "GET",
                isLocal: Fe.test(ke.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Ve,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {
                    xml: /\bxml\b/,
                    html: /\bhtml/,
                    json: /\bjson\b/
                },
                responseFields: {
                    xml: "responseXML",
                    text: "responseText",
                    json: "responseJSON"
                },
                converters: {
                    "* text": String,
                    "text html": !0,
                    "text json": JSON.parse,
                    "text xml": Tt.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(t, e) {
                return e ? nt(nt(t, Tt.ajaxSettings), e) : nt(Tt.ajaxSettings, t)
            },
            ajaxPrefilter: tt(Ue),
            ajaxTransport: tt(ze),
            ajax: function(e, n) {
                function i(e, n, i, a) {
                    var u, d, p, x, w, T = n;
                    c || (c = !0, l && t.clearTimeout(l), o = void 0, s = a || "", C.readyState = e > 0 ? 4 : 0, u = e >= 200 && e < 300 || 304 === e, i && (x = it(h, C, i)), x = ot(h, x, C, u), u ? (h.ifModified && (w = C.getResponseHeader("Last-Modified"), w && (Tt.lastModified[r] = w), w = C.getResponseHeader("etag"), w && (Tt.etag[r] = w)), 204 === e || "HEAD" === h.type ? T = "nocontent" : 304 === e ? T = "notmodified" : (T = x.state, d = x.data, p = x.error, u = !p)) : (p = T, !e && T || (T = "error", e < 0 && (e = 0))), C.status = e, C.statusText = (n || T) + "", u ? v.resolveWith(g, [d, T, C]) : v.rejectWith(g, [C, T, p]), C.statusCode(b), b = void 0, f && m.trigger(u ? "ajaxSuccess" : "ajaxError", [C, h, u ? d : p]), y.fireWith(g, [C, T]), f && (m.trigger("ajaxComplete", [C, h]), --Tt.active || Tt.event.trigger("ajaxStop")))
                }
                "object" == typeof e && (n = e, e = void 0), n = n || {};
                var o, r, s, a, l, u, c, f, d, p, h = Tt.ajaxSetup({}, n),
                g = h.context || h,
                m = h.context && (g.nodeType || g.jquery) ? Tt(g) : Tt.event,
                v = Tt.Deferred(),
                y = Tt.Callbacks("once memory"),
                b = h.statusCode || {},
                x = {},
                w = {},
                T = "canceled",
                C = {
                    readyState: 0,
                    getResponseHeader: function(t) {
                        var e;
                        if (c) {
                            if (!a)
                                for (a = {}; e = Me.exec(s);) a[e[1].toLowerCase()] = e[2];
                                    e = a[t.toLowerCase()]
                            }
                            return null == e ? null : e
                        },
                        getAllResponseHeaders: function() {
                            return c ? s : null
                        },
                        setRequestHeader: function(t, e) {
                            return null == c && (t = w[t.toLowerCase()] = w[t.toLowerCase()] || t, x[t] = e), this
                        },
                        overrideMimeType: function(t) {
                            return null == c && (h.mimeType = t), this
                        },
                        statusCode: function(t) {
                            var e;
                            if (t)
                                if (c) C.always(t[C.status]);
                            else
                                for (e in t) b[e] = [b[e], t[e]];
                                    return this
                            },
                            abort: function(t) {
                                var e = t || T;
                                return o && o.abort(e), i(0, e), this
                            }
                        };
                        if (v.promise(C), h.url = ((e || h.url || ke.href) + "").replace(We, ke.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(Pt) || [""], null == h.crossDomain) {
                            u = st.createElement("a");
                            try {
                                u.href = h.url, u.href = u.href, h.crossDomain = Xe.protocol + "//" + Xe.host != u.protocol + "//" + u.host
                            } catch (E) {
                                h.crossDomain = !0
                            }
                        }
                        if (h.data && h.processData && "string" != typeof h.data && (h.data = Tt.param(h.data, h.traditional)), et(Ue, h, n, C), c) return C;
                        f = Tt.event && h.global, f && 0 === Tt.active++ && Tt.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Be.test(h.type), r = h.url.replace(He, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qe, "+")) : (p = h.url.slice(r.length), h.data && (h.processData || "string" == typeof h.data) && (r += (Oe.test(r) ? "&" : "?") + h.data, delete h.data), h.cache === !1 && (r = r.replace(_e, "$1"), p = (Oe.test(r) ? "&" : "?") + "_=" + je++ + p), h.url = r + p), h.ifModified && (Tt.lastModified[r] && C.setRequestHeader("If-Modified-Since", Tt.lastModified[r]), Tt.etag[r] && C.setRequestHeader("If-None-Match", Tt.etag[r])), (h.data && h.hasContent && h.contentType !== !1 || n.contentType) && C.setRequestHeader("Content-Type", h.contentType), C.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + Ve + "; q=0.01" : "") : h.accepts["*"]);
                        for (d in h.headers) C.setRequestHeader(d, h.headers[d]);
                            if (h.beforeSend && (h.beforeSend.call(g, C, h) === !1 || c)) return C.abort();
                        if (T = "abort", y.add(h.complete), C.done(h.success), C.fail(h.error), o = et(ze, h, n, C)) {
                            if (C.readyState = 1, f && m.trigger("ajaxSend", [C, h]), c) return C;
                            h.async && h.timeout > 0 && (l = t.setTimeout(function() {
                                C.abort("timeout")
                            }, h.timeout));
                            try {
                                c = !1, o.send(x, i)
                            } catch (E) {
                                if (c) throw E;
                                i(-1, E)
                            }
                        } else i(-1, "No Transport");
                        return C
                    },
                    getJSON: function(t, e, n) {
                        return Tt.get(t, e, n, "json")
                    },
                    getScript: function(t, e) {
                        return Tt.get(t, void 0, e, "script")
                    }
                }), Tt.each(["get", "post"], function(t, e) {
                    Tt[e] = function(t, n, i, o) {
                        return yt(n) && (o = o || i, i = n, n = void 0), Tt.ajax(Tt.extend({
                            url: t,
                            type: e,
                            dataType: o,
                            data: n,
                            success: i
                        }, Tt.isPlainObject(t) && t))
                    }
                }), Tt._evalUrl = function(t) {
                    return Tt.ajax({
                        url: t,
                        type: "GET",
                        dataType: "script",
                        cache: !0,
                        async: !1,
                        global: !1,
                        "throws": !0
                    })
                }, Tt.fn.extend({
                    wrapAll: function(t) {
                        var e;
                        return this[0] && (yt(t) && (t = t.call(this[0])), e = Tt(t, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && e.insertBefore(this[0]), e.map(function() {
                            for (var t = this; t.firstElementChild;) t = t.firstElementChild;
                                return t
                        }).append(this)), this
                    },
                    wrapInner: function(t) {
                        return yt(t) ? this.each(function(e) {
                            Tt(this).wrapInner(t.call(this, e))
                        }) : this.each(function() {
                            var e = Tt(this),
                            n = e.contents();
                            n.length ? n.wrapAll(t) : e.append(t)
                        })
                    },
                    wrap: function(t) {
                        var e = yt(t);
                        return this.each(function(n) {
                            Tt(this).wrapAll(e ? t.call(this, n) : t)
                        })
                    },
                    unwrap: function(t) {
                        return this.parent(t).not("body").each(function() {
                            Tt(this).replaceWith(this.childNodes)
                        }), this
                    }
                }), Tt.expr.pseudos.hidden = function(t) {
                    return !Tt.expr.pseudos.visible(t)
                }, Tt.expr.pseudos.visible = function(t) {
                    return !!(t.offsetWidth || t.offsetHeight || t.getClientRects().length)
                }, Tt.ajaxSettings.xhr = function() {
                    try {
                        return new t.XMLHttpRequest
                    } catch (e) {}
                };
                var Qe = {
                    0: 200,
                    1223: 204
                },
                Ye = Tt.ajaxSettings.xhr();
                vt.cors = !!Ye && "withCredentials" in Ye, vt.ajax = Ye = !!Ye, Tt.ajaxTransport(function(e) {
                    var n, i;
                    if (vt.cors || Ye && !e.crossDomain) return {
                        send: function(o, r) {
                            var s, a = e.xhr();
                            if (a.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields)
                                for (s in e.xhrFields) a[s] = e.xhrFields[s];
                                    e.mimeType && a.overrideMimeType && a.overrideMimeType(e.mimeType), e.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest");
                                for (s in o) a.setRequestHeader(s, o[s]);
                                    n = function(t) {
                                        return function() {
                                            n && (n = i = a.onload = a.onerror = a.onabort = a.ontimeout = a.onreadystatechange = null, "abort" === t ? a.abort() : "error" === t ? "number" != typeof a.status ? r(0, "error") : r(a.status, a.statusText) : r(Qe[a.status] || a.status, a.statusText, "text" !== (a.responseType || "text") || "string" != typeof a.responseText ? {
                                                binary: a.response
                                            } : {
                                                text: a.responseText
                                            }, a.getAllResponseHeaders()))
                                        }
                                    }, a.onload = n(), i = a.onerror = a.ontimeout = n("error"), void 0 !== a.onabort ? a.onabort = i : a.onreadystatechange = function() {
                                        4 === a.readyState && t.setTimeout(function() {
                                            n && i()
                                        })
                                    }, n = n("abort");
                                    try {
                                        a.send(e.hasContent && e.data || null)
                                    } catch (l) {
                                        if (n) throw l
                                    }
                            },
                            abort: function() {
                                n && n()
                            }
                        }
                    }), Tt.ajaxPrefilter(function(t) {
                        t.crossDomain && (t.contents.script = !1)
                    }), Tt.ajaxSetup({
                        accepts: {
                            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                        },
                        contents: {
                            script: /\b(?:java|ecma)script\b/
                        },
                        converters: {
                            "text script": function(t) {
                                return Tt.globalEval(t), t
                            }
                        }
                    }), Tt.ajaxPrefilter("script", function(t) {
                        void 0 === t.cache && (t.cache = !1), t.crossDomain && (t.type = "GET")
                    }), Tt.ajaxTransport("script", function(t) {
                        if (t.crossDomain) {
                            var e, n;
                            return {
                                send: function(i, o) {
                                    e = Tt("<script>").prop({
                                        charset: t.scriptCharset,
                                        src: t.url
                                    }).on("load error", n = function(t) {
                                        e.remove(), n = null, t && o("error" === t.type ? 404 : 200, t.type)
                                    }), st.head.appendChild(e[0])
                                },
                                abort: function() {
                                    n && n()
                                }
                            }
                        }
                    });
                    var Je = [],
                    Ge = /(=)\?(?=&|$)|\?\?/;
                    Tt.ajaxSetup({
                        jsonp: "callback",
                        jsonpCallback: function() {
                            var t = Je.pop() || Tt.expando + "_" + je++;
                            return this[t] = !0, t
                        }
                    }), Tt.ajaxPrefilter("json jsonp", function(e, n, i) {
                        var o, r, s, a = e.jsonp !== !1 && (Ge.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Ge.test(e.data) && "data");
                        if (a || "jsonp" === e.dataTypes[0]) return o = e.jsonpCallback = yt(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, a ? e[a] = e[a].replace(Ge, "$1" + o) : e.jsonp !== !1 && (e.url += (Oe.test(e.url) ? "&" : "?") + e.jsonp + "=" + o), e.converters["script json"] = function() {
                            return s || Tt.error(o + " was not called"), s[0]
                        }, e.dataTypes[0] = "json", r = t[o], t[o] = function() {
                            s = arguments
                        }, i.always(function() {
                            void 0 === r ? Tt(t).removeProp(o) : t[o] = r, e[o] && (e.jsonpCallback = n.jsonpCallback, Je.push(o)), s && yt(r) && r(s[0]), s = r = void 0
                        }), "script"
                    }), vt.createHTMLDocument = function() {
                        var t = st.implementation.createHTMLDocument("").body;
                        return t.innerHTML = "<form></form><form></form>", 2 === t.childNodes.length
                    }(), Tt.parseHTML = function(t, e, n) {
                        if ("string" != typeof t) return [];
                        "boolean" == typeof e && (n = e, e = !1);
                        var i, o, r;
                        return e || (vt.createHTMLDocument ? (e = st.implementation.createHTMLDocument(""), i = e.createElement("base"), i.href = st.location.href, e.head.appendChild(i)) : e = st), o = Nt.exec(t), r = !n && [], o ? [e.createElement(o[1])] : (o = C([t], e, r), r && r.length && Tt(r).remove(), Tt.merge([], o.childNodes))
                    }, Tt.fn.load = function(t, e, n) {
                        var i, o, r, s = this,
                        a = t.indexOf(" ");
                        return a > -1 && (i = J(t.slice(a)), t = t.slice(0, a)), yt(e) ? (n = e, e = void 0) : e && "object" == typeof e && (o = "POST"), s.length > 0 && Tt.ajax({
                            url: t,
                            type: o || "GET",
                            dataType: "html",
                            data: e
                        }).done(function(t) {
                            r = arguments, s.html(i ? Tt("<div>").append(Tt.parseHTML(t)).find(i) : t)
                        }).always(n && function(t, e) {
                            s.each(function() {
                                n.apply(this, r || [t.responseText, e, t])
                            })
                        }), this
                    }, Tt.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(t, e) {
                        Tt.fn[e] = function(t) {
                            return this.on(e, t)
                        }
                    }), Tt.expr.pseudos.animated = function(t) {
                        return Tt.grep(Tt.timers, function(e) {
                            return t === e.elem
                        }).length
                    }, Tt.offset = {
                        setOffset: function(t, e, n) {
                            var i, o, r, s, a, l, u, c = Tt.css(t, "position"),
                            f = Tt(t),
                            d = {};
                            "static" === c && (t.style.position = "relative"), a = f.offset(), r = Tt.css(t, "top"), l = Tt.css(t, "left"), u = ("absolute" === c || "fixed" === c) && (r + l).indexOf("auto") > -1, u ? (i = f.position(), s = i.top, o = i.left) : (s = parseFloat(r) || 0, o = parseFloat(l) || 0), yt(e) && (e = e.call(t, n, Tt.extend({}, a))), null != e.top && (d.top = e.top - a.top + s), null != e.left && (d.left = e.left - a.left + o), "using" in e ? e.using.call(t, d) : f.css(d)
                        }
                    }, Tt.fn.extend({
                        offset: function(t) {
                            if (arguments.length) return void 0 === t ? this : this.each(function(e) {
                                Tt.offset.setOffset(this, t, e)
                            });
                                var e, n, i = this[0];
                                if (i) return i.getClientRects().length ? (e = i.getBoundingClientRect(), n = i.ownerDocument.defaultView, {
                                    top: e.top + n.pageYOffset,
                                    left: e.left + n.pageXOffset
                                }) : {
                                    top: 0,
                                    left: 0
                                }
                            },
                            position: function() {
                                if (this[0]) {
                                    var t, e, n, i = this[0],
                                    o = {
                                        top: 0,
                                        left: 0
                                    };
                                    if ("fixed" === Tt.css(i, "position")) e = i.getBoundingClientRect();
                                    else {
                                        for (e = this.offset(), n = i.ownerDocument, t = i.offsetParent || n.documentElement; t && (t === n.body || t === n.documentElement) && "static" === Tt.css(t, "position");) t = t.parentNode;
                                            t && t !== i && 1 === t.nodeType && (o = Tt(t).offset(), o.top += Tt.css(t, "borderTopWidth", !0), o.left += Tt.css(t, "borderLeftWidth", !0))
                                    }
                                    return {
                                        top: e.top - o.top - Tt.css(i, "marginTop", !0),
                                        left: e.left - o.left - Tt.css(i, "marginLeft", !0)
                                    }
                                }
                            },
                            offsetParent: function() {
                                return this.map(function() {
                                    for (var t = this.offsetParent; t && "static" === Tt.css(t, "position");) t = t.offsetParent;
                                        return t || ne
                                })
                            }
                        }), Tt.each({
                            scrollLeft: "pageXOffset",
                            scrollTop: "pageYOffset"
                        }, function(t, e) {
                            var n = "pageYOffset" === e;
                            Tt.fn[t] = function(i) {
                                return qt(this, function(t, i, o) {
                                    var r;
                                    return bt(t) ? r = t : 9 === t.nodeType && (r = t.defaultView), void 0 === o ? r ? r[e] : t[i] : void(r ? r.scrollTo(n ? r.pageXOffset : o, n ? o : r.pageYOffset) : t[i] = o)
                                }, t, i, arguments.length)
                            }
                        }), Tt.each(["top", "left"], function(t, e) {
                            Tt.cssHooks[e] = L(vt.pixelPosition, function(t, n) {
                                if (n) return n = R(t, e), ce.test(n) ? Tt(t).position()[e] + "px" : n
                            })
                        }), Tt.each({
                            Height: "height",
                            Width: "width"
                        }, function(t, e) {
                            Tt.each({
                                padding: "inner" + t,
                                content: e,
                                "": "outer" + t
                            }, function(n, i) {
                                Tt.fn[i] = function(o, r) {
                                    var s = arguments.length && (n || "boolean" != typeof o),
                                    a = n || (o === !0 || r === !0 ? "margin" : "border");
                                    return qt(this, function(e, n, o) {
                                        var r;
                                        return bt(e) ? 0 === i.indexOf("outer") ? e["inner" + t] : e.document.documentElement["client" + t] : 9 === e.nodeType ? (r = e.documentElement, Math.max(e.body["scroll" + t], r["scroll" + t], e.body["offset" + t], r["offset" + t], r["client" + t])) : void 0 === o ? Tt.css(e, n, a) : Tt.style(e, n, o, a)
                                    }, e, s ? o : void 0, s)
                                }
                            })
                        }), Tt.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(t, e) {
                            Tt.fn[e] = function(t, n) {
                                return arguments.length > 0 ? this.on(e, null, t, n) : this.trigger(e)
                            }
                        }), Tt.fn.extend({
                            hover: function(t, e) {
                                return this.mouseenter(t).mouseleave(e || t)
                            }
                        }), Tt.fn.extend({
                            bind: function(t, e, n) {
                                return this.on(t, null, e, n)
                            },
                            unbind: function(t, e) {
                                return this.off(t, null, e)
                            },
                            delegate: function(t, e, n, i) {
                                return this.on(e, t, n, i)
                            },
                            undelegate: function(t, e, n) {
                                return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", n)
                            }
                        }), Tt.proxy = function(t, e) {
                            var n, i, o;
                            if ("string" == typeof e && (n = t[e], e = t, t = n), yt(t)) return i = lt.call(arguments, 2), o = function() {
                                return t.apply(e || this, i.concat(lt.call(arguments)))
                            }, o.guid = t.guid = t.guid || Tt.guid++, o
                        }, Tt.holdReady = function(t) {
                            t ? Tt.readyWait++ : Tt.ready(!0)
                        }, Tt.isArray = Array.isArray, Tt.parseJSON = JSON.parse, Tt.nodeName = r, Tt.isFunction = yt, Tt.isWindow = bt, Tt.camelCase = h, Tt.type = i, Tt.now = Date.now, Tt.isNumeric = function(t) {
                            var e = Tt.type(t);
                            return ("number" === e || "string" === e) && !isNaN(t - parseFloat(t))
                        }, "function" == typeof define && define.amd && define("jquery", [], function() {
                            return Tt
                        });
                        var Ke = t.jQuery,
                        Ze = t.$;
                        return Tt.noConflict = function(e) {
                            return t.$ === Tt && (t.$ = Ze), e && t.jQuery === Tt && (t.jQuery = Ke), Tt
                        }, e || (t.jQuery = t.$ = Tt), Tt
                    }), + function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this),
            o = i.data("bs.tooltip"),
            r = "object" == typeof e && e;
            !o && /destroy|hide/.test(e) || (o || i.data("bs.tooltip", o = new n(this, r)), "string" == typeof e && o[e]())
        })
    }
    var n = function(t, e) {
        this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", t, e)
    };
    n.VERSION = "3.3.5", n.TRANSITION_DURATION = 150, n.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        containertrans: !1,
        viewport: {
            selector: "body",
            padding: 0
        }
    }, n.prototype.init = function(e, n, i) {
        if (this.enabled = !0, this.type = e, this.$element = t(n), this.options = this.getOptions(i), this.$viewport = this.options.viewport && t(t.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
            click: !1,
            hover: !1,
            focus: !1
        }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
            for (var o = this.options.trigger.split(" "), r = o.length; r--;) {
                var s = o[r];
                if ("click" == s) this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));
                else if ("manual" != s) {
                    var a = "hover" == s ? "mouseenter" : "focusin",
                    l = "hover" == s ? "mouseleave" : "focusout";
                    this.$element.on(a + "." + this.type, this.options.selector, t.proxy(this.enter, this)), this.$element.on(l + "." + this.type, this.options.selector, t.proxy(this.leave, this))
                }
            }
            this.options.selector ? this._options = t.extend({}, this.options, {
                trigger: "manual",
                selector: ""
            }) : this.fixTitle()
        }, n.prototype.getDefaults = function() {
            return n.DEFAULTS
        }, n.prototype.getOptions = function(e) {
            return e = t.extend({}, this.getDefaults(), this.$element.data(), e), e.delay && "number" == typeof e.delay && (e.delay = {
                show: e.delay,
                hide: e.delay
            }), e
        }, n.prototype.getDelegateOptions = function() {
            var e = {},
            n = this.getDefaults();
            return this._options && t.each(this._options, function(t, i) {
                n[t] != i && (e[t] = i)
            }), e
        }, n.prototype.enter = function(e) {
            var n = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
            return n || (n = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, n)), e instanceof t.Event && (n.inState["focusin" == e.type ? "focus" : "hover"] = !0), n.tip().hasClass("in") || "in" == n.hoverState ? void(n.hoverState = "in") : (clearTimeout(n.timeout), n.hoverState = "in", n.options.delay && n.options.delay.show ? void(n.timeout = setTimeout(function() {
                "in" == n.hoverState && n.show()
            }, n.options.delay.show)) : n.show())
        }, n.prototype.isInStateTrue = function() {
            for (var t in this.inState)
                if (this.inState[t]) return !0;
            return !1
        }, n.prototype.leave = function(e) {
            var n = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
            if (n || (n = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, n)), e instanceof t.Event && (n.inState["focusout" == e.type ? "focus" : "hover"] = !1), !n.isInStateTrue()) return clearTimeout(n.timeout), n.hoverState = "out", n.options.delay && n.options.delay.hide ? void(n.timeout = setTimeout(function() {
                "out" == n.hoverState && n.hide()
            }, n.options.delay.hide)) : n.hide()
        }, n.prototype.show = function() {
            var e = t.Event("show.bs." + this.type);
            if (this.hasContent() && this.enabled) {
                this.$element.trigger(e);
                var i = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
                if (e.isDefaultPrevented() || !i) return;
                var o = this,
                r = this.tip(),
                s = this.getUID(this.type);
                this.setContent(), r.attr("id", s), this.$element.attr("aria-describedby", s), this.options.animation && r.addClass("fade");
                var a = "function" == typeof this.options.placement ? this.options.placement.call(this, r[0], this.$element[0]) : this.options.placement,
                l = /\s?auto?\s?/i,
                u = l.test(a);
                u && (a = a.replace(l, "") || "top"), r.detach().css({
                    top: 0,
                    left: 0,
                    display: "block"
                }).addClass(a).data("bs." + this.type, this), this.options.containertrans ? r.appendTo(this.options.containertrans) : r.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
                var c = this.getPosition(),
                f = r[0].offsetWidth,
                d = r[0].offsetHeight;
                if (u) {
                    var p = a,
                    h = this.getPosition(this.$viewport);
                    a = "bottom" == a && c.bottom + d > h.bottom ? "top" : "top" == a && c.top - d < h.top ? "bottom" : "right" == a && c.right + f > h.width ? "left" : "left" == a && c.left - f < h.left ? "right" : a, r.removeClass(p).addClass(a)
                }
                var g = this.getCalculatedOffset(a, c, f, d);
                this.applyPlacement(g, a);
                var m = function() {
                    var t = o.hoverState;
                    o.$element.trigger("shown.bs." + o.type), o.hoverState = null, "out" == t && o.leave(o)
                };
                t.support.transition && this.$tip.hasClass("fade") ? r.one("bsTransitionEnd", m).emulateTransitionEnd(n.TRANSITION_DURATION) : m()
            }
        }, n.prototype.applyPlacement = function(e, n) {
            var i = this.tip(),
            o = i[0].offsetWidth,
            r = i[0].offsetHeight,
            s = parseInt(i.css("margin-top"), 10),
            a = parseInt(i.css("margin-left"), 10);
            isNaN(s) && (s = 0), isNaN(a) && (a = 0), e.top += s, e.left += a, t.offset.setOffset(i[0], t.extend({
                using: function(t) {
                    i.css({
                        top: Math.round(t.top),
                        left: Math.round(t.left)
                    })
                }
            }, e), 0), i.addClass("in");
            var l = i[0].offsetWidth,
            u = i[0].offsetHeight;
            "top" == n && u != r && (e.top = e.top + r - u);
            var c = this.getViewportAdjustedDelta(n, e, l, u);
            c.left ? e.left += c.left : e.top += c.top;
            var f = /top|bottom/.test(n),
            d = f ? 2 * c.left - o + l : 2 * c.top - r + u,
            p = f ? "offsetWidth" : "offsetHeight";
            i.offset(e), this.replaceArrow(d, i[0][p], f)
        }, n.prototype.replaceArrow = function(t, e, n) {
            this.arrow().css(n ? "left" : "top", 50 * (1 - t / e) + "%").css(n ? "top" : "left", "")
        }, n.prototype.setContent = function() {
            var t = this.tip(),
            e = this.getTitle();
            t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e), t.removeClass("fade in top bottom left right")
        }, n.prototype.hide = function(e) {
            function i() {
                "in" != o.hoverState && r.detach(), o.$element.removeAttr("aria-describedby").trigger("hidden.bs." + o.type), e && e()
            }
            var o = this,
            r = t(this.$tip),
            s = t.Event("hide.bs." + this.type);
            if (this.$element.trigger(s), !s.isDefaultPrevented()) return r.removeClass("in"), t.support.transition && r.hasClass("fade") ? r.one("bsTransitionEnd", i).emulateTransitionEnd(n.TRANSITION_DURATION) : i(), this.hoverState = null, this
        }, n.prototype.fixTitle = function() {
            var t = this.$element;
            (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "")
        }, n.prototype.hasContent = function() {
            return this.getTitle()
        }, n.prototype.getPosition = function(e) {
            e = e || this.$element;
            var n = e[0],
            i = "BODY" == n.tagName,
            o = n.getBoundingClientRect();
            null == o.width && (o = t.extend({}, o, {
                width: o.right - o.left,
                height: o.bottom - o.top
            }));
            var r = i ? {
                top: 0,
                left: 0
            } : e.offset(),
            s = {
                scroll: i ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop()
            },
            a = i ? {
                width: t(window).width(),
                height: t(window).height()
            } : null;
            return t.extend({}, o, s, a, r)
        }, n.prototype.getCalculatedOffset = function(t, e, n, i) {
            return "bottom" == t ? {
                top: e.top + e.height,
                left: e.left + e.width / 2 - n / 2
            } : "top" == t ? {
                top: e.top - i,
                left: e.left + e.width / 2 - n / 2
            } : "left" == t ? {
                top: e.top + e.height / 2 - i / 2,
                left: e.left - n
            } : {
                top: e.top + e.height / 2 - i / 2,
                left: e.left + e.width
            }
        }, n.prototype.getViewportAdjustedDelta = function(t, e, n, i) {
            var o = {
                top: 0,
                left: 0
            };
            if (!this.$viewport) return o;
            var r = this.options.viewport && this.options.viewport.padding || 0,
            s = this.getPosition(this.$viewport);
            if (/right|left/.test(t)) {
                var a = e.top - r - s.scroll,
                l = e.top + r - s.scroll + i;
                a < s.top ? o.top = s.top - a : l > s.top + s.height && (o.top = s.top + s.height - l);
            } else {
                var u = e.left - r,
                c = e.left + r + n;
                u < s.left ? o.left = s.left - u : c > s.right && (o.left = s.left + s.width - c)
            }
            return o
        }, n.prototype.getTitle = function() {
            var t, e = this.$element,
            n = this.options;
            return t = e.attr("data-original-title") || ("function" == typeof n.title ? n.title.call(e[0]) : n.title)
        }, n.prototype.getUID = function(t) {
            do t += ~~(1e6 * Math.random()); while (document.getElementById(t));
            return t
        }, n.prototype.tip = function() {
            if (!this.$tip && (this.$tip = t(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
            return this.$tip
        }, n.prototype.arrow = function() {
            return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
        }, n.prototype.enable = function() {
            this.enabled = !0
        }, n.prototype.disable = function() {
            this.enabled = !1
        }, n.prototype.toggleEnabled = function() {
            this.enabled = !this.enabled
        }, n.prototype.toggle = function(e) {
            var n = this;
            e && (n = t(e.currentTarget).data("bs." + this.type), n || (n = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, n))), e ? (n.inState.click = !n.inState.click, n.isInStateTrue() ? n.enter(n) : n.leave(n)) : n.tip().hasClass("in") ? n.leave(n) : n.enter(n)
        }, n.prototype.destroy = function() {
            var t = this;
            clearTimeout(this.timeout), this.hide(function() {
                t.$element.off("." + t.type).removeData("bs." + t.type), t.$tip && t.$tip.detach(), t.$tip = null, t.$arrow = null, t.$viewport = null
            })
        };
        var i = t.fn.tooltip;
        t.fn.tooltip = e, t.fn.tooltip.Constructor = n, t.fn.tooltip.noConflict = function() {
            return t.fn.tooltip = i, this
        }
    }(jQuery), + function(t) {
        "use strict";
        function e(e) {
            return this.each(function() {
                var i = t(this),
                o = i.data("bs.popover"),
                r = "object" == typeof e && e;
                !o && /destroy|hide/.test(e) || (o || i.data("bs.popover", o = new n(this, r)), "string" == typeof e && o[e]())
            })
        }
        var n = function(t, e) {
            this.init("popover", t, e)
        };
        if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
        n.VERSION = "3.3.5", n.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
            placement: "right",
            trigger: "click",
            content: "",
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
        }), n.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype), n.prototype.constructor = n, n.prototype.getDefaults = function() {
            return n.DEFAULTS
        }, n.prototype.setContent = function() {
            var t = this.tip(),
            e = this.getTitle(),
            n = this.getContent();
            t.find(".popover-title")[this.options.html ? "html" : "text"](e), t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof n ? "html" : "append" : "text"](n), t.removeClass("fade top bottom left right in"), t.find(".popover-title").html() || t.find(".popover-title").hide()
        }, n.prototype.hasContent = function() {
            return this.getTitle() || this.getContent()
        }, n.prototype.getContent = function() {
            var t = this.$element,
            e = this.options;
            return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
        }, n.prototype.arrow = function() {
            return this.$arrow = this.$arrow || this.tip().find(".arrow")
        };
        var i = t.fn.popover;
        t.fn.popover = e, t.fn.popover.Constructor = n, t.fn.popover.noConflict = function() {
            return t.fn.popover = i, this
        }
    }(jQuery), + function(t) {
        "use strict";
        function e(e, i) {
            return this.each(function() {
                var o = t(this),
                r = o.data("bs.modal"),
                s = t.extend({}, n.DEFAULTS, o.data(), "object" == typeof e && e);
                r || o.data("bs.modal", r = new n(this, s)), "string" == typeof e ? r[e](i) : s.show && r.show(i)
            })
        }
        var n = function(e, n) {
            this.options = n, this.$body = t(document.body), this.$element = t(e), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, t.proxy(function() {
                this.$element.trigger("loaded.bs.modal")
            }, this))
        };
        n.VERSION = "3.3.5", n.TRANSITION_DURATION = 300, n.BACKDROP_TRANSITION_DURATION = 150, n.DEFAULTS = {
            backdrop: !0,
            keyboard: !0,
            show: !0
        }, n.prototype.toggle = function(t) {
            return this.isShown ? this.hide() : this.show(t)
        }, n.prototype.show = function(e) {
            var i = this,
            o = t.Event("show.bs.modal", {
                relatedTarget: e
            });
            this.$element.trigger(o), this.isShown || o.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', t.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function() {
                i.$element.one("mouseup.dismiss.bs.modal", function(e) {
                    t(e.target).is(i.$element) && (i.ignoreBackdropClick = !0)
                })
            }), this.backdrop(function() {
                var o = t.support.transition && i.$element.hasClass("fade");
                i.$element.parent().length || i.$element.appendTo(i.$body), i.$element.show().scrollTop(0), i.adjustDialog(), o && i.$element[0].offsetWidth, i.$element.addClass("in"), i.enforceFocus();
                var r = t.Event("shown.bs.modal", {
                    relatedTarget: e
                });
                o ? i.$dialog.one("bsTransitionEnd", function() {
                    i.$element.trigger("focus").trigger(r)
                }).emulateTransitionEnd(n.TRANSITION_DURATION) : i.$element.trigger("focus").trigger(r)
            }))
        }, n.prototype.hide = function(e) {
            e && e.preventDefault(), e = t.Event("hide.bs.modal"), this.$element.trigger(e), this.isShown && !e.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), t(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), t.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", t.proxy(this.hideModal, this)).emulateTransitionEnd(n.TRANSITION_DURATION) : this.hideModal())
        }, n.prototype.enforceFocus = function() {
            t(document).off("focusin.bs.modal").on("focusin.bs.modal", t.proxy(function(t) {
                this.$element[0] === t.target || this.$element.has(t.target).length || this.$element.trigger("focus")
            }, this))
        }, n.prototype.escape = function() {
            this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", t.proxy(function(t) {
                27 == t.which && this.hide()
            }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
        }, n.prototype.resize = function() {
            this.isShown ? t(window).on("resize.bs.modal", t.proxy(this.handleUpdate, this)) : t(window).off("resize.bs.modal")
        }, n.prototype.hideModal = function() {
            var t = this;
            this.$element.hide(), this.backdrop(function() {
                t.$body.removeClass("modal-open"), t.resetAdjustments(), t.resetScrollbar(), t.$element.trigger("hidden.bs.modal")
            })
        }, n.prototype.removeBackdrop = function() {
            this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
        }, n.prototype.backdrop = function(e) {
            var i = this,
            o = this.$element.hasClass("fade") ? "fade" : "";
            if (this.isShown && this.options.backdrop) {
                var r = t.support.transition && o;
                if (this.$backdrop = t(document.createElement("div")).addClass("modal-backdrop " + o).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", t.proxy(function(t) {
                    return this.ignoreBackdropClick ? void(this.ignoreBackdropClick = !1) : void(t.target === t.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()))
                }, this)), r && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !e) return;
                    r ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION) : e()
                } else if (!this.isShown && this.$backdrop) {
                    this.$backdrop.removeClass("in");
                    var s = function() {
                        i.removeBackdrop(), e && e()
                    };
                    t.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", s).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION) : s()
                } else e && e()
            }, n.prototype.handleUpdate = function() {
                this.adjustDialog()
            }, n.prototype.adjustDialog = function() {
                var t = this.$element[0].scrollHeight > document.documentElement.clientHeight;
                this.$element.css({
                    paddingLeft: !this.bodyIsOverflowing && t ? this.scrollbarWidth : "",
                    paddingRight: this.bodyIsOverflowing && !t ? this.scrollbarWidth : ""
                })
            }, n.prototype.resetAdjustments = function() {
                this.$element.css({
                    paddingLeft: "",
                    paddingRight: ""
                })
            }, n.prototype.checkScrollbar = function() {
                var t = window.innerWidth;
                if (!t) {
                    var e = document.documentElement.getBoundingClientRect();
                    t = e.right - Math.abs(e.left)
                }
                this.bodyIsOverflowing = document.body.clientWidth < t, this.scrollbarWidth = this.measureScrollbar()
            }, n.prototype.setScrollbar = function() {
                var t = parseInt(this.$body.css("padding-right") || 0, 10);
                this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", t + this.scrollbarWidth)
            }, n.prototype.resetScrollbar = function() {
                this.$body.css("padding-right", this.originalBodyPad)
            }, n.prototype.measureScrollbar = function() {
                var t = document.createElement("div");
                t.className = "modal-scrollbar-measure", this.$body.append(t);
                var e = t.offsetWidth - t.clientWidth;
                return this.$body[0].removeChild(t), e
            };
            var i = t.fn.modal;
            t.fn.modal = e, t.fn.modal.Constructor = n, t.fn.modal.noConflict = function() {
                return t.fn.modal = i, this
            }, t(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(n) {
                var i = t(this),
                o = i.attr("href"),
                r = t(i.attr("data-target") || o && o.replace(/.*(?=#[^\s]+$)/, "")),
                s = r.data("bs.modal") ? "toggle" : t.extend({
                    remote: !/#/.test(o) && o
                }, r.data(), i.data());
                i.is("a") && n.preventDefault(), r.one("show.bs.modal", function(t) {
                    t.isDefaultPrevented() || r.one("hidden.bs.modal", function() {
                        i.is(":visible") && i.trigger("focus")
                    })
                }), e.call(r, s, this)
            })
        }(jQuery), + function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var n = t(this),
                    o = n.data("bs.alert");
                    o || n.data("bs.alert", o = new i(this)), "string" == typeof e && o[e].call(n)
                })
            }
            var n = '[data-dismiss="alert"]',
            i = function(e) {
                t(e).on("click", n, this.close)
            };
            i.VERSION = "3.3.5", i.TRANSITION_DURATION = 150, i.prototype.close = function(e) {
                function n() {
                    s.detach().trigger("closed.bs.alert").remove()
                }
                var o = t(this),
                r = o.attr("data-target");
                r || (r = o.attr("href"), r = r && r.replace(/.*(?=#[^\s]*$)/, ""));
                var s = t(r);
                e && e.preventDefault(), s.length || (s = o.closest(".alert")), s.trigger(e = t.Event("close.bs.alert")), e.isDefaultPrevented() || (s.removeClass("in"), t.support.transition && s.hasClass("fade") ? s.one("bsTransitionEnd", n).emulateTransitionEnd(i.TRANSITION_DURATION) : n())
            };
            var o = t.fn.alert;
            t.fn.alert = e, t.fn.alert.Constructor = i, t.fn.alert.noConflict = function() {
                return t.fn.alert = o, this
            }, t(document).on("click.bs.alert.data-api", n, i.prototype.close)
        }(jQuery), + function(t) {
            "use strict";
            function e(e) {
                return this.each(function() {
                    var i = t(this),
                    o = i.data("bs.affix"),
                    r = "object" == typeof e && e;
                    o || i.data("bs.affix", o = new n(this, r)), "string" == typeof e && o[e]()
                })
            }
            var n = function(e, i) {
                this.options = t.extend({}, n.DEFAULTS, i), this.$target = t(this.options.target).on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", t.proxy(this.checkPositionWithEventLoop, this)), this.$element = t(e), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
            };
            n.VERSION = "3.3.5", n.RESET = "affix affix-top affix-bottom", n.DEFAULTS = {
                offset: 0,
                target: window
            }, n.prototype.getState = function(t, e, n, i) {
                var o = this.$target.scrollTop(),
                r = this.$element.offset(),
                s = this.$target.height();
                if (null != n && "top" == this.affixed) return o < n && "top";
                if ("bottom" == this.affixed) return null != n ? !(o + this.unpin <= r.top) && "bottom" : !(o + s <= t - i) && "bottom";
                var a = null == this.affixed,
                l = a ? o : r.top,
                u = a ? s : e;
                return null != n && o <= n ? "top" : null != i && l + u >= t - i && "bottom"
            }, n.prototype.getPinnedOffset = function() {
                if (this.pinnedOffset) return this.pinnedOffset;
                this.$element.removeClass(n.RESET).addClass("affix");
                var t = this.$target.scrollTop(),
                e = this.$element.offset();
                return this.pinnedOffset = e.top - t
            }, n.prototype.checkPositionWithEventLoop = function() {
                setTimeout(t.proxy(this.checkPosition, this), 1)
            }, n.prototype.checkPosition = function() {
                if (this.$element.is(":visible")) {
                    var e = this.$element.height(),
                    i = this.options.offset,
                    o = i.top,
                    r = i.bottom,
                    s = Math.max(t(document).height(), t(document.body).height());
                    "object" != typeof i && (r = o = i), "function" == typeof o && (o = i.top(this.$element)), "function" == typeof r && (r = i.bottom(this.$element));
                    var a = this.getState(s, e, o, r);
                    if (this.affixed != a) {
                        null != this.unpin && this.$element.css("top", "");
                        var l = "affix" + (a ? "-" + a : ""),
                        u = t.Event(l + ".bs.affix");
                        if (this.$element.trigger(u), u.isDefaultPrevented()) return;
                        this.affixed = a, this.unpin = "bottom" == a ? this.getPinnedOffset() : null, this.$element.removeClass(n.RESET).addClass(l).trigger(l.replace("affix", "affixed") + ".bs.affix")
                    }
                    "bottom" == a && this.$element.offset({
                        top: s - e - r
                    })
                }
            };
            var i = t.fn.affix;
            t.fn.affix = e, t.fn.affix.Constructor = n, t.fn.affix.noConflict = function() {
                return t.fn.affix = i, this
            }, t(window).on("load", function() {
                t('[data-spy="affix"]').each(function() {
                    var n = t(this),
                    i = n.data();
                    i.offset = i.offset || {}, null != i.offsetBottom && (i.offset.bottom = i.offsetBottom), null != i.offsetTop && (i.offset.top = i.offsetTop), e.call(n, i)
                })
            })
        }(jQuery), + function(t) {
            "use strict";
            function e(e) {
                var n = e.attr("data-target");
                n || (n = e.attr("href"), n = n && /#[A-Za-z]/.test(n) && n.replace(/.*(?=#[^\s]*$)/, ""));
                var i = n && t(n);
                return i && i.length ? i : e.parent()
            }
            function n(n) {
                n && 3 === n.which || (t(o).remove(), t(r).each(function() {
                    var i = t(this),
                    o = e(i),
                    r = {
                        relatedTarget: this
                    };
                    o.hasClass("open") && (n && "click" == n.type && /input|textarea/i.test(n.target.tagName) && t.contains(o[0], n.target) || (o.trigger(n = t.Event("hide.bs.dropdown", r)), n.isDefaultPrevented() || (i.attr("aria-expanded", "false"), o.removeClass("open").trigger("hidden.bs.dropdown", r))))
                }))
            }
            function i(e) {
                return this.each(function() {
                    var n = t(this),
                    i = n.data("bs.dropdown");
                    i || n.data("bs.dropdown", i = new s(this)), "string" == typeof e && i[e].call(n)
                })
            }
            var o = ".dropdown-backdrop",
            r = '[data-toggle="dropdown"]',
            s = function(e) {
                t(e).on("click.bs.dropdown", this.toggle)
            };
            s.VERSION = "3.3.5", s.prototype.toggle = function(i) {
                var o = t(this);
                if (!o.is(".disabled, :disabled")) {
                    var r = e(o),
                    s = r.hasClass("open");
                    if (n(), !s) {
                        "ontouchstart" in document.documentElement && !r.closest(".navbar-nav").length && t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click", n);
                        var a = {
                            relatedTarget: this
                        };
                        if (r.trigger(i = t.Event("show.bs.dropdown", a)), i.isDefaultPrevented()) return;
                        o.trigger("focus").attr("aria-expanded", "true"), r.toggleClass("open").trigger("shown.bs.dropdown", a)
                    }
                    return !1
                }
            }, s.prototype.keydown = function(n) {
                if (/(38|40|27|32)/.test(n.which) && !/input|textarea/i.test(n.target.tagName)) {
                    var i = t(this);
                    if (n.preventDefault(), n.stopPropagation(), !i.is(".disabled, :disabled")) {
                        var o = e(i),
                        s = o.hasClass("open");
                        if (!s && 27 != n.which || s && 27 == n.which) return 27 == n.which && o.find(r).trigger("focus"), i.trigger("click");
                        var a = " li:not(.disabled):visible a",
                        l = o.find(".dropdown-menu" + a);
                        if (l.length) {
                            var u = l.index(n.target);
                            38 == n.which && u > 0 && u--, 40 == n.which && u < l.length - 1 && u++, ~u || (u = 0), l.eq(u).trigger("focus")
                        }
                    }
                }
            };
            var a = t.fn.dropdown;
            t.fn.dropdown = i, t.fn.dropdown.Constructor = s, t.fn.dropdown.noConflict = function() {
                return t.fn.dropdown = a, this
            }, t(document).on("click.bs.dropdown.data-api", n).on("click.bs.dropdown.data-api", ".dropdown form", function(t) {
                t.stopPropagation()
            }).on("click.bs.dropdown.data-api", r, s.prototype.toggle).on("keydown.bs.dropdown.data-api", r, s.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", s.prototype.keydown)
        }(jQuery), + function(t) {
            "use strict";
            function e(e) {
                var n, i = e.attr("data-target") || (n = e.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, "");
                return t(i)
            }
            function n(e) {
                return this.each(function() {
                    var n = t(this),
                    o = n.data("bs.collapse"),
                    r = t.extend({}, i.DEFAULTS, n.data(), "object" == typeof e && e);
                    !o && r.toggle && /show|hide/.test(e) && (r.toggle = !1), o || n.data("bs.collapse", o = new i(this, r)), "string" == typeof e && o[e]()
                })
            }
            var i = function(e, n) {
                this.$element = t(e), this.options = t.extend({}, i.DEFAULTS, n), this.$trigger = t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
            };
            i.VERSION = "3.3.5", i.TRANSITION_DURATION = 350, i.DEFAULTS = {
                toggle: !0
            }, i.prototype.dimension = function() {
                var t = this.$element.hasClass("width");
                return t ? "width" : "height"
            }, i.prototype.show = function() {
                if (!this.transitioning && !this.$element.hasClass("in")) {
                    var e, o = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
                    if (!(o && o.length && (e = o.data("bs.collapse"), e && e.transitioning))) {
                        var r = t.Event("show.bs.collapse");
                        if (this.$element.trigger(r), !r.isDefaultPrevented()) {
                            o && o.length && (n.call(o, "hide"), e || o.data("bs.collapse", null));
                            var s = this.dimension();
                            this.$element.removeClass("collapse").addClass("collapsing")[s](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                            var a = function() {
                                this.$element.removeClass("collapsing").addClass("collapse in")[s](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                            };
                            if (!t.support.transition) return a.call(this);
                            var l = t.camelCase(["scroll", s].join("-"));
                            this.$element.one("bsTransitionEnd", t.proxy(a, this)).emulateTransitionEnd(i.TRANSITION_DURATION)[s](this.$element[0][l])
                        }
                    }
                }
            }, i.prototype.hide = function() {
                if (!this.transitioning && this.$element.hasClass("in")) {
                    var e = t.Event("hide.bs.collapse");
                    if (this.$element.trigger(e), !e.isDefaultPrevented()) {
                        var n = this.dimension();
                        this.$element[n](this.$element[n]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                        var o = function() {
                            this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                        };
                        return t.support.transition ? void this.$element[n](0).one("bsTransitionEnd", t.proxy(o, this)).emulateTransitionEnd(i.TRANSITION_DURATION) : o.call(this)
                    }
                }
            }, i.prototype.toggle = function() {
                this[this.$element.hasClass("in") ? "hide" : "show"]()
            }, i.prototype.getParent = function() {
                return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function(n, i) {
                    var o = t(i);
                    this.addAriaAndCollapsedClass(e(o), o)
                }, this)).end()
            }, i.prototype.addAriaAndCollapsedClass = function(t, e) {
                var n = t.hasClass("in");
                t.attr("aria-expanded", n), e.toggleClass("collapsed", !n).attr("aria-expanded", n)
            };
            var o = t.fn.collapse;
            t.fn.collapse = n, t.fn.collapse.Constructor = i, t.fn.collapse.noConflict = function() {
                return t.fn.collapse = o, this
            }, t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function(i) {
                var o = t(this);
                o.attr("data-target") || i.preventDefault();
                var r = e(o),
                s = r.data("bs.collapse"),
                a = s ? "toggle" : o.data();
                n.call(r, a)
            })
        }(jQuery);
        var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
            return typeof t
        } : function(t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol ? "symbol" : typeof t
        },
        END = "change",
        START = "ontouchstart" in document ? "touchstart" : "mousedown",
        INPUT = "input",
        MAX_ROTATION = 35,
        SOFTEN_FACTOR = 3,
        RangeInput = function() {
            function t(e) {
                _classCallCheck(this, t), this.el = e, this._handleEnd = this._handleEnd.bind(this), this._handleStart = this._handleStart.bind(this), this._handleInput = this._handleInput.bind(this), $(this.el.querySelector("input[type=range]")).rangeslider({
                    polyfill: !1,
                    rangeClass: "rangeslider",
                    disabledClass: "rangeslider-disabled",
                    horizontalClass: "rangeslider-horizontal",
                    verticalClass: "rangeslider-vertical",
                    fillClass: "rangeslider-fill-lower",
                    handleClass: "rangeslider-thumb",
                    onInit: function() {
                        var t = this;
                        $(t.$element).parents(".range").find(".range-output").appendTo(t.$handle)
                    }
                }), this.sliderThumbEl = e.querySelector(".rangeslider-thumb"), this.outputEl = e.querySelector(".range-output"), this.inputEl = e.querySelector("input[type=range]"), this._lastOffsetLeft = 0, this._lastTimeStamp = 0, this.el.querySelector(".rangeslider").addEventListener(START, this._handleStart)
            }
            return t.prototype._handleStart = function(t) {
                var e = this;
                this._lastTimeStamp = (new Date).getTime(), this._lastOffsetLeft = this.sliderThumbEl.offsetLeft, requestAnimationFrame(function(t) {
                    $(e.inputEl).on(INPUT, e._handleInput), $(e.inputEl).on(END, e._handleEnd)
                })
            }, t.prototype._handleEnd = function(t) {
                var e = this;
                $(this.inputEl).off(INPUT, this._handleInput), $(this.inputEl).off(END, this._handleEnd), requestAnimationFrame(function(t) {
                    return e.outputEl.style.transform = "rotate(0deg)"
                })
            }, t.prototype._handleInput = function(t) {
                var e = this,
                n = (new Date).getTime(),
                i = n - this._lastTimeStamp || 1,
                o = this.sliderThumbEl.offsetLeft - this._lastOffsetLeft,
                r = o < 0 ? -1 : 1,
                s = Math.abs(o) / i,
                a = Math.min(Math.abs(o * s) * SOFTEN_FACTOR, MAX_ROTATION);
                requestAnimationFrame(function(t) {
                    return e.outputEl.style.transform = "rotate(" + a * -r + "deg)"
                }), this._lastTimeStamp = n, this._lastOffsetLeft = this.sliderThumbEl.offsetLeft
            }, t
        }();
        ! function(t) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == ("undefined" == typeof exports ? "undefined" : _typeof(exports)) ? module.exports = t(require("jquery")) : t(jQuery)
        }(function(t) {
            "use strict";
            function e() {
                var t = document.createElement("input");
                return t.setAttribute("type", "range"), "text" !== t.type
            }
            function n(t, e) {
                var n = Array.prototype.slice.call(arguments, 2);
                return setTimeout(function() {
                    return t.apply(null, n)
                }, e)
            }
            function i(t, e) {
                return e = e || 100,
                function() {
                    if (!t.debouncing) {
                        var n = Array.prototype.slice.apply(arguments);
                        t.lastReturnVal = t.apply(window, n), t.debouncing = !0
                    }
                    return clearTimeout(t.debounceTimeout), t.debounceTimeout = setTimeout(function() {
                        t.debouncing = !1
                    }, e), t.lastReturnVal
                }
            }
            function o(t) {
                return t && (0 === t.offsetWidth || 0 === t.offsetHeight || t.open === !1)
            }
            function r(t) {
                for (var e = [], n = t.parentNode; o(n);) e.push(n), n = n.parentNode;
                    return e
            }
            function s(t, e) {
                function n(t) {
                    "undefined" != typeof t.open && (t.open = !t.open)
                }
                var i = r(t),
                o = i.length,
                s = [],
                a = t[e];
                if (o) {
                    for (var l = 0; o > l; l++) s[l] = i[l].style.cssText, i[l].style.setProperty ? i[l].style.setProperty("display", "block", "important") : i[l].style.cssText += ";display: block !important", i[l].style.height = "0", i[l].style.overflow = "hidden", i[l].style.visibility = "hidden", n(i[l]);
                        a = t[e];
                    for (var u = 0; o > u; u++) i[u].style.cssText = s[u], n(i[u])
                }
            return a
        }
        function a(t, e) {
            var n = parseFloat(t);
            return Number.isNaN(n) ? e : n
        }
        function l(t) {
            return t.charAt(0).toUpperCase() + t.substr(1)
        }
        function u(e, o) {
            if (this.$window = t(window), this.$document = t(document), this.$element = t(e), this.options = t.extend({}, p, o), this.polyfill = this.options.polyfill, this.orientation = this.$element[0].getAttribute("data-orientation") || this.options.orientation, this.onInit = this.options.onInit, this.onSlide = this.options.onSlide, this.onSlideEnd = this.options.onSlideEnd, this.DIMENSION = h.orientation[this.orientation].dimension, this.DIRECTION = h.orientation[this.orientation].direction, this.DIRECTION_STYLE = h.orientation[this.orientation].directionStyle, this.COORDINATE = h.orientation[this.orientation].coordinate, this.polyfill && d) return !1;
            this.identifier = "js-" + c + "-" + f++, this.startEvent = this.options.startEvent.join("." + this.identifier + " ") + "." + this.identifier, this.moveEvent = this.options.moveEvent.join("." + this.identifier + " ") + "." + this.identifier, this.endEvent = this.options.endEvent.join("." + this.identifier + " ") + "." + this.identifier, this.toFixed = (this.step + "").replace(".", "").length - 1, this.$fill = t('<div class="' + this.options.fillClass + '" />'), this.$handle = t('<div class="' + this.options.handleClass + '" />'), this.$range = t('<div class="' + this.options.rangeClass + " " + this.options[this.orientation + "Class"] + '" id="' + this.identifier + '" />').insertAfter(this.$element).prepend(this.$fill, this.$handle), this.$element.css({
                position: "absolute",
                width: "1px",
                height: "1px",
                overflow: "hidden",
                opacity: "0"
            }), this.handleDown = t.proxy(this.handleDown, this), this.handleMove = t.proxy(this.handleMove, this), this.handleEnd = t.proxy(this.handleEnd, this), this.init();
            var r = this;
            this.$window.on("resize." + this.identifier, i(function() {
                n(function() {
                    r.update(!1, !1)
                }, 300)
            }, 20)), this.$document.on(this.startEvent, "#" + this.identifier + ":not(." + this.options.disabledClass + ")", this.handleDown), this.$element.on("change." + this.identifier, function(t, e) {
                if (!e || e.origin !== r.identifier) {
                    var n = t.target.value,
                    i = r.getPositionFromValue(n);
                    r.setPosition(i)
                }
            })
        }
        Number.isNaN = Number.isNaN || function(t) {
            return "number" == typeof t && t !== t
        };
        var c = "rangeslider",
        f = 0,
        d = e(),
        p = {
            polyfill: !0,
            orientation: "horizontal",
            rangeClass: "rangeslider",
            disabledClass: "rangeslider--disabled",
            horizontalClass: "rangeslider--horizontal",
            verticalClass: "rangeslider--vertical",
            fillClass: "rangeslider__fill",
            handleClass: "rangeslider__handle",
            startEvent: ["mousedown", "touchstart", "pointerdown"],
            moveEvent: ["mousemove", "touchmove", "pointermove"],
            endEvent: ["mouseup", "touchend", "pointerup"]
        },
        h = {
            orientation: {
                horizontal: {
                    dimension: "width",
                    direction: "left",
                    directionStyle: "left",
                    coordinate: "x"
                },
                vertical: {
                    dimension: "height",
                    direction: "top",
                    directionStyle: "bottom",
                    coordinate: "y"
                }
            }
        };
        return u.prototype.init = function() {
            this.update(!0, !1), this.onInit && "function" == typeof this.onInit && this.onInit()
        }, u.prototype.update = function(t, e) {
            t = t || !1, t && (this.min = a(this.$element[0].getAttribute("min"), 0), this.max = a(this.$element[0].getAttribute("max"), 100), this.value = a(this.$element[0].value, Math.round(this.min + (this.max - this.min) / 2)), this.step = a(this.$element[0].getAttribute("step"), 1)), this.handleDimension = s(this.$handle[0], "offset" + l(this.DIMENSION)), this.rangeDimension = s(this.$range[0], "offset" + l(this.DIMENSION)), this.maxHandlePos = this.rangeDimension - this.handleDimension, this.grabPos = this.handleDimension / 2, this.position = this.getPositionFromValue(this.value), this.$element[0].disabled ? this.$range.addClass(this.options.disabledClass) : this.$range.removeClass(this.options.disabledClass), this.setPosition(this.position, e)
        }, u.prototype.handleDown = function(t) {
            if (this.$document.on(this.moveEvent, this.handleMove), this.$document.on(this.endEvent, this.handleEnd), !((" " + t.target.className + " ").replace(/[\n\t]/g, " ").indexOf(this.options.handleClass) > -1)) {
                var e = this.getRelativePosition(t),
                n = this.$range[0].getBoundingClientRect()[this.DIRECTION],
                i = this.getPositionFromNode(this.$handle[0]) - n,
                o = "vertical" === this.orientation ? this.maxHandlePos - (e - this.grabPos) : e - this.grabPos;
                this.setPosition(o), e >= i && e < i + this.handleDimension && (this.grabPos = e - i)
            }
        }, u.prototype.handleMove = function(t) {
            t.preventDefault();
            var e = this.getRelativePosition(t),
            n = "vertical" === this.orientation ? this.maxHandlePos - (e - this.grabPos) : e - this.grabPos;
            this.setPosition(n)
        }, u.prototype.handleEnd = function(t) {
            t.preventDefault(), this.$document.off(this.moveEvent, this.handleMove), this.$document.off(this.endEvent, this.handleEnd), this.$element.trigger("change", {
                origin: this.identifier
            }), this.onSlideEnd && "function" == typeof this.onSlideEnd && this.onSlideEnd(this.position, this.value)
        }, u.prototype.cap = function(t, e, n) {
            return e > t ? e : t > n ? n : t
        }, u.prototype.setPosition = function(t, e) {
            var n, i;
            void 0 === e && (e = !0), n = this.getValueFromPosition(this.cap(t, 0, this.maxHandlePos)), i = this.getPositionFromValue(n), this.$fill[0].style[this.DIMENSION] = i + this.grabPos + "px", this.$handle[0].style[this.DIRECTION_STYLE] = i + "px", this.setValue(n), this.position = i, this.value = n, e && this.onSlide && "function" == typeof this.onSlide && this.onSlide(i, n)
        }, u.prototype.getPositionFromNode = function(t) {
            for (var e = 0; null !== t;) e += t.offsetLeft, t = t.offsetParent;
                return e
        }, u.prototype.getRelativePosition = function(t) {
            var e = l(this.COORDINATE),
            n = this.$range[0].getBoundingClientRect()[this.DIRECTION],
            i = 0;
            return "undefined" != typeof t["page" + e] ? i = t["client" + e] : "undefined" != typeof t.originalEvent["client" + e] ? i = t.originalEvent["client" + e] : t.originalEvent.touches && t.originalEvent.touches[0] && "undefined" != typeof t.originalEvent.touches[0]["client" + e] ? i = t.originalEvent.touches[0]["client" + e] : t.currentPoint && "undefined" != typeof t.currentPoint[this.COORDINATE] && (i = t.currentPoint[this.COORDINATE]), i - n
        }, u.prototype.getPositionFromValue = function(t) {
            var e, n;
            return e = (t - this.min) / (this.max - this.min), n = Number.isNaN(e) ? 0 : e * this.maxHandlePos
        }, u.prototype.getValueFromPosition = function(t) {
            var e, n;
            return e = t / (this.maxHandlePos || 1), n = this.step * Math.round(e * (this.max - this.min) / this.step) + this.min, Number(n.toFixed(this.toFixed))
        }, u.prototype.setValue = function(t) {
            (t !== this.value || "" === this.$element[0].value) && this.$element.val(t).trigger("input", {
                origin: this.identifier
            })
        }, u.prototype.destroy = function() {
            this.$document.off("." + this.identifier), this.$window.off("." + this.identifier), this.$element.off("." + this.identifier).removeAttr("style").removeData("plugin_" + c), this.$range && this.$range.length && this.$range[0].parentNode.removeChild(this.$range[0])
        }, t.fn[c] = function(e) {
            var n = Array.prototype.slice.call(arguments, 1);
            return this.each(function() {
                var i = t(this),
                o = i.data("plugin_" + c);
                o || i.data("plugin_" + c, o = new u(this, e)), "string" == typeof e && o[e].apply(o, n)
            })
        }, "rangeslider.js is available in jQuery context e.g $(selector).rangeslider(options);"
    }), $(".range").length > 0 && new RangeInput(document.querySelector(".range")),
function(t, e, n, i) {
    var o = t(e);
    t.fn.lazyload = function(r) {
        function s() {
            var e = 0;
            l.each(function() {
                var n = t(this);
                if (!u.skip_invisible || n.is(":visible"))
                    if (t.abovethetop(this, u) || t.leftofbegin(this, u));
                else if (t.belowthefold(this, u) || t.rightoffold(this, u)) {
                    if (++e > u.failure_limit) return !1
                } else n.trigger("appear"), e = 0
        })
        }
        var a, l = this,
        u = {
            threshold: 0,
            failure_limit: 0,
            event: "scroll",
            effect: "show",
            containertrans: e,
            data_attribute: "original",
            skip_invisible: !1,
            appear: null,
            load: null,
            placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
        };
        return r && (i !== r.failurelimit && (r.failure_limit = r.failurelimit, delete r.failurelimit), i !== r.effectspeed && (r.effect_speed = r.effectspeed, delete r.effectspeed), t.extend(u, r)), a = u.containertrans === i || u.containertrans === e ? o : t(u.containertrans), 0 === u.event.indexOf("scroll") && a.bind(u.event, function() {
            return s()
        }), this.each(function() {
            var e = this,
            n = t(e);
            e.loaded = !1, n.attr("src") !== i && n.attr("src") !== !1 || n.is("img") && n.attr("src", u.placeholder), n.one("appear", function() {
                if (!this.loaded) {
                    if (u.appear) {
                        var i = l.length;
                        u.appear.call(e, i, u)
                    }
                    t("<img />").bind("load", function() {
                        var i = n.attr("data-" + u.data_attribute);
                        n.hide(), n.is("img") ? n.attr("src", i) : n.css("background-image", "url('" + i + "')"), n[u.effect](u.effect_speed), e.loaded = !0;
                        var o = t.grep(l, function(t) {
                            return !t.loaded
                        });
                        if (l = t(o), u.load) {
                            var r = l.length;
                            u.load.call(e, r, u)
                        }
                    }).attr("src", n.attr("data-" + u.data_attribute))
                }
            }), 0 !== u.event.indexOf("scroll") && n.bind(u.event, function() {
                e.loaded || n.trigger("appear")
            })
        }), o.bind("resize", function() {
            s()
        }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && o.bind("pageshow", function(e) {
            e.originalEvent && e.originalEvent.persisted && l.each(function() {
                t(this).trigger("appear")
            })
        }), t(n).ready(function() {
            s()
        }), this
    }, t.belowthefold = function(n, r) {
        var s;
        return s = r.containertrans === i || r.containertrans === e ? (e.innerHeight ? e.innerHeight : o.height()) + o.scrollTop() : t(r.containertrans).offset().top + t(r.containertrans).height(), s <= t(n).offset().top - r.threshold
    }, t.rightoffold = function(n, r) {
        var s;
        return s = r.containertrans === i || r.containertrans === e ? o.width() + o.scrollLeft() : t(r.containertrans).offset().left + t(r.containertrans).width(), s <= t(n).offset().left - r.threshold
    }, t.abovethetop = function(n, r) {
        var s;
        return s = r.containertrans === i || r.containertrans === e ? o.scrollTop() : t(r.containertrans).offset().top, s >= t(n).offset().top + r.threshold + t(n).height()
    }, t.leftofbegin = function(n, r) {
        var s;
        return s = r.containertrans === i || r.containertrans === e ? o.scrollLeft() : t(r.containertrans).offset().left, s >= t(n).offset().left + r.threshold + t(n).width()
    }, t.inviewport = function(e, n) {
        return !(t.rightoffold(e, n) || t.leftofbegin(e, n) || t.belowthefold(e, n) || t.abovethetop(e, n))
    }, t.extend(t.expr[":"], {
        "below-the-fold": function(e) {
            return t.belowthefold(e, {
                threshold: 0
            })
        },
        "above-the-top": function(e) {
            return !t.belowthefold(e, {
                threshold: 0
            })
        },
        "right-of-screen": function(e) {
            return t.rightoffold(e, {
                threshold: 0
            })
        },
        "left-of-screen": function(e) {
            return !t.rightoffold(e, {
                threshold: 0
            })
        },
        "in-viewport": function(e) {
            return t.inviewport(e, {
                threshold: 0
            })
        },
        "above-the-fold": function(e) {
            return !t.belowthefold(e, {
                threshold: 0
            })
        },
        "right-of-fold": function(e) {
            return t.rightoffold(e, {
                threshold: 0
            })
        },
        "left-of-fold": function(e) {
            return !t.rightoffold(e, {
                threshold: 0
            })
        }
    })
}(jQuery, window, document), $(function() {
    $(".js-feedback-rating").on("click", ".rating-star", function() {
        var t = $(this).parent(),
        e = $(this).index();
        t.children("input").val(e).trigger("change"), t.children(".rating-star").each(function(t) {
            $(this).removeClass("active");
            var n = t + 1;
            n <= e && $(this).addClass("active")
        })
    }), $("#menuToggle").on("click", function() {
        $("#menuCollapse").toggleClass("collapsed")
    }), $('[data-toggle="tooltip"]').tooltip(), $('[data-toggle="popover"]').each(function() {
        var t = $(this).data("class"),
        e = $(this).data("placement");
        $(this).popover({
            containertrans: "body",
            template: '<div class="tooltip popover ' + t + '"><div class="tooltip-arrow"></div><div class="tooltip-inner popover-content"></div></div>',
            placement: "" != e ? e : "bottom",
            html: !0,
            content: $($(this).data("target")).html()
        })
    }), $(".application-page #transcriptionupload").length && $(".application-page #transcriptionupload").on("change", function() {
        var t = $(this).val().replace(/.*[\/\\]/, "");
        t.length ? $("#upload-action-text").html("Selected transcription: <strong>" + t + "</strong>") : $("#upload-action-text").html("Transcription is not selected!")
    })
}), $("body").on("click", ".input-error", removeInputError);
var cookie = {
    set: function(t, e, n, i, o) {
        var r = new Date,
        s = "",
        a = typeof e,
        l = "",
        u = "";
        if (i = i || "/", n && (r.setTime(r.getTime() + 24 * n * 60 * 60 * 1e3), s = "; expires=" + r.toUTCString()), "object" === a && "undefined" !== a) {
            if (!("JSON" in window)) throw "Bummer, your browser doesn't support JSON parsing.";
            l = encodeURIComponent(JSON.stringify({
                v: e
            }))
        } else l = encodeURIComponent(e);
        o && (u = "; secure"), document.cookie = t + "=" + l + s + "; path=" + i + u
    },
    get: function(t) {
        for (var e = t + "=", n = document.cookie.split(";"), i = "", o = "", r = {}, s = 0; s < n.length; s++) {
            for (var a = n[s];
                " " == a.charAt(0);) a = a.substring(1, a.length);
                if (0 === a.indexOf(e)) {
                    if (i = decodeURIComponent(a.substring(e.length, a.length)), o = i.substring(0, 1), "{" == o) try {
                        if (r = JSON.parse(i), "v" in r) return r.v
                    } catch (l) {
                        return i
                    }
                    if ("undefined" == i) return;
                    return i
                }
            }
            return null
        },
        remove: function(t) {
            this.set(t, "", -1)
        },
        increment: function(t, e) {
            var n = this.get(t) || 0;
            this.set(t, parseInt(n, 10) + 1, e)
        },
        decrement: function(t, e) {
            var n = this.get(t) || 0;
            this.set(t, parseInt(n, 10) - 1, e)
        }
    };
</script>
<!-- <script src="<?php echo ARCHIVO; ?>transcription-audio/js/fileuploadba95.js"></script> -->

<script>
    raiz = '<?php echo ARCHIVO; ?>';
        // just upload
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            function getFileExtension(filename) {
              return filename.split('.').pop();
          }
          var url = raiz+'transcription-audio/archivo.php';
          var r = new Resumable({
            target: url,
            simultaneousUploads:2,
            testChunks:false,
            throttleProgressCallbacks:1
        });
          r.assignBrowse($('.js-upload-files-button'));
          r.assignDrop($('.uploaded-file.no-files'));
          r.on('fileAdded', function(file, event){
            addFile({
                id: file.uniqueIdentifier,
                original_filename: file.fileName,
                size: '-',
                duration_for_humans: '-'
            });
            r.upload();
        });
          r.on('fileSuccess', function(file, data){
            removeTemporary(file.uniqueIdentifier);
            var data = JSON.parse(data);
            if(data['msj'] == 'error'){
                //removeTemporary(file.uniqueIdentifier);
                //showError(file.fileName);
                $('#modalarchivootro').html(file.fileName);
                $('#inputotrofilename').val(data['original_filename']);
                $('#inputotroid').val(data['id']);
                $('#uploadArchiModal').modal('show');
                showHideOptions();
            }else{
                addFile(data, true); // permanent
                recalculatePrice();
                if ($('.js-file-containertrans .js-progress').length == 0) {
                    showDonePopup('regular');
                }
            }
    });
          r.on('complete', function(){
          });
          r.on('fileError', function(file, message){
            removeTemporary(file.uniqueIdentifier);
            showError(file.fileName);
            showHideOptions();
        });
          r.on('fileProgress', function(file){
        var tmp_id = file.uniqueIdentifier; // file tmp id
        var percents = parseInt(r.progress() * 100, 10);
        var mb_s = file.size / 1024 / 1024 / 8;
        $(".js-file-containertrans .js-file[data-id=" + tmp_id + "] .js-progress-bar").css('width', percents + '%');
        $(".js-file-containertrans .js-file[data-id=" + tmp_id + "] .js-progress-text").text(round(mb_s, 2) +  ' MB/s - ' + percents + '%');
    });
          $('.js-fileuploadotroo-click').click(function(){
            var id = $(".js-fileotro [name=id]").val();
            var filename = $(".js-fileotro [name=filename]").val();
            var hora = $(".js-fileotro [name=hora]").val();
            var min = $(".js-fileotro [name=min]").val();
            var seg = $(".js-fileotro [name=seg]").val();
            var urlotro = raiz+'transcription-audio/otrofile.php';
            var dato = {
                id: id,
                filename: filename,
                hora: hora,
                min: min,
                seg: seg
            };

            var post = $.post(urlotro, dato);
            post.done(function(data) {
                var data = JSON.parse(data);
                if (data['msj']=='error') {
                    showError(data['original_filename']+' No posee tiempo ');
                    showHideOptions();
                }else{
                    addFile(data, true);
                    recalculatePrice();
                    showDonePopup('regular');
                }

            });
            post.fail(function(data) {
                var data = JSON.parse(data);
                showError(data['original_filename']);
                showHideOptions();
            });

        });

          $('.js-fileuploadotrodelet-click').click(function(){
            var id = $(".js-fileotro [name=id]").val();
            var filename = $(".js-fileotro [name=filename]").val();
            var eliminar = 1;
            var urlotro = raiz+'transcription-audio/otrofile.php';
            var dato = {
                id: id,
                filename: filename,
                eliminar: eliminar,
            };

            var post = $.post(urlotro, dato);
            post.done(function(data) {
                recalculatePrice();
            });
            post.fail(function(data) {
                var data = JSON.parse(data);
                showError(data['original_filename']);
                showHideOptions();
            });

        });

        //   $('.js-fileuploadotro-click').click(function(){
        //     var id = $(".js-fileotro [name=id]").val();
        //     var filename = $(".js-fileotro [name=filename]").val();
        //     var hora = $(".js-fileotro [name=hora]").val();
        //     var min = $(".js-fileotro [name=min]").val();
        //     var seg = $(".js-fileotro [name=seg]").val();
        //     var urlotro = raiz+'transcription-audio/archivootro.php';
        //     $('.js-fileuploadotro')
        //     var rr = new Resumable({
        //         target: urlotro,
        //         simultaneousUploads:2,
        //         query:{hora:hora,min:min,seg:seg,id:id,filename:filename},
        //         testChunks:false,
        //         throttleProgressCallbacks:1
        //     });
        //     rr.assignBrowse($('.js-fileuploadotro'));
        //     rr.on('fileAdded', function(file, event){
        //         addFile({
        //             id: file.uniqueIdentifier,
        //             original_filename: file.fileName,
        //             size: '-',
        //             duration_for_humans: '-'
        //         });
        //         rr.upload();
        //     });
        //     rr.on('fileSuccess', function(file, data){
        //         removeTemporary(file.uniqueIdentifier);
        //         var data = JSON.parse(data);
        //         addFile(data, true); // permanent
        //         recalculatePrice();
        //         if ($('.js-file-containertrans .js-progress').length == 0) {
        //             showDonePopup('regular');
        //         }
        //     });
        //     rr.on('fileError', function(file, message){
        //         removeTemporary(file.uniqueIdentifier);
        //         showError(file.fileName);
        //         showHideOptions();
        //     });
        //     rr.on('fileProgress', function(file){
        //     var tmp_id = file.uniqueIdentifier; // file tmp id
        //     var percents = parseInt(rr.progress() * 100, 10);
        //     var mb_s = file.size / 1024 / 1024 / 8;
        //     $(".js-file-containertrans .js-file[data-id=" + tmp_id + "] .js-progress-bar").css('width', percents + '%');
        //     $(".js-file-containertrans .js-file[data-id=" + tmp_id + "] .js-progress-text").text(round(mb_s, 2) +  ' MB/s - ' + percents + '%');
        // });
        // });
            // remove files with progress
            function removeTemporary(tmp_id) {
                // single file
                if (tmp_id) {
                    var file = $(".js-file-containertrans .js-file[data-id=" + tmp_id + "]");
                    file.remove();
                    return true;
                }
                // all files
                var files = $(".js-file-containertrans .js-file");
                $.each(files, function(k, file) {
                    var temporary = $(file).find(".js-progress").length;
                    if (temporary) {
                        $(file).remove();
                    }
                });
            }
        });
        // other
        $(function() {
            // $("body").on("click", ".js-delete-item", delete_item);
            $("body").on("click", ".js-toggle-comment", toggle_comment);
            $("body").on("click", ".js-save-comment", update_comment);
            $("body").on("click", ".js-toggle-duration", toggle_duration);
            $("body").on("click", ".js-save-duration", update_duration);
            function toggle_comment() {
                var comment = $(this).closest(".js-file").find(".js-comment");
                if (comment.is(":visible")) {
                    close_all_popups();
                } else {
                    close_all_popups();
                    comment.slideDown();
                }
            }
            function toggle_duration() {
                var duration = $(this).closest(".js-file").find(".js-duration");
                if (duration.is(":visible")) {
                    close_all_popups();
                } else {
                    close_all_popups();
                    duration.slideDown();
                }
            }
            function update_comment() {
                // save
                var file = $(this).closest(".js-file");
                var comment = file.find(".js-comment").find("textarea").val();
                var audio_id = file.attr("data-id");
                var data = {
                    _token: "AJu702p54vBRXeSgTJ6Optj8aNPCxOQNWCBM3ZgO",
                    type: "transcription",
                    item_id: audio_id,
                    comment: comment
                };
                $.post(raiz+'transcription-audio/update-comment.php', data);
                // change image
                var img = file.find(".js-toggle-comment").addClass('comment-done-icon');
                close_all_popups();
            }
            function update_duration() {
                // save
                var file = $(this).closest(".js-file");
                var object_id = file.attr("data-id");
                var from = file.find(".js-from").val();
                var till = file.find(".js-till").val();
                var data = {
                    _token: "AJu702p54vBRXeSgTJ6Optj8aNPCxOQNWCBM3ZgO",
                    object_id: object_id,
                    type: 'transcription',
                    from: from,
                    till: till
                };
                var time = /^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/;
                if(time.test(till) && time.test(from)){
                    var post = $.post(raiz+'transcription-audio/duracion.php', data);
                    post.done(function(audio) {
                        var audio = JSON.parse(audio);
                        file.children(":first").attr("data-duration", audio.duration); // what it is used for? do we still need it?
                        file.find('.js-duration-for-humans').text(audio.duration_for_humans);
                        file.find('.js-from').val(audio.from_human);
                        file.find('.js-till').val(audio.till_human);
                        recalculatePrice();
                    });
                // change image
                var img = file.find(".js-toggle-duration").addClass('trim-done-icon');
                close_all_popups();
            }
        }
        function close_all_popups() {
            $(".js-duration:visible").slideUp();
            $(".js-comment:visible").slideUp();
        }
    });
        // calculator
        $(function() {
            $(".js-calculator [name=hours]").on("input", calculate);
            $(".js-calculator [name=minutes]").on("input", calculate);
        $(".js-calculator .js-autoupdate").change(calculate); // on external trigger
        var simple_popovers = $(".js-simple-popover");
        function calculate() {
            var calculator = $(".js-calculator");
            var url = raiz+"transcription-audio/updateaudio.php";
            var external_minutes = null;
            var external_words = null;
            if ($(".js-calculator [name=words]").length) {
                external_words = parseInt($(".js-calculator [name=words]").val());
            }
            if (this.name == 'hours' || this.name == 'minutes') {
                // reset words
                external_words = 0;
                $(".js-calculator [name=words]").val(0);
            }
            // if (this.name == 'words') {
                // reset hours and minutes
                external_minutes = $('.cell-middle').text();
                // $(".js-calculator [name=hours]").val(0);
                // $(".js-calculator [name=minutes]").val(0)
            // }
            var presupuesto = $('.cell-title').text();
            var text_format = $(".js-calculator [name=text_format]:checked").val();
            var timestamping = $(".js-calculator [name=timestamping]").val();
            var subtitle = $(".js-calculator [name=subtitle]:checked").val();
            var speaker = $(".js-calculator [name=speakers]:checked").val();
            var tat = $(".js-calculator [name=tat]:checked").val();
                // var language = $(".js-calculator [name=language]").val();
                var low_quality = $('.js-calculator [name=low_quality]:checked').val();
                // var low_quality = $('.js-calculator [name=low_quality]').val();
                // var open_captions = $('.js-calculator [name=subtitle]:checked').val();
                var post_data = {
                    presupuesto:presupuesto,
                    text_format: text_format,
                    timestamping: timestamping,
                    subtitle: subtitle,
                    speakers: speaker,
                    tat: tat,
                    low_quality: low_quality,
                    external_minutes: external_minutes
                };
                var ajax = $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: url,
                    data: post_data
                });
                ajax.done(function(data) {
                // var data = JSON.parse(data);
                calculatorUpdateHTML(data); // output function that must be defined in file to update HTML
                if (typeof data.tats_discounted !== 'undefined') {
                    calculatorUpdateTatPrices(data);
                }
            });
            }
        });
        <?php date_default_timezone_set('Europe/Madrid');?>
        <?php $dia = date('d');
$hora              = date('G');
$cm                = date('n');
$mes               = $cm - 1;
$year              = date('Y');
?>
        function fechaEntregaCalcu(min,porHora,diaTrabajo) {
            var semana = ['Domingo','Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
            var mes = [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', ' Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
            var sab = 6;
            var dom = 0;
            var fechaIncio = new Date();
            var fechaTotal = new Date();
            fechaIncio.setDate(<?php echo $dia; ?>);
            fechaIncio.setMonth(<?php echo $mes; ?>);
            fechaIncio.setHours(<?php echo $hora; ?>);
            fechaIncio.setFullYear(<?php echo $year; ?>);
            fechaTotal.setDate(<?php echo $dia; ?>);
            fechaTotal.setMonth(<?php echo $mes; ?>);
            fechaTotal.setHours(<?php echo $hora; ?>);
            fechaTotal.setFullYear(<?php echo $year; ?>);
            var FechasFestivas = [
            [1],[40],[19,25],[19,22],[1],[24,29],
            [40],[15],[40],[9,12],[1],[6,25],
            ];
            if (fechaIncio.getHours()>=13) {
                fechaIncio.setDate(fechaIncio.getDate() + 1);
            }
//Se suman los minutos del audio y los dias del plan ----------------------------------------
if (porHora == 0) {
    fechaTotal.setDate(fechaIncio.getDate() + diaTrabajo + 1);
}else{
    fechaTotal.setDate(fechaIncio.getDate() + diaTrabajo + 1);
    if (min>1440) {
        dias = min/1440;
        var cont = dias.split(".");
        console.log(dias);
        for (var i = 1; i <= cont[0]; i++) {
            console.log(i);
            var horas = 1440/porHora;
            var totalHoras = horas * 24;
            fechaTotal.setHours(fechaIncio.getHours() + totalHoras);
        }
    }else{

        var horas = min/porHora;
        var totalHoras = horas * 24;
        fechaTotal.setHours(fechaIncio.getHours() + totalHoras);
    }

}
//------------------FIN-------------------------------------------------------------------------
//-- Donde se calcula cuantos sabados y domingos exiten para no tomarlos y saltar los dias------
while(fechaIncio.getDate() != fechaTotal.getDate()){
    if (fechaIncio.getDay() == dom || fechaIncio.getDay() == sab) {
        fechaTotal.setDate(fechaTotal.getDate() + 1);
    }else{
        for (var i = 0; i <= FechasFestivas[fechaIncio.getMonth()].length; i++) {
            if(fechaIncio.getDate() == FechasFestivas[fechaIncio.getMonth()][i]){
                fechaTotal.setDate(fechaTotal.getDate() + 1);
            }
        }
    }
    fechaIncio.setDate(fechaIncio.getDate() + 1);
}
fechaIncio.setDate(fechaIncio.getDate() - 1);
//-------------Fin de calculo de saltar sabado y domingo-------------------------------------
var Fechas = [semana[fechaIncio.getDay()], fechaIncio.getDate(), mes[fechaIncio.getMonth()], fechaIncio.getFullYear()];
return Fechas;
}
//Funcion para imprimir en pantalla todas las fechas de entrega-----------------------------
function plazoEntregaCalcu(plan, day, date, month , year){
    var b = document.getElementById(plan);
    b.innerHTML = '<b>'+day+' <br> ' +date+' de '+month+ ' del ' +year+'</b><br>';
    b.style.background= '#EF5068';
    b.style.fontSize= '10px';
    b.style.padding = '0px 5px';
}
//----------------FIN de funcion de imprimir fechas por pantalla-----------------------------
//---------------Funcion que captura el evento del click ya suministrado los minutos para mostrar las fechas de todos los planes
function entregaCalcu(minf) {
    var min = minf;
    /* Funciones que hacen el calculo de las fechas de entregas */
            //Si un cliente tiene 2 horas de audio tardamos 4 días + 2 días = 6 días
            var fechaNormal= fechaEntregaCalcu(min,60,4);
            //2 días + 12 horas por cada hora de audio. Si un cliente tiene 2 horas de audio tardamos 2 días + 1 días = 3 días.(Opción aplicable solo de lunes a viernes)
            var fechaRapida = fechaEntregaCalcu(min,120,2);
            //1 día + 6 horas por cada hora de audio. Si un cliente tiene 2 horas de audio tardamos 1 día + 12 horas = 1 día y medio.(Opción aplicable solo de lunes a viernes)
            var fechaExpress = fechaEntregaCalcu(min,240,1);
            //se puede hacer en 24 horas.(Opción aplicable solo de lunes a viernes)
            var fecha24H= fechaEntregaCalcu(min,0,0);
            //Funciones para imprimir en pantalla las fechas de entrega
            plazoEntregaCalcu('Fecha_normal', fechaNormal[0], fechaNormal[1], fechaNormal[2], fechaNormal[3]);
            plazoEntregaCalcu('Fecha_rapida', fechaRapida[0], fechaRapida[1], fechaRapida[2], fechaRapida[3]);
            plazoEntregaCalcu('Fecha_express', fechaExpress[0], fechaExpress[1], fechaExpress[2], fechaExpress[3]);
            plazoEntregaCalcu('Fecha_24H', fecha24H[0], fecha24H[1], fecha24H[2], fecha24H[3]);
            //captura el plan con el Evento click y saber que fecha de entrega corresponde para enviar al correo
            document.getElementById('days_5').addEventListener('click', resumenCorreoNCalcu);
            document.getElementById('days_3').addEventListener('click', resumenCorreoRCalcu);
            document.getElementById('days_1').addEventListener('click', resumenCorreoECalcu);
            document.getElementById('hours_12').addEventListener('click', resumenCorreo24Calcu);
//--------------------------------fin de captuar elemento de los planes-------------------------------------------
//---------Funciones que imprime la Fecha de Entrega en el input del formato de los datos que envia al correo--------------
var fechentr = $('input:radio[name=tat]:checked').val();
if(fechentr == 'normal'){
    resumenCorreoNCalcu();
}else if(fechentr == 'rapido'){
    resumenCorreoRCalcu();
}else if(fechentr == 'express'){
    resumenCorreoECalcu();
}else if(fechentr == 'horas'){
    resumenCorreo24Calcu();
}
function resumenCorreoNCalcu(){
    sessionStorage.removeItem('fechaentrega');
    var Fecha_EntregaN = fechaNormal[0]+' - '+ fechaNormal[1]+' de '+fechaNormal[2]+' del '+fechaNormal[3];
    sessionStorage.setItem("fechaentrega", Fecha_EntregaN);
}
function resumenCorreoRCalcu(){
    sessionStorage.removeItem('fechaentrega');
    var Fecha_EntregaR = fechaRapida[0]+' - '+ fechaRapida[1]+' de '+fechaRapida[2]+' del '+fechaRapida[3];
    sessionStorage.setItem("fechaentrega", Fecha_EntregaR);
}
function resumenCorreoECalcu(){
    sessionStorage.removeItem('fechaentrega');
    var Fecha_EntregaE = fechaExpress[0]+' - '+ fechaExpress[1]+' de '+fechaExpress[2]+' del '+fechaExpress[3];
    sessionStorage.setItem("fechaentrega", Fecha_EntregaE);
}
function resumenCorreo24Calcu(){
    sessionStorage.removeItem('fechaentrega');
    var Fecha_Entrega24 = fecha24H[0]+' - '+ fecha24H[1]+' de '+fecha24H[2]+' del '+fecha24H[3];
    sessionStorage.setItem("fechaentrega", Fecha_Entrega24);
}
}
        // calculator updates values
        function calculatorUpdateHTML(data) {
            var calculator = $(".js-calculator");
            if (data['min']>=30) {
                entregaCalcu(data['min']);
            }
            if (data['discount']) {
                $('.js-discount-containertrans').slideDown();
            } else {
                $('.js-discount-containertrans').slideUp();
            }
            var subtotal_input = $(".js-subtotal");
            subtotal_input.text(currency(data["subtotal"], 'number'));
            var discount = $(".js-discount");
            discount.text(Math.round(data["discount"]));
            var you_save_input = $(".js-you-save");
            you_save_input.text(currency(data["you_save"], 'number'));
            var total_input = $(".js-total");
            total_input.text(data["total"]);
            if (data["total"]=='' || data["presupuesto"]=='Archivo de muestra' || data['min']<=30) {
                $("#btn-compra").html('');
            }else{
                $("#btn-compra").html('<a class="order-summary__continue-button">Continuar</a>');
            }
            // transcription count
            var file_count = $("[data-duration]:visible").length
            if(file_count>0){
                if(document.getElementById("btnPresuNone").getAttribute('data-active')==null && data["presupuesto"]=="Archivo de muestra"){
                    document.getElementById("btnPresuNone").click();
                }
                document.getElementById("btnPresuNone").style.display= "none";
                document.getElementById("btnPresuNone").setAttribute('data-active','none');

            }else{
                if(document.getElementById("btnPresuNone").getAttribute('data-active')=="none" && data["presupuesto"]=="Archivo de muestra"){
                    document.getElementById("btnPresuNone2").click();
                }
                document.getElementById("btnPresuNone").style.display= "block";
                document.getElementById("btnPresuNone").removeAttribute('data-active');
            }
            $(".js-file-count").text(file_count);
            if (data['words']) {
                $('.js-order-words').text(data['words']).parent().show();
            } else {
                $('.js-order-words').text(0).parent().hide();
            }
            if (data['minutes']) {
                $('.js-order-duration').text(secondsToHumanTime(data['minutes'])).parent().show();
            } else {
                $('.js-order-duration').text(0).parent().hide();
            }
        }
        // add files (when page loads)
        $(function() {
            // update data
            recalculatePrice();
        });
        function recalculatePrice() {
            $(".js-calculator .js-autoupdate:first").change();
            showHideOptions();
        }
        // tat, speakers, text format...
        function showHideOptions() {
            var options = $('.js-calculator');
            var files = $('.js-file-containertrans');
            var no_files = $('.js-no-files');
            setTimeout(function () {
                if (files.find('.js-file').length) {
                    // there are files
                    if (!options.is(':visible')) {
                        options.slideDown();
                        no_files.slideUp();
                    }
                    $('.js-table-heading').show();
                    $('.js-top-upload-buttons').show();
                    $('.js-top-safe-text').hide();
                    $('.js-order-summary').show();
                } else {
                    // no files
                    options.slideUp();
                    no_files.slideDown();
                    $('.js-table-heading').hide();
                    $('.js-top-upload-buttons').hide();
                    $('.js-top-safe-text').show();
                    $('.js-order-summary').hide();
                }
            }, 450);
//            $('.js-filename-popover').popover({
//                containertrans: 'body',
//                template: $(".js-simple-popover-template").html(),
//                placement: 'top',
//                trigger: 'hover'
//            });
}
        // drag enter effect
        $(function () {
            var dragarea = $('.js-dragarea');
            var no_files_containertrans = $('.js-no-files');
            var no_files_original_bg = no_files_containertrans.css('background-color');
            dragarea.on('dragenter', function(event) {
                var no_files_containertrans = $('.js-no-files');
                no_files_containertrans.css('background-color', '#cee0ea');
            });
            dragarea.on('dragleave', function(event) {
                var no_files_containertrans = $('.js-no-files');
                no_files_containertrans.css('background-color', no_files_original_bg);
            });
            dragarea.on('drop', function(event) {
                var no_files_containertrans = $('.js-no-files');
                no_files_containertrans.css('background-color', no_files_original_bg);
            });
        });
        // drag area buttons
        $(function () {
            // var upload_files_button = $('.js-upload-files-button');
            // upload_files_button.click(function () {
            //     var original_file_upload = $('.js-original-fileupload');
            //     original_file_upload.click();
            // });
            var upload_files_buttonotro = $('.js-fileuploadotro-click');
            upload_files_buttonotro.click(function () {
                var fileuploadotro = $('.js-fileuploadotro');
                fileuploadotro.click();
            })
        });
    </script>
    <script>
        // sticky sidebar
        /*
        $(function () {
            if ($( window ).width() >= 1200) {
                var min_height = $('.js-sidebar').outerHeight();
                $('.js-min-height').css("min-height", min_height + 117);
                $('.js-sidebar').affix({
                    offset: {
                        top: $('.js-sidebar').offset().top,
                        bottom: $('.site-footer').outerHeight() + 250
                    }
                })
            }
        });
        */
        // add file


        function clickPresupuesto(){
            if (document.querySelectorAll('#inputpresu')[1]) {
                var segpresu = document.querySelectorAll('#inputpresu')[1].value;
            }else if (document.querySelectorAll('#inputpresu')[2]) {
                var segpresu = document.querySelectorAll('#inputpresu')[2].value;
            }

                presupuesto(segpresu);
        }

        function presupuesto(segpresu){
            function removePresupuesto() {
                var files = $(".js-file-containertrans .js-file");
                $.each(files, function(k, file) {
                    $(file).remove();
                });
            }
            removePresupuesto();
            if (segpresu>=30) {

                var segundos = segpresu*60;

                function hora(time){
                    var hours = Math.floor( time / 3600 );
                    var minutes = Math.floor( (time % 3600) / 60 );
                    var seconds = time % 60;

                    //Anteponiendo un 0 a los minutos si son menos de 10
                    minutes = minutes < 10 ? '0' + minutes : minutes;

                    //Anteponiendo un 0 a los segundos si son menos de 10
                    seconds = seconds < 10 ? '0' + seconds : seconds;

                    var result = hours + ":" + minutes + ":" + seconds;

                    return result;
                }

                var idt = Math.floor(Math.random() * 1000 + 1);
                var data = {
                    id: idt,
                    original_filename: 'Archivo de muestra',
                    duration_for_humans: hora(segundos),
                    duration: segundos,
                    negado: 1,
                    download: '#',
                    original_duration: segundos,
                    comment: '',
                    from: 0,
                    from_human:'00:00:00',
                    till: segundos,
                    till_human: hora(segundos)

                };

                addFile(data, true);
            }
            recalculatePrice();
        }

        function addFile(data, file_uploaded) {
            console.log(data);
            var no_files = $('.js-no-files');
            no_files.hide();
            var file_containertrans = $(".js-file-containertrans");
            data['words_or_duration'] = '-';
            if (data['words']) {
                data['words_or_duration'] = data['words'] + ' words';
            }
            if (data['duration']) {
                data['words_or_duration'] = data['duration'];
            }
            if (file_uploaded) {
                data['delete'] = '<span class="icon delete-icon js-delete-item"></span>';
                data['progress'] = '';
                data['tick'] = '<span class="icon uploaded-icon"></span>';
                if (data['negado']==1) {
                    data['play'] = '<span class="icon play-icon inactive"></span>';
                }else{
                    data['play'] = '<a target="_blank" href="' + data['download'] + '"><span class="icon play-icon"></span></a>';
                }
            } else {
                data['delete'] = '';
                data['progress'] = '<div class="upload-progress js-progress"><div class="upload-progress-bar js-progress-bar" style="width:0;"></div><div class="upload-progress-text js-progress-text"></div></div>';
                data['tick'] = '<span class="icon uploading-icon inactive"></span>';
                data['play'] = '<span class="icon play-icon inactive"></span>';
            }
            var comment_message = 'Si hay algunas palabras o nombres específicos en sus archivos, por favor mencione en los comentarios. Esto facilitará la transcripción.';
            if (!file_uploaded || typeof(data['comment']) === "undefined" || data['original_filename']=="Archivo de muestra") {
                data['comment_img'] = '<span class="icon comment-icon inactive"></span>';
            } else if (data['comment'] == "") {
                data['comment_img'] = '<span class="icon comment-icon js-toggle-comment js-toggle-tooltip" title="' + comment_message + '"></span>';
            } else {
                data['comment_img'] = '<span class="icon comment-icon js-toggle-comment js-toggle-tooltip comment-done-icon" title="' + comment_message + '"></span>';
            }
            if (!file_uploaded || ! data['duration']) {
                data['cut_img'] = '<span class="icon trim-icon inactive"></span>';
            } else if (data['from'] == 0 && data['till'] == data['original_duration']) {
                if (data['negado']==1 || data['negado']==2) {
                   data['cut_img'] = '<span class="icon trim-icon inactive"></span>';
               }else{
                data['cut_img'] = '<span class="icon trim-icon js-toggle-duration js-toggle-tooltip" title="Si no necesita transcribir todo el archivo, use la función de recorte para seleccionar una parte específica de un audio o vídeo para la transcripción."></span>';
            }
        } else {
            data['cut_img'] = '<span class="icon trim-icon js-toggle-duration js-toggle-tooltip trim-done-icon" title="Si no necesita transcribir todo el archivo, use la función de recorte para seleccionar una parte específica de un audio o vídeo para la transcripción."></span>';
        }
        var uploadingClass = '';
        if (!file_uploaded) {
            uploadingClass = ' js-file-is-uploading '
        }
            // add file
            var html = "<div class='js-file "+uploadingClass+"' data-id='::id::'>" + $(".js-file-blueprint").html() + "</div>";
            // set variables
            html =  setData(html, data);
            var $first_uploading_file = file_containertrans.find('.js-file-is-uploading:last');
            if ($first_uploading_file.length) {
                $first_uploading_file.after(html);
            } else {
                file_containertrans.prepend(html);
            }
            $('.js-toggle-tooltip').tooltip();
        }
        function setData(html, data) {
            $.each(data, function(k, content) {
                var tag = "::" + k + "::";
                var r = new RegExp(tag, 'g'); // g - all occurrences
                html = html.replace(r, escapeHtml(content));
            });
            $.each(data, function(k, content) {
                var tag = "!!" + k + "!!";
                var r = new RegExp(tag, 'g'); // g - all occurrences
                html = html.replace(r, content);
            });
            return html;
        }
        function escapeHtml(string) {
            var entityMap = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': '&quot;',
                "'": '&#39;',
                "/": '&#x2F;'
            };
            return String(string).replace(/[&<>"'\/]/g, function (s) {
                return entityMap[s];
            });
        }
        function showDonePopup(type) {
            var total = $('.js-file-containertrans .js-file').length;
            $('.js-upload-done-total').html(total);
            $('.js-upload-done-toggle').hide();
            $('.js-upload-done-toggle.js-upload-done-' + type).show();
            $('#uploadDoneModal').modal('show');
        }
        $('.js-upload-done-urls-btn').on('click', function() {
            $('#uploadDoneModal').modal('hide');
            $('#top-paste-url').popover('show');
            return false;
        });
        $('.js-upload-done-files-btn').on('click', function() {
            $('.js-original-fileupload').click();
        });
    </script>
    <script>
        $(function() {
            $('.js-popup-send').click(function (e) {
                e.preventDefault();
                var url = 'http://localhost/upload-contact-us';
                var data = $(this).closest('form').serialize();
                var email = $(this).closest('form').find('[name=email]').val();
                var message = $(this).closest('form').find('[name=message]').val();
                var error = false;
                if ($.trim(message) === '') {
                    error = true;
                    $('.js-popup-error').text('Message is required');
                }
                if ($.trim(email) === '') {
                    error = true;
                    $('.js-popup-error').text('Email is required');
                }
                if (error) {
                    $('.js-popup-error').slideDown();
                    return;
                } else {
                    $('.js-popup-error').hide();
                }
                $(this).prop('disabled', true).slideUp();
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function(data) {
                        $('.js-popup-success').slideDown();
                    },
                    fail: function () {
                        alert('Error');
                    }
                });
            });
        });
    </script>
    <script>
        function showError(filename) {
            var filename_html = '';
            var parsed_filename = filenameFromUrl(filename);
            if (parsed_filename) {
                filename_html = ' con <strong>"' + escapeHtml(parsed_filename) + '"</strong>';
            } else {
                filename_html = '';
            }
            var html = $('.js-dismissible-alert-template').html();
            html = html.replace('::filename_text::', filename_html);
            $('.js-dismissible-alert').append(html);
        }
        function filenameFromUrl(url) {
            if (!url) {
                return null;
            }
            var filename = url.substring(url.lastIndexOf('http://localhost/')+1);
            if ($.trim(filename).length === 0) {
                return null;
            }
            return filename;
        }
        // paste url (popover)
        $(function () {
            var upload_request;
            var manual_abort;
            var add_button;
            var cancel_upload_button;
            // submit
            $("body").on('click', '.js-add-links', function () {
                manual_abort = false;
                add_button = $('.js-add-links');
                cancel_upload_button = $('.js-cancel-upload');
                add_button.hide();
                cancel_upload_button.show();
                var folder_links = $(this).parent().find('textarea').val();
                function isValidURL(url)
                {
                   var RegExp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w #!:.?+=&%@!\-\/]))?/;
                   if (RegExp.test(url)){
                      return true ;
                  } else {
                      return false ;
                  }
              }
              var link1 = folder_links.replace(/(?:\r\n|\r|\n)/g, ' ');
              var lin = link1.split(" ");
              for (var i = 0; i < lin.length; i+=1) {
                if (isValidURL(lin[i])) {

                    if (lin) {
                        var data = {
                            folder_links: lin[i]
                        };
                        var post = $.post(raiz+'transcription-audio/audio-from-file-link/link.php', data);
                        post.done(function(data) {
                            var data = JSON.parse(data);
                            if(data['msj']== 'bien'){
                                    addFile(data, true); // permanent
                                    closePopup();
                                    recalculatePrice();
                                }else{
                                    closePopup();
                                    $('#modalenlaceotro').html(data['download']);
                                    $('#e').val(data['download']);
                                    $('#EnlaceModal').modal('show');
                                }
                            });
                        console.log(lin[i]);
                        post.fail(function(data) {
                            console.log(lin[i]);
                            closePopup();
                            $('#modalenlaceotro').html(lin[i]);
                            $('#e').val(lin[i]);
                            $('#EnlaceModal').modal('show');
                        });
                    } else {
                        closePopup();
                        $('#modalenlaceotro').html(lin[i]);
                        $('#e').val(lin[i]);
                        $('#EnlaceModal').modal('show');
                    }
                }else{
                    closePopup();
                    $('#modalenlaceotro').html(lin[i]);
                    $('#e').val(lin[i]);
                    $('#EnlaceModal').modal('show');
                }
            }
        });
            $("body").on('click', '.js-enlaceotro-click', function () {
                var folder_links = $('#e').val();
                var h = $('#he').val();
                var m = $('#me').val();
                var s = $('#segundosenla').val();
                function isValidURL(url)
                {
                   var RegExp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w #!:.?+=&%@!\-\/]))?/;
                   if (RegExp.test(url)){
                      return true ;
                  } else {
                      return false ;
                  }
              }
              if (isValidURL(folder_links)) {
                if (folder_links) {
                    var data = {
                        folder_links: folder_links,
                        hora: h,
                        minut: m,
                        seg: s
                    };
                    var postotro = $.post(raiz+'transcription-audio/audio-from-file-link/linkotro.php', data);
                    postotro.done(function(data) {
                        var data = JSON.parse(data);
                        if(data['msj']== 'bien'){
                                        addFile(data, true); // permanent
                                        closePopup();
                                        recalculatePrice();
                                    }else if(data['msj']== 'error'){
                                        closePopup();
                                        showError(folder_links);
                                    }else if(data['msj']== 'errortime'){
                                        closePopup();
                                        showError(folder_links+' No posee tiempo');
                                    }
                                });
                    postotro.fail(function(data) {
                        closePopup();
                        showError(folder_links);
                    });
                } else {
                    closePopup();
                    showError(folder_links);
                }
            }else{
                closePopup();
                showError(folder_links);
            }
        });
            $("body").on('click', '.js-cancel-upload', function () {
                manual_abort = true;
                upload_request.abort();
                closePopup();
                recalculatePrice();
            });
            $(document).on("click", ".js-close-popover", function (e) {
                closePopup();
            });
            function doAjax(file_links, error_count, v) {
                // var percent = Math.round(100 - (file_links.length / (original_link_count + 1) * 100));
                // cancel_upload_button.text(percent + '% - cancel');
                upload_request = $.post('audio-from-file-link/link.php', {_token: "AJu702p54vBRXeSgTJ6Optj8aNPCxOQNWCBM3ZgO", file_link: file_links,v:v});
                upload_request.done(function (audio) {
                    addFile(audio, true);
                });
                upload_request.fail(function () {
                    if (manual_abort) {
                        return;
                    }
                    showError(file_link);
                    if (!error_count) {
                        error_count++;
                    }
                });
                upload_request.always(function () {
                    if (manual_abort) {
                        return;
                    }
                    if (file_links) {
                        // while there are links
                        doAjax(file_links, original_link_count, error_count, v);
                    } else {
                        showDonePopup('links');
                        // all links are done
                        recalculatePrice();
                        closePopup();
                    }
                });
            }
            function closePopup() {
                $(".js-paste-url-button[aria-describedby]").click(); // hide popup
                $('.js-links').val('');
                add_button.show();
                cancel_upload_button.hide();
            }
        });
    </script>