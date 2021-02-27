@extends('base')
@section('content')

<div class="projects section">
    <div class="section-content bg-white">
        <div class="w-100 px-2">
            <div class="sec-title">
                <span class="hashtag mr-1">#</span> <span>İŞLƏRİM</span>
            </div>
        </div>
        <div class="projects row mx-0 w-100 p-0 justify-content-start">
            <div class="col-md-4 col-12 p-2">
                <div data-link="http://www.alibabayev.site/blog" class="project">
                        <div class="title">
                            <span>BLOG(portfolio)</span>
                        </div>
                        <div class="project-logo w-100">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <div class="project-content">
                            <span>
                            Bu həm portfolio saytimizla bağlı yenilikləri həm də bir növ bacarıqlarımı göstərmək üçün yazılmış blogdur.<br>Istifadə edilmiş texnologiya : PHP(laravel),VueJS
                            </span>
                        </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-2">
                <div data-link="http://www.alibabayev.site/" class="project">
                        <div class="title">
                            <span>Portfolio</span>
                        </div>
                        <div class="project-logo w-100">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="project-content">
                            <span>
                            Öz IT bacarıqlarımı sübüt etmək üçün yazılmış portfolio saytdır.
                            <br>Istifadə edilmiş texnologiya : PHP(laravel),VueJS</span>
                        </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-0 p-2">
                <div data-link="https://github.com/alibabayev2002/simongame" class="project">
                    <div class="title">
                       <span> SIMON GAME</span>
                    </div>
                        <div class="project-logo w-100">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        
                    <div class="project-content">
                        <span>
                        Bekar olarkən vue js istifadə edilərək yazılmış simon game adlanan oyun <br>Istifadə edilmiş texnologiya : VueJS
                        </span></div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-0 p-2">
                <div data-link="https://alibabayev.ru" class="project">
                    <div class="title">
                        <span>BLOG(tech. blog)</span>
                    </div>
                    <div class="project-logo w-100">
                        <i class="fas fa-blog"></i>
                        
                    </div>
                    <div class="project-content">
                        <span>
                        2020 ci ildə texnoloji paylaşımlar üçün yazdığım blog.<br>Istifadə edilmiş texnologiya : PHP(laravel),VueJS
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-0 p-2">
                <div data-link="https://github.com/alibabayev2002/collision-game-js" class="project">
                    <div class="title">
                        <span>Collision game</span>
                    </div>
                    <div class="project-logo w-100">
                        <i class="fas fa-gamepad"></i>
                        
                    </div>
                    <div class="project-content">
                        <span>
                        Bekar olarkən sadəcə JavaScript istifadə edilərək yazılan bir minigame.<br>Istifadə edilmiş texnologiya : JavaScript
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-0 p-2">
                <div data-link="https://github.com/alibabayev2002/school_modals---laravel-php" class="project">
                    <div class="title">
                        <span>E-School</span>
                    </div>
                    <div class="project-logo w-100">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="project-content">
                        <span>
                        4 Moduldan ibarət məktəb(üniversitet) etr sisteminə nümünə.<br>Istifadə edilmiş texnologiya : PHP(laravel)
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-0 p-2">
                <div data-link="https://github.com/alibabayev2002/EmailSenderApplication---laravel-php" class="project">
                    <div class="title">
                        <span>Email sender application</span>
                    </div>
                    <div class="project-logo w-100">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="project-content">
                        <span>
                        Saytda qeydiyyatdan keçmiş userlərin email hesablarına adminin qeyd etdiyi vaxtda periodik olaraq mesajin göndərilməsi üçün yazılmış ETR sistem.<br>Istifadə edilmiş texnologiya : PHP(laravel),VueJS
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-0 p-2">
                <div data-link="https://github.com/alibabayev2002/" class="project">
                    <div class="title">
                        <span>Github hesabım</span>
                    </div>
                    <div class="project-logo w-100">
                        <i class="fab fa-github"></i>
                    </div>
                    <div class="project-content">
                        <span>
                        Açmış olduğum bu github hesabımda gördüyüm bir çox işləri paylaşıram<br>
                        Github username : alibabayev2002

                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 px-2">
            <div class="sec-title">
                <span class="hashtag mr-1">#</span> <span>Portfolyo saytinin admin paneli hakkinda</span>
            </div>
            <div class="text-muted">
                yaxın zamanda yerləştiriləcək...
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    
<script>

    $('.project').click(function(){
        // alert('sa');
        let link =  $(this).data('link');
        window.location.href = link;
    });
</script>
@endsection
@section('title','İşlərim - Babayev Əli')
