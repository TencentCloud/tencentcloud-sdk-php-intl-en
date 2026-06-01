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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scale-out period
 *
 * @method boolean getMonday() Obtain Whether to choose Monday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method void setMonday(boolean $Monday) Set Whether to choose Monday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method boolean getTuesday() Obtain During scaling, whether to choose Tuesday for expansion.
Description: Value "true" means select, value "false" means not select.
 * @method void setTuesday(boolean $Tuesday) Set During scaling, whether to choose Tuesday for expansion.
Description: Value "true" means select, value "false" means not select.
 * @method boolean getWednesday() Obtain Whether to choose Wednesday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method void setWednesday(boolean $Wednesday) Set Whether to choose Wednesday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method boolean getThursday() Obtain Whether to choose Thursday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method void setThursday(boolean $Thursday) Set Whether to choose Thursday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method boolean getFriday() Obtain Whether to choose Friday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method void setFriday(boolean $Friday) Set Whether to choose Friday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method boolean getSaturday() Obtain Whether to choose Saturday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method void setSaturday(boolean $Saturday) Set Whether to choose Saturday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method boolean getSunday() Obtain Whether to choose Sunday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 * @method void setSunday(boolean $Sunday) Set Whether to choose Sunday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
 */
class TImeCycle extends AbstractModel
{
    /**
     * @var boolean Whether to choose Monday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     */
    public $Monday;

    /**
     * @var boolean During scaling, whether to choose Tuesday for expansion.
Description: Value "true" means select, value "false" means not select.
     */
    public $Tuesday;

    /**
     * @var boolean Whether to choose Wednesday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     */
    public $Wednesday;

    /**
     * @var boolean Whether to choose Thursday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     */
    public $Thursday;

    /**
     * @var boolean Whether to choose Friday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     */
    public $Friday;

    /**
     * @var boolean Whether to choose Saturday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     */
    public $Saturday;

    /**
     * @var boolean Whether to choose Sunday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     */
    public $Sunday;

    /**
     * @param boolean $Monday Whether to choose Monday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     * @param boolean $Tuesday During scaling, whether to choose Tuesday for expansion.
Description: Value "true" means select, value "false" means not select.
     * @param boolean $Wednesday Whether to choose Wednesday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     * @param boolean $Thursday Whether to choose Thursday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     * @param boolean $Friday Whether to choose Friday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     * @param boolean $Saturday Whether to choose Saturday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
     * @param boolean $Sunday Whether to choose Sunday for scaling during the period.
Description: Value "true" means select, value "false" means not select.
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
        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }
    }
}
