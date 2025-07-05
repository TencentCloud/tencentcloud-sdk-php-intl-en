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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulTendency request structure.
 *
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getSphereOfInfluence() Obtain Enumeration:
`LATEST`: Latest version.
`CONTAINER`: Running container.
 * @method void setSphereOfInfluence(string $SphereOfInfluence) Set Enumeration:
`LATEST`: Latest version.
`CONTAINER`: Running container.
 */
class DescribeVulTendencyRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Enumeration:
`LATEST`: Latest version.
`CONTAINER`: Running container.
     */
    public $SphereOfInfluence;

    /**
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $SphereOfInfluence Enumeration:
`LATEST`: Latest version.
`CONTAINER`: Running container.
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

        if (array_key_exists("SphereOfInfluence",$param) and $param["SphereOfInfluence"] !== null) {
            $this->SphereOfInfluence = $param["SphereOfInfluence"];
        }
    }
}
