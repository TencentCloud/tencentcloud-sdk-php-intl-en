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
 * 
 *
 * @method array getResultSet() Obtain 
 * @method void setResultSet(array $ResultSet) Set 
 * @method string getResultSetFileUrl() Obtain 
 * @method void setResultSetFileUrl(string $ResultSetFileUrl) Set 
 * @method string getResultSetFileUrlExpireTime() Obtain 
 * @method void setResultSetFileUrlExpireTime(string $ResultSetFileUrlExpireTime) Set 
 */
class AiRecognitionTaskAsrWordsResultOutput extends AbstractModel
{
    /**
     * @var array 
     */
    public $ResultSet;

    /**
     * @var string 
     */
    public $ResultSetFileUrl;

    /**
     * @var string 
     */
    public $ResultSetFileUrlExpireTime;

    /**
     * @param array $ResultSet 
     * @param string $ResultSetFileUrl 
     * @param string $ResultSetFileUrlExpireTime 
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
                $obj = new AiRecognitionTaskAsrWordsResultItem();
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
