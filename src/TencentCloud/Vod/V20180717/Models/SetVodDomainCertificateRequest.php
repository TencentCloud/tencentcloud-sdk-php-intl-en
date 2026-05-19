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
 * SetVodDomainCertificate request structure.
 *
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method string getOperation() Obtain Operation type of this API call. Valid values:
<li>Set: Certificate required for setting domain HTTPS.</li>
<li>Clear: Clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
 * @method void setOperation(string $Operation) Set Operation type of this API call. Valid values:
<li>Set: Certificate required for setting domain HTTPS.</li>
<li>Clear: Clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getCertID() Obtain [Tencent Cloud SSL](https://www.tencentcloud.com/document/product/400/7572?from_cn_redirect=1) Uploaded certificate ID. No need to specify this field when clearing domain HTTPS configuration.
 * @method void setCertID(string $CertID) Set [Tencent Cloud SSL](https://www.tencentcloud.com/document/product/400/7572?from_cn_redirect=1) Uploaded certificate ID. No need to specify this field when clearing domain HTTPS configuration.
 */
class SetVodDomainCertificateRequest extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var string Operation type of this API call. Valid values:
<li>Set: Certificate required for setting domain HTTPS.</li>
<li>Clear: Clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
     */
    public $Operation;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string [Tencent Cloud SSL](https://www.tencentcloud.com/document/product/400/7572?from_cn_redirect=1) Uploaded certificate ID. No need to specify this field when clearing domain HTTPS configuration.
     */
    public $CertID;

    /**
     * @param string $Domain Domain name.
     * @param string $Operation Operation type of this API call. Valid values:
<li>Set: Certificate required for setting domain HTTPS.</li>
<li>Clear: Clear domain HTTPS configuration. After clearance, the domain cannot support HTTPS access.</li>
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $CertID [Tencent Cloud SSL](https://www.tencentcloud.com/document/product/400/7572?from_cn_redirect=1) Uploaded certificate ID. No need to specify this field when clearing domain HTTPS configuration.
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
