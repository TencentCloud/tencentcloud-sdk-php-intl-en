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
 * @method string getUrl() Obtain Tencent Cloud VOD HLS video URL that needs to be cropped.
 * @method void setUrl(string $Url) Set Tencent Cloud VOD HLS video URL that needs to be cropped.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method float getStartTimeOffset() Obtain Crop start offset time, in seconds. Default 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means start trimming from 10 seconds before the end.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Crop start offset time, in seconds. Default 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means start trimming from 10 seconds before the end.
 * @method float getEndTimeOffset() Obtain Crop end offset time in seconds. Default is 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at 10 seconds before the end.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Crop end offset time in seconds. Default is 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at 10 seconds before the end.
 * @method integer getIsPersistence() Obtain Whether solidified. 0: not solidified, 1: solidified. Default non-permanent.
 * @method void setIsPersistence(integer $IsPersistence) Set Whether solidified. 0: not solidified, 1: solidified. Default non-permanent.
 * @method string getExpireTime() Obtain Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
 * @method void setExpireTime(string $ExpireTime) Set Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
 * @method string getProcedure() Obtain Post-editing Solidified Video On-demand Task Flow Processing. For details, see upload specified task flow (https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
 * @method void setProcedure(string $Procedure) Set Post-editing Solidified Video On-demand Task Flow Processing. For details, see upload specified task flow (https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
 * @method string getSourceContext() Obtain Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid when IsPersistence is 1.
 * @method void setSourceContext(string $SourceContext) Set Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid when IsPersistence is 1.
 * @method string getSessionContext() Obtain Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid only when IsPersistence is 1.
 * @method void setSessionContext(string $SessionContext) Set Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid only when IsPersistence is 1.
 * @method string getPrecision() Obtain Deprecated.
 * @method void setPrecision(string $Precision) Set Deprecated.
 * @method string getOutputMediaType() Obtain Output video type. Valid values: <li>hls: Output hls file.</li>Default value hls.
 * @method void setOutputMediaType(string $OutputMediaType) Set Output video type. Valid values: <li>hls: Output hls file.</li>Default value hls.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose. Example value: ""
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose. Example value: ""
 */
class SimpleHlsClipRequest extends AbstractModel
{
    /**
     * @var string Tencent Cloud VOD HLS video URL that needs to be cropped.
     */
    public $Url;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var float Crop start offset time, in seconds. Default 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means start trimming from 10 seconds before the end.
     */
    public $StartTimeOffset;

    /**
     * @var float Crop end offset time in seconds. Default is 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at 10 seconds before the end.
     */
    public $EndTimeOffset;

    /**
     * @var integer Whether solidified. 0: not solidified, 1: solidified. Default non-permanent.
     */
    public $IsPersistence;

    /**
     * @var string Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
     */
    public $ExpireTime;

    /**
     * @var string Post-editing Solidified Video On-demand Task Flow Processing. For details, see upload specified task flow (https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
     */
    public $Procedure;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
     */
    public $ClassId;

    /**
     * @var string Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid when IsPersistence is 1.
     */
    public $SourceContext;

    /**
     * @var string Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid only when IsPersistence is 1.
     */
    public $SessionContext;

    /**
     * @var string Deprecated.
     * @deprecated
     */
    public $Precision;

    /**
     * @var string Output video type. Valid values: <li>hls: Output hls file.</li>Default value hls.
     */
    public $OutputMediaType;

    /**
     * @var string Reserved field, used when special purpose. Example value: ""
     */
    public $ExtInfo;

    /**
     * @param string $Url Tencent Cloud VOD HLS video URL that needs to be cropped.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param float $StartTimeOffset Crop start offset time, in seconds. Default 0, crop from the beginning of the video. Negative numbers indicate how many seconds from the end of the video to start cropping. For example, -10 means start trimming from 10 seconds before the end.
     * @param float $EndTimeOffset Crop end offset time in seconds. Default is 0, which means crop to the end of the video. Negative numbers indicate how many seconds from the end of the video to end cropping. For example, -10 means end cropping at 10 seconds before the end.
     * @param integer $IsPersistence Whether solidified. 0: not solidified, 1: solidified. Default non-permanent.
     * @param string $ExpireTime Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
     * @param string $Procedure Post-editing Solidified Video On-demand Task Flow Processing. For details, see upload specified task flow (https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/31772?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
     * @param string $SourceContext Source context, used to pass through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid when IsPersistence is 1.
     * @param string $SessionContext Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid only when IsPersistence is 1.
     * @param string $Precision Deprecated.
     * @param string $OutputMediaType Output video type. Valid values: <li>hls: Output hls file.</li>Default value hls.
     * @param string $ExtInfo Reserved field, used when special purpose. Example value: ""
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
