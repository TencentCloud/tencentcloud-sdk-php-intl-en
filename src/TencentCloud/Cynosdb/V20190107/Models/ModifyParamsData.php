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
 * Parameter Modification Information
 *
 * @method string getName() Obtain Parameter Name
 * @method void setName(string $Name) Set Parameter Name
 * @method string getOldValue() Obtain Parameter Value Before Modification
 * @method void setOldValue(string $OldValue) Set Parameter Value Before Modification
 * @method string getCurValue() Obtain Parameter Value After Modification
 * @method void setCurValue(string $CurValue) Set Parameter Value After Modification
 */
class ModifyParamsData extends AbstractModel
{
    /**
     * @var string Parameter Name
     */
    public $Name;

    /**
     * @var string Parameter Value Before Modification
     */
    public $OldValue;

    /**
     * @var string Parameter Value After Modification
     */
    public $CurValue;

    /**
     * @param string $Name Parameter Name
     * @param string $OldValue Parameter Value Before Modification
     * @param string $CurValue Parameter Value After Modification
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
