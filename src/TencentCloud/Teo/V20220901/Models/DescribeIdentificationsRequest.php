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
 * DescribeIdentifications request structure.
 *
 * @method array getFilters() Obtain Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:<li>zone-name: Filter by site name.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:<li>zone-name: Filter by site name.</li>
 * @method integer getOffset() Obtain The page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0
 * @method integer getLimit() Obtain The paginated query limit. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The paginated query limit. Default value: 20. Maximum value: 1000.
 */
class DescribeIdentificationsRequest extends AbstractModel
{
    /**
     * @var array Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:<li>zone-name: Filter by site name.</li>
     */
    public $Filters;

    /**
     * @var integer The page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer The paginated query limit. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param array $Filters Filter conditions. The maximum value for Filters.Values is 20. The detailed conditions are as follows:<li>zone-name: Filter by site name.</li>
     * @param integer $Offset The page offset. Default value: 0
     * @param integer $Limit The paginated query limit. Default value: 20. Maximum value: 1000.
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
