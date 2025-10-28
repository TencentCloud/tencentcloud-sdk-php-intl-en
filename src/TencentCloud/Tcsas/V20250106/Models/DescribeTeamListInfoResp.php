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
 * Team list information
 *
 * @method string getTeamId() Obtain Team ID
 * @method void setTeamId(string $TeamId) Set Team ID
 * @method string getTeamName() Obtain Team name
 * @method void setTeamName(string $TeamName) Set Team name
 * @method string getAdminUserId() Obtain Administrator user ID
 * @method void setAdminUserId(string $AdminUserId) Set Administrator user ID
 * @method string getAdminUserAccount() Obtain Administrator account
 * @method void setAdminUserAccount(string $AdminUserAccount) Set Administrator account
 * @method string getAdminUserName() Obtain Administrator username
 * @method void setAdminUserName(string $AdminUserName) Set Administrator username
 * @method integer getMemberCount() Obtain Number of team members
 * @method void setMemberCount(integer $MemberCount) Set Number of team members
 * @method string getRegisterLink() Obtain Team registration link
 * @method void setRegisterLink(string $RegisterLink) Set Team registration link
 * @method array getTeamRoleTypeList() Obtain Team permission type
 * @method void setTeamRoleTypeList(array $TeamRoleTypeList) Set Team permission type
 * @method integer getRelatedTeamId() Obtain Associated team ID
 * @method void setRelatedTeamId(integer $RelatedTeamId) Set Associated team ID
 * @method integer getExpireTime() Obtain Team expiration time. 0 means never expire.
 * @method void setExpireTime(integer $ExpireTime) Set Team expiration time. 0 means never expire.
 * @method integer getStatus() Obtain Team status. valid values: 1: normal; 2: disabled; 3: expired.
 * @method void setStatus(integer $Status) Set Team status. valid values: 1: normal; 2: disabled; 3: expired.
 */
class DescribeTeamListInfoResp extends AbstractModel
{
    /**
     * @var string Team ID
     */
    public $TeamId;

    /**
     * @var string Team name
     */
    public $TeamName;

    /**
     * @var string Administrator user ID
     */
    public $AdminUserId;

    /**
     * @var string Administrator account
     */
    public $AdminUserAccount;

    /**
     * @var string Administrator username
     */
    public $AdminUserName;

    /**
     * @var integer Number of team members
     */
    public $MemberCount;

    /**
     * @var string Team registration link
     */
    public $RegisterLink;

    /**
     * @var array Team permission type
     */
    public $TeamRoleTypeList;

    /**
     * @var integer Associated team ID
     */
    public $RelatedTeamId;

    /**
     * @var integer Team expiration time. 0 means never expire.
     */
    public $ExpireTime;

    /**
     * @var integer Team status. valid values: 1: normal; 2: disabled; 3: expired.
     */
    public $Status;

    /**
     * @param string $TeamId Team ID
     * @param string $TeamName Team name
     * @param string $AdminUserId Administrator user ID
     * @param string $AdminUserAccount Administrator account
     * @param string $AdminUserName Administrator username
     * @param integer $MemberCount Number of team members
     * @param string $RegisterLink Team registration link
     * @param array $TeamRoleTypeList Team permission type
     * @param integer $RelatedTeamId Associated team ID
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
    }
}
