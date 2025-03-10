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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document Information.
Used by actions: DescribeDocumentsByRoom.
 *
 * @method string getDocumentId() Obtain The document ID. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocumentId(string $DocumentId) Set The document ID. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDocumentUrl() Obtain The document's original URL. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocumentUrl(string $DocumentUrl) Set The document's original URL. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDocumentName() Obtain The document title. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocumentName(string $DocumentName) Set The document title. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwner() Obtain The user ID of the document's owner. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwner(string $Owner) Set The user ID of the document's owner. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSdkAppId() Obtain The application ID. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPermission() Obtain The document access type. 0: Private; 1: Public. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermission(integer $Permission) Set The document access type. 0: Private; 1: Public. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTranscodeResult() Obtain The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeResult(string $TranscodeResult) Set The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranscodeType() Obtain The transcoding type. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeType(integer $TranscodeType) Set The transcoding type. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranscodeProgress() Obtain The transcoding progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeProgress(integer $TranscodeProgress) Set The transcoding progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranscodeState() Obtain The transcoding status. 0: The file is not transcoded. 1: The file is being transcoded. 2: Transcoding failed. 3: Transcoding is successful. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeState(integer $TranscodeState) Set The transcoding status. 0: The file is not transcoded. 1: The file is being transcoded. 2: Transcoding failed. 3: Transcoding is successful. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTranscodeInfo() Obtain The error message for failed transcoding. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranscodeInfo(string $TranscodeInfo) Set The error message for failed transcoding. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDocumentType() Obtain The document type. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocumentType(string $DocumentType) Set The document type. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDocumentSize() Obtain The document size (bytes). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocumentSize(integer $DocumentSize) Set The document size (bytes). Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpdateTime() Obtain The time (Unix timestamp) when the document was last updated. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set The time (Unix timestamp) when the document was last updated. Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPages() Obtain The number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPages(integer $Pages) Set The number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain The width. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set The width. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain The height. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set The height. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCover() Obtain The thumbnail. Only transcoded courseware has thumbnails.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCover(string $Cover) Set The thumbnail. Only transcoded courseware has thumbnails.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPreview() Obtain Document preview address
 * @method void setPreview(string $Preview) Set Document preview address
 * @method string getResolution() Obtain Document resolution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResolution(string $Resolution) Set Document resolution.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMinScaleResolution() Obtain Minimum resolution of a transcoded document, consistent with the parameters provided when the document is created.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinScaleResolution(string $MinScaleResolution) Set Minimum resolution of a transcoded document, consistent with the parameters provided when the document is created.Note: This field may return null, indicating that no valid values can be obtained.
 */
class DocumentInfo extends AbstractModel
{
    /**
     * @var string The document ID. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocumentId;

    /**
     * @var string The document's original URL. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocumentUrl;

    /**
     * @var string The document title. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocumentName;

    /**
     * @var string The user ID of the document's owner. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Owner;

    /**
     * @var integer The application ID. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SdkAppId;

    /**
     * @var integer The document access type. 0: Private; 1: Public. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Permission;

    /**
     * @var string The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeResult;

    /**
     * @var integer The transcoding type. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeType;

    /**
     * @var integer The transcoding progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeProgress;

    /**
     * @var integer The transcoding status. 0: The file is not transcoded. 1: The file is being transcoded. 2: Transcoding failed. 3: Transcoding is successful. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeState;

    /**
     * @var string The error message for failed transcoding. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranscodeInfo;

    /**
     * @var string The document type. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocumentType;

    /**
     * @var integer The document size (bytes). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DocumentSize;

    /**
     * @var integer The time (Unix timestamp) when the document was last updated. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer The number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pages;

    /**
     * @var integer The width. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer The height. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var string The thumbnail. Only transcoded courseware has thumbnails.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cover;

    /**
     * @var string Document preview address
     */
    public $Preview;

    /**
     * @var string Document resolution.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resolution;

    /**
     * @var string Minimum resolution of a transcoded document, consistent with the parameters provided when the document is created.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinScaleResolution;

    /**
     * @param string $DocumentId The document ID. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DocumentUrl The document's original URL. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DocumentName The document title. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Owner The user ID of the document's owner. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SdkAppId The application ID. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Permission The document access type. 0: Private; 1: Public. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TranscodeResult The transcoding result. If the file is not transcoded, this parameter will be empty. If it is successfully transcoded, this parameter will be the URL of the transcoded file. If transcoding fails, this parameter will indicate the error code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranscodeType The transcoding type. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranscodeProgress The transcoding progress. Value range: 0-100. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranscodeState The transcoding status. 0: The file is not transcoded. 1: The file is being transcoded. 2: Transcoding failed. 3: Transcoding is successful. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TranscodeInfo The error message for failed transcoding. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DocumentType The document type. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DocumentSize The document size (bytes). Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpdateTime The time (Unix timestamp) when the document was last updated. Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pages The number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Width The width. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Height The height. This parameter is valid only if static document transcoding is used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Cover The thumbnail. Only transcoded courseware has thumbnails.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Preview Document preview address
     * @param string $Resolution Document resolution.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MinScaleResolution Minimum resolution of a transcoded document, consistent with the parameters provided when the document is created.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }

        if (array_key_exists("DocumentUrl",$param) and $param["DocumentUrl"] !== null) {
            $this->DocumentUrl = $param["DocumentUrl"];
        }

        if (array_key_exists("DocumentName",$param) and $param["DocumentName"] !== null) {
            $this->DocumentName = $param["DocumentName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("TranscodeResult",$param) and $param["TranscodeResult"] !== null) {
            $this->TranscodeResult = $param["TranscodeResult"];
        }

        if (array_key_exists("TranscodeType",$param) and $param["TranscodeType"] !== null) {
            $this->TranscodeType = $param["TranscodeType"];
        }

        if (array_key_exists("TranscodeProgress",$param) and $param["TranscodeProgress"] !== null) {
            $this->TranscodeProgress = $param["TranscodeProgress"];
        }

        if (array_key_exists("TranscodeState",$param) and $param["TranscodeState"] !== null) {
            $this->TranscodeState = $param["TranscodeState"];
        }

        if (array_key_exists("TranscodeInfo",$param) and $param["TranscodeInfo"] !== null) {
            $this->TranscodeInfo = $param["TranscodeInfo"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("DocumentSize",$param) and $param["DocumentSize"] !== null) {
            $this->DocumentSize = $param["DocumentSize"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Cover",$param) and $param["Cover"] !== null) {
            $this->Cover = $param["Cover"];
        }

        if (array_key_exists("Preview",$param) and $param["Preview"] !== null) {
            $this->Preview = $param["Preview"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MinScaleResolution",$param) and $param["MinScaleResolution"] !== null) {
            $this->MinScaleResolution = $param["MinScaleResolution"];
        }
    }
}
