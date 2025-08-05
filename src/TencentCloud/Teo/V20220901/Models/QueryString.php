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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Request parameter contained in `CacheKey`
 *
 * @method string getSwitch() Obtain Whether to use `QueryString` as part of `CacheKey`. Values:
<li>`on`: Yes</li>
<li>`off`: No</li>
 * @method void setSwitch(string $Switch) Set Whether to use `QueryString` as part of `CacheKey`. Values:
<li>`on`: Yes</li>
<li>`off`: No</li>
 * @method string getAction() Obtain CacheKey usage via QueryString, valid values:.
<li>includeCustom: use partial url parameter;</li>.
<li>excludeCustom: exclude partial url parameters.</li>.
 * @method void setAction(string $Action) Set CacheKey usage via QueryString, valid values:.
<li>includeCustom: use partial url parameter;</li>.
<li>excludeCustom: exclude partial url parameters.</li>.
 * @method array getValue() Obtain Specifies the url parameter array for usage/exclusion.
 * @method void setValue(array $Value) Set Specifies the url parameter array for usage/exclusion.
 */
class QueryString extends AbstractModel
{
    /**
     * @var string Whether to use `QueryString` as part of `CacheKey`. Values:
<li>`on`: Yes</li>
<li>`off`: No</li>
     */
    public $Switch;

    /**
     * @var string CacheKey usage via QueryString, valid values:.
<li>includeCustom: use partial url parameter;</li>.
<li>excludeCustom: exclude partial url parameters.</li>.
     */
    public $Action;

    /**
     * @var array Specifies the url parameter array for usage/exclusion.
     */
    public $Value;

    /**
     * @param string $Switch Whether to use `QueryString` as part of `CacheKey`. Values:
<li>`on`: Yes</li>
<li>`off`: No</li>
     * @param string $Action CacheKey usage via QueryString, valid values:.
<li>includeCustom: use partial url parameter;</li>.
<li>excludeCustom: exclude partial url parameters.</li>.
     * @param array $Value Specifies the url parameter array for usage/exclusion.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
