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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dedicated cluster
 *
 * @method array getL4Clusters() Obtain Layer-4 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setL4Clusters(array $L4Clusters) Set Layer-4 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getL7Clusters() Obtain Layer-7 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setL7Clusters(array $L7Clusters) Set Layer-7 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ClusterItem getClassicalCluster() Obtain vpcgw cluster
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClassicalCluster(ClusterItem $ClassicalCluster) Set vpcgw cluster
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ExclusiveCluster extends AbstractModel
{
    /**
     * @var array Layer-4 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $L4Clusters;

    /**
     * @var array Layer-7 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $L7Clusters;

    /**
     * @var ClusterItem vpcgw cluster
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClassicalCluster;

    /**
     * @param array $L4Clusters Layer-4 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $L7Clusters Layer-7 dedicated cluster list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ClusterItem $ClassicalCluster vpcgw cluster
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("L4Clusters",$param) and $param["L4Clusters"] !== null) {
            $this->L4Clusters = [];
            foreach ($param["L4Clusters"] as $key => $value){
                $obj = new ClusterItem();
                $obj->deserialize($value);
                array_push($this->L4Clusters, $obj);
            }
        }

        if (array_key_exists("L7Clusters",$param) and $param["L7Clusters"] !== null) {
            $this->L7Clusters = [];
            foreach ($param["L7Clusters"] as $key => $value){
                $obj = new ClusterItem();
                $obj->deserialize($value);
                array_push($this->L7Clusters, $obj);
            }
        }

        if (array_key_exists("ClassicalCluster",$param) and $param["ClassicalCluster"] !== null) {
            $this->ClassicalCluster = new ClusterItem();
            $this->ClassicalCluster->deserialize($param["ClassicalCluster"]);
        }
    }
}
