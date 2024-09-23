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
 * Organization member
 *
 * @method integer getMemberUin() Obtain Member UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Member name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Member name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemberType() Obtain Member type. Valid values: `Invite` (invited); `Create` (created).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberType(string $MemberType) Set Member type. Valid values: `Invite` (invited); `Create` (created).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrgPolicyType() Obtain Relationship policy type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPolicyType(string $OrgPolicyType) Set Relationship policy type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrgPolicyName() Obtain Relationship policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPolicyName(string $OrgPolicyName) Set Relationship policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOrgPermission() Obtain Relationship policy permission
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPermission(array $OrgPermission) Set Relationship policy permission
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNodeId() Obtain Node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeId(integer $NodeId) Set Node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeName() Obtain Node name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeName(string $NodeName) Set Node name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIsAllowQuit() Obtain Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAllowQuit(string $IsAllowQuit) Set Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayUin() Obtain Payer UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayUin(string $PayUin) Set Payer UIN
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayName() Obtain Payer name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayName(string $PayName) Set Payer name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOrgIdentity() Obtain Management identity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgIdentity(array $OrgIdentity) Set Management identity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBindStatus() Obtain Security information binding status. Valid values: `Unbound`, `Valid`, `Success`, `Failed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindStatus(string $BindStatus) Set Security information binding status. Valid values: `Unbound`, `Valid`, `Success`, `Failed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPermissionStatus() Obtain Member permission status. Valid values: `Confirmed`, `UnConfirmed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissionStatus(string $PermissionStatus) Set Member permission status. Valid values: `Confirmed`, `UnConfirmed`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrgMember extends AbstractModel
{
    /**
     * @var integer Member UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberUin;

    /**
     * @var string Member name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Member type. Valid values: `Invite` (invited); `Create` (created).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberType;

    /**
     * @var string Relationship policy type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPolicyType;

    /**
     * @var string Relationship policy name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPolicyName;

    /**
     * @var array Relationship policy permission
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPermission;

    /**
     * @var integer Node ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeId;

    /**
     * @var string Node name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeName;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAllowQuit;

    /**
     * @var string Payer UIN
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayUin;

    /**
     * @var string Payer name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayName;

    /**
     * @var array Management identity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgIdentity;

    /**
     * @var string Security information binding status. Valid values: `Unbound`, `Valid`, `Success`, `Failed`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindStatus;

    /**
     * @var string Member permission status. Valid values: `Confirmed`, `UnConfirmed`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PermissionStatus;

    /**
     * @var array Member tag list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param integer $MemberUin Member UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Member name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemberType Member type. Valid values: `Invite` (invited); `Create` (created).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrgPolicyType Relationship policy type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrgPolicyName Relationship policy name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OrgPermission Relationship policy permission
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NodeId Node ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeName Node name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IsAllowQuit Whether the member is allowed to leave. Valid values: `Allow`, `Denied`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayUin Payer UIN
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayName Payer name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OrgIdentity Management identity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BindStatus Security information binding status. Valid values: `Unbound`, `Valid`, `Success`, `Failed`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PermissionStatus Member permission status. Valid values: `Confirmed`, `UnConfirmed`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Member tag list.
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MemberType",$param) and $param["MemberType"] !== null) {
            $this->MemberType = $param["MemberType"];
        }

        if (array_key_exists("OrgPolicyType",$param) and $param["OrgPolicyType"] !== null) {
            $this->OrgPolicyType = $param["OrgPolicyType"];
        }

        if (array_key_exists("OrgPolicyName",$param) and $param["OrgPolicyName"] !== null) {
            $this->OrgPolicyName = $param["OrgPolicyName"];
        }

        if (array_key_exists("OrgPermission",$param) and $param["OrgPermission"] !== null) {
            $this->OrgPermission = [];
            foreach ($param["OrgPermission"] as $key => $value){
                $obj = new OrgPermission();
                $obj->deserialize($value);
                array_push($this->OrgPermission, $obj);
            }
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsAllowQuit",$param) and $param["IsAllowQuit"] !== null) {
            $this->IsAllowQuit = $param["IsAllowQuit"];
        }

        if (array_key_exists("PayUin",$param) and $param["PayUin"] !== null) {
            $this->PayUin = $param["PayUin"];
        }

        if (array_key_exists("PayName",$param) and $param["PayName"] !== null) {
            $this->PayName = $param["PayName"];
        }

        if (array_key_exists("OrgIdentity",$param) and $param["OrgIdentity"] !== null) {
            $this->OrgIdentity = [];
            foreach ($param["OrgIdentity"] as $key => $value){
                $obj = new MemberIdentity();
                $obj->deserialize($value);
                array_push($this->OrgIdentity, $obj);
            }
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("PermissionStatus",$param) and $param["PermissionStatus"] !== null) {
            $this->PermissionStatus = $param["PermissionStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
