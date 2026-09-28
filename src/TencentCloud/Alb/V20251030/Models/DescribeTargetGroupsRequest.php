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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetGroups request structure.
 *
 * @method array getFilters() Obtain Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **VpcId**. Filter target groups by VPC instance. The value of **Values** is a unique VPC ID list.
-The value of `Name` is **TargetType**. Filter target groups by backend service type. The value of `Values` can be **Instance**.
-The value of `Name` is **TargetGroupName**. Filter target groups by target group name. The value of `Values` is a list of target group names.
- The value of `Name` is **Protocol**. Filter target groups by the backend service protocol of the target group. The value of `Values` is a list of backend service protocols of target groups.
-Filter by tag.
 * @method void setFilters(array $Filters) Set Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **VpcId**. Filter target groups by VPC instance. The value of **Values** is a unique VPC ID list.
-The value of `Name` is **TargetType**. Filter target groups by backend service type. The value of `Values` can be **Instance**.
-The value of `Name` is **TargetGroupName**. Filter target groups by target group name. The value of `Values` is a list of target group names.
- The value of `Name` is **Protocol**. Filter target groups by the backend service protocol of the target group. The value of `Values` is a list of backend service protocols of target groups.
-Filter by tag.
 * @method integer getMaxResults() Obtain Number of returned entries. Default value: 20. Maximum value: 100.
 * @method void setMaxResults(integer $MaxResults) Set Number of returned entries. Default value: 20. Maximum value: 100.
 * @method string getNextToken() Obtain Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
 * @method void setNextToken(string $NextToken) Set Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
 * @method array getTargetGroupIds() Obtain Target group ID list. The ID format is `lbtg-` followed by 8 alphanumeric characters.
 * @method void setTargetGroupIds(array $TargetGroupIds) Set Target group ID list. The ID format is `lbtg-` followed by 8 alphanumeric characters.
 */
class DescribeTargetGroupsRequest extends AbstractModel
{
    /**
     * @var array Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **VpcId**. Filter target groups by VPC instance. The value of **Values** is a unique VPC ID list.
-The value of `Name` is **TargetType**. Filter target groups by backend service type. The value of `Values` can be **Instance**.
-The value of `Name` is **TargetGroupName**. Filter target groups by target group name. The value of `Values` is a list of target group names.
- The value of `Name` is **Protocol**. Filter target groups by the backend service protocol of the target group. The value of `Values` is a list of backend service protocols of target groups.
-Filter by tag.
     */
    public $Filters;

    /**
     * @var integer Number of returned entries. Default value: 20. Maximum value: 100.
     */
    public $MaxResults;

    /**
     * @var string Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
     */
    public $NextToken;

    /**
     * @var array Target group ID list. The ID format is `lbtg-` followed by 8 alphanumeric characters.
     */
    public $TargetGroupIds;

    /**
     * @param array $Filters Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **VpcId**. Filter target groups by VPC instance. The value of **Values** is a unique VPC ID list.
-The value of `Name` is **TargetType**. Filter target groups by backend service type. The value of `Values` can be **Instance**.
-The value of `Name` is **TargetGroupName**. Filter target groups by target group name. The value of `Values` is a list of target group names.
- The value of `Name` is **Protocol**. Filter target groups by the backend service protocol of the target group. The value of `Values` is a list of backend service protocols of target groups.
-Filter by tag.
     * @param integer $MaxResults Number of returned entries. Default value: 20. Maximum value: 100.
     * @param string $NextToken Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
     * @param array $TargetGroupIds Target group ID list. The ID format is `lbtg-` followed by 8 alphanumeric characters.
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("TargetGroupIds",$param) and $param["TargetGroupIds"] !== null) {
            $this->TargetGroupIds = $param["TargetGroupIds"];
        }
    }
}
