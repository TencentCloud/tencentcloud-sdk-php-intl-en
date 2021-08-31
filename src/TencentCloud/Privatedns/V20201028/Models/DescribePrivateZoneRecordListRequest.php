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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateZoneRecordList request structure.
 *
 * @method string getZoneId() Obtain Private domain ID: zone-xxxxxx
 * @method void setZoneId(string $ZoneId) Set Private domain ID: zone-xxxxxx
 * @method array getFilters() Obtain Filter parameter
 * @method void setFilters(array $Filters) Set Filter parameter
 * @method integer getOffset() Obtain Pagination offset, starting from 0
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0
 * @method integer getLimit() Obtain Number of entries per page. Maximum value: 100. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of entries per page. Maximum value: 100. Default value: 20
 */
class DescribePrivateZoneRecordListRequest extends AbstractModel
{
    /**
     * @var string Private domain ID: zone-xxxxxx
     */
    public $ZoneId;

    /**
     * @var array Filter parameter
     */
    public $Filters;

    /**
     * @var integer Pagination offset, starting from 0
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Maximum value: 100. Default value: 20
     */
    public $Limit;

    /**
     * @param string $ZoneId Private domain ID: zone-xxxxxx
     * @param array $Filters Filter parameter
     * @param integer $Offset Pagination offset, starting from 0
     * @param integer $Limit Number of entries per page. Maximum value: 100. Default value: 20
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
