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
 * APM business system information.
 *
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method string getName() Obtain Business system name.
 * @method void setName(string $Name) Set Business system name.
 * @method string getDescription() Obtain Business system description information.
 * @method void setDescription(string $Description) Set Business system description information.
 * @method integer getStatus() Obtain Status of the business system.
{Initializing; running; throttling}.
 * @method void setStatus(integer $Status) Set Status of the business system.
{Initializing; running; throttling}.
 * @method string getRegion() Obtain Region where the business system belongs.
 * @method void setRegion(string $Region) Set Region where the business system belongs.
 * @method array getTags() Obtain Business system tag list.
 * @method void setTags(array $Tags) Set Business system tag list.
 * @method integer getAppId() Obtain AppID information.
 * @method void setAppId(integer $AppId) Set AppID information.
 * @method string getCreateUin() Obtain Creator uin.
 * @method void setCreateUin(string $CreateUin) Set Creator uin.
 * @method float getAmountOfUsedStorage() Obtain Storage used (unit: mb).
 * @method void setAmountOfUsedStorage(float $AmountOfUsedStorage) Set Storage used (unit: mb).
 * @method integer getServiceCount() Obtain Quantity of server applications of the business system.
 * @method void setServiceCount(integer $ServiceCount) Set Quantity of server applications of the business system.
 * @method integer getCountOfReportSpanPerDay() Obtain Average daily reported span count.
 * @method void setCountOfReportSpanPerDay(integer $CountOfReportSpanPerDay) Set Average daily reported span count.
 * @method integer getTraceDuration() Obtain Retention period of trace data (unit: days).
 * @method void setTraceDuration(integer $TraceDuration) Set Retention period of trace data (unit: days).
 * @method integer getSpanDailyCounters() Obtain Business system report limit.
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) Set Business system report limit.
 * @method integer getBillingInstance() Obtain Whether the business system billing is Activated (0 = not activated, 1 = activated).
 * @method void setBillingInstance(integer $BillingInstance) Set Whether the business system billing is Activated (0 = not activated, 1 = activated).
 * @method integer getErrRateThreshold() Obtain Error warning line (unit: %).
 * @method void setErrRateThreshold(integer $ErrRateThreshold) Set Error warning line (unit: %).
 * @method integer getSampleRate() Obtain Sampling rate (unit: %).
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate (unit: %).
 * @method integer getErrorSample() Obtain Error sampling switch (0: off, 1: on).
 * @method void setErrorSample(integer $ErrorSample) Set Error sampling switch (0: off, 1: on).
 * @method integer getSlowRequestSavedThreshold() Obtain Sampling slow call saving threshold (unit: ms).
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) Set Sampling slow call saving threshold (unit: ms).
 * @method string getLogRegion() Obtain CLS log region.
 * @method void setLogRegion(string $LogRegion) Set CLS log region.
 * @method string getLogSource() Obtain Log source.
 * @method void setLogSource(string $LogSource) Set Log source.
 * @method integer getIsRelatedLog() Obtain Log feature switch (0: off; 1: on).
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set Log feature switch (0: off; 1: on).
 * @method string getLogTopicID() Obtain Log topic id.
 * @method void setLogTopicID(string $LogTopicID) Set Log topic id.
 * @method integer getClientCount() Obtain Quantity of client applications of the business system.
 * @method void setClientCount(integer $ClientCount) Set Quantity of client applications of the business system.
 * @method integer getTotalCount() Obtain The quantity of active applications in this business system in the last two days.
 * @method void setTotalCount(integer $TotalCount) Set The quantity of active applications in this business system in the last two days.
 * @method string getLogSet() Obtain CLS log set.
 * @method void setLogSet(string $LogSet) Set CLS log set.
 * @method integer getMetricDuration() Obtain Retention period of metric data (unit: days).
 * @method void setMetricDuration(integer $MetricDuration) Set Retention period of metric data (unit: days).
 * @method array getCustomShowTags() Obtain List of custom display tags.
 * @method void setCustomShowTags(array $CustomShowTags) Set List of custom display tags.
 * @method integer getPayMode() Obtain Business system billing mode (1: prepaid, 0: pay-as-you-go).
 * @method void setPayMode(integer $PayMode) Set Business system billing mode (1: prepaid, 0: pay-as-you-go).
 * @method boolean getPayModeEffective() Obtain Indicates whether the billing mode of the business system takes effect.
 * @method void setPayModeEffective(boolean $PayModeEffective) Set Indicates whether the billing mode of the business system takes effect.
 * @method integer getResponseDurationWarningThreshold() Obtain Response time warning line (unit: ms).
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) Set Response time warning line (unit: ms).
 * @method integer getFree() Obtain Whether it is free (0 = no; 1 = limited free; 2 = completely free), default 0.
 * @method void setFree(integer $Free) Set Whether it is free (0 = no; 1 = limited free; 2 = completely free), default 0.
 * @method integer getDefaultTSF() Obtain Indicates whether it is the default business system of tsf (0 = no, 1 = yes).
 * @method void setDefaultTSF(integer $DefaultTSF) Set Indicates whether it is the default business system of tsf (0 = no, 1 = yes).
 * @method integer getIsRelatedDashboard() Obtain Whether to associate the dashboard (0 = off, 1 = on).
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) Set Whether to associate the dashboard (0 = off, 1 = on).
 * @method string getDashboardTopicID() Obtain Associated dashboard id.
 * @method void setDashboardTopicID(string $DashboardTopicID) Set Associated dashboard id.
 * @method integer getIsInstrumentationVulnerabilityScan() Obtain Whether to enable component vulnerability detection (0 = no, 1 = yes).
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) Set Whether to enable component vulnerability detection (0 = no, 1 = yes).
 * @method integer getIsSqlInjectionAnalysis() Obtain Whether to enable sql injection analysis (0: off, 1: on).
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) Set Whether to enable sql injection analysis (0: off, 1: on).
 * @method integer getStopReason() Obtain Reasons for traffic throttling.
