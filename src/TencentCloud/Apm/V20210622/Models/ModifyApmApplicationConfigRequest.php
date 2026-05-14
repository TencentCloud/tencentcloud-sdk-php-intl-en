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
 * @method string getInstanceId() Obtain <p>Business system ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Business system ID</p>
 * @method string getServiceName() Obtain <p>Application name</p>
 * @method void setServiceName(string $ServiceName) Set <p>Application name</p>
 * @method integer getUrlConvergenceSwitch() Obtain <p>URL convergence switch, 0 Off | 1 On</p>
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) Set <p>URL convergence switch, 0 Off | 1 On</p>
 * @method integer getUrlConvergenceThreshold() Obtain <p>URL convergence threshold</p>
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) Set <p>URL convergence threshold</p>
 * @method string getExceptionFilter() Obtain <p>Exception filtering regex rules, comma-separated</p>
 * @method void setExceptionFilter(string $ExceptionFilter) Set <p>Exception filtering regex rules, comma-separated</p>
 * @method string getUrlConvergence() Obtain <p>URL convergence regex rules, comma-separated</p>
 * @method void setUrlConvergence(string $UrlConvergence) Set <p>URL convergence regex rules, comma-separated</p>
 * @method string getErrorCodeFilter() Obtain <p>Error code filtering, comma-separated</p>
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) Set <p>Error code filtering, comma-separated</p>
 * @method string getUrlExclude() Obtain <p>URL exclusion regex rule, comma-separated</p>
 * @method void setUrlExclude(string $UrlExclude) Set <p>URL exclusion regex rule, comma-separated</p>
 * @method integer getIsRelatedLog() Obtain <p>Log switch 0 Disabled 1 Enabled</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set <p>Log switch 0 Disabled 1 Enabled</p>
 * @method string getLogRegion() Obtain <p>Log region</p>
 * @method void setLogRegion(string $LogRegion) Set <p>Log region</p>
 * @method string getLogTopicID() Obtain <p>Log topic ID</p>
 * @method void setLogTopicID(string $LogTopicID) Set <p>Log topic ID</p>
 * @method string getLogSet() Obtain <p>CLS logset | ES cluster ID</p>
 * @method void setLogSet(string $LogSet) Set <p>CLS logset | ES cluster ID</p>
 * @method string getLogSource() Obtain <p>Log source CLS | ES</p>
 * @method void setLogSource(string $LogSource) Set <p>Log source CLS | ES</p>
 * @method string getIgnoreOperationName() Obtain <p>Interfaces to Filter</p>
 * @method void setIgnoreOperationName(string $IgnoreOperationName) Set <p>Interfaces to Filter</p>
 * @method boolean getEnableSnapshot() Obtain <p>Whether thread profiling is enabled</p>
 * @method void setEnableSnapshot(boolean $EnableSnapshot) Set <p>Whether thread profiling is enabled</p>
 * @method integer getSnapshotTimeout() Obtain <p>Timeout threshold for thread profiling</p>
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) Set <p>Timeout threshold for thread profiling</p>
 * @method boolean getAgentEnable() Obtain <p>Whether to enable agent</p>
 * @method void setAgentEnable(boolean $AgentEnable) Set <p>Whether to enable agent</p>
 * @method boolean getTraceSquash() Obtain <p>Whether to enable link compression</p>
 * @method void setTraceSquash(boolean $TraceSquash) Set <p>Whether to enable link compression</p>
 * @method boolean getEventEnable() Obtain <p>Whether the switch for enabling application diagnosis is enabled</p>
 * @method void setEventEnable(boolean $EventEnable) Set <p>Whether the switch for enabling application diagnosis is enabled</p>
 * @method array getInstrumentList() Obtain <p>Component list</p>
 * @method void setInstrumentList(array $InstrumentList) Set <p>Component list</p>
 * @method AgentOperationConfigView getAgentOperationConfigView() Obtain <p>probe API related configuration</p>
 * @method void setAgentOperationConfigView(AgentOperationConfigView $AgentOperationConfigView) Set <p>probe API related configuration</p>
 * @method boolean getEnableLogConfig() Obtain <p>Whether the application log configuration is enabled</p>
 * @method void setEnableLogConfig(boolean $EnableLogConfig) Set <p>Whether the application log configuration is enabled</p>
 * @method boolean getEnableDashboardConfig() Obtain <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, application-level configuration)</p>
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) Set <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, application-level configuration)</p>
 * @method integer getIsRelatedDashboard() Obtain <p>Whether to associate with dashboard: 0 off 1 on</p>
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) Set <p>Whether to associate with dashboard: 0 off 1 on</p>
 * @method string getDashboardTopicID() Obtain <p>dashboard ID</p>
 * @method void setDashboardTopicID(string $DashboardTopicID) Set <p>dashboard ID</p>
 * @method integer getLogIndexType() Obtain <p>CLS index type (0=full-text index, 1=key-value index)</p>
 * @method void setLogIndexType(integer $LogIndexType) Set <p>CLS index type (0=full-text index, 1=key-value index)</p>
 * @method string getLogTraceIdKey() Obtain <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
 * @method void setLogTraceIdKey(string $LogTraceIdKey) Set <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
 * @method boolean getEnableSecurityConfig() Obtain <p>Whether application security configuration is enabled</p>
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) Set <p>Whether application security configuration is enabled</p>
 * @method integer getIsSqlInjectionAnalysis() Obtain <p>Whether SQL injection analysis is enabled</p>
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) Set <p>Whether SQL injection analysis is enabled</p>
 * @method integer getIsInstrumentationVulnerabilityScan() Obtain <p>Whether component vulnerability detection is enabled</p>
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) Set <p>Whether component vulnerability detection is enabled</p>
 * @method integer getIsRemoteCommandExecutionAnalysis() Obtain <p>Whether remote command detection is enabled</p>
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) Set <p>Whether remote command detection is enabled</p>
 * @method integer getIsMemoryHijackingAnalysis() Obtain <p>Whether Java Webshell detection is enabled</p>
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) Set <p>Whether Java Webshell detection is enabled</p>
 * @method integer getIsDeleteAnyFileAnalysis() Obtain <p>Whether to enable detection of any file deletion (0 - turn off, 1 - turn on)</p>
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) Set <p>Whether to enable detection of any file deletion (0 - turn off, 1 - turn on)</p>
 * @method integer getIsReadAnyFileAnalysis() Obtain <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) Set <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
 * @method integer getIsUploadAnyFileAnalysis() Obtain <p>Whether to enable arbitrary file upload detection (0-disable, 1-enable)</p>
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) Set <p>Whether to enable arbitrary file upload detection (0-disable, 1-enable)</p>
 * @method integer getIsIncludeAnyFileAnalysis() Obtain <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) Set <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
 * @method integer getIsDirectoryTraversalAnalysis() Obtain <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) Set <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
 * @method integer getIsTemplateEngineInjectionAnalysis() Obtain <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) Set <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
 * @method integer getIsScriptEngineInjectionAnalysis() Obtain <p>Whether to enable script engine injection detection (0-disable, 1-enable)</p>
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) Set <p>Whether to enable script engine injection detection (0-disable, 1-enable)</p>
 * @method integer getIsExpressionInjectionAnalysis() Obtain <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) Set <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
 * @method integer getIsJNDIInjectionAnalysis() Obtain <p>Whether JNDI injection detection is enabled (0 - disabled, 1 - enabled)</p>
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) Set <p>Whether JNDI injection detection is enabled (0 - disabled, 1 - enabled)</p>
 * @method integer getIsJNIInjectionAnalysis() Obtain <p>Whether JNI injection detection is enabled (0-disabled, 1-enabled)</p>
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) Set <p>Whether JNI injection detection is enabled (0-disabled, 1-enabled)</p>
 * @method integer getIsWebshellBackdoorAnalysis() Obtain <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) Set <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
 * @method integer getIsDeserializationAnalysis() Obtain <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) Set <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
 * @method boolean getUrlAutoConvergenceEnable() Obtain <p>API auto convergence switch, 0-off | 1-on</p>
 * @method void setUrlAutoConvergenceEnable(boolean $UrlAutoConvergenceEnable) Set <p>API auto convergence switch, 0-off | 1-on</p>
 * @method integer getUrlLongSegmentThreshold() Obtain <p>URL long segment convergence threshold</p>
 * @method void setUrlLongSegmentThreshold(integer $UrlLongSegmentThreshold) Set <p>URL long segment convergence threshold</p>
 * @method integer getUrlNumberSegmentThreshold() Obtain <p>URL digit segment convergence threshold</p>
 * @method void setUrlNumberSegmentThreshold(integer $UrlNumberSegmentThreshold) Set <p>URL digit segment convergence threshold</p>
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
 * @method string getLogSpanIdKey() Obtain <p>Index key of spanId: This parameter is valid only when the CLS index type is key-value index.</p>
 * @method void setLogSpanIdKey(string $LogSpanIdKey) Set <p>Index key of spanId: This parameter is valid only when the CLS index type is key-value index.</p>
 * @method AutoProfilingConfig getAutoProfilingConfig() Obtain <p>Automated performance analysis task configuration</p>
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) Set <p>Automated performance analysis task configuration</p>
 * @method boolean getEnableThresholdConfig() Obtain <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) Set <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
 * @method integer getErrRateThreshold() Obtain <p>Error rate threshold (%) used to judge the application health status as "red".</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) Set <p>Error rate threshold (%) used to judge the application health status as "red".</p>
 * @method integer getResponseDurationWarningThreshold() Obtain <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) Set <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
 * @method boolean getUseDefaultFuseConfig() Obtain <p>Whether to use the default fuse threshold of the probe</p>
 * @method void setUseDefaultFuseConfig(boolean $UseDefaultFuseConfig) Set <p>Whether to use the default fuse threshold of the probe</p>
 */
