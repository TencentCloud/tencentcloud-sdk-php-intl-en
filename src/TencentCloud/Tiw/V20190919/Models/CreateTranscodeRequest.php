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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTranscode request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the customer
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the customer
 * @method string getUrl() Obtain Address of the file for transcoding
 * @method void setUrl(string $Url) Set Address of the file for transcoding
 * @method boolean getIsStaticPPT() Obtain Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
 * @method void setIsStaticPPT(boolean $IsStaticPPT) Set Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
 * @method string getMinResolution() Obtain Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

 
 * @method void setMinResolution(string $MinResolution) Set Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

 
 * @method string getThumbnailResolution() Obtain Resolution of the thumbnail generated for the dynamically transcoded PowerPoint file. If no value or null is specified for it or the resolution format is invalid, no thumbnail will be generated. The resolution format is the same as that of MinResolution.

For static transcoding, this parameter does not work.
 * @method void setThumbnailResolution(string $ThumbnailResolution) Set Resolution of the thumbnail generated for the dynamically transcoded PowerPoint file. If no value or null is specified for it or the resolution format is invalid, no thumbnail will be generated. The resolution format is the same as that of MinResolution.

For static transcoding, this parameter does not work.
 * @method string getCompressFileType() Obtain Compression format of the transcoded file. If no value or null is specified for it or the specified format is invalid, no compression file will be generated. Currently, the following compression formats are supported:

`zip`: generates a .zip compression package.
`tar.gz: generates a .tar.gz compression package.
 * @method void setCompressFileType(string $CompressFileType) Set Compression format of the transcoded file. If no value or null is specified for it or the specified format is invalid, no compression file will be generated. Currently, the following compression formats are supported:

`zip`: generates a .zip compression package.
`tar.gz: generates a .tar.gz compression package.
 */
class CreateTranscodeRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the customer
     */
    public $SdkAppId;

    /**
     * @var string Address of the file for transcoding
     */
    public $Url;

    /**
     * @var boolean Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
     */
    public $IsStaticPPT;

    /**
     * @var string Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

 
     */
    public $MinResolution;

    /**
     * @var string Resolution of the thumbnail generated for the dynamically transcoded PowerPoint file. If no value or null is specified for it or the resolution format is invalid, no thumbnail will be generated. The resolution format is the same as that of MinResolution.

For static transcoding, this parameter does not work.
     */
    public $ThumbnailResolution;

    /**
     * @var string Compression format of the transcoded file. If no value or null is specified for it or the specified format is invalid, no compression file will be generated. Currently, the following compression formats are supported:

`zip`: generates a .zip compression package.
`tar.gz: generates a .tar.gz compression package.
     */
    public $CompressFileType;

    /**
     * @param integer $SdkAppId SdkAppId of the customer
     * @param string $Url Address of the file for transcoding
     * @param boolean $IsStaticPPT Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
     * @param string $MinResolution Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

 
     * @param string $ThumbnailResolution Resolution of the thumbnail generated for the dynamically transcoded PowerPoint file. If no value or null is specified for it or the resolution format is invalid, no thumbnail will be generated. The resolution format is the same as that of MinResolution.

For static transcoding, this parameter does not work.
     * @param string $CompressFileType Compression format of the transcoded file. If no value or null is specified for it or the specified format is invalid, no compression file will be generated. Currently, the following compression formats are supported:

`zip`: generates a .zip compression package.
`tar.gz: generates a .tar.gz compression package.
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("IsStaticPPT",$param) and $param["IsStaticPPT"] !== null) {
            $this->IsStaticPPT = $param["IsStaticPPT"];
        }

        if (array_key_exists("MinResolution",$param) and $param["MinResolution"] !== null) {
            $this->MinResolution = $param["MinResolution"];
        }

        if (array_key_exists("ThumbnailResolution",$param) and $param["ThumbnailResolution"] !== null) {
            $this->ThumbnailResolution = $param["ThumbnailResolution"];
        }

        if (array_key_exists("CompressFileType",$param) and $param["CompressFileType"] !== null) {
            $this->CompressFileType = $param["CompressFileType"];
        }
    }
}
