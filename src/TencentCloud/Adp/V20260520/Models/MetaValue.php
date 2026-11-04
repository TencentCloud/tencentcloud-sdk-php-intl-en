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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metadata value
 *
 * @method string getName() Obtain <p>Metadata value name (for display only).</p>
 * @method void setName(string $Name) Set <p>Metadata value name (for display only).</p>
 * @method boolean getRefAll() Obtain <p>Whether to refer to all values of this type (when true, ref_value_id should be 0)</p>
 * @method void setRefAll(boolean $RefAll) Set <p>Whether to refer to all values of this type (when true, ref_value_id should be 0)</p>
 * @method string getRefValueId() Obtain <p>Business ID referenced by metadata (property ID, category ID, etc.); this field should be 0 when ref_all=true</p>
 * @method void setRefValueId(string $RefValueId) Set <p>Business ID referenced by metadata (property ID, category ID, etc.); this field should be 0 when ref_all=true</p>
 * @method integer getScene() Obtain <p>Metadata usage scenario: 1=retrieve only, 2=both retrieve and generate<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_SCENE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_SCENE_SEARCH_ONLY</td><td>1</td><td>Retrieve only</td></tr><tr><td>META_SCENE_ALL</td><td>2</td><td>Both retrieve and generate</td></tr></tbody></table></p>
 * @method void setScene(integer $Scene) Set <p>Metadata usage scenario: 1=retrieve only, 2=both retrieve and generate<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_SCENE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_SCENE_SEARCH_ONLY</td><td>1</td><td>Retrieve only</td></tr><tr><td>META_SCENE_ALL</td><td>2</td><td>Both retrieve and generate</td></tr></tbody></table></p>
 * @method integer getValueType() Obtain <p>Metadata value type: 1=property tag, 2=document classification, 3=QA classification<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_VALUE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_VALUE_TYPE_TAG</td><td>1</td><td>Property tag</td></tr><tr><td>META_VALUE_TYPE_DOC_CATEGORY</td><td>2</td><td>Document classification</td></tr><tr><td>META_VALUE_TYPE_QA_CATEGORY</td><td>3</td><td>QA classification</td></tr></tbody></table></p>
 * @method void setValueType(integer $ValueType) Set <p>Metadata value type: 1=property tag, 2=document classification, 3=QA classification<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_VALUE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_VALUE_TYPE_TAG</td><td>1</td><td>Property tag</td></tr><tr><td>META_VALUE_TYPE_DOC_CATEGORY</td><td>2</td><td>Document classification</td></tr><tr><td>META_VALUE_TYPE_QA_CATEGORY</td><td>3</td><td>QA classification</td></tr></tbody></table></p>
 */
class MetaValue extends AbstractModel
{
    /**
     * @var string <p>Metadata value name (for display only).</p>
     */
    public $Name;

    /**
     * @var boolean <p>Whether to refer to all values of this type (when true, ref_value_id should be 0)</p>
     */
    public $RefAll;

    /**
     * @var string <p>Business ID referenced by metadata (property ID, category ID, etc.); this field should be 0 when ref_all=true</p>
     */
    public $RefValueId;

    /**
     * @var integer <p>Metadata usage scenario: 1=retrieve only, 2=both retrieve and generate<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_SCENE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_SCENE_SEARCH_ONLY</td><td>1</td><td>Retrieve only</td></tr><tr><td>META_SCENE_ALL</td><td>2</td><td>Both retrieve and generate</td></tr></tbody></table></p>
     */
    public $Scene;

    /**
     * @var integer <p>Metadata value type: 1=property tag, 2=document classification, 3=QA classification<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_VALUE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_VALUE_TYPE_TAG</td><td>1</td><td>Property tag</td></tr><tr><td>META_VALUE_TYPE_DOC_CATEGORY</td><td>2</td><td>Document classification</td></tr><tr><td>META_VALUE_TYPE_QA_CATEGORY</td><td>3</td><td>QA classification</td></tr></tbody></table></p>
     */
    public $ValueType;

    /**
     * @param string $Name <p>Metadata value name (for display only).</p>
     * @param boolean $RefAll <p>Whether to refer to all values of this type (when true, ref_value_id should be 0)</p>
     * @param string $RefValueId <p>Business ID referenced by metadata (property ID, category ID, etc.); this field should be 0 when ref_all=true</p>
     * @param integer $Scene <p>Metadata usage scenario: 1=retrieve only, 2=both retrieve and generate<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_SCENE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_SCENE_SEARCH_ONLY</td><td>1</td><td>Retrieve only</td></tr><tr><td>META_SCENE_ALL</td><td>2</td><td>Both retrieve and generate</td></tr></tbody></table></p>
     * @param integer $ValueType <p>Metadata value type: 1=property tag, 2=document classification, 3=QA classification<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>META_VALUE_TYPE_UNKNOWN</td><td>0</td><td>Unknown</td></tr><tr><td>META_VALUE_TYPE_TAG</td><td>1</td><td>Property tag</td></tr><tr><td>META_VALUE_TYPE_DOC_CATEGORY</td><td>2</td><td>Document classification</td></tr><tr><td>META_VALUE_TYPE_QA_CATEGORY</td><td>3</td><td>QA classification</td></tr></tbody></table></p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RefAll",$param) and $param["RefAll"] !== null) {
            $this->RefAll = $param["RefAll"];
        }

        if (array_key_exists("RefValueId",$param) and $param["RefValueId"] !== null) {
            $this->RefValueId = $param["RefValueId"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
