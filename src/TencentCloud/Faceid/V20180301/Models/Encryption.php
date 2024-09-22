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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method array getEncryptList() Obtain 
 * @method void setEncryptList(array $EncryptList) Set 
 * @method string getCiphertextBlob() Obtain 
 * @method void setCiphertextBlob(string $CiphertextBlob) Set 
 * @method string getIv() Obtain 
 * @method void setIv(string $Iv) Set 
 * @method string getAlgorithm() Obtain 
 * @method void setAlgorithm(string $Algorithm) Set 
 * @method array getTagList() Obtain 
 * @method void setTagList(array $TagList) Set 
 */
class Encryption extends AbstractModel
{
    /**
     * @var array 
     */
    public $EncryptList;

    /**
     * @var string 
     */
    public $CiphertextBlob;

    /**
     * @var string 
     */
    public $Iv;

    /**
     * @var string 
     */
    public $Algorithm;

    /**
     * @var array 
     */
    public $TagList;

    /**
     * @param array $EncryptList 
     * @param string $CiphertextBlob 
     * @param string $Iv 
     * @param string $Algorithm 
     * @param array $TagList 
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
        if (array_key_exists("EncryptList",$param) and $param["EncryptList"] !== null) {
            $this->EncryptList = $param["EncryptList"];
        }

        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("Iv",$param) and $param["Iv"] !== null) {
            $this->Iv = $param["Iv"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }
    }
}
