@extends('adminlte::page')

@section('title', 'WMS Dashboard')

@section('content_header')
    
@stop

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card border-dark mb-3" style="max-width: 200rem;">
          <div class="card-header"><H4>BARANG MASUK BELUM DILOKASIKAN KE RAK/BIN</H4></div>
              <div class="card-body text-primary">
              <table class="table table-hover">
              <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Date Of Receive</th> 
                <th scope="col">GR No</th>
                <th scope="col">Item</th>  
                <th scope="col">Qty</th>
                <th scope="col">BIN</th>
                <th scope="col">Store Room</th>
                <th scope="col">PO</th>
                <th scope="col">TTS No</th>
                <th scope="col">Key In By</th>
                <th scope="col">Check By</th>
                <th scope="col">Waiting (Day)</th>
              </tr>
              </thead>
              <tbody>
            @foreach ( $GR as $GRc)
                <tr> 
                  <td>{{ $loop->iteration }}</td>
                  <td>{{$GRc -> DateOfReceive}}</td>
                  <td>{{$GRc -> GRNo}}</td>
                  <td>{{$GRc -> Item}}</td>
                  <td>{{$GRc -> Qty}}</td>
                  <td>{{$GRc -> BIN}}</td>
                  <td>{{$GRc -> STOREROOM}}</td>
                  <td>{{$GRc -> PO}}</td>
                  <td>{{$GRc -> TTSNo}}</td>
                  <td>{{$GRc -> KeyInBy}}</td>
                  <td>{{$GRc -> CheckBy}}</td>
                  <td>{{$GRc -> Waiting}} days</td>
                </tr>
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
<div class="carousel-item">
<div class="card border-dark mb-3" style="max-width: 200rem;">
<div class="card-header"><H4>BARANG MASUK DENGAN TTS YANG BELUM PROSES GR</H4></div>
<div class="card-body text-primary">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">TTS No</th>
      <th scope="col">Date</th>
      <th scope="col">PO No</th>
      <th scope="col">PR No</th>
      <th scope="col">Item</th> 
      <th scope="col">Qty</th>    
      <th scope="col">Check By</th> 
      <th scope="col">Key In By</th>
      <th scope="col">Created</th>
      <th scope="col">Waiting (Day)</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
@foreach ( $TTS as $TTSc)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$TTSc -> TTSNo}}</td>
      <td>{{$TTSc -> TTSDate}}</td>
      <td>{{$TTSc -> PONo}}</td>
      <td>{{$TTSc -> PRNo}}</td>
      <td>{{$TTSc -> Item}}</td>
      <td>{{$TTSc -> Qty}}</td>
      <td>{{$TTSc -> CheckedBy}}</td>
      <td>{{$TTSc -> KeyInBy}}</td>      
      <td>{{$TTSc -> Created}}</td>
      <td>{{$TTSc -> Waiting}}</td>
      <td>{{$TTSc -> Status}}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
</div>
<div class="carousel-item">
      <div class="card border-dark mb-3" style="max-width: 200rem;">
<div class="card-header"><H4>REQUISITION BARU</H4></div>
<div class="card-body text-primary">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">RN No</th>
      <th scope="col">Item</th> 
      <th scope="col">UOM</th>
      <th scope="col">Qty</th>            
      <th scope="col">Store Room</th>
      <th scope="col">BIN</th>
      <th scope="col">WO</th>
      <th scope="col">MR</th>
      <th scope="col">Key In By</th>
      <th scope="col">Created</th>
      <th scope="col">Waiting</th>
    </tr>
  </thead>
  <tbody>
@foreach ( $REQ1 as $REQc)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$REQc -> RN}}</td>
      <td>{{$REQc -> Item}}</td>
      <td>{{$REQc -> UOM}}</td>
      <td>{{$REQc -> Qty}}</td> 
      <td>{{$REQc -> Storeroom}}</td>
      <td>{{$REQc -> BIN}}</td>
      <td>{{$REQc -> WO}}</td>
      <td>{{$REQc -> MR}}</td>
      <td>{{$REQc -> KeyinBy}}</td>      
      <td>{{$REQc -> Created}}</td>
      <td>{{$REQc -> Waiting}}</td>      
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card border-dark mb-3" style="max-width: 200rem;">
<div class="card-header"><H4>INVENTORY USAGE UN-COMPLETE</H4></div>
<div class="card-body text-primary">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Item</th> 
      <th scope="col">UOM</th>
      <th scope="col">Qty</th>
      <th scope="col">Store Room</th>
      <th scope="col">BIN</th>
      <th scope="col">WO</th>
      <th scope="col">MR</th>
      <th scope="col">Key In By</th>
      <th scope="col">Created</th>
      <th scope="col">Usage By</th>
      <th scope="col">Usage Date</th>
      <th scope="col">Waiting</th>
    </tr>
  </thead>
  <tbody>
@foreach ( $IUC as $IUCc)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$IUCc -> Item}}</td>
      <td>{{$IUCc -> UOM}}</td>
      <td>{{$IUCc -> Qty}}</td> 
      <td>{{$IUCc -> Storeroom}}</td>
      <td>{{$IUCc -> BIN}}</td>
      <td>{{$IUCc -> WO}}</td>
      <td>{{$IUCc -> MR}}</td>
      <td>{{$IUCc -> Keyin}}</td>      
      <td>{{$IUCc -> Created}}</td>
      <td>{{$IUCc -> ProcessBy}}</td>
      <td>{{$IUCc -> ProcessDate}}</td>
      <td>{{$IUCc -> Waiting}}</td>      
    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>
    </div>
  </div>
  </div>  
    </div>
</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
<script>

$('.carousel').carousel({
  interval: 5000
})
</script>