class ModifyApmApplicationConfigRequest extends AbstractModel
{
    /**
     * @var string <p>Business system ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Application name</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>URL convergence switch, 0 Off | 1 On</p>
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer <p>URL convergence threshold</p>
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string <p>Exception filtering regex rules, comma-separated</p>
     */
    public $ExceptionFilter;

    /**
     * @var string <p>URL convergence regex rules, comma-separated</p>
     */
    public $UrlConvergence;

    /**
     * @var string <p>Error code filtering, comma-separated</p>
     */
    public $ErrorCodeFilter;

    /**
     * @var string <p>URL exclusion regex rule, comma-separated</p>
     */
    public $UrlExclude;

    /**
     * @var integer <p>Log switch 0 Disabled 1 Enabled</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>Log region</p>
     */
    public $LogRegion;

    /**
     * @var string <p>Log topic ID</p>
     */
    public $LogTopicID;

    /**
     * @var string <p>CLS logset | ES cluster ID</p>
     */
    public $LogSet;

    /**
     * @var string <p>Log source CLS | ES</p>
     */
    public $LogSource;

    /**
     * @var string <p>Interfaces to Filter</p>
     */
    public $IgnoreOperationName;

    /**
     * @var boolean <p>Whether thread profiling is enabled</p>
     */
    public $EnableSnapshot;

