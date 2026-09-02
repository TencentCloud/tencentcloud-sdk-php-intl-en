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
 * Alarm Dropdown Fields
 *
 * @method RelatedEvent getRelateEvent() Obtain Related attack events
 * @method void setRelateEvent(RelatedEvent $RelateEvent) Set Related attack events
 * @method string getLeakContent() Obtain Leaked content
 * @method void setLeakContent(string $LeakContent) Set Leaked content
 * @method string getLeakAPI() Obtain Leak APIs
 * @method void setLeakAPI(string $LeakAPI) Set Leak APIs
 * @method string getSecretID() Obtain secretID
 * @method void setSecretID(string $SecretID) Set secretID
 * @method string getRule() Obtain Matched rule
 * @method void setRule(string $Rule) Set Matched rule
 * @method string getRuleDesc() Obtain Rule description
 * @method void setRuleDesc(string $RuleDesc) Set Rule description
 * @method string getProtocolPort() Obtain Protocol port
 * @method void setProtocolPort(string $ProtocolPort) Set Protocol port
 * @method string getAttackContent() Obtain Attack content
 * @method void setAttackContent(string $AttackContent) Set Attack content
 * @method string getAttackIPProfile() Obtain Attack IP profiling.
 * @method void setAttackIPProfile(string $AttackIPProfile) Set Attack IP profiling.
 * @method string getAttackIPTags() Obtain Attack IP tag
 * @method void setAttackIPTags(string $AttackIPTags) Set Attack IP tag
 * @method string getRequestMethod() Obtain Request method
 * @method void setRequestMethod(string $RequestMethod) Set Request method
 * @method string getHttpLog() Obtain HTTP log
 * @method void setHttpLog(string $HttpLog) Set HTTP log
 * @method string getAttackDomain() Obtain Attacked domain name
 * @method void setAttackDomain(string $AttackDomain) Set Attacked domain name
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 * @method string getUserAgent() Obtain user_agent
 * @method void setUserAgent(string $UserAgent) Set user_agent
 * @method string getRequestHeaders() Obtain Request headers
 * @method void setRequestHeaders(string $RequestHeaders) Set Request headers
 * @method string getLoginUserName() Obtain Login username
 * @method void setLoginUserName(string $LoginUserName) Set Login username
 * @method string getVulnerabilityName() Obtain Vulnerability name
 * @method void setVulnerabilityName(string $VulnerabilityName) Set Vulnerability name
 * @method string getCVE() Obtain Public vulnerability and exposure
 * @method void setCVE(string $CVE) Set Public vulnerability and exposure
 * @method string getServiceProcess() Obtain Service process
 * @method void setServiceProcess(string $ServiceProcess) Set Service process
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method string getFileSize() Obtain File size
 * @method void setFileSize(string $FileSize) Set File size
 * @method string getFileMD5() Obtain File MD5
 * @method void setFileMD5(string $FileMD5) Set File MD5
 * @method string getFileLastAccessTime() Obtain Last access time of the file
 * @method void setFileLastAccessTime(string $FileLastAccessTime) Set Last access time of the file
 * @method string getFileModifyTime() Obtain File modification time
 * @method void setFileModifyTime(string $FileModifyTime) Set File modification time
 * @method string getRecentAccessTime() Obtain Last access Time
 * @method void setRecentAccessTime(string $RecentAccessTime) Set Last access Time
 * @method string getRecentModifyTime() Obtain Last modification time
 * @method void setRecentModifyTime(string $RecentModifyTime) Set Last modification time
 * @method string getVirusName() Obtain Virus name
 * @method void setVirusName(string $VirusName) Set Virus name
 * @method string getVirusFileTags() Obtain Virus file tag
 * @method void setVirusFileTags(string $VirusFileTags) Set Virus file tag
 * @method string getBehavioralCharacteristics() Obtain Behavioral characteristics
 * @method void setBehavioralCharacteristics(string $BehavioralCharacteristics) Set Behavioral characteristics
 * @method string getProcessNamePID() Obtain Process name (PID)
 * @method void setProcessNamePID(string $ProcessNamePID) Set Process name (PID)
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getProcessCommandLine() Obtain Process command line
 * @method void setProcessCommandLine(string $ProcessCommandLine) Set Process command line
 * @method string getProcessPermissions() Obtain Process permission
 * @method void setProcessPermissions(string $ProcessPermissions) Set Process permission
 * @method string getExecutedCommand() Obtain Execute commands
 * @method void setExecutedCommand(string $ExecutedCommand) Set Execute commands
 * @method string getAffectedFileName() Obtain Affected file name
 * @method void setAffectedFileName(string $AffectedFileName) Set Affected file name
 * @method string getDecoyPath() Obtain Bait path
 * @method void setDecoyPath(string $DecoyPath) Set Bait path
 * @method string getMaliciousProcessFileSize() Obtain Malicious process file size
 * @method void setMaliciousProcessFileSize(string $MaliciousProcessFileSize) Set Malicious process file size
 * @method string getMaliciousProcessFileMD5() Obtain MD5 of the malicious process file
 * @method void setMaliciousProcessFileMD5(string $MaliciousProcessFileMD5) Set MD5 of the malicious process file
 * @method string getMaliciousProcessNamePID() Obtain Malicious process name (PID)
 * @method void setMaliciousProcessNamePID(string $MaliciousProcessNamePID) Set Malicious process name (PID)
 * @method string getMaliciousProcessPath() Obtain Malicious process path
 * @method void setMaliciousProcessPath(string $MaliciousProcessPath) Set Malicious process path
 * @method string getMaliciousProcessStartTime() Obtain Malicious process startup time
 * @method void setMaliciousProcessStartTime(string $MaliciousProcessStartTime) Set Malicious process startup time
 * @method string getCommandContent() Obtain Command
 * @method void setCommandContent(string $CommandContent) Set Command
 * @method string getStartupUser() Obtain Startup user
 * @method void setStartupUser(string $StartupUser) Set Startup user
 * @method string getUserGroup() Obtain User group
 * @method void setUserGroup(string $UserGroup) Set User group
 * @method string getNewPermissions() Obtain Added permission
 * @method void setNewPermissions(string $NewPermissions) Set Added permission
 * @method string getParentProcess() Obtain Parent process
 * @method void setParentProcess(string $ParentProcess) Set Parent process
 * @method string getClassName() Obtain Class name
 * @method void setClassName(string $ClassName) Set Class name
 * @method string getClassLoader() Obtain Class loader to which it belongs
 * @method void setClassLoader(string $ClassLoader) Set Class loader to which it belongs
 * @method string getClassFileSize() Obtain Individual file size
 * @method void setClassFileSize(string $ClassFileSize) Set Individual file size
 * @method string getClassFileMD5() Obtain Class file MD5
 * @method void setClassFileMD5(string $ClassFileMD5) Set Class file MD5
 * @method string getParentClassName() Obtain Parent class name
 * @method void setParentClassName(string $ParentClassName) Set Parent class name
 * @method string getInheritedInterface() Obtain Inherit interfaces
 * @method void setInheritedInterface(string $InheritedInterface) Set Inherit interfaces
 * @method string getComment() Obtain Annotation
 * @method void setComment(string $Comment) Set Annotation
 * @method string getPayloadContent() Obtain Payload content
 * @method void setPayloadContent(string $PayloadContent) Set Payload content
 * @method string getCallbackAddressPortrait() Obtain Callback address profile
 * @method void setCallbackAddressPortrait(string $CallbackAddressPortrait) Set Callback address profile
 * @method string getCallbackAddressTag() Obtain Callback address tag
 * @method void setCallbackAddressTag(string $CallbackAddressTag) Set Callback address tag
 * @method string getProcessMD5() Obtain Process MD5
 * @method void setProcessMD5(string $ProcessMD5) Set Process MD5
 * @method string getFilePermission() Obtain File permission
 * @method void setFilePermission(string $FilePermission) Set File permission
 * @method array getFromLogAnalysisData() Obtain Information fields that come from log analysis
 * @method void setFromLogAnalysisData(array $FromLogAnalysisData) Set Information fields that come from log analysis
 * @method string getHitProbe() Obtain Cache hit probe
 * @method void setHitProbe(string $HitProbe) Set Cache hit probe
 * @method string getHitHoneyPot() Obtain Hit a honeypot

 * @method void setHitHoneyPot(string $HitHoneyPot) Set Hit a honeypot

 * @method string getCommandList() Obtain Command list
 * @method void setCommandList(string $CommandList) Set Command list
 * @method string getAttackEventDesc() Obtain Description of the attack event

 * @method void setAttackEventDesc(string $AttackEventDesc) Set Description of the attack event

 * @method string getProcessInfo() Obtain Process information.
 * @method void setProcessInfo(string $ProcessInfo) Set Process information.
 * @method string getUserNameAndPwd() Obtain Use username and password
 * @method void setUserNameAndPwd(string $UserNameAndPwd) Set Use username and password
 * @method string getStrategyID() Obtain Host protection policy ID
 * @method void setStrategyID(string $StrategyID) Set Host protection policy ID
 * @method string getStrategyName() Obtain Host protection policy name
 * @method void setStrategyName(string $StrategyName) Set Host protection policy name
 * @method string getHitStrategy() Obtain Host protection hit policy, which is a combination of the policy ID and policy name.
 * @method void setHitStrategy(string $HitStrategy) Set Host protection hit policy, which is a combination of the policy ID and policy name.
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getPID() Obtain PID
 * @method void setPID(string $PID) Set PID
 * @method string getPodName() Obtain Pod name of the container
 * @method void setPodName(string $PodName) Set Pod name of the container
 * @method string getPodID() Obtain Pod ID of the container
 * @method void setPodID(string $PodID) Set Pod ID of the container
 * @method string getResponse() Obtain Http response
 * @method void setResponse(string $Response) Set Http response
 * @method string getSystemCall() Obtain System call
 * @method void setSystemCall(string $SystemCall) Set System call
 * @method string getVerb() Obtain Operation type.
 * @method void setVerb(string $Verb) Set Operation type.
 * @method string getLogID() Obtain Log ID.
 * @method void setLogID(string $LogID) Set Log ID.
 * @method string getDifferent() Obtain Change content
 * @method void setDifferent(string $Different) Set Change content
 * @method string getEventType() Obtain Event type
 * @method void setEventType(string $EventType) Set Event type
 * @method string getDescription() Obtain Event description
 * @method void setDescription(string $Description) Set Event description
 * @method string getTargetAddress() Obtain Target address (container reverse shell)
 * @method void setTargetAddress(string $TargetAddress) Set Target address (container reverse shell)
 * @method string getMaliciousRequestDomain() Obtain Malicious request domain name (malicious outbound connection of a container)
 * @method void setMaliciousRequestDomain(string $MaliciousRequestDomain) Set Malicious request domain name (malicious outbound connection of a container)
 * @method string getRuleType() Obtain Rule type (exceptional request of the K8s API in the container)
 * @method void setRuleType(string $RuleType) Set Rule type (exceptional request of the K8s API in the container)
 * @method string getRequestURI() Obtain Requested resource (exceptional request for K8s API of a container)
 * @method void setRequestURI(string $RequestURI) Set Requested resource (exceptional request for K8s API of a container)
 * @method string getRequestUser() Obtain Request initiating user (container K8s API abnormal request)
 * @method void setRequestUser(string $RequestUser) Set Request initiating user (container K8s API abnormal request)
 * @method string getRequestObject() Obtain Request object (exceptional K8s API request in a container)
 * @method void setRequestObject(string $RequestObject) Set Request object (exceptional K8s API request in a container)
 * @method string getResponseObject() Obtain object (for exceptional requests from the K8s API in a container)
 * @method void setResponseObject(string $ResponseObject) Set object (for exceptional requests from the K8s API in a container)
 * @method string getFileType() Obtain File type (container file tampering)
 * @method void setFileType(string $FileType) Set File type (container file tampering)
 * @method string getTIType() Obtain Tag feature (container malicious outbound connection)
 * @method void setTIType(string $TIType) Set Tag feature (container malicious outbound connection)
 * @method string getSourceIP() Obtain Source IP address (exceptional request to the K8s API of a container)
 * @method void setSourceIP(string $SourceIP) Set Source IP address (exceptional request to the K8s API of a container)
 */
