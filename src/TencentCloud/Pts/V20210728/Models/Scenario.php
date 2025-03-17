<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Performance test scenario.
 *
 * @method string getScenarioId() Obtain Scenario ID.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.
 * @method string getName() Obtain Scenario name.
 * @method void setName(string $Name) Set Scenario name.
 * @method string getDescription() Obtain Scenario description.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDescription(string $Description) Set Scenario description.

Note: This field may return null, indicating that no valid value is found.
 * @method string getType() Obtain Type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.

Note: This field may return null, indicating that no valid value is found.
 * @method void setType(string $Type) Set Type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStatus() Obtain Scenario status.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(integer $Status) Set Scenario status.

Note: This field may return null, indicating that no valid value is found.
 * @method Load getLoad() Obtain Load configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setLoad(Load $Load) Set Load configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method string getEncodedScripts() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setEncodedScripts(string $EncodedScripts) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method array getConfigs() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setConfigs(array $Configs) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method array getExtensions() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setExtensions(array $Extensions) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method array getDatasets() Obtain Test datasets.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDatasets(array $Datasets) Set Test datasets.

Note: This field may return null, indicating that no valid value is found.
 * @method string getSLAId() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSLAId(string $SLAId) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCronId() Obtain CronJob ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCronId(string $CronId) Set CronJob ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCreatedAt() Obtain Create time.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.
 * @method string getUpdatedAt() Obtain Update time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAppId() Obtain App ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAppId(integer $AppId) Set App ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUin() Obtain Uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUin(string $Uin) Set Uin.

Note: This field may return null, indicating that no valid value is found.
 * @method string getSubAccountUin() Obtain Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method array getTestScripts() Obtain Test scripts.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTestScripts(array $TestScripts) Set Test scripts.

Note: This field may return null, indicating that no valid value is found.
 * @method array getProtocols() Obtain Protocol files.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProtocols(array $Protocols) Set Protocol files.

Note: This field may return null, indicating that no valid value is found.
 * @method array getRequestFiles() Obtain Request files.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRequestFiles(array $RequestFiles) Set Request files.

Note: This field may return null, indicating that no valid value is found.
 * @method SLAPolicy getSLAPolicy() Obtain SLA policy.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSLAPolicy(SLAPolicy $SLAPolicy) Set SLA policy.

Note: This field may return null, indicating that no valid value is found.
 * @method array getPlugins() Obtain Extension plugin files.

Note: This field may return null, indicating that no valid value is found.
 * @method void setPlugins(array $Plugins) Set Extension plugin files.

Note: This field may return null, indicating that no valid value is found.
 * @method DomainNameConfig getDomainNameConfig() Obtain Domain name resolution configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDomainNameConfig(DomainNameConfig $DomainNameConfig) Set Domain name resolution configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method array getNotificationHooks() Obtain Notification event hooks.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNotificationHooks(array $NotificationHooks) Set Notification event hooks.

Note: This field may return null, indicating that no valid value is found.
 * @method string getOwner() Obtain Creator name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setOwner(string $Owner) Set Creator name.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectName() Obtain Project name.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectName(string $ProjectName) Set Project name.

Note: This field may return null, indicating that no valid value is found.
 */
class Scenario extends AbstractModel
{
    /**
     * @var string Scenario ID.
     */
    public $ScenarioId;

    /**
     * @var string Scenario name.
     */
    public $Name;

    /**
     * @var string Scenario description.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Description;

    /**
     * @var string Type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Type;

    /**
     * @var integer Scenario status.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var Load Load configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Load;

    /**
     * @var string Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $EncodedScripts;

    /**
     * @var array Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Configs;

    /**
     * @var array Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Extensions;

    /**
     * @var array Test datasets.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Datasets;

    /**
     * @var string Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SLAId;

    /**
     * @var string CronJob ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CronId;

    /**
     * @var string Create time.
     */
    public $CreatedAt;

