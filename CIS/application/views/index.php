    <script type="importmap">
        {
            "imports": {
            "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
            }
        }
    </script>

    <div class="text-3xl font-bold underline" id="app">{{ message }}</div>

    <script type="module">
        import { createApp, ref } from 'vue'

        createApp({
            setup() {
            const message = ref('Hello World!')
            return {
                message
            }
            }
        }).mount('#app')
    </script>