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
 * Organization member access authorization policy.
 *
 * @method integer getIdentityId() Obtain Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityRoleName() Obtain Role name of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityRoleName(string $IdentityRoleName) Set Role name of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityRoleAliasName() Obtain Role alias of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) Set Role alias of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicyId() Obtain Member access policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(integer $PolicyId) Set Member access policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyName() Obtain Member access policy name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyName(string $PolicyName) Set Member access policy name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberUin() Obtain Member UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemberName() Obtain Member name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberName(string $MemberName) Set Member name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrgSubAccountUin() Obtain Sub-account UIN or user group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgSubAccountUin(integer $OrgSubAccountUin) Set Sub-account UIN or user group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrgSubAccountName() Obtain Sub-account name or user group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrgSubAccountName(string $OrgSubAccountName) Set Sub-account name or user group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBindType() Obtain Binding type. 1: sub-account; 2: user group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindType(integer $BindType) Set Binding type. 1: sub-account; 2: user group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMembers() Obtain Member information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMembers(array $Members) Set Member information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrgMembersAuthPolicy extends AbstractModel
{
    /**
     * @var integer Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityId;

    /**
     * @var string Role name of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityRoleName;

    /**
     * @var string Role alias of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityRoleAliasName;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Member access policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var string Member access policy name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyName;

    /**
     * @var integer Member UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberUin;

    /**
     * @var string Member name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberName;

    /**
     * @var integer Sub-account UIN or user group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgSubAccountUin;

    /**
     * @var string Sub-account name or user group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrgSubAccountName;

    /**
     * @var integer Binding type. 1: sub-account; 2: user group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindType;

    /**
     * @var array Member information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Members;

    /**
     * @param integer $IdentityId Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityRoleName Role name of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityRoleAliasName Role alias of an identity.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PolicyId Member access policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyName Member access policy name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberUin Member UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemberName Member name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OrgSubAccountUin Sub-account UIN or user group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrgSubAccountName Sub-account name or user group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BindType Binding type. 1: sub-account; 2: user group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Members Member information.
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("IdentityRoleName",$param) and $param["IdentityRoleName"] !== null) {
            $this->IdentityRoleName = $param["IdentityRoleName"];
        }

        if (array_key_exists("IdentityRoleAliasName",$param) and $param["IdentityRoleAliasName"] !== null) {
            $this->IdentityRoleAliasName = $param["IdentityRoleAliasName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("OrgSubAccountUin",$param) and $param["OrgSubAccountUin"] !== null) {
            $this->OrgSubAccountUin = $param["OrgSubAccountUin"];
        }

        if (array_key_exists("OrgSubAccountName",$param) and $param["OrgSubAccountName"] !== null) {
            $this->OrgSubAccountName = $param["OrgSubAccountName"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new MemberMainInfo();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }
    }
}
