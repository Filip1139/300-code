<script setup lang="ts">
import { cn } from "@/lib/cn";
import type { StatsBoxProps } from "@/lib/types";

import backgroundImg from "@/assets/stats-decor.png";
import { StatsBoxType } from "@/lib/enum";
import HeadCircuit from "@/assets/icons/head-circuit.svg?url";
import Team from "@/assets/icons/users-three.svg?url";
import Star from "@/assets/icons/star.svg?url";

const props = defineProps<{
  data: StatsBoxProps;
  class?: string;
}>();

// Destructure the data object. Not reactive but we don't need reactive data here
const { description, value, attributes } = props.data;

// I should use enum for icons, but  it's mocked data so I leave it like this
const icons: Record<string, string> = {
  "head-circuit": HeadCircuit,
  team: Team,
  star: Star,
};
</script>

<template>
  <div
    :class="
      cn(
        'bg-gray-light pl-[1.6rem] pr-5 pb-8 pt-[1.6rem] flex flex-col relative rounded-xs',
        {
          'col-span-full lg:col-span-2': attributes.type === StatsBoxType.WIDE,
          'md:col-span-2 lg:col-span-1':
            attributes.type === StatsBoxType.DEFAULT,
        },
        props.class
      )
    "
  >
    <img
      v-if="attributes.type === StatsBoxType.WIDE"
      :src="backgroundImg"
      class="absolute top-1/2 -translate-y-1/2 right-0 object-cover h-[80%] lg:h-auto"
      loading="lazy"
      alt=""
    />

    <img :src="icons[data.icon]" class="" width="48" height="48" alt="" />
    <div
      class="pt-[clamp(3rem,var(--base-size,10vw),11rem)] lg:[--base-size:20vw] mt-auto"
    >
      <h3
        :class="
          cn('!leading-none mb-2', {
            'text-[clamp(5.25rem,var(--base-size,20vw),10rem)] lg:[--base-size:15vw] tracking-[-.04em] ':
              attributes.type === StatsBoxType.WIDE,
            'text-[clamp(4.25rem,var(--base-size,15vw),6rem)] lg:[--base-size:10vw] tracking-[-.02em] lg:mb-4 font-medium':
              attributes.type === StatsBoxType.DEFAULT,
          })
        "
      >
        {{ value }}
      </h3>
      <p class="text-xl-clamp text-gray tracking-[-.01em]">{{ description }}</p>
    </div>
  </div>
</template>
