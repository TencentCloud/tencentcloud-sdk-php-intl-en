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
 * DescribeAccelerationDomains request structure.
 *
 * @method string getZoneId() Obtain Site ID of the accelerated domain name. If it’s not specified, all accelerated domain names under the site are returned.
 * @method void setZoneId(string $ZoneId) Set Site ID of the accelerated domain name. If it’s not specified, all accelerated domain names under the site are returned.
 * @method array getFilters() Obtain Filter criteria. Each filter criteria can have up to 20 entries. Values:
<li>`domain-name`:<br>   <strong>Accelerated domain name</strong><br>   Type: String<br>Required: No
<li>`origin-type`:<br>   <strong>Type of the origin</strong><br>   Type: String<br>   Required: No
<li>`origin`:<br>   <strong>Primary origin</strong><br>   Type: String<br>   Required: No
<li>`backup-origin`<br>   <strong>Secondary origin</strong><br>   Type: String<br>   Required: No
 * @method void setFilters(array $Filters) Set Filter criteria. Each filter criteria can have up to 20 entries. Values:
<li>`domain-name`:<br>   <strong>Accelerated domain name</strong><br>   Type: String<br>Required: No
<li>`origin-type`:<br>   <strong>Type of the origin</strong><br>   Type: String<br>   Required: No
<li>`origin`:<br>   <strong>Primary origin</strong><br>   Type: String<br>   Required: No
<li>`backup-origin`<br>   <strong>Secondary origin</strong><br>   Type: String<br>   Required: No
 * @method string getDirection() Obtain The sorting order. Values:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li>Default value: `asc`.
 * @method void setDirection(string $Direction) Set The sorting order. Values:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li>Default value: `asc`.
 * @method string getMatch() Obtain The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
 * @method void setMatch(string $Match) Set The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 200.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 200.
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0.
 * @method string getOrder() Obtain The sorting criteria. Values:
<li>`created_on`: Creation time of the accelerated domain name.</li>
<li>`domain-name`: Acceleration domain name.</li>
</li>Default value: `domain-name`.
 * @method void setOrder(string $Order) Set The sorting criteria. Values:
<li>`created_on`: Creation time of the accelerated domain name.</li>
<li>`domain-name`: Acceleration domain name.</li>
</li>Default value: `domain-name`.
 */
class DescribeAccelerationDomainsRequest extends AbstractModel
{
    /**
     * @var string Site ID of the accelerated domain name. If it’s not specified, all accelerated domain names under the site are returned.
     */
    public $ZoneId;

    /**
     * @var array Filter criteria. Each filter criteria can have up to 20 entries. Values:
<li>`domain-name`:<br>   <strong>Accelerated domain name</strong><br>   Type: String<br>Required: No
<li>`origin-type`:<br>   <strong>Type of the origin</strong><br>   Type: String<br>   Required: No
<li>`origin`:<br>   <strong>Primary origin</strong><br>   Type: String<br>   Required: No
<li>`backup-origin`<br>   <strong>Secondary origin</strong><br>   Type: String<br>   Required: No
     */
    public $Filters;

    /**
     * @var string The sorting order. Values:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li>Default value: `asc`.
     */
    public $Direction;

    /**
     * @var string The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
     */
    public $Match;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 200.
     */
    public $Limit;

    /**
     * @var integer Offset for paginated queries. Default value: 0.
     */
    public $Offset;

    /**
     * @var string The sorting criteria. Values:
<li>`created_on`: Creation time of the accelerated domain name.</li>
<li>`domain-name`: Acceleration domain name.</li>
</li>Default value: `domain-name`.
     */
    public $Order;

    /**
     * @param string $ZoneId Site ID of the accelerated domain name. If it’s not specified, all accelerated domain names under the site are returned.
     * @param array $Filters Filter criteria. Each filter criteria can have up to 20 entries. Values:
<li>`domain-name`:<br>   <strong>Accelerated domain name</strong><br>   Type: String<br>Required: No
<li>`origin-type`:<br>   <strong>Type of the origin</strong><br>   Type: String<br>   Required: No
<li>`origin`:<br>   <strong>Primary origin</strong><br>   Type: String<br>   Required: No
<li>`backup-origin`<br>   <strong>Secondary origin</strong><br>   Type: String<br>   Required: No
     * @param string $Direction The sorting order. Values:
<li>`asc`: Ascending order.</li>
<li>`desc`: Descending order.</li>Default value: `asc`.
     * @param string $Match The match mode. Values:
<li>`all`: Return all matches.</li>
<li>`any`: Return any match.</li>Default value: `all`.
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 200.
     * @param integer $Offset Offset for paginated queries. Default value: 0.
     * @param string $Order The sorting criteria. Values:
<li>`created_on`: Creation time of the accelerated domain name.</li>
<li>`domain-name`: Acceleration domain name.</li>
</li>Default value: `domain-name`.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
