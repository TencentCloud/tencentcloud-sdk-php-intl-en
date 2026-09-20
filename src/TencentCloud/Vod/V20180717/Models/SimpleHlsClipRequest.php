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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SimpleHlsClip request structure.
 *
 * @method string getUrl() Obtain <p>Tencent Cloud VOD HLS video URL that needs to be cropped.</p>
 * @method void setUrl(string $Url) Set <p>Tencent Cloud VOD HLS video URL that needs to be cropped.</p>
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method float getStartTimeOffset() Obtain <p>Crop start offset time, in seconds. Default: 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means to start trimming from the 10th second from the end.</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Crop start offset time, in seconds. Default: 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means to start trimming from the 10th second from the end.</p>
 * @method float getEndTimeOffset() Obtain <p>Crop end offset time, in seconds. Default: 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at the 10th second from the end.</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>Crop end offset time, in seconds. Default: 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at the 10th second from the end.</p>
 * @method integer getIsPersistence() Obtain <p>Whether solidified. 0: non-permanent, 1: solidified. Default: non-permanent.</p>
 * @method void setIsPersistence(integer $IsPersistence) Set <p>Whether solidified. 0: non-permanent, 1: solidified. Default: non-permanent.</p>
 * @method string getExpireTime() Obtain <p>Video storage expiry time after editing solidification. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites, etc.) will be permanently deleted. Valid only when IsPersistence is 1. By default, the video after editing solidification never expires.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Video storage expiry time after editing solidification. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites, etc.) will be permanently deleted. Valid only when IsPersistence is 1. By default, the video after editing solidification never expires.</p>
 * @method string getProcedure() Obtain <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid only when IsPersistence is 1.</p>
 * @method void setProcedure(string $Procedure) Set <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid only when IsPersistence is 1.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the <a href="/document/product/266/31772">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid only when IsPersistence is 1.
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the <a href="/document/product/266/31772">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid only when IsPersistence is 1.
 * @method string getSourceContext() Obtain <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
 * @method void setSourceContext(string $SourceContext) Set <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
 * @method string getSessionContext() Obtain <p>Session context. This is used to pass user request information. After specifying the Procedure parameter, the <a href="/document/product/266/9636">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Session context. This is used to pass user request information. After specifying the Procedure parameter, the <a href="/document/product/266/9636">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
 * @method string getPrecision() Obtain <p>Deprecated field.</p>
 * @method void setPrecision(string $Precision) Set <p>Deprecated field.</p>
 * @method string getOutputMediaType() Obtain <p>Output video type. Valid values: <li>hls: output HLS file.</li>Default: hls.</p>
 * @method void setOutputMediaType(string $OutputMediaType) Set <p>Output video type. Valid values: <li>hls: output HLS file.</li>Default: hls.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used when special usage. Example value: ""</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used when special usage. Example value: ""</p>
 */
class SimpleHlsClipRequest extends AbstractModel
{
    /**
     * @var string <p>Tencent Cloud VOD HLS video URL that needs to be cropped.</p>
     */
    public $Url;

    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var float <p>Crop start offset time, in seconds. Default: 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means to start trimming from the 10th second from the end.</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>Crop end offset time, in seconds. Default: 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at the 10th second from the end.</p>
     */
    public $EndTimeOffset;

    /**
     * @var integer <p>Whether solidified. 0: non-permanent, 1: solidified. Default: non-permanent.</p>
     */
    public $IsPersistence;

    /**
     * @var string <p>Video storage expiry time after editing solidification. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites, etc.) will be permanently deleted. Valid only when IsPersistence is 1. By default, the video after editing solidification never expires.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid only when IsPersistence is 1.</p>
     */
    public $Procedure;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the <a href="/document/product/266/31772">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid only when IsPersistence is 1.
     */
    public $ClassId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
     */
    public $SourceContext;

    /**
     * @var string <p>Session context. This is used to pass user request information. After specifying the Procedure parameter, the <a href="/document/product/266/9636">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Deprecated field.</p>
     * @deprecated
     */
    public $Precision;

    /**
     * @var string <p>Output video type. Valid values: <li>hls: output HLS file.</li>Default: hls.</p>
     */
    public $OutputMediaType;

    /**
     * @var string <p>Reserved field, used when special usage. Example value: ""</p>
     */
    public $ExtInfo;

    /**
     * @param string $Url <p>Tencent Cloud VOD HLS video URL that needs to be cropped.</p>
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param float $StartTimeOffset <p>Crop start offset time, in seconds. Default: 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means to start trimming from the 10th second from the end.</p>
     * @param float $EndTimeOffset <p>Crop end offset time, in seconds. Default: 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at the 10th second from the end.</p>
     * @param integer $IsPersistence <p>Whether solidified. 0: non-permanent, 1: solidified. Default: non-permanent.</p>
     * @param string $ExpireTime <p>Video storage expiry time after editing solidification. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites, etc.) will be permanently deleted. Valid only when IsPersistence is 1. By default, the video after editing solidification never expires.</p>
     * @param string $Procedure <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid only when IsPersistence is 1.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the <a href="/document/product/266/31772">create category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid only when IsPersistence is 1.
     * @param string $SourceContext <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
     * @param string $SessionContext <p>Session context. This is used to pass user request information. After specifying the Procedure parameter, the <a href="/document/product/266/9636">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
     * @param string $Precision <p>Deprecated field.</p>
     * @param string $OutputMediaType <p>Output video type. Valid values: <li>hls: output HLS file.</li>Default: hls.</p>
     * @param string $ExtInfo <p>Reserved field, used when special usage. Example value: ""</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("IsPersistence",$param) and $param["IsPersistence"] !== null) {
            $this->IsPersistence = $param["IsPersistence"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("Precision",$param) and $param["Precision"] !== null) {
            $this->Precision = $param["Precision"];
        }

        if (array_key_exists("OutputMediaType",$param) and $param["OutputMediaType"] !== null) {
            $this->OutputMediaType = $param["OutputMediaType"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
