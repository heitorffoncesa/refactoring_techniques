<?php declare(strict_types=1);

namespace Alura\SubstituirSubclassesPorCampo;

class Microondas
{
    private int $voltagem;

    private function __construct(int $voltagem)
    {
        $this->voltagem = $voltagem;
    }

    public function getVoltagem(): int
    {
        return $this->voltagem;
    }

    /**
     * Factory Method
     *
     * @return Microondas
     */
    public static function criarMicroondas110(): Microondas
    {
        return new Microondas(110);
    }

    /**
     * Factory Method
     * 
     * @return Microondas
     */
    public static function criarMicroondas220(): Microondas
    {
        return new Microondas(220);
    }
}
