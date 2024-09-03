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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hot/cold data layering policy
 *
 * @method string getPolicyName() Obtain Policy name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyName(string $PolicyName) Set Policy name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCooldownDatetime() Obtain cooldown_ttl
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCooldownDatetime(string $CooldownDatetime) Set cooldown_ttl
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCooldownTtl() Obtain cooldown_datetime
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCooldownTtl(string $CooldownTtl) Set cooldown_datetime
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CoolDownPolicyInfo extends AbstractModel
{
    /**
     * @var string Policy name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyName;

    /**
     * @var string cooldown_ttl
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CooldownDatetime;

    /**
     * @var string cooldown_datetime
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CooldownTtl;

    /**
     * @param string $PolicyName Policy name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CooldownDatetime cooldown_ttl
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CooldownTtl cooldown_datetime
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CooldownDatetime",$param) and $param["CooldownDatetime"] !== null) {
            $this->CooldownDatetime = $param["CooldownDatetime"];
        }

        if (array_key_exists("CooldownTtl",$param) and $param["CooldownTtl"] !== null) {
            $this->CooldownTtl = $param["CooldownTtl"];
        }
    }
}
