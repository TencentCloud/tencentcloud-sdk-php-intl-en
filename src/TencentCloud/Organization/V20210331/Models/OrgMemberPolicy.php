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
 * Authorized policy of the organization member
 *
 * @method integer getPolicyId() Obtain Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(integer $PolicyId) Set Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyName() Obtain Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyName(string $PolicyName) Set Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIdentityId() Obtain Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityId(integer $IdentityId) Set Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityRoleName() Obtain Identity role name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityRoleName(string $IdentityRoleName) Set Identity role name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIdentityRoleAliasName() Obtain Identity role alias.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentityRoleAliasName(string $IdentityRoleAliasName) Set Identity role alias.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrgMemberPolicy extends AbstractModel
{
    /**
     * @var integer Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @var string Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyName;

    /**
     * @var integer Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityId;

    /**
     * @var string Identity role name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityRoleName;

    /**
     * @var string Identity role alias.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentityRoleAliasName;

    /**
     * @var string Description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param integer $PolicyId Policy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyName Policy name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IdentityId Identity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityRoleName Identity role name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IdentityRoleAliasName Identity role alias.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time.
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
