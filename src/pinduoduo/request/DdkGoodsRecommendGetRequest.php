<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkGoodsRecommendGetRequest implements  RequestInterface
{

    private $type = 'pdd.ddk.goods.recommend.get';

    /**
     * 从多少位置开始请求；默认值 ： 0，offset需是limit的整数倍，仅支持整页翻页
     * @var
     */
    private $offset;

    /**
     * 一页请求数量；默认值 ： 20
     * @var
     */
    private $limit;

    /**
     * 进宝频道推广商品，0-1.9包邮, 1-今日爆款, 2-品牌好货,3-相似商品推荐,4-猜你喜欢,5-实时热销榜,6-实时收益榜,7-今日热销榜
     * ,8-高佣榜单，默认值5
     * @var
     */
    private $channelType;

    /**
     * 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为： {"uid":"11111","sid":"22222"} ，
     * 其中 uid 为用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填； sid 为上下文信息标识，例如sessionId等，非必填。
     * 该json字符串中也可以加入其他自定义的key。
     * @var
     */
    private $customParameters;



    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setChannelType($channelType)
    {
        $this->channelType = $channelType;
    }

    public function getChannelType()
    {
        return $this->channelType;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function getParams()
    {
        $params = [
            'type'         => $this->type,
            'offset'       => $this->offset,
            'limit'        => $this->limit,
            'channel_type' => intval($this->channelType),
            'custom_parameters' => $this->customParameters,
        ];
        return $params;
    }
}
