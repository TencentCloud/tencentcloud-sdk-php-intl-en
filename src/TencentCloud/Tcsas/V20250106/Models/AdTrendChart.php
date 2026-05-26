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
 * Ad trend data.
 *
 * @method array getEstimatedEarnings() Obtain Estimated revenue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEstimatedEarnings(array $EstimatedEarnings) Set Estimated revenue.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRequestsNumber() Obtain Number of requests.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestsNumber(array $RequestsNumber) Set Number of requests.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getImpressions() Obtain Number of impressions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImpressions(array $Impressions) Set Number of impressions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getECPM() Obtain eCPM (effective cost per mille).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setECPM(array $ECPM) Set eCPM (effective cost per mille).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getClicksNumber() Obtain Number of taps.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClicksNumber(array $ClicksNumber) Set Number of taps.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AdTrendChart extends AbstractModel
{
    /**
     * @var array Estimated revenue.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EstimatedEarnings;

    /**
     * @var array Number of requests.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestsNumber;

    /**
     * @var array Number of impressions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Impressions;

    /**
     * @var array eCPM (effective cost per mille).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ECPM;

    /**
     * @var array Number of taps.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClicksNumber;

    /**
     * @param array $EstimatedEarnings Estimated revenue.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RequestsNumber Number of requests.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Impressions Number of impressions.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ECPM eCPM (effective cost per mille).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ClicksNumber Number of taps.
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
            $this->EstimatedEarnings = [];
            foreach ($param["EstimatedEarnings"] as $key => $value){
                $obj = new AnalysisData();
                $obj->deserialize($value);
                array_push($this->EstimatedEarnings, $obj);
            }
        }

        if (array_key_exists("RequestsNumber",$param) and $param["RequestsNumber"] !== null) {
            $this->RequestsNumber = [];
            foreach ($param["RequestsNumber"] as $key => $value){
                $obj = new AnalysisData();
                $obj->deserialize($value);
                array_push($this->RequestsNumber, $obj);
            }
        }

        if (array_key_exists("Impressions",$param) and $param["Impressions"] !== null) {
            $this->Impressions = [];
            foreach ($param["Impressions"] as $key => $value){
                $obj = new AnalysisData();
                $obj->deserialize($value);
                array_push($this->Impressions, $obj);
            }
        }

        if (array_key_exists("ECPM",$param) and $param["ECPM"] !== null) {
            $this->ECPM = [];
            foreach ($param["ECPM"] as $key => $value){
                $obj = new AnalysisData();
                $obj->deserialize($value);
                array_push($this->ECPM, $obj);
            }
        }

        if (array_key_exists("ClicksNumber",$param) and $param["ClicksNumber"] !== null) {
            $this->ClicksNumber = [];
            foreach ($param["ClicksNumber"] as $key => $value){
                $obj = new AnalysisData();
                $obj->deserialize($value);
                array_push($this->ClicksNumber, $obj);
            }
        }
    }
}
