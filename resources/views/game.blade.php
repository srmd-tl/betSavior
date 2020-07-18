@extends('layouts.master')
@section('content')
<div class="container-fluid" >

<!-- Most popular bets -->
<div class="container" style="margin-top:70px;">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th colspan="7" style="text-align:center;font-size:11px;"><span style="font-weight:400;color:#6d6d6d;">2019-20 Italian Series A</span></th>
					</tr>
				</thead>
				<tbody>
					<tr >
						<td style="width:15%; border:0px !important;">
							<img src="img/team_1.png" style="float:left;">
						</td>
						<td style="width:15%; border:0px !important;padding-top:30px;">
							<span style="padding-top:30px;font-size: 1.25rem;    margin-bottom: .5rem;    font-weight: 500;    line-height: 1.2;">AC Milan</span><img src="img/team_1.png" style="width:40px;">
						</td>
						<td style="text-align:center; border:0px !important;padding-top:30px;">
							<h2>4 <img src="img/left.jpg"></h2>
						</td>
						<td style="text-align:center;border:0px !important;padding-top:30px; font-weight:300;">
							FT
						</td>
						<td style="text-align:center;border:0px !important;padding-top:30px;">
							<h2>2</h2>
						</td>
						<td style="width:15%;border:0px !important;padding-top:30px;">
							<img src="img/team_2.png" style="width:40px;float:left;"> <h5>Juventus</h5>
						</td>
						<td style="width:15%;border:0px !important;">
							<img src="img/team_2.png" style="float:right;">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-12" style="margin-top:30px;">
			<table class="table table-bordered">
				<thead>
					<tr>
					<th><span style="font-weight:400;color:#6d6d6d;">< LALIGA</span></th>
						<th colspan="9">
							<select class="form-control" id="sports" style="font-size: 0.7rem;width: 40%;float:left;">
								<option>Choose a different game</option>
								@forelse($sports as $sport)
								<option value="{{ $sport->sport_key}}" >{{ $sport->sport_nice}}</option>
								@empty
								@endforelse
								
							</select>					
							<button type="button" class="btn btn-primary" style="float:right;">FILTER BY: ALL STATES <i style="color: #ffba00;" class="fas fa-angle-double-right"></i></button>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr STYLE="BACKGROUND:#F8F8F8;">
						<td style="width:15%;border-right:0px solid #ffffff;"><H6>Compare odds</H6><div class="checkbox">
							<label style="font-size:14px; font-weight:bold;"><input type="checkbox" style="margin-right:10px;font-size:12px;"value="">Best Odds</label></div>
						</td>
						<td style="border-left:0px solid #ffffff;">&nbsp;</td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
						<td><img src="img/featured1.jpg" width="80" ></td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th style="border-right:0px solid #ffffff;"><span style="font-weight:400;color:#6d6d6d;">Winner</span></th>
						<th colspan="9" style="border-left:0px solid #ffffff;"><span style="font-size:14px;font-weight:300; ">Open Line</span></th>
					</tr>
				</thead>
				<tbody>

					<tr STYLE="BACKGROUND:#F8F8F8;">

						<td style="width:15%;background:#ffffff;border-right:0px solid #ffffff;"><H6>{{$match["teams"][0]}}</H6></td>
						<td style="background:#ffffff;border-left:0px solid #ffffff;"><a style="color:#212529;" href="#">-334</a> <img src="img/chart.png" width="20" style="margin-left:10px;"> </td>
						@forelse($match["sites"] as $league)
						<td style="text-align:center;font-weight:bold;color:#004ad6;"><a style="color:#004ad6;" href="#">{{$league["odds"]["h2h"][0]}}</a></td>
						@empty
						@endforelse
						
					</tr>

					<tr STYLE="BACKGROUND:#F8F8F8;">

						<td style="width:15%;background:#ffffff;border-right:0px solid #ffffff;"><H6>{{$match["teams"][1]}}</H6></td>
						<td style="background:#ffffff;border-left:0px solid #ffffff;"><a style="color:#212529;" href="#">-334</a> <img src="img/chart.png" width="20" style="margin-left:10px;"> </td>
						@forelse($match["sites"] as $league)
						<td style="text-align:center;font-weight:bold;color:#004ad6;"><a style="color:#004ad6;" href="#">{{$league["odds"]["h2h"][1]}}</a></td>
						@empty
						@endforelse
						
					</tr>
				
				
				</tbody>
			</table>
		</div>
	</div>
	<!-- Join Us -->
	<h2 style="font-size:60px; width:60%; text-align:center;margin-left:auto;margin-right:auto;margin-top:70px;color:#ffba00;">JOIN<span style="color:#004ad6; " >US</span></h2>
		<!-- end Join Us -->
</div>
</div>
@endsection
@push('js')
<script type="text/javascript">
	$(function(){
		$("#sports").change(function(){
			alert('here')
			var url = "{{route('game.index',':slug')}}"
			url = url.replace(':slug','sport='+$(this).val())
			 window.location = url; 
			
		})
	})
</script>
@endpush
