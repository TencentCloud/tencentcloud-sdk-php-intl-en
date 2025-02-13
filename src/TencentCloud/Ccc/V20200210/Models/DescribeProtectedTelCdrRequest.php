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
 * DescribeProtectedTelCdr request structure.
 *
 * @method integer getStartTimeStamp() Obtain Start timestamp. unix second-level timestamp.
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set Start timestamp. unix second-level timestamp.
 * @method integer getEndTimeStamp() Obtain End timestamp. unix second-level timestamp.
 * @method void setEndTimeStamp(integer $EndTimeStamp) Set End timestamp. unix second-level timestamp.
 * @method integer getSdkAppId() Obtain For the application id, you can check https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set For the application id, you can check https://console.cloud.tencent.com/ccc.
 * @method integer getPageSize() Obtain Page size, upper limit 100.
 * @method void setPageSize(integer $PageSize) Set Page size, upper limit 100.
 * @method integer getPageNumber() Obtain Page number starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number starting from 0.
 */
class DescribeProtectedTelCdrRequest extends AbstractModel
{
    /**
     * @var integer Start timestamp. unix second-level timestamp.
     */
    public $StartTimeStamp;

    /**
     * @var integer End timestamp. unix second-level timestamp.
     */
    public $EndTimeStamp;

    /**
     * @var integer For the application id, you can check https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page size, upper limit 100.
     */
    public $PageSize;

    /**
     * @var integer Page number starting from 0.
     */
    public $PageNumber;

    /**
     * @param integer $StartTimeStamp Start timestamp. unix second-level timestamp.
     * @param integer $EndTimeStamp End timestamp. unix second-level timestamp.
     * @param integer $SdkAppId For the application id, you can check https://console.cloud.tencent.com/ccc.
     * @param integer $PageSize Page size, upper limit 100.
     * @param integer $PageNumber Page number starting from 0.
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
