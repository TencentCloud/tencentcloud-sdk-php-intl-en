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
 * Basic information of knowledge fragment
 *
 * @method string getContent() Obtain <p>Content</p>
 * @method void setContent(string $Content) Set <p>Content</p>
 * @method string getDocId() Obtain <p>Associated document ID</p>
 * @method void setDocId(string $DocId) Set <p>Associated document ID</p>
 * @method string getDocName() Obtain <p>Document name</p>
 * @method void setDocName(string $DocName) Set <p>Document name</p>
 * @method string getKbId() Obtain <p>Knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Knowledge base ID</p>
 * @method string getKnowledgeId() Obtain <p>Knowledge ID</p>
 * @method void setKnowledgeId(string $KnowledgeId) Set <p>Knowledge ID</p>
 * @method string getQuestion() Obtain <p>Query</p>
 * @method void setQuestion(string $Question) Set <p>Query</p>
 * @method string getTitle() Obtain <p>Document title</p>
 * @method void setTitle(string $Title) Set <p>Document title</p>
 */
class KnowledgeSnippetProfile extends AbstractModel
{
    /**
     * @var string <p>Content</p>
     */
    public $Content;

    /**
     * @var string <p>Associated document ID</p>
     */
    public $DocId;

    /**
     * @var string <p>Document name</p>
     */
    public $DocName;

    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var string <p>Knowledge ID</p>
     */
    public $KnowledgeId;

    /**
     * @var string <p>Query</p>
     */
    public $Question;

    /**
     * @var string <p>Document title</p>
     */
    public $Title;

    /**
     * @param string $Content <p>Content</p>
     * @param string $DocId <p>Associated document ID</p>
     * @param string $DocName <p>Document name</p>
     * @param string $KbId <p>Knowledge base ID</p>
     * @param string $KnowledgeId <p>Knowledge ID</p>
     * @param string $Question <p>Query</p>
     * @param string $Title <p>Document title</p>
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

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KnowledgeId",$param) and $param["KnowledgeId"] !== null) {
            $this->KnowledgeId = $param["KnowledgeId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
