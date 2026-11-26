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
 * Inference service information.
 *
 * @method string getServiceId() Obtain Inference service ID.
 * @method void setServiceId(string $ServiceId) Set Inference service ID.
 * @method string getName() Obtain Name of the inference service.
 * @method void setName(string $Name) Set Name of the inference service.
 * @method string getDescription() Obtain Description information.
 * @method void setDescription(string $Description) Set Description information.
 * @method integer getListenPort() Obtain Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.
 * @method void setListenPort(integer $ListenPort) Set Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.
 * @method array getRequestPaths() Obtain Request path list for the inference service. Supports up to 20 paths.
 * @method void setRequestPaths(array $RequestPaths) Set Request path list for the inference service. Supports up to 20 paths.
 * @method array getContainers() Obtain Container configuration of the inference service.
 * @method void setContainers(array $Containers) Set Container configuration of the inference service.
 * @method InferenceResourceConfig getResourceConfig() Obtain Resource configuration of the inference service.
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) Set Resource configuration of the inference service.
 * @method string getStatus() Obtain Status of the inference service, including the following: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
 * @method void setStatus(string $Status) Set Status of the inference service, including the following: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
 * @method string getScalingStatus() Obtain Scaling status. Valid values: <li>Normal: running steadily with no scaling operation in progress;</li><li>ScalingOut: scaling out;</li><li>ScalingIn: scaling in.</li>
 * @method void setScalingStatus(string $ScalingStatus) Set Scaling status. Valid values: <li>Normal: running steadily with no scaling operation in progress;</li><li>ScalingOut: scaling out;</li><li>ScalingIn: scaling in.</li>
 * @method integer getCurrentInstanceCount() Obtain Number of currently running instances.
 * @method void setCurrentInstanceCount(integer $CurrentInstanceCount) Set Number of currently running instances.
 * @method string getInferenceURL() Obtain Inference access address. You can access the underlying model for reasoning via links.
 * @method void setInferenceURL(string $InferenceURL) Set Inference access address. You can access the underlying model for reasoning via links.
 * @method string getCreateTime() Obtain Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modification time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class InferenceService extends AbstractModel
{
    /**
     * @var string Inference service ID.
     */
    public $ServiceId;

    /**
     * @var string Name of the inference service.
     */
    public $Name;

    /**
     * @var string Description information.
     */
    public $Description;

    /**
     * @var integer Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.
     */
    public $ListenPort;

    /**
     * @var array Request path list for the inference service. Supports up to 20 paths.
     */
    public $RequestPaths;

    /**
     * @var array Container configuration of the inference service.
     */
    public $Containers;

    /**
     * @var InferenceResourceConfig Resource configuration of the inference service.
     */
    public $ResourceConfig;

    /**
     * @var string Status of the inference service, including the following: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
     */
    public $Status;

    /**
     * @var string Scaling status. Valid values: <li>Normal: running steadily with no scaling operation in progress;</li><li>ScalingOut: scaling out;</li><li>ScalingIn: scaling in.</li>
     */
    public $ScalingStatus;

    /**
     * @var integer Number of currently running instances.
     */
    public $CurrentInstanceCount;

    /**
     * @var string Inference access address. You can access the underlying model for reasoning via links.
     */
    public $InferenceURL;

    /**
     * @var string Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Last modification time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $UpdateTime;

    /**
     * @param string $ServiceId Inference service ID.
     * @param string $Name Name of the inference service.
     * @param string $Description Description information.
     * @param integer $ListenPort Ports that the model service needs to monitor. Only integers between 1 and 65535 are supported.
     * @param array $RequestPaths Request path list for the inference service. Supports up to 20 paths.
     * @param array $Containers Container configuration of the inference service.
     * @param InferenceResourceConfig $ResourceConfig Resource configuration of the inference service.
     * @param string $Status Status of the inference service, including the following: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
     * @param string $ScalingStatus Scaling status. Valid values: <li>Normal: running steadily with no scaling operation in progress;</li><li>ScalingOut: scaling out;</li><li>ScalingIn: scaling in.</li>
     * @param integer $CurrentInstanceCount Number of currently running instances.
     * @param string $InferenceURL Inference access address. You can access the underlying model for reasoning via links.
     * @param string $CreateTime Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $UpdateTime Last modification time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ListenPort",$param) and $param["ListenPort"] !== null) {
            $this->ListenPort = $param["ListenPort"];
        }

        if (array_key_exists("RequestPaths",$param) and $param["RequestPaths"] !== null) {
            $this->RequestPaths = $param["RequestPaths"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new InferenceContainerConfig();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = new InferenceResourceConfig();
            $this->ResourceConfig->deserialize($param["ResourceConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScalingStatus",$param) and $param["ScalingStatus"] !== null) {
            $this->ScalingStatus = $param["ScalingStatus"];
        }

        if (array_key_exists("CurrentInstanceCount",$param) and $param["CurrentInstanceCount"] !== null) {
            $this->CurrentInstanceCount = $param["CurrentInstanceCount"];
        }

        if (array_key_exists("InferenceURL",$param) and $param["InferenceURL"] !== null) {
            $this->InferenceURL = $param["InferenceURL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
