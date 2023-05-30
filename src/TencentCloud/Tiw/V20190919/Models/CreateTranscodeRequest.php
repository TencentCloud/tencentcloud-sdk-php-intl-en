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
 * @method string getUrl() Obtain URL of the transcoded document after URL encoding. URL encoding converts characters into a format that can be transmitted over the Internet. For example, URL encoding can convert the document URL http://example.com/Test.pdf into http://example.com/%E6%B5%8B%E8%AF%95.pdf. To improve the success rate of URL parsing, use URL encoding.
 * @method void setUrl(string $Url) Set URL of the transcoded document after URL encoding. URL encoding converts characters into a format that can be transmitted over the Internet. For example, URL encoding can convert the document URL http://example.com/Test.pdf into http://example.com/%E6%B5%8B%E8%AF%95.pdf. To improve the success rate of URL parsing, use URL encoding.
 * @method boolean getIsStaticPPT() Obtain Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
 * @method void setIsStaticPPT(boolean $IsStaticPPT) Set Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
 * @method string getMinResolution() Obtain Note: This parameter is disused. Use the MinScaleResolution parameter to pass in a resolution. For more information, see [CreateTranscode](https://intl.cloud.tencent.com/document/api/1137/40060?from_cn_redirect=1#SDK).

Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

Example: 1280x720. Note that the character between the numbers is the letter x.
 * @method void setMinResolution(string $MinResolution) Set Note: This parameter is disused. Use the MinScaleResolution parameter to pass in a resolution. For more information, see [CreateTranscode](https://intl.cloud.tencent.com/document/api/1137/40060?from_cn_redirect=1#SDK).

Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

Example: 1280x720. Note that the character between the numbers is the letter x.
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
 * @method string getExtraData() Obtain Internal parameter.
 * @method void setExtraData(string $ExtraData) Set Internal parameter.
 * @method string getPriority() Obtain Document transcoding priority. This parameter takes effect only for PowerPoint dynamic transcoding. Valid values:<br/>
- low: Low transcoding priority. The task can transcode at most 500 MB of data or a 2000-page document, with a download timeout no longer than 10 minutes. Due to resource limits, these tasks may have to queue for a long period of time. Consider this before you use this feature.
- null: Normal transcoding priority. The task can transcode at most 200 MB of data or a 500-page document, with a download timeout no longer than 2 minutes.
<br/>
Note: For static transcoding such as PDF transcoding, each task can transcode at most 200 MB of data regardless of the transcoding priority.
 * @method void setPriority(string $Priority) Set Document transcoding priority. This parameter takes effect only for PowerPoint dynamic transcoding. Valid values:<br/>
- low: Low transcoding priority. The task can transcode at most 500 MB of data or a 2000-page document, with a download timeout no longer than 10 minutes. Due to resource limits, these tasks may have to queue for a long period of time. Consider this before you use this feature.
- null: Normal transcoding priority. The task can transcode at most 200 MB of data or a 500-page document, with a download timeout no longer than 2 minutes.
<br/>
Note: For static transcoding such as PDF transcoding, each task can transcode at most 200 MB of data regardless of the transcoding priority.
 * @method string getMinScaleResolution() Obtain Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.
Higher resolution brings clearer visual effect, but also means larger size of the transcoded image resources and longer loading time of the transcoded file. Set this parameter appropriately based on your actual scenario.

Example: 1280x720. Note that the character between the numbers is the letter x.
 * @method void setMinScaleResolution(string $MinScaleResolution) Set Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.
Higher resolution brings clearer visual effect, but also means larger size of the transcoded image resources and longer loading time of the transcoded file. Set this parameter appropriately based on your actual scenario.

Example: 1280x720. Note that the character between the numbers is the letter x.
 * @method boolean getAutoHandleUnsupportedElement() Obtain Specifies whether to enable auto handling of unsupported elements. By default, this feature is disabled.

If auto handling is enabled, the following processes are performed:
1. Inkblots: Remove unsupported inkblots, such as those drawn by using WPS.
2. Auto page flip: Clear the auto page clip settings in the PowerPoint file and set the page flip mode to mouse click.
3. Corrupted audio/videos: Remove the references to corrupted audio/videos in the PowerPoint file.
 * @method void setAutoHandleUnsupportedElement(boolean $AutoHandleUnsupportedElement) Set Specifies whether to enable auto handling of unsupported elements. By default, this feature is disabled.

If auto handling is enabled, the following processes are performed:
1. Inkblots: Remove unsupported inkblots, such as those drawn by using WPS.
2. Auto page flip: Clear the auto page clip settings in the PowerPoint file and set the page flip mode to mouse click.
3. Corrupted audio/videos: Remove the references to corrupted audio/videos in the PowerPoint file.
 */
class CreateTranscodeRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the customer
     */
    public $SdkAppId;

    /**
     * @var string URL of the transcoded document after URL encoding. URL encoding converts characters into a format that can be transmitted over the Internet. For example, URL encoding can convert the document URL http://example.com/Test.pdf into http://example.com/%E6%B5%8B%E8%AF%95.pdf. To improve the success rate of URL parsing, use URL encoding.
     */
    public $Url;

    /**
     * @var boolean Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
     */
    public $IsStaticPPT;

    /**
     * @var string Note: This parameter is disused. Use the MinScaleResolution parameter to pass in a resolution. For more information, see [CreateTranscode](https://intl.cloud.tencent.com/document/api/1137/40060?from_cn_redirect=1#SDK).

Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

Example: 1280x720. Note that the character between the numbers is the letter x.
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
     * @var string Internal parameter.
     */
    public $ExtraData;

    /**
     * @var string Document transcoding priority. This parameter takes effect only for PowerPoint dynamic transcoding. Valid values:<br/>
- low: Low transcoding priority. The task can transcode at most 500 MB of data or a 2000-page document, with a download timeout no longer than 10 minutes. Due to resource limits, these tasks may have to queue for a long period of time. Consider this before you use this feature.
- null: Normal transcoding priority. The task can transcode at most 200 MB of data or a 500-page document, with a download timeout no longer than 2 minutes.
<br/>
Note: For static transcoding such as PDF transcoding, each task can transcode at most 200 MB of data regardless of the transcoding priority.
     */
    public $Priority;

    /**
     * @var string Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.
Higher resolution brings clearer visual effect, but also means larger size of the transcoded image resources and longer loading time of the transcoded file. Set this parameter appropriately based on your actual scenario.

Example: 1280x720. Note that the character between the numbers is the letter x.
     */
    public $MinScaleResolution;

    /**
     * @var boolean Specifies whether to enable auto handling of unsupported elements. By default, this feature is disabled.

If auto handling is enabled, the following processes are performed:
1. Inkblots: Remove unsupported inkblots, such as those drawn by using WPS.
2. Auto page flip: Clear the auto page clip settings in the PowerPoint file and set the page flip mode to mouse click.
3. Corrupted audio/videos: Remove the references to corrupted audio/videos in the PowerPoint file.
     */
    public $AutoHandleUnsupportedElement;

    /**
     * @param integer $SdkAppId SdkAppId of the customer
     * @param string $Url URL of the transcoded document after URL encoding. URL encoding converts characters into a format that can be transmitted over the Internet. For example, URL encoding can convert the document URL http://example.com/Test.pdf into http://example.com/%E6%B5%8B%E8%AF%95.pdf. To improve the success rate of URL parsing, use URL encoding.
     * @param boolean $IsStaticPPT Whether the PowerPoint file is static. The default value is False.
If IsStaticPPT is False, documents with the .ppt or .pptx extension will be dynamically transcoded to HTML5 pages, and documents with other extensions will be statically transcoded to images. If IsStaticPPT is True, documents with any extensions will be statically transcoded to images.
     * @param string $MinResolution Note: This parameter is disused. Use the MinScaleResolution parameter to pass in a resolution. For more information, see [CreateTranscode](https://intl.cloud.tencent.com/document/api/1137/40060?from_cn_redirect=1#SDK).

Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.

Example: 1280x720. Note that the character between the numbers is the letter x.
     * @param string $ThumbnailResolution Resolution of the thumbnail generated for the dynamically transcoded PowerPoint file. If no value or null is specified for it or the resolution format is invalid, no thumbnail will be generated. The resolution format is the same as that of MinResolution.

For static transcoding, this parameter does not work.
     * @param string $CompressFileType Compression format of the transcoded file. If no value or null is specified for it or the specified format is invalid, no compression file will be generated. Currently, the following compression formats are supported:

`zip`: generates a .zip compression package.
`tar.gz: generates a .tar.gz compression package.
     * @param string $ExtraData Internal parameter.
     * @param string $Priority Document transcoding priority. This parameter takes effect only for PowerPoint dynamic transcoding. Valid values:<br/>
- low: Low transcoding priority. The task can transcode at most 500 MB of data or a 2000-page document, with a download timeout no longer than 10 minutes. Due to resource limits, these tasks may have to queue for a long period of time. Consider this before you use this feature.
- null: Normal transcoding priority. The task can transcode at most 200 MB of data or a 500-page document, with a download timeout no longer than 2 minutes.
<br/>
Note: For static transcoding such as PDF transcoding, each task can transcode at most 200 MB of data regardless of the transcoding priority.
     * @param string $MinScaleResolution Minimum resolution of the transcoded document. If no value or null is specified for it or the resolution format is invalid, the original document resolution is used.
Higher resolution brings clearer visual effect, but also means larger size of the transcoded image resources and longer loading time of the transcoded file. Set this parameter appropriately based on your actual scenario.

Example: 1280x720. Note that the character between the numbers is the letter x.
     * @param boolean $AutoHandleUnsupportedElement Specifies whether to enable auto handling of unsupported elements. By default, this feature is disabled.

If auto handling is enabled, the following processes are performed:
1. Inkblots: Remove unsupported inkblots, such as those drawn by using WPS.
2. Auto page flip: Clear the auto page clip settings in the PowerPoint file and set the page flip mode to mouse click.
3. Corrupted audio/videos: Remove the references to corrupted audio/videos in the PowerPoint file.
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

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("MinScaleResolution",$param) and $param["MinScaleResolution"] !== null) {
            $this->MinScaleResolution = $param["MinScaleResolution"];
        }

        if (array_key_exists("AutoHandleUnsupportedElement",$param) and $param["AutoHandleUnsupportedElement"] !== null) {
            $this->AutoHandleUnsupportedElement = $param["AutoHandleUnsupportedElement"];
        }
    }
}
