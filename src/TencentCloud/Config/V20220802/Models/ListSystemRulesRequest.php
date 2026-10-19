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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSystemRules request structure.
 *
 * @method integer getLimit() Obtain Quantity per page
 * @method void setLimit(integer $Limit) Set Quantity per page
 * @method integer getOffset() Obtain Current Page
 * @method void setOffset(integer $Offset) Set Current Page
 * @method string getKeyword() Obtain Search keywords. Searches by ID, name, tag, or description are supported.
 * @method void setKeyword(string $Keyword) Set Search keywords. Searches by ID, name, tag, or description are supported.
 * @method integer getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(integer $RiskLevel) Set Risk level
 */
class ListSystemRulesRequest extends AbstractModel
{
    /**
     * @var integer Quantity per page
     */
    public $Limit;

    /**
     * @var integer Current Page
     */
    public $Offset;

    /**
     * @var string Search keywords. Searches by ID, name, tag, or description are supported.
     */
    public $Keyword;

    /**
     * @var integer Risk level
     */
    public $RiskLevel;

    /**
     * @param integer $Limit Quantity per page
     * @param integer $Offset Current Page
     * @param string $Keyword Search keywords. Searches by ID, name, tag, or description are supported.
     * @param integer $RiskLevel Risk level
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
