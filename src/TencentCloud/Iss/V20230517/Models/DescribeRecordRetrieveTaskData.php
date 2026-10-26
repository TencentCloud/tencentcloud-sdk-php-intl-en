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
 * data for querying the details of a cloud recording retrieval task
 *
 * @method string getTaskId() Obtain Retrieval task ID
 * @method void setTaskId(string $TaskId) Set Retrieval task ID
 * @method string getTaskName() Obtain Task name for retrieval
 * @method void setTaskName(string $TaskName) Set Task name for retrieval
 * @method integer getStartTime() Obtain Start time of video recording retrieval
 * @method void setStartTime(integer $StartTime) Set Start time of video recording retrieval
 * @method integer getEndTime() Obtain Retrieval end time of the video recording
 * @method void setEndTime(integer $EndTime) Set Retrieval end time of the video recording
 * @method integer getMode() Obtain Retrieval mode. 1: speed mode. Others not supported currently.
 * @method void setMode(integer $Mode) Set Retrieval mode. 1: speed mode. Others not supported currently.
 * @method integer getExpiration() Obtain Replica validity period
 * @method void setExpiration(integer $Expiration) Set Replica validity period
 * @method integer getStatus() Obtain Task status. 0: Retrieved, 1: Retrieving, 2: To be retrieved
 * @method void setStatus(integer $Status) Set Task status. 0: Retrieved, 1: Retrieving, 2: To be retrieved
 * @method float getCapacity() Obtain Retrieval capacity, in MB.
 * @method void setCapacity(float $Capacity) Set Retrieval capacity, in MB.
 * @method array getChannels() Obtain Task device channel id
 * @method void setChannels(array $Channels) Set Task device channel id
 * @method string getDescribe() Obtain Task description
 * @method void setDescribe(string $Describe) Set Task description
 * @method integer getChannelCount() Obtain Number of task channels
 * @method void setChannelCount(integer $ChannelCount) Set Number of task channels
 */
class DescribeRecordRetrieveTaskData extends AbstractModel
{
    /**
     * @var string Retrieval task ID
     */
    public $TaskId;

    /**
     * @var string Task name for retrieval
     */
    public $TaskName;

    /**
     * @var integer Start time of video recording retrieval
     */
    public $StartTime;

    /**
     * @var integer Retrieval end time of the video recording
     */
    public $EndTime;

    /**
     * @var integer Retrieval mode. 1: speed mode. Others not supported currently.
     */
    public $Mode;

    /**
     * @var integer Replica validity period
     */
    public $Expiration;

    /**
     * @var integer Task status. 0: Retrieved, 1: Retrieving, 2: To be retrieved
     */
    public $Status;

    /**
     * @var float Retrieval capacity, in MB.
     */
    public $Capacity;

    /**
     * @var array Task device channel id
     */
    public $Channels;

    /**
     * @var string Task description
     */
    public $Describe;

    /**
     * @var integer Number of task channels
     */
    public $ChannelCount;

    /**
     * @param string $TaskId Retrieval task ID
     * @param string $TaskName Task name for retrieval
     * @param integer $StartTime Start time of video recording retrieval
     * @param integer $EndTime Retrieval end time of the video recording
     * @param integer $Mode Retrieval mode. 1: speed mode. Others not supported currently.
     * @param integer $Expiration Replica validity period
     * @param integer $Status Task status. 0: Retrieved, 1: Retrieving, 2: To be retrieved
     * @param float $Capacity Retrieval capacity, in MB.
     * @param array $Channels Task device channel id
     * @param string $Describe Task description
     * @param integer $ChannelCount Number of task channels
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new RecordRetrieveTaskChannelInfo();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }
    }
}
