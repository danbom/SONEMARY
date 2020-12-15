//영화 목록 임시 데이터 (영화: 제목, 포스터이미지, top평가항목, 점수)
const movies = [
  {title: 'Spider-Man: Homecoming', poster: 'image/movie_spiderman_poster.jpg'},
  {title: 'Spider-Man: Far From Home', poster: 'image/poster_spiderman.png'},
  {title: 'Terminator: Dark Fate', poster: 'image/movie_terminator_poster.png'},
  {title: 'Princess Mononoke', poster: 'image/movie_mononoke_poster.png'},
  {title: 'Frozen', poster: 'image/movie_frozen_poster.png'}
]

const list = document.getElementById('list');
const key = document.getElementById('key');

function setList(group) {
  clearList();
  for (const movie of group) {
    const item = document.createElement('li');
    item.classList.add('list-group-item');

    var img = document.createElement('img');
    img.src = movie.poster;
    img.className="section6-img";

    item.appendChild(img);

    const title = document.createTextNode(movie.title);
    item.appendChild(title);

    //item.className="section6-contents";
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

function printKey(key) {
  var str = document.getElementById("key");
  str.innerHTML = key;
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
  printKey(value);
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
