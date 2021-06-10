<?php

namespace App\Http\Controllers;

use App\Models\Bateau;
use App\Models\Footballcamp;
use http\Exception;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class BateauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('bateaux');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function show(Bateau $bateau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bateau $bateau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bateau $bateau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bateau  $bateau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bateau $bateau)
    {
        //
    }


    /**
     * Retrieve the booking demand and send it in mail
     *
     * @param Request $request
     */
    public function booking(Request $request)
    {
        require base_path("vendor/autoload.php");

        $name = htmlentities($request->name);
        $email = htmlentities($request->email);
        $radiotrip = htmlentities($request->radiotrip);

        $from = htmlentities($request->from);
        $to = htmlentities($request->to);
        $datestart = htmlentities($request->datestart);
        $dateend = htmlentities($request->dateend);
        $adult = htmlentities($request->adult);
        $child = htmlentities($request->child);

        $moyen = htmlentities($request->moyen);
        $marque = htmlentities($request->marque);
        $modele = htmlentities($request->moyen);
        $longueur = htmlentities($request->longueur);
        $hauteur = htmlentities($request->hauteur);
        $largeur = htmlentities($request->largeur);

        // When we use Voyage Retour différent

        if($radiotrip == 'Voyage retour différent'){
            $from1 = htmlentities($request->from1);
            $to1 = htmlentities($request->to1);
            $datestart1 = htmlentities($request->datestart1);
            $dateend1 = htmlentities($request->dateend1);
            $adult1 = htmlentities($request->adult1);
            $child1 = htmlentities($request->child1);
            $moyen1 = htmlentities($request->moyen1);
            $marque1 = htmlentities($request->marque1);
            $modele1 = htmlentities($request->moyen1);
            $longueur1 = htmlentities($request->longueur1);
            $hauteur1 = htmlentities($request->hauteur1);
            $largeur1 = htmlentities($request->largeur1);
        }






        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'soufi.travel.services@gmail.com';   //  sender username
            $mail->Password = 'krpmykkeomjomiyr';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('soufi.travel.services@gmail.com', 'soufi.travel.services@gmail.com');
            $mail->addAddress('soufi.travel.services@gmail.com');

            $mail->isHTML(true);

            $mail->Subject = "Booking demand from : ".$name;
            $mail->Body    = "<span style='font-size: 1.3em;font-weight: bold'> $name ($email) want to travel : $radiotrip</span><p>From $from to $to</p><p>Arrivée : $datestart - Départ : $dateend</p><p>Adultes  : $adult - Enfants : $child</p><p>Moyen de transport  : $moyen&nbsp;(Marque: $marque, Modèle: $modele, Longueur : $longueur , Hauteur : $hauteur , Largeur : $largeur)</p>";

            if($radiotrip == 'Voyage retour différent'){
                $mail->Body .= "<p>From $from1 to $to1</p><p>Arrivée : $datestart1 - Départ : $dateend1</p><p>Adultes  : $adult1 - Enfants : $child1</p><p>Moyen de transport  : $moyen1&nbsp;(Marque: $marque1, Modèle: $modele1, Longueur : $longueur1 , Hauteur : $hauteur1 , Largeur : $largeur1)</p>";
            }

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
            return back()->with('error','Message could not be sent.');
        }
    }
}
