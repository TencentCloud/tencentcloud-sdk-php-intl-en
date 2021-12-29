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
 * Result information of intelligent cover generating
 *
 * @method array getCoverSet() Obtain List of intelligently generated thumbnails
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `CoverSetFileUrl`.
 * @method void setCoverSet(array $CoverSet) Set List of intelligently generated thumbnails
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `CoverSetFileUrl`.
 * @method string getCoverSetFileUrl() Obtain URL to the file for intelligently generated thumbnails. The file is in JSON format and has the same data structure as `CoverSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `CoverSetFileUrlExpireTime`.
 * @method void setCoverSetFileUrl(string $CoverSetFileUrl) Set URL to the file for intelligently generated thumbnails. The file is in JSON format and has the same data structure as `CoverSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `CoverSetFileUrlExpireTime`.
 * @method string getCoverSetFileUrlExpireTime() Obtain Expiration time of the URL to the file for intelligently generated thumbnails, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
 * @method void setCoverSetFileUrlExpireTime(string $CoverSetFileUrlExpireTime) Set Expiration time of the URL to the file for intelligently generated thumbnails, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
 */
class AiAnalysisTaskCoverOutput extends AbstractModel
{
    /**
     * @var array List of intelligently generated thumbnails
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `CoverSetFileUrl`.
     */
    public $CoverSet;

    /**
     * @var string URL to the file for intelligently generated thumbnails. The file is in JSON format and has the same data structure as `CoverSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `CoverSetFileUrlExpireTime`.
     */
    public $CoverSetFileUrl;

    /**
     * @var string Expiration time of the URL to the file for intelligently generated thumbnails, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
     */
    public $CoverSetFileUrlExpireTime;

    /**
     * @param array $CoverSet List of intelligently generated thumbnails
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `CoverSetFileUrl`.
     * @param string $CoverSetFileUrl URL to the file for intelligently generated thumbnails. The file is in JSON format and has the same data structure as `CoverSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `CoverSetFileUrlExpireTime`.
     * @param string $CoverSetFileUrlExpireTime Expiration time of the URL to the file for intelligently generated thumbnails, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
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
