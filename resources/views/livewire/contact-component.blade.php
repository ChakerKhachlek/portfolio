<div class="col-lg-9">
    <div class="row contact_form" novalidate="novalidate">
        <div class="col-md-6">
            <div class="form-group">
                <input  wire:model="name" type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                @error('name') <span class="error" style="color : #766dff">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <input wire:model="email" type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                @error('email') <span class="error" style="color : #766dff">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <input wire:model="subject" type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                @error('subject') <span class="error" style="color : #766dff">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea wire:model="comment" class="form-control" name="comment" id="comment" rows="1" placeholder="Enter Message"></textarea>
                @error('comment') <span class=" error" style="color : #766dff">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-md-12 text-right">

            <button type="submit" value="submit" class="btn submit_btn" wire:click="sendEmail">Send Message</button>
        </div>
    </div>

    @if (!empty($success))
        <div class="d-flex justify-content-center ">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ $success }}
            </div>
        </div>

    @endif
    <div class="d-flex justify-content-center ">


        <div class="pl-4" wire:loading wire:target="sendEmail" style="color:#766dff">
            sending..
        </div>


    </div>

</div>
