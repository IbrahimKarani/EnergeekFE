<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="csrf-token" content="{{ csrf-token() }}"> --}}
    <title>Apply Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  </head>

  <body>

    <section class="form-apply">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="logo">
                        <img src="{{asset('img/energeek.png')}}" alt="logo">
                    </div>
                    <div class="card" style="border-radius: 12px;">
                        <div class="card-body p-5">
                        <h2 class="text-center mb-5">Apply Lamaran</h2>
                        <form>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="formJabatan">Jabatan</label>
                                <select class="form-select" id="inputJabatan">
                                    <option selected>Pilih Jabatan</option>
                                </select>
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="formTelepon">Telepon</label>
                            <input type="text" id="formTelepon" class="form-control form-control-md" placeholder="Cth: 08123456789"/>
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="formEmail">Email</label>
                            <input type="email" id="formEmail" class="form-control form-control-md" placeholder="Cth: energeekemail@gmail.com"/>
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="formTahunLahir">Tahun Lahir</label>
                            <input type="date" id="formTahunLahir" class="form-control form-control-md" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="formSkill">Skill Set</label>
                                <select class="form-select selectpicker" id="inputSkill" multiple>
                                    <option selected>Choose...</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="submit" class="btn">Apply</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </section>

    <script>
            $.ajax({
                url: 'http://demo73.energeek.co.id/energeek-frontend-test/public/api/select_list/job',
                type: 'get',
                dataType: 'json',
                success: function(result) {

                        let jabatan = result.data.jobs;
                        $.each(jabatan, function (i, data) {
                            $('#inputJabatan').append(`
                                <option class="JobList">`+ data.name +`</option>
                            `)                            
                        });
                }
            })
        
            $.ajax({
                url: 'http://demo73.energeek.co.id/energeek-frontend-test/public/api/select_list/skill',
                type: 'get',
                dataType: 'json',
                success: function(result) {

                        let skillSet = result.data.skills;
                        $.each(skillSet, function (i, data) {
                            $('#inputSkill').append(`
                                <option class="SkillList">`+ data.name +`</option>
                            `)                            
                        });
                }
            })



    </script>


  </body>
</html>