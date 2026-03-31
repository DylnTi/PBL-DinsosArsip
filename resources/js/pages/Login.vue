<script setup lang="ts">
import { Head, router, useForm } from '@inertiajs/vue3'
import GuestLayout from '@/layouts/GuestLayout.vue'

defineOptions({ layout: GuestLayout })

defineProps<{
    status?: string
}>()

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

function handleSubmit() {
    form.post('/login', {
        onError: (errors) => {
            console.error(errors)
            alert('Login gagal, cek email dan password!')
        }
    })
}

function goToRegister() {
    router.visit('/register')
}
</script>

<template>
    <Head title="Login - Dinsos" />

    <div
        class="relative flex items-center justify-center min-h-screen bg-center bg-cover"
        style="background-image: url('/image/bgregis.jpg')"
    >
        <!-- Light gray overlay -->
        <div class="absolute inset-0 bg-white/30 backdrop-blur-[2px]"></div>

        <!-- Card -->
        <div
            class="relative z-10 w-full max-w-sm px-6 py-4 bg-[#e8e8e8]/80 rounded-2xl shadow-xl"
        >
            <!-- Logo & Institution Header -->
            <div class="flex items-center justify-center gap-2 mb-3.5">
                <img
                    src="/image/logodinsos.png"
                    alt="logo"
                    class="w-9.5 h-11.5 object-contain flex-shrink-0"
                />
                <div class="text-center leading-tight">
                    <p class="text-xs font-bold text-gray-800">Sistem Arsip Digital</p>
                    <p class="text-[10px] text-gray-600">Dinas Sosial Boyolali</p>
                </div>
            </div>

            <!-- Title -->
            <div class="text-center mb-3.5">
                <h1 class="text-lg font-extrabold text-gray-900 tracking-wide">MASUK</h1>
                <p class="text-xs text-gray-500 mt-0.5">Silahkan masuk untuk melanjutkan</p>
            </div>

            <!-- Display status message if any -->
            <div
                v-if="status"
                class="mb-2 p-2 bg-green-100 text-green-700 rounded-lg text-xs"
            >
                {{ status }}
            </div>

            <!-- Form -->
            <form @submit.prevent="handleSubmit" class="space-y-2.5 text-sm">
                <!-- Email -->
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Email</label>
                    <input
                        v-model="form.email"
                        type="email"
                        required
                        class="field-input"
                        placeholder="email@example.com"
                    />
                    <span v-if="form.errors.email" class="text-xs text-red-600 mt-1 block">
                        {{ form.errors.email }}
                    </span>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-xs font-medium text-gray-700 mb-1">Password</label>
                    <input
                        v-model="form.password"
                        type="password"
                        required
                        class="field-input"
                        placeholder="Password"
                    />
                    <span v-if="form.errors.password" class="text-xs text-red-600 mt-1 block">
                        {{ form.errors.password }}
                    </span>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input
                        v-model="form.remember"
                        id="remember"
                        type="checkbox"
                        class="w-4 h-4 rounded border-gray-300"
                    />
                    <label for="remember" class="ml-2 text-xs text-gray-700">
                        Ingat saya
                    </label>
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full py-2 mt-2 text-sm font-bold text-white bg-[#2d3282] hover:bg-[#232769] rounded-lg transition-colors duration-200 disabled:opacity-50"
                >
                    {{ form.processing ? 'Loading...' : 'LOGIN' }}
                </button>
            </form>

            <!-- Register Link -->
            <p class="mt-2.5 text-xs text-center text-gray-700">
                Belum punya akun?
                <span
                    @click="goToRegister"
                    class="text-blue-600 font-medium cursor-pointer hover:underline"
                >
                    Daftar
                </span>
            </p>
        </div>
    </div>
</template>

<style scoped>
.field-input {
    width: 100%;
    padding: 7px 11px;
    border: none;
    border-radius: 6px;
    background-color: #ffffff;
    color: #1f2937;
    font-size: 12.5px;
    outline: none;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    transition: box-shadow 0.2s;
}

.field-input:focus {
    box-shadow: 0 0 0 2px rgba(45, 50, 130, 0.35);
}
</style>