    /**
     * @var integer <p>Timeout threshold for thread profiling</p>
     */
    public $SnapshotTimeout;

    /**
     * @var boolean <p>Whether to enable agent</p>
     */
    public $AgentEnable;

    /**
     * @var boolean <p>Whether to enable link compression</p>
     */
    public $TraceSquash;

    /**
     * @var boolean <p>Whether the switch for enabling application diagnosis is enabled</p>
     */
    public $EventEnable;

    /**
     * @var array <p>Component list</p>
     */
    public $InstrumentList;

    /**
     * @var AgentOperationConfigView <p>probe API related configuration</p>
     */
    public $AgentOperationConfigView;

    /**
     * @var boolean <p>Whether the application log configuration is enabled</p>
     */
    public $EnableLogConfig;

    /**
     * @var boolean <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, application-level configuration)</p>
     */
    public $EnableDashboardConfig;

    /**
     * @var integer <p>Whether to associate with dashboard: 0 off 1 on</p>
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>dashboard ID</p>
     */
    public $DashboardTopicID;

    /**
     * @var integer <p>CLS index type (0=full-text index, 1=key-value index)</p>
     */
    public $LogIndexType;

    /**
     * @var string <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
     */
    public $LogTraceIdKey;

    /**
     * @var boolean <p>Whether application security configuration is enabled</p>
     */
    public $EnableSecurityConfig;

