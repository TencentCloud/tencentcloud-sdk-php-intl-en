<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockTop request structure.
 *
 * @method string getUniqueId() Obtain Record ID
 * @method void setUniqueId(string $UniqueId) Set Record ID
 * @method string getOpeType() Obtain Operation type. 1: pin to top; 0: unpin
 * @method void setOpeType(string $OpeType) Set Operation type. 1: pin to top; 0: unpin
 */
class ModifyBlockTopRequest extends AbstractModel
{
    /**
     * @var string Record ID
     */
    public $UniqueId;

    /**
     * @var string Operation type. 1: pin to top; 0: unpin
     */
    public $OpeType;

    /**
     * @param string $UniqueId Record ID
     * @param string $OpeType Operation type. 1: pin to top; 0: unpin
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
        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("OpeType",$param) and $param["OpeType"] !== null) {
            $this->OpeType = $param["OpeType"];
        }
    }
}
