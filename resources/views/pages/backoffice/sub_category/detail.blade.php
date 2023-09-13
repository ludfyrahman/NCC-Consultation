@extends('layouts.app')

@section('content-app')
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Detail Isian
                </div>
                <table>
                    <tr>
                        <td>Nama Kategori</td><td>:</td><td>{{$subcategory->category->name}}</td>
                    </tr>
                    <tr>
                        <td>Pola Menu Diet</td><td>:</td><td>{{$subcategory->name}}</td>
                    </tr>
                </table>
                <form action="{{route('saveData')}}" method="POST">
                    @csrf
                    <input type="hidden" name="subcategory_id" value="{{$id}}">
                    <div id="wizard1">
                        <h3>Master menu diet</h3>
                        <section>
                            <div class="table-responsive mg-t-20">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Hari Ke</th><th>Makan Pagi</th><th>Selingan Pagi</th><th>Makan Siang</th><th>Selingan Siang</th><th>Makan Malam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i=1;$i<=7;$i++)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td><textarea rows="8" cols="5" type="text" name='master_makan_pagi[{{$i}}]' class="form-control">{{$master[$i-1]['makan_pagi']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='master_selingan_pagi[{{$i}}]' class="form-control">{{$master[$i-1]['selingan_pagi']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='master_makan_siang[{{$i}}]' class="form-control">{{$master[$i-1]['makan_siang']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='master_selingan_siang[{{$i}}]' class="form-control">{{$master[$i-1]['selingan_siang']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='master_makan_malam[{{$i}}]' class="form-control">{{$master[$i-1]['makan_malam']}}</textarea></td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        <h3>Siklus Menu Diet</h3>
                        <section>
                            <div class="table-responsive mg-t-20">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Hari Ke</th><th>Makan Pagi</th><th>Selingan Pagi</th><th>Makan Siang</th><th>Selingan Siang</th><th>Makan Malam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i=1;$i<=7;$i++)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td><textarea rows="8" cols="5" type="text" name='siklus_makan_pagi[{{$i}}]' class="form-control">{{$siklus[$i-1]['makan_pagi']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='siklus_selingan_pagi[{{$i}}]' class="form-control">{{$siklus[$i-1]['selingan_pagi']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='siklus_makan_siang[{{$i}}]' class="form-control">{{$siklus[$i-1]['makan_siang']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='siklus_selingan_siang[{{$i}}]' class="form-control">{{$siklus[$i-1]['selingan_siang']}}</textarea></td>
                                                <td><textarea rows="8" cols="5" type="text" name='siklus_makan_malam[{{$i}}]' class="form-control">{{$siklus[$i-1]['makan_malam']}}</textarea></td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
