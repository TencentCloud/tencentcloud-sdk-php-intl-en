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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private DNS account
 *
 * @method string getUin() Obtain Root account UIN
 * @method void setUin(string $Uin) Set Root account UIN
 * @method string getAccount() Obtain Root account name
 * @method void setAccount(string $Account) Set Root account name
 * @method string getNickname() Obtain Account name
 * @method void setNickname(string $Nickname) Set Account name
 */
class PrivateDNSAccount extends AbstractModel
{
    /**
     * @var string Root account UIN
     */
    public $Uin;

    /**
     * @var string Root account name
     */
    public $Account;

    /**
     * @var string Account name
     */
    public $Nickname;

    /**
     * @param string $Uin Root account UIN
     * @param string $Account Root account name
     * @param string $Nickname Account name
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }
    }
}
