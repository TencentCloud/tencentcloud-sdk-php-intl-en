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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Login password information
 *
 * @method string getAutoGeneratePassword() Obtain <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
 * @method void setAutoGeneratePassword(string $AutoGeneratePassword) Set <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
 * @method string getPassword() Obtain Instance login password. 
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username. 
<li>Lowercase letters: [a–z]</li>
<li>Uppercase letters: [A–Z]</li>
<li>Digits: 0-9</li>
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
 * @method void setPassword(string $Password) Set Instance login password. 
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username. 
<li>Lowercase letters: [a–z]</li>
<li>Uppercase letters: [A–Z]</li>
<li>Digits: 0-9</li>
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
 * @method array getKeyIds() Obtain Key ID list. You can specify up to 5 keys simultaneously. After associating keys, you can access the instance using the corresponding private key. Keys and passwords cannot be specified simultaneously. Additionally, the WINDOWS operating system does not support key specification. The key ID list can be obtained via the [DescribeKeyPairs](https://cloud.tencent.com/document/product/1207/55540) API.
 * @method void setKeyIds(array $KeyIds) Set Key ID list. You can specify up to 5 keys simultaneously. After associating keys, you can access the instance using the corresponding private key. Keys and passwords cannot be specified simultaneously. Additionally, the WINDOWS operating system does not support key specification. The key ID list can be obtained via the [DescribeKeyPairs](https://cloud.tencent.com/document/product/1207/55540) API.
 */
class LoginConfiguration extends AbstractModel
{
    /**
     * @var string <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
     */
    public $AutoGeneratePassword;

    /**
     * @var string Instance login password. 
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username. 
<li>Lowercase letters: [a–z]</li>
<li>Uppercase letters: [A–Z]</li>
<li>Digits: 0-9</li>
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
     */
    public $Password;

    /**
     * @var array Key ID list. You can specify up to 5 keys simultaneously. After associating keys, you can access the instance using the corresponding private key. Keys and passwords cannot be specified simultaneously. Additionally, the WINDOWS operating system does not support key specification. The key ID list can be obtained via the [DescribeKeyPairs](https://cloud.tencent.com/document/product/1207/55540) API.
     */
    public $KeyIds;

    /**
     * @param string $AutoGeneratePassword <li>`YES`: Random password. In this case, `Password` cannot be specified. </li>
<li>`No`: Custom. `Password` must be specified. </li>
     * @param string $Password Instance login password. 
For Windows instances, the password must contain 12 to 30 characters of the following types. It cannot start with “/” and cannot include the username. 
<li>Lowercase letters: [a–z]</li>
<li>Uppercase letters: [A–Z]</li>
<li>Digits: 0-9</li>
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
     * @param array $KeyIds Key ID list. You can specify up to 5 keys simultaneously. After associating keys, you can access the instance using the corresponding private key. Keys and passwords cannot be specified simultaneously. Additionally, the WINDOWS operating system does not support key specification. The key ID list can be obtained via the [DescribeKeyPairs](https://cloud.tencent.com/document/product/1207/55540) API.
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

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
