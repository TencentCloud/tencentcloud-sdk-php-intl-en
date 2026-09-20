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
 * Intelligent tag result information.
 *
 * @method array getTagSet() Obtain Video intelligent tag list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to TagSetFileUrl.
 * @method void setTagSet(array $TagSet) Set Video intelligent tag list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to TagSetFileUrl.
 * @method string getTagSetFileUrl() Obtain URL of the video intelligent tag list file. The content of the file is JSON, and the data structure is consistent with the TagSet fields. The file is not retained permanently and will be deleted after the TagSetFileUrlExpireTime time point is reached.
 * @method void setTagSetFileUrl(string $TagSetFileUrl) Set URL of the video intelligent tag list file. The content of the file is JSON, and the data structure is consistent with the TagSet fields. The file is not retained permanently and will be deleted after the TagSetFileUrlExpireTime time point is reached.
 * @method string getTagSetFileUrlExpireTime() Obtain Expiration time of the video intelligent tag list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setTagSetFileUrlExpireTime(string $TagSetFileUrlExpireTime) Set Expiration time of the video intelligent tag list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiAnalysisTaskTagOutput extends AbstractModel
{
    /**
     * @var array Video intelligent tag list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to TagSetFileUrl.
     */
    public $TagSet;

    /**
     * @var string URL of the video intelligent tag list file. The content of the file is JSON, and the data structure is consistent with the TagSet fields. The file is not retained permanently and will be deleted after the TagSetFileUrlExpireTime time point is reached.
     */
    public $TagSetFileUrl;

    /**
     * @var string Expiration time of the video intelligent tag list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $TagSetFileUrlExpireTime;

    /**
     * @param array $TagSet Video intelligent tag list.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to TagSetFileUrl.
     * @param string $TagSetFileUrl URL of the video intelligent tag list file. The content of the file is JSON, and the data structure is consistent with the TagSet fields. The file is not retained permanently and will be deleted after the TagSetFileUrlExpireTime time point is reached.
     * @param string $TagSetFileUrlExpireTime Expiration time of the video intelligent tag list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new MediaAiAnalysisTagItem();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("TagSetFileUrl",$param) and $param["TagSetFileUrl"] !== null) {
            $this->TagSetFileUrl = $param["TagSetFileUrl"];
        }

        if (array_key_exists("TagSetFileUrlExpireTime",$param) and $param["TagSetFileUrlExpireTime"] !== null) {
            $this->TagSetFileUrlExpireTime = $param["TagSetFileUrlExpireTime"];
        }
    }
}
