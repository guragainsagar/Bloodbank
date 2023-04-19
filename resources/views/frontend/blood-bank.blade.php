@extends("frontend.Layouts.main")
@section("main.container")

      <!-- Main -->
      <div class="container-fluid bg-danger">
         <div class="row">
               <!-- Hospital Tittle -->
               <div class="bg-dark text-center">
               <h1 class=" text-danger ">
                  Blood Banks
               </h1>
               <h6 class="text-light ">
                  Contact Infos of Blood Banks.
               </h6>
               </div>
              
               @foreach ($bloodbanks as $bloodbank)
                 <div class="col-md-4 col-sm-12">
                     <div class="card text-center bg-light" style="border: 1px solid;">
                        <div class="card-header bg-danger text-white">
                        {{ucfirst($bloodbank->name)}}
                        </div>
                        <div class="card-body row">
                           <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                              <img src="{{url("frontend/assets/images/bloodbank.png")}}"class="card-img" alt="Image" style="width: 100%; height: 100%;">
                           </div>
                           <div class="col-md-8">
                              <label>
                              Contact Number :
                              <span>
                              {{($bloodbank->contact_number)}}
                              </span>
                              </label>
                              <br>
                              <label>
                              Registration Number : :
                              <span>
                              {{($bloodbank->registration_number)}}
                              </span>
                              </label>
                              <br>
                              <label>
                              Location :
                              <span>
                              {{ucfirst($bloodbank->address)}}
                              </span>
                              </label>
                              <br>
                           </div>
                        </div>
                    </div>
                </div>
                @endforeach
              
              
          
                  
           
        @endsection  
        </php>              
    

