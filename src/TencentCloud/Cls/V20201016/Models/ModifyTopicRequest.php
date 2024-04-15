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
 * ModifyTopic request structure.
 *
 * @method string getTopicId() Obtain Log topic ID
 * @method void setTopicId(string $TopicId) Set Log topic ID
 * @method string getTopicName() Obtain Log topic name
 * @method void setTopicName(string $TopicName) Set Log topic name
 * @method array getTags() Obtain Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and they must be unique.
 * @method void setTags(array $Tags) Set Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and they must be unique.
 * @method boolean getStatus() Obtain Whether the topic has log collection enabled. true: collection enabled; false: collection disabled.The console currently does not support modifying this parameter.
 * @method void setStatus(boolean $Status) Set Whether the topic has log collection enabled. true: collection enabled; false: collection disabled.The console currently does not support modifying this parameter.
 * @method boolean getAutoSplit() Obtain Whether to enable automatic split
 * @method void setAutoSplit(boolean $AutoSplit) Set Whether to enable automatic split
 * @method integer getMaxSplitPartitions() Obtain Maximum number of partitions to split into for this topic if automatic split is enabled
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) Set Maximum number of partitions to split into for this topic if automatic split is enabled
 * @method integer getPeriod() Obtain Lifecycle in days. Value range: 1 to 3600 (STANDARD storage); 7 to 3600 (IA storage). 3640 indicates permanent retention.
 * @method void setPeriod(integer $Period) Set Lifecycle in days. Value range: 1 to 3600 (STANDARD storage); 7 to 3600 (IA storage). 3640 indicates permanent retention.
 * @method string getDescribes() Obtain Log topic description
 * @method void setDescribes(string $Describes) Set Log topic description
 * @method integer getHotPeriod() Obtain `0`: Disable log transitioning.
A value other than `0`: The number of STANDARD storage days after log transitioning is enabled (valid only if `StorageType` is `hot`). Note: `HotPeriod` should be greater than or equal to `7` and less than `Period`.
 * @method void setHotPeriod(integer $HotPeriod) Set `0`: Disable log transitioning.
A value other than `0`: The number of STANDARD storage days after log transitioning is enabled (valid only if `StorageType` is `hot`). Note: `HotPeriod` should be greater than or equal to `7` and less than `Period`.
 * @method boolean getIsWebTracking() Obtain Free authentication switch. false: disabled; true: enabled.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
 * @method void setIsWebTracking(boolean $IsWebTracking) Set Free authentication switch. false: disabled; true: enabled.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string Log topic ID
     */
    public $TopicId;

    /**
     * @var string Log topic name
     */
    public $TopicName;

    /**
     * @var array Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and they must be unique.
     */
    public $Tags;

    /**
     * @var boolean Whether the topic has log collection enabled. true: collection enabled; false: collection disabled.The console currently does not support modifying this parameter.
     */
    public $Status;

    /**
     * @var boolean Whether to enable automatic split
     */
    public $AutoSplit;

    /**
     * @var integer Maximum number of partitions to split into for this topic if automatic split is enabled
     */
    public $MaxSplitPartitions;

    /**
     * @var integer Lifecycle in days. Value range: 1 to 3600 (STANDARD storage); 7 to 3600 (IA storage). 3640 indicates permanent retention.
     */
    public $Period;

    /**
     * @var string Log topic description
     */
    public $Describes;

    /**
     * @var integer `0`: Disable log transitioning.
A value other than `0`: The number of STANDARD storage days after log transitioning is enabled (valid only if `StorageType` is `hot`). Note: `HotPeriod` should be greater than or equal to `7` and less than `Period`.
     */
    public $HotPeriod;

    /**
     * @var boolean Free authentication switch. false: disabled; true: enabled.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
     */
    public $IsWebTracking;

    /**
     * @param string $TopicId Log topic ID
     * @param string $TopicName Log topic name
     * @param array $Tags Tag description list. This parameter is used to bind a tag to a log topic. Up to 10 tag key-value pairs are supported, and they must be unique.
     * @param boolean $Status Whether the topic has log collection enabled. true: collection enabled; false: collection disabled.The console currently does not support modifying this parameter.
     * @param boolean $AutoSplit Whether to enable automatic split
     * @param integer $MaxSplitPartitions Maximum number of partitions to split into for this topic if automatic split is enabled
     * @param integer $Period Lifecycle in days. Value range: 1 to 3600 (STANDARD storage); 7 to 3600 (IA storage). 3640 indicates permanent retention.
     * @param string $Describes Log topic description
     * @param integer $HotPeriod `0`: Disable log transitioning.
A value other than `0`: The number of STANDARD storage days after log transitioning is enabled (valid only if `StorageType` is `hot`). Note: `HotPeriod` should be greater than or equal to `7` and less than `Period`.
     * @param boolean $IsWebTracking Free authentication switch. false: disabled; true: enabled.Once enabled, it will support specified operations for anonymous access to this log topic. For details, please see [log Topic](https://intl.cloud.tencent.com/document/product/614/41035?from_cn_redirect=1).
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoSplit",$param) and $param["AutoSplit"] !== null) {
            $this->AutoSplit = $param["AutoSplit"];
        }

        if (array_key_exists("MaxSplitPartitions",$param) and $param["MaxSplitPartitions"] !== null) {
            $this->MaxSplitPartitions = $param["MaxSplitPartitions"];
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
