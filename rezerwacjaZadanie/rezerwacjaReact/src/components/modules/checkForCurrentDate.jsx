
export const isAvailable = (startDateTime, endTime) => {
    const now = new Date();

    console.log("datetime: ", startDateTime);
    console.log("time: ", endTime);

    if (startDateTime === undefined || endTime === undefined) {
        console.log("values are undefined");
        return true
    }
    
    // Konwertuj datę rozpoczęcia z datetime-local
    const startDate = new Date(startDateTime);

    // Rozbij godzinę zakończenia na godziny i minuty
    const [endHours, endMinutes] = endTime.split(':').map(Number);

    // Ustaw godzinę zakończenia w tej samej dacie co data rozpoczęcia
    const endDate = new Date(startDate);
    endDate.setHours(endHours, endMinutes, 0, 0);

    // Sprawdź, czy obecny czas jest poza zakresem rezerwacji
    return (now < startDate || now > endDate) ;
};
