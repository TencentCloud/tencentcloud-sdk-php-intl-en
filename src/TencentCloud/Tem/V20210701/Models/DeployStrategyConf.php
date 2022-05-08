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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration of batch release policies
 *
 * @method integer getTotalBatchCount() Obtain Total batches
 * @method void setTotalBatchCount(integer $TotalBatchCount) Set Total batches
 * @method integer getBetaBatchNum() Obtain Number of pods for the beta batch
 * @method void setBetaBatchNum(integer $BetaBatchNum) Set Number of pods for the beta batch
 * @method integer getDeployStrategyType() Obtain Batch deployment policy. `0`: automatically; `1`: manually; `2`: beta batch (manual), `3`: initial release
 * @method void setDeployStrategyType(integer $DeployStrategyType) Set Batch deployment policy. `0`: automatically; `1`: manually; `2`: beta batch (manual), `3`: initial release
 * @method integer getBatchInterval() Obtain Interval between batches
 * @method void setBatchInterval(integer $BatchInterval) Set Interval between batches
 * @method integer getMinAvailable() Obtain The minimum number of available pods
 * @method void setMinAvailable(integer $MinAvailable) Set The minimum number of available pods
 * @method boolean getForce() Obtain Whether to enable force release
 * @method void setForce(boolean $Force) Set Whether to enable force release
 */
class DeployStrategyConf extends AbstractModel
{
    /**
     * @var integer Total batches
     */
    public $TotalBatchCount;

    /**
     * @var integer Number of pods for the beta batch
     */
    public $BetaBatchNum;

    /**
     * @var integer Batch deployment policy. `0`: automatically; `1`: manually; `2`: beta batch (manual), `3`: initial release
     */
    public $DeployStrategyType;

    /**
     * @var integer Interval between batches
     */
    public $BatchInterval;

    /**
     * @var integer The minimum number of available pods
     */
    public $MinAvailable;

    /**
     * @var boolean Whether to enable force release
     */
    public $Force;

    /**
     * @param integer $TotalBatchCount Total batches
     * @param integer $BetaBatchNum Number of pods for the beta batch
     * @param integer $DeployStrategyType Batch deployment policy. `0`: automatically; `1`: manually; `2`: beta batch (manual), `3`: initial release
     * @param integer $BatchInterval Interval between batches
     * @param integer $MinAvailable The minimum number of available pods
     * @param boolean $Force Whether to enable force release
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
        if (array_key_exists("TotalBatchCount",$param) and $param["TotalBatchCount"] !== null) {
            $this->TotalBatchCount = $param["TotalBatchCount"];
        }

        if (array_key_exists("BetaBatchNum",$param) and $param["BetaBatchNum"] !== null) {
            $this->BetaBatchNum = $param["BetaBatchNum"];
        }

        if (array_key_exists("DeployStrategyType",$param) and $param["DeployStrategyType"] !== null) {
            $this->DeployStrategyType = $param["DeployStrategyType"];
        }

        if (array_key_exists("BatchInterval",$param) and $param["BatchInterval"] !== null) {
            $this->BatchInterval = $param["BatchInterval"];
        }

        if (array_key_exists("MinAvailable",$param) and $param["MinAvailable"] !== null) {
            $this->MinAvailable = $param["MinAvailable"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
