<script setup lang="ts">
import { computed } from 'vue';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { useInitials } from '@/composables/useInitials';
import type { User } from '@/types';

// 🔥 user dibuat optional biar aman
type Props = {
    user?: User | null;
    showEmail?: boolean;
};

const props = withDefaults(defineProps<Props>(), {
    showEmail: false,
    user: null,
});

const { getInitials } = useInitials();

// 🔥 ambil user dengan aman
const user = computed(() => props.user);

// 🔥 avatar aman (ga undefined)
const avatarSrc = computed(() => props.user?.avatar ?? '');

// 🔥 cek avatar ada atau tidak
const showAvatar = computed(() => {
    return props.user?.avatar && props.user.avatar !== '';
});
</script>

<template>
    <!-- 🔥 kalau belum login, ga render -->
    <div v-if="user" class="flex items-center gap-2">
        <Avatar class="h-8 w-8 overflow-hidden rounded-lg">
            <AvatarImage
                v-if="showAvatar"
                :src="avatarSrc"
                :alt="user?.name ?? ''"
            />
            <AvatarFallback class="rounded-lg text-black dark:text-white">
                {{ getInitials(user?.name ?? 'User') }}
            </AvatarFallback>
        </Avatar>

        <div class="grid flex-1 text-left text-sm leading-tight">
            <span class="truncate font-medium">
                {{ user?.name ?? 'Guest' }}
            </span>

            <span
                v-if="showEmail && user?.email"
                class="truncate text-xs text-muted-foreground"
            >
                {{ user.email }}
            </span>
        </div>
    </div>
</template>