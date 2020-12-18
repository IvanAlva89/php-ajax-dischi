<div class="main-section">
    <div id="app">
        <div class="search">
            <select v-model="filter" @change="onAuthors($event)">
                <option value="all" selected="selected">All</option>
                <option v-for="singer in authors">{{ singer }}</option>
            </select>
        </div>
        <div class="container">
            <div v-for="cd in cds" class="dischi">
                <img :src="cd.poster">
                <h3 class="title">{{ cd.title }}
                    <small class="author">{{ cd.author }}</small>
                </h3>
                <span class="year">{{ cd.year }}</span>
                <span class="genre">{{ cd.genre }}</span>
            </div>
        </div>
    </div>
</div>