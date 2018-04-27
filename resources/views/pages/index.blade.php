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

        <section class="album py-5 bg-light">
            <div class="container" id="articleHandler">
                <div class="row" v-for="post in posts">
                    <div class="col-md-12">
                        <article class="card article mb-12 box-shadow">
                            <header class="card-title text-center">@{{post.title}}</header>
                            <div class="card-subtitle text-center">@{{post.date}}</div>
                            <div class="card-body">
                                <p class="card-text">@{{post.preview}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group article__controls">
                                        <a v-bind:href="'/blog/view/' + post.id_blog" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a v-bind:href="'/blog/edit/' + post.id_blog" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

