(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

})();

$(document).ready(function() {
	$('#avatar').click(function(){
		console.log("đã click");
		$('#poster').click();
	});
});
function changeImg(input){
	//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
	if(input.files && input.files[0]){
		var reader = new FileReader();
		//Sự kiện file đã được load vào website
		reader.onload = function(e){
			//Thay đổi đường dẫn ảnh
			$('#avatar').attr('src',e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}

