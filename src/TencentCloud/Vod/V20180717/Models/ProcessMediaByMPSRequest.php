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
 * ProcessMediaByMPS request structure.
 *
 * @method string getFileId() Obtain <p>Media file ID, the globally unique ID of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method void setFileId(string $FileId) Set <p>Media file ID, the globally unique ID of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
 * @method string getMPSProcessMediaParams() Obtain <p>Optional parameter. This parameter is used for passing through to the media processing service (MPS) to trigger MPS video processing tasks from VOD.
 * @method void setMPSProcessMediaParams(string $MPSProcessMediaParams) Set <p>Optional parameter. This parameter is used for passing through to the media processing service (MPS) to trigger MPS video processing tasks from VOD.
 * @method MPSAiAnalysisTaskInput getAiAnalysisTask() Obtain <p>Parameters for the video content analysis task. Valid when MPSProcessMediaParams is empty.</p>
 * @method void setAiAnalysisTask(MPSAiAnalysisTaskInput $AiAnalysisTask) Set <p>Parameters for the video content analysis task. Valid when MPSProcessMediaParams is empty.</p>
 * @method MPSSmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain <p>Parameters for the smart subtitle task of type kind. Valid when MPSProcessMediaParams is empty.</p>
 * @method void setSmartSubtitlesTask(MPSSmartSubtitlesTaskInput $SmartSubtitlesTask) Set <p>Parameters for the smart subtitle task of type kind. Valid when MPSProcessMediaParams is empty.</p>
 * @method MPSSmartEraseTaskInput getSmartEraseTask() Obtain <p>Parameters for the intelligent erasure task of type kind. Valid when MPSProcessMediaParams is empty.</p>
 * @method void setSmartEraseTask(MPSSmartEraseTaskInput $SmartEraseTask) Set <p>Parameters for the intelligent erasure task of type kind. Valid when MPSProcessMediaParams is empty.</p>
 * @method string getExtInfo() Obtain <p>Reserved field. Used for special purpose.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field. Used for special purpose.</p>
 */
class ProcessMediaByMPSRequest extends AbstractModel
{
    /**
     * @var string <p>Media file ID, the globally unique ID of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     */
    public $FileId;

    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Optional parameter. This parameter is used for passing through to the media processing service (MPS) to trigger MPS video processing tasks from VOD.
     */
    public $MPSProcessMediaParams;

    /**
     * @var MPSAiAnalysisTaskInput <p>Parameters for the video content analysis task. Valid when MPSProcessMediaParams is empty.</p>
     */
    public $AiAnalysisTask;

    /**
     * @var MPSSmartSubtitlesTaskInput <p>Parameters for the smart subtitle task of type kind. Valid when MPSProcessMediaParams is empty.</p>
     */
    public $SmartSubtitlesTask;

    /**
     * @var MPSSmartEraseTaskInput <p>Parameters for the intelligent erasure task of type kind. Valid when MPSProcessMediaParams is empty.</p>
     */
    public $SmartEraseTask;

    /**
     * @var string <p>Reserved field. Used for special purpose.</p>
     */
    public $ExtInfo;

    /**
     * @param string $FileId <p>Media file ID, the globally unique ID of the file in VOD, is assigned by the VOD backend after successful upload. You can get this field in <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID.</b></p>
     * @param string $MPSProcessMediaParams <p>Optional parameter. This parameter is used for passing through to the media processing service (MPS) to trigger MPS video processing tasks from VOD.
     * @param MPSAiAnalysisTaskInput $AiAnalysisTask <p>Parameters for the video content analysis task. Valid when MPSProcessMediaParams is empty.</p>
     * @param MPSSmartSubtitlesTaskInput $SmartSubtitlesTask <p>Parameters for the smart subtitle task of type kind. Valid when MPSProcessMediaParams is empty.</p>
     * @param MPSSmartEraseTaskInput $SmartEraseTask <p>Parameters for the intelligent erasure task of type kind. Valid when MPSProcessMediaParams is empty.</p>
     * @param string $ExtInfo <p>Reserved field. Used for special purpose.</p>
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

        if (array_key_exists("MPSProcessMediaParams",$param) and $param["MPSProcessMediaParams"] !== null) {
            $this->MPSProcessMediaParams = $param["MPSProcessMediaParams"];
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new MPSAiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new MPSSmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("SmartEraseTask",$param) and $param["SmartEraseTask"] !== null) {
            $this->SmartEraseTask = new MPSSmartEraseTaskInput();
            $this->SmartEraseTask->deserialize($param["SmartEraseTask"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
