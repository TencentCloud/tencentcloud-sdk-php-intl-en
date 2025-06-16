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
 * Description of document list details.
 *
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method string getFileName() Obtain File name.
 * @method void setFileName(string $FileName) Set File name.
 * @method string getNewName() Obtain The new document name after renaming. This name remains until the document is published after the renaming submission.
 * @method void setNewName(string $NewName) Set The new document name after renaming. This name remains until the document is published after the renaming submission.
 * @method string getFileType() Obtain File type.
 * @method void setFileType(string $FileType) Set File type.
 * @method string getCosUrl() Obtain COS path.
 * @method void setCosUrl(string $CosUrl) Set COS path.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getStatus() Obtain Document status.
 * @method void setStatus(integer $Status) Set Document status.
 * @method string getStatusDesc() Obtain Document status description.
 * @method void setStatusDesc(string $StatusDesc) Set Document status description.
 * @method string getReason() Obtain Reason.
 * @method void setReason(string $Reason) Set Reason.
 * @method boolean getIsRefer() Obtain Whether to refer to an answer.
 * @method void setIsRefer(boolean $IsRefer) Set Whether to refer to an answer.
 * @method integer getQaNum() Obtain Quantity of Q&A pairs.
 * @method void setQaNum(integer $QaNum) Set Quantity of Q&A pairs.
 * @method boolean getIsDeleted() Obtain Whether it has been deleted.
 * @method void setIsDeleted(boolean $IsDeleted) Set Whether it has been deleted.
 * @method integer getSource() Obtain Document source.
 * @method void setSource(integer $Source) Set Document source.
 * @method string getSourceDesc() Obtain Document source description.
 * @method void setSourceDesc(string $SourceDesc) Set Document source description.
 * @method boolean getIsAllowRestart() Obtain Whether regeneration is allowed.
 * @method void setIsAllowRestart(boolean $IsAllowRestart) Set Whether regeneration is allowed.
 * @method boolean getIsDeletedQa() Obtain Whether the Q&A has been deleted.
 * @method void setIsDeletedQa(boolean $IsDeletedQa) Set Whether the Q&A has been deleted.
 * @method boolean getIsCreatingQa() Obtain Whether the Q&A is being generated.
 * @method void setIsCreatingQa(boolean $IsCreatingQa) Set Whether the Q&A is being generated.
 * @method boolean getIsAllowDelete() Obtain Whether deletion is allowed.
 * @method void setIsAllowDelete(boolean $IsAllowDelete) Set Whether deletion is allowed.
 * @method boolean getIsAllowRefer() Obtain Whether to allow operation reference switch.
 * @method void setIsAllowRefer(boolean $IsAllowRefer) Set Whether to allow operation reference switch.
 * @method boolean getIsCreatedQa() Obtain Whether Q&A has been generated.
 * @method void setIsCreatedQa(boolean $IsCreatedQa) Set Whether Q&A has been generated.
 * @method string getDocCharSize() Obtain Document character count.
 * @method void setDocCharSize(string $DocCharSize) Set Document character count.
 * @method integer getAttrRange() Obtain Applicable range of attribute label.
 * @method void setAttrRange(integer $AttrRange) Set Applicable range of attribute label.
 * @method array getAttrLabels() Obtain Attribute label.
 * @method void setAttrLabels(array $AttrLabels) Set Attribute label.
 * @method boolean getIsAllowEdit() Obtain Whether editing is allowed.
 * @method void setIsAllowEdit(boolean $IsAllowEdit) Set Whether editing is allowed.
 * @method integer getReferUrlType() Obtain External reference URL type, 0: system URL; 1: custom URL.
When the value is 1, the WebUrl field cannot be empty; otherwise, it will not take effect.
 * @method void setReferUrlType(integer $ReferUrlType) Set External reference URL type, 0: system URL; 1: custom URL.
