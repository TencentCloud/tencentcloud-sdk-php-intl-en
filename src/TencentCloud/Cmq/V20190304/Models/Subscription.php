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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subscription response parameter
 *
 * @method string getSubscriptionName() Obtain SubscriptionName
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubscriptionName(string $SubscriptionName) Set SubscriptionName
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSubscriptionId() Obtain SubscriptionId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubscriptionId(string $SubscriptionId) Set SubscriptionId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTopicOwner() Obtain TopicOwner
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicOwner(integer $TopicOwner) Set TopicOwner
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgCount() Obtain MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgCount(integer $MsgCount) Set MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTime() Obtain LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTime(integer $LastModifyTime) Set LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBindingKey() Obtain BindingKey
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBindingKey(array $BindingKey) Set BindingKey
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEndpoint() Obtain Endpoint
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndpoint(string $Endpoint) Set Endpoint
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getFilterTags() Obtain FilterTags
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilterTags(array $FilterTags) Set FilterTags
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNotifyStrategy() Obtain NotifyStrategy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNotifyStrategy(string $NotifyStrategy) Set NotifyStrategy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNotifyContentFormat() Obtain NotifyContentFormat
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNotifyContentFormat(string $NotifyContentFormat) Set NotifyContentFormat
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Subscription extends AbstractModel
{
    /**
     * @var string SubscriptionName
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubscriptionName;

    /**
     * @var string SubscriptionId
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubscriptionId;

    /**
     * @var integer TopicOwner
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicOwner;

    /**
     * @var integer MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgCount;

    /**
     * @var integer LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTime;

    /**
     * @var integer CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var array BindingKey
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BindingKey;

    /**
     * @var string Endpoint
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Endpoint;

    /**
     * @var array FilterTags
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FilterTags;

    /**
     * @var string Protocol
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string NotifyStrategy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NotifyStrategy;

    /**
     * @var string NotifyContentFormat
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NotifyContentFormat;

    /**
     * @param string $SubscriptionName SubscriptionName
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SubscriptionId SubscriptionId
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TopicOwner TopicOwner
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgCount MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTime LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BindingKey BindingKey
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Endpoint Endpoint
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $FilterTags FilterTags
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NotifyStrategy NotifyStrategy
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NotifyContentFormat NotifyContentFormat
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("SubscriptionId",$param) and $param["SubscriptionId"] !== null) {
            $this->SubscriptionId = $param["SubscriptionId"];
        }

        if (array_key_exists("TopicOwner",$param) and $param["TopicOwner"] !== null) {
            $this->TopicOwner = $param["TopicOwner"];
        }

        if (array_key_exists("MsgCount",$param) and $param["MsgCount"] !== null) {
            $this->MsgCount = $param["MsgCount"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BindingKey",$param) and $param["BindingKey"] !== null) {
            $this->BindingKey = $param["BindingKey"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("FilterTags",$param) and $param["FilterTags"] !== null) {
            $this->FilterTags = $param["FilterTags"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NotifyStrategy",$param) and $param["NotifyStrategy"] !== null) {
            $this->NotifyStrategy = $param["NotifyStrategy"];
        }

        if (array_key_exists("NotifyContentFormat",$param) and $param["NotifyContentFormat"] !== null) {
            $this->NotifyContentFormat = $param["NotifyContentFormat"];
        }
    }
}
