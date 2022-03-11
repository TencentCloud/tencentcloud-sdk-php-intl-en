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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModule request structure.
 *
 * @method array getFilters() Obtain Filter.
module-name - string - Required: no - (Filter) Filter by module name.
module-id - string - Required: no - (Filter) Filter by module ID.
image-id      String      Required: no      (Filter) Filter by image ID.
instance-family      String      Required: no      (Filter) Filter by model family.
security-group-id - string Required: no - (Filter) Filter by ID of the security group bound to the module.
Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
 * @method void setFilters(array $Filters) Set Filter.
module-name - string - Required: no - (Filter) Filter by module name.
module-id - string - Required: no - (Filter) Filter by module ID.
image-id      String      Required: no      (Filter) Filter by image ID.
instance-family      String      Required: no      (Filter) Filter by model family.
security-group-id - string Required: no - (Filter) Filter by ID of the security group bound to the module.
Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
 * @method integer getOffset() Obtain Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
 * @method string getOrderByField() Obtain Specified sort by field. Currently, valid values are as follows:
instance-num: sort by the number of instances.
node-num: sort by the number of nodes.
timestamp: sort by instance creation time.
If this parameter is not specified, instances will be sorted by creation time by default.
 * @method void setOrderByField(string $OrderByField) Set Specified sort by field. Currently, valid values are as follows:
instance-num: sort by the number of instances.
node-num: sort by the number of nodes.
timestamp: sort by instance creation time.
If this parameter is not specified, instances will be sorted by creation time by default.
 * @method integer getOrderDirection() Obtain Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
 * @method void setOrderDirection(integer $OrderDirection) Set Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
 */
class DescribeModuleRequest extends AbstractModel
{
    /**
     * @var array Filter.
module-name - string - Required: no - (Filter) Filter by module name.
module-id - string - Required: no - (Filter) Filter by module ID.
image-id      String      Required: no      (Filter) Filter by image ID.
instance-family      String      Required: no      (Filter) Filter by model family.
security-group-id - string Required: no - (Filter) Filter by ID of the security group bound to the module.
Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
     */
    public $Limit;

    /**
     * @var string Specified sort by field. Currently, valid values are as follows:
instance-num: sort by the number of instances.
node-num: sort by the number of nodes.
timestamp: sort by instance creation time.
If this parameter is not specified, instances will be sorted by creation time by default.
     */
    public $OrderByField;

    /**
     * @var integer Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
     */
    public $OrderDirection;

    /**
     * @param array $Filters Filter.
module-name - string - Required: no - (Filter) Filter by module name.
module-id - string - Required: no - (Filter) Filter by module ID.
image-id      String      Required: no      (Filter) Filter by image ID.
instance-family      String      Required: no      (Filter) Filter by model family.
security-group-id - string Required: no - (Filter) Filter by ID of the security group bound to the module.
Each request can contain up to 10 `Filters` and 5 `Filter.Values`.
     * @param integer $Offset Offset. Default value: 0. For more information on `Offset`, see the relevant section of the API overview.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 100. For more information on `Limit`, see the relevant section of the API overview.
     * @param string $OrderByField Specified sort by field. Currently, valid values are as follows:
instance-num: sort by the number of instances.
node-num: sort by the number of nodes.
timestamp: sort by instance creation time.
If this parameter is not specified, instances will be sorted by creation time by default.
     * @param integer $OrderDirection Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
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

        if (array_key_exists("OrderByField",$param) and $param["OrderByField"] !== null) {
            $this->OrderByField = $param["OrderByField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
