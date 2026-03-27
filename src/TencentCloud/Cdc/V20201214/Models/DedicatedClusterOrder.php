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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC order
 *
 * @method string getDedicatedClusterId() Obtain CDC id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC id
 * @method string getDedicatedClusterTypeId() Obtain CDC type id (moved to the next level, obsolete and will be deleted later)
 * @method void setDedicatedClusterTypeId(string $DedicatedClusterTypeId) Set CDC type id (moved to the next level, obsolete and will be deleted later)
 * @method array getSupportedStorageType() Obtain List of supported storage types (moved to the next level, obsolete and will be deleted later)
 * @method void setSupportedStorageType(array $SupportedStorageType) Set List of supported storage types (moved to the next level, obsolete and will be deleted later)
 * @method array getSupportedUplinkSpeed() Obtain Supported uplink switch transmission rate (GiB) (moved to the next level, obsolete and will be deleted later)
 * @method void setSupportedUplinkSpeed(array $SupportedUplinkSpeed) Set Supported uplink switch transmission rate (GiB) (moved to the next level, obsolete and will be deleted later)
 * @method array getSupportedInstanceFamily() Obtain List of supported instance families (moved to the next level, obsolete and will be deleted later)
 * @method void setSupportedInstanceFamily(array $SupportedInstanceFamily) Set List of supported instance families (moved to the next level, obsolete and will be deleted later)
 * @method integer getWeight() Obtain Floor weight capacity (KG)
 * @method void setWeight(integer $Weight) Set Floor weight capacity (KG)
 * @method float getPowerDraw() Obtain Power requirements (KW)
 * @method void setPowerDraw(float $PowerDraw) Set Power requirements (KW)
 * @method string getOrderStatus() Obtain Order status
 * @method void setOrderStatus(string $OrderStatus) Set Order status
 * @method string getCreateTime() Obtain Order creation time
 * @method void setCreateTime(string $CreateTime) Set Order creation time
 * @method string getDedicatedClusterOrderId() Obtain Large order ID
 * @method void setDedicatedClusterOrderId(string $DedicatedClusterOrderId) Set Large order ID
 * @method string getAction() Obtain Order type, CREATE or EXTEND
 * @method void setAction(string $Action) Set Order type, CREATE or EXTEND
 * @method array getDedicatedClusterOrderItems() Obtain List of sub-order details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setDedicatedClusterOrderItems(array $DedicatedClusterOrderItems) Set List of sub-order details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getCpu() Obtain CPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setCpu(integer $Cpu) Set CPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getMem() Obtain MEM value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setMem(integer $Mem) Set MEM value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getGpu() Obtain GPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setGpu(integer $Gpu) Set GPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getPayStatus() Obtain 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setPayStatus(integer $PayStatus) Set 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getPayType() Obtain Payment method: lump-sum, monthly, and annually 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setPayType(string $PayType) Set Payment method: lump-sum, monthly, and annually 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getTimeUnit() Obtain Unit of purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Unit of purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getTimeSpan() Obtain Purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getOrderType() Obtain Order type 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setOrderType(string $OrderType) Set Order type 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getCheckStatus() Obtain Acceptance Status
 * @method void setCheckStatus(string $CheckStatus) Set Acceptance Status
 * @method string getDeliverExpectTime() Obtain Expected Delivery Time
 * @method void setDeliverExpectTime(string $DeliverExpectTime) Set Expected Delivery Time
 * @method string getDeliverFinishTime() Obtain Actual Delivery Completion Time
 * @method void setDeliverFinishTime(string $DeliverFinishTime) Set Actual Delivery Completion Time
 * @method string getCheckExpectTime() Obtain Expected Acceptance Time
 * @method void setCheckExpectTime(string $CheckExpectTime) Set Expected Acceptance Time
 * @method string getCheckFinishTime() Obtain Actual Acceptance Completion Time
 * @method void setCheckFinishTime(string $CheckFinishTime) Set Actual Acceptance Completion Time
 * @method string getOrderSLA() Obtain Order SLA
 * @method void setOrderSLA(string $OrderSLA) Set Order SLA
 * @method string getOrderPayPlan() Obtain Order Payment Plan
 * @method void setOrderPayPlan(string $OrderPayPlan) Set Order Payment Plan
 */
class DedicatedClusterOrder extends AbstractModel
{
    /**
     * @var string CDC id
     */
    public $DedicatedClusterId;

    /**
     * @var string CDC type id (moved to the next level, obsolete and will be deleted later)
     */
    public $DedicatedClusterTypeId;

    /**
     * @var array List of supported storage types (moved to the next level, obsolete and will be deleted later)
     */
    public $SupportedStorageType;

    /**
     * @var array Supported uplink switch transmission rate (GiB) (moved to the next level, obsolete and will be deleted later)
     */
    public $SupportedUplinkSpeed;

    /**
     * @var array List of supported instance families (moved to the next level, obsolete and will be deleted later)
     */
    public $SupportedInstanceFamily;

    /**
     * @var integer Floor weight capacity (KG)
     */
    public $Weight;

    /**
     * @var float Power requirements (KW)
     */
    public $PowerDraw;

    /**
     * @var string Order status
     */
    public $OrderStatus;

    /**
     * @var string Order creation time
     */
    public $CreateTime;

    /**
     * @var string Large order ID
     */
    public $DedicatedClusterOrderId;

