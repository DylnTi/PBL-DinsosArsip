<script setup>
import AuthLayout from '@/layouts/AuthLayout.vue'

defineOptions({
  layout: AuthLayout
})

const documents = [
    {
        title: "Proposal Program Pemberdayaan Masyarakat",
        nomor: "DOK/012/11/2026",
        kategori: "Proposal",
        tanggal: "25 Januari 2026",
        divisi: "Sekretariat",
        ukuran: "3,5 MB",
        status: "Public"
    },
    {
        title: "Proposal Program Pemberdayaan Masyarakat",
        nomor: "DOK/012/11/2026",
        kategori: "Proposal",
        tanggal: "25 Januari 2026",
        divisi: "Sekretariat",
        ukuran: "3,5 MB",
        status: "Public"
    }
]
</script>

<template>

<div class="p-6 bg-[#f3f4f6] min-h-screen space-y-6">

    <!-- SEARCH BAR -->
    <div class="bg-[#2f6f84] p-4 rounded-xl flex items-center gap-4 shadow-md">

        <div class="bg-white flex items-center flex-1 h-12 px-4 rounded-lg shadow-sm">
            <span class="mr-2">🔍</span>
            <input 
                type="text" 
                placeholder="Cari dokumen, nomor surat, atau kata kunci..."
                class="w-full outline-none text-sm"
            >
        </div>

        <button class="bg-white h-12 px-6 rounded-lg shadow-sm text-sm font-medium hover:bg-gray-100">
            Cari
        </button>

    </div>

    <!-- LIST -->
    <div class="space-y-4">

        <div 
            v-for="(doc, i) in documents" 
            :key="i"
            class="bg-[#7fa6b5] rounded-xl p-4 flex items-center gap-4 shadow-md"
        >

            <!-- ICON -->
            <div class="w-14 h-14 bg-gray-200 rounded"></div>

            <!-- CONTENT -->
            <div class="flex-1 text-xs text-gray-900">
                <p class="font-semibold text-sm mb-1">
                    {{ doc.title }}
                </p>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                    <span>No : {{ doc.nomor }}</span>
                    <span>Kategori : {{ doc.kategori }}</span>
                    <span>Tanggal : {{ doc.tanggal }}</span>
                    <span>Ukuran : {{ doc.ukuran }}</span>
                    <span>Divisi : {{ doc.divisi }}</span>
                </div>
            </div>

            <!-- STATUS -->
            <div class="bg-white text-xs px-3 py-1 rounded-full shadow">
                {{ doc.status }}
            </div>

        </div>

    </div>

</div>

</template>