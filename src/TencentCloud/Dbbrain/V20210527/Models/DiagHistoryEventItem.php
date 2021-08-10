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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance diagnosis event
 *
 * @method string getDiagType() Obtain Diagnosis type.
 * @method void setDiagType(string $DiagType) Set Diagnosis type.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method integer getEventId() Obtain Unique event ID.
 * @method void setEventId(integer $EventId) Set Unique event ID.
 * @method integer getSeverity() Obtain Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
 * @method void setSeverity(integer $Severity) Set Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
 * @method string getOutline() Obtain Diagnosis summary.
 * @method void setOutline(string $Outline) Set Diagnosis summary.
 * @method string getDiagItem() Obtain Diagnosis item description.
 * @method void setDiagItem(string $DiagItem) Set Diagnosis item description.
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getMetric() Obtain Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMetric(string $Metric) Set Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 */
class DiagHistoryEventItem extends AbstractModel
{
    /**
     * @var string Diagnosis type.
     */
    public $DiagType;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var integer Unique event ID.
     */
    public $EventId;

    /**
     * @var integer Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
     */
    public $Severity;

    /**
     * @var string Diagnosis summary.
     */
    public $Outline;

    /**
     * @var string Diagnosis item description.
     */
    public $DiagItem;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Metric;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @param string $DiagType Diagnosis type.
     * @param string $EndTime End time.
     * @param string $StartTime Start time.
     * @param integer $EventId Unique event ID.
     * @param integer $Severity Severity, which can be divided into 5 levels: 1: fatal, 2: severe, 3: warning, 4: notice, 5: healthy.
     * @param string $Outline Diagnosis summary.
     * @param string $DiagItem Diagnosis item description.
     * @param string $InstanceId Instance ID.
     * @param string $Metric Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.
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
        if (array_key_exists("DiagType",$param) and $param["DiagType"] !== null) {
            $this->DiagType = $param["DiagType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
