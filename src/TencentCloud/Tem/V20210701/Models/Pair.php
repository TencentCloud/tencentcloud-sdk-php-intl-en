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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key value pair
 *
 * @method string getKey() Obtain Key
 * @method void setKey(string $Key) Set Key
 * @method string getValue() Obtain Value
 * @method void setValue(string $Value) Set Value
 * @method string getType() Obtain `default``: Custom. `reserved`: System variable. `referenced`: Referenced configuration item.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setType(string $Type) Set `default``: Custom. `reserved`: System variable. `referenced`: Referenced configuration item.
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getConfig() Obtain Configuration name
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setConfig(string $Config) Set Configuration name
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getSecret() Obtain Encrypt configuration name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSecret(string $Secret) Set Encrypt configuration name
Note: This field may return `null`, indicating that no valid value was found.
 */
class Pair extends AbstractModel
{
    /**
     * @var string Key
     */
    public $Key;

    /**
     * @var string Value
     */
    public $Value;

    /**
     * @var string `default``: Custom. `reserved`: System variable. `referenced`: Referenced configuration item.
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Type;

    /**
     * @var string Configuration name
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Config;

    /**
     * @var string Encrypt configuration name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Secret;

    /**
     * @param string $Key Key
     * @param string $Value Value
     * @param string $Type `default``: Custom. `reserved`: System variable. `referenced`: Referenced configuration item.
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $Config Configuration name
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $Secret Encrypt configuration name
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }
    }
}
