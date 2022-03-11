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
 * DescribeRouteTables request structure.
 *
 * @method array getRouteTableIds() Obtain Route table instance ID, such as `rtb-azd4dt1c`.
 * @method void setRouteTableIds(array $RouteTableIds) Set Route table instance ID, such as `rtb-azd4dt1c`.
 * @method array getFilters() Obtain Filter. `RouteTableIds` and `Filters` cannot be specified at the same time.
route-table-id - String - (Filter) Route table instance ID.
route-table-name - String - (Filter) Route table name.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
association.main - String - (Filter) Whether it is the main route table.
 * @method void setFilters(array $Filters) Set Filter. `RouteTableIds` and `Filters` cannot be specified at the same time.
route-table-id - String - (Filter) Route table instance ID.
route-table-name - String - (Filter) Route table name.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
association.main - String - (Filter) Whether it is the main route table.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method string getEcmRegion() Obtain ECM region. If this parameter is left empty or not specified, it will indicate all regions.
 * @method void setEcmRegion(string $EcmRegion) Set ECM region. If this parameter is left empty or not specified, it will indicate all regions.
 */
class DescribeRouteTablesRequest extends AbstractModel
{
    /**
     * @var array Route table instance ID, such as `rtb-azd4dt1c`.
     */
    public $RouteTableIds;

    /**
     * @var array Filter. `RouteTableIds` and `Filters` cannot be specified at the same time.
route-table-id - String - (Filter) Route table instance ID.
route-table-name - String - (Filter) Route table name.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
association.main - String - (Filter) Whether it is the main route table.
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var string ECM region. If this parameter is left empty or not specified, it will indicate all regions.
     */
    public $EcmRegion;

    /**
     * @param array $RouteTableIds Route table instance ID, such as `rtb-azd4dt1c`.
     * @param array $Filters Filter. `RouteTableIds` and `Filters` cannot be specified at the same time.
route-table-id - String - (Filter) Route table instance ID.
route-table-name - String - (Filter) Route table name.
vpc-id - String - (Filter) VPC instance ID, such as `vpc-f49l6u0z`.
association.main - String - (Filter) Whether it is the main route table.
     * @param integer $Offset Offset
     * @param integer $Limit Limit
     * @param string $EcmRegion ECM region. If this parameter is left empty or not specified, it will indicate all regions.
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
        if (array_key_exists("RouteTableIds",$param) and $param["RouteTableIds"] !== null) {
            $this->RouteTableIds = $param["RouteTableIds"];
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
