<?php


namespace NiuGengYun\EasyTBK\SuNing\Request\Netalliance;


use NiuGengYun\EasyTBK\SuNing\SuningRequest;

/**
 * 商品精选接口
 * Class Selectrecommendcommodity
 * @package NiuGengYun\EasyTBK\SuNing\Request\Netalliance
 */
class SelectrecommendcommodityQueryRequest extends SuningRequest
{
    /**
     * 精选ID
     * 默认为1,,营销id。1-小编推荐；2-实时热销榜；3-当日热推榜；4-高佣爆款榜；5-团长招商榜；6-9块9专区
     * @var
     */
    private $eliteId;

    /**
     * 页码 默认0
     * @var
     */
    private $pageIndex;

    /**
     * 城市编码 默认025
     * @var
     */
    private $cityCode;

    /**
     * 图片宽度
     * @var
     */
    private $picWith;

    /**
     * 图片高度
     * @var
     */
    private $picHeight;

    /**
     * 是否苏宁自营。0：全部；1：是
     * @var
     */
    private $selfSupport;

    /**
     * 1表示拿到券后价，不传按照以前逻辑取不到券后价
     * @var
     */
    private $couponMark;

    /**
     * 每页数量，最大支持40
     * @var
     */
    private $size;

    public function setEliteId($eliteId)
    {
        $this->eliteId = $eliteId;
        $this->apiParams["eliteId"] = $eliteId;
    }

    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
        $this->apiParams["pageIndex"] = $pageIndex;
    }

    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        $this->apiParams["cityCode"] = $cityCode;
    }

    public function setPicWith($picWith)
    {
        $this->picWith = $picWith;
        $this->apiParams["picWith"] = $picWith;
    }

    public function setPicHeight($picHeight)
    {
        $this->picHeight = $picHeight;
        $this->apiParams["picHeight"] = $picHeight;
    }

    public function setSelfSupport($selfSupport)
    {
        $this->selfSupport = $selfSupport;
        $this->apiParams["selfSupport"] = $selfSupport;
    }

    public function setCouponMark($couponMark)
    {
        $this->couponMark = $couponMark;
        $this->apiParams["couponMark"] = $couponMark;
    }

    public function setSize($size)
    {
        $this->size = $size;
        $this->apiParams["size"] = $size;
    }

    public function getEliteId()
    {
        return $this->eliteId;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    public function getPicWith()
    {
        return $this->picWith;
    }

    public function getPicHeight()
    {
        return $this->picHeight;
    }

    public function getSelfSupport()
    {
        return $this->selfSupport;
    }

    public function getCouponMark()
    {
        return $this->couponMark;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function check()
    {
        // TODO: Implement check() method.
    }

    public function getApiMethodName()
    {
        return 'suning.netalliance.selectrecommendcommodity.query';
    }

    public function getBizName(){
        return "querySelectrecommendcommodity";
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}