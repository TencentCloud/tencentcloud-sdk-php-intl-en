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
 * ModifyBaselinePolicy request structure.
 *
 * @method BaselinePolicy getData() Obtain None
 * @method void setData(BaselinePolicy $Data) Set None
 * @method array getFilters() Obtain <li>RuleName - String - required: no - rule name</li>
<li>CategoryId - int64 - required: no - customized filtering: -1 - rule category</li>
<li>RuleType - int - required: no - 0: system default; 1: customized - rule type</li>
 * @method void setFilters(array $Filters) Set <li>RuleName - String - required: no - rule name</li>
<li>CategoryId - int64 - required: no - customized filtering: -1 - rule category</li>
<li>RuleType - int - required: no - 0: system default; 1: customized - rule type</li>
 * @method integer getSelectAll() Obtain Whether to select all based on the filtering criteria
 * @method void setSelectAll(integer $SelectAll) Set Whether to select all based on the filtering criteria
 */
class ModifyBaselinePolicyRequest extends AbstractModel
{
    /**
     * @var BaselinePolicy None
     */
    public $Data;

    /**
     * @var array <li>RuleName - String - required: no - rule name</li>
<li>CategoryId - int64 - required: no - customized filtering: -1 - rule category</li>
<li>RuleType - int - required: no - 0: system default; 1: customized - rule type</li>
     */
    public $Filters;

    /**
     * @var integer Whether to select all based on the filtering criteria
     */
    public $SelectAll;

    /**
     * @param BaselinePolicy $Data None
     * @param array $Filters <li>RuleName - String - required: no - rule name</li>
<li>CategoryId - int64 - required: no - customized filtering: -1 - rule category</li>
<li>RuleType - int - required: no - 0: system default; 1: customized - rule type</li>
     * @param integer $SelectAll Whether to select all based on the filtering criteria
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new BaselinePolicy();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }
    }
}
