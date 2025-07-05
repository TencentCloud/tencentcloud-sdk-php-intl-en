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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterKubeconfig request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method boolean getIsExtranet() Obtain Defaults to `false`, which means to obtain the kubeconfig of private network
 * @method void setIsExtranet(boolean $IsExtranet) Set Defaults to `false`, which means to obtain the kubeconfig of private network
 */
class DescribeClusterKubeconfigRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var boolean Defaults to `false`, which means to obtain the kubeconfig of private network
     */
    public $IsExtranet;

    /**
     * @param string $ClusterId Cluster ID
     * @param boolean $IsExtranet Defaults to `false`, which means to obtain the kubeconfig of private network
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

        if (array_key_exists("IsExtranet",$param) and $param["IsExtranet"] !== null) {
            $this->IsExtranet = $param["IsExtranet"];
        }
    }
}
