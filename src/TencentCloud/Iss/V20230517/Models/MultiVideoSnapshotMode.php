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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter of the multiple mode
 *
 * @method boolean getEnable() Obtain <p>Whether to enable multiple mode. When set to false, single image mode is used, and the Interval and Total parameters are ignored.</p><p>Default value: false</p>
 * @method void setEnable(boolean $Enable) Set <p>Whether to enable multiple mode. When set to false, single image mode is used, and the Interval and Total parameters are ignored.</p><p>Default value: false</p>
 * @method integer getInterval() Obtain <p>Frame interception interval</p><p>Value range: [10, 600]</p><p>Unit: seconds</p>
 * @method void setInterval(integer $Interval) Set <p>Frame interception interval</p><p>Value range: [10, 600]</p><p>Unit: seconds</p>
 * @method integer getTotal() Obtain <p>Number of captured frames</p><p>Value range: [1, 10]</p>
 * @method void setTotal(integer $Total) Set <p>Number of captured frames</p><p>Value range: [1, 10]</p>
 */
class MultiVideoSnapshotMode extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable multiple mode. When set to false, single image mode is used, and the Interval and Total parameters are ignored.</p><p>Default value: false</p>
     */
    public $Enable;

    /**
     * @var integer <p>Frame interception interval</p><p>Value range: [10, 600]</p><p>Unit: seconds</p>
     */
    public $Interval;

    /**
     * @var integer <p>Number of captured frames</p><p>Value range: [1, 10]</p>
     */
    public $Total;

    /**
     * @param boolean $Enable <p>Whether to enable multiple mode. When set to false, single image mode is used, and the Interval and Total parameters are ignored.</p><p>Default value: false</p>
     * @param integer $Interval <p>Frame interception interval</p><p>Value range: [10, 600]</p><p>Unit: seconds</p>
     * @param integer $Total <p>Number of captured frames</p><p>Value range: [1, 10]</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
