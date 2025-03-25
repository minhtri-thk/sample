<x-app-layout>
    <form id="sampleForm" method="POST" action="{{ route('sample.index') }}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select name="option1" class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select name="option_multiple" multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
    <div class="w-100 d-inline-flex justify-content-end">
        <button type="button" id="buttonA" class="btn btn-primary mr-2">Deleted</button>
        <button type="button" id="formSubmit" class="btn btn-secondary">Submit</button>
    </div>
</x-app-layout>

@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#buttonA').on('click', function () {
                Swal.fire({
                    title: "Bạn có chắc chắn muốn xóa?",
                    text: "Hành động này không thể hoàn tác!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Xóa ngay",
                    cancelButtonText: "Hủy"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            })

            $('#formSubmit').on('click', function () {
                // handel

                $('#sampleForm').submit();
            })
        });
    </script>
@endpush
