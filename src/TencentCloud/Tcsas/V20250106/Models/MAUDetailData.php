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
 * MAU detailed data.
 *
 * @method string getDataTime() Obtain Date.
 * @method void setDataTime(string $DataTime) Set Date.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getMNPType() Obtain Mini program category.
 * @method void setMNPType(string $MNPType) Set Mini program category.
 * @method string getEstimatedEarnings() Obtain Estimated revenue.
 * @method void setEstimatedEarnings(string $EstimatedEarnings) Set Estimated revenue.
 * @method integer getRequestsNumber() Obtain Number of requests.
 * @method void setRequestsNumber(integer $RequestsNumber) Set Number of requests.
 * @method integer getImpressions() Obtain Number of impressions.
 * @method void setImpressions(integer $Impressions) Set Number of impressions.
 * @method string getECPM() Obtain eCPM (effective cost per mille).
 * @method void setECPM(string $ECPM) Set eCPM (effective cost per mille).
 * @method integer getClicksNumber() Obtain Number of taps.
 * @method void setClicksNumber(integer $ClicksNumber) Set Number of taps.
 */
class MAUDetailData extends AbstractModel
{
    /**
     * @var string Date.
     */
    public $DataTime;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Mini program category.
     */
    public $MNPType;

    /**
     * @var string Estimated revenue.
     */
    public $EstimatedEarnings;

    /**
     * @var integer Number of requests.
     */
    public $RequestsNumber;

    /**
     * @var integer Number of impressions.
     */
    public $Impressions;

    /**
     * @var string eCPM (effective cost per mille).
     */
    public $ECPM;

    /**
     * @var integer Number of taps.
     */
    public $ClicksNumber;

    /**
     * @param string $DataTime Date.
     * @param string $MNPName Mini program name.
     * @param string $MNPType Mini program category.
     * @param string $EstimatedEarnings Estimated revenue.
     * @param integer $RequestsNumber Number of requests.
     * @param integer $Impressions Number of impressions.
     * @param string $ECPM eCPM (effective cost per mille).
     * @param integer $ClicksNumber Number of taps.
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
        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
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

        if (array_key_exists("ECPM",$param) and $param["ECPM"] !== null) {
            $this->ECPM = $param["ECPM"];
        }

        if (array_key_exists("ClicksNumber",$param) and $param["ClicksNumber"] !== null) {
            $this->ClicksNumber = $param["ClicksNumber"];
        }
    }
}
