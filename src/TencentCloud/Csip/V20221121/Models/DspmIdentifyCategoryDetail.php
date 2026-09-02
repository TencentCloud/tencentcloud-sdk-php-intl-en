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
 * dspm data identification result category details
 *
 * @method integer getCategoryId() Obtain Category id
 * @method void setCategoryId(integer $CategoryId) Set Category id
 * @method string getCategoryName() Obtain Category name
 * @method void setCategoryName(string $CategoryName) Set Category name
 * @method array getRuleSet() Obtain Data item collection
 * @method void setRuleSet(array $RuleSet) Set Data item collection
 */
class DspmIdentifyCategoryDetail extends AbstractModel
{
    /**
     * @var integer Category id
     */
    public $CategoryId;

    /**
     * @var string Category name
     */
    public $CategoryName;

    /**
     * @var array Data item collection
     */
    public $RuleSet;

    /**
     * @param integer $CategoryId Category id
     * @param string $CategoryName Category name
     * @param array $RuleSet Data item collection
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            $this->RuleSet = [];
            foreach ($param["RuleSet"] as $key => $value){
                $obj = new DspmIdentifyRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }
    }
}
