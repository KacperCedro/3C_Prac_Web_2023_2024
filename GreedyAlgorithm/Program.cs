using GreedyAlgorithm;

internal class Program
{
    public static List<Objects> Zawartość;
    public static double ŁadownośćPlecaka;
    public static double ciężar_bieżący;
    public static double wart_bieżąca;
    public static double CiężarOptymalny;
    public static double WartośćOptymalny;
    public static string Jednostka;

    private static void Main(string[] args)
    {
        string plik = "D:\Kacper Cedro\GreedyAlgorithm\Data.txt\";
        ReadDataFromFile(plik);

    }
    public static void ReadDataFromFile(string filepath)
    {
        Console.WriteLine(File.ReadAllLines(filepath)); 
    }
    public static void ShowTitle()
    {
        Console.WriteLine("Przedmiot Waga Wartość");
    }
    public static void ReadFile(string filePath)
    {
        //wczytaj plik
        ShowTitle();
        //write lista przedmiotów
        //write ładowność plcaka
    }
    public static void ShowFeedback()
    {
        ShowTitle();
        foreach (var item in Zawartość)
        {
            Console.Write(item.Waga.ToString() + ", " + item.Wartość + ", " + item.Wartość + ", " + Jednostka);
        }
        Console.WriteLine(CiężarOptymalny + ", " + WartośćOptymalny + ", " + Jednostka);
    }
    public static void Rozwiązuj(int k)
    {
        if (k < Zawartość.Count - 1)
        {
            Rozwiązuj(k + 1);
        }
        ciężar_bieżący += Zawartość[k].Waga;
        if (ciężar_bieżący <= ŁadownośćPlecaka)
        {
            wart_bieżąca += Zawartość[k].Wartość;
            Zawartość[k].Wybór_akt = true;
            if (wart_bieżąca > WartośćOptymalny)
            {
                CiężarOptymalny = ciężar_bieżący;
                WartośćOptymalny = wart_bieżąca;
                foreach (var item in Zawartość)
                {
                    item.Wybór_opt = item.Wybór_akt;
                }
            }
            if (k < Zawartość.Count - 1)
            {
                Rozwiązuj(k + 1);
            }
            Zawartość[k].Wybór_akt = false;
            wart_bieżąca = Zawartość[k].Wartość;
        }
        ciężar_bieżący -= Zawartość[k].Waga;
    }

    /*
     * 
        5 - ilość przedmiotów
        2 10 - pierwszy przedmiot
        5 10 - ...
        10 20 - ...
        20 20 - ...
        30 30 - piąty przedmiot
        50 - ładowność plecaka
     * 
     */

}