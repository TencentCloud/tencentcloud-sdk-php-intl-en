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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBasicDDoSAlarmThreshold request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type (`basic`: Anti-DDoS Basic)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type (`basic`: Anti-DDoS Basic)
 * @method string getMethod() Obtain `get`: read alarm threshold, `set`: set alarm threshold
 * @method void setMethod(string $Method) Set `get`: read alarm threshold, `set`: set alarm threshold
 * @method integer getAlarmType() Obtain Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is required if `Method` is `set`;
 * @method void setAlarmType(integer $AlarmType) Set Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is required if `Method` is `set`;
 * @method integer getAlarmThreshold() Obtain Alarm threshold. It is required if `Method` is `set`. If it is set to 0, it means to clear the alarm threshold configuration;
 * @method void setAlarmThreshold(integer $AlarmThreshold) Set Alarm threshold. It is required if `Method` is `set`. If it is set to 0, it means to clear the alarm threshold configuration;
 */
class CreateBasicDDoSAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type (`basic`: Anti-DDoS Basic)
     */
    public $Business;

    /**
     * @var string `get`: read alarm threshold, `set`: set alarm threshold
     */
    public $Method;

    /**
     * @var integer Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is required if `Method` is `set`;
     */
    public $AlarmType;

    /**
     * @var integer Alarm threshold. It is required if `Method` is `set`. If it is set to 0, it means to clear the alarm threshold configuration;
     */
    public $AlarmThreshold;

    /**
     * @param string $Business Anti-DDoS service type (`basic`: Anti-DDoS Basic)
     * @param string $Method `get`: read alarm threshold, `set`: set alarm threshold
     * @param integer $AlarmType Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is required if `Method` is `set`;
     * @param integer $AlarmThreshold Alarm threshold. It is required if `Method` is `set`. If it is set to 0, it means to clear the alarm threshold configuration;
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }
    }
}
