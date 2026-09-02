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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR alert details (including content JSON and asset/intelligence enrichment fields)
 *
 * @method integer getId() Obtain <p>Primary key ID</p>
 * @method void setId(integer $Id) Set <p>Primary key ID</p>
 * @method integer getAppId() Obtain <p>Tenant ID</p>
 * @method void setAppId(integer $AppId) Set <p>Tenant ID</p>
 * @method string getAlertId() Obtain <p>Alarm unique ID</p>
 * @method void setAlertId(string $AlertId) Set <p>Alarm unique ID</p>
 * @method string getAlertCategory() Obtain <p>Major category of alarm (English enumeration: VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE)</p>
 * @method void setAlertCategory(string $AlertCategory) Set <p>Major category of alarm (English enumeration: VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE)</p>
 * @method string getAlertSubType() Obtain <p>Alarm sub-type (enum: MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK)</p>
 * @method void setAlertSubType(string $AlertSubType) Set <p>Alarm sub-type (enum: MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK)</p>
 * @method string getRuleId() Obtain <p>Associated rule ID</p>
 * @method void setRuleId(string $RuleId) Set <p>Associated rule ID</p>
 * @method integer getRuleType() Obtain <p>Rule type: 0 - system rule; 1 - user-customized</p>
 * @method void setRuleType(integer $RuleType) Set <p>Rule type: 0 - system rule; 1 - user-customized</p>
 * @method string getLevel() Obtain <p>Alarm level (English enumeration: CRITICAL/HIGH/MEDIUM/LOW/INFO)</p>
 * @method void setLevel(string $Level) Set <p>Alarm level (English enumeration: CRITICAL/HIGH/MEDIUM/LOW/INFO)</p>
 * @method string getStatus() Obtain <p>Processing status (English enumeration: PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED)</p>
 * @method void setStatus(string $Status) Set <p>Processing status (English enumeration: PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED)</p>
 * @method string getAttackStage() Obtain <p>ATT&amp;CK attack stages</p>
 * @method void setAttackStage(string $AttackStage) Set <p>ATT&amp;CK attack stages</p>
 * @method string getDetectMode() Obtain <p>Detection Mode (Enum: PRECISE/BALANCED/DEEP)</p>
 * @method void setDetectMode(string $DetectMode) Set <p>Detection Mode (Enum: PRECISE/BALANCED/DEEP)</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getQuuid() Obtain <p>Host UUID</p>
 * @method void setQuuid(string $Quuid) Set <p>Host UUID</p>
 * @method integer getEventCount() Obtain <p>Number of aggregations</p>
 * @method void setEventCount(integer $EventCount) Set <p>Number of aggregations</p>
 * @method integer getIsProVersion() Obtain <p>Whether it is a paid edition</p>
 * @method void setIsProVersion(integer $IsProVersion) Set <p>Whether it is a paid edition</p>
 * @method string getAlertSource() Obtain <p>Alarm source (English enumeration: HOST/CONTAINER/K8S/CSIP)</p>
 * @method void setAlertSource(string $AlertSource) Set <p>Alarm source (English enumeration: HOST/CONTAINER/K8S/CSIP)</p>
 * @method string getImageId() Obtain <p>Container image ID (reserved field, always an empty string).</p>
 * @method void setImageId(string $ImageId) Set <p>Container image ID (reserved field, always an empty string).</p>
 * @method string getContainerId() Obtain <p>Container ID (reserved field, always an empty string)</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container ID (reserved field, always an empty string)</p>
 * @method string getClusterId() Obtain <p>Cluster ID (reserved field, always an empty string)</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID (reserved field, always an empty string)</p>
 * @method string getFirstDetectTime() Obtain <p>First discovery time</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) Set <p>First discovery time</p>
 * @method string getLatestDetectTime() Obtain <p>Most recent discovery time</p>
 * @method void setLatestDetectTime(string $LatestDetectTime) Set <p>Most recent discovery time</p>
 * @method string getRuleName() Obtain <p>Rule name (rule enrichment)</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name (rule enrichment)</p>
 * @method string getContentType() Obtain <p>Content type: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
 * @method void setContentType(string $ContentType) Set <p>Content type: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
 * @method string getInstanceName() Obtain <p>Instance name (asset enrichment)</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name (asset enrichment)</p>
 * @method string getPublicIp() Obtain <p>Public IP address (asset enrichment)</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IP address (asset enrichment)</p>
 * @method string getPrivateIp() Obtain <p>Private IP address (asset enrichment)</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private IP address (asset enrichment)</p>
 * @method string getContent() Obtain <p>Alert details json string (parsed by the frontend via JSON.parse; empty value is &quot;{}&quot;)</p>
 * @method void setContent(string $Content) Set <p>Alert details json string (parsed by the frontend via JSON.parse; empty value is &quot;{}&quot;)</p>
 * @method string getAlertName() Obtain <p>Alarm name (Chinese and English name of the sub-type)</p>
 * @method void setAlertName(string $AlertName) Set <p>Alarm name (Chinese and English name of the sub-type)</p>
 * @method array getCSIPTags() Obtain <p>Security center tag</p>
 * @method void setCSIPTags(array $CSIPTags) Set <p>Security center tag</p>
 * @method string getHarmDesc() Obtain <p>Severity description (unified field, merged from original independent fields of sub-types)</p>
 * @method void setHarmDesc(string $HarmDesc) Set <p>Severity description (unified field, merged from original independent fields of sub-types)</p>
 * @method string getSuggestScheme() Obtain <p>Repair advice (unified field)</p>
 * @method void setSuggestScheme(string $SuggestScheme) Set <p>Repair advice (unified field)</p>
 * @method string getHarmDescSource() Obtain <p>Data source: vuldb/vdc/intel/default</p>
 * @method void setHarmDescSource(string $HarmDescSource) Set <p>Data source: vuldb/vdc/intel/default</p>
 * @method array getThreatTags() Obtain <p>Unified threat intelligence tag (routes to different intelligence sources by sub-type)</p>
 * @method void setThreatTags(array $ThreatTags) Set <p>Unified threat intelligence tag (routes to different intelligence sources by sub-type)</p>
 * @method string getBashCmdDecoded() Obtain <p>Base64-decoded command (unique to high-risk command sub-type)</p>
 * @method void setBashCmdDecoded(string $BashCmdDecoded) Set <p>Base64-decoded command (unique to high-risk command sub-type)</p>
 * @method string getNetVulName() Obtain <p>Vulnerability name (unique to network attack sub-type)</p>
 * @method void setNetVulName(string $NetVulName) Set <p>Vulnerability name (unique to network attack sub-type)</p>
 * @method string getNetCVEId() Obtain <p>CVE ID (unique to network attack sub-type)</p>
 * @method void setNetCVEId(string $NetCVEId) Set <p>CVE ID (unique to network attack sub-type)</p>
 * @method string getNetAbnormalAction() Obtain <p>Exception behavior (unique to network attack sub-type)</p>
 * @method void setNetAbnormalAction(string $NetAbnormalAction) Set <p>Exception behavior (unique to network attack sub-type)</p>
 * @method IPIntelInfo getIPIntel() Obtain <p>IP intelligence information (do not return if empty)</p>
 * @method void setIPIntel(IPIntelInfo $IPIntel) Set <p>IP intelligence information (do not return if empty)</p>
 * @method string getMultiBehaviorDetectionMode() Obtain <p>Multi-act attack rule type categorization: sequence/threshold/command</p>
 * @method void setMultiBehaviorDetectionMode(string $MultiBehaviorDetectionMode) Set <p>Multi-act attack rule type categorization: sequence/threshold/command</p>
 * @method string getSourceDesc() Obtain <p>Alarm source description (derived by sub-type, describing which engine/rule detects it)</p>
 * @method void setSourceDesc(string $SourceDesc) Set <p>Alarm source description (derived by sub-type, describing which engine/rule detects it)</p>
 * @method string getModifyTime() Obtain <p>Time parameter format to process: 2026-05-26 19:45:48</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Time parameter format to process: 2026-05-26 19:45:48</p>
 * @method string getIntelSource() Obtain <p>Source of intelligence enrichment result (flag indicating whether external intelligence is hit successfully this time). Parameter Value: "VDC" / "IPAnalysis" / "BreakingTI" / empty string</p>
 * @method void setIntelSource(string $IntelSource) Set <p>Source of intelligence enrichment result (flag indicating whether external intelligence is hit successfully this time). Parameter Value: "VDC" / "IPAnalysis" / "BreakingTI" / empty string</p>
 * @method string getVerdict() Obtain <p>Comprehensive analysis: Chinese and English are translated. Chinese: Malicious/Safe/Unknown; English: Malicious/Safe/Unknown</p>
 * @method void setVerdict(string $Verdict) Set <p>Comprehensive analysis: Chinese and English are translated. Chinese: Malicious/Safe/Unknown; English: Malicious/Safe/Unknown</p>
 * @method string getVerdictBasis() Obtain <p>Analysis basis</p>
 * @method void setVerdictBasis(string $VerdictBasis) Set <p>Analysis basis</p>
 * @method string getVirusName() Obtain <p>Virus name</p>
 * @method void setVirusName(string $VirusName) Set <p>Virus name</p>
 * @method string getVirusFamily() Obtain <p>Virus family</p>
 * @method void setVirusFamily(string $VirusFamily) Set <p>Virus family</p>
 * @method string getNetResponsePayload() Obtain <p>NetResponsePayload response packet (base64 encoded string)</p>
 * @method void setNetResponsePayload(string $NetResponsePayload) Set <p>NetResponsePayload response packet (base64 encoded string)</p>
 * @method string getNetSvcPs() Obtain <p>Service process information (JSON string after base64 encoding)</p>
 * @method void setNetSvcPs(string $NetSvcPs) Set <p>Service process information (JSON string after base64 encoding)</p>
 * @method string getContainerName() Obtain <p>Container name</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name</p>
 * @method string getImageName() Obtain <p>Container image name</p>
 * @method void setImageName(string $ImageName) Set <p>Container image name</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getRunStatus() Obtain <p>Container running status (raw enumeration: RUNNING/PAUSED/STOPPED...; frontend performs mapping itself)</p><p>Enumeration values:</p><ul><li>RUNNING: running</li><li>PAUSED: suspended</li><li>STOPPED: stopped</li><li>CREATED: created</li><li>DESTROYED: terminated</li><li>RESTARTING: restarting</li><li>REMOVING: migrating</li><li>DEAD: DEAD</li><li>UNKNOWN: unknown</li></ul>
 * @method void setRunStatus(string $RunStatus) Set <p>Container running status (raw enumeration: RUNNING/PAUSED/STOPPED...; frontend performs mapping itself)</p><p>Enumeration values:</p><ul><li>RUNNING: running</li><li>PAUSED: suspended</li><li>STOPPED: stopped</li><li>CREATED: created</li><li>DESTROYED: terminated</li><li>RESTARTING: restarting</li><li>REMOVING: migrating</li><li>DEAD: DEAD</li><li>UNKNOWN: unknown</li></ul>
 * @method string getPodName() Obtain <p>POD Name</p>
 * @method void setPodName(string $PodName) Set <p>POD Name</p>
 * @method string getPodIp() Obtain <p>POD IP</p>
 * @method void setPodIp(string $PodIp) Set <p>POD IP</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method string getPodWorkloadType() Obtain <p>POD workload type</p>
 * @method void setPodWorkloadType(string $PodWorkloadType) Set <p>POD workload type</p>
 * @method string getClusterCaMD5() Obtain <p>Cluster ca cert md5</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster ca cert md5</p>
 * @method string getPodUniqueId() Obtain <p>POD Unique id</p>
 * @method void setPodUniqueId(string $PodUniqueId) Set <p>POD Unique id</p>
 */
