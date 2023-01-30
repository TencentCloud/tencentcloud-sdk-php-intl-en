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
 * ModifyCompliancePeriodTask request structure.
 *
 * @method integer getPeriodTaskId() Obtain ID of the scheduled task to be modified, which is returned by the `DescribeCompliancePeriodTaskList` API.
 * @method void setPeriodTaskId(integer $PeriodTaskId) Set ID of the scheduled task to be modified, which is returned by the `DescribeCompliancePeriodTaskList` API.
 * @method CompliancePeriodTaskRule getPeriodRule() Obtain Cycle rule of the scheduled task, which indicates no modification if the field is not specified.
 * @method void setPeriodRule(CompliancePeriodTaskRule $PeriodRule) Set Cycle rule of the scheduled task, which indicates no modification if the field is not specified.
 * @method array getStandardSettings() Obtain Compliance standard, which indicates no modification if the field is not specified.
 * @method void setStandardSettings(array $StandardSettings) Set Compliance standard, which indicates no modification if the field is not specified.
 */
class ModifyCompliancePeriodTaskRequest extends AbstractModel
{
    /**
     * @var integer ID of the scheduled task to be modified, which is returned by the `DescribeCompliancePeriodTaskList` API.
     */
    public $PeriodTaskId;

    /**
     * @var CompliancePeriodTaskRule Cycle rule of the scheduled task, which indicates no modification if the field is not specified.
     */
    public $PeriodRule;

    /**
     * @var array Compliance standard, which indicates no modification if the field is not specified.
     */
    public $StandardSettings;

    /**
     * @param integer $PeriodTaskId ID of the scheduled task to be modified, which is returned by the `DescribeCompliancePeriodTaskList` API.
     * @param CompliancePeriodTaskRule $PeriodRule Cycle rule of the scheduled task, which indicates no modification if the field is not specified.
     * @param array $StandardSettings Compliance standard, which indicates no modification if the field is not specified.
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
        if (array_key_exists("PeriodTaskId",$param) and $param["PeriodTaskId"] !== null) {
            $this->PeriodTaskId = $param["PeriodTaskId"];
        }

        if (array_key_exists("PeriodRule",$param) and $param["PeriodRule"] !== null) {
            $this->PeriodRule = new CompliancePeriodTaskRule();
            $this->PeriodRule->deserialize($param["PeriodRule"]);
        }

        if (array_key_exists("StandardSettings",$param) and $param["StandardSettings"] !== null) {
            $this->StandardSettings = [];
            foreach ($param["StandardSettings"] as $key => $value){
                $obj = new ComplianceBenchmarkStandardEnable();
                $obj->deserialize($value);
                array_push($this->StandardSettings, $obj);
            }
        }
    }
}
