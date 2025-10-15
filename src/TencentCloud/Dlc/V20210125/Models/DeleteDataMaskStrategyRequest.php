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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDataMaskStrategy request structure.
 *
 * @method string getStrategyId() Obtain DMask policy Id. specifies the Id of the data masking policy.
 * @method void setStrategyId(string $StrategyId) Set DMask policy Id. specifies the Id of the data masking policy.
 */
class DeleteDataMaskStrategyRequest extends AbstractModel
{
    /**
     * @var string DMask policy Id. specifies the Id of the data masking policy.
     */
    public $StrategyId;

    /**
     * @param string $StrategyId DMask policy Id. specifies the Id of the data masking policy.
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
    }
}
