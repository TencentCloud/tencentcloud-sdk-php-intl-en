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
 * Ai Agent asset information list item
 *
 * @method string getID() Obtain <p>ID identifier</p>
 * @method void setID(string $ID) Set <p>ID identifier</p>
 * @method string getAgentName() Obtain <p>agent name</p>
 * @method void setAgentName(string $AgentName) Set <p>agent name</p>
 * @method array getAgentModel() Obtain <p>Model name used by the agent</p>
 * @method void setAgentModel(array $AgentModel) Set <p>Model name used by the agent</p>
 * @method string getInstanceID() Obtain <p>Instance ID</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method array getMetadataRiskList() Obtain <p>metadata risk list. It has the following enumeration values: 1. AK_TMP  2. USER_DATA</p>
 * @method void setMetadataRiskList(array $MetadataRiskList) Set <p>metadata risk list. It has the following enumeration values: 1. AK_TMP  2. USER_DATA</p>
 * @method string getIdentityTimeFirst() Obtain <p>First detection time</p>
 * @method void setIdentityTimeFirst(string $IdentityTimeFirst) Set <p>First detection time</p>
 * @method string getIdentityTimeLast() Obtain <p>Latest detected time</p>
 * @method void setIdentityTimeLast(string $IdentityTimeLast) Set <p>Latest detected time</p>
 * @method string getIdentityMethod() Obtain <p>Detection method. It has the following enumeration values: 1. FINGER: detected by asset fingerprinting. 2. NETWORK: detected by network access mode</p>
 * @method void setIdentityMethod(string $IdentityMethod) Set <p>Detection method. It has the following enumeration values: 1. FINGER: detected by asset fingerprinting. 2. NETWORK: detected by network access mode</p>
 * @method string getExposureStatus() Obtain <p>Exposure status. It has the following enumeration values: 1. EXPOSED; 2. UNEXPOSED;</p><ol start="3"><li>UNKNOWN;</li></ol>
 * @method void setExposureStatus(string $ExposureStatus) Set <p>Exposure status. It has the following enumeration values: 1. EXPOSED; 2. UNEXPOSED;</p><ol start="3"><li>UNKNOWN;</li></ol>
 * @method string getMetadataRiskURL() Obtain <p>Corresponding path when metadata is at risk</p>
 * @method void setMetadataRiskURL(string $MetadataRiskURL) Set <p>Corresponding path when metadata is at risk</p>
 * @method SkillState getSkillState() Obtain <p>Credential Skill installation status</p>
 * @method void setSkillState(SkillState $SkillState) Set <p>Credential Skill installation status</p>
 * @method TrafficPluginState getTrafficPluginState() Obtain <p>Traffic sandbox plug-in status</p>
 * @method void setTrafficPluginState(TrafficPluginState $TrafficPluginState) Set <p>Traffic sandbox plug-in status</p>
 * @method array getTrafficRuleState() Obtain <p>Traffic sandbox rule status</p>
 * @method void setTrafficRuleState(array $TrafficRuleState) Set <p>Traffic sandbox rule status</p>
 * @method CommandPluginState getCommandPluginState() Obtain <p>Command sandbox plug-in status</p>
 * @method void setCommandPluginState(CommandPluginState $CommandPluginState) Set <p>Command sandbox plug-in status</p>
 */
class AIAgentAsset extends AbstractModel
{
    /**
     * @var string <p>ID identifier</p>
     */
    public $ID;

    /**
     * @var string <p>agent name</p>
     */
    public $AgentName;

    /**
     * @var array <p>Model name used by the agent</p>
     */
    public $AgentModel;

    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var array <p>metadata risk list. It has the following enumeration values: 1. AK_TMP  2. USER_DATA</p>
     */
    public $MetadataRiskList;

    /**
     * @var string <p>First detection time</p>
     */
    public $IdentityTimeFirst;

    /**
     * @var string <p>Latest detected time</p>
     */
    public $IdentityTimeLast;

    /**
     * @var string <p>Detection method. It has the following enumeration values: 1. FINGER: detected by asset fingerprinting. 2. NETWORK: detected by network access mode</p>
     */
    public $IdentityMethod;

    /**
     * @var string <p>Exposure status. It has the following enumeration values: 1. EXPOSED; 2. UNEXPOSED;</p><ol start="3"><li>UNKNOWN;</li></ol>
     */
    public $ExposureStatus;

