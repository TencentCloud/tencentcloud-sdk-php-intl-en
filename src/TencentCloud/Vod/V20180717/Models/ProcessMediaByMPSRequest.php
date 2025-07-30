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
 * @method string getFileId() Obtain Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
 * @method void setFileId(string $FileId) Set Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID.</b>
 * @method string getMPSProcessMediaParams() Obtain This parameter is used for passing through to media processing service (MPS) so that video processing tasks can be triggered from VOD.
For detailed information on video processing parameters, please refer to [MPS Initiate Media Processing](https://www.tencentcloud.com/document/product/1041/33640). 
Instructions: 
1. Currently, only the AiAnalysisTask parameter in the MPS "ProcessMedia" API needs to be configured. Other parameters are not required. If other parameters are included, the system will automatically ignore them. 
2. Currently, this is the only method used to initiate Smart Erase tasks. If parameters related to other task types are configured, the system will automatically ignore them.

 * @method void setMPSProcessMediaParams(string $MPSProcessMediaParams) Set This parameter is used for passing through to media processing service (MPS) so that video processing tasks can be triggered from VOD.
For detailed information on video processing parameters, please refer to [MPS Initiate Media Processing](https://www.tencentcloud.com/document/product/1041/33640). 
Instructions: 
1. Currently, only the AiAnalysisTask parameter in the MPS "ProcessMedia" API needs to be configured. Other parameters are not required. If other parameters are included, the system will automatically ignore them. 
2. Currently, this is the only method used to initiate Smart Erase tasks. If parameters related to other task types are configured, the system will automatically ignore them.
 */
class ProcessMediaByMPSRequest extends AbstractModel
{
    /**
     * @var string Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
     */
    public $FileId;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID.</b>
     */
    public $SubAppId;

    /**
     * @var string This parameter is used for passing through to media processing service (MPS) so that video processing tasks can be triggered from VOD.
For detailed information on video processing parameters, please refer to [MPS Initiate Media Processing](https://www.tencentcloud.com/document/product/1041/33640). 
Instructions: 
1. Currently, only the AiAnalysisTask parameter in the MPS "ProcessMedia" API needs to be configured. Other parameters are not required. If other parameters are included, the system will automatically ignore them. 
2. Currently, this is the only method used to initiate Smart Erase tasks. If parameters related to other task types are configured, the system will automatically ignore them.

     */
    public $MPSProcessMediaParams;

    /**
     * @param string $FileId Media file ID, i.e., the globally unique ID of a file in VOD assigned by the VOD backend after successful upload. This field can be obtained through the [video upload completion event notification](https://intl.cloud.tencent.com/document/product/266/7830?from_cn_redirect=1) or [VOD Console](https://console.cloud.tencent.com/vod/media).
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID.</b>
     * @param string $MPSProcessMediaParams This parameter is used for passing through to media processing service (MPS) so that video processing tasks can be triggered from VOD.
For detailed information on video processing parameters, please refer to [MPS Initiate Media Processing](https://www.tencentcloud.com/document/product/1041/33640). 
Instructions: 
1. Currently, only the AiAnalysisTask parameter in the MPS "ProcessMedia" API needs to be configured. Other parameters are not required. If other parameters are included, the system will automatically ignore them. 
2. Currently, this is the only method used to initiate Smart Erase tasks. If parameters related to other task types are configured, the system will automatically ignore them.
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
    }
}
