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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeKVNamespace request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getNamespace() Obtain Namespace name. Input content with the following restrictions: support input of 1-50 characters, allowed characters are a-z, A-Z, 0-9, -, and - cannot be registered alone or used continuously, cannot be placed at the beginning or the end. Under the same site, ensure the name is unique.
 * @method void setNamespace(string $Namespace) Set Namespace name. Input content with the following restrictions: support input of 1-50 characters, allowed characters are a-z, A-Z, 0-9, -, and - cannot be registered alone or used continuously, cannot be placed at the beginning or the end. Under the same site, ensure the name is unique.
 * @method string getRemark() Obtain Namespace description. Used to describe the purpose or business meaning of a namespace. Supports a maximum of 256 characters.
 * @method void setRemark(string $Remark) Set Namespace description. Used to describe the purpose or business meaning of a namespace. Supports a maximum of 256 characters.
 */
class CreateEdgeKVNamespaceRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Namespace name. Input content with the following restrictions: support input of 1-50 characters, allowed characters are a-z, A-Z, 0-9, -, and - cannot be registered alone or used continuously, cannot be placed at the beginning or the end. Under the same site, ensure the name is unique.
     */
    public $Namespace;

    /**
     * @var string Namespace description. Used to describe the purpose or business meaning of a namespace. Supports a maximum of 256 characters.
     */
    public $Remark;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Namespace Namespace name. Input content with the following restrictions: support input of 1-50 characters, allowed characters are a-z, A-Z, 0-9, -, and - cannot be registered alone or used continuously, cannot be placed at the beginning or the end. Under the same site, ensure the name is unique.
     * @param string $Remark Namespace description. Used to describe the purpose or business meaning of a namespace. Supports a maximum of 256 characters.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
