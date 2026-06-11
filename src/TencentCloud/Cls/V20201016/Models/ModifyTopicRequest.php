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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTopic request structure.
 *
 * @method string getTopicId() Obtain <p>Topic ID - Obtain the topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Topic List</a>.</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic ID - Obtain the topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Topic List</a>.</p>
 * @method string getTopicName() Obtain <p>Topic name<br>Input restrictions:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
 * @method void setTopicName(string $TopicName) Set <p>Topic name<br>Input restrictions:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
 * @method array getTags() Obtain <p>List of tag descriptions. By specifying this parameter, you can bind tags to the appropriate topic simultaneously. Supports up to 10 tag key-value pairs, and no duplicate key-value pairs are allowed.</p>
 * @method void setTags(array $Tags) Set <p>List of tag descriptions. By specifying this parameter, you can bind tags to the appropriate topic simultaneously. Supports up to 10 tag key-value pairs, and no duplicate key-value pairs are allowed.</p>
 * @method boolean getStatus() Obtain <p>Whether the topic has log collection enabled. true: start collection; false: disable collection.<br>The console currently does not support modification of this parameter.</p>
 * @method void setStatus(boolean $Status) Set <p>Whether the topic has log collection enabled. true: start collection; false: disable collection.<br>The console currently does not support modification of this parameter.</p>
 * @method boolean getAutoSplit() Obtain <p>Whether to enable auto-split</p>
 * @method void setAutoSplit(boolean $AutoSplit) Set <p>Whether to enable auto-split</p>
 * @method integer getMaxSplitPartitions() Obtain <p>If maximum split is enabled, the maximum number of partitions allowed for this topic;<br>default is 50; must be a positive number</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) Set <p>If maximum split is enabled, the maximum number of partitions allowed for this topic;<br>default is 50; must be a positive number</p>
 * @method integer getPeriod() Obtain <p>Lifecycle in days. Standard storage value range is 1-3600. Infrequent storage value range is 7-3600. A value of 3640 indicates permanent retention.</p>
 * @method void setPeriod(integer $Period) Set <p>Lifecycle in days. Standard storage value range is 1-3600. Infrequent storage value range is 7-3600. A value of 3640 indicates permanent retention.</p>
 * @method string getStorageType() Obtain <p>Storage type: cold infrequent storage, hot standard storage</p>
 * @method void setStorageType(string $StorageType) Set <p>Storage type: cold infrequent storage, hot standard storage</p>
 * @method string getDescribes() Obtain <p>Topic description</p>
 * @method void setDescribes(string $Describes) Set <p>Topic description</p>
 * @method integer getHotPeriod() Obtain <p>0: The log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled for the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
 * @method void setHotPeriod(integer $HotPeriod) Set <p>0: The log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled for the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
 * @method boolean getIsWebTracking() Obtain <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, anonymous access to the log topic will be supported for specified operations. For details, please see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>.</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) Set <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, anonymous access to the log topic will be supported for specified operations. For details, please see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>.</p>
 * @method TopicExtendInfo getExtends() Obtain <p>Topic extended information</p>
 * @method void setExtends(TopicExtendInfo $Extends) Set <p>Topic extended information</p>
 * @method integer getPartitionCount() Obtain <p>Number of topic partitions.<br>Defaults to 1.<br>Value ranges and constraints:</p><ul><li>When the input value &lt;=0, the system automatically adjusts it to 1.</li><li>If MaxSplitPartitions is not passed, PartitionCount must be &lt;=50.</li><li>If MaxSplitPartitions is passed, PartitionCount must be &lt;=MaxSplitPartitions.</li></ul>
 * @method void setPartitionCount(integer $PartitionCount) Set <p>Number of topic partitions.<br>Defaults to 1.<br>Value ranges and constraints:</p><ul><li>When the input value &lt;=0, the system automatically adjusts it to 1.</li><li>If MaxSplitPartitions is not passed, PartitionCount must be &lt;=50.</li><li>If MaxSplitPartitions is passed, PartitionCount must be &lt;=MaxSplitPartitions.</li></ul>
 * @method string getCancelTopicAsyncTaskID() Obtain <p>id of the cancel switch storage task</p><ul><li>Obtain the id of the cancel switch storage task [TopicAsyncTaskID field in Topics] by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">get log topic list</a>.</li></ul>
 * @method void setCancelTopicAsyncTaskID(string $CancelTopicAsyncTaskID) Set <p>id of the cancel switch storage task</p><ul><li>Obtain the id of the cancel switch storage task [TopicAsyncTaskID field in Topics] by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">get log topic list</a>.</li></ul>
 * @method integer getEncryption() Obtain <p>Encryption-related parameters. Encrypted regions are supported and can be passed for allowlisted users. Cannot be passed in other scenarios.<br>Only support passing in 1: kms-cls secret key for cloud product encryption.</p>
 * @method void setEncryption(integer $Encryption) Set <p>Encryption-related parameters. Encrypted regions are supported and can be passed for allowlisted users. Cannot be passed in other scenarios.<br>Only support passing in 1: kms-cls secret key for cloud product encryption.</p>
 * @method boolean getIsSourceFrom() Obtain <p>Enable logging of public network source IP and server receipt time</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) Set <p>Enable logging of public network source IP and server receipt time</p>
 * @method integer getBillingMode() Obtain <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supports some customers)</li></ul><p>Default value: 0</p>
 * @method void setBillingMode(integer $BillingMode) Set <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supports some customers)</li></ul><p>Default value: 0</p>
 */