class AlertExtraInfo extends AbstractModel
{
    /**
     * @var RelatedEvent Related attack events
     */
    public $RelateEvent;

    /**
     * @var string Leaked content
     */
    public $LeakContent;

    /**
     * @var string Leak APIs
     */
    public $LeakAPI;

    /**
     * @var string secretID
     */
    public $SecretID;

    /**
     * @var string Matched rule
     */
    public $Rule;

    /**
     * @var string Rule description
     */
    public $RuleDesc;

    /**
     * @var string Protocol port
     */
    public $ProtocolPort;

    /**
     * @var string Attack content
     */
    public $AttackContent;

    /**
     * @var string Attack IP profiling.
     */
    public $AttackIPProfile;

    /**
     * @var string Attack IP tag
     */
    public $AttackIPTags;

    /**
     * @var string Request method
     */
    public $RequestMethod;

    /**
     * @var string HTTP log
     */
    public $HttpLog;

    /**
     * @var string Attacked domain name
     */
    public $AttackDomain;

    /**
     * @var string File path
     */
    public $FilePath;

    /**
     * @var string user_agent
     */
    public $UserAgent;

    /**
     * @var string Request headers
     */
    public $RequestHeaders;

    /**
     * @var string Login username
     */
    public $LoginUserName;

    /**
     * @var string Vulnerability name
     */
    public $VulnerabilityName;

