"use strict";

class ArticleHandler{

    constructor(idContainer){
        this.idContainer = idContainer;
    }
// test
    loadArticles(startIndex, limit){
        console.log("test");
        var idContainer = this.idContainer;
        var articleApp = new Vue({
            el: idContainer,
            data: {
                posts: [],
                startIndex: startIndex,
                limit: limit
            },
            created: function(){
              this.loadPosts();
            },
            watch: {
                startIndex: function(){
                    this.loadPosts();
                },
                limit: function () {
                    this.loadPosts();
                }
            },
            methods: {
                loadPosts: function () {
                    axios({
                        method: 'get',
                        url: '/getblogs',
                        params: {
                            startIndex: this.startIndex,
                            limit: this.limit
                        },
                        context: this
                    }).then(function (response) {
                        articleApp.posts = response.data;

                        console.log(articleApp.posts);
                    });
                }
            }
        });
        return articleApp;

    }




}