<form method="POST" action="{{route('user.update', $data->id)}}">
    @csrf
    @method("PUT")
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"placeholder="Enter Name" value="{{$data->name}}" disabled>
    <br />
    <label for="role">Role</label>
    <select id="eRole" name="role" class="form-control">
        <option selected>{{$data->role}}</option>
        <option value="staff">staff</option>
        <option value="pembeli">pembeli</option>
    </select>
</div>
<button type="button" class="btn btn-primary"
    onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
</form>
