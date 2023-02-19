    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <button href="#" class="btn btn-success btn-sm"  wire:click="$emit('triggerDelete')"><i class="bi bi-arrow-repeat"></i> Reset Data</button>

@push('reset')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', function () {
            Swal.fire({
                title: 'Anda Yakin?',
                text: 'Data Alternatif akan direset!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Ya Reset!'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('deleteAll')
             // success response
                    Swal.fire({
                        title: 'Reset Data Sukses!',
                        text: 'Data Alternatif telah direset!', 
                        icon: 'success',
                        showConfirmButton: true,
                        timer: 2500
                    });
                } else {
                    Swal.fire({
                        title: 'Reset Data dibatalkan!',
                        text: 'Data Alternatif tidak direset!',
                        icon: 'error',
                        timer: 2500
                    });
                }
            });
        });
    })
</script>
@endpush