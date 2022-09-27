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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Login password information
 *
 * @method string getAutoGeneratePassword() Obtain <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
 * @method void setAutoGeneratePassword(string $AutoGeneratePassword) Set <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
 * @method string getPassword() Obtain Instace login password.
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username.
<li>[a-z]</li>
<li>[A-Z]</li>
<li>[0-9]</li>
<li>[()`~!@#$%^&*-+=_|{}[]:;' <>,.?/]</li>
 * @method void setPassword(string $Password) Set Instace login password.
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username.
<li>[a-z]</li>
<li>[A-Z]</li>
<li>[0-9]</li>
<li>[()`~!@#$%^&*-+=_|{}[]:;' <>,.?/]</li>
 */
class LoginConfiguration extends AbstractModel
{
    /**
     * @var string <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
     */
    public $AutoGeneratePassword;

    /**
     * @var string Instace login password.
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username.
<li>[a-z]</li>
<li>[A-Z]</li>
<li>[0-9]</li>
<li>[()`~!@#$%^&*-+=_|{}[]:;' <>,.?/]</li>
     */
    public $Password;

    /**
     * @param string $AutoGeneratePassword <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
     * @param string $Password Instace login password.
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username.
<li>[a-z]</li>
<li>[A-Z]</li>
<li>[0-9]</li>
<li>[()`~!@#$%^&*-+=_|{}[]:;' <>,.?/]</li>
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
        if (array_key_exists("AutoGeneratePassword",$param) and $param["AutoGeneratePassword"] !== null) {
            $this->AutoGeneratePassword = $param["AutoGeneratePassword"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
