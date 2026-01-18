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
 * Retention data
 *
 * @method integer getActiveUserCount() Obtain Number of active users
 * @method void setActiveUserCount(integer $ActiveUserCount) Set Number of active users
 * @method integer getOneDayRetentionUsers() Obtain Day 1 retention of active users
 * @method void setOneDayRetentionUsers(integer $OneDayRetentionUsers) Set Day 1 retention of active users
 * @method integer getTwoDayRetentionUsers() Obtain Day 2 retention of active users
 * @method void setTwoDayRetentionUsers(integer $TwoDayRetentionUsers) Set Day 2 retention of active users
 * @method integer getThreeDayRetentionUsers() Obtain Day 3 retention of active users
 * @method void setThreeDayRetentionUsers(integer $ThreeDayRetentionUsers) Set Day 3 retention of active users
 * @method integer getFourDayRetentionUsers() Obtain Day 4 retention of active users
 * @method void setFourDayRetentionUsers(integer $FourDayRetentionUsers) Set Day 4 retention of active users
 * @method integer getFiveDayRetentionUsers() Obtain Day 5 retention of active users
 * @method void setFiveDayRetentionUsers(integer $FiveDayRetentionUsers) Set Day 5 retention of active users
 * @method integer getSixDayRetentionUsers() Obtain Day 6 retention of active users
 * @method void setSixDayRetentionUsers(integer $SixDayRetentionUsers) Set Day 6 retention of active users
 * @method integer getSevenDayRetentionUsers() Obtain Day 7 retention of active users
 * @method void setSevenDayRetentionUsers(integer $SevenDayRetentionUsers) Set Day 7 retention of active users
 * @method integer getFourteenDayRetentionUsers() Obtain Day 14 retention of active users
 * @method void setFourteenDayRetentionUsers(integer $FourteenDayRetentionUsers) Set Day 14 retention of active users
 * @method integer getThirtyDayRetentionUsers() Obtain Day 30 retention of active users
 * @method void setThirtyDayRetentionUsers(integer $ThirtyDayRetentionUsers) Set Day 30 retention of active users
 * @method integer getNewUserCount() Obtain Number of new users
 * @method void setNewUserCount(integer $NewUserCount) Set Number of new users
 * @method integer getOneDayRetentionNewUsers() Obtain Day 1 retention of new users
 * @method void setOneDayRetentionNewUsers(integer $OneDayRetentionNewUsers) Set Day 1 retention of new users
 * @method integer getTwoDayRetentionNewUsers() Obtain Day 2 retention of new users
 * @method void setTwoDayRetentionNewUsers(integer $TwoDayRetentionNewUsers) Set Day 2 retention of new users
 * @method integer getThreeDayRetentionNewUsers() Obtain Day 3 retention of new users
 * @method void setThreeDayRetentionNewUsers(integer $ThreeDayRetentionNewUsers) Set Day 3 retention of new users
 * @method integer getFourDayRetentionNewUsers() Obtain Day 4 retention of new users
 * @method void setFourDayRetentionNewUsers(integer $FourDayRetentionNewUsers) Set Day 4 retention of new users
 * @method integer getFiveDayRetentionNewUsers() Obtain Day 5 retention of new users
 * @method void setFiveDayRetentionNewUsers(integer $FiveDayRetentionNewUsers) Set Day 5 retention of new users
 * @method integer getSixDayRetentionNewUsers() Obtain Day 6 retention of new users
 * @method void setSixDayRetentionNewUsers(integer $SixDayRetentionNewUsers) Set Day 6 retention of new users
 * @method integer getSevenDayRetentionNewUsers() Obtain Day 7 retention of new users
 * @method void setSevenDayRetentionNewUsers(integer $SevenDayRetentionNewUsers) Set Day 7 retention of new users
 * @method integer getFourteenDayRetentionNewUsers() Obtain Day 14 retention of new users
 * @method void setFourteenDayRetentionNewUsers(integer $FourteenDayRetentionNewUsers) Set Day 14 retention of new users
 * @method integer getThirtyDayRetentionNewUsers() Obtain Day 30 retention of new users
 * @method void setThirtyDayRetentionNewUsers(integer $ThirtyDayRetentionNewUsers) Set Day 30 retention of new users
 * @method string getDataTime() Obtain Data time in YYYYMMDD format
 * @method void setDataTime(string $DataTime) Set Data time in YYYYMMDD format
 */
class RetentionData extends AbstractModel
{
    /**
     * @var integer Number of active users
     */
    public $ActiveUserCount;

    /**
     * @var integer Day 1 retention of active users
     */
    public $OneDayRetentionUsers;

    /**
     * @var integer Day 2 retention of active users
     */
    public $TwoDayRetentionUsers;

    /**
     * @var integer Day 3 retention of active users
     */
    public $ThreeDayRetentionUsers;

    /**
     * @var integer Day 4 retention of active users
     */
    public $FourDayRetentionUsers;

    /**
     * @var integer Day 5 retention of active users
     */
    public $FiveDayRetentionUsers;

    /**
     * @var integer Day 6 retention of active users
     */
    public $SixDayRetentionUsers;

    /**
     * @var integer Day 7 retention of active users
     */
    public $SevenDayRetentionUsers;

    /**
     * @var integer Day 14 retention of active users
     */
    public $FourteenDayRetentionUsers;

    /**
     * @var integer Day 30 retention of active users
     */
    public $ThirtyDayRetentionUsers;

