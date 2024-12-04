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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySyncRateLimit request structure.
 *
 * @method string getJobId() Obtain Migration task ID
 * @method void setJobId(string $JobId) Set Migration task ID
 * @method integer getDumpThread() Obtain Number of full export threads for sync task. Value range: 1-16.
 * @method void setDumpThread(integer $DumpThread) Set Number of full export threads for sync task. Value range: 1-16.
 * @method integer getDumpRps() Obtain The full export Rps for sync task. The value needs to be greater than 0.
 * @method void setDumpRps(integer $DumpRps) Set The full export Rps for sync task. The value needs to be greater than 0.
 * @method integer getLoadThread() Obtain Number of full import threads for sync task. Value range: 1-16.
 * @method void setLoadThread(integer $LoadThread) Set Number of full import threads for sync task. Value range: 1-16.
 * @method integer getSinkerThread() Obtain Number of incremental import threads for sync task. Value range: 1-128.
 * @method void setSinkerThread(integer $SinkerThread) Set Number of incremental import threads for sync task. Value range: 1-128.
 * @method integer getLoadRps() Obtain The full import Rps for sync task.
 * @method void setLoadRps(integer $LoadRps) Set The full import Rps for sync task.
 */
class ModifySyncRateLimitRequest extends AbstractModel
{
    /**
     * @var string Migration task ID
     */
    public $JobId;

    /**
     * @var integer Number of full export threads for sync task. Value range: 1-16.
     */
    public $DumpThread;

    /**
     * @var integer The full export Rps for sync task. The value needs to be greater than 0.
     */
    public $DumpRps;

    /**
     * @var integer Number of full import threads for sync task. Value range: 1-16.
     */
    public $LoadThread;

    /**
     * @var integer Number of incremental import threads for sync task. Value range: 1-128.
     */
    public $SinkerThread;

    /**
     * @var integer The full import Rps for sync task.
     */
    public $LoadRps;

    /**
     * @param string $JobId Migration task ID
     * @param integer $DumpThread Number of full export threads for sync task. Value range: 1-16.
     * @param integer $DumpRps The full export Rps for sync task. The value needs to be greater than 0.
     * @param integer $LoadThread Number of full import threads for sync task. Value range: 1-16.
     * @param integer $SinkerThread Number of incremental import threads for sync task. Value range: 1-128.
     * @param integer $LoadRps The full import Rps for sync task.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DumpThread",$param) and $param["DumpThread"] !== null) {
            $this->DumpThread = $param["DumpThread"];
        }

        if (array_key_exists("DumpRps",$param) and $param["DumpRps"] !== null) {
            $this->DumpRps = $param["DumpRps"];
        }

        if (array_key_exists("LoadThread",$param) and $param["LoadThread"] !== null) {
            $this->LoadThread = $param["LoadThread"];
        }

        if (array_key_exists("SinkerThread",$param) and $param["SinkerThread"] !== null) {
            $this->SinkerThread = $param["SinkerThread"];
        }

        if (array_key_exists("LoadRps",$param) and $param["LoadRps"] !== null) {
            $this->LoadRps = $param["LoadRps"];
        }
    }
}
