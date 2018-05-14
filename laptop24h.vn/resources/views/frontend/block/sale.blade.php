 <div class="col-md-4 right-grid">
 	<div class="tin-head">
		<h3>
			<span>Tin tức</span>
		</h3>
		<div class="arrow-right pull-left"></div>
	</div>
	<div class="right-grid-top">
		<table>
			
			<tbody>
				@foreach($tintuc as $item)
				@if($item->published == 1)
				
				<tr style="border-bottom: 1px dashed #e2e3e4;">
					
					<td style="padding: 10px 10px 20px 0"><a href="{{ URL('chitiettintuc',[$item->id]) }}"><img src="{{ asset('resources/uploads/tintuc/'.$item->image) }}" alt="{{ $item->name }}" style="width: 100px "></a></td>
					<td> <a style="color:#808080; font-size: 14px" href="{{ URL('chitiettintuc',[$item->id]) }}">{{ $item->name }}</a></td>
					
				</tr>
				
				@else
				@endif
				@endforeach
			</tbody>
		</table>
	
 	</div>
	</div>
	
<div class="clearfix"></div>