@include('include.header')

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<link href=" https://jainilsoni1706.github.io/newJASS/v3CSS.css " rel=" stylesheet " >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<style>
  table.dataTable.no-footer
  {
    border-bottom: none!important;
  }
</style>

<div style="margin-top:50px"></div>

<div class="container mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="p-4 border-b border-gray-200 shadow">
                <!-- <table> -->
                <table id="dataTable" class="p-4">

                  <button type="button" style="margin-bottom:10px;float:right;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop123">
                    Add new user
                  </button>

                  {{-- insert data --}}
                  <div class="modal fade" id="staticBackdrop123" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <form action="addNewuser" method="POST"> @csrf
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Add new User</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <label>Name</label>
                              <div style="margin:10px 0px;"></div>
                              <input type="text" class="form-control" name="name"  placeholder="Enter your Name here">
                              <div style="margin:10px 0px;"></div>

                              <label >Email</label>
                              <div style="margin:10px 0px;"></div>
                              <input type="email"  class="form-control" name="email"  placeholder="Enter your Name here">
                              <div style="margin:10px 0px;"></div>

                              <label >Password</label>
                              <div style="margin:10px 0px;"></div>
                              <input type="password"  class="form-control" name="password"  placeholder="Enter your Name here">
                              <div style="margin:10px 0px;"></div>

                              <label >Role</label>
                              <div style="margin:10px 0px;"></div>
                              <select name="userrole" class="form-control" >
                                <option value="Superadmin">Superadmin</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                              </select>

                              <div style="margin:10px 0px;"></div>

                              <label >Permissions</label>
                              <div style="margin:10px 0px;"></div>

                              <input value="1" type="checkbox" name="about" id="about">
                              <label for="about">About</label>
                              <br>
                              <input value="1" type="checkbox" name="dashboard" id="dashboard">
                              <label for="dashboard">Dashboard</label>
                              <br>
                              <input value="1" type="checkbox" name="contact" id="contact">
                              <label for="contact">Contact</label>
                              <br>
                              <input value="1" type="checkbox" name="user" id="user">
                              <label for="user">User</label>
                              <br>
                              <input value="1" type="checkbox" name="setting" id="setting">
                              <label for="setting">Setting</label>
                              <br>
                              <input value="1" type="checkbox" name="support" id="support">
                              <label for="support">Support</label>
                              <br>
                              <input value="1" type="checkbox" name="news" id="news">
                              <label for="news">Activity</label>

                              <div style="margin:10px 0px;"></div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
                  {{-- insert data --}}




                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-8 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                                Name
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                                Email
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                                A.Status
                            </th>
                            <th class="p-8 text-xs text-gray-500">
                              User Role
                          </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Status
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse($userData as $wholeData)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-center text-gray-500" style="font-size:20px;">
                                {{$wholeData->id}}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="text-sm text-gray-900" style="font-size:20px;">
                                    {{$wholeData->changedName}}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="text-sm text-gray-500" style="color: black;font-size:20px;">{{$wholeData->email}}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-center text-gray-500">
                                @if($wholeData->status == 1)
                                <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-500 text-white rounded">Active</span>
                                @else
                                <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded">InActive</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center">
                              <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-800 text-white rounded">{{$wholeData->userrole}}</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$wholeData->id}}">
                                Change
                              </button>
                            </td>
                            <td class="px-6 py-4 text-center">
                              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropx{{$wholeData->id}}">
                                Update
                              </button>
                            </td>
                            <td class="px-6 py-4 text-center">
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$wholeData->id}}">
                                Delete
                              </button>  
                            </td>
                            </td>
                        </tr>

                      {{-- status model --}}
                      <div class="modal fade" id="exampleModal{{$wholeData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="checkStatus/{{$wholeData->id}}" method="POST">@csrf
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Change Status of {{$wholeData->changedName}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sre that you wanna change the <strong> {{$wholeData->changedName}}'s </strong> stauts?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Change</button>
                            </div>
                          </div>
                        </div>
                      </form>
                      </div>
                      {{-- status model --}}





                      {{-- update model --}}
                      <div class="modal fade" id="staticBackdropx{{$wholeData->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <form action="updateData/{{$wholeData->id}}" method="POST"> @csrf
                          <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Update Information of {{$wholeData->changedName}}</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <label for="updateName">Name</label>
                              <div style="margin:10px 0px;"></div>
                              <input type="text" id="updateName" class="form-control" name="name" value="{{$wholeData->changedName}}" placeholder="Enter your Name here">
                              <div style="margin:10px 0px;"></div>

                              <label for="updateEmail">Email</label>
                              <div style="margin:10px 0px;"></div>
                              <input type="email" id="updateEmail" disabled class="form-control" name="email" value="{{$wholeData->email}}" placeholder="Enter your Name here">
                              <div style="margin:10px 0px;"></div>

                              <label for="updateRole">Role</label>
                              <div style="margin:10px 0px;"></div>
                              <select id="updateRole" name="userrole" class="form-control" >
                                <option value="" disabled selected> {{$wholeData->userrole}} </option>
                                <option value="Superadmin">Superadmin</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                              </select>
                              
                              {{-- @foreach($userData2 as $x) --}}
                              <label >Permissions</label>
                              <div style="margin:10px 0px;"></div>

                              <input value="1" type="checkbox" name="dashboard" id="dashboard1" @if($wholeData->dashboard == 1) checked @else @endif >
                              <label for="dashboard1">Dashboard</label>
                              <br>

                              <input value="1" type="checkbox" name="about" id="about1" @if($wholeData->about == 1) checked @else @endif >
                              <label for="about1">About</label>
                              <br>
                              <input value="1" type="checkbox" name="contact" id="contact1" @if($wholeData->contact == 1) checked @else @endif >
                              <label for="contact1">Contact</label>
                              <br>
                              <input value="1" type="checkbox" name="user" id="user1"  @if($wholeData->user == 1) checked @else @endif >
                              <label for="user1">User</label>
                              <br>
                              <input value="1" type="checkbox" name="setting" id="setting1"  @if($wholeData->setting == 1) checked @else @endif >
                              <label for="setting1">Setting</label>
                              <br>
                              <input value="1" type="checkbox" name="support" id="support1"  @if($wholeData->support == 1) checked @else @endif >
                              <label for="support1">Support</label>
                              <br>
                              <input value="1" type="checkbox" name="news" id="news1"  @if($wholeData->news == 1) checked @else @endif >
                              <label for="news1">Activity</label>
                              <div style="margin:10px 0px;"></div>

                              {{-- @endforeach --}}
                              <div style="margin:10px 0px;"></div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                          </div>
                        </div>
                      </form>
                      </div>
                      {{-- update model --}}








                    {{-- delete modal --}}
                    <div class="modal fade" id="exampleModal2{{$wholeData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <form action="deleteData/{{$wholeData->id}}" method="POST"> @csrf
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete user {{$wholeData->changedName}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure that you wanna delete the user <strong> {{$wholeData->changedName}} </strong> as a <strong> {{$wholeData->userrole}} </strong> from the Database Permanently?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    </div>
                    {{-- delete modal --}}







                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();

    });
</script>


@include('include.footer')
