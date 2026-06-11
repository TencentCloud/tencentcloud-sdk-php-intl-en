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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pre-aggregation YAML task details.
 *
 * @method string getYamlId() Obtain YAML configuration file ID.
 * @method void setYamlId(string $YamlId) Set YAML configuration file ID.
 * @method string getTopicId() Obtain Source Log Topic ID
 * @method void setTopicId(string $TopicId) Set Source Log Topic ID
 * @method string getDstTopicId() Obtain Log topic ID for the write description.
 * @method void setDstTopicId(string $DstTopicId) Set Log topic ID for the write description.
 * @method string getCreateTime() Obtain Creation Time
 * @method void setCreateTime(string $CreateTime) Set Creation Time
 * @method string getUpdateTime() Obtain Task Update Time
 * @method void setUpdateTime(string $UpdateTime) Set Task Update Time
 * @method integer getStatus() Obtain Task status, 1: running 2: stopped 3: error - source log topic not found 4: error - destination topic not found

5: Access permission issue 6: Internal failure 7: Other faults
 * @method void setStatus(integer $Status) Set Task status, 1: running 2: stopped 3: error - source log topic not found 4: error - destination topic not found

5: Access permission issue 6: Internal failure 7: Other faults
 * @method integer getEnableFlag() Obtain Task status: 1 Enabled, 2 Disabled
 * @method void setEnableFlag(integer $EnableFlag) Set Task status: 1 Enabled, 2 Disabled
 * @method integer getProcessStartTime() Obtain Schedule Start Time
 * @method void setProcessStartTime(integer $ProcessStartTime) Set Schedule Start Time
 * @method integer getProcessPeriod() Obtain Scheduling Interval (Minutes)
 * @method void setProcessPeriod(integer $ProcessPeriod) Set Scheduling Interval (Minutes)
 * @method integer getProcessDelay() Obtain Execution Delay (Seconds)
 * @method void setProcessDelay(integer $ProcessDelay) Set Execution Delay (Seconds)
 * @method integer getHasServicesLog() Obtain Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method void setHasServicesLog(integer $HasServicesLog) Set Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
 * @method string getYamlConfigName() Obtain YAML configuration file name.
 * @method void setYamlConfigName(string $YamlConfigName) Set YAML configuration file name.
 * @method string getYamlContent() Obtain YAML configuration file content.
 * @method void setYamlContent(string $YamlContent) Set YAML configuration file content.
 * @method integer getSubTaskCount() Obtain Number of subtasks of the YAML file.
 * @method void setSubTaskCount(integer $SubTaskCount) Set Number of subtasks of the YAML file.
 */
class RecordingRuleYamlTaskInfo extends AbstractModel
{
    /**
     * @var string YAML configuration file ID.
     */
    public $YamlId;

    /**
     * @var string Source Log Topic ID
     */
    public $TopicId;

    /**
     * @var string Log topic ID for the write description.
     */
    public $DstTopicId;

    /**
     * @var string Creation Time
     */
    public $CreateTime;

    /**
     * @var string Task Update Time
     */
    public $UpdateTime;

    /**
     * @var integer Task status, 1: running 2: stopped 3: error - source log topic not found 4: error - destination topic not found

5: Access permission issue 6: Internal failure 7: Other faults
     */
    public $Status;

    /**
     * @var integer Task status: 1 Enabled, 2 Disabled
     */
    public $EnableFlag;

    /**
     * @var integer Schedule Start Time
     */
    public $ProcessStartTime;

    /**
     * @var integer Scheduling Interval (Minutes)
     */
    public $ProcessPeriod;

    /**
     * @var integer Execution Delay (Seconds)
     */
    public $ProcessDelay;

    /**
     * @var integer Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     */
    public $HasServicesLog;

    /**
     * @var string YAML configuration file name.
     */
    public $YamlConfigName;

    /**
     * @var string YAML configuration file content.
     */
    public $YamlContent;

    /**
     * @var integer Number of subtasks of the YAML file.
     */
    public $SubTaskCount;

    /**
     * @param string $YamlId YAML configuration file ID.
     * @param string $TopicId Source Log Topic ID
     * @param string $DstTopicId Log topic ID for the write description.
     * @param string $CreateTime Creation Time
     * @param string $UpdateTime Task Update Time
     * @param integer $Status Task status, 1: running 2: stopped 3: error - source log topic not found 4: error - destination topic not found

5: Access permission issue 6: Internal failure 7: Other faults
     * @param integer $EnableFlag Task status: 1 Enabled, 2 Disabled
     * @param integer $ProcessStartTime Schedule Start Time
     * @param integer $ProcessPeriod Scheduling Interval (Minutes)
     * @param integer $ProcessDelay Execution Delay (Seconds)
     * @param integer $HasServicesLog Whether to enable service log shipping. Valid values: 1: disable; 2: enable.
     * @param string $YamlConfigName YAML configuration file name.
     * @param string $YamlContent YAML configuration file content.
     * @param integer $SubTaskCount Number of subtasks of the YAML file.
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
        if (array_key_exists("YamlId",$param) and $param["YamlId"] !== null) {
            $this->YamlId = $param["YamlId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }

        if (array_key_exists("YamlConfigName",$param) and $param["YamlConfigName"] !== null) {
            $this->YamlConfigName = $param["YamlConfigName"];
        }

        if (array_key_exists("YamlContent",$param) and $param["YamlContent"] !== null) {
            $this->YamlContent = $param["YamlContent"];
        }

        if (array_key_exists("SubTaskCount",$param) and $param["SubTaskCount"] !== null) {
            $this->SubTaskCount = $param["SubTaskCount"];
        }
    }
}
