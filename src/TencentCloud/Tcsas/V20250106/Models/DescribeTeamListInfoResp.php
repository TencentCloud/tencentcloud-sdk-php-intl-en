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
 * Team list information
 *
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdminUserId() Obtain Admin ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminUserId(string $AdminUserId) Set Admin ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdminUserAccount() Obtain Admin account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminUserAccount(string $AdminUserAccount) Set Admin account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAdminUserName() Obtain Admin username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdminUserName(string $AdminUserName) Set Admin username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberCount() Obtain Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberCount(integer $MemberCount) Set Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegisterLink() Obtain Team registration link
 * @method void setRegisterLink(string $RegisterLink) Set Team registration link
 * @method array getTeamRoleTypeList() Obtain Team permission type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamRoleTypeList(array $TeamRoleTypeList) Set Team permission type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRelatedTeamId() Obtain Associated team ID
 * @method void setRelatedTeamId(integer $RelatedTeamId) Set Associated team ID
 */
class DescribeTeamListInfoResp extends AbstractModel
{
    /**
     * @var string Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamId;

    /**
     * @var string Team name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamName;

    /**
     * @var string Admin ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminUserId;

    /**
     * @var string Admin account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminUserAccount;

    /**
     * @var string Admin username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdminUserName;

    /**
     * @var integer Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberCount;

    /**
     * @var string Team registration link
     */
    public $RegisterLink;

    /**
     * @var array Team permission type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamRoleTypeList;

    /**
     * @var integer Associated team ID
     */
    public $RelatedTeamId;

    /**
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdminUserId Admin ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdminUserAccount Admin account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AdminUserName Admin username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberCount Number of team members
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegisterLink Team registration link
     * @param array $TeamRoleTypeList Team permission type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RelatedTeamId Associated team ID
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
    }
}
