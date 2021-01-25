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
 * DeleteProvisionedConcurrencyConfig request structure.
 *
 * @method string getFunctionName() Obtain Name of the function for which to delete the provisioned concurrency
 * @method void setFunctionName(string $FunctionName) Set Name of the function for which to delete the provisioned concurrency
 * @method string getQualifier() Obtain Function version number
 * @method void setQualifier(string $Qualifier) Set Function version number
 * @method string getNamespace() Obtain Function namespace. Default value: `default`
 * @method void setNamespace(string $Namespace) Set Function namespace. Default value: `default`
 */
class DeleteProvisionedConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var string Name of the function for which to delete the provisioned concurrency
     */
    public $FunctionName;

    /**
     * @var string Function version number
     */
    public $Qualifier;

    /**
     * @var string Function namespace. Default value: `default`
     */
    public $Namespace;

    /**
     * @param string $FunctionName Name of the function for which to delete the provisioned concurrency
     * @param string $Qualifier Function version number
     * @param string $Namespace Function namespace. Default value: `default`
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
