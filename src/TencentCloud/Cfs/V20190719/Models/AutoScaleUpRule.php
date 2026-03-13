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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Auto scale-out rule.
 *
 * @method string getStatus() Obtain Enable auto scale-out policy, disable.
 * @method void setStatus(string $Status) Set Enable auto scale-out policy, disable.
 * @method integer getScaleThreshold() Obtain Cluster usage percentage. start expansion when reaching this value. value range: [10-90].
 * @method void setScaleThreshold(integer $ScaleThreshold) Set Cluster usage percentage. start expansion when reaching this value. value range: [10-90].
 * @method integer getTargetThreshold() Obtain Used capacity to total clusters ratio after expansion. value range: [10-90].
 * @method void setTargetThreshold(integer $TargetThreshold) Set Used capacity to total clusters ratio after expansion. value range: [10-90].
 */
class AutoScaleUpRule extends AbstractModel
{
    /**
     * @var string Enable auto scale-out policy, disable.
     */
    public $Status;

    /**
     * @var integer Cluster usage percentage. start expansion when reaching this value. value range: [10-90].
     */
    public $ScaleThreshold;

    /**
     * @var integer Used capacity to total clusters ratio after expansion. value range: [10-90].
     */
    public $TargetThreshold;

    /**
     * @param string $Status Enable auto scale-out policy, disable.
     * @param integer $ScaleThreshold Cluster usage percentage. start expansion when reaching this value. value range: [10-90].
     * @param integer $TargetThreshold Used capacity to total clusters ratio after expansion. value range: [10-90].
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScaleThreshold",$param) and $param["ScaleThreshold"] !== null) {
            $this->ScaleThreshold = $param["ScaleThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }
    }
}
