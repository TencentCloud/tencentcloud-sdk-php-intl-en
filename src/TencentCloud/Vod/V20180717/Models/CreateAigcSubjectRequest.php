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
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getSubjectName() Obtain 
 * @method void setSubjectName(string $SubjectName) Set 
 * @method array getSubjectImages() Obtain 
 * @method void setSubjectImages(array $SubjectImages) Set 
 * @method array getSubjectVideos() Obtain 
 * @method void setSubjectVideos(array $SubjectVideos) Set 
 * @method string getVoiceId() Obtain 
 * @method void setVoiceId(string $VoiceId) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 */
class CreateAigcSubjectRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $SubjectName;

    /**
     * @var array 
     */
    public $SubjectImages;

    /**
     * @var array 
     */
    public $SubjectVideos;

    /**
     * @var string 
     */
    public $VoiceId;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId 
     * @param string $SubjectName 
     * @param array $SubjectImages 
     * @param array $SubjectVideos 
     * @param string $VoiceId 
     * @param string $SessionId 
     * @param string $SessionContext 
     * @param integer $TasksPriority 
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
