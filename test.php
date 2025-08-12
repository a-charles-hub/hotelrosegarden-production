<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    .booking-bar {
  display: flex;
  gap: 16px;
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  background: #fff;
  padding: 24px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
  max-width: 600px;
  margin: 20px auto;
}

.booking-item {
  display: flex;
  flex-direction: column;
  flex: 1;
  min-width: 110px;
}

.booking-item label {
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 8px;
  color: #222;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

.date-btn, .guests-btn {
  padding: 10px 14px;
  font-size: 15px;
  text-align: left;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #fff;
  color: #222;
  cursor: pointer;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
  box-shadow: inset 0 0 0 1px #ddd;
}

.date-btn:hover, .guests-btn:hover,
.date-btn:focus-visible, .guests-btn:focus-visible {
  outline: none;
  border-color: #ff385c;
  box-shadow: 0 0 0 3px rgb(255 56 92 / 0.3);
}

.booking-btn {
  flex-shrink: 0;
  background-color: #ff385c;
  color: white;
  font-weight: 700;
  border: none;
  border-radius: 10px;
  padding: 0 24px;
  font-size: 16px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  box-shadow: 0 6px 12px rgb(255 56 92 / 0.5);
  transition: background-color 0.3s ease;
}

.booking-btn:hover,
.booking-btn:focus-visible {
  background-color: #e02c4d;
  outline: none;
}

.booking-btn i {
  font-size: 18px;
}

/* flatpickr overrides */
.flatpickr-calendar {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
  border-radius: 12px !important;
  box-shadow: 0 10px 25px rgb(0 0 0 / 0.15) !important;
  border: none !important;
}

.flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange {
  background: #ff385c !important;
  color: white !important;
  border-radius: 8px !important;
  box-shadow: none !important;
}

.flatpickr-day.inRange {
  background: #ff385c33 !important;
  color: #ff385c !important;
  border-radius: 0 !important;
  box-shadow: none !important;
}

.flatpickr-months {
  border-bottom: none !important;
}

.flatpickr-weekday {
  font-weight: 600 !important;
  color: #777 !important;
}

.flatpickr-day.today {
  border-color: #ff385c !important;
}

.flatpickr-month {
  color: #ff385c !important;
  font-weight: 700 !important;
}

  </style>
  <div class="booking-bar">
  <form action="" class="booking-form" onsubmit="return false;">
    <div class="booking-item">
      <label for="checkinBtn">Check in</label>
      <button type="button" id="checkinBtn" class="date-btn" aria-haspopup="dialog" aria-expanded="false" aria-controls="flatpickr-calendar">
        Add dates
      </button>
      <input type="hidden" id="checkin" name="checkin" />
    </div>

    <div class="booking-item">
      <label for="checkoutBtn">Check out</label>
      <button type="button" id="checkoutBtn" class="date-btn" aria-haspopup="dialog" aria-expanded="false" aria-controls="flatpickr-calendar">
        Add dates
      </button>
      <input type="hidden" id="checkout" name="checkout" />
    </div>

    <div class="booking-item">
      <label for="guestsBtn">Guests</label>
      <button type="button" id="guestsBtn" class="guests-btn">Add guests</button>
      <input type="hidden" id="guests" name="guests" value="1" />
    </div>

    <button class="booking-btn" aria-label="Search" type="submit">
      <i class="fa-solid fa-magnifying-glass"></i> Search
    </button>
  </form>
</div>

<!-- Hidden input for flatpickr -->
<input type="text" id="flatpickrInput" style="position:absolute; left:-9999px; top:-9999px;" />

<!-- Include flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
  const checkinBtn = document.getElementById('checkinBtn');
  const checkoutBtn = document.getElementById('checkoutBtn');
  const checkinInput = document.getElementById('checkin');
  const checkoutInput = document.getElementById('checkout');
  const flatpickrInput = document.getElementById('flatpickrInput');

  const fp = flatpickr(flatpickrInput, {
    mode: "range",
    minDate: "today",
    dateFormat: "M d, Y",
    onClose: function(selectedDates) {
      if (selectedDates.length === 2) {
        checkinBtn.textContent = fp.formatDate(selectedDates[0], "M d, Y");
        checkoutBtn.textContent = fp.formatDate(selectedDates[1], "M d, Y");
        checkinInput.value = selectedDates[0].toISOString().split("T")[0];
        checkoutInput.value = selectedDates[1].toISOString().split("T")[0];
      }
    }
  });

  checkinBtn.addEventListener("click", () => fp.open());
  checkoutBtn.addEventListener("click", () => fp.open());
</script>

</body>
</html>