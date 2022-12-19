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
 * Log topic information
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method integer getPartitionCount() Obtain Number of topic partitions
 * @method void setPartitionCount(integer $PartitionCount) Set Number of topic partitions
 * @method boolean getIndex() Obtain Whether index is enabled
 * @method void setIndex(boolean $Index) Set Whether index is enabled
 * @method string getAssumerName() Obtain Cloud product identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssumerName(string $AssumerName) Set Cloud product identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method boolean getStatus() Obtain Whether collection is enabled in the log topic
 * @method void setStatus(boolean $Status) Set Whether collection is enabled in the log topic
 * @method array getTags() Obtain Information of tags bound to log topic
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Information of tags bound to log topic
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getAutoSplit() Obtain Whether automatic split is enabled for this topic
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoSplit(boolean $AutoSplit) Set Whether automatic split is enabled for this topic
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxSplitPartitions() Obtain Maximum number of partitions to split into for this topic if automatic split is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) Set Maximum number of partitions to split into for this topic if automatic split is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain Log topic storage class
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set Log topic storage class
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getPeriod() Obtain Lifecycle in days. Value range: 1-3600 (3640 indicates permanent retention)
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPeriod(integer $Period) Set Lifecycle in days. Value range: 1-3600 (3640 indicates permanent retention)
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSubAssumerName() Obtain Cloud product sub-identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product and its log type, such as `TKE-Audit` or `TKE-Event`. Some products only return the cloud product identifier (`AssumerName`), without this field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubAssumerName(string $SubAssumerName) Set Cloud product sub-identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product and its log type, such as `TKE-Audit` or `TKE-Event`. Some products only return the cloud product identifier (`AssumerName`), without this field.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescribes() Obtain Log topic description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescribes(string $Describes) Set Log topic description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TopicInfo extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var integer Number of topic partitions
     */
    public $PartitionCount;

    /**
     * @var boolean Whether index is enabled
     */
    public $Index;

    /**
     * @var string Cloud product identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssumerName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var boolean Whether collection is enabled in the log topic
     */
    public $Status;

    /**
     * @var array Information of tags bound to log topic
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Whether automatic split is enabled for this topic
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoSplit;

    /**
     * @var integer Maximum number of partitions to split into for this topic if automatic split is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxSplitPartitions;

    /**
     * @var string Log topic storage class
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @var integer Lifecycle in days. Value range: 1-3600 (3640 indicates permanent retention)
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Period;

    /**
     * @var string Cloud product sub-identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product and its log type, such as `TKE-Audit` or `TKE-Event`. Some products only return the cloud product identifier (`AssumerName`), without this field.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubAssumerName;

    /**
     * @var string Log topic description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Describes;

    /**
     * @param string $LogsetId Logset ID
     * @param string $TopicId Log topic ID
     * @param string $TopicName Log topic name
     * @param integer $PartitionCount Number of topic partitions
     * @param boolean $Index Whether index is enabled
     * @param string $AssumerName Cloud product identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
     * @param boolean $Status Whether collection is enabled in the log topic
     * @param array $Tags Information of tags bound to log topic
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $AutoSplit Whether automatic split is enabled for this topic
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxSplitPartitions Maximum number of partitions to split into for this topic if automatic split is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $StorageType Log topic storage class
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Period Lifecycle in days. Value range: 1-3600 (3640 indicates permanent retention)
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SubAssumerName Cloud product sub-identifier. If the log topic is created by another cloud product, this field returns the name of the cloud product and its log type, such as `TKE-Audit` or `TKE-Event`. Some products only return the cloud product identifier (`AssumerName`), without this field.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Describes Log topic description
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("SubAssumerName",$param) and $param["SubAssumerName"] !== null) {
            $this->SubAssumerName = $param["SubAssumerName"];
        }

        if (array_key_exists("Describes",$param) and $param["Describes"] !== null) {
            $this->Describes = $param["Describes"];
        }
    }
}
