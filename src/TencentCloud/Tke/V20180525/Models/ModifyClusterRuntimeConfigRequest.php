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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterRuntimeConfig request structure.
 *
 * @method string getClusterId() Obtain Cluster ID, required
 * @method void setClusterId(string $ClusterId) Set Cluster ID, required
 * @method string getDstK8SVersion() Obtain This field is required when it is required to modify the runtime version based on another K8S version. For example, in scenarios where conflicts occur during upgrade verification.
 * @method void setDstK8SVersion(string $DstK8SVersion) Set This field is required when it is required to modify the runtime version based on another K8S version. For example, in scenarios where conflicts occur during upgrade verification.
 * @method RuntimeConfig getClusterRuntimeConfig() Obtain This field is required when it is required to modify the runtime of a cluster.
 * @method void setClusterRuntimeConfig(RuntimeConfig $ClusterRuntimeConfig) Set This field is required when it is required to modify the runtime of a cluster.
 * @method array getNodePoolRuntimeConfig() Obtain This field is required when it is required to modify the runtime of a node pool, specifying the part to be modified.
 * @method void setNodePoolRuntimeConfig(array $NodePoolRuntimeConfig) Set This field is required when it is required to modify the runtime of a node pool, specifying the part to be modified.
 */
class ModifyClusterRuntimeConfigRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, required
     */
    public $ClusterId;

    /**
     * @var string This field is required when it is required to modify the runtime version based on another K8S version. For example, in scenarios where conflicts occur during upgrade verification.
     */
    public $DstK8SVersion;

    /**
     * @var RuntimeConfig This field is required when it is required to modify the runtime of a cluster.
     */
    public $ClusterRuntimeConfig;

    /**
     * @var array This field is required when it is required to modify the runtime of a node pool, specifying the part to be modified.
     */
    public $NodePoolRuntimeConfig;

    /**
     * @param string $ClusterId Cluster ID, required
     * @param string $DstK8SVersion This field is required when it is required to modify the runtime version based on another K8S version. For example, in scenarios where conflicts occur during upgrade verification.
     * @param RuntimeConfig $ClusterRuntimeConfig This field is required when it is required to modify the runtime of a cluster.
     * @param array $NodePoolRuntimeConfig This field is required when it is required to modify the runtime of a node pool, specifying the part to be modified.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DstK8SVersion",$param) and $param["DstK8SVersion"] !== null) {
            $this->DstK8SVersion = $param["DstK8SVersion"];
        }

        if (array_key_exists("ClusterRuntimeConfig",$param) and $param["ClusterRuntimeConfig"] !== null) {
            $this->ClusterRuntimeConfig = new RuntimeConfig();
            $this->ClusterRuntimeConfig->deserialize($param["ClusterRuntimeConfig"]);
        }

        if (array_key_exists("NodePoolRuntimeConfig",$param) and $param["NodePoolRuntimeConfig"] !== null) {
            $this->NodePoolRuntimeConfig = [];
            foreach ($param["NodePoolRuntimeConfig"] as $key => $value){
                $obj = new NodePoolRuntime();
                $obj->deserialize($value);
                array_push($this->NodePoolRuntimeConfig, $obj);
            }
        }
    }
}
