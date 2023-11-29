@extends('layouts.front')
@section('content-app')


<section class="about-area section">
    <div class="container">
        <h3>BMI Kalkulator</h3>
        <p>Berat badan ideal adalah impian semua orang. Tidak hanya memiliki bentuk tubuh yang menunjang penampilan, berat badan ideal juga menandakan kondisi tubuh yang sehat. Bagaimana denganmu? Yuk, hitung sekarang di BMI Kalkulator.</p>
        <div class="card">
            <div class="card-body">
                <form id="formBMI" action="#">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="row w-25 text-center" id="content-gender">
                            <label class="col-md-6" for="male">
                                <img class="w-25" id='male-image' src="https://www.halodoc.com/bmi-calculator/assets/images/result/man.webp" alt="">
                                <input type="radio" class="d-none" id="male" name="gender" value='1'>
                            </label>
                            <label class="col-md-6" for="female">
                                <img class="w-25" id='female-image' src="https://www.halodoc.com/bmi-calculator/assets/images/result/woman.webp" alt="">
                                <input type="radio" class="d-none" id="female" name="gender" value='0'>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Tinggi Badan</label>
                        <input type="number" name="tb" class="form-control" placeholder="Tinggi Badan (Cm)">
                    </div>
                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="number" name="bb" class="form-control" placeholder="Berat Badan (Kg)">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn bg-success w-100">Hitung BMI</button>
                    </div>
                </form>
                <div id="result" class="text-center">
                    <img src="" id="gender-image" class="w-25" alt="">
                    <h3>BMI untuk <span id="gender-result"></span></h3>
                    <h4 class="" id="category"></h4>
                    <p>Utamakan hidup sehat dan perhatikan konsumsi harian</p>
                    <h4>BMI Kamu: <span id="bmi-value"></span> </h4>
                    <p id="result-description"></p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- make js only for this page --}}
@push('script')
<script>
    $(document).ready(function(){
        $('#male').click(function(){
            $('#male').parent().addClass('bg-success rounded text-white');
            $('#female').parent().removeClass('bg-success rounded text-white');
        });
        $('#female').click(function(){
            $('#female').parent().addClass('bg-success rounded text-white');
            $('#male').parent().removeClass('bg-success rounded text-white');
        });
        var formBMI = $('#formBMI');
        var result = $('#result');
        result.hide();
        $('#formBMI').submit(function(){
            var gender = $('[name=gender]:checked').val();
            $('#gender-result').text(gender ? 'Laki laki' : 'Perempuan')
            $('#gender-image').attr('src', gender ? $('#male-image').attr('src') : $('#female-image').attr('src'));
            var bb = $('[name=bb]').val();
            var tb = $('[name=tb]').val();
            // rumus bmi
            var bmi = bb / (tb/100 * tb/100);
            // menentukan kategori bmi
            var kategori = '';
            var kategori_warna = 'success';
            var kategori_deskripsi = '';
            if(bmi < 18.5){
                kategori = 'Kurus';
                kategori_warna = 'danger';
                kategori_deskripsi = 'Kamu perlu menambah berat badan';
            }else if(bmi >= 18.5 && bmi <= 24.9){
                kategori = 'Normal';
                kategori_deskripsi = 'Kamu memiliki berat badan ideal';
            }else if(bmi >= 25 && bmi <= 29.9){
                kategori = 'Gemuk';
                kategori_warna = 'warning';
                kategori_deskripsi = 'Kamu perlu mengurangi berat badan';
            }else if(bmi >= 30){
                kategori = 'Obesitas';
                kategori_warna = 'danger';
                kategori_deskripsi = 'Kamu perlu mengurangi berat badan karena beresiko penyakit kronis';
            }
            $('#result-description').text(kategori_deskripsi);
            $('#category').text(kategori);
            $('#bmi-value').text(bmi.toFixed(2)+','+kategori);
            $('#bmi-value').addClass('text-'+kategori_warna);
            $('#category').addClass('text-'+kategori_warna);
            formBMI.hide();
            result.show();
            return false;
        })
    });
</script>
@endpush
@endsection
