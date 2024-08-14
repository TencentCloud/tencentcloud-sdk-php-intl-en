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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the delegated member of the organization service.
 *
 * @method integer getServiceId() Obtain Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(integer $ServiceId) Set Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductName() Obtain Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberUin() Obtain Uin of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberUin(integer $MemberUin) Set Uin of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemberName() Obtain Name of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberName(string $MemberName) Set Name of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUsageStatus() Obtain Activation status. Valid values: 0 (the service has no activation status), 1 (activated), 2 (not activated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsageStatus(integer $UsageStatus) Set Activation status. Valid values: 0 (the service has no activation status), 1 (activated), 2 (not activated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Delegation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Delegation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getManagementScope() Obtain Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManagementScope(integer $ManagementScope) Set Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getManagementScopeMembers() Obtain Uin list of managed members. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManagementScopeMembers(array $ManagementScopeMembers) Set Uin list of managed members. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getManagementScopeNodes() Obtain ID list of the managed departments. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManagementScopeNodes(array $ManagementScopeNodes) Set ID list of the managed departments. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrganizationServiceAssignMember extends AbstractModel
{
    /**
     * @var integer Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var string Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @var integer Uin of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberUin;

    /**
     * @var string Name of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberName;

    /**
     * @var integer Activation status. Valid values: 0 (the service has no activation status), 1 (activated), 2 (not activated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsageStatus;

    /**
     * @var string Delegation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManagementScope;

    /**
     * @var array Uin list of managed members. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManagementScopeMembers;

    /**
     * @var array ID list of the managed departments. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManagementScopeNodes;

    /**
     * @param integer $ServiceId Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductName Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberUin Uin of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemberName Name of the delegated admin.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UsageStatus Activation status. Valid values: 0 (the service has no activation status), 1 (activated), 2 (not activated).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Delegation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ManagementScope Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ManagementScopeMembers Uin list of managed members. This parameter is valid when ManagementScope is 2.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ManagementScopeNodes ID list of the managed departments. This parameter is valid when ManagementScope is 2.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("UsageStatus",$param) and $param["UsageStatus"] !== null) {
            $this->UsageStatus = $param["UsageStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ManagementScope",$param) and $param["ManagementScope"] !== null) {
            $this->ManagementScope = $param["ManagementScope"];
        }

        if (array_key_exists("ManagementScopeMembers",$param) and $param["ManagementScopeMembers"] !== null) {
            $this->ManagementScopeMembers = [];
            foreach ($param["ManagementScopeMembers"] as $key => $value){
                $obj = new MemberMainInfo();
                $obj->deserialize($value);
                array_push($this->ManagementScopeMembers, $obj);
            }
        }

        if (array_key_exists("ManagementScopeNodes",$param) and $param["ManagementScopeNodes"] !== null) {
            $this->ManagementScopeNodes = [];
            foreach ($param["ManagementScopeNodes"] as $key => $value){
                $obj = new NodeMainInfo();
                $obj->deserialize($value);
                array_push($this->ManagementScopeNodes, $obj);
            }
        }
    }
}
