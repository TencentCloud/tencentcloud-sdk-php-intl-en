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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method string getSubjectName() Obtain <p>Subject name.</p>
 * @method void setSubjectName(string $SubjectName) Set <p>Subject name.</p>
 * @method array getSubjectImages() Obtain <p>Subject image. Upload at least 1 subject image. * Note 1: Support passing image URL (ensure it is accessible); * Note 2: Input limit of 3 images; * Note 3: Image format supports png, jpeg, jpg, webp; * Note 4: Image ratio must be less than 1:4 or 4:1; * Note 5: Image size no more than 50 MB;</p>
 * @method void setSubjectImages(array $SubjectImages) Set <p>Subject image. Upload at least 1 subject image. * Note 1: Support passing image URL (ensure it is accessible); * Note 2: Input limit of 3 images; * Note 3: Image format supports png, jpeg, jpg, webp; * Note 4: Image ratio must be less than 1:4 or 4:1; * Note 5: Image size no more than 50 MB;</p>
 * @method array getSubjectVideos() Obtain <p>The video reference allows uploading 1 main video.</p><ul><li>Note 1: Only the reference viduq2-pro model supports using the video subject.</li><li>Note 2: A maximum of 1 video of 5 seconds is supported.</li><li>Note 3: The video supports mp4, avi, or mov format.</li><li>Note 4: The video pixel cannot be less than 128*128, the ratio must be less than 1:4 or 4:1, and the size must be no more than 100M.</li></ul>
 * @method void setSubjectVideos(array $SubjectVideos) Set <p>The video reference allows uploading 1 main video.</p><ul><li>Note 1: Only the reference viduq2-pro model supports using the video subject.</li><li>Note 2: A maximum of 1 video of 5 seconds is supported.</li><li>Note 3: The video supports mp4, avi, or mov format.</li><li>Note 4: The video pixel cannot be less than 128*128, the ratio must be less than 1:4 or 4:1, and the size must be no more than 100M.</li></ul>
 * @method string getVoiceId() Obtain <p>Voice type Id. This information is used when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is provided when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: Voice type Id cannot be used in q2-pro.</li></ul>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice type Id. This information is used when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is provided when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: Voice type Id cannot be used in q2-pro.</li></ul>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 */
class CreateAigcSubjectRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Subject name.</p>
     */
    public $SubjectName;

    /**
     * @var array <p>Subject image. Upload at least 1 subject image. * Note 1: Support passing image URL (ensure it is accessible); * Note 2: Input limit of 3 images; * Note 3: Image format supports png, jpeg, jpg, webp; * Note 4: Image ratio must be less than 1:4 or 4:1; * Note 5: Image size no more than 50 MB;</p>
     */
    public $SubjectImages;

    /**
     * @var array <p>The video reference allows uploading 1 main video.</p><ul><li>Note 1: Only the reference viduq2-pro model supports using the video subject.</li><li>Note 2: A maximum of 1 video of 5 seconds is supported.</li><li>Note 3: The video supports mp4, avi, or mov format.</li><li>Note 4: The video pixel cannot be less than 128*128, the ratio must be less than 1:4 or 4:1, and the size must be no more than 100M.</li></ul>
     */
    public $SubjectVideos;

    /**
     * @var string <p>Voice type Id. This information is used when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is provided when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: Voice type Id cannot be used in q2-pro.</li></ul>
     */
    public $VoiceId;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param string $SubjectName <p>Subject name.</p>
     * @param array $SubjectImages <p>Subject image. Upload at least 1 subject image. * Note 1: Support passing image URL (ensure it is accessible); * Note 2: Input limit of 3 images; * Note 3: Image format supports png, jpeg, jpg, webp; * Note 4: Image ratio must be less than 1:4 or 4:1; * Note 5: Image size no more than 50 MB;</p>
     * @param array $SubjectVideos <p>The video reference allows uploading 1 main video.</p><ul><li>Note 1: Only the reference viduq2-pro model supports using the video subject.</li><li>Note 2: A maximum of 1 video of 5 seconds is supported.</li><li>Note 3: The video supports mp4, avi, or mov format.</li><li>Note 4: The video pixel cannot be less than 128*128, the ratio must be less than 1:4 or 4:1, and the size must be no more than 100M.</li></ul>
     * @param string $VoiceId <p>Voice type Id. This information is used when creating an audio and video direct output task.</p><ul><li>Note 1: If no voice type Id is provided when generating an audio and video direct output task, the system will automatically recommend a voice type.</li><li>Note 2: Voice type Id cannot be used in q2-pro.</li></ul>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
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
