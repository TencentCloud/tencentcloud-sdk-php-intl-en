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
 * DescribeInstances request structure.
 *
 * @method array getFilters() Obtain Filter.
zone      String      Required: no     (Filter) Filter by AZ abbreviation.
zone-name      String      Required: no     (Filter) Filter by AZ name. Fuzzy match is supported.
module-id      String      Required: no     (Filter) Filter by module ID.
instance-id      String      Required: no      (Filter) Filter by instance ID.
instance-name      String      Required: no      (Filter) Filter by instance name. Fuzzy match is supported.
ip-address      String      Required: no      (Filter) Filter by the instance's private/public IP.
instance-uuid   string Required: no (Filter) Filter instances by `uuid`.
instance-state  string  Required: no (Filter) Update instances by instance status.
internet-service-provider      String      Required: no      (Filter) Filter by the ISP of the instance's public IP.
tag-key      String      Required: no      (Filter) Filter by tag key.
tag:tag-key      String      Required: no      (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key.
instance-family      String      Required: no      (Filter) Filter by model family.
module-name      String      Required: no      (Filter) Filter by module name. Fuzzy match is supported.
image-id      String      Required: no      (Filter) Filter by instance image ID.
vpc-id String      Required: no      (Filter) Filter by instance VPC ID.
subnet-id String      Required: no      (Filter) Filter by instance subnet ID.

If the `Filters` parameter is not specified, the information of all relevant instances will be queried.
Each request can contain up to 5 `Filter.Values`.
 * @method void setFilters(array $Filters) Set Filter.
zone      String      Required: no     (Filter) Filter by AZ abbreviation.
zone-name      String      Required: no     (Filter) Filter by AZ name. Fuzzy match is supported.
module-id      String      Required: no     (Filter) Filter by module ID.
instance-id      String      Required: no      (Filter) Filter by instance ID.
instance-name      String      Required: no      (Filter) Filter by instance name. Fuzzy match is supported.
ip-address      String      Required: no      (Filter) Filter by the instance's private/public IP.
instance-uuid   string Required: no (Filter) Filter instances by `uuid`.
instance-state  string  Required: no (Filter) Update instances by instance status.
internet-service-provider      String      Required: no      (Filter) Filter by the ISP of the instance's public IP.
tag-key      String      Required: no      (Filter) Filter by tag key.
tag:tag-key      String      Required: no      (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key.
instance-family      String      Required: no      (Filter) Filter by model family.
module-name      String      Required: no      (Filter) Filter by module name. Fuzzy match is supported.
image-id      String      Required: no      (Filter) Filter by instance image ID.
vpc-id String      Required: no      (Filter) Filter by instance VPC ID.
subnet-id String      Required: no      (Filter) Filter by instance subnet ID.

If the `Filters` parameter is not specified, the information of all relevant instances will be queried.
Each request can contain up to 5 `Filter.Values`.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20 (if the number of query results is greater than or equal to 20). Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20 (if the number of query results is greater than or equal to 20). Maximum value: 100.
 * @method string getOrderByField() Obtain Specified sort by field. Currently, valid values are as follows:
timestamp: sort by instance creation time.
Note: you can sort only by creation time currently. More sort criteria may be supported in the future.
If this parameter is not specified, instances will be sorted by creation time by default.
 * @method void setOrderByField(string $OrderByField) Set Specified sort by field. Currently, valid values are as follows:
timestamp: sort by instance creation time.
Note: you can sort only by creation time currently. More sort criteria may be supported in the future.
If this parameter is not specified, instances will be sorted by creation time by default.
 * @method integer getOrderDirection() Obtain Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
 * @method void setOrderDirection(integer $OrderDirection) Set Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter.
zone      String      Required: no     (Filter) Filter by AZ abbreviation.
zone-name      String      Required: no     (Filter) Filter by AZ name. Fuzzy match is supported.
module-id      String      Required: no     (Filter) Filter by module ID.
instance-id      String      Required: no      (Filter) Filter by instance ID.
instance-name      String      Required: no      (Filter) Filter by instance name. Fuzzy match is supported.
ip-address      String      Required: no      (Filter) Filter by the instance's private/public IP.
instance-uuid   string Required: no (Filter) Filter instances by `uuid`.
instance-state  string  Required: no (Filter) Update instances by instance status.
internet-service-provider      String      Required: no      (Filter) Filter by the ISP of the instance's public IP.
tag-key      String      Required: no      (Filter) Filter by tag key.
tag:tag-key      String      Required: no      (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key.
instance-family      String      Required: no      (Filter) Filter by model family.
module-name      String      Required: no      (Filter) Filter by module name. Fuzzy match is supported.
image-id      String      Required: no      (Filter) Filter by instance image ID.
vpc-id String      Required: no      (Filter) Filter by instance VPC ID.
subnet-id String      Required: no      (Filter) Filter by instance subnet ID.

If the `Filters` parameter is not specified, the information of all relevant instances will be queried.
Each request can contain up to 5 `Filter.Values`.
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20 (if the number of query results is greater than or equal to 20). Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Specified sort by field. Currently, valid values are as follows:
timestamp: sort by instance creation time.
Note: you can sort only by creation time currently. More sort criteria may be supported in the future.
If this parameter is not specified, instances will be sorted by creation time by default.
     */
    public $OrderByField;

    /**
     * @var integer Sorting order. 0: descending; 1: ascending. If this parameter is not specified, it will be descending by default.
     */
    public $OrderDirection;

    /**
     * @param array $Filters Filter.
zone      String      Required: no     (Filter) Filter by AZ abbreviation.
zone-name      String      Required: no     (Filter) Filter by AZ name. Fuzzy match is supported.
module-id      String      Required: no     (Filter) Filter by module ID.
instance-id      String      Required: no      (Filter) Filter by instance ID.
instance-name      String      Required: no      (Filter) Filter by instance name. Fuzzy match is supported.
ip-address      String      Required: no      (Filter) Filter by the instance's private/public IP.
instance-uuid   string Required: no (Filter) Filter instances by `uuid`.
instance-state  string  Required: no (Filter) Update instances by instance status.
internet-service-provider      String      Required: no      (Filter) Filter by the ISP of the instance's public IP.
tag-key      String      Required: no      (Filter) Filter by tag key.
tag:tag-key      String      Required: no      (Filter) Filter by tag key-value pair. Replace `tag-key` with the specific tag key.
instance-family      String      Required: no      (Filter) Filter by model family.
module-name      String      Required: no      (Filter) Filter by module name. Fuzzy match is supported.
image-id      String      Required: no      (Filter) Filter by instance image ID.
vpc-id String      Required: no      (Filter) Filter by instance VPC ID.
subnet-id String      Required: no      (Filter) Filter by instance subnet ID.

If the `Filters` parameter is not specified, the information of all relevant instances will be queried.
Each request can contain up to 5 `Filter.Values`.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20 (if the number of query results is greater than or equal to 20). Maximum value: 100.
     * @param string $OrderByField Specified sort by field. Currently, valid values are as follows:
timestamp: sort by instance creation time.
Note: you can sort only by creation time currently. More sort criteria may be supported in the future.
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
