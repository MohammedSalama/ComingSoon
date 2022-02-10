<!-- Add about -->
<div class="modal fade" id="Addabout" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add About </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('message')
                <form action="{{route('about.store')}}" method="post" autocomplete="off">
                    @method('POST')
                    @csrf
                    <div class="row">

                        <div class="col">
                            <label> Title </label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="5">

                           </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Paragraph</label>
                            <textarea class="form-control" name="paragraph" rows="5">

                           </textarea>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Confirm</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