    /**
     * @var string Public vulnerability and exposure
     */
    public $CVE;

    /**
     * @var string Service process
     */
    public $ServiceProcess;

    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var string File size
     */
    public $FileSize;

    /**
     * @var string File MD5
     */
    public $FileMD5;

    /**
     * @var string Last access time of the file
     */
    public $FileLastAccessTime;

    /**
     * @var string File modification time
     */
    public $FileModifyTime;

    /**
     * @var string Last access Time
     */
    public $RecentAccessTime;

    /**
     * @var string Last modification time
     */
    public $RecentModifyTime;

    /**
     * @var string Virus name
     */
    public $VirusName;

    /**
     * @var string Virus file tag
     */
    public $VirusFileTags;

    /**
     * @var string Behavioral characteristics
     */
    public $BehavioralCharacteristics;

    /**
     * @var string Process name (PID)
     */
    public $ProcessNamePID;

    /**
     * @var string Process path
     */
    public $ProcessPath;

    /**
     * @var string Process command line
     */
    public $ProcessCommandLine;

    /**
     * @var string Process permission
     */
    public $ProcessPermissions;

    /**
     * @var string Execute commands
     */
    public $ExecutedCommand;

    /**
     * @var string Affected file name
     */
    public $AffectedFileName;

    /**
     * @var string Bait path
     */
    public $DecoyPath;

