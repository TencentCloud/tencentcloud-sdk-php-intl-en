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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Return information after the budget operation
 *
 * @method string getBudgetId() Obtain Budget project id
 * @method void setBudgetId(string $BudgetId) Set Budget project id
 * @method string getUpdateTime() Obtain Update budget time
 * @method void setUpdateTime(string $UpdateTime) Set Update budget time
 */
class BudgetInfoApiResponse extends AbstractModel
{
    /**
     * @var string Budget project id
     */
    public $BudgetId;

    /**
     * @var string Update budget time
     */
    public $UpdateTime;

    /**
     * @param string $BudgetId Budget project id
     * @param string $UpdateTime Update budget time
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
        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
