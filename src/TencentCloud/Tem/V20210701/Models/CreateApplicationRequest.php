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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplication request structure.
 *
 * @method string getApplicationName() Obtain Application name
 * @method void setApplicationName(string $ApplicationName) Set Application name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getUseDefaultImageService() Obtain Whether to use the default image service. `1`: yes; `0`: no
 * @method void setUseDefaultImageService(integer $UseDefaultImageService) Set Whether to use the default image service. `1`: yes; `0`: no
 * @method integer getRepoType() Obtain Type of the bound repository. `0`: TCR Personal; `1`: TCR Enterprise
 * @method void setRepoType(integer $RepoType) Set Type of the bound repository. `0`: TCR Personal; `1`: TCR Enterprise
 * @method string getInstanceId() Obtain TCR Enterprise instance ID
 * @method void setInstanceId(string $InstanceId) Set TCR Enterprise instance ID
 * @method string getRepoServer() Obtain Address of the bound image server
 * @method void setRepoServer(string $RepoServer) Set Address of the bound image server
 * @method string getRepoName() Obtain Name of the bound image repository
 * @method void setRepoName(string $RepoName) Set Name of the bound image repository
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method array getSubnetList() Obtain Application subnet
 * @method void setSubnetList(array $SubnetList) Set Application subnet
 * @method string getCodingLanguage() Obtain Programming language 
- JAVA
- OTHER
 * @method void setCodingLanguage(string $CodingLanguage) Set Programming language 
- JAVA
- OTHER
 * @method string getDeployMode() Obtain Deployment mode 
- IMAGE
- JAR
- WAR
 * @method void setDeployMode(string $DeployMode) Set Deployment mode 
- IMAGE
- JAR
- WAR
 * @method integer getEnableTracing() Obtain Whether to enable APM tracing for the Java application. `1`: Enable, `0`: Disable
 * @method void setEnableTracing(integer $EnableTracing) Set Whether to enable APM tracing for the Java application. `1`: Enable, `0`: Disable
 * @method UseDefaultRepoParameters getUseDefaultImageServiceParameters() Obtain Parameters of the default image service
 * @method void setUseDefaultImageServiceParameters(UseDefaultRepoParameters $UseDefaultImageServiceParameters) Set Parameters of the default image service
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string Application name
     */
    public $ApplicationName;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Whether to use the default image service. `1`: yes; `0`: no
     */
    public $UseDefaultImageService;

    /**
     * @var integer Type of the bound repository. `0`: TCR Personal; `1`: TCR Enterprise
     */
    public $RepoType;

    /**
     * @var string TCR Enterprise instance ID
     */
    public $InstanceId;

    /**
     * @var string Address of the bound image server
     */
    public $RepoServer;

    /**
     * @var string Name of the bound image repository
     */
    public $RepoName;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var array Application subnet
     */
    public $SubnetList;

    /**
     * @var string Programming language 
- JAVA
- OTHER
     */
    public $CodingLanguage;

    /**
     * @var string Deployment mode 
- IMAGE
- JAR
- WAR
     */
    public $DeployMode;

    /**
     * @var integer Whether to enable APM tracing for the Java application. `1`: Enable, `0`: Disable
     */
    public $EnableTracing;

    /**
     * @var UseDefaultRepoParameters Parameters of the default image service
     */
    public $UseDefaultImageServiceParameters;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @param string $ApplicationName Application name
     * @param string $Description Description
     * @param integer $UseDefaultImageService Whether to use the default image service. `1`: yes; `0`: no
     * @param integer $RepoType Type of the bound repository. `0`: TCR Personal; `1`: TCR Enterprise
     * @param string $InstanceId TCR Enterprise instance ID
     * @param string $RepoServer Address of the bound image server
     * @param string $RepoName Name of the bound image repository
     * @param integer $SourceChannel Source channel
     * @param array $SubnetList Application subnet
     * @param string $CodingLanguage Programming language 
- JAVA
- OTHER
     * @param string $DeployMode Deployment mode 
- IMAGE
- JAR
- WAR
     * @param integer $EnableTracing Whether to enable APM tracing for the Java application. `1`: Enable, `0`: Disable
     * @param UseDefaultRepoParameters $UseDefaultImageServiceParameters Parameters of the default image service
     * @param array $Tags Tag
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
        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UseDefaultImageService",$param) and $param["UseDefaultImageService"] !== null) {
            $this->UseDefaultImageService = $param["UseDefaultImageService"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RepoServer",$param) and $param["RepoServer"] !== null) {
            $this->RepoServer = $param["RepoServer"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("SubnetList",$param) and $param["SubnetList"] !== null) {
            $this->SubnetList = $param["SubnetList"];
        }

        if (array_key_exists("CodingLanguage",$param) and $param["CodingLanguage"] !== null) {
            $this->CodingLanguage = $param["CodingLanguage"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("UseDefaultImageServiceParameters",$param) and $param["UseDefaultImageServiceParameters"] !== null) {
            $this->UseDefaultImageServiceParameters = new UseDefaultRepoParameters();
            $this->UseDefaultImageServiceParameters->deserialize($param["UseDefaultImageServiceParameters"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
