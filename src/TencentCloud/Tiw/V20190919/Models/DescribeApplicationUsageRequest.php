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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationUsage request structure.
 *
 * @method string getBeginTime() Obtain Start time of the query period. The start time point is included in the query period.
 * @method void setBeginTime(string $BeginTime) Set Start time of the query period. The start time point is included in the query period.
 * @method string getEndTime() Obtain End time of the query period. The end time point is not included in the query period.
 * @method void setEndTime(string $EndTime) Set End time of the query period. The end time point is not included in the query period.
 * @method string getSubProduct() Obtain Subproduct name.
 * @method void setSubProduct(string $SubProduct) Set Subproduct name.
 * @method string getTimeLevel() Obtain Unit of time increment.
- MONTHLY: month
- DAILY: day
- MINUTELY: minute
 * @method void setTimeLevel(string $TimeLevel) Set Unit of time increment.
- MONTHLY: month
- DAILY: day
- MINUTELY: minute
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method boolean getIsWeighted() Obtain true: Returns the weighted sum of raw usage data.
false: Returns the raw usage data.
 * @method void setIsWeighted(boolean $IsWeighted) Set true: Returns the weighted sum of raw usage data.
false: Returns the raw usage data.
 */
class DescribeApplicationUsageRequest extends AbstractModel
{
    /**
     * @var string Start time of the query period. The start time point is included in the query period.
     */
    public $BeginTime;

    /**
     * @var string End time of the query period. The end time point is not included in the query period.
     */
    public $EndTime;

    /**
     * @var string Subproduct name.
     */
    public $SubProduct;

    /**
     * @var string Unit of time increment.
- MONTHLY: month
- DAILY: day
- MINUTELY: minute
     */
    public $TimeLevel;

    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var boolean true: Returns the weighted sum of raw usage data.
false: Returns the raw usage data.
     */
    public $IsWeighted;

    /**
     * @param string $BeginTime Start time of the query period. The start time point is included in the query period.
     * @param string $EndTime End time of the query period. The end time point is not included in the query period.
     * @param string $SubProduct Subproduct name.
     * @param string $TimeLevel Unit of time increment.
- MONTHLY: month
- DAILY: day
- MINUTELY: minute
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param boolean $IsWeighted true: Returns the weighted sum of raw usage data.
false: Returns the raw usage data.
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubProduct",$param) and $param["SubProduct"] !== null) {
            $this->SubProduct = $param["SubProduct"];
        }

        if (array_key_exists("TimeLevel",$param) and $param["TimeLevel"] !== null) {
            $this->TimeLevel = $param["TimeLevel"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("IsWeighted",$param) and $param["IsWeighted"] !== null) {
            $this->IsWeighted = $param["IsWeighted"];
        }
    }
}
