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
 * @method string getStreamId() Obtain <p>Push stream live code.</p>
 * @method void setStreamId(string $StreamId) Set <p>Push stream live code.</p>
 * @method string getStartTime() Obtain <p>Start time of stream clipping. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time of stream clipping. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method string getEndTime() Obtain <p>The end time of stream clipping. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setEndTime(string $EndTime) Set <p>The end time of stream clipping. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
 * @method integer getIsPersistence() Obtain <p>Whether solidified. 0 for default non-permanent, 1 for solidified. Default non-permanent.</p>
 * @method void setIsPersistence(integer $IsPersistence) Set <p>Whether solidified. 0 for default non-permanent, 1 for solidified. Default non-permanent.</p>
 * @method string getExpireTime() Obtain <p>Video storage expiry time after editing solidification. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>Video storage expiry time after editing solidification. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.</p>
 * @method string getProcedure() Obtain <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid when IsPersistence is 1.</p>
 * @method void setProcedure(string $Procedure) Set <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid when IsPersistence is 1.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid at that time only when IsPersistence is 1.
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid at that time only when IsPersistence is 1.
 * @method string getSourceContext() Obtain <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
 * @method void setSourceContext(string $SourceContext) Set <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
 * @method string getSessionContext() Obtain <p>Session context. This is used to pass through user request information. When specifying the Procedure parameter, the <a href="/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Session context. This is used to pass through user request information. When specifying the Procedure parameter, the <a href="/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
 * @method integer getMetaDataRequired() Obtain <p>Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.</p>
 * @method void setMetaDataRequired(integer $MetaDataRequired) Set <p>Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.</p>
 * @method string getHost() Obtain <p>The domain name added in VOD for time-shifting playback must have <a href="https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">recording template binding and time-shift service enabled</a> in Cloud Streaming Services. <strong>If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.</strong></p>
 * @method void setHost(string $Host) Set <p>The domain name added in VOD for time-shifting playback must have <a href="https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">recording template binding and time-shift service enabled</a> in Cloud Streaming Services. <strong>If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.</strong></p>
 * @method LiveRealTimeClipStreamInfo getStreamInfo() Obtain <p>Live stream information for editing:</p><li>Edit the original stream by default.</li><li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding corresponding to TemplateId.</li>
 * @method void setStreamInfo(LiveRealTimeClipStreamInfo $StreamInfo) Set <p>Live stream information for editing:</p><li>Edit the original stream by default.</li><li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding corresponding to TemplateId.</li>
 * @method string getExtInfo() Obtain <p>System reserved field. Do not fill in.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>System reserved field. Do not fill in.</p>
 */
class LiveRealTimeClipRequest extends AbstractModel
{
    /**
     * @var string <p>Push stream live code.</p>
     */
    public $StreamId;

    /**
     * @var string <p>Start time of stream clipping. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $StartTime;

    /**
     * @var string <p>The end time of stream clipping. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $EndTime;

    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var integer <p>Whether solidified. 0 for default non-permanent, 1 for solidified. Default non-permanent.</p>
     */
    public $IsPersistence;

    /**
     * @var string <p>Video storage expiry time after editing solidification. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid when IsPersistence is 1.</p>
     */
    public $Procedure;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid at that time only when IsPersistence is 1.
     */
    public $ClassId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
     */
    public $SourceContext;

    /**
     * @var string <p>Session context. This is used to pass through user request information. When specifying the Procedure parameter, the <a href="/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.</p>
     */
    public $MetaDataRequired;

    /**
     * @var string <p>The domain name added in VOD for time-shifting playback must have <a href="https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">recording template binding and time-shift service enabled</a> in Cloud Streaming Services. <strong>If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.</strong></p>
     */
    public $Host;

    /**
     * @var LiveRealTimeClipStreamInfo <p>Live stream information for editing:</p><li>Edit the original stream by default.</li><li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding corresponding to TemplateId.</li>
     */
    public $StreamInfo;

    /**
     * @var string <p>System reserved field. Do not fill in.</p>
     */
    public $ExtInfo;

    /**
     * @param string $StreamId <p>Push stream live code.</p>
     * @param string $StartTime <p>Start time of stream clipping. Format reference: <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param string $EndTime <p>The end time of stream clipping. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     * @param integer $IsPersistence <p>Whether solidified. 0 for default non-permanent, 1 for solidified. Default non-permanent.</p>
     * @param string $ExpireTime <p>Video storage expiry time after editing solidification. Format reference <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>. Enter "9999-12-31T23:59:59Z" to indicate the video never expires. After expiry, the media file and its related resources (transcoding result, sprites) will be permanently deleted. Valid at that time only when IsPersistence is 1. The default video editing never expires.</p>
     * @param string $Procedure <p>Post-editing Solidified Video On-demand Task Flow Processing. For details, see <a href="https://www.tencentcloud.com/document/product/266/9759?from_cn_redirect=1">upload specified task flow</a>. Valid when IsPersistence is 1.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/31772?from_cn_redirect=1">Create Category</a> API.</p><li>Default value: 0, indicating other categories.</li>Valid at that time only when IsPersistence is 1.
     * @param string $SourceContext <p>Source context. This is used to pass user request information. The <a href="/document/product/266/7830?from_cn_redirect=1">upload completion callback</a> returns the value of this field. The maximum length is 250 characters. Valid only when IsPersistence is 1.</p>
     * @param string $SessionContext <p>Session context. This is used to pass through user request information. When specifying the Procedure parameter, the <a href="/document/product/266/9636?from_cn_redirect=1">task flow status change callback</a> returns the value of this field. The maximum length is 1000 characters. Valid only when IsPersistence is 1.</p>
     * @param integer $MetaDataRequired <p>Whether to return edited video metadata. 0: not required, 1: required. By default, does not need.</p>
     * @param string $Host <p>The domain name added in VOD for time-shifting playback must have <a href="https://www.tencentcloud.com/document/product/266/52220?from_cn_redirect=1#.E6.AD.A5.E9.AA.A43.EF.BC.9A.E5.85.B3.E8.81.94.E5.BD.95.E5.88.B6.E6.A8.A1.E6.9D.BF.3Ca-id.3D.22step3.22.3E.3C.2Fa.3E">recording template binding and time-shift service enabled</a> in Cloud Streaming Services. <strong>If the first call time of this interface is after 2021-01-01T00:00:00Z, this field is a required field.</strong></p>
     * @param LiveRealTimeClipStreamInfo $StreamInfo <p>Live stream information for editing:</p><li>Edit the original stream by default.</li><li>When the Type specified in StreamInfo is Transcoding, edit the live streaming transcoding corresponding to TemplateId.</li>
     * @param string $ExtInfo <p>System reserved field. Do not fill in.</p>
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
