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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsoles request structure.
 *
 * @method integer getOffset() Obtain <p>Pagination offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of entries per page. Default value: 100. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of entries per page. Default value: 100. Maximum value: 100.</p>
 * @method array getFilters() Obtain <li> DomainPrefix filters by [domain name prefix]. Type: String Required: No</li><li> ConsoleId filters by [DataSight instance ID]. Type: String Required: No</li><li> tagKey filters by [tag key]. Type: String Required: No</li><li> tag:tagKey filters by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String Required: No</li>
 * @method void setFilters(array $Filters) Set <li> DomainPrefix filters by [domain name prefix]. Type: String Required: No</li><li> ConsoleId filters by [DataSight instance ID]. Type: String Required: No</li><li> tagKey filters by [tag key]. Type: String Required: No</li><li> tag:tagKey filters by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String Required: No</li>
 */
class DescribeConsolesRequest extends AbstractModel
{
    /**
     * @var integer <p>Pagination offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of entries per page. Default value: 100. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var array <li> DomainPrefix filters by [domain name prefix]. Type: String Required: No</li><li> ConsoleId filters by [DataSight instance ID]. Type: String Required: No</li><li> tagKey filters by [tag key]. Type: String Required: No</li><li> tag:tagKey filters by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String Required: No</li>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>Pagination offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of entries per page. Default value: 100. Maximum value: 100.</p>
     * @param array $Filters <li> DomainPrefix filters by [domain name prefix]. Type: String Required: No</li><li> ConsoleId filters by [DataSight instance ID]. Type: String Required: No</li><li> tagKey filters by [tag key]. Type: String Required: No</li><li> tag:tagKey filters by [tag key-value pair]. Replace tagKey with a specific tag key, such as tag:exampleKey. Type: String Required: No</li>
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
