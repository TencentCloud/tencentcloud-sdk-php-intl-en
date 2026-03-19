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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the delegated member of the organization service.
 *
 * @method integer getServiceId() Obtain Organization service ID.
 * @method void setServiceId(integer $ServiceId) Set Organization service ID.
 * @method string getProductName() Obtain Organization service product name.
 * @method void setProductName(string $ProductName) Set Organization service product name.
 * @method integer getMemberUin() Obtain Uin of the delegated admin.
 * @method void setMemberUin(integer $MemberUin) Set Uin of the delegated admin.
 * @method string getMemberName() Obtain Delegated administrator name.
 * @method void setMemberName(string $MemberName) Set Delegated administrator name.
 * @method integer getUsageStatus() Obtain Activation status. Valid values: 0: not applicable to the service; 1: activated; 2: not activated.
 * @method void setUsageStatus(integer $UsageStatus) Set Activation status. Valid values: 0: not applicable to the service; 1: activated; 2: not activated.
 * @method string getCreateTime() Obtain Delegation time.
 * @method void setCreateTime(string $CreateTime) Set Delegation time.
 * @method integer getManagementScope() Obtain Management scope of the delegated administrator. Valid values: 1: all members; 2 some members.
 * @method void setManagementScope(integer $ManagementScope) Set Management scope of the delegated administrator. Valid values: 1: all members; 2 some members.
 * @method array getManagementScopeMembers() Obtain UIN list of the managed members. This parameter is valid when the value of ManagementScope is 2.
 * @method void setManagementScopeMembers(array $ManagementScopeMembers) Set UIN list of the managed members. This parameter is valid when the value of ManagementScope is 2.
 * @method array getManagementScopeNodes() Obtain ID list of the departments under management. This parameter is valid when the value of ManagementScope is 2.
 * @method void setManagementScopeNodes(array $ManagementScopeNodes) Set ID list of the departments under management. This parameter is valid when the value of ManagementScope is 2.
 */
class OrganizationServiceAssignMember extends AbstractModel
{
    /**
     * @var integer Organization service ID.
     */
    public $ServiceId;

    /**
     * @var string Organization service product name.
     */
    public $ProductName;

    /**
     * @var integer Uin of the delegated admin.
     */
    public $MemberUin;

    /**
     * @var string Delegated administrator name.
     */
    public $MemberName;

    /**
     * @var integer Activation status. Valid values: 0: not applicable to the service; 1: activated; 2: not activated.
     */
    public $UsageStatus;

    /**
     * @var string Delegation time.
     */
    public $CreateTime;

    /**
     * @var integer Management scope of the delegated administrator. Valid values: 1: all members; 2 some members.
     */
    public $ManagementScope;

    /**
     * @var array UIN list of the managed members. This parameter is valid when the value of ManagementScope is 2.
     */
    public $ManagementScopeMembers;

    /**
     * @var array ID list of the departments under management. This parameter is valid when the value of ManagementScope is 2.
     */
    public $ManagementScopeNodes;

    /**
     * @param integer $ServiceId Organization service ID.
     * @param string $ProductName Organization service product name.
     * @param integer $MemberUin Uin of the delegated admin.
     * @param string $MemberName Delegated administrator name.
     * @param integer $UsageStatus Activation status. Valid values: 0: not applicable to the service; 1: activated; 2: not activated.
     * @param string $CreateTime Delegation time.
     * @param integer $ManagementScope Management scope of the delegated administrator. Valid values: 1: all members; 2 some members.
     * @param array $ManagementScopeMembers UIN list of the managed members. This parameter is valid when the value of ManagementScope is 2.
     * @param array $ManagementScopeNodes ID list of the departments under management. This parameter is valid when the value of ManagementScope is 2.
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
