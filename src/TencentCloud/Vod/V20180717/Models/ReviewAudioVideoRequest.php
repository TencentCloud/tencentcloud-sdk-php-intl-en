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
 * ReviewAudioVideo request structure.
 *
 * @method string getFileId() Obtain The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
 * @method void setFileId(string $FileId) Set The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
 * @method string getMediaStoragePath() Obtain Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
 * @method void setMediaStoragePath(string $MediaStoragePath) Set Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method array getReviewContents() Obtain Content to review. Optional values:
<li>Media: Original audio/video;</li>
<li>Cover: cover.</li>
When left empty or filled with an empty array, it defaults to review Media.
 * @method void setReviewContents(array $ReviewContents) Set Content to review. Optional values:
<li>Media: Original audio/video;</li>
<li>Cover: cover.</li>
When left empty or filled with an empty array, it defaults to review Media.
 * @method integer getDefinition() Obtain The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
 * @method void setDefinition(integer $Definition) Set The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
 * @method integer getTasksPriority() Obtain Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getSessionContext() Obtain Source context, used for passing through user request information. The audio/video moderation completed callback will return the value of this field, up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used for passing through user request information. The audio/video moderation completed callback will return the value of this field, up to 1000 characters.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 */
class ReviewAudioVideoRequest extends AbstractModel
{
    /**
     * @var string The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
     */
    public $FileId;

    /**
     * @var string Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
     */
    public $MediaStoragePath;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var array Content to review. Optional values:
<li>Media: Original audio/video;</li>
<li>Cover: cover.</li>
When left empty or filled with an empty array, it defaults to review Media.
     */
    public $ReviewContents;

    /**
     * @var integer The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
     */
    public $Definition;

    /**
     * @var integer Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Source context, used for passing through user request information. The audio/video moderation completed callback will return the value of this field, up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @param string $FileId The media file ID, which is assigned after upload and uniquely identifies a file in VOD. You can view the ID of a file in the [NewFileUpload](https://www.tencentcloud.com/document/product/266/33950) callback or in the [VOD console](https://console.tencentcloud.com/vod/media).
     * @param string $MediaStoragePath Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param array $ReviewContents Content to review. Optional values:
<li>Media: Original audio/video;</li>
<li>Cover: cover.</li>
When left empty or filled with an empty array, it defaults to review Media.
     * @param integer $Definition The moderation template ID. Valid values: <li>10 (default): The preset template, whose violation labels are `Porn` and `Terror`.</li>
     * @param integer $TasksPriority Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $SessionContext Source context, used for passing through user request information. The audio/video moderation completed callback will return the value of this field, up to 1000 characters.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
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

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
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
