using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GreedyAlgorithm
{

    internal class Objects
    {
        public double Waga { get; set; }
        public double Wartość { get; set; }
        public bool Wybór_opt { get; set; }
        public bool Wybór_akt { get; set; }
        //public string Jednostka { get; set; }
        public Objects(double waga, double wartość, bool wybór_opt, bool wybór_akt/*, string jednostka*/)
        {
            Waga = waga;
            Wartość = wartość;
            Wybór_opt = wybór_opt;
            Wybór_akt = wybór_akt;
            //Jednostka = jednostka;
        }
        public Objects()
        {
            
        }
    }
}
