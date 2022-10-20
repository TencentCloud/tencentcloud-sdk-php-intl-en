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
 * The settings of the rate limiting template
 *
 * @method string getMode() Obtain The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMode(string $Mode) Set The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getID() Obtain The unique ID.
 * @method void setID(integer $ID) Set The unique ID.
 * @method string getAction() Obtain The action, which will be triggered when the specified threshold reaches.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set The action, which will be triggered when the specified threshold reaches.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPunishTime() Obtain The amount of time taken to perform the action. Value range: 0-172800 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPunishTime(integer $PunishTime) Set The amount of time taken to perform the action. Value range: 0-172800 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getThreshold() Obtain The request threshold. Value range: 0-4294967294.
 * @method void setThreshold(integer $Threshold) Set The request threshold. Value range: 0-4294967294.
 * @method integer getPeriod() Obtain The statistical period. Value range: 0-120 seconds.
 * @method void setPeriod(integer $Period) Set The statistical period. Value range: 0-120 seconds.
 */
class RateLimitTemplateDetail extends AbstractModel
{
    /**
     * @var string The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mode;

    /**
     * @var integer The unique ID.
     */
    public $ID;

    /**
     * @var string The action, which will be triggered when the specified threshold reaches.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var integer The amount of time taken to perform the action. Value range: 0-172800 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PunishTime;

    /**
     * @var integer The request threshold. Value range: 0-4294967294.
     */
    public $Threshold;

    /**
     * @var integer The statistical period. Value range: 0-120 seconds.
     */
    public $Period;

    /**
     * @param string $Mode The mode. Values:
<li>`sup_loose`: Super loose</li>
<li>`loose`: Loose</li>
<li>`emergency`: Emergency</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`close`: Off</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ID The unique ID.
     * @param string $Action The action, which will be triggered when the specified threshold reaches.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PunishTime The amount of time taken to perform the action. Value range: 0-172800 seconds.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Threshold The request threshold. Value range: 0-4294967294.
     * @param integer $Period The statistical period. Value range: 0-120 seconds.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
