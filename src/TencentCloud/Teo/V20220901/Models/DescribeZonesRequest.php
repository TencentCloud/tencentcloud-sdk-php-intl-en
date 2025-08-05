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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones request structure.
 *
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Filter criteria. the maximum value of Filters.Values is 20. if this parameter is left empty, all site information authorized under the current appid will be returned. detailed filter criteria are as follows:.
<li>zone-name: filter by site name;</li> <li>zone-id: filter by site id. the site id is in the format of zone-2noz78a8ev6k;</li> <li>status: filter by site status;</li> <li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li> <li>alias-zone-name: filter by identical site identifier.</li> when performing a fuzzy query, the fields that support filtering are named zone-name or alias-zone-name.
 * @method void setFilters(array $Filters) Set Filter criteria. the maximum value of Filters.Values is 20. if this parameter is left empty, all site information authorized under the current appid will be returned. detailed filter criteria are as follows:.
<li>zone-name: filter by site name;</li> <li>zone-id: filter by site id. the site id is in the format of zone-2noz78a8ev6k;</li> <li>status: filter by site status;</li> <li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li> <li>alias-zone-name: filter by identical site identifier.</li> when performing a fuzzy query, the fields that support filtering are named zone-name or alias-zone-name.
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
     * @var array Filter criteria. the maximum value of Filters.Values is 20. if this parameter is left empty, all site information authorized under the current appid will be returned. detailed filter criteria are as follows:.
<li>zone-name: filter by site name;</li> <li>zone-id: filter by site id. the site id is in the format of zone-2noz78a8ev6k;</li> <li>status: filter by site status;</li> <li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li> <li>alias-zone-name: filter by identical site identifier.</li> when performing a fuzzy query, the fields that support filtering are named zone-name or alias-zone-name.
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
     * @param array $Filters Filter criteria. the maximum value of Filters.Values is 20. if this parameter is left empty, all site information authorized under the current appid will be returned. detailed filter criteria are as follows:.
<li>zone-name: filter by site name;</li> <li>zone-id: filter by site id. the site id is in the format of zone-2noz78a8ev6k;</li> <li>status: filter by site status;</li> <li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li> <li>alias-zone-name: filter by identical site identifier.</li> when performing a fuzzy query, the fields that support filtering are named zone-name or alias-zone-name.
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
