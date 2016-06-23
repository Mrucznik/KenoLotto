/**
 * Created by Mrucznik on 22.06.2016.
 */

function createLottoBalls()
{
    $('#ballcontainer').empty();
    var ilosc_kul = $('#liczba_kul').prop('value');
    for(var i=0; i<ilosc_kul; i++)
    {
        $('#ballcontainer').append("<span class='lottoball'> <input id='lb_nr_" + i + "' name='ball_" + i +  "' class='lottoball' type='number' min='1' max='50' placeholder='_' onchange='checkLottoBall(" + i + ");' aria-required='true' required> </span>");
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
            if($('#lb_nr_'+i).val() !== undefined)
            {
                if(i!==kula_idx && $('#lb_nr_'+i).val() === kula.val())
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