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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHaVips request structure.
 *
 * @method array getHaVipIds() Obtain Array of unique HAVIP IDs, such as `havip-9o233uri`.
 * @method void setHaVipIds(array $HaVipIds) Set Array of unique HAVIP IDs, such as `havip-9o233uri`.
 * @method array getFilters() Obtain Filter. `HaVipIds` and `Filters` cannot be specified at the same time.
havip-id - String - Unique HAVIP ID, such as `havip-9o233uri`.
havip-name - String - HAVIP name.
vpc-id - String - VPC ID of the HAVIP.
subnet-id - String - Subnet ID of the HAVIP.
 * @method void setFilters(array $Filters) Set Filter. `HaVipIds` and `Filters` cannot be specified at the same time.
havip-id - String - Unique HAVIP ID, such as `havip-9o233uri`.
havip-name - String - HAVIP name.
vpc-id - String - VPC ID of the HAVIP.
subnet-id - String - Subnet ID of the HAVIP.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method string getEcmRegion() Obtain ECM region. If this parameter is left empty, it will indicate all regions.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region. If this parameter is left empty, it will indicate all regions.
 */
class DescribeHaVipsRequest extends AbstractModel
{
    /**
     * @var array Array of unique HAVIP IDs, such as `havip-9o233uri`.
     */
    public $HaVipIds;

    /**
     * @var array Filter. `HaVipIds` and `Filters` cannot be specified at the same time.
havip-id - String - Unique HAVIP ID, such as `havip-9o233uri`.
havip-name - String - HAVIP name.
vpc-id - String - VPC ID of the HAVIP.
subnet-id - String - Subnet ID of the HAVIP.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string ECM region. If this parameter is left empty, it will indicate all regions.
     */
    public $EcmRegion;

    /**
     * @param array $HaVipIds Array of unique HAVIP IDs, such as `havip-9o233uri`.
     * @param array $Filters Filter. `HaVipIds` and `Filters` cannot be specified at the same time.
havip-id - String - Unique HAVIP ID, such as `havip-9o233uri`.
havip-name - String - HAVIP name.
vpc-id - String - VPC ID of the HAVIP.
subnet-id - String - Subnet ID of the HAVIP.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param string $EcmRegion ECM region. If this parameter is left empty, it will indicate all regions.
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
        if (array_key_exists("HaVipIds",$param) and $param["HaVipIds"] !== null) {
            $this->HaVipIds = $param["HaVipIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}
