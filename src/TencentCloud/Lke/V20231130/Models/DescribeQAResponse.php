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
 * DescribeQA response structure.
 *
 * @method string getQaBizId() Obtain Q&A business ID.

 * @method void setQaBizId(string $QaBizId) Set Q&A business ID.

 * @method string getQuestion() Obtain Question.

 * @method void setQuestion(string $Question) Set Question.

 * @method string getAnswer() Obtain Answer.

 * @method void setAnswer(string $Answer) Set Answer.

 * @method string getCustomParam() Obtain Custom parameter.
 * @method void setCustomParam(string $CustomParam) Set Custom parameter.
 * @method integer getSource() Obtain Source:
1 - Q&A pairs generated from documents.
2 - Q&A pairs imported in batches.
3 - Q&A pairs input manually one by one.


 * @method void setSource(integer $Source) Set Source:
1 - Q&A pairs generated from documents.
2 - Q&A pairs imported in batches.
3 - Q&A pairs input manually one by one.


 * @method string getSourceDesc() Obtain Source description.

 * @method void setSourceDesc(string $SourceDesc) Set Source description.

 * @method string getUpdateTime() Obtain Update time.


 * @method void setUpdateTime(string $UpdateTime) Set Update time.


 * @method integer getStatus() Obtain Status<br>1 - pending verification; 2 - not released; 3 - releasing; 4 - released; 5 - release failed; 6 - not approved; 7 - under review; 8 - review failed, 9 - review failed, pending manual review after appeal; 11 - review failed, manual review not passed after appeal; 12 - expired; 13 - excessive invalid; 14 - excessive invalid recovered; 19 - learning; 20 - learning failed.


 * @method void setStatus(integer $Status) Set Status<br>1 - pending verification; 2 - not released; 3 - releasing; 4 - released; 5 - release failed; 6 - not approved; 7 - under review; 8 - review failed, 9 - review failed, pending manual review after appeal; 11 - review failed, manual review not passed after appeal; 12 - expired; 13 - excessive invalid; 14 - excessive invalid recovered; 19 - learning; 20 - learning failed.


 * @method string getStatusDesc() Obtain Status description.


 * @method void setStatusDesc(string $StatusDesc) Set Status description.


 * @method string getCateBizId() Obtain Category ID.

 * @method void setCateBizId(string $CateBizId) Set Category ID.

 * @method boolean getIsAllowAccept() Obtain Whether verification is allowed.

 * @method void setIsAllowAccept(boolean $IsAllowAccept) Set Whether verification is allowed.

 * @method boolean getIsAllowDelete() Obtain Whether deletion is allowed.

 * @method void setIsAllowDelete(boolean $IsAllowDelete) Set Whether deletion is allowed.

 * @method boolean getIsAllowEdit() Obtain Whether editing is allowed.

 * @method void setIsAllowEdit(boolean $IsAllowEdit) Set Whether editing is allowed.

 * @method string getDocBizId() Obtain Document ID.

 * @method void setDocBizId(string $DocBizId) Set Document ID.

 * @method string getFileName() Obtain Document name.

 * @method void setFileName(string $FileName) Set Document name.

 * @method string getFileType() Obtain Document type.

 * @method void setFileType(string $FileType) Set Document type.

 * @method string getSegmentBizId() Obtain Segment ID.

 * @method void setSegmentBizId(string $SegmentBizId) Set Segment ID.

 * @method string getPageContent() Obtain Segment content.
 * @method void setPageContent(string $PageContent) Set Segment content.
 * @method array getHighlights() Obtain Segment highlight content.
 * @method void setHighlights(array $Highlights) Set Segment highlight content.
 * @method string getOrgData() Obtain Segment content.

 * @method void setOrgData(string $OrgData) Set Segment content.

 * @method integer getAttrRange() Obtain Applicable scope of label.
 * @method void setAttrRange(integer $AttrRange) Set Applicable scope of label.
 * @method array getAttrLabels() Obtain Label.
 * @method void setAttrLabels(array $AttrLabels) Set Label.
 * @method string getExpireStart() Obtain Effective start time, unix timestamp.
 * @method void setExpireStart(string $ExpireStart) Set Effective start time, unix timestamp.
 * @method string getExpireEnd() Obtain Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method void setExpireEnd(string $ExpireEnd) Set Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method array getSimilarQuestions() Obtain Similar question list information.
 * @method void setSimilarQuestions(array $SimilarQuestions) Set Similar question list information.
 * @method integer getQaAuditStatus() Obtain Review status of Q&A text: 1 - review failed.
 * @method void setQaAuditStatus(integer $QaAuditStatus) Set Review status of Q&A text: 1 - review failed.
 * @method integer getPicAuditStatus() Obtain Review status of image in Q&A: 1-review failed.
 * @method void setPicAuditStatus(integer $PicAuditStatus) Set Review status of image in Q&A: 1-review failed.
 * @method integer getVideoAuditStatus() Obtain Review status of video in Q&A: 1 - review failed.
 * @method void setVideoAuditStatus(integer $VideoAuditStatus) Set Review status of video in Q&A: 1 - review failed.
 * @method string getQuestionDesc() Obtain Question description.
 * @method void setQuestionDesc(string $QuestionDesc) Set Question description.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeQAResponse extends AbstractModel
{
    /**
     * @var string Q&A business ID.

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
     * @var string Custom parameter.
     */
    public $CustomParam;

    /**
     * @var integer Source:
1 - Q&A pairs generated from documents.
2 - Q&A pairs imported in batches.
3 - Q&A pairs input manually one by one.


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
     * @var integer Status<br>1 - pending verification; 2 - not released; 3 - releasing; 4 - released; 5 - release failed; 6 - not approved; 7 - under review; 8 - review failed, 9 - review failed, pending manual review after appeal; 11 - review failed, manual review not passed after appeal; 12 - expired; 13 - excessive invalid; 14 - excessive invalid recovered; 19 - learning; 20 - learning failed.


     */
    public $Status;

    /**
     * @var string Status description.


     */
    public $StatusDesc;

    /**
     * @var string Category ID.

     */
    public $CateBizId;

    /**
     * @var boolean Whether verification is allowed.

     */
    public $IsAllowAccept;

    /**
     * @var boolean Whether deletion is allowed.

     */
    public $IsAllowDelete;

    /**
     * @var boolean Whether editing is allowed.

     */
    public $IsAllowEdit;

    /**
     * @var string Document ID.

     */
    public $DocBizId;

    /**
     * @var string Document name.

     */
    public $FileName;

    /**
     * @var string Document type.

     */
    public $FileType;

    /**
     * @var string Segment ID.

     */
    public $SegmentBizId;

    /**
     * @var string Segment content.
     */
    public $PageContent;

    /**
     * @var array Segment highlight content.
     */
    public $Highlights;

    /**
     * @var string Segment content.

     */
    public $OrgData;

    /**
     * @var integer Applicable scope of label.
     */
    public $AttrRange;

    /**
     * @var array Label.
     */
    public $AttrLabels;

    /**
     * @var string Effective start time, unix timestamp.
     */
    public $ExpireStart;

    /**
     * @var string Effective end time, unix timestamp. 0 indicates permanent validity.
     */
    public $ExpireEnd;

    /**
     * @var array Similar question list information.
     */
    public $SimilarQuestions;

    /**
     * @var integer Review status of Q&A text: 1 - review failed.
     */
    public $QaAuditStatus;

    /**
     * @var integer Review status of image in Q&A: 1-review failed.
     */
    public $PicAuditStatus;

    /**
     * @var integer Review status of video in Q&A: 1 - review failed.
     */
    public $VideoAuditStatus;

    /**
     * @var string Question description.
     */
    public $QuestionDesc;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $QaBizId Q&A business ID.

     * @param string $Question Question.

     * @param string $Answer Answer.

     * @param string $CustomParam Custom parameter.
     * @param integer $Source Source:
1 - Q&A pairs generated from documents.
2 - Q&A pairs imported in batches.
3 - Q&A pairs input manually one by one.


     * @param string $SourceDesc Source description.

     * @param string $UpdateTime Update time.


     * @param integer $Status Status<br>1 - pending verification; 2 - not released; 3 - releasing; 4 - released; 5 - release failed; 6 - not approved; 7 - under review; 8 - review failed, 9 - review failed, pending manual review after appeal; 11 - review failed, manual review not passed after appeal; 12 - expired; 13 - excessive invalid; 14 - excessive invalid recovered; 19 - learning; 20 - learning failed.


     * @param string $StatusDesc Status description.


     * @param string $CateBizId Category ID.

     * @param boolean $IsAllowAccept Whether verification is allowed.

     * @param boolean $IsAllowDelete Whether deletion is allowed.

     * @param boolean $IsAllowEdit Whether editing is allowed.

     * @param string $DocBizId Document ID.

     * @param string $FileName Document name.

     * @param string $FileType Document type.

     * @param string $SegmentBizId Segment ID.

     * @param string $PageContent Segment content.
     * @param array $Highlights Segment highlight content.
     * @param string $OrgData Segment content.

     * @param integer $AttrRange Applicable scope of label.
     * @param array $AttrLabels Label.
     * @param string $ExpireStart Effective start time, unix timestamp.
     * @param string $ExpireEnd Effective end time, unix timestamp. 0 indicates permanent validity.
     * @param array $SimilarQuestions Similar question list information.
     * @param integer $QaAuditStatus Review status of Q&A text: 1 - review failed.
     * @param integer $PicAuditStatus Review status of image in Q&A: 1-review failed.
     * @param integer $VideoAuditStatus Review status of video in Q&A: 1 - review failed.
     * @param string $QuestionDesc Question description.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("CustomParam",$param) and $param["CustomParam"] !== null) {
            $this->CustomParam = $param["CustomParam"];
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

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("IsAllowAccept",$param) and $param["IsAllowAccept"] !== null) {
            $this->IsAllowAccept = $param["IsAllowAccept"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("SegmentBizId",$param) and $param["SegmentBizId"] !== null) {
            $this->SegmentBizId = $param["SegmentBizId"];
        }

        if (array_key_exists("PageContent",$param) and $param["PageContent"] !== null) {
            $this->PageContent = $param["PageContent"];
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

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("SimilarQuestions",$param) and $param["SimilarQuestions"] !== null) {
            $this->SimilarQuestions = [];
            foreach ($param["SimilarQuestions"] as $key => $value){
                $obj = new SimilarQuestion();
                $obj->deserialize($value);
                array_push($this->SimilarQuestions, $obj);
            }
        }

        if (array_key_exists("QaAuditStatus",$param) and $param["QaAuditStatus"] !== null) {
            $this->QaAuditStatus = $param["QaAuditStatus"];
        }

        if (array_key_exists("PicAuditStatus",$param) and $param["PicAuditStatus"] !== null) {
            $this->PicAuditStatus = $param["PicAuditStatus"];
        }

        if (array_key_exists("VideoAuditStatus",$param) and $param["VideoAuditStatus"] !== null) {
            $this->VideoAuditStatus = $param["VideoAuditStatus"];
        }

        if (array_key_exists("QuestionDesc",$param) and $param["QuestionDesc"] !== null) {
            $this->QuestionDesc = $param["QuestionDesc"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
