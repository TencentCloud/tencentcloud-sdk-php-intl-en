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
 * dspm dictionary information
 *
 * @method integer getDictId() Obtain Dictionary id
 * @method void setDictId(integer $DictId) Set Dictionary id
 * @method string getDictName() Obtain Dictionary name
 * @method void setDictName(string $DictName) Set Dictionary name
 */
class DspmDictionary extends AbstractModel
{
    /**
     * @var integer Dictionary id
     */
    public $DictId;

    /**
     * @var string Dictionary name
     */
    public $DictName;

    /**
     * @param integer $DictId Dictionary id
     * @param string $DictName Dictionary name
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
        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("DictName",$param) and $param["DictName"] !== null) {
            $this->DictName = $param["DictName"];
        }
    }
}
