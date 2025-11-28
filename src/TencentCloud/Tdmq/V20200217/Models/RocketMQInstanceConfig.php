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
 * Instance configurations of a TDMQ for RocketMQ exclusive cluster
 *
 * @method integer getMaxTpsPerNamespace() Obtain Maximum TPS per namespace
 * @method void setMaxTpsPerNamespace(integer $MaxTpsPerNamespace) Set Maximum TPS per namespace
 * @method integer getMaxNamespaceNum() Obtain Maximum number of namespaces
 * @method void setMaxNamespaceNum(integer $MaxNamespaceNum) Set Maximum number of namespaces
 * @method integer getUsedNamespaceNum() Obtain Number of used namespaces
 * @method void setUsedNamespaceNum(integer $UsedNamespaceNum) Set Number of used namespaces
 * @method integer getMaxTopicNum() Obtain Maximum number of topics
 * @method void setMaxTopicNum(integer $MaxTopicNum) Set Maximum number of topics
 * @method integer getUsedTopicNum() Obtain Number of used topics
 * @method void setUsedTopicNum(integer $UsedTopicNum) Set Number of used topics
 * @method integer getMaxGroupNum() Obtain Maximum number of groups
 * @method void setMaxGroupNum(integer $MaxGroupNum) Set Maximum number of groups
 * @method integer getUsedGroupNum() Obtain Number of used groups
 * @method void setUsedGroupNum(integer $UsedGroupNum) Set Number of used groups
 * @method string getConfigDisplay() Obtain Cluster type
 * @method void setConfigDisplay(string $ConfigDisplay) Set Cluster type
 * @method integer getNodeCount() Obtain Number of nodes in the cluster
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes in the cluster
 * @method array getNodeDistribution() Obtain Node distribution
 * @method void setNodeDistribution(array $NodeDistribution) Set Node distribution
 * @method array getTopicDistribution() Obtain Topic distribution
 * @method void setTopicDistribution(array $TopicDistribution) Set Topic distribution
 * @method integer getMaxQueuesPerTopic() Obtain 
 * @method void setMaxQueuesPerTopic(integer $MaxQueuesPerTopic) Set 
 * @method integer getMaxRetention() Obtain Maximum configurable message retention time, in hours	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRetention(integer $MaxRetention) Set Maximum configurable message retention time, in hours	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinRetention() Obtain Minimum configurable message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinRetention(integer $MinRetention) Set Minimum configurable message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetention() Obtain Instance message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetention(integer $Retention) Set Instance message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicNumLowerLimit() Obtain Minimum quota for the number of topics, which is the free quota. The default number is the minimum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNumLowerLimit(integer $TopicNumLowerLimit) Set Minimum quota for the number of topics, which is the free quota. The default number is the minimum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicNumUpperLimit() Obtain Maximum quota for the number of topics. The default number is the maximum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) Set Maximum quota for the number of topics. The default number is the maximum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getSendReceiveRatio() Obtain Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
 * @method void setSendReceiveRatio(float $SendReceiveRatio) Set Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
 */
class RocketMQInstanceConfig extends AbstractModel
{
    /**
     * @var integer Maximum TPS per namespace
     */
    public $MaxTpsPerNamespace;

    /**
     * @var integer Maximum number of namespaces
     */
    public $MaxNamespaceNum;

    /**
     * @var integer Number of used namespaces
     */
    public $UsedNamespaceNum;

    /**
     * @var integer Maximum number of topics
     */
    public $MaxTopicNum;

    /**
     * @var integer Number of used topics
     */
    public $UsedTopicNum;

    /**
     * @var integer Maximum number of groups
     */
    public $MaxGroupNum;

    /**
     * @var integer Number of used groups
     */
    public $UsedGroupNum;

    /**
     * @var string Cluster type
     */
    public $ConfigDisplay;

    /**
     * @var integer Number of nodes in the cluster
     */
    public $NodeCount;

    /**
     * @var array Node distribution
     */
    public $NodeDistribution;

    /**
     * @var array Topic distribution
     */
    public $TopicDistribution;

