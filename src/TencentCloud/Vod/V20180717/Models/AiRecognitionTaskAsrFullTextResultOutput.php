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
 * Full speech recognition result.
 *
 * @method array getSegmentSet() Obtain Segments undergone full speech recognition.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set Segments undergone full speech recognition.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the Segment List File for full speech recognition. The content of the file is in JSON format, and its data structure is consistent with the SegmentSet field. (The file is not retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the Segment List File for full speech recognition. The content of the file is in JSON format, and its data structure is consistent with the SegmentSet field. (The file is not retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the speech full text recognition segment list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the speech full text recognition segment list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method array getSubtitleSet() Obtain Generated subtitle list, corresponding to SubtitleFormats in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 * @method void setSubtitleSet(array $SubtitleSet) Set Generated subtitle list, corresponding to SubtitleFormats in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 * @method string getSubtitleUrl() Obtain Generated subtitle file Url, corresponding to SubtitleFormat in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 * @method void setSubtitleUrl(string $SubtitleUrl) Set Generated subtitle file Url, corresponding to SubtitleFormat in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 */
class AiRecognitionTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array Segments undergone full speech recognition.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the Segment List File for full speech recognition. The content of the file is in JSON format, and its data structure is consistent with the SegmentSet field. (The file is not retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the speech full text recognition segment list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @var array Generated subtitle list, corresponding to SubtitleFormats in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
     */
    public $SubtitleSet;

    /**
     * @var string Generated subtitle file Url, corresponding to SubtitleFormat in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
     */
    public $SubtitleUrl;

    /**
     * @param array $SegmentSet Segments undergone full speech recognition.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the Segment List File for full speech recognition. The content of the file is in JSON format, and its data structure is consistent with the SegmentSet field. (The file is not retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the speech full text recognition segment list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param array $SubtitleSet Generated subtitle list, corresponding to SubtitleFormats in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
     * @param string $SubtitleUrl Generated subtitle file Url, corresponding to SubtitleFormat in [speech full-text recognition task control parameter](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
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
                $obj = new AiRecognitionTaskAsrFullTextSegmentItem();
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

        if (array_key_exists("SubtitleUrl",$param) and $param["SubtitleUrl"] !== null) {
            $this->SubtitleUrl = $param["SubtitleUrl"];
        }
    }
}
