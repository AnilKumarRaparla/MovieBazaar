document.addEventListener("DOMContentLoaded", () => {
    // Sample movie data
    const movies = [
        { id: 1, title: "SALAAR", price: 150, image: "C:\Users\Anil\Desktop\Res_pic.jpg" },
        { id: 2, title: "PUSHPA 2", price: 200, image: "pushpa2.jpg" },
        { id: 3, title: "DEVARA", price: 250, image: "devara.jpg" },
        { id: 4, title: "RRR", price: 220, image: "rrr.jpg" },
        { id: 5, title: "AVATAR 2", price: 300, image: "avatar2.jpg" },
        { id: 6, title: "PS-2", price: 180, image: "ps2.jpg" }
        // Add more movies with their images here
    ];
    
        // Add more movies here
    const seatData = {
        A: [
            { id: 1, number: "A1", booked: false },
            { id: 2, number: "A2", booked: true },
            { id: 3, number: "A3", booked: false },
            // ... Add more seats here ...
        ],
        B: [
            { id: 11, number: "B1", booked: false },
            { id: 12, number: "B2", booked: false },
            { id: 13, number: "B3", booked: true },
            // ... Add more seats here ...
        ],
        C: [
            { id: 21, number: "C1", booked: false },
            { id: 22, number: "C2", booked: true },
            { id: 23, number: "C3", booked: false },
            // ... Add more seats here ...
        ],
        // ... Add more rows here ...
    };
    
   // Function to display seats in the desired format
function displaySeatsInFormat(seatData) {
    for (const row in seatData) {
        const seats = seatData[row].map(seat => {
            if (seat.booked) {
                return `<div class="seat booked">${seat.number}</div>`;
            } else {
                return `<div class="seat">${seat.number}</div>`;
            }
        }).join(" ");
        console.log(row + ": " + seats);
    }
}

// Call the function to display the seats
displaySeatsInFormat(seatData);
    
    
    // Generate the seats array from the seatData object
    const seats = Object.values(seatData).flat();

    // Other global variables
    let selectedMovie = null;
    let selectedSeats = [];

    // Function to populate movie selection options
    function populateMovieOptions() {
        const movieList = document.querySelector(".movie-list");
    
        movies.forEach(movie => {
            const movieCard = document.createElement("div");
            movieCard.classList.add("movie-card");
            movieCard.innerHTML = `
                <img src="${movie.image}" alt="${movie.title}" class="movie-image">
                <h3>${movie.title}</h3>
                <p>Price: ₹${movie.price}</p>
                <button class="select-movie" data-movie-id="${movie.id}">Select Movie</button>
            `;
            movieCard.querySelector(".select-movie").addEventListener("click", () => {
                selectedMovie = movie;
                updateTotalPrice();
                document.getElementById("bookingMovie").textContent = movie.title;
            });
            movieList.appendChild(movieCard);
        });
    }
    
    // Function to update seat selection UI
    function updateSeatSelection() {
        const seatMap = document.querySelector(".seat-map");
        seatMap.innerHTML = ""; // Clear existing seats

        seats.forEach(seat => {
            const seatElement = document.createElement("div");
            seatElement.classList.add("seat");
            if (seat.booked) {
                seatElement.classList.add("booked");
            } else if (selectedSeats.includes(seat.id)) {
                seatElement.classList.add("selected");
            }
            seatElement.textContent = seat.number;

            seatElement.addEventListener("click", () => {
                if (!seat.booked) {
                    if (selectedSeats.includes(seat.id)) {
                        selectedSeats = selectedSeats.filter(id => id !== seat.id);
                    } else {
                        selectedSeats.push(seat.id);
                    }
                    updateSeatSelection();
                    updateTotalPrice();
                }
            });

            seatMap.appendChild(seatElement);
        });
    }

    // Function to calculate and update total price
   // Function to calculate and update total price and details
function updateTotalPrice() {
    if (selectedMovie) {
        const basePricePerSeat = selectedMovie.price;
        const gstRate = 0.18; // GST rate

        const subTotal = selectedSeats.length * basePricePerSeat;
        const gstAmount = subTotal * gstRate;
        const totalAmount = subTotal + gstAmount;

        const totalPriceElement = document.getElementById("totalPrice");
        totalPriceElement.textContent = `₹${totalAmount.toFixed(2)}`;

        const bookingMovieElement = document.getElementById("bookingMovie");
        bookingMovieElement.textContent = selectedMovie.title;

        const bookingSeatsElement = document.getElementById("bookingSeats");
        bookingSeatsElement.textContent = selectedSeats.join(", ");

        const bookingTotalPriceElement = document.getElementById("bookingTotalPrice");
        bookingTotalPriceElement.textContent = `₹${totalAmount.toFixed(2)}`;
    }
}


    // Event listener for confirming seats
    document.getElementById("confirmSeats").addEventListener("click", () => {
        if (!selectedMovie) {
            alert("Please select a movie.");
            return;
        }
        if (selectedSeats.length === 0) {
            alert("Please select at least one seat.");
            return;
        }

        // ... Your code to handle seat confirmation ...

        // Update the total price
        updateTotalPrice();
    });

    // Initialize the movie options and seat selection UI
    populateMovieOptions();
    updateSeatSelection();
});
