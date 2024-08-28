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
 * DescribeBaselineStrategyList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameters (The maximum number is 100.)
 * @method void setLimit(integer $Limit) Set Pagination parameters (The maximum number is 100.)
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method integer getEnabled() Obtain Rule switch: 1 - on; 0 - off; 2: all
 * @method void setEnabled(integer $Enabled) Set Rule switch: 1 - on; 0 - off; 2: all
 */
class DescribeBaselineStrategyListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameters (The maximum number is 100.)
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var integer Rule switch: 1 - on; 0 - off; 2: all
     */
    public $Enabled;

    /**
     * @param integer $Limit Pagination parameters (The maximum number is 100.)
     * @param integer $Offset Pagination parameter
     * @param integer $Enabled Rule switch: 1 - on; 0 - off; 2: all
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
