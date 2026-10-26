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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddRecordRetrieveTask request structure.
 *
 * @method string getTaskName() Obtain Task name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The name must be globally unique and cannot be empty or repeated.
 * @method void setTaskName(string $TaskName) Set Task name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The name must be globally unique and cannot be empty or repeated.
 * @method integer getStartTime() Obtain Start time for retrieving the video recording in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
 * @method void setStartTime(integer $StartTime) Set Start time for retrieving the video recording in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
 * @method integer getEndTime() Obtain End time for retrieving the video recording, in UTC seconds, for example: 1662114146. The period between the start and end times can be up to one day and cannot span multiple days.
 * @method void setEndTime(integer $EndTime) Set End time for retrieving the video recording, in UTC seconds, for example: 1662114146. The period between the start and end times can be up to one day and cannot span multiple days.
 * @method integer getMode() Obtain Retrieval mode. 1: ultrafast mode. Others not supported currently.
 * @method void setMode(integer $Mode) Set Retrieval mode. 1: ultrafast mode. Others not supported currently.
 * @method integer getExpiration() Obtain Retrieval replica validity period of the video recording. Minimum: 1 day. Maximum: 365 days.
 * @method void setExpiration(integer $Expiration) Set Retrieval replica validity period of the video recording. Minimum: 1 day. Maximum: 365 days.
 * @method array getChannels() Obtain Device channel. A task can contain up to 32 device channels.
 * @method void setChannels(array $Channels) Set Device channel. A task can contain up to 32 device channels.
 * @method string getDescribe() Obtain Retrieve the task description
 * @method void setDescribe(string $Describe) Set Retrieve the task description
 */
class AddRecordRetrieveTaskRequest extends AbstractModel
{
    /**
     * @var string Task name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The name must be globally unique and cannot be empty or repeated.
     */
    public $TaskName;

    /**
     * @var integer Start time for retrieving the video recording in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
     */
    public $StartTime;

    /**
     * @var integer End time for retrieving the video recording, in UTC seconds, for example: 1662114146. The period between the start and end times can be up to one day and cannot span multiple days.
     */
    public $EndTime;

    /**
     * @var integer Retrieval mode. 1: ultrafast mode. Others not supported currently.
     */
    public $Mode;

    /**
     * @var integer Retrieval replica validity period of the video recording. Minimum: 1 day. Maximum: 365 days.
     */
    public $Expiration;

    /**
     * @var array Device channel. A task can contain up to 32 device channels.
     */
    public $Channels;

    /**
     * @var string Retrieve the task description
     */
    public $Describe;

    /**
     * @param string $TaskName Task name. It supports Chinese, English, digits, _, and -, with a length not exceeding 32 characters. The name must be globally unique and cannot be empty or repeated.
     * @param integer $StartTime Start time for retrieving the video recording in UTC seconds, for example: 1662114146. The longest period between the start and end times is one day and cannot span multiple days.
     * @param integer $EndTime End time for retrieving the video recording, in UTC seconds, for example: 1662114146. The period between the start and end times can be up to one day and cannot span multiple days.
     * @param integer $Mode Retrieval mode. 1: ultrafast mode. Others not supported currently.
     * @param integer $Expiration Retrieval replica validity period of the video recording. Minimum: 1 day. Maximum: 365 days.
     * @param array $Channels Device channel. A task can contain up to 32 device channels.
     * @param string $Describe Retrieve the task description
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }
    }
}
