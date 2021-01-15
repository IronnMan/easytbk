<?php

namespace NiuGengYun\EasyTBK\JingDong\Request;

use NiuGengYun\EasyTBK\JingDong\RequestInterface;

class JdUnionOpenGoodsBigfieldQueryRequest implements RequestInterface
{
    /**
     * 商品详情查询接口
     * @url https://union.jd.com/#/openplatform/api/11248
     * @var string
     */
    private $method = 'jd.union.open.goods.bigfield.query';



    /**
     * sku id集合，长度最大30
     * @var
     */
    private $skuIds;

    private $fields;

    /**
     * @return mixed
     */
    public function getSkuIds()
    {
        return $this->skuIds;
    }

    /**
     * @param mixed $skuIds
     */
    public function setSkuIds($skuIds): void
    {
        $this->skuIds = $skuIds;
    }

    public function getFields()
    {
        return $this->skuIds;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        $params = [
            'skuIds' => $this->skuIds,
            'fields' => $this->fields,
        ];

        return json_encode([
            'goodsReq' => array_filter ($params, function ($val) {
                return $val != null;
            })
        ]);
    }
}
