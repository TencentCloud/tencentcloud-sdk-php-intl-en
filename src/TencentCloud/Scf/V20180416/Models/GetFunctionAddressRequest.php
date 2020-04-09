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
 * GetFunctionAddress request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getQualifier() Obtain Function version
 * @method void setQualifier(string $Qualifier) Set Function version
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 */
class GetFunctionAddressRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Function version
     */
    public $Qualifier;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @param string $FunctionName Function name
     * @param string $Qualifier Function version
     * @param string $Namespace Function namespace
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
