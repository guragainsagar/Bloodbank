 @extends("frontend.Layouts.main")
@section("main.container")





      <div class="container-fluid bg-danger">
         <div class="row">
               <!-- Hospital Tittle -->
               <div class="bg-dark text-center">
               <h1 class=" text-danger ">
                  Hospitals
               </h1>
               <h6 class="text-light ">
                  Contact Infos of Hospitals.
               </h6>
               </div>
            <div class=" col-12 col-md-12 col-sm-12 mt-3">
               <!-- First row Hospitals -->
               <div class="row mb-2">
                  <!-- First Card -->
                  @foreach ($hospitals as $hospital)
                 <div class="col-md-4 col-sm-12">
                     <div class="card text-center bg-light" style="border: 1px solid;">
                        <div class="card-header bg-danger text-white">
                        {{ucfirst($hospital->name)}}
                        </div>
                        <div class="card-body row">
                           <div class="col-md-4 d-flex align-items-center" style="border-right: 1px solid;">
                              <img src="{{url("frontend/assets/images/hospital.png")}}" class="card-img" alt="Image" style="width: 100%; height: 100%;">
                           </div>
                           <div class="col-md-8">
                              <label>
                              Contact Number :
                              <span>
                              {{ucfirst($hospital->contact_number)}}
                              </span>
                              </label>
                              <br>
                              <label>
                              Location :
                              <span>
                              {{ucfirst($hospital->address)}}
                              </span>
                              </label>
                              <br>
                           </div>
                        </div>
                    </div>
                </div>
                @endforeach
              

     @endsection