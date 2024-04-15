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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic request structure.
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method integer getPartitionCount() Obtain Number of log topic partitions. Default value: 1. Maximum value: 10
 * @method void setPartitionCount(integer $PartitionCount) Set Number of log topic partitions. Default value: 1. Maximum value: 10
 * @method array getTags() Obtain Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key.
 * @method void setTags(array $Tags) Set Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key.
 * @method boolean getAutoSplit() Obtain Whether to enable automatic split. Default value: true
 * @method void setAutoSplit(boolean $AutoSplit) Set Whether to enable automatic split. Default value: true
 * @method integer getMaxSplitPartitions() Obtain Maximum number of partitions to split into for this topic if automatic split is enabled. Default value: 50
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) Set Maximum number of partitions to split into for this topic if automatic split is enabled. Default value: 50
 * @method string getStorageType() Obtain Log topic storage type. Valid values: `hot` (STANDARD storage); `cold` (IA storage). Default value: `hot`.
 * @method void setStorageType(string $StorageType) Set Log topic storage type. Valid values: `hot` (STANDARD storage); `cold` (IA storage). Default value: `hot`.
 * @method integer getPeriod() Obtain lifetime. Unit: days. Standard storage value range: 1 to 3600. Infrequent storage value range: 7 to 3600 days. A value of 3640 indicates permanent retention.If this value is not input, it defaults to the Period value of the log set corresponding to the accessed log topic (defaults to 30 days in case of access failure).
 * @method void setPeriod(integer $Period) Set lifetime. Unit: days. Standard storage value range: 1 to 3600. Infrequent storage value range: 7 to 3600 days. A value of 3640 indicates permanent retention.If this value is not input, it defaults to the Period value of the log set corresponding to the accessed log topic (defaults to 30 days in case of access failure).
 * @method string getDescribes() Obtain Log topic description
 * @method void setDescribes(string $Describes) Set Log topic description
 * @method integer getHotPeriod() Obtain 0: Disable log settlement.Non-zero: The number of Standard Storage days after enabling log settlement. HotPeriod needs to be greater than or equal to 7, and less than Period.Effective only when StorageType is hot.
 * @method void setHotPeriod(integer $HotPeriod) Set 0: Disable log settlement.Non-zero: The number of Standard Storage days after enabling log settlement. HotPeriod needs to be greater than or equal to 7, and less than Period.Effective only when StorageType is hot.
 * @method boolean getIsWebTracking() Obtain Authentication switch. false: off; true: on. Default is false.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
 * @method void setIsWebTracking(boolean $IsWebTracking) Set Authentication switch. false: off; true: on. Default is false.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var integer Number of log topic partitions. Default value: 1. Maximum value: 10
     */
    public $PartitionCount;

    /**
     * @var array Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key.
     */
    public $Tags;

    /**
     * @var boolean Whether to enable automatic split. Default value: true
     */
    public $AutoSplit;

    /**
     * @var integer Maximum number of partitions to split into for this topic if automatic split is enabled. Default value: 50
     */
    public $MaxSplitPartitions;

    /**
     * @var string Log topic storage type. Valid values: `hot` (STANDARD storage); `cold` (IA storage). Default value: `hot`.
     */
    public $StorageType;

    /**
     * @var integer lifetime. Unit: days. Standard storage value range: 1 to 3600. Infrequent storage value range: 7 to 3600 days. A value of 3640 indicates permanent retention.If this value is not input, it defaults to the Period value of the log set corresponding to the accessed log topic (defaults to 30 days in case of access failure).
     */
    public $Period;

    /**
     * @var string Log topic description
     */
    public $Describes;

    /**
     * @var integer 0: Disable log settlement.Non-zero: The number of Standard Storage days after enabling log settlement. HotPeriod needs to be greater than or equal to 7, and less than Period.Effective only when StorageType is hot.
     */
    public $HotPeriod;

    /**
     * @var boolean Authentication switch. false: off; true: on. Default is false.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
     */
    public $IsWebTracking;

    /**
     * @param string $LogsetId Logset ID
     * @param string $TopicName Log topic name
     * @param integer $PartitionCount Number of log topic partitions. Default value: 1. Maximum value: 10
     * @param array $Tags Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and a resource can be bound to only one tag key.
     * @param boolean $AutoSplit Whether to enable automatic split. Default value: true
     * @param integer $MaxSplitPartitions Maximum number of partitions to split into for this topic if automatic split is enabled. Default value: 50
     * @param string $StorageType Log topic storage type. Valid values: `hot` (STANDARD storage); `cold` (IA storage). Default value: `hot`.
     * @param integer $Period lifetime. Unit: days. Standard storage value range: 1 to 3600. Infrequent storage value range: 7 to 3600 days. A value of 3640 indicates permanent retention.If this value is not input, it defaults to the Period value of the log set corresponding to the accessed log topic (defaults to 30 days in case of access failure).
     * @param string $Describes Log topic description
     * @param integer $HotPeriod 0: Disable log settlement.Non-zero: The number of Standard Storage days after enabling log settlement. HotPeriod needs to be greater than or equal to 7, and less than Period.Effective only when StorageType is hot.
     * @param boolean $IsWebTracking Authentication switch. false: off; true: on. Default is false.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoSplit",$param) and $param["AutoSplit"] !== null) {
            $this->AutoSplit = $param["AutoSplit"];
        }

        if (array_key_exists("MaxSplitPartitions",$param) and $param["MaxSplitPartitions"] !== null) {
            $this->MaxSplitPartitions = $param["MaxSplitPartitions"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Describes",$param) and $param["Describes"] !== null) {
            $this->Describes = $param["Describes"];
        }

        if (array_key_exists("HotPeriod",$param) and $param["HotPeriod"] !== null) {
            $this->HotPeriod = $param["HotPeriod"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }
    }
}
