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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cookie verification and session tracking.
 *
 * @method string getName() Obtain Operation name.
 * @method void setName(string $Name) Set Operation name.
 * @method string getDetectMode() Obtain Verification method. Default value: update_detect. Valid values:
<li>detect: verify;</li>
<li>update_detect: refresh the Cookie and validate it.</li>
 * @method void setDetectMode(string $DetectMode) Set Verification method. Default value: update_detect. Valid values:
<li>detect: verify;</li>
<li>update_detect: refresh the Cookie and validate it.</li>
 * @method string getSessionAnalyzeSwitch() Obtain Switch for session rate and periodic feature verification. Default value: off. Valid values:
<li>off: Disable;</li>
<li>`on`: Enable.</li>
 * @method void setSessionAnalyzeSwitch(string $SessionAnalyzeSwitch) Set Switch for session rate and periodic feature verification. Default value: off. Valid values:
<li>off: Disable;</li>
<li>`on`: Enable.</li>
 * @method integer getInvalidStatTime() Obtain Statistical cycle for the check result indicating no Cookie is carried or the Cookie has expired. Unit: seconds. Default: 10. Value range: 5–3600.
 * @method void setInvalidStatTime(integer $InvalidStatTime) Set Statistical cycle for the check result indicating no Cookie is carried or the Cookie has expired. Unit: seconds. Default: 10. Value range: 5–3600.
 * @method integer getInvalidThreshold() Obtain Trigger threshold for the check result indicating no Cookie is carried or the Cookie has expired. Unit: count. Default: 300. Value range: 1–100000000.
 * @method void setInvalidThreshold(integer $InvalidThreshold) Set Trigger threshold for the check result indicating no Cookie is carried or the Cookie has expired. Unit: count. Default: 300. Value range: 1–100000000.
 * @method array getAlgDetectResults() Obtain Cookie verification result.
 * @method void setAlgDetectResults(array $AlgDetectResults) Set Cookie verification result.
 * @method array getSessionBehaviors() Obtain Session rate and periodic feature verification result.
 * @method void setSessionBehaviors(array $SessionBehaviors) Set Session rate and periodic feature verification result.
 */
class AlgDetectSession extends AbstractModel
{
    /**
     * @var string Operation name.
     */
    public $Name;

    /**
     * @var string Verification method. Default value: update_detect. Valid values:
<li>detect: verify;</li>
<li>update_detect: refresh the Cookie and validate it.</li>
     */
    public $DetectMode;

    /**
     * @var string Switch for session rate and periodic feature verification. Default value: off. Valid values:
<li>off: Disable;</li>
<li>`on`: Enable.</li>
     */
    public $SessionAnalyzeSwitch;

    /**
     * @var integer Statistical cycle for the check result indicating no Cookie is carried or the Cookie has expired. Unit: seconds. Default: 10. Value range: 5–3600.
     */
    public $InvalidStatTime;

    /**
     * @var integer Trigger threshold for the check result indicating no Cookie is carried or the Cookie has expired. Unit: count. Default: 300. Value range: 1–100000000.
     */
    public $InvalidThreshold;

    /**
     * @var array Cookie verification result.
     */
    public $AlgDetectResults;

    /**
     * @var array Session rate and periodic feature verification result.
     */
    public $SessionBehaviors;

    /**
     * @param string $Name Operation name.
     * @param string $DetectMode Verification method. Default value: update_detect. Valid values:
<li>detect: verify;</li>
<li>update_detect: refresh the Cookie and validate it.</li>
     * @param string $SessionAnalyzeSwitch Switch for session rate and periodic feature verification. Default value: off. Valid values:
<li>off: Disable;</li>
<li>`on`: Enable.</li>
     * @param integer $InvalidStatTime Statistical cycle for the check result indicating no Cookie is carried or the Cookie has expired. Unit: seconds. Default: 10. Value range: 5–3600.
     * @param integer $InvalidThreshold Trigger threshold for the check result indicating no Cookie is carried or the Cookie has expired. Unit: count. Default: 300. Value range: 1–100000000.
     * @param array $AlgDetectResults Cookie verification result.
     * @param array $SessionBehaviors Session rate and periodic feature verification result.
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

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("SessionAnalyzeSwitch",$param) and $param["SessionAnalyzeSwitch"] !== null) {
            $this->SessionAnalyzeSwitch = $param["SessionAnalyzeSwitch"];
        }

        if (array_key_exists("InvalidStatTime",$param) and $param["InvalidStatTime"] !== null) {
            $this->InvalidStatTime = $param["InvalidStatTime"];
        }

        if (array_key_exists("InvalidThreshold",$param) and $param["InvalidThreshold"] !== null) {
            $this->InvalidThreshold = $param["InvalidThreshold"];
        }

        if (array_key_exists("AlgDetectResults",$param) and $param["AlgDetectResults"] !== null) {
            $this->AlgDetectResults = [];
            foreach ($param["AlgDetectResults"] as $key => $value){
                $obj = new AlgDetectResult();
                $obj->deserialize($value);
                array_push($this->AlgDetectResults, $obj);
            }
        }

        if (array_key_exists("SessionBehaviors",$param) and $param["SessionBehaviors"] !== null) {
            $this->SessionBehaviors = [];
            foreach ($param["SessionBehaviors"] as $key => $value){
                $obj = new AlgDetectResult();
                $obj->deserialize($value);
                array_push($this->SessionBehaviors, $obj);
            }
        }
    }
}
