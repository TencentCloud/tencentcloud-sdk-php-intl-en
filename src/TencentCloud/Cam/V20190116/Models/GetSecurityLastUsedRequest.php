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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSecurityLastUsed request structure.
 *
 * @method array getSecretIdList() Obtain A parameter used to query the key ID list.
 * @method void setSecretIdList(array $SecretIdList) Set A parameter used to query the key ID list.
 */
class GetSecurityLastUsedRequest extends AbstractModel
{
    /**
     * @var array A parameter used to query the key ID list.
     */
    public $SecretIdList;

    /**
     * @param array $SecretIdList A parameter used to query the key ID list.
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
        if (array_key_exists("SecretIdList",$param) and $param["SecretIdList"] !== null) {
            $this->SecretIdList = $param["SecretIdList"];
        }
    }
}
