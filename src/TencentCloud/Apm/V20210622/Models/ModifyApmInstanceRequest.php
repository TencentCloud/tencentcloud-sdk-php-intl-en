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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApmInstance request structure.
 *
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method string getName() Obtain Business system name.
 * @method void setName(string $Name) Set Business system name.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 * @method string getDescription() Obtain Business system description.
 * @method void setDescription(string $Description) Set Business system description.
 * @method integer getTraceDuration() Obtain Retention period of trace data (unit: days).
 * @method void setTraceDuration(integer $TraceDuration) Set Retention period of trace data (unit: days).
 * @method boolean getOpenBilling() Obtain Billing switch.
 * @method void setOpenBilling(boolean $OpenBilling) Set Billing switch.
 * @method integer getSpanDailyCounters() Obtain Business system report limit.
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) Set Business system report limit.
 * @method integer getErrRateThreshold() Obtain Error rate warning line. when the average error rate of the application exceeds this threshold, the system will give an abnormal note.
 * @method void setErrRateThreshold(integer $ErrRateThreshold) Set Error rate warning line. when the average error rate of the application exceeds this threshold, the system will give an abnormal note.
 * @method integer getSampleRate() Obtain Sampling rate (unit: %).
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate (unit: %).
 * @method integer getErrorSample() Obtain Error sampling switch (0: off, 1: on).
 * @method void setErrorSample(integer $ErrorSample) Set Error sampling switch (0: off, 1: on).
 * @method integer getSlowRequestSavedThreshold() Obtain Sampling slow call saving threshold (unit: ms).
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) Set Sampling slow call saving threshold (unit: ms).
 * @method integer getIsRelatedLog() Obtain Log feature switch (0: off; 1: on).
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set Log feature switch (0: off; 1: on).
 * @method string getLogRegion() Obtain Log region, which takes effect after the log feature is enabled.
 * @method void setLogRegion(string $LogRegion) Set Log region, which takes effect after the log feature is enabled.
 * @method string getLogTopicID() Obtain CLS log topic id, which takes effect after the log feature is enabled.
 * @method void setLogTopicID(string $LogTopicID) Set CLS log topic id, which takes effect after the log feature is enabled.
 * @method string getLogSet() Obtain Logset, which takes effect only after the log feature is enabled.
 * @method void setLogSet(string $LogSet) Set Logset, which takes effect only after the log feature is enabled.
 * @method string getLogSource() Obtain Log source, which takes effect only after the log feature is enabled.
 * @method void setLogSource(string $LogSource) Set Log source, which takes effect only after the log feature is enabled.
 * @method array getCustomShowTags() Obtain List of custom display tags.
 * @method void setCustomShowTags(array $CustomShowTags) Set List of custom display tags.
 * @method integer getPayMode() Obtain Modify billing mode (1: prepaid, 0: pay-as-you-go).
 * @method void setPayMode(integer $PayMode) Set Modify billing mode (1: prepaid, 0: pay-as-you-go).
 * @method integer getResponseDurationWarningThreshold() Obtain Response time warning line.
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) Set Response time warning line.
 * @method integer getFree() Obtain Whether it is free (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition), default 0.
 * @method void setFree(integer $Free) Set Whether it is free (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition), default 0.
 * @method integer getIsRelatedDashboard() Obtain Whether to associate the dashboard (0 = off, 1 = on).
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) Set Whether to associate the dashboard (0 = off, 1 = on).
 * @method string getDashboardTopicID() Obtain Associated dashboard id, which takes effect after the associated dashboard is enabled.
 * @method void setDashboardTopicID(string $DashboardTopicID) Set Associated dashboard id, which takes effect after the associated dashboard is enabled.
 * @method integer getIsSqlInjectionAnalysis() Obtain SQL injection detection switch (0: off, 1: on).
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) Set SQL injection detection switch (0: off, 1: on).
 * @method integer getIsInstrumentationVulnerabilityScan() Obtain Whether to enable component vulnerability detection (0 = no, 1 = yes).
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) Set Whether to enable component vulnerability detection (0 = no, 1 = yes).
 */
class ModifyApmInstanceRequest extends AbstractModel
{
    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var string Business system name.
     */
    public $Name;

    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @var string Business system description.
     */
    public $Description;

    /**
     * @var integer Retention period of trace data (unit: days).
     */
    public $TraceDuration;