    /**
     * @var integer <p>Whether SQL injection analysis is enabled</p>
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>Whether component vulnerability detection is enabled</p>
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>Whether remote command detection is enabled</p>
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>Whether Java Webshell detection is enabled</p>
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>Whether to enable detection of any file deletion (0 - turn off, 1 - turn on)</p>
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable arbitrary file upload detection (0-disable, 1-enable)</p>
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>Whether to enable script engine injection detection (0-disable, 1-enable)</p>
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>Whether JNDI injection detection is enabled (0 - disabled, 1 - enabled)</p>
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer <p>Whether JNI injection detection is enabled (0-disabled, 1-enabled)</p>
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean <p>API auto convergence switch, 0-off | 1-on</p>
     */
    public $UrlAutoConvergenceEnable;

    /**
     * @var integer <p>URL long segment convergence threshold</p>
     */
    public $UrlLongSegmentThreshold;

    /**
     * @var integer <p>URL digit segment convergence threshold</p>
     */
    public $UrlNumberSegmentThreshold;

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
     * @var string <p>Index key of spanId: This parameter is valid only when the CLS index type is key-value index.</p>
     */
    public $LogSpanIdKey;

    /**
     * @var AutoProfilingConfig <p>Automated performance analysis task configuration</p>
     */
    public $AutoProfilingConfig;

    /**
     * @var boolean <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
     */
    public $EnableThresholdConfig;

    /**
     * @var integer <p>Error rate threshold (%) used to judge the application health status as "red".</p>
     */
    public $ErrRateThreshold;

    /**
     * @var integer <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var boolean <p>Whether to use the default fuse threshold of the probe</p>
     */
    public $UseDefaultFuseConfig;

