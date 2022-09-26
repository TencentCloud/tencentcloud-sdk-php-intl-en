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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Repository parameters 
 *
 * @method string getEnterpriseInstanceName() Obtain TCR Enterprise instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnterpriseInstanceName(string $EnterpriseInstanceName) Set TCR Enterprise instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnterpriseInstanceChargeType() Obtain TCR Enterprise billing mode. `0`: Pay-as-you-go 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnterpriseInstanceChargeType(integer $EnterpriseInstanceChargeType) Set TCR Enterprise billing mode. `0`: Pay-as-you-go 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnterpriseInstanceType() Obtain Edition of the TCR Enterprise. Values: `basic`, `standard`, `premium` (Advanced edition)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnterpriseInstanceType(string $EnterpriseInstanceType) Set Edition of the TCR Enterprise. Values: `basic`, `standard`, `premium` (Advanced edition)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UseDefaultRepoParameters extends AbstractModel
{
    /**
     * @var string TCR Enterprise instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnterpriseInstanceName;

    /**
     * @var integer TCR Enterprise billing mode. `0`: Pay-as-you-go 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnterpriseInstanceChargeType;

    /**
     * @var string Edition of the TCR Enterprise. Values: `basic`, `standard`, `premium` (Advanced edition)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnterpriseInstanceType;

    /**
     * @param string $EnterpriseInstanceName TCR Enterprise instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EnterpriseInstanceChargeType TCR Enterprise billing mode. `0`: Pay-as-you-go 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnterpriseInstanceType Edition of the TCR Enterprise. Values: `basic`, `standard`, `premium` (Advanced edition)
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
        if (array_key_exists("EnterpriseInstanceName",$param) and $param["EnterpriseInstanceName"] !== null) {
            $this->EnterpriseInstanceName = $param["EnterpriseInstanceName"];
        }

        if (array_key_exists("EnterpriseInstanceChargeType",$param) and $param["EnterpriseInstanceChargeType"] !== null) {
            $this->EnterpriseInstanceChargeType = $param["EnterpriseInstanceChargeType"];
        }

        if (array_key_exists("EnterpriseInstanceType",$param) and $param["EnterpriseInstanceType"] !== null) {
            $this->EnterpriseInstanceType = $param["EnterpriseInstanceType"];
        }
    }
}
