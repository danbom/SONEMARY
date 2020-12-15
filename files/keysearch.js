const movies = [
  {title: 'Spider-Man: Homecoming'},
  {title: 'Spider-Man: Far From Home'},
  {title: 'Terminator: Dark Fate'},
  {title: 'Princess Mononoke'},
  {title: 'Frozen'}
]

const list = document.getElementById('list');

function setList(group) {
  clearList();
  for (const moive of group) {
    const item = document.createElement('li');
    item.classList.add('list-group-item');
    const text = document.createTextNode(moive.title);
    item.appendChild(text);
    list.appendChild(item);
  }
  if (group.length === 0){
    setNoResults();
  }
}

function clearList() {
  while (list.firstChild) {
    list.removeChild(list.firstChild);
  }
}

function setNoResults() {
  const item = document.createElement('li');
  item.classList.add('list-group-item');
  const text = document.createTextNode('No results found');
  item.appendChild(text);
  list.appendChild(item);
}

function computeRelevancy(title, searchTerm) {
  let value = title.trim().toLowerCase();
  if (value === searchTerm) {
    return 2;
  } else if (value.startsWith(searchTerm)) {
    return 1;
  } else if (value.includes(searchTerm)) {
    return 0;
  } else {
    return -1;
  }
}

const searchInput = document.getElementById('search');
searchInput.addEventListener('submit', (event) => {
  let value = document.getElementById('searchKey').value;
  if (value && value.trim().length > 0) {
    value = value.trim().toLowerCase();
    setList(movies.filter(movie => {
      return movie.title.toLowerCase().includes(value);
    }).sort((movie1, movie2) => {
      return computeRelevancy(movie2.title, value) - computeRelevancy(movie1.title, value);
    }));
  } else {
    clearList();
  }
  event.preventDefault();
});

function init() {
  document.getElementById('searchKey').focus();
}

// searchInput.addEventListener('input', (event) => {
//   let value = event.target.value;
//   if (value && value.trim().length > 0) {
//     value = value.trim().toLowerCase();
//     setList(movies.filter(movie => {
//       return movie.title.toLowerCase().includes(value);
//     }).sort((movie1, movie2) => {
//       return computeRelevancy(movie2.title, value) - computeRelevancy(movie1.title, value);
//     }));
//   } else {
//     clearList();
//   }
// })