    /**
     * @var integer 
     */
    public $MaxQueuesPerTopic;

    /**
     * @var integer Maximum configurable message retention time, in hours	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRetention;

    /**
     * @var integer Minimum configurable message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinRetention;

    /**
     * @var integer Instance message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Retention;

    /**
     * @var integer Minimum quota for the number of topics, which is the free quota. The default number is the minimum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNumLowerLimit;

    /**
     * @var integer Maximum quota for the number of topics. The default number is the maximum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNumUpperLimit;

    /**
     * @var float Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
     */
    public $SendReceiveRatio;

    /**
     * @param integer $MaxTpsPerNamespace Maximum TPS per namespace
     * @param integer $MaxNamespaceNum Maximum number of namespaces
     * @param integer $UsedNamespaceNum Number of used namespaces
     * @param integer $MaxTopicNum Maximum number of topics
     * @param integer $UsedTopicNum Number of used topics
     * @param integer $MaxGroupNum Maximum number of groups
     * @param integer $UsedGroupNum Number of used groups
     * @param string $ConfigDisplay Cluster type
     * @param integer $NodeCount Number of nodes in the cluster
     * @param array $NodeDistribution Node distribution
     * @param array $TopicDistribution Topic distribution
     * @param integer $MaxQueuesPerTopic 
     * @param integer $MaxRetention Maximum configurable message retention time, in hours	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinRetention Minimum configurable message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Retention Instance message retention time, in hours
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicNumLowerLimit Minimum quota for the number of topics, which is the free quota. The default number is the minimum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicNumUpperLimit Maximum quota for the number of topics. The default number is the maximum quota per node in the cluster specification multiplied by the number of nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $SendReceiveRatio Controls the TPS ratio for producing and consuming messages. Value range: 0–1. Default value: 0.5.
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
        if (array_key_exists("MaxTpsPerNamespace",$param) and $param["MaxTpsPerNamespace"] !== null) {
            $this->MaxTpsPerNamespace = $param["MaxTpsPerNamespace"];
        }

        if (array_key_exists("MaxNamespaceNum",$param) and $param["MaxNamespaceNum"] !== null) {
            $this->MaxNamespaceNum = $param["MaxNamespaceNum"];
        }

        if (array_key_exists("UsedNamespaceNum",$param) and $param["UsedNamespaceNum"] !== null) {
            $this->UsedNamespaceNum = $param["UsedNamespaceNum"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("UsedTopicNum",$param) and $param["UsedTopicNum"] !== null) {
            $this->UsedTopicNum = $param["UsedTopicNum"];
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }

        if (array_key_exists("UsedGroupNum",$param) and $param["UsedGroupNum"] !== null) {
            $this->UsedGroupNum = $param["UsedGroupNum"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = [];
            foreach ($param["NodeDistribution"] as $key => $value){
                $obj = new InstanceNodeDistribution();
                $obj->deserialize($value);
                array_push($this->NodeDistribution, $obj);
            }
        }

        if (array_key_exists("TopicDistribution",$param) and $param["TopicDistribution"] !== null) {
            $this->TopicDistribution = [];
            foreach ($param["TopicDistribution"] as $key => $value){
                $obj = new RocketMQTopicDistribution();
                $obj->deserialize($value);
                array_push($this->TopicDistribution, $obj);
            }
        }

        if (array_key_exists("MaxQueuesPerTopic",$param) and $param["MaxQueuesPerTopic"] !== null) {
            $this->MaxQueuesPerTopic = $param["MaxQueuesPerTopic"];
        }

        if (array_key_exists("MaxRetention",$param) and $param["MaxRetention"] !== null) {
            $this->MaxRetention = $param["MaxRetention"];
        }

        if (array_key_exists("MinRetention",$param) and $param["MinRetention"] !== null) {
            $this->MinRetention = $param["MinRetention"];
        }

        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("TopicNumLowerLimit",$param) and $param["TopicNumLowerLimit"] !== null) {
            $this->TopicNumLowerLimit = $param["TopicNumLowerLimit"];
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }
    }
}
