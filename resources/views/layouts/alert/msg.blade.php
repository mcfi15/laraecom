@if (session('message'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        })
        
        Toast.fire({
            icon: 'success',
            title: '{{ session('message') }}',
        })
    </script>
    {{-- <script>
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: '{{ session('message') }}',
            timer: 3000
        });
    </script> --}}
    {{-- <div class="alert alert-success" role="alert">{{ session('message') }}</div> --}}
@endif

@if (session('success'))
    
    <script>
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: '{{ session('success') }}',
            timer: 3000
        });
    </script>
    {{-- <div class="alert alert-success" role="alert">{{ session('message') }}</div> --}}
@endif


@if (session('error'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        })
        
        Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}',
        })
    </script>
    {{-- <div class="alert alert-danger" role="alert">{{ session('error') }}</div> --}}
@endif