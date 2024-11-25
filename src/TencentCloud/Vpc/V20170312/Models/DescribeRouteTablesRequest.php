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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRouteTables request structure.
 *
 * @method array getFilters() Obtain Filter condition. `RouteTableIds` and `Filters` cannot be specified at the same time.
<li>route-table-id - String - (Filter condition) Route table instance ID.</li>
<li>route-table-name - String - (Filter condition) Route table name.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>association.main - String - (Filter condition) Whether it is the main route table.</li>
<li>tag-key - String - Required: no - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`. See Example 2 for the detailed usage.</li>
 * @method void setFilters(array $Filters) Set Filter condition. `RouteTableIds` and `Filters` cannot be specified at the same time.
<li>route-table-id - String - (Filter condition) Route table instance ID.</li>
<li>route-table-name - String - (Filter condition) Route table name.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>association.main - String - (Filter condition) Whether it is the main route table.</li>
<li>tag-key - String - Required: no - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`. See Example 2 for the detailed usage.</li>
 * @method array getRouteTableIds() Obtain The route table instance ID, such as `rtb-azd4dt1c`.
 * @method void setRouteTableIds(array $RouteTableIds) Set The route table instance ID, such as `rtb-azd4dt1c`.
 * @method string getOffset() Obtain Offset.
 * @method void setOffset(string $Offset) Set Offset.
 * @method string getLimit() Obtain The number of request objects.
 * @method void setLimit(string $Limit) Set The number of request objects.
 * @method boolean getNeedRouterInfo() Obtain 
 * @method void setNeedRouterInfo(boolean $NeedRouterInfo) Set 
 */
class DescribeRouteTablesRequest extends AbstractModel
{
    /**
     * @var array Filter condition. `RouteTableIds` and `Filters` cannot be specified at the same time.
<li>route-table-id - String - (Filter condition) Route table instance ID.</li>
<li>route-table-name - String - (Filter condition) Route table name.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>association.main - String - (Filter condition) Whether it is the main route table.</li>
<li>tag-key - String - Required: no - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`. See Example 2 for the detailed usage.</li>
     */
    public $Filters;

    /**
     * @var array The route table instance ID, such as `rtb-azd4dt1c`.
     */
    public $RouteTableIds;

    /**
     * @var string Offset.
     */
    public $Offset;

    /**
     * @var string The number of request objects.
     */
    public $Limit;

    /**
     * @var boolean 
     */
    public $NeedRouterInfo;

    /**
     * @param array $Filters Filter condition. `RouteTableIds` and `Filters` cannot be specified at the same time.
<li>route-table-id - String - (Filter condition) Route table instance ID.</li>
<li>route-table-name - String - (Filter condition) Route table name.</li>
<li>vpc-id - String - (Filter condition) VPC instance ID, such as `vpc-f49l6u0z`.</li>
<li>association.main - String - (Filter condition) Whether it is the main route table.</li>
<li>tag-key - String - Required: no - (Filter condition) Filter by tag key.</li>
<li>tag:tag-key - String - Required: no - (Filter condition) Filter by tag key-value pair. Use a specific tag key to replace `tag-key`. See Example 2 for the detailed usage.</li>
     * @param array $RouteTableIds The route table instance ID, such as `rtb-azd4dt1c`.
     * @param string $Offset Offset.
     * @param string $Limit The number of request objects.
     * @param boolean $NeedRouterInfo 
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("RouteTableIds",$param) and $param["RouteTableIds"] !== null) {
            $this->RouteTableIds = $param["RouteTableIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NeedRouterInfo",$param) and $param["NeedRouterInfo"] !== null) {
            $this->NeedRouterInfo = $param["NeedRouterInfo"];
        }
    }
}
