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
 * CreateComplexAdaptiveDynamicStreamingTask request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method array getStreamParaSet() Obtain 
 * @method void setStreamParaSet(array $StreamParaSet) Set 
 * @method array getHeadTailSet() Obtain 
 * @method void setHeadTailSet(array $HeadTailSet) Set 
 * @method array getAudioSet() Obtain 
 * @method void setAudioSet(array $AudioSet) Set 
 * @method array getSubtitleSet() Obtain 
 * @method void setSubtitleSet(array $SubtitleSet) Set 
 */
class CreateComplexAdaptiveDynamicStreamingTaskRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var array 
     */
    public $StreamParaSet;

    /**
     * @var array 
     */
    public $HeadTailSet;

    /**
     * @var array 
     */
    public $AudioSet;

    /**
     * @var array 
     */
    public $SubtitleSet;

    /**
     * @param integer $SubAppId 
     * @param string $FileId 
     * @param array $StreamParaSet 
     * @param array $HeadTailSet 
     * @param array $AudioSet 
     * @param array $SubtitleSet 
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StreamParaSet",$param) and $param["StreamParaSet"] !== null) {
            $this->StreamParaSet = [];
            foreach ($param["StreamParaSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskStreamPara();
                $obj->deserialize($value);
                array_push($this->StreamParaSet, $obj);
            }
        }

        if (array_key_exists("HeadTailSet",$param) and $param["HeadTailSet"] !== null) {
            $this->HeadTailSet = [];
            foreach ($param["HeadTailSet"] as $key => $value){
                $obj = new HeadTailTaskInput();
                $obj->deserialize($value);
                array_push($this->HeadTailSet, $obj);
            }
        }

        if (array_key_exists("AudioSet",$param) and $param["AudioSet"] !== null) {
            $this->AudioSet = [];
            foreach ($param["AudioSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskAudioInput();
                $obj->deserialize($value);
                array_push($this->AudioSet, $obj);
            }
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskSubtitleInput();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }
    }
}
