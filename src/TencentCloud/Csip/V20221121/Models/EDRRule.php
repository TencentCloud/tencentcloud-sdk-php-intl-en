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
 * EDR policy content.
 *
 * @method string getRuleID() Obtain <p>Policy ID.</p>
 * @method void setRuleID(string $RuleID) Set <p>Policy ID.</p>
 * @method integer getRuleType() Obtain <p>Policy type. 0: System policy; 1: Custom policy</p>
 * @method void setRuleType(integer $RuleType) Set <p>Policy type. 0: System policy; 1: Custom policy</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getDescription() Obtain <p>Policy description</p>
 * @method void setDescription(string $Description) Set <p>Policy description</p>
 * @method string getContentType() Obtain <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
 * @method void setContentType(string $ContentType) Set <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
 * @method integer getAction() Obtain <p>Executed Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
 * @method void setAction(integer $Action) Set <p>Executed Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
 * @method integer getLevel() Obtain <p>Alarm Level: 0-None, 1-High, 2-Medium, 3-Low, 4-Reminder</p>
 * @method void setLevel(integer $Level) Set <p>Alarm Level: 0-None, 1-High, 2-Medium, 3-Low, 4-Reminder</p>
 * @method integer getDetectMode() Obtain <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
 * @method void setDetectMode(integer $DetectMode) Set <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
 * @method integer getDetectType() Obtain <p>Detection mode / Detect Type: 0-Host Detection, 1-Network Detection</p>
 * @method void setDetectType(integer $DetectType) Set <p>Detection mode / Detect Type: 0-Host Detection, 1-Network Detection</p>
 * @method string getAttackStage() Obtain <p>Attack phase</p>
 * @method void setAttackStage(string $AttackStage) Set <p>Attack phase</p>
 * @method integer getCWPScope() Obtain <p>Effective asset scope of host / Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship</p>
 * @method void setCWPScope(integer $CWPScope) Set <p>Effective asset scope of host / Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship</p>
 * @method array getQUUIDS() Obtain <p>Selected host at host runtime</p>
 * @method void setQUUIDS(array $QUUIDS) Set <p>Selected host at host runtime</p>
 * @method integer getStatus() Obtain <p>Status: 0-Enabled, 1-Disabled</p>
 * @method void setStatus(integer $Status) Set <p>Status: 0-Enabled, 1-Disabled</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getModifyTime() Obtain <p>Modification time.</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Modification time.</p>
 * @method integer getSupportBlock() Obtain <p>Whether interception is supported / Support Block: 0-Not Supported, 1-Supported</p>
 * @method void setSupportBlock(integer $SupportBlock) Set <p>Whether interception is supported / Support Block: 0-Not Supported, 1-Supported</p>
 * @method array getMd5List() Obtain <p>MD5 list. This field is filled when ContentType is md5.</p>
 * @method void setMd5List(array $Md5List) Set <p>MD5 list. This field is filled when ContentType is md5.</p>
 * @method array getFileName() Obtain <p>File name list, filled when ContentType=custom_file</p>
 * @method void setFileName(array $FileName) Set <p>File name list, filled when ContentType=custom_file</p>
 * @method array getFileDirectory() Obtain <p>File directory list, fill when ContentType=custom_file</p>
 * @method void setFileDirectory(array $FileDirectory) Set <p>File directory list, fill when ContentType=custom_file</p>
 * @method array getDomains() Obtain <p>Domain name list. Fill in when ContentType=dns</p>
 * @method void setDomains(array $Domains) Set <p>Domain name list. Fill in when ContentType=dns</p>
 * @method array getOutboundIP() Obtain <p>Outbound IP list, populated when ContentType=ip_outbound</p>
 * @method void setOutboundIP(array $OutboundIP) Set <p>Outbound IP list, populated when ContentType=ip_outbound</p>
 * @method array getInboundIP() Obtain <p>Inbound IP list, filled when ContentType=ip_inbound</p>
 * @method void setInboundIP(array $InboundIP) Set <p>Inbound IP list, filled when ContentType=ip_inbound</p>
 * @method RuleContentCmdLine getCmdLineRules() Obtain <p>Command line rule, filled when ContentType=cmdline</p>
 * @method void setCmdLineRules(RuleContentCmdLine $CmdLineRules) Set <p>Command line rule, filled when ContentType=cmdline</p>
 * @method integer getTCSSScope() Obtain <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
 * @method void setTCSSScope(integer $TCSSScope) Set <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
 * @method array getImageIDs() Obtain <p>Image ID list that takes effect / Image IDs (when TCSSScope=0)</p>
 * @method void setImageIDs(array $ImageIDs) Set <p>Image ID list that takes effect / Image IDs (when TCSSScope=0)</p>
 * @method string getImageNamesRegex() Obtain <p>Image name regular expression / Image Names Regex</p>
 * @method void setImageNamesRegex(string $ImageNamesRegex) Set <p>Image name regular expression / Image Names Regex</p>
 * @method integer getConfidence() Obtain <p>Confidence: 0-Low, 1-Medium, 2-High</p>
 * @method void setConfidence(integer $Confidence) Set <p>Confidence: 0-Low, 1-Medium, 2-High</p>
 * @method array getExcludeQUUIDS() Obtain <p>Excluded host list / Excluded Host QUUIDS</p>
 * @method void setExcludeQUUIDS(array $ExcludeQUUIDS) Set <p>Excluded host list / Excluded Host QUUIDS</p>
 * @method array getExcludeImageIDs() Obtain <p>Excluded image id list / Excluded Image IDs</p>
 * @method void setExcludeImageIDs(array $ExcludeImageIDs) Set <p>Excluded image id list / Excluded Image IDs</p>
 * @method RuleContentProcessNetwork getProcessNetworkRules() Obtain <p>Process network rules</p>
 * @method void setProcessNetworkRules(RuleContentProcessNetwork $ProcessNetworkRules) Set <p>Process network rules</p>
 * @method integer getAppID() Obtain <p>APPID corresponding to the policy.</p>
 * @method void setAppID(integer $AppID) Set <p>APPID corresponding to the policy.</p>
 * @method array getInstanceIDs() Obtain <p>Selected instance ID range</p>
 * @method void setInstanceIDs(array $InstanceIDs) Set <p>Selected instance ID range</p>
 * @method array getExcludeInstanceIDs() Obtain <p>Excluded instance ID</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) Set <p>Excluded instance ID</p>
 * @method array getClusterIDs() Obtain <p>Cluster ID list that takes effect (with a value when TCSSScope=0; empty returns [])</p>
 * @method void setClusterIDs(array $ClusterIDs) Set <p>Cluster ID list that takes effect (with a value when TCSSScope=0; empty returns [])</p>
 * @method array getExcludeClusterIDs() Obtain <p>Cluster ID list for exclusion (empty returns [])</p>
 * @method void setExcludeClusterIDs(array $ExcludeClusterIDs) Set <p>Cluster ID list for exclusion (empty returns [])</p>
 * @method array getConditionMatches() Obtain <p>Container condition matching.</p>
 * @method void setConditionMatches(array $ConditionMatches) Set <p>Container condition matching.</p>
 * @method array getTagItems() Obtain <p>Security center tag</p>
 * @method void setTagItems(array $TagItems) Set <p>Security center tag</p>
 */
