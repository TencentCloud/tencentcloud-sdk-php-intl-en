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
 * ModifyCategory request structure.
 *
 * @method string getCategoryId() Obtain <p>Category ID to be modified (must be greater than 0)</p>
 * @method void setCategoryId(string $CategoryId) Set <p>Category ID to be modified (must be greater than 0)</p>
 * @method integer getCategoryType() Obtain <p>Classification type (not allowed to be 0. Value: 1=document classification, 2=QA classification)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>Document classification</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>QA classification</td></tr></tbody></table></p>
 * @method void setCategoryType(integer $CategoryType) Set <p>Classification type (not allowed to be 0. Value: 1=document classification, 2=QA classification)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>Document classification</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>QA classification</td></tr></tbody></table></p>
 * @method CategoryModifyFields getFields() Obtain <p>Modify field content (required, used in conjunction with update_mask)</p>
 * @method void setFields(CategoryModifyFields $Fields) Set <p>Modify field content (required, used in conjunction with update_mask)</p>
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method FieldMask getUpdateMask() Obtain <p>Field mask: specifies the field to modify (supported Paths: Name)</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Field mask: specifies the field to modify (supported Paths: Name)</p>
 */
class ModifyCategoryRequest extends AbstractModel
{
    /**
     * @var string <p>Category ID to be modified (must be greater than 0)</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>Classification type (not allowed to be 0. Value: 1=document classification, 2=QA classification)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>Document classification</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>QA classification</td></tr></tbody></table></p>
     */
    public $CategoryType;

    /**
     * @var CategoryModifyFields <p>Modify field content (required, used in conjunction with update_mask)</p>
     */
    public $Fields;

    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var FieldMask <p>Field mask: specifies the field to modify (supported Paths: Name)</p>
     */
    public $UpdateMask;

    /**
     * @param string $CategoryId <p>Category ID to be modified (must be greater than 0)</p>
     * @param integer $CategoryType <p>Classification type (not allowed to be 0. Value: 1=document classification, 2=QA classification)<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>Document classification</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>QA classification</td></tr></tbody></table></p>
     * @param CategoryModifyFields $Fields <p>Modify field content (required, used in conjunction with update_mask)</p>
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param FieldMask $UpdateMask <p>Field mask: specifies the field to modify (supported Paths: Name)</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new CategoryModifyFields();
            $this->Fields->deserialize($param["Fields"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
