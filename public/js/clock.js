auctionData.forEach(auction => {
    auction.end = new Date(auction.end).getTime(); // Get end time in milliseconds
    auction.last_updated = new Date(auction.last_updated).toLocaleString(); // Converts timestamp to local time string
    
    // Countdown function
    const countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = auction.end - now;

        // Calculate time components
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the corresponding element
        document.getElementById(`time-remaining-${auction.uuid}`).innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById(`time-remaining-${auction.uuid}`).innerHTML = "Auction Ended";
        }
    }, 1000);
});