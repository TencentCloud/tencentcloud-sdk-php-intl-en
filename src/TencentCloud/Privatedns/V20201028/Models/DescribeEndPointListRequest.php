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
 * DescribeEndPointList request structure.
 *
 * @method integer getOffset() Obtain Pagination offset, starting from 0.
 * @method void setOffset(integer $Offset) Set Pagination offset, starting from 0.
 * @method integer getLimit() Obtain Pagination limit. Maximum value: 100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Pagination limit. Maximum value: 100. Default value: 20.
 * @method array getFilters() Obtain Filter parameters. Valid values: EndPointName, EndPointId, EndPointServiceId, and EndPointVip.
 * @method void setFilters(array $Filters) Set Filter parameters. Valid values: EndPointName, EndPointId, EndPointServiceId, and EndPointVip.
 */
class DescribeEndPointListRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset, starting from 0.
     */
    public $Offset;

    /**
     * @var integer Pagination limit. Maximum value: 100. Default value: 20.
     */
    public $Limit;

    /**
     * @var array Filter parameters. Valid values: EndPointName, EndPointId, EndPointServiceId, and EndPointVip.
     */
    public $Filters;

    /**
     * @param integer $Offset Pagination offset, starting from 0.
     * @param integer $Limit Pagination limit. Maximum value: 100. Default value: 20.
     * @param array $Filters Filter parameters. Valid values: EndPointName, EndPointId, EndPointServiceId, and EndPointVip.
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
