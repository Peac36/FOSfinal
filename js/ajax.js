$(document).ready(function(){
	$('#search').on('click',function(){
		var to=$('#to').val();
		var from=$('#from').val();
		var brand=[];
		var model=[];
		var reg_num=[];
		var horse_power=[];
		var color=[];
		$('#brand :selected').each(function(i,selected){
			brand[i]=$(selected).val();

		})
		$('#model :selected').each(function(i,selected){
			model[i]=$(selected).val();

		})
		$('#reg_num :selected').each(function(i,selected){
			reg_num[i]=$(selected).val();

		})
		$('#horse_power :selected').each(function(i,selected){
			horse_power[i]=$(selected).val();

		})
		$('#color :selected').each(function(i,selected){
			color[i]=$(selected).val();

		})
		var type=$('#type   :selected' ).val();
		console.log(brand,model,type,reg_num,horse_power,color);
		
		$.ajax({
			url:'ajax.php',
			method:'POST',
			data:{'to':to,'from':from,'type':type,'brand':brand,'model':model,'reg_num':reg_num,'horse_power':horse_power,'color':color},
			success:function(data){
				data=JSON.parse(data);
				$('#result tr:gt(0)').html('');
				var count=data.length;
				if(count!=0){
					for(var i=0;i<count;i++){
						$('#result').append('<tr><td>'+data[i].brand+'</td><td>'+data[i].model+'</td><td>'+data[i].reg_num+'</td><td>'+data[i].horse_power+'</td><td>'+data[i].color+'</td></tr>').hide().fadeIn()
						
					}
					
				}else{
					$('#result').append('<tr><td colspan=5>We could\'nt found anything </td></tr>')
				}
			}
		})
	})


})