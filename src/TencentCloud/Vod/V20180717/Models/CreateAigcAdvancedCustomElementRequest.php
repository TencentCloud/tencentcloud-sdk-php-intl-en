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
 * CreateAigcAdvancedCustomElement request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
 * @method string getElementName() Obtain <p>Subject name, cannot exceed 20 characters.</p>
 * @method void setElementName(string $ElementName) Set <p>Subject name, cannot exceed 20 characters.</p>
 * @method string getElementDescription() Obtain <p>Subject description, up to 100 characters.</p>
 * @method void setElementDescription(string $ElementDescription) Set <p>Subject description, up to 100 characters.</p>
 * @method string getReferenceType() Obtain <p>Subject reference method. The availability of subjects customized via video and via images differs.</p><p>Enumeration values:</p><ul><li>video_refer: Video character subject. At this point, refer to element_video_list to define the subject appearance.</li><li>image_refer: Multi-image subject. At this point, refer to element_image_list to define the subject appearance.</li></ul>
 * @method void setReferenceType(string $ReferenceType) Set <p>Subject reference method. The availability of subjects customized via video and via images differs.</p><p>Enumeration values:</p><ul><li>video_refer: Video character subject. At this point, refer to element_video_list to define the subject appearance.</li><li>image_refer: Multi-image subject. At this point, refer to element_image_list to define the subject appearance.</li></ul>
 * @method string getElementVoiceId() Obtain <p>Entity timbre, bindable to existing timbres in the timbre library.</p><ul><li>If the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only entities customized for video support binding timbres.</li></ul>
 * @method void setElementVoiceId(string $ElementVoiceId) Set <p>Entity timbre, bindable to existing timbres in the timbre library.</p><ul><li>If the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only entities customized for video support binding timbres.</li></ul>
 * @method string getElementVideoList() Obtain <p>Entity reference video, used to set the entity and its details via video.</p><ul><li>videos with audio can be uploaded. If the video contains voice, it triggers timbre customization (customize + add to timbre library + bind with entity).</li><li>The current parameter is required when referencing a video, and invalid when referencing an image.</li><li>Carried in key:value format, as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● video format supports only MP4/MOV<br>● Only 1080p videos with duration between 3s and 8s and an aspect ratio of 16:9 or 9:16 are supported<br>● Up to 1 video can be uploaded, with a video size no more than 200MB<br>● The video_url parameter value cannot be empty</li></ul>
 * @method void setElementVideoList(string $ElementVideoList) Set <p>Entity reference video, used to set the entity and its details via video.</p><ul><li>videos with audio can be uploaded. If the video contains voice, it triggers timbre customization (customize + add to timbre library + bind with entity).</li><li>The current parameter is required when referencing a video, and invalid when referencing an image.</li><li>Carried in key:value format, as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● video format supports only MP4/MOV<br>● Only 1080p videos with duration between 3s and 8s and an aspect ratio of 16:9 or 9:16 are supported<br>● Up to 1 video can be uploaded, with a video size no more than 200MB<br>● The video_url parameter value cannot be empty</li></ul>
 * @method string getElementImageList() Obtain <p>Subject reference image. You can set the subject and its details through multiple images.</p><ul><li>Including a front reference image and other angle or close-up reference images, where:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required. They must have differences from the front reference image and are defined by the image_url parameter.</li></ul></li><li>Carried in key:value format as follows:<br><pre><code>{  "frontal_image":"image_url_0",  "refer_images":[    {      "image_url":"image_url_1"    },    {      "image_url":"image_url_2"    },    {      "image_url":"image_url_3"    }  ]}</code></pre></li></ul>
 * @method void setElementImageList(string $ElementImageList) Set <p>Subject reference image. You can set the subject and its details through multiple images.</p><ul><li>Including a front reference image and other angle or close-up reference images, where:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required. They must have differences from the front reference image and are defined by the image_url parameter.</li></ul></li><li>Carried in key:value format as follows:<br><pre><code>{  "frontal_image":"image_url_0",  "refer_images":[    {      "image_url":"image_url_1"    },    {      "image_url":"image_url_2"    },    {      "image_url":"image_url_3"    }  ]}</code></pre></li></ul>
 * @method string getTagList() Obtain <p>Configure tags for a principal. A principal can be configured with multiple tags.</p><ul><li>Use key:value to carry them. Details are given below:</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
 * @method void setTagList(string $TagList) Set <p>Configure tags for a principal. A principal can be configured with multiple tags.</p><ul><li>Use key:value to carry them. Details are given below:</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
 * @method string getDisableModeration() Obtain <p>If the overseas custom subject library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Do not use the overseas custom subject library.</li></ul>
 * @method void setDisableModeration(string $DisableModeration) Set <p>If the overseas custom subject library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Do not use the overseas custom subject library.</li></ul>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 */
class CreateAigcAdvancedCustomElementRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Subject name, cannot exceed 20 characters.</p>
     */
    public $ElementName;

    /**
     * @var string <p>Subject description, up to 100 characters.</p>
     */
    public $ElementDescription;

    /**
     * @var string <p>Subject reference method. The availability of subjects customized via video and via images differs.</p><p>Enumeration values:</p><ul><li>video_refer: Video character subject. At this point, refer to element_video_list to define the subject appearance.</li><li>image_refer: Multi-image subject. At this point, refer to element_image_list to define the subject appearance.</li></ul>
     */
    public $ReferenceType;

    /**
     * @var string <p>Entity timbre, bindable to existing timbres in the timbre library.</p><ul><li>If the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only entities customized for video support binding timbres.</li></ul>
     */
    public $ElementVoiceId;

    /**
     * @var string <p>Entity reference video, used to set the entity and its details via video.</p><ul><li>videos with audio can be uploaded. If the video contains voice, it triggers timbre customization (customize + add to timbre library + bind with entity).</li><li>The current parameter is required when referencing a video, and invalid when referencing an image.</li><li>Carried in key:value format, as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● video format supports only MP4/MOV<br>● Only 1080p videos with duration between 3s and 8s and an aspect ratio of 16:9 or 9:16 are supported<br>● Up to 1 video can be uploaded, with a video size no more than 200MB<br>● The video_url parameter value cannot be empty</li></ul>
     */
    public $ElementVideoList;

    /**
     * @var string <p>Subject reference image. You can set the subject and its details through multiple images.</p><ul><li>Including a front reference image and other angle or close-up reference images, where:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required. They must have differences from the front reference image and are defined by the image_url parameter.</li></ul></li><li>Carried in key:value format as follows:<br><pre><code>{  "frontal_image":"image_url_0",  "refer_images":[    {      "image_url":"image_url_1"    },    {      "image_url":"image_url_2"    },    {      "image_url":"image_url_3"    }  ]}</code></pre></li></ul>
     */
    public $ElementImageList;

    /**
     * @var string <p>Configure tags for a principal. A principal can be configured with multiple tags.</p><ul><li>Use key:value to carry them. Details are given below:</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
     */
    public $TagList;

    /**
     * @var string <p>If the overseas custom subject library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Do not use the overseas custom subject library.</li></ul>
     */
    public $DisableModeration;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services on or after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b></p>
     * @param string $ElementName <p>Subject name, cannot exceed 20 characters.</p>
     * @param string $ElementDescription <p>Subject description, up to 100 characters.</p>
     * @param string $ReferenceType <p>Subject reference method. The availability of subjects customized via video and via images differs.</p><p>Enumeration values:</p><ul><li>video_refer: Video character subject. At this point, refer to element_video_list to define the subject appearance.</li><li>image_refer: Multi-image subject. At this point, refer to element_image_list to define the subject appearance.</li></ul>
     * @param string $ElementVoiceId <p>Entity timbre, bindable to existing timbres in the timbre library.</p><ul><li>If the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only entities customized for video support binding timbres.</li></ul>
     * @param string $ElementVideoList <p>Entity reference video, used to set the entity and its details via video.</p><ul><li>videos with audio can be uploaded. If the video contains voice, it triggers timbre customization (customize + add to timbre library + bind with entity).</li><li>The current parameter is required when referencing a video, and invalid when referencing an image.</li><li>Carried in key:value format, as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● video format supports only MP4/MOV<br>● Only 1080p videos with duration between 3s and 8s and an aspect ratio of 16:9 or 9:16 are supported<br>● Up to 1 video can be uploaded, with a video size no more than 200MB<br>● The video_url parameter value cannot be empty</li></ul>
     * @param string $ElementImageList <p>Subject reference image. You can set the subject and its details through multiple images.</p><ul><li>Including a front reference image and other angle or close-up reference images, where:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required. They must have differences from the front reference image and are defined by the image_url parameter.</li></ul></li><li>Carried in key:value format as follows:<br><pre><code>{  "frontal_image":"image_url_0",  "refer_images":[    {      "image_url":"image_url_1"    },    {      "image_url":"image_url_2"    },    {      "image_url":"image_url_3"    }  ]}</code></pre></li></ul>
     * @param string $TagList <p>Configure tags for a principal. A principal can be configured with multiple tags.</p><ul><li>Use key:value to carry them. Details are given below:</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
     * @param string $DisableModeration <p>If the overseas custom subject library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Do not use the overseas custom subject library.</li></ul>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
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

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ElementVoiceId",$param) and $param["ElementVoiceId"] !== null) {
            $this->ElementVoiceId = $param["ElementVoiceId"];
        }

        if (array_key_exists("ElementVideoList",$param) and $param["ElementVideoList"] !== null) {
            $this->ElementVideoList = $param["ElementVideoList"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = $param["ElementImageList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("DisableModeration",$param) and $param["DisableModeration"] !== null) {
            $this->DisableModeration = $param["DisableModeration"];
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
