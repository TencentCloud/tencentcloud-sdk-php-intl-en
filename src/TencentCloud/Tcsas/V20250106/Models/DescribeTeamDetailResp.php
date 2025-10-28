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
 * Team details
 *
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method integer getTeamRoleType() Obtain Team role type 1-mini program team 2-application team
 * @method void setTeamRoleType(integer $TeamRoleType) Set Team role type 1-mini program team 2-application team
 * @method string getAdminUserAccount() Obtain Administrator account
 * @method void setAdminUserAccount(string $AdminUserAccount) Set Administrator account
 * @method string getCreateUser() Obtain Creator
 * @method void setCreateUser(string $CreateUser) Set Creator
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getMemberCount() Obtain Number of team members
 * @method void setMemberCount(integer $MemberCount) Set Number of team members
 * @method integer getBindMiniTeamCount() Obtain Number of bound mini program teams
 * @method void setBindMiniTeamCount(integer $BindMiniTeamCount) Set Number of bound mini program teams
 * @method string getBindTeamName() Obtain Name of the bound team
 * @method void setBindTeamName(string $BindTeamName) Set Name of the bound team
 * @method string getRegisterLink() Obtain Team registration link
 * @method void setRegisterLink(string $RegisterLink) Set Team registration link
 * @method string getApplicationName() Obtain Application name. It Is required when querying details of a mini program team.
 * @method void setApplicationName(string $ApplicationName) Set Application name. It Is required when querying details of a mini program team.
 * @method integer getExpireTime() Obtain Team expiration time. 0 means never expire.
 * @method void setExpireTime(integer $ExpireTime) Set Team expiration time. 0 means never expire.
 * @method integer getStatus() Obtain Team status. valid values: 1: normal; 2: disabled; 3: expired.
 * @method void setStatus(integer $Status) Set Team status. valid values: 1: normal; 2: disabled; 3: expired.
 */
class DescribeTeamDetailResp extends AbstractModel
{
    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var integer Team role type 1-mini program team 2-application team
     */
    public $TeamRoleType;

    /**
     * @var string Administrator account
     */
    public $AdminUserAccount;

    /**
     * @var string Creator
     */
    public $CreateUser;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Number of team members
     */
    public $MemberCount;

    /**
     * @var integer Number of bound mini program teams
     */
    public $BindMiniTeamCount;

    /**
     * @var string Name of the bound team
     */
    public $BindTeamName;

    /**
     * @var string Team registration link
     */
    public $RegisterLink;

    /**
     * @var string Application name. It Is required when querying details of a mini program team.
     */
    public $ApplicationName;

    /**
     * @var integer Team expiration time. 0 means never expire.
     */
    public $ExpireTime;

    /**
     * @var integer Team status. valid values: 1: normal; 2: disabled; 3: expired.
     */
    public $Status;

    /**
     * @param string $TeamName Team name
     * @param integer $TeamRoleType Team role type 1-mini program team 2-application team
     * @param string $AdminUserAccount Administrator account
     * @param string $CreateUser Creator
     * @param string $CreateTime Creation time
     * @param integer $MemberCount Number of team members
     * @param integer $BindMiniTeamCount Number of bound mini program teams
     * @param string $BindTeamName Name of the bound team
     * @param string $RegisterLink Team registration link
     * @param string $ApplicationName Application name. It Is required when querying details of a mini program team.
     * @param integer $ExpireTime Team expiration time. 0 means never expire.
     * @param integer $Status Team status. valid values: 1: normal; 2: disabled; 3: expired.
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
    }
}
