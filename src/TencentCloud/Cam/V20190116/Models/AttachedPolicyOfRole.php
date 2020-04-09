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
 * Policy associated with the role
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getAddTime() Obtain Time of association
 * @method void setAddTime(string $AddTime) Set Time of association
 * @method string getPolicyType() Obtain Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method void setPolicyType(string $PolicyType) Set Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
 * @method integer getCreateMode() Obtain Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
 * @method void setCreateMode(integer $CreateMode) Set Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
 * @method integer getDeactived() Obtain Whether the product has been deprecated (0: no; 1: yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeactived(integer $Deactived) Set Whether the product has been deprecated (0: no; 1: yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDeactivedDetail() Obtain List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeactivedDetail(array $DeactivedDetail) Set List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Policy description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Policy description
Note: this field may return null, indicating that no valid values can be obtained.
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
     * @var integer Whether the product has been deprecated (0: no; 1: yes)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Deactived;

    /**
     * @var array List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DeactivedDetail;

    /**
     * @var string Policy description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name
     * @param string $AddTime Time of association
     * @param string $PolicyType Policy type. `User` indicates custom policy; `QCS` indicates preset policy
Note: This field may return null, indicating that no valid value was found.
     * @param integer $CreateMode Policy creation method. 1: indicates the policy was created based on product function or item permission; other values indicate the policy was created based on the policy syntax
     * @param integer $Deactived Whether the product has been deprecated (0: no; 1: yes)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DeactivedDetail List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Policy description
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

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
