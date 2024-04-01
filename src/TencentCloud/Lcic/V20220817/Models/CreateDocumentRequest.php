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
 * CreateDocument request structure.
 *
 * @method integer getSdkAppId() Obtain LCIC SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) Set LCIC SdkAppId
 * @method string getDocumentUrl() Obtain Document URL	
 * @method void setDocumentUrl(string $DocumentUrl) Set Document URL	
 * @method string getDocumentName() Obtain Document name	
 * @method void setDocumentName(string $DocumentName) Set Document name	
 * @method string getOwner() Obtain Document owner ID	
 * @method void setOwner(string $Owner) Set Document owner ID	
 * @method integer getTranscodeType() Obtain Transcoding type. Valid values: `0`: No transcoding required (default); `1`: Documents that need to be transcoded: ppt, pptx, pdf, doc, docx; `2`: Videos that need to be transcoded: mp4, 3pg, mpeg, avi, flv, wmv, rm, h264, etc.; `2`: Audio that needs to be transcoded: mp3, wav, wma, aac, flac, opus
 * @method void setTranscodeType(integer $TranscodeType) Set Transcoding type. Valid values: `0`: No transcoding required (default); `1`: Documents that need to be transcoded: ppt, pptx, pdf, doc, docx; `2`: Videos that need to be transcoded: mp4, 3pg, mpeg, avi, flv, wmv, rm, h264, etc.; `2`: Audio that needs to be transcoded: mp3, wav, wma, aac, flac, opus
 * @method integer getPermission() Obtain Permission. Valid values: `0`: Private document (default); `1`: Public document
 * @method void setPermission(integer $Permission) Set Permission. Valid values: `0`: Private document (default); `1`: Public document
 * @method string getDocumentType() Obtain Document extension
 * @method void setDocumentType(string $DocumentType) Set Document extension
 * @method integer getDocumentSize() Obtain Document size, in bytes
 * @method void setDocumentSize(integer $DocumentSize) Set Document size, in bytes
 * @method boolean getAutoHandleUnsupportedElement() Obtain Whether or not to enable automatic processing for unsupported elements. Default: off. The automatically processed elements are as follows: 1. Ink: Remove unsupported ink (e.g. WPS Ink) 2. Auto Page Turn: Remove all auto page turn settings on the PPT and set it to mouse click to turn the page 3. Corrupted Audio/Video: Remove references to corrupted audio/video on the PPT
 * @method void setAutoHandleUnsupportedElement(boolean $AutoHandleUnsupportedElement) Set Whether or not to enable automatic processing for unsupported elements. Default: off. The automatically processed elements are as follows: 1. Ink: Remove unsupported ink (e.g. WPS Ink) 2. Auto Page Turn: Remove all auto page turn settings on the PPT and set it to mouse click to turn the page 3. Corrupted Audio/Video: Remove references to corrupted audio/video on the PPT
 */
class CreateDocumentRequest extends AbstractModel
{
    /**
     * @var integer LCIC SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string Document URL	
     */
    public $DocumentUrl;

    /**
     * @var string Document name	
     */
    public $DocumentName;

    /**
     * @var string Document owner ID	
     */
    public $Owner;

    /**
     * @var integer Transcoding type. Valid values: `0`: No transcoding required (default); `1`: Documents that need to be transcoded: ppt, pptx, pdf, doc, docx; `2`: Videos that need to be transcoded: mp4, 3pg, mpeg, avi, flv, wmv, rm, h264, etc.; `2`: Audio that needs to be transcoded: mp3, wav, wma, aac, flac, opus
     */
    public $TranscodeType;

    /**
     * @var integer Permission. Valid values: `0`: Private document (default); `1`: Public document
     */
    public $Permission;

    /**
     * @var string Document extension
     */
    public $DocumentType;

    /**
     * @var integer Document size, in bytes
     */
    public $DocumentSize;

    /**
     * @var boolean Whether or not to enable automatic processing for unsupported elements. Default: off. The automatically processed elements are as follows: 1. Ink: Remove unsupported ink (e.g. WPS Ink) 2. Auto Page Turn: Remove all auto page turn settings on the PPT and set it to mouse click to turn the page 3. Corrupted Audio/Video: Remove references to corrupted audio/video on the PPT
     */
    public $AutoHandleUnsupportedElement;

    /**
     * @param integer $SdkAppId LCIC SdkAppId
     * @param string $DocumentUrl Document URL	
     * @param string $DocumentName Document name	
     * @param string $Owner Document owner ID	
     * @param integer $TranscodeType Transcoding type. Valid values: `0`: No transcoding required (default); `1`: Documents that need to be transcoded: ppt, pptx, pdf, doc, docx; `2`: Videos that need to be transcoded: mp4, 3pg, mpeg, avi, flv, wmv, rm, h264, etc.; `2`: Audio that needs to be transcoded: mp3, wav, wma, aac, flac, opus
     * @param integer $Permission Permission. Valid values: `0`: Private document (default); `1`: Public document
     * @param string $DocumentType Document extension
     * @param integer $DocumentSize Document size, in bytes
     * @param boolean $AutoHandleUnsupportedElement Whether or not to enable automatic processing for unsupported elements. Default: off. The automatically processed elements are as follows: 1. Ink: Remove unsupported ink (e.g. WPS Ink) 2. Auto Page Turn: Remove all auto page turn settings on the PPT and set it to mouse click to turn the page 3. Corrupted Audio/Video: Remove references to corrupted audio/video on the PPT
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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

        if (array_key_exists("TranscodeType",$param) and $param["TranscodeType"] !== null) {
            $this->TranscodeType = $param["TranscodeType"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("DocumentSize",$param) and $param["DocumentSize"] !== null) {
            $this->DocumentSize = $param["DocumentSize"];
        }

        if (array_key_exists("AutoHandleUnsupportedElement",$param) and $param["AutoHandleUnsupportedElement"] !== null) {
            $this->AutoHandleUnsupportedElement = $param["AutoHandleUnsupportedElement"];
        }
    }
}
