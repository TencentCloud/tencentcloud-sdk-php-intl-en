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
 * Application-Related configuration list items.
 *
 * @method string getInstanceKey() Obtain <p>Business system ID</p>
 * @method void setInstanceKey(string $InstanceKey) Set <p>Business system ID</p>
 * @method string getServiceName() Obtain <p>Application name</p>
 * @method void setServiceName(string $ServiceName) Set <p>Application name</p>
 * @method string getOperationNameFilter() Obtain <p>Interface Filtering</p>
 * @method void setOperationNameFilter(string $OperationNameFilter) Set <p>Interface Filtering</p>
 * @method string getExceptionFilter() Obtain <p>Error type filtering</p>
 * @method void setExceptionFilter(string $ExceptionFilter) Set <p>Error type filtering</p>
 * @method string getErrorCodeFilter() Obtain <p>HTTP status code filtering</p>
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) Set <p>HTTP status code filtering</p>
 * @method boolean getEventEnable() Obtain <p>Application diagnosis switch (abandoned)</p>
 * @method void setEventEnable(boolean $EventEnable) Set <p>Application diagnosis switch (abandoned)</p>
 * @method integer getUrlConvergenceSwitch() Obtain <p>URL convergence switch 0 Off 1 On</p>
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) Set <p>URL convergence switch 0 Off 1 On</p>
 * @method integer getUrlConvergenceThreshold() Obtain <p>URL convergence threshold</p>
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) Set <p>URL convergence threshold</p>
 * @method string getUrlConvergence() Obtain <p>URL regular convergence rules</p>
 * @method void setUrlConvergence(string $UrlConvergence) Set <p>URL regular convergence rules</p>
 * @method string getUrlExclude() Obtain <p>URL exclusion rule regex</p>
 * @method void setUrlExclude(string $UrlExclude) Set <p>URL exclusion rule regex</p>
 * @method integer getIsRelatedLog() Obtain <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
 * @method string getLogSource() Obtain <p>Log source</p>
 * @method void setLogSource(string $LogSource) Set <p>Log source</p>
 * @method string getLogSet() Obtain <p>Logset</p>
 * @method void setLogSet(string $LogSet) Set <p>Logset</p>
 * @method string getLogTopicID() Obtain <p>Log topic</p>
 * @method void setLogTopicID(string $LogTopicID) Set <p>Log topic</p>
 * @method boolean getSnapshotEnable() Obtain <p>Method stack snapshot switch. Enabled indicates true. false indicates disabled.</p>
 * @method void setSnapshotEnable(boolean $SnapshotEnable) Set <p>Method stack snapshot switch. Enabled indicates true. false indicates disabled.</p>
 * @method integer getSnapshotTimeout() Obtain <p>Slow call monitoring trigger threshold</p>
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) Set <p>Slow call monitoring trigger threshold</p>
 * @method boolean getAgentEnable() Obtain <p>Master switch for probes</p>
 * @method void setAgentEnable(boolean $AgentEnable) Set <p>Master switch for probes</p>
 * @method array getInstrumentList() Obtain <p>Component list toggle (abandoned)</p>
 * @method void setInstrumentList(array $InstrumentList) Set <p>Component list toggle (abandoned)</p>
 * @method boolean getTraceSquash() Obtain <p>Link compression switch (abandoned)</p>
 * @method void setTraceSquash(boolean $TraceSquash) Set <p>Link compression switch (abandoned)</p>
 * @method string getAgentIgnoreOperation() Obtain <p>Link filtering configuration</p>
 * @method void setAgentIgnoreOperation(string $AgentIgnoreOperation) Set <p>Link filtering configuration</p>
 * @method boolean getEnableSecurityConfig() Obtain <p>Enable the application security switch</p>
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) Set <p>Enable the application security switch</p>
 * @method integer getIsSqlInjectionAnalysis() Obtain <p>Whether SQL injection detection is enabled</p>
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) Set <p>Whether SQL injection detection is enabled</p>
 * @method integer getIsInstrumentationVulnerabilityScan() Obtain <p>Whether component vulnerability detection is enabled</p>
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) Set <p>Whether component vulnerability detection is enabled</p>
 * @method integer getIsRemoteCommandExecutionAnalysis() Obtain <p>Whether remote command execution detection is enabled</p>
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) Set <p>Whether remote command execution detection is enabled</p>
 * @method integer getIsMemoryHijackingAnalysis() Obtain <p>Whether memory leakage detection is enabled</p>
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) Set <p>Whether memory leakage detection is enabled</p>
 * @method integer getIsDeleteAnyFileAnalysis() Obtain <p>Whether to enable detection of any file deletion</p>
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) Set <p>Whether to enable detection of any file deletion</p>
 * @method integer getIsReadAnyFileAnalysis() Obtain <p>Whether to enable arbitrary file read detection</p>
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) Set <p>Whether to enable arbitrary file read detection</p>
 * @method integer getIsUploadAnyFileAnalysis() Obtain <p>Whether to enable arbitrary file upload detection</p>
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) Set <p>Whether to enable arbitrary file upload detection</p>
 * @method integer getIsIncludeAnyFileAnalysis() Obtain <p>Whether to enable detection of arbitrary files</p>
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) Set <p>Whether to enable detection of arbitrary files</p>
 * @method integer getIsDirectoryTraversalAnalysis() Obtain <p>Whether path traversal detection is enabled</p>
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) Set <p>Whether path traversal detection is enabled</p>
 * @method integer getIsTemplateEngineInjectionAnalysis() Obtain <p>Whether to enable template engine injection detection</p>
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) Set <p>Whether to enable template engine injection detection</p>
 * @method integer getIsScriptEngineInjectionAnalysis() Obtain <p>Whether script engine injection detection is enabled</p>
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) Set <p>Whether script engine injection detection is enabled</p>
 * @method integer getIsExpressionInjectionAnalysis() Obtain <p>Whether expression injection detection is enabled</p>
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) Set <p>Whether expression injection detection is enabled</p>
 * @method integer getIsJndiInjectionAnalysis() Obtain <p>Whether JNDI injection detection is enabled</p>
 * @method void setIsJndiInjectionAnalysis(integer $IsJndiInjectionAnalysis) Set <p>Whether JNDI injection detection is enabled</p>
 * @method integer getIsJniInjectionAnalysis() Obtain <p>Whether JNI injection detection is enabled</p>
 * @method void setIsJniInjectionAnalysis(integer $IsJniInjectionAnalysis) Set <p>Whether JNI injection detection is enabled</p>
 * @method integer getIsWebshellBackdoorAnalysis() Obtain <p>Whether Webshell backdoor detection is enabled</p>
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) Set <p>Whether Webshell backdoor detection is enabled</p>
 * @method integer getIsDeserializationAnalysis() Obtain <p>Whether deserialization detection is enabled</p>
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) Set <p>Whether deserialization detection is enabled</p>
 * @method boolean getEnableDashboardConfig() Obtain <p>Whether the console switch is enabled</p>
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) Set <p>Whether the console switch is enabled</p>
 * @method integer getIsRelatedDashboard() Obtain <p>Whether to associate with Dashboard</p>
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) Set <p>Whether to associate with Dashboard</p>
 * @method string getDashboardTopicID() Obtain <p>Dashboard topic</p>
 * @method void setDashboardTopicID(string $DashboardTopicID) Set <p>Dashboard topic</p>
 * @method integer getDisableMemoryUsed() Obtain <p>Fuse memory threshold of the probe</p>
 * @method void setDisableMemoryUsed(integer $DisableMemoryUsed) Set <p>Fuse memory threshold of the probe</p>
 * @method integer getDisableCpuUsed() Obtain <p>Probe fuse CPU threshold</p>
 * @method void setDisableCpuUsed(integer $DisableCpuUsed) Set <p>Probe fuse CPU threshold</p>
 * @method boolean getDbStatementParametersEnabled() Obtain <p>Whether SQL parameter access is enabled</p>
 * @method void setDbStatementParametersEnabled(boolean $DbStatementParametersEnabled) Set <p>Whether SQL parameter access is enabled</p>
 * @method array getSlowSQLThresholds() Obtain <p>Slow SQL threshold</p>
 * @method void setSlowSQLThresholds(array $SlowSQLThresholds) Set <p>Slow SQL threshold</p>
 * @method integer getEnableDesensitizationRule() Obtain <p>Whether the masking rule is enabled</p>
 * @method void setEnableDesensitizationRule(integer $EnableDesensitizationRule) Set <p>Whether the masking rule is enabled</p>
 * @method string getDesensitizationRule() Obtain <p>Masking rule</p>
 * @method void setDesensitizationRule(string $DesensitizationRule) Set <p>Masking rule</p>
 * @method AutoProfilingConfig getAutoProfilingConfig() Obtain <p>Automated performance analysis task configuration</p>
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) Set <p>Automated performance analysis task configuration</p>
 * @method boolean getEnableThresholdConfig() Obtain <p>Threshold configuration switch</p>
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) Set <p>Threshold configuration switch</p>
 * @method integer getErrRateThreshold() Obtain <p>Error rate threshold</p><p>Unit: %</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) Set <p>Error rate threshold</p><p>Unit: %</p>
 * @method integer getResponseDurationWarningThreshold() Obtain <p>Alert threshold of response time</p><p>Unit: ms</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) Set <p>Alert threshold of response time</p><p>Unit: ms</p>
 * @method boolean getUseDefaultFuseConfig() Obtain <p>Whether to use the default fuse threshold of the probe</p>
 * @method void setUseDefaultFuseConfig(boolean $UseDefaultFuseConfig) Set <p>Whether to use the default fuse threshold of the probe</p>
 */
