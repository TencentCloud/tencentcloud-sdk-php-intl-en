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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertRecords request structure.
 *
 * @method array getProjectIds() Obtain Array of Project ID.
 * @method void setProjectIds(array $ProjectIds) Set Array of Project ID.
 * @method array getScenarioIds() Obtain Array of Scenario ID.
 * @method void setScenarioIds(array $ScenarioIds) Set Array of Scenario ID.
 * @method array getJobIds() Obtain Array of Job ID.
 * @method void setJobIds(array $JobIds) Set Array of Job ID.
 * @method boolean getAscend() Obtain Whether in ascending order.
 * @method void setAscend(boolean $Ascend) Set Whether in ascending order.
 * @method string getOrderBy() Obtain Column for sorting.
 * @method void setOrderBy(string $OrderBy) Set Column for sorting.
 * @method integer getOffset() Obtain Offset. Default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value is 0.
 * @method integer getLimit() Obtain Number of returns. Default value is 20, maximum is 100
 * @method void setLimit(integer $Limit) Set Number of returns. Default value is 20, maximum is 100
 * @method array getScenarioNames() Obtain Filter by Scenario names.
 * @method void setScenarioNames(array $ScenarioNames) Set Filter by Scenario names.
 */
class DescribeAlertRecordsRequest extends AbstractModel
{
    /**
     * @var array Array of Project ID.
     */
    public $ProjectIds;

    /**
     * @var array Array of Scenario ID.
     */
    public $ScenarioIds;

    /**
     * @var array Array of Job ID.
     */
    public $JobIds;

    /**
     * @var boolean Whether in ascending order.
     */
    public $Ascend;

    /**
     * @var string Column for sorting.
     */
    public $OrderBy;

    /**
     * @var integer Offset. Default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of returns. Default value is 20, maximum is 100
     */
    public $Limit;

    /**
     * @var array Filter by Scenario names.
     */
    public $ScenarioNames;

    /**
     * @param array $ProjectIds Array of Project ID.
     * @param array $ScenarioIds Array of Scenario ID.
     * @param array $JobIds Array of Job ID.
     * @param boolean $Ascend Whether in ascending order.
     * @param string $OrderBy Column for sorting.
     * @param integer $Offset Offset. Default value is 0.
     * @param integer $Limit Number of returns. Default value is 20, maximum is 100
     * @param array $ScenarioNames Filter by Scenario names.
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ScenarioIds",$param) and $param["ScenarioIds"] !== null) {
            $this->ScenarioIds = $param["ScenarioIds"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScenarioNames",$param) and $param["ScenarioNames"] !== null) {
            $this->ScenarioNames = $param["ScenarioNames"];
        }
    }
}
