<?php
/**
 * Copyright Wagento Creative LLC ©, All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Wagento\Zendesk\Api\Data;

interface OrderItemReaderInterface
{

    /*
     * SKU.
     */
    public const SKU = 'sku';
    /*
     * Name.
     */
    public const NAME = 'name';
    /*
     * Quantity ordered.
     */
    public const QTY_ORDERED = 'qty_ordered';
    /*
     * Price.
     */
    public const PRICE = 'price';
    /*
     * Discount amount.
     */
    public const DISCOUNT_AMOUNT = 'discount_amount';
    /*
     * Row total.
     */
    public const ROW_TOTAL = 'row_total';

    /**
     * Gets the SKU for the order item.
     *
     * @return string SKU.
     */
    public function getSku();

    /**
     * Gets the name for the order item.
     *
     * @return string|null Name.
     */
    public function getName();

    /**
     * Gets the quantity ordered for the order item.
     *
     * @return float|null Quantity ordered.
     */
    public function getQtyOrdered();

    /**
     * Gets the price for the order item.
     *
     * @return float|null Price.
     */
    public function getPrice();

    /**
     * Gets the discount amount for the order item.
     *
     * @return float|null Discount amount.
     */
    public function getDiscountAmount();

    /**
     * Gets the row total for the order item.
     *
     * @return float|null Row total.
     */
    public function getRowTotal();
}