When the value is 1, the WebUrl field cannot be empty; otherwise, it will not take effect.
 * @method string getWebUrl() Obtain Web page URL (or custom URL) .
 * @method void setWebUrl(string $WebUrl) Set Web page URL (or custom URL) .
 * @method string getExpireStart() Obtain Effective start time, unix timestamp.
 * @method void setExpireStart(string $ExpireStart) Set Effective start time, unix timestamp.
 * @method string getExpireEnd() Obtain Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method void setExpireEnd(string $ExpireEnd) Set Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method boolean getIsAllowRetry() Obtain Whether retries are allowed, 0: no, 1: yes.
 * @method void setIsAllowRetry(boolean $IsAllowRetry) Set Whether retries are allowed, 0: no, 1: yes.
 * @method array getProcessing() Obtain 0: document comparison processing; 1: Q&A generation from document.
 * @method void setProcessing(array $Processing) Set 0: document comparison processing; 1: Q&A generation from document.
 * @method string getCreateTime() Obtain Time when the document was created and stored into the database.
 * @method void setCreateTime(string $CreateTime) Set Time when the document was created and stored into the database.
 * @method string getCateBizId() Obtain ID of the document's category.
 * @method void setCateBizId(string $CateBizId) Set ID of the document's category.
 * @method string getCustomerKnowledgeId() Obtain User-defined ID of the document.
 * @method void setCustomerKnowledgeId(string $CustomerKnowledgeId) Set User-defined ID of the document.
 * @method array getAttributeFlags() Obtain Attribute label of the document. 0: Do not perform external user permission verification.
 * @method void setAttributeFlags(array $AttributeFlags) Set Attribute label of the document. 0: Do not perform external user permission verification.
 */
class ListDocItem extends AbstractModel
{
    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @var string File name.
     */
    public $FileName;

    /**
     * @var string The new document name after renaming. This name remains until the document is published after the renaming submission.
     */
    public $NewName;

    /**
     * @var string File type.
     */
    public $FileType;

    /**
     * @var string COS path.
     */
    public $CosUrl;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Document status.
     */
    public $Status;

    /**
     * @var string Document status description.
     */
    public $StatusDesc;

    /**
     * @var string Reason.
     */
    public $Reason;

    /**
     * @var boolean Whether to refer to an answer.
     */
    public $IsRefer;

    /**
     * @var integer Quantity of Q&A pairs.
     */
    public $QaNum;

    /**
     * @var boolean Whether it has been deleted.
     */
    public $IsDeleted;

    /**
     * @var integer Document source.
     */
    public $Source;

    /**
     * @var string Document source description.
     */
    public $SourceDesc;

    /**
     * @var boolean Whether regeneration is allowed.
     */
    public $IsAllowRestart;

    /**
     * @var boolean Whether the Q&A has been deleted.
     */
    public $IsDeletedQa;

    /**
     * @var boolean Whether the Q&A is being generated.
     */
    public $IsCreatingQa;

    /**
     * @var boolean Whether deletion is allowed.
     */
    public $IsAllowDelete;

    /**
     * @var boolean Whether to allow operation reference switch.
     */
    public $IsAllowRefer;

    /**
     * @var boolean Whether Q&A has been generated.
     */
    public $IsCreatedQa;

    /**
     * @var string Document character count.
     */
    public $DocCharSize;

    /**
     * @var integer Applicable range of attribute label.
     */
    public $AttrRange;

    /**
     * @var array Attribute label.
     */
    public $AttrLabels;

    /**
     * @var boolean Whether editing is allowed.
     */
    public $IsAllowEdit;

    /**
     * @var integer External reference URL type, 0: system URL; 1: custom URL.
When the value is 1, the WebUrl field cannot be empty; otherwise, it will not take effect.
     */
    public $ReferUrlType;

    /**
     * @var string Web page URL (or custom URL) .
     */
    public $WebUrl;

    /**
     * @var string Effective start time, unix timestamp.
     */
    public $ExpireStart;

    /**
     * @var string Effective end time, unix timestamp. 0 indicates permanent validity.
     */
    public $ExpireEnd;

    /**
     * @var boolean Whether retries are allowed, 0: no, 1: yes.
     */
    public $IsAllowRetry;

    /**
     * @var array 0: document comparison processing; 1: Q&A generation from document.
     */
    public $Processing;

    /**
     * @var string Time when the document was created and stored into the database.
     */
    public $CreateTime;

    /**
     * @var string ID of the document's category.
     */
    public $CateBizId;

    /**
     * @var string User-defined ID of the document.
     */
    public $CustomerKnowledgeId;

