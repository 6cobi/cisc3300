const cats = [
  {
    name: "Charlie",
    adoptionStatus: "available",
  },
  {
    name: "Lily",
    adoptionStatus: "not-available",
  },
  {
    name: "Coco",
    adoptionStatus: "available",
  },
  {
    name: "Oreo",
    adoptionStatus: "not-available",
  },
  {
    name: "Luna",
    adoptionStatus: "available",
  },
  {
    name: "Milo",
    adoptionStatus: "available",
  },
  {
    name: "Lola",
    adoptionStatus: "not-available",
  },
  {
    name: "Leo",
    adoptionStatus: "available",
  },
  {
    name: "Willow",
    adoptionStatus: "available",
  },
  {
    name: "Bella",
    adoptionStatus: "not-available",
  },
  {
    name: "Max",
    adoptionStatus: "available",
  },
  {
    name: "Cleo",
    adoptionStatus: "available",
  },
  {
    name: "Lucy",
    adoptionStatus: "not-available",
  },
  {
    name: "Daisy",
    adoptionStatus: "available",
  },
];

const cat = { name: "Pinecone", age: 13, type: "Munchkin", cuteness: 9001 };

const availableCats = [];

for (let i = 0; i < cats.length; i++) {
  if (cats[i].adoptionStatus === "available") {
    availableCats.push(cats[i].name);
  }
}

document.write(
  `<p>I have newly adopted the following cats: ${availableCats.join(", ")}.</p>`
);
