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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDefenceSettingList request structure.
 *
 * @method array getFilters() Obtain Filter condition: Switch, Keywords.
 * @method void setFilters(array $Filters) Set Filter condition: Switch, Keywords.
 * @method integer getOffset() Obtain Data offset
 * @method void setOffset(integer $Offset) Set Data offset
 * @method integer getLimit() Obtain Data limit
 * @method void setLimit(integer $Limit) Set Data limit
 */
class DescribeVulDefenceSettingListRequest extends AbstractModel
{
    /**
     * @var array Filter condition: Switch, Keywords.
     */
    public $Filters;

    /**
     * @var integer Data offset
     */
    public $Offset;

    /**
     * @var integer Data limit
     */
    public $Limit;

    /**
     * @param array $Filters Filter condition: Switch, Keywords.
     * @param integer $Offset Data offset
     * @param integer $Limit Data limit
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
