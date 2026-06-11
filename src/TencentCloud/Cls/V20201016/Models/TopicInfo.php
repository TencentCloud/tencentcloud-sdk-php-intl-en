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
 * Basic Topic Information
 *
 * @method string getLogsetId() Obtain <p>Logset ID</p>
 * @method void setLogsetId(string $LogsetId) Set <p>Logset ID</p>
 * @method string getTopicId() Obtain <p>Topic ID</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic ID</p>
 * @method string getTopicName() Obtain <p>Topic name</p>
 * @method void setTopicName(string $TopicName) Set <p>Topic name</p>
 * @method integer getPartitionCount() Obtain <p>Topic partition count</p>
 * @method void setPartitionCount(integer $PartitionCount) Set <p>Topic partition count</p>
 * @method boolean getIndex() Obtain <p>Whether the topic has indexing enabled (the topic type must be log topic)</p>
 * @method void setIndex(boolean $Index) Set <p>Whether the topic has indexing enabled (the topic type must be log topic)</p>
 * @method integer getAssumerUin() Obtain <p>If AssumerUin is not empty, it indicates the Uin of the service provider creating the log topic</p>
 * @method void setAssumerUin(integer $AssumerUin) Set <p>If AssumerUin is not empty, it indicates the Uin of the service provider creating the log topic</p>
 * @method string getAssumerName() Obtain <p>Cloud product identifier. When the topic is created by other cloud products, this field displays the cloud product name, such as CDN, TKE.</p>
 * @method void setAssumerName(string $AssumerName) Set <p>Cloud product identifier. When the topic is created by other cloud products, this field displays the cloud product name, such as CDN, TKE.</p>
 * @method string getCreateTime() Obtain <p>Creation time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time. Format: yyyy-MM-dd HH:mm:ss</p>
 * @method boolean getStatus() Obtain <p>Whether the topic has log collection enabled. true: enable collection; false: disable collection.<br>Enabled by default during log topic creation. You can modify this field via SDK invocation of ModifyTopic.<br>The console currently does not support modification of this parameter.</p>
 * @method void setStatus(boolean $Status) Set <p>Whether the topic has log collection enabled. true: enable collection; false: disable collection.<br>Enabled by default during log topic creation. You can modify this field via SDK invocation of ModifyTopic.<br>The console currently does not support modification of this parameter.</p>
 * @method array getTags() Obtain <p>Tag information bound to the topic</p>
 * @method void setTags(array $Tags) Set <p>Tag information bound to the topic</p>
 * @method string getRoleName() Obtain <p>If RoleName is not empty, it indicates the role used by the service provider creating the log topic</p>
 * @method void setRoleName(string $RoleName) Set <p>If RoleName is not empty, it indicates the role used by the service provider creating the log topic</p>
 * @method boolean getAutoSplit() Obtain <p>Whether the topic has auto-split enabled</p>
 * @method void setAutoSplit(boolean $AutoSplit) Set <p>Whether the topic has auto-split enabled</p>
 * @method integer getMaxSplitPartitions() Obtain <p>Maximum number of partitions allowed for the topic if auto-split is enabled</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) Set <p>Maximum number of partitions allowed for the topic if auto-split is enabled</p>
 * @method string getStorageType() Obtain <p>Storage type of the topic</p><ul><li>hot: standard storage</li><li>cold: infrequent storage</li></ul>
 * @method void setStorageType(string $StorageType) Set <p>Storage type of the topic</p><ul><li>hot: standard storage</li><li>cold: infrequent storage</li></ul>
 * @method integer getPeriod() Obtain <p>Lifecycle in days, valid values 1~3600. A value of 3640 indicates permanent retention.</p>
 * @method void setPeriod(integer $Period) Set <p>Lifecycle in days, valid values 1~3600. A value of 3640 indicates permanent retention.</p>
 * @method string getSubAssumerName() Obtain <p>Cloud product sub-identifier. When the log topic is created by other cloud products, this field displays the cloud product name and its log type sub-category, such as TKE-Audit, TKE-Event. Some cloud products only have the cloud product identifier (AssumerName) without this field.</p>
 * @method void setSubAssumerName(string $SubAssumerName) Set <p>Cloud product sub-identifier. When the log topic is created by other cloud products, this field displays the cloud product name and its log type sub-category, such as TKE-Audit, TKE-Event. Some cloud products only have the cloud product identifier (AssumerName) without this field.</p>
 * @method string getDescribes() Obtain <p>Topic description</p>
 * @method void setDescribes(string $Describes) Set <p>Topic description</p>
 * @method integer getHotPeriod() Obtain <p>Enable log settlement, lifecycle of standard storage, hotPeriod &lt; Period.<br>Standard storage is hotPeriod, infrequent storage is Period-hotPeriod. (Topic type must be log topic)<br>HotPeriod=0 means log settlement is not enabled.</p>
 * @method void setHotPeriod(integer $HotPeriod) Set <p>Enable log settlement, lifecycle of standard storage, hotPeriod &lt; Period.<br>Standard storage is hotPeriod, infrequent storage is Period-hotPeriod. (Topic type must be log topic)<br>HotPeriod=0 means log settlement is not enabled.</p>
 * @method string getKeyId() Obtain <p>kms-cls service key id</p>
 * @method void setKeyId(string $KeyId) Set <p>kms-cls service key id</p>
 * @method integer getBizType() Obtain <p>Topic type.</p><ul><li>0: Log topic</li><li>1: Metric topic</li></ul>
 * @method void setBizType(integer $BizType) Set <p>Topic type.</p><ul><li>0: Log topic</li><li>1: Metric topic</li></ul>
 * @method boolean getIsWebTracking() Obtain <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, designated operations will be supported for anonymous access to the log topic. See <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a> for details.</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) Set <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, designated operations will be supported for anonymous access to the log topic. See <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a> for details.</p>
 * @method TopicExtendInfo getExtends() Obtain <p>Log topic extended information</p>
 * @method void setExtends(TopicExtendInfo $Extends) Set <p>Log topic extended information</p>
 * @method string getTopicAsyncTaskID() Obtain <p>Async migration task ID</p>
 * @method void setTopicAsyncTaskID(string $TopicAsyncTaskID) Set <p>Async migration task ID</p>
 * @method integer getMigrationStatus() Obtain <p>Asynchronous migration status</p><ul><li>1: In progress</li><li>2: Completed</li><li>3: Failure</li><li>4: Canceled</li></ul>
 * @method void setMigrationStatus(integer $MigrationStatus) Set <p>Asynchronous migration status</p><ul><li>1: In progress</li><li>2: Completed</li><li>3: Failure</li><li>4: Canceled</li></ul>
 * @method string getEffectiveDate() Obtain <p>After async migration, expected effective date<br>Time format: yyyy-MM-dd HH:mm:ss</p>
 * @method void setEffectiveDate(string $EffectiveDate) Set <p>After async migration, expected effective date<br>Time format: yyyy-MM-dd HH:mm:ss</p>
 * @method boolean getIsSourceFrom() Obtain <p>IsSourceFrom Enable recording public network source IP and server receipt time</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) Set <p>IsSourceFrom Enable recording public network source IP and server receipt time</p>
 * @method integer getBillingMode() Obtain <p>Current billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently supported for some customers only)</li></ul>
 * @method void setBillingMode(integer $BillingMode) Set <p>Current billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently supported for some customers only)</li></ul>
 * @method integer getNewBillingMode() Obtain <p>If there is an async task, the new billing model after the task succeeds</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently only supported for some customers)</li></ul>
 * @method void setNewBillingMode(integer $NewBillingMode) Set <p>If there is an async task, the new billing model after the task succeeds</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently only supported for some customers)</li></ul>
 */
