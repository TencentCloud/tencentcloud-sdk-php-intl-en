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
 * DescribeRocketMQCluster response structure.
 *
 * @method RocketMQClusterInfo getClusterInfo() Obtain Cluster information
 * @method void setClusterInfo(RocketMQClusterInfo $ClusterInfo) Set Cluster information
 * @method RocketMQClusterConfig getClusterConfig() Obtain Cluster configuration
 * @method void setClusterConfig(RocketMQClusterConfig $ClusterConfig) Set Cluster configuration
 * @method RocketMQClusterRecentStats getClusterStats() Obtain Recent cluster usage
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterStats(RocketMQClusterRecentStats $ClusterStats) Set Recent cluster usage
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRocketMQClusterResponse extends AbstractModel
{
    /**
     * @var RocketMQClusterInfo Cluster information
     */
    public $ClusterInfo;

    /**
     * @var RocketMQClusterConfig Cluster configuration
     */
    public $ClusterConfig;

    /**
     * @var RocketMQClusterRecentStats Recent cluster usage
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterStats;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param RocketMQClusterInfo $ClusterInfo Cluster information
     * @param RocketMQClusterConfig $ClusterConfig Cluster configuration
     * @param RocketMQClusterRecentStats $ClusterStats Recent cluster usage
Note: this field may return null, indicating that no valid values can be obtained.
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
            $this->ClusterInfo = new RocketMQClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("ClusterConfig",$param) and $param["ClusterConfig"] !== null) {
            $this->ClusterConfig = new RocketMQClusterConfig();
            $this->ClusterConfig->deserialize($param["ClusterConfig"]);
        }

        if (array_key_exists("ClusterStats",$param) and $param["ClusterStats"] !== null) {
            $this->ClusterStats = new RocketMQClusterRecentStats();
            $this->ClusterStats->deserialize($param["ClusterStats"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
