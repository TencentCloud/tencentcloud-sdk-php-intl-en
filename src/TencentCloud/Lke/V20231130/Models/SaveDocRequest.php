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
 * SaveDoc request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getFileName() Obtain File name.
 * @method void setFileName(string $FileName) Set File name.
 * @method string getFileType() Obtain File type (md|txt|docx|pdf|xlsx).
 * @method void setFileType(string $FileType) Set File type (md|txt|docx|pdf|xlsx).
 * @method string getCosUrl() Obtain The cos path of the platform, consistent with the UploadPath parameter queried by the DescribeStorageCredential api.
 * @method void setCosUrl(string $CosUrl) Set The cos path of the platform, consistent with the UploadPath parameter queried by the DescribeStorageCredential api.
 * @method string getETag() Obtain ETag, short for entity tag, is an information tag that identifies the content of an object when it is created and can be used to check whether the content of the object has changed.
 * @method void setETag(string $ETag) Set ETag, short for entity tag, is an information tag that identifies the content of an object when it is created and can be used to check whether the content of the object has changed.
 * @method string getCosHash() Obtain Verify the consistency of the uploaded file on the cloud and the local file by validating the crc64 encoding in the cos_hash x-cos-hash-crc64ecma header.<br> After the COS is successfully uploaded, obtain it from the response header.
 * @method void setCosHash(string $CosHash) Set Verify the consistency of the uploaded file on the cloud and the local file by validating the crc64 encoding in the cos_hash x-cos-hash-crc64ecma header.<br> After the COS is successfully uploaded, obtain it from the response header.
 * @method string getSize() Obtain File size.
 * @method void setSize(string $Size) Set File size.
 * @method integer getAttrRange() Obtain Applicable scope of labels: 1: all; 2: by conditional range.
 * @method void setAttrRange(integer $AttrRange) Set Applicable scope of labels: 1: all; 2: by conditional range.
 * @method integer getSource() Obtain Source (0: source file import; 1: web page import).
 * @method void setSource(integer $Source) Set Source (0: source file import; 1: web page import).
 * @method string getWebUrl() Obtain Web page (or custom link) address.
 * @method void setWebUrl(string $WebUrl) Set Web page (or custom link) address.
 * @method array getAttrLabels() Obtain Label reference.
 * @method void setAttrLabels(array $AttrLabels) Set Label reference.
 * @method integer getReferUrlType() Obtain External reference link type: 0: system link; 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
 * @method void setReferUrlType(integer $ReferUrlType) Set External reference link type: 0: system link; 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
 * @method string getExpireStart() Obtain Effective start time, unix timestamp.
 * @method void setExpireStart(string $ExpireStart) Set Effective start time, unix timestamp.
 * @method string getExpireEnd() Obtain Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method void setExpireEnd(string $ExpireEnd) Set Effective end time, unix timestamp. 0 indicates permanent validity.
 * @method boolean getIsRefer() Obtain Whether to reference a link.
 * @method void setIsRefer(boolean $IsRefer) Set Whether to reference a link.
 * @method integer getOpt() Obtain Document operation type: 1: batch import (import Q&A pairs in batches); 2: document import (normally import a single document). The default value is 1.<br>Please note that when opt = 1, please download the Excel template from the Tencent Cloud Agent Development Platform/TCADP page.
 * @method void setOpt(integer $Opt) Set Document operation type: 1: batch import (import Q&A pairs in batches); 2: document import (normally import a single document). The default value is 1.<br>Please note that when opt = 1, please download the Excel template from the Tencent Cloud Agent Development Platform/TCADP page.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 */
class SaveDocRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string File name.
     */
    public $FileName;

    /**
     * @var string File type (md|txt|docx|pdf|xlsx).
     */
    public $FileType;

    /**
     * @var string The cos path of the platform, consistent with the UploadPath parameter queried by the DescribeStorageCredential api.
     */
    public $CosUrl;

    /**
     * @var string ETag, short for entity tag, is an information tag that identifies the content of an object when it is created and can be used to check whether the content of the object has changed.
     */
    public $ETag;

    /**
     * @var string Verify the consistency of the uploaded file on the cloud and the local file by validating the crc64 encoding in the cos_hash x-cos-hash-crc64ecma header.<br> After the COS is successfully uploaded, obtain it from the response header.
     */
    public $CosHash;

    /**
     * @var string File size.
     */
    public $Size;

    /**
     * @var integer Applicable scope of labels: 1: all; 2: by conditional range.
     */
    public $AttrRange;

    /**
     * @var integer Source (0: source file import; 1: web page import).
     */
    public $Source;

    /**
     * @var string Web page (or custom link) address.
     */
    public $WebUrl;

    /**
     * @var array Label reference.
     */
    public $AttrLabels;

    /**
     * @var integer External reference link type: 0: system link; 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
     */
    public $ReferUrlType;

    /**
     * @var string Effective start time, unix timestamp.
     */
    public $ExpireStart;

    /**
     * @var string Effective end time, unix timestamp. 0 indicates permanent validity.
     */
    public $ExpireEnd;

    /**
     * @var boolean Whether to reference a link.
     */
    public $IsRefer;

    /**
     * @var integer Document operation type: 1: batch import (import Q&A pairs in batches); 2: document import (normally import a single document). The default value is 1.<br>Please note that when opt = 1, please download the Excel template from the Tencent Cloud Agent Development Platform/TCADP page.
     */
    public $Opt;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @param string $BotBizId Application ID.
     * @param string $FileName File name.
     * @param string $FileType File type (md|txt|docx|pdf|xlsx).
     * @param string $CosUrl The cos path of the platform, consistent with the UploadPath parameter queried by the DescribeStorageCredential api.
     * @param string $ETag ETag, short for entity tag, is an information tag that identifies the content of an object when it is created and can be used to check whether the content of the object has changed.
     * @param string $CosHash Verify the consistency of the uploaded file on the cloud and the local file by validating the crc64 encoding in the cos_hash x-cos-hash-crc64ecma header.<br> After the COS is successfully uploaded, obtain it from the response header.
     * @param string $Size File size.
     * @param integer $AttrRange Applicable scope of labels: 1: all; 2: by conditional range.
     * @param integer $Source Source (0: source file import; 1: web page import).
     * @param string $WebUrl Web page (or custom link) address.
     * @param array $AttrLabels Label reference.
     * @param integer $ReferUrlType External reference link type: 0: system link; 1: custom link.
When the value is 1, the weburl field cannot be empty; otherwise, it will not take effect.
     * @param string $ExpireStart Effective start time, unix timestamp.
     * @param string $ExpireEnd Effective end time, unix timestamp. 0 indicates permanent validity.
     * @param boolean $IsRefer Whether to reference a link.
     * @param integer $Opt Document operation type: 1: batch import (import Q&A pairs in batches); 2: document import (normally import a single document). The default value is 1.<br>Please note that when opt = 1, please download the Excel template from the Tencent Cloud Agent Development Platform/TCADP page.
     * @param string $CateBizId Category ID.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
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

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("CosHash",$param) and $param["CosHash"] !== null) {
            $this->CosHash = $param["CosHash"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("Opt",$param) and $param["Opt"] !== null) {
            $this->Opt = $param["Opt"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }
    }
}
