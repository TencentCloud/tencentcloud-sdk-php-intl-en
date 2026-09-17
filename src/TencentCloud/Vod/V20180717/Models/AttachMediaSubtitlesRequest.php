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
 * AttachMediaSubtitles request structure.
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getOperation() Obtain 
 * @method void setOperation(string $Operation) Set 
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain 
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set 
 * @method array getSubtitleIds() Obtain 
 * @method void setSubtitleIds(array $SubtitleIds) Set 
 * @method string getDefaultSubtitleId() Obtain 
 * @method void setDefaultSubtitleId(string $DefaultSubtitleId) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 */
class AttachMediaSubtitlesRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $Operation;

    /**
     * @var integer 
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var array 
     */
    public $SubtitleIds;

    /**
     * @var string 
     */
    public $DefaultSubtitleId;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @param string $FileId 
     * @param string $Operation 
     * @param integer $AdaptiveDynamicStreamingDefinition 
     * @param array $SubtitleIds 
     * @param string $DefaultSubtitleId 
     * @param integer $SubAppId 
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("SubtitleIds",$param) and $param["SubtitleIds"] !== null) {
            $this->SubtitleIds = $param["SubtitleIds"];
        }

        if (array_key_exists("DefaultSubtitleId",$param) and $param["DefaultSubtitleId"] !== null) {
            $this->DefaultSubtitleId = $param["DefaultSubtitleId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
