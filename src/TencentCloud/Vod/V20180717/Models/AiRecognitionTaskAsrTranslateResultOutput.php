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
 * Voice translation result.
 *
 * @method array getSegmentSet() Obtain Voice translation clip list.
<font color=red>Note</font>: The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set Voice translation clip list.
<font color=red>Note</font>: The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of Speech Translation Clip List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of Speech Translation Clip List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the URL for the speech translation clip list file, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the URL for the speech translation clip list file, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method array getSubtitleSet() Obtain Generated subtitle list.
 * @method void setSubtitleSet(array $SubtitleSet) Set Generated subtitle list.
 */
class AiRecognitionTaskAsrTranslateResultOutput extends AbstractModel
{
    /**
     * @var array Voice translation clip list.
<font color=red>Note</font>: The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of Speech Translation Clip List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the URL for the speech translation clip list file, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @var array Generated subtitle list.
     */
    public $SubtitleSet;

    /**
     * @param array $SegmentSet Voice translation clip list.
<font color=red>Note</font>: The list only displays the first 100 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of Speech Translation Clip List File. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the URL for the speech translation clip list file, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param array $SubtitleSet Generated subtitle list.
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskAsrTranslateSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new AiRecognitionTaskAsrFullTextResultOutputSubtitleItem();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }
    }
}
