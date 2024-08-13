<template>
    <b-row class="">
        <b-col lg="4" md="6" v-for="(item, index) of events" :key="index">
            <b-card no-body>
                <b-card-body>
                    <div @click="view(item.id)" class="d-flex align-items-center" style="cursor: pointer;">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary rounded-circle fs-3">
                                <i :class="`ri-bill-line align-middle`"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                {{ item.name }}
                            </p>
                            <h4 class="mb-0">
                                <span class="counter-value">
                                {{ item.participants_count }} / {{item.maximum}}
                                </span>
                            </h4>
                        </div>
                    </div>
                </b-card-body>
            </b-card>
        </b-col>
        <b-col lg="12">
            <b-card style="height: calc(100vh - 290px); overflow: auto;">
                 <b-row class="g-2 mb-2 mt-n2">
                    <b-col lg>
                        <div class="input-group mb-1">
                            <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                            <input type="text" v-model="filter.keyword" placeholder="Search User" class="form-control" style="width: 35%;">
                            <span  class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                                <i class="bx bx-refresh search-icon"></i>
                            </span>
                            <b-button type="button" variant="primary" @click="openCreate">
                                <i class="ri-add-circle-fill align-bottom me-1"></i> Export
                            </b-button>
                        </div>
                    </b-col>
                </b-row>
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle mb-0">
                        <thead class="table-light">
                            <tr class="fs-11">
                                <th></th>
                                <th style="width: 35%;">Name</th>
                                <th style="width: 14%;" class="text-center">Email</th>
                                <th style="width: 15%;" class="text-center">Contact no.</th>
                                <th style="width: 15%;" class="text-center">Affiliation</th>
                                <th style="width: 13%;" class="text-center">PRC No.</th>
                                <th style="width: 13%;" class="text-center">Date</th>
                                <th style="width: 7%;" ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(list,index) in lists" v-bind:key="index">
                                <td class="text-center"> 
                                    {{ index + 1 }}.
                                </td>
                                <td>
                                    <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                                    <p class="fs-12 text-muted mb-0">{{list.address}}</p>
                                </td>
                                <td class="text-center fs-12">{{list.email}}</td>
                                <td class="text-center fs-12">{{list.contact_no}}</td>
                                <td class="text-center fs-12">{{list.affiliation}}</td>
                                <td class="text-center fs-12">{{list.prc_no}}</td>
                                <td class="text-center fs-12">{{list.created_at}}</td>
                                <td class="text-end">
                                    <b-button @click="openEdit(list)" variant="soft-info" v-b-tooltip.hover title="View" size="sm" class="me-1">
                                        <i class="ri-eye-fill align-bottom"></i>
                                    </b-button>
                                    <b-button @click="openDelete(list.index)" variant="soft-danger" v-b-tooltip.hover title="View" size="sm">
                                        <i class="ri-delete-bin-fill align-bottom"></i>
                                    </b-button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" /> -->
                </div>
            </b-card>
        </b-col>
    </b-row>
</template>
<script>
import _ from 'lodash';
import Delete from './Delete.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    props: ['events'],
    components: { Pagination, Delete}, 
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            index: null,
            filter: {
                keyword: null,
                event: null
            }
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal)
        }
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/participants';
            axios.get(page_url,{
                params : {
                    event: this.filter.event,
                    keyword: this.filter.keyword,
                    count: ((window.innerHeight-450)/58)
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    //this.meta = response.data.meta;
                    //this.links = response.data.links;          
                }
            })
            .catch(err => console.log(err));
        },
        view(item){
            this.filter.event = item;
            this.fetch();
        }
    }
}
</script>