class ApmApplicationConfigView extends AbstractModel
{
    /**
     * @var string <p>Business system ID</p>
     */
    public $InstanceKey;

    /**
     * @var string <p>Application name</p>
     */
    public $ServiceName;

    /**
     * @var string <p>Interface Filtering</p>
     */
    public $OperationNameFilter;

    /**
     * @var string <p>Error type filtering</p>
     */
    public $ExceptionFilter;

    /**
     * @var string <p>HTTP status code filtering</p>
     */
    public $ErrorCodeFilter;

    /**
     * @var boolean <p>Application diagnosis switch (abandoned)</p>
     */
    public $EventEnable;

    /**
     * @var integer <p>URL convergence switch 0 Off 1 On</p>
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer <p>URL convergence threshold</p>
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string <p>URL regular convergence rules</p>
     */
    public $UrlConvergence;

    /**
     * @var string <p>URL exclusion rule regex</p>
     */
    public $UrlExclude;

    /**
     * @var integer <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>Log source</p>
     */
    public $LogSource;

    /**
     * @var string <p>Logset</p>
     */
    public $LogSet;

    /**
     * @var string <p>Log topic</p>
     */
    public $LogTopicID;

    /**
     * @var boolean <p>Method stack snapshot switch. Enabled indicates true. false indicates disabled.</p>
     */
    public $SnapshotEnable;

