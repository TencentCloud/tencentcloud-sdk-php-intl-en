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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Team details.
 *
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method integer getTeamRoleType() Obtain <p>Team role type. Valid values: 1: Mini program team; 2: Superapp team.</p>
 * @method void setTeamRoleType(integer $TeamRoleType) Set <p>Team role type. Valid values: 1: Mini program team; 2: Superapp team.</p>
 * @method string getAdminUserAccount() Obtain <p>Administrator account.</p>
 * @method void setAdminUserAccount(string $AdminUserAccount) Set <p>Administrator account.</p>
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getMemberCount() Obtain <p>Number of team members.</p>
 * @method void setMemberCount(integer $MemberCount) Set <p>Number of team members.</p>
 * @method integer getBindMiniTeamCount() Obtain <p>Number of bound mini program teams.</p>
 * @method void setBindMiniTeamCount(integer $BindMiniTeamCount) Set <p>Number of bound mini program teams.</p>
 * @method string getBindTeamName() Obtain <p>Team name.</p>
 * @method void setBindTeamName(string $BindTeamName) Set <p>Team name.</p>
 * @method string getRegisterLink() Obtain <p>Team registration link.</p>
 * @method void setRegisterLink(string $RegisterLink) Set <p>Team registration link.</p>
 * @method string getApplicationName() Obtain <p>Superapp name. Only returned for querying details of mini program teams.</p>
 * @method void setApplicationName(string $ApplicationName) Set <p>Superapp name. Only returned for querying details of mini program teams.</p>
 * @method integer getExpireTime() Obtain <p>Team expiration time. 0 indicates no expiration.</p>
 * @method void setExpireTime(integer $ExpireTime) Set <p>Team expiration time. 0 indicates no expiration.</p>
 * @method integer getStatus() Obtain <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
 * @method void setStatus(integer $Status) Set <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
 * @method string getAdminUserName() Obtain <p>Administrator name.</p>
 * @method void setAdminUserName(string $AdminUserName) Set <p>Administrator name.</p>
 */
class DescribeTeamDetailResp extends AbstractModel
{
    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var integer <p>Team role type. Valid values: 1: Mini program team; 2: Superapp team.</p>
     */
    public $TeamRoleType;

    /**
     * @var string <p>Administrator account.</p>
     */
    public $AdminUserAccount;

    /**
     * @var string <p>Creator.</p>
     */
    public $CreateUser;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Number of team members.</p>
     */
    public $MemberCount;

    /**
     * @var integer <p>Number of bound mini program teams.</p>
     */
    public $BindMiniTeamCount;

    /**
     * @var string <p>Team name.</p>
     */
    public $BindTeamName;

    /**
     * @var string <p>Team registration link.</p>
     */
    public $RegisterLink;

    /**
     * @var string <p>Superapp name. Only returned for querying details of mini program teams.</p>
     */
    public $ApplicationName;

    /**
     * @var integer <p>Team expiration time. 0 indicates no expiration.</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
     */
    public $Status;

    /**
     * @var string <p>Administrator name.</p>
     */
    public $AdminUserName;

    /**
     * @param string $TeamName <p>Team name.</p>
     * @param integer $TeamRoleType <p>Team role type. Valid values: 1: Mini program team; 2: Superapp team.</p>
     * @param string $AdminUserAccount <p>Administrator account.</p>
     * @param string $CreateUser <p>Creator.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $MemberCount <p>Number of team members.</p>
     * @param integer $BindMiniTeamCount <p>Number of bound mini program teams.</p>
     * @param string $BindTeamName <p>Team name.</p>
     * @param string $RegisterLink <p>Team registration link.</p>
     * @param string $ApplicationName <p>Superapp name. Only returned for querying details of mini program teams.</p>
     * @param integer $ExpireTime <p>Team expiration time. 0 indicates no expiration.</p>
     * @param integer $Status <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
     * @param string $AdminUserName <p>Administrator name.</p>
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
        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("TeamRoleType",$param) and $param["TeamRoleType"] !== null) {
            $this->TeamRoleType = $param["TeamRoleType"];
        }

        if (array_key_exists("AdminUserAccount",$param) and $param["AdminUserAccount"] !== null) {
            $this->AdminUserAccount = $param["AdminUserAccount"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("BindMiniTeamCount",$param) and $param["BindMiniTeamCount"] !== null) {
            $this->BindMiniTeamCount = $param["BindMiniTeamCount"];
        }

        if (array_key_exists("BindTeamName",$param) and $param["BindTeamName"] !== null) {
            $this->BindTeamName = $param["BindTeamName"];
        }

        if (array_key_exists("RegisterLink",$param) and $param["RegisterLink"] !== null) {
            $this->RegisterLink = $param["RegisterLink"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AdminUserName",$param) and $param["AdminUserName"] !== null) {
            $this->AdminUserName = $param["AdminUserName"];
        }
    }
}
