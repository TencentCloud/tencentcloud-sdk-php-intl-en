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
 * Intelligent classification result info
 *
 * @method array getClassificationSet() Obtain Video intelligent classification list.
<font color=red>Note</font>: This list can only show up to the first 100 elements. To obtain the complete result, get it from the file corresponding to ClassificationSetFileUrl.
 * @method void setClassificationSet(array $ClassificationSet) Set Video intelligent classification list.
<font color=red>Note</font>: This list can only show up to the first 100 elements. To obtain the complete result, get it from the file corresponding to ClassificationSetFileUrl.
 * @method string getClassificationSetFileUrl() Obtain Video intelligent classification list file URL. The content of the file is in JSON format, and its data structure is consistent with the ClassificationSet fields. (The file is not retained permanently. It will be deleted after reaching the ClassificationSetFileUrlExpireTime time point.)
 * @method void setClassificationSetFileUrl(string $ClassificationSetFileUrl) Set Video intelligent classification list file URL. The content of the file is in JSON format, and its data structure is consistent with the ClassificationSet fields. (The file is not retained permanently. It will be deleted after reaching the ClassificationSetFileUrlExpireTime time point.)
 * @method string getClassificationSetFileUrlExpireTime() Obtain Expiration time of the video intelligent classification list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setClassificationSetFileUrlExpireTime(string $ClassificationSetFileUrlExpireTime) Set Expiration time of the video intelligent classification list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiAnalysisTaskClassificationOutput extends AbstractModel
{
    /**
     * @var array Video intelligent classification list.
<font color=red>Note</font>: This list can only show up to the first 100 elements. To obtain the complete result, get it from the file corresponding to ClassificationSetFileUrl.
     */
    public $ClassificationSet;

    /**
     * @var string Video intelligent classification list file URL. The content of the file is in JSON format, and its data structure is consistent with the ClassificationSet fields. (The file is not retained permanently. It will be deleted after reaching the ClassificationSetFileUrlExpireTime time point.)
     */
    public $ClassificationSetFileUrl;

    /**
     * @var string Expiration time of the video intelligent classification list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ClassificationSetFileUrlExpireTime;

    /**
     * @param array $ClassificationSet Video intelligent classification list.
<font color=red>Note</font>: This list can only show up to the first 100 elements. To obtain the complete result, get it from the file corresponding to ClassificationSetFileUrl.
     * @param string $ClassificationSetFileUrl Video intelligent classification list file URL. The content of the file is in JSON format, and its data structure is consistent with the ClassificationSet fields. (The file is not retained permanently. It will be deleted after reaching the ClassificationSetFileUrlExpireTime time point.)
     * @param string $ClassificationSetFileUrlExpireTime Expiration time of the video intelligent classification list file URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("ClassificationSet",$param) and $param["ClassificationSet"] !== null) {
            $this->ClassificationSet = [];
            foreach ($param["ClassificationSet"] as $key => $value){
                $obj = new MediaAiAnalysisClassificationItem();
                $obj->deserialize($value);
                array_push($this->ClassificationSet, $obj);
            }
        }

        if (array_key_exists("ClassificationSetFileUrl",$param) and $param["ClassificationSetFileUrl"] !== null) {
            $this->ClassificationSetFileUrl = $param["ClassificationSetFileUrl"];
        }

        if (array_key_exists("ClassificationSetFileUrlExpireTime",$param) and $param["ClassificationSetFileUrlExpireTime"] !== null) {
            $this->ClassificationSetFileUrlExpireTime = $param["ClassificationSetFileUrlExpireTime"];
        }
    }
}
