<?php


namespace NiuGengYun\EasyTBK\TaoBao\Request;


use NiuGengYun\EasyTBK\TaoBao\RequestCheckUtil;

/**
 * 淘宝客-推广者-淘口令解析&三方分成转链
 * TOP API: taobao.tbk.tpwd.share.convert request
 *
 * Class TbkTpwdShareConvertRequest
 * @package NiuGengYun\EasyTBK\TaoBao\Request
 */
class TbkTpwdShareConvertRequest
{
    /**
     * 需要解析的淘口令
     * 示例：￥2kt123e08DjviP￥
     * @var
     */
    private $passwordContent;

    /**
     * 广告位ID
     * 示例：1231212
     * @var
     */
    private $adzoneId;

    /**
     * 三方pid
     * 示例：mm_11_11_11
     * @var
     */
    private $subPid;

    /**
     * 1表示商品转通用计划链接，其他值或不传表示优先转营销计划链接
     * @var
     */
    private $dx;

    private $apiParas = array();

    public function setPasswordContent($passwordContent)
    {
        $this->passwordContent = $passwordContent;
        $this->apiParas["password_content"] = $passwordContent;
    }

    public function getPasswordContent()
    {
        return $this->passwordContent;
    }

    public function setAdzoneId($adzoneId)
    {
        $this->adzoneId = $adzoneId;
        $this->apiParas["adzone_id"] = $adzoneId;
    }

    public function getAdzoneId()
    {
        return $this->adzoneId;
    }

    public function setSubPid($subPid)
    {
        $this->subPid = $subPid;
        $this->apiParas["sub_pid"] = $subPid;
    }

    public function getSubPid()
    {
        return $this->subPid;
    }

    public function setDx($dx)
    {
        $this->dx = $dx;
        $this->apiParas["dx"] = $dx;
    }

    public function getDx()
    {
        return $this->dx;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.tpwd.share.convert";
    }

    /**
     * @return array
     */
    public function getApiParas(): array
    {
        return $this->apiParas;
    }


    public function check()
    {
        RequestCheckUtil::checkNotNull($this->passwordContent, "password_content");
        RequestCheckUtil::checkNotNull($this->adzoneId, "adzone_id");
        RequestCheckUtil::checkNotNull($this->subPid, "sub_pid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }


}