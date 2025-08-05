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
 * The settings of the rate limiting template
 *
 * @method string getMode() Obtain Template level name. valid values:.
<Li>Sup_loose: specifies super loose.</li>.
<Li>`Loose`: loose</li>.
<Li>`Emergency`: emergency</li>.
<li>`normal`: moderate</li>.
<li>strict</li>.
<li>`close`: off, precise rate limiting effective.</li>.
 * @method void setMode(string $Mode) Set Template level name. valid values:.
<Li>Sup_loose: specifies super loose.</li>.
<Li>`Loose`: loose</li>.
<Li>`Emergency`: emergency</li>.
<li>`normal`: moderate</li>.
<li>strict</li>.
<li>`close`: off, precise rate limiting effective.</li>.
 * @method integer getID() Obtain Unique ID.
 * @method void setID(integer $ID) Set Unique ID.
 * @method string getAction() Obtain Template action. valid values:.
<li>alg: JavaScript challenge;</li>.
<li>`monitor`: observe</li>.
 * @method void setAction(string $Action) Set Template action. valid values:.
<li>alg: JavaScript challenge;</li>.
<li>`monitor`: observe</li>.
 * @method integer getPunishTime() Obtain Penalty time, value range 0-2 days, unit second.
 * @method void setPunishTime(integer $PunishTime) Set Penalty time, value range 0-2 days, unit second.
 * @method integer getThreshold() Obtain Statistical threshold, in times. Value range: 0-4294967294.
 * @method void setThreshold(integer $Threshold) Set Statistical threshold, in times. Value range: 0-4294967294.
 * @method integer getPeriod() Obtain Statistical cycle. Value range: 0-120 seconds.
 * @method void setPeriod(integer $Period) Set Statistical cycle. Value range: 0-120 seconds.
 */
class RateLimitTemplateDetail extends AbstractModel
{
    /**
     * @var string Template level name. valid values:.
<Li>Sup_loose: specifies super loose.</li>.
<Li>`Loose`: loose</li>.
<Li>`Emergency`: emergency</li>.
<li>`normal`: moderate</li>.
<li>strict</li>.
<li>`close`: off, precise rate limiting effective.</li>.
     */
    public $Mode;

    /**
     * @var integer Unique ID.
     */
    public $ID;

    /**
     * @var string Template action. valid values:.
<li>alg: JavaScript challenge;</li>.
<li>`monitor`: observe</li>.
     */
    public $Action;

    /**
     * @var integer Penalty time, value range 0-2 days, unit second.
     */
    public $PunishTime;

    /**
     * @var integer Statistical threshold, in times. Value range: 0-4294967294.
     */
    public $Threshold;

    /**
     * @var integer Statistical cycle. Value range: 0-120 seconds.
     */
    public $Period;

    /**
     * @param string $Mode Template level name. valid values:.
<Li>Sup_loose: specifies super loose.</li>.
<Li>`Loose`: loose</li>.
<Li>`Emergency`: emergency</li>.
<li>`normal`: moderate</li>.
<li>strict</li>.
<li>`close`: off, precise rate limiting effective.</li>.
     * @param integer $ID Unique ID.
     * @param string $Action Template action. valid values:.
<li>alg: JavaScript challenge;</li>.
<li>`monitor`: observe</li>.
     * @param integer $PunishTime Penalty time, value range 0-2 days, unit second.
     * @param integer $Threshold Statistical threshold, in times. Value range: 0-4294967294.
     * @param integer $Period Statistical cycle. Value range: 0-120 seconds.
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
