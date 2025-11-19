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
 * ModifyApmApplicationConfig request structure.
 *
 * @method string getInstanceId() Obtain Business system ID.
 * @method void setInstanceId(string $InstanceId) Set Business system ID.
 * @method string getServiceName() Obtain Application name
 * @method void setServiceName(string $ServiceName) Set Application name
 * @method integer getUrlConvergenceSwitch() Obtain URL convergence switch. 0: Off; 1: On
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) Set URL convergence switch. 0: Off; 1: On
 * @method integer getUrlConvergenceThreshold() Obtain URL convergence threshold
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) Set URL convergence threshold
 * @method string getExceptionFilter() Obtain Regex rules for exception filtering, separated by commas
 * @method void setExceptionFilter(string $ExceptionFilter) Set Regex rules for exception filtering, separated by commas
 * @method string getUrlConvergence() Obtain Regex rules for URL convergence, separated by commas
 * @method void setUrlConvergence(string $UrlConvergence) Set Regex rules for URL convergence, separated by commas
 * @method string getErrorCodeFilter() Obtain Error code filtering, separated by commas
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) Set Error code filtering, separated by commas
 * @method string getUrlExclude() Obtain Regex rules for URL exclusion, separated by commas
 * @method void setUrlExclude(string $UrlExclude) Set Regex rules for URL exclusion, separated by commas
 * @method integer getIsRelatedLog() Obtain Log switch. 0: Off; 1: On
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set Log switch. 0: Off; 1: On
 * @method string getLogRegion() Obtain Log region.
 * @method void setLogRegion(string $LogRegion) Set Log region.
 * @method string getLogTopicID() Obtain Log topic ID
 * @method void setLogTopicID(string $LogTopicID) Set Log topic ID
 * @method string getLogSet() Obtain CLS log set/ES cluster ID
 * @method void setLogSet(string $LogSet) Set CLS log set/ES cluster ID
 * @method string getLogSource() Obtain Log source: CLS or ES
 * @method void setLogSource(string $LogSource) Set Log source: CLS or ES
 * @method string getIgnoreOperationName() Obtain APIs to be filtered
 * @method void setIgnoreOperationName(string $IgnoreOperationName) Set APIs to be filtered
 * @method boolean getEnableSnapshot() Obtain Whether thread profiling is enabled.
 * @method void setEnableSnapshot(boolean $EnableSnapshot) Set Whether thread profiling is enabled.
 * @method integer getSnapshotTimeout() Obtain Timeout threshold for thread profiling.
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) Set Timeout threshold for thread profiling.
 * @method boolean getAgentEnable() Obtain Whether agent is enabled.
 * @method void setAgentEnable(boolean $AgentEnable) Set Whether agent is enabled.
 * @method boolean getTraceSquash() Obtain Whether link compression is enabled.
 * @method void setTraceSquash(boolean $TraceSquash) Set Whether link compression is enabled.
 * @method boolean getEventEnable() Obtain Switch for enabling application diagnosis.
 * @method void setEventEnable(boolean $EventEnable) Set Switch for enabling application diagnosis.
 * @method array getInstrumentList() Obtain Component List
 * @method void setInstrumentList(array $InstrumentList) Set Component List
 * @method AgentOperationConfigView getAgentOperationConfigView() Obtain Related configurations of the probe APIs.
 * @method void setAgentOperationConfigView(AgentOperationConfigView $AgentOperationConfigView) Set Related configurations of the probe APIs.
 * @method boolean getEnableLogConfig() Obtain Whether to enable application log configuration.
 * @method void setEnableLogConfig(boolean $EnableLogConfig) Set Whether to enable application log configuration.
 * @method boolean getEnableDashboardConfig() Obtain Whether to enable the dashboard configuration for applications. false: disabled (consistent with the business system configuration); true: enabled (application-level configuration).
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) Set Whether to enable the dashboard configuration for applications. false: disabled (consistent with the business system configuration); true: enabled (application-level configuration).
 * @method integer getIsRelatedDashboard() Obtain Whether to associate with Dashboard. 0: disabled; 1: enabled.
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) Set Whether to associate with Dashboard. 0: disabled; 1: enabled.
 * @method string getDashboardTopicID() Obtain dashboard ID
 * @method void setDashboardTopicID(string $DashboardTopicID) Set dashboard ID
 * @method integer getLogIndexType() Obtain CLS index type. (0 = full-text index; 1 = key-value index).
 * @method void setLogIndexType(integer $LogIndexType) Set CLS index type. (0 = full-text index; 1 = key-value index).
 * @method string getLogTraceIdKey() Obtain Index key of traceId. It is valid when the CLS index type is key-value index.
 * @method void setLogTraceIdKey(string $LogTraceIdKey) Set Index key of traceId. It is valid when the CLS index type is key-value index.
 * @method boolean getEnableSecurityConfig() Obtain Whether to enable the application security configuration.
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) Set Whether to enable the application security configuration.
 * @method integer getIsSqlInjectionAnalysis() Obtain Whether to enable SQL injection analysis.
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) Set Whether to enable SQL injection analysis.
 * @method integer getIsInstrumentationVulnerabilityScan() Obtain Whether to enable detection of component vulnerability.
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) Set Whether to enable detection of component vulnerability.
 * @method integer getIsRemoteCommandExecutionAnalysis() Obtain Whether remote command detection is enabled.
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) Set Whether remote command detection is enabled.
 * @method integer getIsMemoryHijackingAnalysis() Obtain Whether to enable detection of Java webshell.
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) Set Whether to enable detection of Java webshell.
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
 * @method boolean getUrlAutoConvergenceEnable() Obtain Automatic convergence switch for APIs. 0: disabled | 1: enabled.
 * @method void setUrlAutoConvergenceEnable(boolean $UrlAutoConvergenceEnable) Set Automatic convergence switch for APIs. 0: disabled | 1: enabled.
 * @method integer getUrlLongSegmentThreshold() Obtain Convergence threshold for URL long segments.
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) Set Convergence threshold for URL long segments.
 * @method integer getUrlNumberSegmentThreshold() Obtain Convergence threshold for URL numerical segments.
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) Set Convergence threshold for URL numerical segments.
 * @method integer getDisableMemoryUsed() Obtain Specifies the memory threshold for probe fusing.
 * @method void setDisableMemoryUsed(integer $DisableMemoryUsed) Set Specifies the memory threshold for probe fusing.
 * @method integer getDisableCpuUsed() Obtain Specifies the CPU threshold for probe fusing.
 * @method void setDisableCpuUsed(integer $DisableCpuUsed) Set Specifies the CPU threshold for probe fusing.
 */
class ModifyApmApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string Business system ID.
     */
    public $InstanceId;

    /**
     * @var string Application name
     */
    public $ServiceName;

    /**
     * @var integer URL convergence switch. 0: Off; 1: On
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer URL convergence threshold
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string Regex rules for exception filtering, separated by commas
     */
    public $ExceptionFilter;

    /**
     * @var string Regex rules for URL convergence, separated by commas
     */
    public $UrlConvergence;

    /**
     * @var string Error code filtering, separated by commas
     */
    public $ErrorCodeFilter;

    /**
     * @var string Regex rules for URL exclusion, separated by commas
     */
    public $UrlExclude;

    /**
     * @var integer Log switch. 0: Off; 1: On
     */
    public $IsRelatedLog;

    /**
     * @var string Log region.
     */
    public $LogRegion;

    /**
     * @var string Log topic ID
     */
    public $LogTopicID;

    /**
     * @var string CLS log set/ES cluster ID
     */
    public $LogSet;

    /**
     * @var string Log source: CLS or ES
     */
    public $LogSource;

    /**
     * @var string APIs to be filtered
     */
    public $IgnoreOperationName;

    /**
     * @var boolean Whether thread profiling is enabled.
     */
    public $EnableSnapshot;

    /**
     * @var integer Timeout threshold for thread profiling.
     */
    public $SnapshotTimeout;

    /**
     * @var boolean Whether agent is enabled.
     */
    public $AgentEnable;

    /**
     * @var boolean Whether link compression is enabled.
     */
    public $TraceSquash;

    /**
     * @var boolean Switch for enabling application diagnosis.
     */
    public $EventEnable;

    /**
     * @var array Component List
     */
    public $InstrumentList;

    /**
     * @var AgentOperationConfigView Related configurations of the probe APIs.
     */
    public $AgentOperationConfigView;

    /**
     * @var boolean Whether to enable application log configuration.
     */
    public $EnableLogConfig;

    /**
     * @var boolean Whether to enable the dashboard configuration for applications. false: disabled (consistent with the business system configuration); true: enabled (application-level configuration).
     */
    public $EnableDashboardConfig;

    /**
     * @var integer Whether to associate with Dashboard. 0: disabled; 1: enabled.
     */
    public $IsRelatedDashboard;

    /**
     * @var string dashboard ID
     */
    public $DashboardTopicID;

    /**
     * @var integer CLS index type. (0 = full-text index; 1 = key-value index).
     */
    public $LogIndexType;

    /**
     * @var string Index key of traceId. It is valid when the CLS index type is key-value index.
     */
    public $LogTraceIdKey;

    /**
     * @var boolean Whether to enable the application security configuration.
     */
    public $EnableSecurityConfig;

    /**
     * @var integer Whether to enable SQL injection analysis.
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer Whether to enable detection of component vulnerability.
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer Whether remote command detection is enabled.
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer Whether to enable detection of Java webshell.
     */
    public $IsMemoryHijackingAnalysis;

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
     * @var boolean Automatic convergence switch for APIs. 0: disabled | 1: enabled.
     */
    public $UrlAutoConvergenceEnable;

    /**
     * @var integer Convergence threshold for URL long segments.
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer Convergence threshold for URL numerical segments.
     */
    public $UrlNumberSegmentThreshold;

    /**
     * @var integer Specifies the memory threshold for probe fusing.
     */
    public $DisableMemoryUsed;

    /**
     * @var integer Specifies the CPU threshold for probe fusing.
     */
    public $DisableCpuUsed;

    /**
     * @param string $InstanceId Business system ID.
     * @param string $ServiceName Application name
     * @param integer $UrlConvergenceSwitch URL convergence switch. 0: Off; 1: On
     * @param integer $UrlConvergenceThreshold URL convergence threshold
     * @param string $ExceptionFilter Regex rules for exception filtering, separated by commas
     * @param string $UrlConvergence Regex rules for URL convergence, separated by commas
     * @param string $ErrorCodeFilter Error code filtering, separated by commas
     * @param string $UrlExclude Regex rules for URL exclusion, separated by commas
     * @param integer $IsRelatedLog Log switch. 0: Off; 1: On
     * @param string $LogRegion Log region.
     * @param string $LogTopicID Log topic ID
     * @param string $LogSet CLS log set/ES cluster ID
     * @param string $LogSource Log source: CLS or ES
     * @param string $IgnoreOperationName APIs to be filtered
     * @param boolean $EnableSnapshot Whether thread profiling is enabled.
     * @param integer $SnapshotTimeout Timeout threshold for thread profiling.
     * @param boolean $AgentEnable Whether agent is enabled.
     * @param boolean $TraceSquash Whether link compression is enabled.
     * @param boolean $EventEnable Switch for enabling application diagnosis.
     * @param array $InstrumentList Component List
     * @param AgentOperationConfigView $AgentOperationConfigView Related configurations of the probe APIs.
     * @param boolean $EnableLogConfig Whether to enable application log configuration.
     * @param boolean $EnableDashboardConfig Whether to enable the dashboard configuration for applications. false: disabled (consistent with the business system configuration); true: enabled (application-level configuration).
     * @param integer $IsRelatedDashboard Whether to associate with Dashboard. 0: disabled; 1: enabled.
     * @param string $DashboardTopicID dashboard ID
     * @param integer $LogIndexType CLS index type. (0 = full-text index; 1 = key-value index).
     * @param string $LogTraceIdKey Index key of traceId. It is valid when the CLS index type is key-value index.
     * @param boolean $EnableSecurityConfig Whether to enable the application security configuration.
     * @param integer $IsSqlInjectionAnalysis Whether to enable SQL injection analysis.
     * @param integer $IsInstrumentationVulnerabilityScan Whether to enable detection of component vulnerability.
     * @param integer $IsRemoteCommandExecutionAnalysis Whether remote command detection is enabled.
     * @param integer $IsMemoryHijackingAnalysis Whether to enable detection of Java webshell.
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
     * @param boolean $UrlAutoConvergenceEnable Automatic convergence switch for APIs. 0: disabled | 1: enabled.
     * @param integer $UrlLongSegmentThreshold Convergence threshold for URL long segments.
     * @param integer $UrlNumberSegmentThreshold Convergence threshold for URL numerical segments.
     * @param integer $DisableMemoryUsed Specifies the memory threshold for probe fusing.
     * @param integer $DisableCpuUsed Specifies the CPU threshold for probe fusing.
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UrlConvergenceSwitch",$param) and $param["UrlConvergenceSwitch"] !== null) {
            $this->UrlConvergenceSwitch = $param["UrlConvergenceSwitch"];
        }

        if (array_key_exists("UrlConvergenceThreshold",$param) and $param["UrlConvergenceThreshold"] !== null) {
            $this->UrlConvergenceThreshold = $param["UrlConvergenceThreshold"];
        }

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("UrlConvergence",$param) and $param["UrlConvergence"] !== null) {
            $this->UrlConvergence = $param["UrlConvergence"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
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

        if (array_key_exists("IgnoreOperationName",$param) and $param["IgnoreOperationName"] !== null) {
            $this->IgnoreOperationName = $param["IgnoreOperationName"];
        }

        if (array_key_exists("EnableSnapshot",$param) and $param["EnableSnapshot"] !== null) {
            $this->EnableSnapshot = $param["EnableSnapshot"];
        }

        if (array_key_exists("SnapshotTimeout",$param) and $param["SnapshotTimeout"] !== null) {
            $this->SnapshotTimeout = $param["SnapshotTimeout"];
        }

        if (array_key_exists("AgentEnable",$param) and $param["AgentEnable"] !== null) {
            $this->AgentEnable = $param["AgentEnable"];
        }

        if (array_key_exists("TraceSquash",$param) and $param["TraceSquash"] !== null) {
            $this->TraceSquash = $param["TraceSquash"];
        }

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
        }

        if (array_key_exists("InstrumentList",$param) and $param["InstrumentList"] !== null) {
            $this->InstrumentList = [];
            foreach ($param["InstrumentList"] as $key => $value){
                $obj = new Instrument();
                $obj->deserialize($value);
                array_push($this->InstrumentList, $obj);
            }
        }

        if (array_key_exists("AgentOperationConfigView",$param) and $param["AgentOperationConfigView"] !== null) {
            $this->AgentOperationConfigView = new AgentOperationConfigView();
            $this->AgentOperationConfigView->deserialize($param["AgentOperationConfigView"]);
        }

        if (array_key_exists("EnableLogConfig",$param) and $param["EnableLogConfig"] !== null) {
            $this->EnableLogConfig = $param["EnableLogConfig"];
        }

        if (array_key_exists("EnableDashboardConfig",$param) and $param["EnableDashboardConfig"] !== null) {
            $this->EnableDashboardConfig = $param["EnableDashboardConfig"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("LogIndexType",$param) and $param["LogIndexType"] !== null) {
            $this->LogIndexType = $param["LogIndexType"];
        }

        if (array_key_exists("LogTraceIdKey",$param) and $param["LogTraceIdKey"] !== null) {
            $this->LogTraceIdKey = $param["LogTraceIdKey"];
        }

        if (array_key_exists("EnableSecurityConfig",$param) and $param["EnableSecurityConfig"] !== null) {
            $this->EnableSecurityConfig = $param["EnableSecurityConfig"];
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

        if (array_key_exists("UrlAutoConvergenceEnable",$param) and $param["UrlAutoConvergenceEnable"] !== null) {
            $this->UrlAutoConvergenceEnable = $param["UrlAutoConvergenceEnable"];
        }

        if (array_key_exists("UrlLongSegmentThreshold",$param) and $param["UrlLongSegmentThreshold"] !== null) {
            $this->UrlLongSegmentThreshold = $param["UrlLongSegmentThreshold"];
        }

        if (array_key_exists("UrlNumberSegmentThreshold",$param) and $param["UrlNumberSegmentThreshold"] !== null) {
            $this->UrlNumberSegmentThreshold = $param["UrlNumberSegmentThreshold"];
        }

        if (array_key_exists("DisableMemoryUsed",$param) and $param["DisableMemoryUsed"] !== null) {
            $this->DisableMemoryUsed = $param["DisableMemoryUsed"];
        }

        if (array_key_exists("DisableCpuUsed",$param) and $param["DisableCpuUsed"] !== null) {
            $this->DisableCpuUsed = $param["DisableCpuUsed"];
        }
    }
}
