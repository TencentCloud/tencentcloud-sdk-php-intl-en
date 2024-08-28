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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogKafkaDeliverType request structure.
 *
 * @method integer getSecurityType() Obtain Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint.
 * @method void setSecurityType(integer $SecurityType) Set Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint.
 * @method array getLogType() Obtain Log type of the security module
 * @method void setLogType(array $LogType) Set Log type of the security module
 * @method integer getSwitch() Obtain Shipping enabling status. 0: disabled; 1: enabled.
 * @method void setSwitch(integer $Switch) Set Shipping enabling status. 0: disabled; 1: enabled.
 * @method string getTopicId() Obtain kafka topic id
 * @method void setTopicId(string $TopicId) Set kafka topic id
 * @method string getTopicName() Obtain kafka topic name
 * @method void setTopicName(string $TopicName) Set kafka topic name
 */
class ModifyLogKafkaDeliverTypeRequest extends AbstractModel
{
    /**
     * @var integer Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint.
     */
    public $SecurityType;

    /**
     * @var array Log type of the security module
     */
    public $LogType;

    /**
     * @var integer Shipping enabling status. 0: disabled; 1: enabled.
     */
    public $Switch;

    /**
     * @var string kafka topic id
     */
    public $TopicId;

    /**
     * @var string kafka topic name
     */
    public $TopicName;

    /**
     * @param integer $SecurityType Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint.
     * @param array $LogType Log type of the security module
     * @param integer $Switch Shipping enabling status. 0: disabled; 1: enabled.
     * @param string $TopicId kafka topic id
     * @param string $TopicName kafka topic name
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
        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
