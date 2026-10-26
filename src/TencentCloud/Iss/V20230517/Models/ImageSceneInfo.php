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
 * Image scenario configuration
 *
 * @method integer getType() Obtain <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method void setType(integer $Type) Set <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method integer getInterval() Obtain <p>Frame capturing frequency</p><p>When Type=1, the value range is [5, 180] seconds; when Type=2, the value range is [30, 36000] seconds</p>
 * @method void setInterval(integer $Interval) Set <p>Frame capturing frequency</p><p>When Type=1, the value range is [5, 180] seconds; when Type=2, the value range is [30, 36000] seconds</p>
 * @method MultiSnapshotMode getMultiMode() Obtain <p>Multiple screenshots mode</p>
 * @method void setMultiMode(MultiSnapshotMode $MultiMode) Set <p>Multiple screenshots mode</p>
 */
class ImageSceneInfo extends AbstractModel
{
    /**
     * @var integer <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Frame capturing frequency</p><p>When Type=1, the value range is [5, 180] seconds; when Type=2, the value range is [30, 36000] seconds</p>
     */
    public $Interval;

    /**
     * @var MultiSnapshotMode <p>Multiple screenshots mode</p>
     */
    public $MultiMode;

    /**
     * @param integer $Type <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     * @param integer $Interval <p>Frame capturing frequency</p><p>When Type=1, the value range is [5, 180] seconds; when Type=2, the value range is [30, 36000] seconds</p>
     * @param MultiSnapshotMode $MultiMode <p>Multiple screenshots mode</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = new MultiSnapshotMode();
            $this->MultiMode->deserialize($param["MultiMode"]);
        }
    }
}
