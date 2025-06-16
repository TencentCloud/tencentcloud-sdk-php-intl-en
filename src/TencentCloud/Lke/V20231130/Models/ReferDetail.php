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
 * Reference source details.
 *
 * @method string getReferBizId() Obtain Reference ID.
 * @method void setReferBizId(string $ReferBizId) Set Reference ID.
 * @method integer getDocType() Obtain Document type (1: Q&A; 2: document paragraph).
 * @method void setDocType(integer $DocType) Set Document type (1: Q&A; 2: document paragraph).
 * @method string getDocName() Obtain Document name.
 * @method void setDocName(string $DocName) Set Document name.
 * @method string getPageContent() Obtain Fragment content.
 * @method void setPageContent(string $PageContent) Set Fragment content.
 * @method string getQuestion() Obtain Question.
 * @method void setQuestion(string $Question) Set Question.
 * @method string getAnswer() Obtain Answer.
 * @method void setAnswer(string $Answer) Set Answer.
 * @method float getConfidence() Obtain Confidence.
 * @method void setConfidence(float $Confidence) Set Confidence.
 * @method integer getMark() Obtain Mark.
 * @method void setMark(integer $Mark) Set Mark.
 * @method array getHighlights() Obtain Fragment highlight content.
 * @method void setHighlights(array $Highlights) Set Fragment highlight content.
 * @method string getOrgData() Obtain Original content.
 * @method void setOrgData(string $OrgData) Set Original content.
 * @method array getPageInfos() Obtain Page number information.
 * @method void setPageInfos(array $PageInfos) Set Page number information.
 * @method array getSheetInfos() Obtain Sheet information.
 * @method void setSheetInfos(array $SheetInfos) Set Sheet information.
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 */
class ReferDetail extends AbstractModel
{
    /**
     * @var string Reference ID.
     */
    public $ReferBizId;

    /**
     * @var integer Document type (1: Q&A; 2: document paragraph).
     */
    public $DocType;

    /**
     * @var string Document name.
     */
    public $DocName;

    /**
     * @var string Fragment content.
     */
    public $PageContent;

    /**
     * @var string Question.
     */
    public $Question;

    /**
     * @var string Answer.
     */
    public $Answer;

    /**
     * @var float Confidence.
     */
    public $Confidence;

    /**
     * @var integer Mark.
     */
    public $Mark;

    /**
     * @var array Fragment highlight content.
     */
    public $Highlights;

    /**
     * @var string Original content.
     */
    public $OrgData;

    /**
     * @var array Page number information.
     */
    public $PageInfos;

    /**
     * @var array Sheet information.
     */
    public $SheetInfos;

    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @param string $ReferBizId Reference ID.
     * @param integer $DocType Document type (1: Q&A; 2: document paragraph).
     * @param string $DocName Document name.
     * @param string $PageContent Fragment content.
     * @param string $Question Question.
     * @param string $Answer Answer.
     * @param float $Confidence Confidence.
     * @param integer $Mark Mark.
     * @param array $Highlights Fragment highlight content.
     * @param string $OrgData Original content.
     * @param array $PageInfos Page number information.
     * @param array $SheetInfos Sheet information.
     * @param string $DocBizId Document ID.
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
        if (array_key_exists("ReferBizId",$param) and $param["ReferBizId"] !== null) {
            $this->ReferBizId = $param["ReferBizId"];
        }

        if (array_key_exists("DocType",$param) and $param["DocType"] !== null) {
            $this->DocType = $param["DocType"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("PageContent",$param) and $param["PageContent"] !== null) {
            $this->PageContent = $param["PageContent"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("Highlights",$param) and $param["Highlights"] !== null) {
            $this->Highlights = [];
            foreach ($param["Highlights"] as $key => $value){
                $obj = new Highlight();
                $obj->deserialize($value);
                array_push($this->Highlights, $obj);
            }
        }

        if (array_key_exists("OrgData",$param) and $param["OrgData"] !== null) {
            $this->OrgData = $param["OrgData"];
        }

        if (array_key_exists("PageInfos",$param) and $param["PageInfos"] !== null) {
            $this->PageInfos = $param["PageInfos"];
        }

        if (array_key_exists("SheetInfos",$param) and $param["SheetInfos"] !== null) {
            $this->SheetInfos = $param["SheetInfos"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }
    }
}
