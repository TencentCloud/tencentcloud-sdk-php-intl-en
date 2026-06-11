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
 * CreateTopic request structure.
 *
 * @method string getLogsetId() Obtain <p>Logset ID</p><ul><li>Obtain the logset Id through <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
 * @method void setLogsetId(string $LogsetId) Set <p>Logset ID</p><ul><li>Obtain the logset Id through <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
 * @method string getTopicName() Obtain <p>Topic name<br>Name limitation</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
 * @method void setTopicName(string $TopicName) Set <p>Topic name<br>Name limitation</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
 * @method integer getPartitionCount() Obtain <p>Topic partition count. Default creation is 1 partition. Supports a maximum of 10 partitions.</p>
 * @method void setPartitionCount(integer $PartitionCount) Set <p>Topic partition count. Default creation is 1 partition. Supports a maximum of 10 partitions.</p>
 * @method array getTags() Obtain <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding topic. Up to 10 tag key-value pairs are supported, and the same resource can only be bound to the same tag key.</p>
 * @method void setTags(array $Tags) Set <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding topic. Up to 10 tag key-value pairs are supported, and the same resource can only be bound to the same tag key.</p>
 * @method boolean getAutoSplit() Obtain <p>Whether to enable auto-split, true by default</p>
 * @method void setAutoSplit(boolean $AutoSplit) Set <p>Whether to enable auto-split, true by default</p>
 * @method integer getMaxSplitPartitions() Obtain <p>When auto-split is enabled, the maximum number of partitions allowed for each topic is 50 by default.</p>
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) Set <p>When auto-split is enabled, the maximum number of partitions allowed for each topic is 50 by default.</p>
 * @method string getStorageType() Obtain <p>Log topic storage type. Available values: hot (standard storage), cold (infrequent storage). Default hot. This configuration is not supported for metric topics.</p>
 * @method void setStorageType(string $StorageType) Set <p>Log topic storage type. Available values: hot (standard storage), cold (infrequent storage). Default hot. This configuration is not supported for metric topics.</p>
 * @method integer getPeriod() Obtain <p>Storage time, in days.</p><ul><li>Log topic: When logs are collected to standard storage, the supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Log topic: When logs are collected to infrequently accessed storage, the supported range is 7 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Metric topic: The supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li></ul>
 * @method void setPeriod(integer $Period) Set <p>Storage time, in days.</p><ul><li>Log topic: When logs are collected to standard storage, the supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Log topic: When logs are collected to infrequently accessed storage, the supported range is 7 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Metric topic: The supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li></ul>
 * @method string getDescribes() Obtain <p>Topic description</p>
 * @method void setDescribes(string $Describes) Set <p>Topic description</p>
 * @method integer getHotPeriod() Obtain <p>0: Log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled in the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
 * @method void setHotPeriod(integer $HotPeriod) Set <p>0: Log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled in the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
 * @method integer getEncryption() Obtain <p>Encryption-related parameters. Encrypted regions and allowlisted users can pass this parameter, which cannot be passed in other scenarios.<br>0 or not passed: no encryption<br>1: kms-cls cloud service key encryption</p><p>Supported regions: ap-beijing, ap-guangzhou, ap-shanghai, ap-singapore, ap-bangkok, ap-jakarta, eu-frankfurt, ap-seoul, ap-tokyo</p>
 * @method void setEncryption(integer $Encryption) Set <p>Encryption-related parameters. Encrypted regions and allowlisted users can pass this parameter, which cannot be passed in other scenarios.<br>0 or not passed: no encryption<br>1: kms-cls cloud service key encryption</p><p>Supported regions: ap-beijing, ap-guangzhou, ap-shanghai, ap-singapore, ap-bangkok, ap-jakarta, eu-frankfurt, ap-seoul, ap-tokyo</p>
 * @method integer getBizType() Obtain <p>Topic type</p><ul><li>0: Log topic, default value</li><li>1: Metric topic</li></ul>
 * @method void setBizType(integer $BizType) Set <p>Topic type</p><ul><li>0: Log topic, default value</li><li>1: Metric topic</li></ul>
 * @method string getTopicId() Obtain <p>Custom topic ID, format: custom part-User APPID. If this parameter is left empty, ID will be automatically generated.</p><ul><li>The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and must be 3 to 40 characters in length.</li><li>The trailing part requires the use of - to concatenate User APPID. APPID can be queried on the page https://console.cloud.tencent.com/developer.</li><li>If this field is specified, ensure uniqueness across all regions.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>Custom topic ID, format: custom part-User APPID. If this parameter is left empty, ID will be automatically generated.</p><ul><li>The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and must be 3 to 40 characters in length.</li><li>The trailing part requires the use of - to concatenate User APPID. APPID can be queried on the page https://console.cloud.tencent.com/developer.</li><li>If this field is specified, ensure uniqueness across all regions.</li></ul>
 * @method boolean getIsWebTracking() Obtain <p>Free authentication switch. False: turned off; true: turned on. Default false.<br>When enabled, anonymous access to the log topic will be supported for designated operations. For details, see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>. This configuration is not supported for metric topics.</p>
 * @method void setIsWebTracking(boolean $IsWebTracking) Set <p>Free authentication switch. False: turned off; true: turned on. Default false.<br>When enabled, anonymous access to the log topic will be supported for designated operations. For details, see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>. This configuration is not supported for metric topics.</p>
 * @method TopicExtendInfo getExtends() Obtain <p>Topic extended information</p>
 * @method void setExtends(TopicExtendInfo $Extends) Set <p>Topic extended information</p>
 * @method boolean getIsSourceFrom() Obtain <p>Enable logging of public network source IP and server receipt time</p>
 * @method void setIsSourceFrom(boolean $IsSourceFrom) Set <p>Enable logging of public network source IP and server receipt time</p>
 * @method integer getBillingMode() Obtain <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supported for some customers)</li></ul><p>Default value: 0</p>
 * @method void setBillingMode(integer $BillingMode) Set <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supported for some customers)</li></ul><p>Default value: 0</p>
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string <p>Logset ID</p><ul><li>Obtain the logset Id through <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
     */
    public $LogsetId;

    /**
     * @var string <p>Topic name<br>Name limitation</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
     */
    public $TopicName;

    /**
     * @var integer <p>Topic partition count. Default creation is 1 partition. Supports a maximum of 10 partitions.</p>
     */
    public $PartitionCount;

    /**
     * @var array <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding topic. Up to 10 tag key-value pairs are supported, and the same resource can only be bound to the same tag key.</p>
     */
    public $Tags;

    /**
     * @var boolean <p>Whether to enable auto-split, true by default</p>
     */
    public $AutoSplit;

    /**
     * @var integer <p>When auto-split is enabled, the maximum number of partitions allowed for each topic is 50 by default.</p>
     */
    public $MaxSplitPartitions;

    /**
     * @var string <p>Log topic storage type. Available values: hot (standard storage), cold (infrequent storage). Default hot. This configuration is not supported for metric topics.</p>
     */
    public $StorageType;

    /**
     * @var integer <p>Storage time, in days.</p><ul><li>Log topic: When logs are collected to standard storage, the supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Log topic: When logs are collected to infrequently accessed storage, the supported range is 7 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Metric topic: The supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li></ul>
     */
    public $Period;

    /**
     * @var string <p>Topic description</p>
     */
    public $Describes;

    /**
     * @var integer <p>0: Log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled in the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
     */
    public $HotPeriod;

    /**
     * @var integer <p>Encryption-related parameters. Encrypted regions and allowlisted users can pass this parameter, which cannot be passed in other scenarios.<br>0 or not passed: no encryption<br>1: kms-cls cloud service key encryption</p><p>Supported regions: ap-beijing, ap-guangzhou, ap-shanghai, ap-singapore, ap-bangkok, ap-jakarta, eu-frankfurt, ap-seoul, ap-tokyo</p>
     */
    public $Encryption;

    /**
     * @var integer <p>Topic type</p><ul><li>0: Log topic, default value</li><li>1: Metric topic</li></ul>
     */
    public $BizType;

    /**
     * @var string <p>Custom topic ID, format: custom part-User APPID. If this parameter is left empty, ID will be automatically generated.</p><ul><li>The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and must be 3 to 40 characters in length.</li><li>The trailing part requires the use of - to concatenate User APPID. APPID can be queried on the page https://console.cloud.tencent.com/developer.</li><li>If this field is specified, ensure uniqueness across all regions.</li></ul>
     */
    public $TopicId;

    /**
     * @var boolean <p>Free authentication switch. False: turned off; true: turned on. Default false.<br>When enabled, anonymous access to the log topic will be supported for designated operations. For details, see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>. This configuration is not supported for metric topics.</p>
     */
    public $IsWebTracking;

    /**
     * @var TopicExtendInfo <p>Topic extended information</p>
     */
    public $Extends;

    /**
     * @var boolean <p>Enable logging of public network source IP and server receipt time</p>
     */
    public $IsSourceFrom;

    /**
     * @var integer <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supported for some customers)</li></ul><p>Default value: 0</p>
     */
    public $BillingMode;

    /**
     * @param string $LogsetId <p>Logset ID</p><ul><li>Obtain the logset Id through <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
     * @param string $TopicName <p>Topic name<br>Name limitation</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
     * @param integer $PartitionCount <p>Topic partition count. Default creation is 1 partition. Supports a maximum of 10 partitions.</p>
     * @param array $Tags <p>Tag description list, by specifying this parameter, you can simultaneously bind a tag to the corresponding topic. Up to 10 tag key-value pairs are supported, and the same resource can only be bound to the same tag key.</p>
     * @param boolean $AutoSplit <p>Whether to enable auto-split, true by default</p>
     * @param integer $MaxSplitPartitions <p>When auto-split is enabled, the maximum number of partitions allowed for each topic is 50 by default.</p>
     * @param string $StorageType <p>Log topic storage type. Available values: hot (standard storage), cold (infrequent storage). Default hot. This configuration is not supported for metric topics.</p>
     * @param integer $Period <p>Storage time, in days.</p><ul><li>Log topic: When logs are collected to standard storage, the supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Log topic: When logs are collected to infrequently accessed storage, the supported range is 7 to 3600 days. A value of 3640 indicates permanent retention.</li><li>Metric topic: The supported range is 1 to 3600 days. A value of 3640 indicates permanent retention.</li></ul>
     * @param string $Describes <p>Topic description</p>
     * @param integer $HotPeriod <p>0: Log topic disables log settlement.<br>Non-0: Number of days for standard storage after log settlement is enabled in the log topic. HotPeriod needs to be greater than or equal to 7 and less than Period.<br>Effective only when StorageType is hot. This configuration is not supported for metric topics.</p>
     * @param integer $Encryption <p>Encryption-related parameters. Encrypted regions and allowlisted users can pass this parameter, which cannot be passed in other scenarios.<br>0 or not passed: no encryption<br>1: kms-cls cloud service key encryption</p><p>Supported regions: ap-beijing, ap-guangzhou, ap-shanghai, ap-singapore, ap-bangkok, ap-jakarta, eu-frankfurt, ap-seoul, ap-tokyo</p>
     * @param integer $BizType <p>Topic type</p><ul><li>0: Log topic, default value</li><li>1: Metric topic</li></ul>
     * @param string $TopicId <p>Custom topic ID, format: custom part-User APPID. If this parameter is left empty, ID will be automatically generated.</p><ul><li>The custom part only supports lowercase letters, digits, and -, cannot start or end with -, and must be 3 to 40 characters in length.</li><li>The trailing part requires the use of - to concatenate User APPID. APPID can be queried on the page https://console.cloud.tencent.com/developer.</li><li>If this field is specified, ensure uniqueness across all regions.</li></ul>
     * @param boolean $IsWebTracking <p>Free authentication switch. False: turned off; true: turned on. Default false.<br>When enabled, anonymous access to the log topic will be supported for designated operations. For details, see <a href="https://www.tencentcloud.com/document/product/614/41035?from_cn_redirect=1">log topic</a>. This configuration is not supported for metric topics.</p>
     * @param TopicExtendInfo $Extends <p>Topic extended information</p>
     * @param boolean $IsSourceFrom <p>Enable logging of public network source IP and server receipt time</p>
     * @param integer $BillingMode <p>Billing mode</p><p>Enumeration value:</p><ul><li>0: Function billing by usage</li><li>1: Raw log size billing (currently only supported for some customers)</li></ul><p>Default value: 0</p>
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

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("IsWebTracking",$param) and $param["IsWebTracking"] !== null) {
            $this->IsWebTracking = $param["IsWebTracking"];
        }

        if (array_key_exists("Extends",$param) and $param["Extends"] !== null) {
            $this->Extends = new TopicExtendInfo();
            $this->Extends->deserialize($param["Extends"]);
        }

        if (array_key_exists("IsSourceFrom",$param) and $param["IsSourceFrom"] !== null) {
            $this->IsSourceFrom = $param["IsSourceFrom"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }
    }
}
