<?php declare(strict_types = 1);

namespace App\Entity;
use \Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="abc_profit")
 */
class AbcMethodProfit
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var float
     */
    private $abc_profit_id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank()
     * @var float
     */
    private $abc_profit_value;

    /**
     * @return float
     */
    public function getAbcProfitId(): float
    {
        return $this->abc_profit_id;
    }

    /**
     * @param float $abc_profit_id
     */
    public function setAbcProfitId(int $abc_profit_id)
    {
        $this->abc_profit_id = $abc_profit_id;
    }

    /**
     * @return float
     */
    public function getAbcProfitValue(): float
    {
        return $this->abc_profit_value;
    }

    /**
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }



}