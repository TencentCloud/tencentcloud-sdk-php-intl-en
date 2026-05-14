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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumer group information
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getConsumerGroup() Obtain Consumer group name
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group name
 * @method boolean getConsumeEnable() Obtain Enable consumption
 * @method void setConsumeEnable(boolean $ConsumeEnable) Set Enable consumption
 * @method boolean getConsumeMessageOrderly() Obtain Ordered delivery: true
Concurrent delivery: false.
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) Set Ordered delivery: true
Concurrent delivery: false.
 * @method integer getMaxRetryTimes() Obtain Maximum number of retries
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) Set Maximum number of retries
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getClusterIdV4() Obtain ID of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterIdV4(string $ClusterIdV4) Set ID of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceV4() Obtain Namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceV4(string $NamespaceV4) Set Namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumerGroupV4() Obtain Consumer group name of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumerGroupV4(string $ConsumerGroupV4) Set Consumer group name of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullNamespaceV4() Obtain Complete namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullNamespaceV4(string $FullNamespaceV4) Set Complete namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubscribeTopicNum() Obtain Number of subscribed topics.
 * @method void setSubscribeTopicNum(integer $SubscribeTopicNum) Set Number of subscribed topics.
 * @method integer getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagList() Obtain List of bound tags
 * @method void setTagList(array $TagList) Set List of bound tags
 * @method RetryPolicy getRetryPolicy() Obtain Retry policy
 * @method void setRetryPolicy(RetryPolicy $RetryPolicy) Set Retry policy
 */
class ConsumeGroupItem extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Consumer group name
     */
    public $ConsumerGroup;

    /**
     * @var boolean Enable consumption
     */
    public $ConsumeEnable;

    /**
     * @var boolean Ordered delivery: true
Concurrent delivery: false.
     */
    public $ConsumeMessageOrderly;

    /**
     * @var integer Maximum number of retries
     */
    public $MaxRetryTimes;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string ID of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterIdV4;

    /**
     * @var string Namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceV4;

    /**
     * @var string Consumer group name of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumerGroupV4;

    /**
     * @var string Complete namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullNamespaceV4;

    /**
     * @var integer Number of subscribed topics.
     */
    public $SubscribeTopicNum;

    /**
     * @var integer Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var array List of bound tags
     */
    public $TagList;

    /**
     * @var RetryPolicy Retry policy
     */
    public $RetryPolicy;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $ConsumerGroup Consumer group name
     * @param boolean $ConsumeEnable Enable consumption
     * @param boolean $ConsumeMessageOrderly Ordered delivery: true
Concurrent delivery: false.
     * @param integer $MaxRetryTimes Maximum number of retries
     * @param string $Remark Remarks
     * @param string $ClusterIdV4 ID of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceV4 Namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumerGroupV4 Consumer group name of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullNamespaceV4 Complete namespace of a 4.x cluster.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubscribeTopicNum Number of subscribed topics.
     * @param integer $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagList List of bound tags
     * @param RetryPolicy $RetryPolicy Retry policy
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterIdV4",$param) and $param["ClusterIdV4"] !== null) {
            $this->ClusterIdV4 = $param["ClusterIdV4"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("ConsumerGroupV4",$param) and $param["ConsumerGroupV4"] !== null) {
            $this->ConsumerGroupV4 = $param["ConsumerGroupV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("SubscribeTopicNum",$param) and $param["SubscribeTopicNum"] !== null) {
            $this->SubscribeTopicNum = $param["SubscribeTopicNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("RetryPolicy",$param) and $param["RetryPolicy"] !== null) {
            $this->RetryPolicy = new RetryPolicy();
            $this->RetryPolicy->deserialize($param["RetryPolicy"]);
        }
    }
}
