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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEnvironment request structure.
 *
 * @method string getName() Obtain Environment name
 * @method void setName(string $Name) Set Environment name
 * @method EnvironmentConfig getConfig() Obtain Environment configuration information
 * @method void setConfig(EnvironmentConfig $Config) Set Environment configuration information
 * @method string getDescription() Obtain Environment description
 * @method void setDescription(string $Description) Set Environment description
 * @method boolean getIsDefault() Obtain Whether it is the default environment.
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default environment.
 */
class CreateEnvironmentRequest extends AbstractModel
{
    /**
     * @var string Environment name
     */
    public $Name;

    /**
     * @var EnvironmentConfig Environment configuration information
     */
    public $Config;

    /**
     * @var string Environment description
     */
    public $Description;

    /**
     * @var boolean Whether it is the default environment.
     */
    public $IsDefault;

    /**
     * @param string $Name Environment name
     * @param EnvironmentConfig $Config Environment configuration information
     * @param string $Description Environment description
     * @param boolean $IsDefault Whether it is the default environment.
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new EnvironmentConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
