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
 * cos Data recognition result category details
 *
 * @method integer getCategoryId() Obtain <p>Category id</p>
 * @method void setCategoryId(integer $CategoryId) Set <p>Category id</p>
 * @method string getCategoryName() Obtain <p>Category name</p>
 * @method void setCategoryName(string $CategoryName) Set <p>Category name</p>
 * @method array getRuleSet() Obtain <p>Data item collection.</p>
 * @method void setRuleSet(array $RuleSet) Set <p>Data item collection.</p>
 */
class CosIdentifyCategoryDetail extends AbstractModel
{
    /**
     * @var integer <p>Category id</p>
     */
    public $CategoryId;

    /**
     * @var string <p>Category name</p>
     */
    public $CategoryName;

    /**
     * @var array <p>Data item collection.</p>
     * @deprecated
     */
    public $RuleSet;

    /**
     * @param integer $CategoryId <p>Category id</p>
     * @param string $CategoryName <p>Category name</p>
     * @param array $RuleSet <p>Data item collection.</p>
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
                $obj = new CosIdentifyRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }
    }
}
