<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header"></div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    You have a new joining message.
                    <br/>
                    It is from:  {!! $mail !!}
                    <br/>
                    The sender's name is:  {!! $name !!}
                    <br/>
                    They are: {!! $q1 !!}
                    <br/>
                     Their phone number is: {!! $phone !!}
                    <br/>
                    The Sector of the request is: {!! $sector !!}
                    <br/>
                  The message is:
                   <br/>
                  {!! $comment !!}
                </div>
            </div>
        </div>
    </div>
</div>
