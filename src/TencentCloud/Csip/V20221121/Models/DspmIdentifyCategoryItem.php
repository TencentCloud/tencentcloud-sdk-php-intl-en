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
 * dspm data identification classification list item
 *
 * @method integer getId() Obtain <p>Category ID</p>
 * @method void setId(integer $Id) Set <p>Category ID</p>
 * @method string getName() Obtain <p>Category name</p>
 * @method void setName(string $Name) Set <p>Category name</p>
 * @method integer getType() Obtain <p>Type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method void setType(integer $Type) Set <p>Type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method array getComplianceRelations() Obtain <p>Associated identification template information</p>
 * @method void setComplianceRelations(array $ComplianceRelations) Set <p>Associated identification template information</p>
 */
class DspmIdentifyCategoryItem extends AbstractModel
{
    /**
     * @var integer <p>Category ID</p>
     */
    public $Id;

    /**
     * @var string <p>Category name</p>
     */
    public $Name;

    /**
     * @var integer <p>Type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>Associated identification template information</p>
     */
    public $ComplianceRelations;

    /**
     * @param integer $Id <p>Category ID</p>
     * @param string $Name <p>Category name</p>
     * @param integer $Type <p>Type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     * @param string $UpdateTime <p>Update time.</p>
     * @param array $ComplianceRelations <p>Associated identification template information</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ComplianceRelations",$param) and $param["ComplianceRelations"] !== null) {
            $this->ComplianceRelations = [];
            foreach ($param["ComplianceRelations"] as $key => $value){
                $obj = new DspmIdentifyRefComplianceInfo();
                $obj->deserialize($value);
                array_push($this->ComplianceRelations, $obj);
            }
        }
    }
}
