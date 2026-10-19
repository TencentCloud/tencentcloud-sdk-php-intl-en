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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancePasswordPolicy request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy it from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy it from the instance list.</p>
 * @method PasswordPolicy getPasswordPolicy() Obtain <p>Password complexity policy control object for instances, including verification metrics for password length and minimum number of various types of characters (letters/digits/special symbols).</p>
 * @method void setPasswordPolicy(PasswordPolicy $PasswordPolicy) Set <p>Password complexity policy control object for instances, including verification metrics for password length and minimum number of various types of characters (letters/digits/special symbols).</p>
 */
class ModifyInstancePasswordPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy it from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var PasswordPolicy <p>Password complexity policy control object for instances, including verification metrics for password length and minimum number of various types of characters (letters/digits/special symbols).</p>
     */
    public $PasswordPolicy;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy it from the instance list.</p>
     * @param PasswordPolicy $PasswordPolicy <p>Password complexity policy control object for instances, including verification metrics for password length and minimum number of various types of characters (letters/digits/special symbols).</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PasswordPolicy",$param) and $param["PasswordPolicy"] !== null) {
            $this->PasswordPolicy = new PasswordPolicy();
            $this->PasswordPolicy->deserialize($param["PasswordPolicy"]);
        }
    }
}
