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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportJavaMemShellPlugins request structure.
 *
 * @method array getFilters() Obtain Filtering criteria: Keywords: IP or host name for fuzzy query; Pid for precise match; MainClass for fuzzy match
 * @method void setFilters(array $Filters) Set Filtering criteria: Keywords: IP or host name for fuzzy query; Pid for precise match; MainClass for fuzzy match
 * @method array getWhere() Obtain Export fields
 * @method void setWhere(array $Where) Set Export fields
 */
class ExportJavaMemShellPluginsRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria: Keywords: IP or host name for fuzzy query; Pid for precise match; MainClass for fuzzy match
     */
    public $Filters;

    /**
     * @var array Export fields
     */
    public $Where;

    /**
     * @param array $Filters Filtering criteria: Keywords: IP or host name for fuzzy query; Pid for precise match; MainClass for fuzzy match
     * @param array $Where Export fields
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

        if (array_key_exists("Where",$param) and $param["Where"] !== null) {
            $this->Where = $param["Where"];
        }
    }
}
