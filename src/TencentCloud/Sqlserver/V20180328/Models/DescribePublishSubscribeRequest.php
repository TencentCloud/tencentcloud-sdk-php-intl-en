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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublishSubscribe request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, mssql-j8kv137v.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, mssql-j8kv137v.
 * @method string getPubOrSubInstanceId() Obtain Publish/subscribe instance ID, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by subscription instance ID is performed for this field. When the value of InstanceId is a subscription instance, filtering by publishing instance ID is performed for this field.
 * @method void setPubOrSubInstanceId(string $PubOrSubInstanceId) Set Publish/subscribe instance ID, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by subscription instance ID is performed for this field. When the value of InstanceId is a subscription instance, filtering by publishing instance ID is performed for this field.
 * @method string getPubOrSubInstanceIp() Obtain Private address of the publish/subscribe instance, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by private IP address of the subscription instance is performed for this field. When the value of InstanceId is a subscription instance, filtering by private IP address of the publishing instance is performed for this field.
 * @method void setPubOrSubInstanceIp(string $PubOrSubInstanceIp) Set Private address of the publish/subscribe instance, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by private IP address of the subscription instance is performed for this field. When the value of InstanceId is a subscription instance, filtering by private IP address of the publishing instance is performed for this field.
 * @method integer getPublishSubscribeId() Obtain Publish/subscribe ID, which is used for filtering.
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) Set Publish/subscribe ID, which is used for filtering.
 * @method string getPublishSubscribeName() Obtain Publish/subscribe name, which is used for filtering.
 * @method void setPublishSubscribeName(string $PublishSubscribeName) Set Publish/subscribe name, which is used for filtering.
 * @method string getPublishDBName() Obtain Publishing database name, which is used for filtering.
 * @method void setPublishDBName(string $PublishDBName) Set Publishing database name, which is used for filtering.
 * @method string getSubscribeDBName() Obtain Subscription database name, which is used for filtering.
 * @method void setSubscribeDBName(string $SubscribeDBName) Set Subscription database name, which is used for filtering.
 * @method integer getOffset() Obtain Pagination number.
 * @method void setOffset(integer $Offset) Set Pagination number.
 * @method integer getLimit() Obtain Pagination size.
 * @method void setLimit(integer $Limit) Set Pagination size.
 */
class DescribePublishSubscribeRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, mssql-j8kv137v.
     */
    public $InstanceId;

    /**
     * @var string Publish/subscribe instance ID, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by subscription instance ID is performed for this field. When the value of InstanceId is a subscription instance, filtering by publishing instance ID is performed for this field.
     */
    public $PubOrSubInstanceId;

    /**
     * @var string Private address of the publish/subscribe instance, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by private IP address of the subscription instance is performed for this field. When the value of InstanceId is a subscription instance, filtering by private IP address of the publishing instance is performed for this field.
     */
    public $PubOrSubInstanceIp;

    /**
     * @var integer Publish/subscribe ID, which is used for filtering.
     */
    public $PublishSubscribeId;

    /**
     * @var string Publish/subscribe name, which is used for filtering.
     */
    public $PublishSubscribeName;

    /**
     * @var string Publishing database name, which is used for filtering.
     */
    public $PublishDBName;

    /**
     * @var string Subscription database name, which is used for filtering.
     */
    public $SubscribeDBName;

    /**
     * @var integer Pagination number.
     */
    public $Offset;

    /**
     * @var integer Pagination size.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID. For example, mssql-j8kv137v.
     * @param string $PubOrSubInstanceId Publish/subscribe instance ID, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by subscription instance ID is performed for this field. When the value of InstanceId is a subscription instance, filtering by publishing instance ID is performed for this field.
     * @param string $PubOrSubInstanceIp Private address of the publish/subscribe instance, which is related to whether InstanceId is a publishing instance or a subscription instance. When the value of InstanceId is a publishing instance, filtering by private IP address of the subscription instance is performed for this field. When the value of InstanceId is a subscription instance, filtering by private IP address of the publishing instance is performed for this field.
     * @param integer $PublishSubscribeId Publish/subscribe ID, which is used for filtering.
     * @param string $PublishSubscribeName Publish/subscribe name, which is used for filtering.
     * @param string $PublishDBName Publishing database name, which is used for filtering.
     * @param string $SubscribeDBName Subscription database name, which is used for filtering.
     * @param integer $Offset Pagination number.
     * @param integer $Limit Pagination size.
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

        if (array_key_exists("PubOrSubInstanceId",$param) and $param["PubOrSubInstanceId"] !== null) {
            $this->PubOrSubInstanceId = $param["PubOrSubInstanceId"];
        }

        if (array_key_exists("PubOrSubInstanceIp",$param) and $param["PubOrSubInstanceIp"] !== null) {
            $this->PubOrSubInstanceIp = $param["PubOrSubInstanceIp"];
        }

        if (array_key_exists("PublishSubscribeId",$param) and $param["PublishSubscribeId"] !== null) {
            $this->PublishSubscribeId = $param["PublishSubscribeId"];
        }

        if (array_key_exists("PublishSubscribeName",$param) and $param["PublishSubscribeName"] !== null) {
            $this->PublishSubscribeName = $param["PublishSubscribeName"];
        }

        if (array_key_exists("PublishDBName",$param) and $param["PublishDBName"] !== null) {
            $this->PublishDBName = $param["PublishDBName"];
        }

        if (array_key_exists("SubscribeDBName",$param) and $param["SubscribeDBName"] !== null) {
            $this->SubscribeDBName = $param["SubscribeDBName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
