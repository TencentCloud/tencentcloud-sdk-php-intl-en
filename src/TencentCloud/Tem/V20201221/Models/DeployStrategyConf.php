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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration of batch release policies
 *
 * @method integer getTotalBatchCount() Obtain Total batches
 * @method void setTotalBatchCount(integer $TotalBatchCount) Set Total batches
 * @method integer getBetaBatchNum() Obtain Number of instances for the beta batch
 * @method void setBetaBatchNum(integer $BetaBatchNum) Set Number of instances for the beta batch
 * @method integer getDeployStrategyType() Obtain Batch deploy policy. `0`: automatically; `1`: manually. If you use beta batch, the policy for beta batch must be `0`. The policy specified here only applies to the rest batches.
 * @method void setDeployStrategyType(integer $DeployStrategyType) Set Batch deploy policy. `0`: automatically; `1`: manually. If you use beta batch, the policy for beta batch must be `0`. The policy specified here only applies to the rest batches.
 * @method integer getBatchInterval() Obtain Interval between batches
 * @method void setBatchInterval(integer $BatchInterval) Set Interval between batches
 */
class DeployStrategyConf extends AbstractModel
{
    /**
     * @var integer Total batches
     */
    public $TotalBatchCount;

    /**
     * @var integer Number of instances for the beta batch
     */
    public $BetaBatchNum;

    /**
     * @var integer Batch deploy policy. `0`: automatically; `1`: manually. If you use beta batch, the policy for beta batch must be `0`. The policy specified here only applies to the rest batches.
     */
    public $DeployStrategyType;

    /**
     * @var integer Interval between batches
     */
    public $BatchInterval;

    /**
     * @param integer $TotalBatchCount Total batches
     * @param integer $BetaBatchNum Number of instances for the beta batch
     * @param integer $DeployStrategyType Batch deploy policy. `0`: automatically; `1`: manually. If you use beta batch, the policy for beta batch must be `0`. The policy specified here only applies to the rest batches.
     * @param integer $BatchInterval Interval between batches
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
    }
}
