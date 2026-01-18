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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Payment active retention data
 *
 * @method integer getOneDayRetentionUsers() Obtain Day 1 active retention of paying users
 * @method void setOneDayRetentionUsers(integer $OneDayRetentionUsers) Set Day 1 active retention of paying users
 * @method integer getTwoDayRetentionUsers() Obtain Day 2 active retention of paying users
 * @method void setTwoDayRetentionUsers(integer $TwoDayRetentionUsers) Set Day 2 active retention of paying users
 * @method integer getThreeDayRetentionUsers() Obtain Day 3 active retention of paying users
 * @method void setThreeDayRetentionUsers(integer $ThreeDayRetentionUsers) Set Day 3 active retention of paying users
 * @method integer getFourDayRetentionUsers() Obtain Day 4 active retention of paying users
 * @method void setFourDayRetentionUsers(integer $FourDayRetentionUsers) Set Day 4 active retention of paying users
 * @method integer getFiveDayRetentionUsers() Obtain Day 5 active retention of paying users
 * @method void setFiveDayRetentionUsers(integer $FiveDayRetentionUsers) Set Day 5 active retention of paying users
 * @method integer getSixDayRetentionUsers() Obtain Day 6 active retention of paying users
 * @method void setSixDayRetentionUsers(integer $SixDayRetentionUsers) Set Day 6 active retention of paying users
 * @method integer getSevenDayRetentionUsers() Obtain Day 7 active retention of paying users
 * @method void setSevenDayRetentionUsers(integer $SevenDayRetentionUsers) Set Day 7 active retention of paying users
 * @method integer getFourteenDayRetentionUsers() Obtain Day 14 active retention of paying users
 * @method void setFourteenDayRetentionUsers(integer $FourteenDayRetentionUsers) Set Day 14 active retention of paying users
 * @method integer getFifteenDayRetentionUsers() Obtain Day 15 active retention of paying users
 * @method void setFifteenDayRetentionUsers(integer $FifteenDayRetentionUsers) Set Day 15 active retention of paying users
 * @method integer getThirtyDayRetentionUsers() Obtain Day 30 active retention of paying users
 * @method void setThirtyDayRetentionUsers(integer $ThirtyDayRetentionUsers) Set Day 30 active retention of paying users
 * @method integer getPaymentUserNum() Obtain Number of paying users
 * @method void setPaymentUserNum(integer $PaymentUserNum) Set Number of paying users
 * @method string getDataTime() Obtain Data time in YYYYMMDD format
 * @method void setDataTime(string $DataTime) Set Data time in YYYYMMDD format
 */
class PaymentActiveRetention extends AbstractModel
{
    /**
     * @var integer Day 1 active retention of paying users
     */
    public $OneDayRetentionUsers;

    /**
     * @var integer Day 2 active retention of paying users
     */
    public $TwoDayRetentionUsers;

    /**
     * @var integer Day 3 active retention of paying users
     */
    public $ThreeDayRetentionUsers;

    /**
     * @var integer Day 4 active retention of paying users
     */
    public $FourDayRetentionUsers;

    /**
     * @var integer Day 5 active retention of paying users
     */
    public $FiveDayRetentionUsers;

    /**
     * @var integer Day 6 active retention of paying users
     */
    public $SixDayRetentionUsers;

    /**
     * @var integer Day 7 active retention of paying users
     */
    public $SevenDayRetentionUsers;

    /**
     * @var integer Day 14 active retention of paying users
     */
    public $FourteenDayRetentionUsers;

    /**
     * @var integer Day 15 active retention of paying users
     */
    public $FifteenDayRetentionUsers;

    /**
     * @var integer Day 30 active retention of paying users
     */
    public $ThirtyDayRetentionUsers;

    /**
     * @var integer Number of paying users
     */
    public $PaymentUserNum;

    /**
     * @var string Data time in YYYYMMDD format
     */
    public $DataTime;

    /**
     * @param integer $OneDayRetentionUsers Day 1 active retention of paying users
     * @param integer $TwoDayRetentionUsers Day 2 active retention of paying users
     * @param integer $ThreeDayRetentionUsers Day 3 active retention of paying users
     * @param integer $FourDayRetentionUsers Day 4 active retention of paying users
     * @param integer $FiveDayRetentionUsers Day 5 active retention of paying users
     * @param integer $SixDayRetentionUsers Day 6 active retention of paying users
     * @param integer $SevenDayRetentionUsers Day 7 active retention of paying users
     * @param integer $FourteenDayRetentionUsers Day 14 active retention of paying users
     * @param integer $FifteenDayRetentionUsers Day 15 active retention of paying users
     * @param integer $ThirtyDayRetentionUsers Day 30 active retention of paying users
     * @param integer $PaymentUserNum Number of paying users
     * @param string $DataTime Data time in YYYYMMDD format
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
        if (array_key_exists("OneDayRetentionUsers",$param) and $param["OneDayRetentionUsers"] !== null) {
            $this->OneDayRetentionUsers = $param["OneDayRetentionUsers"];
        }

        if (array_key_exists("TwoDayRetentionUsers",$param) and $param["TwoDayRetentionUsers"] !== null) {
            $this->TwoDayRetentionUsers = $param["TwoDayRetentionUsers"];
        }

        if (array_key_exists("ThreeDayRetentionUsers",$param) and $param["ThreeDayRetentionUsers"] !== null) {
            $this->ThreeDayRetentionUsers = $param["ThreeDayRetentionUsers"];
        }

        if (array_key_exists("FourDayRetentionUsers",$param) and $param["FourDayRetentionUsers"] !== null) {
            $this->FourDayRetentionUsers = $param["FourDayRetentionUsers"];
        }

        if (array_key_exists("FiveDayRetentionUsers",$param) and $param["FiveDayRetentionUsers"] !== null) {
            $this->FiveDayRetentionUsers = $param["FiveDayRetentionUsers"];
        }

        if (array_key_exists("SixDayRetentionUsers",$param) and $param["SixDayRetentionUsers"] !== null) {
            $this->SixDayRetentionUsers = $param["SixDayRetentionUsers"];
        }

        if (array_key_exists("SevenDayRetentionUsers",$param) and $param["SevenDayRetentionUsers"] !== null) {
            $this->SevenDayRetentionUsers = $param["SevenDayRetentionUsers"];
        }

        if (array_key_exists("FourteenDayRetentionUsers",$param) and $param["FourteenDayRetentionUsers"] !== null) {
            $this->FourteenDayRetentionUsers = $param["FourteenDayRetentionUsers"];
        }

        if (array_key_exists("FifteenDayRetentionUsers",$param) and $param["FifteenDayRetentionUsers"] !== null) {
            $this->FifteenDayRetentionUsers = $param["FifteenDayRetentionUsers"];
        }

        if (array_key_exists("ThirtyDayRetentionUsers",$param) and $param["ThirtyDayRetentionUsers"] !== null) {
            $this->ThirtyDayRetentionUsers = $param["ThirtyDayRetentionUsers"];
        }

        if (array_key_exists("PaymentUserNum",$param) and $param["PaymentUserNum"] !== null) {
            $this->PaymentUserNum = $param["PaymentUserNum"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }
    }
}
