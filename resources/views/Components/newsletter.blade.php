<div class="sidebar-box">
    <div class="topic-border color-cod-gray mb-30">
        <div class="topic-box-lg color-cod-gray">Newsletter</div>
    </div>
    <div class="newsletter-area bg-primary">
        <h2 class="title-medium-light size-xl">Abonnez vous à la newsletter</h2>
        <img src="{{asset('view/img/banner/newsletter.png')}}" alt="newsletter" class="img-fluid m-auto mb-15">
        <p>Tenez vous informer de tout ce qui se passe sur le site.</p>
            <form id="Newsletter">
                <div class="input-group stylish-input-group">
                        {{csrf_field()}}
                        <input type="email" id="email" name="email" placeholder="Entrer votre mail" class="form-control">
                        <span class="input-group-addon">
                            <button type="submit">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </button>
                        </span>
                </div>
            </form>
    </div>
</div>