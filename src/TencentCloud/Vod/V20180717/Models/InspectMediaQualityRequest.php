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
 * InspectMediaQuality request structure.
 *
 * @method string getFileId() Obtain Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media).
 * @method void setFileId(string $FileId) Set Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media).
 * @method integer getDefinition() Obtain Audio and video quality inspection template ID.
 * @method void setDefinition(integer $Definition) Set Audio and video quality inspection template ID.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method string getSessionContext() Obtain Source context, used to pass through user request information. The audio and video quality detection completion callback will return the value of this field, with a maximum of 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information. The audio and video quality detection completion callback will return the value of this field, with a maximum of 1000 characters.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with empty string indicates no deduplication.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 */
class InspectMediaQualityRequest extends AbstractModel
{
    /**
     * @var string Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media).
     */
    public $FileId;

    /**
     * @var integer Audio and video quality inspection template ID.
     */
    public $Definition;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     */
    public $TasksPriority;

    /**
     * @var string Source context, used to pass through user request information. The audio and video quality detection completion callback will return the value of this field, with a maximum of 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @param string $FileId Media file ID, the globally unique identifier of the file in VOD, is assigned by the VOD backend after successful upload. You can retrieve this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [VOD console](https://console.cloud.tencent.com/vod/media).
     * @param integer $Definition Audio and video quality inspection template ID.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     * @param string $SessionContext Source context, used to pass through user request information. The audio and video quality detection completion callback will return the value of this field, with a maximum of 1000 characters.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or with empty string indicates no deduplication.
     * @param string $ExtInfo Reserved field, used when special purpose.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
