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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exception information
 *
 * @method integer getEventId() Obtain Event ID
 * @method void setEventId(integer $EventId) Set Event ID
 * @method string getDiagType() Obtain Diagnosis type
 * @method void setDiagType(string $DiagType) Set Diagnosis type
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getOutline() Obtain Summary
 * @method void setOutline(string $Outline) Set Summary
 * @method integer getSeverity() Obtain Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
 * @method void setSeverity(integer $Severity) Set Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
 * @method integer getScoreLost() Obtain Deduction
 * @method void setScoreLost(integer $ScoreLost) Set Deduction
 * @method string getMetric() Obtain Reserved field
 * @method void setMetric(string $Metric) Set Reserved field
 * @method integer getCount() Obtain The number of alarms
 * @method void setCount(integer $Count) Set The number of alarms
 */
class EventInfo extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $EventId;

    /**
     * @var string Diagnosis type
     */
    public $DiagType;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Summary
     */
    public $Outline;

    /**
     * @var integer Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
     */
    public $Severity;

    /**
     * @var integer Deduction
     */
    public $ScoreLost;

    /**
     * @var string Reserved field
     */
    public $Metric;

    /**
     * @var integer The number of alarms
     */
    public $Count;

    /**
     * @param integer $EventId Event ID
     * @param string $DiagType Diagnosis type
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $Outline Summary
     * @param integer $Severity Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
     * @param integer $ScoreLost Deduction
     * @param string $Metric Reserved field
     * @param integer $Count The number of alarms
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DiagType",$param) and $param["DiagType"] !== null) {
            $this->DiagType = $param["DiagType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
