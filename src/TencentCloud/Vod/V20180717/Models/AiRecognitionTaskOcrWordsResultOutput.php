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
 * Output of text keyword recognition.
 *
 * @method array getResultSet() Obtain Text keyword recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
 * @method void setResultSet(array $ResultSet) Set Text keyword recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
 * @method string getResultSetFileUrl() Obtain URL to the file of the text keyword recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
 * @method void setResultSetFileUrl(string $ResultSetFileUrl) Set URL to the file of the text keyword recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
 * @method string getResultSetFileUrlExpireTime() Obtain Expiration time of the URL to the file of the text keyword recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 * @method void setResultSetFileUrlExpireTime(string $ResultSetFileUrlExpireTime) Set Expiration time of the URL to the file of the text keyword recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
 */
class AiRecognitionTaskOcrWordsResultOutput extends AbstractModel
{
    /**
     * @var array Text keyword recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
     */
    public $ResultSet;

    /**
     * @var string URL to the file of the text keyword recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
     */
    public $ResultSetFileUrl;

    /**
     * @var string Expiration time of the URL to the file of the text keyword recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
     */
    public $ResultSetFileUrlExpireTime;

    /**
     * @param array $ResultSet Text keyword recognition result set
<font color=red>Note</font>: this list displays up to the first 100 results. You can get all the results from the file whose URL is `SegmentSetFileUrl`.
     * @param string $ResultSetFileUrl URL to the file of the text keyword recognition result set. The file format is JSON, and the data structure is the same as `SegmentSet`. The file will be deleted upon the expiration time `SegmentSetFileUrlExpireTime`, instead of being stored permanently.
     * @param string $ResultSetFileUrlExpireTime Expiration time of the URL to the file of the text keyword recognition result set, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732)
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
        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = [];
            foreach ($param["ResultSet"] as $key => $value){
                $obj = new AiRecognitionTaskOcrWordsResultItem();
                $obj->deserialize($value);
                array_push($this->ResultSet, $obj);
            }
        }

        if (array_key_exists("ResultSetFileUrl",$param) and $param["ResultSetFileUrl"] !== null) {
            $this->ResultSetFileUrl = $param["ResultSetFileUrl"];
        }

        if (array_key_exists("ResultSetFileUrlExpireTime",$param) and $param["ResultSetFileUrlExpireTime"] !== null) {
            $this->ResultSetFileUrlExpireTime = $param["ResultSetFileUrlExpireTime"];
        }
    }
}
