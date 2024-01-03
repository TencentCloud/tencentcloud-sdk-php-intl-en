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
 * SetVodDomainCertificate request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getOperation() Obtain The operation type of this API call, optional value:
<li>Set: Set the certificate required for the domain name HTTPS;</li>
<li>Clear: Clear the domain name HTTPS configuration, after clearing, the domain name cannot support </li>
 * @method void setOperation(string $Operation) Set The operation type of this API call, optional value:
<li>Set: Set the certificate required for the domain name HTTPS;</li>
<li>Clear: Clear the domain name HTTPS configuration, after clearing, the domain name cannot support </li>
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getCertID() Obtain [Tencent Cloud SSL](https://intl.cloud.tencent.com/document/product/400/7572?from_cn_redirect=1) uploaded certificate ID. No need to fill in this field when clearing domain HTTPS configuration
 * @method void setCertID(string $CertID) Set [Tencent Cloud SSL](https://intl.cloud.tencent.com/document/product/400/7572?from_cn_redirect=1) uploaded certificate ID. No need to fill in this field when clearing domain HTTPS configuration
 */
class SetVodDomainCertificateRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string The operation type of this API call, optional value:
<li>Set: Set the certificate required for the domain name HTTPS;</li>
<li>Clear: Clear the domain name HTTPS configuration, after clearing, the domain name cannot support </li>
     */
    public $Operation;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string [Tencent Cloud SSL](https://intl.cloud.tencent.com/document/product/400/7572?from_cn_redirect=1) uploaded certificate ID. No need to fill in this field when clearing domain HTTPS configuration
     */
    public $CertID;

    /**
     * @param string $Domain Domain name
     * @param string $Operation The operation type of this API call, optional value:
<li>Set: Set the certificate required for the domain name HTTPS;</li>
<li>Clear: Clear the domain name HTTPS configuration, after clearing, the domain name cannot support </li>
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $CertID [Tencent Cloud SSL](https://intl.cloud.tencent.com/document/product/400/7572?from_cn_redirect=1) uploaded certificate ID. No need to fill in this field when clearing domain HTTPS configuration
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("CertID",$param) and $param["CertID"] !== null) {
            $this->CertID = $param["CertID"];
        }
    }
}
