<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseProduct
 *
 * @ORM\Table(name="purchase_product")
 * @ORM\Entity
 */
class PurchaseProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="purchase_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purchaseId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="products_number", type="integer", nullable=false)
     */
    private $productsNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="total_price", type="integer", nullable=false)
     */
    private $totalPrice;



    /**
     * Get purchaseId.
     *
     * @return int
     */
    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return PurchaseProduct
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set productsNumber.
     *
     * @param int $productsNumber
     *
     * @return PurchaseProduct
     */
    public function setProductsNumber($productsNumber)
    {
        $this->productsNumber = $productsNumber;

        return $this;
    }

    /**
     * Get productsNumber.
     *
     * @return int
     */
    public function getProductsNumber()
    {
        return $this->productsNumber;
    }

    /**
     * Set totalPrice.
     *
     * @param int $totalPrice
     *
     * @return PurchaseProduct
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice.
     *
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
}
