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
 * Large model security intent detection response data
 *
 * @method integer getIsUnSafe() Obtain <p>Whether the intent is malicious.</p><p>Valid values:</p><ul><li>1: Malicious</li><li>0: Normal</li></ul>
 * @method void setIsUnSafe(integer $IsUnSafe) Set <p>Whether the intent is malicious.</p><p>Valid values:</p><ul><li>1: Malicious</li><li>0: Normal</li></ul>
 * @method string getCategory() Obtain <p>Detection category</p>
 * @method void setCategory(string $Category) Set <p>Detection category</p>
 */
class IntentDetectResult extends AbstractModel
{
    /**
     * @var integer <p>Whether the intent is malicious.</p><p>Valid values:</p><ul><li>1: Malicious</li><li>0: Normal</li></ul>
     */
    public $IsUnSafe;

    /**
     * @var string <p>Detection category</p>
     */
    public $Category;

    /**
     * @param integer $IsUnSafe <p>Whether the intent is malicious.</p><p>Valid values:</p><ul><li>1: Malicious</li><li>0: Normal</li></ul>
     * @param string $Category <p>Detection category</p>
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
        if (array_key_exists("IsUnSafe",$param) and $param["IsUnSafe"] !== null) {
            $this->IsUnSafe = $param["IsUnSafe"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
