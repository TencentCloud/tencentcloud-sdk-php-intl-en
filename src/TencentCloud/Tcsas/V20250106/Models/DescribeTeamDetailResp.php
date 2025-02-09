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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Team details
 *
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTeamRoleType() Obtain Team role type 1-Mini program team 2-Application team
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamRoleType(integer $TeamRoleType) Set Team role type 1-Mini program team 2-Application team
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdminUserAccount() Obtain Admin account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminUserAccount(string $AdminUserAccount) Set Admin account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateUser() Obtain Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUser(string $CreateUser) Set Creator
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberCount() Obtain Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberCount(integer $MemberCount) Set Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBindMiniTeamCount() Obtain Number of bound mini program teams
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindMiniTeamCount(integer $BindMiniTeamCount) Set Number of bound mini program teams
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBindTeamName() Obtain Name of the bound team
 * @method void setBindTeamName(string $BindTeamName) Set Name of the bound team
 * @method string getRegisterLink() Obtain Team registration link
 * @method void setRegisterLink(string $RegisterLink) Set Team registration link
 * @method string getApplicationName() Obtain Application name. It’s required when querying details of a mini program team.
 * @method void setApplicationName(string $ApplicationName) Set Application name. It’s required when querying details of a mini program team.
 */
class DescribeTeamDetailResp extends AbstractModel
{
    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var integer Team role type 1-Mini program team 2-Application team
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamRoleType;

    /**
     * @var string Admin account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminUserAccount;

    /**
     * @var string Creator
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUser;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberCount;

    /**
     * @var integer Number of bound mini program teams
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Application name. It’s required when querying details of a mini program team.
     */
    public $ApplicationName;

    /**
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TeamRoleType Team role type 1-Mini program team 2-Application team
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdminUserAccount Admin account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateUser Creator
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberCount Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BindMiniTeamCount Number of bound mini program teams
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BindTeamName Name of the bound team
     * @param string $RegisterLink Team registration link
     * @param string $ApplicationName Application name. It’s required when querying details of a mini program team.
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
    }
}
