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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallbackStatusStatistics request structure.
 *
 * @method integer getStartDateTime() Obtain Start time of pull in the format of `yyyymmddhh` accurate to the hour.
 * @method void setStartDateTime(integer $StartDateTime) Set Start time of pull in the format of `yyyymmddhh` accurate to the hour.
 * @method integer getEndDataTime() Obtain End time of pull in the format of `yyyymmddhh` accurate to the hour.
Note: `EndDataTime` must be later than `StartDateTime`.
 * @method void setEndDataTime(integer $EndDataTime) Set End time of pull in the format of `yyyymmddhh` accurate to the hour.
Note: `EndDataTime` must be later than `StartDateTime`.
 * @method string getSmsSdkAppid() Obtain SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
 * @method void setSmsSdkAppid(string $SmsSdkAppid) Set SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
 * @method integer getLimit() Obtain Upper limit.
Note: this parameter is currently fixed at 0.
 * @method void setLimit(integer $Limit) Set Upper limit.
Note: this parameter is currently fixed at 0.
 * @method integer getOffset() Obtain Offset.
Note: this parameter is currently fixed at 0.
 * @method void setOffset(integer $Offset) Set Offset.
Note: this parameter is currently fixed at 0.
 */
class CallbackStatusStatisticsRequest extends AbstractModel
{
    /**
     * @var integer Start time of pull in the format of `yyyymmddhh` accurate to the hour.
     */
    public $StartDateTime;

    /**
     * @var integer End time of pull in the format of `yyyymmddhh` accurate to the hour.
Note: `EndDataTime` must be later than `StartDateTime`.
     */
    public $EndDataTime;

    /**
     * @var string SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
     */
    public $SmsSdkAppid;

    /**
     * @var integer Upper limit.
Note: this parameter is currently fixed at 0.
     */
    public $Limit;

    /**
     * @var integer Offset.
Note: this parameter is currently fixed at 0.
     */
    public $Offset;

    /**
     * @param integer $StartDateTime Start time of pull in the format of `yyyymmddhh` accurate to the hour.
     * @param integer $EndDataTime End time of pull in the format of `yyyymmddhh` accurate to the hour.
Note: `EndDataTime` must be later than `StartDateTime`.
     * @param string $SmsSdkAppid SMS `SdkAppid` actually generated after an application is added in the [SMS Console](https://console.cloud.tencent.com/sms/smslist), such as 1400006666.
     * @param integer $Limit Upper limit.
Note: this parameter is currently fixed at 0.
     * @param integer $Offset Offset.
Note: this parameter is currently fixed at 0.
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
        if (array_key_exists("StartDateTime",$param) and $param["StartDateTime"] !== null) {
            $this->StartDateTime = $param["StartDateTime"];
        }

        if (array_key_exists("EndDataTime",$param) and $param["EndDataTime"] !== null) {
            $this->EndDataTime = $param["EndDataTime"];
        }

        if (array_key_exists("SmsSdkAppid",$param) and $param["SmsSdkAppid"] !== null) {
            $this->SmsSdkAppid = $param["SmsSdkAppid"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
