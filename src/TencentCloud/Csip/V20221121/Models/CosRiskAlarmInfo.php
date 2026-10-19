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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos risk alert information
 *
 * @method integer getPolicyType() Obtain Enumeration value of the policy type
 * @method void setPolicyType(integer $PolicyType) Set Enumeration value of the policy type
 * @method string getPolicyTypeName() Obtain Policy name
 * @method void setPolicyTypeName(string $PolicyTypeName) Set Policy name
 * @method integer getPolicyCount() Obtain Number of policies corresponding to the policy type
 * @method void setPolicyCount(integer $PolicyCount) Set Number of policies corresponding to the policy type
 */
class CosRiskAlarmInfo extends AbstractModel
{
    /**
     * @var integer Enumeration value of the policy type
     */
    public $PolicyType;

    /**
     * @var string Policy name
     */
    public $PolicyTypeName;

    /**
     * @var integer Number of policies corresponding to the policy type
     */
    public $PolicyCount;

    /**
     * @param integer $PolicyType Enumeration value of the policy type
     * @param string $PolicyTypeName Policy name
     * @param integer $PolicyCount Number of policies corresponding to the policy type
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyTypeName",$param) and $param["PolicyTypeName"] !== null) {
            $this->PolicyTypeName = $param["PolicyTypeName"];
        }

        if (array_key_exists("PolicyCount",$param) and $param["PolicyCount"] !== null) {
            $this->PolicyCount = $param["PolicyCount"];
        }
    }
}
