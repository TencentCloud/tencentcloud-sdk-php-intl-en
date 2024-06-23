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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Status Trend Statistics
 *
 * @method string getCountGroup() Obtain Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCountGroup(string $CountGroup) Set Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getShowTimeGroup() Obtain DateNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setShowTimeGroup(string $ShowTimeGroup) Set DateNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleUnit() Obtain Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleUnit(string $CycleUnit) Set Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReportTime() Obtain 1
 * @method void setReportTime(string $ReportTime) Set 1
 * @method integer getCount() Obtain 1
 * @method void setCount(integer $Count) Set 1
 */
class TaskByStatus extends AbstractModel
{
    /**
     * @var string Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CountGroup;

    /**
     * @var string DateNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ShowTimeGroup;

    /**
     * @var string StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleUnit;

    /**
     * @var string 1
     */
    public $ReportTime;

    /**
     * @var integer 1
     */
    public $Count;

    /**
     * @param string $CountGroup Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ShowTimeGroup DateNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleUnit Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ReportTime 1
     * @param integer $Count 1
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
        if (array_key_exists("CountGroup",$param) and $param["CountGroup"] !== null) {
            $this->CountGroup = $param["CountGroup"];
        }

        if (array_key_exists("ShowTimeGroup",$param) and $param["ShowTimeGroup"] !== null) {
            $this->ShowTimeGroup = $param["ShowTimeGroup"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
