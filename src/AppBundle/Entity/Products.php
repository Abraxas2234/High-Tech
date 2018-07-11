<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_model", type="string", length=255, nullable=false)
     */
    private $productModel;

    /**
     * @var string
     *
     * @ORM\Column(name="product_reference", type="string", length=255, nullable=false)
     */
    private $productReference;

    /**
     * @var string
     *
     * @ORM\Column(name="product_brand", type="string", length=255, nullable=false)
     */
    private $productBrand;

    /**
     * @var int
     *
     * @ORM\Column(name="product_price", type="integer", nullable=false)
     */
    private $productPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="product_stock", type="integer", nullable=false)
     */
    private $productStock;

    /**
     * @var string
     *
     * @ORM\Column(name="product_weight", type="string", length=255, nullable=false)
     */
    private $productWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="product_dimension", type="string", length=255, nullable=false)
     */
    private $productDimension;

    /**
     * @var int
     *
     * @ORM\Column(name="product_discount", type="integer", nullable=false)
     */
    private $productDiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="string", length=255, nullable=false)
     */
    private $productDescription;



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
     * Set productModel.
     *
     * @param string $productModel
     *
     * @return Products
     */
    public function setProductModel($productModel)
    {
        $this->productModel = $productModel;

        return $this;
    }

    /**
     * Get productModel.
     *
     * @return string
     */
    public function getProductModel()
    {
        return $this->productModel;
    }

    /**
     * Set productReference.
     *
     * @param string $productReference
     *
     * @return Products
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;

        return $this;
    }

    /**
     * Get productReference.
     *
     * @return string
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Set productBrand.
     *
     * @param string $productBrand
     *
     * @return Products
     */
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;

        return $this;
    }

    /**
     * Get productBrand.
     *
     * @return string
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * Set productPrice.
     *
     * @param int $productPrice
     *
     * @return Products
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice.
     *
     * @return int
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productStock.
     *
     * @param int $productStock
     *
     * @return Products
     */
    public function setProductStock($productStock)
    {
        $this->productStock = $productStock;

        return $this;
    }

    /**
     * Get productStock.
     *
     * @return int
     */
    public function getProductStock()
    {
        return $this->productStock;
    }

    /**
     * Set productWeight.
     *
     * @param string $productWeight
     *
     * @return Products
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    /**
     * Get productWeight.
     *
     * @return string
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Set productDimension.
     *
     * @param string $productDimension
     *
     * @return Products
     */
    public function setProductDimension($productDimension)
    {
        $this->productDimension = $productDimension;

        return $this;
    }

    /**
     * Get productDimension.
     *
     * @return string
     */
    public function getProductDimension()
    {
        return $this->productDimension;
    }

    /**
     * Set productDiscount.
     *
     * @param int $productDiscount
     *
     * @return Products
     */
    public function setProductDiscount($productDiscount)
    {
        $this->productDiscount = $productDiscount;

        return $this;
    }

    /**
     * Get productDiscount.
     *
     * @return int
     */
    public function getProductDiscount()
    {
        return $this->productDiscount;
    }

    /**
     * Set productDescription.
     *
     * @param string $productDescription
     *
     * @return Products
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription.
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }
}
