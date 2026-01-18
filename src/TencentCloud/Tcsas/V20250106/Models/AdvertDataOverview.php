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
 * Advertising data overview
 *
 * @method string getEstimatedEarnings() Obtain Estimated revenue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEstimatedEarnings(string $EstimatedEarnings) Set Estimated revenue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRequestsNumber() Obtain Requests
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestsNumber(integer $RequestsNumber) Set Requests
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getImpressions() Obtain Impressions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImpressions(integer $Impressions) Set Impressions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getClicksNumber() Obtain Taps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClicksNumber(integer $ClicksNumber) Set Taps
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getECPM() Obtain Impressions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setECPM(string $ECPM) Set Impressions
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AdvertDataOverview extends AbstractModel
{
    /**
     * @var string Estimated revenue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EstimatedEarnings;

    /**
     * @var integer Requests
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestsNumber;

    /**
     * @var integer Impressions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Impressions;

    /**
     * @var integer Taps
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClicksNumber;

    /**
     * @var string Impressions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ECPM;

    /**
     * @param string $EstimatedEarnings Estimated revenue
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RequestsNumber Requests
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Impressions Impressions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ClicksNumber Taps
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ECPM Impressions
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
        if (array_key_exists("EstimatedEarnings",$param) and $param["EstimatedEarnings"] !== null) {
            $this->EstimatedEarnings = $param["EstimatedEarnings"];
        }

        if (array_key_exists("RequestsNumber",$param) and $param["RequestsNumber"] !== null) {
            $this->RequestsNumber = $param["RequestsNumber"];
        }

        if (array_key_exists("Impressions",$param) and $param["Impressions"] !== null) {
            $this->Impressions = $param["Impressions"];
        }

        if (array_key_exists("ClicksNumber",$param) and $param["ClicksNumber"] !== null) {
            $this->ClicksNumber = $param["ClicksNumber"];
        }

        if (array_key_exists("ECPM",$param) and $param["ECPM"] !== null) {
            $this->ECPM = $param["ECPM"];
        }
    }
}
