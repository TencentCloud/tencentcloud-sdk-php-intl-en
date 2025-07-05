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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User information.
 *
 * @method string getUserName() Obtain Queried username.
 * @method void setUserName(string $UserName) Set Queried username.
 * @method string getFirstName() Obtain First name of the user.
 * @method void setFirstName(string $FirstName) Set First name of the user.
 * @method string getLastName() Obtain Last name of the user.
 * @method void setLastName(string $LastName) Set Last name of the user.
 * @method string getDisplayName() Obtain Display name of the user.
 * @method void setDisplayName(string $DisplayName) Set Display name of the user.
 * @method string getDescription() Obtain User description.
 * @method void setDescription(string $Description) Set User description.
 * @method string getEmail() Obtain Email address of the user, which must be unique within the directory.
 * @method void setEmail(string $Email) Set Email address of the user, which must be unique within the directory.
 * @method string getUserStatus() Obtain User status. Valid values: Enabled, Disabled.
 * @method void setUserStatus(string $UserStatus) Set User status. Valid values: Enabled, Disabled.
 * @method string getUserType() Obtain User type. Manual: manually created; Synchronized: externally imported.
 * @method void setUserType(string $UserType) Set User type. Manual: manually created; Synchronized: externally imported.
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getCreateTime() Obtain Creation time of the user.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the user.
 * @method string getUpdateTime() Obtain Modification time of the user.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time of the user.
 * @method boolean getIsSelected() Obtain Whether selected
 * @method void setIsSelected(boolean $IsSelected) Set Whether selected
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string Queried username.
     */
    public $UserName;

    /**
     * @var string First name of the user.
     */
    public $FirstName;

    /**
     * @var string Last name of the user.
     */
    public $LastName;

    /**
     * @var string Display name of the user.
     */
    public $DisplayName;

    /**
     * @var string User description.
     */
    public $Description;

    /**
     * @var string Email address of the user, which must be unique within the directory.
     */
    public $Email;

    /**
     * @var string User status. Valid values: Enabled, Disabled.
     */
    public $UserStatus;

    /**
     * @var string User type. Manual: manually created; Synchronized: externally imported.
     */
    public $UserType;

    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string Creation time of the user.
     */
    public $CreateTime;

    /**
     * @var string Modification time of the user.
     */
    public $UpdateTime;

    /**
     * @var boolean Whether selected
     */
    public $IsSelected;

    /**
     * @param string $UserName Queried username.
     * @param string $FirstName First name of the user.
     * @param string $LastName Last name of the user.
     * @param string $DisplayName Display name of the user.
     * @param string $Description User description.
     * @param string $Email Email address of the user, which must be unique within the directory.
     * @param string $UserStatus User status. Valid values: Enabled, Disabled.
     * @param string $UserType User type. Manual: manually created; Synchronized: externally imported.
     * @param string $UserId User ID.
     * @param string $CreateTime Creation time of the user.
     * @param string $UpdateTime Modification time of the user.
     * @param boolean $IsSelected Whether selected
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            $this->UserStatus = $param["UserStatus"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsSelected",$param) and $param["IsSelected"] !== null) {
            $this->IsSelected = $param["IsSelected"];
        }
    }
}
