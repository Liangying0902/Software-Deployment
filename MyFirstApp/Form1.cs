using System.Reflection.Emit;
using MyLibrary;

namespace MyFirstApp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            var greeter = new Greeter();
            label1.Text = greeter.GetMessage();
        }
    }
}