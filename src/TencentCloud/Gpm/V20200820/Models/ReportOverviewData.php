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
 * Matchmaking statistics overview
 *
 * @method string getTotalTimes() Obtain Total count
 * @method void setTotalTimes(string $TotalTimes) Set Total count
 * @method float getSuccessPercent() Obtain Success rate
 * @method void setSuccessPercent(float $SuccessPercent) Set Success rate
 * @method float getTimeoutPercent() Obtain Timeout rate
 * @method void setTimeoutPercent(float $TimeoutPercent) Set Timeout rate
 * @method float getFailPercent() Obtain Failure rate
 * @method void setFailPercent(float $FailPercent) Set Failure rate
 * @method float getAverageSec() Obtain Average matching time
 * @method void setAverageSec(float $AverageSec) Set Average matching time
 */
class ReportOverviewData extends AbstractModel
{
    /**
     * @var string Total count
     */
    public $TotalTimes;

    /**
     * @var float Success rate
     */
    public $SuccessPercent;

    /**
     * @var float Timeout rate
     */
    public $TimeoutPercent;

    /**
     * @var float Failure rate
     */
    public $FailPercent;

    /**
     * @var float Average matching time
     */
    public $AverageSec;

    /**
     * @param string $TotalTimes Total count
     * @param float $SuccessPercent Success rate
     * @param float $TimeoutPercent Timeout rate
     * @param float $FailPercent Failure rate
     * @param float $AverageSec Average matching time
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
        if (array_key_exists("TotalTimes",$param) and $param["TotalTimes"] !== null) {
            $this->TotalTimes = $param["TotalTimes"];
        }

        if (array_key_exists("SuccessPercent",$param) and $param["SuccessPercent"] !== null) {
            $this->SuccessPercent = $param["SuccessPercent"];
        }

        if (array_key_exists("TimeoutPercent",$param) and $param["TimeoutPercent"] !== null) {
            $this->TimeoutPercent = $param["TimeoutPercent"];
        }

        if (array_key_exists("FailPercent",$param) and $param["FailPercent"] !== null) {
            $this->FailPercent = $param["FailPercent"];
        }

        if (array_key_exists("AverageSec",$param) and $param["AverageSec"] !== null) {
            $this->AverageSec = $param["AverageSec"];
        }
    }
}
