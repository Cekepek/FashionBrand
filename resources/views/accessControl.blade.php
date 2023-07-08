@extends('base')
@section('page-content')
    @csrf
    @method("PUT")
    <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td id="td_user_{{$user->id}}">{{ $user->role }}</td>
        <td><a href="#accessControlEditModal" data-toggle="modal" class="btn btn-warning btn-xs"
        onclick="getAccessControlEdit({{$user->id}})">Ubah Role</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection

<div class="modal fade" id="accessControlEditModal" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
    <div class="modal-content">
      <div class="modal-body" id="accessControlEditContent">

      </div>
    </div>
  </div>
</div>

@section('jQuery')
<script>
function getAccessControlEdit(id){
    $.ajax({
      type:'POST',
      url:'{{route("user.getAccessControlEdit")}}',
      data:{'_token':'<?php echo csrf_token() ?>',
            'id':id
          },
      success: function(data){
        $('#accessControlEditContent').html(data.msg)
      }
    })
  }

  function saveDataUpdateTD(id){
    var eRole = $('#eRole').val();
    $.ajax({
      type:'POST',
      url:'{{route("user.saveDataTD")}}',
      data:{'_token':'<?php echo csrf_token() ?>',
            'id':id,
            'role':eRole
          },
      success: function(data){
        if(data.status == "oke"){
          $('#td_user_'+id).html(eRole);
          $('#accessControlEditModal').modal('hide');
        }
      }
    });
  }
</script>
@endsection
