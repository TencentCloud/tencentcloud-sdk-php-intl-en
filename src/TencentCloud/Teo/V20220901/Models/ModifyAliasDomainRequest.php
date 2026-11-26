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
 * ModifyAliasDomain request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getAliasName() Obtain Alias domain name.
 * @method void setAliasName(string $AliasName) Set Alias domain name.
 * @method string getTargetName() Obtain Target domain name.
 * @method void setTargetName(string $TargetName) Set Target domain name.
 * @method string getCertType() Obtain Certificate configuration. Valid values:
<li> none: without configuring;</li>
<li> hosting: managed SSL certificate;</li>
<li> apply: apply for a free certificate.</li>Maintain the original configuration if not specified.
 * @method void setCertType(string $CertType) Set Certificate configuration. Valid values:
<li> none: without configuring;</li>
<li> hosting: managed SSL certificate;</li>
<li> apply: apply for a free certificate.</li>Maintain the original configuration if not specified.
 * @method array getCertId() Obtain When CertType is hosting, fill in the certificate ID accordingly.
 * @method void setCertId(array $CertId) Set When CertType is hosting, fill in the certificate ID accordingly.
 */
class ModifyAliasDomainRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Alias domain name.
     */
    public $AliasName;

    /**
     * @var string Target domain name.
     */
    public $TargetName;

    /**
     * @var string Certificate configuration. Valid values:
<li> none: without configuring;</li>
<li> hosting: managed SSL certificate;</li>
<li> apply: apply for a free certificate.</li>Maintain the original configuration if not specified.
     */
    public $CertType;

    /**
     * @var array When CertType is hosting, fill in the certificate ID accordingly.
     */
    public $CertId;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $AliasName Alias domain name.
     * @param string $TargetName Target domain name.
     * @param string $CertType Certificate configuration. Valid values:
<li> none: without configuring;</li>
<li> hosting: managed SSL certificate;</li>
<li> apply: apply for a free certificate.</li>Maintain the original configuration if not specified.
     * @param array $CertId When CertType is hosting, fill in the certificate ID accordingly.
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

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
