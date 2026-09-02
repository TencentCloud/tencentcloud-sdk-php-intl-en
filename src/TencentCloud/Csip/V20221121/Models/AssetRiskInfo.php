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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Asset correlation risk information
 *
 * @method string getResultType() Obtain <p>Risk type</p>
 * @method void setResultType(string $ResultType) Set <p>Risk type</p>
 * @method integer getRiskCount() Obtain <p>Total number of risks</p>
 * @method void setRiskCount(integer $RiskCount) Set <p>Total number of risks</p>
 * @method integer getRiskCritical() Obtain <p>Number of severe risks</p>
 * @method void setRiskCritical(integer $RiskCritical) Set <p>Number of severe risks</p>
 * @method integer getRiskHigh() Obtain <p>High risk count</p>
 * @method void setRiskHigh(integer $RiskHigh) Set <p>High risk count</p>
 * @method integer getRiskMedium() Obtain <p>Number of medium risks</p>
 * @method void setRiskMedium(integer $RiskMedium) Set <p>Number of medium risks</p>
 * @method integer getRiskLow() Obtain <p>Number of low-risk assets</p>
 * @method void setRiskLow(integer $RiskLow) Set <p>Number of low-risk assets</p>
 */
class AssetRiskInfo extends AbstractModel
{
    /**
     * @var string <p>Risk type</p>
     */
    public $ResultType;

    /**
     * @var integer <p>Total number of risks</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>Number of severe risks</p>
     */
    public $RiskCritical;

    /**
     * @var integer <p>High risk count</p>
     */
    public $RiskHigh;

    /**
     * @var integer <p>Number of medium risks</p>
     */
    public $RiskMedium;

    /**
     * @var integer <p>Number of low-risk assets</p>
     */
    public $RiskLow;

    /**
     * @param string $ResultType <p>Risk type</p>
     * @param integer $RiskCount <p>Total number of risks</p>
     * @param integer $RiskCritical <p>Number of severe risks</p>
     * @param integer $RiskHigh <p>High risk count</p>
     * @param integer $RiskMedium <p>Number of medium risks</p>
     * @param integer $RiskLow <p>Number of low-risk assets</p>
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
        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("RiskCritical",$param) and $param["RiskCritical"] !== null) {
            $this->RiskCritical = $param["RiskCritical"];
        }

        if (array_key_exists("RiskHigh",$param) and $param["RiskHigh"] !== null) {
            $this->RiskHigh = $param["RiskHigh"];
        }

        if (array_key_exists("RiskMedium",$param) and $param["RiskMedium"] !== null) {
            $this->RiskMedium = $param["RiskMedium"];
        }

        if (array_key_exists("RiskLow",$param) and $param["RiskLow"] !== null) {
            $this->RiskLow = $param["RiskLow"];
        }
    }
}
