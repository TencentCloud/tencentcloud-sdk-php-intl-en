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
 * Basic user information
 *
 * @method string getUserUin() Obtain <p>uin</p>
 * @method void setUserUin(string $UserUin) Set <p>uin</p>
 * @method string getUserName() Obtain <p>Sub-user name</p>
 * @method void setUserName(string $UserName) Set <p>Sub-user name</p>
 * @method string getNickname() Obtain <p>Sub-user nickname</p>
 * @method void setNickname(string $Nickname) Set <p>Sub-user nickname</p>
 * @method string getUserTag() Obtain <p>0: general user 1: entraId user</p>
 * @method void setUserTag(string $UserTag) Set <p>0: general user 1: entraId user</p>
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string <p>uin</p>
     */
    public $UserUin;

    /**
     * @var string <p>Sub-user name</p>
     */
    public $UserName;

    /**
     * @var string <p>Sub-user nickname</p>
     */
    public $Nickname;

    /**
     * @var string <p>0: general user 1: entraId user</p>
     */
    public $UserTag;

    /**
     * @param string $UserUin <p>uin</p>
     * @param string $UserName <p>Sub-user name</p>
     * @param string $Nickname <p>Sub-user nickname</p>
     * @param string $UserTag <p>0: general user 1: entraId user</p>
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
