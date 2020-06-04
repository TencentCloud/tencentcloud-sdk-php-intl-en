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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUnBlockStatis response structure.
 *
 * @method integer getTotal() Obtain Total number of unblocking chances
 * @method void setTotal(integer $Total) Set Total number of unblocking chances
 * @method integer getUsed() Obtain Number of used chances
 * @method void setUsed(integer $Used) Set Number of used chances
 * @method string getBeginTime() Obtain Statistics start time
 * @method void setBeginTime(string $BeginTime) Set Statistics start time
 * @method string getEndTime() Obtain Statistics end time
 * @method void setEndTime(string $EndTime) Set Statistics end time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUnBlockStatisResponse extends AbstractModel
{
    /**
     * @var integer Total number of unblocking chances
     */
    public $Total;

    /**
     * @var integer Number of used chances
     */
    public $Used;

    /**
     * @var string Statistics start time
     */
    public $BeginTime;

    /**
     * @var string Statistics end time
     */
    public $EndTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $Total Total number of unblocking chances
     * @param integer $Used Number of used chances
     * @param string $BeginTime Statistics start time
     * @param string $EndTime Statistics end time
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
