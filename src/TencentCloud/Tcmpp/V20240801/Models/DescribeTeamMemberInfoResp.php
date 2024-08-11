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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Team member information
 *
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAccount() Obtain User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAccount(string $UserAccount) Set User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain User name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set User name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamId() Obtain Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamId(string $TeamId) Set Team ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamName() Obtain Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamName(string $TeamName) Set Team name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTeamRoleName() Obtain Team role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamRoleName(string $TeamRoleName) Set Team role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTeamRoleId() Obtain Team role ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTeamRoleId(integer $TeamRoleId) Set Team role ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCanEdit() Obtain Editable or not
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanEdit(boolean $CanEdit) Set Editable or not
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeTeamMemberInfoResp extends AbstractModel
{
    /**
     * @var string User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string User account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAccount;

    /**
     * @var string User name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

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
     * @var string Team role name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamRoleName;

    /**
     * @var integer Team role ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TeamRoleId;

    /**
     * @var boolean Editable or not
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanEdit;

    /**
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAccount User account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName User name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamId Team ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamName Team name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TeamRoleName Team role name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TeamRoleId Team role ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CanEdit Editable or not
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("TeamRoleName",$param) and $param["TeamRoleName"] !== null) {
            $this->TeamRoleName = $param["TeamRoleName"];
        }

        if (array_key_exists("TeamRoleId",$param) and $param["TeamRoleId"] !== null) {
            $this->TeamRoleId = $param["TeamRoleId"];
        }

        if (array_key_exists("CanEdit",$param) and $param["CanEdit"] !== null) {
            $this->CanEdit = $param["CanEdit"];
        }
    }
}
