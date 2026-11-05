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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Documentation query condition
 *
 * @method string getQuery() Obtain <p>Query keyword (name fuzzy search)</p>
 * @method void setQuery(string $Query) Set <p>Query keyword (name fuzzy search)</p>
 * @method array getQueryScopeList() Obtain <p>Query scope (fields that the query applies to): 1=file name, 2=tag or tag value; multiple selections supported, invalid by default</p>
 * @method void setQueryScopeList(array $QueryScopeList) Set <p>Query scope (fields that the query applies to): 1=file name, 2=tag or tag value; multiple selections supported, invalid by default</p>
 */
class DocQuery extends AbstractModel
{
    /**
     * @var string <p>Query keyword (name fuzzy search)</p>
     */
    public $Query;

    /**
     * @var array <p>Query scope (fields that the query applies to): 1=file name, 2=tag or tag value; multiple selections supported, invalid by default</p>
     */
    public $QueryScopeList;

    /**
     * @param string $Query <p>Query keyword (name fuzzy search)</p>
     * @param array $QueryScopeList <p>Query scope (fields that the query applies to): 1=file name, 2=tag or tag value; multiple selections supported, invalid by default</p>
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("QueryScopeList",$param) and $param["QueryScopeList"] !== null) {
            $this->QueryScopeList = $param["QueryScopeList"];
        }
    }
}
