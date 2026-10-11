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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metadata responsible person information data structure
 *
 * @method string getFullName() Obtain Metadata name (full name): catalog.schema.table
 * @method void setFullName(string $FullName) Set Metadata name (full name): catalog.schema.table
 * @method string getOwnerType() Obtain Owner type: User
 * @method void setOwnerType(string $OwnerType) Set Owner type: User
 * @method string getOwner() Obtain Owner: Unique ID (uin)
 * @method void setOwner(string $Owner) Set Owner: Unique ID (uin)
 * @method string getOwnerName() Obtain Owner name.
 * @method void setOwnerName(string $OwnerName) Set Owner name.
 */
class MetaOwner extends AbstractModel
{
    /**
     * @var string Metadata name (full name): catalog.schema.table
     */
    public $FullName;

    /**
     * @var string Owner type: User
     */
    public $OwnerType;

    /**
     * @var string Owner: Unique ID (uin)
     */
    public $Owner;

    /**
     * @var string Owner name.
     */
    public $OwnerName;

    /**
     * @param string $FullName Metadata name (full name): catalog.schema.table
     * @param string $OwnerType Owner type: User
     * @param string $Owner Owner: Unique ID (uin)
     * @param string $OwnerName Owner name.
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("OwnerType",$param) and $param["OwnerType"] !== null) {
            $this->OwnerType = $param["OwnerType"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }
    }
}
