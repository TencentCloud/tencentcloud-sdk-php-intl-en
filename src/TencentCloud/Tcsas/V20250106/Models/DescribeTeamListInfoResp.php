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
 * Information of teams.
 *
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getAdminUserId() Obtain <p>Admin user ID.</p>
 * @method void setAdminUserId(string $AdminUserId) Set <p>Admin user ID.</p>
 * @method string getAdminUserAccount() Obtain <p>Admin account.</p>
 * @method void setAdminUserAccount(string $AdminUserAccount) Set <p>Admin account.</p>
 * @method string getAdminUserName() Obtain <p>Admin username.</p>
 * @method void setAdminUserName(string $AdminUserName) Set <p>Admin username.</p>
 * @method integer getMemberCount() Obtain <p>Number of team members.</p>
 * @method void setMemberCount(integer $MemberCount) Set <p>Number of team members.</p>
 * @method string getRegisterLink() Obtain <p>Team registration link.</p>
 * @method void setRegisterLink(string $RegisterLink) Set <p>Team registration link.</p>
 * @method array getTeamRoleTypeList() Obtain <p>Team role types.</p>
 * @method void setTeamRoleTypeList(array $TeamRoleTypeList) Set <p>Team role types.</p>
 * @method integer getRelatedTeamId() Obtain <p>Associated team ID.</p>
 * @method void setRelatedTeamId(integer $RelatedTeamId) Set <p>Associated team ID.</p>
 * @method integer getExpireTime() Obtain <p>Team expiration time. 0 indicates no expiration.</p>
 * @method void setExpireTime(integer $ExpireTime) Set <p>Team expiration time. 0 indicates no expiration.</p>
 * @method integer getStatus() Obtain <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
 * @method void setStatus(integer $Status) Set <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
 * @method array getAdminUsers() Obtain <p>Information of multiple team admin users.</p>
 * @method void setAdminUsers(array $AdminUsers) Set <p>Information of multiple team admin users.</p>
 */
class DescribeTeamListInfoResp extends AbstractModel
{
    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Admin user ID.</p>
     */
    public $AdminUserId;

    /**
     * @var string <p>Admin account.</p>
     */
    public $AdminUserAccount;

    /**
     * @var string <p>Admin username.</p>
     */
    public $AdminUserName;

    /**
     * @var integer <p>Number of team members.</p>
     */
    public $MemberCount;

    /**
     * @var string <p>Team registration link.</p>
     */
    public $RegisterLink;

    /**
     * @var array <p>Team role types.</p>
     */
    public $TeamRoleTypeList;

    /**
     * @var integer <p>Associated team ID.</p>
     */
    public $RelatedTeamId;

    /**
     * @var integer <p>Team expiration time. 0 indicates no expiration.</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
     */
    public $Status;

    /**
     * @var array <p>Information of multiple team admin users.</p>
     */
    public $AdminUsers;

    /**
     * @param string $TeamId <p>Team ID.</p>
     * @param string $TeamName <p>Team name.</p>
     * @param string $AdminUserId <p>Admin user ID.</p>
     * @param string $AdminUserAccount <p>Admin account.</p>
     * @param string $AdminUserName <p>Admin username.</p>
     * @param integer $MemberCount <p>Number of team members.</p>
     * @param string $RegisterLink <p>Team registration link.</p>
     * @param array $TeamRoleTypeList <p>Team role types.</p>
     * @param integer $RelatedTeamId <p>Associated team ID.</p>
     * @param integer $ExpireTime <p>Team expiration time. 0 indicates no expiration.</p>
     * @param integer $Status <p>Team status. Valid values: 1: Active; 2: Disabled; 3: Expired.</p>
     * @param array $AdminUsers <p>Information of multiple team admin users.</p>
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("AdminUserAccount",$param) and $param["AdminUserAccount"] !== null) {
            $this->AdminUserAccount = $param["AdminUserAccount"];
        }

        if (array_key_exists("AdminUserName",$param) and $param["AdminUserName"] !== null) {
            $this->AdminUserName = $param["AdminUserName"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("RegisterLink",$param) and $param["RegisterLink"] !== null) {
            $this->RegisterLink = $param["RegisterLink"];
        }

        if (array_key_exists("TeamRoleTypeList",$param) and $param["TeamRoleTypeList"] !== null) {
            $this->TeamRoleTypeList = $param["TeamRoleTypeList"];
        }

        if (array_key_exists("RelatedTeamId",$param) and $param["RelatedTeamId"] !== null) {
            $this->RelatedTeamId = $param["RelatedTeamId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AdminUsers",$param) and $param["AdminUsers"] !== null) {
            $this->AdminUsers = [];
            foreach ($param["AdminUsers"] as $key => $value){
                $obj = new TeamAdminUserInfo();
                $obj->deserialize($value);
                array_push($this->AdminUsers, $obj);
            }
        }
    }
}
