@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')

<section class="header">
    <h2>ADD STAFF</h2>
</section>
<section class="form-container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <form action="{{url('insertvideo')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid">
            <input
                type="text"
                name="username"
                id="username"
                required
                placeholder="username"
                maxlength="15"
            />
            <input
                type="text"
                name="body"
                id="body"
                required
                placeholder="about the video"
                maxlength="30"
            />
            <input
                type="date"
                name="date"
                id="date"
                required
                placeholder="post date"

            />
            <select name="type" id="">
                <option value="funny">funny</option>
                <option value="football">football</option>
                <option value="shortclip">short clip</option>
            </select>
            <label class="label" for="inputTag">
                Select cover Image <br />
                <i class="fa fa-camera"></i>
                <input  name="file" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>
            <label class="label" for="inputTag">
                Select Video <br />
                <i class="fa fa-video"></i>
                <input  name="video" type="file" required />

                <br />
                <span id="videoName"></span>
            </label>
        </div>

        <div class="submit"><button type="submit">Submit</button></div>
    </form>
</section>

@include('admin.adminfooter')
