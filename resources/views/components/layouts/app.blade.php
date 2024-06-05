<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles

</head>

<body>


    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                  Livewire.dispatch('deleteconfirmed');
                }
            });

        })


        window.addEventListener('cardeleted', event => {
            Swal.fire('Deleted!' , 'Your car has been deleetd' , 'success');

        });
    </script>



    <!-- <script>
        $(document).ready(function() {
            toastr.options = [
                "progressbar",
                true,
                "positionClass",
                "toast-top-right"
            ];
            window.addEventListener('success', event => {
                const message = event.detail[0].message;
                toastr.success(message);
            });
            window.addEventListener('error', event => {

                const message = event.detail[0].message;
                toastr.error(message);
            });
        });

    </script> -->
    <!-- <script src="{{ asset('js/script.js') }}"></script> -->

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right"
        };

        Livewire.hook('element.updated', (el, component) => {
            // window.addEventListener('success', function (event) {
            //     toastr.success(event.detail[0].message);
            // });

            // window.addEventListener('error', function (event) {
            //     toastr.error(event.detail[0].message);
            // });
        });

        // Attach the event listeners when the page first loads
        window.addEventListener('success', function (event) {
            toastr.success(event.detail[0].message);
        });

        window.addEventListener('error', function (event) {
            toastr.error(event.detail[0].message);
        });
    });
</script>



    @livewireScripts
</body>

</html>
