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
 * Associated policy
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyName() Obtain Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyName(string $PolicyName) Set Policy name
Note: This field may return null, indicating that no valid value was found.
 * @method string getAddTime() Obtain Time created
Note: This field may return null, indicating that no valid value was found.
 * @method void setAddTime(string $AddTime) Set Time created
Note: This field may return null, indicating that no valid value was found.
 * @method integer getCreateMode() Obtain How the policy was created: 1: Via console; 2: Via syntax
Note: This field may return null, indicating that no valid value was found.
 * @method void setCreateMode(integer $CreateMode) Set How the policy was created: 1: Via console; 2: Via syntax
Note: This field may return null, indicating that no valid value was found.
 * @method string getPolicyType() Obtain Valid values: `user` and `QCS`
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyType(string $PolicyType) Set Valid values: `user` and `QCS`
Note: This field may return null, indicating that no valid value was found.
 * @method string getRemark() Obtain Policy remarks
 * @method void setRemark(string $Remark) Set Policy remarks
 * @method string getOperateOwnerUin() Obtain Root account of the operator associating the policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOperateOwnerUin(string $OperateOwnerUin) Set Root account of the operator associating the policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOperateUin() Obtain The ID of the account associating the policy. If `UinType` is 0, this indicates that this is a sub-account `UIN`. If `UinType` is 1, this indicates this is a role ID
 * @method void setOperateUin(string $OperateUin) Set The ID of the account associating the policy. If `UinType` is 0, this indicates that this is a sub-account `UIN`. If `UinType` is 1, this indicates this is a role ID
 * @method integer getOperateUinType() Obtain If `UinType` is 0, `OperateUin` indicates that this is a sub-account `UIN`. If `UinType` is 1, `OperateUin` indicates that this is a role ID
 * @method void setOperateUinType(integer $OperateUinType) Set If `UinType` is 0, `OperateUin` indicates that this is a sub-account `UIN`. If `UinType` is 1, `OperateUin` indicates that this is a role ID
 * @method integer getDeactived() Obtain Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeactived(integer $Deactived) Set Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDeactivedDetail() Obtain List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeactivedDetail(array $DeactivedDetail) Set List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
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
     * @var string Policy remarks
     */
    public $Remark;

    /**
     * @var string Root account of the operator associating the policy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OperateOwnerUin;

    /**
     * @var string The ID of the account associating the policy. If `UinType` is 0, this indicates that this is a sub-account `UIN`. If `UinType` is 1, this indicates this is a role ID
     */
    public $OperateUin;

    /**
     * @var integer If `UinType` is 0, `OperateUin` indicates that this is a sub-account `UIN`. If `UinType` is 1, `OperateUin` indicates that this is a role ID
     */
    public $OperateUinType;

    /**
     * @var integer Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Deactived;

    /**
     * @var array List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeactivedDetail;

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
     * @param string $Remark Policy remarks
     * @param string $OperateOwnerUin Root account of the operator associating the policy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OperateUin The ID of the account associating the policy. If `UinType` is 0, this indicates that this is a sub-account `UIN`. If `UinType` is 1, this indicates this is a role ID
     * @param integer $OperateUinType If `UinType` is 0, `OperateUin` indicates that this is a sub-account `UIN`. If `UinType` is 1, `OperateUin` indicates that this is a role ID
     * @param integer $Deactived Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DeactivedDetail List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }
    }
}
