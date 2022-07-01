<template>
    <div class="container pt-5">
        <!-- SETTINGS -->
        <div class="mb-5 d-flex justify-content-between">
            <!-- SEARCH PART -->
            <div class="d-flex justify-content-between">
                <input class="input-group-text text-left mr-3" type="text" v-model="search.keyword">

                <select v-model="search.type.selected" class="input-group-text mr-3">
                    <option value="all">all</option>
                    <option v-for="option in search.type.options" :value="option" >
                        {{ option }}
                    </option>
                </select>

                <button class="btn btn-primary" @click="getProducts">Search</button>
            </div>
            <!-- SEARCH PART END -->
            <!-- ITEMS PER PAGE SELECTOR -->
            <div class="d-flex">
                <div class="mr-3 mt-1">Items per page: </div>
                <div>
                    <select v-model="results.per_page.selected" @change="changePerPage" class="input-group-text">
                        <option v-for="option in results.per_page.options" :value="option">
                            {{ option }}
                        </option>
                    </select>
                </div>
            </div>
            <!-- ITEMS PER PAGE SELECTOR END -->
        </div>
        <!-- SETTINGS END -->


        <!-- CHARTS PART -->
        <div class="mb-5">
            <div class="row">
                <div class="col-6">
                    <LineChart v-if="results.object.data.length" :chart-data="chartDataByClient" :chart-options="chartOptions"/>
                </div>
                <div class="col-6">
                    <LineChart v-if="results.object.data.length" :chart-data="chartDataTotal" :chart-options="chartOptions"/>
                </div>
            </div>
        </div>
        <!-- CHARTS PART END -->

        <!-- TABLE LIST -->
        <div class="mb-5">
<!--                @if ($errors->any())-->
<!--                <div class="alert alert-danger">-->
<!--                    <ul class="list-unstyled">-->
<!--                        @foreach ($errors->all() as $error)-->
<!--                        <li>{{ $error }}</li>-->
<!--                        @endforeach-->
<!--                    </ul>-->
<!--                </div>-->
<!--                @endif-->
<!--                @if(Session::has('message'))-->
<!--                <p class="alert alert-info">{{ Session::get('message') }}</p>-->
<!--                @endif-->

            <span v-if="results.object.data.length" class="btn-link" @click="sendEmail">Email this report</span>
            <br>
            <br>
            <div v-if="!results.object.data.length">Products wasn't found... Maybe you could try change searching params...</div>
            <table v-else class="table" style="table-layout: fixed">
                <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th>
                        <div class="d-flex">
                            <span class="mr-2 mt-1">Client</span>
                            <TableSortButtons column="client" :sortArr="sortArr" :runSort="runSort"></TableSortButtons>
                        </div>
                    </th>
                    <th>
                        <div class="d-flex">
                            <span class="mr-2">Product</span>
                            <TableSortButtons column="product" :sortArr="sortArr" :runSort="runSort"></TableSortButtons>
                        </div>
                    </th>
                    <th>
                        <div class="d-flex">
                            <span class="mr-2">Total</span>
                            <TableSortButtons column="total" :sortArr="sortArr" :runSort="runSort"></TableSortButtons>
                        </div>
                    </th>
                    <th>
                        <div class="d-flex">
                            <span class="mr-2">Date</span>
                            <TableSortButtons column="date" :sortArr="sortArr" :runSort="runSort"></TableSortButtons>
                        </div>
                    </th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    <template v-for="(item, index) in results.object.data">
                        <tr>
                            <th scope="row">{{itemsNumberStart + index + 1}}</th>
                            <td>{{item.client}}</td>
                            <td>{{item.product}}</td>
                            <td>{{item.total}}</td>
                            <td>{{item.date}}</td>
                            <td class="d-flex pt-1">
                                <button type="button" class="btn btn-info mr-2"
                                    @click="showEditRow(index)"
                                    :disabled="currentEditObj && currentEditObj.id === item.id"
                                >
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger"
                                    @click="removeItem(item.id)"
                                    :disabled="currentEditObj && currentEditObj.id === item.id"
                                >
                                    Remove
                                </button>
                            </td>
                        </tr>
                        <tr v-if="currentEditObj && currentEditObj.id === item.id">
                            <th class="border-top-0"></th>
                            <td class="border-top-0 pl-0 pt-1">
                                <select v-model="currentEditObj.client" class="form-control">
                                    <option v-for="option in ['Acme', 'Apple', 'Microsoft']" :value="option">
                                        {{ option }}
                                    </option>
                                </select>
                            </td>
                            <td class="border-top-0 pl-0 pt-1">
                                <input class="form-control" type="text" v-model="currentEditObj.product">
                            </td>
                            <td class="border-top-0 pl-0 pt-1">
                                <input class="form-control" type="number" v-model="currentEditObj.total">
                            </td>
                            <td class="border-top-0 pl-0 pt-1">
                                <date-picker class="w-100"
                                             v-model="currentEditObj.date"
                                             type="date"
                                             format="MM/DD/YYYY"
                                             value-type="format"
                                             :placeholder="currentEditObj.date"
                                ></date-picker>
                            </td>
                            <td class="border-top-0 pt-1">
                                <button class="btn btn-success mr-2" @click="editItem(index)">
                                    &check;
                                </button>
                                <button class="btn btn-danger" @click="showEditRow(index)">
                                    &#65293;
                                </button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>

            <LaravelVuePagination ref='pagination' v-if="results.object" :data="results.object" @pagination-change-page="getProducts" />
        </div>
        <!-- TABLE LIST END -->
    </div>
