<div>
    @include('livewire.admin.brand.modal-form')

    

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Brands List
                        <a href="#" class="btn btn-primary btn-sm float-end text-white" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add Brands</a>
                    </h4>
                </div>
                @include('layouts.alert.msg')
                <div class="card-body">
                    <table class="table table-borderd table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        @if ($brand->category)
                                            {{ $brand->category->name }}</td>
                                        @else
                                            No Category Found
                                        @endif
                                    </td>
                                    <td>{{ $brand->status == '1' ? 'Hidden':'Visible' }}</td>
                                    <td>
                                        <a href="#" wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#editBrandModal" class="btn btn-success">Edit</a>
                                        <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#deleteBrandModal" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Brands Found</td>
                                    </tr>
                                @endforelse 
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#addBrandModal').modal('hide');
        $('#editBrandModal').modal('hide');
        $('#deleteBrandModal').modal('hide');
    });
</script>
    
@endpush