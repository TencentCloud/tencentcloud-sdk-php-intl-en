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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES dictionary information
 *
 * @method array getMainDict() Obtain List of non-stop words
 * @method void setMainDict(array $MainDict) Set List of non-stop words
 * @method array getStopwords() Obtain List of stop words
 * @method void setStopwords(array $Stopwords) Set List of stop words
 * @method array getQQDict() Obtain QQ dictionary list
 * @method void setQQDict(array $QQDict) Set QQ dictionary list
 * @method array getSynonym() Obtain Synonym dictionary list
 * @method void setSynonym(array $Synonym) Set Synonym dictionary list
 * @method string getUpdateType() Obtain Update dictionary type
 * @method void setUpdateType(string $UpdateType) Set Update dictionary type
 */
class EsDictionaryInfo extends AbstractModel
{
    /**
     * @var array List of non-stop words
     */
    public $MainDict;

    /**
     * @var array List of stop words
     */
    public $Stopwords;

    /**
     * @var array QQ dictionary list
     */
    public $QQDict;

    /**
     * @var array Synonym dictionary list
     */
    public $Synonym;

    /**
     * @var string Update dictionary type
     */
    public $UpdateType;

    /**
     * @param array $MainDict List of non-stop words
     * @param array $Stopwords List of stop words
     * @param array $QQDict QQ dictionary list
     * @param array $Synonym Synonym dictionary list
     * @param string $UpdateType Update dictionary type
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
        if (array_key_exists("MainDict",$param) and $param["MainDict"] !== null) {
            $this->MainDict = [];
            foreach ($param["MainDict"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->MainDict, $obj);
            }
        }

        if (array_key_exists("Stopwords",$param) and $param["Stopwords"] !== null) {
            $this->Stopwords = [];
            foreach ($param["Stopwords"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->Stopwords, $obj);
            }
        }

        if (array_key_exists("QQDict",$param) and $param["QQDict"] !== null) {
            $this->QQDict = [];
            foreach ($param["QQDict"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->QQDict, $obj);
            }
        }

        if (array_key_exists("Synonym",$param) and $param["Synonym"] !== null) {
            $this->Synonym = [];
            foreach ($param["Synonym"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->Synonym, $obj);
            }
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }
    }
}
