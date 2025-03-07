<script lang="ts" setup>
import { cn } from "@/lib/cn";

const props = defineProps<{
  class?: string;
}>();
</script>
<template>
  <div :class="cn('container mx-auto px-4', props.class)">
    <slot />
  </div>
</template>
