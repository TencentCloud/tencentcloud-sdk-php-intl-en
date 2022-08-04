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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects request structure.
 *
 * @method integer getLimit() Obtain Number of items per page (integer)
 * @method void setLimit(integer $Limit) Set Number of items per page (integer)
 * @method integer getOffset() Obtain Page number (integer)
 * @method void setOffset(integer $Offset) Set Page number (integer)
 * @method array getFilters() Obtain Filter parameter. Pass in {"Name": "IsDemo", "Values":["1"]} for the demo mode.
 * @method void setFilters(array $Filters) Set Filter parameter. Pass in {"Name": "IsDemo", "Values":["1"]} for the demo mode.
 * @method integer getIsDemo() Obtain This parameter has been disused. You need to indicate whether the demo mode is used in `Filters`.
 * @method void setIsDemo(integer $IsDemo) Set This parameter has been disused. You need to indicate whether the demo mode is used in `Filters`.
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer Number of items per page (integer)
     */
    public $Limit;

    /**
     * @var integer Page number (integer)
     */
    public $Offset;

    /**
     * @var array Filter parameter. Pass in {"Name": "IsDemo", "Values":["1"]} for the demo mode.
     */
    public $Filters;

    /**
     * @var integer This parameter has been disused. You need to indicate whether the demo mode is used in `Filters`.
     */
    public $IsDemo;

    /**
     * @param integer $Limit Number of items per page (integer)
     * @param integer $Offset Page number (integer)
     * @param array $Filters Filter parameter. Pass in {"Name": "IsDemo", "Values":["1"]} for the demo mode.
     * @param integer $IsDemo This parameter has been disused. You need to indicate whether the demo mode is used in `Filters`.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsDemo",$param) and $param["IsDemo"] !== null) {
            $this->IsDemo = $param["IsDemo"];
        }
    }
}
