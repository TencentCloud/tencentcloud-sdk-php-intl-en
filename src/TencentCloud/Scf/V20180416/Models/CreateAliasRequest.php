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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlias request structure.
 *
 * @method string getName() Obtain Alias name, which must be unique in the function, can contain 1 to 64 letters, digits, `_`, and `-`, and must begin with a letter
 * @method void setName(string $Name) Set Alias name, which must be unique in the function, can contain 1 to 64 letters, digits, `_`, and `-`, and must begin with a letter
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getFunctionVersion() Obtain Master version pointed to by the alias
 * @method void setFunctionVersion(string $FunctionVersion) Set Master version pointed to by the alias
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method RoutingConfig getRoutingConfig() Obtain Request routing configuration of alias
 * @method void setRoutingConfig(RoutingConfig $RoutingConfig) Set Request routing configuration of alias
 * @method string getDescription() Obtain Alias description
 * @method void setDescription(string $Description) Set Alias description
 */
class CreateAliasRequest extends AbstractModel
{
    /**
     * @var string Alias name, which must be unique in the function, can contain 1 to 64 letters, digits, `_`, and `-`, and must begin with a letter
     */
    public $Name;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Master version pointed to by the alias
     */
    public $FunctionVersion;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var RoutingConfig Request routing configuration of alias
     */
    public $RoutingConfig;

    /**
     * @var string Alias description
     */
    public $Description;

    /**
     * @param string $Name Alias name, which must be unique in the function, can contain 1 to 64 letters, digits, `_`, and `-`, and must begin with a letter
     * @param string $FunctionName Function name
     * @param string $FunctionVersion Master version pointed to by the alias
     * @param string $Namespace Function namespace
     * @param RoutingConfig $RoutingConfig Request routing configuration of alias
     * @param string $Description Alias description
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

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RoutingConfig",$param) and $param["RoutingConfig"] !== null) {
            $this->RoutingConfig = new RoutingConfig();
            $this->RoutingConfig->deserialize($param["RoutingConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
