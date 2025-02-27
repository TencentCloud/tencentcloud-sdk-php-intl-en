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
 * @method array getBusiness() Obtain Product information list.
 * @method void setBusiness(array $Business) Set Product information list.
 * @method string getOriginalCost() Obtain Original price.
 * @method void setOriginalCost(string $OriginalCost) Set Original price.
 * @method string getVoucherPayAmount() Obtain Voucher amount.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher amount.
 * @method string getRICost() Obtain RI deduction.
 * @method void setRICost(string $RICost) Set RI deduction.
 * @method string getTotalCost() Obtain <TOTAL_AMOUNT>.
 * @method void setTotalCost(string $TotalCost) Set <TOTAL_AMOUNT>.
 * @method string getGroupKey() Obtain Classification dimension summary key.
 * @method void setGroupKey(string $GroupKey) Set Classification dimension summary key.
 * @method string getGroupValue() Obtain Summary value by classification dimension.
 * @method void setGroupValue(string $GroupValue) Set Summary value by classification dimension.
 */
class SummaryDetails extends AbstractModel
{
    /**
     * @var array Product information list.
     */
    public $Business;

    /**
     * @var string Original price.
     */
    public $OriginalCost;

    /**
     * @var string Voucher amount.
     */
    public $VoucherPayAmount;

    /**
     * @var string RI deduction.
     */
    public $RICost;

    /**
     * @var string <TOTAL_AMOUNT>.
     */
    public $TotalCost;

    /**
     * @var string Classification dimension summary key.
     */
    public $GroupKey;

    /**
     * @var string Summary value by classification dimension.
     */
    public $GroupValue;

    /**
     * @param array $Business Product information list.
     * @param string $OriginalCost Original price.
     * @param string $VoucherPayAmount Voucher amount.
     * @param string $RICost RI deduction.
     * @param string $TotalCost <TOTAL_AMOUNT>.
     * @param string $GroupKey Classification dimension summary key.
     * @param string $GroupValue Summary value by classification dimension.
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
