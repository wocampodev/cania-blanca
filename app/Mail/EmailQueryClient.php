<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailQueryClient extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Consulta enviada con éxito';
    public $client;
    public $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->company = [
            //'phone' => '962863959/969084311',
            //'email' => 'ventas@mcc-refrigeracion.com'
            'phone' => '(+51) 939 204 100',
            'email' => 'canablanca.fino.destilado@gmail.com'
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.queries.client');
    }
}
