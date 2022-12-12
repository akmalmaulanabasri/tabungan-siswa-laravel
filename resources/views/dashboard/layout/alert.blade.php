{{-- Sukses Login --}}
@if(Session::has('success-login'))
<script>
    Swal.fire(
    'Sukses',
    'Anda Berhasil Login',
    'success'
  )
  </script>
@endif

{{-- Sukses Logout --}}
@if(Session('success-logout'))
<script>
    Swal.fire(
    'Good Bye!',
    'Anda Berhasil Logout',
    'success'
  )
  </script>
@endif

{{-- Sudah Login --}}
@if(Session('has-login'))
<script>
    Swal.fire(
    'Warning',
    'Anda Sudah Login',
    'error'
  )
  </script>
@endif