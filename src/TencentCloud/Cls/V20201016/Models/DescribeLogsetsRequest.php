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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogsets request structure.
 *
 * @method array getFilters() Obtain logsetName
- Filter by **logset name**
- Type: String
- Required: No

logsetId
- Filter by **logset ID**
- Type: String
- Required: No

tagKey
- Filter by **tag key**
- Type: String
- Required: No

tag:tagKey
- Filter by **tag key-value pair**. The `tagKey` should be replaced with a specified tag key.
- Type: String
- Required: No

Each request can have up to 10 `Filters` and 5 `Filter.Values`.
 * @method void setFilters(array $Filters) Set logsetName
- Filter by **logset name**
- Type: String
- Required: No

logsetId
- Filter by **logset ID**
- Type: String
- Required: No

tagKey
- Filter by **tag key**
- Type: String
- Required: No

tag:tagKey
- Filter by **tag key-value pair**. The `tagKey` should be replaced with a specified tag key.
- Type: String
- Required: No

Each request can have up to 10 `Filters` and 5 `Filter.Values`.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100
 */
class DescribeLogsetsRequest extends AbstractModel
{
    /**
     * @var array logsetName
- Filter by **logset name**
- Type: String
- Required: No

logsetId
- Filter by **logset ID**
- Type: String
- Required: No

tagKey
- Filter by **tag key**
- Type: String
- Required: No

tag:tagKey
- Filter by **tag key-value pair**. The `tagKey` should be replaced with a specified tag key.
- Type: String
- Required: No

Each request can have up to 10 `Filters` and 5 `Filter.Values`.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100
     */
    public $Limit;

    /**
     * @param array $Filters logsetName
- Filter by **logset name**
- Type: String
- Required: No

logsetId
- Filter by **logset ID**
- Type: String
- Required: No

tagKey
- Filter by **tag key**
- Type: String
- Required: No

tag:tagKey
- Filter by **tag key-value pair**. The `tagKey` should be replaced with a specified tag key.
- Type: String
- Required: No

Each request can have up to 10 `Filters` and 5 `Filter.Values`.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100
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
