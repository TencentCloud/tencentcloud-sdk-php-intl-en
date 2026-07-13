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
 * Budget computation for complex data type
 *
 * @method string getDateDesc() Obtain Frontend page date display
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDateDesc(string $DateDesc) Set Frontend page date display
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQuota() Obtain Budget limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuota(string $Quota) Set Budget limit
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetPlan extends AbstractModel
{
    /**
     * @var string Frontend page date display
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DateDesc;

    /**
     * @var string Budget limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quota;

    /**
     * @param string $DateDesc Frontend page date display
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Quota Budget limit
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DateDesc",$param) and $param["DateDesc"] !== null) {
            $this->DateDesc = $param["DateDesc"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }
    }
}
