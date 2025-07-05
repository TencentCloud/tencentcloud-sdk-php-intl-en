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
 * Information of the intelligent highlight generating result
 *
 * @method array getHighlightSet() Obtain List of intelligently generated highlights
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `HighlightSetFileUrl`.
 * @method void setHighlightSet(array $HighlightSet) Set List of intelligently generated highlights
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `HighlightSetFileUrl`.
 * @method string getHighlightSetFileUrl() Obtain URL to the file for intelligently generated highlights. The file is in JSON format and has the same data structure as `HighlightSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `HighlightSetFileUrlExpireTime`.
 * @method void setHighlightSetFileUrl(string $HighlightSetFileUrl) Set URL to the file for intelligently generated highlights. The file is in JSON format and has the same data structure as `HighlightSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `HighlightSetFileUrlExpireTime`.
 * @method string getHighlightSetFileUrlExpireTime() Obtain Expiration time of the URL to the file for intelligently generated highlights, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
 * @method void setHighlightSetFileUrlExpireTime(string $HighlightSetFileUrlExpireTime) Set Expiration time of the URL to the file for intelligently generated highlights, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
 */
class AiAnalysisTaskHighlightOutput extends AbstractModel
{
    /**
     * @var array List of intelligently generated highlights
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `HighlightSetFileUrl`.
     */
    public $HighlightSet;

    /**
     * @var string URL to the file for intelligently generated highlights. The file is in JSON format and has the same data structure as `HighlightSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `HighlightSetFileUrlExpireTime`.
     */
    public $HighlightSetFileUrl;

    /**
     * @var string Expiration time of the URL to the file for intelligently generated highlights, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
     */
    public $HighlightSetFileUrlExpireTime;

    /**
     * @param array $HighlightSet List of intelligently generated highlights
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `HighlightSetFileUrl`.
     * @param string $HighlightSetFileUrl URL to the file for intelligently generated highlights. The file is in JSON format and has the same data structure as `HighlightSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `HighlightSetFileUrlExpireTime`.
     * @param string $HighlightSetFileUrlExpireTime Expiration time of the URL to the file for intelligently generated highlights, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
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
