<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkGoodsDetailRequest implements RequestInterface
{
    /**
     * 查询多多进宝商品详情
     * @var string
     */
    private $type = 'pdd.ddk.goods.detail';

    /**
     * 商品ID，仅支持单个查询。例如：[123456]
     * @var
     */
    private $goodsIdList;

    /**
     * 商品goodsSign，用于查询指定商品，仅支持单个查询
     * @var
     */
    private $goodsSign;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function setGoodsSign($goodsSign)
    {
        $this->goodsSign = $goodsSign;
    }


    public function getType()
    {
        return $this->type;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function getGoodsSign()
    {
        return $this->goodsSign;
    }

    public function getParams()
    {
        return [
            'type'          => $this->type,
            'goods_id_list' => $this->goodsIdList,
            'goods_sign'    => $this->goodsSign
        ];
    }
}