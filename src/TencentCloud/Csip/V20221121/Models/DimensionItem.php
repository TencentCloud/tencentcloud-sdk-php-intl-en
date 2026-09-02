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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dimension deduction items
 *
 * @method string getDimensionId() Obtain Dimension ID
Enumeration value:
risk_governance: Risk Governance
threat_detection: threat detection
protection configuration
 * @method void setDimensionId(string $DimensionId) Set Dimension ID
Enumeration value:
risk_governance: Risk Governance
threat_detection: threat detection
protection configuration
 * @method string getDimensionName() Obtain Dimension Name
 * @method void setDimensionName(string $DimensionName) Set Dimension Name
 * @method integer getMaxDeductScore() Obtain Dimension deduction limit
 * @method void setMaxDeductScore(integer $MaxDeductScore) Set Dimension deduction limit
 * @method integer getDeductScore() Obtain Actual dimension deduction
 * @method void setDeductScore(integer $DeductScore) Set Actual dimension deduction
 * @method array getCategories() Obtain List of subitems
 * @method void setCategories(array $Categories) Set List of subitems
 */
class DimensionItem extends AbstractModel
{
    /**
     * @var string Dimension ID
Enumeration value:
risk_governance: Risk Governance
threat_detection: threat detection
protection configuration
     */
    public $DimensionId;

    /**
     * @var string Dimension Name
     */
    public $DimensionName;

    /**
     * @var integer Dimension deduction limit
     */
    public $MaxDeductScore;

    /**
     * @var integer Actual dimension deduction
     */
    public $DeductScore;

    /**
     * @var array List of subitems
     */
    public $Categories;

    /**
     * @param string $DimensionId Dimension ID
Enumeration value:
risk_governance: Risk Governance
threat_detection: threat detection
protection configuration
     * @param string $DimensionName Dimension Name
     * @param integer $MaxDeductScore Dimension deduction limit
     * @param integer $DeductScore Actual dimension deduction
     * @param array $Categories List of subitems
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
        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = [];
            foreach ($param["Categories"] as $key => $value){
                $obj = new CategoryItem();
                $obj->deserialize($value);
                array_push($this->Categories, $obj);
            }
        }
    }
}