    /**
     * @var string Malicious process file size
     */
    public $MaliciousProcessFileSize;

    /**
     * @var string MD5 of the malicious process file
     */
    public $MaliciousProcessFileMD5;

    /**
     * @var string Malicious process name (PID)
     */
    public $MaliciousProcessNamePID;

    /**
     * @var string Malicious process path
     */
    public $MaliciousProcessPath;

    /**
     * @var string Malicious process startup time
     */
    public $MaliciousProcessStartTime;

    /**
     * @var string Command
     */
    public $CommandContent;

    /**
     * @var string Startup user
     */
    public $StartupUser;

    /**
     * @var string User group
     */
    public $UserGroup;

    /**
     * @var string Added permission
     */
    public $NewPermissions;

    /**
     * @var string Parent process
     */
    public $ParentProcess;

    /**
     * @var string Class name
     */
    public $ClassName;

    /**
     * @var string Class loader to which it belongs
     */
    public $ClassLoader;

    /**
     * @var string Individual file size
     */
    public $ClassFileSize;

    /**
     * @var string Class file MD5
     */
    public $ClassFileMD5;

    /**
     * @var string Parent class name
     */
    public $ParentClassName;

    /**
     * @var string Inherit interfaces
     */
    public $InheritedInterface;

    /**
     * @var string Annotation
     */
    public $Comment;

    /**
     * @var string Payload content
     */
    public $PayloadContent;

    /**
     * @var string Callback address profile
     */
    public $CallbackAddressPortrait;

    /**
     * @var string Callback address tag
     */
    public $CallbackAddressTag;

    /**
     * @var string Process MD5
     */
    public $ProcessMD5;

    /**
     * @var string File permission
     */
    public $FilePermission;

    /**
     * @var array Information fields that come from log analysis
     */
    public $FromLogAnalysisData;

    /**
     * @var string Cache hit probe
     */
    public $HitProbe;

    /**
     * @var string Hit a honeypot

     */
    public $HitHoneyPot;

    /**
     * @var string Command list
     */
    public $CommandList;

    /**
     * @var string Description of the attack event

     */
    public $AttackEventDesc;

