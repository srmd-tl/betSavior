@extends('admin.layouts.master')
@section('content')
  <div class="row">
               <div class="col">
                  <div class="card shadow">
                     <div class="card-header border-0">
                        <div class="row align-items-center">
                           <div class="col-8">
                              <h3 class="mb-0">Users</h3>
                           </div>
                           <div class="col-4 text-right">
                              <button  id="addSocialMedia" class="btn btn-sm btn-primary">Add Social Media</button>

                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                     </div>
                     <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col">Name</th>
                                 <th scope="col">Logo</th>
                                 <th scope="col">Creation Date</th>
                                 <th scope="col"></th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($socialMedias as $socialMedia)
                              <tr>
                                 <td>{{$socialMedia->name}}</td>
                                 <td>
                                    <img src="{{$socialMedia->logo}}">
                                 </td>
                                 <td>{{$socialMedia->created_at}}</td>
                                 <td class="text-right">
                                    <div class="dropdown">
                                       <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="fas fa-ellipsis-v"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                          <button class="dropdown-item editSocialMedia" data-id="{{$socialMedia->id}}"  data-logo="{{$socialMedia->logo}}" data-name="{{$socialMedia->name}}">Edit</button>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                     <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
      <!-- Create New Social Media Modal -->
      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
         <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
               <div class="modal-body p-0">
                  <div class="card bg-secondary border-0 mb-0">
                     <div class="card-header bg-transparent pb-5">
                         
                     <div class="card-body px-lg-5 py-lg-5">
                       <div class="text-muted text-center mt-2 mb-3"><small>Add new social media icon</small></div>
                        <form role="form" method="POST" action="{{route('socialMedia.store')}}">
                           @csrf
                           <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Name" type="string" name="name">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input class="form-control"  type="string" name="logo" placeholder='<a href="#"><i class="fab fa-tumbler" aria-hidden="true"></i></a>' tooltip='<a href="#"><i class="fab fa-tumbler" aria-hidden="true"></i></a>'>
                              </div>
                           </div>
                        
                           <div class="text-center">
                              <button type="submit" class="btn btn-primary my-4">Create</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

      <!-- End Create New Social Media Modal -->


           <!-- Edit  Social Media Modal -->
      <div class="modal fade" id="edit-modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
         <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
               <div class="modal-body p-0">
                  <div class="card bg-secondary border-0 mb-0">
                     <div class="card-header bg-transparent pb-5">
                         
                     <div class="card-body px-lg-5 py-lg-5">
                       <div class="text-muted text-center mt-2 mb-3"><small>Edit  social media icon</small></div>
                        <form role="form" method="POST"  id="editForm">
                           @csrf
                           @method('PUT')
                           <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Name" type="string" name="name" id="editName">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input class="form-control" id="editLogo" type="string" name="logo" placeholder='<a href="#"><i class="fab fa-tumbler" aria-hidden="true"></i></a>' tooltip='<a href="#"><i class="fab fa-tumbler" aria-hidden="true"></i></a>'>
                              </div>
                           </div>
                        
                           <div class="text-center">
                              <button type="submit" class="btn btn-primary my-4">Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!-- End Edit  Social Media Modal -->
@endsection


@push('page-level-js')

      <script type="text/javascript">
         $(function(){
            /*To Open Create MOdal*/
            $("#addSocialMedia").click(function(){
                  $("#modal-form").modal();
            })
            /*To Open Edit MOdal*/
            $(".editSocialMedia").click(function(){
                  /*Get Values*/
                  var id=$(this).data("id")
                  var name=$(this).data("name")
                  var logo=$(this).data("logo")

                  /*Set values*/
                  $("#editLogo").val(logo)
                  $("#editName").val(name)
                  var url = "{{route('socialMedia.update',':id')}}"
                  url = url.replace(":id",id)
                  $("#editForm").attr('action',url)
                  /*Open Modal*/
                  $("#edit-modal-form").modal()
            })


         })
      </script>
@endpush



