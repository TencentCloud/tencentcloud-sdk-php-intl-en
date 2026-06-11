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
 * ModifyRecordingRuleYamlTask request structure.
 *
 * @method string getYamlID() Obtain <p>Yaml configuration id</p>
 * @method void setYamlID(string $YamlID) Set <p>Yaml configuration id</p>
 * @method string getTopicId() Obtain <p>Source metric topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Source metric topic id</p>
 * @method string getDstTopicId() Obtain <p>Target metric topic id</p>
 * @method void setDstTopicId(string $DstTopicId) Set <p>Target metric topic id</p>
 * @method integer getEnableFlag() Obtain <p>Task status: 1: Enabled; 2: Disabled</p>
 * @method void setEnableFlag(integer $EnableFlag) Set <p>Task status: 1: Enabled; 2: Disabled</p>
 * @method integer getProcessStartTime() Obtain <p>Schedule start time, Unix timestamp in milliseconds</p>
 * @method void setProcessStartTime(integer $ProcessStartTime) Set <p>Schedule start time, Unix timestamp in milliseconds</p>
 * @method integer getProcessPeriod() Obtain <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
 * @method void setProcessPeriod(integer $ProcessPeriod) Set <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
 * @method integer getProcessDelay() Obtain <p>Execution Delay (Seconds)</p>
 * @method void setProcessDelay(integer $ProcessDelay) Set <p>Execution Delay (Seconds)</p>
 * @method string getYamlConfigName() Obtain <p>yaml configuration name</p>
 * @method void setYamlConfigName(string $YamlConfigName) Set <p>yaml configuration name</p>
 * @method string getYamlContent() Obtain <p>yaml configuration content</p>
 * @method void setYamlContent(string $YamlContent) Set <p>yaml configuration content</p>
 * @method integer getHasServicesLog() Obtain <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
 * @method void setHasServicesLog(integer $HasServicesLog) Set <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
 */
class ModifyRecordingRuleYamlTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Yaml configuration id</p>
     */
    public $YamlID;

    /**
     * @var string <p>Source metric topic id</p>
     */
    public $TopicId;

    /**
     * @var string <p>Target metric topic id</p>
     */
    public $DstTopicId;

    /**
     * @var integer <p>Task status: 1: Enabled; 2: Disabled</p>
     */
    public $EnableFlag;

    /**
     * @var integer <p>Schedule start time, Unix timestamp in milliseconds</p>
     */
    public $ProcessStartTime;

    /**
     * @var integer <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
     */
    public $ProcessPeriod;

    /**
     * @var integer <p>Execution Delay (Seconds)</p>
     */
    public $ProcessDelay;

    /**
     * @var string <p>yaml configuration name</p>
     */
    public $YamlConfigName;

    /**
     * @var string <p>yaml configuration content</p>
     */
    public $YamlContent;

    /**
     * @var integer <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
     */
    public $HasServicesLog;

    /**
     * @param string $YamlID <p>Yaml configuration id</p>
     * @param string $TopicId <p>Source metric topic id</p>
     * @param string $DstTopicId <p>Target metric topic id</p>
     * @param integer $EnableFlag <p>Task status: 1: Enabled; 2: Disabled</p>
     * @param integer $ProcessStartTime <p>Schedule start time, Unix timestamp in milliseconds</p>
     * @param integer $ProcessPeriod <p>Scheduling period (minutes). Supported range (0,1440] minutes.</p>
     * @param integer $ProcessDelay <p>Execution Delay (Seconds)</p>
     * @param string $YamlConfigName <p>yaml configuration name</p>
     * @param string $YamlContent <p>yaml configuration content</p>
     * @param integer $HasServicesLog <p>Whether to enable service log shipping. Valid values: 1: disable; 2: enable.</p>
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
        if (array_key_exists("YamlID",$param) and $param["YamlID"] !== null) {
            $this->YamlID = $param["YamlID"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
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

        if (array_key_exists("YamlConfigName",$param) and $param["YamlConfigName"] !== null) {
            $this->YamlConfigName = $param["YamlConfigName"];
        }

        if (array_key_exists("YamlContent",$param) and $param["YamlContent"] !== null) {
            $this->YamlContent = $param["YamlContent"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
