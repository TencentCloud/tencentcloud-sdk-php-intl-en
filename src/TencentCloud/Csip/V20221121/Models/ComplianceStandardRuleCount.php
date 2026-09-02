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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud resource configuration detection standard associated check items
 *
 * @method integer getID() Obtain <p>Standard ID</p>
 * @method void setID(integer $ID) Set <p>Standard ID</p>
 * @method string getName() Obtain <p>Specification name</p>
 * @method void setName(string $Name) Set <p>Specification name</p>
 * @method integer getCount() Obtain <p>Number of associated check items</p>
 * @method void setCount(integer $Count) Set <p>Number of associated check items</p>
 */
class ComplianceStandardRuleCount extends AbstractModel
{
    /**
     * @var integer <p>Standard ID</p>
     */
    public $ID;

    /**
     * @var string <p>Specification name</p>
     */
    public $Name;

    /**
     * @var integer <p>Number of associated check items</p>
     */
    public $Count;

    /**
     * @param integer $ID <p>Standard ID</p>
     * @param string $Name <p>Specification name</p>
     * @param integer $Count <p>Number of associated check items</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
