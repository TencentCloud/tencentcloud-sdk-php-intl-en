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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWeeklyReports response structure.
 *
 * @method array getWeeklyReports() Obtain Weekly CWP Pro report list array.
 * @method void setWeeklyReports(array $WeeklyReports) Set Weekly CWP Pro report list array.
 * @method integer getTotalCount() Obtain Total number of records.
 * @method void setTotalCount(integer $TotalCount) Set Total number of records.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWeeklyReportsResponse extends AbstractModel
{
    /**
     * @var array Weekly CWP Pro report list array.
     */
    public $WeeklyReports;

    /**
     * @var integer Total number of records.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $WeeklyReports Weekly CWP Pro report list array.
     * @param integer $TotalCount Total number of records.
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
        if (array_key_exists("WeeklyReports",$param) and $param["WeeklyReports"] !== null) {
            $this->WeeklyReports = [];
            foreach ($param["WeeklyReports"] as $key => $value){
                $obj = new WeeklyReport();
                $obj->deserialize($value);
                array_push($this->WeeklyReports, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