Official version quota;.
Trial version quota.
Trial version expiration;.
Account in arrears.
}.
 * @method void setStopReason(integer $StopReason) Set Reasons for traffic throttling.
Official version quota;.
Trial version quota.
Trial version expiration;.
Account in arrears.
}.
 * @method integer getIsRemoteCommandExecutionAnalysis() Obtain Whether to enable detection of remote command execution (0 = disabled; 1 = enabled).
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) Set Whether to enable detection of remote command execution (0 = disabled; 1 = enabled).
 * @method integer getIsMemoryHijackingAnalysis() Obtain Whether to enable detection of Java webshell execution (0 = disabled; 1 = enabled).
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) Set Whether to enable detection of Java webshell execution (0 = disabled; 1 = enabled).
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
 * @method string getToken() Obtain Business system authentication token.
 * @method void setToken(string $Token) Set Business system authentication token.
 * @method integer getUrlLongSegmentThreshold() Obtain Convergence threshold for URL long segments.
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) Set Convergence threshold for URL long segments.
 * @method integer getUrlNumberSegmentThreshold() Obtain Convergence threshold for URL numerical segments.
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) Set Convergence threshold for URL numerical segments.
 */
class ApmInstanceDetail extends AbstractModel
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
     * @var string Business system description information.
     */
    public $Description;

    /**
     * @var integer Status of the business system.
{Initializing; running; throttling}.
     */
    public $Status;

    /**
     * @var string Region where the business system belongs.
     */
    public $Region;

    /**
     * @var array Business system tag list.
     */
    public $Tags;

    /**
     * @var integer AppID information.
     */
    public $AppId;

    /**
     * @var string Creator uin.
     */
    public $CreateUin;

    /**
     * @var float Storage used (unit: mb).
     */
    public $AmountOfUsedStorage;

    /**
     * @var integer Quantity of server applications of the business system.
     */
    public $ServiceCount;

    /**
     * @var integer Average daily reported span count.
     */
    public $CountOfReportSpanPerDay;

    /**
     * @var integer Retention period of trace data (unit: days).
     */
    public $TraceDuration;

    /**
     * @var integer Business system report limit.
     */
    public $SpanDailyCounters;

    /**
     * @var integer Whether the business system billing is Activated (0 = not activated, 1 = activated).
     */
    public $BillingInstance;

    /**
     * @var integer Error warning line (unit: %).
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
     * @var string CLS log region.
     */
    public $LogRegion;

    /**
     * @var string Log source.
     */
    public $LogSource;

    /**
     * @var integer Log feature switch (0: off; 1: on).
     */
    public $IsRelatedLog;

    /**
     * @var string Log topic id.
     */
    public $LogTopicID;

    /**
     * @var integer Quantity of client applications of the business system.
     */
    public $ClientCount;

    /**
     * @var integer The quantity of active applications in this business system in the last two days.
     */
    public $TotalCount;

    /**
     * @var string CLS log set.
     */
    public $LogSet;

    /**
     * @var integer Retention period of metric data (unit: days).
     */
    public $MetricDuration;

    /**
     * @var array List of custom display tags.
     */
    public $CustomShowTags;

    /**
     * @var integer Business system billing mode (1: prepaid, 0: pay-as-you-go).
     */
    public $PayMode;

    /**
     * @var boolean Indicates whether the billing mode of the business system takes effect.
     */
    public $PayModeEffective;

    /**
     * @var integer Response time warning line (unit: ms).
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var integer Whether it is free (0 = no; 1 = limited free; 2 = completely free), default 0.
     */
    public $Free;

    /**
     * @var integer Indicates whether it is the default business system of tsf (0 = no, 1 = yes).
     */
    public $DefaultTSF;

    /**
     * @var integer Whether to associate the dashboard (0 = off, 1 = on).
     */
    public $IsRelatedDashboard;

    /**
     * @var string Associated dashboard id.
     */
    public $DashboardTopicID;

    /**
     * @var integer Whether to enable component vulnerability detection (0 = no, 1 = yes).
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer Whether to enable sql injection analysis (0: off, 1: on).
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer Reasons for traffic throttling.
Official version quota;.
Trial version quota.
Trial version expiration;.
Account in arrears.
}.
     */
    public $StopReason;

    /**
     * @var integer Whether to enable detection of remote command execution (0 = disabled; 1 = enabled).
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer Whether to enable detection of Java webshell execution (0 = disabled; 1 = enabled).
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
     * @var string Business system authentication token.
     */
    public $Token;

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
     * @param string $Description Business system description information.
     * @param integer $Status Status of the business system.
{Initializing; running; throttling}.
     * @param string $Region Region where the business system belongs.
     * @param array $Tags Business system tag list.
     * @param integer $AppId AppID information.
     * @param string $CreateUin Creator uin.
     * @param float $AmountOfUsedStorage Storage used (unit: mb).
     * @param integer $ServiceCount Quantity of server applications of the business system.
     * @param integer $CountOfReportSpanPerDay Average daily reported span count.
     * @param integer $TraceDuration Retention period of trace data (unit: days).
     * @param integer $SpanDailyCounters Business system report limit.
     * @param integer $BillingInstance Whether the business system billing is Activated (0 = not activated, 1 = activated).
     * @param integer $ErrRateThreshold Error warning line (unit: %).
     * @param integer $SampleRate Sampling rate (unit: %).
     * @param integer $ErrorSample Error sampling switch (0: off, 1: on).
     * @param integer $SlowRequestSavedThreshold Sampling slow call saving threshold (unit: ms).
     * @param string $LogRegion CLS log region.
     * @param string $LogSource Log source.
     * @param integer $IsRelatedLog Log feature switch (0: off; 1: on).
     * @param string $LogTopicID Log topic id.
     * @param integer $ClientCount Quantity of client applications of the business system.
     * @param integer $TotalCount The quantity of active applications in this business system in the last two days.
     * @param string $LogSet CLS log set.
     * @param integer $MetricDuration Retention period of metric data (unit: days).
     * @param array $CustomShowTags List of custom display tags.
     * @param integer $PayMode Business system billing mode (1: prepaid, 0: pay-as-you-go).
     * @param boolean $PayModeEffective Indicates whether the billing mode of the business system takes effect.
     * @param integer $ResponseDurationWarningThreshold Response time warning line (unit: ms).
     * @param integer $Free Whether it is free (0 = no; 1 = limited free; 2 = completely free), default 0.
     * @param integer $DefaultTSF Indicates whether it is the default business system of tsf (0 = no, 1 = yes).
     * @param integer $IsRelatedDashboard Whether to associate the dashboard (0 = off, 1 = on).
     * @param string $DashboardTopicID Associated dashboard id.
     * @param integer $IsInstrumentationVulnerabilityScan Whether to enable component vulnerability detection (0 = no, 1 = yes).
     * @param integer $IsSqlInjectionAnalysis Whether to enable sql injection analysis (0: off, 1: on).
     * @param integer $StopReason Reasons for traffic throttling.
