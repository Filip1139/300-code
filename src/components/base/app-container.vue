<script lang="ts" setup>
import { cn } from "@/lib/cn";

const props = defineProps<{
  class?: string;
}>();
</script>
<template>
  <div :class="cn('w-[min(100%,1240px)] mx-auto px-4', props.class)">
    <slot />
  </div>
</template>
