<script setup lang="ts">
const props = defineProps<{
  title: string;
  description?: string;
  class?: string;
}>();
</script>

<template>
  <div :class="props.class">
    <h2 class="text-3xl font-semibold tracking-[-.02em]">{{ title }}</h2>
    <p v-if="description" class="text-base mt-3 text-dark font-light">
      {{ description }}
    </p>
  </div>
</template>
