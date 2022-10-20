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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The quota limit on site tests.
 *
 * @method integer getTotalTestRuns() Obtain The total number of site tests.
 * @method void setTotalTestRuns(integer $TotalTestRuns) Set The total number of site tests.
 * @method integer getAvailableTestRuns() Obtain The number of available site tests.
 * @method void setAvailableTestRuns(integer $AvailableTestRuns) Set The number of available site tests.
 */
class SpeedTestingQuota extends AbstractModel
{
    /**
     * @var integer The total number of site tests.
     */
    public $TotalTestRuns;

    /**
     * @var integer The number of available site tests.
     */
    public $AvailableTestRuns;

    /**
     * @param integer $TotalTestRuns The total number of site tests.
     * @param integer $AvailableTestRuns The number of available site tests.
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
        if (array_key_exists("TotalTestRuns",$param) and $param["TotalTestRuns"] !== null) {
            $this->TotalTestRuns = $param["TotalTestRuns"];
        }

        if (array_key_exists("AvailableTestRuns",$param) and $param["AvailableTestRuns"] !== null) {
            $this->AvailableTestRuns = $param["AvailableTestRuns"];
        }
    }
}
