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
 * Namespace information
 *
 * @method string getEnvironmentId() Obtain Namespace name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace name.
 * @method string getRemark() Obtain Description.
 * @method void setRemark(string $Remark) Set Description.
 * @method integer getMsgTTL() Obtain Retention period for unconsumed messages in seconds. Maximum value: 1,296,000 seconds (15 days).
 * @method void setMsgTTL(integer $MsgTTL) Set Retention period for unconsumed messages in seconds. Maximum value: 1,296,000 seconds (15 days).
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Last modified.
 * @method void setUpdateTime(string $UpdateTime) Set Last modified.
 * @method string getNamespaceId() Obtain Namespace ID.
 * @method void setNamespaceId(string $NamespaceId) Set Namespace ID.
 * @method string getNamespaceName() Obtain Namespace name.
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name.
 * @method integer getTopicNum() Obtain The number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNum(integer $TopicNum) Set The number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RetentionPolicy getRetentionPolicy() Obtain Message retention policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetentionPolicy(RetentionPolicy $RetentionPolicy) Set Message retention policy.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoSubscriptionCreation() Obtain Whether to enable "Auto-Create Subscription"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoSubscriptionCreation(boolean $AutoSubscriptionCreation) Set Whether to enable "Auto-Create Subscription"
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSubscriptionExpirationTime() Obtain Offline subscription automatic expiration cleanup time
 * @method void setSubscriptionExpirationTime(integer $SubscriptionExpirationTime) Set Offline subscription automatic expiration cleanup time
 * @method boolean getSubscriptionExpirationTimeEnable() Obtain Offline subscription automatic expiration cleanup time switch
 * @method void setSubscriptionExpirationTimeEnable(boolean $SubscriptionExpirationTimeEnable) Set Offline subscription automatic expiration cleanup time switch
 * @method array getTags() Obtain Namespace tag
 * @method void setTags(array $Tags) Set Namespace tag
 */
class Environment extends AbstractModel
{
    /**
     * @var string Namespace name.
     */
    public $EnvironmentId;

    /**
     * @var string Description.
     */
    public $Remark;

    /**
     * @var integer Retention period for unconsumed messages in seconds. Maximum value: 1,296,000 seconds (15 days).
     */
    public $MsgTTL;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Last modified.
     */
    public $UpdateTime;

    /**
     * @var string Namespace ID.
     */
    public $NamespaceId;

    /**
     * @var string Namespace name.
     */
    public $NamespaceName;

    /**
     * @var integer The number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNum;

    /**
     * @var RetentionPolicy Message retention policy.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetentionPolicy;

    /**
     * @var boolean Whether to enable "Auto-Create Subscription"
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoSubscriptionCreation;

    /**
     * @var integer Offline subscription automatic expiration cleanup time
     */
    public $SubscriptionExpirationTime;

    /**
     * @var boolean Offline subscription automatic expiration cleanup time switch
     */
    public $SubscriptionExpirationTimeEnable;

    /**
     * @var array Namespace tag
     */
    public $Tags;

    /**
     * @param string $EnvironmentId Namespace name.
     * @param string $Remark Description.
     * @param integer $MsgTTL Retention period for unconsumed messages in seconds. Maximum value: 1,296,000 seconds (15 days).
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Last modified.
     * @param string $NamespaceId Namespace ID.
     * @param string $NamespaceName Namespace name.
     * @param integer $TopicNum The number of topics.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RetentionPolicy $RetentionPolicy Message retention policy.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoSubscriptionCreation Whether to enable "Auto-Create Subscription"
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SubscriptionExpirationTime Offline subscription automatic expiration cleanup time
     * @param boolean $SubscriptionExpirationTimeEnable Offline subscription automatic expiration cleanup time switch
     * @param array $Tags Namespace tag
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("RetentionPolicy",$param) and $param["RetentionPolicy"] !== null) {
            $this->RetentionPolicy = new RetentionPolicy();
            $this->RetentionPolicy->deserialize($param["RetentionPolicy"]);
        }

        if (array_key_exists("AutoSubscriptionCreation",$param) and $param["AutoSubscriptionCreation"] !== null) {
            $this->AutoSubscriptionCreation = $param["AutoSubscriptionCreation"];
        }

        if (array_key_exists("SubscriptionExpirationTime",$param) and $param["SubscriptionExpirationTime"] !== null) {
            $this->SubscriptionExpirationTime = $param["SubscriptionExpirationTime"];
        }

        if (array_key_exists("SubscriptionExpirationTimeEnable",$param) and $param["SubscriptionExpirationTimeEnable"] !== null) {
            $this->SubscriptionExpirationTimeEnable = $param["SubscriptionExpirationTimeEnable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
