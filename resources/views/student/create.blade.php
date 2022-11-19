<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <form method="POST" action="{{ url('add-student') }}" >
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" />
				</div>
			</div>

            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Age</label>
				<div class="col-sm-10">
					<input type="text" name="age" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Status</label>
				<div class="col-sm-10">
					<select name="status" class="form-control">
						<option value="active">Active</option>
						<option value="inactive">InActive</option>
					</select>
				</div>
			</div>
			
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
