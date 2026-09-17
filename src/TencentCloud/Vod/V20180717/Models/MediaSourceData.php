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
 * 
 *
 * @method string getSourceType() Obtain 
 * @method void setSourceType(string $SourceType) Set 
 * @method string getSourceContext() Obtain 
 * @method void setSourceContext(string $SourceContext) Set 
 * @method LiveRecordInfo getLiveRecordInfo() Obtain 
 * @method void setLiveRecordInfo(LiveRecordInfo $LiveRecordInfo) Set 
 * @method TrtcRecordInfo getTrtcRecordInfo() Obtain 
 * @method void setTrtcRecordInfo(TrtcRecordInfo $TrtcRecordInfo) Set 
 * @method WebPageRecordInfo getWebPageRecordInfo() Obtain 
 * @method void setWebPageRecordInfo(WebPageRecordInfo $WebPageRecordInfo) Set 
 */
class MediaSourceData extends AbstractModel
{
    /**
     * @var string 
     */
    public $SourceType;

    /**
     * @var string 
     */
    public $SourceContext;

    /**
     * @var LiveRecordInfo 
     */
    public $LiveRecordInfo;

    /**
     * @var TrtcRecordInfo 
     */
    public $TrtcRecordInfo;

    /**
     * @var WebPageRecordInfo 
     */
    public $WebPageRecordInfo;

    /**
     * @param string $SourceType 
     * @param string $SourceContext 
     * @param LiveRecordInfo $LiveRecordInfo 
     * @param TrtcRecordInfo $TrtcRecordInfo 
     * @param WebPageRecordInfo $WebPageRecordInfo 
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }

        if (array_key_exists("LiveRecordInfo",$param) and $param["LiveRecordInfo"] !== null) {
            $this->LiveRecordInfo = new LiveRecordInfo();
            $this->LiveRecordInfo->deserialize($param["LiveRecordInfo"]);
        }

        if (array_key_exists("TrtcRecordInfo",$param) and $param["TrtcRecordInfo"] !== null) {
            $this->TrtcRecordInfo = new TrtcRecordInfo();
            $this->TrtcRecordInfo->deserialize($param["TrtcRecordInfo"]);
        }

        if (array_key_exists("WebPageRecordInfo",$param) and $param["WebPageRecordInfo"] !== null) {
            $this->WebPageRecordInfo = new WebPageRecordInfo();
            $this->WebPageRecordInfo->deserialize($param["WebPageRecordInfo"]);
        }
    }
}
