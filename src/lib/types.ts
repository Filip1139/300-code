import type { StatsBoxType } from "./enum";

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
