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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribeJobs request structure.
 *
 * @method string getSubscribeId() Obtain Subscription ID (exact match)
 * @method void setSubscribeId(string $SubscribeId) Set Subscription ID (exact match)
 * @method string getSubscribeName() Obtain Subscription name (prefix fuzzy match)
 * @method void setSubscribeName(string $SubscribeName) Set Subscription name (prefix fuzzy match)
 * @method string getInstanceId() Obtain Subscribed cloud database instance ID (exact match)
 * @method void setInstanceId(string $InstanceId) Set Subscribed cloud database instance ID (exact match)
 * @method integer getPayType() Obtain Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
 * @method void setPayType(integer $PayType) Set Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
 * @method string getProduct() Obtain Subscribed database product. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
 * @method void setProduct(string $Product) Set Subscribed database product. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
 * @method array getStatus() Obtain Data subscription lifecycle status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
 * @method void setStatus(array $Status) Set Data subscription lifecycle status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
 * @method array getSubsStatus() Obtain Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
 * @method void setSubsStatus(array $SubsStatus) Set Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
 * @method integer getOffset() Obtain Starting offset for returned results. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset for returned results. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned at a time. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results to be returned at a time. Default value: 20. Maximum value: 100.
 * @method string getOrderDirection() Obtain Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time.
 * @method void setOrderDirection(string $OrderDirection) Set Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time.
 * @method array getTagFilters() Obtain Tag filter condition, the relationship between multiple TagFilters is and.
 * @method void setTagFilters(array $TagFilters) Set Tag filter condition, the relationship between multiple TagFilters is and.
 */
class DescribeSubscribeJobsRequest extends AbstractModel
{
    /**
     * @var string Subscription ID (exact match)
     */
    public $SubscribeId;

    /**
     * @var string Subscription name (prefix fuzzy match)
     */
    public $SubscribeName;

    /**
     * @var string Subscribed cloud database instance ID (exact match)
     */
    public $InstanceId;

    /**
     * @var integer Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
     */
    public $PayType;

    /**
     * @var string Subscribed database product. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
     */
    public $Product;

    /**
     * @var array Data subscription lifecycle status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
     */
    public $Status;

    /**
     * @var array Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
     */
    public $SubsStatus;

    /**
     * @var integer Starting offset for returned results. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned at a time. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time.
     */
    public $OrderDirection;

    /**
     * @var array Tag filter condition, the relationship between multiple TagFilters is and.
     */
    public $TagFilters;

    /**
     * @param string $SubscribeId Subscription ID (exact match)
     * @param string $SubscribeName Subscription name (prefix fuzzy match)
     * @param string $InstanceId Subscribed cloud database instance ID (exact match)
     * @param integer $PayType Payment method. Valid values: 0 (monthly subscription); 1 (pay-as-you-go).
     * @param string $Product Subscribed database product. Currently, cynosdbmysql, mariadb, mongodb, mysql, percona, tdpg, tdsqlpercona are supported.
     * @param array $Status Data subscription lifecycle status. Valid values: normal, isolating, isolated, offline, post2PrePayIng.
     * @param array $SubsStatus Data subscription status. Valid values: notStarted, checking, checkNotPass, checkPass, starting, running, error.
     * @param integer $Offset Starting offset for returned results. Default value: 0.
     * @param integer $Limit Number of results to be returned at a time. Default value: 20. Maximum value: 100.
     * @param string $OrderDirection Sorting order. Valid values: DESC, ASC. Default value: DESC, indicating descending by creation time.
     * @param array $TagFilters Tag filter condition, the relationship between multiple TagFilters is and.
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
    }
}
