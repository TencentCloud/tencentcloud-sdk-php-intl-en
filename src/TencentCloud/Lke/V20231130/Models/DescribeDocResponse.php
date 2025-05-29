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
 * DescribeDoc response structure.
 *
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method string getFileName() Obtain File name.
 * @method void setFileName(string $FileName) Set File name.
 * @method string getFileType() Obtain File type.
 * @method void setFileType(string $FileType) Set File type.
 * @method string getCosUrl() Obtain COS path.
 * @method void setCosUrl(string $CosUrl) Set COS path.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getStatus() Obtain Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
 * @method void setStatus(integer $Status) Set Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
 * @method string getStatusDesc() Obtain Document status description.
 * @method void setStatusDesc(string $StatusDesc) Set Document status description.
 * @method string getReason() Obtain Reason for generation failure.
 * @method void setReason(string $Reason) Set Reason for generation failure.
 * @method boolean getIsRefer() Obtain Whether to refer in the answer.
 * @method void setIsRefer(boolean $IsRefer) Set Whether to refer in the answer.
 * @method integer getQaNum() Obtain Number of Q&A pairs.
 * @method void setQaNum(integer $QaNum) Set Number of Q&A pairs.
 * @method boolean getIsDeleted() Obtain Whether to delete.
 * @method void setIsDeleted(boolean $IsDeleted) Set Whether to delete.
 * @method integer getSource() Obtain Document source.
 * @method void setSource(integer $Source) Set Document source.
 * @method string getSourceDesc() Obtain Document source description.
 * @method void setSourceDesc(string $SourceDesc) Set Document source description.
 * @method boolean getIsAllowRestart() Obtain Whether regeneration is allowed.
 * @method void setIsAllowRestart(boolean $IsAllowRestart) Set Whether regeneration is allowed.
 * @method boolean getIsDeletedQa() Obtain Whether Q&A has been deleted.
 * @method void setIsDeletedQa(boolean $IsDeletedQa) Set Whether Q&A has been deleted.
 * @method boolean getIsCreatingQa() Obtain Whether Q&A is being generated.
 * @method void setIsCreatingQa(boolean $IsCreatingQa) Set Whether Q&A is being generated.
 * @method boolean getIsAllowDelete() Obtain Whether deletion is allowed.
 * @method void setIsAllowDelete(boolean $IsAllowDelete) Set Whether deletion is allowed.
 * @method boolean getIsAllowRefer() Obtain Whether to allow operation reference switch.
 * @method void setIsAllowRefer(boolean $IsAllowRefer) Set Whether to allow operation reference switch.
 * @method boolean getIsCreatedQa() Obtain Whether Q&A has been generated.
 * @method void setIsCreatedQa(boolean $IsCreatedQa) Set Whether Q&A has been generated.
 * @method string getDocCharSize() Obtain Document character count.
 * @method void setDocCharSize(string $DocCharSize) Set Document character count.
 * @method boolean getIsAllowEdit() Obtain Whether editing is allowed.
 * @method void setIsAllowEdit(boolean $IsAllowEdit) Set Whether editing is allowed.
 * @method integer getAttrRange() Obtain Applicable scope of labels 1: all, 2: by condition range.
 * @method void setAttrRange(integer $AttrRange) Set Applicable scope of labels 1: all, 2: by condition range.
 * @method array getAttrLabels() Obtain Label.
 * @method void setAttrLabels(array $AttrLabels) Set Label.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDocResponse extends AbstractModel
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
     * @var integer Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
     */
    public $Status;

    /**
     * @var string Document status description.
     */
    public $StatusDesc;

    /**
     * @var string Reason for generation failure.
     */
    public $Reason;

    /**
     * @var boolean Whether to refer in the answer.
     */
    public $IsRefer;

    /**
     * @var integer Number of Q&A pairs.
     */
    public $QaNum;

    /**
     * @var boolean Whether to delete.
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
     * @var boolean Whether Q&A has been deleted.
     */
    public $IsDeletedQa;

    /**
     * @var boolean Whether Q&A is being generated.
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
     * @var boolean Whether editing is allowed.
     */
    public $IsAllowEdit;

    /**
     * @var integer Applicable scope of labels 1: all, 2: by condition range.
     */
    public $AttrRange;

    /**
     * @var array Label.
     */
    public $AttrLabels;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $DocBizId Document ID.
     * @param string $FileName File name.
     * @param string $FileType File type.
     * @param string $CosUrl COS path.
     * @param string $UpdateTime Update time.
     * @param integer $Status Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
     * @param string $StatusDesc Document status description.
     * @param string $Reason Reason for generation failure.
     * @param boolean $IsRefer Whether to refer in the answer.
     * @param integer $QaNum Number of Q&A pairs.
     * @param boolean $IsDeleted Whether to delete.
     * @param integer $Source Document source.
     * @param string $SourceDesc Document source description.
     * @param boolean $IsAllowRestart Whether regeneration is allowed.
     * @param boolean $IsDeletedQa Whether Q&A has been deleted.
     * @param boolean $IsCreatingQa Whether Q&A is being generated.
     * @param boolean $IsAllowDelete Whether deletion is allowed.
     * @param boolean $IsAllowRefer Whether to allow operation reference switch.
     * @param boolean $IsCreatedQa Whether Q&A has been generated.
     * @param string $DocCharSize Document character count.
     * @param boolean $IsAllowEdit Whether editing is allowed.
     * @param integer $AttrRange Applicable scope of labels 1: all, 2: by condition range.
     * @param array $AttrLabels Label.
     * @param string $CateBizId Category ID.
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
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

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
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

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
