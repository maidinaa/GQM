@extends('layouts.master')

@section('content')

			<!-- MAIN CONTENT -->
			<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							
							<!-- RIGHT COLUMN -->
							<div class="profile">
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active">
											<a href="#tab-bottom-left1" role="tab" data-toggle="tab">{{$goal->kode_goal}}. {{$goal->deskripsi_goal}} ({{$goal->question->count()}} pertanyaan)</a>
										</li>
									</ul>
								</div>

								<div class="panel-body">
								  <table class="table table-striped">
								    <thead>
								      <tr>
									    <th>KODE GOAL</th>
									    <th>KODE PERTANYAAN</th>
										<th>DESKRIPSI</th>
									  </tr>
								    </thead>
									<tbody>
										@foreach($goal->question as $goal_question)
									  <tr>
									  	<td>{{$goal->kode_goal}}</td>
									    <td>{{$goal_question->kode_qst}}</td>
										<td>{{$goal_question->deskripsi_qst}}</td>
									  </tr>
									  @endforeach
									</tbody>
								  </table>
								</div>
							 
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		

@stop