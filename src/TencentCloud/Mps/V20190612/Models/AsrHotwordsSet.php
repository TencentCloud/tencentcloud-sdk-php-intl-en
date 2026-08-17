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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned result set of hotword lexicon query.
 *
 * @method string getHotwordsId() Obtain 
 * @method void setHotwordsId(string $HotwordsId) Set 
 * @method integer getStatus() Obtain 
 * @method void setStatus(integer $Status) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method integer getWordCount() Obtain 
 * @method void setWordCount(integer $WordCount) Set 
 * @method string getFileName() Obtain 
 * @method void setFileName(string $FileName) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method string getUpdateTime() Obtain 
 * @method void setUpdateTime(string $UpdateTime) Set 
 * @method integer getType() Obtain 
 * @method void setType(integer $Type) Set 
 */
class AsrHotwordsSet extends AbstractModel
{
    /**
     * @var string 
     */
    public $HotwordsId;

    /**
     * @var integer 
     */
    public $Status;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var integer 
     */
    public $WordCount;

    /**
     * @var string 
     */
    public $FileName;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @var integer 
     */
    public $Type;

    /**
     * @param string $HotwordsId 
     * @param integer $Status 
     * @param string $Name 
     * @param integer $WordCount 
     * @param string $FileName 
     * @param string $CreateTime 
     * @param string $UpdateTime 
     * @param integer $Type 
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
        if (array_key_exists("HotwordsId",$param) and $param["HotwordsId"] !== null) {
            $this->HotwordsId = $param["HotwordsId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WordCount",$param) and $param["WordCount"] !== null) {
            $this->WordCount = $param["WordCount"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
