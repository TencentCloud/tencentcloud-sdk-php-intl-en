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
 * CreateVideoSnapshotTemplate request structure.
 *
 * @method string getName() Obtain <p>Template name: Chinese, English, digits, "-", "_", with a length not exceeding 128 characters</p>
 * @method void setName(string $Name) Set <p>Template name: Chinese, English, digits, "-", "_", with a length not exceeding 128 characters</p>
 * @method integer getType() Obtain <p>Screenshot type: 1-Real-time frame capture 2-Low frequency frame capture<br>Note: Real-time frame capture pulls the real-time stream throughout the effective period. Low frequency frame capture pulls the real-time stream as needed during the effective period, with a minimum duration of not less than 1 minute each time.</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method void setType(integer $Type) Set <p>Screenshot type: 1-Real-time frame capture 2-Low frequency frame capture<br>Note: Real-time frame capture pulls the real-time stream throughout the effective period. Low frequency frame capture pulls the real-time stream as needed during the effective period, with a minimum duration of not less than 1 minute each time.</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method integer getInterval() Obtain <p>Frame capturing frequency: When Type = 1, the value range is [5, 180] seconds; when Type = 2, the value range is [30, 36000] seconds</p>
 * @method void setInterval(integer $Interval) Set <p>Frame capturing frequency: When Type = 1, the value range is [5, 180] seconds; when Type = 2, the value range is [30, 36000] seconds</p>
 * @method array getTimes() Obtain <p>Effective period. Note: The array size is no more than 100, and each time period is not less than 1 minute.</p>
 * @method void setTimes(array $Times) Set <p>Effective period. Note: The array size is no more than 100, and each time period is not less than 1 minute.</p>
 * @method MultiVideoSnapshotMode getMultiMode() Obtain <p>Multiple mode</p>
 * @method void setMultiMode(MultiVideoSnapshotMode $MultiMode) Set <p>Multiple mode</p>
 */
class CreateVideoSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Template name: Chinese, English, digits, "-", "_", with a length not exceeding 128 characters</p>
     */
    public $Name;

    /**
     * @var integer <p>Screenshot type: 1-Real-time frame capture 2-Low frequency frame capture<br>Note: Real-time frame capture pulls the real-time stream throughout the effective period. Low frequency frame capture pulls the real-time stream as needed during the effective period, with a minimum duration of not less than 1 minute each time.</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Frame capturing frequency: When Type = 1, the value range is [5, 180] seconds; when Type = 2, the value range is [30, 36000] seconds</p>
     */
    public $Interval;

    /**
     * @var array <p>Effective period. Note: The array size is no more than 100, and each time period is not less than 1 minute.</p>
     */
    public $Times;

    /**
     * @var MultiVideoSnapshotMode <p>Multiple mode</p>
     */
    public $MultiMode;

    /**
     * @param string $Name <p>Template name: Chinese, English, digits, "-", "_", with a length not exceeding 128 characters</p>
     * @param integer $Type <p>Screenshot type: 1-Real-time frame capture 2-Low frequency frame capture<br>Note: Real-time frame capture pulls the real-time stream throughout the effective period. Low frequency frame capture pulls the real-time stream as needed during the effective period, with a minimum duration of not less than 1 minute each time.</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     * @param integer $Interval <p>Frame capturing frequency: When Type = 1, the value range is [5, 180] seconds; when Type = 2, the value range is [30, 36000] seconds</p>
     * @param array $Times <p>Effective period. Note: The array size is no more than 100, and each time period is not less than 1 minute.</p>
     * @param MultiVideoSnapshotMode $MultiMode <p>Multiple mode</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = new MultiVideoSnapshotMode();
            $this->MultiMode->deserialize($param["MultiMode"]);
        }
    }
}
