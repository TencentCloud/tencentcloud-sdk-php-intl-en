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
 * Alarm object
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getLogsetName() Obtain Logset name
 * @method void setLogsetName(string $LogsetName) Set Logset name
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method string getQuery() Obtain Query statement
 * @method void setQuery(string $Query) Set Query statement
 * @method integer getNumber() Obtain Monitoring object number
 * @method void setNumber(integer $Number) Set Monitoring object number
 * @method integer getStartTimeOffset() Obtain Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
 * @method void setStartTimeOffset(integer $StartTimeOffset) Set Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
 * @method integer getEndTimeOffset() Obtain Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
 * @method void setEndTimeOffset(integer $EndTimeOffset) Set Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
 */
class AlarmTargetInfo extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Logset name
     */
    public $LogsetName;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var string Query statement
     */
    public $Query;

    /**
     * @var integer Monitoring object number
     */
    public $Number;

    /**
     * @var integer Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
     */
    public $StartTimeOffset;

    /**
     * @var integer Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
     */
    public $EndTimeOffset;

    /**
     * @param string $LogsetId Logset ID
     * @param string $LogsetName Logset name
     * @param string $TopicId Log topic ID
     * @param string $TopicName Log topic name
     * @param string $Query Query statement
     * @param integer $Number Monitoring object number
     * @param integer $StartTimeOffset Offset of the query start time from the alarm execution time in minutes. The value cannot be positive. Value range: -1440–0.
     * @param integer $EndTimeOffset Offset of the query end time from the alarm execution time in minutes. The value cannot be positive and must be greater than `StartTimeOffset`. Value range: -1440–0.
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
