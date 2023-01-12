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
 * DescribeTrafficPackages request structure.
 *
 * @method array getTrafficPackageIds() Obtain Traffic package IDs. Multiple values can be used.
 * @method void setTrafficPackageIds(array $TrafficPackageIds) Set Traffic package IDs. Multiple values can be used.
 * @method array getFilters() Obtain Each request can have up to 10 `Filters`. `TrafficPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `traffic-package_id` - String - Optional - Filter by the traffic package ID.</li>
<li> `traffic-package-name` - String - Optional - Filter by the traffic package name. Fuzzy match is not supported.</li>
<li> `status` - String - Optional - Filter by the traffic package status. Values: [AVAILABLE|EXPIRED|EXHAUSTED].</li>
 * @method void setFilters(array $Filters) Set Each request can have up to 10 `Filters`. `TrafficPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `traffic-package_id` - String - Optional - Filter by the traffic package ID.</li>
<li> `traffic-package-name` - String - Optional - Filter by the traffic package name. Fuzzy match is not supported.</li>
<li> `status` - String - Optional - Filter by the traffic package status. Values: [AVAILABLE|EXPIRED|EXHAUSTED].</li>
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method integer getLimit() Obtain Pagination parameter
 * @method void setLimit(integer $Limit) Set Pagination parameter
 */
class DescribeTrafficPackagesRequest extends AbstractModel
{
    /**
     * @var array Traffic package IDs. Multiple values can be used.
     */
    public $TrafficPackageIds;

    /**
     * @var array Each request can have up to 10 `Filters`. `TrafficPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `traffic-package_id` - String - Optional - Filter by the traffic package ID.</li>
<li> `traffic-package-name` - String - Optional - Filter by the traffic package name. Fuzzy match is not supported.</li>
<li> `status` - String - Optional - Filter by the traffic package status. Values: [AVAILABLE|EXPIRED|EXHAUSTED].</li>
     */
    public $Filters;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var integer Pagination parameter
     */
    public $Limit;

    /**
     * @param array $TrafficPackageIds Traffic package IDs. Multiple values can be used.
     * @param array $Filters Each request can have up to 10 `Filters`. `TrafficPackageIds` and `Filters` cannot be specified at the same time. The specific filter conditions are as follows:
<li> `traffic-package_id` - String - Optional - Filter by the traffic package ID.</li>
<li> `traffic-package-name` - String - Optional - Filter by the traffic package name. Fuzzy match is not supported.</li>
<li> `status` - String - Optional - Filter by the traffic package status. Values: [AVAILABLE|EXPIRED|EXHAUSTED].</li>
     * @param integer $Offset Pagination parameter
     * @param integer $Limit Pagination parameter
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
        if (array_key_exists("TrafficPackageIds",$param) and $param["TrafficPackageIds"] !== null) {
            $this->TrafficPackageIds = $param["TrafficPackageIds"];
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
    }
}
