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
 * ModifyProject request structure.
 *
 * @method string getZoneId() Obtain <p>Makers site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Makers site ID</p>
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method string getName() Obtain <p>Project name.</p>
 * @method void setName(string $Name) Set <p>Project name.</p>
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
 * @method string getCoverUrl() Obtain <p>Address of a cover</p>
 * @method void setCoverUrl(string $CoverUrl) Set <p>Address of a cover</p>
 * @method string getNodeJsVersion() Obtain <p>Node.js version</p>
 * @method void setNodeJsVersion(string $NodeJsVersion) Set <p>Node.js version</p>
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string <p>Makers site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Project name.</p>
     */
    public $Name;

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
     * @var string <p>Address of a cover</p>
     */
    public $CoverUrl;

    /**
     * @var string <p>Node.js version</p>
     */
    public $NodeJsVersion;

    /**
     * @param string $ZoneId <p>Makers site ID</p>
     * @param string $ProjectId <p>Project ID</p>
     * @param string $Name <p>Project name.</p>
     * @param string $RootDir <p>Project root directory</p>
     * @param string $OutputDir <p>Build artifact directory</p>
     * @param string $BuildCmd <p>Build command</p>
     * @param string $InstallCmd <p>Installation command</p>
     * @param string $Framework <p>Framework</p>
     * @param string $CoverUrl <p>Address of a cover</p>
     * @param string $NodeJsVersion <p>Node.js version</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("NodeJsVersion",$param) and $param["NodeJsVersion"] !== null) {
            $this->NodeJsVersion = $param["NodeJsVersion"];
        }
    }
}
