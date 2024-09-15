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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationProjects request structure.
 *
 * @method integer getOffset() Obtain Subscript.
 * @method void setOffset(integer $Offset) Set Subscript.
 * @method integer getLimit() Obtain Number of entries per page.
 * @method void setLimit(integer $Limit) Set Number of entries per page.
 * @method array getFilters() Obtain Filter.
 * @method void setFilters(array $Filters) Set Filter.
 * @method string getProjectCategory() Obtain Project category.DESKTOP: desktop (default value).MOBILE: mobile.
 * @method void setProjectCategory(string $ProjectCategory) Set Project category.DESKTOP: desktop (default value).MOBILE: mobile.
 */
class DescribeApplicationProjectsRequest extends AbstractModel
{
    /**
     * @var integer Subscript.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
     */
    public $Limit;

    /**
     * @var array Filter.
     */
    public $Filters;

    /**
     * @var string Project category.DESKTOP: desktop (default value).MOBILE: mobile.
     */
    public $ProjectCategory;

    /**
     * @param integer $Offset Subscript.
     * @param integer $Limit Number of entries per page.
     * @param array $Filters Filter.
     * @param string $ProjectCategory Project category.DESKTOP: desktop (default value).MOBILE: mobile.
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

        if (array_key_exists("ProjectCategory",$param) and $param["ProjectCategory"] !== null) {
            $this->ProjectCategory = $param["ProjectCategory"];
        }
    }
}
