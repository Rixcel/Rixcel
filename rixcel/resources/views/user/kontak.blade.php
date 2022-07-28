@extends('user.app')
@section('content')

<div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Contact Us</h5>
         </div>
        <div class="card-body">
           @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif

          <form method="post" action="{{ route('user.kontak') }}">
             {{csrf_field()}}
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label> Name </label>
                   <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Name" name="nama">
                   @error('nama')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
               <div class="form-group">
                   <label> Email </label>
                   <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                   @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             <div class="col-md-12">
                <div class="form-group">
                   <label> Phone Number </label>
                   <input type="text" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Phone Number" name="no_telp">
                   @error('no_telp')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <label> Subject </label>
                   <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                   @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
              <div class="col-md-12">
                <div class="form-group">
                   <label> Message </label>
                   <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                   @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                 </div>
               </div>
             </div>
             <div class="row">
              <div class="update ml-auto mr-auto">
                 <button type="submit" class="btn btn-primary btn-round">Send</button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
</div>
        </form>
        </div>
        <div class="col-md-5 ml-auto">
        <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Bogor</span>
            <p class="mb-0">Suryakencana St C-D No.260, RT.01/RW.05, Gudang, Bogor Tengah, Bogor City, West Java 16141</p>
        </div>
        <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Bandung</span>
            <p class="mb-0">Jl. A.H. Nasution No.133 B, Cigending, Kec. Ujung Berung, Bandung City, West Java 40611</p>
        </div>
        <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Sukabumi</span>
            <p class="mb-0">Gg. Kaswari No.1, Selabatu, Kec. Cikole, Sukabumi City, West Java 43114</p>
        </div>

        </div>
    </div>
    </div>
</div>
@endsection
