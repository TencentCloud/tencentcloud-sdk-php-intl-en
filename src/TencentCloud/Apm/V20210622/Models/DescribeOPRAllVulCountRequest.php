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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOPRAllVulCount request structure.
 *
 * @method integer getStartTime() Obtain unix second-level timestamp
 * @method void setStartTime(integer $StartTime) Set unix second-level timestamp
 * @method integer getEndTime() Obtain unix second-level timestamp
 * @method void setEndTime(integer $EndTime) Set unix second-level timestamp
 */
class DescribeOPRAllVulCountRequest extends AbstractModel
{
    /**
     * @var integer unix second-level timestamp
     */
    public $StartTime;

    /**
     * @var integer unix second-level timestamp
     */
    public $EndTime;

    /**
     * @param integer $StartTime unix second-level timestamp
     * @param integer $EndTime unix second-level timestamp
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