</template>

<script>
import LineChart from "./LineChart";
import LaravelVuePagination from 'laravel-vue-pagination';
import TableSortButtons from "./partials/TableSortButtons";
import EditRow from "./partials/EditRow";
import DatePicker from 'vue2-datepicker';
import 'vue2-datepicker/index.css';

export default {
    name: "app-wrap",
    components: {
        LineChart, LaravelVuePagination, TableSortButtons, EditRow, DatePicker
    },
    data(){
        return {
            chartDataByClient: null,
            chartDataTotal: null,
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            tooltipFormat:'MM/DD/YYYY',
                            unit: 'day',
                            displayFormats: {
                                'day': 'MM/DD/YYYY'
                            }
                        }
                    },

                }
            },
            search: {
                type: {
                    selected: 'all',
                    options: ['client', 'product', 'total', 'date']
                },
                keyword: ''
            },
            sortArr: [],
            results: {
                per_page: {
                    selected: null,
                    options: [5, 10, 15, 25, 50, 100]
                },
                current_page: 1,
                object: {
                    data: [],
                    links: {},
                    meta: {}
                },

            },
            fetch_headers_config : {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            opened_edit_row: null,
            currentEditObj: null
        }
    },
    methods: {
        runSort(column, sort){
            const index = this.sortArr.findIndex((obj) => obj.column === column);
            if(index === -1){
                this.sortArr.push({column, sort});
            }else{
                if(this.sortArr[index].sort !== sort){
                    this.sortArr[index].sort = sort;
                    if(this.sortArr.length !== index+1){
                        this.sortArr.push(this.sortArr.splice(index, 1)[0]);
                    }
                }else {
                    this.sortArr.splice(index,1);
                }
            }

            this.getProducts();
        },
        changePerPage(){
            this.results.current_page = 1;
            this.getProducts();
        },
        formFilterQuery(){
            let query = '';
            if(this.search.keyword){
                query += `&search[${this.search.type.selected}]=${this.search.keyword}`;
            }

            if (this.sortArr){
                for(const type of this.sortArr){
                    query += `&sort[${type.column}]=${type.sort}`;
                }
            }

            return query;
        },
        async getProducts(page = this.results.current_page, onlyReport = false) {

            let url = `/api/products?page=${page}`;

            if(this.results.per_page.selected){
                url += `&per_page=${this.results.per_page.selected}`;
            }

            if(onlyReport){
                url += `&only_report=true`
            }

            const filterQuery = this.formFilterQuery();

            if(filterQuery){
                url += filterQuery;
            }

            try {
                const res = await fetch(
                    url,
                {
                        method: "GET",
                        headers: this.fetch_headers_config
                    }
                )
                const data = await res.json();

                if(data.data){
                    // this.results.object = data;

                    Vue.set(this.results.object, 'data', data.data);
                    Vue.set(this.results.object, 'meta', data.meta);
                    Vue.set(this.results.object, 'links', data.links);

                    this.results.per_page.selected = data.meta.per_page;
                    this.results.current_page = data.meta.current_page;

                    const sortedData = [...data.data];
                    sortedData.sort((a,b) => new Date(b.formattedDate) - new Date(a.formattedDate));

                    this.chartDataByClient = {
                        datasets: this.groupDataByClient(sortedData)
                    }

                    const color = `#${Math.floor(Math.random()*16777215).toString(16)}`;

                    this.chartDataTotal = {
                        datasets: [
                            {
                                label: 'Total',
                                backgroundColor: color,
                                borderColor: color,
                                data: this.groupDataByDate(sortedData)
                            }
                        ]
                    }
                }
            } catch (err) {
                console.log('err', err);
            }
        },
        groupDataByClient(data){
            const groupedByClientData = data.reduce((group, product) => {
                const { client } = product;
                group[client] = group[client] ?? [];
                group[client].push({
                    x: product.formattedDate,
                    y: product.total
                });
                return group;
            }, {});

            let groupedByClientDatasetArr = [];
            for (const [key, item] of Object.entries(groupedByClientData)){
                const color = `#${Math.floor(Math.random()*16777215).toString(16)}`;
                groupedByClientDatasetArr.push({
                    label: key,
                    data: item,
                    backgroundColor: color,
                    borderColor: color
                });
            }

            return groupedByClientDatasetArr;
        },
        groupDataByDate(data){
            const groupedByDateData = data.reduce((group, product) => {
                const { formattedDate } = product;
                group[formattedDate] = group[formattedDate] ?? [];
                group[formattedDate].push({
                    x: product.formattedDate,
                    y: product.total
                });
                return group;
            }, {});

            const groupedByDateDatasetArr = [];

            for (const [key, item] of Object.entries(groupedByDateData)){
                groupedByDateDatasetArr.push({
                    x: key, y: item.map(el => el.y).reduce((prev,curr) => prev + curr, 0)
                });
            }

            return groupedByDateDatasetArr;
        },
        showEditRow(index){
            if(this.currentEditObj && this.currentEditObj.index === index){
                this.currentEditObj = null;
            }else{
                this.currentEditObj = {...this.results.object.data[index], index: index};
            }
        },
        async editItem(){
            let url = `/api/products/${this.currentEditObj.id}`;

            try {
                const res = await fetch(
                    url,
                    {
                        method: "PUT",
                        headers: this.fetch_headers_config,
                        body: JSON.stringify({
                            client: this.currentEditObj.client,
                            product: this.currentEditObj.product,
                            total: this.currentEditObj.total,
                            date: this.currentEditObj.date
                        })
                    }
                )
                const data = await res.json();

                if(data.data){
                    this.currentEditObj = null;
                    this.getProducts();
                }

            } catch (err) {
                console.log('err', err);
            }
        },
        async removeItem(id){
            let url = `/api/products/${id}`;

            try {
                const res = await fetch(
                    url,
                    {
                        method: "DELETE",
                        headers: this.fetch_headers_config
                    }
                )
                const data = await res.json();

                if(data.removed){
                    this.getProducts();
                }

            } catch (err) {
                console.log('err', err);
            }
        },
        sendEmail(){
            this.getProducts(this.results.current_page, true);
        },
    },

    mounted() {
        this.getProducts();
    },
    computed: {
        itemsNumberStart() {
            return (!this.results.current_page || this.results.current_page === 1)
                ? 0
                : (this.results.current_page - 1) * this.results.per_page.selected
        }
    }
}
</script>

<style scoped>

</style>