    /**
     * @var integer <p>Slow call monitoring trigger threshold</p>
     */
    public $SnapshotTimeout;

    /**
     * @var boolean <p>Master switch for probes</p>
     */
    public $AgentEnable;

    /**
     * @var array <p>Component list toggle (abandoned)</p>
     */
    public $InstrumentList;

    /**
     * @var boolean <p>Link compression switch (abandoned)</p>
     */
    public $TraceSquash;

    /**
     * @var string <p>Link filtering configuration</p>
     */
    public $AgentIgnoreOperation;

    /**
     * @var boolean <p>Enable the application security switch</p>
     */
    public $EnableSecurityConfig;

    /**
     * @var integer <p>Whether SQL injection detection is enabled</p>
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>Whether component vulnerability detection is enabled</p>
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>Whether remote command execution detection is enabled</p>
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>Whether memory leakage detection is enabled</p>
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>Whether to enable detection of any file deletion</p>
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable arbitrary file read detection</p>
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable arbitrary file upload detection</p>
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable detection of arbitrary files</p>
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>Whether path traversal detection is enabled</p>
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>Whether to enable template engine injection detection</p>
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>Whether script engine injection detection is enabled</p>
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>Whether expression injection detection is enabled</p>
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>Whether JNDI injection detection is enabled</p>
     */
    public $IsJndiInjectionAnalysis;

