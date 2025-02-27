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
 * Region details in the customer bill data totaled by region
 *
 * @method string getRegionId() Obtain Region id.
 * @method void setRegionId(string $RegionId) Set Region id.
 * @method string getRegionName() Obtain Region name.
 * @method void setRegionName(string $RegionName) Set Region name.
 * @method string getOriginalCost() Obtain Actual total consumption, up to 8 decimal places.
 * @method void setOriginalCost(string $OriginalCost) Set Actual total consumption, up to 8 decimal places.
 * @method string getVoucherPayAmount() Obtain Voucher payment amount, up to 8 decimal places.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment amount, up to 8 decimal places.
 * @method string getTotalCost() Obtain Total consumption, up to 8 decimal places.
 * @method void setTotalCost(string $TotalCost) Set Total consumption, up to 8 decimal places.
 */
class RegionSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string Region id.
     */
    public $RegionId;

    /**
     * @var string Region name.
     */
    public $RegionName;

    /**
     * @var string Actual total consumption, up to 8 decimal places.
     */
    public $OriginalCost;

    /**
     * @var string Voucher payment amount, up to 8 decimal places.
     */
    public $VoucherPayAmount;

    /**
     * @var string Total consumption, up to 8 decimal places.
     */
    public $TotalCost;

    /**
     * @param string $RegionId Region id.
     * @param string $RegionName Region name.
     * @param string $OriginalCost Actual total consumption, up to 8 decimal places.
     * @param string $VoucherPayAmount Voucher payment amount, up to 8 decimal places.
     * @param string $TotalCost Total consumption, up to 8 decimal places.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }
    }
}
