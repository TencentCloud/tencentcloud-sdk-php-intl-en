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
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method RefererAuthPolicy getRefererAuthPolicy() Obtain 
 * @method void setRefererAuthPolicy(RefererAuthPolicy $RefererAuthPolicy) Set 
 * @method UrlSignatureAuthPolicy getUrlSignatureAuthPolicy() Obtain 
 * @method void setUrlSignatureAuthPolicy(UrlSignatureAuthPolicy $UrlSignatureAuthPolicy) Set 
 * @method DomainQUICConfig getQUICConfig() Obtain 
 * @method void setQUICConfig(DomainQUICConfig $QUICConfig) Set 
 * @method IPFilterPolicy getIPFilterPolicy() Obtain 
 * @method void setIPFilterPolicy(IPFilterPolicy $IPFilterPolicy) Set 
 */
class ModifyVodDomainConfigRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var RefererAuthPolicy 
     */
    public $RefererAuthPolicy;

    /**
     * @var UrlSignatureAuthPolicy 
     */
    public $UrlSignatureAuthPolicy;

    /**
     * @var DomainQUICConfig 
     */
    public $QUICConfig;

    /**
     * @var IPFilterPolicy 
     */
    public $IPFilterPolicy;

    /**
     * @param string $Domain 
     * @param integer $SubAppId 
     * @param RefererAuthPolicy $RefererAuthPolicy 
     * @param UrlSignatureAuthPolicy $UrlSignatureAuthPolicy 
     * @param DomainQUICConfig $QUICConfig 
     * @param IPFilterPolicy $IPFilterPolicy 
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
