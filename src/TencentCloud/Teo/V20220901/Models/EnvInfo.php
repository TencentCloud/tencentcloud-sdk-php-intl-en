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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment information.
 *
 * @method string getEnvId() Obtain Environment ID.
 * @method void setEnvId(string $EnvId) Set Environment ID.
 * @method string getEnvType() Obtain Environment type. Valid values: 
<li>production: Production environment.</li><li> staging: Test environment. </li>
 * @method void setEnvType(string $EnvType) Set Environment type. Valid values: 
<li>production: Production environment.</li><li> staging: Test environment. </li>
 * @method string getStatus() Obtain Environment status. Valid values: 
<li>creating: Being created.</li>
<li>running: The environment is stable, with version changes allowed.</li>
<li>version_deploying: The version is currently being deployed, with no more changes allowed. </li>
 * @method void setStatus(string $Status) Set Environment status. Valid values: 
<li>creating: Being created.</li>
<li>running: The environment is stable, with version changes allowed.</li>
<li>version_deploying: The version is currently being deployed, with no more changes allowed. </li>
 * @method array getScope() Obtain Effective scope of the configuration in the current environment. Valid values: 
<li>ALL: It takes effect on the entire network when EnvType is set to production.</li>
<li>It returns the IP address of the test node for host binding during testing when EnvType is set to staging. </li>
 * @method void setScope(array $Scope) Set Effective scope of the configuration in the current environment. Valid values: 
<li>ALL: It takes effect on the entire network when EnvType is set to production.</li>
<li>It returns the IP address of the test node for host binding during testing when EnvType is set to staging. </li>
 * @method array getCurrentConfigGroupVersionInfos() Obtain For the effective versions of each configuration group in the current environment, there are two possible scenarios based on the value of Status: 
<li>When Status is set to version_deploying, the returned value of this field represents the previously effective version. In other words, during the deployment of the new version, the effective version is the one that was in effect before any changes were made.</li>
<li>When Status is set to running, the value returned by this field is the currently effective version. </li>
 * @method void setCurrentConfigGroupVersionInfos(array $CurrentConfigGroupVersionInfos) Set For the effective versions of each configuration group in the current environment, there are two possible scenarios based on the value of Status: 
<li>When Status is set to version_deploying, the returned value of this field represents the previously effective version. In other words, during the deployment of the new version, the effective version is the one that was in effect before any changes were made.</li>
<li>When Status is set to running, the value returned by this field is the currently effective version. </li>
 * @method string getCreateTime() Obtain Creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 * @method void setCreateTime(string $CreateTime) Set Creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 * @method string getUpdateTime() Obtain Update time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 * @method void setUpdateTime(string $UpdateTime) Set Update time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string Environment ID.
     */
    public $EnvId;

    /**
     * @var string Environment type. Valid values: 
<li>production: Production environment.</li><li> staging: Test environment. </li>
     */
    public $EnvType;

    /**
     * @var string Environment status. Valid values: 
<li>creating: Being created.</li>
<li>running: The environment is stable, with version changes allowed.</li>
<li>version_deploying: The version is currently being deployed, with no more changes allowed. </li>
     */
    public $Status;

    /**
     * @var array Effective scope of the configuration in the current environment. Valid values: 
<li>ALL: It takes effect on the entire network when EnvType is set to production.</li>
<li>It returns the IP address of the test node for host binding during testing when EnvType is set to staging. </li>
     */
    public $Scope;

    /**
     * @var array For the effective versions of each configuration group in the current environment, there are two possible scenarios based on the value of Status: 
<li>When Status is set to version_deploying, the returned value of this field represents the previously effective version. In other words, during the deployment of the new version, the effective version is the one that was in effect before any changes were made.</li>
<li>When Status is set to running, the value returned by this field is the currently effective version. </li>
     */
    public $CurrentConfigGroupVersionInfos;

    /**
     * @var string Creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
     */
    public $CreateTime;

    /**
     * @var string Update time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
     */
    public $UpdateTime;

    /**
     * @param string $EnvId Environment ID.
     * @param string $EnvType Environment type. Valid values: 
<li>production: Production environment.</li><li> staging: Test environment. </li>
     * @param string $Status Environment status. Valid values: 
<li>creating: Being created.</li>
<li>running: The environment is stable, with version changes allowed.</li>
<li>version_deploying: The version is currently being deployed, with no more changes allowed. </li>
     * @param array $Scope Effective scope of the configuration in the current environment. Valid values: 
<li>ALL: It takes effect on the entire network when EnvType is set to production.</li>
<li>It returns the IP address of the test node for host binding during testing when EnvType is set to staging. </li>
     * @param array $CurrentConfigGroupVersionInfos For the effective versions of each configuration group in the current environment, there are two possible scenarios based on the value of Status: 
<li>When Status is set to version_deploying, the returned value of this field represents the previously effective version. In other words, during the deployment of the new version, the effective version is the one that was in effect before any changes were made.</li>
<li>When Status is set to running, the value returned by this field is the currently effective version. </li>
     * @param string $CreateTime Creation time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
     * @param string $UpdateTime Update time. The time format follows the ISO 8601 standard and is represented in Coordinated Universal Time (UTC).
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("CurrentConfigGroupVersionInfos",$param) and $param["CurrentConfigGroupVersionInfos"] !== null) {
            $this->CurrentConfigGroupVersionInfos = [];
            foreach ($param["CurrentConfigGroupVersionInfos"] as $key => $value){
                $obj = new ConfigGroupVersionInfo();
                $obj->deserialize($value);
                array_push($this->CurrentConfigGroupVersionInfos, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
