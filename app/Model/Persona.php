<?php
class MiPersona
{
    private $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    // Implementación de exchangeArray()
    public function exchangeArray(array $data)
    {
        $this->data = $data;
    }

    // Método para obtener los datos como un array (útil si quieres hacer debugging)
    public function getArrayCopy(): array
    {
        return $this->data;
    }

    // Método __toString para mostrar los datos
    public function __toString(): string
    {
        $output = '';
        foreach ($this->data as $key => $value) {
            $output .= ucfirst($key) . ': ' . htmlspecialchars($value) . "\n";
        }
        return $output;
    }
}
