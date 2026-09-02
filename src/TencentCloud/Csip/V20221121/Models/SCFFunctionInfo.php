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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Streamlined SCF function info
 *
 * @method string getFunctionId() Obtain Function ID
Parameter format: such as lam-xxxxxxxx
 * @method void setFunctionId(string $FunctionId) Set Function ID
Parameter format: such as lam-xxxxxxxx
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getStatus() Obtain Function status
Enumeration value:
Active: available
Creating
Updating
CreateFailed: creation failed
Deleting: deleting.
 * @method void setStatus(string $Status) Set Function status
Enumeration value:
Active: available
Creating
Updating
CreateFailed: creation failed
Deleting: deleting.
 * @method string getType() Obtain Function type
Enumeration value:
Event: Event function (the current API only returns this type)
 * @method void setType(string $Type) Set Function type
Enumeration value:
Event: Event function (the current API only returns this type)
 */
class SCFFunctionInfo extends AbstractModel
{
    /**
     * @var string Function ID
Parameter format: such as lam-xxxxxxxx
     */
    public $FunctionId;

    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Function status
Enumeration value:
Active: available
Creating
Updating
CreateFailed: creation failed
Deleting: deleting.
     */
    public $Status;

    /**
     * @var string Function type
Enumeration value:
Event: Event function (the current API only returns this type)
     */
    public $Type;

    /**
     * @param string $FunctionId Function ID
Parameter format: such as lam-xxxxxxxx
     * @param string $FunctionName Function name
     * @param string $Namespace Namespace
     * @param string $Status Function status
Enumeration value:
Active: available
Creating
Updating
CreateFailed: creation failed
Deleting: deleting.
     * @param string $Type Function type
Enumeration value:
Event: Event function (the current API only returns this type)
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
