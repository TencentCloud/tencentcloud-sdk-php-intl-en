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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskLogURL request structure.
 *
 * @method integer getType() Obtain Type of the task. `0`: Preview; `1`: Download
 * @method void setType(integer $Type) Set Type of the task. `0`: Preview; `1`: Download
 * @method array getReportItemKeyList() Obtain List of task report IDs
 * @method void setReportItemKeyList(array $ReportItemKeyList) Set List of task report IDs
 * @method array getReportTaskIdList() Obtain List of task IDs in the report
 * @method void setReportTaskIdList(array $ReportTaskIdList) Set List of task IDs in the report
 */
class DescribeTaskLogURLRequest extends AbstractModel
{
    /**
     * @var integer Type of the task. `0`: Preview; `1`: Download
     */
    public $Type;

    /**
     * @var array List of task report IDs
     */
    public $ReportItemKeyList;

    /**
     * @var array List of task IDs in the report
     */
    public $ReportTaskIdList;

    /**
     * @param integer $Type Type of the task. `0`: Preview; `1`: Download
     * @param array $ReportItemKeyList List of task report IDs
     * @param array $ReportTaskIdList List of task IDs in the report
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ReportItemKeyList",$param) and $param["ReportItemKeyList"] !== null) {
            $this->ReportItemKeyList = [];
            foreach ($param["ReportItemKeyList"] as $key => $value){
                $obj = new ReportItemKey();
                $obj->deserialize($value);
                array_push($this->ReportItemKeyList, $obj);
            }
        }

        if (array_key_exists("ReportTaskIdList",$param) and $param["ReportTaskIdList"] !== null) {
            $this->ReportTaskIdList = [];
            foreach ($param["ReportTaskIdList"] as $key => $value){
                $obj = new ReportTaskIdList();
                $obj->deserialize($value);
                array_push($this->ReportTaskIdList, $obj);
            }
        }
    }
}