    /**
     * @var boolean Billing switch.
     */
    public $OpenBilling;

    /**
     * @var integer Business system report limit.
     */
    public $SpanDailyCounters;

    /**
     * @var integer Error rate warning line. when the average error rate of the application exceeds this threshold, the system will give an abnormal note.
     */
    public $ErrRateThreshold;

    /**
     * @var integer Sampling rate (unit: %).
     */
    public $SampleRate;

    /**
     * @var integer Error sampling switch (0: off, 1: on).
     */
    public $ErrorSample;

    /**
     * @var integer Sampling slow call saving threshold (unit: ms).
     */
    public $SlowRequestSavedThreshold;

    /**
     * @var integer Log feature switch (0: off; 1: on).
     */
    public $IsRelatedLog;

    /**
     * @var string Log region, which takes effect after the log feature is enabled.
     */
    public $LogRegion;

    /**
     * @var string CLS log topic id, which takes effect after the log feature is enabled.
     */
    public $LogTopicID;

    /**
     * @var string Logset, which takes effect only after the log feature is enabled.
     */
    public $LogSet;

    /**
     * @var string Log source, which takes effect only after the log feature is enabled.
     */
    public $LogSource;

    /**
     * @var array List of custom display tags.
     */
    public $CustomShowTags;

    /**
     * @var integer Modify billing mode (1: prepaid, 0: pay-as-you-go).
     */
    public $PayMode;

    /**
     * @var integer Response time warning line.
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var integer Whether it is free (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition), default 0.
     */
    public $Free;

    /**
     * @var integer Whether to associate the dashboard (0 = off, 1 = on).
     */
    public $IsRelatedDashboard;

    /**
     * @var string Associated dashboard id, which takes effect after the associated dashboard is enabled.
     */
    public $DashboardTopicID;

    /**
     * @var integer SQL injection detection switch (0: off, 1: on).
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer Whether to enable component vulnerability detection (0 = no, 1 = yes).
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @param string $InstanceId Business system id.
     * @param string $Name Business system name.
     * @param array $Tags Tag list.
     * @param string $Description Business system description.
     * @param integer $TraceDuration Retention period of trace data (unit: days).
     * @param boolean $OpenBilling Billing switch.
     * @param integer $SpanDailyCounters Business system report limit.
     * @param integer $ErrRateThreshold Error rate warning line. when the average error rate of the application exceeds this threshold, the system will give an abnormal note.
     * @param integer $SampleRate Sampling rate (unit: %).
     * @param integer $ErrorSample Error sampling switch (0: off, 1: on).
     * @param integer $SlowRequestSavedThreshold Sampling slow call saving threshold (unit: ms).
     * @param integer $IsRelatedLog Log feature switch (0: off; 1: on).
     * @param string $LogRegion Log region, which takes effect after the log feature is enabled.
     * @param string $LogTopicID CLS log topic id, which takes effect after the log feature is enabled.
     * @param string $LogSet Logset, which takes effect only after the log feature is enabled.
     * @param string $LogSource Log source, which takes effect only after the log feature is enabled.
     * @param array $CustomShowTags List of custom display tags.
     * @param integer $PayMode Modify billing mode (1: prepaid, 0: pay-as-you-go).
     * @param integer $ResponseDurationWarningThreshold Response time warning line.
     * @param integer $Free Whether it is free (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition), default 0.
     * @param integer $IsRelatedDashboard Whether to associate the dashboard (0 = off, 1 = on).
     * @param string $DashboardTopicID Associated dashboard id, which takes effect after the associated dashboard is enabled.
     * @param integer $IsSqlInjectionAnalysis SQL injection detection switch (0: off, 1: on).
     * @param integer $IsInstrumentationVulnerabilityScan Whether to enable component vulnerability detection (0 = no, 1 = yes).
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("OpenBilling",$param) and $param["OpenBilling"] !== null) {
            $this->OpenBilling = $param["OpenBilling"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ErrorSample",$param) and $param["ErrorSample"] !== null) {
            $this->ErrorSample = $param["ErrorSample"];
        }

        if (array_key_exists("SlowRequestSavedThreshold",$param) and $param["SlowRequestSavedThreshold"] !== null) {
            $this->SlowRequestSavedThreshold = $param["SlowRequestSavedThreshold"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("CustomShowTags",$param) and $param["CustomShowTags"] !== null) {
            $this->CustomShowTags = $param["CustomShowTags"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }
    }
}
