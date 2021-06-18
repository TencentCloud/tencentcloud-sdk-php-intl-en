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
 * DescribeRollbackTimeValidity response structure.
 *
 * @method integer getPoolId() Obtain Storage `poolID`
 * @method void setPoolId(integer $PoolId) Set Storage `poolID`
 * @method integer getQueryId() Obtain Rollback task ID, which needs to be passed in when rolling back to this time point
 * @method void setQueryId(integer $QueryId) Set Rollback task ID, which needs to be passed in when rolling back to this time point
 * @method string getStatus() Obtain Whether the time point is valid. pass: check passed; fail: check failed
 * @method void setStatus(string $Status) Set Whether the time point is valid. pass: check passed; fail: check failed
 * @method string getSuggestTime() Obtain Suggested time point. This value takes effect only if `Status` is `fail`
 * @method void setSuggestTime(string $SuggestTime) Set Suggested time point. This value takes effect only if `Status` is `fail`
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRollbackTimeValidityResponse extends AbstractModel
{
    /**
     * @var integer Storage `poolID`
     */
    public $PoolId;

    /**
     * @var integer Rollback task ID, which needs to be passed in when rolling back to this time point
     */
    public $QueryId;

    /**
     * @var string Whether the time point is valid. pass: check passed; fail: check failed
     */
    public $Status;

    /**
     * @var string Suggested time point. This value takes effect only if `Status` is `fail`
     */
    public $SuggestTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $PoolId Storage `poolID`
     * @param integer $QueryId Rollback task ID, which needs to be passed in when rolling back to this time point
     * @param string $Status Whether the time point is valid. pass: check passed; fail: check failed
     * @param string $SuggestTime Suggested time point. This value takes effect only if `Status` is `fail`
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
        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuggestTime",$param) and $param["SuggestTime"] !== null) {
            $this->SuggestTime = $param["SuggestTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
