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
 * LiveRealTimeClip request structure.
 *
 * @method string getStreamId() Obtain Push stream live code.
 * @method void setStreamId(string $StreamId) Set Push stream live code.
 * @method string getStartTime() Obtain Start time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setStartTime(string $StartTime) Set Start time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getEndTime() Obtain End time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setEndTime(string $EndTime) Set End time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method integer getSubAppId() Obtain <b>VOD [app](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who have enabled VOD since December 25, 2023, to access resources in an VOD application (whether it is a default application or a newly created application), this field must be filled in as the application ID. </b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [app](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who have enabled VOD since December 25, 2023, to access resources in an VOD application (whether it is a default application or a newly created application), this field must be filled in as the application ID. </b>
 * @method integer getIsPersistence() Obtain Whether solidified. 0 not solidified, 1 solidified. Default non-permanent.
 * @method void setIsPersistence(integer $IsPersistence) Set Whether solidified. 0 not solidified, 1 solidified. Default non-permanent.
 * @method string getExpireTime() Obtain Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
 * @method void setExpireTime(string $ExpireTime) Set Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
 * @method string getProcedure() Obtain Post-editing Solidified Video On-demand Task Flow Processing. For details, see [upload specified task flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
 * @method void setProcedure(string $Procedure) Set Post-editing Solidified Video On-demand Task Flow Processing. For details, see [upload specified task flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
 * @method string getSourceContext() Obtain Source context, used for passing through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid only when IsPersistence is 1.
 * @method void setSourceContext(string $SourceContext) Set Source context, used for passing through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid only when IsPersistence is 1.
 * @method string getSessionContext() Obtain Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid at that time only when IsPersistence is 1.
 * @method void setSessionContext(string $SessionContext) Set Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid at that time only when IsPersistence is 1.
 * @method integer getMetaDataRequired() Obtain Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.
 * @method void setMetaDataRequired(integer $MetaDataRequired) Set Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.
 * @method string getHost() Obtain The domain name added in VOD for time shift playback must be associated with a recording template and have the time-shift service enabled in Cloud Streaming Services (https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E). **If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.**
 * @method void setHost(string $Host) Set The domain name added in VOD for time shift playback must be associated with a recording template and have the time-shift service enabled in Cloud Streaming Services (https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E). **If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.**
 * @method LiveRealTimeClipStreamInfo getStreamInfo() Obtain Edited live stream information
<li>Default video editing for the original stream.</li>
<li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding stream corresponding to TemplateId.</li>
 * @method void setStreamInfo(LiveRealTimeClipStreamInfo $StreamInfo) Set Edited live stream information
<li>Default video editing for the original stream.</li>
<li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding stream corresponding to TemplateId.</li>
 * @method string getExtInfo() Obtain System reserved field. Do not fill in.
 * @method void setExtInfo(string $ExtInfo) Set System reserved field. Do not fill in.
 */
class LiveRealTimeClipRequest extends AbstractModel
{
    /**
     * @var string Push stream live code.
     */
    public $StreamId;

    /**
     * @var string Start time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string End time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $EndTime;

    /**
     * @var integer <b>VOD [app](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who have enabled VOD since December 25, 2023, to access resources in an VOD application (whether it is a default application or a newly created application), this field must be filled in as the application ID. </b>
     */
    public $SubAppId;

    /**
     * @var integer Whether solidified. 0 not solidified, 1 solidified. Default non-permanent.
     */
    public $IsPersistence;

    /**
     * @var string Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
     */
    public $ExpireTime;

    /**
     * @var string Post-editing Solidified Video On-demand Task Flow Processing. For details, see [upload specified task flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
     */
    public $Procedure;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
     */
    public $ClassId;

    /**
     * @var string Source context, used for passing through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid only when IsPersistence is 1.
     */
    public $SourceContext;

    /**
     * @var string Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid at that time only when IsPersistence is 1.
     */
    public $SessionContext;

    /**
     * @var integer Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.
     */
    public $MetaDataRequired;

    /**
     * @var string The domain name added in VOD for time shift playback must be associated with a recording template and have the time-shift service enabled in Cloud Streaming Services (https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E). **If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.**
     */
    public $Host;

    /**
     * @var LiveRealTimeClipStreamInfo Edited live stream information
<li>Default video editing for the original stream.</li>
<li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding stream corresponding to TemplateId.</li>
     */
    public $StreamInfo;

    /**
     * @var string System reserved field. Do not fill in.
     */
    public $ExtInfo;

    /**
     * @param string $StreamId Push stream live code.
     * @param string $StartTime Start time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime End time of stream clipping. Format reference [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param integer $SubAppId <b>VOD [app](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who have enabled VOD since December 25, 2023, to access resources in an VOD application (whether it is a default application or a newly created application), this field must be filled in as the application ID. </b>
     * @param integer $IsPersistence Whether solidified. 0 not solidified, 1 solidified. Default non-permanent.
     * @param string $ExpireTime Video storage expiry time after editing solidification. Format reference [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.
     * @param string $Procedure Post-editing Solidified Video On-demand Task Flow Processing. For details, see [upload specified task flow](https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1). Valid only when IsPersistence is 1.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicating other categories.</li>
Valid when IsPersistence is 1.
     * @param string $SourceContext Source context, used for passing through user request information. The [callback on upload completion](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) will return the value of this field, up to 250 characters. Valid only when IsPersistence is 1.
     * @param string $SessionContext Session context, used to pass through user request information. When specifying the Procedure parameter, the [task flow status change callback](https://www.tencentcloud.com/document/product/266/9636?from_cn_redirect=1) will return the value of this field, up to 1000 characters. Valid at that time only when IsPersistence is 1.
     * @param integer $MetaDataRequired Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.
     * @param string $Host The domain name added in VOD for time shift playback must be associated with a recording template and have the time-shift service enabled in Cloud Streaming Services (https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E). **If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.**
     * @param LiveRealTimeClipStreamInfo $StreamInfo Edited live stream information
<li>Default video editing for the original stream.</li>
<li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding stream corresponding to TemplateId.</li>
     * @param string $ExtInfo System reserved field. Do not fill in.
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("MetaDataRequired",$param) and $param["MetaDataRequired"] !== null) {
            $this->MetaDataRequired = $param["MetaDataRequired"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("StreamInfo",$param) and $param["StreamInfo"] !== null) {
            $this->StreamInfo = new LiveRealTimeClipStreamInfo();
            $this->StreamInfo->deserialize($param["StreamInfo"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
