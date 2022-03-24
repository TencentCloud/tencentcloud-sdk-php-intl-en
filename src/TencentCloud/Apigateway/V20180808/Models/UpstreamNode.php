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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metadata of backend nodes of the upstream
 *
 * @method string getHost() Obtain IP or domain name of the host
 * @method void setHost(string $Host) Set IP or domain name of the host
 * @method integer getPort() Obtain The port number. Range: [0, 65535]
 * @method void setPort(integer $Port) Set The port number. Range: [0, 65535]
 * @method integer getWeight() Obtain Value range: [0, 100]. `0` refers to disable it.
 * @method void setWeight(integer $Weight) Set Value range: [0, 100]. `0` refers to disable it.
 * @method string getVmInstanceId() Obtain VM instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVmInstanceId(string $VmInstanceId) Set VM instance ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method array getTags() Obtain Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getHealthy() Obtain Health status of the node. Value: `OFF`, `HEALTHY`, `UNHEALTHY` and `NO_DATA`. It’s not required for creating and editing actions.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setHealthy(string $Healthy) Set Health status of the node. Value: `OFF`, `HEALTHY`, `UNHEALTHY` and `NO_DATA`. It’s not required for creating and editing actions.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getServiceName() Obtain The K8s service name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setServiceName(string $ServiceName) Set The K8s service name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getNameSpace() Obtain K8s namespace
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNameSpace(string $NameSpace) Set K8s namespace
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getClusterId() Obtain ID of the TKE cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setClusterId(string $ClusterId) Set ID of the TKE cluster
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSource() Obtain Source of the node
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSource(string $Source) Set Source of the node
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUniqueServiceName() Obtain The unique service name in API Gateway
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUniqueServiceName(string $UniqueServiceName) Set The unique service name in API Gateway
Note: This field may return `null`, indicating that no valid value was found.
 */
class UpstreamNode extends AbstractModel
{
    /**
     * @var string IP or domain name of the host
     */
    public $Host;

    /**
     * @var integer The port number. Range: [0, 65535]
     */
    public $Port;

    /**
     * @var integer Value range: [0, 100]. `0` refers to disable it.
     */
    public $Weight;

    /**
     * @var string VM instance ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VmInstanceId;

    /**
     * @var array Tag
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string Health status of the node. Value: `OFF`, `HEALTHY`, `UNHEALTHY` and `NO_DATA`. It’s not required for creating and editing actions.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Healthy;

    /**
     * @var string The K8s service name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ServiceName;

    /**
     * @var string K8s namespace
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NameSpace;

    /**
     * @var string ID of the TKE cluster
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ClusterId;

    /**
     * @var string Source of the node
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Source;

    /**
     * @var string The unique service name in API Gateway
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UniqueServiceName;

    /**
     * @param string $Host IP or domain name of the host
     * @param integer $Port The port number. Range: [0, 65535]
     * @param integer $Weight Value range: [0, 100]. `0` refers to disable it.
     * @param string $VmInstanceId VM instance ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param array $Tags Tag
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Healthy Health status of the node. Value: `OFF`, `HEALTHY`, `UNHEALTHY` and `NO_DATA`. It’s not required for creating and editing actions.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ServiceName The K8s service name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $NameSpace K8s namespace
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ClusterId ID of the TKE cluster
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Source Source of the node
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UniqueServiceName The unique service name in API Gateway
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("VmInstanceId",$param) and $param["VmInstanceId"] !== null) {
            $this->VmInstanceId = $param["VmInstanceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UniqueServiceName",$param) and $param["UniqueServiceName"] !== null) {
            $this->UniqueServiceName = $param["UniqueServiceName"];
        }
    }
}
