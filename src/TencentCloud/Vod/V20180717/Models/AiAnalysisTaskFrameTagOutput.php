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
 * Intelligent frame tagging result information.
 *
 * @method array getSegmentSet() Obtain List of videos by frame tag.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of videos by frame tag.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the video frame tag list file. The content of the file is JSON, and the data structure is consistent with the SegmentSet fields. The file is not retained permanently and will be deleted after the SegmentSetFileUrlExpireTime time point is reached.
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the video frame tag list file. The content of the file is JSON, and the data structure is consistent with the SegmentSet fields. The file is not retained permanently and will be deleted after the SegmentSetFileUrlExpireTime time point is reached.
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the video frame tagging list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the video frame tagging list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiAnalysisTaskFrameTagOutput extends AbstractModel
{
    /**
     * @var array List of videos by frame tag.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the video frame tag list file. The content of the file is JSON, and the data structure is consistent with the SegmentSet fields. The file is not retained permanently and will be deleted after the SegmentSetFileUrlExpireTime time point is reached.
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the video frame tagging list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param array $SegmentSet List of videos by frame tag.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the video frame tag list file. The content of the file is JSON, and the data structure is consistent with the SegmentSet fields. The file is not retained permanently and will be deleted after the SegmentSetFileUrlExpireTime time point is reached.
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the video frame tagging list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
                $obj = new MediaAiAnalysisFrameTagSegmentItem();
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
    }
}
