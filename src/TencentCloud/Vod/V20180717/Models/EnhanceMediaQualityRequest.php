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
 * EnhanceMediaQuality request structure.
 *
 * @method string getFileId() Obtain Media file ID, that is, the globally unique identifier of the file on VOD, which is assigned by the VOD backend after successful upload. This field can be obtained from [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media).
 * @method void setFileId(string $FileId) Set Media file ID, that is, the globally unique identifier of the file on VOD, which is assigned by the VOD backend after successful upload. This field can be obtained from [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media).
 * @method integer getDefinition() Obtain Remaster template ID, please contact Tencent Cloud for details
 * @method void setDefinition(integer $Definition) Set Remaster template ID, please contact Tencent Cloud for details
 * @method integer getSubAppId() Obtain <b>VOD [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you want to access resources in the Subapplication, enter the Subapplication ID in this field; otherwise, you do not need to fill in this field.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you want to access resources in the Subapplication, enter the Subapplication ID in this field; otherwise, you do not need to fill in this field.</b>
 * @method EnhanceMediaQualityOutputConfig getOutputConfig() Obtain Configuration of media files after Remaster
 * @method void setOutputConfig(EnhanceMediaQualityOutputConfig $OutputConfig) Set Configuration of media files after Remaster
 * @method string getSessionId() Obtain The identification code used for deduplication. If there has been a request with the same identification code within three days, this request will return an error. Up to 50 characters, without or with an empty string means no deduplication
 * @method void setSessionId(string $SessionId) Set The identification code used for deduplication. If there has been a request with the same identification code within three days, this request will return an error. Up to 50 characters, without or with an empty string means no deduplication
 * @method string getSessionContext() Obtain Source context, used to pass through user request information, Remaster completion callback will return this field value, up to 1000 characters
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information, Remaster completion callback will return this field value, up to 1000 characters
 * @method integer getTasksPriority() Obtain The priority of the task, the higher the value, the higher the priority, the range is -10 to 10, not filled in means 0
 * @method void setTasksPriority(integer $TasksPriority) Set The priority of the task, the higher the value, the higher the priority, the range is -10 to 10, not filled in means 0
 */
class EnhanceMediaQualityRequest extends AbstractModel
{
    /**
     * @var string Media file ID, that is, the globally unique identifier of the file on VOD, which is assigned by the VOD backend after successful upload. This field can be obtained from [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media).
     */
    public $FileId;

    /**
     * @var integer Remaster template ID, please contact Tencent Cloud for details
     */
    public $Definition;

    /**
     * @var integer <b>VOD [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you want to access resources in the Subapplication, enter the Subapplication ID in this field; otherwise, you do not need to fill in this field.</b>
     */
    public $SubAppId;

    /**
     * @var EnhanceMediaQualityOutputConfig Configuration of media files after Remaster
     */
    public $OutputConfig;

    /**
     * @var string The identification code used for deduplication. If there has been a request with the same identification code within three days, this request will return an error. Up to 50 characters, without or with an empty string means no deduplication
     */
    public $SessionId;

    /**
     * @var string Source context, used to pass through user request information, Remaster completion callback will return this field value, up to 1000 characters
     */
    public $SessionContext;

    /**
     * @var integer The priority of the task, the higher the value, the higher the priority, the range is -10 to 10, not filled in means 0
     */
    public $TasksPriority;

    /**
     * @param string $FileId Media file ID, that is, the globally unique identifier of the file on VOD, which is assigned by the VOD backend after successful upload. This field can be obtained from [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media).
     * @param integer $Definition Remaster template ID, please contact Tencent Cloud for details
     * @param integer $SubAppId <b>VOD [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you want to access resources in the Subapplication, enter the Subapplication ID in this field; otherwise, you do not need to fill in this field.</b>
     * @param EnhanceMediaQualityOutputConfig $OutputConfig Configuration of media files after Remaster
     * @param string $SessionId The identification code used for deduplication. If there has been a request with the same identification code within three days, this request will return an error. Up to 50 characters, without or with an empty string means no deduplication
     * @param string $SessionContext Source context, used to pass through user request information, Remaster completion callback will return this field value, up to 1000 characters
     * @param integer $TasksPriority The priority of the task, the higher the value, the higher the priority, the range is -10 to 10, not filled in means 0
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

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new EnhanceMediaQualityOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
