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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SmartPolicyRequest
 *
 * @method SmartPolicyBaseInfo getBaseInfo() Obtain Basic information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBaseInfo(SmartPolicyBaseInfo $BaseInfo) Set Basic information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method SmartOptimizerPolicy getPolicy() Obtain Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicy(SmartOptimizerPolicy $Policy) Set Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SmartPolicy extends AbstractModel
{
    /**
     * @var SmartPolicyBaseInfo Basic information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BaseInfo;

    /**
     * @var SmartOptimizerPolicy Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @param SmartPolicyBaseInfo $BaseInfo Basic information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param SmartOptimizerPolicy $Policy Policy description
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
        if (array_key_exists("BaseInfo",$param) and $param["BaseInfo"] !== null) {
            $this->BaseInfo = new SmartPolicyBaseInfo();
            $this->BaseInfo->deserialize($param["BaseInfo"]);
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new SmartOptimizerPolicy();
            $this->Policy->deserialize($param["Policy"]);
        }
    }
}
