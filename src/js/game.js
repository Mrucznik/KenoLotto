/**
 * Created by Mrucznik on 22.06.2016.
 */

function createLottoBalls()
{
    var ball = $('#ballcontainer');
    ball.empty();
    var ilosc_kul = $('#liczba_kul').prop('value');
    for(var i=0; i<ilosc_kul; i++)
    {
        ball.append("<span class='lottoball'> <input id='lb_nr_" + i + "' name='ball_" + i +  "' class='lottoball' type='number' min='1' max='70' placeholder='_' onchange='checkLottoBall(" + i + ");' aria-required='true' required> </span>");
    }
}

function checkLottoBall(kula_idx)
{
    var ilosc_kul = $('#liczba_kul').val();
    var kula = $('#lb_nr_'+kula_idx);
    var kula_val = kula.val();

    if(kula_val !== undefined && kula_val % 1 == 0 )
    {
        for(var i=0; i<ilosc_kul; i++)
        {
            var ball = $('#lb_nr_'+i);
            if(ball.val() !== undefined)
            {
                if(i!==kula_idx && ball.val() === kula.val())
                {
                    alert('Liczba ' + kula.val() + ' była już wpisywana. Wybierz inną!');
                    kula.val('');
                    break;
                }
            }

        }
    }
    else
    {
        alert('Niepoprawny numer kuli!');
        kula.val('');
    }
}