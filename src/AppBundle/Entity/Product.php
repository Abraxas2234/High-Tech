<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=true)
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="string", length=255, nullable=false)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="product_brand", type="string", length=255, nullable=false)
     */
    private $productBrand;

    /**
     * @var string
     *
     * @ORM\Column(name="product_price", type="string", length=255, nullable=false)
     */
    private $productPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="product_stock", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="product_dimensions", type="string", length=255, nullable=false)
     */
    private $productDimensions;

    /**
     * @var string
     *
     * @ORM\Column(name="product_discount", type="string", length=255, nullable=false)
     */
    private $productDiscount;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     *
     * @return Product
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return integer
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     *
     * @return Product
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set productBrand
     *
     * @param string $productBrand
     *
     * @return Product
     */
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;

        return $this;
    }

    /**
     * Get productBrand
     *
     * @return string
     */
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * Set productPrice
     *
     * @param string $productPrice
     *
     * @return Product
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productStock
     *
     * @param string $productStock
     *
     * @return Product
     */
    public function setProductStock($productStock)
    {
        $this->productStock = $productStock;

        return $this;
    }

    /**
     * Get productStock
     *
     * @return string
     */
    public function getProductStock()
    {
        return $this->productStock;
    }

    /**
     * Set productWeight
     *
     * @param string $productWeight
     *
     * @return Product
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    /**
     * Get productWeight
     *
     * @return string
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Set productDimensions
     *
     * @param string $productDimensions
     *
     * @return Product
     */
    public function setProductDimensions($productDimensions)
    {
        $this->productDimensions = $productDimensions;

        return $this;
    }

    /**
     * Get productDimensions
     *
     * @return string
     */
    public function getProductDimensions()
    {
        return $this->productDimensions;
    }

    /**
     * Set productDiscount
     *
     * @param string $productDiscount
     *
     * @return Product
     */
    public function setProductDiscount($productDiscount)
    {
        $this->productDiscount = $productDiscount;

        return $this;
    }

    /**
     * Get productDiscount
     *
     * @return string
     */
    public function getProductDiscount()
    {
        return $this->productDiscount;
    }
}