    /**
     * @var string Process information.
     */
    public $ProcessInfo;

    /**
     * @var string Use username and password
     */
    public $UserNameAndPwd;

    /**
     * @var string Host protection policy ID
     */
    public $StrategyID;

    /**
     * @var string Host protection policy name
     */
    public $StrategyName;

    /**
     * @var string Host protection hit policy, which is a combination of the policy ID and policy name.
     */
    public $HitStrategy;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string PID
     */
    public $PID;

    /**
     * @var string Pod name of the container
     */
    public $PodName;

    /**
     * @var string Pod ID of the container
     */
    public $PodID;

    /**
     * @var string Http response
     */
    public $Response;

    /**
     * @var string System call
     */
    public $SystemCall;

    /**
     * @var string Operation type.
     */
    public $Verb;

    /**
     * @var string Log ID.
     */
    public $LogID;

    /**
     * @var string Change content
     */
    public $Different;

    /**
     * @var string Event type
     */
    public $EventType;

    /**
     * @var string Event description
     */
    public $Description;

    /**
     * @var string Target address (container reverse shell)
     */
    public $TargetAddress;

    /**
     * @var string Malicious request domain name (malicious outbound connection of a container)
     */
    public $MaliciousRequestDomain;

    /**
     * @var string Rule type (exceptional request of the K8s API in the container)
     */
    public $RuleType;

    /**
     * @var string Requested resource (exceptional request for K8s API of a container)
     */
    public $RequestURI;

    /**
     * @var string Request initiating user (container K8s API abnormal request)
     */
    public $RequestUser;

    /**
     * @var string Request object (exceptional K8s API request in a container)
     */
    public $RequestObject;

    /**
     * @var string object (for exceptional requests from the K8s API in a container)
     */
    public $ResponseObject;

    /**
     * @var string File type (container file tampering)
     */
    public $FileType;

    /**
     * @var string Tag feature (container malicious outbound connection)
     */
    public $TIType;

    /**
     * @var string Source IP address (exceptional request to the K8s API of a container)
     */
    public $SourceIP;

