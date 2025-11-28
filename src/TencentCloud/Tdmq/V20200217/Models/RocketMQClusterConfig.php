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
 * RocketMQ cluster configuration
 *
 * @method integer getMaxTpsPerNamespace() Obtain Upper limit of TPS per single namespace.
 * @method void setMaxTpsPerNamespace(integer $MaxTpsPerNamespace) Set Upper limit of TPS per single namespace.
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
 * @method integer getMaxRetentionTime() Obtain Maximum message retention period in milliseconds
 * @method void setMaxRetentionTime(integer $MaxRetentionTime) Set Maximum message retention period in milliseconds
 * @method integer getMaxLatencyTime() Obtain Maximum message delay in milliseconds
 * @method void setMaxLatencyTime(integer $MaxLatencyTime) Set Maximum message delay in milliseconds
 * @method integer getMaxQueuesPerTopic() Obtain The maximum number of queues in a single topic
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxQueuesPerTopic(integer $MaxQueuesPerTopic) Set The maximum number of queues in a single topic
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTopicDistribution() Obtain Topic distribution.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicDistribution(array $TopicDistribution) Set Topic distribution.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRoleNum() Obtain Maximum number of roles.
 * @method void setMaxRoleNum(integer $MaxRoleNum) Set Maximum number of roles.
 * @method integer getMaxTpsLimit() Obtain TPS quota.
 * @method void setMaxTpsLimit(integer $MaxTpsLimit) Set TPS quota.
 */
class RocketMQClusterConfig extends AbstractModel
{
    /**
     * @var integer Upper limit of TPS per single namespace.
     * @deprecated
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
     * @var integer Maximum message retention period in milliseconds
     */
    public $MaxRetentionTime;

    /**
     * @var integer Maximum message delay in milliseconds
     */
    public $MaxLatencyTime;

    /**
     * @var integer The maximum number of queues in a single topic
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxQueuesPerTopic;

    /**
     * @var array Topic distribution.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicDistribution;

    /**
     * @var integer Maximum number of roles.
     */
    public $MaxRoleNum;

    /**
     * @var integer TPS quota.
     */
    public $MaxTpsLimit;

    /**
     * @param integer $MaxTpsPerNamespace Upper limit of TPS per single namespace.
     * @param integer $MaxNamespaceNum Maximum number of namespaces
     * @param integer $UsedNamespaceNum Number of used namespaces
     * @param integer $MaxTopicNum Maximum number of topics
     * @param integer $UsedTopicNum Number of used topics
     * @param integer $MaxGroupNum Maximum number of groups
     * @param integer $UsedGroupNum Number of used groups
     * @param integer $MaxRetentionTime Maximum message retention period in milliseconds
     * @param integer $MaxLatencyTime Maximum message delay in milliseconds
     * @param integer $MaxQueuesPerTopic The maximum number of queues in a single topic
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TopicDistribution Topic distribution.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRoleNum Maximum number of roles.
     * @param integer $MaxTpsLimit TPS quota.
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

        if (array_key_exists("MaxRetentionTime",$param) and $param["MaxRetentionTime"] !== null) {
            $this->MaxRetentionTime = $param["MaxRetentionTime"];
        }

        if (array_key_exists("MaxLatencyTime",$param) and $param["MaxLatencyTime"] !== null) {
            $this->MaxLatencyTime = $param["MaxLatencyTime"];
        }

        if (array_key_exists("MaxQueuesPerTopic",$param) and $param["MaxQueuesPerTopic"] !== null) {
            $this->MaxQueuesPerTopic = $param["MaxQueuesPerTopic"];
        }

        if (array_key_exists("TopicDistribution",$param) and $param["TopicDistribution"] !== null) {
            $this->TopicDistribution = [];
            foreach ($param["TopicDistribution"] as $key => $value){
                $obj = new RocketMQTopicDistribution();
                $obj->deserialize($value);
                array_push($this->TopicDistribution, $obj);
            }
        }

        if (array_key_exists("MaxRoleNum",$param) and $param["MaxRoleNum"] !== null) {
            $this->MaxRoleNum = $param["MaxRoleNum"];
        }

        if (array_key_exists("MaxTpsLimit",$param) and $param["MaxTpsLimit"] !== null) {
            $this->MaxTpsLimit = $param["MaxTpsLimit"];
        }
    }
}
