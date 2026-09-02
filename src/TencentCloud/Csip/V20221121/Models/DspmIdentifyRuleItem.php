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
 * dspm categorized and classified data item list item
 *
 * @method integer getId() Obtain <p>Data item id</p>
 * @method void setId(integer $Id) Set <p>Data item id</p>
 * @method string getName() Obtain <p>Data item name.</p>
 * @method void setName(string $Name) Set <p>Data item name.</p>
 * @method string getDescription() Obtain <p>Data item description.</p>
 * @method void setDescription(string $Description) Set <p>Data item description.</p>
 * @method integer getStatus() Obtain <p>Whether to enable the data item</p><p>Enumeration values:</p><ul><li>0: No</li><li>1: Yes</li></ul>
 * @method void setStatus(integer $Status) Set <p>Whether to enable the data item</p><p>Enumeration values:</p><ul><li>0: No</li><li>1: Yes</li></ul>
 * @method integer getType() Obtain <p>Data item type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method void setType(integer $Type) Set <p>Data item type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method boolean getStructuredStatus() Obtain <p>Structure rule configuration status</p>
 * @method void setStructuredStatus(boolean $StructuredStatus) Set <p>Structure rule configuration status</p>
 * @method boolean getUnStructuredStatus() Obtain <p>Unstructured rule configuration status</p>
 * @method void setUnStructuredStatus(boolean $UnStructuredStatus) Set <p>Unstructured rule configuration status</p>
 * @method array getComplianceRelations() Obtain <p>Associated identification template information</p>
 * @method void setComplianceRelations(array $ComplianceRelations) Set <p>Associated identification template information</p>
 */
class DspmIdentifyRuleItem extends AbstractModel
{
    /**
     * @var integer <p>Data item id</p>
     */
    public $Id;

    /**
     * @var string <p>Data item name.</p>
     */
    public $Name;

    /**
     * @var string <p>Data item description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Whether to enable the data item</p><p>Enumeration values:</p><ul><li>0: No</li><li>1: Yes</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Data item type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>Structure rule configuration status</p>
     */
    public $StructuredStatus;

    /**
     * @var boolean <p>Unstructured rule configuration status</p>
     */
    public $UnStructuredStatus;

    /**
     * @var array <p>Associated identification template information</p>
     */
    public $ComplianceRelations;

    /**
     * @param integer $Id <p>Data item id</p>
     * @param string $Name <p>Data item name.</p>
     * @param string $Description <p>Data item description.</p>
     * @param integer $Status <p>Whether to enable the data item</p><p>Enumeration values:</p><ul><li>0: No</li><li>1: Yes</li></ul>
     * @param integer $Type <p>Data item type</p><p>Enumeration values:</p><ul><li>0: Built-in</li><li>1: Custom</li></ul>
     * @param string $UpdateTime <p>Update time.</p>
     * @param boolean $StructuredStatus <p>Structure rule configuration status</p>
     * @param boolean $UnStructuredStatus <p>Unstructured rule configuration status</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StructuredStatus",$param) and $param["StructuredStatus"] !== null) {
            $this->StructuredStatus = $param["StructuredStatus"];
        }

        if (array_key_exists("UnStructuredStatus",$param) and $param["UnStructuredStatus"] !== null) {
            $this->UnStructuredStatus = $param["UnStructuredStatus"];
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
