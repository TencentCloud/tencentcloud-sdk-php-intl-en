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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdjustJobSpeed request structure.
 *
 * @method string getJobId() Obtain Job ID.
 * @method void setJobId(string $JobId) Set Job ID.
 * @method integer getTargetRequestsPerSecond() Obtain Target RPS. The value should be greater than the initial RPS and less than the maximum RPS.
 * @method void setTargetRequestsPerSecond(integer $TargetRequestsPerSecond) Set Target RPS. The value should be greater than the initial RPS and less than the maximum RPS.
 */
class AdjustJobSpeedRequest extends AbstractModel
{
    /**
     * @var string Job ID.
     */
    public $JobId;

    /**
     * @var integer Target RPS. The value should be greater than the initial RPS and less than the maximum RPS.
     */
    public $TargetRequestsPerSecond;

    /**
     * @param string $JobId Job ID.
     * @param integer $TargetRequestsPerSecond Target RPS. The value should be greater than the initial RPS and less than the maximum RPS.
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

        if (array_key_exists("TargetRequestsPerSecond",$param) and $param["TargetRequestsPerSecond"] !== null) {
            $this->TargetRequestsPerSecond = $param["TargetRequestsPerSecond"];
        }
    }
}
