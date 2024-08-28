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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Expert service - monthly inspection report
 *
 * @method string getReportName() Obtain Inspection report name
 * @method void setReportName(string $ReportName) Set Inspection report name
 * @method string getReportPath() Obtain Inspection report download link
 * @method void setReportPath(string $ReportPath) Set Inspection report download link
 * @method string getModifyTime() Obtain Inspection report update time
 * @method void setModifyTime(string $ModifyTime) Set Inspection report update time
 */
class MonthInspectionReport extends AbstractModel
{
    /**
     * @var string Inspection report name
     */
    public $ReportName;

    /**
     * @var string Inspection report download link
     */
    public $ReportPath;

    /**
     * @var string Inspection report update time
     */
    public $ModifyTime;

    /**
     * @param string $ReportName Inspection report name
     * @param string $ReportPath Inspection report download link
     * @param string $ModifyTime Inspection report update time
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
        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("ReportPath",$param) and $param["ReportPath"] !== null) {
            $this->ReportPath = $param["ReportPath"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
