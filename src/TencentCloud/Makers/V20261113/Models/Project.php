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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project. The fields are consistent with the actual return of DescribeProjects.
 *
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method string getName() Obtain <p>Project name.</p>
 * @method void setName(string $Name) Set <p>Project name.</p>
 * @method string getStatus() Obtain <p>Project status. Normal, Ban, Unlink, Process, Pending, Offline</p>
 * @method void setStatus(string $Status) Set <p>Project status. Normal, Ban, Unlink, Process, Pending, Offline</p>
 * @method string getZoneId() Obtain <p>Site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID</p>
 * @method string getArea() Obtain <p>Acceleration region. mainland, overseas, global</p>
 * @method void setArea(string $Area) Set <p>Acceleration region. mainland, overseas, global</p>
 * @method string getProvider() Obtain <p>Code source. Github, Gitee, Coding, Upload, Gitlab, Bitbucket, Cnb</p>
 * @method void setProvider(string $Provider) Set <p>Code source. Github, Gitee, Coding, Upload, Gitlab, Bitbucket, Cnb</p>
 * @method string getChannel() Obtain <p>Create Source. Template, Custom, CLI, Guest</p>
 * @method void setChannel(string $Channel) Set <p>Create Source. Template, Custom, CLI, Guest</p>
 * @method string getPresetDomain() Obtain <p>Preset domain name.</p>
 * @method void setPresetDomain(string $PresetDomain) Set <p>Preset domain name.</p>
 * @method string getPresetDomainStatus() Obtain <p>Preset domain name status</p>
 * @method void setPresetDomainStatus(string $PresetDomainStatus) Set <p>Preset domain name status</p>
 * @method string getRootDir() Obtain <p>Project root directory</p>
 * @method void setRootDir(string $RootDir) Set <p>Project root directory</p>
 * @method string getOutputDir() Obtain <p>Build artifact directory</p>
 * @method void setOutputDir(string $OutputDir) Set <p>Build artifact directory</p>
 * @method string getBuildCmd() Obtain <p>Build command</p>
 * @method void setBuildCmd(string $BuildCmd) Set <p>Build command</p>
 * @method string getInstallCmd() Obtain <p>Installation command</p>
 * @method void setInstallCmd(string $InstallCmd) Set <p>Installation command</p>
 * @method string getFramework() Obtain <p>Framework</p>
 * @method void setFramework(string $Framework) Set <p>Framework</p>
 * @method string getNodejsVersion() Obtain <p>Node.js version</p>
 * @method void setNodejsVersion(string $NodejsVersion) Set <p>Node.js version</p>
 * @method string getRepoUrl() Obtain <p>Repository address</p>
 * @method void setRepoUrl(string $RepoUrl) Set <p>Repository address</p>
 * @method string getRepoOwner() Obtain <p>Repository owner</p>
 * @method void setRepoOwner(string $RepoOwner) Set <p>Repository owner</p>
 * @method string getRepoName() Obtain <p>Repository name</p>
 * @method void setRepoName(string $RepoName) Set <p>Repository name</p>
 * @method string getRepoBranch() Obtain <p>Production branch</p>
 * @method void setRepoBranch(string $RepoBranch) Set <p>Production branch</p>
 * @method array getRepoPreBranches() Obtain <p>Preview Branch</p>
 * @method void setRepoPreBranches(array $RepoPreBranches) Set <p>Preview Branch</p>
 * @method Regions getRegions() Obtain <p>Deployment region</p>
 * @method void setRegions(Regions $Regions) Set <p>Deployment region</p>
 * @method array getEnvVars() Obtain <p>Environment variable.</p>
 * @method void setEnvVars(array $EnvVars) Set <p>Environment variable.</p>
 * @method array getCustomDomains() Obtain <p>Custom domain name</p>
 * @method void setCustomDomains(array $CustomDomains) Set <p>Custom domain name</p>
 * @method ProjectDeployment getDeployment() Obtain <p>Last deployment</p>
 * @method void setDeployment(ProjectDeployment $Deployment) Set <p>Last deployment</p>
 * @method integer getIsAgent() Obtain <p>Whether it is an Agent project. 1: yes, 0: no</p>
 * @method void setIsAgent(integer $IsAgent) Set <p>Whether it is an Agent project. 1: yes, 0: no</p>
 * @method string getAgentFramework() Obtain <p>Agent framework. Non-Agent project is empty</p>
 * @method void setAgentFramework(string $AgentFramework) Set <p>Agent framework. Non-Agent project is empty</p>
 * @method integer getIsTld() Obtain <p>Whether it hits a user-level wildcard domain name. 1: yes, 0: no</p>
 * @method void setIsTld(integer $IsTld) Set <p>Whether it hits a user-level wildcard domain name. 1: yes, 0: no</p>
 * @method string getCreatedOn() Obtain <p>Creation time.</p>
 * @method void setCreatedOn(string $CreatedOn) Set <p>Creation time.</p>
 * @method string getModifiedOn() Obtain <p>Update time.</p>
 * @method void setModifiedOn(string $ModifiedOn) Set <p>Update time.</p>
 */
