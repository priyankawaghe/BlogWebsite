$('.selectSearch').select2();
$('input[name="pan-card"]').mask('SSSS00000SS');
$('input[name="zip-code"]').mask('00000-0000');
$('input[name="dob"]').mask('00/00/0000');
$('input[name="mobile-number"]').mask('(000) 000-0000');
$('input[name="email"]').mask("A", {
	translation: {
		"A": { pattern: /[\w@\-.+]/, recursive: true }
	}
});