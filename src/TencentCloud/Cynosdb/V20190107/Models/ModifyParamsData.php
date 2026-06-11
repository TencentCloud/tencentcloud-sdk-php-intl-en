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
 * Modify parameter information.
 *
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method string getOldValue() Obtain Parameter value before modification.
 * @method void setOldValue(string $OldValue) Set Parameter value before modification.
 * @method string getCurValue() Obtain Parameter value after modification.
 * @method void setCurValue(string $CurValue) Set Parameter value after modification.
 */
class ModifyParamsData extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var string Parameter value before modification.
     */
    public $OldValue;

    /**
     * @var string Parameter value after modification.
     */
    public $CurValue;

    /**
     * @param string $Name Parameter name.
     * @param string $OldValue Parameter value before modification.
     * @param string $CurValue Parameter value after modification.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("CurValue",$param) and $param["CurValue"] !== null) {
            $this->CurValue = $param["CurValue"];
        }
    }
}
