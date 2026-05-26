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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Transfer Service (DTS) connector information
 *
 * @method string getConsumerGroupName() Obtain 
 * @method void setConsumerGroupName(string $ConsumerGroupName) Set 
 * @method string getAccount() Obtain 
 * @method void setAccount(string $Account) Set 
 * @method string getPassword() Obtain 
 * @method void setPassword(string $Password) Set 
 */
class DTSParams extends AbstractModel
{
    /**
     * @var string 
     */
    public $ConsumerGroupName;

    /**
     * @var string 
     */
    public $Account;

    /**
     * @var string 
     */
    public $Password;

    /**
     * @param string $ConsumerGroupName 
     * @param string $Account 
     * @param string $Password 
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
        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
