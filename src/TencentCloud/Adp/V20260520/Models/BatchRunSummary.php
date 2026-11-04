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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchRunSummary
 *
 * @method integer getFailedCount() Obtain 	Number of failures.
 * @method void setFailedCount(integer $FailedCount) Set 	Number of failures.
 * @method integer getSuccessCount() Obtain 	Number of successes.
 * @method void setSuccessCount(integer $SuccessCount) Set 	Number of successes.
 * @method integer getTotalCount() Obtain Total batches
 * @method void setTotalCount(integer $TotalCount) Set Total batches
 * @method array getFailedIndexList() Obtain Failed subscript
 * @method void setFailedIndexList(array $FailedIndexList) Set Failed subscript
 * @method array getJustCompletedIndexList() Obtain 	Batches completed in the previous round
 * @method void setJustCompletedIndexList(array $JustCompletedIndexList) Set 	Batches completed in the previous round
 * @method array getRunningIndexList() Obtain Subscript in running
 * @method void setRunningIndexList(array $RunningIndexList) Set Subscript in running
 * @method array getSuccessIndexList() Obtain Subscript of success
 * @method void setSuccessIndexList(array $SuccessIndexList) Set Subscript of success
 */
class BatchRunSummary extends AbstractModel
{
    /**
     * @var integer 	Number of failures.
     */
    public $FailedCount;

    /**
     * @var integer 	Number of successes.
     */
    public $SuccessCount;

    /**
     * @var integer Total batches
     */
    public $TotalCount;

    /**
     * @var array Failed subscript
     */
    public $FailedIndexList;

    /**
     * @var array 	Batches completed in the previous round
     */
    public $JustCompletedIndexList;

    /**
     * @var array Subscript in running
     */
    public $RunningIndexList;

    /**
     * @var array Subscript of success
     */
    public $SuccessIndexList;

    /**
     * @param integer $FailedCount 	Number of failures.
     * @param integer $SuccessCount 	Number of successes.
     * @param integer $TotalCount Total batches
     * @param array $FailedIndexList Failed subscript
     * @param array $JustCompletedIndexList 	Batches completed in the previous round
     * @param array $RunningIndexList Subscript in running
     * @param array $SuccessIndexList Subscript of success
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
        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("FailedIndexList",$param) and $param["FailedIndexList"] !== null) {
            $this->FailedIndexList = $param["FailedIndexList"];
        }

        if (array_key_exists("JustCompletedIndexList",$param) and $param["JustCompletedIndexList"] !== null) {
            $this->JustCompletedIndexList = $param["JustCompletedIndexList"];
        }

        if (array_key_exists("RunningIndexList",$param) and $param["RunningIndexList"] !== null) {
            $this->RunningIndexList = $param["RunningIndexList"];
        }

        if (array_key_exists("SuccessIndexList",$param) and $param["SuccessIndexList"] !== null) {
            $this->SuccessIndexList = $param["SuccessIndexList"];
        }
    }
}
