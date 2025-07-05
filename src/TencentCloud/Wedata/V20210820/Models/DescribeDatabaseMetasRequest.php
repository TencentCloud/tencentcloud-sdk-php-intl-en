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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseMetas request structure.
 *
 * @method array getFilters() Obtain Filter Fields, projectIds/msTypes/createTime/modifiedTime
 * @method void setFilters(array $Filters) Set Filter Fields, projectIds/msTypes/createTime/modifiedTime
 * @method array getOrderFields() Obtain Sort Fields, such as name
 * @method void setOrderFields(array $OrderFields) Set Sort Fields, such as name
 */
class DescribeDatabaseMetasRequest extends AbstractModel
{
    /**
     * @var array Filter Fields, projectIds/msTypes/createTime/modifiedTime
     */
    public $Filters;

    /**
     * @var array Sort Fields, such as name
     */
    public $OrderFields;

    /**
     * @param array $Filters Filter Fields, projectIds/msTypes/createTime/modifiedTime
     * @param array $OrderFields Sort Fields, such as name
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

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
