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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent purchase information
 *
 * @method integer getNum() Obtain Number of agents purchased.
 * @method void setNum(integer $Num) Set Number of agents purchased.
 * @method integer getBuyTime() Obtain Purchased timestamp.
 * @method void setBuyTime(integer $BuyTime) Set Purchased timestamp.
 * @method integer getEndTime() Obtain Deadline timestamp.
 * @method void setEndTime(integer $EndTime) Set Deadline timestamp.
 * @method integer getSipNum() Obtain Quantity of office telephones purchased.
 * @method void setSipNum(integer $SipNum) Set Quantity of office telephones purchased.
 */
class StaffBuyInfo extends AbstractModel
{
    /**
     * @var integer Number of agents purchased.
     */
    public $Num;

    /**
     * @var integer Purchased timestamp.
     */
    public $BuyTime;

    /**
     * @var integer Deadline timestamp.
     */
    public $EndTime;

    /**
     * @var integer Quantity of office telephones purchased.
     */
    public $SipNum;

    /**
     * @param integer $Num Number of agents purchased.
     * @param integer $BuyTime Purchased timestamp.
     * @param integer $EndTime Deadline timestamp.
     * @param integer $SipNum Quantity of office telephones purchased.
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SipNum",$param) and $param["SipNum"] !== null) {
            $this->SipNum = $param["SipNum"];
        }
    }
}
