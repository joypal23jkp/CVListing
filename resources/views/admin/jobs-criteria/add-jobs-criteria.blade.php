<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Assign Criteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.jobsCriteria-save')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Job Title </label>
                        <input type="text" name="job_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Criteria Name</label>
                        <input type="text" name="criteria_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Criteria Type</label>
                        <input type="text" name="criteria_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Evaluation Point</label>
                        <input type="text" name="criteria_point" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Criteria Description</label>
                        <textarea name="criteria_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

