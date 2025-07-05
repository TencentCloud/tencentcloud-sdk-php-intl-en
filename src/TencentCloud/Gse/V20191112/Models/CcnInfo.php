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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CCN information
 *
 * @method string getAccountId() Obtain Account of the CCN instance owner
 * @method void setAccountId(string $AccountId) Set Account of the CCN instance owner
 * @method string getCcnId() Obtain CCN ID
 * @method void setCcnId(string $CcnId) Set CCN ID
 */
class CcnInfo extends AbstractModel
{
    /**
     * @var string Account of the CCN instance owner
     */
    public $AccountId;

    /**
     * @var string CCN ID
     */
    public $CcnId;

    /**
     * @param string $AccountId Account of the CCN instance owner
     * @param string $CcnId CCN ID
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }
    }
}
