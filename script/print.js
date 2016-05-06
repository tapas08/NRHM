function printForm(id){
	var w = window.open('', '', 'width=1000,height=600,resizeable,scrollbars');

	w.document.write('<html><head><title>Form 1</title>');
	w.document.write('<link rel="stylesheet" href="css/main.css">');
	w.document.write('<link rel="stylesheet" href="css/bootstrap.css">');
	w.document.write('<style type="text/css">.style1{width: 100%;}</style>');

	w.document.write('</head><body >');
	w.document.write($('#'+id).html());
	w.document.write('</body></html>');
	w.document.close();
	javascript:w.print();
	w.close();
	return false;
}