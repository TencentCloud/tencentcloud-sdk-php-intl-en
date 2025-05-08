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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRabbitMQServerlessInstances request structure.
 *
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 * @method integer getLimit() Obtain Page size.
 * @method void setLimit(integer $Limit) Set Page size.
 * @method integer getOffset() Obtain Starting index value for pagination.
 * @method void setOffset(integer $Offset) Set Starting index value for pagination.
 */
class ListRabbitMQServerlessInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @var integer Page size.
     */
    public $Limit;

    /**
     * @var integer Starting index value for pagination.
     */
    public $Offset;

    /**
     * @param array $Filters Filter criteria.
     * @param integer $Limit Page size.
     * @param integer $Offset Starting index value for pagination.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
