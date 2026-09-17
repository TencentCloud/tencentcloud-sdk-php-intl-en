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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shipping Rule
 *
 * @method integer getDataScope() Obtain <p>Data delivery range.</p><p>Enumeration values:</p><ul><li>1: History + newly added data</li><li>2: Custom time range</li><li>3: New additions only</li></ul><p>This time, only 3 newly added data is supported. Subsequent support: 2 custom time range and 1 history + newly added data</p>
 * @method void setDataScope(integer $DataScope) Set <p>Data delivery range.</p><p>Enumeration values:</p><ul><li>1: History + newly added data</li><li>2: Custom time range</li><li>3: New additions only</li></ul><p>This time, only 3 newly added data is supported. Subsequent support: 2 custom time range and 1 history + newly added data</p>
 */
class DeliverRule extends AbstractModel
{
    /**
     * @var integer <p>Data delivery range.</p><p>Enumeration values:</p><ul><li>1: History + newly added data</li><li>2: Custom time range</li><li>3: New additions only</li></ul><p>This time, only 3 newly added data is supported. Subsequent support: 2 custom time range and 1 history + newly added data</p>
     */
    public $DataScope;

    /**
     * @param integer $DataScope <p>Data delivery range.</p><p>Enumeration values:</p><ul><li>1: History + newly added data</li><li>2: Custom time range</li><li>3: New additions only</li></ul><p>This time, only 3 newly added data is supported. Subsequent support: 2 custom time range and 1 history + newly added data</p>
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
        if (array_key_exists("DataScope",$param) and $param["DataScope"] !== null) {
            $this->DataScope = $param["DataScope"];
        }
    }
}
