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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Added user information list
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getUserGroup() Obtain The group to which the user belongs
 * @method void setUserGroup(string $UserGroup) Set The group to which the user belongs
 * @method string getPassWord() Obtain Password
 * @method void setPassWord(string $PassWord) Set Password
 * @method string getReMark() Obtain Remarks
 * @method void setReMark(string $ReMark) Set Remarks
 * @method array getGroups() Obtain User subgroup.
 * @method void setGroups(array $Groups) Set User subgroup.
 */
class UserInfoForUserManager extends AbstractModel
{
    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string The group to which the user belongs
     */
    public $UserGroup;

    /**
     * @var string Password
     */
    public $PassWord;

    /**
     * @var string Remarks
     */
    public $ReMark;

    /**
     * @var array User subgroup.
     */
    public $Groups;

    /**
     * @param string $UserName Username
     * @param string $UserGroup The group to which the user belongs
     * @param string $PassWord Password
     * @param string $ReMark Remarks
     * @param array $Groups User subgroup.
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

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("ReMark",$param) and $param["ReMark"] !== null) {
            $this->ReMark = $param["ReMark"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }
    }
}
