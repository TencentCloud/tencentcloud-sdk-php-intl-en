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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportBaselineFixList request structure.
 *
 * @method array getFilters() Obtain <li>ItemName - String - required: no - item name</li>
 * @method void setFilters(array $Filters) Set <li>ItemName - String - required: no - item name</li>
 * @method integer getExportAll() Obtain 0: Filtered Result Export; 1: Export All
 * @method void setExportAll(integer $ExportAll) Set 0: Filtered Result Export; 1: Export All
 */
class ExportBaselineFixListRequest extends AbstractModel
{
    /**
     * @var array <li>ItemName - String - required: no - item name</li>
     */
    public $Filters;

    /**
     * @var integer 0: Filtered Result Export; 1: Export All
     */
    public $ExportAll;

    /**
     * @param array $Filters <li>ItemName - String - required: no - item name</li>
     * @param integer $ExportAll 0: Filtered Result Export; 1: Export All
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

        if (array_key_exists("ExportAll",$param) and $param["ExportAll"] !== null) {
            $this->ExportAll = $param["ExportAll"];
        }
    }
}
