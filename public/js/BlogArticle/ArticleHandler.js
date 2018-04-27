"use strict";

class ArticleHandler{

    constructor(idContainer){
        this.idContainer = idContainer;
        this.articles = [];

    }

    loadArticles(startIndex, limit){
        console.log("test");
        axios({
            method: 'get',
            url: '/getblogs',
            params: {
                startIndex: startIndex,
                limit: limit
            }
        })
            .then(function (response) {
                console.log(response.data);
            });


    }

    addArticle(article){

    }


    renderArticles(){


    }



}