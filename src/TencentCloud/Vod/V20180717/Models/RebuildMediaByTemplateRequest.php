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
 * RebuildMediaByTemplate request structure.
 *
 * @method string getFileId() Obtain The file ID.
 * @method void setFileId(string $FileId) Set The file ID.
 * @method integer getDefinition() Obtain Rebuild Media Template ID.
 * @method void setDefinition(integer $Definition) Set Rebuild Media Template ID.
 * @method string getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(string $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method float getStartTimeOffset() Obtain The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
 * @method float getEndTimeOffset() Obtain The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
 * @method RebuildMediaOutputConfig getOutputConfig() Obtain New file configuration after rebuild.
 * @method void setOutputConfig(RebuildMediaOutputConfig $OutputConfig) Set New file configuration after rebuild.
 * @method string getSessionId() Obtain The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method integer getTasksPriority() Obtain The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
 * @method string getExtInfo() Obtain A reserved parameter.
 * @method void setExtInfo(string $ExtInfo) Set A reserved parameter.
 */
class RebuildMediaByTemplateRequest extends AbstractModel
{
    /**
     * @var string The file ID.
     */
    public $FileId;

    /**
     * @var integer Rebuild Media Template ID.
     */
    public $Definition;

    /**
     * @var string <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var float The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
     */
    public $StartTimeOffset;

    /**
     * @var float The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
     */
    public $EndTimeOffset;

    /**
     * @var RebuildMediaOutputConfig New file configuration after rebuild.
     */
    public $OutputConfig;

    /**
     * @var string The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     */
    public $SessionId;

    /**
     * @var string The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string A reserved parameter.
     */
    public $ExtInfo;

    /**
     * @param string $FileId The file ID.
     * @param integer $Definition Rebuild Media Template ID.
     * @param string $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param float $StartTimeOffset The start offset (seconds). If you do not specify this, the segment will start from the beginning of the video.
     * @param float $EndTimeOffset The end offset (seconds). If you do not specify this, the segment will end at the end of the video.
     * @param RebuildMediaOutputConfig $OutputConfig New file configuration after rebuild.
     * @param string $SessionId The session ID, which is used for de-duplication. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     * @param string $SessionContext The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     * @param integer $TasksPriority The task priority, which can be a value from -10 to 10. The higher the value, the higher the priority. If this parameter is left empty, 0 will be used.
     * @param string $ExtInfo A reserved parameter.
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
