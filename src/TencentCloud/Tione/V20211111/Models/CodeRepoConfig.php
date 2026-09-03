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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Code repository configuration.
 *
 * @method string getId() Obtain Code repository ID.
 * @method void setId(string $Id) Set Code repository ID.
 * @method string getTargetPath() Obtain Target address for the code repository download.
 * @method void setTargetPath(string $TargetPath) Set Target address for the code repository download.
 */
class CodeRepoConfig extends AbstractModel
{
    /**
     * @var string Code repository ID.
     */
    public $Id;

    /**
     * @var string Target address for the code repository download.
     */
    public $TargetPath;

    /**
     * @param string $Id Code repository ID.
     * @param string $TargetPath Target address for the code repository download.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }
    }
}