class EdrAlertDetail extends AbstractModel
{
    /**
     * @var integer <p>Primary key ID</p>
     */
    public $Id;

    /**
     * @var integer <p>Tenant ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Alarm unique ID</p>
     */
    public $AlertId;

    /**
     * @var string <p>Major category of alarm (English enumeration: VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE)</p>
     */
    public $AlertCategory;

    /**
     * @var string <p>Alarm sub-type (enum: MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK)</p>
     */
    public $AlertSubType;

    /**
     * @var string <p>Associated rule ID</p>
     */
    public $RuleId;

    /**
     * @var integer <p>Rule type: 0 - system rule; 1 - user-customized</p>
     */
    public $RuleType;

    /**
     * @var string <p>Alarm level (English enumeration: CRITICAL/HIGH/MEDIUM/LOW/INFO)</p>
     */
    public $Level;

    /**
     * @var string <p>Processing status (English enumeration: PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED)</p>
     */
    public $Status;

    /**
     * @var string <p>ATT&amp;CK attack stages</p>
     */
    public $AttackStage;

    /**
     * @var string <p>Detection Mode (Enum: PRECISE/BALANCED/DEEP)</p>
     */
    public $DetectMode;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Host UUID</p>
     */
    public $Quuid;

    /**
     * @var integer <p>Number of aggregations</p>
     */
    public $EventCount;

