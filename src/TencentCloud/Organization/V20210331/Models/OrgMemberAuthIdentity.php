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
 * Authorizable identity of the organization member
 *
 * @method integer getIdentityId() Obtain Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityRoleName() Obtain Role name of an identity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityRoleName(string $IdentityRoleName) Set Role name of an identity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityRoleAliasName() Obtain Role alias of an identity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) Set Role alias of an identity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Identity description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Identity description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Time of initial configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Time of initial configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Time of last configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Time of last configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIdentityType() Obtain Identity type. Valid values: 1 (preset identity), 2 (custom identity).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityType(integer $IdentityType) Set Identity type. Valid values: 1 (preset identity), 2 (custom identity).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Configuration status. Valid values: 1 (configuration completed), 2 (reconfiguration required).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Configuration status. Valid values: 1 (configuration completed), 2 (reconfiguration required).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberUin() Obtain Member Uin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberUin(integer $MemberUin) Set Member Uin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemberName() Obtain Member name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberName(string $MemberName) Set Member name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrgMemberAuthIdentity extends AbstractModel
{
    /**
     * @var integer Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityId;

    /**
     * @var string Role name of an identity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityRoleName;

    /**
     * @var string Role alias of an identity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityRoleAliasName;

    /**
     * @var string Identity description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Time of initial configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Time of last configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Identity type. Valid values: 1 (preset identity), 2 (custom identity).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityType;

    /**
     * @var integer Configuration status. Valid values: 1 (configuration completed), 2 (reconfiguration required).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Member Uin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberUin;

    /**
     * @var string Member name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberName;

    /**
     * @param integer $IdentityId Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityRoleName Role name of an identity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityRoleAliasName Role alias of an identity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Identity description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Time of initial configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Time of last configuration success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IdentityType Identity type. Valid values: 1 (preset identity), 2 (custom identity).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Configuration status. Valid values: 1 (configuration completed), 2 (reconfiguration required).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberUin Member Uin.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemberName Member name.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }
    }
}
