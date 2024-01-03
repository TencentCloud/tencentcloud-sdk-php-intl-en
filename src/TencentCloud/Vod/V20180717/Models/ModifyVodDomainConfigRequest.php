<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVodDomainConfig request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method RefererAuthPolicy getRefererAuthPolicy() Obtain [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/14046?from_cn_redirect=1) policy
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) Set [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/14046?from_cn_redirect=1) policy
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() Obtain [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/14047?from_cn_redirect=1) policy
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) Set [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/14047?from_cn_redirect=1) policy
 * @method DomainQUICConfig getQUICConfig() Obtain The QUIC configuration.
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) Set The QUIC configuration.
 */
class ModifyVodDomainConfigRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var RefererAuthPolicy [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/14046?from_cn_redirect=1) policy
     */
    public $RefererAuthPolicy;

    /**
     * @var UrlSignatureAuthPolicy [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/14047?from_cn_redirect=1) policy
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var DomainQUICConfig The QUIC configuration.
     */
    public $QUICConfig;

    /**
     * @param string $Domain Domain name
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param RefererAuthPolicy $RefererAuthPolicy [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/14046?from_cn_redirect=1) policy
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy [Key hotlink protection](https://intl.cloud.tencent.com/document/product/266/14047?from_cn_redirect=1) policy
     * @param DomainQUICConfig $QUICConfig The QUIC configuration.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RefererAuthPolicy",$param) and $param["RefererAuthPolicy"] !== null) {
            $this->RefererAuthPolicy = new RefererAuthPolicy();
            $this->RefererAuthPolicy->deserialize($param["RefererAuthPolicy"]);
        }

        if (array_key_exists("UrlSignatureAuthPolicy",$param) and $param["UrlSignatureAuthPolicy"] !== null) {
            $this->UrlSignatureAuthPolicy = new UrlSignatureAuthPolicy();
            $this->UrlSignatureAuthPolicy->deserialize($param["UrlSignatureAuthPolicy"]);
        }

        if (array_key_exists("QUICConfig",$param) and $param["QUICConfig"] !== null) {
            $this->QUICConfig = new DomainQUICConfig();
            $this->QUICConfig->deserialize($param["QUICConfig"]);
        }
    }
}