    /**
     * @var integer <p>Whether it is a paid edition</p>
     */
    public $IsProVersion;

    /**
     * @var string <p>Alarm source (English enumeration: HOST/CONTAINER/K8S/CSIP)</p>
     */
    public $AlertSource;

    /**
     * @var string <p>Container image ID (reserved field, always an empty string).</p>
     */
    public $ImageId;

    /**
     * @var string <p>Container ID (reserved field, always an empty string)</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Cluster ID (reserved field, always an empty string)</p>
     */
    public $ClusterId;

    /**
     * @var string <p>First discovery time</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>Most recent discovery time</p>
     */
    public $LatestDetectTime;

    /**
     * @var string <p>Rule name (rule enrichment)</p>
     */
    public $RuleName;

    /**
     * @var string <p>Content type: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
     */
    public $ContentType;

    /**
     * @var string <p>Instance name (asset enrichment)</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Public IP address (asset enrichment)</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Private IP address (asset enrichment)</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>Alert details json string (parsed by the frontend via JSON.parse; empty value is &quot;{}&quot;)</p>
     */
    public $Content;

    /**
     * @var string <p>Alarm name (Chinese and English name of the sub-type)</p>
     */
    public $AlertName;

    /**
     * @var array <p>Security center tag</p>
     */
    public $CSIPTags;

