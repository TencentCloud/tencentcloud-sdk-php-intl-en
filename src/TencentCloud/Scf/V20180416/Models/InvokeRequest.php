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
 * Invoke request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getInvocationType() Obtain The value is `RequestResponse` (synchronous) or `Event` (asynchronous). The default value is synchronous.
 * @method void setInvocationType(string $InvocationType) Set The value is `RequestResponse` (synchronous) or `Event` (asynchronous). The default value is synchronous.
 * @method string getQualifier() Obtain Version number of the triggered function
 * @method void setQualifier(string $Qualifier) Set Version number of the triggered function
 * @method string getClientContext() Obtain Function running parameter, which is in the JSON format. Maximum parameter size is 1 MB.
 * @method void setClientContext(string $ClientContext) Set Function running parameter, which is in the JSON format. Maximum parameter size is 1 MB.
 * @method string getLogType() Obtain If this field is specified for a synchronous invocation, the return value will contain a 4-KB log. The value is `None` (default) or `Tail`. If the value is `Tail`, `logMsg` in the return parameter will contain the corresponding function execution log.
 * @method void setLogType(string $LogType) Set If this field is specified for a synchronous invocation, the return value will contain a 4-KB log. The value is `None` (default) or `Tail`. If the value is `Tail`, `logMsg` in the return parameter will contain the corresponding function execution log.
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getRoutingKey() Obtain Traffic routing config in json format, e.g., {"k":"v"}. Please note that both "k" and "v" must be strings. Up to 1024 bytes allowed.
 * @method void setRoutingKey(string $RoutingKey) Set Traffic routing config in json format, e.g., {"k":"v"}. Please note that both "k" and "v" must be strings. Up to 1024 bytes allowed.
 */
class InvokeRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string The value is `RequestResponse` (synchronous) or `Event` (asynchronous). The default value is synchronous.
     */
    public $InvocationType;

    /**
     * @var string Version number of the triggered function
     */
    public $Qualifier;

    /**
     * @var string Function running parameter, which is in the JSON format. Maximum parameter size is 1 MB.
     */
    public $ClientContext;

    /**
     * @var string If this field is specified for a synchronous invocation, the return value will contain a 4-KB log. The value is `None` (default) or `Tail`. If the value is `Tail`, `logMsg` in the return parameter will contain the corresponding function execution log.
     */
    public $LogType;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Traffic routing config in json format, e.g., {"k":"v"}. Please note that both "k" and "v" must be strings. Up to 1024 bytes allowed.
     */
    public $RoutingKey;

    /**
     * @param string $FunctionName Function name
     * @param string $InvocationType The value is `RequestResponse` (synchronous) or `Event` (asynchronous). The default value is synchronous.
     * @param string $Qualifier Version number of the triggered function
     * @param string $ClientContext Function running parameter, which is in the JSON format. Maximum parameter size is 1 MB.
     * @param string $LogType If this field is specified for a synchronous invocation, the return value will contain a 4-KB log. The value is `None` (default) or `Tail`. If the value is `Tail`, `logMsg` in the return parameter will contain the corresponding function execution log.
     * @param string $Namespace Namespace
     * @param string $RoutingKey Traffic routing config in json format, e.g., {"k":"v"}. Please note that both "k" and "v" must be strings. Up to 1024 bytes allowed.
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

        if (array_key_exists("InvocationType",$param) and $param["InvocationType"] !== null) {
            $this->InvocationType = $param["InvocationType"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("ClientContext",$param) and $param["ClientContext"] !== null) {
            $this->ClientContext = $param["ClientContext"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }
    }
}
