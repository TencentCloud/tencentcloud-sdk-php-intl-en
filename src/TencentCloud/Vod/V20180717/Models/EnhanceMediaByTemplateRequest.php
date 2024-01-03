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
 * EnhanceMediaByTemplate request structure.
 *
 * @method string getFileId() Obtain File ID.
 * @method void setFileId(string $FileId) Set File ID.
 * @method integer getDefinition() Obtain Enhance Media Template ID.
 * @method void setDefinition(integer $Definition) Set Enhance Media Template ID.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method float getStartTimeOffset() Obtain Starting offset time, unit: seconds, leaving it blank means intercepting from the beginning of the video.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Starting offset time, unit: seconds, leaving it blank means intercepting from the beginning of the video.
 * @method float getEndTimeOffset() Obtain End offset time, unit: seconds, leaving it blank means intercepting to the end of the video.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End offset time, unit: seconds, leaving it blank means intercepting to the end of the video.
 * @method RebuildMediaOutputConfig getOutputConfig() Obtain File configuration after Enhance.
 * @method void setOutputConfig(RebuildMediaOutputConfig $OutputConfig) Set File configuration after Enhance.
 * @method string getSessionId() Obtain The identification code used for deduplication. If there is a request for the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method void setSessionId(string $SessionId) Set The identification code used for deduplication. If there is a request for the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method string getSessionContext() Obtain Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
 * @method integer getTasksPriority() Obtain The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
 * @method void setTasksPriority(integer $TasksPriority) Set The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
 * @method string getExtInfo() Obtain Reserved fields, used for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved fields, used for special purposes.
 */
class EnhanceMediaByTemplateRequest extends AbstractModel
{
    /**
     * @var string File ID.
     */
    public $FileId;

    /**
     * @var integer Enhance Media Template ID.
     */
    public $Definition;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var float Starting offset time, unit: seconds, leaving it blank means intercepting from the beginning of the video.
     */
    public $StartTimeOffset;

    /**
     * @var float End offset time, unit: seconds, leaving it blank means intercepting to the end of the video.
     */
    public $EndTimeOffset;

    /**
     * @var RebuildMediaOutputConfig File configuration after Enhance.
     */
    public $OutputConfig;

    /**
     * @var string The identification code used for deduplication. If there is a request for the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved fields, used for special purposes.
     */
    public $ExtInfo;

    /**
     * @param string $FileId File ID.
     * @param integer $Definition Enhance Media Template ID.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param float $StartTimeOffset Starting offset time, unit: seconds, leaving it blank means intercepting from the beginning of the video.
     * @param float $EndTimeOffset End offset time, unit: seconds, leaving it blank means intercepting to the end of the video.
     * @param RebuildMediaOutputConfig $OutputConfig File configuration after Enhance.
     * @param string $SessionId The identification code used for deduplication. If there is a request for the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     * @param string $SessionContext Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
     * @param integer $TasksPriority The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
     * @param string $ExtInfo Reserved fields, used for special purposes.
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

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new RebuildMediaOutputConfig();
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

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