    /**
     * @param string $InstanceId <p>Business system ID</p>
     * @param string $ServiceName <p>Application name</p>
     * @param integer $UrlConvergenceSwitch <p>URL convergence switch, 0 Off | 1 On</p>
     * @param integer $UrlConvergenceThreshold <p>URL convergence threshold</p>
     * @param string $ExceptionFilter <p>Exception filtering regex rules, comma-separated</p>
     * @param string $UrlConvergence <p>URL convergence regex rules, comma-separated</p>
     * @param string $ErrorCodeFilter <p>Error code filtering, comma-separated</p>
     * @param string $UrlExclude <p>URL exclusion regex rule, comma-separated</p>
     * @param integer $IsRelatedLog <p>Log switch 0 Disabled 1 Enabled</p>
     * @param string $LogRegion <p>Log region</p>
     * @param string $LogTopicID <p>Log topic ID</p>
     * @param string $LogSet <p>CLS logset | ES cluster ID</p>
     * @param string $LogSource <p>Log source CLS | ES</p>
     * @param string $IgnoreOperationName <p>Interfaces to Filter</p>
     * @param boolean $EnableSnapshot <p>Whether thread profiling is enabled</p>
     * @param integer $SnapshotTimeout <p>Timeout threshold for thread profiling</p>
     * @param boolean $AgentEnable <p>Whether to enable agent</p>
     * @param boolean $TraceSquash <p>Whether to enable link compression</p>
     * @param boolean $EventEnable <p>Whether the switch for enabling application diagnosis is enabled</p>
     * @param array $InstrumentList <p>Component list</p>
     * @param AgentOperationConfigView $AgentOperationConfigView <p>probe API related configuration</p>
     * @param boolean $EnableLogConfig <p>Whether the application log configuration is enabled</p>
     * @param boolean $EnableDashboardConfig <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, application-level configuration)</p>
     * @param integer $IsRelatedDashboard <p>Whether to associate with dashboard: 0 off 1 on</p>
     * @param string $DashboardTopicID <p>dashboard ID</p>
     * @param integer $LogIndexType <p>CLS index type (0=full-text index, 1=key-value index)</p>
     * @param string $LogTraceIdKey <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
     * @param boolean $EnableSecurityConfig <p>Whether application security configuration is enabled</p>
     * @param integer $IsSqlInjectionAnalysis <p>Whether SQL injection analysis is enabled</p>
     * @param integer $IsInstrumentationVulnerabilityScan <p>Whether component vulnerability detection is enabled</p>
     * @param integer $IsRemoteCommandExecutionAnalysis <p>Whether remote command detection is enabled</p>
     * @param integer $IsMemoryHijackingAnalysis <p>Whether Java Webshell detection is enabled</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>Whether to enable detection of any file deletion (0 - turn off, 1 - turn on)</p>
     * @param integer $IsReadAnyFileAnalysis <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
     * @param integer $IsUploadAnyFileAnalysis <p>Whether to enable arbitrary file upload detection (0-disable, 1-enable)</p>
     * @param integer $IsIncludeAnyFileAnalysis <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
     * @param integer $IsDirectoryTraversalAnalysis <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
     * @param integer $IsTemplateEngineInjectionAnalysis <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
     * @param integer $IsScriptEngineInjectionAnalysis <p>Whether to enable script engine injection detection (0-disable, 1-enable)</p>
     * @param integer $IsExpressionInjectionAnalysis <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
     * @param integer $IsJNDIInjectionAnalysis <p>Whether JNDI injection detection is enabled (0 - disabled, 1 - enabled)</p>
     * @param integer $IsJNIInjectionAnalysis <p>Whether JNI injection detection is enabled (0-disabled, 1-enabled)</p>
     * @param integer $IsWebshellBackdoorAnalysis <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
     * @param integer $IsDeserializationAnalysis <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
     * @param boolean $UrlAutoConvergenceEnable <p>API auto convergence switch, 0-off | 1-on</p>
     * @param integer $UrlLongSegmentThreshold <p>URL long segment convergence threshold</p>
     * @param integer $UrlNumberSegmentThreshold <p>URL digit segment convergence threshold</p>
     * @param integer $DisableMemoryUsed <p>Fuse memory threshold of the probe</p>
     * @param integer $DisableCpuUsed <p>Probe fuse CPU threshold</p>
     * @param boolean $DbStatementParametersEnabled <p>Whether SQL parameter access is enabled</p>
     * @param array $SlowSQLThresholds <p>Slow SQL threshold</p>
     * @param integer $EnableDesensitizationRule <p>Whether the masking rule is enabled</p>
     * @param string $DesensitizationRule <p>Masking rule</p>
     * @param string $LogSpanIdKey <p>Index key of spanId: This parameter is valid only when the CLS index type is key-value index.</p>
     * @param AutoProfilingConfig $AutoProfilingConfig <p>Automated performance analysis task configuration</p>
     * @param boolean $EnableThresholdConfig <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
     * @param integer $ErrRateThreshold <p>Error rate threshold (%) used to judge the application health status as "red".</p>
     * @param integer $ResponseDurationWarningThreshold <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
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

        if (array_key_exists("LogSpanIdKey",$param) and $param["LogSpanIdKey"] !== null) {
            $this->LogSpanIdKey = $param["LogSpanIdKey"];
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
