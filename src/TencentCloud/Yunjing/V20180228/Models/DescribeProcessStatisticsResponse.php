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
 * DescribeProcessStatistics response structure.
 *
 * @method integer getTotalCount() Obtain Total number of records in process statistics list.
 * @method void setTotalCount(integer $TotalCount) Set Total number of records in process statistics list.
 * @method array getProcessStatistics() Obtain Process statistics list array.
 * @method void setProcessStatistics(array $ProcessStatistics) Set Process statistics list array.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProcessStatisticsResponse extends AbstractModel
{
    /**
     * @var integer Total number of records in process statistics list.
     */
    public $TotalCount;

    /**
     * @var array Process statistics list array.
     */
    public $ProcessStatistics;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of records in process statistics list.
     * @param array $ProcessStatistics Process statistics list array.
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

        if (array_key_exists("ProcessStatistics",$param) and $param["ProcessStatistics"] !== null) {
            $this->ProcessStatistics = [];
            foreach ($param["ProcessStatistics"] as $key => $value){
                $obj = new ProcessStatistics();
                $obj->deserialize($value);
                array_push($this->ProcessStatistics, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
