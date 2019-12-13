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
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyName(string $PolicyName) 设置Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method string getAddTime() 获取Time created
Note: This field may return null, indicating that no valid value was found.
 * @method void setAddTime(string $AddTime) 设置Time created
Note: This field may return null, indicating that no valid value was found.
 * @method integer getCreateMode() 获取How the policy was created: 1: Via console; 2: Via syntax
Note: This field may return null, indicating that no valid value was found.
 * @method void setCreateMode(integer $CreateMode) 设置How the policy was created: 1: Via console; 2: Via syntax
Note: This field may return null, indicating that no valid value was found.
 * @method string getPolicyType() 获取Valid values: `user` and `QCS`
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyType(string $PolicyType) 设置Valid values: `user` and `QCS`
Note: This field may return null, indicating that no valid value was found.
 * @method string getRemark() 获取
 * @method void setRemark(string $Remark) 设置
 * @method string getOperateOwnerUin() 获取
 * @method void setOperateOwnerUin(string $OperateOwnerUin) 设置
 * @method string getOperateUin() 获取
 * @method void setOperateUin(string $OperateUin) 设置
 * @method integer getOperateUinType() 获取
 * @method void setOperateUinType(integer $OperateUinType) 设置
 * @method integer getDeactived() 获取
 * @method void setDeactived(integer $Deactived) 设置
 */

/**
 *Associated policy
 */
class AttachPolicyInfo extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyName;

    /**
     * @var string Time created
Note: This field may return null, indicating that no valid value was found.
     */
    public $AddTime;

    /**
     * @var integer How the policy was created: 1: Via console; 2: Via syntax
Note: This field may return null, indicating that no valid value was found.
     */
    public $CreateMode;

    /**
     * @var string Valid values: `user` and `QCS`
Note: This field may return null, indicating that no valid value was found.
     */
    public $PolicyType;

    /**
     * @var string 
     */
    public $Remark;

    /**
     * @var string 
     */
    public $OperateOwnerUin;

    /**
     * @var string 
     */
    public $OperateUin;

    /**
     * @var integer 
     */
    public $OperateUinType;

    /**
     * @var integer 
     */
    public $Deactived;
    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name
Note: This field may return null, indicating that no valid value was found.
     * @param string $AddTime Time created
Note: This field may return null, indicating that no valid value was found.
     * @param integer $CreateMode How the policy was created: 1: Via console; 2: Via syntax
Note: This field may return null, indicating that no valid value was found.
     * @param string $PolicyType Valid values: `user` and `QCS`
Note: This field may return null, indicating that no valid value was found.
     * @param string $Remark 
     * @param string $OperateOwnerUin 
     * @param string $OperateUin 
     * @param integer $OperateUinType 
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

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OperateOwnerUin",$param) and $param["OperateOwnerUin"] !== null) {
            $this->OperateOwnerUin = $param["OperateOwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("OperateUinType",$param) and $param["OperateUinType"] !== null) {
            $this->OperateUinType = $param["OperateUinType"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }
    }
}
