<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_user = null;

    #[ORM\Column]
    private ?int $no_empleado = null;

    #[ORM\Column]
    private ?bool $es_dev = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreUser(): ?string
    {
        return $this->nombre_user;
    }

    public function setNombreUser(string $nombre_user): static
    {
        $this->nombre_user = $nombre_user;

        return $this;
    }

    public function getNoEmpleado(): ?int
    {
        return $this->no_empleado;
    }

    public function setNoEmpleado(int $no_empleado): static
    {
        $this->no_empleado = $no_empleado;

        return $this;
    }

    public function isEsDev(): ?bool
    {
        return $this->es_dev;
    }

    public function setEsDev(bool $es_dev): static
    {
        $this->es_dev = $es_dev;

        return $this;
    }
}
