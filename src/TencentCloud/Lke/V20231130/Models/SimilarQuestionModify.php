<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Similar question modification (update) information.
 *
 * @method array getAddQuestions() Obtain List of similar questions (content) to be added.
 * @method void setAddQuestions(array $AddQuestions) Set List of similar questions (content) to be added.
 * @method array getUpdateQuestions() Obtain List of similar questions to be updated.
 * @method void setUpdateQuestions(array $UpdateQuestions) Set List of similar questions to be updated.
 * @method array getDeleteQuestions() Obtain List of similar questions to be deleted.
 * @method void setDeleteQuestions(array $DeleteQuestions) Set List of similar questions to be deleted.
 */
class SimilarQuestionModify extends AbstractModel
{
    /**
     * @var array List of similar questions (content) to be added.
     */
    public $AddQuestions;

    /**
     * @var array List of similar questions to be updated.
     */
    public $UpdateQuestions;

    /**
     * @var array List of similar questions to be deleted.
     */
    public $DeleteQuestions;

    /**
     * @param array $AddQuestions List of similar questions (content) to be added.
     * @param array $UpdateQuestions List of similar questions to be updated.
     * @param array $DeleteQuestions List of similar questions to be deleted.
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
        if (array_key_exists("AddQuestions",$param) and $param["AddQuestions"] !== null) {
            $this->AddQuestions = $param["AddQuestions"];
        }

        if (array_key_exists("UpdateQuestions",$param) and $param["UpdateQuestions"] !== null) {
            $this->UpdateQuestions = [];
            foreach ($param["UpdateQuestions"] as $key => $value){
                $obj = new SimilarQuestion();
                $obj->deserialize($value);
                array_push($this->UpdateQuestions, $obj);
            }
        }

        if (array_key_exists("DeleteQuestions",$param) and $param["DeleteQuestions"] !== null) {
            $this->DeleteQuestions = [];
            foreach ($param["DeleteQuestions"] as $key => $value){
                $obj = new SimilarQuestion();
                $obj->deserialize($value);
                array_push($this->DeleteQuestions, $obj);
            }
        }
    }
}
