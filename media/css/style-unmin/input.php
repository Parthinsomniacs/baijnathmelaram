<style type="text/css">
.input, .select select, .textarea {
	background-color: #fff;
	border-color: #dbdbdb;
	border-radius: 4px;
	color: #363636
}
.input::-moz-placeholder, .select select::-moz-placeholder, .textarea::-moz-placeholder {
color:rgba(54,54,54,.3)
}
.input::-webkit-input-placeholder, .select select::-webkit-input-placeholder, .textarea::-webkit-input-placeholder {
color:rgba(54,54,54,.3)
}
.input:-moz-placeholder, .select select:-moz-placeholder, .textarea:-moz-placeholder {
color:rgba(54,54,54,.3)
}
.input:-ms-input-placeholder, .select select:-ms-input-placeholder, .textarea:-ms-input-placeholder {
color:rgba(54,54,54,.3)
}
.input:hover, .is-hovered.input, .is-hovered.textarea, .select select.is-hovered, .select select:hover, .textarea:hover {
	border-color: #b5b5b5
}
.input:active, .input:focus, .is-active.input, .is-active.textarea, .is-focused.input, .is-focused.textarea, .select select.is-active, .select select.is-focused, .select select:active, .select select:focus, .textarea:active, .textarea:focus {
	border-color: #3273dc;
	box-shadow: 0 0 0 .125em rgba(50,115,220,.25)
}
.input[disabled], .select fieldset[disabled] select, .select select[disabled], .textarea[disabled], fieldset[disabled] .input, fieldset[disabled] .select select, fieldset[disabled] .textarea {
	background-color: #f5f5f5;
	border-color: #f5f5f5;
	box-shadow: none;
	color: #7a7a7a
}
.input[disabled]::-moz-placeholder, .select fieldset[disabled] select::-moz-placeholder, .select select[disabled]::-moz-placeholder, .textarea[disabled]::-moz-placeholder, fieldset[disabled] .input::-moz-placeholder, fieldset[disabled] .select select::-moz-placeholder, fieldset[disabled] .textarea::-moz-placeholder {
color:rgba(122,122,122,.3)
}
.input[disabled]::-webkit-input-placeholder, .select fieldset[disabled] select::-webkit-input-placeholder, .select select[disabled]::-webkit-input-placeholder, .textarea[disabled]::-webkit-input-placeholder, fieldset[disabled] .input::-webkit-input-placeholder, fieldset[disabled] .select select::-webkit-input-placeholder, fieldset[disabled] .textarea::-webkit-input-placeholder {
color:rgba(122,122,122,.3)
}
.input[disabled]:-moz-placeholder, .select fieldset[disabled] select:-moz-placeholder, .select select[disabled]:-moz-placeholder, .textarea[disabled]:-moz-placeholder, fieldset[disabled] .input:-moz-placeholder, fieldset[disabled] .select select:-moz-placeholder, fieldset[disabled] .textarea:-moz-placeholder {
color:rgba(122,122,122,.3)
}
.input[disabled]:-ms-input-placeholder, .select fieldset[disabled] select:-ms-input-placeholder, .select select[disabled]:-ms-input-placeholder, .textarea[disabled]:-ms-input-placeholder, fieldset[disabled] .input:-ms-input-placeholder, fieldset[disabled] .select select:-ms-input-placeholder, fieldset[disabled] .textarea:-ms-input-placeholder {
color:rgba(122,122,122,.3)
}
.input, .textarea {
	box-shadow: inset 0 .0625em .125em rgba(10,10,10,.05);
	max-width: 100%;
	width: 100%
}
.input[readonly], .textarea[readonly] {
	box-shadow: none
}
.is-white.input, .is-white.textarea {
	border-color: #fff
}
.is-white.input:active, .is-white.input:focus, .is-white.is-active.input, .is-white.is-active.textarea, .is-white.is-focused.input, .is-white.is-focused.textarea, .is-white.textarea:active, .is-white.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(255,255,255,.25)
}
.is-black.input, .is-black.textarea {
	border-color: #0a0a0a
}
.is-black.input:active, .is-black.input:focus, .is-black.is-active.input, .is-black.is-active.textarea, .is-black.is-focused.input, .is-black.is-focused.textarea, .is-black.textarea:active, .is-black.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(10,10,10,.25)
}
.is-light.input, .is-light.textarea {
	border-color: #f5f5f5
}
.is-light.input:active, .is-light.input:focus, .is-light.is-active.input, .is-light.is-active.textarea, .is-light.is-focused.input, .is-light.is-focused.textarea, .is-light.textarea:active, .is-light.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(245,245,245,.25)
}
.is-dark.input, .is-dark.textarea {
	border-color: #363636
}
.is-dark.input:active, .is-dark.input:focus, .is-dark.is-active.input, .is-dark.is-active.textarea, .is-dark.is-focused.input, .is-dark.is-focused.textarea, .is-dark.textarea:active, .is-dark.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(54,54,54,.25)
}
.is-primary.input, .is-primary.textarea {
	border-color: #00d1b2
}
.is-primary.input:active, .is-primary.input:focus, .is-primary.is-active.input, .is-primary.is-active.textarea, .is-primary.is-focused.input, .is-primary.is-focused.textarea, .is-primary.textarea:active, .is-primary.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(0,209,178,.25)
}
.is-link.input, .is-link.textarea {
	border-color: #3273dc
}
.is-link.input:active, .is-link.input:focus, .is-link.is-active.input, .is-link.is-active.textarea, .is-link.is-focused.input, .is-link.is-focused.textarea, .is-link.textarea:active, .is-link.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(50,115,220,.25)
}
.is-info.input, .is-info.textarea {
	border-color: #3298dc
}
.is-info.input:active, .is-info.input:focus, .is-info.is-active.input, .is-info.is-active.textarea, .is-info.is-focused.input, .is-info.is-focused.textarea, .is-info.textarea:active, .is-info.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(50,152,220,.25)
}
.is-success.input, .is-success.textarea {
	border-color: #48c774
}
.is-success.input:active, .is-success.input:focus, .is-success.is-active.input, .is-success.is-active.textarea, .is-success.is-focused.input, .is-success.is-focused.textarea, .is-success.textarea:active, .is-success.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(72,199,116,.25)
}
.is-warning.input, .is-warning.textarea {
	border-color: #ffdd57
}
.is-warning.input:active, .is-warning.input:focus, .is-warning.is-active.input, .is-warning.is-active.textarea, .is-warning.is-focused.input, .is-warning.is-focused.textarea, .is-warning.textarea:active, .is-warning.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(255,221,87,.25)
}
.is-danger.input, .is-danger.textarea {
	border-color: #f14668
}
.is-danger.input:active, .is-danger.input:focus, .is-danger.is-active.input, .is-danger.is-active.textarea, .is-danger.is-focused.input, .is-danger.is-focused.textarea, .is-danger.textarea:active, .is-danger.textarea:focus {
	box-shadow: 0 0 0 .125em rgba(241,70,104,.25)
}
.is-small.input, .is-small.textarea {
	border-radius: 2px;
font-size:.75rem
}
.is-medium.input, .is-medium.textarea {
	font-size: 1.25rem
}
.is-large.input, .is-large.textarea {
	font-size: 1.5rem
}
.is-fullwidth.input, .is-fullwidth.textarea {
	display: block;
	width: 100%
}
.is-inline.input, .is-inline.textarea {
	display: inline;
	width: auto
}
.input.is-rounded {
	border-radius: 290486px;
	padding-left: calc(calc(.75em - 1px) + .375em);
	padding-right: calc(calc(.75em - 1px) + .375em)
}
.input.is-static {
	background-color: transparent;
	border-color: transparent;
	box-shadow: none;
	padding-left: 0;
	padding-right: 0
}
.textarea {
	display: block;
	max-width: 100%;
	min-width: 100%;
	padding: calc(.75em - 1px);
	resize: vertical
}
.textarea:not([rows]) {
	max-height: 40em;
	min-height: 8em
}
.textarea[rows] {
	height: initial
}
.textarea.has-fixed-size {
	resize: none
}
</style>