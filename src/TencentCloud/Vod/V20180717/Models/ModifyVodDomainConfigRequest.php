<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method RefererAuthPolicy getRefererAuthPolicy() Obtain [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) rule.
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) Set [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) rule.
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() Obtain [Key hotlink protection](https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1) rule.
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) Set [Key hotlink protection](https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1) rule.
 * @method DomainQUICConfig getQUICConfig() Obtain QUIC configuration.
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) Set QUIC configuration.
 * @method IPFilterPolicy getIPFilterPolicy() Obtain IP access restriction rule.
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) Set IP access restriction rule.
 */
class ModifyVodDomainConfigRequest extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var RefererAuthPolicy [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) rule.
     */
    public $RefererAuthPolicy;

    /**
     * @var UrlSignatureAuthPolicy [Key hotlink protection](https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1) rule.
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var DomainQUICConfig QUIC configuration.
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy IP access restriction rule.
     */
    public $IPFilterPolicy;

    /**
     * @param string $Domain Domain name.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param RefererAuthPolicy $RefererAuthPolicy [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) rule.
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy [Key hotlink protection](https://www.tencentcloud.com/document/product/266/14047?from_cn_redirect=1) rule.
     * @param DomainQUICConfig $QUICConfig QUIC configuration.
     * @param IPFilterPolicy $IPFilterPolicy IP access restriction rule.
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

        if (array_key_exists("IPFilterPolicy",$param) and $param["IPFilterPolicy"] !== null) {
            $this->IPFilterPolicy = new IPFilterPolicy();
            $this->IPFilterPolicy->deserialize($param["IPFilterPolicy"]);
        }
    }
}
