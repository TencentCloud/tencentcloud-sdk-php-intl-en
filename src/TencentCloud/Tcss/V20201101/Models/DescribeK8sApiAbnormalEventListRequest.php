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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeK8sApiAbnormalEventList request structure.
 *
 * @method array getFilters() Obtain <p>Filter conditions.</p><li>TimeRange - String - Required: No - Time range filter ["2022-03-31 16:55:00", "2022-03-31 17:00:00"];</li><li>MatchRules - String - Required: No - Hit rule filter;</li><li>RiskLevel - String - Required: No - Threat level filter;</li><li>Status - String - Required: No - Event status filter;</li><li>MatchRuleType - String - Required: No - Hit rule type filter;</li><li>ClusterRunningStatus - String - Required: No - Cluster running status;</li><li>ClusterName - String - Required: No - Cluster name;</li><li>ClusterID - String - Required: No - Cluster ID.</li>
 * @method void setFilters(array $Filters) Set <p>Filter conditions.</p><li>TimeRange - String - Required: No - Time range filter ["2022-03-31 16:55:00", "2022-03-31 17:00:00"];</li><li>MatchRules - String - Required: No - Hit rule filter;</li><li>RiskLevel - String - Required: No - Threat level filter;</li><li>Status - String - Required: No - Event status filter;</li><li>MatchRuleType - String - Required: No - Hit rule type filter;</li><li>ClusterRunningStatus - String - Required: No - Cluster running status;</li><li>ClusterName - String - Required: No - Cluster name;</li><li>ClusterID - String - Required: No - Cluster ID.</li>
 * @method integer getLimit() Obtain <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method string getOrder() Obtain <p>Sorting method.</p>
 * @method void setOrder(string $Order) Set <p>Sorting method.</p>
 * @method string getBy() Obtain <p>Sorting field.<br>LatestFoundTime: Last generation time.<br>AlarmCount: Number of alarms.</p>
 * @method void setBy(string $By) Set <p>Sorting field.<br>LatestFoundTime: Last generation time.<br>AlarmCount: Number of alarms.</p>
 */
class DescribeK8sApiAbnormalEventListRequest extends AbstractModel
{
    /**
     * @var array <p>Filter conditions.</p><li>TimeRange - String - Required: No - Time range filter ["2022-03-31 16:55:00", "2022-03-31 17:00:00"];</li><li>MatchRules - String - Required: No - Hit rule filter;</li><li>RiskLevel - String - Required: No - Threat level filter;</li><li>Status - String - Required: No - Event status filter;</li><li>MatchRuleType - String - Required: No - Hit rule type filter;</li><li>ClusterRunningStatus - String - Required: No - Cluster running status;</li><li>ClusterName - String - Required: No - Cluster name;</li><li>ClusterID - String - Required: No - Cluster ID.</li>
     */
    public $Filters;

    /**
     * @var integer <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting method.</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field.<br>LatestFoundTime: Last generation time.<br>AlarmCount: Number of alarms.</p>
     */
    public $By;

    /**
     * @param array $Filters <p>Filter conditions.</p><li>TimeRange - String - Required: No - Time range filter ["2022-03-31 16:55:00", "2022-03-31 17:00:00"];</li><li>MatchRules - String - Required: No - Hit rule filter;</li><li>RiskLevel - String - Required: No - Threat level filter;</li><li>Status - String - Required: No - Event status filter;</li><li>MatchRuleType - String - Required: No - Hit rule type filter;</li><li>ClusterRunningStatus - String - Required: No - Cluster running status;</li><li>ClusterName - String - Required: No - Cluster name;</li><li>ClusterID - String - Required: No - Cluster ID.</li>
     * @param integer $Limit <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param string $Order <p>Sorting method.</p>
     * @param string $By <p>Sorting field.<br>LatestFoundTime: Last generation time.<br>AlarmCount: Number of alarms.</p>
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