class TopicInfo extends AbstractModel
{
    /**
     * @var string <p>Logset ID</p>
     */
    public $LogsetId;

    /**
     * @var string <p>Topic ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>Topic name</p>
     */
    public $TopicName;

    /**
     * @var integer <p>Topic partition count</p>
     */
    public $PartitionCount;

    /**
     * @var boolean <p>Whether the topic has indexing enabled (the topic type must be log topic)</p>
     */
    public $Index;

    /**
     * @var integer <p>If AssumerUin is not empty, it indicates the Uin of the service provider creating the log topic</p>
     */
    public $AssumerUin;

    /**
     * @var string <p>Cloud product identifier. When the topic is created by other cloud products, this field displays the cloud product name, such as CDN, TKE.</p>
     */
    public $AssumerName;

    /**
     * @var string <p>Creation time. Format: yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>Whether the topic has log collection enabled. true: enable collection; false: disable collection.<br>Enabled by default during log topic creation. You can modify this field via SDK invocation of ModifyTopic.<br>The console currently does not support modification of this parameter.</p>
     */
    public $Status;

    /**
     * @var array <p>Tag information bound to the topic</p>
     */
    public $Tags;

    /**
     * @var string <p>If RoleName is not empty, it indicates the role used by the service provider creating the log topic</p>
     */
    public $RoleName;

