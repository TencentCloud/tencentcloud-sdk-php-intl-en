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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeStrategyEnableStatus request structure.
 *
 * @method integer getStrategyId() Obtain Baseline policy ID
 * @method void setStrategyId(integer $StrategyId) Set Baseline policy ID
 * @method integer getStatus() Obtain Enabling status
 * @method void setStatus(integer $Status) Set Enabling status
 */
class ChangeStrategyEnableStatusRequest extends AbstractModel
{
    /**
     * @var integer Baseline policy ID
     */
    public $StrategyId;

    /**
     * @var integer Enabling status
     */
    public $Status;

    /**
     * @param integer $StrategyId Baseline policy ID
     * @param integer $Status Enabling status
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
