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
 * CreateProject request structure.
 *
 * @method string getZoneId() Obtain <p>Makers site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Makers site ID</p>
 * @method string getName() Obtain <p>Project name.</p>
 * @method void setName(string $Name) Set <p>Project name.</p>
 * @method string getChannel() Obtain <p>Create Source. Template, Custom, CLI, Guest</p>
 * @method void setChannel(string $Channel) Set <p>Create Source. Template, Custom, CLI, Guest</p>
 * @method string getProvider() Obtain <p>Code source. Upload, Github, Gitee, Gitlab, Coding</p>
 * @method void setProvider(string $Provider) Set <p>Code source. Upload, Github, Gitee, Gitlab, Coding</p>
 * @method string getSource() Obtain <p>Accessing party identifier.</p>
 * @method void setSource(string $Source) Set <p>Accessing party identifier.</p>
 * @method string getArea() Obtain <p>Acceleration region. mainland, overseas, global</p>
 * @method void setArea(string $Area) Set <p>Acceleration region. mainland, overseas, global</p>
 * @method string getNodeJsVersion() Obtain <p>Node.js version. 14.21.3, 16.20.2, 18.20.4, 20.18.0, 22.11.0, 22.17.1, 22.21.1, 24.5.0, 24.11.0, 24.18.0</p>
 * @method void setNodeJsVersion(string $NodeJsVersion) Set <p>Node.js version. 14.21.3, 16.20.2, 18.20.4, 20.18.0, 22.11.0, 22.17.1, 22.21.1, 24.5.0, 24.11.0, 24.18.0</p>
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
 * @method string getTemplateId() Obtain <p>Template ID</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Template ID</p>
 * @method string getRepoUrl() Obtain <p>Repository address</p>
 * @method void setRepoUrl(string $RepoUrl) Set <p>Repository address</p>
 * @method string getRepoOwner() Obtain <p>Repository owner</p>
 * @method void setRepoOwner(string $RepoOwner) Set <p>Repository owner</p>
 * @method string getRepoName() Obtain <p>Repository name</p>
 * @method void setRepoName(string $RepoName) Set <p>Repository name</p>
 * @method string getRepoBranch() Obtain <p>Production branch</p>
 * @method void setRepoBranch(string $RepoBranch) Set <p>Production branch</p>
 * @method array getEnvVars() Obtain <p>Initial environment variable.</p>
 * @method void setEnvVars(array $EnvVars) Set <p>Initial environment variable.</p>
 * @method string getNamespace() Obtain <p>Coding namespace. Used when the Provider is Coding.</p>
 * @method void setNamespace(string $Namespace) Set <p>Coding namespace. Used when the Provider is Coding.</p>
 * @method integer getCodingProjectId() Obtain <p>Coding project ID. Used when the Provider is Coding</p>
 * @method void setCodingProjectId(integer $CodingProjectId) Set <p>Coding project ID. Used when the Provider is Coding</p>
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string <p>Makers site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Project name.</p>
     */
    public $Name;

    /**
     * @var string <p>Create Source. Template, Custom, CLI, Guest</p>
     */
    public $Channel;

    /**
     * @var string <p>Code source. Upload, Github, Gitee, Gitlab, Coding</p>
     */
    public $Provider;

    /**
     * @var string <p>Accessing party identifier.</p>
     */
    public $Source;

    /**
     * @var string <p>Acceleration region. mainland, overseas, global</p>
     */
    public $Area;

    /**
     * @var string <p>Node.js version. 14.21.3, 16.20.2, 18.20.4, 20.18.0, 22.11.0, 22.17.1, 22.21.1, 24.5.0, 24.11.0, 24.18.0</p>
     */
    public $NodeJsVersion;

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
     * @var string <p>Template ID</p>
     */
    public $TemplateId;

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
     * @var array <p>Initial environment variable.</p>
     */
    public $EnvVars;

    /**
     * @var string <p>Coding namespace. Used when the Provider is Coding.</p>
     */
    public $Namespace;

    /**
     * @var integer <p>Coding project ID. Used when the Provider is Coding</p>
     */
    public $CodingProjectId;

    /**
     * @param string $ZoneId <p>Makers site ID</p>
     * @param string $Name <p>Project name.</p>
     * @param string $Channel <p>Create Source. Template, Custom, CLI, Guest</p>
     * @param string $Provider <p>Code source. Upload, Github, Gitee, Gitlab, Coding</p>
     * @param string $Source <p>Accessing party identifier.</p>
     * @param string $Area <p>Acceleration region. mainland, overseas, global</p>
     * @param string $NodeJsVersion <p>Node.js version. 14.21.3, 16.20.2, 18.20.4, 20.18.0, 22.11.0, 22.17.1, 22.21.1, 24.5.0, 24.11.0, 24.18.0</p>
     * @param string $RootDir <p>Project root directory</p>
     * @param string $OutputDir <p>Build artifact directory</p>
     * @param string $BuildCmd <p>Build command</p>
     * @param string $InstallCmd <p>Installation command</p>
     * @param string $Framework <p>Framework</p>
     * @param string $TemplateId <p>Template ID</p>
     * @param string $RepoUrl <p>Repository address</p>
     * @param string $RepoOwner <p>Repository owner</p>
     * @param string $RepoName <p>Repository name</p>
     * @param string $RepoBranch <p>Production branch</p>
     * @param array $EnvVars <p>Initial environment variable.</p>
     * @param string $Namespace <p>Coding namespace. Used when the Provider is Coding.</p>
     * @param integer $CodingProjectId <p>Coding project ID. Used when the Provider is Coding</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("NodeJsVersion",$param) and $param["NodeJsVersion"] !== null) {
            $this->NodeJsVersion = $param["NodeJsVersion"];
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
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

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CodingProjectId",$param) and $param["CodingProjectId"] !== null) {
            $this->CodingProjectId = $param["CodingProjectId"];
        }
    }
}
