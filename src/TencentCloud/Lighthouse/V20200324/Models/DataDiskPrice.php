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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data disk price
 *
 * @method string getDiskId() Obtain Cloud disk ID.
 * @method void setDiskId(string $DiskId) Set Cloud disk ID.
 * @method float getOriginalDiskPrice() Obtain Cloud disk unit price.
 * @method void setOriginalDiskPrice(float $OriginalDiskPrice) Set Cloud disk unit price.
 * @method float getOriginalPrice() Obtain Total price of cloud disk
 * @method void setOriginalPrice(float $OriginalPrice) Set Total price of cloud disk
 * @method float getDiscount() Obtain Discount.
 * @method void setDiscount(float $Discount) Set Discount.
 * @method float getDiscountPrice() Obtain Discounted total price.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted total price.
 * @method string getInstanceId() Obtain ID of the instance to which the data disk is mounted.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to which the data disk is mounted.
Note: This field may return `null`, indicating that no valid value was found.
 */
class DataDiskPrice extends AbstractModel
{
    /**
     * @var string Cloud disk ID.
     */
    public $DiskId;

    /**
     * @var float Cloud disk unit price.
     */
    public $OriginalDiskPrice;

    /**
     * @var float Total price of cloud disk
     */
    public $OriginalPrice;

    /**
     * @var float Discount.
     */
    public $Discount;

    /**
     * @var float Discounted total price.
     */
    public $DiscountPrice;

    /**
     * @var string ID of the instance to which the data disk is mounted.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceId;

    /**
     * @param string $DiskId Cloud disk ID.
     * @param float $OriginalDiskPrice Cloud disk unit price.
     * @param float $OriginalPrice Total price of cloud disk
     * @param float $Discount Discount.
     * @param float $DiscountPrice Discounted total price.
     * @param string $InstanceId ID of the instance to which the data disk is mounted.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("OriginalDiskPrice",$param) and $param["OriginalDiskPrice"] !== null) {
            $this->OriginalDiskPrice = $param["OriginalDiskPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