    /**
     * @var integer <p>Whether JNI injection detection is enabled</p>
     */
    public $IsJniInjectionAnalysis;

    /**
     * @var integer <p>Whether Webshell backdoor detection is enabled</p>
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>Whether deserialization detection is enabled</p>
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean <p>Whether the console switch is enabled</p>
     */
    public $EnableDashboardConfig;

    /**
     * @var integer <p>Whether to associate with Dashboard</p>
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>Dashboard topic</p>
     */
    public $DashboardTopicID;

    /**
     * @var integer <p>Fuse memory threshold of the probe</p>
     */
    public $DisableMemoryUsed;

    /**
     * @var integer <p>Probe fuse CPU threshold</p>
     */
    public $DisableCpuUsed;

    /**
     * @var boolean <p>Whether SQL parameter access is enabled</p>
     */
    public $DbStatementParametersEnabled;

    /**
     * @var array <p>Slow SQL threshold</p>
     */
    public $SlowSQLThresholds;

    /**
     * @var integer <p>Whether the masking rule is enabled</p>
     */
    public $EnableDesensitizationRule;

    /**
     * @var string <p>Masking rule</p>
     */
    public $DesensitizationRule;

    /**
     * @var AutoProfilingConfig <p>Automated performance analysis task configuration</p>
     */
    public $AutoProfilingConfig;

    /**
     * @var boolean <p>Threshold configuration switch</p>
     */
    public $EnableThresholdConfig;

    /**
     * @var integer <p>Error rate threshold</p><p>Unit: %</p>
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>Alert threshold of response time</p><p>Unit: ms</p>
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var boolean <p>Whether to use the default fuse threshold of the probe</p>
     */
    public $UseDefaultFuseConfig;

