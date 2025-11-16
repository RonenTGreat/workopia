import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        manifest: true,
    },
});
```

### 4. Add a `.dockerignore` file to your project root:

This ensures you're not copying old build files:
```
node_modules
public/build
public/hot
.env
.git
```

### 5. Update your Railway environment to include the full URL with protocol:
```
APP_URL=https://workopia-production-2ff4.up.railway.app