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
                                <input type="text" id="title" name="title"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">صوره</label>
                                <input type="file" id="image" name="image"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">رقم هاتف الجمعيه</label>
                                <input type="text" id="our_phone" name="our_phone"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">بريدنا الالكتروني</label>
                                <input type="text" id="our_email" name="our_email"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">عن الجمعيه</label>
                                <textarea type="text" id="about_us" name="about_us"  class="form-control" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">رؤيتنا</label>
                                <textarea type="text" id="our_vision" name="our_vision"  class="form-control" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">رسالتنا</label>
                                <textarea type="text" id="our_massage" name="our_massage"  class="form-control" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">اهدافنا</label>
                                <textarea type="text" id="our_goals" name="our_goals"  class="form-control" ></textarea>
                            </div>
                        </div>


                </div>
                <div id="err"></div>
                <input type="hidden" name="id" id="id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="save" class="btn btn-success"><i class="ti-save"></i> حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
