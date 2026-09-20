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
 * Text keyword recognition output.
 *
 * @method array getResultSet() Obtain Text keyword recognition result set.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the corresponding file at ResultSetFileUrl.
 * @method void setResultSet(array $ResultSet) Set Text keyword recognition result set.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the corresponding file at ResultSetFileUrl.
 * @method string getResultSetFileUrl() Obtain URL of the text keyword recognition result set file. The file content is in JSON format, and the data structure is consistent with the ResultSet fields. (The file is not retained permanently and will be deleted after the ResultSetFileUrlExpireTime time point.)
 * @method void setResultSetFileUrl(string $ResultSetFileUrl) Set URL of the text keyword recognition result set file. The file content is in JSON format, and the data structure is consistent with the ResultSet fields. (The file is not retained permanently and will be deleted after the ResultSetFileUrlExpireTime time point.)
 * @method string getResultSetFileUrlExpireTime() Obtain Expiration time of the text keyword recognition result set file URL, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setResultSetFileUrlExpireTime(string $ResultSetFileUrlExpireTime) Set Expiration time of the text keyword recognition result set file URL, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiRecognitionTaskOcrWordsResultOutput extends AbstractModel
{
    /**
     * @var array Text keyword recognition result set.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the corresponding file at ResultSetFileUrl.
     */
    public $ResultSet;

    /**
     * @var string URL of the text keyword recognition result set file. The file content is in JSON format, and the data structure is consistent with the ResultSet fields. (The file is not retained permanently and will be deleted after the ResultSetFileUrlExpireTime time point.)
     */
    public $ResultSetFileUrl;

    /**
     * @var string Expiration time of the text keyword recognition result set file URL, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ResultSetFileUrlExpireTime;

    /**
     * @param array $ResultSet Text keyword recognition result set.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the corresponding file at ResultSetFileUrl.
     * @param string $ResultSetFileUrl URL of the text keyword recognition result set file. The file content is in JSON format, and the data structure is consistent with the ResultSet fields. (The file is not retained permanently and will be deleted after the ResultSetFileUrlExpireTime time point.)
     * @param string $ResultSetFileUrlExpireTime Expiration time of the text keyword recognition result set file URL, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