    /**
     * @param string $InstanceKey <p>Business system ID</p>
     * @param string $ServiceName <p>Application name</p>
     * @param string $OperationNameFilter <p>Interface Filtering</p>
     * @param string $ExceptionFilter <p>Error type filtering</p>
     * @param string $ErrorCodeFilter <p>HTTP status code filtering</p>
     * @param boolean $EventEnable <p>Application diagnosis switch (abandoned)</p>
     * @param integer $UrlConvergenceSwitch <p>URL convergence switch 0 Off 1 On</p>
     * @param integer $UrlConvergenceThreshold <p>URL convergence threshold</p>
     * @param string $UrlConvergence <p>URL regular convergence rules</p>
     * @param string $UrlExclude <p>URL exclusion rule regex</p>
     * @param integer $IsRelatedLog <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
     * @param string $LogSource <p>Log source</p>
     * @param string $LogSet <p>Logset</p>
     * @param string $LogTopicID <p>Log topic</p>
     * @param boolean $SnapshotEnable <p>Method stack snapshot switch. Enabled indicates true. false indicates disabled.</p>
     * @param integer $SnapshotTimeout <p>Slow call monitoring trigger threshold</p>
     * @param boolean $AgentEnable <p>Master switch for probes</p>
     * @param array $InstrumentList <p>Component list toggle (abandoned)</p>
     * @param boolean $TraceSquash <p>Link compression switch (abandoned)</p>
     * @param string $AgentIgnoreOperation <p>Link filtering configuration</p>
     * @param boolean $EnableSecurityConfig <p>Enable the application security switch</p>
     * @param integer $IsSqlInjectionAnalysis <p>Whether SQL injection detection is enabled</p>
     * @param integer $IsInstrumentationVulnerabilityScan <p>Whether component vulnerability detection is enabled</p>
     * @param integer $IsRemoteCommandExecutionAnalysis <p>Whether remote command execution detection is enabled</p>
     * @param integer $IsMemoryHijackingAnalysis <p>Whether memory leakage detection is enabled</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>Whether to enable detection of any file deletion</p>
     * @param integer $IsReadAnyFileAnalysis <p>Whether to enable arbitrary file read detection</p>
     * @param integer $IsUploadAnyFileAnalysis <p>Whether to enable arbitrary file upload detection</p>
     * @param integer $IsIncludeAnyFileAnalysis <p>Whether to enable detection of arbitrary files</p>
     * @param integer $IsDirectoryTraversalAnalysis <p>Whether path traversal detection is enabled</p>
     * @param integer $IsTemplateEngineInjectionAnalysis <p>Whether to enable template engine injection detection</p>
     * @param integer $IsScriptEngineInjectionAnalysis <p>Whether script engine injection detection is enabled</p>
     * @param integer $IsExpressionInjectionAnalysis <p>Whether expression injection detection is enabled</p>
     * @param integer $IsJndiInjectionAnalysis <p>Whether JNDI injection detection is enabled</p>
     * @param integer $IsJniInjectionAnalysis <p>Whether JNI injection detection is enabled</p>
     * @param integer $IsWebshellBackdoorAnalysis <p>Whether Webshell backdoor detection is enabled</p>
     * @param integer $IsDeserializationAnalysis <p>Whether deserialization detection is enabled</p>
     * @param boolean $EnableDashboardConfig <p>Whether the console switch is enabled</p>
     * @param integer $IsRelatedDashboard <p>Whether to associate with Dashboard</p>
     * @param string $DashboardTopicID <p>Dashboard topic</p>
     * @param integer $DisableMemoryUsed <p>Fuse memory threshold of the probe</p>
     * @param integer $DisableCpuUsed <p>Probe fuse CPU threshold</p>
     * @param boolean $DbStatementParametersEnabled <p>Whether SQL parameter access is enabled</p>
     * @param array $SlowSQLThresholds <p>Slow SQL threshold</p>
     * @param integer $EnableDesensitizationRule <p>Whether the masking rule is enabled</p>
     * @param string $DesensitizationRule <p>Masking rule</p>
     * @param AutoProfilingConfig $AutoProfilingConfig <p>Automated performance analysis task configuration</p>
     * @param boolean $EnableThresholdConfig <p>Threshold configuration switch</p>
     * @param integer $ErrRateThreshold <p>Error rate threshold</p><p>Unit: %</p>
     * @param integer $ResponseDurationWarningThreshold <p>Alert threshold of response time</p><p>Unit: ms</p>
     * @param boolean $UseDefaultFuseConfig <p>Whether to use the default fuse threshold of the probe</p>
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OperationNameFilter",$param) and $param["OperationNameFilter"] !== null) {
            $this->OperationNameFilter = $param["OperationNameFilter"];
        }

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
        }

        if (array_key_exists("UrlConvergenceSwitch",$param) and $param["UrlConvergenceSwitch"] !== null) {
            $this->UrlConvergenceSwitch = $param["UrlConvergenceSwitch"];
        }

        if (array_key_exists("UrlConvergenceThreshold",$param) and $param["UrlConvergenceThreshold"] !== null) {
            $this->UrlConvergenceThreshold = $param["UrlConvergenceThreshold"];
        }

        if (array_key_exists("UrlConvergence",$param) and $param["UrlConvergence"] !== null) {
            $this->UrlConvergence = $param["UrlConvergence"];
        }

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("SnapshotEnable",$param) and $param["SnapshotEnable"] !== null) {
            $this->SnapshotEnable = $param["SnapshotEnable"];
        }

        if (array_key_exists("SnapshotTimeout",$param) and $param["SnapshotTimeout"] !== null) {
            $this->SnapshotTimeout = $param["SnapshotTimeout"];
        }

        if (array_key_exists("AgentEnable",$param) and $param["AgentEnable"] !== null) {
            $this->AgentEnable = $param["AgentEnable"];
        }

        if (array_key_exists("InstrumentList",$param) and $param["InstrumentList"] !== null) {
            $this->InstrumentList = [];
            foreach ($param["InstrumentList"] as $key => $value){
                $obj = new Instrument();
                $obj->deserialize($value);
                array_push($this->InstrumentList, $obj);
            }
        }

        if (array_key_exists("TraceSquash",$param) and $param["TraceSquash"] !== null) {
            $this->TraceSquash = $param["TraceSquash"];
        }

        if (array_key_exists("AgentIgnoreOperation",$param) and $param["AgentIgnoreOperation"] !== null) {
            $this->AgentIgnoreOperation = $param["AgentIgnoreOperation"];
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

        if (array_key_exists("IsJndiInjectionAnalysis",$param) and $param["IsJndiInjectionAnalysis"] !== null) {
            $this->IsJndiInjectionAnalysis = $param["IsJndiInjectionAnalysis"];
        }

        if (array_key_exists("IsJniInjectionAnalysis",$param) and $param["IsJniInjectionAnalysis"] !== null) {
            $this->IsJniInjectionAnalysis = $param["IsJniInjectionAnalysis"];
        }

        if (array_key_exists("IsWebshellBackdoorAnalysis",$param) and $param["IsWebshellBackdoorAnalysis"] !== null) {
            $this->IsWebshellBackdoorAnalysis = $param["IsWebshellBackdoorAnalysis"];
        }

        if (array_key_exists("IsDeserializationAnalysis",$param) and $param["IsDeserializationAnalysis"] !== null) {
            $this->IsDeserializationAnalysis = $param["IsDeserializationAnalysis"];
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

        if (array_key_exists("DisableMemoryUsed",$param) and $param["DisableMemoryUsed"] !== null) {
            $this->DisableMemoryUsed = $param["DisableMemoryUsed"];
        }

        if (array_key_exists("DisableCpuUsed",$param) and $param["DisableCpuUsed"] !== null) {
            $this->DisableCpuUsed = $param["DisableCpuUsed"];
        }

        if (array_key_exists("DbStatementParametersEnabled",$param) and $param["DbStatementParametersEnabled"] !== null) {
            $this->DbStatementParametersEnabled = $param["DbStatementParametersEnabled"];
        }

        if (array_key_exists("SlowSQLThresholds",$param) and $param["SlowSQLThresholds"] !== null) {
            $this->SlowSQLThresholds = [];
            foreach ($param["SlowSQLThresholds"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->SlowSQLThresholds, $obj);
            }
        }

        if (array_key_exists("EnableDesensitizationRule",$param) and $param["EnableDesensitizationRule"] !== null) {
            $this->EnableDesensitizationRule = $param["EnableDesensitizationRule"];
        }

        if (array_key_exists("DesensitizationRule",$param) and $param["DesensitizationRule"] !== null) {
            $this->DesensitizationRule = $param["DesensitizationRule"];
        }

        if (array_key_exists("AutoProfilingConfig",$param) and $param["AutoProfilingConfig"] !== null) {
            $this->AutoProfilingConfig = new AutoProfilingConfig();
            $this->AutoProfilingConfig->deserialize($param["AutoProfilingConfig"]);
        }

        if (array_key_exists("EnableThresholdConfig",$param) and $param["EnableThresholdConfig"] !== null) {
            $this->EnableThresholdConfig = $param["EnableThresholdConfig"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }

        if (array_key_exists("UseDefaultFuseConfig",$param) and $param["UseDefaultFuseConfig"] !== null) {
            $this->UseDefaultFuseConfig = $param["UseDefaultFuseConfig"];
        }
    }
}
