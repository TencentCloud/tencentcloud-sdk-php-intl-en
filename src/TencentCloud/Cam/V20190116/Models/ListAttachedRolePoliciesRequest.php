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
 * ListAttachedRolePolicies request structure.
 *
 * @method integer getPage() Obtain Page number, beginning from 1
 * @method void setPage(integer $Page) Set Page number, beginning from 1
 * @method integer getRp() Obtain Number of lines per page, no more than 200
 * @method void setRp(integer $Rp) Set Number of lines per page, no more than 200
 * @method string getRoleId() Obtain Role ID, used to specify a role. Input either `RoleId` or `RoleName`
 * @method void setRoleId(string $RoleId) Set Role ID, used to specify a role. Input either `RoleId` or `RoleName`
 * @method string getRoleName() Obtain Role name, used to specify a role. Input either `RoleId` or `RoleName`
 * @method void setRoleName(string $RoleName) Set Role name, used to specify a role. Input either `RoleId` or `RoleName`
 * @method string getPolicyType() Obtain Filter according to policy type. `User` indicates querying custom policies only. `QCS` indicates querying preset policies only
 * @method void setPolicyType(string $PolicyType) Set Filter according to policy type. `User` indicates querying custom policies only. `QCS` indicates querying preset policies only
 * @method string getKeyword() Obtain Search by keyword
 * @method void setKeyword(string $Keyword) Set Search by keyword
 */
class ListAttachedRolePoliciesRequest extends AbstractModel
{
    /**
     * @var integer Page number, beginning from 1
     */
    public $Page;

    /**
     * @var integer Number of lines per page, no more than 200
     */
    public $Rp;

    /**
     * @var string Role ID, used to specify a role. Input either `RoleId` or `RoleName`
     */
    public $RoleId;

    /**
     * @var string Role name, used to specify a role. Input either `RoleId` or `RoleName`
     */
    public $RoleName;

    /**
     * @var string Filter according to policy type. `User` indicates querying custom policies only. `QCS` indicates querying preset policies only
     */
    public $PolicyType;

    /**
     * @var string Search by keyword
     */
    public $Keyword;

    /**
     * @param integer $Page Page number, beginning from 1
     * @param integer $Rp Number of lines per page, no more than 200
     * @param string $RoleId Role ID, used to specify a role. Input either `RoleId` or `RoleName`
     * @param string $RoleName Role name, used to specify a role. Input either `RoleId` or `RoleName`
     * @param string $PolicyType Filter according to policy type. `User` indicates querying custom policies only. `QCS` indicates querying preset policies only
     * @param string $Keyword Search by keyword
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
