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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on Number of Host-associated Core File Rules
 *
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method integer getCount() Obtain Number of Association Rules
 * @method void setCount(integer $Count) Set Number of Association Rules
 * @method string getName() Obtain Name of the Association Rule (Show Only One of Them)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name of the Association Rule (Show Only One of Them)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FileTamperRuleCount extends AbstractModel
{
    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var integer Number of Association Rules
     */
    public $Count;

    /**
     * @var string Name of the Association Rule (Show Only One of Them)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @param string $Uuid Host UUID
     * @param integer $Count Number of Association Rules
     * @param string $Name Name of the Association Rule (Show Only One of Them)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
