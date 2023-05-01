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
 * TDMQ for Pulsar pro cluster specification information
 *
 * @method string getSpecName() Obtain Cluster specification name
 * @method void setSpecName(string $SpecName) Set Cluster specification name
 * @method integer getMaxTps() Obtain Peak TPS
 * @method void setMaxTps(integer $MaxTps) Set Peak TPS
 * @method integer getMaxBandWidth() Obtain Peak bandwidth in Mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) Set Peak bandwidth in Mbps
 * @method integer getMaxNamespaces() Obtain Maximum number of namespaces
 * @method void setMaxNamespaces(integer $MaxNamespaces) Set Maximum number of namespaces
 * @method integer getMaxTopics() Obtain Maximum number of topic partitions
 * @method void setMaxTopics(integer $MaxTopics) Set Maximum number of topic partitions
 * @method integer getScalableTps() Obtain Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScalableTps(integer $ScalableTps) Set Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PulsarProClusterSpecInfo extends AbstractModel
{
    /**
     * @var string Cluster specification name
     */
    public $SpecName;

    /**
     * @var integer Peak TPS
     */
    public $MaxTps;

    /**
     * @var integer Peak bandwidth in Mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer Maximum number of namespaces
     */
    public $MaxNamespaces;

    /**
     * @var integer Maximum number of topic partitions
     */
    public $MaxTopics;

    /**
     * @var integer Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScalableTps;

    /**
     * @param string $SpecName Cluster specification name
     * @param integer $MaxTps Peak TPS
     * @param integer $MaxBandWidth Peak bandwidth in Mbps
     * @param integer $MaxNamespaces Maximum number of namespaces
     * @param integer $MaxTopics Maximum number of topic partitions
     * @param integer $ScalableTps Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxNamespaces",$param) and $param["MaxNamespaces"] !== null) {
            $this->MaxNamespaces = $param["MaxNamespaces"];
        }

        if (array_key_exists("MaxTopics",$param) and $param["MaxTopics"] !== null) {
            $this->MaxTopics = $param["MaxTopics"];
        }

        if (array_key_exists("ScalableTps",$param) and $param["ScalableTps"] !== null) {
            $this->ScalableTps = $param["ScalableTps"];
        }
    }
}