    /**
     * @var string Update time.
     */
    public $UpdatedAt;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectId;

    /**
     * @var integer App ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AppId;

    /**
     * @var string Uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Uin;

    /**
     * @var string Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SubAccountUin;

    /**
     * @var array Test scripts.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TestScripts;

    /**
     * @var array Protocol files.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Protocols;

    /**
     * @var array Request files.

Note: This field may return null, indicating that no valid value is found.
     */
    public $RequestFiles;

    /**
     * @var SLAPolicy SLA policy.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SLAPolicy;

    /**
     * @var array Extension plugin files.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Plugins;

    /**
     * @var DomainNameConfig Domain name resolution configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $DomainNameConfig;

    /**
     * @var array Notification event hooks.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NotificationHooks;

    /**
     * @var string Creator name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Owner;

    /**
     * @var string Project name.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectName;

    /**
     * @param string $ScenarioId Scenario ID.
     * @param string $Name Scenario name.
     * @param string $Description Scenario description.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Type Type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Status Scenario status.

Note: This field may return null, indicating that no valid value is found.
     * @param Load $Load Load configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param string $EncodedScripts Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Configs Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Extensions Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Datasets Test datasets.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SLAId Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CronId CronJob ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CreatedAt Create time.
     * @param string $UpdatedAt Update time.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AppId App ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Uin Uin.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SubAccountUin Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     * @param array $TestScripts Test scripts.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Protocols Protocol files.

Note: This field may return null, indicating that no valid value is found.
     * @param array $RequestFiles Request files.

Note: This field may return null, indicating that no valid value is found.
     * @param SLAPolicy $SLAPolicy SLA policy.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Plugins Extension plugin files.

Note: This field may return null, indicating that no valid value is found.
     * @param DomainNameConfig $DomainNameConfig Domain name resolution configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param array $NotificationHooks Notification event hooks.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Owner Creator name.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectName Project name.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = new Load();
            $this->Load->deserialize($param["Load"]);
        }

        if (array_key_exists("EncodedScripts",$param) and $param["EncodedScripts"] !== null) {
            $this->EncodedScripts = $param["EncodedScripts"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = $param["Configs"];
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new TestData();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("SLAId",$param) and $param["SLAId"] !== null) {
            $this->SLAId = $param["SLAId"];
        }

        if (array_key_exists("CronId",$param) and $param["CronId"] !== null) {
            $this->CronId = $param["CronId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("TestScripts",$param) and $param["TestScripts"] !== null) {
            $this->TestScripts = [];
            foreach ($param["TestScripts"] as $key => $value){
                $obj = new ScriptInfo();
                $obj->deserialize($value);
                array_push($this->TestScripts, $obj);
            }
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new ProtocolInfo();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("RequestFiles",$param) and $param["RequestFiles"] !== null) {
            $this->RequestFiles = [];
            foreach ($param["RequestFiles"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->RequestFiles, $obj);
            }
        }

        if (array_key_exists("SLAPolicy",$param) and $param["SLAPolicy"] !== null) {
            $this->SLAPolicy = new SLAPolicy();
            $this->SLAPolicy->deserialize($param["SLAPolicy"]);
        }

        if (array_key_exists("Plugins",$param) and $param["Plugins"] !== null) {
            $this->Plugins = [];
            foreach ($param["Plugins"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->Plugins, $obj);
            }
        }

        if (array_key_exists("DomainNameConfig",$param) and $param["DomainNameConfig"] !== null) {
            $this->DomainNameConfig = new DomainNameConfig();
            $this->DomainNameConfig->deserialize($param["DomainNameConfig"]);
        }

        if (array_key_exists("NotificationHooks",$param) and $param["NotificationHooks"] !== null) {
            $this->NotificationHooks = [];
            foreach ($param["NotificationHooks"] as $key => $value){
                $obj = new NotificationHook();
                $obj->deserialize($value);
                array_push($this->NotificationHooks, $obj);
            }
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
