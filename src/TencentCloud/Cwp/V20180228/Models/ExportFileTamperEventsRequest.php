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
 * ExportFileTamperEvents request structure.
 *
 * @method array getFilters() Obtain Filtering criteria
<li>Status - String - required: no - processing status: 0: pending; 1: added to allowlist; 2: deleted; 3: ignored</li><li>ModifyTime - string - required: no - last occurrence time</li>
<li>Uuid - String - required: no - host UUID for querying</li>
<li>RuleCategory - string - required: no - rule category: 0: system rule; 1: custom rule</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>Status - String - required: no - processing status: 0: pending; 1: added to allowlist; 2: deleted; 3: ignored</li><li>ModifyTime - string - required: no - last occurrence time</li>
<li>Uuid - String - required: no - host UUID for querying</li>
<li>RuleCategory - string - required: no - rule category: 0: system rule; 1: custom rule</li>
 * @method array getFileds() Obtain Fields to be exported
 * @method void setFileds(array $Fileds) Set Fields to be exported
 * @method string getFields() Obtain Fields to be exported
 * @method void setFields(string $Fields) Set Fields to be exported
 */
class ExportFileTamperEventsRequest extends AbstractModel
{
    /**
     * @var array Filtering criteria
<li>Status - String - required: no - processing status: 0: pending; 1: added to allowlist; 2: deleted; 3: ignored</li><li>ModifyTime - string - required: no - last occurrence time</li>
<li>Uuid - String - required: no - host UUID for querying</li>
<li>RuleCategory - string - required: no - rule category: 0: system rule; 1: custom rule</li>
     */
    public $Filters;

    /**
     * @var array Fields to be exported
     * @deprecated
     */
    public $Fileds;

    /**
     * @var string Fields to be exported
     */
    public $Fields;

    /**
     * @param array $Filters Filtering criteria
<li>Status - String - required: no - processing status: 0: pending; 1: added to allowlist; 2: deleted; 3: ignored</li><li>ModifyTime - string - required: no - last occurrence time</li>
<li>Uuid - String - required: no - host UUID for querying</li>
<li>RuleCategory - string - required: no - rule category: 0: system rule; 1: custom rule</li>
     * @param array $Fileds Fields to be exported
     * @param string $Fields Fields to be exported
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Fileds",$param) and $param["Fileds"] !== null) {
            $this->Fileds = $param["Fileds"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }
    }
}
