<?php declare(strict_types=1);


namespace App\Entity;

namespace App\Entity;
use \Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="abc_sale_frequency")
 */
class AbcMethodSaleFrequency
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @var int
     */
    private $abc_sale_frequency_id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank()
     * @var float
     */
    private $abc_sale_frequency_value;

    /**
     * @return int
     */
    public function getAbcSaleFrequencyId()
    {
        return $this->abc_sale_frequency_id;
    }

    /**
     * @param int $abc_sale_frequency_id
     */
    public function setAbcSaleFrequencyId($abc_sale_frequency_id)
    {
        $this->abc_sale_frequency_id = $abc_sale_frequency_id;
    }

    /**
     * @return float
     */
    public function getAbcSaleFrequencyValue()
    {
        return $this->abc_sale_frequency_value;
    }

    /**
     * @param float $abc_sale_frequency_value
     */
    public function setAbcSaleFrequencyValue($abc_sale_frequency_value)
    {
        $this->abc_sale_frequency_value = $abc_sale_frequency_value;
    }


}