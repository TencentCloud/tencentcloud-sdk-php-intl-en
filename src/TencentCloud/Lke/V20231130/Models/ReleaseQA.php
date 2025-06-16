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
 * Release Q&A.
 *
 * @method string getQuestion() Obtain Question.
 * @method void setQuestion(string $Question) Set Question.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getAction() Obtain Status.
 * @method void setAction(integer $Action) Set Status.
 * @method string getActionDesc() Obtain Status description.
 * @method void setActionDesc(string $ActionDesc) Set Status description.
 * @method integer getSource() Obtain Source, 1: documentation generation; 2: batch import; 3: manual addition.
 * @method void setSource(integer $Source) Set Source, 1: documentation generation; 2: batch import; 3: manual addition.
 * @method string getSourceDesc() Obtain Source description.
 * @method void setSourceDesc(string $SourceDesc) Set Source description.
 * @method string getFileName() Obtain Filename.
 * @method void setFileName(string $FileName) Set Filename.
 * @method string getFileType() Obtain Document type.
 * @method void setFileType(string $FileType) Set Document type.
 * @method string getMessage() Obtain Reason for failure
 * @method void setMessage(string $Message) Set Reason for failure
 * @method integer getReleaseStatus() Obtain Release status.
 * @method void setReleaseStatus(integer $ReleaseStatus) Set Release status.
 * @method string getQaBizId() Obtain Q&A ID.
 * @method void setQaBizId(string $QaBizId) Set Q&A ID.
 * @method string getDocBizId() Obtain Document business ID.
 * @method void setDocBizId(string $DocBizId) Set Document business ID.
 */
class ReleaseQA extends AbstractModel
{
    /**
     * @var string Question.
     */
    public $Question;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Status.
     */
    public $Action;

    /**
     * @var string Status description.
     */
    public $ActionDesc;

    /**
     * @var integer Source, 1: documentation generation; 2: batch import; 3: manual addition.
     */
    public $Source;

    /**
     * @var string Source description.
     */
    public $SourceDesc;

    /**
     * @var string Filename.
     */
    public $FileName;

    /**
     * @var string Document type.
     */
    public $FileType;

    /**
     * @var string Reason for failure
     */
    public $Message;

    /**
     * @var integer Release status.
     */
    public $ReleaseStatus;

    /**
     * @var string Q&A ID.
     */
    public $QaBizId;

    /**
     * @var string Document business ID.
     */
    public $DocBizId;

    /**
     * @param string $Question Question.
     * @param string $UpdateTime Update time.
     * @param integer $Action Status.
     * @param string $ActionDesc Status description.
     * @param integer $Source Source, 1: documentation generation; 2: batch import; 3: manual addition.
     * @param string $SourceDesc Source description.
     * @param string $FileName Filename.
     * @param string $FileType Document type.
     * @param string $Message Reason for failure
     * @param integer $ReleaseStatus Release status.
     * @param string $QaBizId Q&A ID.
     * @param string $DocBizId Document business ID.
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }
    }
}
