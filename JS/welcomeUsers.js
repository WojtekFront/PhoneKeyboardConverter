function welcomeUsers(fullArray) { // takes an array of objects and divides them on the basis of the received data
  if (Array.isArray(fullArray)) {
    for (n = 0; fullArray.length > n; n++) {
      let zmienna = fullArray[n];
      if (
        !(typeof zmienna.username === "string") ||
        !(typeof zmienna.birthYear === "number") ||
        !(typeof zmienna.salary === "number")
      ) {
        console.log("error");
      } else if (zmienna.salary >= 15000) {
        console.log("Witaj, prezesie!");
      } else if (zmienna.salary < 5000) {
        console.log(zmienna.username + ", szykuj się na podwyżkę!");
      } else if (zmienna.birthYear % 2 == 0) {
        let ageUser = new Date().getFullYear() - zmienna.birthYear;
        console.log(`Witaj, ${zmienna.username}! W tym roku kończysz ${ageUser} lat!` );
      } else if (zmienna.birthYear % 2 == 1) {
        console.log(`${zmienna.username}, jesteś zwolniony! `);
      } else {
      }
    }
  }
}

var usersArr = [
  { username: "Jan Kowalski", birthYear: 1983, salary: 4200 },
  { username: "Anna Nowak", birthYear: 1994, salary: 7500 },
  { username: "Jakub Jakubowski", birthYear: 1985, salary: 18000 },
  { username: "Piotr Kozak", birthYear: 2000, salary: 4999 },
  { username: "Marek Sinica", birthYear: 1989, salary: 7200 },
  { username: "Kamila Wiśniewska", birthYear: 1972, salary: 6800 },
];

welcomeUsers(usersArr);
