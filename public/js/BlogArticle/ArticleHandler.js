"use strict";

class ArticleHandler{

    constructor(idContainer){
        this.idContainer = idContainer;
    }

    loadArticles(startIndex, limit){
        console.log("test");
        var idContainer = this.idContainer;
        var articleApp = new Vue({
            el: idContainer,
            data: {
                posts: []
            },
            created: function () {
                axios({
                    method: 'get',
                    url: '/getblogs',
                    params: {
                        startIndex: startIndex,
                        limit: limit
                    },
                    context: this
                }).then(function (response) {
                    articleApp.posts = response.data;

                    console.log(articleApp.posts);
                });
            }
        });

    }




}