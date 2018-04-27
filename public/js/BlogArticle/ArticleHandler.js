"use strict";

class ArticleHandler{

    constructor(idContainer){
        this.idContainer = idContainer;
    }

    loadArticles(startIndex, limit){
        console.log("test");
        var idContainer = this.idContainer;
        axios({
            method: 'get',
            url: '/getblogs',
            params: {
                startIndex: startIndex,
                limit: limit
            },
            context: this
        })
            .then(function (response) {
                Vue.component('post-container', {
                    prop: ['article'],
                    template: '<div class="row"><div class="col-md-12">' +
                    '<div class="card article mb-12 box-shadow">' +
                    '<div class="card-title text-center">{{article.title}}</div>' +
                    '<div class="card-subtitle text-center">{{article.date}}</div>' +
                    '<div class="card-body">' +
                    '<p class="card-text preview">{{article.preview}}</p>' +
                    '<div class="d-flex justify-content-between align-items-center"><div class="btn-group article__controls">' +
                    '<a href="/blog/view/{{ article.id_blog }}" class="btn btn-sm btn-outline-secondary">View</a>' +
                    '<a href="/blog/edit/{{ article.id_blog }}" class="btn btn-sm btn-outline-secondary">Edit</a>' +
                    '</div>' +
                    '</div></div></div></div></div>'
                });

                new Vue({
                    el: idContainer,
                    data: {
                        articles: response.data
                    }
                });
            });


    }




}