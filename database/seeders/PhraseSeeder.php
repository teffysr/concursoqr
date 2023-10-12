<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Phrase;
use App\Models\Qr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class PhraseSeeder extends Seeder
{
    public function run()
    {
        $phases = [
            '“La fortuna está al lado de quien se atreve” (Virgilio)',
            '“Nunca pienso en las consecuencias de fallar un gran tiro… cuando se piensa en las consecuencias se está pensando en un resultado negativo” - Michael Jordan',
            '“No busques los errores, busca un remedio - Henry Ford',
            '“Tienes que hacer las cosas que crees que no puedes hacer” - Eleanor Roosevelt',
            '“Si te caíste ayer, levántate hoy” - H. G. Wells',
            '“Siempre parece imposible... hasta que se hace” - Nelson Mandela',
            '“Si la oportunidad no llama, construye una puerta” - Milton Berle',
            '“El valor de una idea radica en su uso” - Thomas Edison',
            '“Transforma tus heridas en sabiduría” - Oprah Winfrey',
            '“Solo aquellos que se arriesgan a ir demasiado lejos pueden descubrir lo lejos que pueden llegar” - T.S. Eliot',
            '“El 80% del exito se basa simplemente en existir” - Woody Allen. ',
            '“No pares cuando estés cansado. Para cuando hayas terminado” - Marilyn Monroe',
            '“No importa lo que te diga la gente, las palabras y las ideas pueden cambiar el mundo” - Robin Williams',
            '“Un optimista ve una oportunidad en toda calamidad, un pesimista ve una calamidad en toda oportunidad” - Winston Churchill',
            '“Aprovecha las oportunidades que aparezcan, donde quiera que estén” - Lakshmi Mittal',
            '“Un día despertarás y descubrirás que no tienes más tiempo para hacer lo que soñabas. El momento es ahora. Actúa” - Paulo Coelho',
            '“Apunta a la luna. Si fallas, podrías dar a una estrella” - William Clement Stone',
            '“Intenta y falla, pero nunca falles en intentarlo” - Jared Leto',
            '“Amarse a uno mismo es el comienzo de una larga vida romántica” - Oscar Wilde',
            '“El éxito es la capacidad de ir de fracaso en fracaso sin perder el entusiasmo” - Winston Churchill',
        ];

        $trafficQRs = Qr::where(['is_winner' => false])->get();
        $i = 0;
        foreach ($trafficQRs as $trafficQR) {
            $trafficQR->update(['phrase' => $phases[$i]]);
            $i++;
        }

        $prizeQRs = Qr::where(['is_winner' => true])->get();
        $i = 0;
        foreach ($prizeQRs as $prizeQR) {
            if ($i > 19) { $i = 0; }
            $prizeQR->update(['phrase' => $phases[$i]]);
            $i++;
        }

    }
}
