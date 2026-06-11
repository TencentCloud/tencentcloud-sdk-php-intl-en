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
 * DescribeNetworkApplications request structure.
 *
 * @method array getFilters() Obtain <p>Filter items</p><ul><li><p>name<br>Filter as [task name]. Query by fuzzy matching method.<br>Type: String<br>Required: No</p></li><li><p>networkAppId<br>Filter as [web application id].<br>Type: String<br>Required: No</p></li></ul><p>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</p>
 * @method void setFilters(array $Filters) Set <p>Filter items</p><ul><li><p>name<br>Filter as [task name]. Query by fuzzy matching method.<br>Type: String<br>Required: No</p></li><li><p>networkAppId<br>Filter as [web application id].<br>Type: String<br>Required: No</p></li></ul><p>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</p>
 * @method integer getOffset() Obtain <p>Pagination offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
 */
class DescribeNetworkApplicationsRequest extends AbstractModel
{
    /**
     * @var array <p>Filter items</p><ul><li><p>name<br>Filter as [task name]. Query by fuzzy matching method.<br>Type: String<br>Required: No</p></li><li><p>networkAppId<br>Filter as [web application id].<br>Type: String<br>Required: No</p></li></ul><p>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</p>
     */
    public $Filters;

    /**
     * @var integer <p>Pagination offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @param array $Filters <p>Filter items</p><ul><li><p>name<br>Filter as [task name]. Query by fuzzy matching method.<br>Type: String<br>Required: No</p></li><li><p>networkAppId<br>Filter as [web application id].<br>Type: String<br>Required: No</p></li></ul><p>The maximum number of Filters per request is 10, and the maximum number of Filter.Values is 10.</p>
     * @param integer $Offset <p>Pagination offset. Default value: 0.</p>
     * @param integer $Limit <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
