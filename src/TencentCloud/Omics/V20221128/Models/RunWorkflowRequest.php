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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunWorkflow request structure.
 *
 * @method string getName() Obtain Run group name
 * @method void setName(string $Name) Set Run group name
 * @method string getEnvironmentId() Obtain Delivery environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Delivery environment ID
 * @method GitInfo getGitSource() Obtain Workflow Git repository information
 * @method void setGitSource(GitInfo $GitSource) Set Workflow Git repository information
 * @method string getType() Obtain Workflow type

Supported type:
- NEXTFLOW
 * @method void setType(string $Type) Set Workflow type

Supported type:
- NEXTFLOW
 * @method NFOption getNFOption() Obtain Nextflow option
 * @method void setNFOption(NFOption $NFOption) Set Nextflow option
 * @method string getProjectId() Obtain Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method void setProjectId(string $ProjectId) Set Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method string getDescription() Obtain Run group description
 * @method void setDescription(string $Description) Set Run group description
 * @method string getInputBase64() Obtain Run input JSON. Base64 encoding is required.
(Either InputBase64 or InputCosUri must be selected.)
 * @method void setInputBase64(string $InputBase64) Set Run input JSON. Base64 encoding is required.
(Either InputBase64 or InputCosUri must be selected.)
 * @method string getInputCosUri() Obtain Run input COS path
(Either InputBase64 or InputCosUri must be selected.)
 * @method void setInputCosUri(string $InputCosUri) Set Run input COS path
(Either InputBase64 or InputCosUri must be selected.)
 * @method integer getCacheClearDelay() Obtain Run cache cleanup time (hours). Leaving it blank or entering 0 indicates no cleanup.
 * @method void setCacheClearDelay(integer $CacheClearDelay) Set Run cache cleanup time (hours). Leaving it blank or entering 0 indicates no cleanup.
 * @method string getWorkDir() Obtain Working directory. You can fill in the absolute path in the specified volume. If you leave it blank, the default path in the default volume will be used. Currently, only Nextflow is supported.
 * @method void setWorkDir(string $WorkDir) Set Working directory. You can fill in the absolute path in the specified volume. If you leave it blank, the default path in the default volume will be used. Currently, only Nextflow is supported.
 * @method array getVolumeIds() Obtain Volume ID. If you leave it blank, the default volume will be used. Currently, only Nextflow is supported.
 * @method void setVolumeIds(array $VolumeIds) Set Volume ID. If you leave it blank, the default volume will be used. Currently, only Nextflow is supported.
 */
class RunWorkflowRequest extends AbstractModel
{
    /**
     * @var string Run group name
     */
    public $Name;

    /**
     * @var string Delivery environment ID
     */
    public $EnvironmentId;

    /**
     * @var GitInfo Workflow Git repository information
     */
    public $GitSource;

    /**
     * @var string Workflow type

Supported type:
- NEXTFLOW
     */
    public $Type;

    /**
     * @var NFOption Nextflow option
     */
    public $NFOption;

    /**
     * @var string Project ID
(If you leave it blank, the default item in the specified region will be used.)
     */
    public $ProjectId;

    /**
     * @var string Run group description
     */
    public $Description;

    /**
     * @var string Run input JSON. Base64 encoding is required.
(Either InputBase64 or InputCosUri must be selected.)
     */
    public $InputBase64;

    /**
     * @var string Run input COS path
(Either InputBase64 or InputCosUri must be selected.)
     */
    public $InputCosUri;

    /**
     * @var integer Run cache cleanup time (hours). Leaving it blank or entering 0 indicates no cleanup.
     */
    public $CacheClearDelay;

    /**
     * @var string Working directory. You can fill in the absolute path in the specified volume. If you leave it blank, the default path in the default volume will be used. Currently, only Nextflow is supported.
     */
    public $WorkDir;

    /**
     * @var array Volume ID. If you leave it blank, the default volume will be used. Currently, only Nextflow is supported.
     */
    public $VolumeIds;

    /**
     * @param string $Name Run group name
     * @param string $EnvironmentId Delivery environment ID
     * @param GitInfo $GitSource Workflow Git repository information
     * @param string $Type Workflow type

Supported type:
- NEXTFLOW
     * @param NFOption $NFOption Nextflow option
     * @param string $ProjectId Project ID
(If you leave it blank, the default item in the specified region will be used.)
     * @param string $Description Run group description
     * @param string $InputBase64 Run input JSON. Base64 encoding is required.
(Either InputBase64 or InputCosUri must be selected.)
     * @param string $InputCosUri Run input COS path
(Either InputBase64 or InputCosUri must be selected.)
     * @param integer $CacheClearDelay Run cache cleanup time (hours). Leaving it blank or entering 0 indicates no cleanup.
     * @param string $WorkDir Working directory. You can fill in the absolute path in the specified volume. If you leave it blank, the default path in the default volume will be used. Currently, only Nextflow is supported.
     * @param array $VolumeIds Volume ID. If you leave it blank, the default volume will be used. Currently, only Nextflow is supported.
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

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("GitSource",$param) and $param["GitSource"] !== null) {
            $this->GitSource = new GitInfo();
            $this->GitSource->deserialize($param["GitSource"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NFOption",$param) and $param["NFOption"] !== null) {
            $this->NFOption = new NFOption();
            $this->NFOption->deserialize($param["NFOption"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputBase64",$param) and $param["InputBase64"] !== null) {
            $this->InputBase64 = $param["InputBase64"];
        }

        if (array_key_exists("InputCosUri",$param) and $param["InputCosUri"] !== null) {
            $this->InputCosUri = $param["InputCosUri"];
        }

        if (array_key_exists("CacheClearDelay",$param) and $param["CacheClearDelay"] !== null) {
            $this->CacheClearDelay = $param["CacheClearDelay"];
        }

        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }

        if (array_key_exists("VolumeIds",$param) and $param["VolumeIds"] !== null) {
            $this->VolumeIds = $param["VolumeIds"];
        }
    }
}
