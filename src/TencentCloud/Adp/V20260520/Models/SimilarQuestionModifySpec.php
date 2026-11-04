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
 * Modified items of similar questions in a QA
 *
 * @method string getContent() Obtain <p>Content of the similar question (required for CREATE and UPDATE)</p>
 * @method void setContent(string $Content) Set <p>Content of the similar question (required for CREATE and UPDATE)</p>
 * @method integer getModifyAction() Obtain <p>Operation type: 1=create, 2=modify, 3=delete<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>Create</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>Modify</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
 * @method void setModifyAction(integer $ModifyAction) Set <p>Operation type: 1=create, 2=modify, 3=delete<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>Create</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>Modify</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
 * @method string getSimilarQuestionId() Obtain <p>Similar question ID (required for UPDATE and DELETE)</p>
 * @method void setSimilarQuestionId(string $SimilarQuestionId) Set <p>Similar question ID (required for UPDATE and DELETE)</p>
 */
class SimilarQuestionModifySpec extends AbstractModel
{
    /**
     * @var string <p>Content of the similar question (required for CREATE and UPDATE)</p>
     */
    public $Content;

    /**
     * @var integer <p>Operation type: 1=create, 2=modify, 3=delete<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>Create</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>Modify</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
     */
    public $ModifyAction;

    /**
     * @var string <p>Similar question ID (required for UPDATE and DELETE)</p>
     */
    public $SimilarQuestionId;

    /**
     * @param string $Content <p>Content of the similar question (required for CREATE and UPDATE)</p>
     * @param integer $ModifyAction <p>Operation type: 1=create, 2=modify, 3=delete<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODIFY_ACTION_UNKNOWN</td><td>0</td><td></td></tr><tr><td>MODIFY_ACTION_CREATE</td><td>1</td><td>Create</td></tr><tr><td>MODIFY_ACTION_UPDATE</td><td>2</td><td>Modify</td></tr><tr><td>MODIFY_ACTION_DELETE</td><td>3</td><td>Delete</td></tr></tbody></table></p>
     * @param string $SimilarQuestionId <p>Similar question ID (required for UPDATE and DELETE)</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ModifyAction",$param) and $param["ModifyAction"] !== null) {
            $this->ModifyAction = $param["ModifyAction"];
        }

        if (array_key_exists("SimilarQuestionId",$param) and $param["SimilarQuestionId"] !== null) {
            $this->SimilarQuestionId = $param["SimilarQuestionId"];
        }
    }
}
