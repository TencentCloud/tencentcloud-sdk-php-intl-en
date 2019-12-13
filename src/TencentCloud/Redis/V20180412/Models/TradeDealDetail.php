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
 * @method string getDealId() 获取Order ID, which is used when a TencentCloud API is called
 * @method void setDealId(string $DealId) 设置Order ID, which is used when a TencentCloud API is called
 * @method string getDealName() 获取Long order ID, which is used when an order issue is submitted for assistance
 * @method void setDealName(string $DealName) 设置Long order ID, which is used when an order issue is submitted for assistance
 * @method integer getZoneId() 获取AZ ID
 * @method void setZoneId(integer $ZoneId) 设置AZ ID
 * @method integer getGoodsNum() 获取Number of instances associated with an order
 * @method void setGoodsNum(integer $GoodsNum) 设置Number of instances associated with an order
 * @method string getCreater() 获取Creates a user uin
 * @method void setCreater(string $Creater) 设置Creates a user uin
 * @method string getCreatTime() 获取Order creation time
 * @method void setCreatTime(string $CreatTime) 设置Order creation time
 * @method string getOverdueTime() 获取Order timeout period
 * @method void setOverdueTime(string $OverdueTime) 设置Order timeout period
 * @method string getEndTime() 获取Order completion time
 * @method void setEndTime(string $EndTime) 设置Order completion time
 * @method integer getStatus() 获取Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
 * @method void setStatus(integer $Status) 设置Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
 * @method string getDescription() 获取Order status description
 * @method void setDescription(string $Description) 设置Order status description
 * @method integer getPrice() 获取Actual total price of an order in 0.01 CNY
 * @method void setPrice(integer $Price) 设置Actual total price of an order in 0.01 CNY
 * @method array getInstanceIds() 获取Instance ID
 * @method void setInstanceIds(array $InstanceIds) 设置Instance ID
 */

/**
 *Order deal information
 */
class TradeDealDetail extends AbstractModel
{
    /**
     * @var string Order ID, which is used when a TencentCloud API is called
     */
    public $DealId;

    /**
     * @var string Long order ID, which is used when an order issue is submitted for assistance
     */
    public $DealName;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var integer Number of instances associated with an order
     */
    public $GoodsNum;

    /**
     * @var string Creates a user uin
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
     * @var integer Actual total price of an order in 0.01 CNY
     */
    public $Price;

    /**
     * @var array Instance ID
     */
    public $InstanceIds;
    /**
     * @param string $DealId Order ID, which is used when a TencentCloud API is called
     * @param string $DealName Long order ID, which is used when an order issue is submitted for assistance
     * @param integer $ZoneId AZ ID
     * @param integer $GoodsNum Number of instances associated with an order
     * @param string $Creater Creates a user uin
     * @param string $CreatTime Order creation time
     * @param string $OverdueTime Order timeout period
     * @param string $EndTime Order completion time
     * @param integer $Status Order status. 1: unpaid; 2: paid but not delivered; 3: In delivery; 4: successfully delivered; 5: delivery failed; 6: refunded; 7: order closed; 8: order expired; 9: order invalidated; 10: product invalidated; 11: requested payment rejected; 12: paying
     * @param string $Description Order status description
     * @param integer $Price Actual total price of an order in 0.01 CNY
     * @param array $InstanceIds Instance ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
