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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel alarm details.
 *
 * @method string getSetTime() Obtain Alarm start time in UTC time.
 * @method void setSetTime(string $SetTime) Set Alarm start time in UTC time.
 * @method string getClearTime() Obtain Alarm end time in UTC time.
This time is available only after the alarm ends.
 * @method void setClearTime(string $ClearTime) Set Alarm end time in UTC time.
This time is available only after the alarm ends.
 * @method string getType() Obtain Alarm type.
 * @method void setType(string $Type) Set Alarm type.
 * @method string getMessage() Obtain Alarm details.
 * @method void setMessage(string $Message) Set Alarm details.
 */
class ChannelPipelineAlerts extends AbstractModel
{
    /**
     * @var string Alarm start time in UTC time.
     */
    public $SetTime;

    /**
     * @var string Alarm end time in UTC time.
This time is available only after the alarm ends.
     */
    public $ClearTime;

    /**
     * @var string Alarm type.
     */
    public $Type;

    /**
     * @var string Alarm details.
     */
    public $Message;

    /**
     * @param string $SetTime Alarm start time in UTC time.
     * @param string $ClearTime Alarm end time in UTC time.
This time is available only after the alarm ends.
     * @param string $Type Alarm type.
     * @param string $Message Alarm details.
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
        if (array_key_exists("SetTime",$param) and $param["SetTime"] !== null) {
            $this->SetTime = $param["SetTime"];
        }

        if (array_key_exists("ClearTime",$param) and $param["ClearTime"] !== null) {
            $this->ClearTime = $param["ClearTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
