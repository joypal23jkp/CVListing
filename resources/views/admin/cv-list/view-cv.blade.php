<div class="modal fade" id="viewModal{{$managecv->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.view-cv')}}" method="post">

                    @php($i=1)
                    @foreach($managecv as $managecv)
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <label><td>{{$managecv->first_name}}</td></label>



                        {{--                        <input type="text" value="{{$category->cat_name}}" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">--}}
{{--                        <input type="hidden" value="{{$category->id}}" name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">--}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category description</label>
{{--                        <textarea name="cat_desc" class="form-control" id="exampleInputPassword1"  placeholder="Enter category description">{{$category->cat_desc}}</textarea>--}}
                    </div>

                    @endforeach
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

