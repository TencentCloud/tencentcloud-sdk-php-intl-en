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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConcurrentPackage request structure.
 *
 * @method string getConcurrentId() Obtain Concurrency pack ID.
 * @method void setConcurrentId(string $ConcurrentId) Set Concurrency pack ID.
 * @method string getName() Obtain Concurrency pack name.
 * @method void setName(string $Name) Set Concurrency pack name.
 */
class ModifyConcurrentPackageRequest extends AbstractModel
{
    /**
     * @var string Concurrency pack ID.
     */
    public $ConcurrentId;

    /**
     * @var string Concurrency pack name.
     */
    public $Name;

    /**
     * @param string $ConcurrentId Concurrency pack ID.
     * @param string $Name Concurrency pack name.
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
        if (array_key_exists("ConcurrentId",$param) and $param["ConcurrentId"] !== null) {
            $this->ConcurrentId = $param["ConcurrentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
