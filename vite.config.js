import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin'
import path from 'path'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/app.js',
        'resources/css/app.css',
      ],
      buildDirectory: 'build', // relative to public
      refresh: true,
    }),
    vue(),
  ],
  root: 'resources',
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
    },
  },
  build: {
    outDir: path.resolve(__dirname, './public/build'), // keep as-is
    emptyOutDir: true,
    manifest: true,
    assetsDir: '', // prevents creation of .vite folder
  },
})
