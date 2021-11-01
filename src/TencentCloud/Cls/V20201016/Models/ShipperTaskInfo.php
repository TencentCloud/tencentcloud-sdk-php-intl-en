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
 * Shipping task information
 *
 * @method string getTaskId() Obtain Shipping task ID
 * @method void setTaskId(string $TaskId) Set Shipping task ID
 * @method string getShipperId() Obtain Shipping information ID
 * @method void setShipperId(string $ShipperId) Set Shipping information ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method integer getRangeStart() Obtain Start timestamp of the current batch of shipped logs in milliseconds
 * @method void setRangeStart(integer $RangeStart) Set Start timestamp of the current batch of shipped logs in milliseconds
 * @method integer getRangeEnd() Obtain End timestamp of the current batch of shipped logs in milliseconds
 * @method void setRangeEnd(integer $RangeEnd) Set End timestamp of the current batch of shipped logs in milliseconds
 * @method integer getStartTime() Obtain Start timestamp of the current shipping task in milliseconds
 * @method void setStartTime(integer $StartTime) Set Start timestamp of the current shipping task in milliseconds
 * @method integer getEndTime() Obtain End timestamp of the current shipping task in milliseconds
 * @method void setEndTime(integer $EndTime) Set End timestamp of the current shipping task in milliseconds
 * @method string getStatus() Obtain Result of the current shipping task. Valid values: `success`, `running`, `failed`
 * @method void setStatus(string $Status) Set Result of the current shipping task. Valid values: `success`, `running`, `failed`
 * @method string getMessage() Obtain Result details
 * @method void setMessage(string $Message) Set Result details
 */
class ShipperTaskInfo extends AbstractModel
{
    /**
     * @var string Shipping task ID
     */
    public $TaskId;

    /**
     * @var string Shipping information ID
     */
    public $ShipperId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var integer Start timestamp of the current batch of shipped logs in milliseconds
     */
    public $RangeStart;

    /**
     * @var integer End timestamp of the current batch of shipped logs in milliseconds
     */
    public $RangeEnd;

    /**
     * @var integer Start timestamp of the current shipping task in milliseconds
     */
    public $StartTime;

    /**
     * @var integer End timestamp of the current shipping task in milliseconds
     */
    public $EndTime;

    /**
     * @var string Result of the current shipping task. Valid values: `success`, `running`, `failed`
     */
    public $Status;

    /**
     * @var string Result details
     */
    public $Message;

    /**
     * @param string $TaskId Shipping task ID
     * @param string $ShipperId Shipping information ID
     * @param string $TopicId Log topic ID
     * @param integer $RangeStart Start timestamp of the current batch of shipped logs in milliseconds
     * @param integer $RangeEnd End timestamp of the current batch of shipped logs in milliseconds
     * @param integer $StartTime Start timestamp of the current shipping task in milliseconds
     * @param integer $EndTime End timestamp of the current shipping task in milliseconds
     * @param string $Status Result of the current shipping task. Valid values: `success`, `running`, `failed`
     * @param string $Message Result details
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

        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("RangeStart",$param) and $param["RangeStart"] !== null) {
            $this->RangeStart = $param["RangeStart"];
        }

        if (array_key_exists("RangeEnd",$param) and $param["RangeEnd"] !== null) {
            $this->RangeEnd = $param["RangeEnd"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
