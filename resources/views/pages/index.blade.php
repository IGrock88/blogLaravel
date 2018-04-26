@extends("base")


@section('content')

    <main role="main">

        <section class="text-center">
            <div class="container">
                <p>
                    <a href="/blog/add" class="btn btn-primary my-2">Add new article</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card article mb-12 box-shadow">
                            <div class="card-title text-center">New article</div>
                            <div class="card-subtitle text-center">19.04.2018</div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/blog/view" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="/blog/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-12 box-shadow">
                            <div class="card-title text-center">New article</div>
                            <div class="card-subtitle text-center">19.04.2018</div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/blog/view" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="/blog/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

