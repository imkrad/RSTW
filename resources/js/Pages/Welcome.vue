<template>
    <Head title="Science and Technology Scholarship Information System" />
    <div class="layout-wrapper landing">
        <section class="section job-hero-section bg-light pb-0" id="hero" style="margin-top: -170px;">
            <BContainer>
                <BRow class="justify-content-between align-items-center">
                    <BCol lg="6">
                        <div>
                             <img src="images/logo-sm.png" alt="logo light" height="70">
                            <img src="images/new.png" alt="logo light" height="90">
                            <img src="images/logo-dark.png" alt="logo light" height="50">
                             <hr class="text-muted"/>
                            <!-- <h1 class="display-6 fw-semibold text-capitalize mb-3 lh-base"><span class="text-primary">DOST-IX</span> RSTW 2024</h1> -->
                            <p class="lead lh-base mb-1">Siyensya, Teknolohiya at Inobasyon :</p>
                            <p class="lead text-muted fs-14 lh-base mb-4">Kabalikat sa Matatag, Maginhawa, at Panatag na Kinabukasan. <br />Providing Solutions and Opening Opportunities in the Green Economy</p>
                            <BButton @click="openRegister()" variant="primary" class="submit-btn w-80 h-100" type="submit">
                            REGISTER NOW</BButton>

                            <ul class="treding-keywords list-inline mb-0 mt-3 fs-13">
                                <li class="list-inline-item text-danger fw-semibold"><i
                                        class="ri-map-pin-fill align-middle"></i> Zamboanga City :</li>
                                <li class="list-inline-item">
                                    <BLink href="#">September 5-6, 2024</BLink>
                                </li>
                              
                            </ul>
                        </div>
                    </BCol>
                    <BCol lg="4">
                        <div class="position-relative home-img text-center mt-5 mt-lg-0">
                          

                            <img src="/images/job.png" alt="" class="user-img">

                            <div class="circle-effect">
                                <div class="circle"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                                <div class="circle4"></div>
                            </div>
                        </div>
                    </BCol>
                </BRow>
            </BContainer>
        </section>
        <section id="team" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card bg-soft bg-light border shadow-none mb-3">
                            <div class="d-flex mt-1">
                                <div class="avatar-xs align-self-center">
                                    <div class="avatar-title rounded bg-transparent"><i
                                            class="bx bx-news h4 mt-1"></i></div>
                                </div>
                                <div class="overflow-hidden mr-auto align-self-center">
                                    <h5 class="fw-semibold fs-12 mt-1">Trainings</h5>
                                </div>
                            </div>
                        </div>
                        <b-list-group>
                            <b-list-group-item class="fs-13" v-for="(event,index) in events" v-bind:key="index">{{event.name}} :
                                <ul class="mt-2">
                                    <li v-for="(list,index1) in event.list" v-bind:key="index1">{{list.name}} <span class="float-end">{{list.schedule}}</span></li>
                                </ul>
                            </b-list-group-item>
                        </b-list-group>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <b-container>
                <b-row class="align-items-center gy-4">
                    <b-col sm>
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Be one of our Participants!</h4>
                        </div>
                    </b-col>
                    <b-col sm="auto">
                        <div>
                            <button @click="openRegister()" class="btn bg-gradient btn-danger"> Register</button>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>

        <footer class="custom-footer bg-dark py-5 position-relative">
            <b-container>
                <b-row>
                    <b-col lg="7" class="mt-4">
                        <div>
                            <div>
                                <img src="images/logo-light.png" alt="logo light" height="25">
                            </div>
                            <div class="mt-4 fs-13">
                                <p>Department of Science and Technology - IX</p>
                                <p class="ff-secondary">Siyensya, Teknolohiya at Inobasyon : Kabalikat sa Matatag, Maginhawa, at Panatag na Kinabukasan. Providing Solutions and Opening Opportunities in the Green Economy</p>
                            </div>
                        </div>
                    </b-col>

                    <b-col lg="5" class="ms-lg-auto">
                        <b-row>
                            <b-col sm="12" class="mt-4 text-end">
                                <h4 class="text-white mb-0">Contact Details</h4>
                                <div class="text-muted mt-4 fs-13">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li>
                                            Department of Science and Technology Regional Office No. IX
                                        </li>
                                        <li>
                                            Pettit Barracks, Barangay Zone IV, Zamboanga City
                                        </li>
                                        <li>
                                            Tel.: (062) 991-1024
                                        </li>
                                        <li>
                                            Fax: (062) 992-1114
                                        </li>
                                    </ul>
                                </div>
                            </b-col>
                            
                            
                        </b-row>
                    </b-col>
                </b-row>

                <b-row class="text-center text-sm-start align-items-center mt-5">
                    <b-col sm="6">

                        <div>
                            <p class="copy-rights mb-0 currentyear">{{ new Date().getFullYear() }} © DOST-IX
                            </p>
                        </div>
                    </b-col>
                    <b-col sm="6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </b-link>
                                </li>
                                <li class="list-inline-item">
                                    <b-link href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </b-link>
                                </li>
                            </ul>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </footer>
        <b-button variant="danger" @click="topFunction" class="btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </b-button>
    </div>
    <BModal v-model="showModal"  style="--vz-modal-width: 1000px;" hide-footer body-class="p-0" header-class="p-0"
        class="v-modal-custom" content-class="border-0 overflow-hidden" centered hide-header-close>
        <div class="modal-body login-modal p-5">
            <h5 class="text-white fs-18 mb-1 mt-n4">Registration Form</h5>
            <p class="text-white-50 fs-12 mb-4">Please fill out the form carefully to ensure all information is accurate.</p>
            <div class="vstack gap-2 justify-content-center">
               <form class="customform mb-n4" style="color: white;">
                    <BRow class="g-2"> 
                        <BCol lg="12" class="mt-n2 mb-0">
                            <hr class="text-muted"/>
                        </BCol>
                        <BCol lg="9" class="mt-n1">
                            <InputLabel for="name" value="Name" :message="form.errors.firstname"/>
                              <b-row class="g-3 mb-2 mt-n2">
                                <b-col lg>
                                    <div class="input-group mb-0">
                                        <input type="text" v-model="form.firstname" placeholder="Firstname" class="form-control" style="width: 33%;">
                                        <input type="text" v-model="form.middlename" placeholder="Middlename" class="form-control" style="width: 33%;">
                                        <input type="text" v-model="form.lastname" placeholder="Lastname" class="form-control" style="width: 33%;">
                                    </div>
                                </b-col>
                            </b-row>
                        </BCol>
                        <BCol lg="3" class="mt-1">
                            <InputLabel for="name" value="PRC No."/>
                            <TextInput id="name" v-model="form.prc_no" type="email" class="form-control" placeholder="Please enter prc no." @input="handleInput('email')" :light="true"/>
                        </BCol>
                        <BCol lg="3" class="mt-n2">
                            <InputLabel for="name" value="Affiliation"/>
                            <TextInput id="name" v-model="form.affiliation" type="text" class="form-control" placeholder="Please enter contact no." @input="handleInput('contact_no')" :light="true"/>
                        </BCol>
                        <BCol lg="3" class="mt-n2">
                            <InputLabel for="name" value="Email Address" :message="form.errors.email"/>
                            <TextInput id="name" v-model="form.email" type="email" class="form-control" placeholder="Please enter email" @input="handleInput('email')" :light="true"/>
                        </BCol>
                        <BCol lg="3" class="mt-n2">
                            <InputLabel for="name" value="Contact no." :message="form.errors.contact_no"/>
                            <TextInput id="name" v-model="form.contact_no" type="text" class="form-control" placeholder="Please enter contact no." @input="handleInput('contact_no')" :light="true"/>
                        </BCol>
                        <BCol lg="2" class="mt-n2">
                            <InputLabel for="name" value="Sex" :message="form.errors.sex"/>
                            <!-- <TextInput id="name" v-model="form.sex" type="text" class="form-control" placeholder="Please enter sex" @input="handleInput('contact_no')" :light="true"/> -->
                            <select class="form-select mb-3" v-model="form.sex" aria-label="Default select example" style="min-height: 38.4px !important;">
                                <option value="null" selected class="text-muted" disabled>Select sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </BCol>
                        <BCol lg="1" class="mt-n2">
                            <InputLabel for="name" value="Age" :message="form.errors.age"/>
                            <TextInput id="name" v-model="form.age" type="text" class="form-control" placeholder="Age" @input="handleInput('contact_no')" :light="true"/>
                        </BCol>
                    </BRow>
               </form>
            </div>
        </div>
        <div class="modal-body border-bottom mt-n4 mb-n2" 
        style="padding-left: 3rem !important; padding-right: 3rem !important; padding-top: 3.2rem !important; padding-bottom: 1.5rem !important;" >
            <form class="customform mb-n4">
               <div class="form-check form-check-dark mb-n2 mt-n2" v-for="(event,index) in events" v-bind:key="index">
                    <input class="form-check-input" 
                    :value="event.id" 
                    v-model="form.lists" 
                    :disabled="isDisabled(event.id)"
                    type="checkbox" 
                    :id="'formCheck'+index">
                    <label class="form-check-label" :for="'formCheck'+index">{{event.name}}</label>
                    <ul class="mt-1 mb-3 text-muted fs-11">
                        <li v-for="(list,index1) in event.list" v-bind:key="index1">{{list.name}} <span class="float-end">{{list.schedule}}</span></li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="modal-body p-5">
            <form class="customform">
                <BRow class="g-2 mt-n4"> 
                    <BCol lg="3" class="mt-n1">
                        <InputLabel for="region" value="Region" :message="form.errors.region_code"/>
                        <Multiselect :options="regions" label="name" v-model="form.region_code" :message="form.errors.region_code" placeholder="Select Region" @input="handleInput('region_code')"/>
                    </BCol>
                    <BCol lg="3" class="mt-n1">
                        <InputLabel for="province" value="Province" :message="form.errors.province_code"/>
                        <Multiselect :options="provinces" :searchable="true" label="name" v-model="form.province_code" placeholder="Select Province" @input="handleInput('province_code')"/>
                    </BCol>
                    <BCol lg="3" class="mt-n1">
                        <InputLabel for="municipality" value="Municipality" :message="form.errors.municipality_code"/>
                        <Multiselect :options="municipalities" :searchable="true" label="name" v-model="form.municipality_code" placeholder="Select Municipality" @input="handleInput('municipality_code')"/>
                    </BCol>
                    <BCol lg="3" class="mt-n1">
                        <InputLabel for="barangay" value="Barangay" :message="form.errors.barangay_code"/>
                        <Multiselect :options="barangays" :searchable="true" label="name" v-model="form.barangay_code" placeholder="Select Barangay" @input="handleInput('barangay_code')"/>
                    </BCol>
                    <BCol lg="12" class="mt-1">
                        <InputLabel for="address" value="Address" :message="form.errors.address"/>
                        <TextInput id="address" v-model="form.address" type="text" class="form-control" placeholder="Please enter address" @input="handleInput('address')" :light="true"/>
                    </BCol>
                </BRow>
                <div class="mt-2 form-check">
                    <input type="checkbox" v-model="form.check" class="form-check-input" id="checkTerms">
                    <label class="form-check-label" for="checkTerms">I agree to the <span class="fw-semibold">Terms of Service</span> and Privacy Policy</label>
                </div>
                <div class="text-end">
                    <button @click="submit('ok')" class="btn btn-primary btn-md" type="button" :disabled="!form.check">
                        <div class="btn-content">Submit Now</div>
                    </button>
                </div>
            </form>
        </div>
    </BModal>
    <b-modal v-model="message" hide-footer class="v-modal-custom" modal-class="zoomIn" body-class="p-0" centered hide-header-close style="z-index: 5000;">
        <div class="text-end me-4">
            <button type="button" class="btn-close text-end" @click="check()"></button>
        </div>
        <div class="text-center px-5 pt-2">
            <div class="mt-2">
                 <div class="avatar-md mx-auto">
                    <div class="avatar-title rounded-circle bg-light">
                        <i v-if="$page.props.flash.status" class="ri-checkbox-circle-fill text-success h1 mb-0"></i>
                        <i v-else class="ri-close-circle-fill text-danger h1 mb-0"></i>
                    </div>
                </div>
                <h5 class="mb-1 mt-4 fs-14">{{$page.props.flash.message }}</h5>
                <p v-if="$page.props.flash.info" class="text-muted fs-12">{{$page.props.flash.info }}</p>
            </div>
        </div>
        <div class="modal-footer bg-light p-3 mt-5 justify-content-center">
            <p class="mb-0 text-muted fs-10">Any suggestions please contact
                <b-link href="fb.com/rjumli.gov" target="_blank" class="link-secondary fw-semibold">Administrator</b-link>
            </p>
        </div>
    </b-modal>