    /**
     * @var string <p>Severity description (unified field, merged from original independent fields of sub-types)</p>
     */
    public $HarmDesc;

    /**
     * @var string <p>Repair advice (unified field)</p>
     */
    public $SuggestScheme;

    /**
     * @var string <p>Data source: vuldb/vdc/intel/default</p>
     */
    public $HarmDescSource;

    /**
     * @var array <p>Unified threat intelligence tag (routes to different intelligence sources by sub-type)</p>
     */
    public $ThreatTags;

    /**
     * @var string <p>Base64-decoded command (unique to high-risk command sub-type)</p>
     */
    public $BashCmdDecoded;

    /**
     * @var string <p>Vulnerability name (unique to network attack sub-type)</p>
     */
    public $NetVulName;

    /**
     * @var string <p>CVE ID (unique to network attack sub-type)</p>
     */
    public $NetCVEId;

    /**
     * @var string <p>Exception behavior (unique to network attack sub-type)</p>
     */
    public $NetAbnormalAction;

    /**
     * @var IPIntelInfo <p>IP intelligence information (do not return if empty)</p>
     */
    public $IPIntel;

    /**
     * @var string <p>Multi-act attack rule type categorization: sequence/threshold/command</p>
     */
    public $MultiBehaviorDetectionMode;

