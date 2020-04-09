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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output of speech keyword recognition.
 *
 * @method array getResultSet() Obtain Speech keyword recognition result set.
 * @method void setResultSet(array $ResultSet) Set Speech keyword recognition result set.
 */
class AiRecognitionTaskAsrWordsResultOutput extends AbstractModel
{
    /**
     * @var array Speech keyword recognition result set.
     */
    public $ResultSet;

    /**
     * @param array $ResultSet Speech keyword recognition result set.
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
    }
}
