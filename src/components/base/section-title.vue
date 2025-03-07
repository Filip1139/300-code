<script setup lang="ts">
const props = defineProps<{
  title: string;
  description?: string;
  class?: string;
}>();
</script>

<template>
  <div :class="props.class">
    <h2 class="text-4xl font-semibold">{{ title }}</h2>
    <p v-if="description" class="text-base mt-4 text-dark font-light">
      {{ description }}
    </p>
  </div>
</template>
