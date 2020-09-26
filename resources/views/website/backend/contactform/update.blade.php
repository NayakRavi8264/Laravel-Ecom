@extends('website.backend.layout.main')
@section('content')

     <div class="x_title">
                    <h2> Update ContactForm </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <!-- <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li> -->
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 

   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action=
   "{{route('contactform.update',$contactForm->id) }}" method="POST">
   @method('PUT')
        @csrf

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message_form">Message Form <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message_form" name='message_form' required="required" class="form-control col-md-7 col-xs-12">{{$contactForm->message_form}}
                          </textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name='name' required="required" value="{{$contactForm->name}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name='email' value="{{$contactForm->email}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>
                        
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="subject" name='subject' value="{{$contactForm->subject}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                          </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>


                    
@endsection

