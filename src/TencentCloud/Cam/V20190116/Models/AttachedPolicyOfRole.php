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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPolicyId() 获取Policy ID
 * @method void setPolicyId(integer $PolicyId) 设置Policy ID
 * @method string getPolicyName() 获取Policy name
 * @method void setPolicyName(string $PolicyName) 设置Policy name
 * @method string getAddTime() 获取Time of association
 * @method void setAddTime(string $AddTime) 设置Time of association
 * @method string getPolicyType() 获取Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyType(string $PolicyType) 设置Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method integer getCreateMode() 获取Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
 * @method void setCreateMode(integer $CreateMode) 设置Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
 * @method integer getDeactived() 获取
 * @method void setDeactived(integer $Deactived) 设置
 */

/**
 *Policy associated with the role
 */
class AttachedPolicyOfRole extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy name
     */
    public $PolicyName;

    /**
     * @var string Time of association
     */
    public $AddTime;

    /**
     * @var string Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyType;

    /**
     * @var integer Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
     */
    public $CreateMode;

    /**
     * @var integer 
     */
    public $Deactived;
    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name
     * @param string $AddTime Time of association
     * @param string $PolicyType Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
     * @param integer $CreateMode Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
     * @param integer $Deactived 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }
    }
}
