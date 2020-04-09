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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWeeklyReportBruteAttacks response structure.
 *
 * @method array getWeeklyReportBruteAttacks() Obtain Brute force attack array in weekly CWP Pro report.
 * @method void setWeeklyReportBruteAttacks(array $WeeklyReportBruteAttacks) Set Brute force attack array in weekly CWP Pro report.
 * @method integer getTotalCount() Obtain Total number of records.
 * @method void setTotalCount(integer $TotalCount) Set Total number of records.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWeeklyReportBruteAttacksResponse extends AbstractModel
{
    /**
     * @var array Brute force attack array in weekly CWP Pro report.
     */
    public $WeeklyReportBruteAttacks;

    /**
     * @var integer Total number of records.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $WeeklyReportBruteAttacks Brute force attack array in weekly CWP Pro report.
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
        if (array_key_exists("WeeklyReportBruteAttacks",$param) and $param["WeeklyReportBruteAttacks"] !== null) {
            $this->WeeklyReportBruteAttacks = [];
            foreach ($param["WeeklyReportBruteAttacks"] as $key => $value){
                $obj = new WeeklyReportBruteAttack();
                $obj->deserialize($value);
                array_push($this->WeeklyReportBruteAttacks, $obj);
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