class EDRRule extends AbstractModel
{
    /**
     * @var string <p>Policy ID.</p>
     */
    public $RuleID;

    /**
     * @var integer <p>Policy type. 0: System policy; 1: Custom policy</p>
     */
    public $RuleType;

    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Policy description</p>
     */
    public $Description;

    /**
     * @var string <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
     */
    public $ContentType;

    /**
     * @var integer <p>Executed Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
     */
    public $Action;

    /**
     * @var integer <p>Alarm Level: 0-None, 1-High, 2-Medium, 3-Low, 4-Reminder</p>
     */
    public $Level;

    /**
     * @var integer <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
     */
    public $DetectMode;

    /**
     * @var integer <p>Detection mode / Detect Type: 0-Host Detection, 1-Network Detection</p>
     */
    public $DetectType;

    /**
     * @var string <p>Attack phase</p>
     */
    public $AttackStage;

    /**
     * @var integer <p>Effective asset scope of host / Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship</p>
     */
    public $CWPScope;

    /**
     * @var array <p>Selected host at host runtime</p>
     */
    public $QUUIDS;

    /**
     * @var integer <p>Status: 0-Enabled, 1-Disabled</p>
     */
    public $Status;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Modification time.</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>Whether interception is supported / Support Block: 0-Not Supported, 1-Supported</p>
     */
    public $SupportBlock;

