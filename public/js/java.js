function comment()
{
var name= $("#tencm").val();
var conten= $("#messagecm").val();
var t = Date();
var result = '<div id="comment2">\
				<div class="cmt_name">'+name+':</div>\
				<div class="cmt_comment">'+conten+'</div>\
				<div class="cmt_time">'+ t +'</div><br/><br/>\
			</div>';
	$("#contens").prepend(result);
}