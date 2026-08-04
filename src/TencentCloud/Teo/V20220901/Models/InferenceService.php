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
 * Inference service info.
 *
 * @method string getServiceId() Obtain ID of the inference service.
 * @method void setServiceId(string $ServiceId) Set ID of the inference service.
 * @method string getName() Obtain Reasoning service name.
 * @method void setName(string $Name) Set Reasoning service name.
 * @method string getDescription() Obtain Description information.
 * @method void setDescription(string $Description) Set Description information.
 * @method integer getListenPort() Obtain Ports monitored by the model service. Only integers between 1 and 65535 are supported.
 * @method void setListenPort(integer $ListenPort) Set Ports monitored by the model service. Only integers between 1 and 65535 are supported.
 * @method array getRequestPaths() Obtain Request path list for inference service. Supports up to 20 paths.
 * @method void setRequestPaths(array $RequestPaths) Set Request path list for inference service. Supports up to 20 paths.
 * @method array getContainers() Obtain Container configuration of the inference service.
 * @method void setContainers(array $Containers) Set Container configuration of the inference service.
 * @method InferenceResourceConfig getResourceConfig() Obtain Resource configuration of the inference service.
 * @method void setResourceConfig(InferenceResourceConfig $ResourceConfig) Set Resource configuration of the inference service.
 * @method string getStatus() Obtain Reasoning service status, which includes the following status: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
 * @method void setStatus(string $Status) Set Reasoning service status, which includes the following status: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
 * @method string getScalingStatus() Obtain Scaling status. Valid values: <li>Normal: Stable operation, no scaling operation in progress;</li><li>ScalingOut: Scaling out;</li><li>ScalingIn: Scaling in.</li>
 * @method void setScalingStatus(string $ScalingStatus) Set Scaling status. Valid values: <li>Normal: Stable operation, no scaling operation in progress;</li><li>ScalingOut: Scaling out;</li><li>ScalingIn: Scaling in.</li>
 * @method integer getCurrentInstanceCount() Obtain Number of running instances.
 * @method void setCurrentInstanceCount(integer $CurrentInstanceCount) Set Number of running instances.
 * @method string getInferenceURL() Obtain Reasoning access address, perform reasoning via links to access the underlying model.
 * @method void setInferenceURL(string $InferenceURL) Set Reasoning access address, perform reasoning via links to access the underlying model.
 * @method string getCreateTime() Obtain Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUpdateTime() Obtain Last modification time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setUpdateTime(string $UpdateTime) Set Last modification time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class InferenceService extends AbstractModel
{
    /**
     * @var string ID of the inference service.
     */
    public $ServiceId;

    /**
     * @var string Reasoning service name.
     */
    public $Name;

    /**
     * @var string Description information.
     */
    public $Description;

    /**
     * @var integer Ports monitored by the model service. Only integers between 1 and 65535 are supported.
     */
    public $ListenPort;

    /**
     * @var array Request path list for inference service. Supports up to 20 paths.
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
     * @var string Reasoning service status, which includes the following status: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
     */
    public $Status;

    /**
     * @var string Scaling status. Valid values: <li>Normal: Stable operation, no scaling operation in progress;</li><li>ScalingOut: Scaling out;</li><li>ScalingIn: Scaling in.</li>
     */
    public $ScalingStatus;

    /**
     * @var integer Number of running instances.
     */
    public $CurrentInstanceCount;

    /**
     * @var string Reasoning access address, perform reasoning via links to access the underlying model.
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
     * @param string $ServiceId ID of the inference service.
     * @param string $Name Reasoning service name.
     * @param string $Description Description information.
     * @param integer $ListenPort Ports monitored by the model service. Only integers between 1 and 65535 are supported.
     * @param array $RequestPaths Request path list for inference service. Supports up to 20 paths.
     * @param array $Containers Container configuration of the inference service.
     * @param InferenceResourceConfig $ResourceConfig Resource configuration of the inference service.
     * @param string $Status Reasoning service status, which includes the following status: <li>Deploying: deployment in progress;</li><li>Running: running;</li><li>Stopping: stopping;</li><li>Stopped: stopped;</li><li>Exception: exception;</li><li>Banned: banned.</li>
     * @param string $ScalingStatus Scaling status. Valid values: <li>Normal: Stable operation, no scaling operation in progress;</li><li>ScalingOut: Scaling out;</li><li>ScalingIn: Scaling in.</li>
     * @param integer $CurrentInstanceCount Number of running instances.
     * @param string $InferenceURL Reasoning access address, perform reasoning via links to access the underlying model.
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
