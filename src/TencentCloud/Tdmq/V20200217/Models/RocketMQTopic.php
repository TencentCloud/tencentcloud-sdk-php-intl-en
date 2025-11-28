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
 * RocketMQ topic information
 *
 * @method string getName() Obtain Topic name.
 * @method void setName(string $Name) Set Topic name.
 * @method string getType() Obtain Topic type. Enumerated values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`, `Retry`, and `DeadLetter`.
 * @method void setType(string $Type) Set Topic type. Enumerated values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`, `Retry`, and `DeadLetter`.
 * @method integer getGroupNum() Obtain The number of subscription groups
 * @method void setGroupNum(integer $GroupNum) Set The number of subscription groups
 * @method string getRemark() Obtain Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPartitionNum() Obtain The number of read/write partitions.
 * @method void setPartitionNum(integer $PartitionNum) Set The number of read/write partitions.
 * @method integer getCreateTime() Obtain Creation time in milliseconds.
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds.
 * @method integer getUpdateTime() Obtain Creation time in milliseconds.
 * @method void setUpdateTime(integer $UpdateTime) Set Creation time in milliseconds.
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLastUpdateTime() Obtain Last write time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTime(integer $LastUpdateTime) Set Last write time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubscriptionCount() Obtain Number of Subscriptions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscriptionCount(integer $SubscriptionCount) Set Number of Subscriptions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubscriptionData() Obtain Subscribe to the relationship list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscriptionData(array $SubscriptionData) Set Subscribe to the relationship list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagList() Obtain List of bound tags
 * @method void setTagList(array $TagList) Set List of bound tags
 */
class RocketMQTopic extends AbstractModel
{
    /**
     * @var string Topic name.
     */
    public $Name;

    /**
     * @var string Topic type. Enumerated values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`, `Retry`, and `DeadLetter`.
     */
    public $Type;

    /**
     * @var integer The number of subscription groups
     */
    public $GroupNum;

    /**
     * @var string Description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var integer The number of read/write partitions.
     */
    public $PartitionNum;

    /**
     * @var integer Creation time in milliseconds.
     */
    public $CreateTime;

    /**
     * @var integer Creation time in milliseconds.
     */
    public $UpdateTime;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var integer Last write time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTime;

    /**
     * @var integer Number of Subscriptions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscriptionCount;

    /**
     * @var array Subscribe to the relationship list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscriptionData;

    /**
     * @var array List of bound tags
     */
    public $TagList;

    /**
     * @param string $Name Topic name.
     * @param string $Type Topic type. Enumerated values: `Normal`, `GlobalOrder`, `PartitionedOrder`, `Transaction`, `Retry`, and `DeadLetter`.
     * @param integer $GroupNum The number of subscription groups
     * @param string $Remark Description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PartitionNum The number of read/write partitions.
     * @param integer $CreateTime Creation time in milliseconds.
     * @param integer $UpdateTime Creation time in milliseconds.
     * @param string $InstanceId Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LastUpdateTime Last write time, in seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubscriptionCount Number of Subscriptions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubscriptionData Subscribe to the relationship list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagList List of bound tags
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("SubscriptionCount",$param) and $param["SubscriptionCount"] !== null) {
            $this->SubscriptionCount = $param["SubscriptionCount"];
        }

        if (array_key_exists("SubscriptionData",$param) and $param["SubscriptionData"] !== null) {
            $this->SubscriptionData = [];
            foreach ($param["SubscriptionData"] as $key => $value){
                $obj = new RocketMQSubscription();
                $obj->deserialize($value);
                array_push($this->SubscriptionData, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
