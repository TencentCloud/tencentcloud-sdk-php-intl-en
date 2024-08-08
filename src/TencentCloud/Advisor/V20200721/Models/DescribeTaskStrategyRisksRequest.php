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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStrategyRisks request structure.
 *
 * @method integer getStrategyId() Obtain Assessment item ID
 * @method void setStrategyId(integer $StrategyId) Set Assessment item ID
 * @method integer getLimit() Obtain Quantity of returns. It is 100 by default, and the maximum value is 200.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 100 by default, and the maximum value is 200.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method string getEnv() Obtain Environment
 * @method void setEnv(string $Env) Set Environment
 * @method string getTaskType() Obtain Task type
 * @method void setTaskType(string $TaskType) Set Task type
 */
class DescribeTaskStrategyRisksRequest extends AbstractModel
{
    /**
     * @var integer Assessment item ID
     */
    public $StrategyId;

    /**
     * @var integer Quantity of returns. It is 100 by default, and the maximum value is 200.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var string Environment
     */
    public $Env;

    /**
     * @var string Task type
     */
    public $TaskType;

    /**
     * @param integer $StrategyId Assessment item ID
     * @param integer $Limit Quantity of returns. It is 100 by default, and the maximum value is 200.
     * @param integer $Offset Offset, which is 0 by default.
     * @param string $Env Environment
     * @param string $TaskType Task type
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
