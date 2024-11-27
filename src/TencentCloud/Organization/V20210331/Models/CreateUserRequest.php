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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getUserName() Obtain User name, which must be unique within the space and cannot be modified. It contains up to 64 characters, including digits, English letters, and special characters such as plus signs (+), equal signs (=), commas (,), periods (.), at signs (@), hyphens (-), and underscores (_).
 * @method void setUserName(string $UserName) Set User name, which must be unique within the space and cannot be modified. It contains up to 64 characters, including digits, English letters, and special characters such as plus signs (+), equal signs (=), commas (,), periods (.), at signs (@), hyphens (-), and underscores (_).
 * @method string getFirstName() Obtain Last name of the user, which contains up to 64 characters.
 * @method void setFirstName(string $FirstName) Set Last name of the user, which contains up to 64 characters.
 * @method string getLastName() Obtain First name of the user, which contains up to 64 characters.
 * @method void setLastName(string $LastName) Set First name of the user, which contains up to 64 characters.
 * @method string getDisplayName() Obtain Display name of the user, which contains up to 256 characters.
 * @method void setDisplayName(string $DisplayName) Set Display name of the user, which contains up to 256 characters.
 * @method string getDescription() Obtain User description, which contains up to 1024 characters.
 * @method void setDescription(string $Description) Set User description, which contains up to 1024 characters.
 * @method string getEmail() Obtain Email address of the user, which must be unique within the directory and contains up to 128 characters.
 * @method void setEmail(string $Email) Set Email address of the user, which must be unique within the directory and contains up to 128 characters.
 * @method string getUserStatus() Obtain User status. Valid values: Enabled (default), Disabled.
 * @method void setUserStatus(string $UserStatus) Set User status. Valid values: Enabled (default), Disabled.
 * @method string getUserType() Obtain User type. Manual: manually created, Synchronized: imported from external sources.
 * @method void setUserType(string $UserType) Set User type. Manual: manually created, Synchronized: imported from external sources.
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string User name, which must be unique within the space and cannot be modified. It contains up to 64 characters, including digits, English letters, and special characters such as plus signs (+), equal signs (=), commas (,), periods (.), at signs (@), hyphens (-), and underscores (_).
     */
    public $UserName;

    /**
     * @var string Last name of the user, which contains up to 64 characters.
     */
    public $FirstName;

    /**
     * @var string First name of the user, which contains up to 64 characters.
     */
    public $LastName;

    /**
     * @var string Display name of the user, which contains up to 256 characters.
     */
    public $DisplayName;

    /**
     * @var string User description, which contains up to 1024 characters.
     */
    public $Description;

    /**
     * @var string Email address of the user, which must be unique within the directory and contains up to 128 characters.
     */
    public $Email;

    /**
     * @var string User status. Valid values: Enabled (default), Disabled.
     */
    public $UserStatus;

    /**
     * @var string User type. Manual: manually created, Synchronized: imported from external sources.
     */
    public $UserType;

    /**
     * @param string $ZoneId Space ID.
     * @param string $UserName User name, which must be unique within the space and cannot be modified. It contains up to 64 characters, including digits, English letters, and special characters such as plus signs (+), equal signs (=), commas (,), periods (.), at signs (@), hyphens (-), and underscores (_).
     * @param string $FirstName Last name of the user, which contains up to 64 characters.
     * @param string $LastName First name of the user, which contains up to 64 characters.
     * @param string $DisplayName Display name of the user, which contains up to 256 characters.
     * @param string $Description User description, which contains up to 1024 characters.
     * @param string $Email Email address of the user, which must be unique within the directory and contains up to 128 characters.
     * @param string $UserStatus User status. Valid values: Enabled (default), Disabled.
     * @param string $UserType User type. Manual: manually created, Synchronized: imported from external sources.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
    }
}
