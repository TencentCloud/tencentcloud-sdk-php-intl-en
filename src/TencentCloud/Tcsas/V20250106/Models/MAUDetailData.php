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
 * MAU detailed data
 *
 * @method string getDataTime() Obtain Date
 * @method void setDataTime(string $DataTime) Set Date
 * @method string getMNPName() Obtain Mini program name
 * @method void setMNPName(string $MNPName) Set Mini program name
 * @method string getMNPType() Obtain Mini program type
 * @method void setMNPType(string $MNPType) Set Mini program type
 * @method string getEstimatedEarnings() Obtain Estimated revenue
 * @method void setEstimatedEarnings(string $EstimatedEarnings) Set Estimated revenue
 * @method integer getRequestsNumber() Obtain Requests
 * @method void setRequestsNumber(integer $RequestsNumber) Set Requests
 * @method integer getImpressions() Obtain Impressions
 * @method void setImpressions(integer $Impressions) Set Impressions
 * @method string getECPM() Obtain Effective Cost Per Mille
 * @method void setECPM(string $ECPM) Set Effective Cost Per Mille
 * @method integer getClicksNumber() Obtain Taps
 * @method void setClicksNumber(integer $ClicksNumber) Set Taps
 */
class MAUDetailData extends AbstractModel
{
    /**
     * @var string Date
     */
    public $DataTime;

    /**
     * @var string Mini program name
     */
    public $MNPName;

    /**
     * @var string Mini program type
     */
    public $MNPType;

    /**
     * @var string Estimated revenue
     */
    public $EstimatedEarnings;

    /**
     * @var integer Requests
     */
    public $RequestsNumber;

    /**
     * @var integer Impressions
     */
    public $Impressions;

    /**
     * @var string Effective Cost Per Mille
     */
    public $ECPM;

    /**
     * @var integer Taps
     */
    public $ClicksNumber;

    /**
     * @param string $DataTime Date
     * @param string $MNPName Mini program name
     * @param string $MNPType Mini program type
     * @param string $EstimatedEarnings Estimated revenue
     * @param integer $RequestsNumber Requests
     * @param integer $Impressions Impressions
     * @param string $ECPM Effective Cost Per Mille
     * @param integer $ClicksNumber Taps
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
