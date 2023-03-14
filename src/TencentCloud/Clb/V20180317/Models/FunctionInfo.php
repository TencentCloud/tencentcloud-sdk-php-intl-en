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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF related information
 *
 * @method string getFunctionNamespace() Obtain Function namespace
 * @method void setFunctionNamespace(string $FunctionNamespace) Set Function namespace
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getFunctionQualifier() Obtain Function version name or alias
 * @method void setFunctionQualifier(string $FunctionQualifier) Set Function version name or alias
 * @method string getFunctionQualifierType() Obtain Function qualifier type. Values: `VERSION`, `ALIAS`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFunctionQualifierType(string $FunctionQualifierType) Set Function qualifier type. Values: `VERSION`, `ALIAS`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string Function namespace
     */
    public $FunctionNamespace;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Function version name or alias
     */
    public $FunctionQualifier;

    /**
     * @var string Function qualifier type. Values: `VERSION`, `ALIAS`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FunctionQualifierType;

    /**
     * @param string $FunctionNamespace Function namespace
     * @param string $FunctionName Function name
     * @param string $FunctionQualifier Function version name or alias
     * @param string $FunctionQualifierType Function qualifier type. Values: `VERSION`, `ALIAS`.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("FunctionNamespace",$param) and $param["FunctionNamespace"] !== null) {
            $this->FunctionNamespace = $param["FunctionNamespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionQualifier",$param) and $param["FunctionQualifier"] !== null) {
            $this->FunctionQualifier = $param["FunctionQualifier"];
        }

        if (array_key_exists("FunctionQualifierType",$param) and $param["FunctionQualifierType"] !== null) {
            $this->FunctionQualifierType = $param["FunctionQualifierType"];
        }
    }
}
