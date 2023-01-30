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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCheckItemList request structure.
 *
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Maximum number of records per query
 * @method void setLimit(integer $Limit) Set Maximum number of records per query
 * @method array getFilters() Obtain Name. Valid values: `risk_level` (risk level); `risk_target` (check target and risky target); `risk_type` (risk type); `risk_attri` (risk type of the check item).
 * @method void setFilters(array $Filters) Set Name. Valid values: `risk_level` (risk level); `risk_target` (check target and risky target); `risk_type` (risk type); `risk_attri` (risk type of the check item).
 */
class DescribeCheckItemListRequest extends AbstractModel
{
    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Maximum number of records per query
     */
    public $Limit;

    /**
     * @var array Name. Valid values: `risk_level` (risk level); `risk_target` (check target and risky target); `risk_type` (risk type); `risk_attri` (risk type of the check item).
     */
    public $Filters;

    /**
     * @param integer $Offset Offset
     * @param integer $Limit Maximum number of records per query
     * @param array $Filters Name. Valid values: `risk_level` (risk level); `risk_target` (check target and risky target); `risk_type` (risk type); `risk_attri` (risk type of the check item).
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
