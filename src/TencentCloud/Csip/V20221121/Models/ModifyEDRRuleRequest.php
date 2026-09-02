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
 * ModifyEDRRule request structure.
 *
 * @method integer getRuleType() Obtain <p>Policy type / Rule Type: 0-System policy/System Rule, 1-Custom policy/Custom Rule</p>
 * @method void setRuleType(integer $RuleType) Set <p>Policy type / Rule Type: 0-System policy/System Rule, 1-Custom policy/Custom Rule</p>
 * @method integer getAlertAction() Obtain <p>Execution action / Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
 * @method void setAlertAction(integer $AlertAction) Set <p>Execution action / Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
 * @method integer getCWPScope() Obtain <p>Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // Host QUUIDS (when Scope=0)</p>
 * @method void setCWPScope(integer $CWPScope) Set <p>Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // Host QUUIDS (when Scope=0)</p>
 * @method integer getTCSSScope() Obtain <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
 * @method void setTCSSScope(integer $TCSSScope) Set <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
 * @method integer getStatus() Obtain <p>Switch / Status: 0-Enabled, 1-Disabled</p>
 * @method void setStatus(integer $Status) Set <p>Switch / Status: 0-Enabled, 1-Disabled</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getContentType() Obtain <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
 * @method void setContentType(string $ContentType) Set <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
 * @method integer getLevel() Obtain <p>Alarm Level: 1-High risk, 2-Medium risk, 3-Low risk, 4-Notification</p>
 * @method void setLevel(integer $Level) Set <p>Alarm Level: 1-High risk, 2-Medium risk, 3-Low risk, 4-Notification</p>
 * @method integer getDetectMode() Obtain <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
 * @method void setDetectMode(integer $DetectMode) Set <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
 * @method string getAttackStage() Obtain <p>Attack phase</p>
 * @method void setAttackStage(string $AttackStage) Set <p>Attack phase</p>
 * @method string getRuleID() Obtain <p>Policy.</p>
 * @method void setRuleID(string $RuleID) Set <p>Policy.</p>
 * @method string getDescription() Obtain <p>Policy description</p>
 * @method void setDescription(string $Description) Set <p>Policy description</p>
 * @method integer getDealOldEvents() Obtain <p>Handle Old Events: 0-No, 1-Yes</p>
 * @method void setDealOldEvents(integer $DealOldEvents) Set <p>Handle Old Events: 0-No, 1-Yes</p>
 * @method array getMd5List() Obtain <p>List of MD5 values passed in when ContentType=md5</p>
 * @method void setMd5List(array $Md5List) Set <p>List of MD5 values passed in when ContentType=md5</p>
 * @method array getFileName() Obtain <p>List of file names passed in when ContentType=custom_file (Base64 code)</p>
 * @method void setFileName(array $FileName) Set <p>List of file names passed in when ContentType=custom_file (Base64 code)</p>
 * @method array getFileDirectory() Obtain <p>Directory list of files passed in when ContentType=custom_file (Base64-encoded)</p>
 * @method void setFileDirectory(array $FileDirectory) Set <p>Directory list of files passed in when ContentType=custom_file (Base64-encoded)</p>
 * @method RuleContentCmdLine getCmdLineRules() Obtain <p>Command line rule passed in when ContentType=cmdline. The Exe/Cmdline fields of Process/PProcess/AProcess need to be Base64 encoded</p>
 * @method void setCmdLineRules(RuleContentCmdLine $CmdLineRules) Set <p>Command line rule passed in when ContentType=cmdline. The Exe/Cmdline fields of Process/PProcess/AProcess need to be Base64 encoded</p>
 * @method array getDomains() Obtain <p>List of domain names passed in when ContentType=dns (Base64-encoded)</p>
 * @method void setDomains(array $Domains) Set <p>List of domain names passed in when ContentType=dns (Base64-encoded)</p>
 * @method array getOutboundIP() Obtain <p>Outbound IP list passed in when ContentType=ip_outbound (Base64-encoded)</p>
 * @method void setOutboundIP(array $OutboundIP) Set <p>Outbound IP list passed in when ContentType=ip_outbound (Base64-encoded)</p>
 * @method array getInboundIP() Obtain <p>Inbound IP list passed in when ContentType=ip_inbound (Base64-encoded)</p>
 * @method void setInboundIP(array $InboundIP) Set <p>Inbound IP list passed in when ContentType=ip_inbound (Base64-encoded)</p>
 * @method array getImageIDs() Obtain <p>Image ID list / Image IDs (when TCSSScope=0)</p>
 * @method void setImageIDs(array $ImageIDs) Set <p>Image ID list / Image IDs (when TCSSScope=0)</p>
 * @method RuleContentProcessNetwork getProcessNetworkRules() Obtain <p>Process network rule passed in when ContentType=process_network</p>
 * @method void setProcessNetworkRules(RuleContentProcessNetwork $ProcessNetworkRules) Set <p>Process network rule passed in when ContentType=process_network</p>
 * @method array getTargetAppIDs() Obtain <p>APPID of the selected accounts</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) Set <p>APPID of the selected accounts</p>
 * @method EdrAlertTarget getTarget() Obtain <p>Allowlisted target machine information of the alarm</p>
 * @method void setTarget(EdrAlertTarget $Target) Set <p>Allowlisted target machine information of the alarm</p>
 * @method array getInstanceIDsWithAppId() Obtain <p>Instance ID and APPID corresponding to the custom asset</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) Set <p>Instance ID and APPID corresponding to the custom asset</p>
 * @method array getExcludeInstanceIDsWithAppId() Obtain <p>Select all instance IDs and APPIDs excluded from assets</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) Set <p>Select all instance IDs and APPIDs excluded from assets</p>
 * @method array getTagIDs() Obtain <p>Security center tag ID list (host asset scope "Select by tag", only applicable to hosts); capacity limit 100 (truncate if exceeded). Tag source API: DescribeAssetTagTree</p>
 * @method void setTagIDs(array $TagIDs) Set <p>Security center tag ID list (host asset scope "Select by tag", only applicable to hosts); capacity limit 100 (truncate if exceeded). Tag source API: DescribeAssetTagTree</p>
 * @method array getClusterIDsWithAppId() Obtain <p>Specify the cluster list to take effect (each item includes AppId + ClusterID, used when TCSSScope=0). The input parameter set has a capacity limit of 3000 (truncated to retain the first 3000 items if exceeded)</p>
 * @method void setClusterIDsWithAppId(array $ClusterIDsWithAppId) Set <p>Specify the cluster list to take effect (each item includes AppId + ClusterID, used when TCSSScope=0). The input parameter set has a capacity limit of 3000 (truncated to retain the first 3000 items if exceeded)</p>
 * @method array getExcludeClusterIDsWithAppId() Obtain <p>Cluster exclusion list (each item contains AppId + ClusterID); input parameter set capacity limit: 3000 (truncate and retain the first 3000 items if exceeded)</p>
 * @method void setExcludeClusterIDsWithAppId(array $ExcludeClusterIDsWithAppId) Set <p>Cluster exclusion list (each item contains AppId + ClusterID); input parameter set capacity limit: 3000 (truncate and retain the first 3000 items if exceeded)</p>
 * @method array getImageIDsWithAppId() Obtain <p>Directly select images (each item contains AppId + ImageID, and filter further on the basis of the cluster). In multi-account scenarios, each account only stores its own images. The input parameter set capacity limit is 3000 (truncate and retain the first 3000 items if exceeded)</p>
 * @method void setImageIDsWithAppId(array $ImageIDsWithAppId) Set <p>Directly select images (each item contains AppId + ImageID, and filter further on the basis of the cluster). In multi-account scenarios, each account only stores its own images. The input parameter set capacity limit is 3000 (truncate and retain the first 3000 items if exceeded)</p>
 * @method array getConditionMatches() Obtain <p>Container condition matching</p>
 * @method void setConditionMatches(array $ConditionMatches) Set <p>Container condition matching</p>
 */
class ModifyEDRRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>Policy type / Rule Type: 0-System policy/System Rule, 1-Custom policy/Custom Rule</p>
     */
    public $RuleType;

    /**
     * @var integer <p>Execution action / Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
     */
    public $AlertAction;

    /**
     * @var integer <p>Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // Host QUUIDS (when Scope=0)</p>
     */
    public $CWPScope;

    /**
     * @var integer <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
     */
    public $TCSSScope;

    /**
     * @var integer <p>Switch / Status: 0-Enabled, 1-Disabled</p>
     */
    public $Status;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
     */
    public $ContentType;

    /**
     * @var integer <p>Alarm Level: 1-High risk, 2-Medium risk, 3-Low risk, 4-Notification</p>
     */
    public $Level;

    /**
     * @var integer <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
     */
    public $DetectMode;

    /**
     * @var string <p>Attack phase</p>
     */
    public $AttackStage;

    /**
     * @var string <p>Policy.</p>
     */
    public $RuleID;

    /**
     * @var string <p>Policy description</p>
     */
    public $Description;

    /**
     * @var integer <p>Handle Old Events: 0-No, 1-Yes</p>
     */
    public $DealOldEvents;

    /**
     * @var array <p>List of MD5 values passed in when ContentType=md5</p>
     */
    public $Md5List;

    /**
     * @var array <p>List of file names passed in when ContentType=custom_file (Base64 code)</p>
     */
    public $FileName;

    /**
     * @var array <p>Directory list of files passed in when ContentType=custom_file (Base64-encoded)</p>
     */
    public $FileDirectory;

    /**
     * @var RuleContentCmdLine <p>Command line rule passed in when ContentType=cmdline. The Exe/Cmdline fields of Process/PProcess/AProcess need to be Base64 encoded</p>
     */
    public $CmdLineRules;

    /**
     * @var array <p>List of domain names passed in when ContentType=dns (Base64-encoded)</p>
     */
    public $Domains;

    /**
     * @var array <p>Outbound IP list passed in when ContentType=ip_outbound (Base64-encoded)</p>
     */
    public $OutboundIP;

    /**
     * @var array <p>Inbound IP list passed in when ContentType=ip_inbound (Base64-encoded)</p>
     */
    public $InboundIP;

    /**
     * @var array <p>Image ID list / Image IDs (when TCSSScope=0)</p>
     */
    public $ImageIDs;

    /**
     * @var RuleContentProcessNetwork <p>Process network rule passed in when ContentType=process_network</p>
     */
    public $ProcessNetworkRules;

    /**
     * @var array <p>APPID of the selected accounts</p>
     */
    public $TargetAppIDs;

    /**
     * @var EdrAlertTarget <p>Allowlisted target machine information of the alarm</p>
     */
    public $Target;

    /**
     * @var array <p>Instance ID and APPID corresponding to the custom asset</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>Select all instance IDs and APPIDs excluded from assets</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>Security center tag ID list (host asset scope "Select by tag", only applicable to hosts); capacity limit 100 (truncate if exceeded). Tag source API: DescribeAssetTagTree</p>
     */
    public $TagIDs;

    /**
     * @var array <p>Specify the cluster list to take effect (each item includes AppId + ClusterID, used when TCSSScope=0). The input parameter set has a capacity limit of 3000 (truncated to retain the first 3000 items if exceeded)</p>
     */
    public $ClusterIDsWithAppId;

    /**
     * @var array <p>Cluster exclusion list (each item contains AppId + ClusterID); input parameter set capacity limit: 3000 (truncate and retain the first 3000 items if exceeded)</p>
     */
    public $ExcludeClusterIDsWithAppId;

    /**
     * @var array <p>Directly select images (each item contains AppId + ImageID, and filter further on the basis of the cluster). In multi-account scenarios, each account only stores its own images. The input parameter set capacity limit is 3000 (truncate and retain the first 3000 items if exceeded)</p>
     */
    public $ImageIDsWithAppId;

    /**
     * @var array <p>Container condition matching</p>
     */
    public $ConditionMatches;

    /**
     * @param integer $RuleType <p>Policy type / Rule Type: 0-System policy/System Rule, 1-Custom policy/Custom Rule</p>
     * @param integer $AlertAction <p>Execution action / Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
     * @param integer $CWPScope <p>Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship     QUUIDS        []string json:&quot;QUUIDS&quot;                                      // Host QUUIDS (when Scope=0)</p>
     * @param integer $TCSSScope <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
     * @param integer $Status <p>Switch / Status: 0-Enabled, 1-Disabled</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $ContentType <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
     * @param integer $Level <p>Alarm Level: 1-High risk, 2-Medium risk, 3-Low risk, 4-Notification</p>
     * @param integer $DetectMode <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
     * @param string $AttackStage <p>Attack phase</p>
     * @param string $RuleID <p>Policy.</p>
     * @param string $Description <p>Policy description</p>
     * @param integer $DealOldEvents <p>Handle Old Events: 0-No, 1-Yes</p>
     * @param array $Md5List <p>List of MD5 values passed in when ContentType=md5</p>
     * @param array $FileName <p>List of file names passed in when ContentType=custom_file (Base64 code)</p>
     * @param array $FileDirectory <p>Directory list of files passed in when ContentType=custom_file (Base64-encoded)</p>
     * @param RuleContentCmdLine $CmdLineRules <p>Command line rule passed in when ContentType=cmdline. The Exe/Cmdline fields of Process/PProcess/AProcess need to be Base64 encoded</p>
     * @param array $Domains <p>List of domain names passed in when ContentType=dns (Base64-encoded)</p>
     * @param array $OutboundIP <p>Outbound IP list passed in when ContentType=ip_outbound (Base64-encoded)</p>
     * @param array $InboundIP <p>Inbound IP list passed in when ContentType=ip_inbound (Base64-encoded)</p>
     * @param array $ImageIDs <p>Image ID list / Image IDs (when TCSSScope=0)</p>
     * @param RuleContentProcessNetwork $ProcessNetworkRules <p>Process network rule passed in when ContentType=process_network</p>
     * @param array $TargetAppIDs <p>APPID of the selected accounts</p>
     * @param EdrAlertTarget $Target <p>Allowlisted target machine information of the alarm</p>
     * @param array $InstanceIDsWithAppId <p>Instance ID and APPID corresponding to the custom asset</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>Select all instance IDs and APPIDs excluded from assets</p>
     * @param array $TagIDs <p>Security center tag ID list (host asset scope "Select by tag", only applicable to hosts); capacity limit 100 (truncate if exceeded). Tag source API: DescribeAssetTagTree</p>
     * @param array $ClusterIDsWithAppId <p>Specify the cluster list to take effect (each item includes AppId + ClusterID, used when TCSSScope=0). The input parameter set has a capacity limit of 3000 (truncated to retain the first 3000 items if exceeded)</p>
     * @param array $ExcludeClusterIDsWithAppId <p>Cluster exclusion list (each item contains AppId + ClusterID); input parameter set capacity limit: 3000 (truncate and retain the first 3000 items if exceeded)</p>
     * @param array $ImageIDsWithAppId <p>Directly select images (each item contains AppId + ImageID, and filter further on the basis of the cluster). In multi-account scenarios, each account only stores its own images. The input parameter set capacity limit is 3000 (truncate and retain the first 3000 items if exceeded)</p>
     * @param array $ConditionMatches <p>Container condition matching</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("AlertAction",$param) and $param["AlertAction"] !== null) {
            $this->AlertAction = $param["AlertAction"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileDirectory",$param) and $param["FileDirectory"] !== null) {
            $this->FileDirectory = $param["FileDirectory"];
        }

        if (array_key_exists("CmdLineRules",$param) and $param["CmdLineRules"] !== null) {
            $this->CmdLineRules = new RuleContentCmdLine();
            $this->CmdLineRules->deserialize($param["CmdLineRules"]);
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("OutboundIP",$param) and $param["OutboundIP"] !== null) {
            $this->OutboundIP = $param["OutboundIP"];
        }

        if (array_key_exists("InboundIP",$param) and $param["InboundIP"] !== null) {
            $this->InboundIP = $param["InboundIP"];
        }

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("ProcessNetworkRules",$param) and $param["ProcessNetworkRules"] !== null) {
            $this->ProcessNetworkRules = new RuleContentProcessNetwork();
            $this->ProcessNetworkRules->deserialize($param["ProcessNetworkRules"]);
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new EdrAlertTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("ClusterIDsWithAppId",$param) and $param["ClusterIDsWithAppId"] !== null) {
            $this->ClusterIDsWithAppId = [];
            foreach ($param["ClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeClusterIDsWithAppId",$param) and $param["ExcludeClusterIDsWithAppId"] !== null) {
            $this->ExcludeClusterIDsWithAppId = [];
            foreach ($param["ExcludeClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ImageIDsWithAppId",$param) and $param["ImageIDsWithAppId"] !== null) {
            $this->ImageIDsWithAppId = [];
            foreach ($param["ImageIDsWithAppId"] as $key => $value){
                $obj = new ImageIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ImageIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ConditionMatches",$param) and $param["ConditionMatches"] !== null) {
            $this->ConditionMatches = [];
            foreach ($param["ConditionMatches"] as $key => $value){
                $obj = new ConditionMatch();
                $obj->deserialize($value);
                array_push($this->ConditionMatches, $obj);
            }
        }
    }
}
