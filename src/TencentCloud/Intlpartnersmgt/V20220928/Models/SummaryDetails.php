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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed summary by billing dimension
 *
 * @method array getBusiness() Obtain Product information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusiness(array $Business) Set Product information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCost() Obtain Original price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(string $OriginalCost) Set Original price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain Voucher amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRICost() Obtain Daily deduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRICost(string $RICost) Set Daily deduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCost() Obtain Total amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCost(string $TotalCost) Set Total amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupKey() Obtain Summary key by classification dimension Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupKey(string $GroupKey) Set Summary key by classification dimension Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupValue() Obtain  Summary value by classification dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupValue(string $GroupValue) Set  Summary value by classification dimension
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SummaryDetails extends AbstractModel
{
    /**
     * @var array Product information list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Business;

    /**
     * @var string Original price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var string Voucher amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Daily deduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RICost;

    /**
     * @var string Total amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCost;

    /**
     * @var string Summary key by classification dimension Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupKey;

    /**
     * @var string  Summary value by classification dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupValue;

    /**
     * @param array $Business Product information list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCost Original price
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount Voucher amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RICost Daily deduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCost Total amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupKey Summary key by classification dimension Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupValue  Summary value by classification dimension
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new BusinessInfo();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("RICost",$param) and $param["RICost"] !== null) {
            $this->RICost = $param["RICost"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("GroupKey",$param) and $param["GroupKey"] !== null) {
            $this->GroupKey = $param["GroupKey"];
        }

        if (array_key_exists("GroupValue",$param) and $param["GroupValue"] !== null) {
            $this->GroupValue = $param["GroupValue"];
        }
    }
}
