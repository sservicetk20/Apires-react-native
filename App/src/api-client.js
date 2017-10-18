const URL = 'https://backend.dev/info'

function getInfo() {
  return fetch(URL)
    .then(response => response.json())
    .then(data => {
    	console.warn('data', data)
    })
}

export { getInfo }

