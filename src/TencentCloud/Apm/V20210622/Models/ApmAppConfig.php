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
 * Querying application configuration response parameters structure.
 *
 * @method string getInstanceKey() Obtain <p>Instance ID</p>
 * @method void setInstanceKey(string $InstanceKey) Set <p>Instance ID</p>
 * @method string getServiceName() Obtain <p>Service name</p>
 * @method void setServiceName(string $ServiceName) Set <p>Service name</p>
 * @method integer getUrlConvergenceSwitch() Obtain <p>URL convergence switch</p>
 * @method void setUrlConvergenceSwitch(integer $UrlConvergenceSwitch) Set <p>URL convergence switch</p>
 * @method integer getUrlConvergenceThreshold() Obtain <p>URL convergence threshold</p>
 * @method void setUrlConvergenceThreshold(integer $UrlConvergenceThreshold) Set <p>URL convergence threshold</p>
 * @method string getUrlConvergence() Obtain <p>URL regular convergence</p>
 * @method void setUrlConvergence(string $UrlConvergence) Set <p>URL regular convergence</p>
 * @method string getExceptionFilter() Obtain <p>Exception filter regular</p>
 * @method void setExceptionFilter(string $ExceptionFilter) Set <p>Exception filter regular</p>
 * @method string getErrorCodeFilter() Obtain <p>Error code filtering</p>
 * @method void setErrorCodeFilter(string $ErrorCodeFilter) Set <p>Error code filtering</p>
 * @method string getComponents() Obtain <p>Service component type</p>
 * @method void setComponents(string $Components) Set <p>Service component type</p>
 * @method string getUrlExclude() Obtain <p>URL exclusion regular</p>
 * @method void setUrlExclude(string $UrlExclude) Set <p>URL exclusion regular</p>
 * @method string getLogSource() Obtain <p>Log source</p>
 * @method void setLogSource(string $LogSource) Set <p>Log source</p>
 * @method string getLogRegion() Obtain <p>Log region</p>
 * @method void setLogRegion(string $LogRegion) Set <p>Log region</p>
 * @method integer getIsRelatedLog() Obtain <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
 * @method void setIsRelatedLog(integer $IsRelatedLog) Set <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
 * @method string getLogTopicID() Obtain <p>Log topic ID</p>
 * @method void setLogTopicID(string $LogTopicID) Set <p>Log topic ID</p>
 * @method string getIgnoreOperationName() Obtain <p>Interface Names to Filter</p>
 * @method void setIgnoreOperationName(string $IgnoreOperationName) Set <p>Interface Names to Filter</p>
 * @method string getLogSet() Obtain <p>CLS logset | ES cluster ID</p>
 * @method void setLogSet(string $LogSet) Set <p>CLS logset | ES cluster ID</p>
 * @method integer getTraceRateLimit() Obtain <p>Number of traces reported by the probe per second</p>
 * @method void setTraceRateLimit(integer $TraceRateLimit) Set <p>Number of traces reported by the probe per second</p>
 * @method boolean getEnableSnapshot() Obtain <p>Whether thread profiling is enabled</p>
 * @method void setEnableSnapshot(boolean $EnableSnapshot) Set <p>Whether thread profiling is enabled</p>
 * @method integer getSnapshotTimeout() Obtain <p>Timeout threshold for thread profiling</p>
 * @method void setSnapshotTimeout(integer $SnapshotTimeout) Set <p>Timeout threshold for thread profiling</p>
 * @method boolean getAgentEnable() Obtain <p>Whether to enable agent</p>
 * @method void setAgentEnable(boolean $AgentEnable) Set <p>Whether to enable agent</p>
 * @method array getInstrumentList() Obtain <p>Component list</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstrumentList(array $InstrumentList) Set <p>Component list</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTraceSquash() Obtain <p>Whether to enable link compression</p>
 * @method void setTraceSquash(boolean $TraceSquash) Set <p>Whether to enable link compression</p>
 * @method boolean getEventEnable() Obtain <p>Whether the application diagnosis switch is enabled</p>
 * @method void setEventEnable(boolean $EventEnable) Set <p>Whether the application diagnosis switch is enabled</p>
 * @method AgentOperationConfigView getAgentOperationConfigView() Obtain <p>probe API related configuration</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAgentOperationConfigView(AgentOperationConfigView $AgentOperationConfigView) Set <p>probe API related configuration</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableLogConfig() Obtain <p>Whether the application log configuration is enabled</p>
 * @method void setEnableLogConfig(boolean $EnableLogConfig) Set <p>Whether the application log configuration is enabled</p>
 * @method string getServiceID() Obtain <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceID(string $ServiceID) Set <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableDashboardConfig() Obtain <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, hierarchical configuration)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableDashboardConfig(boolean $EnableDashboardConfig) Set <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, hierarchical configuration)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRelatedDashboard() Obtain <p>Whether dashboard is associated: 0 Disabled 1 Enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) Set <p>Whether dashboard is associated: 0 Disabled 1 Enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDashboardTopicID() Obtain <p>dashboard ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDashboardTopicID(string $DashboardTopicID) Set <p>dashboard ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableSecurityConfig() Obtain <p>Whether the application-level configuration is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableSecurityConfig(boolean $EnableSecurityConfig) Set <p>Whether the application-level configuration is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsInstrumentationVulnerabilityScan() Obtain <p>Whether the component vulnerability detection is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) Set <p>Whether the component vulnerability detection is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSqlInjectionAnalysis() Obtain <p>Whether SQL injection analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) Set <p>Whether SQL injection analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsRemoteCommandExecutionAnalysis() Obtain <p>Whether remote command execution analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsRemoteCommandExecutionAnalysis(integer $IsRemoteCommandExecutionAnalysis) Set <p>Whether remote command execution analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsMemoryHijackingAnalysis() Obtain <p>Whether Java Webshell detection and analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsMemoryHijackingAnalysis(integer $IsMemoryHijackingAnalysis) Set <p>Whether Java Webshell detection and analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLogIndexType() Obtain <p>CLS index type (0=full-text index, 1=key-value index)</p>
 * @method void setLogIndexType(integer $LogIndexType) Set <p>CLS index type (0=full-text index, 1=key-value index)</p>
 * @method string getLogTraceIdKey() Obtain <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
 * @method void setLogTraceIdKey(string $LogTraceIdKey) Set <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
 * @method integer getIsDeleteAnyFileAnalysis() Obtain <p>Whether to enable file deletion detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDeleteAnyFileAnalysis(integer $IsDeleteAnyFileAnalysis) Set <p>Whether to enable file deletion detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsReadAnyFileAnalysis() Obtain <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsReadAnyFileAnalysis(integer $IsReadAnyFileAnalysis) Set <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsUploadAnyFileAnalysis() Obtain <p>Whether to enable arbitrary file upload detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsUploadAnyFileAnalysis(integer $IsUploadAnyFileAnalysis) Set <p>Whether to enable arbitrary file upload detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsIncludeAnyFileAnalysis() Obtain <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsIncludeAnyFileAnalysis(integer $IsIncludeAnyFileAnalysis) Set <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDirectoryTraversalAnalysis() Obtain <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDirectoryTraversalAnalysis(integer $IsDirectoryTraversalAnalysis) Set <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsTemplateEngineInjectionAnalysis() Obtain <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsTemplateEngineInjectionAnalysis(integer $IsTemplateEngineInjectionAnalysis) Set <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsScriptEngineInjectionAnalysis() Obtain <p>Whether script engine injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsScriptEngineInjectionAnalysis(integer $IsScriptEngineInjectionAnalysis) Set <p>Whether script engine injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsExpressionInjectionAnalysis() Obtain <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsExpressionInjectionAnalysis(integer $IsExpressionInjectionAnalysis) Set <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsJNDIInjectionAnalysis() Obtain <p>Whether JNDI injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsJNDIInjectionAnalysis(integer $IsJNDIInjectionAnalysis) Set <p>Whether JNDI injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsJNIInjectionAnalysis() Obtain <p>Whether JNI injection detection is enabled (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsJNIInjectionAnalysis(integer $IsJNIInjectionAnalysis) Set <p>Whether JNI injection detection is enabled (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsWebshellBackdoorAnalysis() Obtain <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsWebshellBackdoorAnalysis(integer $IsWebshellBackdoorAnalysis) Set <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDeserializationAnalysis() Obtain <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDeserializationAnalysis(integer $IsDeserializationAnalysis) Set <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getUrlAutoConvergenceEnable() Obtain <p>API name auto convergence switch (0-off, 1-on)</p>
 * @method void setUrlAutoConvergenceEnable(boolean $UrlAutoConvergenceEnable) Set <p>API name auto convergence switch (0-off, 1-on)</p>
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
 * @method AutoProfilingConfig getAutoProfilingConfig() Obtain <p>Automated performance analysis configuration</p>
 * @method void setAutoProfilingConfig(AutoProfilingConfig $AutoProfilingConfig) Set <p>Automated performance analysis configuration</p>
 * @method boolean getEnableThresholdConfig() Obtain <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
 * @method void setEnableThresholdConfig(boolean $EnableThresholdConfig) Set <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
 * @method integer getErrRateThreshold() Obtain <p>Error rate threshold (%) used to judge the application health status as "red".</p>
 * @method void setErrRateThreshold(integer $ErrRateThreshold) Set <p>Error rate threshold (%) used to judge the application health status as "red".</p>
 * @method integer getResponseDurationWarningThreshold() Obtain <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) Set <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
 * @method boolean getUseDefaultFuseConfig() Obtain <p>Whether to use the built-in fuse threshold of the probe by default</p>
 * @method void setUseDefaultFuseConfig(boolean $UseDefaultFuseConfig) Set <p>Whether to use the built-in fuse threshold of the probe by default</p>
 */
class ApmAppConfig extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceKey;

    /**
     * @var string <p>Service name</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>URL convergence switch</p>
     */
    public $UrlConvergenceSwitch;

    /**
     * @var integer <p>URL convergence threshold</p>
     */
    public $UrlConvergenceThreshold;

    /**
     * @var string <p>URL regular convergence</p>
     */
    public $UrlConvergence;

    /**
     * @var string <p>Exception filter regular</p>
     */
    public $ExceptionFilter;

    /**
     * @var string <p>Error code filtering</p>
     */
    public $ErrorCodeFilter;

    /**
     * @var string <p>Service component type</p>
     */
    public $Components;

    /**
     * @var string <p>URL exclusion regular</p>
     */
    public $UrlExclude;

    /**
     * @var string <p>Log source</p>
     */
    public $LogSource;

    /**
     * @var string <p>Log region</p>
     */
    public $LogRegion;

    /**
     * @var integer <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
     */
    public $IsRelatedLog;

    /**
     * @var string <p>Log topic ID</p>
     */
    public $LogTopicID;

    /**
     * @var string <p>Interface Names to Filter</p>
     */
    public $IgnoreOperationName;

    /**
     * @var string <p>CLS logset | ES cluster ID</p>
     */
    public $LogSet;

    /**
     * @var integer <p>Number of traces reported by the probe per second</p>
     */
    public $TraceRateLimit;

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
     * @var array <p>Component list</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstrumentList;

    /**
     * @var boolean <p>Whether to enable link compression</p>
     */
    public $TraceSquash;

    /**
     * @var boolean <p>Whether the application diagnosis switch is enabled</p>
     */
    public $EventEnable;

    /**
     * @var AgentOperationConfigView <p>probe API related configuration</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AgentOperationConfigView;

    /**
     * @var boolean <p>Whether the application log configuration is enabled</p>
     */
    public $EnableLogConfig;

    /**
     * @var string <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceID;

    /**
     * @var boolean <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, hierarchical configuration)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableDashboardConfig;

    /**
     * @var integer <p>Whether dashboard is associated: 0 Disabled 1 Enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRelatedDashboard;

    /**
     * @var string <p>dashboard ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DashboardTopicID;

    /**
     * @var boolean <p>Whether the application-level configuration is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableSecurityConfig;

    /**
     * @var integer <p>Whether the component vulnerability detection is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @var integer <p>Whether SQL injection analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer <p>Whether remote command execution analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsRemoteCommandExecutionAnalysis;

    /**
     * @var integer <p>Whether Java Webshell detection and analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsMemoryHijackingAnalysis;

    /**
     * @var integer <p>CLS index type (0=full-text index, 1=key-value index)</p>
     */
    public $LogIndexType;

    /**
     * @var string <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
     */
    public $LogTraceIdKey;

    /**
     * @var integer <p>Whether to enable file deletion detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDeleteAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsReadAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable arbitrary file upload detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsUploadAnyFileAnalysis;

    /**
     * @var integer <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsIncludeAnyFileAnalysis;

    /**
     * @var integer <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDirectoryTraversalAnalysis;

    /**
     * @var integer <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsTemplateEngineInjectionAnalysis;

    /**
     * @var integer <p>Whether script engine injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsScriptEngineInjectionAnalysis;

    /**
     * @var integer <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsExpressionInjectionAnalysis;

    /**
     * @var integer <p>Whether JNDI injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsJNDIInjectionAnalysis;

    /**
     * @var integer <p>Whether JNI injection detection is enabled (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsJNIInjectionAnalysis;

    /**
     * @var integer <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsWebshellBackdoorAnalysis;

    /**
     * @var integer <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDeserializationAnalysis;

    /**
     * @var boolean <p>API name auto convergence switch (0-off, 1-on)</p>
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
     * @var AutoProfilingConfig <p>Automated performance analysis configuration</p>
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
     * @var boolean <p>Whether to use the built-in fuse threshold of the probe by default</p>
     */
    public $UseDefaultFuseConfig;

    /**
     * @param string $InstanceKey <p>Instance ID</p>
     * @param string $ServiceName <p>Service name</p>
     * @param integer $UrlConvergenceSwitch <p>URL convergence switch</p>
     * @param integer $UrlConvergenceThreshold <p>URL convergence threshold</p>
     * @param string $UrlConvergence <p>URL regular convergence</p>
     * @param string $ExceptionFilter <p>Exception filter regular</p>
     * @param string $ErrorCodeFilter <p>Error code filtering</p>
     * @param string $Components <p>Service component type</p>
     * @param string $UrlExclude <p>URL exclusion regular</p>
     * @param string $LogSource <p>Log source</p>
     * @param string $LogRegion <p>Log region</p>
     * @param integer $IsRelatedLog <p>Whether logging is enabled 0 Disabled 1 Enabled</p>
     * @param string $LogTopicID <p>Log topic ID</p>
     * @param string $IgnoreOperationName <p>Interface Names to Filter</p>
     * @param string $LogSet <p>CLS logset | ES cluster ID</p>
     * @param integer $TraceRateLimit <p>Number of traces reported by the probe per second</p>
     * @param boolean $EnableSnapshot <p>Whether thread profiling is enabled</p>
     * @param integer $SnapshotTimeout <p>Timeout threshold for thread profiling</p>
     * @param boolean $AgentEnable <p>Whether to enable agent</p>
     * @param array $InstrumentList <p>Component list</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TraceSquash <p>Whether to enable link compression</p>
     * @param boolean $EventEnable <p>Whether the application diagnosis switch is enabled</p>
     * @param AgentOperationConfigView $AgentOperationConfigView <p>probe API related configuration</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableLogConfig <p>Whether the application log configuration is enabled</p>
     * @param string $ServiceID <p>Application ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableDashboardConfig <p>Whether the dashboard configuration is enabled: false (disabled, consistent with the business system)/true (enabled, hierarchical configuration)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRelatedDashboard <p>Whether dashboard is associated: 0 Disabled 1 Enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DashboardTopicID <p>dashboard ID</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableSecurityConfig <p>Whether the application-level configuration is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsInstrumentationVulnerabilityScan <p>Whether the component vulnerability detection is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSqlInjectionAnalysis <p>Whether SQL injection analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsRemoteCommandExecutionAnalysis <p>Whether remote command execution analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsMemoryHijackingAnalysis <p>Whether Java Webshell detection and analysis is enabled</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LogIndexType <p>CLS index type (0=full-text index, 1=key-value index)</p>
     * @param string $LogTraceIdKey <p>Index key of traceId: This parameter is valid only when the CLS index type is key-value index.</p>
     * @param integer $IsDeleteAnyFileAnalysis <p>Whether to enable file deletion detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsReadAnyFileAnalysis <p>Whether to enable arbitrary file read detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsUploadAnyFileAnalysis <p>Whether to enable arbitrary file upload detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsIncludeAnyFileAnalysis <p>Whether to enable detection of arbitrary files (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDirectoryTraversalAnalysis <p>Whether path traversal detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsTemplateEngineInjectionAnalysis <p>Whether to enable template engine injection detection (0-disable, 1-enable)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsScriptEngineInjectionAnalysis <p>Whether script engine injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsExpressionInjectionAnalysis <p>Whether expression injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsJNDIInjectionAnalysis <p>Whether JNDI injection detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsJNIInjectionAnalysis <p>Whether JNI injection detection is enabled (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsWebshellBackdoorAnalysis <p>Whether to enable Webshell backdoor detection (0 - disabled, 1 - enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDeserializationAnalysis <p>Whether deserialization detection is enabled (0-disabled, 1-enabled)</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $UrlAutoConvergenceEnable <p>API name auto convergence switch (0-off, 1-on)</p>
     * @param integer $UrlLongSegmentThreshold <p>URL long segment convergence threshold</p>
     * @param integer $UrlNumberSegmentThreshold <p>URL digit segment convergence threshold</p>
     * @param integer $DisableMemoryUsed <p>Fuse memory threshold of the probe</p>
     * @param integer $DisableCpuUsed <p>Probe fuse CPU threshold</p>
     * @param boolean $DbStatementParametersEnabled <p>Whether SQL parameter access is enabled</p>
     * @param array $SlowSQLThresholds <p>Slow SQL threshold</p>
     * @param integer $EnableDesensitizationRule <p>Whether the masking rule is enabled</p>
     * @param string $DesensitizationRule <p>Masking rule</p>
     * @param string $LogSpanIdKey <p>Index key of spanId: This parameter is valid only when the CLS index type is key-value index.</p>
     * @param AutoProfilingConfig $AutoProfilingConfig <p>Automated performance analysis configuration</p>
     * @param boolean $EnableThresholdConfig <p>Threshold configuration switch. true means use application level threshold; false means use business system level threshold.</p>
     * @param integer $ErrRateThreshold <p>Error rate threshold (%) used to judge the application health status as "red".</p>
     * @param integer $ResponseDurationWarningThreshold <p>Alert threshold for response time (ms), used to judge the application health status as "yellow".</p>
     * @param boolean $UseDefaultFuseConfig <p>Whether to use the built-in fuse threshold of the probe by default</p>
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

        if (array_key_exists("UrlConvergenceSwitch",$param) and $param["UrlConvergenceSwitch"] !== null) {
            $this->UrlConvergenceSwitch = $param["UrlConvergenceSwitch"];
        }

        if (array_key_exists("UrlConvergenceThreshold",$param) and $param["UrlConvergenceThreshold"] !== null) {
            $this->UrlConvergenceThreshold = $param["UrlConvergenceThreshold"];
        }

        if (array_key_exists("UrlConvergence",$param) and $param["UrlConvergence"] !== null) {
            $this->UrlConvergence = $param["UrlConvergence"];
        }

        if (array_key_exists("ExceptionFilter",$param) and $param["ExceptionFilter"] !== null) {
            $this->ExceptionFilter = $param["ExceptionFilter"];
        }

        if (array_key_exists("ErrorCodeFilter",$param) and $param["ErrorCodeFilter"] !== null) {
            $this->ErrorCodeFilter = $param["ErrorCodeFilter"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("UrlExclude",$param) and $param["UrlExclude"] !== null) {
            $this->UrlExclude = $param["UrlExclude"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("IgnoreOperationName",$param) and $param["IgnoreOperationName"] !== null) {
            $this->IgnoreOperationName = $param["IgnoreOperationName"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("TraceRateLimit",$param) and $param["TraceRateLimit"] !== null) {
            $this->TraceRateLimit = $param["TraceRateLimit"];
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

        if (array_key_exists("EventEnable",$param) and $param["EventEnable"] !== null) {
            $this->EventEnable = $param["EventEnable"];
        }

        if (array_key_exists("AgentOperationConfigView",$param) and $param["AgentOperationConfigView"] !== null) {
            $this->AgentOperationConfigView = new AgentOperationConfigView();
            $this->AgentOperationConfigView->deserialize($param["AgentOperationConfigView"]);
        }

        if (array_key_exists("EnableLogConfig",$param) and $param["EnableLogConfig"] !== null) {
            $this->EnableLogConfig = $param["EnableLogConfig"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
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

        if (array_key_exists("EnableSecurityConfig",$param) and $param["EnableSecurityConfig"] !== null) {
            $this->EnableSecurityConfig = $param["EnableSecurityConfig"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
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
