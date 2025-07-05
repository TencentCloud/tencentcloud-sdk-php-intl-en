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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Incremental migration of origin file suffix configuration.
 *
 * @method string getSuffix() Obtain File suffix.
if filled with `.ts`, the origin-pull address will be: `http(s)://<origin domain>/<file name>.ts`.
 * @method void setSuffix(string $Suffix) Set File suffix.
if filled with `.ts`, the origin-pull address will be: `http(s)://<origin domain>/<file name>.ts`.
 */
class IncrementalMigrationOriginSuffixConfig extends AbstractModel
{
    /**
     * @var string File suffix.
if filled with `.ts`, the origin-pull address will be: `http(s)://<origin domain>/<file name>.ts`.
     */
    public $Suffix;

    /**
     * @param string $Suffix File suffix.
if filled with `.ts`, the origin-pull address will be: `http(s)://<origin domain>/<file name>.ts`.
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
        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }
    }
}
