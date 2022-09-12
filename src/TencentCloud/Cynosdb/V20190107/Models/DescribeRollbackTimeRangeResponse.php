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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRollbackTimeRange response structure.
 *
 * @method string getTimeRangeStart() Obtain Start time of valid rollback time range (disused)
 * @method void setTimeRangeStart(string $TimeRangeStart) Set Start time of valid rollback time range (disused)
 * @method string getTimeRangeEnd() Obtain End time of valid rollback time range (disused)
 * @method void setTimeRangeEnd(string $TimeRangeEnd) Set End time of valid rollback time range (disused)
 * @method array getRollbackTimeRanges() Obtain Time range available for rollback
 * @method void setRollbackTimeRanges(array $RollbackTimeRanges) Set Time range available for rollback
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRollbackTimeRangeResponse extends AbstractModel
{
    /**
     * @var string Start time of valid rollback time range (disused)
     */
    public $TimeRangeStart;

    /**
     * @var string End time of valid rollback time range (disused)
     */
    public $TimeRangeEnd;

    /**
     * @var array Time range available for rollback
     */
    public $RollbackTimeRanges;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $TimeRangeStart Start time of valid rollback time range (disused)
     * @param string $TimeRangeEnd End time of valid rollback time range (disused)
     * @param array $RollbackTimeRanges Time range available for rollback
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
        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }

        if (array_key_exists("RollbackTimeRanges",$param) and $param["RollbackTimeRanges"] !== null) {
            $this->RollbackTimeRanges = [];
            foreach ($param["RollbackTimeRanges"] as $key => $value){
                $obj = new RollbackTimeRange();
                $obj->deserialize($value);
                array_push($this->RollbackTimeRanges, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
