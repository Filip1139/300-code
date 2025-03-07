<script setup lang="ts">
import { type Component } from "vue";
import data from "./mock-data/data.json";
import StatsSections from "./components/stats-section/stats-section.vue";

const sections = data.data.sections;

// string should be a component name enum
const components: Record<string, Component> = {
  stats: StatsSections,
};
</script>

<template>
  <template v-for="section in sections" :key="section.id">
    <component
      v-if="components[section.name]"
      :is="components[section.name]"
      :data="section"
    />
  </template>
</template>
