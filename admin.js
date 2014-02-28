$(document).ready(function(){
    $('#admin_menu').tabs()
    
	$('#ChangePermission').click(function(){
		$.ajax({
			url: 'change_permission.php',
			type: 'POST',
			data: {
				'user': 	document.getElementById("user").value,
				'perm': 	document.getElementById("perm").value
			},
			success:function(result)
			{
				alert('Permission Change Successful!');
			},
			error:function(exception){alert('Exeption:'+exception);}
		})
	})

    $('#PostBlog').click(function(){
		$.ajax({
			url: 'blog_post.php',
			type: 'POST',
			data: {
				'content':	document.getElementById("content").value,
				'title':	document.getElementById("title").value
			},
			success: function(result)
			{
				alert('Blog Post Successful');
			},
			error:function(exception){alert('Exception:'+exception);}
		})
    })
})
