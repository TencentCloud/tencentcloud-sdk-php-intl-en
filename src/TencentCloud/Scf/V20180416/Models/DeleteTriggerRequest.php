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
 * DeleteTrigger request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getTriggerName() Obtain Trigger name to delete
 * @method void setTriggerName(string $TriggerName) Set Trigger name to delete
 * @method string getType() Obtain Trigger type to delete. Currently only `timer`, `ckafka`, `apigw`, `cls`, `cos`, `cmq`, and `http` are supported.
 * @method void setType(string $Type) Set Trigger type to delete. Currently only `timer`, `ckafka`, `apigw`, `cls`, `cos`, `cmq`, and `http` are supported.
 * @method string getNamespace() Obtain Namespace of the function
 * @method void setNamespace(string $Namespace) Set Namespace of the function
 * @method string getTriggerDesc() Obtain If the trigger type to delete is COS trigger, this field must be specified, storing data in JSON format {"event":"cos:ObjectCreated:*"}. The data content is in the same format as this field in the SetTrigger API. If the trigger type to delete is scheduled trigger or CMQ trigger, this field can be unspecified.
 * @method void setTriggerDesc(string $TriggerDesc) Set If the trigger type to delete is COS trigger, this field must be specified, storing data in JSON format {"event":"cos:ObjectCreated:*"}. The data content is in the same format as this field in the SetTrigger API. If the trigger type to delete is scheduled trigger or CMQ trigger, this field can be unspecified.
 * @method string getQualifier() Obtain The version or alias that the trigger to be deleted actually points to. Default value: $LATEST.
 * @method void setQualifier(string $Qualifier) Set The version or alias that the trigger to be deleted actually points to. Default value: $LATEST.
 */
class DeleteTriggerRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Trigger name to delete
     */
    public $TriggerName;

    /**
     * @var string Trigger type to delete. Currently only `timer`, `ckafka`, `apigw`, `cls`, `cos`, `cmq`, and `http` are supported.
     */
    public $Type;

    /**
     * @var string Namespace of the function
     */
    public $Namespace;

    /**
     * @var string If the trigger type to delete is COS trigger, this field must be specified, storing data in JSON format {"event":"cos:ObjectCreated:*"}. The data content is in the same format as this field in the SetTrigger API. If the trigger type to delete is scheduled trigger or CMQ trigger, this field can be unspecified.
     */
    public $TriggerDesc;

    /**
     * @var string The version or alias that the trigger to be deleted actually points to. Default value: $LATEST.
     */
    public $Qualifier;

    /**
     * @param string $FunctionName Function name
     * @param string $TriggerName Trigger name to delete
     * @param string $Type Trigger type to delete. Currently only `timer`, `ckafka`, `apigw`, `cls`, `cos`, `cmq`, and `http` are supported.
     * @param string $Namespace Namespace of the function
     * @param string $TriggerDesc If the trigger type to delete is COS trigger, this field must be specified, storing data in JSON format {"event":"cos:ObjectCreated:*"}. The data content is in the same format as this field in the SetTrigger API. If the trigger type to delete is scheduled trigger or CMQ trigger, this field can be unspecified.
     * @param string $Qualifier The version or alias that the trigger to be deleted actually points to. Default value: $LATEST.
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
