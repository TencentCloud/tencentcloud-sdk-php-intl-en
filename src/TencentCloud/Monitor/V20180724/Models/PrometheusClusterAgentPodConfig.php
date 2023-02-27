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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional pod configurations of the components deployed in the cluster when a cluster is associated
 *
 * @method boolean getHostNet() Obtain Whether to use HostNetWork
 * @method void setHostNet(boolean $HostNet) Set Whether to use HostNetWork
 * @method array getNodeSelector() Obtain A parameter used to specify the running nodes for a pod
 * @method void setNodeSelector(array $NodeSelector) Set A parameter used to specify the running nodes for a pod
 * @method array getTolerations() Obtain Tolerable taints
 * @method void setTolerations(array $Tolerations) Set Tolerable taints
 */
class PrometheusClusterAgentPodConfig extends AbstractModel
{
    /**
     * @var boolean Whether to use HostNetWork
     */
    public $HostNet;

    /**
     * @var array A parameter used to specify the running nodes for a pod
     */
    public $NodeSelector;

    /**
     * @var array Tolerable taints
     */
    public $Tolerations;

    /**
     * @param boolean $HostNet Whether to use HostNetWork
     * @param array $NodeSelector A parameter used to specify the running nodes for a pod
     * @param array $Tolerations Tolerable taints
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
        if (array_key_exists("HostNet",$param) and $param["HostNet"] !== null) {
            $this->HostNet = $param["HostNet"];
        }

        if (array_key_exists("NodeSelector",$param) and $param["NodeSelector"] !== null) {
            $this->NodeSelector = [];
            foreach ($param["NodeSelector"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->NodeSelector, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new Toleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }
    }
}
