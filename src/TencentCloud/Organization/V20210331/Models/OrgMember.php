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
 * Organization member
 *
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method string getName() Obtain Member name.
 * @method void setName(string $Name) Set Member name.
 * @method string getMemberType() Obtain Member type. Invite: invited, Create: created.
 * @method void setMemberType(string $MemberType) Set Member type. Invite: invited, Create: created.
 * @method string getOrgPolicyType() Obtain Relationship policy type.
 * @method void setOrgPolicyType(string $OrgPolicyType) Set Relationship policy type.
 * @method string getOrgPolicyName() Obtain Relational policy name.
 * @method void setOrgPolicyName(string $OrgPolicyName) Set Relational policy name.
 * @method array getOrgPermission() Obtain Relationship policy permission.
 * @method void setOrgPermission(array $OrgPermission) Set Relationship policy permission.
 * @method integer getNodeId() Obtain Node ID.
 * @method void setNodeId(integer $NodeId) Set Node ID.
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update date
 * @method void setUpdateTime(string $UpdateTime) Set Update date
 * @method string getIsAllowQuit() Obtain Whether to allow a member to exit. Valid values: Allow, Denied.
 * @method void setIsAllowQuit(string $IsAllowQuit) Set Whether to allow a member to exit. Valid values: Allow, Denied.
 * @method string getPayUin() Obtain Proxy payer UIN.
 * @method void setPayUin(string $PayUin) Set Proxy payer UIN.
 * @method string getPayName() Obtain Proxy payer name.
 * @method void setPayName(string $PayName) Set Proxy payer name.
 * @method array getOrgIdentity() Obtain Admin identity.
 * @method void setOrgIdentity(array $OrgIdentity) Set Admin identity.
 * @method string getBindStatus() Obtain Security information binding status  Unbound: Unbound, to be activated: Valid, binding succeeded: Success, binding Failed: Failed.
 * @method void setBindStatus(string $BindStatus) Set Security information binding status  Unbound: Unbound, to be activated: Valid, binding succeeded: Success, binding Failed: Failed.
 * @method string getPermissionStatus() Obtain Member's permission status. Valid values: Confirmed, UnConfirmed.
 * @method void setPermissionStatus(string $PermissionStatus) Set Member's permission status. Valid values: Confirmed, UnConfirmed.
 * @method array getTags() Obtain Member tag list.
 * @method void setTags(array $Tags) Set Member tag list.
 * @method string getNickName() Obtain Tencent cloud nickname.
 * @method void setNickName(string $NickName) Set Tencent cloud nickname.
 */
class OrgMember extends AbstractModel
{
    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var string Member name.
     */
    public $Name;

    /**
     * @var string Member type. Invite: invited, Create: created.
     */
    public $MemberType;

    /**
     * @var string Relationship policy type.
     */
    public $OrgPolicyType;

    /**
     * @var string Relational policy name.
     */
    public $OrgPolicyName;

    /**
     * @var array Relationship policy permission.
     */
    public $OrgPermission;

    /**
     * @var integer Node ID.
     */
    public $NodeId;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update date
     */
    public $UpdateTime;

    /**
     * @var string Whether to allow a member to exit. Valid values: Allow, Denied.
     */
    public $IsAllowQuit;

    /**
     * @var string Proxy payer UIN.
     */
    public $PayUin;

    /**
     * @var string Proxy payer name.
     */
    public $PayName;

    /**
     * @var array Admin identity.
     */
    public $OrgIdentity;

    /**
     * @var string Security information binding status  Unbound: Unbound, to be activated: Valid, binding succeeded: Success, binding Failed: Failed.
     */
    public $BindStatus;

    /**
     * @var string Member's permission status. Valid values: Confirmed, UnConfirmed.
     */
    public $PermissionStatus;

    /**
     * @var array Member tag list.
     */
    public $Tags;

    /**
     * @var string Tencent cloud nickname.
     */
    public $NickName;

    /**
     * @param integer $MemberUin Member UIN.
     * @param string $Name Member name.
     * @param string $MemberType Member type. Invite: invited, Create: created.
     * @param string $OrgPolicyType Relationship policy type.
     * @param string $OrgPolicyName Relational policy name.
     * @param array $OrgPermission Relationship policy permission.
     * @param integer $NodeId Node ID.
     * @param string $NodeName Node name.
     * @param string $Remark Remarks
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update date
     * @param string $IsAllowQuit Whether to allow a member to exit. Valid values: Allow, Denied.
     * @param string $PayUin Proxy payer UIN.
     * @param string $PayName Proxy payer name.
     * @param array $OrgIdentity Admin identity.
     * @param string $BindStatus Security information binding status  Unbound: Unbound, to be activated: Valid, binding succeeded: Success, binding Failed: Failed.
     * @param string $PermissionStatus Member's permission status. Valid values: Confirmed, UnConfirmed.
     * @param array $Tags Member tag list.
     * @param string $NickName Tencent cloud nickname.
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

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }
    }
}
