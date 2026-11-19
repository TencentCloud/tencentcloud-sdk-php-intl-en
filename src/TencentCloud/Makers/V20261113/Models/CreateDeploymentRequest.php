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
 * CreateDeployment request structure.
 *
 * @method string getZoneId() Obtain <p>Makers site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Makers site ID</p>
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method string getViaMeta() Obtain <p>Trigger source. Github, ReDeploy, Api, Webhook, Upload, Coding, Gitee, Gitlab</p>
 * @method void setViaMeta(string $ViaMeta) Set <p>Trigger source. Github, ReDeploy, Api, Webhook, Upload, Coding, Gitee, Gitlab</p>
 * @method string getEnv() Obtain <p>Environment slug. Production, Preview, or custom environment</p>
 * @method void setEnv(string $Env) Set <p>Environment slug. Production, Preview, or custom environment</p>
 * @method string getProvider() Obtain <p>Code source. For upload artifact, pass Upload.</p>
 * @method void setProvider(string $Provider) Set <p>Code source. For upload artifact, pass Upload.</p>
 * @method string getDistType() Obtain <p>Artifact type. Zip or Folder</p>
 * @method void setDistType(string $DistType) Set <p>Artifact type. Zip or Folder</p>
 * @method string getTempBucketPath() Obtain <p>Object path of the uploaded artifact in the temporary bucket</p>
 * @method void setTempBucketPath(string $TempBucketPath) Set <p>Object path of the uploaded artifact in the temporary bucket</p>
 * @method string getRepoBranch() Obtain <p>Build branch</p>
 * @method void setRepoBranch(string $RepoBranch) Set <p>Build branch</p>
 * @method string getRepoCommitHash() Obtain <p>Submit hash</p>
 * @method void setRepoCommitHash(string $RepoCommitHash) Set <p>Submit hash</p>
 * @method string getRepoCommitMsg() Obtain <p>Commit description</p>
 * @method void setRepoCommitMsg(string $RepoCommitMsg) Set <p>Commit description</p>
 * @method string getBuildFrom() Obtain <p>Build source</p>
 * @method void setBuildFrom(string $BuildFrom) Set <p>Build source</p>
 * @method string getTemplateId() Obtain <p>Template ID</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Template ID</p>
 * @method string getCiSpec() Obtain <p>Build specification. The current server still reads from edgeone.json. This field is reserved for now.</p>
 * @method void setCiSpec(string $CiSpec) Set <p>Build specification. The current server still reads from edgeone.json. This field is reserved for now.</p>
 */
class CreateDeploymentRequest extends AbstractModel
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
     * @var string <p>Trigger source. Github, ReDeploy, Api, Webhook, Upload, Coding, Gitee, Gitlab</p>
     */
    public $ViaMeta;

    /**
     * @var string <p>Environment slug. Production, Preview, or custom environment</p>
     */
    public $Env;

    /**
     * @var string <p>Code source. For upload artifact, pass Upload.</p>
     */
    public $Provider;

    /**
     * @var string <p>Artifact type. Zip or Folder</p>
     */
    public $DistType;

    /**
     * @var string <p>Object path of the uploaded artifact in the temporary bucket</p>
     */
    public $TempBucketPath;

    /**
     * @var string <p>Build branch</p>
     */
    public $RepoBranch;

    /**
     * @var string <p>Submit hash</p>
     */
    public $RepoCommitHash;

    /**
     * @var string <p>Commit description</p>
     */
    public $RepoCommitMsg;

    /**
     * @var string <p>Build source</p>
     */
    public $BuildFrom;

    /**
     * @var string <p>Template ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Build specification. The current server still reads from edgeone.json. This field is reserved for now.</p>
     */
    public $CiSpec;

    /**
     * @param string $ZoneId <p>Makers site ID</p>
     * @param string $ProjectId <p>Project ID</p>
     * @param string $ViaMeta <p>Trigger source. Github, ReDeploy, Api, Webhook, Upload, Coding, Gitee, Gitlab</p>
     * @param string $Env <p>Environment slug. Production, Preview, or custom environment</p>
     * @param string $Provider <p>Code source. For upload artifact, pass Upload.</p>
     * @param string $DistType <p>Artifact type. Zip or Folder</p>
     * @param string $TempBucketPath <p>Object path of the uploaded artifact in the temporary bucket</p>
     * @param string $RepoBranch <p>Build branch</p>
     * @param string $RepoCommitHash <p>Submit hash</p>
     * @param string $RepoCommitMsg <p>Commit description</p>
     * @param string $BuildFrom <p>Build source</p>
     * @param string $TemplateId <p>Template ID</p>
     * @param string $CiSpec <p>Build specification. The current server still reads from edgeone.json. This field is reserved for now.</p>
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

        if (array_key_exists("ViaMeta",$param) and $param["ViaMeta"] !== null) {
            $this->ViaMeta = $param["ViaMeta"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("DistType",$param) and $param["DistType"] !== null) {
            $this->DistType = $param["DistType"];
        }

        if (array_key_exists("TempBucketPath",$param) and $param["TempBucketPath"] !== null) {
            $this->TempBucketPath = $param["TempBucketPath"];
        }

        if (array_key_exists("RepoBranch",$param) and $param["RepoBranch"] !== null) {
            $this->RepoBranch = $param["RepoBranch"];
        }

        if (array_key_exists("RepoCommitHash",$param) and $param["RepoCommitHash"] !== null) {
            $this->RepoCommitHash = $param["RepoCommitHash"];
        }

        if (array_key_exists("RepoCommitMsg",$param) and $param["RepoCommitMsg"] !== null) {
            $this->RepoCommitMsg = $param["RepoCommitMsg"];
        }

        if (array_key_exists("BuildFrom",$param) and $param["BuildFrom"] !== null) {
            $this->BuildFrom = $param["BuildFrom"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("CiSpec",$param) and $param["CiSpec"] !== null) {
            $this->CiSpec = $param["CiSpec"];
        }
    }
}
