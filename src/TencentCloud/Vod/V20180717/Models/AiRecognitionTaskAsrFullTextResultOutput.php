<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method array getSegmentSet() Obtain List of full-text speech recognition segments
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
 * @method void setSegmentSet(array $SegmentSet) Set List of full-text speech recognition segments
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
 * @method string getSegmentSetFileUrl() Obtain URL to the file of the list for full-text speech recognition segments. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL to the file of the list for full-text speech recognition segments. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
 * @method string getSegmentSetFileUrlExpireTime() Obtain The expiration time of the URLs of full-text speech recognition segments in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set The expiration time of the URLs of full-text speech recognition segments in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
 * @method array getSubtitleSet() Obtain The subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 * @method void setSubtitleSet(array $SubtitleSet) Set The subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 * @method string getSubtitleUrl() Obtain The URLs of the subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 * @method void setSubtitleUrl(string $SubtitleUrl) Set The URLs of the subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
 */
class AiRecognitionTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array List of full-text speech recognition segments
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
     */
    public $SegmentSet;

    /**
     * @var string URL to the file of the list for full-text speech recognition segments. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
     */
    public $SegmentSetFileUrl;

    /**
     * @var string The expiration time of the URLs of full-text speech recognition segments in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @var array The subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
     */
    public $SubtitleSet;

    /**
     * @var string The URLs of the subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
     */
    public $SubtitleUrl;

    /**
     * @param array $SegmentSet List of full-text speech recognition segments
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
     * @param string $SegmentSetFileUrl URL to the file of the list for full-text speech recognition segments. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
     * @param string $SegmentSetFileUrlExpireTime The expiration time of the URLs of full-text speech recognition segments in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
     * @param array $SubtitleSet The subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
     * @param string $SubtitleUrl The URLs of the subtitle files generated, whose format is determined by the `SubtitleFormats` parameter of [AsrFullTextConfigureInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#AsrFullTextConfigureInfo).
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
