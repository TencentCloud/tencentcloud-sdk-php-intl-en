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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDisasterRecoverGroups request structure.
 *
 * @method array getDisasterRecoverGroupIds() Obtain ID list of spread placement groups. You can operate up to 10 spread placement groups in each request.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set ID list of spread placement groups. You can operate up to 10 spread placement groups in each request.
 * @method string getName() Obtain Name of a spread placement group. Fuzzy match is supported.
 * @method void setName(string $Name) Set Name of a spread placement group. Fuzzy match is supported.
 * @method integer getOffset() Obtain Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method void setOffset(integer $Offset) Set Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
 * @method integer getLimit() Obtain Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
 * @method void setLimit(integer $Limit) Set Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
 * @method array getFilters() Obtain <li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
 * @method void setFilters(array $Filters) Set <li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
 */
class DescribeDisasterRecoverGroupsRequest extends AbstractModel
{
    /**
     * @var array ID list of spread placement groups. You can operate up to 10 spread placement groups in each request.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string Name of a spread placement group. Fuzzy match is supported.
     */
    public $Name;

    /**
     * @var integer Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     */
    public $Offset;

    /**
     * @var integer Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
     */
    public $Limit;

    /**
     * @var array <li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
     */
    public $Filters;

    /**
     * @param array $DisasterRecoverGroupIds ID list of spread placement groups. You can operate up to 10 spread placement groups in each request.
     * @param string $Name Name of a spread placement group. Fuzzy match is supported.
     * @param integer $Offset Offset; default value: 0. For more information on `Offset`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377).
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100. For more information on `Limit`, see the corresponding section in API [Introduction](https://intl.cloud.tencent.com/document/product/377). 
     * @param array $Filters <li> `tag-key` - String - Optional - Filter by the tag key.</li>
<li>`tag-value` - String - Optional - Filter by the tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. Replace `tag-key` with the actual tag keys.</li>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
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
        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
