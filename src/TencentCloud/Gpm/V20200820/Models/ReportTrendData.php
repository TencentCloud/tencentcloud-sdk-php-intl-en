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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trend data
 *
 * @method array getTotalList() Obtain Total count
 * @method void setTotalList(array $TotalList) Set Total count
 * @method array getCancelList() Obtain Number of requests cancelled
 * @method void setCancelList(array $CancelList) Set Number of requests cancelled
 * @method array getSuccessList() Obtain Number of successes
 * @method void setSuccessList(array $SuccessList) Set Number of successes
 * @method array getFailList() Obtain Number of failures
 * @method void setFailList(array $FailList) Set Number of failures
 * @method array getTimeoutList() Obtain Number of request timeout
 * @method void setTimeoutList(array $TimeoutList) Set Number of request timeout
 * @method array getTimeList() Obtain Time array in seconds
 * @method void setTimeList(array $TimeList) Set Time array in seconds
 */
class ReportTrendData extends AbstractModel
{
    /**
     * @var array Total count
     */
    public $TotalList;

    /**
     * @var array Number of requests cancelled
     */
    public $CancelList;

    /**
     * @var array Number of successes
     */
    public $SuccessList;

    /**
     * @var array Number of failures
     */
    public $FailList;

    /**
     * @var array Number of request timeout
     */
    public $TimeoutList;

    /**
     * @var array Time array in seconds
     */
    public $TimeList;

    /**
     * @param array $TotalList Total count
     * @param array $CancelList Number of requests cancelled
     * @param array $SuccessList Number of successes
     * @param array $FailList Number of failures
     * @param array $TimeoutList Number of request timeout
     * @param array $TimeList Time array in seconds
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
        if (array_key_exists("TotalList",$param) and $param["TotalList"] !== null) {
            $this->TotalList = $param["TotalList"];
        }

        if (array_key_exists("CancelList",$param) and $param["CancelList"] !== null) {
            $this->CancelList = $param["CancelList"];
        }

        if (array_key_exists("SuccessList",$param) and $param["SuccessList"] !== null) {
            $this->SuccessList = $param["SuccessList"];
        }

        if (array_key_exists("FailList",$param) and $param["FailList"] !== null) {
            $this->FailList = $param["FailList"];
        }

        if (array_key_exists("TimeoutList",$param) and $param["TimeoutList"] !== null) {
            $this->TimeoutList = $param["TimeoutList"];
        }

        if (array_key_exists("TimeList",$param) and $param["TimeList"] !== null) {
            $this->TimeList = $param["TimeList"];
        }
    }
}
