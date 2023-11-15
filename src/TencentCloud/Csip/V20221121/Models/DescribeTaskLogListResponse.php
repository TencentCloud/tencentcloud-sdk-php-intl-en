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
 * DescribeTaskLogList response structure.
 *
 * @method integer getTotalCount() Obtain Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getData() Obtain List of reports
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set List of reports
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getNotViewNumber() Obtain Number of reports pending viewed
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNotViewNumber(integer $NotViewNumber) Set Number of reports pending viewed
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getReportTemplateNumber() Obtain Number of report templates
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setReportTemplateNumber(integer $ReportTemplateNumber) Set Number of report templates
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskLogListResponse extends AbstractModel
{
    /**
     * @var integer Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List of reports
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Number of reports pending viewed
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NotViewNumber;

    /**
     * @var integer Number of report templates
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ReportTemplateNumber;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Data List of reports
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $NotViewNumber Number of reports pending viewed
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $ReportTemplateNumber Number of report templates
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TaskLogInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("NotViewNumber",$param) and $param["NotViewNumber"] !== null) {
            $this->NotViewNumber = $param["NotViewNumber"];
        }

        if (array_key_exists("ReportTemplateNumber",$param) and $param["ReportTemplateNumber"] !== null) {
            $this->ReportTemplateNumber = $param["ReportTemplateNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
