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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVolumes request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method integer getLimit() Obtain Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 20 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset, defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, defaults to 0
 * @method array getFilters() Obtain Filter, supports filtering fields:
- Name: Name
- IsDefault: Whether it is the default.
 * @method void setFilters(array $Filters) Set Filter, supports filtering fields:
- Name: Name
- IsDefault: Whether it is the default.
 */
class DescribeVolumesRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var integer Quantity of returns. It is 20 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, defaults to 0
     */
    public $Offset;

    /**
     * @var array Filter, supports filtering fields:
- Name: Name
- IsDefault: Whether it is the default.
     */
    public $Filters;

    /**
     * @param string $EnvironmentId Environment ID
     * @param integer $Limit Quantity of returns. It is 20 by default, and the maximum value is 100.
     * @param integer $Offset Offset, defaults to 0
     * @param array $Filters Filter, supports filtering fields:
- Name: Name
- IsDefault: Whether it is the default.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
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
    }
}
