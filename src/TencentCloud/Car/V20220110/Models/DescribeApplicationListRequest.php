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
 * DescribeApplicationList request structure.
 *
 * @method integer getOffset() Obtain Application list offset.
 * @method void setOffset(integer $Offset) Set Application list offset.
 * @method integer getLimit() Obtain Application quantity limit.
 * @method void setLimit(integer $Limit) Set Application quantity limit.
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 * @method string getApplicationCategory() Obtain Application category (DESKTOP: desktop; MOBILE: mobile).
 * @method void setApplicationCategory(string $ApplicationCategory) Set Application category (DESKTOP: desktop; MOBILE: mobile).
 */
class DescribeApplicationListRequest extends AbstractModel
{
    /**
     * @var integer Application list offset.
     */
    public $Offset;

    /**
     * @var integer Application quantity limit.
     */
    public $Limit;

    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @var string Application category (DESKTOP: desktop; MOBILE: mobile).
     */
    public $ApplicationCategory;

    /**
     * @param integer $Offset Application list offset.
     * @param integer $Limit Application quantity limit.
     * @param array $Filters Filter criteria.
     * @param string $ApplicationCategory Application category (DESKTOP: desktop; MOBILE: mobile).
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

        if (array_key_exists("ApplicationCategory",$param) and $param["ApplicationCategory"] !== null) {
            $this->ApplicationCategory = $param["ApplicationCategory"];
        }
    }
}
