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
 * Authorizable identity of the organization member
 *
 * @method integer getIdentityId() Obtain Identity ID.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
 * @method string getIdentityRoleName() Obtain Role name of an identity.
 * @method void setIdentityRoleName(string $IdentityRoleName) Set Role name of an identity.
 * @method string getIdentityRoleAliasName() Obtain Role alias of an identity.
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) Set Role alias of an identity.
 * @method string getDescription() Obtain Identity description.
 * @method void setDescription(string $Description) Set Identity description.
 * @method string getCreateTime() Obtain Time of initial configuration success.
 * @method void setCreateTime(string $CreateTime) Set Time of initial configuration success.
 * @method string getUpdateTime() Obtain Time of the last successful configuration.
 * @method void setUpdateTime(string $UpdateTime) Set Time of the last successful configuration.
 * @method integer getIdentityType() Obtain Identity type. Valid values: 1: preset identity; 2: custom identity.
 * @method void setIdentityType(integer $IdentityType) Set Identity type. Valid values: 1: preset identity; 2: custom identity.
 * @method integer getStatus() Obtain Configuration status. Valid values: 1: configuration completed; 2: reconfiguration required.
 * @method void setStatus(integer $Status) Set Configuration status. Valid values: 1: configuration completed; 2: reconfiguration required.
 * @method integer getMemberUin() Obtain Member UIN.
 * @method void setMemberUin(integer $MemberUin) Set Member UIN.
 * @method string getMemberName() Obtain Member name.
 * @method void setMemberName(string $MemberName) Set Member name.
 */
class OrgMemberAuthIdentity extends AbstractModel
{
    /**
     * @var integer Identity ID.
     */
    public $IdentityId;

    /**
     * @var string Role name of an identity.
     */
    public $IdentityRoleName;

    /**
     * @var string Role alias of an identity.
     */
    public $IdentityRoleAliasName;

    /**
     * @var string Identity description.
     */
    public $Description;

    /**
     * @var string Time of initial configuration success.
     */
    public $CreateTime;

    /**
     * @var string Time of the last successful configuration.
     */
    public $UpdateTime;

    /**
     * @var integer Identity type. Valid values: 1: preset identity; 2: custom identity.
     */
    public $IdentityType;

    /**
     * @var integer Configuration status. Valid values: 1: configuration completed; 2: reconfiguration required.
     */
    public $Status;

    /**
     * @var integer Member UIN.
     */
    public $MemberUin;

    /**
     * @var string Member name.
     */
    public $MemberName;

    /**
     * @param integer $IdentityId Identity ID.
     * @param string $IdentityRoleName Role name of an identity.
     * @param string $IdentityRoleAliasName Role alias of an identity.
     * @param string $Description Identity description.
     * @param string $CreateTime Time of initial configuration success.
     * @param string $UpdateTime Time of the last successful configuration.
     * @param integer $IdentityType Identity type. Valid values: 1: preset identity; 2: custom identity.
     * @param integer $Status Configuration status. Valid values: 1: configuration completed; 2: reconfiguration required.
     * @param integer $MemberUin Member UIN.
     * @param string $MemberName Member name.
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
