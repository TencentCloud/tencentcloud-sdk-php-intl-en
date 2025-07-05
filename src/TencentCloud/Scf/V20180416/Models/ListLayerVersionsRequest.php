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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLayerVersions request structure.
 *
 * @method string getLayerName() Obtain Layer name
 * @method void setLayerName(string $LayerName) Set Layer name
 * @method array getCompatibleRuntime() Obtain Compatible runtimes
 * @method void setCompatibleRuntime(array $CompatibleRuntime) Set Compatible runtimes
 */
class ListLayerVersionsRequest extends AbstractModel
{
    /**
     * @var string Layer name
     */
    public $LayerName;

    /**
     * @var array Compatible runtimes
     */
    public $CompatibleRuntime;

    /**
     * @param string $LayerName Layer name
     * @param array $CompatibleRuntime Compatible runtimes
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
        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("CompatibleRuntime",$param) and $param["CompatibleRuntime"] !== null) {
            $this->CompatibleRuntime = $param["CompatibleRuntime"];
        }
    }
}
