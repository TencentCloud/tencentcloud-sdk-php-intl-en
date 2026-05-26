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
 * Team member information.
 *
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getUserAccount() Obtain User account.
 * @method void setUserAccount(string $UserAccount) Set User account.
 * @method string getUserName() Obtain User name.
 * @method void setUserName(string $UserName) Set User name.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 * @method string getTeamName() Obtain Team name.
 * @method void setTeamName(string $TeamName) Set Team name.
 * @method string getTeamRoleName() Obtain Team role name.
 * @method void setTeamRoleName(string $TeamRoleName) Set Team role name.
 * @method integer getTeamRoleId() Obtain Team role ID.
 * @method void setTeamRoleId(integer $TeamRoleId) Set Team role ID.
 * @method boolean getCanEdit() Obtain Whether it can be edited.
 * @method void setCanEdit(boolean $CanEdit) Set Whether it can be edited.
 */
class DescribeTeamMemberInfoResp extends AbstractModel
{
    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string User account.
     */
    public $UserAccount;

    /**
     * @var string User name.
     */
    public $UserName;

    /**
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @var string Team name.
     */
    public $TeamName;

    /**
     * @var string Team role name.
     */
    public $TeamRoleName;

    /**
     * @var integer Team role ID.
     */
    public $TeamRoleId;

    /**
     * @var boolean Whether it can be edited.
     */
    public $CanEdit;

    /**
     * @param string $UserId User ID.
     * @param string $UserAccount User account.
     * @param string $UserName User name.
     * @param string $TeamId Team ID.
     * @param string $TeamName Team name.
     * @param string $TeamRoleName Team role name.
     * @param integer $TeamRoleId Team role ID.
     * @param boolean $CanEdit Whether it can be edited.
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
