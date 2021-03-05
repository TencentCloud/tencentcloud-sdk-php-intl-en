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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribes request structure.
 *
 * @method string getSubscribeId() Obtain Data subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Data subscription instance ID
 * @method string getSubscribeName() Obtain Data subscription instance name
 * @method void setSubscribeName(string $SubscribeName) Set Data subscription instance name
 * @method string getInstanceId() Obtain ID of bound database instance
 * @method void setInstanceId(string $InstanceId) Set ID of bound database instance
 * @method string getChannelId() Obtain Data subscription instance channel ID
 * @method void setChannelId(string $ChannelId) Set Data subscription instance channel ID
 * @method string getPayType() Obtain Billing mode filter. Default value: 1 (pay-as-you-go)
 * @method void setPayType(string $PayType) Set Billing mode filter. Default value: 1 (pay-as-you-go)
 * @method string getProduct() Obtain Subscribed database product, such as MySQL
 * @method void setProduct(string $Product) Set Subscribed database product, such as MySQL
 * @method array getStatus() Obtain Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining
 * @method void setStatus(array $Status) Set Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining
 * @method array getSubsStatus() Obtain Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
 * @method void setSubsStatus(array $SubsStatus) Set Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
 * @method integer getOffset() Obtain Starting offset of returned results
 * @method void setOffset(integer $Offset) Set Starting offset of returned results
 * @method integer getLimit() Obtain Number of results to be returned at a time
 * @method void setLimit(integer $Limit) Set Number of results to be returned at a time
 * @method string getOrderDirection() Obtain Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time
 * @method void setOrderDirection(string $OrderDirection) Set Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time
 * @method array getTagFilters() Obtain Tag filtering condition
 * @method void setTagFilters(array $TagFilters) Set Tag filtering condition
 * @method string getSubscribeVersion() Obtain Subscription instance edition. `txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
 * @method void setSubscribeVersion(string $SubscribeVersion) Set Subscription instance edition. `txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
 */
class DescribeSubscribesRequest extends AbstractModel
{
    /**
     * @var string Data subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var string Data subscription instance name
     */
    public $SubscribeName;

    /**
     * @var string ID of bound database instance
     */
    public $InstanceId;

    /**
     * @var string Data subscription instance channel ID
     */
    public $ChannelId;

    /**
     * @var string Billing mode filter. Default value: 1 (pay-as-you-go)
     */
    public $PayType;

    /**
     * @var string Subscribed database product, such as MySQL
     */
    public $Product;

    /**
     * @var array Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining
     */
    public $Status;

    /**
     * @var array Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
     */
    public $SubsStatus;

    /**
     * @var integer Starting offset of returned results
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned at a time
     */
    public $Limit;

    /**
     * @var string Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time
     */
    public $OrderDirection;

    /**
     * @var array Tag filtering condition
     */
    public $TagFilters;

    /**
     * @var string Subscription instance edition. `txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
     */
    public $SubscribeVersion;

    /**
     * @param string $SubscribeId Data subscription instance ID
     * @param string $SubscribeName Data subscription instance name
     * @param string $InstanceId ID of bound database instance
     * @param string $ChannelId Data subscription instance channel ID
     * @param string $PayType Billing mode filter. Default value: 1 (pay-as-you-go)
     * @param string $Product Subscribed database product, such as MySQL
     * @param array $Status Data subscription instance status. Valid values: creating, normal, isolating, isolated, offlining
     * @param array $SubsStatus Data subscription instance configuration status. Valid values: unconfigure, configuring, configured
     * @param integer $Offset Starting offset of returned results
     * @param integer $Limit Number of results to be returned at a time
     * @param string $OrderDirection Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time
     * @param array $TagFilters Tag filtering condition
     * @param string $SubscribeVersion Subscription instance edition. `txdts`: legacy data subscription; `kafka`: data subscription in Kafka edition
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("SubscribeVersion",$param) and $param["SubscribeVersion"] !== null) {
            $this->SubscribeVersion = $param["SubscribeVersion"];
        }
    }
}