    /**
     * @var string Order type, CREATE or EXTEND
     */
    public $Action;

    /**
     * @var array List of sub-order details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $DedicatedClusterOrderItems;

    /**
     * @var integer CPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Cpu;

    /**
     * @var integer MEM value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Mem;

    /**
     * @var integer GPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Gpu;

    /**
     * @var integer 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $PayStatus;

    /**
     * @var string Payment method: lump-sum, monthly, and annually 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $PayType;

    /**
     * @var string Unit of purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $TimeUnit;

    /**
     * @var integer Purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $TimeSpan;

    /**
     * @var string Order type 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $OrderType;

    /**
     * @var string Acceptance Status
     */
    public $CheckStatus;

    /**
     * @var string Expected Delivery Time
     */
    public $DeliverExpectTime;

    /**
     * @var string Actual Delivery Completion Time
     */
    public $DeliverFinishTime;

    /**
     * @var string Expected Acceptance Time
     */
    public $CheckExpectTime;

    /**
     * @var string Actual Acceptance Completion Time
     */
    public $CheckFinishTime;

    /**
     * @var string Order SLA
     */
    public $OrderSLA;

    /**
     * @var string Order Payment Plan
     */
    public $OrderPayPlan;

    /**
     * @param string $DedicatedClusterId CDC id
     * @param string $DedicatedClusterTypeId CDC type id (moved to the next level, obsolete and will be deleted later)
     * @param array $SupportedStorageType List of supported storage types (moved to the next level, obsolete and will be deleted later)
     * @param array $SupportedUplinkSpeed Supported uplink switch transmission rate (GiB) (moved to the next level, obsolete and will be deleted later)
     * @param array $SupportedInstanceFamily List of supported instance families (moved to the next level, obsolete and will be deleted later)
     * @param integer $Weight Floor weight capacity (KG)
     * @param float $PowerDraw Power requirements (KW)
     * @param string $OrderStatus Order status
     * @param string $CreateTime Order creation time
     * @param string $DedicatedClusterOrderId Large order ID
     * @param string $Action Order type, CREATE or EXTEND
     * @param array $DedicatedClusterOrderItems List of sub-order details 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $Cpu CPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $Mem MEM value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $Gpu GPU value 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $PayStatus 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $PayType Payment method: lump-sum, monthly, and annually 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $TimeUnit Unit of purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $TimeSpan Purchased period 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $OrderType Order type 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $CheckStatus Acceptance Status
     * @param string $DeliverExpectTime Expected Delivery Time
     * @param string $DeliverFinishTime Actual Delivery Completion Time
     * @param string $CheckExpectTime Expected Acceptance Time
     * @param string $CheckFinishTime Actual Acceptance Completion Time
     * @param string $OrderSLA Order SLA
     * @param string $OrderPayPlan Order Payment Plan
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("DedicatedClusterTypeId",$param) and $param["DedicatedClusterTypeId"] !== null) {
            $this->DedicatedClusterTypeId = $param["DedicatedClusterTypeId"];
        }

        if (array_key_exists("SupportedStorageType",$param) and $param["SupportedStorageType"] !== null) {
            $this->SupportedStorageType = $param["SupportedStorageType"];
        }

        if (array_key_exists("SupportedUplinkSpeed",$param) and $param["SupportedUplinkSpeed"] !== null) {
            $this->SupportedUplinkSpeed = $param["SupportedUplinkSpeed"];
        }

        if (array_key_exists("SupportedInstanceFamily",$param) and $param["SupportedInstanceFamily"] !== null) {
            $this->SupportedInstanceFamily = $param["SupportedInstanceFamily"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PowerDraw",$param) and $param["PowerDraw"] !== null) {
            $this->PowerDraw = $param["PowerDraw"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DedicatedClusterOrderId",$param) and $param["DedicatedClusterOrderId"] !== null) {
            $this->DedicatedClusterOrderId = $param["DedicatedClusterOrderId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("DedicatedClusterOrderItems",$param) and $param["DedicatedClusterOrderItems"] !== null) {
            $this->DedicatedClusterOrderItems = [];
            foreach ($param["DedicatedClusterOrderItems"] as $key => $value){
                $obj = new DedicatedClusterOrderItem();
                $obj->deserialize($value);
                array_push($this->DedicatedClusterOrderItems, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("DeliverExpectTime",$param) and $param["DeliverExpectTime"] !== null) {
            $this->DeliverExpectTime = $param["DeliverExpectTime"];
        }

        if (array_key_exists("DeliverFinishTime",$param) and $param["DeliverFinishTime"] !== null) {
            $this->DeliverFinishTime = $param["DeliverFinishTime"];
        }

        if (array_key_exists("CheckExpectTime",$param) and $param["CheckExpectTime"] !== null) {
            $this->CheckExpectTime = $param["CheckExpectTime"];
        }

        if (array_key_exists("CheckFinishTime",$param) and $param["CheckFinishTime"] !== null) {
            $this->CheckFinishTime = $param["CheckFinishTime"];
        }

        if (array_key_exists("OrderSLA",$param) and $param["OrderSLA"] !== null) {
            $this->OrderSLA = $param["OrderSLA"];
        }

        if (array_key_exists("OrderPayPlan",$param) and $param["OrderPayPlan"] !== null) {
            $this->OrderPayPlan = $param["OrderPayPlan"];
        }
    }
}
