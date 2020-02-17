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
 * @method boolean getIPVS() Obtain Whether IPVS is enabled
 * @method void setIPVS(boolean $IPVS) Set Whether IPVS is enabled
 * @method boolean getAsEnabled() Obtain Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
 * @method void setAsEnabled(boolean $AsEnabled) Set Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
 * @method string getContainerRuntime() Obtain Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
 * @method void setContainerRuntime(string $ContainerRuntime) Set Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
 * @method string getNodeNameType() Obtain 
 * @method void setNodeNameType(string $NodeNameType) Set 
 */

/**
 *Cluster advanced configurations
 */
class ClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var boolean Whether IPVS is enabled
     */
    public $IPVS;

    /**
     * @var boolean Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
     */
    public $AsEnabled;

    /**
     * @var string Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
     */
    public $ContainerRuntime;

    /**
     * @var string 
     */
    public $NodeNameType;
    /**
     * @param boolean $IPVS Whether IPVS is enabled
     * @param boolean $AsEnabled Whether auto-scaling is enabled for nodes in the cluster (Enabling this function is not supported when you create a cluster)
     * @param string $ContainerRuntime Type of runtime component used by the cluster. The types include "docker" and "containerd". Default value: docker
     * @param string $NodeNameType 
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
        if (array_key_exists("IPVS",$param) and $param["IPVS"] !== null) {
            $this->IPVS = $param["IPVS"];
        }

        if (array_key_exists("AsEnabled",$param) and $param["AsEnabled"] !== null) {
            $this->AsEnabled = $param["AsEnabled"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("NodeNameType",$param) and $param["NodeNameType"] !== null) {
            $this->NodeNameType = $param["NodeNameType"];
        }
    }
}
