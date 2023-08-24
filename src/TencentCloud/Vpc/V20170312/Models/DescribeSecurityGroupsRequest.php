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
 * DescribeSecurityGroups request structure.
 *
 * @method array getSecurityGroupIds() Obtain Security group ID, such as `sg-33ocnj9n`. Each request can contain up to 100 instances at a time. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID, such as `sg-33ocnj9n`. Each request can contain up to 100 instances at a time. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
 * @method array getFilters() Obtain Filter conditions. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - (Filter condition) The security group ID.</li>
<li>project-id - Integer - (Filter condition) The project ID.</li>
<li>security-group-name - String - (Filter condition) The security group name.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key. For more information, see Example 2.</li>
<li> `tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see Example 3.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - (Filter condition) The security group ID.</li>
<li>project-id - Integer - (Filter condition) The project ID.</li>
<li>security-group-name - String - (Filter condition) The security group name.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key. For more information, see Example 2.</li>
<li> `tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see Example 3.</li>
 * @method string getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(string $Offset) Set Offset. Default value: 0.
 * @method string getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 100.
 * @method void setLimit(string $Limit) Set Number of returned results. Default value: 20. Maximum value: 100.
 * @method string getOrderField() Obtain Sorting field. Values: `CreatedTime`, `UpdateTime` Note: This field does not have default value.
 * @method void setOrderField(string $OrderField) Set Sorting field. Values: `CreatedTime`, `UpdateTime` Note: This field does not have default value.
 * @method string getOrderDirection() Obtain Sorting method Order methods. Ascending: `ASC`, Descending: `DESC`. Default: `ASC`
 * @method void setOrderDirection(string $OrderDirection) Set Sorting method Order methods. Ascending: `ASC`, Descending: `DESC`. Default: `ASC`
 */
class DescribeSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array Security group ID, such as `sg-33ocnj9n`. Each request can contain up to 100 instances at a time. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
     */
    public $SecurityGroupIds;

    /**
     * @var array Filter conditions. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - (Filter condition) The security group ID.</li>
<li>project-id - Integer - (Filter condition) The project ID.</li>
<li>security-group-name - String - (Filter condition) The security group name.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key. For more information, see Example 2.</li>
<li> `tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see Example 3.</li>
     */
    public $Filters;

    /**
     * @var string Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Number of returned results. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Sorting field. Values: `CreatedTime`, `UpdateTime` Note: This field does not have default value.
     */
    public $OrderField;

    /**
     * @var string Sorting method Order methods. Ascending: `ASC`, Descending: `DESC`. Default: `ASC`
     */
    public $OrderDirection;

    /**
     * @param array $SecurityGroupIds Security group ID, such as `sg-33ocnj9n`. Each request can contain up to 100 instances at a time. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
     * @param array $Filters Filter conditions. `SecurityGroupIds` and `Filters` cannot be specified at the same time.
<li>security-group-id - String - (Filter condition) The security group ID.</li>
<li>project-id - Integer - (Filter condition) The project ID.</li>
<li>security-group-name - String - (Filter condition) The security group name.</li>
<li>tag-key - String - Required: no - (Filter condition) Filters by tag key. For more information, see Example 2.</li>
<li> `tag:tag-key` - String - Required: no - (Filter condition) Filters by tag key pair. For this parameter, `tag-key` will be replaced with a specific tag key. For more information, see Example 3.</li>
     * @param string $Offset Offset. Default value: 0.
     * @param string $Limit Number of returned results. Default value: 20. Maximum value: 100.
     * @param string $OrderField Sorting field. Values: `CreatedTime`, `UpdateTime` Note: This field does not have default value.
     * @param string $OrderDirection Sorting method Order methods. Ascending: `ASC`, Descending: `DESC`. Default: `ASC`
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
