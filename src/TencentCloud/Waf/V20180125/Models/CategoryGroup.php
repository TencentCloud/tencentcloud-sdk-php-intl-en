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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of rules grouped by category.
 *
 * @method string getCategory() Obtain <p>Category.</p>
 * @method void setCategory(string $Category) Set <p>Category.</p>
 * @method integer getCount() Obtain <p>Total.</p>
 * @method void setCount(integer $Count) Set <p>Total.</p>
 * @method array getRules() Obtain <p>Rule list.</p>
 * @method void setRules(array $Rules) Set <p>Rule list.</p>
 */
class CategoryGroup extends AbstractModel
{
    /**
     * @var string <p>Category.</p>
     */
    public $Category;

    /**
     * @var integer <p>Total.</p>
     */
    public $Count;

    /**
     * @var array <p>Rule list.</p>
     */
    public $Rules;

    /**
     * @param string $Category <p>Category.</p>
     * @param integer $Count <p>Total.</p>
     * @param array $Rules <p>Rule list.</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleDetail();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
