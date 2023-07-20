@extends('app')
@section('contend')
    <table class="table table-bordered table-style">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">F.I.SH</th>
            <th scope="col">data</th>
            <th scope="col">tel: oziniki</th>
            <th scope="col">tel: ota-onasiniki</th>
            <th scope="col">Viloyat</th>
            <th scope="col">Manzil</th>
            <th scope="col">Fakultet</th>
            <th scope="col">Kafedra</th>
            <th scope="col">Yonalish</th>
            <th scope="col">Gurux</th>
            <th scope="col">Kurs</th>
            <th scope="col">Talim shakli</th>
            <th scope="col">Oilaviy Axvol</th>
            <th scope="col">Oilaviy Axvol</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($ttjs as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->birth_date }}</td>
                <td>{{ $row->phone_num }}</td>
                <td>{{ $row->parent_num }}</td>
                <td>{{ $row->region }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->facultate }}</td>
                <td>{{ $row->cafedra }}</td>
                <td>{{ $row->deriction }}</td>
                <td>{{ $row->course }}</td>
                <td>{{ $row->group }}</td>
                <td>{{ $row->shape }}</td>
                <td>{{ $row->details }}</td>
                <td><a href="{{ route('ttj.download', ['id' => $row->id]) }}" >ads</a></td>
              </tr>
            @endforeach
            {{-- <div class="pagination">
                {{ $ttjs->links() }}
            </div> --}}
        </tbody>
      </table>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

@endsection