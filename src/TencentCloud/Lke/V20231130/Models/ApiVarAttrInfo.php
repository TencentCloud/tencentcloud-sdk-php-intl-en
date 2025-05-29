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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data of custom variable and label relationship.
 *
 * @method string getApiVarId() Obtain Custom variable ID.
 * @method void setApiVarId(string $ApiVarId) Set Custom variable ID.
 * @method string getAttrBizId() Obtain Label ID.
 * @method void setAttrBizId(string $AttrBizId) Set Label ID.
 */
class ApiVarAttrInfo extends AbstractModel
{
    /**
     * @var string Custom variable ID.
     */
    public $ApiVarId;

    /**
     * @var string Label ID.
     */
    public $AttrBizId;

    /**
     * @param string $ApiVarId Custom variable ID.
     * @param string $AttrBizId Label ID.
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
        if (array_key_exists("ApiVarId",$param) and $param["ApiVarId"] !== null) {
            $this->ApiVarId = $param["ApiVarId"];
        }

        if (array_key_exists("AttrBizId",$param) and $param["AttrBizId"] !== null) {
            $this->AttrBizId = $param["AttrBizId"];
        }
    }
}
