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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order transaction information
 *
 * @method string getDealId() Obtain Order ID, which is used when a TencentCloud API is called.
 * @method void setDealId(string $DealId) Set Order ID, which is used when a TencentCloud API is called.
 * @method string getDealName() Obtain Long order ID, which is used when an order issue is submitted for assistance.
 * @method void setDealName(string $DealName) Set Long order ID, which is used when an order issue is submitted for assistance.
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method integer getGoodsNum() Obtain Number of instances associated with the order
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances associated with the order
 * @method string getCreater() Obtain Creator UIN
 * @method void setCreater(string $Creater) Set Creator UIN
 * @method string getCreatTime() Obtain Order creation time
 * @method void setCreatTime(string $CreatTime) Set Order creation time
 * @method string getOverdueTime() Obtain Order timeout period
 * @method void setOverdueTime(string $OverdueTime) Set Order timeout period
 * @method string getEndTime() Obtain Order completion time
 * @method void setEndTime(string $EndTime) Set Order completion time
 * @method integer getStatus() Obtain Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
 * @method void setStatus(integer $Status) Set Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
 * @method string getDescription() Obtain Order status description
 * @method void setDescription(string $Description) Set Order status description
 * @method integer getPrice() Obtain Actual total price of the order in 0.01 CNY
 * @method void setPrice(integer $Price) Set Actual total price of the order in 0.01 CNY
 * @method array getInstanceIds() Obtain Instance ID
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID
 */
class TradeDealDetail extends AbstractModel
{
    /**
     * @var string Order ID, which is used when a TencentCloud API is called.
     */
    public $DealId;

    /**
     * @var string Long order ID, which is used when an order issue is submitted for assistance.
     */
    public $DealName;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var integer Number of instances associated with the order
     */
    public $GoodsNum;

    /**
     * @var string Creator UIN
     */
    public $Creater;

    /**
     * @var string Order creation time
     */
    public $CreatTime;

    /**
     * @var string Order timeout period
     */
    public $OverdueTime;

    /**
     * @var string Order completion time
     */
    public $EndTime;

    /**
     * @var integer Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
     */
    public $Status;

    /**
     * @var string Order status description
     */
    public $Description;

    /**
     * @var integer Actual total price of the order in 0.01 CNY
     */
    public $Price;

    /**
     * @var array Instance ID
     */
    public $InstanceIds;

    /**
     * @param string $DealId Order ID, which is used when a TencentCloud API is called.
     * @param string $DealName Long order ID, which is used when an order issue is submitted for assistance.
     * @param integer $ZoneId AZ ID
     * @param integer $GoodsNum Number of instances associated with the order
     * @param string $Creater Creator UIN
     * @param string $CreatTime Order creation time
     * @param string $OverdueTime Order timeout period
     * @param string $EndTime Order completion time
     * @param integer $Status Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
     * @param string $Description Order status description
     * @param integer $Price Actual total price of the order in 0.01 CNY
     * @param array $InstanceIds Instance ID
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Creater",$param) and $param["Creater"] !== null) {
            $this->Creater = $param["Creater"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }

        if (array_key_exists("OverdueTime",$param) and $param["OverdueTime"] !== null) {
            $this->OverdueTime = $param["OverdueTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