class Project extends AbstractModel
{
    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Project name.</p>
     */
    public $Name;

    /**
     * @var string <p>Project status. Normal, Ban, Unlink, Process, Pending, Offline</p>
     */
    public $Status;

    /**
     * @var string <p>Site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Acceleration region. mainland, overseas, global</p>
     */
    public $Area;

    /**
     * @var string <p>Code source. Github, Gitee, Coding, Upload, Gitlab, Bitbucket, Cnb</p>
     */
    public $Provider;

    /**
     * @var string <p>Create Source. Template, Custom, CLI, Guest</p>
     */
    public $Channel;

    /**
     * @var string <p>Preset domain name.</p>
     */
    public $PresetDomain;

    /**
     * @var string <p>Preset domain name status</p>
     */
    public $PresetDomainStatus;

    /**
     * @var string <p>Project root directory</p>
     */
    public $RootDir;

    /**
     * @var string <p>Build artifact directory</p>
     */
    public $OutputDir;

    /**
     * @var string <p>Build command</p>
     */
    public $BuildCmd;

    /**
     * @var string <p>Installation command</p>
     */
    public $InstallCmd;

    /**
     * @var string <p>Framework</p>
     */
    public $Framework;

    /**
     * @var string <p>Node.js version</p>
     */
    public $NodejsVersion;

    /**
     * @var string <p>Repository address</p>
     */
    public $RepoUrl;

    /**
     * @var string <p>Repository owner</p>
     */
    public $RepoOwner;

    /**
     * @var string <p>Repository name</p>
     */
    public $RepoName;

    /**
     * @var string <p>Production branch</p>
     */
    public $RepoBranch;

    /**
     * @var array <p>Preview Branch</p>
     */
    public $RepoPreBranches;

    /**
     * @var Regions <p>Deployment region</p>
     */
    public $Regions;

    /**
     * @var array <p>Environment variable.</p>
     */
    public $EnvVars;

    /**
     * @var array <p>Custom domain name</p>
     */
    public $CustomDomains;

    /**
     * @var ProjectDeployment <p>Last deployment</p>
     */
    public $Deployment;

    /**
     * @var integer <p>Whether it is an Agent project. 1: yes, 0: no</p>
     */
    public $IsAgent;

    /**
     * @var string <p>Agent framework. Non-Agent project is empty</p>
     */
    public $AgentFramework;

    /**
     * @var integer <p>Whether it hits a user-level wildcard domain name. 1: yes, 0: no</p>
     */
    public $IsTld;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>Update time.</p>
     */
    public $ModifiedOn;

