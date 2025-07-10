const btn =document.getElementById('menu-btn')
const nav =document.getElementById('menu')

btn.addEventListener('click',()=>{
    btn.classList.toggle('open')
    nav.classList.toggle('flex')
    nav.classList.toggle('hidden')
})

  const customers = [
      {
        img: 'Photos/person1.jpg',
        text: 'Milk is an excellent source of calcium and phosphorus...',
        name: 'Jared Farrendous',
        role: 'Shopkeeper in New Zealand',
      },
      {
        img: 'Photos/person2.jpg',
        text: 'I drink milk every morning, it gives me energy and clarity.',
        name: 'Elena M.',
        role: 'Yoga Instructor in Germany',
      },
      {
        img: 'Photos/person3.jpg',
        text: 'Thanks to milk, my kids have strong bones and teeth.',
        name: 'Mohammed R.',
        role: 'Father of three in UAE',
      },
      {
        img: 'Photos/person4.jpg',
        text: 'Milk has been in our family for generations. It’s our tradition.',
        name: 'Sophie K.',
        role: 'Farm Owner in Canada',
      },
      {
        img: 'Photos/person5.jpg',
        text: 'My skin got better after drinking organic milk daily!',
        name: 'Ava L.',
        role: 'Beauty Blogger in South Korea',
      },
      {
        img: 'Photos/person6.jpg',
        text: 'Strong bones and better focus — milk does the trick.',
        name: 'Luca B.',
        role: 'College Student in Italy',
      }
    ];

    function setCustomer(index) {
      const customer = customers[index];
      document.getElementById('main-img').src = customer.img;
      document.getElementById('review-text').innerText = customer.text;
      document.getElementById('review-name').innerText = customer.name;
      document.getElementById('review-role').innerText = customer.role;
    }