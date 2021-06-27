@extends('layout')
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        	<div class="card">

        		<div class="card-header">chat<a href="{{url('home')}}" style="float: right  " >Back</a> </div>
        		<div class="card-body height3">
        			<ul class="chat-list">
                        @foreach($msg as $data)
        				<li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar2.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>{{$data->user_id}}</h5>
        							<p>{{$data->message}}</p>
        						</div>
                                @endforeach
							
        					</div>
        				</li>
        				<li class="out">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar3.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Serena</h5>
        							<p>Next level veard</p>
        						</div>
        					</div>
        				</li>
        				<li class="in">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar2.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5 class="name">Jimmy Willams</h5>
        							<p>Will stumptown scenes coffee viral.</p>
        						</div>
        					</div>
        				</li>
        				<li class="out">
        					<div class="chat-img">
        						<img alt="Avtar" src="https://bootdey.com/img/Content/avatar/avatar3.png">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<h5>Serena</h5>
        							<p>Tofu master best deal</p>
        						</div>
        					</div>
        				</li>
        			</ul>
        		</div>
                <div class="panel-footer">
                    <div class="input-group form-controls">
                        <textarea class="form-control input-sm chat_input" placeholder="Write your message here..."></textarea>
                        <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm btn-chat" type="button"  data-to-user="" >
                                    <i class="glyphicon glyphicon-send"></i>
                                    Send</button>
                            </span>
                    </div>
                </div>

        	</div>
        </div>
    </div>
</div>
