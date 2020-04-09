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
 * CopyFunction request structure.
 *
 * @method string getFunctionName() Obtain Name of the function to be replicated
 * @method void setFunctionName(string $FunctionName) Set Name of the function to be replicated
 * @method string getNewFunctionName() Obtain Name of the new function
 * @method void setNewFunctionName(string $NewFunctionName) Set Name of the new function
 * @method string getNamespace() Obtain Namespace of the function to be replicated. The default value is `default`.
 * @method void setNamespace(string $Namespace) Set Namespace of the function to be replicated. The default value is `default`.
 * @method string getTargetNamespace() Obtain Namespace of the replicated function. The default value is default.
 * @method void setTargetNamespace(string $TargetNamespace) Set Namespace of the replicated function. The default value is default.
 * @method string getDescription() Obtain Description of the new function
 * @method void setDescription(string $Description) Set Description of the new function
 * @method string getTargetRegion() Obtain Region of the target of the function replication. If the value is not set, the current region is used by default.
 * @method void setTargetRegion(string $TargetRegion) Set Region of the target of the function replication. If the value is not set, the current region is used by default.
 * @method boolean getOverride() Obtain It specifies whether to replace the function with the same name in the target namespace. The default option is `FALSE`.
(Note: The `TRUE` option results in deletion of the function in the target namespace. Please operate with caution.)
TRUE: Replaces the function.
FALSE: Does not replace the function.
 * @method void setOverride(boolean $Override) Set It specifies whether to replace the function with the same name in the target namespace. The default option is `FALSE`.
(Note: The `TRUE` option results in deletion of the function in the target namespace. Please operate with caution.)
TRUE: Replaces the function.
FALSE: Does not replace the function.
 * @method boolean getCopyConfiguration() Obtain It specifies whether to replicate the function attributes, including environment variables, memory, timeout, function description, labels, and VPC. The default value is `TRUE`.
TRUE: Replicates the function configuration.
FALSE: Does not replicate the function configuration.
 * @method void setCopyConfiguration(boolean $CopyConfiguration) Set It specifies whether to replicate the function attributes, including environment variables, memory, timeout, function description, labels, and VPC. The default value is `TRUE`.
TRUE: Replicates the function configuration.
FALSE: Does not replicate the function configuration.
 */
class CopyFunctionRequest extends AbstractModel
{
    /**
     * @var string Name of the function to be replicated
     */
    public $FunctionName;

    /**
     * @var string Name of the new function
     */
    public $NewFunctionName;

    /**
     * @var string Namespace of the function to be replicated. The default value is `default`.
     */
    public $Namespace;

    /**
     * @var string Namespace of the replicated function. The default value is default.
     */
    public $TargetNamespace;

    /**
     * @var string Description of the new function
     */
    public $Description;

    /**
     * @var string Region of the target of the function replication. If the value is not set, the current region is used by default.
     */
    public $TargetRegion;

    /**
     * @var boolean It specifies whether to replace the function with the same name in the target namespace. The default option is `FALSE`.
(Note: The `TRUE` option results in deletion of the function in the target namespace. Please operate with caution.)
TRUE: Replaces the function.
FALSE: Does not replace the function.
     */
    public $Override;

    /**
     * @var boolean It specifies whether to replicate the function attributes, including environment variables, memory, timeout, function description, labels, and VPC. The default value is `TRUE`.
TRUE: Replicates the function configuration.
FALSE: Does not replicate the function configuration.
     */
    public $CopyConfiguration;

    /**
     * @param string $FunctionName Name of the function to be replicated
     * @param string $NewFunctionName Name of the new function
     * @param string $Namespace Namespace of the function to be replicated. The default value is `default`.
     * @param string $TargetNamespace Namespace of the replicated function. The default value is default.
     * @param string $Description Description of the new function
     * @param string $TargetRegion Region of the target of the function replication. If the value is not set, the current region is used by default.
     * @param boolean $Override It specifies whether to replace the function with the same name in the target namespace. The default option is `FALSE`.
(Note: The `TRUE` option results in deletion of the function in the target namespace. Please operate with caution.)
TRUE: Replaces the function.
FALSE: Does not replace the function.
     * @param boolean $CopyConfiguration It specifies whether to replicate the function attributes, including environment variables, memory, timeout, function description, labels, and VPC. The default value is `TRUE`.
TRUE: Replicates the function configuration.
FALSE: Does not replicate the function configuration.
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

        if (array_key_exists("NewFunctionName",$param) and $param["NewFunctionName"] !== null) {
            $this->NewFunctionName = $param["NewFunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TargetNamespace",$param) and $param["TargetNamespace"] !== null) {
            $this->TargetNamespace = $param["TargetNamespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("CopyConfiguration",$param) and $param["CopyConfiguration"] !== null) {
            $this->CopyConfiguration = $param["CopyConfiguration"];
        }
    }
}
