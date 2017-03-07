<?php
/**
 * Created by PhpStorm.
 * User: mpure
 * Date: 16/9/23
 * Time: 上午11:08
 */

namespace Com\Youzan\TcpDemo\Feature\Service;


class ListService implements \Com\Youzan\Pf\Feature\Interfaces\ListService
{
    /**
     * @param int $labelId
     * @param \Com\Youzan\Pf\Feature\Entity\VenuesGoods[] $goodsList
     * @return int
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function saveGoodsList($labelId, array $goodsList)
    {
        yield 999;
    }

    /**
     * @param int $labelId
     * @param \Com\Youzan\Pf\Feature\Entity\VenuesShop[] $shopList
     * @return int
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function saveShopList($labelId, array $shopList)
    {
        // TODO: Implement saveShopList() method.
    }

    /**
     * @param int $labelId
     * @param int $page
     * @param int $pageSize
     * @return \Com\Youzan\Pf\Feature\Entity\ShopList
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function getShopList($labelId, $page, $pageSize)
    {
        // TODO: Implement getShopList() method.
    }

    /**
     * @param int $labelId
     * @param int $page
     * @param int $pageSize
     * @return \Com\Youzan\Pf\Feature\Entity\GoodsList
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function getGoodsList($labelId, $page, $pageSize)
    {
        // TODO: Implement getGoodsList() method.
    }

    /**
     * @param int $labelId
     * @param int $itemId
     * @param array $fields
     * @return int
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function alterShop($labelId, $itemId, array $fields)
    {
        // TODO: Implement alterShop() method.
    }

    /**
     * @param int $labelId
     * @param int $itemId
     * @param array $fields
     * @return int
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function alterGoods($labelId, $itemId, array $fields)
    {
        // TODO: Implement alterGoods() method.
    }

    /**
     * @param int $labelId
     * @param int $itemId
     * @param int $itemType
     * @return int
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function deleteItem($labelId, $itemId, $itemType)
    {
        // TODO: Implement deleteItem() method.
    }

    /**
     * @param int $labelId
     * @param int $type
     * @return int
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function countItems($labelId, $type)
    {
        // TODO: Implement countItems() method.
    }

    /**
     * @param int $venuesId
     * @return \Com\Youzan\Pf\Feature\Entity\VenuesGoodsInfo[]
     * @throws \Com\Youzan\Pf\Feature\Exception\ListException
     */
    public function getGoodsSet($venuesId)
    {
        // TODO: Implement getGoodsSet() method.
    }
}