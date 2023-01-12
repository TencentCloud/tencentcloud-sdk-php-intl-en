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
 * Application details
 *
 * @method string getApplicationId() Obtain Version ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set Version ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEnvironmentId() Obtain ID of the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set ID of the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateDate() Obtain Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateDate(string $CreateDate) Set Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getModifyDate() Obtain Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setModifyDate(string $ModifyDate) Set Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getModifier() Obtain Modifier
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setModifier(string $Modifier) Set Modifier
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreator() Obtain Creator account
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreator(string $Creator) Set Creator account
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getRepoType() Obtain TCR Individual or TCR Enterprise
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRepoType(integer $RepoType) Set TCR Individual or TCR Enterprise
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain ID of the TCR Enterprise instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set ID of the TCR Enterprise instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRepoName() Obtain Name of the TCR instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRepoName(string $RepoName) Set Name of the TCR instance
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCodingLanguage() Obtain Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCodingLanguage(string $CodingLanguage) Set Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeployMode() Obtain Deployment mode
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeployMode(string $DeployMode) Set Deployment mode
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEnvironmentName() Obtain Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getActiveVersions() Obtain The instance information where the application is running
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setActiveVersions(array $ActiveVersions) Set The instance information where the application is running
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEnableTracing() Obtain Whether to enable link tracing
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnableTracing(integer $EnableTracing) Set Whether to enable link tracing
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method boolean getHasAuthority() Obtain Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasAuthority(boolean $HasAuthority) Set Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TemService extends AbstractModel
{
    /**
     * @var string Version ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Description
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string ID of the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var string Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateDate;

    /**
     * @var string Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ModifyDate;

    /**
     * @var string Modifier
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Modifier;

    /**
     * @var string Creator account
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Creator;

    /**
     * @var integer TCR Individual or TCR Enterprise
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RepoType;

    /**
     * @var string ID of the TCR Enterprise instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Name of the TCR instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RepoName;

    /**
     * @var string Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CodingLanguage;

    /**
     * @var string Deployment mode
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeployMode;

    /**
     * @var string Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentName;

    /**
     * @var array The instance information where the application is running
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ActiveVersions;

    /**
     * @var integer Whether to enable link tracing
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnableTracing;

    /**
     * @var array Tag
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var boolean Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasAuthority;

    /**
     * @param string $ApplicationId Version ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EnvironmentId ID of the environment
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateDate Creation time.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ModifyDate Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Modifier Modifier
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Creator Creator account
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $RepoType TCR Individual or TCR Enterprise
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $InstanceId ID of the TCR Enterprise instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RepoName Name of the TCR instance
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CodingLanguage Programming Language
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeployMode Deployment mode
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EnvironmentName Environment name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ActiveVersions The instance information where the application is running
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EnableTracing Whether to enable link tracing
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return `null`, indicating that no valid value was found.
     * @param boolean $HasAuthority Whether it’s authorized to access the resource
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("CodingLanguage",$param) and $param["CodingLanguage"] !== null) {
            $this->CodingLanguage = $param["CodingLanguage"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ActiveVersions",$param) and $param["ActiveVersions"] !== null) {
            $this->ActiveVersions = [];
            foreach ($param["ActiveVersions"] as $key => $value){
                $obj = new ServiceVersionBrief();
                $obj->deserialize($value);
                array_push($this->ActiveVersions, $obj);
            }
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HasAuthority",$param) and $param["HasAuthority"] !== null) {
            $this->HasAuthority = $param["HasAuthority"];
        }
    }
}
