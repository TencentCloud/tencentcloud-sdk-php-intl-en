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
 * Policy information
 *
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getPolicyName() Obtain Policy name
 * @method void setPolicyName(string $PolicyName) Set Policy name
 * @method string getAddTime() Obtain Time policy created
Note: This field may return null, indicating that no valid value was found.
 * @method void setAddTime(string $AddTime) Set Time policy created
Note: This field may return null, indicating that no valid value was found.
 * @method integer getType() Obtain Policy type. 1: Custom policy; 2: Preset policy
 * @method void setType(integer $Type) Set Policy type. 1: Custom policy; 2: Preset policy
 * @method string getDescription() Obtain Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method void setDescription(string $Description) Set Policy description
Note: This field may return null, indicating that no valid value was found.
 * @method integer getCreateMode() Obtain How the policy was created: 1: Via console; 2: Via syntax
 * @method void setCreateMode(integer $CreateMode) Set How the policy was created: 1: Via console; 2: Via syntax
 * @method integer getAttachments() Obtain Number of associated users
 * @method void setAttachments(integer $Attachments) Set Number of associated users
 * @method string getServiceType() Obtain Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
 * @method void setServiceType(string $ServiceType) Set Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
 * @method integer getIsAttached() Obtain This value should not be null when querying whether a marked entity has been associated with a policy. 0 indicates that no policy has been associated, while 1 indicates that a policy has been associated
 * @method void setIsAttached(integer $IsAttached) Set This value should not be null when querying whether a marked entity has been associated with a policy. 0 indicates that no policy has been associated, while 1 indicates that a policy has been associated
 * @method integer getDeactived() Obtain Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeactived(integer $Deactived) Set Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDeactivedDetail() Obtain List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeactivedDetail(array $DeactivedDetail) Set List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsServiceLinkedPolicy() Obtain The deletion task identifier used to check the deletion status of the service-linked role
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsServiceLinkedPolicy(integer $IsServiceLinkedPolicy) Set The deletion task identifier used to check the deletion status of the service-linked role
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getAttachEntityCount() Obtain The number of entities associated with the policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAttachEntityCount(integer $AttachEntityCount) Set The number of entities associated with the policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAttachEntityBoundaryCount() Obtain The number of entities associated with the permission boundary.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAttachEntityBoundaryCount(integer $AttachEntityBoundaryCount) Set The number of entities associated with the permission boundary.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain The last edited time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set The last edited time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class StrategyInfo extends AbstractModel
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
     * @var string Time policy created
Note: This field may return null, indicating that no valid value was found.
     */
    public $AddTime;

    /**
     * @var integer Policy type. 1: Custom policy; 2: Preset policy
     */
    public $Type;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid value was found.
     */
    public $Description;

    /**
     * @var integer How the policy was created: 1: Via console; 2: Via syntax
     */
    public $CreateMode;

    /**
     * @var integer Number of associated users
     */
    public $Attachments;

    /**
     * @var string Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
     */
    public $ServiceType;

    /**
     * @var integer This value should not be null when querying whether a marked entity has been associated with a policy. 0 indicates that no policy has been associated, while 1 indicates that a policy has been associated
     */
    public $IsAttached;

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
     * @var integer The deletion task identifier used to check the deletion status of the service-linked role
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsServiceLinkedPolicy;

    /**
     * @var integer The number of entities associated with the policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AttachEntityCount;

    /**
     * @var integer The number of entities associated with the permission boundary.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AttachEntityBoundaryCount;

    /**
     * @var string The last edited time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $PolicyId Policy ID
     * @param string $PolicyName Policy name
     * @param string $AddTime Time policy created
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Type Policy type. 1: Custom policy; 2: Preset policy
     * @param string $Description Policy description
Note: This field may return null, indicating that no valid value was found.
     * @param integer $CreateMode How the policy was created: 1: Via console; 2: Via syntax
     * @param integer $Attachments Number of associated users
     * @param string $ServiceType Product associated with the policy
Note: This field may return null, indicating that no valid value was found.
     * @param integer $IsAttached This value should not be null when querying whether a marked entity has been associated with a policy. 0 indicates that no policy has been associated, while 1 indicates that a policy has been associated
     * @param integer $Deactived Queries if the policy has been deactivated
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DeactivedDetail List of deprecated products
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsServiceLinkedPolicy The deletion task identifier used to check the deletion status of the service-linked role
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $AttachEntityCount The number of entities associated with the policy.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AttachEntityBoundaryCount The number of entities associated with the permission boundary.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $UpdateTime The last edited time.
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = $param["Attachments"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("IsAttached",$param) and $param["IsAttached"] !== null) {
            $this->IsAttached = $param["IsAttached"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }

        if (array_key_exists("IsServiceLinkedPolicy",$param) and $param["IsServiceLinkedPolicy"] !== null) {
            $this->IsServiceLinkedPolicy = $param["IsServiceLinkedPolicy"];
        }

        if (array_key_exists("AttachEntityCount",$param) and $param["AttachEntityCount"] !== null) {
            $this->AttachEntityCount = $param["AttachEntityCount"];
        }

        if (array_key_exists("AttachEntityBoundaryCount",$param) and $param["AttachEntityBoundaryCount"] !== null) {
            $this->AttachEntityBoundaryCount = $param["AttachEntityBoundaryCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