    /**
     * @var string <p>Alarm source description (derived by sub-type, describing which engine/rule detects it)</p>
     */
    public $SourceDesc;

    /**
     * @var string <p>Time parameter format to process: 2026-05-26 19:45:48</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>Source of intelligence enrichment result (flag indicating whether external intelligence is hit successfully this time). Parameter Value: "VDC" / "IPAnalysis" / "BreakingTI" / empty string</p>
     */
    public $IntelSource;

    /**
     * @var string <p>Comprehensive analysis: Chinese and English are translated. Chinese: Malicious/Safe/Unknown; English: Malicious/Safe/Unknown</p>
     */
    public $Verdict;

    /**
     * @var string <p>Analysis basis</p>
     */
    public $VerdictBasis;

    /**
     * @var string <p>Virus name</p>
     */
    public $VirusName;

    /**
     * @var string <p>Virus family</p>
     */
    public $VirusFamily;

    /**
     * @var string <p>NetResponsePayload response packet (base64 encoded string)</p>
     */
    public $NetResponsePayload;

    /**
     * @var string <p>Service process information (JSON string after base64 encoding)</p>
     */
    public $NetSvcPs;

    /**
     * @var string <p>Container name</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Container image name</p>
     */
    public $ImageName;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Container running status (raw enumeration: RUNNING/PAUSED/STOPPED...; frontend performs mapping itself)</p><p>Enumeration values:</p><ul><li>RUNNING: running</li><li>PAUSED: suspended</li><li>STOPPED: stopped</li><li>CREATED: created</li><li>DESTROYED: terminated</li><li>RESTARTING: restarting</li><li>REMOVING: migrating</li><li>DEAD: DEAD</li><li>UNKNOWN: unknown</li></ul>
     */
    public $RunStatus;

    /**
     * @var string <p>POD Name</p>
     */
    public $PodName;

    /**
     * @var string <p>POD IP</p>
     */
    public $PodIp;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var string <p>POD workload type</p>
     */
    public $PodWorkloadType;

    /**
     * @var string <p>Cluster ca cert md5</p>
     */
    public $ClusterCaMD5;

    /**
     * @var string <p>POD Unique id</p>
     */
    public $PodUniqueId;

