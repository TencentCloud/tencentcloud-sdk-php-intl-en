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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSPolicyHost request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getHost() Obtain Second-level domain name
 * @method void setHost(string $Host) Set Second-level domain name
 * @method string getAccelerateType() Obtain Whether to enable content acceleration. Values: `on` (enable content acceleration), and `off` (disable content acceleration). It can be used together with `SecurityType`.
 * @method void setAccelerateType(string $AccelerateType) Set Whether to enable content acceleration. Values: `on` (enable content acceleration), and `off` (disable content acceleration). It can be used together with `SecurityType`.
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getSecurityType() Obtain Whether to enable security protection. Values: `on` (enable security protection) and `off` (disable security protection). It can be used together with `AccelerateType`.
 * @method void setSecurityType(string $SecurityType) Set Whether to enable security protection. Values: `on` (enable security protection) and `off` (disable security protection). It can be used together with `AccelerateType`.
 */
class ModifyDDoSPolicyHostRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Second-level domain name
     */
    public $Host;

    /**
     * @var string Whether to enable content acceleration. Values: `on` (enable content acceleration), and `off` (disable content acceleration). It can be used together with `SecurityType`.
     */
    public $AccelerateType;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Whether to enable security protection. Values: `on` (enable security protection) and `off` (disable security protection). It can be used together with `AccelerateType`.
     */
    public $SecurityType;

    /**
     * @param string $ZoneId Site ID
     * @param string $Host Second-level domain name
     * @param string $AccelerateType Whether to enable content acceleration. Values: `on` (enable content acceleration), and `off` (disable content acceleration). It can be used together with `SecurityType`.
     * @param integer $PolicyId Policy ID
     * @param string $SecurityType Whether to enable security protection. Values: `on` (enable security protection) and `off` (disable security protection). It can be used together with `AccelerateType`.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccelerateType",$param) and $param["AccelerateType"] !== null) {
            $this->AccelerateType = $param["AccelerateType"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }
    }
}
