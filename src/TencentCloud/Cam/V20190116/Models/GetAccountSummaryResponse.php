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
 * GetAccountSummary response structure.
 *
 * @method integer getPolicies() Obtain Number of policies
 * @method void setPolicies(integer $Policies) Set Number of policies
 * @method integer getRoles() Obtain Number of roles
 * @method void setRoles(integer $Roles) Set Number of roles
 * @method integer getIdps() Obtain Number of identity providers
 * @method void setIdps(integer $Idps) Set Number of identity providers
 * @method integer getUser() Obtain Number of sub-accounts
 * @method void setUser(integer $User) Set Number of sub-accounts
 * @method integer getGroup() Obtain Number of groups
 * @method void setGroup(integer $Group) Set Number of groups
 * @method integer getMember() Obtain Total number of grouped users
 * @method void setMember(integer $Member) Set Total number of grouped users
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetAccountSummaryResponse extends AbstractModel
{
    /**
     * @var integer Number of policies
     */
    public $Policies;

    /**
     * @var integer Number of roles
     */
    public $Roles;

    /**
     * @var integer Number of identity providers
     */
    public $Idps;

    /**
     * @var integer Number of sub-accounts
     */
    public $User;

    /**
     * @var integer Number of groups
     */
    public $Group;

    /**
     * @var integer Total number of grouped users
     */
    public $Member;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Policies Number of policies
     * @param integer $Roles Number of roles
     * @param integer $Idps Number of identity providers
     * @param integer $User Number of sub-accounts
     * @param integer $Group Number of groups
     * @param integer $Member Total number of grouped users
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Policies",$param) and $param["Policies"] !== null) {
            $this->Policies = $param["Policies"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }

        if (array_key_exists("Idps",$param) and $param["Idps"] !== null) {
            $this->Idps = $param["Idps"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Member",$param) and $param["Member"] !== null) {
            $this->Member = $param["Member"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
