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
 * Intelligent highlight result.
 *
 * @method array getHighlightSet() Obtain Intelligent video highlight list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to HighlightSetFileUrl.
 * @method void setHighlightSet(array $HighlightSet) Set Intelligent video highlight list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to HighlightSetFileUrl.
 * @method string getHighlightSetFileUrl() Obtain URL of the video intelligent highlight list file. The content of the file is JSON, and the data structure is consistent with the HighlightSet fields. The file is not retained permanently and will be deleted after the HighlightSetFileUrlExpireTime time point is reached.
 * @method void setHighlightSetFileUrl(string $HighlightSetFileUrl) Set URL of the video intelligent highlight list file. The content of the file is JSON, and the data structure is consistent with the HighlightSet fields. The file is not retained permanently and will be deleted after the HighlightSetFileUrlExpireTime time point is reached.
 * @method string getHighlightSetFileUrlExpireTime() Obtain Expiration time of the video intelligent highlight list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setHighlightSetFileUrlExpireTime(string $HighlightSetFileUrlExpireTime) Set Expiration time of the video intelligent highlight list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiAnalysisTaskHighlightOutput extends AbstractModel
{
    /**
     * @var array Intelligent video highlight list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to HighlightSetFileUrl.
     */
    public $HighlightSet;

    /**
     * @var string URL of the video intelligent highlight list file. The content of the file is JSON, and the data structure is consistent with the HighlightSet fields. The file is not retained permanently and will be deleted after the HighlightSetFileUrlExpireTime time point is reached.
     */
    public $HighlightSetFileUrl;

    /**
     * @var string Expiration time of the video intelligent highlight list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $HighlightSetFileUrlExpireTime;

    /**
     * @param array $HighlightSet Intelligent video highlight list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to HighlightSetFileUrl.
     * @param string $HighlightSetFileUrl URL of the video intelligent highlight list file. The content of the file is JSON, and the data structure is consistent with the HighlightSet fields. The file is not retained permanently and will be deleted after the HighlightSetFileUrlExpireTime time point is reached.
     * @param string $HighlightSetFileUrlExpireTime Expiration time of the video intelligent highlight list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("HighlightSet",$param) and $param["HighlightSet"] !== null) {
            $this->HighlightSet = [];
            foreach ($param["HighlightSet"] as $key => $value){
                $obj = new MediaAiAnalysisHighlightItem();
                $obj->deserialize($value);
                array_push($this->HighlightSet, $obj);
            }
        }

        if (array_key_exists("HighlightSetFileUrl",$param) and $param["HighlightSetFileUrl"] !== null) {
            $this->HighlightSetFileUrl = $param["HighlightSetFileUrl"];
        }

        if (array_key_exists("HighlightSetFileUrlExpireTime",$param) and $param["HighlightSetFileUrlExpireTime"] !== null) {
            $this->HighlightSetFileUrlExpireTime = $param["HighlightSetFileUrlExpireTime"];
        }
    }
}
