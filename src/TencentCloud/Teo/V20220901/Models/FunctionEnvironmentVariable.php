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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment variables of an edge function
 *
 * @method string getKey() Obtain Variable name, which should be unique and can only contain uppercase and lowercase letters, digits, and special characters including at signs (@), periods (.), hyphens (-), and underscores (_). Its maximum size is 64 bytes.
 * @method void setKey(string $Key) Set Variable name, which should be unique and can only contain uppercase and lowercase letters, digits, and special characters including at signs (@), periods (.), hyphens (-), and underscores (_). Its maximum size is 64 bytes.
 * @method string getValue() Obtain Variable value. Its maximum size is 5000 bytes. The default value is empty.
 * @method void setValue(string $Value) Set Variable value. Its maximum size is 5000 bytes. The default value is empty.
 * @method string getType() Obtain Variable type. Valid values:
<li>string: string type;</li>
<li>json: JSON object type.</li>Default value: string.
 * @method void setType(string $Type) Set Variable type. Valid values:
<li>string: string type;</li>
<li>json: JSON object type.</li>Default value: string.
 */
class FunctionEnvironmentVariable extends AbstractModel
{
    /**
     * @var string Variable name, which should be unique and can only contain uppercase and lowercase letters, digits, and special characters including at signs (@), periods (.), hyphens (-), and underscores (_). Its maximum size is 64 bytes.
     */
    public $Key;

    /**
     * @var string Variable value. Its maximum size is 5000 bytes. The default value is empty.
     */
    public $Value;

    /**
     * @var string Variable type. Valid values:
<li>string: string type;</li>
<li>json: JSON object type.</li>Default value: string.
     */
    public $Type;

    /**
     * @param string $Key Variable name, which should be unique and can only contain uppercase and lowercase letters, digits, and special characters including at signs (@), periods (.), hyphens (-), and underscores (_). Its maximum size is 64 bytes.
     * @param string $Value Variable value. Its maximum size is 5000 bytes. The default value is empty.
     * @param string $Type Variable type. Valid values:
<li>string: string type;</li>
<li>json: JSON object type.</li>Default value: string.
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
    }
}
