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
 * ExtractTraceWatermark request structure.
 *
 * @method string getUrl() Obtain URL of the media requiring watermark extraction.
 * @method void setUrl(string $Url) Set URL of the media requiring watermark extraction.
 * @method string getFileId() Obtain Media file ID. Original media file ID corresponding to the Url.
<li><font color=red>Note</font>: This field is required.</li>
 * @method void setFileId(string $FileId) Set Media file ID. Original media file ID corresponding to the Url.
<li><font color=red>Note</font>: This field is required.</li>
 * @method integer getSubAppId() Obtain <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method string getSessionContext() Obtain Source context identifier, used to pass through user request information. This field will be returned in the ExtractTraceWatermarkComplete callback and task flow status change callback. It can contain up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context identifier, used to pass through user request information. This field will be returned in the ExtractTraceWatermarkComplete callback and task flow status change callback. It can contain up to 1000 characters.
 * @method string getSessionId() Obtain Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method integer getTasksPriority() Obtain Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purposes.
 */
class ExtractTraceWatermarkRequest extends AbstractModel
{
    /**
     * @var string URL of the media requiring watermark extraction.
     */
    public $Url;

    /**
     * @var string Media file ID. Original media file ID corresponding to the Url.
<li><font color=red>Note</font>: This field is required.</li>
     */
    public $FileId;

    /**
     * @var integer <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Source context identifier, used to pass through user request information. This field will be returned in the ExtractTraceWatermarkComplete callback and task flow status change callback. It can contain up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var integer Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purposes.
     */
    public $ExtInfo;

    /**
     * @param string $Url URL of the media requiring watermark extraction.
     * @param string $FileId Media file ID. Original media file ID corresponding to the Url.
<li><font color=red>Note</font>: This field is required.</li>
     * @param integer $SubAppId <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     * @param string $SessionContext Source context identifier, used to pass through user request information. This field will be returned in the ExtractTraceWatermarkComplete callback and task flow status change callback. It can contain up to 1000 characters.
     * @param string $SessionId Identification Code for Task Deduplication. If there has been a request with the same identification code within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     * @param integer $TasksPriority Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purposes.
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
