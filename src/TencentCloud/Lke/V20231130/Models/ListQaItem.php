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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Q&A details data.
 *
 * @method string getQaBizId() Obtain Q&A ID.
 * @method void setQaBizId(string $QaBizId) Set Q&A ID.
 * @method string getQuestion() Obtain Question.
 * @method void setQuestion(string $Question) Set Question.
 * @method string getAnswer() Obtain Answer.
 * @method void setAnswer(string $Answer) Set Answer.
 * @method integer getSource() Obtain Source.
 * @method void setSource(integer $Source) Set Source.
 * @method string getSourceDesc() Obtain Source description.
 * @method void setSourceDesc(string $SourceDesc) Set Source description.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method string getStatusDesc() Obtain Status description.
 * @method void setStatusDesc(string $StatusDesc) Set Status description.
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method boolean getIsAllowEdit() Obtain Whether editing is allowed.
 * @method void setIsAllowEdit(boolean $IsAllowEdit) Set Whether editing is allowed.
 * @method boolean getIsAllowDelete() Obtain Whether deletion is allowed.
 * @method void setIsAllowDelete(boolean $IsAllowDelete) Set Whether deletion is allowed.
 * @method boolean getIsAllowAccept() Obtain Whether verification is allowed.
 * @method void setIsAllowAccept(boolean $IsAllowAccept) Set Whether verification is allowed.
 * @method string getFileName() Obtain Document name.
 * @method void setFileName(string $FileName) Set Document name.
 * @method string getFileType() Obtain Document type.
 * @method void setFileType(string $FileType) Set Document type.
 * @method string getQaCharSize() Obtain Number of Q&A characters.
 * @method void setQaCharSize(string $QaCharSize) Set Number of Q&A characters.
 * @method string getExpireStart() Obtain Effective start time, unix timestamp.
 * @method void setExpireStart(string $ExpireStart) Set Effective start time, unix timestamp.
 * @method string getExpireEnd() Obtain Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method void setExpireEnd(string $ExpireEnd) Set Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method integer getAttrRange() Obtain Applicable range of attribute label, 1: all, 2: by conditions.
 * @method void setAttrRange(integer $AttrRange) Set Applicable range of attribute label, 1: all, 2: by conditions.
 * @method array getAttrLabels() Obtain Attribute label.
 * @method void setAttrLabels(array $AttrLabels) Set Attribute label.
 * @method integer getSimilarQuestionNum() Obtain Count of similar questions.
 * @method void setSimilarQuestionNum(integer $SimilarQuestionNum) Set Count of similar questions.
 * @method string getSimilarQuestionTips() Obtain Return similar questions associated with the Q&A and perform linked search. Only one similar question will be displayed.
 * @method void setSimilarQuestionTips(string $SimilarQuestionTips) Set Return similar questions associated with the Q&A and perform linked search. Only one similar question will be displayed.
 */
class ListQaItem extends AbstractModel
{
    /**
     * @var string Q&A ID.
     */
    public $QaBizId;

    /**
     * @var string Question.
     */
    public $Question;

    /**
     * @var string Answer.
     */
    public $Answer;

    /**
     * @var integer Source.
     */
    public $Source;

    /**
     * @var string Source description.
     */
    public $SourceDesc;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var string Status description.
     */
    public $StatusDesc;

    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var boolean Whether editing is allowed.
     */
    public $IsAllowEdit;

    /**
     * @var boolean Whether deletion is allowed.
     */
    public $IsAllowDelete;

    /**
     * @var boolean Whether verification is allowed.
     */
    public $IsAllowAccept;

    /**
     * @var string Document name.
     */
    public $FileName;

    /**
     * @var string Document type.
     */
    public $FileType;

    /**
     * @var string Number of Q&A characters.
     */
    public $QaCharSize;

    /**
     * @var string Effective start time, unix timestamp.
     */
    public $ExpireStart;

    /**
     * @var string Effective end time, unix timestamp. 0 indicates permanent validity.
     */
    public $ExpireEnd;

    /**
     * @var integer Applicable range of attribute label, 1: all, 2: by conditions.
     */
    public $AttrRange;

    /**
     * @var array Attribute label.
     */
    public $AttrLabels;

    /**
     * @var integer Count of similar questions.
     */
    public $SimilarQuestionNum;

    /**
     * @var string Return similar questions associated with the Q&A and perform linked search. Only one similar question will be displayed.
     */
    public $SimilarQuestionTips;

    /**
     * @param string $QaBizId Q&A ID.
     * @param string $Question Question.
     * @param string $Answer Answer.
     * @param integer $Source Source.
     * @param string $SourceDesc Source description.
     * @param string $UpdateTime Update time.
     * @param integer $Status Status.
     * @param string $StatusDesc Status description.
     * @param string $DocBizId Document ID.
     * @param string $CreateTime Creation time.
     * @param boolean $IsAllowEdit Whether editing is allowed.
     * @param boolean $IsAllowDelete Whether deletion is allowed.
     * @param boolean $IsAllowAccept Whether verification is allowed.
     * @param string $FileName Document name.
     * @param string $FileType Document type.
     * @param string $QaCharSize Number of Q&A characters.
     * @param string $ExpireStart Effective start time, unix timestamp.
     * @param string $ExpireEnd Effective end time, unix timestamp. 0 indicates permanent validity.
     * @param integer $AttrRange Applicable range of attribute label, 1: all, 2: by conditions.
     * @param array $AttrLabels Attribute label.
     * @param integer $SimilarQuestionNum Count of similar questions.
     * @param string $SimilarQuestionTips Return similar questions associated with the Q&A and perform linked search. Only one similar question will be displayed.
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
        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }

        if (array_key_exists("IsAllowAccept",$param) and $param["IsAllowAccept"] !== null) {
            $this->IsAllowAccept = $param["IsAllowAccept"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("QaCharSize",$param) and $param["QaCharSize"] !== null) {
            $this->QaCharSize = $param["QaCharSize"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabel();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("SimilarQuestionNum",$param) and $param["SimilarQuestionNum"] !== null) {
            $this->SimilarQuestionNum = $param["SimilarQuestionNum"];
        }

        if (array_key_exists("SimilarQuestionTips",$param) and $param["SimilarQuestionTips"] !== null) {
            $this->SimilarQuestionTips = $param["SimilarQuestionTips"];
        }
    }
}
