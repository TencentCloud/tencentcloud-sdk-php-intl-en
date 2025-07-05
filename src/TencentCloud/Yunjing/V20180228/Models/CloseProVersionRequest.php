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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseProVersion request structure.
 *
 * @method string getQuuid() Obtain Server `Uuid`.
`InstanceId` for BM or `Uuid` for CVM
 * @method void setQuuid(string $Quuid) Set Server `Uuid`.
`InstanceId` for BM or `Uuid` for CVM
 */
class CloseProVersionRequest extends AbstractModel
{
    /**
     * @var string Server `Uuid`.
`InstanceId` for BM or `Uuid` for CVM
     */
    public $Quuid;

    /**
     * @param string $Quuid Server `Uuid`.
`InstanceId` for BM or `Uuid` for CVM
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