    /**
     * @var boolean <p>Whether the topic has auto-split enabled</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>Maximum number of partitions allowed for the topic if auto-split is enabled</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var string <p>Storage type of the topic</p><ul><li>hot: standard storage</li><li>cold: infrequent storage</li></ul>
     */
    public $StorageType;

    /**
     * @var integer <p>Lifecycle in days, valid values 1~3600. A value of 3640 indicates permanent retention.</p>
     */
    public $Period;

    /**
     * @var string <p>Cloud product sub-identifier. When the log topic is created by other cloud products, this field displays the cloud product name and its log type sub-category, such as TKE-Audit, TKE-Event. Some cloud products only have the cloud product identifier (AssumerName) without this field.</p>
     */
    public $SubAssumerName;

    /**
     * @var string <p>Topic description</p>
     */
    public $Describes;

    /**
     * @var integer <p>Enable log settlement, lifecycle of standard storage, hotPeriod &lt; Period.<br>Standard storage is hotPeriod, infrequent storage is Period-hotPeriod. (Topic type must be log topic)<br>HotPeriod=0 means log settlement is not enabled.</p>
     */
    public $HotPeriod;

    /**
     * @var string <p>kms-cls service key id</p>
     */
    public $KeyId;

    /**
     * @var integer <p>Topic type.</p><ul><li>0: Log topic</li><li>1: Metric topic</li></ul>
     */
    public $BizType;

    /**
     * @var boolean <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, designated operations will be supported for anonymous access to the log topic. See <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a> for details.</p>
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo <p>Log topic extended information</p>
     */
    public $Extends;

    /**
     * @var string <p>Async migration task ID</p>
     */
    public $TopicAsyncTaskID;

    /**
     * @var integer <p>Asynchronous migration status</p><ul><li>1: In progress</li><li>2: Completed</li><li>3: Failure</li><li>4: Canceled</li></ul>
     */
    public $MigrationStatus;

    /**
     * @var string <p>After async migration, expected effective date<br>Time format: yyyy-MM-dd HH:mm:ss</p>
     */
    public $EffectiveDate;

    /**
     * @var boolean <p>IsSourceFrom Enable recording public network source IP and server receipt time</p>
     */
    public $IsSourceFrom;

    /**
     * @var integer <p>Current billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently supported for some customers only)</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer <p>If there is an async task, the new billing model after the task succeeds</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently only supported for some customers)</li></ul>
     */
    public $NewBillingMode;

