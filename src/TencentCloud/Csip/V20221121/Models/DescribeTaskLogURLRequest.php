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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskLogURL request structure.
 *
 * @method integer getType() Obtain 0: Preview; 1: Download
 * @method void setType(integer $Type) Set 0: Preview; 1: Download
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getReportItemKeyList() Obtain Task Report ID List
 * @method void setReportItemKeyList(array $ReportItemKeyList) Set Task Report ID List
 * @method array getReportTaskIdList() Obtain List of Task IDs in the Report
 * @method void setReportTaskIdList(array $ReportTaskIdList) Set List of Task IDs in the Report
 */
class DescribeTaskLogURLRequest extends AbstractModel
{
    /**
     * @var integer 0: Preview; 1: Download
     */
    public $Type;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Task Report ID List
     */
    public $ReportItemKeyList;

    /**
     * @var array List of Task IDs in the Report
     */
    public $ReportTaskIdList;

    /**
     * @param integer $Type 0: Preview; 1: Download
     * @param array $MemberId Group Account Member ID
     * @param array $ReportItemKeyList Task Report ID List
     * @param array $ReportTaskIdList List of Task IDs in the Report
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
