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
 * DescribePrefetchOriginLimit request structure.
 *
 * @method string getZoneId() Obtain Specifies the site ID.
 * @method void setZoneId(string $ZoneId) Set Specifies the site ID.
 * @method integer getOffset() Obtain Offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Specifies the paginated query limit. default value: 20. upper limit: 100.
 * @method void setLimit(integer $Limit) Set Specifies the paginated query limit. default value: 20. upper limit: 100.
 * @method array getFilters() Obtain Filter condition. specifies the maximum number of Filters.Values is 20. detailed filter criteria:.
<Li>Domain-Name: specifies domain filtering. the domain-name format is like www.qq.com. fuzzy queries are not supported.</li>.
<li>area: specifies the acceleration region to filter by limit. fuzzy queries are not supported. valid values:<br> Overseas: global availability zone (excludes chinese mainland);<br> MainlandChina: chinese mainland availability zone.</li>.
 * @method void setFilters(array $Filters) Set Filter condition. specifies the maximum number of Filters.Values is 20. detailed filter criteria:.
<Li>Domain-Name: specifies domain filtering. the domain-name format is like www.qq.com. fuzzy queries are not supported.</li>.
<li>area: specifies the acceleration region to filter by limit. fuzzy queries are not supported. valid values:<br> Overseas: global availability zone (excludes chinese mainland);<br> MainlandChina: chinese mainland availability zone.</li>.
 */
class DescribePrefetchOriginLimitRequest extends AbstractModel
{
    /**
     * @var string Specifies the site ID.
     */
    public $ZoneId;

    /**
     * @var integer Offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Specifies the paginated query limit. default value: 20. upper limit: 100.
     */
    public $Limit;

    /**
     * @var array Filter condition. specifies the maximum number of Filters.Values is 20. detailed filter criteria:.
<Li>Domain-Name: specifies domain filtering. the domain-name format is like www.qq.com. fuzzy queries are not supported.</li>.
<li>area: specifies the acceleration region to filter by limit. fuzzy queries are not supported. valid values:<br> Overseas: global availability zone (excludes chinese mainland);<br> MainlandChina: chinese mainland availability zone.</li>.
     */
    public $Filters;

    /**
     * @param string $ZoneId Specifies the site ID.
     * @param integer $Offset Offset of paginated query. Default value: 0.
     * @param integer $Limit Specifies the paginated query limit. default value: 20. upper limit: 100.
     * @param array $Filters Filter condition. specifies the maximum number of Filters.Values is 20. detailed filter criteria:.
<Li>Domain-Name: specifies domain filtering. the domain-name format is like www.qq.com. fuzzy queries are not supported.</li>.
<li>area: specifies the acceleration region to filter by limit. fuzzy queries are not supported. valid values:<br> Overseas: global availability zone (excludes chinese mainland);<br> MainlandChina: chinese mainland availability zone.</li>.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
