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
 * DescribeAllocationTrendByMonth request structure.
 *
 * @method string getMonth() Obtain Bill month, in the format of 2024-02, which is the current month by default if not provided
 * @method void setMonth(string $Month) Set Bill month, in the format of 2024-02, which is the current month by default if not provided
 * @method string getTreeNodeUniqKey() Obtain Unique identifier of a cost allocation unit
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) Set Unique identifier of a cost allocation unit
 * @method string getBusinessCode() Obtain Product code, used for filtering
 * @method void setBusinessCode(string $BusinessCode) Set Product code, used for filtering
 */
class DescribeAllocationTrendByMonthRequest extends AbstractModel
{
    /**
     * @var string Bill month, in the format of 2024-02, which is the current month by default if not provided
     */
    public $Month;

    /**
     * @var string Unique identifier of a cost allocation unit
     */
    public $TreeNodeUniqKey;

    /**
     * @var string Product code, used for filtering
     */
    public $BusinessCode;

    /**
     * @param string $Month Bill month, in the format of 2024-02, which is the current month by default if not provided
     * @param string $TreeNodeUniqKey Unique identifier of a cost allocation unit
     * @param string $BusinessCode Product code, used for filtering
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }
    }
}
