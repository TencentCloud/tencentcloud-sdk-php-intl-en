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
 * CreateScenario request structure.
 *
 * @method string getName() Obtain Scenario Name.
 * @method void setName(string $Name) Set Scenario Name.
 * @method string getType() Obtain Mode type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.
 * @method void setType(string $Type) Set Mode type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getDescription() Obtain Scenario description.
 * @method void setDescription(string $Description) Set Scenario description.
 * @method Load getLoad() Obtain Load configuration.
 * @method void setLoad(Load $Load) Set Load configuration.
 * @method array getConfigs() Obtain Deprecated.
 * @method void setConfigs(array $Configs) Set Deprecated.
 * @method array getDatasets() Obtain Test datasets.
 * @method void setDatasets(array $Datasets) Set Test datasets.
 * @method array getExtensions() Obtain Deprecated.
 * @method void setExtensions(array $Extensions) Set Deprecated.
 * @method string getSLAId() Obtain Deprecated.
 * @method void setSLAId(string $SLAId) Set Deprecated.
 * @method string getCronId() Obtain Cron job ID.
 * @method void setCronId(string $CronId) Set Cron job ID.
 * @method array getScripts() Obtain Deprecated,
 * @method void setScripts(array $Scripts) Set Deprecated,
 * @method array getTestScripts() Obtain Test scripts.
 * @method void setTestScripts(array $TestScripts) Set Test scripts.
 * @method array getProtocols() Obtain Protocol files.
 * @method void setProtocols(array $Protocols) Set Protocol files.
 * @method array getRequestFiles() Obtain Request files.
 * @method void setRequestFiles(array $RequestFiles) Set Request files.
 * @method SLAPolicy getSLAPolicy() Obtain SLA policy.
 * @method void setSLAPolicy(SLAPolicy $SLAPolicy) Set SLA policy.
 * @method array getPlugins() Obtain Extension plugin files.
 * @method void setPlugins(array $Plugins) Set Extension plugin files.
 * @method DomainNameConfig getDomainNameConfig() Obtain Domain name resolution configuration.
 * @method void setDomainNameConfig(DomainNameConfig $DomainNameConfig) Set Domain name resolution configuration.
 * @method string getOwner() Obtain Creator name.
 * @method void setOwner(string $Owner) Set Creator name.
 */
class CreateScenarioRequest extends AbstractModel
{
    /**
     * @var string Scenario Name.
     */
    public $Name;

    /**
     * @var string Mode type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.
     */
    public $Type;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Scenario description.
     */
    public $Description;

    /**
     * @var Load Load configuration.
     */
    public $Load;

    /**
     * @var array Deprecated.
     */
    public $Configs;

    /**
     * @var array Test datasets.
     */
    public $Datasets;

    /**
     * @var array Deprecated.
     */
    public $Extensions;

    /**
     * @var string Deprecated.
     */
    public $SLAId;

    /**
     * @var string Cron job ID.
     */
    public $CronId;

    /**
     * @var array Deprecated,
     */
    public $Scripts;

    /**
     * @var array Test scripts.
     */
    public $TestScripts;

    /**
     * @var array Protocol files.
     */
    public $Protocols;

    /**
     * @var array Request files.
     */
    public $RequestFiles;

    /**
     * @var SLAPolicy SLA policy.
     */
    public $SLAPolicy;

    /**
     * @var array Extension plugin files.
     */
    public $Plugins;

    /**
     * @var DomainNameConfig Domain name resolution configuration.
     */
    public $DomainNameConfig;

    /**
     * @var string Creator name.
     */
    public $Owner;

    /**
     * @param string $Name Scenario Name.
     * @param string $Type Mode type of scenario. Valid values: 'pts-http' represents the simple mode, 'pts-js' represents the script mode, 'pts-jmeter' represents the JMeter mode.
     * @param string $ProjectId Project ID.
     * @param string $Description Scenario description.
     * @param Load $Load Load configuration.
     * @param array $Configs Deprecated.
     * @param array $Datasets Test datasets.
     * @param array $Extensions Deprecated.
     * @param string $SLAId Deprecated.
     * @param string $CronId Cron job ID.
     * @param array $Scripts Deprecated,
     * @param array $TestScripts Test scripts.
     * @param array $Protocols Protocol files.
     * @param array $RequestFiles Request files.
     * @param SLAPolicy $SLAPolicy SLA policy.
     * @param array $Plugins Extension plugin files.
     * @param DomainNameConfig $DomainNameConfig Domain name resolution configuration.
     * @param string $Owner Creator name.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Load",$param) and $param["Load"] !== null) {
            $this->Load = new Load();
            $this->Load->deserialize($param["Load"]);
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = $param["Configs"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new TestData();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("Extensions",$param) and $param["Extensions"] !== null) {
            $this->Extensions = $param["Extensions"];
        }

        if (array_key_exists("SLAId",$param) and $param["SLAId"] !== null) {
            $this->SLAId = $param["SLAId"];
        }

        if (array_key_exists("CronId",$param) and $param["CronId"] !== null) {
            $this->CronId = $param["CronId"];
        }

        if (array_key_exists("Scripts",$param) and $param["Scripts"] !== null) {
            $this->Scripts = $param["Scripts"];
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
