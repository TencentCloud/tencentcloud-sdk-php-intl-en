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
 * Check result for node upgrade
 *
 * @method string getNamespace() Obtain The namespace of the workload
 * @method void setNamespace(string $Namespace) Set The namespace of the workload
 * @method string getWorkLoadKind() Obtain Workload type
 * @method void setWorkLoadKind(string $WorkLoadKind) Set Workload type
 * @method string getWorkLoadName() Obtain Workload name
 * @method void setWorkLoadName(string $WorkLoadName) Set Workload name
 * @method integer getBefore() Obtain The number of running pods in the workload before draining the node
 * @method void setBefore(integer $Before) Set The number of running pods in the workload before draining the node
 * @method integer getAfter() Obtain The number of running pods in the workload after draining the node
 * @method void setAfter(integer $After) Set The number of running pods in the workload after draining the node
 * @method array getPods() Obtain The pod list of the workload on this node
 * @method void setPods(array $Pods) Set The pod list of the workload on this node
 */
class InstanceUpgradePreCheckResultItem extends AbstractModel
{
    /**
     * @var string The namespace of the workload
     */
    public $Namespace;

    /**
     * @var string Workload type
     */
    public $WorkLoadKind;

    /**
     * @var string Workload name
     */
    public $WorkLoadName;

    /**
     * @var integer The number of running pods in the workload before draining the node
     */
    public $Before;

    /**
     * @var integer The number of running pods in the workload after draining the node
     */
    public $After;

    /**
     * @var array The pod list of the workload on this node
     */
    public $Pods;

    /**
     * @param string $Namespace The namespace of the workload
     * @param string $WorkLoadKind Workload type
     * @param string $WorkLoadName Workload name
     * @param integer $Before The number of running pods in the workload before draining the node
     * @param integer $After The number of running pods in the workload after draining the node
     * @param array $Pods The pod list of the workload on this node
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkLoadKind",$param) and $param["WorkLoadKind"] !== null) {
            $this->WorkLoadKind = $param["WorkLoadKind"];
        }

        if (array_key_exists("WorkLoadName",$param) and $param["WorkLoadName"] !== null) {
            $this->WorkLoadName = $param["WorkLoadName"];
        }

        if (array_key_exists("Before",$param) and $param["Before"] !== null) {
            $this->Before = $param["Before"];
        }

        if (array_key_exists("After",$param) and $param["After"] !== null) {
            $this->After = $param["After"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = $param["Pods"];
        }
    }
}
