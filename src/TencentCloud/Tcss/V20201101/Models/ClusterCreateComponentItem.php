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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameters for `CreateCheckComponent`, which are used to batch install defenders.
 *
 * @method string getClusterId() Obtain ID of the cluster for which to install the component
 * @method void setClusterId(string $ClusterId) Set ID of the cluster for which to install the component
 * @method string getClusterRegion() Obtain Cluster region
 * @method void setClusterRegion(string $ClusterRegion) Set Cluster region
 */
class ClusterCreateComponentItem extends AbstractModel
{
    /**
     * @var string ID of the cluster for which to install the component
     */
    public $ClusterId;

    /**
     * @var string Cluster region
     */
    public $ClusterRegion;

    /**
     * @param string $ClusterId ID of the cluster for which to install the component
     * @param string $ClusterRegion Cluster region
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

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }
    }
}