    /**
     * @param string $LogsetId <p>Logset ID</p>
     * @param string $TopicId <p>Topic ID</p>
     * @param string $TopicName <p>Topic name</p>
     * @param integer $PartitionCount <p>Topic partition count</p>
     * @param boolean $Index <p>Whether the topic has indexing enabled (the topic type must be log topic)</p>
     * @param integer $AssumerUin <p>If AssumerUin is not empty, it indicates the Uin of the service provider creating the log topic</p>
     * @param string $AssumerName <p>Cloud product identifier. When the topic is created by other cloud products, this field displays the cloud product name, such as CDN, TKE.</p>
     * @param string $CreateTime <p>Creation time. Format: yyyy-MM-dd HH:mm:ss</p>
     * @param boolean $Status <p>Whether the topic has log collection enabled. true: enable collection; false: disable collection.<br>Enabled by default during log topic creation. You can modify this field via SDK invocation of ModifyTopic.<br>The console currently does not support modification of this parameter.</p>
     * @param array $Tags <p>Tag information bound to the topic</p>
     * @param string $RoleName <p>If RoleName is not empty, it indicates the role used by the service provider creating the log topic</p>
     * @param boolean $AutoSplit <p>Whether the topic has auto-split enabled</p>
     * @param integer $MaxSplitPartitions <p>Maximum number of partitions allowed for the topic if auto-split is enabled</p>
     * @param string $StorageType <p>Storage type of the topic</p><ul><li>hot: standard storage</li><li>cold: infrequent storage</li></ul>
     * @param integer $Period <p>Lifecycle in days, valid values 1~3600. A value of 3640 indicates permanent retention.</p>
     * @param string $SubAssumerName <p>Cloud product sub-identifier. When the log topic is created by other cloud products, this field displays the cloud product name and its log type sub-category, such as TKE-Audit, TKE-Event. Some cloud products only have the cloud product identifier (AssumerName) without this field.</p>
     * @param string $Describes <p>Topic description</p>
     * @param integer $HotPeriod <p>Enable log settlement, lifecycle of standard storage, hotPeriod &lt; Period.<br>Standard storage is hotPeriod, infrequent storage is Period-hotPeriod. (Topic type must be log topic)<br>HotPeriod=0 means log settlement is not enabled.</p>
     * @param string $KeyId <p>kms-cls service key id</p>
     * @param integer $BizType <p>Topic type.</p><ul><li>0: Log topic</li><li>1: Metric topic</li></ul>
     * @param boolean $IsWebTracking <p>Free authentication switch. false: disabled; true: enabled.<br>Once enabled, designated operations will be supported for anonymous access to the log topic. See <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a> for details.</p>
     * @param TopicExtendInfo $Extends <p>Log topic extended information</p>
     * @param string $TopicAsyncTaskID <p>Async migration task ID</p>
     * @param integer $MigrationStatus <p>Asynchronous migration status</p><ul><li>1: In progress</li><li>2: Completed</li><li>3: Failure</li><li>4: Canceled</li></ul>
     * @param string $EffectiveDate <p>After async migration, expected effective date<br>Time format: yyyy-MM-dd HH:mm:ss</p>
     * @param boolean $IsSourceFrom <p>IsSourceFrom Enable recording public network source IP and server receipt time</p>
     * @param integer $BillingMode <p>Current billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently supported for some customers only)</li></ul>
     * @param integer $NewBillingMode <p>If there is an async task, the new billing model after the task succeeds</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Billing by raw log size (currently only supported for some customers)</li></ul>
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

        if (array_key_exists("AssumerUin",$param) and $param["AssumerUin"] !== null) {
            $this->AssumerUin = $param["AssumerUin"];
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

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
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

        if (array_key_exists("HotPeriod",$param) and $param["HotPeriod"] !== null) {
            $this->HotPeriod = $param["HotPeriod"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }

        if (array_key_exists("TopicAsyncTaskID",$param) and $param["TopicAsyncTaskID"] !== null) {
            $this->TopicAsyncTaskID = $param["TopicAsyncTaskID"];
        }

        if (array_key_exists("MigrationStatus",$param) and $param["MigrationStatus"] !== null) {
            $this->MigrationStatus = $param["MigrationStatus"];
        }

        if (array_key_exists("EffectiveDate",$param) and $param["EffectiveDate"] !== null) {
            $this->EffectiveDate = $param["EffectiveDate"];
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("NewBillingMode",$param) and $param["NewBillingMode"] !== null) {
            $this->NewBillingMode = $param["NewBillingMode"];
        }
    }
}
