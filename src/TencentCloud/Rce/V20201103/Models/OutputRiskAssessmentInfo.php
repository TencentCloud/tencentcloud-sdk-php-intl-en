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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query output parameters of risk assessment results.
 *
 * @method string getRiskLevel() Obtain Risk value.
Note: This field may return null, indicating that no valid value is found.
 * @method void setRiskLevel(string $RiskLevel) Set Risk value.
Note: This field may return null, indicating that no valid value is found.
 * @method array getRiskType() Obtain Risk type.
Note: This field may return null, indicating that no valid value is found.
 * @method void setRiskType(array $RiskType) Set Risk type.
Note: This field may return null, indicating that no valid value is found.
 * @method string getDeviceId() Obtain Device identification

Note: This field may return null, indicating that no valid value is found.
 * @method void setDeviceId(string $DeviceId) Set Device identification

Note: This field may return null, indicating that no valid value is found.
 * @method array getExtraInfo() Obtain Extended attributes.
Note: This field may return null, indicating that no valid value is found.
 * @method void setExtraInfo(array $ExtraInfo) Set Extended attributes.
Note: This field may return null, indicating that no valid value is found.
 * @method string getTokenTime() Obtain Token generation timestamp.
Note: This field may return null, indicating that no valid value is found.
 * @method void setTokenTime(string $TokenTime) Set Token generation timestamp.
Note: This field may return null, indicating that no valid value is found.
 */
class OutputRiskAssessmentInfo extends AbstractModel
{
    /**
     * @var string Risk value.
Note: This field may return null, indicating that no valid value is found.
     */
    public $RiskLevel;

    /**
     * @var array Risk type.
Note: This field may return null, indicating that no valid value is found.
     */
    public $RiskType;

    /**
     * @var string Device identification

Note: This field may return null, indicating that no valid value is found.
     */
    public $DeviceId;

    /**
     * @var array Extended attributes.
Note: This field may return null, indicating that no valid value is found.
     */
    public $ExtraInfo;

    /**
     * @var string Token generation timestamp.
Note: This field may return null, indicating that no valid value is found.
     */
    public $TokenTime;

    /**
     * @param string $RiskLevel Risk value.
Note: This field may return null, indicating that no valid value is found.
     * @param array $RiskType Risk type.
Note: This field may return null, indicating that no valid value is found.
     * @param string $DeviceId Device identification

Note: This field may return null, indicating that no valid value is found.
     * @param array $ExtraInfo Extended attributes.
Note: This field may return null, indicating that no valid value is found.
     * @param string $TokenTime Token generation timestamp.
Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = [];
            foreach ($param["ExtraInfo"] as $key => $value){
                $obj = new OutputRiskAssessmentExtraInfoPair();
                $obj->deserialize($value);
                array_push($this->ExtraInfo, $obj);
            }
        }

        if (array_key_exists("TokenTime",$param) and $param["TokenTime"] !== null) {
            $this->TokenTime = $param["TokenTime"];
        }
    }
}
