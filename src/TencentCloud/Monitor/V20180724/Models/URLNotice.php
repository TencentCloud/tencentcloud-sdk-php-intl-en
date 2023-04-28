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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm notification template – callback notification details
 *
 * @method string getURL() Obtain Callback URL, which can contain up to 256 characters
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setURL(string $URL) Set Callback URL, which can contain up to 256 characters
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsValid() Obtain Whether verification is passed. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsValid(integer $IsValid) Set Whether verification is passed. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValidationCode() Obtain Verification code
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValidationCode(string $ValidationCode) Set Verification code
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain Start time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set Start time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain End time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set End time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getWeekday() Obtain Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setWeekday(array $Weekday) Set Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class URLNotice extends AbstractModel
{
    /**
     * @var string Callback URL, which can contain up to 256 characters
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $URL;

    /**
     * @var integer Whether verification is passed. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsValid;

    /**
     * @var string Verification code
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ValidationCode;

    /**
     * @var integer Start time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer End time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var array Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Weekday;

    /**
     * @param string $URL Callback URL, which can contain up to 256 characters
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsValid Whether verification is passed. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ValidationCode Verification code
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime Start time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EndTime End time of the notification in seconds, which is calculated from 00:00:00.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Weekday Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("IsValid",$param) and $param["IsValid"] !== null) {
            $this->IsValid = $param["IsValid"];
        }

        if (array_key_exists("ValidationCode",$param) and $param["ValidationCode"] !== null) {
            $this->ValidationCode = $param["ValidationCode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Weekday",$param) and $param["Weekday"] !== null) {
            $this->Weekday = $param["Weekday"];
        }
    }
}
