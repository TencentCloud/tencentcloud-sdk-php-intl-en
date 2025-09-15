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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Inspection task parameter.
 *
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method string getValue() Obtain Parameter value.
 * @method void setValue(string $Value) Set Parameter value.
 * @method string getKey() Obtain Unique parameter identifier.
 * @method void setKey(string $Key) Set Unique parameter identifier.
 * @method string getEditable() Obtain Whether it is editable, "true" or "false".
 * @method void setEditable(string $Editable) Set Whether it is editable, "true" or "false".
 */
class TaskSettings extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var string Parameter value.
     */
    public $Value;

    /**
     * @var string Unique parameter identifier.
     */
    public $Key;

    /**
     * @var string Whether it is editable, "true" or "false".
     */
    public $Editable;

    /**
     * @param string $Name Parameter name.
     * @param string $Value Parameter value.
     * @param string $Key Unique parameter identifier.
     * @param string $Editable Whether it is editable, "true" or "false".
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }
    }
}
