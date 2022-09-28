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
 * The client rule information
 *
 * @method string getClientIp() Obtain The client IP.
 * @method void setClientIp(string $ClientIp) Set The client IP.
 * @method string getRuleType() Obtain The rule type.
 * @method void setRuleType(string $RuleType) Set The rule type.
 * @method integer getRuleId() Obtain The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain The rule description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set The rule description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIpStatus() Obtain The blocking status. Values:
<li>`block`: Block;</li>
<li>`allow`: Allow.</li>
 * @method void setIpStatus(string $IpStatus) Set The blocking status. Values:
<li>`block`: Block;</li>
<li>`allow`: Allow.</li>
 * @method integer getBlockTime() Obtain The blocking time recorded in UNIX timestamp.
 * @method void setBlockTime(integer $BlockTime) Set The blocking time recorded in UNIX timestamp.
 * @method string getId() Obtain The data entry ID.
 * @method void setId(string $Id) Set The data entry ID.
 */
class ClientRule extends AbstractModel
{
    /**
     * @var string The client IP.
     */
    public $ClientIp;

    /**
     * @var string The rule type.
     */
    public $RuleType;

    /**
     * @var integer The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string The rule description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string The blocking status. Values:
<li>`block`: Block;</li>
<li>`allow`: Allow.</li>
     */
    public $IpStatus;

    /**
     * @var integer The blocking time recorded in UNIX timestamp.
     */
    public $BlockTime;

    /**
     * @var string The data entry ID.
     */
    public $Id;

    /**
     * @param string $ClientIp The client IP.
     * @param string $RuleType The rule type.
     * @param integer $RuleId The rule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description The rule description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IpStatus The blocking status. Values:
<li>`block`: Block;</li>
<li>`allow`: Allow.</li>
     * @param integer $BlockTime The blocking time recorded in UNIX timestamp.
     * @param string $Id The data entry ID.
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IpStatus",$param) and $param["IpStatus"] !== null) {
            $this->IpStatus = $param["IpStatus"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
