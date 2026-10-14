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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES library information
 *
 * @method array getMainDict() Obtain List of enabled word dictionaries
 * @method void setMainDict(array $MainDict) Set List of enabled word dictionaries
 * @method array getStopwords() Obtain List of stopword dictionaries
 * @method void setStopwords(array $Stopwords) Set List of stopword dictionaries
 * @method array getQQDict() Obtain List of QQ word segmentation dictionaries
 * @method void setQQDict(array $QQDict) Set List of QQ word segmentation dictionaries
 * @method array getSynonym() Obtain List of synonym dictionaries
 * @method void setSynonym(array $Synonym) Set List of synonym dictionaries
 * @method string getUpdateType() Obtain Update the dictionary type
 * @method void setUpdateType(string $UpdateType) Set Update the dictionary type
 * @method array getAnsjMain() Obtain List of ansj enabled word dictionaries
 * @method void setAnsjMain(array $AnsjMain) Set List of ansj enabled word dictionaries
 * @method array getAnsjStop() Obtain List of ansj stopword dictionaries
 * @method void setAnsjStop(array $AnsjStop) Set List of ansj stopword dictionaries
 * @method array getAnsjAmbiguity() Obtain List of ansj ambiguity lexicons
 * @method void setAnsjAmbiguity(array $AnsjAmbiguity) Set List of ansj ambiguity lexicons
 * @method array getAnsjSynonyms() Obtain List of ansj synonym dictionaries
 * @method void setAnsjSynonyms(array $AnsjSynonyms) Set List of ansj synonym dictionaries
 */
class EsDictionaryInfo extends AbstractModel
{
    /**
     * @var array List of enabled word dictionaries
     */
    public $MainDict;

    /**
     * @var array List of stopword dictionaries
     */
    public $Stopwords;

    /**
     * @var array List of QQ word segmentation dictionaries
     */
    public $QQDict;

    /**
     * @var array List of synonym dictionaries
     */
    public $Synonym;

    /**
     * @var string Update the dictionary type
     */
    public $UpdateType;

    /**
     * @var array List of ansj enabled word dictionaries
     */
    public $AnsjMain;

    /**
     * @var array List of ansj stopword dictionaries
     */
    public $AnsjStop;

    /**
     * @var array List of ansj ambiguity lexicons
     */
    public $AnsjAmbiguity;

    /**
     * @var array List of ansj synonym dictionaries
     */
    public $AnsjSynonyms;

    /**
     * @param array $MainDict List of enabled word dictionaries
     * @param array $Stopwords List of stopword dictionaries
     * @param array $QQDict List of QQ word segmentation dictionaries
     * @param array $Synonym List of synonym dictionaries
     * @param string $UpdateType Update the dictionary type
     * @param array $AnsjMain List of ansj enabled word dictionaries
     * @param array $AnsjStop List of ansj stopword dictionaries
     * @param array $AnsjAmbiguity List of ansj ambiguity lexicons
     * @param array $AnsjSynonyms List of ansj synonym dictionaries
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

        if (array_key_exists("AnsjMain",$param) and $param["AnsjMain"] !== null) {
            $this->AnsjMain = [];
            foreach ($param["AnsjMain"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjMain, $obj);
            }
        }

        if (array_key_exists("AnsjStop",$param) and $param["AnsjStop"] !== null) {
            $this->AnsjStop = [];
            foreach ($param["AnsjStop"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjStop, $obj);
            }
        }

        if (array_key_exists("AnsjAmbiguity",$param) and $param["AnsjAmbiguity"] !== null) {
            $this->AnsjAmbiguity = [];
            foreach ($param["AnsjAmbiguity"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjAmbiguity, $obj);
            }
        }

        if (array_key_exists("AnsjSynonyms",$param) and $param["AnsjSynonyms"] !== null) {
            $this->AnsjSynonyms = [];
            foreach ($param["AnsjSynonyms"] as $key => $value){
                $obj = new DictInfo();
                $obj->deserialize($value);
                array_push($this->AnsjSynonyms, $obj);
            }
        }
    }
}
