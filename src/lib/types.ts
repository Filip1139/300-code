import type { StatsBoxType } from "./enum";

export type SectionHeader = {
  title: string;
  description?: string;
};

export type StatsSectionProps = {
  id: number;
  name: string // Section.STATS enum here
  header: SectionHeader;
  content: StatsBoxProps[];
};

export type StatsBoxProps = {
  id: number;
  value: number;
  description: string;
  icon: string;
  attributes: {
    type: StatsBoxType;
    showBackground?: boolean;
  };
};