    /**
     * @param RelatedEvent $RelateEvent Related attack events
     * @param string $LeakContent Leaked content
     * @param string $LeakAPI Leak APIs
     * @param string $SecretID secretID
     * @param string $Rule Matched rule
     * @param string $RuleDesc Rule description
     * @param string $ProtocolPort Protocol port
     * @param string $AttackContent Attack content
     * @param string $AttackIPProfile Attack IP profiling.
     * @param string $AttackIPTags Attack IP tag
     * @param string $RequestMethod Request method
     * @param string $HttpLog HTTP log
     * @param string $AttackDomain Attacked domain name
     * @param string $FilePath File path
     * @param string $UserAgent user_agent
     * @param string $RequestHeaders Request headers
     * @param string $LoginUserName Login username
     * @param string $VulnerabilityName Vulnerability name
     * @param string $CVE Public vulnerability and exposure
     * @param string $ServiceProcess Service process
     * @param string $FileName File name
     * @param string $FileSize File size
     * @param string $FileMD5 File MD5
     * @param string $FileLastAccessTime Last access time of the file
     * @param string $FileModifyTime File modification time
     * @param string $RecentAccessTime Last access Time
     * @param string $RecentModifyTime Last modification time
     * @param string $VirusName Virus name
     * @param string $VirusFileTags Virus file tag
     * @param string $BehavioralCharacteristics Behavioral characteristics
     * @param string $ProcessNamePID Process name (PID)
     * @param string $ProcessPath Process path
     * @param string $ProcessCommandLine Process command line
     * @param string $ProcessPermissions Process permission
     * @param string $ExecutedCommand Execute commands
     * @param string $AffectedFileName Affected file name
     * @param string $DecoyPath Bait path
     * @param string $MaliciousProcessFileSize Malicious process file size
     * @param string $MaliciousProcessFileMD5 MD5 of the malicious process file
     * @param string $MaliciousProcessNamePID Malicious process name (PID)
     * @param string $MaliciousProcessPath Malicious process path
     * @param string $MaliciousProcessStartTime Malicious process startup time
     * @param string $CommandContent Command
     * @param string $StartupUser Startup user
     * @param string $UserGroup User group
     * @param string $NewPermissions Added permission
     * @param string $ParentProcess Parent process
     * @param string $ClassName Class name
     * @param string $ClassLoader Class loader to which it belongs
     * @param string $ClassFileSize Individual file size
     * @param string $ClassFileMD5 Class file MD5
     * @param string $ParentClassName Parent class name
     * @param string $InheritedInterface Inherit interfaces
     * @param string $Comment Annotation
     * @param string $PayloadContent Payload content
     * @param string $CallbackAddressPortrait Callback address profile
     * @param string $CallbackAddressTag Callback address tag
     * @param string $ProcessMD5 Process MD5
     * @param string $FilePermission File permission
     * @param array $FromLogAnalysisData Information fields that come from log analysis
     * @param string $HitProbe Cache hit probe
     * @param string $HitHoneyPot Hit a honeypot

     * @param string $CommandList Command list
     * @param string $AttackEventDesc Description of the attack event

     * @param string $ProcessInfo Process information.
     * @param string $UserNameAndPwd Use username and password
     * @param string $StrategyID Host protection policy ID
     * @param string $StrategyName Host protection policy name
     * @param string $HitStrategy Host protection hit policy, which is a combination of the policy ID and policy name.
     * @param string $ProcessName Process name
     * @param string $PID PID
     * @param string $PodName Pod name of the container
     * @param string $PodID Pod ID of the container
     * @param string $Response Http response
     * @param string $SystemCall System call
     * @param string $Verb Operation type.
     * @param string $LogID Log ID.
     * @param string $Different Change content
     * @param string $EventType Event type
     * @param string $Description Event description
     * @param string $TargetAddress Target address (container reverse shell)
     * @param string $MaliciousRequestDomain Malicious request domain name (malicious outbound connection of a container)
     * @param string $RuleType Rule type (exceptional request of the K8s API in the container)
     * @param string $RequestURI Requested resource (exceptional request for K8s API of a container)
     * @param string $RequestUser Request initiating user (container K8s API abnormal request)
     * @param string $RequestObject Request object (exceptional K8s API request in a container)
     * @param string $ResponseObject object (for exceptional requests from the K8s API in a container)
     * @param string $FileType File type (container file tampering)
     * @param string $TIType Tag feature (container malicious outbound connection)
     * @param string $SourceIP Source IP address (exceptional request to the K8s API of a container)
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
        if (array_key_exists("RelateEvent",$param) and $param["RelateEvent"] !== null) {
            $this->RelateEvent = new RelatedEvent();
            $this->RelateEvent->deserialize($param["RelateEvent"]);
        }

        if (array_key_exists("LeakContent",$param) and $param["LeakContent"] !== null) {
            $this->LeakContent = $param["LeakContent"];
        }

        if (array_key_exists("LeakAPI",$param) and $param["LeakAPI"] !== null) {
            $this->LeakAPI = $param["LeakAPI"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("ProtocolPort",$param) and $param["ProtocolPort"] !== null) {
            $this->ProtocolPort = $param["ProtocolPort"];
        }

        if (array_key_exists("AttackContent",$param) and $param["AttackContent"] !== null) {
            $this->AttackContent = $param["AttackContent"];
        }

        if (array_key_exists("AttackIPProfile",$param) and $param["AttackIPProfile"] !== null) {
            $this->AttackIPProfile = $param["AttackIPProfile"];
        }

        if (array_key_exists("AttackIPTags",$param) and $param["AttackIPTags"] !== null) {
            $this->AttackIPTags = $param["AttackIPTags"];
        }

        if (array_key_exists("RequestMethod",$param) and $param["RequestMethod"] !== null) {
            $this->RequestMethod = $param["RequestMethod"];
        }

        if (array_key_exists("HttpLog",$param) and $param["HttpLog"] !== null) {
            $this->HttpLog = $param["HttpLog"];
        }

        if (array_key_exists("AttackDomain",$param) and $param["AttackDomain"] !== null) {
            $this->AttackDomain = $param["AttackDomain"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = $param["RequestHeaders"];
        }

        if (array_key_exists("LoginUserName",$param) and $param["LoginUserName"] !== null) {
            $this->LoginUserName = $param["LoginUserName"];
        }

        if (array_key_exists("VulnerabilityName",$param) and $param["VulnerabilityName"] !== null) {
            $this->VulnerabilityName = $param["VulnerabilityName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("ServiceProcess",$param) and $param["ServiceProcess"] !== null) {
            $this->ServiceProcess = $param["ServiceProcess"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("FileLastAccessTime",$param) and $param["FileLastAccessTime"] !== null) {
            $this->FileLastAccessTime = $param["FileLastAccessTime"];
        }

        if (array_key_exists("FileModifyTime",$param) and $param["FileModifyTime"] !== null) {
            $this->FileModifyTime = $param["FileModifyTime"];
        }

        if (array_key_exists("RecentAccessTime",$param) and $param["RecentAccessTime"] !== null) {
            $this->RecentAccessTime = $param["RecentAccessTime"];
        }

        if (array_key_exists("RecentModifyTime",$param) and $param["RecentModifyTime"] !== null) {
            $this->RecentModifyTime = $param["RecentModifyTime"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("VirusFileTags",$param) and $param["VirusFileTags"] !== null) {
            $this->VirusFileTags = $param["VirusFileTags"];
        }

        if (array_key_exists("BehavioralCharacteristics",$param) and $param["BehavioralCharacteristics"] !== null) {
            $this->BehavioralCharacteristics = $param["BehavioralCharacteristics"];
        }

        if (array_key_exists("ProcessNamePID",$param) and $param["ProcessNamePID"] !== null) {
            $this->ProcessNamePID = $param["ProcessNamePID"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("ProcessCommandLine",$param) and $param["ProcessCommandLine"] !== null) {
            $this->ProcessCommandLine = $param["ProcessCommandLine"];
        }

        if (array_key_exists("ProcessPermissions",$param) and $param["ProcessPermissions"] !== null) {
            $this->ProcessPermissions = $param["ProcessPermissions"];
        }

        if (array_key_exists("ExecutedCommand",$param) and $param["ExecutedCommand"] !== null) {
            $this->ExecutedCommand = $param["ExecutedCommand"];
        }

        if (array_key_exists("AffectedFileName",$param) and $param["AffectedFileName"] !== null) {
            $this->AffectedFileName = $param["AffectedFileName"];
        }

        if (array_key_exists("DecoyPath",$param) and $param["DecoyPath"] !== null) {
            $this->DecoyPath = $param["DecoyPath"];
        }

        if (array_key_exists("MaliciousProcessFileSize",$param) and $param["MaliciousProcessFileSize"] !== null) {
            $this->MaliciousProcessFileSize = $param["MaliciousProcessFileSize"];
        }

        if (array_key_exists("MaliciousProcessFileMD5",$param) and $param["MaliciousProcessFileMD5"] !== null) {
            $this->MaliciousProcessFileMD5 = $param["MaliciousProcessFileMD5"];
        }

        if (array_key_exists("MaliciousProcessNamePID",$param) and $param["MaliciousProcessNamePID"] !== null) {
            $this->MaliciousProcessNamePID = $param["MaliciousProcessNamePID"];
        }

        if (array_key_exists("MaliciousProcessPath",$param) and $param["MaliciousProcessPath"] !== null) {
            $this->MaliciousProcessPath = $param["MaliciousProcessPath"];
        }

        if (array_key_exists("MaliciousProcessStartTime",$param) and $param["MaliciousProcessStartTime"] !== null) {
            $this->MaliciousProcessStartTime = $param["MaliciousProcessStartTime"];
        }

        if (array_key_exists("CommandContent",$param) and $param["CommandContent"] !== null) {
            $this->CommandContent = $param["CommandContent"];
        }

        if (array_key_exists("StartupUser",$param) and $param["StartupUser"] !== null) {
            $this->StartupUser = $param["StartupUser"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("NewPermissions",$param) and $param["NewPermissions"] !== null) {
            $this->NewPermissions = $param["NewPermissions"];
        }

        if (array_key_exists("ParentProcess",$param) and $param["ParentProcess"] !== null) {
            $this->ParentProcess = $param["ParentProcess"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ClassLoader",$param) and $param["ClassLoader"] !== null) {
            $this->ClassLoader = $param["ClassLoader"];
        }

        if (array_key_exists("ClassFileSize",$param) and $param["ClassFileSize"] !== null) {
            $this->ClassFileSize = $param["ClassFileSize"];
        }

        if (array_key_exists("ClassFileMD5",$param) and $param["ClassFileMD5"] !== null) {
            $this->ClassFileMD5 = $param["ClassFileMD5"];
        }

        if (array_key_exists("ParentClassName",$param) and $param["ParentClassName"] !== null) {
            $this->ParentClassName = $param["ParentClassName"];
        }

        if (array_key_exists("InheritedInterface",$param) and $param["InheritedInterface"] !== null) {
            $this->InheritedInterface = $param["InheritedInterface"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PayloadContent",$param) and $param["PayloadContent"] !== null) {
            $this->PayloadContent = $param["PayloadContent"];
        }

        if (array_key_exists("CallbackAddressPortrait",$param) and $param["CallbackAddressPortrait"] !== null) {
            $this->CallbackAddressPortrait = $param["CallbackAddressPortrait"];
        }

        if (array_key_exists("CallbackAddressTag",$param) and $param["CallbackAddressTag"] !== null) {
            $this->CallbackAddressTag = $param["CallbackAddressTag"];
        }

        if (array_key_exists("ProcessMD5",$param) and $param["ProcessMD5"] !== null) {
            $this->ProcessMD5 = $param["ProcessMD5"];
        }

        if (array_key_exists("FilePermission",$param) and $param["FilePermission"] !== null) {
            $this->FilePermission = $param["FilePermission"];
        }

        if (array_key_exists("FromLogAnalysisData",$param) and $param["FromLogAnalysisData"] !== null) {
            $this->FromLogAnalysisData = [];
            foreach ($param["FromLogAnalysisData"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->FromLogAnalysisData, $obj);
            }
        }

        if (array_key_exists("HitProbe",$param) and $param["HitProbe"] !== null) {
            $this->HitProbe = $param["HitProbe"];
        }

        if (array_key_exists("HitHoneyPot",$param) and $param["HitHoneyPot"] !== null) {
            $this->HitHoneyPot = $param["HitHoneyPot"];
        }

        if (array_key_exists("CommandList",$param) and $param["CommandList"] !== null) {
            $this->CommandList = $param["CommandList"];
        }

        if (array_key_exists("AttackEventDesc",$param) and $param["AttackEventDesc"] !== null) {
            $this->AttackEventDesc = $param["AttackEventDesc"];
        }

        if (array_key_exists("ProcessInfo",$param) and $param["ProcessInfo"] !== null) {
            $this->ProcessInfo = $param["ProcessInfo"];
        }

        if (array_key_exists("UserNameAndPwd",$param) and $param["UserNameAndPwd"] !== null) {
            $this->UserNameAndPwd = $param["UserNameAndPwd"];
        }

        if (array_key_exists("StrategyID",$param) and $param["StrategyID"] !== null) {
            $this->StrategyID = $param["StrategyID"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("HitStrategy",$param) and $param["HitStrategy"] !== null) {
            $this->HitStrategy = $param["HitStrategy"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodID",$param) and $param["PodID"] !== null) {
            $this->PodID = $param["PodID"];
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

        if (array_key_exists("SystemCall",$param) and $param["SystemCall"] !== null) {
            $this->SystemCall = $param["SystemCall"];
        }

        if (array_key_exists("Verb",$param) and $param["Verb"] !== null) {
            $this->Verb = $param["Verb"];
        }

        if (array_key_exists("LogID",$param) and $param["LogID"] !== null) {
            $this->LogID = $param["LogID"];
        }

        if (array_key_exists("Different",$param) and $param["Different"] !== null) {
            $this->Different = $param["Different"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("MaliciousRequestDomain",$param) and $param["MaliciousRequestDomain"] !== null) {
            $this->MaliciousRequestDomain = $param["MaliciousRequestDomain"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RequestURI",$param) and $param["RequestURI"] !== null) {
            $this->RequestURI = $param["RequestURI"];
        }

        if (array_key_exists("RequestUser",$param) and $param["RequestUser"] !== null) {
            $this->RequestUser = $param["RequestUser"];
        }

        if (array_key_exists("RequestObject",$param) and $param["RequestObject"] !== null) {
            $this->RequestObject = $param["RequestObject"];
        }

        if (array_key_exists("ResponseObject",$param) and $param["ResponseObject"] !== null) {
            $this->ResponseObject = $param["ResponseObject"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("TIType",$param) and $param["TIType"] !== null) {
            $this->TIType = $param["TIType"];
        }

        if (array_key_exists("SourceIP",$param) and $param["SourceIP"] !== null) {
            $this->SourceIP = $param["SourceIP"];
        }
    }
}