    /**
     * @param integer $Id <p>Primary key ID</p>
     * @param integer $AppId <p>Tenant ID</p>
     * @param string $AlertId <p>Alarm unique ID</p>
     * @param string $AlertCategory <p>Major category of alarm (English enumeration: VIRUS_TROJAN/ABNORMAL_LOGIN/HOST_BEHAVIOR/NETWORK_BEHAVIOR/LINK_ENGINE)</p>
     * @param string $AlertSubType <p>Alarm sub-type (enum: MALWARE_FILE/MALWARE_PROCESS/RISK_LOGIN/BRUTE_FORCE/DNS/BASH/PRIV_ESCALATION/REVERSE_SHELL/NET_ATTACK/VUL_DEFENCE/MEMORY_SHELL_INJECT/MEMORY_SHELL_SCAN/MULTI_BEHAVIOR_ATTACK)</p>
     * @param string $RuleId <p>Associated rule ID</p>
     * @param integer $RuleType <p>Rule type: 0 - system rule; 1 - user-customized</p>
     * @param string $Level <p>Alarm level (English enumeration: CRITICAL/HIGH/MEDIUM/LOW/INFO)</p>
     * @param string $Status <p>Processing status (English enumeration: PENDING/PROCESSED/WHITELISTED/ISOLATED/CLEANED/IGNORED/ISOLATING/RESTORING/BLOCKED/DELETED)</p>
     * @param string $AttackStage <p>ATT&amp;CK attack stages</p>
     * @param string $DetectMode <p>Detection Mode (Enum: PRECISE/BALANCED/DEEP)</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $Quuid <p>Host UUID</p>
     * @param integer $EventCount <p>Number of aggregations</p>
     * @param integer $IsProVersion <p>Whether it is a paid edition</p>
     * @param string $AlertSource <p>Alarm source (English enumeration: HOST/CONTAINER/K8S/CSIP)</p>
     * @param string $ImageId <p>Container image ID (reserved field, always an empty string).</p>
     * @param string $ContainerId <p>Container ID (reserved field, always an empty string)</p>
     * @param string $ClusterId <p>Cluster ID (reserved field, always an empty string)</p>
     * @param string $FirstDetectTime <p>First discovery time</p>
     * @param string $LatestDetectTime <p>Most recent discovery time</p>
     * @param string $RuleName <p>Rule name (rule enrichment)</p>
     * @param string $ContentType <p>Content type: md5/cmdline/dns/ip_inbound/ip_outbound/custom_file/process_network</p>
     * @param string $InstanceName <p>Instance name (asset enrichment)</p>
     * @param string $PublicIp <p>Public IP address (asset enrichment)</p>
     * @param string $PrivateIp <p>Private IP address (asset enrichment)</p>
     * @param string $Content <p>Alert details json string (parsed by the frontend via JSON.parse; empty value is &quot;{}&quot;)</p>
     * @param string $AlertName <p>Alarm name (Chinese and English name of the sub-type)</p>
     * @param array $CSIPTags <p>Security center tag</p>
     * @param string $HarmDesc <p>Severity description (unified field, merged from original independent fields of sub-types)</p>
     * @param string $SuggestScheme <p>Repair advice (unified field)</p>
     * @param string $HarmDescSource <p>Data source: vuldb/vdc/intel/default</p>
     * @param array $ThreatTags <p>Unified threat intelligence tag (routes to different intelligence sources by sub-type)</p>
     * @param string $BashCmdDecoded <p>Base64-decoded command (unique to high-risk command sub-type)</p>
     * @param string $NetVulName <p>Vulnerability name (unique to network attack sub-type)</p>
     * @param string $NetCVEId <p>CVE ID (unique to network attack sub-type)</p>
     * @param string $NetAbnormalAction <p>Exception behavior (unique to network attack sub-type)</p>
     * @param IPIntelInfo $IPIntel <p>IP intelligence information (do not return if empty)</p>
     * @param string $MultiBehaviorDetectionMode <p>Multi-act attack rule type categorization: sequence/threshold/command</p>
     * @param string $SourceDesc <p>Alarm source description (derived by sub-type, describing which engine/rule detects it)</p>
     * @param string $ModifyTime <p>Time parameter format to process: 2026-05-26 19:45:48</p>
     * @param string $IntelSource <p>Source of intelligence enrichment result (flag indicating whether external intelligence is hit successfully this time). Parameter Value: "VDC" / "IPAnalysis" / "BreakingTI" / empty string</p>
     * @param string $Verdict <p>Comprehensive analysis: Chinese and English are translated. Chinese: Malicious/Safe/Unknown; English: Malicious/Safe/Unknown</p>
     * @param string $VerdictBasis <p>Analysis basis</p>
     * @param string $VirusName <p>Virus name</p>
     * @param string $VirusFamily <p>Virus family</p>
     * @param string $NetResponsePayload <p>NetResponsePayload response packet (base64 encoded string)</p>
     * @param string $NetSvcPs <p>Service process information (JSON string after base64 encoding)</p>
     * @param string $ContainerName <p>Container name</p>
     * @param string $ImageName <p>Container image name</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $RunStatus <p>Container running status (raw enumeration: RUNNING/PAUSED/STOPPED...; frontend performs mapping itself)</p><p>Enumeration values:</p><ul><li>RUNNING: running</li><li>PAUSED: suspended</li><li>STOPPED: stopped</li><li>CREATED: created</li><li>DESTROYED: terminated</li><li>RESTARTING: restarting</li><li>REMOVING: migrating</li><li>DEAD: DEAD</li><li>UNKNOWN: unknown</li></ul>
     * @param string $PodName <p>POD Name</p>
     * @param string $PodIp <p>POD IP</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param string $PodWorkloadType <p>POD workload type</p>
     * @param string $ClusterCaMD5 <p>Cluster ca cert md5</p>
     * @param string $PodUniqueId <p>POD Unique id</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("AlertCategory",$param) and $param["AlertCategory"] !== null) {
            $this->AlertCategory = $param["AlertCategory"];
        }

        if (array_key_exists("AlertSubType",$param) and $param["AlertSubType"] !== null) {
            $this->AlertSubType = $param["AlertSubType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("AlertSource",$param) and $param["AlertSource"] !== null) {
            $this->AlertSource = $param["AlertSource"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LatestDetectTime",$param) and $param["LatestDetectTime"] !== null) {
            $this->LatestDetectTime = $param["LatestDetectTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("AlertName",$param) and $param["AlertName"] !== null) {
            $this->AlertName = $param["AlertName"];
        }

        if (array_key_exists("CSIPTags",$param) and $param["CSIPTags"] !== null) {
            $this->CSIPTags = [];
            foreach ($param["CSIPTags"] as $key => $value){
                $obj = new CSIPTag();
                $obj->deserialize($value);
                array_push($this->CSIPTags, $obj);
            }
        }

        if (array_key_exists("HarmDesc",$param) and $param["HarmDesc"] !== null) {
            $this->HarmDesc = $param["HarmDesc"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("HarmDescSource",$param) and $param["HarmDescSource"] !== null) {
            $this->HarmDescSource = $param["HarmDescSource"];
        }

        if (array_key_exists("ThreatTags",$param) and $param["ThreatTags"] !== null) {
            $this->ThreatTags = $param["ThreatTags"];
        }

        if (array_key_exists("BashCmdDecoded",$param) and $param["BashCmdDecoded"] !== null) {
            $this->BashCmdDecoded = $param["BashCmdDecoded"];
        }

        if (array_key_exists("NetVulName",$param) and $param["NetVulName"] !== null) {
            $this->NetVulName = $param["NetVulName"];
        }

        if (array_key_exists("NetCVEId",$param) and $param["NetCVEId"] !== null) {
            $this->NetCVEId = $param["NetCVEId"];
        }

        if (array_key_exists("NetAbnormalAction",$param) and $param["NetAbnormalAction"] !== null) {
            $this->NetAbnormalAction = $param["NetAbnormalAction"];
        }

        if (array_key_exists("IPIntel",$param) and $param["IPIntel"] !== null) {
            $this->IPIntel = new IPIntelInfo();
            $this->IPIntel->deserialize($param["IPIntel"]);
        }

        if (array_key_exists("MultiBehaviorDetectionMode",$param) and $param["MultiBehaviorDetectionMode"] !== null) {
            $this->MultiBehaviorDetectionMode = $param["MultiBehaviorDetectionMode"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IntelSource",$param) and $param["IntelSource"] !== null) {
            $this->IntelSource = $param["IntelSource"];
        }

        if (array_key_exists("Verdict",$param) and $param["Verdict"] !== null) {
            $this->Verdict = $param["Verdict"];
        }

        if (array_key_exists("VerdictBasis",$param) and $param["VerdictBasis"] !== null) {
            $this->VerdictBasis = $param["VerdictBasis"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("VirusFamily",$param) and $param["VirusFamily"] !== null) {
            $this->VirusFamily = $param["VirusFamily"];
        }

        if (array_key_exists("NetResponsePayload",$param) and $param["NetResponsePayload"] !== null) {
            $this->NetResponsePayload = $param["NetResponsePayload"];
        }

        if (array_key_exists("NetSvcPs",$param) and $param["NetSvcPs"] !== null) {
            $this->NetSvcPs = $param["NetSvcPs"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("PodWorkloadType",$param) and $param["PodWorkloadType"] !== null) {
            $this->PodWorkloadType = $param["PodWorkloadType"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("PodUniqueId",$param) and $param["PodUniqueId"] !== null) {
            $this->PodUniqueId = $param["PodUniqueId"];
        }
    }
}
