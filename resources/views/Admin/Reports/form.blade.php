<div class="modal fade bd-example-modal-lg" id="formModel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formSubmit">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="titleOfModel"><i class="ti-marker-alt m-r-10"></i> Add new </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">الاسم</label>
                                <input type="text" id="name" name="name"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">الملف</label>
                                <input type="file" id="file" name="file"  class="form-control"   >
                            </div>
                        </div>

                    @if($type==1)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">القسم</label>
                                <select  id="cat_id" name="cat_id"  class="form-control"   >
                                    @foreach($Cat as $row)
                                        <option value="{{$row->id}}">{{$row->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
                <div id="err"></div>
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="type" id="type" value="{{$type}}">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="save" class="btn btn-success"><i class="ti-save"></i> حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
