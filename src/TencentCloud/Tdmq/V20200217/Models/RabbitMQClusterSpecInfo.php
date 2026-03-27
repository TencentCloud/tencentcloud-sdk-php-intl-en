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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ Cluster Specifications Information
 *
 * @method string getSpecName() Obtain Cluster Specification Name
 * @method void setSpecName(string $SpecName) Set Cluster Specification Name
 * @method integer getNodeCount() Obtain Number of Nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of Nodes
 * @method integer getMaxTps() Obtain Peak tps
 * @method void setMaxTps(integer $MaxTps) Set Peak tps
 * @method integer getMaxBandWidth() Obtain Peak bandwidth Unit: mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Peak bandwidth Unit: mbps
 * @method integer getMaxStorage() Obtain Storage capacity Unit: GB
 * @method void setMaxStorage(integer $MaxStorage) Set Storage capacity Unit: GB
 * @method integer getPublicNetworkTps() Obtain public network bandwidth tps. Unit: Mbps
 * @method void setPublicNetworkTps(integer $PublicNetworkTps) Set public network bandwidth tps. Unit: Mbps
 */
class RabbitMQClusterSpecInfo extends AbstractModel
{
    /**
     * @var string Cluster Specification Name
     */
    public $SpecName;

    /**
     * @var integer Number of Nodes
     */
    public $NodeCount;

    /**
     * @var integer Peak tps
     */
    public $MaxTps;

    /**
     * @var integer Peak bandwidth Unit: mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer Storage capacity Unit: GB
     */
    public $MaxStorage;

    /**
     * @var integer public network bandwidth tps. Unit: Mbps
     */
    public $PublicNetworkTps;

    /**
     * @param string $SpecName Cluster Specification Name
     * @param integer $NodeCount Number of Nodes
     * @param integer $MaxTps Peak tps
     * @param integer $MaxBandWidth Peak bandwidth Unit: mbps
     * @param integer $MaxStorage Storage capacity Unit: GB
     * @param integer $PublicNetworkTps public network bandwidth tps. Unit: Mbps
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("PublicNetworkTps",$param) and $param["PublicNetworkTps"] !== null) {
            $this->PublicNetworkTps = $param["PublicNetworkTps"];
        }
    }
}
