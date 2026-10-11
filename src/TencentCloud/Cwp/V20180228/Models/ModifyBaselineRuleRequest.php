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
 * ModifyBaselineRule request structure.
 *
 * @method BaselineRule getData() Obtain None
 * @method void setData(BaselineRule $Data) Set None
 * @method integer getSelectAll() Obtain Whether to select all based on the filtering criteria
 * @method void setSelectAll(integer $SelectAll) Set Whether to select all based on the filtering criteria
 * @method array getFilters() Obtain <li>ItemName - string - Required: No - Item name</li>
 * @method void setFilters(array $Filters) Set <li>ItemName - string - Required: No - Item name</li>
 * @method integer getIdType() Obtain 0: detection item, 1: detection item category.
 * @method void setIdType(integer $IdType) Set 0: detection item, 1: detection item category.
 * @method array getExcludeIds() Obtain ID of the detection item to be excluded.
 * @method void setExcludeIds(array $ExcludeIds) Set ID of the detection item to be excluded.
 * @method array getCategoryIds() Obtain Selected detection item category.
 * @method void setCategoryIds(array $CategoryIds) Set Selected detection item category.
 */
class ModifyBaselineRuleRequest extends AbstractModel
{
    /**
     * @var BaselineRule None
     */
    public $Data;

    /**
     * @var integer Whether to select all based on the filtering criteria
     */
    public $SelectAll;

    /**
     * @var array <li>ItemName - string - Required: No - Item name</li>
     */
    public $Filters;

    /**
     * @var integer 0: detection item, 1: detection item category.
     */
    public $IdType;

    /**
     * @var array ID of the detection item to be excluded.
     */
    public $ExcludeIds;

    /**
     * @var array Selected detection item category.
     */
    public $CategoryIds;

    /**
     * @param BaselineRule $Data None
     * @param integer $SelectAll Whether to select all based on the filtering criteria
     * @param array $Filters <li>ItemName - string - Required: No - Item name</li>
     * @param integer $IdType 0: detection item, 1: detection item category.
     * @param array $ExcludeIds ID of the detection item to be excluded.
     * @param array $CategoryIds Selected detection item category.
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
            $this->Data = new BaselineRule();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("ExcludeIds",$param) and $param["ExcludeIds"] !== null) {
            $this->ExcludeIds = $param["ExcludeIds"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }
    }
}
