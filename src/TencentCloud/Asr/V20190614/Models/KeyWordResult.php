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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Keyword recognition result.
 *
 * @method string getKeyWordLibID() Obtain Keyword library ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyWordLibID(string $KeyWordLibID) Set Keyword library ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKeyWordLibName() Obtain Keyword library name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyWordLibName(string $KeyWordLibName) Set Keyword library name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKeyWords() Obtain Matching keywords.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyWords(array $KeyWords) Set Matching keywords.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class KeyWordResult extends AbstractModel
{
    /**
     * @var string Keyword library ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyWordLibID;

    /**
     * @var string Keyword library name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyWordLibName;

    /**
     * @var array Matching keywords.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyWords;

    /**
     * @param string $KeyWordLibID Keyword library ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KeyWordLibName Keyword library name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $KeyWords Matching keywords.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("KeyWordLibID",$param) and $param["KeyWordLibID"] !== null) {
            $this->KeyWordLibID = $param["KeyWordLibID"];
        }

        if (array_key_exists("KeyWordLibName",$param) and $param["KeyWordLibName"] !== null) {
            $this->KeyWordLibName = $param["KeyWordLibName"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }
    }
}
