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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePulsarProInstanceDetail response structure.
 *
 * @method PulsarProClusterInfo getClusterInfo() Obtain Cluster information
 * @method void setClusterInfo(PulsarProClusterInfo $ClusterInfo) Set Cluster information
 * @method array getNetworkAccessPointInfos() Obtain Cluster network access point information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkAccessPointInfos(array $NetworkAccessPointInfos) Set Cluster network access point information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PulsarProClusterSpecInfo getClusterSpecInfo() Obtain Cluster specification information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterSpecInfo(PulsarProClusterSpecInfo $ClusterSpecInfo) Set Cluster specification information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePulsarProInstanceDetailResponse extends AbstractModel
{
    /**
     * @var PulsarProClusterInfo Cluster information
     */
    public $ClusterInfo;

    /**
     * @var array Cluster network access point information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkAccessPointInfos;

    /**
     * @var PulsarProClusterSpecInfo Cluster specification information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterSpecInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param PulsarProClusterInfo $ClusterInfo Cluster information
     * @param array $NetworkAccessPointInfos Cluster network access point information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PulsarProClusterSpecInfo $ClusterSpecInfo Cluster specification information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new PulsarProClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("NetworkAccessPointInfos",$param) and $param["NetworkAccessPointInfos"] !== null) {
            $this->NetworkAccessPointInfos = [];
            foreach ($param["NetworkAccessPointInfos"] as $key => $value){
                $obj = new PulsarNetworkAccessPointInfo();
                $obj->deserialize($value);
                array_push($this->NetworkAccessPointInfos, $obj);
            }
        }

        if (array_key_exists("ClusterSpecInfo",$param) and $param["ClusterSpecInfo"] !== null) {
            $this->ClusterSpecInfo = new PulsarProClusterSpecInfo();
            $this->ClusterSpecInfo->deserialize($param["ClusterSpecInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
