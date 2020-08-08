@extends('admin.layouts.master')
@section('content')
  <div class="row">
               <div class="col">
                  <div class="card shadow">
                     <div class="card-header border-0">
                        <div class="row align-items-center">
                           <div class="col-8">
                              <h3 class="mb-0">Blogs</h3>
                           </div>
                           <div class="col-4 text-right">
                              <button  id="addBlog" class="btn btn-sm btn-primary">Add Blog</button>

                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                     </div>
                     <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col">Title</th>
                                 <th scope="col">Creation Date</th>
                                 <th scope="col"></th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($blogs as $blog)
                              <tr>
                                 <td>{{$blog->title}}</td>
                                 <td>{{$blog->created_at}}</td>
                                 <td class="text-right">
                                    <div class="dropdown">
                                       <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <i class="fas fa-ellipsis-v"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                          <button class="dropdown-item editBlog" data-id="{{$blog->id}}"  data-description="{{$blog->description}}" data-title="{{$blog->title}}">Edit</button>
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
         <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-body p-0">
                  <div class="card bg-secondary border-0 mb-0">
                     <div class="card-header bg-transparent pb-5">
                         
                     <div class="card-body px-lg-5 py-lg-5">
                       <div class="text-muted text-center mt-2 mb-3"><small>Add new blog</small></div>
                        <form role="form" method="POST" action="{{route('blog.store')}}">
                              
                           @csrf
                           <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                 </div>
                                 <input class="form-control" placeholder="Blog Title" type="string" name="title">
                              </div>
                           </div>
                           <div class="form-group">
                               
                            <textarea id="editor" name="description"></textarea>


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
         <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
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
                                 <input class="form-control" placeholder="Name" type="string" name="title" id="editTitle">
                              </div>
                           </div>
                           <div class="form-group">
                               
                            <textarea id="editEditor" name="description"></textarea>


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
<script src="https://cdn.tiny.cloud/1/mtf0px5e56m22g9xj9ujt7vc9boyjiwtzjuz8q8m45d5j99b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
tinymce.init({
  selector: '#editor,#editEditor',
  content_css: '//www.tiny.cloud/css/codepen.min.css',
  plugins: 'image code',
  toolbar: 'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat'+'undo redo formatselect | link image | code | bullets ' ,
  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  }
});



  </script>

      <script type="text/javascript">
         $(function(){
            /*To Open Create MOdal*/
            $("#addBlog").click(function(){
                  $("#modal-form").modal();
            })
            /*To Open Edit MOdal*/
            $(".editBlog").click(function(){
                  /*Get Values*/
                  var id=$(this).data("id")
                  var title=$(this).data("title")
                  var description=$(this).data("description")

                  /*Set values*/
                  $("#editEditor").text(description)
                  $("#editTitle").val(title)
                  var url = "{{route('blog.update',':id')}}"
                  url = url.replace(":id",id)
                  $("#editForm").attr('action',url)
                  /*Open Modal*/
                  $("#edit-modal-form").modal()
            })


         })
      </script>


@endpush