class ModifyTopicRequest extends AbstractModel
{
    /**
     * @var string <p>Topic ID - Obtain the topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Topic List</a>.</p>
     */
    public $TopicId;

    /**
     * @var string <p>Topic name<br>Input restrictions:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
     */
    public $TopicName;

    /**
     * @var array <p>List of tag descriptions. By specifying this parameter, you can bind tags to the appropriate topic simultaneously. Supports up to 10 tag key-value pairs, and no duplicate key-value pairs are allowed.</p>
     */
    public $Tags;

    /**
     * @var boolean <p>Whether the topic has log collection enabled. true: start collection; false: disable collection.<br>The console currently does not support modification of this parameter.</p>
     */
    public $Status;

    /**
     * @var boolean <p>Whether to enable auto-split</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>If maximum split is enabled, the maximum number of partitions allowed for this topic;<br>default is 50; must be a positive number</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var integer <p>Lifecycle in days. Standard storage value range is 1-3600. Infrequent storage value range is 7-3600. A value of 3640 indicates permanent retention.</p>
     */
    public $Period;

    /**
     * @var string <p>Storage type: cold infrequent storage, hot standard storage</p>
     */
    public $StorageType;

    /**
     * @var string <p>Topic description</p>
     */
    public $Describes;

    /**
     * @var integer <p>0: The log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled for the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
     */
    public $HotPeriod;

    /**
     * @var boolean <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, anonymous access to the log topic will be supported for specified operations. For details, please see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>.</p>
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo <p>Topic extended information</p>
     */
    public $Extends;

    /**
     * @var integer <p>Number of topic partitions.<br>Defaults to 1.<br>Value ranges and constraints:</p><ul><li>When the input value &lt;=0, the system automatically adjusts it to 1.</li><li>If MaxSplitPartitions is not passed, PartitionCount must be &lt;=50.</li><li>If MaxSplitPartitions is passed, PartitionCount must be &lt;=MaxSplitPartitions.</li></ul>
     */
    public $PartitionCount;

    /**
     * @var string <p>id of the cancel switch storage task</p><ul><li>Obtain the id of the cancel switch storage task [TopicAsyncTaskID field in Topics] by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">get log topic list</a>.</li></ul>
     */
    public $CancelTopicAsyncTaskID;

    /**
     * @var integer <p>Encryption-related parameters. Encrypted regions are supported and can be passed for allowlisted users. Cannot be passed in other scenarios.<br>Only support passing in 1: kms-cls secret key for cloud product encryption.</p>
     */
    public $Encryption;

    /**
     * @var boolean <p>Enable logging of public network source IP and server receipt time</p>
     */
    public $IsSourceFrom;

    /**
     * @var integer <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supports some customers)</li></ul><p>Default value: 0</p>
     */
    public $BillingMode;

    /**
     * @param string $TopicId <p>Topic ID - Obtain the topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Topic List</a>.</p>
     * @param string $TopicName <p>Topic name<br>Input restrictions:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
     * @param array $Tags <p>List of tag descriptions. By specifying this parameter, you can bind tags to the appropriate topic simultaneously. Supports up to 10 tag key-value pairs, and no duplicate key-value pairs are allowed.</p>
     * @param boolean $Status <p>Whether the topic has log collection enabled. true: start collection; false: disable collection.<br>The console currently does not support modification of this parameter.</p>
     * @param boolean $AutoSplit <p>Whether to enable auto-split</p>
     * @param integer $MaxSplitPartitions <p>If maximum split is enabled, the maximum number of partitions allowed for this topic;<br>default is 50; must be a positive number</p>
     * @param integer $Period <p>Lifecycle in days. Standard storage value range is 1-3600. Infrequent storage value range is 7-3600. A value of 3640 indicates permanent retention.</p>
     * @param string $StorageType <p>Storage type: cold infrequent storage, hot standard storage</p>
     * @param string $Describes <p>Topic description</p>
     * @param integer $HotPeriod <p>0: The log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled for the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
     * @param boolean $IsWebTracking <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, anonymous access to the log topic will be supported for specified operations. For details, please see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>.</p>
     * @param TopicExtendInfo $Extends <p>Topic extended information</p>
     * @param integer $PartitionCount <p>Number of topic partitions.<br>Defaults to 1.<br>Value ranges and constraints:</p><ul><li>When the input value &lt;=0, the system automatically adjusts it to 1.</li><li>If MaxSplitPartitions is not passed, PartitionCount must be &lt;=50.</li><li>If MaxSplitPartitions is passed, PartitionCount must be &lt;=MaxSplitPartitions.</li></ul>
     * @param string $CancelTopicAsyncTaskID <p>id of the cancel switch storage task</p><ul><li>Obtain the id of the cancel switch storage task [TopicAsyncTaskID field in Topics] by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">get log topic list</a>.</li></ul>
     * @param integer $Encryption <p>Encryption-related parameters. Encrypted regions are supported and can be passed for allowlisted users. Cannot be passed in other scenarios.<br>Only support passing in 1: kms-cls secret key for cloud product encryption.</p>
     * @param boolean $IsSourceFrom <p>Enable logging of public network source IP and server receipt time</p>
     * @param integer $BillingMode <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supports some customers)</li></ul><p>Default value: 0</p>
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
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

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("CancelTopicAsyncTaskID",$param) and $param["CancelTopicAsyncTaskID"] !== null) {
            $this->CancelTopicAsyncTaskID = $param["CancelTopicAsyncTaskID"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }
    }
}
