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
 * DescribeTargetGroupTargets request structure.
 *
 * @method string getTargetGroupId() Obtain Target group ID. The format is `lbtg-` followed by 8 alphanumeric characters.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID. The format is `lbtg-` followed by 8 alphanumeric characters.
 * @method array getFilters() Obtain Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **TargetId**. Filter backend services by resource ID. This parameter is valid only when the backend type of the target group is **Instance**. The value of Values is the resource ID of Cvm or Eni.
-The value of `Name` is **TargetIp**. Filter backend services by resource IP. This parameter is valid only when the backend type of the target group is **Ip**. The value of `Values` is the IP of the backend service.
-Filter by tag.
 * @method void setFilters(array $Filters) Set Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **TargetId**. Filter backend services by resource ID. This parameter is valid only when the backend type of the target group is **Instance**. The value of Values is the resource ID of Cvm or Eni.
-The value of `Name` is **TargetIp**. Filter backend services by resource IP. This parameter is valid only when the backend type of the target group is **Ip**. The value of `Values` is the IP of the backend service.
-Filter by tag.
 * @method integer getMaxResults() Obtain The number of return lists, with a default value of **20** and a maximum value of **100**.
 * @method void setMaxResults(integer $MaxResults) Set The number of return lists, with a default value of **20** and a maximum value of **100**.
 * @method string getNextToken() Obtain Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
 * @method void setNextToken(string $NextToken) Set Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
 */
class DescribeTargetGroupTargetsRequest extends AbstractModel
{
    /**
     * @var string Target group ID. The format is `lbtg-` followed by 8 alphanumeric characters.
     */
    public $TargetGroupId;

    /**
     * @var array Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **TargetId**. Filter backend services by resource ID. This parameter is valid only when the backend type of the target group is **Instance**. The value of Values is the resource ID of Cvm or Eni.
-The value of `Name` is **TargetIp**. Filter backend services by resource IP. This parameter is valid only when the backend type of the target group is **Ip**. The value of `Values` is the IP of the backend service.
-Filter by tag.
     */
    public $Filters;

    /**
     * @var integer The number of return lists, with a default value of **20** and a maximum value of **100**.
     */
    public $MaxResults;

    /**
     * @var string Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
     */
    public $NextToken;

    /**
     * @param string $TargetGroupId Target group ID. The format is `lbtg-` followed by 8 alphanumeric characters.
     * @param array $Filters Filter. Query backend services by specified filter criteria. Supported values:
- The value of Name is **TargetId**. Filter backend services by resource ID. This parameter is valid only when the backend type of the target group is **Instance**. The value of Values is the resource ID of Cvm or Eni.
-The value of `Name` is **TargetIp**. Filter backend services by resource IP. This parameter is valid only when the backend type of the target group is **Ip**. The value of `Values` is the IP of the backend service.
-Filter by tag.
     * @param integer $MaxResults The number of return lists, with a default value of **20** and a maximum value of **100**.
     * @param string $NextToken Token for the next query. Not required for the first query or when there are no more queries.
If there is a next query, the value is the NextToken value returned from the last API call.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
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
    }
}
