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
 * CreatePrivateDNSAccount request structure.
 *
 * @method PrivateDNSAccount getAccount() Obtain Private DNS account
 * @method void setAccount(PrivateDNSAccount $Account) Set Private DNS account
 */
class CreatePrivateDNSAccountRequest extends AbstractModel
{
    /**
     * @var PrivateDNSAccount Private DNS account
     */
    public $Account;

    /**
     * @param PrivateDNSAccount $Account Private DNS account
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
        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new PrivateDNSAccount();
            $this->Account->deserialize($param["Account"]);
        }
    }
}
