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
 * TMP usage information
 *
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCalcDate() Obtain Billing cycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCalcDate(string $CalcDate) Set Billing cycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTotal() Obtain Total usage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(float $Total) Set Total usage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getBasic() Obtain Usage of basic (free) metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasic(float $Basic) Set Usage of basic (free) metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getFee() Obtain Usage of paid metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFee(float $Fee) Set Usage of paid metrics
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusInstanceTenantUsage extends AbstractModel
{
    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Billing cycle
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CalcDate;

    /**
     * @var float Total usage
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var float Usage of basic (free) metrics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Basic;

    /**
     * @var float Usage of paid metrics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fee;

    /**
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CalcDate Billing cycle
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Total Total usage
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Basic Usage of basic (free) metrics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Fee Usage of paid metrics
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CalcDate",$param) and $param["CalcDate"] !== null) {
            $this->CalcDate = $param["CalcDate"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Basic",$param) and $param["Basic"] !== null) {
            $this->Basic = $param["Basic"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }
    }
}
