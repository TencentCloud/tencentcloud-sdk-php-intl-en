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
 * DescribeBaselineHostTop request structure.
 *
 * @method integer getTop() Obtain Dynamic top value
 * @method void setTop(integer $Top) Set Dynamic top value
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 */
class DescribeBaselineHostTopRequest extends AbstractModel
{
    /**
     * @var integer Dynamic top value
     */
    public $Top;

    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @param integer $Top Dynamic top value
     * @param integer $StrategyId Policy ID
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
        if (array_key_exists("Top",$param) and $param["Top"] !== null) {
            $this->Top = $param["Top"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
