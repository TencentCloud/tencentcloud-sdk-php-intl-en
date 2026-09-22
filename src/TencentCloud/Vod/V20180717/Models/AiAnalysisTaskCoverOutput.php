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
 * Intelligent cover result information.
 *
 * @method array getCoverSet() Obtain List of smart covers.
<font color=red>Note</font>: This list only shows the first 100 elements. To obtain the complete result, get it from the file corresponding to CoverSetFileUrl.
 * @method void setCoverSet(array $CoverSet) Set List of smart covers.
<font color=red>Note</font>: This list only shows the first 100 elements. To obtain the complete result, get it from the file corresponding to CoverSetFileUrl.
 * @method string getCoverSetFileUrl() Obtain URL of the intelligent cover list file. The content of the file is in JSON format, and the data structure is consistent with the CoverSet fields. (The file is not retained permanently. It will be deleted after the CoverSetFileUrlExpireTime time point is reached.)
 * @method void setCoverSetFileUrl(string $CoverSetFileUrl) Set URL of the intelligent cover list file. The content of the file is in JSON format, and the data structure is consistent with the CoverSet fields. (The file is not retained permanently. It will be deleted after the CoverSetFileUrlExpireTime time point is reached.)
 * @method string getCoverSetFileUrlExpireTime() Obtain Expiration time of the intelligent cover list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCoverSetFileUrlExpireTime(string $CoverSetFileUrlExpireTime) Set Expiration time of the intelligent cover list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiAnalysisTaskCoverOutput extends AbstractModel
{
    /**
     * @var array List of smart covers.
<font color=red>Note</font>: This list only shows the first 100 elements. To obtain the complete result, get it from the file corresponding to CoverSetFileUrl.
     */
    public $CoverSet;

    /**
     * @var string URL of the intelligent cover list file. The content of the file is in JSON format, and the data structure is consistent with the CoverSet fields. (The file is not retained permanently. It will be deleted after the CoverSetFileUrlExpireTime time point is reached.)
     */
    public $CoverSetFileUrl;

    /**
     * @var string Expiration time of the intelligent cover list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CoverSetFileUrlExpireTime;

    /**
     * @param array $CoverSet List of smart covers.
<font color=red>Note</font>: This list only shows the first 100 elements. To obtain the complete result, get it from the file corresponding to CoverSetFileUrl.
     * @param string $CoverSetFileUrl URL of the intelligent cover list file. The content of the file is in JSON format, and the data structure is consistent with the CoverSet fields. (The file is not retained permanently. It will be deleted after the CoverSetFileUrlExpireTime time point is reached.)
     * @param string $CoverSetFileUrlExpireTime Expiration time of the intelligent cover list file URL, using the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("CoverSet",$param) and $param["CoverSet"] !== null) {
            $this->CoverSet = [];
            foreach ($param["CoverSet"] as $key => $value){
                $obj = new MediaAiAnalysisCoverItem();
                $obj->deserialize($value);
                array_push($this->CoverSet, $obj);
            }
        }

        if (array_key_exists("CoverSetFileUrl",$param) and $param["CoverSetFileUrl"] !== null) {
            $this->CoverSetFileUrl = $param["CoverSetFileUrl"];
        }

        if (array_key_exists("CoverSetFileUrlExpireTime",$param) and $param["CoverSetFileUrlExpireTime"] !== null) {
            $this->CoverSetFileUrlExpireTime = $param["CoverSetFileUrlExpireTime"];
        }
    }
}
