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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationTaskList request structure.
 *
 * @method array getFilters() Obtain Query criteria list
 * @method void setFilters(array $Filters) Set Query criteria list
 * @method integer getOffset() Obtain Query start position
 * @method void setOffset(integer $Offset) Set Query start position
 * @method integer getLimit() Obtain Query result limit count
 * @method void setLimit(integer $Limit) Set Query result limit count
 */
class DescribeMigrationTaskListRequest extends AbstractModel
{
    /**
     * @var array Query criteria list
     */
    public $Filters;

    /**
     * @var integer Query start position
     */
    public $Offset;

    /**
     * @var integer Query result limit count
     */
    public $Limit;

    /**
     * @param array $Filters Query criteria list
     * @param integer $Offset Query start position
     * @param integer $Limit Query result limit count
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
