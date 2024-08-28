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
 * ExportBaselineList request structure.
 *
 * @method array getFilters() Obtain Filter criteria:
<li>StrategyId- Uint64 - baseline policy ID</li>
<li>Status - Uint64 - event status: 0: failed; 1: ignored; 3: passed; 5: detecting</li>
<li>BaselineName - String - baseline name</li>
<li>AliasName - String - server name/server IP address</li>
<li>Uuid - String - host UUID</li>
 * @method void setFilters(array $Filters) Set Filter criteria:
<li>StrategyId- Uint64 - baseline policy ID</li>
<li>Status - Uint64 - event status: 0: failed; 1: ignored; 3: passed; 5: detecting</li>
<li>BaselineName - String - baseline name</li>
<li>AliasName - String - server name/server IP address</li>
<li>Uuid - String - host UUID</li>
 * @method integer getIfDetail() Obtain This parameter has been deprecated.
 * @method void setIfDetail(integer $IfDetail) Set This parameter has been deprecated.
 */
class ExportBaselineListRequest extends AbstractModel
{
    /**
     * @var array Filter criteria:
<li>StrategyId- Uint64 - baseline policy ID</li>
<li>Status - Uint64 - event status: 0: failed; 1: ignored; 3: passed; 5: detecting</li>
<li>BaselineName - String - baseline name</li>
<li>AliasName - String - server name/server IP address</li>
<li>Uuid - String - host UUID</li>
     */
    public $Filters;

    /**
     * @var integer This parameter has been deprecated.
     */
    public $IfDetail;

    /**
     * @param array $Filters Filter criteria:
<li>StrategyId- Uint64 - baseline policy ID</li>
<li>Status - Uint64 - event status: 0: failed; 1: ignored; 3: passed; 5: detecting</li>
<li>BaselineName - String - baseline name</li>
<li>AliasName - String - server name/server IP address</li>
<li>Uuid - String - host UUID</li>
     * @param integer $IfDetail This parameter has been deprecated.
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IfDetail",$param) and $param["IfDetail"] !== null) {
            $this->IfDetail = $param["IfDetail"];
        }
    }
}
