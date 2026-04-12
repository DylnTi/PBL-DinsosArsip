<script setup lang="ts">
import AppContent from '@/components/AppContent.vue';
import AppShell from '@/components/AppShell.vue';
import AppSidebar from '@/components/AppSidebar.vue';
import AppSidebarHeader from '@/components/AppSidebarHeader.vue';

// 🔥 TAMBAH INI
import Header from '@/components/header.vue';
import Footer from '@/components/footer.vue';

import type { BreadcrumbItem } from '@/types';

type Props = {
    breadcrumbs?: BreadcrumbItem[];
};

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <AppShell variant="sidebar">

        <!-- SIDEBAR -->
        <AppSidebar />

        <AppContent variant="sidebar" class="overflow-x-hidden">

            <!-- 🔥 HEADER KAMU -->
            <Header />

            <!-- (optional, kalau masih mau breadcrumb) -->
            <AppSidebarHeader :breadcrumbs="breadcrumbs" />

            <!-- CONTENT -->
            <div class="p-6">
                <slot />
            </div>

            <!-- 🔥 FOOTER KAMU -->
            <Footer />

        </AppContent>

    </AppShell>
</template>