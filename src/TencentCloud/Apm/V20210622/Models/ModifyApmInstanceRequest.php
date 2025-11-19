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
 * @method integer getIsRemoteCommandExecutionAnalysis() Obtain Whether to enable detection of the remote command attack.
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) Set Whether to enable detection of the remote command attack.
 * @method integer getIsMemoryHijackingAnalysis() Obtain Whether to enable detection of Java webshell.
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) Set Whether to enable detection of Java webshell.
 * @method integer getLogIndexType() Obtain CLS index type. (0 = full-text index; 1 = key-value index).
 * @method void setLogIndexType(integer $LogIndexType) Set CLS index type. (0 = full-text index; 1 = key-value index).
 * @method string getLogTraceIdKey() Obtain Index key of traceId. It is valid when the CLS index type is key-value index.
 * @method void setLogTraceIdKey(string $LogTraceIdKey) Set Index key of traceId. It is valid when the CLS index type is key-value index.
 * @method integer getIsDeleteAnyFileAnalysis() Obtain Whether to enable the detection of deleting arbitrary files. (0 - disabled; 1: enabled.)
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) Set Whether to enable the detection of deleting arbitrary files. (0 - disabled; 1: enabled.)
 * @method integer getIsReadAnyFileAnalysis() Obtain Whether to enable the detection of reading arbitrary files. (0 - disabled; 1 - enabled.)
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) Set Whether to enable the detection of reading arbitrary files. (0 - disabled; 1 - enabled.)
 * @method integer getIsUploadAnyFileAnalysis() Obtain Whether to enable the detection of uploading arbitrary files. (0 - disabled; 1 - enabled.)
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) Set Whether to enable the detection of uploading arbitrary files. (0 - disabled; 1 - enabled.)
 * @method integer getIsIncludeAnyFileAnalysis() Obtain Whether to enable the detection of the inclusion of arbitrary files. (0: disabled, 1: enabled.)
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) Set Whether to enable the detection of the inclusion of arbitrary files. (0: disabled, 1: enabled.)
 * @method integer getIsDirectoryTraversalAnalysis() Obtain Whether to enable traversal detection of the directory. (0 - disabled; 1 - enabled).
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) Set Whether to enable traversal detection of the directory. (0 - disabled; 1 - enabled).
 * @method integer getIsTemplateEngineInjectionAnalysis() Obtain Whether to enable template engine injection detection. (0: disabled; 1: enabled.)
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) Set Whether to enable template engine injection detection. (0: disabled; 1: enabled.)
 * @method integer getIsScriptEngineInjectionAnalysis() Obtain Whether to enable script engine injection detection. (0 - disabled; 1 - enabled.)
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) Set Whether to enable script engine injection detection. (0 - disabled; 1 - enabled.)
 * @method integer getIsExpressionInjectionAnalysis() Obtain Whether to enable expression injection detection. (0 - disabled; 1 - enabled.)
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) Set Whether to enable expression injection detection. (0 - disabled; 1 - enabled.)
 * @method integer getIsJNDIInjectionAnalysis() Obtain Whether to enable JNDI injection detection. (0 - disabled; 1 - enabled.)
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) Set Whether to enable JNDI injection detection. (0 - disabled; 1 - enabled.)
 * @method integer getIsJNIInjectionAnalysis() Obtain Whether to enable JNI injection detection. (0 - disabled, 1 - enabled).
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) Set Whether to enable JNI injection detection. (0 - disabled, 1 - enabled).
 * @method integer getIsWebshellBackdoorAnalysis() Obtain Whether to enable Webshell backdoor detection. (0 - disabled; 1 - enabled).
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) Set Whether to enable Webshell backdoor detection. (0 - disabled; 1 - enabled).
 * @method integer getIsDeserializationAnalysis() Obtain Whether to enable deserialization detection. (0 - disabled; 1 - enabled).
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) Set Whether to enable deserialization detection. (0 - disabled; 1 - enabled).
 * @method integer getUrlLongSegmentThreshold() Obtain Convergence threshold for URL long segments.
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) Set Convergence threshold for URL long segments.
 * @method integer getUrlNumberSegmentThreshold() Obtain Convergence threshold for URL numerical segments.
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) Set Convergence threshold for URL numerical segments.
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
     * @var integer Whether to enable detection of the remote command attack.
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer Whether to enable detection of Java webshell.
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer CLS index type. (0 = full-text index; 1 = key-value index).
     */
    public $LogIndexType;

    /**
     * @var string Index key of traceId. It is valid when the CLS index type is key-value index.
     */
    public $LogTraceIdKey;

    /**
     * @var integer Whether to enable the detection of deleting arbitrary files. (0 - disabled; 1: enabled.)
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer Whether to enable the detection of reading arbitrary files. (0 - disabled; 1 - enabled.)
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer Whether to enable the detection of uploading arbitrary files. (0 - disabled; 1 - enabled.)
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer Whether to enable the detection of the inclusion of arbitrary files. (0: disabled, 1: enabled.)
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer Whether to enable traversal detection of the directory. (0 - disabled; 1 - enabled).
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer Whether to enable template engine injection detection. (0: disabled; 1: enabled.)
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer Whether to enable script engine injection detection. (0 - disabled; 1 - enabled.)
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer Whether to enable expression injection detection. (0 - disabled; 1 - enabled.)
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer Whether to enable JNDI injection detection. (0 - disabled; 1 - enabled.)
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer Whether to enable JNI injection detection. (0 - disabled, 1 - enabled).
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer Whether to enable Webshell backdoor detection. (0 - disabled; 1 - enabled).
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer Whether to enable deserialization detection. (0 - disabled; 1 - enabled).
     */
    public $IsDeserializationAnalysis;

    /**
     * @var integer Convergence threshold for URL long segments.
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer Convergence threshold for URL numerical segments.
     */
    public $UrlNumberSegmentThreshold;

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
     * @param integer $IsRemoteCommandExecutionAnalysis Whether to enable detection of the remote command attack.
     * @param integer $IsMemoryHijackingAnalysis Whether to enable detection of Java webshell.
     * @param integer $LogIndexType CLS index type. (0 = full-text index; 1 = key-value index).
     * @param string $LogTraceIdKey Index key of traceId. It is valid when the CLS index type is key-value index.
     * @param integer $IsDeleteAnyFileAnalysis Whether to enable the detection of deleting arbitrary files. (0 - disabled; 1: enabled.)
     * @param integer $IsReadAnyFileAnalysis Whether to enable the detection of reading arbitrary files. (0 - disabled; 1 - enabled.)
     * @param integer $IsUploadAnyFileAnalysis Whether to enable the detection of uploading arbitrary files. (0 - disabled; 1 - enabled.)
     * @param integer $IsIncludeAnyFileAnalysis Whether to enable the detection of the inclusion of arbitrary files. (0: disabled, 1: enabled.)
     * @param integer $IsDirectoryTraversalAnalysis Whether to enable traversal detection of the directory. (0 - disabled; 1 - enabled).
     * @param integer $IsTemplateEngineInjectionAnalysis Whether to enable template engine injection detection. (0: disabled; 1: enabled.)
     * @param integer $IsScriptEngineInjectionAnalysis Whether to enable script engine injection detection. (0 - disabled; 1 - enabled.)
     * @param integer $IsExpressionInjectionAnalysis Whether to enable expression injection detection. (0 - disabled; 1 - enabled.)
     * @param integer $IsJNDIInjectionAnalysis Whether to enable JNDI injection detection. (0 - disabled; 1 - enabled.)
     * @param integer $IsJNIInjectionAnalysis Whether to enable JNI injection detection. (0 - disabled, 1 - enabled).
     * @param integer $IsWebshellBackdoorAnalysis Whether to enable Webshell backdoor detection. (0 - disabled; 1 - enabled).
     * @param integer $IsDeserializationAnalysis Whether to enable deserialization detection. (0 - disabled; 1 - enabled).
     * @param integer $UrlLongSegmentThreshold Convergence threshold for URL long segments.
     * @param integer $UrlNumberSegmentThreshold Convergence threshold for URL numerical segments.
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

        if (array_key_exists("IsRemoteCommandExecutionAnalysis",$param) and $param["IsRemoteCommandExecutionAnalysis"] !== null) {
            $this->IsRemoteCommandExecutionAnalysis = $param["IsRemoteCommandExecutionAnalysis"];
        }

        if (array_key_exists("IsMemoryHijackingAnalysis",$param) and $param["IsMemoryHijackingAnalysis"] !== null) {
            $this->IsMemoryHijackingAnalysis = $param["IsMemoryHijackingAnalysis"];
        }

        if (array_key_exists("LogIndexType",$param) and $param["LogIndexType"] !== null) {
            $this->LogIndexType = $param["LogIndexType"];
        }

        if (array_key_exists("LogTraceIdKey",$param) and $param["LogTraceIdKey"] !== null) {
            $this->LogTraceIdKey = $param["LogTraceIdKey"];
        }

        if (array_key_exists("IsDeleteAnyFileAnalysis",$param) and $param["IsDeleteAnyFileAnalysis"] !== null) {
            $this->IsDeleteAnyFileAnalysis = $param["IsDeleteAnyFileAnalysis"];
        }

        if (array_key_exists("IsReadAnyFileAnalysis",$param) and $param["IsReadAnyFileAnalysis"] !== null) {
            $this->IsReadAnyFileAnalysis = $param["IsReadAnyFileAnalysis"];
        }

        if (array_key_exists("IsUploadAnyFileAnalysis",$param) and $param["IsUploadAnyFileAnalysis"] !== null) {
            $this->IsUploadAnyFileAnalysis = $param["IsUploadAnyFileAnalysis"];
        }

        if (array_key_exists("IsIncludeAnyFileAnalysis",$param) and $param["IsIncludeAnyFileAnalysis"] !== null) {
            $this->IsIncludeAnyFileAnalysis = $param["IsIncludeAnyFileAnalysis"];
        }

        if (array_key_exists("IsDirectoryTraversalAnalysis",$param) and $param["IsDirectoryTraversalAnalysis"] !== null) {
            $this->IsDirectoryTraversalAnalysis = $param["IsDirectoryTraversalAnalysis"];
        }

        if (array_key_exists("IsTemplateEngineInjectionAnalysis",$param) and $param["IsTemplateEngineInjectionAnalysis"] !== null) {
            $this->IsTemplateEngineInjectionAnalysis = $param["IsTemplateEngineInjectionAnalysis"];
        }

        if (array_key_exists("IsScriptEngineInjectionAnalysis",$param) and $param["IsScriptEngineInjectionAnalysis"] !== null) {
            $this->IsScriptEngineInjectionAnalysis = $param["IsScriptEngineInjectionAnalysis"];
        }

        if (array_key_exists("IsExpressionInjectionAnalysis",$param) and $param["IsExpressionInjectionAnalysis"] !== null) {
            $this->IsExpressionInjectionAnalysis = $param["IsExpressionInjectionAnalysis"];
        }

        if (array_key_exists("IsJNDIInjectionAnalysis",$param) and $param["IsJNDIInjectionAnalysis"] !== null) {
            $this->IsJNDIInjectionAnalysis = $param["IsJNDIInjectionAnalysis"];
        }

        if (array_key_exists("IsJNIInjectionAnalysis",$param) and $param["IsJNIInjectionAnalysis"] !== null) {
            $this->IsJNIInjectionAnalysis = $param["IsJNIInjectionAnalysis"];
        }

        if (array_key_exists("IsWebshellBackdoorAnalysis",$param) and $param["IsWebshellBackdoorAnalysis"] !== null) {
            $this->IsWebshellBackdoorAnalysis = $param["IsWebshellBackdoorAnalysis"];
        }

        if (array_key_exists("IsDeserializationAnalysis",$param) and $param["IsDeserializationAnalysis"] !== null) {
            $this->IsDeserializationAnalysis = $param["IsDeserializationAnalysis"];
        }

        if (array_key_exists("UrlLongSegmentThreshold",$param) and $param["UrlLongSegmentThreshold"] !== null) {
            $this->UrlLongSegmentThreshold = $param["UrlLongSegmentThreshold"];
        }

        if (array_key_exists("UrlNumberSegmentThreshold",$param) and $param["UrlNumberSegmentThreshold"] !== null) {
            $this->UrlNumberSegmentThreshold = $param["UrlNumberSegmentThreshold"];
        }
    }
}
