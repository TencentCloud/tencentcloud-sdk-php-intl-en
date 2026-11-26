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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment information.
 *
 * @method string getEnvId() Obtain Environment ID.
 * @method void setEnvId(string $EnvId) Set Environment ID.
 * @method string getEnvType() Obtain Environment type. Valid values:
<li>production: production environment;</li><li>staging: testing environment.</li>
 * @method void setEnvType(string $EnvType) Set Environment type. Valid values:
<li>production: production environment;</li><li>staging: testing environment.</li>
 * @method string getStatus() Obtain Environment status. Valid values:
<li>creating: under creation;</li>
<li>running: running steadily. Version change can be performed;</li>
<li>version_deploying: Version deployment in progress, cannot proceed with new changes.</li>
 * @method void setStatus(string $Status) Set Environment status. Valid values:
<li>creating: under creation;</li>
<li>running: running steadily. Version change can be performed;</li>
<li>version_deploying: Version deployment in progress, cannot proceed with new changes.</li>
 * @method array getScope() Obtain Configuration effective range in the current environment:
<li>When the value of EnvType is production, the value of this parameter is ["ALL"], which means it takes effect globally;</li>
<li>When the value of EnvType is staging, the test node IP will be returned, which can be used to bind a host for testing.</li>
 * @method void setScope(array $Scope) Set Configuration effective range in the current environment:
<li>When the value of EnvType is production, the value of this parameter is ["ALL"], which means it takes effect globally;</li>
<li>When the value of EnvType is staging, the test node IP will be returned, which can be used to bind a host for testing.</li>
 * @method array getCurrentConfigGroupVersionInfos() Obtain Versions that actually take effect for each configuration group in the current environment. According to the value of Status, there are the following two scenarios:
<li>When the value of Status is version_deploying, the value returned by this field is the version effective before the change action is executed. That is, during the new version deployment, the version actually effective is the version prior to the execution of the change action;</li>
<li>When the value of Status is running, the returned value of this field is the currently effective version.</li>
 * @method void setCurrentConfigGroupVersionInfos(array $CurrentConfigGroupVersionInfos) Set Versions that actually take effect for each configuration group in the current environment. According to the value of Status, there are the following two scenarios:
<li>When the value of Status is version_deploying, the value returned by this field is the version effective before the change action is executed. That is, during the new version deployment, the version actually effective is the version prior to the execution of the change action;</li>
<li>When the value of Status is running, the returned value of this field is the currently effective version.</li>
 * @method string getCreateTime() Obtain Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setCreateTime(string $CreateTime) Set Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method string getUpdateTime() Obtain Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 * @method void setUpdateTime(string $UpdateTime) Set Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string Environment ID.
     */
    public $EnvId;

    /**
     * @var string Environment type. Valid values:
<li>production: production environment;</li><li>staging: testing environment.</li>
     */
    public $EnvType;

    /**
     * @var string Environment status. Valid values:
<li>creating: under creation;</li>
<li>running: running steadily. Version change can be performed;</li>
<li>version_deploying: Version deployment in progress, cannot proceed with new changes.</li>
     */
    public $Status;

    /**
     * @var array Configuration effective range in the current environment:
<li>When the value of EnvType is production, the value of this parameter is ["ALL"], which means it takes effect globally;</li>
<li>When the value of EnvType is staging, the test node IP will be returned, which can be used to bind a host for testing.</li>
     */
    public $Scope;

    /**
     * @var array Versions that actually take effect for each configuration group in the current environment. According to the value of Status, there are the following two scenarios:
<li>When the value of Status is version_deploying, the value returned by this field is the version effective before the change action is executed. That is, during the new version deployment, the version actually effective is the version prior to the execution of the change action;</li>
<li>When the value of Status is running, the returned value of this field is the currently effective version.</li>
     */
    public $CurrentConfigGroupVersionInfos;

    /**
     * @var string Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $CreateTime;

    /**
     * @var string Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     */
    public $UpdateTime;

    /**
     * @param string $EnvId Environment ID.
     * @param string $EnvType Environment type. Valid values:
<li>production: production environment;</li><li>staging: testing environment.</li>
     * @param string $Status Environment status. Valid values:
<li>creating: under creation;</li>
<li>running: running steadily. Version change can be performed;</li>
<li>version_deploying: Version deployment in progress, cannot proceed with new changes.</li>
     * @param array $Scope Configuration effective range in the current environment:
<li>When the value of EnvType is production, the value of this parameter is ["ALL"], which means it takes effect globally;</li>
<li>When the value of EnvType is staging, the test node IP will be returned, which can be used to bind a host for testing.</li>
     * @param array $CurrentConfigGroupVersionInfos Versions that actually take effect for each configuration group in the current environment. According to the value of Status, there are the following two scenarios:
<li>When the value of Status is version_deploying, the value returned by this field is the version effective before the change action is executed. That is, during the new version deployment, the version actually effective is the version prior to the execution of the change action;</li>
<li>When the value of Status is running, the returned value of this field is the currently effective version.</li>
     * @param string $CreateTime Creation time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
     * @param string $UpdateTime Update time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.
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