    /**
     * @var array <p>MD5 list. This field is filled when ContentType is md5.</p>
     */
    public $Md5List;

    /**
     * @var array <p>File name list, filled when ContentType=custom_file</p>
     */
    public $FileName;

    /**
     * @var array <p>File directory list, fill when ContentType=custom_file</p>
     */
    public $FileDirectory;

    /**
     * @var array <p>Domain name list. Fill in when ContentType=dns</p>
     */
    public $Domains;

    /**
     * @var array <p>Outbound IP list, populated when ContentType=ip_outbound</p>
     */
    public $OutboundIP;

    /**
     * @var array <p>Inbound IP list, filled when ContentType=ip_inbound</p>
     */
    public $InboundIP;

    /**
     * @var RuleContentCmdLine <p>Command line rule, filled when ContentType=cmdline</p>
     */
    public $CmdLineRules;

    /**
     * @var integer <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
     */
    public $TCSSScope;

    /**
     * @var array <p>Image ID list that takes effect / Image IDs (when TCSSScope=0)</p>
     */
    public $ImageIDs;

    /**
     * @var string <p>Image name regular expression / Image Names Regex</p>
     */
    public $ImageNamesRegex;

    /**
     * @var integer <p>Confidence: 0-Low, 1-Medium, 2-High</p>
     */
    public $Confidence;

    /**
     * @var array <p>Excluded host list / Excluded Host QUUIDS</p>
     */
    public $ExcludeQUUIDS;

    /**
     * @var array <p>Excluded image id list / Excluded Image IDs</p>
     */
    public $ExcludeImageIDs;

    /**
     * @var RuleContentProcessNetwork <p>Process network rules</p>
     */
    public $ProcessNetworkRules;

    /**
     * @var integer <p>APPID corresponding to the policy.</p>
     */
    public $AppID;

    /**
     * @var array <p>Selected instance ID range</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>Excluded instance ID</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @var array <p>Cluster ID list that takes effect (with a value when TCSSScope=0; empty returns [])</p>
     */
    public $ClusterIDs;

    /**
     * @var array <p>Cluster ID list for exclusion (empty returns [])</p>
     */
    public $ExcludeClusterIDs;

    /**
     * @var array <p>Container condition matching.</p>
     */
    public $ConditionMatches;

    /**
     * @var array <p>Security center tag</p>
     */
    public $TagItems;

