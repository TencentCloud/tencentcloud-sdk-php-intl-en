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
 * Default settings of resource scheduling.
 *
 * @method string getName() Obtain Name, which is used as the key for request parameters.
 * @method void setName(string $Name) Set Name, which is used as the key for request parameters.
 * @method string getDesc() Obtain Description.
 * @method void setDesc(string $Desc) Set Description.
 * @method string getPrompt() Obtain Prompt.
 * @method void setPrompt(string $Prompt) Set Prompt.
 * @method string getKey() Obtain Key, which is used to display the configuration items in the configuration file.
 * @method void setKey(string $Key) Set Key, which is used to display the configuration items in the configuration file.
 * @method string getValue() Obtain Name value.
 * @method void setValue(string $Value) Set Name value.
 */
class DefaultSetting extends AbstractModel
{
    /**
     * @var string Name, which is used as the key for request parameters.
     */
    public $Name;

    /**
     * @var string Description.
     */
    public $Desc;

    /**
     * @var string Prompt.
     */
    public $Prompt;

    /**
     * @var string Key, which is used to display the configuration items in the configuration file.
     */
    public $Key;

    /**
     * @var string Name value.
     */
    public $Value;

    /**
     * @param string $Name Name, which is used as the key for request parameters.
     * @param string $Desc Description.
     * @param string $Prompt Prompt.
     * @param string $Key Key, which is used to display the configuration items in the configuration file.
     * @param string $Value Name value.
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
