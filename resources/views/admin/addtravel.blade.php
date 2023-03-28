@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')


<section class="header">
    <h2>ADD TRAVEL</h2>
</section>
<section class="form-container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <form action="{{url('inserttravel')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="grid">
            <input
                type="text"
                name="username"
                id="username"
                required
                placeholder="username"
                maxlength="10"
            />

            <input
                type="text"
                name="title"
                id="title"
                required
                placeholder="Title"
            />
            <input
                type="text"
                name="body"
                id="body"
                required
                placeholder="body"
            />
            <input
                type="datetime-local"
                name="date"
                id="body"
                required

            />
            <select name="type" id="lifestyle">
                <option value="">please select</option>
                <option value="nigeria">nigeria</option>
                <option value="world">World</option>
            </select>

            <label class="label" for="inputTag">
                Select Profile Image <br/>
                <i class="fa fa-camera"></i>
                <input  name="file" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>
        </div>

        <div class="submit"><button type="submit">Submit</button></div>
    </form>
</section>


@include('admin.adminfooter')
