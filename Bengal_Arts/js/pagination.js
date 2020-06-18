function pagination($data){
	if($data['total_records']){
		console.log($data['total_records']);
		$total_records=$data['total_records'];
	}else{
		console.log('total records not configured..');
		return false;
	}
	if($data['records_per_page']){
		console.log($data['records_per_page']);
		$records_per_page=$data['records_per_page'];
	}else{
		console.log('records per page not configured..');
		return false;
	}
	
	$total_pages = total_pages($data);
	$data['current_page'] = current_page($data);
	$current_page = $data['current_page'];
	$data['start_record'] = start_record($data);
	
	position($data);
	pagination_controls($current_page,$total_pages);
	pagination_data($data);
	$('.link_active').click(function(){
		$current_page = $(this).html();
		$data['current_page'] = $current_page;
		pagination($data);
	});
	$('.first').click(function(){
		$current_page = 1;
		$data['current_page'] = $current_page;
		pagination($data);
	});
	
	$('.last').click(function(){
		$current_page = 1;
		$data['current_page'] = $total_pages;
		pagination($data);
	});
	$('.next').click(function(){
		$current_page = parseInt($current_page)+1;
		$data['current_page'] = $current_page;
		pagination($data);
	});
	$('.previous').click(function(){
		$current_page = parseInt($current_page)-1;
		$data['current_page'] = $current_page;
		pagination($data);
	});
	//console.log('total_pages :' +$total_pages);
	//console.log($data['current_page']);
	
}
function pagination_controls($current_pg,$total_pages){
	$previous = $current_pg - 1;
	$next =$current_pg + 1;
	$page = "<nav><ul class='pagination'>";
	$page = $page+"<li><a href='javascript:void(0)'aria-label = 'previous' class = 'first'><span aria-hidden='true'><<</a></li>";
	if($current_pg >= 2){
		$page = $page+"<li><a href= 'javascript:void(0)' aria-label= 'previous' class= 'previous'><span aria-hidden='true'><</a><li>";
	}
	$start_page = 1;
	$pg_number = 1;
	if($current_pg <= $total_pages && $current_pg > $start_page + 2){
		$start_page = $current_pg - 2;
	}
	if($current_pg <= $total_pages && $current_pg < $total_pages - 2){
		$end_page = parseInt($current_pg) + 2;
	}else{
		$end_page= $total_pages;
	}
	$page = $page+"&nbsp;&nbsp;";
	for($start_page;$start_page <= $end_page;$start_page++){
		if($current_pg == $start_page){
			$page = $page+"<li class='active link_disabled'><a href='javascript:void(0)'>"+$start_page+"<span class='sr-only'>(current)</span></a></li>";
		}else{
			$page = $page+"<li><a href='javascript:void(0)' class='link_active'>"+$start_page+"</a></li>";
		}
	}
		$page = $page+"&nbsp;&nbsp;";
		if($current_pg < $total_pages){
			$page = $page+"<li><a href= 'javascript:void(0)' aria-label='previous' class='next'>><span aria-hidden='true'></a></li>";
		}
		$page = $page+"&nbsp;&nbsp;";
		$page = $page+"<li><a href='javascript:void(0)' aria-label='previous' class='last'><span aria-hidden='true'>>></a></li>";
		$page = $page+"</ul></nav>";
		if($current_pg == $total_pages){
			$page = $page;
		}
		if($data['pagination']){
			$pagination = $data['pagination'];
		}else{
			console.log('pagination elements not configured..');
		}
		$($pagination).html($page);
	
	
}

function total_pages($data){
	if($data['total_records']){
		$total_records=$data['total_records'];
	}
	if($data['records_per_page']){
		$records_per_page=$data['records_per_page'];
	}
	$total_pages = Math.ceil($total_records / $records_per_page);
	return $total_pages;
	
}
function current_page($data){
	if($data['current_page']){
		$current_page = $data['current_page'];		
	}
	else{
		$current_page = '';
	}
	$total_pages = total_pages($data);
	if($current_page == '' | $current_page < 1 | $current_page > $total_pages){
		$current_page = 1;
		return $current_page;
	}else{
		return $current_page;
	}
	
}
function position($data){
	if($data['total_records']){
		console.log($data['total_records']);
		$total_records=$data['total_records'];
	}else{
		console.log('total records not configured..');
		return false;
	}
	
	if($data['records_per_page']){
		console.log($data['records_per_page']);
		$records_per_page=$data['records_per_page'];
	}else{
		console.log('records per page not configured..');
		return false;
	}
	
	$total_pages = total_pages($data);
	$current_page = current_page($data);
	if($data['pagination_position']){
		$pagination_position = $data['pagination_position'];
	}else{
		console.log('pagination position not configured..');
	}
	//$($pagination_position).html("<br/><span class = 'label label-success'>"+$current_page+"/"+$total_pages+"</span><br/>");
	
}

function start_record($data){
	$current_page = current_page($data);
	$total_pages = total_pages($data);
	
	if($current_page == '' | $current_page < 1 | $current_page > $total_pages){
		$current_page = 1;
		$start_record = 0;
		return $start_record;
	}else{
		$start_record = ($current_page * $records_per_page) - $records_per_page;
		return $start_record;
	}
}

function pagination_data($data){
	if($data['records_per_page']){
		$records_per_page = $data['records_per_page'];
	}
	if($data['start_record']){
		$start = $data['start_record'];
	}else{
		$start = 0;
	}
	if($data['pagination_data']){
		$pagination_data = $data['pagination_data'];
	}else{
		console.log('pagination data elements not configured..');
	}
	$.ajax({
		url: "people_det.php",
		type: "GET",
		data: {"records_per_page": $records_per_page,"start": $start},
		dataType: 'json',
		beforeSend: function(){
			$($pagination_data).append("<span class='load'>loading..</span>");
		},
		complete : function(){
			$('.load').remove();
		},
		success:function(response){
			console.log(response);
			$($pagination_data).html('');
			$(response).each(function(index){
				//console.log(response[index].name);
				$($pagination_data).append("<div class='row'><div class='col-md-3'><img src='Bengal_Art/People_image/"+response[index].picture+"' width='390px' height='201px'/></div><div class='col-md-9 apply_text'> <h3 style='margin-top: 0px;'><span>"+response[index].name+"</h3></span><p class='align_justiphy'>"+response[index].about+"</p></div></div>");
			});
		}
		
		
	});
}