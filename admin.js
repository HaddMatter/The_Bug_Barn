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
				'title'  : 	document.getElementById("title").value,
				'content': 	document.getElementById("content").value
			},
			success:function(result)
			{
				alert('Blog Post Successful!');
			},
			error:function(exception){alert('Exeption:'+exception);}
		})
	})
	
	$('#CreateItem').click(function(){
		$.ajax({
			url: 'add_item.php',
			type: 'POST',
			data: {
				'item_name'  :document.getElementById("item_name").value,
				'description':document.getElementById("description").value,
				'cost'		 :document.getElementById("cost").value,
				'image'		 :document.getElementById("image").value
			},
			success:function(result)
			{
				alert('Shop Item Added');
			},
			error: function(exception){alert('Exception:'+exception);}
		})
	})
})