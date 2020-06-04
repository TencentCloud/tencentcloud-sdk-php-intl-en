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
 * CreateBasicDDoSAlarmThreshold response structure.
 *
 * @method integer getAlarmThreshold() Obtain If there is an alarm threshold configuration, the returned alarm threshold will be greater than 0; otherwise, the returned alarm threshold will be 0;
 * @method void setAlarmThreshold(integer $AlarmThreshold) Set If there is an alarm threshold configuration, the returned alarm threshold will be greater than 0; otherwise, the returned alarm threshold will be 0;
 * @method integer getAlarmType() Obtain Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is valid if `AlarmThreshold` is above 0;
 * @method void setAlarmType(integer $AlarmType) Set Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is valid if `AlarmThreshold` is above 0;
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateBasicDDoSAlarmThresholdResponse extends AbstractModel
{
    /**
     * @var integer If there is an alarm threshold configuration, the returned alarm threshold will be greater than 0; otherwise, the returned alarm threshold will be 0;
     */
    public $AlarmThreshold;

    /**
     * @var integer Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is valid if `AlarmThreshold` is above 0;
     */
    public $AlarmType;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AlarmThreshold If there is an alarm threshold configuration, the returned alarm threshold will be greater than 0; otherwise, the returned alarm threshold will be 0;
     * @param integer $AlarmType Alarm threshold type. 1: inbound traffic, 2: cleansed traffic. This field is valid if `AlarmThreshold` is above 0;
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
