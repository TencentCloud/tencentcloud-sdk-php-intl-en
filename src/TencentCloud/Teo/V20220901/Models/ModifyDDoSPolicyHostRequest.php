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
 * ModifyDDoSPolicyHost request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getHost() Obtain The subdomain name/layer-4 proxy.
 * @method void setHost(string $Host) Set The subdomain name/layer-4 proxy.
 * @method string getAccelerateType() Obtain Whether to enabled acceleration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setAccelerateType(string $AccelerateType) Set Whether to enabled acceleration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getPolicyId() Obtain The policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The policy ID.
 * @method string getSecurityType() Obtain Whether to enable security protection. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSecurityType(string $SecurityType) Set Whether to enable security protection. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 */
class ModifyDDoSPolicyHostRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The subdomain name/layer-4 proxy.
     */
    public $Host;

    /**
     * @var string Whether to enabled acceleration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $AccelerateType;

    /**
     * @var integer The policy ID.
     */
    public $PolicyId;

    /**
     * @var string Whether to enable security protection. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $SecurityType;

    /**
     * @param string $ZoneId The site ID.
     * @param string $Host The subdomain name/layer-4 proxy.
     * @param string $AccelerateType Whether to enabled acceleration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $PolicyId The policy ID.
     * @param string $SecurityType Whether to enable security protection. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
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
