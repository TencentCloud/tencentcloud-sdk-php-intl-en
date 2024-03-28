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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Package purchase information.
 *
 * @method string getPackageId() Obtain Package ID.
 * @method void setPackageId(string $PackageId) Set Package ID.
 * @method integer getType() Obtain Package type, 0 - Outbound call package | 1 - 400 inbound call package.
 * @method void setType(integer $Type) Set Package type, 0 - Outbound call package | 1 - 400 inbound call package.
 * @method integer getCapacitySize() Obtain Total package.
 * @method void setCapacitySize(integer $CapacitySize) Set Total package.
 * @method integer getCapacityRemain() Obtain Remaining package.
 * @method void setCapacityRemain(integer $CapacityRemain) Set Remaining package.
 * @method integer getBuyTime() Obtain Purchased timestamp.
 * @method void setBuyTime(integer $BuyTime) Set Purchased timestamp.
 * @method integer getEndTime() Obtain End timestamp.
 * @method void setEndTime(integer $EndTime) Set End timestamp.
 */
class PackageBuyInfo extends AbstractModel
{
    /**
     * @var string Package ID.
     */
    public $PackageId;

    /**
     * @var integer Package type, 0 - Outbound call package | 1 - 400 inbound call package.
     */
    public $Type;

    /**
     * @var integer Total package.
     */
    public $CapacitySize;

    /**
     * @var integer Remaining package.
     */
    public $CapacityRemain;

    /**
     * @var integer Purchased timestamp.
     */
    public $BuyTime;

    /**
     * @var integer End timestamp.
     */
    public $EndTime;

    /**
     * @param string $PackageId Package ID.
     * @param integer $Type Package type, 0 - Outbound call package | 1 - 400 inbound call package.
     * @param integer $CapacitySize Total package.
     * @param integer $CapacityRemain Remaining package.
     * @param integer $BuyTime Purchased timestamp.
     * @param integer $EndTime End timestamp.
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CapacitySize",$param) and $param["CapacitySize"] !== null) {
            $this->CapacitySize = $param["CapacitySize"];
        }

        if (array_key_exists("CapacityRemain",$param) and $param["CapacityRemain"] !== null) {
            $this->CapacityRemain = $param["CapacityRemain"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
