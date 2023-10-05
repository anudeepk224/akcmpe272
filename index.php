<?php
  // Array of inspirational quotes
  $quotes = [
    "Believe you can and you're halfway there. -Theodore Roosevelt",
    "The only way to do great work is to love what you do. -Steve Jobs",
    "Your time is limited, don't waste it living someone else's life. -Steve Jobs",
    "It always seems impossible until it's done. -Nelson Mandela",
    "The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt"
  ];

  // Get a random quote from the array
  $randomQuote = $quotes[array_rand($quotes)];

  // Output the quote
  echo "<blockquote><p>$randomQuote</p></blockquote>";
?>
