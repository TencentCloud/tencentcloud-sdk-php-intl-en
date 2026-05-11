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
 * Create subject input message.
 *
 * @method string getSubjectName() Obtain <p>Subject name.</p>
 * @method void setSubjectName(string $SubjectName) Set <p>Subject name.</p>
 * @method array getSubjectImages() Obtain <p>Subject image.</p>
 * @method void setSubjectImages(array $SubjectImages) Set <p>Subject image.</p>
 * @method array getSubjectVideos() Obtain <p>Main video.</p>
 * @method void setSubjectVideos(array $SubjectVideos) Set <p>Main video.</p>
 * @method string getVoiceId() Obtain <p>Primary voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Primary voice ID.</p>
 */
class CreateAigcSubjectInput extends AbstractModel
{
    /**
     * @var string <p>Subject name.</p>
     */
    public $SubjectName;

    /**
     * @var array <p>Subject image.</p>
     */
    public $SubjectImages;

    /**
     * @var array <p>Main video.</p>
     */
    public $SubjectVideos;

    /**
     * @var string <p>Primary voice ID.</p>
     */
    public $VoiceId;

    /**
     * @param string $SubjectName <p>Subject name.</p>
     * @param array $SubjectImages <p>Subject image.</p>
     * @param array $SubjectVideos <p>Main video.</p>
     * @param string $VoiceId <p>Primary voice ID.</p>
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
    }
}