</template>
<script>
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default { 
    layout: null,
    components: {Multiselect, InputLabel, TextInput},
    props: ['events','regions'],
    data() {
        return {
            showModal: false,
            form: useForm({
                firstname: null,
                lastname: null,
                middlename: null,
                sex: null,
                age: null,
                contact_no: null,
                email: null,
                affiliation: null,
                position: null,
                prc_no: null,
                region_code: null,
                province_code: null,
                municipality_code: null,
                barangay_code: null,
                address: null,
                check: false,
                lists: []
            }),
            provinces: [],
            municipalities: [],
            barangays: [],
        };
    },
     watch: {
        'form.region_code'(){
            (this.form.region_code) ? this.fetchProvince(this.form.region_code) : '';
        },
        'form.province_code'(){
            (this.form.province_code) ? this.fetchMunicipality(this.form.province_code) : '';
        },
        'form.municipality_code'(){
            (this.form.municipality_code) ? this.fetchBarangay(this.form.municipality_code) : '';
        },
    },
    methods: {
        submit(){
            this.form.post('/',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                },
            });
        },
        fetchProvince(code){
            axios.get('/locations/',{
                params: {
                    option: 'province',
                    code: code
                }
            })
            .then(response => {
                this.provinces = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchMunicipality(code){
            axios.get('/locations/',{
                params: {
                    option: 'municipality',
                    code: code
                }
            })
            .then(response => {
                this.municipalities = response.data;
            })
            .catch(err => console.log(err));
        },
        fetchBarangay(code){
            axios.get('/locations/',{
                params: {
                    option: 'barangay',
                    code: code
                }
            })
            .then(response => {
                this.barangays = response.data;
            })
            .catch(err => console.log(err));
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        openRegister(){
            this.form.check = false;
            this.showModal = true;
        },
        topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        },
        isDisabled(eventId) {
           if (eventId === 1) {
            return this.form.lists.includes(2) || this.form.lists.includes(3);
            }
            return this.form.lists.includes(1);
        },
        hide(){
            this.showModal = false;
        },
        check(){
            this.$page.props.flash = {};
            this.message = false;
        }
    },
    mounted() {
        let backtoTop = document.getElementById("back-to-top");
        if (backtoTop) {
            backtoTop = document.getElementById("back-to-top");
            window.onscroll = function () {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backtoTop.style.display = "block";
                } else {
                    backtoTop.style.display = "none";
                }
            };
        }
        window.addEventListener('scroll', function (ev) {
            ev.preventDefault();
            var navbar = document.getElementById("navbar");
            if (navbar) {
                if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {
                    navbar.classList.add("is-sticky");
                } else {
                    navbar.classList.remove("is-sticky");
                }
            }
        });
    },
    computed: {
        message() {
            return (this.$page.props.flash.message) ?  true : false;
        }
    },
};
</script>