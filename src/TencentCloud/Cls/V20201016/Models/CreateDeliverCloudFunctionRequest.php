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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDeliverCloudFunction request structure.
 *
 * @method string getTopicId() Obtain Topic id belonging to the delivery rule
 * @method void setTopicId(string $TopicId) Set Topic id belonging to the delivery rule
 * @method string getFunctionName() Obtain Cloud Function name for delivery
 * @method void setFunctionName(string $FunctionName) Set Cloud Function name for delivery
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getQualifier() Obtain Function version
 * @method void setQualifier(string $Qualifier) Set Function version
 * @method integer getTimeout() Obtain Maximum waiting time for delivery. Unit: seconds
 * @method void setTimeout(integer $Timeout) Set Maximum waiting time for delivery. Unit: seconds
 * @method integer getMaxMsgNum() Obtain Maximum number of messages to deliver
 * @method void setMaxMsgNum(integer $MaxMsgNum) Set Maximum number of messages to deliver
 */
class CreateDeliverCloudFunctionRequest extends AbstractModel
{
    /**
     * @var string Topic id belonging to the delivery rule
     */
    public $TopicId;

    /**
     * @var string Cloud Function name for delivery
     */
    public $FunctionName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Function version
     */
    public $Qualifier;

    /**
     * @var integer Maximum waiting time for delivery. Unit: seconds
     */
    public $Timeout;

    /**
     * @var integer Maximum number of messages to deliver
     */
    public $MaxMsgNum;

    /**
     * @param string $TopicId Topic id belonging to the delivery rule
     * @param string $FunctionName Cloud Function name for delivery
     * @param string $Namespace Namespace
     * @param string $Qualifier Function version
     * @param integer $Timeout Maximum waiting time for delivery. Unit: seconds
     * @param integer $MaxMsgNum Maximum number of messages to deliver
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("MaxMsgNum",$param) and $param["MaxMsgNum"] !== null) {
            $this->MaxMsgNum = $param["MaxMsgNum"];
        }
    }
}
