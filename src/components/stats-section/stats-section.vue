<script setup lang="ts">
import AppContainer from "@/components/base/app-container.vue";
import SectionTitle from "@/components/base/section-title.vue";
import StatsBox from "./stats-box.vue";
import type { StatsSectionProps } from "@/lib/types";

defineProps<{
  data: StatsSectionProps;
}>();
</script>
<template>
  <section class="c-section c-section--stats py-[clamp(4rem,10vw,6rem)]">
    <AppContainer>
      <SectionTitle
        class="text-center mb-12"
        :title="data.header.title"
        :description="data.header.description"
      />

      <div class="grid md:grid-cols-4 gap-3">
        <StatsBox v-for="item in data.content" :key="item.id" :data="item" />
      </div>
    </AppContainer>
  </section>
</template>
