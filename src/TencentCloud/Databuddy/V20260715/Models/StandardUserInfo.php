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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic display information of the user
 *
 * @method string getUserUin() Obtain User UIN.
 * @method void setUserUin(string $UserUin) Set User UIN.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getNickname() Obtain Nickname
 * @method void setNickname(string $Nickname) Set Nickname
 * @method string getUserTag() Obtain 0: general user; 1: Entra ID user.
 * @method void setUserTag(string $UserTag) Set 0: general user; 1: Entra ID user.
 */
class StandardUserInfo extends AbstractModel
{
    /**
     * @var string User UIN.
     */
    public $UserUin;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Nickname
     */
    public $Nickname;

    /**
     * @var string 0: general user; 1: Entra ID user.
     */
    public $UserTag;

    /**
     * @param string $UserUin User UIN.
     * @param string $UserName Username.
     * @param string $Nickname Nickname
     * @param string $UserTag 0: general user; 1: Entra ID user.
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("UserTag",$param) and $param["UserTag"] !== null) {
            $this->UserTag = $param["UserTag"];
        }
    }
}