Official version quota;.
Trial version quota.
Trial version expiration;.
Account in arrears.
}.
     * @param integer $IsRemoteCommandExecutionAnalysis Whether to enable detection of remote command execution (0 = disabled; 1 = enabled).
     * @param integer $IsMemoryHijackingAnalysis Whether to enable detection of Java webshell execution (0 = disabled; 1 = enabled).
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
     * @param string $Token Business system authentication token.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("AmountOfUsedStorage",$param) and $param["AmountOfUsedStorage"] !== null) {
            $this->AmountOfUsedStorage = $param["AmountOfUsedStorage"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("CountOfReportSpanPerDay",$param) and $param["CountOfReportSpanPerDay"] !== null) {
            $this->CountOfReportSpanPerDay = $param["CountOfReportSpanPerDay"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("BillingInstance",$param) and $param["BillingInstance"] !== null) {
            $this->BillingInstance = $param["BillingInstance"];
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

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("ClientCount",$param) and $param["ClientCount"] !== null) {
            $this->ClientCount = $param["ClientCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("MetricDuration",$param) and $param["MetricDuration"] !== null) {
            $this->MetricDuration = $param["MetricDuration"];
        }

        if (array_key_exists("CustomShowTags",$param) and $param["CustomShowTags"] !== null) {
            $this->CustomShowTags = $param["CustomShowTags"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeEffective",$param) and $param["PayModeEffective"] !== null) {
            $this->PayModeEffective = $param["PayModeEffective"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }

        if (array_key_exists("DefaultTSF",$param) and $param["DefaultTSF"] !== null) {
            $this->DefaultTSF = $param["DefaultTSF"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
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

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("UrlLongSegmentThreshold",$param) and $param["UrlLongSegmentThreshold"] !== null) {
            $this->UrlLongSegmentThreshold = $param["UrlLongSegmentThreshold"];
        }

        if (array_key_exists("UrlNumberSegmentThreshold",$param) and $param["UrlNumberSegmentThreshold"] !== null) {
            $this->UrlNumberSegmentThreshold = $param["UrlNumberSegmentThreshold"];
        }
    }
}
