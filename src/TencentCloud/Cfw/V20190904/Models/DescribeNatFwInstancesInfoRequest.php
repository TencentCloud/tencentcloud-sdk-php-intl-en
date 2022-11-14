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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwInstancesInfo request structure.
 *
 * @method array getFilter() Obtain Gets filtering fields of instance list
 * @method void setFilter(array $Filter) Set Gets filtering fields of instance list
 * @method integer getOffset() Obtain Page number
 * @method void setOffset(integer $Offset) Set Page number
 * @method integer getLimit() Obtain Page length
 * @method void setLimit(integer $Limit) Set Page length
 */
class DescribeNatFwInstancesInfoRequest extends AbstractModel
{
    /**
     * @var array Gets filtering fields of instance list
     */
    public $Filter;

    /**
     * @var integer Page number
     */
    public $Offset;

    /**
     * @var integer Page length
     */
    public $Limit;

    /**
     * @param array $Filter Gets filtering fields of instance list
     * @param integer $Offset Page number
     * @param integer $Limit Page length
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new NatFwFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
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
