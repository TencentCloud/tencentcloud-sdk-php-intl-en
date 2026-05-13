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
 * @method integer getMaxTopics() Obtain Maximum number of topics that can be created
 * @method void setMaxTopics(integer $MaxTopics) Set Maximum number of topics that can be created
 * @method integer getScalableTps() Obtain Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScalableTps(integer $ScalableTps) Set Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxPartitions() Obtain 32 or 128.
Maximum number of partitions for topics in the current cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxPartitions(integer $MaxPartitions) Set 32 or 128.
Maximum number of partitions for topics in the current cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDelayedMessages() Obtain Maximum delayed message count. 0 means no limit.	
 * @method void setMaxDelayedMessages(integer $MaxDelayedMessages) Set Maximum delayed message count. 0 means no limit.	
 * @method integer getMaxTopicsPartitioned() Obtain Maximum number of topic partitions that can be created
 * @method void setMaxTopicsPartitioned(integer $MaxTopicsPartitioned) Set Maximum number of topic partitions that can be created
 * @method integer getBrokerMaxConnections() Obtain Maximum number of connections per broker
 * @method void setBrokerMaxConnections(integer $BrokerMaxConnections) Set Maximum number of connections per broker
 * @method integer getBrokerMaxConnectionsPerIp() Obtain Maximum number of connections per IP
 * @method void setBrokerMaxConnectionsPerIp(integer $BrokerMaxConnectionsPerIp) Set Maximum number of connections per IP
 * @method integer getMaximumElasticStorage() Obtain Elastic storage cluster maximum storage specification; fixed storage is 0.
 * @method void setMaximumElasticStorage(integer $MaximumElasticStorage) Set Elastic storage cluster maximum storage specification; fixed storage is 0.
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
     * @var integer Maximum number of topics that can be created
     */
    public $MaxTopics;

    /**
     * @var integer Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScalableTps;

    /**
     * @var integer 32 or 128.
Maximum number of partitions for topics in the current cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxPartitions;

    /**
     * @var integer Maximum delayed message count. 0 means no limit.	
     */
    public $MaxDelayedMessages;

    /**
     * @var integer Maximum number of topic partitions that can be created
     */
    public $MaxTopicsPartitioned;

    /**
     * @var integer Maximum number of connections per broker
     */
    public $BrokerMaxConnections;

    /**
     * @var integer Maximum number of connections per IP
     */
    public $BrokerMaxConnectionsPerIp;

    /**
     * @var integer Elastic storage cluster maximum storage specification; fixed storage is 0.
     */
    public $MaximumElasticStorage;

    /**
     * @param string $SpecName Cluster specification name
     * @param integer $MaxTps Peak TPS
     * @param integer $MaxBandWidth Peak bandwidth in Mbps
     * @param integer $MaxNamespaces Maximum number of namespaces
     * @param integer $MaxTopics Maximum number of topics that can be created
     * @param integer $ScalableTps Elastic TPS beyond the specification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxPartitions 32 or 128.
Maximum number of partitions for topics in the current cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDelayedMessages Maximum delayed message count. 0 means no limit.	
     * @param integer $MaxTopicsPartitioned Maximum number of topic partitions that can be created
     * @param integer $BrokerMaxConnections Maximum number of connections per broker
     * @param integer $BrokerMaxConnectionsPerIp Maximum number of connections per IP
     * @param integer $MaximumElasticStorage Elastic storage cluster maximum storage specification; fixed storage is 0.
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

        if (array_key_exists("MaxPartitions",$param) and $param["MaxPartitions"] !== null) {
            $this->MaxPartitions = $param["MaxPartitions"];
        }

        if (array_key_exists("MaxDelayedMessages",$param) and $param["MaxDelayedMessages"] !== null) {
            $this->MaxDelayedMessages = $param["MaxDelayedMessages"];
        }

        if (array_key_exists("MaxTopicsPartitioned",$param) and $param["MaxTopicsPartitioned"] !== null) {
            $this->MaxTopicsPartitioned = $param["MaxTopicsPartitioned"];
        }

        if (array_key_exists("BrokerMaxConnections",$param) and $param["BrokerMaxConnections"] !== null) {
            $this->BrokerMaxConnections = $param["BrokerMaxConnections"];
        }

        if (array_key_exists("BrokerMaxConnectionsPerIp",$param) and $param["BrokerMaxConnectionsPerIp"] !== null) {
            $this->BrokerMaxConnectionsPerIp = $param["BrokerMaxConnectionsPerIp"];
        }

        if (array_key_exists("MaximumElasticStorage",$param) and $param["MaximumElasticStorage"] !== null) {
            $this->MaximumElasticStorage = $param["MaximumElasticStorage"];
        }
    }
}
