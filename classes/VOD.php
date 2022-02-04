<?php
class VOD {
    protected array $film = [
        "Le seigneur des Anneaux",
        "Gravity",
        "Deadpool",
        "Docteur Strange",
        "Raya et le Dernier Dragon",
        ];

    protected int $tarif = 25;
    protected static int $abo = 42;

    /**
     * @return array|string[]
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param array|string[] $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return int
     */
    public function getTarif(): int
    {
        return $this->tarif;
    }

    /**
     * @param int $tarif
     */
    public function setTarif(int $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public static function getAbo(): int
    {
        return self::$abo;
    }

    /**
     * @param int $abo
     */
    public static function setAbo(int $abo): void
    {
        self::$abo = $abo;
    }

    public static function aboNumber () : void {
        self::$abo++;
    }

    public static function getAboNumber (): int {
        return self::$abo++;
    }
}