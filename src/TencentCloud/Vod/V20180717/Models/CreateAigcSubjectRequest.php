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
 * CreateAigcSubject request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method string getSubjectName() Obtain <p>Subject name.</p>
 * @method void setSubjectName(string $SubjectName) Set <p>Subject name.</p>
 * @method array getSubjectImages() Obtain <p>Main image. Upload at least 1 main image. * Note 1: You can pass an image URL (make sure it is accessible); * Note 2: Input limit: 3 images; * Note 3: Supported formats: png, jpeg, jpg, webp; * Note 4: The image ratio must be less than 1:4 or 4:1; * Note 5: The image size must not exceed 50 MB;</p>
 * @method void setSubjectImages(array $SubjectImages) Set <p>Main image. Upload at least 1 main image. * Note 1: You can pass an image URL (make sure it is accessible); * Note 2: Input limit: 3 images; * Note 3: Supported formats: png, jpeg, jpg, webp; * Note 4: The image ratio must be less than 1:4 or 4:1; * Note 5: The image size must not exceed 50 MB;</p>
 * @method array getSubjectVideos() Obtain <p>Video reference allows uploading 1 subject video</p><ul><li>Note 1: For reference only, the viduq2-pro model supports the use of video subjects</li><li>Note 2: Allows uploading up to 1 video of 5 seconds</li><li>Note 3: Video supports mp4, avi, mov formats</li><li>Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1, and the size no more than 100M.</li></ul>
 * @method void setSubjectVideos(array $SubjectVideos) Set <p>Video reference allows uploading 1 subject video</p><ul><li>Note 1: For reference only, the viduq2-pro model supports the use of video subjects</li><li>Note 2: Allows uploading up to 1 video of 5 seconds</li><li>Note 3: Video supports mp4, avi, mov formats</li><li>Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1, and the size no more than 100M.</li></ul>
 * @method string getVoiceId() Obtain <p>Main voice type Id. This information is used only when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is passed when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: q2-pro does not support using a voice type Id.</li></ul>
 * @method void setVoiceId(string $VoiceId) Set <p>Main voice type Id. This information is used only when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is passed when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: q2-pro does not support using a voice type Id.</li></ul>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The task completion callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The task completion callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
 */
class CreateAigcSubjectRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Subject name.</p>
     */
    public $SubjectName;

    /**
     * @var array <p>Main image. Upload at least 1 main image. * Note 1: You can pass an image URL (make sure it is accessible); * Note 2: Input limit: 3 images; * Note 3: Supported formats: png, jpeg, jpg, webp; * Note 4: The image ratio must be less than 1:4 or 4:1; * Note 5: The image size must not exceed 50 MB;</p>
     */
    public $SubjectImages;

    /**
     * @var array <p>Video reference allows uploading 1 subject video</p><ul><li>Note 1: For reference only, the viduq2-pro model supports the use of video subjects</li><li>Note 2: Allows uploading up to 1 video of 5 seconds</li><li>Note 3: Video supports mp4, avi, mov formats</li><li>Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1, and the size no more than 100M.</li></ul>
     */
    public $SubjectVideos;

    /**
     * @var string <p>Main voice type Id. This information is used only when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is passed when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: q2-pro does not support using a voice type Id.</li></ul>
     */
    public $VoiceId;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The task completion callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     * @param string $SubjectName <p>Subject name.</p>
     * @param array $SubjectImages <p>Main image. Upload at least 1 main image. * Note 1: You can pass an image URL (make sure it is accessible); * Note 2: Input limit: 3 images; * Note 3: Supported formats: png, jpeg, jpg, webp; * Note 4: The image ratio must be less than 1:4 or 4:1; * Note 5: The image size must not exceed 50 MB;</p>
     * @param array $SubjectVideos <p>Video reference allows uploading 1 subject video</p><ul><li>Note 1: For reference only, the viduq2-pro model supports the use of video subjects</li><li>Note 2: Allows uploading up to 1 video of 5 seconds</li><li>Note 3: Video supports mp4, avi, mov formats</li><li>Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1, and the size no more than 100M.</li></ul>
     * @param string $VoiceId <p>Main voice type Id. This information is used only when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is passed when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: q2-pro does not support using a voice type Id.</li></ul>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The task completion callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubjectName",$param) and $param["SubjectName"] !== null) {
            $this->SubjectName = $param["SubjectName"];
        }

        if (array_key_exists("SubjectImages",$param) and $param["SubjectImages"] !== null) {
            $this->SubjectImages = $param["SubjectImages"];
        }

        if (array_key_exists("SubjectVideos",$param) and $param["SubjectVideos"] !== null) {
            $this->SubjectVideos = $param["SubjectVideos"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
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
