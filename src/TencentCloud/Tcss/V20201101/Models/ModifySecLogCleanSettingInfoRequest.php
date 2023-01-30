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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecLogCleanSettingInfo request structure.
 *
 * @method integer getReservesLimit() Obtain Minimum storage (50-99) for triggering clearing
 * @method void setReservesLimit(integer $ReservesLimit) Set Minimum storage (50-99) for triggering clearing
 * @method integer getReservesDeadline() Obtain Storage limit (greater than 0 and smaller than `ReservesLimit`) for stopping clearing
 * @method void setReservesDeadline(integer $ReservesDeadline) Set Storage limit (greater than 0 and smaller than `ReservesLimit`) for stopping clearing
 * @method integer getDayLimit() Obtain Storage period (no less than one day) for triggering clearing
 * @method void setDayLimit(integer $DayLimit) Set Storage period (no less than one day) for triggering clearing
 */
class ModifySecLogCleanSettingInfoRequest extends AbstractModel
{
    /**
     * @var integer Minimum storage (50-99) for triggering clearing
     */
    public $ReservesLimit;

    /**
     * @var integer Storage limit (greater than 0 and smaller than `ReservesLimit`) for stopping clearing
     */
    public $ReservesDeadline;

    /**
     * @var integer Storage period (no less than one day) for triggering clearing
     */
    public $DayLimit;

    /**
     * @param integer $ReservesLimit Minimum storage (50-99) for triggering clearing
     * @param integer $ReservesDeadline Storage limit (greater than 0 and smaller than `ReservesLimit`) for stopping clearing
     * @param integer $DayLimit Storage period (no less than one day) for triggering clearing
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
        if (array_key_exists("ReservesLimit",$param) and $param["ReservesLimit"] !== null) {
            $this->ReservesLimit = $param["ReservesLimit"];
        }

        if (array_key_exists("ReservesDeadline",$param) and $param["ReservesDeadline"] !== null) {
            $this->ReservesDeadline = $param["ReservesDeadline"];
        }

        if (array_key_exists("DayLimit",$param) and $param["DayLimit"] !== null) {
            $this->DayLimit = $param["DayLimit"];
        }
    }
}
