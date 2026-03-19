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
 * Authorized policy of the organization member
 *
 * @method integer getPolicyId() Obtain Policy ID.
 * @method void setPolicyId(integer $PolicyId) Set Policy ID.
 * @method string getPolicyName() Obtain Policy name.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
 * @method integer getIdentityId() Obtain Identity ID.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
 * @method string getIdentityRoleName() Obtain Identity role name.
 * @method void setIdentityRoleName(string $IdentityRoleName) Set Identity role name.
 * @method string getIdentityRoleAliasName() Obtain Role alias of an identity.
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) Set Role alias of an identity.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 */
class OrgMemberPolicy extends AbstractModel
{
    /**
     * @var integer Policy ID.
     */
    public $PolicyId;

    /**
     * @var string Policy name.
     */
    public $PolicyName;

    /**
     * @var integer Identity ID.
     */
    public $IdentityId;

    /**
     * @var string Identity role name.
     */
    public $IdentityRoleName;

    /**
     * @var string Role alias of an identity.
     */
    public $IdentityRoleAliasName;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @param integer $PolicyId Policy ID.
     * @param string $PolicyName Policy name.
     * @param integer $IdentityId Identity ID.
     * @param string $IdentityRoleName Identity role name.
     * @param string $IdentityRoleAliasName Role alias of an identity.
     * @param string $Description Description.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
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
    }
}
