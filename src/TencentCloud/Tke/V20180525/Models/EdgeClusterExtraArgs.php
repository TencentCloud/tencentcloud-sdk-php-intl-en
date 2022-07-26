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
 * Edge cluster master custom parameters
 *
 * @method array getKubeAPIServer() Obtain kube-apiserver custom parameter, in the format of ["k1=v1", "k1=v2"], for example: ["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setKubeAPIServer(array $KubeAPIServer) Set kube-apiserver custom parameter, in the format of ["k1=v1", "k1=v2"], for example: ["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getKubeControllerManager() Obtain kube-controller-manager custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setKubeControllerManager(array $KubeControllerManager) Set kube-controller-manager custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getKubeScheduler() Obtain kube-scheduler custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setKubeScheduler(array $KubeScheduler) Set kube-scheduler custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EdgeClusterExtraArgs extends AbstractModel
{
    /**
     * @var array kube-apiserver custom parameter, in the format of ["k1=v1", "k1=v2"], for example: ["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $KubeAPIServer;

    /**
     * @var array kube-controller-manager custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $KubeControllerManager;

    /**
     * @var array kube-scheduler custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $KubeScheduler;

    /**
     * @param array $KubeAPIServer kube-apiserver custom parameter, in the format of ["k1=v1", "k1=v2"], for example: ["max-requests-inflight=500","feature-gates=PodShareProcessNamespace=true,DynamicKubeletConfig=true"]
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $KubeControllerManager kube-controller-manager custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $KubeScheduler kube-scheduler custom parameter
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("KubeAPIServer",$param) and $param["KubeAPIServer"] !== null) {
            $this->KubeAPIServer = $param["KubeAPIServer"];
        }

        if (array_key_exists("KubeControllerManager",$param) and $param["KubeControllerManager"] !== null) {
            $this->KubeControllerManager = $param["KubeControllerManager"];
        }

        if (array_key_exists("KubeScheduler",$param) and $param["KubeScheduler"] !== null) {
            $this->KubeScheduler = $param["KubeScheduler"];
        }
    }
}
