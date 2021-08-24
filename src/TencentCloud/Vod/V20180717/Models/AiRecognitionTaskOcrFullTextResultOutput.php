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
 * Output of full text recognition.
 *
 * @method array getSegmentSet() Obtain Full-text recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
 * @method void setSegmentSet(array $SegmentSet) Set Full-text recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
 * @method string getSegmentSetFileUrl() Obtain URL to the file of the full-text recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL to the file of the full-text recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the URL to the file of the full-text recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the URL to the file of the full-text recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 */
class AiRecognitionTaskOcrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array Full-text recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
     */
    public $SegmentSet;

    /**
     * @var string URL to the file of the full-text recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the URL to the file of the full-text recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param array $SegmentSet Full-text recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
     * @param string $SegmentSetFileUrl URL to the file of the full-text recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the URL to the file of the full-text recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
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
                $obj = new AiRecognitionTaskOcrFullTextSegmentItem();
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
