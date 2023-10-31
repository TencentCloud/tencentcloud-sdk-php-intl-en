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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones request structure.
 *
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Filter conditions. Up to 20 values for each filter. If this parameter is not filled in, the information of all sites under the current account is returned. Detailed filtering conditions are as follows:
<li>`zone-name`: Site name </li><li>`zone-id`: Site ID, such as zone-2noz78a8ev6k</li><li>`status`: Site status </li><li>`tag-key`: Tag key </li><li>`tag-value`: Tag value </li>Only `zone-name` supports fuzzy query.
 * @method void setFilters(array $Filters) Set Filter conditions. Up to 20 values for each filter. If this parameter is not filled in, the information of all sites under the current account is returned. Detailed filtering conditions are as follows:
<li>`zone-name`: Site name </li><li>`zone-id`: Site ID, such as zone-2noz78a8ev6k</li><li>`status`: Site status </li><li>`tag-key`: Tag key </li><li>`tag-value`: Tag value </li>Only `zone-name` supports fuzzy query.
 * @method string getOrder() Obtain Sort the returned results according to this field. Values include:
<li>`type`: Connection mode</li>
<li>`area`: Acceleration region</li>
<li>`create-time`: Creation time</li>
<li>`zone-name`: Site name</li>
<li>`use-time`: Last used time</li>
<li>`active-status` Effective status</li> Default value: `create-time`
 * @method void setOrder(string $Order) Set Sort the returned results according to this field. Values include:
<li>`type`: Connection mode</li>
<li>`area`: Acceleration region</li>
<li>`create-time`: Creation time</li>
<li>`zone-name`: Site name</li>
<li>`use-time`: Last used time</li>
<li>`active-status` Effective status</li> Default value: `create-time`
 * @method string getDirection() Obtain Sort direction. If the field value is a number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: From the smallest to largest</li>
<li>`desc`: From the largest to smallest.</li>Default value: `desc`
 * @method void setDirection(string $Direction) Set Sort direction. If the field value is a number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: From the smallest to largest</li>
<li>`desc`: From the largest to smallest.</li>Default value: `desc`
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filter conditions. Up to 20 values for each filter. If this parameter is not filled in, the information of all sites under the current account is returned. Detailed filtering conditions are as follows:
<li>`zone-name`: Site name </li><li>`zone-id`: Site ID, such as zone-2noz78a8ev6k</li><li>`status`: Site status </li><li>`tag-key`: Tag key </li><li>`tag-value`: Tag value </li>Only `zone-name` supports fuzzy query.
     */
    public $Filters;

    /**
     * @var string Sort the returned results according to this field. Values include:
<li>`type`: Connection mode</li>
<li>`area`: Acceleration region</li>
<li>`create-time`: Creation time</li>
<li>`zone-name`: Site name</li>
<li>`use-time`: Last used time</li>
<li>`active-status` Effective status</li> Default value: `create-time`
     */
    public $Order;

    /**
     * @var string Sort direction. If the field value is a number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: From the smallest to largest</li>
<li>`desc`: From the largest to smallest.</li>Default value: `desc`
     */
    public $Direction;

    /**
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 100.
     * @param array $Filters Filter conditions. Up to 20 values for each filter. If this parameter is not filled in, the information of all sites under the current account is returned. Detailed filtering conditions are as follows:
<li>`zone-name`: Site name </li><li>`zone-id`: Site ID, such as zone-2noz78a8ev6k</li><li>`status`: Site status </li><li>`tag-key`: Tag key </li><li>`tag-value`: Tag value </li>Only `zone-name` supports fuzzy query.
     * @param string $Order Sort the returned results according to this field. Values include:
<li>`type`: Connection mode</li>
<li>`area`: Acceleration region</li>
<li>`create-time`: Creation time</li>
<li>`zone-name`: Site name</li>
<li>`use-time`: Last used time</li>
<li>`active-status` Effective status</li> Default value: `create-time`
     * @param string $Direction Sort direction. If the field value is a number, sort by the numeric value. If the field value is text, sort by the ascill code. Values include:
<li>`asc`: From the smallest to largest</li>
<li>`desc`: From the largest to smallest.</li>Default value: `desc`
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
