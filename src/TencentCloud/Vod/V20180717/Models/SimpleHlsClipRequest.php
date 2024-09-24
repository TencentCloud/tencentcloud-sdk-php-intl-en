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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SimpleHlsClip request structure.
 *
 * @method string getUrl() Obtain URL of the HLS video in VOD that needs to be clipped.
 * @method void setUrl(string $Url) Set URL of the HLS video in VOD that needs to be clipped.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method float getStartTimeOffset() Obtain Start offset time of clipping in seconds. Default value: 0, which means to clip from the beginning of the video. A negative number indicates how many seconds from the end of the video clipping will start at. For example, -10 means that clipping will start at the 10th second from the end.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start offset time of clipping in seconds. Default value: 0, which means to clip from the beginning of the video. A negative number indicates how many seconds from the end of the video clipping will start at. For example, -10 means that clipping will start at the 10th second from the end.
 * @method float getEndTimeOffset() Obtain End offset time of clipping in seconds. Default value: 0, which means to clip till the end of the video. A negative number indicates how many seconds from the end of the video clipping will end. For example, -10 means that clipping will end at the 10th second from the end.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End offset time of clipping in seconds. Default value: 0, which means to clip till the end of the video. A negative number indicates how many seconds from the end of the video clipping will end. For example, -10 means that clipping will end at the 10th second from the end.
 * @method integer getIsPersistence() Obtain Whether to store the video clip persistently. 0: no (default), 1: yes.
 * @method void setIsPersistence(integer $IsPersistence) Set Whether to store the video clip persistently. 0: no (default), 1: yes.
 * @method string getExpireTime() Obtain The expiration time of the video clip that is to be saved, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). `9999-12-31T23:59:59Z` is the default value, which means the video clip will never expire. After expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. This parameter is valid only if `IsPersistence` is 1.
 * @method void setExpireTime(string $ExpireTime) Set The expiration time of the video clip that is to be saved, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). `9999-12-31T23:59:59Z` is the default value, which means the video clip will never expire. After expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. This parameter is valid only if `IsPersistence` is 1.
 * @method string getProcedure() Obtain The task flow to execute on the video clipped for persistent storage. For details, see [Upload from Server](https://intl.cloud.tencent.com/document/product/266/33912). This parameter is valid only if `IsPersistence` is 1.
 * @method void setProcedure(string $Procedure) Set The task flow to execute on the video clipped for persistent storage. For details, see [Upload from Server](https://intl.cloud.tencent.com/document/product/266/33912). This parameter is valid only if `IsPersistence` is 1.
 * @method integer getClassId() Obtain The ID of the media file's category. You can use the [CreateClass](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) API to create a category and get the category ID.
<li>The default value is `0`, which means the "Other" category.</li>
This parameter is valid only if `IsPersistence` is `1`.
 * @method void setClassId(integer $ClassId) Set The ID of the media file's category. You can use the [CreateClass](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) API to create a category and get the category ID.
<li>The default value is `0`, which means the "Other" category.</li>
This parameter is valid only if `IsPersistence` is `1`.
 * @method string getSourceContext() Obtain The source context, which is used to pass through user request information. The [NewFileUpload](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 250 characters and is valid only if `IsPersistence` is `1`.
 * @method void setSourceContext(string $SourceContext) Set The source context, which is used to pass through user request information. The [NewFileUpload](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 250 characters and is valid only if `IsPersistence` is `1`.
 * @method string getSessionContext() Obtain The session context, which is used to pass through user request information. If the `Procedure` parameter is specified, the [ProcedureStateChanged](https://intl.cloud.tencent.com/document/product/266/9636?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters and is valid only if `IsPersistence` is `1`.
 * @method void setSessionContext(string $SessionContext) Set The session context, which is used to pass through user request information. If the `Procedure` parameter is specified, the [ProcedureStateChanged](https://intl.cloud.tencent.com/document/product/266/9636?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters and is valid only if `IsPersistence` is `1`.
 * @method string getPrecision() Obtain 
 * @method void setPrecision(string $Precision) Set 
 * @method string getOutputMediaType() Obtain 
 * @method void setOutputMediaType(string $OutputMediaType) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class SimpleHlsClipRequest extends AbstractModel
{
    /**
     * @var string URL of the HLS video in VOD that needs to be clipped.
     */
    public $Url;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var float Start offset time of clipping in seconds. Default value: 0, which means to clip from the beginning of the video. A negative number indicates how many seconds from the end of the video clipping will start at. For example, -10 means that clipping will start at the 10th second from the end.
     */
    public $StartTimeOffset;

    /**
     * @var float End offset time of clipping in seconds. Default value: 0, which means to clip till the end of the video. A negative number indicates how many seconds from the end of the video clipping will end. For example, -10 means that clipping will end at the 10th second from the end.
     */
    public $EndTimeOffset;

    /**
     * @var integer Whether to store the video clip persistently. 0: no (default), 1: yes.
     */
    public $IsPersistence;

    /**
     * @var string The expiration time of the video clip that is to be saved, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). `9999-12-31T23:59:59Z` is the default value, which means the video clip will never expire. After expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. This parameter is valid only if `IsPersistence` is 1.
     */
    public $ExpireTime;

    /**
     * @var string The task flow to execute on the video clipped for persistent storage. For details, see [Upload from Server](https://intl.cloud.tencent.com/document/product/266/33912). This parameter is valid only if `IsPersistence` is 1.
     */
    public $Procedure;

    /**
     * @var integer The ID of the media file's category. You can use the [CreateClass](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) API to create a category and get the category ID.
<li>The default value is `0`, which means the "Other" category.</li>
This parameter is valid only if `IsPersistence` is `1`.
     */
    public $ClassId;

    /**
     * @var string The source context, which is used to pass through user request information. The [NewFileUpload](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 250 characters and is valid only if `IsPersistence` is `1`.
     */
    public $SourceContext;

    /**
     * @var string The session context, which is used to pass through user request information. If the `Procedure` parameter is specified, the [ProcedureStateChanged](https://intl.cloud.tencent.com/document/product/266/9636?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters and is valid only if `IsPersistence` is `1`.
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $Precision;

    /**
     * @var string 
     */
    public $OutputMediaType;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param string $Url URL of the HLS video in VOD that needs to be clipped.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param float $StartTimeOffset Start offset time of clipping in seconds. Default value: 0, which means to clip from the beginning of the video. A negative number indicates how many seconds from the end of the video clipping will start at. For example, -10 means that clipping will start at the 10th second from the end.
     * @param float $EndTimeOffset End offset time of clipping in seconds. Default value: 0, which means to clip till the end of the video. A negative number indicates how many seconds from the end of the video clipping will end. For example, -10 means that clipping will end at the 10th second from the end.
     * @param integer $IsPersistence Whether to store the video clip persistently. 0: no (default), 1: yes.
     * @param string $ExpireTime The expiration time of the video clip that is to be saved, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). `9999-12-31T23:59:59Z` is the default value, which means the video clip will never expire. After expiration, the media file and its related resources (such as transcoding results and image sprites) will be permanently deleted. This parameter is valid only if `IsPersistence` is 1.
     * @param string $Procedure The task flow to execute on the video clipped for persistent storage. For details, see [Upload from Server](https://intl.cloud.tencent.com/document/product/266/33912). This parameter is valid only if `IsPersistence` is 1.
     * @param integer $ClassId The ID of the media file's category. You can use the [CreateClass](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) API to create a category and get the category ID.
<li>The default value is `0`, which means the "Other" category.</li>
This parameter is valid only if `IsPersistence` is `1`.
     * @param string $SourceContext The source context, which is used to pass through user request information. The [NewFileUpload](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 250 characters and is valid only if `IsPersistence` is `1`.
     * @param string $SessionContext The session context, which is used to pass through user request information. If the `Procedure` parameter is specified, the [ProcedureStateChanged](https://intl.cloud.tencent.com/document/product/266/9636?from_cn_redirect=1) callback will return the value of this parameter. It can contain up to 1,000 characters and is valid only if `IsPersistence` is `1`.
     * @param string $Precision 
     * @param string $OutputMediaType 
     * @param string $ExtInfo 
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
