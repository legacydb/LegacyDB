@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/guide" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Guide</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

	<!-- Current Tasks -->
    @if (count($guides) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Guides
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Guide</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($guides as $guide)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $guide->title }}</div>
                                </td>
								<td>
									<form action="/guide/{{ $guide->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button>Delete Task</button>
									</form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
	
	
    <!-- TODO: Current Tasks -->
@endsection