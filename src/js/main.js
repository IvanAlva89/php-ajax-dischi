//Import Vue
import Vue from 'vue';

//Import Axios
import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        cds: [],
        filter:'all',
        authors: [],
        searchQuery: '',
    },
    created() {
        const url = window.location.href + 'scripts/json-script.php';
        this.getSinger(url);

        axios.get(url)
        .then(response => {
            this.cds = response.data;
        })
        .catch(error => {
            console.log(error);
        });

    },
    methods: {
        getSinger(data) {
            axios.get(data)
            .then(response => {
                for (let i = 0; i < response.data.length; i++){
                    let newAuthor = response.data[i].author;
                    if (! this.authors.includes(newAuthor)) {
                        this.authors.push(newAuthor);
                    }
                };
            })
            .catch(error => {
                console.log(error);
            })
        },
        onAuthors(event) {
            this.searchQuery = '?artista=' + event.target.value;

            axios.get(window.location.href + 'scripts/json-script.php' + this.searchQuery)
            .then(response => {
                this.cds = response.data;
            })
            .catch(error => {
                console.log(error);
            });           
        }
    }
});