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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Added user information list
 *
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getUserGroup() Obtain The group to which the user belongs
 * @method void setUserGroup(string $UserGroup) Set The group to which the user belongs
 * @method string getPassWord() Obtain 
 * @method void setPassWord(string $PassWord) Set 
 * @method string getReMark() Obtain 
 * @method void setReMark(string $ReMark) Set 
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
     * @var string 
     */
    public $PassWord;

    /**
     * @var string 
     */
    public $ReMark;

    /**
     * @param string $UserName Username
     * @param string $UserGroup The group to which the user belongs
     * @param string $PassWord 
     * @param string $ReMark 
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
    }
}
