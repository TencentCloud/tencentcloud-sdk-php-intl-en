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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFreeCertificateVerification request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getDomain() Obtain Acceleration domain name, that domain name used when [applying for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1).
 * @method void setDomain(string $Domain) Set Acceleration domain name, that domain name used when [applying for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1).
 */
class CheckFreeCertificateVerificationRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Acceleration domain name, that domain name used when [applying for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1).
     */
    public $Domain;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Domain Acceleration domain name, that domain name used when [applying for free certificate](https://www.tencentcloud.comom/document/product/1552/124807?from_cn_redirect=1).
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
