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
 * InquirePriceRenewInstances response structure.
 *
 * @method Price getPrice() Obtain Price information. It defaults to the price information of the first instance in the list.
 * @method void setPrice(Price $Price) Set Price information. It defaults to the price information of the first instance in the list.
 * @method array getDataDiskPriceSet() Obtain List of data disk price information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataDiskPriceSet(array $DataDiskPriceSet) Set List of data disk price information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstancePriceDetailSet() Obtain Price list of the instances to be renewed.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstancePriceDetailSet(array $InstancePriceDetailSet) Set Price list of the instances to be renewed.
Note: This field may return `null`, indicating that no valid value was found.
 * @method TotalPrice getTotalPrice() Obtain Total price
 * @method void setTotalPrice(TotalPrice $TotalPrice) Set Total price
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class InquirePriceRenewInstancesResponse extends AbstractModel
{
    /**
     * @var Price Price information. It defaults to the price information of the first instance in the list.
     */
    public $Price;

    /**
     * @var array List of data disk price information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataDiskPriceSet;

    /**
     * @var array Price list of the instances to be renewed.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstancePriceDetailSet;

    /**
     * @var TotalPrice Total price
     */
    public $TotalPrice;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param Price $Price Price information. It defaults to the price information of the first instance in the list.
     * @param array $DataDiskPriceSet List of data disk price information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstancePriceDetailSet Price list of the instances to be renewed.
Note: This field may return `null`, indicating that no valid value was found.
     * @param TotalPrice $TotalPrice Total price
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new Price();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("DataDiskPriceSet",$param) and $param["DataDiskPriceSet"] !== null) {
            $this->DataDiskPriceSet = [];
            foreach ($param["DataDiskPriceSet"] as $key => $value){
                $obj = new DataDiskPrice();
                $obj->deserialize($value);
                array_push($this->DataDiskPriceSet, $obj);
            }
        }

        if (array_key_exists("InstancePriceDetailSet",$param) and $param["InstancePriceDetailSet"] !== null) {
            $this->InstancePriceDetailSet = [];
            foreach ($param["InstancePriceDetailSet"] as $key => $value){
                $obj = new InstancePriceDetail();
                $obj->deserialize($value);
                array_push($this->InstancePriceDetailSet, $obj);
            }
        }

        if (array_key_exists("TotalPrice",$param) and $param["TotalPrice"] !== null) {
            $this->TotalPrice = new TotalPrice();
            $this->TotalPrice->deserialize($param["TotalPrice"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
