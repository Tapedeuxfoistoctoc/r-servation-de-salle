// Script pour gérer les fonctionnalités de l'application


const navbarLinks = document.querySelectorAll('.navbar a');
const roomList = document.getElementById('room-list');
const reservationForm = document.getElementById('reservation-form');
const userReservations = document.getElementById('user-reservations');



//  formulaire de réservation
reservationForm.addEventListener('submit', submitReservation);

// Appel les fonctions nécessaires lors du chargement de la page
activateNavbarLink();
displayAvailability();
displayUserReservations();
