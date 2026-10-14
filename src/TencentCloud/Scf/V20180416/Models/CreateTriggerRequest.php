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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrigger request structure.
 *
 * @method string getFunctionName() Obtain Function name bound to the created trigger
 * @method void setFunctionName(string $FunctionName) Set Function name bound to the created trigger
 * @method string getTriggerName() Obtain Name of the trigger to create. If it is a scheduled trigger, the name supports English letters, digits, hyphens, and underscores, up to 100 characters. If it is a COS trigger, it must be the access domain of the corresponding COS storage bucket suitable for the XML API (for example, 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com). For other triggers, see the parameter description of the specific trigger binding.
 * @method void setTriggerName(string $TriggerName) Set Name of the trigger to create. If it is a scheduled trigger, the name supports English letters, digits, hyphens, and underscores, up to 100 characters. If it is a COS trigger, it must be the access domain of the corresponding COS storage bucket suitable for the XML API (for example, 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com). For other triggers, see the parameter description of the specific trigger binding.
 * @method string getType() Obtain Trigger type. Currently supports cos, cls, timer, ckafka, and http types. To create a function URL, please use the http type. See [Creating a Function URL](https://www.tencentcloud.com/document/product/583/100227?from_cn_redirect=1#33bbbda4-9131-48a6-ac37-ac62ffe01424). To create a cls trigger, see CLS Creating Delivery SCF Task.
 * @method void setType(string $Type) Set Trigger type. Currently supports cos, cls, timer, ckafka, and http types. To create a function URL, please use the http type. See [Creating a Function URL](https://www.tencentcloud.com/document/product/583/100227?from_cn_redirect=1#33bbbda4-9131-48a6-ac37-ac62ffe01424). To create a cls trigger, see CLS Creating Delivery SCF Task.
 * @method string getTriggerDesc() Obtain Parameters corresponding to the trigger. For details, see [Trigger Description](https://www.tencentcloud.com/document/product/583/39901?from_cn_redirect=1).
 * @method void setTriggerDesc(string $TriggerDesc) Set Parameters corresponding to the trigger. For details, see [Trigger Description](https://www.tencentcloud.com/document/product/583/39901?from_cn_redirect=1).
 * @method string getNamespace() Obtain Namespace of the function
 * @method void setNamespace(string $Namespace) Set Namespace of the function
 * @method string getQualifier() Obtain Version or alias that the trigger takes effect on. It is recommended to fill in $DEFAULT for future grayscale release. Default value: $LATEST.
 * @method void setQualifier(string $Qualifier) Set Version or alias that the trigger takes effect on. It is recommended to fill in $DEFAULT for future grayscale release. Default value: $LATEST.
 * @method string getEnable() Obtain Initial status of the trigger. OPEN means enabling, and CLOSE means disabling.
 * @method void setEnable(string $Enable) Set Initial status of the trigger. OPEN means enabling, and CLOSE means disabling.
 * @method string getCustomArgument() Obtain User-defined parameter. Only timer triggers are supported.
 * @method void setCustomArgument(string $CustomArgument) Set User-defined parameter. Only timer triggers are supported.
 * @method string getDescription() Obtain Trigger description.
 * @method void setDescription(string $Description) Set Trigger description.
 */
class CreateTriggerRequest extends AbstractModel
{
    /**
     * @var string Function name bound to the created trigger
     */
    public $FunctionName;

    /**
     * @var string Name of the trigger to create. If it is a scheduled trigger, the name supports English letters, digits, hyphens, and underscores, up to 100 characters. If it is a COS trigger, it must be the access domain of the corresponding COS storage bucket suitable for the XML API (for example, 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com). For other triggers, see the parameter description of the specific trigger binding.
     */
    public $TriggerName;

    /**
     * @var string Trigger type. Currently supports cos, cls, timer, ckafka, and http types. To create a function URL, please use the http type. See [Creating a Function URL](https://www.tencentcloud.com/document/product/583/100227?from_cn_redirect=1#33bbbda4-9131-48a6-ac37-ac62ffe01424). To create a cls trigger, see CLS Creating Delivery SCF Task.
     */
    public $Type;

    /**
     * @var string Parameters corresponding to the trigger. For details, see [Trigger Description](https://www.tencentcloud.com/document/product/583/39901?from_cn_redirect=1).
     */
    public $TriggerDesc;

    /**
     * @var string Namespace of the function
     */
    public $Namespace;

    /**
     * @var string Version or alias that the trigger takes effect on. It is recommended to fill in $DEFAULT for future grayscale release. Default value: $LATEST.
     */
    public $Qualifier;

    /**
     * @var string Initial status of the trigger. OPEN means enabling, and CLOSE means disabling.
     */
    public $Enable;

    /**
     * @var string User-defined parameter. Only timer triggers are supported.
     */
    public $CustomArgument;

    /**
     * @var string Trigger description.
     */
    public $Description;

    /**
     * @param string $FunctionName Function name bound to the created trigger
     * @param string $TriggerName Name of the trigger to create. If it is a scheduled trigger, the name supports English letters, digits, hyphens, and underscores, up to 100 characters. If it is a COS trigger, it must be the access domain of the corresponding COS storage bucket suitable for the XML API (for example, 5401-5ff414-12345.cos.ap-shanghai.myqcloud.com). For other triggers, see the parameter description of the specific trigger binding.
     * @param string $Type Trigger type. Currently supports cos, cls, timer, ckafka, and http types. To create a function URL, please use the http type. See [Creating a Function URL](https://www.tencentcloud.com/document/product/583/100227?from_cn_redirect=1#33bbbda4-9131-48a6-ac37-ac62ffe01424). To create a cls trigger, see CLS Creating Delivery SCF Task.
     * @param string $TriggerDesc Parameters corresponding to the trigger. For details, see [Trigger Description](https://www.tencentcloud.com/document/product/583/39901?from_cn_redirect=1).
     * @param string $Namespace Namespace of the function
     * @param string $Qualifier Version or alias that the trigger takes effect on. It is recommended to fill in $DEFAULT for future grayscale release. Default value: $LATEST.
     * @param string $Enable Initial status of the trigger. OPEN means enabling, and CLOSE means disabling.
     * @param string $CustomArgument User-defined parameter. Only timer triggers are supported.
     * @param string $Description Trigger description.
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

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CustomArgument",$param) and $param["CustomArgument"] !== null) {
            $this->CustomArgument = $param["CustomArgument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
