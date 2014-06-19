$(document).on('click','#pagenavi a',function()
{
		var url=$(this).attr('href');
		$.ajax({
				url:url,
				type:'POST',
				success:function(data){
						var result=$(data).find('#contentleft');
						$('#content').empty();
						$('#content').append(result);
				}
		}
		)
		return false;
})
