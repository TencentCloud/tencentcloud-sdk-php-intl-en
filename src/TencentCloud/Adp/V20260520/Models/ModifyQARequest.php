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
 * ModifyQA request structure.
 *
 * @method QAModifyFields getFields() Obtain <p>Modify field content (used in conjunction with update_mask)</p>
 * @method void setFields(QAModifyFields $Fields) Set <p>Modify field content (used in conjunction with update_mask)</p>
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method string getQaId() Obtain <p>QA ID</p>
 * @method void setQaId(string $QaId) Set <p>QA ID</p>
 * @method FieldMask getUpdateMask() Obtain <p>Field mask: specifies the fields to be modified (supported Paths: Question, Answer, CategoryId, DocId, LabelRefList, QuestionDescription, ExpirationPolicy, SimilarQuestionList, EffectiveDomain, IsAccepted)</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) Set <p>Field mask: specifies the fields to be modified (supported Paths: Question, Answer, CategoryId, DocId, LabelRefList, QuestionDescription, ExpirationPolicy, SimilarQuestionList, EffectiveDomain, IsAccepted)</p>
 */
class ModifyQARequest extends AbstractModel
{
    /**
     * @var QAModifyFields <p>Modify field content (used in conjunction with update_mask)</p>
     */
    public $Fields;

    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var string <p>QA ID</p>
     */
    public $QaId;

    /**
     * @var FieldMask <p>Field mask: specifies the fields to be modified (supported Paths: Question, Answer, CategoryId, DocId, LabelRefList, QuestionDescription, ExpirationPolicy, SimilarQuestionList, EffectiveDomain, IsAccepted)</p>
     */
    public $UpdateMask;

    /**
     * @param QAModifyFields $Fields <p>Modify field content (used in conjunction with update_mask)</p>
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param string $QaId <p>QA ID</p>
     * @param FieldMask $UpdateMask <p>Field mask: specifies the fields to be modified (supported Paths: Question, Answer, CategoryId, DocId, LabelRefList, QuestionDescription, ExpirationPolicy, SimilarQuestionList, EffectiveDomain, IsAccepted)</p>
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
        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new QAModifyFields();
            $this->Fields->deserialize($param["Fields"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("QaId",$param) and $param["QaId"] !== null) {
            $this->QaId = $param["QaId"];
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
