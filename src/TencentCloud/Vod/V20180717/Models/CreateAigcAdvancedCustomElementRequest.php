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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</b></p>
 * @method string getElementName() Obtain <p>Subject name cannot exceed 20 characters.</p>
 * @method void setElementName(string $ElementName) Set <p>Subject name cannot exceed 20 characters.</p>
 * @method string getElementDescription() Obtain <p>Subject description, with a length limit of 100 characters.</p>
 * @method void setElementDescription(string $ElementDescription) Set <p>Subject description, with a length limit of 100 characters.</p>
 * @method string getReferenceType() Obtain <p>Reference method for the subject. The availability area differs between subjects customized via video and those customized via images.</p><p>Enumeration value:</p><ul><li>video_refer: Video character subject. At this point, the subject appearance is defined by referring to element_video_list.</li><li>image_refer: Multi-image subject. At this point, the subject appearance is defined by referring to element_image_list.</li></ul>
 * @method void setReferenceType(string $ReferenceType) Set <p>Reference method for the subject. The availability area differs between subjects customized via video and those customized via images.</p><p>Enumeration value:</p><ul><li>video_refer: Video character subject. At this point, the subject appearance is defined by referring to element_video_list.</li><li>image_refer: Multi-image subject. At this point, the subject appearance is defined by referring to element_image_list.</li></ul>
 * @method string getElementVoiceId() Obtain <p>Voice type of the current entity. You can bind an existing timbre from the timbre library.</p><ul><li>When the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only customized video entities support binding a timbre.</li></ul>
 * @method void setElementVoiceId(string $ElementVoiceId) Set <p>Voice type of the current entity. You can bind an existing timbre from the timbre library.</p><ul><li>When the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only customized video entities support binding a timbre.</li></ul>
 * @method string getElementVideoList() Obtain <p>Reference video for the entity. You can set the entity and its details through the video.</p><ul><li>You can upload a video with sound. If the video contains voice, it will trigger timbre customization (customization + adding to the timbre library + binding to the entity).</li><li>The current parameter is required when referencing a video and is invalid when referencing an image.</li><li>Use key:value pairs as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● Only MP4/MOV video formats are supported.<br>● Only 1080p videos with a duration between 3s–8s and an aspect ratio of 16:9 or 9:16 are supported.<br>● Up to 1 video can be uploaded, with a video size of no more than 200MB.<br>● The video_url parameter value cannot be empty.</li></ul>
 * @method void setElementVideoList(string $ElementVideoList) Set <p>Reference video for the entity. You can set the entity and its details through the video.</p><ul><li>You can upload a video with sound. If the video contains voice, it will trigger timbre customization (customization + adding to the timbre library + binding to the entity).</li><li>The current parameter is required when referencing a video and is invalid when referencing an image.</li><li>Use key:value pairs as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● Only MP4/MOV video formats are supported.<br>● Only 1080p videos with a duration between 3s–8s and an aspect ratio of 16:9 or 9:16 are supported.<br>● Up to 1 video can be uploaded, with a video size of no more than 200MB.<br>● The video_url parameter value cannot be empty.</li></ul>
 * @method string getElementImageList() Obtain <p>Reference images of the subject can be set with multiple images and its details.</p><ul><li>Including front reference images and other perspectives or close-up reference images. Among them:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required, with differences from the front reference image, defined by the image_url parameter.</li></ul></li><li>Use key:value to carry, as follows:<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
 * @method void setElementImageList(string $ElementImageList) Set <p>Reference images of the subject can be set with multiple images and its details.</p><ul><li>Including front reference images and other perspectives or close-up reference images. Among them:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required, with differences from the front reference image, defined by the image_url parameter.</li></ul></li><li>Use key:value to carry, as follows:<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
 * @method string getTagList() Obtain <p>Configure tags for a subject. A subject can be configured with multiple tags.</p><ul><li>Use key:value pairs to carry them. Details are given below:</li></ul><p><pre><code>[  {        "tag_id": "o_101"  }, {        "tag_id": "o_102"    }]</code></pre></p>
 * @method void setTagList(string $TagList) Set <p>Configure tags for a subject. A subject can be configured with multiple tags.</p><ul><li>Use key:value pairs to carry them. Details are given below:</li></ul><p><pre><code>[  {        "tag_id": "o_101"  }, {        "tag_id": "o_102"    }]</code></pre></p>
 * @method string getDisableModeration() Obtain <p>If the overseas custom subject library is enabled, you can input <code>True</code> to use it.</p><p>Enumeration value:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Non-use of the overseas custom subject library.</li></ul>
 * @method void setDisableModeration(string $DisableModeration) Set <p>If the overseas custom subject library is enabled, you can input <code>True</code> to use it.</p><p>Enumeration value:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Non-use of the overseas custom subject library.</li></ul>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
 */
class CreateAigcAdvancedCustomElementRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Subject name cannot exceed 20 characters.</p>
     */
    public $ElementName;

    /**
     * @var string <p>Subject description, with a length limit of 100 characters.</p>
     */
    public $ElementDescription;

    /**
     * @var string <p>Reference method for the subject. The availability area differs between subjects customized via video and those customized via images.</p><p>Enumeration value:</p><ul><li>video_refer: Video character subject. At this point, the subject appearance is defined by referring to element_video_list.</li><li>image_refer: Multi-image subject. At this point, the subject appearance is defined by referring to element_image_list.</li></ul>
     */
    public $ReferenceType;

    /**
     * @var string <p>Voice type of the current entity. You can bind an existing timbre from the timbre library.</p><ul><li>When the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only customized video entities support binding a timbre.</li></ul>
     */
    public $ElementVoiceId;

    /**
     * @var string <p>Reference video for the entity. You can set the entity and its details through the video.</p><ul><li>You can upload a video with sound. If the video contains voice, it will trigger timbre customization (customization + adding to the timbre library + binding to the entity).</li><li>The current parameter is required when referencing a video and is invalid when referencing an image.</li><li>Use key:value pairs as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● Only MP4/MOV video formats are supported.<br>● Only 1080p videos with a duration between 3s–8s and an aspect ratio of 16:9 or 9:16 are supported.<br>● Up to 1 video can be uploaded, with a video size of no more than 200MB.<br>● The video_url parameter value cannot be empty.</li></ul>
     */
    public $ElementVideoList;

    /**
     * @var string <p>Reference images of the subject can be set with multiple images and its details.</p><ul><li>Including front reference images and other perspectives or close-up reference images. Among them:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required, with differences from the front reference image, defined by the image_url parameter.</li></ul></li><li>Use key:value to carry, as follows:<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
     */
    public $ElementImageList;

    /**
     * @var string <p>Configure tags for a subject. A subject can be configured with multiple tags.</p><ul><li>Use key:value pairs to carry them. Details are given below:</li></ul><p><pre><code>[  {        "tag_id": "o_101"  }, {        "tag_id": "o_102"    }]</code></pre></p>
     */
    public $TagList;

    /**
     * @var string <p>If the overseas custom subject library is enabled, you can input <code>True</code> to use it.</p><p>Enumeration value:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Non-use of the overseas custom subject library.</li></ul>
     */
    public $DisableModeration;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</b></p>
     * @param string $ElementName <p>Subject name cannot exceed 20 characters.</p>
     * @param string $ElementDescription <p>Subject description, with a length limit of 100 characters.</p>
     * @param string $ReferenceType <p>Reference method for the subject. The availability area differs between subjects customized via video and those customized via images.</p><p>Enumeration value:</p><ul><li>video_refer: Video character subject. At this point, the subject appearance is defined by referring to element_video_list.</li><li>image_refer: Multi-image subject. At this point, the subject appearance is defined by referring to element_image_list.</li></ul>
     * @param string $ElementVoiceId <p>Voice type of the current entity. You can bind an existing timbre from the timbre library.</p><ul><li>When the current parameter is empty, the current entity is not bound to a timbre.</li><li>Only customized video entities support binding a timbre.</li></ul>
     * @param string $ElementVideoList <p>Reference video for the entity. You can set the entity and its details through the video.</p><ul><li>You can upload a video with sound. If the video contains voice, it will trigger timbre customization (customization + adding to the timbre library + binding to the entity).</li><li>The current parameter is required when referencing a video and is invalid when referencing an image.</li><li>Use key:value pairs as follows:<br><pre><code>{  "refer_videos":[    {      "video_url":"video_url_1"    }  ]}</code></pre>● Only MP4/MOV video formats are supported.<br>● Only 1080p videos with a duration between 3s–8s and an aspect ratio of 16:9 or 9:16 are supported.<br>● Up to 1 video can be uploaded, with a video size of no more than 200MB.<br>● The video_url parameter value cannot be empty.</li></ul>
     * @param string $ElementImageList <p>Reference images of the subject can be set with multiple images and its details.</p><ul><li>Including front reference images and other perspectives or close-up reference images. Among them:<ul><li>At least 1 front reference image is required, defined by the frontal_image parameter.</li><li>1–3 other reference images are required, with differences from the front reference image, defined by the image_url parameter.</li></ul></li><li>Use key:value to carry, as follows:<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
     * @param string $TagList <p>Configure tags for a subject. A subject can be configured with multiple tags.</p><ul><li>Use key:value pairs to carry them. Details are given below:</li></ul><p><pre><code>[  {        "tag_id": "o_101"  }, {        "tag_id": "o_102"    }]</code></pre></p>
     * @param string $DisableModeration <p>If the overseas custom subject library is enabled, you can input <code>True</code> to use it.</p><p>Enumeration value:</p><ul><li>True: Use the overseas custom subject library.</li><li>False: Non-use of the overseas custom subject library.</li></ul>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The task complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If this is not specified, it represents 0.</p>
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
