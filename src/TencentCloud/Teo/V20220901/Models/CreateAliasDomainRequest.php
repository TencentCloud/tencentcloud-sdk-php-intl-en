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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAliasDomain request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getAliasName() Obtain The alias domain name.
 * @method void setAliasName(string $AliasName) Set The alias domain name.
 * @method string getTargetName() Obtain The target domain name.
 * @method void setTargetName(string $TargetName) Set The target domain name.
 * @method string getCertType() Obtain Certificate configuration. Values:
<li>`none`: (Default) Do not configure</li>
<li>`hosting`: Managed SSL certificate</li>
 * @method void setCertType(string $CertType) Set Certificate configuration. Values:
<li>`none`: (Default) Do not configure</li>
<li>`hosting`: Managed SSL certificate</li>
 * @method array getCertId() Obtain The certificate ID. This field is required when `CertType=hosting`.
 * @method void setCertId(array $CertId) Set The certificate ID. This field is required when `CertType=hosting`.
 */
class CreateAliasDomainRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The alias domain name.
     */
    public $AliasName;

    /**
     * @var string The target domain name.
     */
    public $TargetName;

    /**
     * @var string Certificate configuration. Values:
<li>`none`: (Default) Do not configure</li>
<li>`hosting`: Managed SSL certificate</li>
     */
    public $CertType;

    /**
     * @var array The certificate ID. This field is required when `CertType=hosting`.
     */
    public $CertId;

    /**
     * @param string $ZoneId The site ID.
     * @param string $AliasName The alias domain name.
     * @param string $TargetName The target domain name.
     * @param string $CertType Certificate configuration. Values:
<li>`none`: (Default) Do not configure</li>
<li>`hosting`: Managed SSL certificate</li>
     * @param array $CertId The certificate ID. This field is required when `CertType=hosting`.
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
