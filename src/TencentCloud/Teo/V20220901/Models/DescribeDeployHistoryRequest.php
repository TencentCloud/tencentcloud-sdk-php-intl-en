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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeployHistory request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getEnvId() Obtain Environment ID.
 * @method void setEnvId(string $EnvId) Set Environment ID.
 * @method array getFilters() Obtain Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>record-id: Filter by release record ID. </li>
 * @method void setFilters(array $Filters) Set Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>record-id: Filter by release record ID. </li>
 */
class DescribeDeployHistoryRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Environment ID.
     */
    public $EnvId;

    /**
     * @var array Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>record-id: Filter by release record ID. </li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $EnvId Environment ID.
     * @param array $Filters Filtering condition. The maximum value of Filters.Values is 20. Detailed filtering conditions: 
<li>record-id: Filter by release record ID. </li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
