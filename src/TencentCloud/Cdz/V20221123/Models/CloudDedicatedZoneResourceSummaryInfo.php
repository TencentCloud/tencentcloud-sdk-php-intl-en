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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the CDZ resource water level, corresponding to a specific vertical product.
 *
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getSubProductName() Obtain Subproduct name
 * @method void setSubProductName(string $SubProductName) Set Subproduct name
 * @method array getStatistics() Obtain Statistical detail of the resource.
 * @method void setStatistics(array $Statistics) Set Statistical detail of the resource.
 */
class CloudDedicatedZoneResourceSummaryInfo extends AbstractModel
{
    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Subproduct name
     */
    public $SubProductName;

    /**
     * @var array Statistical detail of the resource.
     */
    public $Statistics;

    /**
     * @param string $ProductName Product name
     * @param string $SubProductName Subproduct name
     * @param array $Statistics Statistical detail of the resource.
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new CloudDedicatedZoneResourceStatisticsInfo();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }
    }
}