    /**
     * @var array Attribute label of the document. 0: Do not perform external user permission verification.
     */
    public $AttributeFlags;

    /**
     * @param string $DocBizId Document ID.
     * @param string $FileName File name.
     * @param string $NewName The new document name after renaming. This name remains until the document is published after the renaming submission.
     * @param string $FileType File type.
     * @param string $CosUrl COS path.
     * @param string $UpdateTime Update time.
     * @param integer $Status Document status.
     * @param string $StatusDesc Document status description.
     * @param string $Reason Reason.
     * @param boolean $IsRefer Whether to refer to an answer.
     * @param integer $QaNum Quantity of Q&A pairs.
     * @param boolean $IsDeleted Whether it has been deleted.
     * @param integer $Source Document source.
     * @param string $SourceDesc Document source description.
     * @param boolean $IsAllowRestart Whether regeneration is allowed.
     * @param boolean $IsDeletedQa Whether the Q&A has been deleted.
     * @param boolean $IsCreatingQa Whether the Q&A is being generated.
     * @param boolean $IsAllowDelete Whether deletion is allowed.
     * @param boolean $IsAllowRefer Whether to allow operation reference switch.
     * @param boolean $IsCreatedQa Whether Q&A has been generated.
     * @param string $DocCharSize Document character count.
     * @param integer $AttrRange Applicable range of attribute label.
     * @param array $AttrLabels Attribute label.
     * @param boolean $IsAllowEdit Whether editing is allowed.
     * @param integer $ReferUrlType External reference URL type, 0: system URL; 1: custom URL.
When the value is 1, the WebUrl field cannot be empty; otherwise, it will not take effect.
     * @param string $WebUrl Web page URL (or custom URL) .
     * @param string $ExpireStart Effective start time, unix timestamp.
     * @param string $ExpireEnd Effective end time, unix timestamp. 0 indicates permanent validity.
     * @param boolean $IsAllowRetry Whether retries are allowed, 0: no, 1: yes.
     * @param array $Processing 0: document comparison processing; 1: Q&A generation from document.
     * @param string $CreateTime Time when the document was created and stored into the database.
     * @param string $CateBizId ID of the document's category.
     * @param string $CustomerKnowledgeId User-defined ID of the document.
     * @param array $AttributeFlags Attribute label of the document. 0: Do not perform external user permission verification.
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("QaNum",$param) and $param["QaNum"] !== null) {
            $this->QaNum = $param["QaNum"];
        }

        if (array_key_exists("IsDeleted",$param) and $param["IsDeleted"] !== null) {
            $this->IsDeleted = $param["IsDeleted"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("IsAllowRestart",$param) and $param["IsAllowRestart"] !== null) {
            $this->IsAllowRestart = $param["IsAllowRestart"];
        }

        if (array_key_exists("IsDeletedQa",$param) and $param["IsDeletedQa"] !== null) {
            $this->IsDeletedQa = $param["IsDeletedQa"];
        }

        if (array_key_exists("IsCreatingQa",$param) and $param["IsCreatingQa"] !== null) {
            $this->IsCreatingQa = $param["IsCreatingQa"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }

        if (array_key_exists("IsAllowRefer",$param) and $param["IsAllowRefer"] !== null) {
            $this->IsAllowRefer = $param["IsAllowRefer"];
        }

        if (array_key_exists("IsCreatedQa",$param) and $param["IsCreatedQa"] !== null) {
            $this->IsCreatedQa = $param["IsCreatedQa"];
        }

        if (array_key_exists("DocCharSize",$param) and $param["DocCharSize"] !== null) {
            $this->DocCharSize = $param["DocCharSize"];
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

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("IsAllowRetry",$param) and $param["IsAllowRetry"] !== null) {
            $this->IsAllowRetry = $param["IsAllowRetry"];
        }

        if (array_key_exists("Processing",$param) and $param["Processing"] !== null) {
            $this->Processing = $param["Processing"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("CustomerKnowledgeId",$param) and $param["CustomerKnowledgeId"] !== null) {
            $this->CustomerKnowledgeId = $param["CustomerKnowledgeId"];
        }

        if (array_key_exists("AttributeFlags",$param) and $param["AttributeFlags"] !== null) {
            $this->AttributeFlags = $param["AttributeFlags"];
        }
    }
}
