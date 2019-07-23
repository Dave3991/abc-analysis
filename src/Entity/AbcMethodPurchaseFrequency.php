<?php declare(strict_types=1);


namespace App\Entity;
use \Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="abc_purchase_frequency")
 */
class AbcMethodPurchaseFrequency
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @var int
     */
    private $abc_purchase_frequency_id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank()
     * @var float
     */
    private $abc_purchase_frequency_value;

    /**
     * @return int
     */
    public function getAbcSaleFrequencyId()
    {
        return $this->abc_purchase_frequency_id;
    }

    /**
     * @param int $abc_purchase_frequency_id
     */
    public function setAbcSaleFrequencyId($abc_purchase_frequency_id)
    {
        $this->abc_purchase_frequency_id = $abc_purchase_frequency_id;
    }

    /**
     * @return float
     */
    public function getAbcSaleFrequencyValue()
    {
        return $this->abc_purchase_frequency_value;
    }

    /**
     * @param float $abc_purchase_frequency_value
     */
    public function setAbcSaleFrequencyValue($abc_purchase_frequency_value)
    {
        $this->abc_purchase_frequency_value = $abc_purchase_frequency_value;
    }


}