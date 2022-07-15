<template>
    <Head>
        <title>{{ $page.props.title }} - My awesome app</title>
    </Head>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">DataCamp</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">A better way to filter tag</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.</p>
            </div>

            <div class="text-center my-10">
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" @click="open = !open">Get Started</button>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <TransitionRoot as="template" :show="open">
        <Dialog as="div" class="relative z-10" @close="open = false">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
            </TransitionChild>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                    <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <DialogPanel class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                            <!-- <form @submit.prevent="form.post(route('category.store'))">
                            </form> -->

                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <ExclamationIcon class="h-6 w-6 text-red-600" aria-hidden="true" />
                                    </div>
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <DialogTitle as="h3" class="text-lg leading-6 font-medium text-gray-900"> Filter Tag </DialogTitle>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500 mb-5">sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a cras semper auctor neque vitae tempus quam pellentesque nec nam aliquam sem et tortor consequat id porta nibh</p>
                                            <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">URL</label>
                                            <div class="mb-6">
                                                <div class="relative">
                                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                                                    </div>
                                                    <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://example.com" v-model="form.url">
                                                </div>
                                                <span v-if="form.errors.url" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.url }}</span>
                                            </div>
                                            <div class="mb-6">
                                                <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Selector</label>
                                                <div class="relative">
                                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                                                    </div>
                                                    <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="#selector" v-model="form.selector">
                                                </div>
                                                <span v-if="form.errors.selector" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.selector }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" @click="submit()" :disabled="form.submitted">
                                    <svg  v-if="form.submitted" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span v-if="form.submitted">
                                        Processing
                                    </span>
                                    <span v-if="! form.submitted">Query</span>
                                </button>
                                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" @click="open = false" ref="cancelButtonRef">Cancel</button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>


    <div class="overflow-x-auto relative">
        <table class="w-1/2 m-auto text-sm text-left text-gray-500 dark:text-gray-400">
            <!-- <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        URL
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Selector
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Data
                    </th>
                    <th>Created At</th>
                </tr>
            </thead> -->
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="scrap in scraps.data" :key="scrap.id">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="flex mb-3 gap-2">
                            <span class="text-blue-600">{{ scrap.url }}</span> - <small>{{ scrap.created_at }}</small>
                        </div>
                        <h3 class="mb-3">{{ scrap.selector }}</h3>

                        <textarea rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> {{ scrap.html }} </textarea>
                        <!-- <pre>
                            <code class="language-html">
                                {{ scrap.html }}
                            </code>
                        </pre> -->
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex justify-center my-5 mb-10">
        <pagination class="mt-6" :links="scraps.links" />
    </div>

</template>

<script>
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { ExclamationIcon } from '@heroicons/vue/outline'
import { useForm, usePage } from "@inertiajs/inertia-vue3";
import Pagination from '@/Components/Pagination'
import Notiflix from 'notiflix';


export default {
    mounted() {
        // hljs.highlightAll();
        Echo.channel('scrapper')
            .listen('.App\\Events\\Scrapper', (e) => {
                console.log(e.response)
                if(e.response.error == 101) Notiflix.Notify.failure(e.response.message);
                else if(e.response.error == 1) Notiflix.Notify.warning(e.response.message);
                else {
                    Notiflix.Notify.success(e.response.message);
                    this.scraps = e.response.data;
                }
            })
    },
    data() {
        return {
            open: false,
        };
    },
    components: {
        TransitionRoot,
        TransitionChild,
        DialogTitle,
        DialogPanel,
        Dialog,
        ExclamationIcon,
        Pagination
    },
    setup() {
        let scraps = usePage().props.value.scraps;
        const form = useForm({
            url: null,
            selector: null,
            submitted: false,
        });

        return { form, scraps };
    },
    methods: {
        submit() {
            this.open = false
            this.form.submitted = true

            this.form.post('/scrapper', {
                onSuccess: (res) => {
                    console.log(res);
                    // Notiflix.Notify.success(res.props.flash.success);
                    this.form.reset();
                },
                onError: (err) => {
                    Notiflix.Notify.failure("An error occurred while submitting your request");
                    this.open = true
                    this.form.submitted = false
                }
            })

            Notiflix.Notify.success('Your request has been submitted successfully');
        },
    },
};
</script>
