import {fileURLToPath, URL} from 'node:url'

import {defineConfig} from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [vue()],
    root: 'resources/vue',
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./resources/vue/src', import.meta.url))
        }
    },
    server: {
        // if you don't use docker, you might need to change this to localhost
        host: "0.0.0.0",
        // if you don't use docker, you will need to change this
        port: 3282,
        proxy: {
            '^/api/.*': {
                // if you don't use docker, you will need to change this
                target: `http://localhost`,
                changeOrigin: true,
            },
        }
    },
    build: {
        emptyOutDir: false,
        outDir: '../../public',
        rollupOptions: {
            input: {
                index: 'resources/vue/index.html',
            }
        },

    },
})
