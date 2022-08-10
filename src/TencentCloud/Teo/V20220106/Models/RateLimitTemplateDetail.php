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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rate limit template configuration
 *
 * @method string getMode() Obtain Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMode(string $Mode) Set Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getID() Obtain Unique ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setID(integer $ID) Set Unique ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAction() Obtain Action
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAction(string $Action) Set Action
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPunishTime() Obtain Time it takes to perform the action
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPunishTime(integer $PunishTime) Set Time it takes to perform the action
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getThreshold() Obtain Request rate threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setThreshold(integer $Threshold) Set Request rate threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPeriod() Obtain Statistical period
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPeriod(integer $Period) Set Statistical period
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class RateLimitTemplateDetail extends AbstractModel
{
    /**
     * @var string Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mode;

    /**
     * @var integer Unique ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ID;

    /**
     * @var string Action
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Action;

    /**
     * @var integer Time it takes to perform the action
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PunishTime;

    /**
     * @var integer Request rate threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Threshold;

    /**
     * @var integer Statistical period
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Period;

    /**
     * @param string $Mode Template name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ID Unique ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Action Action
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PunishTime Time it takes to perform the action
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Threshold Request rate threshold
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Period Statistical period
Note: This field may return `null`, indicating that no valid value can be obtained.
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
