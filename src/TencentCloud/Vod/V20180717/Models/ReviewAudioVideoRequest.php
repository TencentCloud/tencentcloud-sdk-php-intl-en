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
 * ReviewAudioVideo request structure.
 *
 * @method string getFileId() Obtain The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
 * @method void setFileId(string $FileId) Set The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method array getReviewContents() Obtain The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
If this parameter is not specified or an empty array is passed in, `Media` will be used.
 * @method void setReviewContents(array $ReviewContents) Set The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
If this parameter is not specified or an empty array is passed in, `Media` will be used.
 * @method integer getDefinition() Obtain The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
 * @method void setDefinition(integer $Definition) Set The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
 * @method integer getTasksPriority() Obtain The priority of a task flow. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set The priority of a task flow. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method string getSessionId() Obtain The session ID, which is used to identify duplicate requests. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used to identify duplicate requests. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method string getExtInfo() Obtain A reserved parameter.
 * @method void setExtInfo(string $ExtInfo) Set A reserved parameter.
 */
class ReviewAudioVideoRequest extends AbstractModel
{
    /**
     * @var string The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
     */
    public $FileId;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var array The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
If this parameter is not specified or an empty array is passed in, `Media` will be used.
     */
    public $ReviewContents;

    /**
     * @var integer The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
     */
    public $Definition;

    /**
     * @var integer The priority of a task flow. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string The session ID, which is used to identify duplicate requests. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     */
    public $SessionId;

    /**
     * @var string A reserved parameter.
     */
    public $ExtInfo;

    /**
     * @param string $FileId The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param array $ReviewContents The type of moderated content. Valid values:
<li>`Media`: The original audio/video.</li>
<li>`Cover`: Thumbnails.</li>
If this parameter is not specified or an empty array is passed in, `Media` will be used.
     * @param integer $Definition The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
     * @param integer $TasksPriority The priority of a task flow. The higher the value, the higher the priority. Value range: [-10, 10]. If this parameter is left empty, 0 will be used.
     * @param string $SessionContext The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
     * @param string $SessionId The session ID, which is used to identify duplicate requests. If there was a request with the same session ID in the last three days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ReviewContents",$param) and $param["ReviewContents"] !== null) {
            $this->ReviewContents = $param["ReviewContents"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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
