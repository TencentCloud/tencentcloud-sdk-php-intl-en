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
 * Configuration item (configuration management page).
 *
 * @method string getName() Obtain Configuration item name.
 * @method void setName(string $Name) Set Configuration item name.
 * @method string getValue() Obtain Configuration item value.
 * @method void setValue(string $Value) Set Configuration item value.
 * @method string getInFile() Obtain Name of the configuration file where the configuration item is located.
 * @method void setInFile(string $InFile) Set Name of the configuration file where the configuration item is located.
 */
class ConfigurationItem extends AbstractModel
{
    /**
     * @var string Configuration item name.
     */
    public $Name;

    /**
     * @var string Configuration item value.
     */
    public $Value;

    /**
     * @var string Name of the configuration file where the configuration item is located.
     */
    public $InFile;

    /**
     * @param string $Name Configuration item name.
     * @param string $Value Configuration item value.
     * @param string $InFile Name of the configuration file where the configuration item is located.
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

        if (array_key_exists("InFile",$param) and $param["InFile"] !== null) {
            $this->InFile = $param["InFile"];
        }
    }
}
