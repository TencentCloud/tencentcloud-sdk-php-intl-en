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
 * CreateK8sApiAbnormalEventExportJob request structure.
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
 * @method string getOrder() Obtain Sort order
 * @method void setOrder(string $Order) Set Sort order
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 */
class CreateK8sApiAbnormalEventExportJobRequest extends AbstractModel
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
     * @var string Sort order
     */
    public $Order;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var array Export field
     */
    public $ExportField;

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
     * @param string $Order Sort order
     * @param string $By Sorting field
     * @param array $ExportField Export field
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }
    }
}
