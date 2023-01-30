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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeK8sApiAbnormalEventList request structure.
 *
 * @method array getFilters() Obtain Filters.
<li>TimeRange - String - Optional - Time range. Example: ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>`MatchRules` - String - Optional - Hit rule</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
<li>`Status` - String - Optional - Event status</li>
<li>`MatchRuleType` - String - Optional - Hit rule type</li>
<li>`ClusterRunningStatus` - String - Optional - Cluster running status</li>
<li>`ClusterName` - String - Optional - Cluster name</li>
<li>`ClusterID` - String - Optional - Cluster ID</li>
 * @method void setFilters(array $Filters) Set Filters.
<li>TimeRange - String - Optional - Time range. Example: ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>`MatchRules` - String - Optional - Hit rule</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
<li>`Status` - String - Optional - Event status</li>
<li>`MatchRuleType` - String - Optional - Hit rule type</li>
<li>`ClusterRunningStatus` - String - Optional - Cluster running status</li>
<li>`ClusterName` - String - Optional - Cluster name</li>
<li>`ClusterID` - String - Optional - Cluster ID</li>
 * @method integer getLimit() Obtain The number of results returned. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set The number of results returned. Default value: 10. Maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method string getOrder() Obtain Sort order
 * @method void setOrder(string $Order) Set Sort order
 * @method string getBy() Obtain Sorting field
`LatestFoundTime`: Last creation time
`AlarmCount`: Number of alarms
 * @method void setBy(string $By) Set Sorting field
`LatestFoundTime`: Last creation time
`AlarmCount`: Number of alarms
 */
class DescribeK8sApiAbnormalEventListRequest extends AbstractModel
{
    /**
     * @var array Filters.
<li>TimeRange - String - Optional - Time range. Example: ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>`MatchRules` - String - Optional - Hit rule</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
<li>`Status` - String - Optional - Event status</li>
<li>`MatchRuleType` - String - Optional - Hit rule type</li>
<li>`ClusterRunningStatus` - String - Optional - Cluster running status</li>
<li>`ClusterName` - String - Optional - Cluster name</li>
<li>`ClusterID` - String - Optional - Cluster ID</li>
     */
    public $Filters;

    /**
     * @var integer The number of results returned. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Sort order
     */
    public $Order;

    /**
     * @var string Sorting field
`LatestFoundTime`: Last creation time
`AlarmCount`: Number of alarms
     */
    public $By;

    /**
     * @param array $Filters Filters.
<li>TimeRange - String - Optional - Time range. Example: ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>`MatchRules` - String - Optional - Hit rule</li>
<li>`RiskLevel` - String - Optional - Threat level</li>
<li>`Status` - String - Optional - Event status</li>
<li>`MatchRuleType` - String - Optional - Hit rule type</li>
<li>`ClusterRunningStatus` - String - Optional - Cluster running status</li>
<li>`ClusterName` - String - Optional - Cluster name</li>
<li>`ClusterID` - String - Optional - Cluster ID</li>
     * @param integer $Limit The number of results returned. Default value: 10. Maximum value: 100.
     * @param integer $Offset Offset. Default value: 0
     * @param string $Order Sort order
     * @param string $By Sorting field
`LatestFoundTime`: Last creation time
`AlarmCount`: Number of alarms
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
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