    /**
     * @param string $ProjectId <p>Project ID</p>
     * @param string $Name <p>Project name.</p>
     * @param string $Status <p>Project status. Normal, Ban, Unlink, Process, Pending, Offline</p>
     * @param string $ZoneId <p>Site ID</p>
     * @param string $Area <p>Acceleration region. mainland, overseas, global</p>
     * @param string $Provider <p>Code source. Github, Gitee, Coding, Upload, Gitlab, Bitbucket, Cnb</p>
     * @param string $Channel <p>Create Source. Template, Custom, CLI, Guest</p>
     * @param string $PresetDomain <p>Preset domain name.</p>
     * @param string $PresetDomainStatus <p>Preset domain name status</p>
     * @param string $RootDir <p>Project root directory</p>
     * @param string $OutputDir <p>Build artifact directory</p>
     * @param string $BuildCmd <p>Build command</p>
     * @param string $InstallCmd <p>Installation command</p>
     * @param string $Framework <p>Framework</p>
     * @param string $NodejsVersion <p>Node.js version</p>
     * @param string $RepoUrl <p>Repository address</p>
     * @param string $RepoOwner <p>Repository owner</p>
     * @param string $RepoName <p>Repository name</p>
     * @param string $RepoBranch <p>Production branch</p>
     * @param array $RepoPreBranches <p>Preview Branch</p>
     * @param Regions $Regions <p>Deployment region</p>
     * @param array $EnvVars <p>Environment variable.</p>
     * @param array $CustomDomains <p>Custom domain name</p>
     * @param ProjectDeployment $Deployment <p>Last deployment</p>
     * @param integer $IsAgent <p>Whether it is an Agent project. 1: yes, 0: no</p>
     * @param string $AgentFramework <p>Agent framework. Non-Agent project is empty</p>
     * @param integer $IsTld <p>Whether it hits a user-level wildcard domain name. 1: yes, 0: no</p>
     * @param string $CreatedOn <p>Creation time.</p>
     * @param string $ModifiedOn <p>Update time.</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("PresetDomain",$param) and $param["PresetDomain"] !== null) {
            $this->PresetDomain = $param["PresetDomain"];
        }

        if (array_key_exists("PresetDomainStatus",$param) and $param["PresetDomainStatus"] !== null) {
            $this->PresetDomainStatus = $param["PresetDomainStatus"];
        }

        if (array_key_exists("RootDir",$param) and $param["RootDir"] !== null) {
            $this->RootDir = $param["RootDir"];
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("BuildCmd",$param) and $param["BuildCmd"] !== null) {
            $this->BuildCmd = $param["BuildCmd"];
        }

        if (array_key_exists("InstallCmd",$param) and $param["InstallCmd"] !== null) {
            $this->InstallCmd = $param["InstallCmd"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("NodejsVersion",$param) and $param["NodejsVersion"] !== null) {
            $this->NodejsVersion = $param["NodejsVersion"];
        }

        if (array_key_exists("RepoUrl",$param) and $param["RepoUrl"] !== null) {
            $this->RepoUrl = $param["RepoUrl"];
        }

        if (array_key_exists("RepoOwner",$param) and $param["RepoOwner"] !== null) {
            $this->RepoOwner = $param["RepoOwner"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("RepoBranch",$param) and $param["RepoBranch"] !== null) {
            $this->RepoBranch = $param["RepoBranch"];
        }

        if (array_key_exists("RepoPreBranches",$param) and $param["RepoPreBranches"] !== null) {
            $this->RepoPreBranches = $param["RepoPreBranches"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = new Regions();
            $this->Regions->deserialize($param["Regions"]);
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new ProjectEnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("CustomDomains",$param) and $param["CustomDomains"] !== null) {
            $this->CustomDomains = [];
            foreach ($param["CustomDomains"] as $key => $value){
                $obj = new CustomDomainItem();
                $obj->deserialize($value);
                array_push($this->CustomDomains, $obj);
            }
        }

        if (array_key_exists("Deployment",$param) and $param["Deployment"] !== null) {
            $this->Deployment = new ProjectDeployment();
            $this->Deployment->deserialize($param["Deployment"]);
        }

        if (array_key_exists("IsAgent",$param) and $param["IsAgent"] !== null) {
            $this->IsAgent = $param["IsAgent"];
        }

        if (array_key_exists("AgentFramework",$param) and $param["AgentFramework"] !== null) {
            $this->AgentFramework = $param["AgentFramework"];
        }

        if (array_key_exists("IsTld",$param) and $param["IsTld"] !== null) {
            $this->IsTld = $param["IsTld"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