    /**
     * @var integer Number of new users
     */
    public $NewUserCount;

    /**
     * @var integer Day 1 retention of new users
     */
    public $OneDayRetentionNewUsers;

    /**
     * @var integer Day 2 retention of new users
     */
    public $TwoDayRetentionNewUsers;

    /**
     * @var integer Day 3 retention of new users
     */
    public $ThreeDayRetentionNewUsers;

    /**
     * @var integer Day 4 retention of new users
     */
    public $FourDayRetentionNewUsers;

    /**
     * @var integer Day 5 retention of new users
     */
    public $FiveDayRetentionNewUsers;

    /**
     * @var integer Day 6 retention of new users
     */
    public $SixDayRetentionNewUsers;

    /**
     * @var integer Day 7 retention of new users
     */
    public $SevenDayRetentionNewUsers;

    /**
     * @var integer Day 14 retention of new users
     */
    public $FourteenDayRetentionNewUsers;

    /**
     * @var integer Day 30 retention of new users
     */
    public $ThirtyDayRetentionNewUsers;

    /**
     * @var string Data time in YYYYMMDD format
     */
    public $DataTime;

    /**
     * @param integer $ActiveUserCount Number of active users
     * @param integer $OneDayRetentionUsers Day 1 retention of active users
     * @param integer $TwoDayRetentionUsers Day 2 retention of active users
     * @param integer $ThreeDayRetentionUsers Day 3 retention of active users
     * @param integer $FourDayRetentionUsers Day 4 retention of active users
     * @param integer $FiveDayRetentionUsers Day 5 retention of active users
     * @param integer $SixDayRetentionUsers Day 6 retention of active users
     * @param integer $SevenDayRetentionUsers Day 7 retention of active users
     * @param integer $FourteenDayRetentionUsers Day 14 retention of active users
     * @param integer $ThirtyDayRetentionUsers Day 30 retention of active users
     * @param integer $NewUserCount Number of new users
     * @param integer $OneDayRetentionNewUsers Day 1 retention of new users
     * @param integer $TwoDayRetentionNewUsers Day 2 retention of new users
     * @param integer $ThreeDayRetentionNewUsers Day 3 retention of new users
     * @param integer $FourDayRetentionNewUsers Day 4 retention of new users
     * @param integer $FiveDayRetentionNewUsers Day 5 retention of new users
     * @param integer $SixDayRetentionNewUsers Day 6 retention of new users
     * @param integer $SevenDayRetentionNewUsers Day 7 retention of new users
     * @param integer $FourteenDayRetentionNewUsers Day 14 retention of new users
     * @param integer $ThirtyDayRetentionNewUsers Day 30 retention of new users
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
        if (array_key_exists("ActiveUserCount",$param) and $param["ActiveUserCount"] !== null) {
            $this->ActiveUserCount = $param["ActiveUserCount"];
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

        if (array_key_exists("ThirtyDayRetentionUsers",$param) and $param["ThirtyDayRetentionUsers"] !== null) {
            $this->ThirtyDayRetentionUsers = $param["ThirtyDayRetentionUsers"];
        }

        if (array_key_exists("NewUserCount",$param) and $param["NewUserCount"] !== null) {
            $this->NewUserCount = $param["NewUserCount"];
        }

        if (array_key_exists("OneDayRetentionNewUsers",$param) and $param["OneDayRetentionNewUsers"] !== null) {
            $this->OneDayRetentionNewUsers = $param["OneDayRetentionNewUsers"];
        }

        if (array_key_exists("TwoDayRetentionNewUsers",$param) and $param["TwoDayRetentionNewUsers"] !== null) {
            $this->TwoDayRetentionNewUsers = $param["TwoDayRetentionNewUsers"];
        }

        if (array_key_exists("ThreeDayRetentionNewUsers",$param) and $param["ThreeDayRetentionNewUsers"] !== null) {
            $this->ThreeDayRetentionNewUsers = $param["ThreeDayRetentionNewUsers"];
        }

        if (array_key_exists("FourDayRetentionNewUsers",$param) and $param["FourDayRetentionNewUsers"] !== null) {
            $this->FourDayRetentionNewUsers = $param["FourDayRetentionNewUsers"];
        }

        if (array_key_exists("FiveDayRetentionNewUsers",$param) and $param["FiveDayRetentionNewUsers"] !== null) {
            $this->FiveDayRetentionNewUsers = $param["FiveDayRetentionNewUsers"];
        }

        if (array_key_exists("SixDayRetentionNewUsers",$param) and $param["SixDayRetentionNewUsers"] !== null) {
            $this->SixDayRetentionNewUsers = $param["SixDayRetentionNewUsers"];
        }

        if (array_key_exists("SevenDayRetentionNewUsers",$param) and $param["SevenDayRetentionNewUsers"] !== null) {
            $this->SevenDayRetentionNewUsers = $param["SevenDayRetentionNewUsers"];
        }

        if (array_key_exists("FourteenDayRetentionNewUsers",$param) and $param["FourteenDayRetentionNewUsers"] !== null) {
            $this->FourteenDayRetentionNewUsers = $param["FourteenDayRetentionNewUsers"];
        }

        if (array_key_exists("ThirtyDayRetentionNewUsers",$param) and $param["ThirtyDayRetentionNewUsers"] !== null) {
            $this->ThirtyDayRetentionNewUsers = $param["ThirtyDayRetentionNewUsers"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }
    }
}
