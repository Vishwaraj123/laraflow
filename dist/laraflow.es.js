import { ref as o, createApp as e } from "vue";
const t = {
  __name: "Flow",
  setup(i) {
    return o([
      { id: "1", type: "input", label: "Start Node", position: { x: 250, y: 5 } },
      { id: "2", label: "Processing Node", position: { x: 100, y: 100 } },
      { id: "3", label: "End Node", position: { x: 400, y: 100 } }
    ]), (n, a) => " sdfsf ";
  }
}, p = e(t);
p.mount("#laraflow-app");