    /**
     * @param string $RuleID <p>Policy ID.</p>
     * @param integer $RuleType <p>Policy type. 0: System policy; 1: Custom policy</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $Description <p>Policy description</p>
     * @param string $ContentType <p>Content Type: md5-File MD5, cmdline-Command Line, dns-DNS, ip_inbound-Inbound IP, ip_outbound-Outbound IP, custom_file-Custom File, process_network-Process Network</p>
     * @param integer $Action <p>Executed Action: 0-Alert, 1-Allow, 2-Alert and Block</p>
     * @param integer $Level <p>Alarm Level: 0-None, 1-High, 2-Medium, 3-Low, 4-Reminder</p>
     * @param integer $DetectMode <p>Detection Mode: 0-Precise, 1-Balanced, 2-Deep</p>
     * @param integer $DetectType <p>Detection mode / Detect Type: 0-Host Detection, 1-Network Detection</p>
     * @param string $AttackStage <p>Attack phase</p>
     * @param integer $CWPScope <p>Effective asset scope of host / Effective Scope: 0-Specified Hosts, 1-All Hosts, 2-Professional, 3-Flagship, 4-Professional+Flagship</p>
     * @param array $QUUIDS <p>Selected host at host runtime</p>
     * @param integer $Status <p>Status: 0-Enabled, 1-Disabled</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $ModifyTime <p>Modification time.</p>
     * @param integer $SupportBlock <p>Whether interception is supported / Support Block: 0-Not Supported, 1-Supported</p>
     * @param array $Md5List <p>MD5 list. This field is filled when ContentType is md5.</p>
     * @param array $FileName <p>File name list, filled when ContentType=custom_file</p>
     * @param array $FileDirectory <p>File directory list, fill when ContentType=custom_file</p>
     * @param array $Domains <p>Domain name list. Fill in when ContentType=dns</p>
     * @param array $OutboundIP <p>Outbound IP list, populated when ContentType=ip_outbound</p>
     * @param array $InboundIP <p>Inbound IP list, filled when ContentType=ip_inbound</p>
     * @param RuleContentCmdLine $CmdLineRules <p>Command line rule, filled when ContentType=cmdline</p>
     * @param integer $TCSSScope <p>Container Image Scope: 0-Specified Images, 1-All Images</p>
     * @param array $ImageIDs <p>Image ID list that takes effect / Image IDs (when TCSSScope=0)</p>
     * @param string $ImageNamesRegex <p>Image name regular expression / Image Names Regex</p>
     * @param integer $Confidence <p>Confidence: 0-Low, 1-Medium, 2-High</p>
     * @param array $ExcludeQUUIDS <p>Excluded host list / Excluded Host QUUIDS</p>
     * @param array $ExcludeImageIDs <p>Excluded image id list / Excluded Image IDs</p>
     * @param RuleContentProcessNetwork $ProcessNetworkRules <p>Process network rules</p>
     * @param integer $AppID <p>APPID corresponding to the policy.</p>
     * @param array $InstanceIDs <p>Selected instance ID range</p>
     * @param array $ExcludeInstanceIDs <p>Excluded instance ID</p>
     * @param array $ClusterIDs <p>Cluster ID list that takes effect (with a value when TCSSScope=0; empty returns [])</p>
     * @param array $ExcludeClusterIDs <p>Cluster ID list for exclusion (empty returns [])</p>
     * @param array $ConditionMatches <p>Container condition matching.</p>
     * @param array $TagItems <p>Security center tag</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("DetectType",$param) and $param["DetectType"] !== null) {
            $this->DetectType = $param["DetectType"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("QUUIDS",$param) and $param["QUUIDS"] !== null) {
            $this->QUUIDS = $param["QUUIDS"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SupportBlock",$param) and $param["SupportBlock"] !== null) {
            $this->SupportBlock = $param["SupportBlock"];
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

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("OutboundIP",$param) and $param["OutboundIP"] !== null) {
            $this->OutboundIP = $param["OutboundIP"];
        }

        if (array_key_exists("InboundIP",$param) and $param["InboundIP"] !== null) {
            $this->InboundIP = $param["InboundIP"];
        }

        if (array_key_exists("CmdLineRules",$param) and $param["CmdLineRules"] !== null) {
            $this->CmdLineRules = new RuleContentCmdLine();
            $this->CmdLineRules->deserialize($param["CmdLineRules"]);
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("ImageNamesRegex",$param) and $param["ImageNamesRegex"] !== null) {
            $this->ImageNamesRegex = $param["ImageNamesRegex"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("ExcludeQUUIDS",$param) and $param["ExcludeQUUIDS"] !== null) {
            $this->ExcludeQUUIDS = $param["ExcludeQUUIDS"];
        }

        if (array_key_exists("ExcludeImageIDs",$param) and $param["ExcludeImageIDs"] !== null) {
            $this->ExcludeImageIDs = $param["ExcludeImageIDs"];
        }

        if (array_key_exists("ProcessNetworkRules",$param) and $param["ProcessNetworkRules"] !== null) {
            $this->ProcessNetworkRules = new RuleContentProcessNetwork();
            $this->ProcessNetworkRules->deserialize($param["ProcessNetworkRules"]);
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }

        if (array_key_exists("ExcludeClusterIDs",$param) and $param["ExcludeClusterIDs"] !== null) {
            $this->ExcludeClusterIDs = $param["ExcludeClusterIDs"];
        }

        if (array_key_exists("ConditionMatches",$param) and $param["ConditionMatches"] !== null) {
            $this->ConditionMatches = [];
            foreach ($param["ConditionMatches"] as $key => $value){
                $obj = new ConditionMatch();
                $obj->deserialize($value);
                array_push($this->ConditionMatches, $obj);
            }
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new EDRRuleTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }
    }
}
