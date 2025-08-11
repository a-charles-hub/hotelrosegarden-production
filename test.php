<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Vanilla JS Responsive Slider</title>
<style>
  body {
    font-family: Arial, sans-serif;
    padding: 20px;
  }

  .content-amenities {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    gap: 20px;
    padding: 10px 0;
    scrollbar-width: none; /* Firefox */
  }
  .content-amenities::-webkit-scrollbar {
    display: none; /* Chrome, Safari */
  }

  .card {
    flex: 0 0 auto;
    width: 280px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  .card-img img {
    width: 100%;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    display: block;
  }

  .card-content {
    padding: 10px;
  }

  .card-title h3 {
    margin: 0 0 5px;
    font-size: 1.2rem;
  }

  .card-category h4 {
    margin: 0 0 10px;
    font-weight: normal;
    color: #666;
    text-transform: uppercase;
    font-size: 0.85rem;
  }

  .card-description p {
    font-size: 0.9rem;
    margin: 0;
    color: #444;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .card {
      width: 220px;
    }
  }

  @media (max-width: 480px) {
    .card {
      width: 180px;
    }
  }

  /* Controls */
  .slider-controls {
    margin-top: 15px;
    text-align: center;
  }

  .slider-controls button {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 8px 16px;
    margin: 0 10px;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    user-select: none;
  }

  .slider-controls button:disabled {
    background-color: #aaa;
    cursor: not-allowed;
  }
</style>
</head>
<body>

<div class="content content-amenities">
  <div class="card animate" data-category="Recreation">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1567943346767-72780dd14cd5?q=80&w=600&auto=format&fit=crop" alt="Cricket Grounds" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>THE CRICKET GROUNDS</h3>
      </div>
      <div class="card-category">
        <h4>Recreation</h4>
      </div>
      <div class="card-description">
        <p>Enjoy a game or practice your swing on our well-maintained cricket field...</p>
      </div>
    </div>
  </div>

  <div class="card animate" data-category="Recreation">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1575783970733-1aaedde1db74?q=80&w=600&auto=format&fit=crop" alt="Play & Explore" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>PLAY & EXPLORE</h3>
      </div>
      <div class="card-category">
        <h4>Recreation</h4>
      </div>
      <div class="card-description">
        <p>A fun-filled spot for children to laugh, run, and climb!...</p>
      </div>
    </div>
  </div>

  <div class="card animate" data-category="Dining">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1494346480775-936a9f0d0877?q=80&w=600&auto=format&fit=crop" alt="Indoor Dining" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>INDOOR DINING</h3>
      </div>
      <div class="card-category">
        <h4>Dining</h4>
      </div>
      <div class="card-description">
        <p>Enjoy a comfortable and inviting dining experience indoors...</p>
      </div>
    </div>
  </div>

    <div class="card animate" data-category="Dining">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1494346480775-936a9f0d0877?q=80&w=600&auto=format&fit=crop" alt="Indoor Dining" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>INDOOR DINING</h3>
      </div>
      <div class="card-category">
        <h4>Dining</h4>
      </div>
      <div class="card-description">
        <p>Enjoy a comfortable and inviting dining experience indoors...</p>
      </div>
    </div>
  </div>

    <div class="card animate" data-category="Dining">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1494346480775-936a9f0d0877?q=80&w=600&auto=format&fit=crop" alt="Indoor Dining" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>INDOOR DINING</h3>
      </div>
      <div class="card-category">
        <h4>Dining</h4>
      </div>
      <div class="card-description">
        <p>Enjoy a comfortable and inviting dining experience indoors...</p>
      </div>
    </div>
  </div>

    <div class="card animate" data-category="Dining">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1494346480775-936a9f0d0877?q=80&w=600&auto=format&fit=crop" alt="Indoor Dining" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>INDOOR DINING</h3>
      </div>
      <div class="card-category">
        <h4>Dining</h4>
      </div>
      <div class="card-description">
        <p>Enjoy a comfortable and inviting dining experience indoors...</p>
      </div>
    </div>
  </div>

    <div class="card animate" data-category="Dining">
    <div class="card-img amenity-img">
      <img src="https://images.unsplash.com/photo-1494346480775-936a9f0d0877?q=80&w=600&auto=format&fit=crop" alt="Indoor Dining" />
    </div>
    <div class="card-content">
      <div class="card-title">
        <h3>INDOOR DINING</h3>
      </div>
      <div class="card-category">
        <h4>Dining</h4>
      </div>
      <div class="card-description">
        <p>Enjoy a comfortable and inviting dining experience indoors...</p>
      </div>
    </div>
  </div>
  <!-- Add more cards similarly -->
</div>

<div class="slider-controls">
  <button id="prevBtn" aria-label="Previous">Prev</button>
  <button id="nextBtn" aria-label="Next">Next</button>
</div>

<script>
  const container = document.querySelector('.content-amenities');
  const nextBtn = document.getElementById('nextBtn');
  const prevBtn = document.getElementById('prevBtn');
  const scrollAmount = 300;

  nextBtn.addEventListener('click', () => {
    container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  });

  prevBtn.addEventListener('click', () => {
    container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  });

  function updateButtons() {
    prevBtn.disabled = container.scrollLeft === 0;
    nextBtn.disabled = container.scrollLeft + container.clientWidth >= container.scrollWidth - 1;
  }

  container.addEventListener('scroll', updateButtons);
  window.addEventListener('resize', updateButtons);

  updateButtons();
</script>

</body>
</html>
