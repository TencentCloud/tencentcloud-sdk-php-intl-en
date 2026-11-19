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
 * Last deployment of the project
 *
 * @method string getDeploymentId() Obtain <p>Deployment ID</p>
 * @method void setDeploymentId(string $DeploymentId) Set <p>Deployment ID</p>
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method string getStatus() Obtain <p>Deployment state</p>
 * @method void setStatus(string $Status) Set <p>Deployment state</p>
 * @method string getBuildCost() Obtain <p>Build duration, in milliseconds.</p>
 * @method void setBuildCost(string $BuildCost) Set <p>Build duration, in milliseconds.</p>
 * @method string getViaMeta() Obtain <p>Trigger source.</p>
 * @method void setViaMeta(string $ViaMeta) Set <p>Trigger source.</p>
 * @method string getEnv() Obtain <p>Environment slug</p>
 * @method void setEnv(string $Env) Set <p>Environment slug</p>
 * @method string getRepoBranch() Obtain <p>Branch</p>
 * @method void setRepoBranch(string $RepoBranch) Set <p>Branch</p>
 * @method string getRepoCommitHash() Obtain <p>Submit hash</p>
 * @method void setRepoCommitHash(string $RepoCommitHash) Set <p>Submit hash</p>
 * @method string getRepoCommitMsg() Obtain <p>Commit description</p>
 * @method void setRepoCommitMsg(string $RepoCommitMsg) Set <p>Commit description</p>
 * @method string getPreviewUrl() Obtain <p>Preview address</p>
 * @method void setPreviewUrl(string $PreviewUrl) Set <p>Preview address</p>
 * @method string getCoverUrl() Obtain <p>Address of a cover</p>
 * @method void setCoverUrl(string $CoverUrl) Set <p>Address of a cover</p>
 * @method string getCreatedOn() Obtain <p>Creation time.</p>
 * @method void setCreatedOn(string $CreatedOn) Set <p>Creation time.</p>
 * @method string getModifiedOn() Obtain <p>Update time.</p>
 * @method void setModifiedOn(string $ModifiedOn) Set <p>Update time.</p>
 * @method string getDplRepoUrl() Obtain <p>Repository address used for this deployment</p>
 * @method void setDplRepoUrl(string $DplRepoUrl) Set <p>Repository address used for this deployment</p>
 */
class ProjectDeployment extends AbstractModel
{
    /**
     * @var string <p>Deployment ID</p>
     */
    public $DeploymentId;

    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Deployment state</p>
     */
    public $Status;

    /**
     * @var string <p>Build duration, in milliseconds.</p>
     */
    public $BuildCost;

    /**
     * @var string <p>Trigger source.</p>
     */
    public $ViaMeta;

    /**
     * @var string <p>Environment slug</p>
     */
    public $Env;

    /**
     * @var string <p>Branch</p>
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
     * @var string <p>Preview address</p>
     */
    public $PreviewUrl;

    /**
     * @var string <p>Address of a cover</p>
     */
    public $CoverUrl;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>Update time.</p>
     */
    public $ModifiedOn;

    /**
     * @var string <p>Repository address used for this deployment</p>
     */
    public $DplRepoUrl;

    /**
     * @param string $DeploymentId <p>Deployment ID</p>
     * @param string $ProjectId <p>Project ID</p>
     * @param string $Status <p>Deployment state</p>
     * @param string $BuildCost <p>Build duration, in milliseconds.</p>
     * @param string $ViaMeta <p>Trigger source.</p>
     * @param string $Env <p>Environment slug</p>
     * @param string $RepoBranch <p>Branch</p>
     * @param string $RepoCommitHash <p>Submit hash</p>
     * @param string $RepoCommitMsg <p>Commit description</p>
     * @param string $PreviewUrl <p>Preview address</p>
     * @param string $CoverUrl <p>Address of a cover</p>
     * @param string $CreatedOn <p>Creation time.</p>
     * @param string $ModifiedOn <p>Update time.</p>
     * @param string $DplRepoUrl <p>Repository address used for this deployment</p>
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BuildCost",$param) and $param["BuildCost"] !== null) {
            $this->BuildCost = $param["BuildCost"];
        }

        if (array_key_exists("ViaMeta",$param) and $param["ViaMeta"] !== null) {
            $this->ViaMeta = $param["ViaMeta"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
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

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("DplRepoUrl",$param) and $param["DplRepoUrl"] !== null) {
            $this->DplRepoUrl = $param["DplRepoUrl"];
        }
    }
}
