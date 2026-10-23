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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query parameter filter
 *
 * @method array getNames() Obtain Search field. Currently supports: ProxyGroupId
 * @method void setNames(array $Names) Set Search field. Currently supports: ProxyGroupId
 * @method array getValues() Obtain String for search.
 * @method void setValues(array $Values) Set String for search.
 * @method boolean getExactMatch() Obtain Whether to match exactly.
 * @method void setExactMatch(boolean $ExactMatch) Set Whether to match exactly.
 */
class QueryParamFilter extends AbstractModel
{
    /**
     * @var array Search field. Currently supports: ProxyGroupId
     */
    public $Names;

    /**
     * @var array String for search.
     */
    public $Values;

    /**
     * @var boolean Whether to match exactly.
     */
    public $ExactMatch;

    /**
     * @param array $Names Search field. Currently supports: ProxyGroupId
     * @param array $Values String for search.
     * @param boolean $ExactMatch Whether to match exactly.
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