    /**
     * @var string <p>Corresponding path when metadata is at risk</p>
     */
    public $MetadataRiskURL;

    /**
     * @var SkillState <p>Credential Skill installation status</p>
     */
    public $SkillState;

    /**
     * @var TrafficPluginState <p>Traffic sandbox plug-in status</p>
     */
    public $TrafficPluginState;

    /**
     * @var array <p>Traffic sandbox rule status</p>
     */
    public $TrafficRuleState;

    /**
     * @var CommandPluginState <p>Command sandbox plug-in status</p>
     */
    public $CommandPluginState;

    /**
     * @param string $ID <p>ID identifier</p>
     * @param string $AgentName <p>agent name</p>
     * @param array $AgentModel <p>Model name used by the agent</p>
     * @param string $InstanceID <p>Instance ID</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param array $MetadataRiskList <p>metadata risk list. It has the following enumeration values: 1. AK_TMP  2. USER_DATA</p>
     * @param string $IdentityTimeFirst <p>First detection time</p>
     * @param string $IdentityTimeLast <p>Latest detected time</p>
     * @param string $IdentityMethod <p>Detection method. It has the following enumeration values: 1. FINGER: detected by asset fingerprinting. 2. NETWORK: detected by network access mode</p>
     * @param string $ExposureStatus <p>Exposure status. It has the following enumeration values: 1. EXPOSED; 2. UNEXPOSED;</p><ol start="3"><li>UNKNOWN;</li></ol>
     * @param string $MetadataRiskURL <p>Corresponding path when metadata is at risk</p>
     * @param SkillState $SkillState <p>Credential Skill installation status</p>
     * @param TrafficPluginState $TrafficPluginState <p>Traffic sandbox plug-in status</p>
     * @param array $TrafficRuleState <p>Traffic sandbox rule status</p>
     * @param CommandPluginState $CommandPluginState <p>Command sandbox plug-in status</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AgentModel",$param) and $param["AgentModel"] !== null) {
            $this->AgentModel = $param["AgentModel"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("MetadataRiskList",$param) and $param["MetadataRiskList"] !== null) {
            $this->MetadataRiskList = $param["MetadataRiskList"];
        }

        if (array_key_exists("IdentityTimeFirst",$param) and $param["IdentityTimeFirst"] !== null) {
            $this->IdentityTimeFirst = $param["IdentityTimeFirst"];
        }

        if (array_key_exists("IdentityTimeLast",$param) and $param["IdentityTimeLast"] !== null) {
            $this->IdentityTimeLast = $param["IdentityTimeLast"];
        }

        if (array_key_exists("IdentityMethod",$param) and $param["IdentityMethod"] !== null) {
            $this->IdentityMethod = $param["IdentityMethod"];
        }

        if (array_key_exists("ExposureStatus",$param) and $param["ExposureStatus"] !== null) {
            $this->ExposureStatus = $param["ExposureStatus"];
        }

        if (array_key_exists("MetadataRiskURL",$param) and $param["MetadataRiskURL"] !== null) {
            $this->MetadataRiskURL = $param["MetadataRiskURL"];
        }

        if (array_key_exists("SkillState",$param) and $param["SkillState"] !== null) {
            $this->SkillState = new SkillState();
            $this->SkillState->deserialize($param["SkillState"]);
        }

        if (array_key_exists("TrafficPluginState",$param) and $param["TrafficPluginState"] !== null) {
            $this->TrafficPluginState = new TrafficPluginState();
            $this->TrafficPluginState->deserialize($param["TrafficPluginState"]);
        }

        if (array_key_exists("TrafficRuleState",$param) and $param["TrafficRuleState"] !== null) {
            $this->TrafficRuleState = [];
            foreach ($param["TrafficRuleState"] as $key => $value){
                $obj = new TrafficRuleState();
                $obj->deserialize($value);
                array_push($this->TrafficRuleState, $obj);
            }
        }

        if (array_key_exists("CommandPluginState",$param) and $param["CommandPluginState"] !== null) {
            $this->CommandPluginState = new CommandPluginState();
            $this->CommandPluginState->deserialize($param["CommandPluginState"]);
        }
    }
}
