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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceV2 request structure.
 *
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getUseDefaultImageService() Obtain Whether to use the default image service. 1: yes; 0: no
 * @method void setUseDefaultImageService(integer $UseDefaultImageService) Set Whether to use the default image service. 1: yes; 0: no
 * @method integer getRepoType() Obtain Type of the bound repository. 0: Personal Edition; 1: Enterprise Edition
 * @method void setRepoType(integer $RepoType) Set Type of the bound repository. 0: Personal Edition; 1: Enterprise Edition
 * @method string getInstanceId() Obtain Instance ID of Enterprise Edition image service
 * @method void setInstanceId(string $InstanceId) Set Instance ID of Enterprise Edition image service
 * @method string getRepoServer() Obtain Address of the bound image server
 * @method void setRepoServer(string $RepoServer) Set Address of the bound image server
 * @method string getRepoName() Obtain Name of the bound image repository
 * @method void setRepoName(string $RepoName) Set Name of the bound image repository
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method array getSubnetList() Obtain Service subnet
 * @method void setSubnetList(array $SubnetList) Set Service subnet
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
 */
class CreateServiceV2Request extends AbstractModel
{
    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Whether to use the default image service. 1: yes; 0: no
     */
    public $UseDefaultImageService;

    /**
     * @var integer Type of the bound repository. 0: Personal Edition; 1: Enterprise Edition
     */
    public $RepoType;

    /**
     * @var string Instance ID of Enterprise Edition image service
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
     * @var array Service subnet
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
     * @param string $ServiceName Service name
     * @param string $Description Description
     * @param integer $UseDefaultImageService Whether to use the default image service. 1: yes; 0: no
     * @param integer $RepoType Type of the bound repository. 0: Personal Edition; 1: Enterprise Edition
     * @param string $InstanceId Instance ID of Enterprise Edition image service
     * @param string $RepoServer Address of the bound image server
     * @param string $RepoName Name of the bound image repository
     * @param integer $SourceChannel Source channel
     * @param array $SubnetList Service subnet
     * @param string $CodingLanguage Programming language 
- JAVA
- OTHER
     * @param string $DeployMode Deployment mode 
- IMAGE
- JAR
- WAR
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
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
    }
}
